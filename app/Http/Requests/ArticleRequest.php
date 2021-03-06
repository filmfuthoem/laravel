<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required|min:5|max:25',
			'body' => 'required',
			'published_at' => 'required|date'
		];
	}

	public function message(){
		 return [    
		 'required'=>'You have to enter some data to :attribute',    
		 'title.required'=>'Please enter the title of this article'   
		 ];
	}

}
