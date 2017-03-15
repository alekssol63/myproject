<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Theme;
use App\Admin;
use App\AnswerText;
use App\Question;
use App\QuestionText;



class MainController extends Controller
{
    public function ThemesView(){
      //Выбрать из базы темы и отправить их в themes
      $themes = Theme::all();
    /*  $admins = Admin::all();
      $answers = AnswerText::all();
      $questions = Question::all();
      $qtexts = QuestionText::all();
    */


      return view('themes',['themes'=>$themes]);


        return view('themes');
    }
    public function ThemeCreate(){
      //Выбрать из базы темы и отправить их в themes
        return view('newtheme');
    }
      public function Theme($theme){
        $questions = Question::join('question_texts', 'questions.id', '=', 'question_texts.id')
              ->select('question_texts.question_text','questions.author','questions.date','questions.status')->where('theme_id',$theme)
              ->get();
        //select(['author'])->where('theme_id',1)->get();
       //dd($questions);
       dd(count($questions));




        return view('theme',['question'=>$questions]);
    }

    public function Question(){
      $questions = Question::join('question_texts', 'questions.id', '=', 'question_texts.id')
            ->select('question_texts.question_text','questions.author')->where('theme_id',1)
            ->get();
      //select(['author'])->where('theme_id',1)->get();
    //  dd($questions);
      return view('question');
  }

}
