<?
$subject_val = "[OMPI users] Derived data in Java";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 10:27:28 2014" -->
<!-- isoreceived="20141009142728" -->
<!-- sent="Thu, 9 Oct 2014 15:27:25 +0100" -->
<!-- isosent="20141009142725" -->
<!-- name="Atsugua Ada" -->
<!-- email="smc7910_at_[hidden]" -->
<!-- subject="[OMPI users] Derived data in Java" -->
<!-- id="CAOVgqRx-DvnDj=eQNCf__EK0Qc+mQdteQooJak7G07OK9BhqJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Derived data in Java<br>
<strong>From:</strong> Atsugua Ada (<em>smc7910_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-09 10:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25481.php">Rolf vandeVaart: "[OMPI users] CUDA-aware Users"</a>
<li><strong>Previous message:</strong> <a href="25479.php">Marc-Andre Hermanns: "[OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<li><strong>Reply:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I am using Open-MPI 1.8.3 for Java. I would like to know how to
<br>
create a derived datatype that enables the sending of an array of complex
<br>
data (objects, strings, etc.) to each processor. In fact, I want to create
<br>
an array of string or objects and sending a part of this array to each
<br>
proccess.
<br>
<p>E.g., I created the next class:
<br>
<p>*class Data{
<br>
&nbsp;&nbsp;&nbsp;String data1;
<br>
&nbsp;&nbsp;&nbsp;String data2;
<br>
<p>&nbsp;&nbsp;&nbsp;public Data(String d1, String d2)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.data1 = d1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.data2 = d2;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
}*
<br>
<p>and then a array of Data objects is created
<br>
<p>*     Data[] myData = new Data[4];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myData[0] = new Data(&quot;d1&quot;, &quot;this is a test&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myData[3] = new Data(&quot;the third data&quot;, &quot;this is another test&quot;);*
<br>
<p>How can I create the datatype to send, e.g., myData[0] and [1] to
<br>
proc#1 and the remaining to the proc#2?
<br>
<p>Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25481.php">Rolf vandeVaart: "[OMPI users] CUDA-aware Users"</a>
<li><strong>Previous message:</strong> <a href="25479.php">Marc-Andre Hermanns: "[OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<li><strong>Reply:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
