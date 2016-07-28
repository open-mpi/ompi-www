<?
$subject_val = "Re: [OMPI users] Calling a variable from another processor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 06:29:05 2014" -->
<!-- isoreceived="20140109112905" -->
<!-- sent="Thu, 9 Jan 2014 12:29:00 +0100 (CET)" -->
<!-- isosent="20140109112900" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling a variable from another processor" -->
<!-- id="1637514019.190684.1389266940214.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAL_eiiR2NUa529PanC3yT5dRpv9vqqdMf+BuhxHX9gSmc+wgUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling a variable from another processor<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 06:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23343.php">Pradeep Jha: "[OMPI users] Calling a variable from another processor"</a>
<li><strong>In reply to:</strong> <a href="23343.php">Pradeep Jha: "[OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I suggest you have a look onto the MPI one-sided functionality (Section 11 of the MPI Spec 3.0).
<br>
Create a window to allow the other processes to access the arrays A directly via MPI_Get/MPI_Put.
<br>
Be aware of synchronization which you have to implement via MPI_Win_fence or manual locking.
<br>
<p>Regards
<br>
Christoph
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
----- Urspr&#195;&#188;ngliche Mail -----
Von: &quot;Pradeep Jha&quot; &lt;pradeep_at_[hidden]&gt;
An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
Gesendet: Donnerstag, 9. Januar 2014 12:10:51
Betreff: [OMPI users] Calling a variable from another processor
I am writing a parallel program in Fortran77. I have the following problem: 1) I have N number of processors.
2) Each processor contains an array A of size S.
3) Using some function, on every processor (say rank X), I calculate the value of two integers Y and Z, where Z&lt;S. (the values of Y and Z are different on every processor)
4) I want to get the value of A(Z) on processor Y to processor X. 
I thought of first sending the numerical value X to processor Y from processor X and then sending A(Z) from processor Y to processor X. But it is not possible as processor Y does not know the numerical value X and so it won't know from which processor to receive the numerical value X from. 
I tried but I haven't been able to come up with any code which can implement this action. So I am not posting any codes. 
Any suggestions? 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23343.php">Pradeep Jha: "[OMPI users] Calling a variable from another processor"</a>
<li><strong>In reply to:</strong> <a href="23343.php">Pradeep Jha: "[OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling a variable from another processor"</a>
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
