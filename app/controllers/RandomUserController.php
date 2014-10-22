<?php
/*The class RandomUserController extends the BaseController class. It has a method showUsers which -
   1) collects the input(Number of users,checkbox inputs) from the form on Random User view page.
   2) validates the form text input to see if its numeric and greater than or equal to 1.
   3) If the validation passes, it uses the fzaninotto/faker package to create an object of class Faker\Factory by 
      calling the static method create().
   4) The object created calls different class attributes(like Name,text,datetime) to create Fake names,profiles,
       birthdays which are returned as an array to Random User View.
   5) A random XKCD style password is also created for the fake users and returned to Random User view. 
      The password created has random word length and using a rand() php function it decides whether to add a 
      random number or symbol at the random position in the password.
*/
class RandomUserController extends BaseController
{
	public function showUsers()
	{
		Input::flash();

		$faker = Faker\Factory::create();
    $num_of_users =  Input::get('users');
    $form_data = Input::all();
    $rules = array('users' => array('numeric','min:1','required'));
     $validator = Validator::make($form_data,$rules);
     if($validator->fails())
     {
        return Redirect::to('/random-user')->withErrors($validator);
     }
     $words = File::get(app_path().'/database/words.json');
     $words = json_decode($words,true);
     $numbers = array(0,1,2,3,4,5,6,7,8,9);
     $symbols = array("!","@","#","$","%","&","^","*");

        for($i=0; $i < $num_of_users; $i++)
        {
        	
            	$data[$i]['fakerName'] = $faker->name;
            	
            	if(Input::has('profile'))
            	{
            		$data[$i]['fakerProfile'] = $faker->text;
            	}
            	if(Input::has('birthday'))
            	{
            		$data[$i]['fakerBirthday'] = $faker->dateTimeThisCentury->format('Y-m-d');
            	}
              if(Input::has('password'))
              {
                   $password_string = "";

                   $final_list ="";

                   $num_of_words = rand(1,5);

                   $rand_keys = array_rand($words, $num_of_words);
                           
                            if($num_of_words > 1)
                             {
                             foreach($rand_keys as $key => $val)
                                 {
                                    $final_list[] =  $words[$val];
                                 }
                             }
                            else
                             {
                                   $final_list[] = $words[$rand_keys];
                             }

                             $want_number_in_password = rand(0,1);

                             if($want_number_in_password == 1)
                             {       
                               $num = array_rand($numbers,1);
                                
                               //random positon is computed using rand() function
                               $random_pos_number = rand(0,count($final_list)-1);

                               foreach($final_list as $key => $val)
                                 {
                                    if($key == $random_pos_number)
                                       {
                                       $final_list[$key] = $final_list[$key].$numbers[$num];
                                       }  
                                 } 
                             }
                             $want_symbol_in_password = rand(0,1);

                             if($want_symbol_in_password == 1)
                               {
                                 $sym = array_rand($symbols,1); 

                                 //random positon is computed using rand() function
                               $random_pos_symbol = rand(0,count($final_list)-1);

                               foreach($final_list as $key => $val)
                                 {
                                    if($key == $random_pos_symbol)
                                       {
                                       $final_list[$key] = $final_list[$key].$symbols[$sym];
                                       }  
                                 } 
                                   
                               }
                               $password_string = implode("-",$final_list);

                               $data[$i]['xkcdPassword'] = $password_string;
                    }
        	
        }
        return View::make('randomUserGenerator',array('data' => $data));

	}
}