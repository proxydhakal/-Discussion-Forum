<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{
public function addquestion(Request $request){
$this->validate($request,[
'question'=>'required',
'answer'=> 'required',
]);
$question = new Question;
$question->question = $request->input('question');
$question->answer = $request->input('answer');
$question-> save();
return redirect('/question/submit')->with('sucess','Question Posted');
}
public function checkanswer(Request $request){
// $name = $request->input('answer');
	$this->validate($request,[
'answer'=> 'required',
]);
if (Question::where('answer', '=', Input::get('answer'))->exists()) {
return redirect('/home')->with('suces','Correct Answer,Good Luck have a Nice Day!');
}
else {
return redirect('/home')->with('errors','Wrong Answer, Bad Luck Try again!');
}
}
public function getQuestion(){

    	$questions =Question::all();
   return view('/questionofday')->with('questions',$questions);
    }
    public function delQuestions($id){

        $messages = Question::where('id',$id);

        $messages->delete();
        return redirect('/question/submit')->with('sucess','Delete Sucessfully');
    }
}