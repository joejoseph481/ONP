&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;style&gt;
.emsg{
color: red;
}
.hidden {
visibility:hidden;
}
.emsg1{
color: red;
}
.hidden1 {
visibility:hidden;
}
.emsg2{
color: red;
}
.hidden2 {
visibility:hidden;
}

.emsg3{
color: red;
}
.hidden3 {
visibility:hidden;
}
.emsg4{
color: red;
}
.hidden4 {
visibility:hidden;
}
.emsg5{
color: red;
}
.hidden5 {
visibility:hidden;
}
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;
src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
$(document).ready(function(){
var $regexname=/^([a-z A-Z]{3,16})$/;
var $regexphone=/^[0-9]{10}$/;
var $regexemail=/^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$/;

var $regexunme=/^[a-zA-Z0-9]{3,}$/;
var $regexpass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

$(&quot;#nm1&quot;).blur(function(){
if (!$(this).val().match($regexname)) {
// there is a mismatch, hence show the error message
$(&#39;.emsg&#39;).removeClass(&#39;hidden&#39;);
$(&#39;.emsg&#39;).show();
}
else{
// else, do not display message
$(&#39;.emsg&#39;).addClass(&#39;hidden&#39;);
}
});

$(&quot;#ph1&quot;).blur(function(){
if (!$(this).val().match($regexphone)) {

$(&#39;.emsg1&#39;).removeClass(&#39;hidden1&#39;);
$(&#39;.emsg1&#39;).show();
}
else{

$(&#39;.emsg1&#39;).addClass(&#39;hidden1&#39;);
}
});

$(&quot;#em1&quot;).blur(function(){
If (!$(this).val().match($regexemail)) {

$(&#39;.emsg2&#39;).removeClass(&#39;hidden2&#39;);
$(&#39;.emsg2&#39;).show();
}
else{

$(&#39;.emsg2&#39;).addClass(&#39;hidden2&#39;);
}
});
$(&quot;#unm1&quot;).blur(function(){
if(!$(this).val().match($regexunme)) {
$(&#39;.emsg3&#39;).removeClass(&#39;hidden3&#39;);
$(&#39;.emsg3&#39;).show();
}
else{

$(&#39;.emsg3&#39;).addClass(&#39;hidden3&#39;);
}
});
$(&quot;#ps1&quot;).blur(function(){
var pass1=$(&quot;#ps1&quot;).val();
if (!$(this).val().match($regexpass)) {

$(&#39;.emsg4&#39;).removeClass(&#39;hidden4&#39;);
$(&#39;.emsg4&#39;).show();
}
else{
$(&#39;.emsg4&#39;).addClass(&#39;hidden4&#39;);
}
});
$(&quot;#ps2&quot;).blur(function (){
Var pass2=$(&quot;#ps2&quot;).val();
if (($(&quot;#ps1&quot;).val()) !=($(&quot;#ps2&quot;).val())) {
$(&#39;.emsg5&#39;).removeClass(&#39;hidden5&#39;);
$(&#39;.emsg5&#39;).show();
}

else{
$(&#39;.emsg5&#39;).addClass(&#39;hidden5&#39;);
}

});
});
&lt;/script&gt;
&lt;meta charset=&quot;utf-8&quot;&gt;
&lt;title&gt;register&lt;/title&gt;
&lt;link rel=&quot;stylesheet&quot;
href=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css&quot;
integrity=&quot;sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2M
Zw1T&quot; crossorigin=&quot;anonymous&quot;&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;div class=&quot; d-flex justify-content-center&quot;&gt;
&lt;form method=&quot;POST&quot; action=&quot;regtb.php&quot; name=&quot;regForm&quot;&gt;
&lt;fieldset style=&quot;width:600px;&quot; &gt;
&lt;table class=&quot;table table-hover table-sm&quot;&gt;
&lt;tr&gt;
&lt;th colspan=&quot;2&quot; style=&quot;text-align:center&quot;;&gt;Registration&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th&gt;Enter Name:&lt;/th&gt;
&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;nme1&quot; class=&quot;form-control&quot; onblur=&quot;valNm()&quot;
id=&quot;nm1&quot; required&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;&lt;span class=&quot;emsg hidden&quot;&gt;Please Enter a
Valid Name&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;th&gt;Enter phone:&lt;/th&gt;
&lt;td&gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;phone&quot; onblur=&quot;valPh()&quot;
id=&quot;ph1&quot; required&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;&lt;span class=&quot;emsg1 hidden1&quot;&gt;Please Enter a
Valid Phone number&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th&gt;Enter Email:&lt;/th&gt;
&lt;td&gt;&lt;input type=&quot;email&quot; class=&quot;form-control&quot; name=&quot;email&quot; onblur=&quot;valEm()&quot;
id=&quot;em1&quot; required&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;&lt;span class=&quot;emsg2 hidden2&quot;&gt;Please Enter a
Valid Email&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;

&lt;th&gt;Enter Username:&lt;/th&gt;
&lt;td&gt;&lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;uname&quot; id=&quot;unm1&quot;
onblur=&quot;valun()&quot; required&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;&lt;span class=&quot;emsg3 hidden3&quot;&gt;Please
Enter a Valid Username&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th&gt;Set Password:&lt;/th&gt;
&lt;td&gt;&lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;upass&quot; id=&quot;ps1&quot;
onblur=&quot;valPs()&quot; required&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;&lt;span class=&quot;emsg4 hidden4&quot;&gt;Please
Enter a Valid Password&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th&gt;ReEnter Password:&lt;/th&gt;
&lt;td&gt;&lt;input type=&quot;password&quot; class=&quot;form-control&quot; name=&quot;cupass&quot; id=&quot;ps2&quot;
onblur=&quot;valPs1()&quot; required&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;&lt;span class=&quot;emsg5 hidden5&quot;&gt;Enter
same Password&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
&lt;th colspan=&quot;2&quot; Style=&quot;text-align:center&quot;; &gt;&lt;input type=&quot;submit&quot; value=&quot;Submit&quot;
class=&quot;btn btn-primary&quot;id=&quot;btn1&quot;&gt;&lt;/th&gt;
&lt;/tr&gt;
&lt;/table&gt;&lt;/fieldset&gt;
&lt;/form&gt;&lt;/div&gt;
&lt;/body&gt;&lt;/html&gt;
