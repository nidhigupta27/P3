<?php
/*The class LoremIpsumController extends the BaseController class. It has a method showParagraphs which -
   1) collects the input(Number of Paragraphs) from the form on Lorem Ipsum view page.
   2) validates the form input to see if its numeric and greater than or equal to 1.
   3) If the validation passes, it uses the badcow/lorem-ipsum package to create an object of class Badcow\LoremIpsum\Generator.
   4) The object created calls the function getParagraphs to generate filler paragraphs which are then returned to the Lorem Ipsum View.
   */
class LoremIpsumController extends BaseController
{
	public function showParagraphs()
	{
	
        Input::flash();
        $num_of_para =  Input::get('paragraphs');
        $form_data = Input::all();

        $rules = array('paragraphs' => array('numeric','min:1','required'));
        
        $validator = Validator::make($form_data,$rules);

        if($validator->fails())
           {
                return Redirect::to('/lorem-ipsum')->withErrors($validator);
           }

	    $generator = new Badcow\LoremIpsum\Generator();

        $lorem_paragraphs = $generator->getParagraphs($num_of_para);

        $lorem_paragraphs= implode('<p>', $lorem_paragraphs);

        $data['lorem_paragraphs'] = $lorem_paragraphs;  
      
	     return View::make('loremIpsumGenerator',$data);
	}
}