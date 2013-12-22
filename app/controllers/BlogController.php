<?php

class BlogController extends \BaseController {

	public function articles()
	{
		$articles = Blog::orderBy('id', 'DESC')->paginate(4);

		return View::make('blog.articles', compact('articles'));
	}

	public function newArticle()
	{
		return View::make('blog.newArticle');
	}

	public function detail($id)
	{
		$article = Blog::with('user')->where('id', '=', $id)->first();

		if( !$article ) {
			return 'MAKALE BULUNAMADI!';
		}

		return View::make('blog.detail', compact('article'));
	}

	public function insertArticle()
    {
        $postData = Input::all();
        
        $rules = array(
        'title' => 'required',
        'content' => 'required'
        );
        
        $messages = array(
        'title.required' => 'Lütfen makale başlığını girin',
        'content.required' => 'Lütfen makale detaylarını girin'
        );
        
        $validator = Validator::make($postData, $rules, $messages);

        if ($validator->fails()) {
            
            return Redirect::route('addArticle')->withInput()->withErrors($validator->messages());
            
        }
        
        $insert = Blog::create(array(
        'user_id' => Auth::user()->id,
        'title' => e($postData['title']),
        'content' => e($postData['content'])
        ));
        
        if ( ! $insert) {
            return Redirect::route('addArticle')->withInput()->withErrors(array('Makaleniz eklenirken teknik bir sorun oluştu...'));
        }
        
        return Redirect::route('articles');
    }

}