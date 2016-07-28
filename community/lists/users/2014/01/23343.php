<?
$subject_val = "[OMPI users] Calling a variable from another processor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 06:11:12 2014" -->
<!-- isoreceived="20140109111112" -->
<!-- sent="Thu, 9 Jan 2014 20:10:51 +0900" -->
<!-- isosent="20140109111051" -->
<!-- name="Pradeep Jha" -->
<!-- email="pradeep_at_[hidden]" -->
<!-- subject="[OMPI users] Calling a variable from another processor" -->
<!-- id="CAL_eiiR2NUa529PanC3yT5dRpv9vqqdMf+BuhxHX9gSmc+wgUg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Calling a variable from another processor<br>
<strong>From:</strong> Pradeep Jha (<em>pradeep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 06:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23342.php">John Hearns: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am writing a parallel program in Fortran77. I have the following problem:
<br>
<p>1) I have N number of processors.
<br>
2) Each processor contains an array A of size S.
<br>
3) Using some function, on every processor (say rank X), I calculate
<br>
the value of two integers Y and Z, where Z&lt;S. (the values of Y and Z
<br>
are different on every processor)
<br>
4) I want to get the value of A(Z) on processor Y to processor X.
<br>
<p>I thought of first sending the numerical value X to processor Y from
<br>
processor X and then sending A(Z) from processor Y to processor X. But it
<br>
is not possible as processor Y does not know the numerical value X and so
<br>
it won't know from which processor to receive the numerical value X from.
<br>
<p>I tried but I haven't been able to come up with any code which can
<br>
implement this action. So I am not posting any codes.
<br>
<p>Any suggestions?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23342.php">John Hearns: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
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
