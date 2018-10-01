@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Rokkitt|Yeseva+One" rel="stylesheet">
<div class="front">
    <h1>HTML and CSS Quiz</h1>
    <button type="button" id="start">Start</button>
</div>
<div class="quiz">
    <p id="num"></p>
    <div id="q"></div><div class="arrow"></div><br>
    <div class="radio">
        <div id="op1"></div>
        <div id="op2"></div>
        <div id="op3"></div>
        <div id="op4"></div>
    </div><br>
    <center><button type="button" id="sub">Submit</button></center>
</div>
<div class="result" >
    <div class="score"></div>
    <br>
    <div class="message"></div>
    <button type="button" id="an">Click here to see answers</button>
</div>
<div class="answers">
    <p class="qa">1.Which tag is used to create clickable link?</p>
    <p >Ans:<span id="a1">&lt;a&gt;</span></p>
    <p class="qa">2.Which tag is used to specify a list of prefined options for input controls?</p>
    <p >Ans:<span id="a2">&lt;datalist&gt;</p>
    <p class="qa">3. Which HTML element is used to display a scalar measurement within a range?</p>
    <p >Ans:<span id="a3">&lt;meter&gt;</span></p>
    <p class="qa">4.Choose the correct HTML element to define important text?</p>
    <p >Ans:<span id="a4">&lt;strong&gt;</span></p>
    <p class="qa">5.______ element in HTML5 is used to indicate that text has been added to the document.?</p>
    <p>Ans:<span id="a5">&lt;ins&gt;</span></p>
    <p class="qa">6.______ attribute used in &lt;table&gt; element sets the width, in pixels, between the edge of a cell and its content</p>
    <p>Ans:<span id="a6">cellpadding</span></p>
    <p class="qa">7.Which attribute specifies the stack order of an element?</p>
    <p >Ans:<span id="a7">z-index</span></p>
    <p class="qa">8.Which property controls scrolling of an image in background? </p>
    <p >Ans:<span id="a8">background-attachment.</span></p>
    <p class="qa">9.What is default value of position property?</p>
    <p >Ans:<span id="a9">static</span></p>
    <p class="qa">10.Which CSS has highest priority?</p>
    <p>Ans:<span id="a10">inline</p>
</div>
<style type="text/css">
body{
background-color:#71d1f4;
}
#next{
display:none;
}
#sub{
display: none;
}
.front{
margin:2%;
outline:5px solid #71d1f4;
padding:5%;
width:100%;
height:505px;
padding-top:40%;
text-align: center;
background-color: white;
color:#71d1f4;
font-family: 'Yeseva One', cursive;
}
.answers{
margin:2%;
margin-top:5%;
padding:5%;
align-self: center;
background-color: white;
display:none;
color:#71d1f4;
border:5px solid white;
font-family: 'Rokkitt', serif;
font-size:20px;
}
.qa{
color:#71d1f4;
}
.quiz{
margin:2%;
margin-top:5%;
padding:5%;
align-self: center;
background-color: #71d1f4;
display:none;
color:#40c2f2;
border:5px solid white;
font-family: 'Rokkitt', serif;
}
.result{
margin:2%;
padding:5%;
padding-top:40%;
height:500px;
text-align: center;
background-color: white;
display: none;
font-family: 'Rokkitt', serif;
}
input[type="radio"] {
border: 0;
clip: rect(0 0 0 0);
height: 1px;
margin: -1px;
overflow: hidden;
padding: 0;
position: absolute;
width: 1px;
}
.radio{
padding-bottom:4%;
}
.radio label:before {
content: "";
display: inline-block;
width: 15px;
height:15px;
margin-right: 0.5em;
vertical-align: -3px;
border: 2px solid #666666;
padding: 0.13em;
background-color: transparent;
background-clip: content-box;
}
.radio label {
margin-right: 1em;
}
.radio input:hover + label:before {
border-color: #71d1f4;
}
.radio input:checked + label:before {
background-color: #71d1f4;
border-color: #71d1f4;
}
.arrow{
width: 0;
height: 0;
border-left: 12px solid transparent;
border-right: 12px solid transparent;
border-top: 24px solid white;
position: relative;
left:30px;
}
#q{
background-color: white;
padding-top:10px;
padding-left:10px;
padding-bottom:10px;
font-size:22px;
font-weight: bold;
border-radius:5px;
}
#op1,#op2,#op3,#op4{
background-color: white;
margin-bottom:2.5%;
padding:5px;
padding-left: 4%;
border-radius:5px;
font-size:22px;
}
#op1:hover,#op2:hover,#op3:hover,#op4:hover{
background-color:#ffff99;
}
#num{
background-color:white;
font-size:20px;
border-radius:30px;
padding-left:2%;
color:#40c2f2;
width:45px;
}
#sub{
background-color: white;
padding: 8px;
border-radius:5px;
border:none;
width:200px;
font-size:20px;
color: #40c2f2;
}
#start{
background-color: #71d1f4;
color:white;
padding:8px;
margin-bottom:20px;
font-size:20px;
border:none;
width:200px;
border-radius:5px;
}
.score{
font-size:21px;
font-weight: bolder;
color: #40c2f2;
}
.message{
font-size: 20px;
color: #40c2f2;
}
.answers{
display: none;
}
#a1,#a2,#a3,#a3,#a4,#a5,#a6,#a7,#a8,#a9,#a10{
color:#80ff00;
font-weight: bold;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
var que;
var ans;
var right;
var i=0;
var score=0;
var que1={que:"Which tag is used to create clickable link?",
ans:["&lt;hyperlink&gt;","&lt;a&gt;","&lt;link&gt;","&lt;source&gt;"],
right:"1"};
var que2={que:"Which tag is used to specify a list of prefined options for input controls?",
ans:["&lt;embed&gt;","&lt;source&gt;","&lt;li&gt;","&lt;datalist&gt;"],
right:"3"};
var que3={que:" Which HTML element is used to display a scalar measurement within a range?",
ans:["&lt;meter&gt;","&lt;range&gt;","&lt;scalar&gt;","&lt;progress&gt;"],    right:"0"};
var que4={que:"Choose the correct HTML element to define important text?",
ans:["&lt;important&gt;","&lt;strong&gt;","&lt;imp&gt;","&lt;b&gt;"],
right:"1"};
var que5={que:"______ element in HTML5 is used to indicate that text has been added to the document.?",
ans:["&lt;fill&gt;","&lt;insert&gt;","&lt;add&gt;","&lt;ins&gt;"],
right:"3"};
var que6={que:"______ attribute used in <table> element sets the width, in pixels, between the edge of a cell and its content",
    ans:["cellpadding"," cellspacing","colspacing","edgespacing"],
    right:"0"};
    var que7={que:"Which attribute specifies the stack order of an element?",ans:["x-index","y-index","z-index","xy-index"],right:"2"};
    var que8={que:"Which property controls scrolling of an image in background? ",ans:["background-fixed","background-scroll","background-scrolling","background-attachment"],right:"3"};
    var que9={que:"What is default value of position property?",ans:["static","fixed","relative","absolute"],right:"0"};
    var que10={que:"Which CSS has highest priority?",ans:["inline","internal","external","Each have equal priority"],right:"0"};
    var quelst=[que1,que2,que3,que4,que5,que6,que7,que8,que9,que10];
    var wrong=[];
    $("#start").click(function(){
    $(".front").hide();
    $("#sub").show();
    $(".quiz").show();
    $("#num").text(i+1+"/"+quelst.length)
    $("#q").text(quelst[i].que);
    $("#op1").html("<input type='radio' name='opt' id='o1' value='0'><label for='o1'>"+quelst[i].ans[0])+"</label>";
    $("#op2").html("<input type='radio' name='opt' id='o2' value='1'><label for='o2'>"+quelst[i].ans[1])+"</label>";
    $("#op3").html("<input type='radio' name='opt' id='o3' value='2'><label for='o3'>"+quelst[i].ans[2])+"</label>";
    $("#op4").html("<input type='radio' name='opt' id='o4' value='3'><label for='o4'>"+quelst[i].ans[3])+"</label>";
    
    });
    $("#sub").click(function(){
    
    
    if($("input[name='opt']:checked").val()!=null){
    if($("input[name='opt']:checked").val()==quelst[i].right){
    score++;
    }
    else{
    wrong.push(i);
    }
    $("#sub").hide();
    $(".score").text(score);
    if(i!=quelst.length-1){
    next();
    }
    else{
    reslt();
    }
    }
    else{
    $(".p").text("Select One option");
    }
    });
    function next(){
    if(i!=(quelst.length)-1){
    i++;
    }
    $("#q").text(quelst[i].que);
    $("#op1").html("<input type='radio' name='opt' id='o1' value='0'><label for='o1'>"+quelst[i].ans[0])+"</label>";
    $("#op2").html("<input type='radio' name='opt' id='o2' value='1'><label for='o2'>"+quelst[i].ans[1])+"</label>";
    $("#op3").html("<input type='radio' name='opt' id='o3' value='2'><label for='o3'>"+quelst[i].ans[2])+"</label>";
    $("#op4").html("<input type='radio' name='opt' id='o4' value='3'><label for='o4'>"+quelst[i].ans[3])+"</label>";
    $("#num").text(i+1+"/"+quelst.length);
    $("#sub").show();
    }
    function reslt(){
    $(".quiz").hide();
    $(".result").show();
    $(".score").text(score+"/"+quelst.length);
    if(score<=4){
    $(".message").text("Oh no!!You need to do better.");
    }
    else if(score<8){
    $(".message").text("Good.Dont stop studying.");
    }
    else{
    $(".message").text("Great!!You have really good knowledge of HTML and CSS.");
    }
    }
    $("#an").click(function(){
    $(".result").hide();
    $(".answers").show();
    if((wrong.toString()).search("0")!=-1){
    $("#a1").css('color','#ff6347');
    }
    if((wrong.toString()).search("1")!=-1){
    $("#a2").css('color','#ff6347');
    }
    if((wrong.toString()).search("2")!=-1){
    $("#a3").css('color','#ff6347');
    }
    if((wrong.toString()).search("3")!=-1){
    $("#a4").css('color','#ff6347');
    }
    if((wrong.toString()).search("4")!=-1){
    $("#a5").css('color','#ff6347');
    }
    if((wrong.toString()).search("5")!=-1){
    $("#a6").css('color','#ff6347');
    }
    if((wrong.toString()).search("6")!=-1){
    $("#a7").css('color','#ff6347');
    }
    if((wrong.toString()).search("7")!=-1){
    $("#a8").css('color','#ff6347');
    }
    if((wrong.toString()).search("8")!=-1){
    $("#a9").css('color','#ff6347');
    }
    if((wrong.toString()).search("9")!=-1){
    $("#a10").css('color','#ff6347');
    }
    
    });
    
    });
    </script>
    @endsection