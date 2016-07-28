<?
$subject_val = "[OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 03:02:29 2010" -->
<!-- isoreceived="20101203080229" -->
<!-- sent="Fri, 03 Dec 2010 09:02:14 +0100" -->
<!-- isosent="20101203080214" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="[OMPI users] difference between single and double precision" -->
<!-- id="4CF8A406.9000604_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 03:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14985.php">Daofeng Li: "[OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Dear OpenMPI users
<br>
<p>I am dealing with an arithmetic problem. In fact, I have two variants of 
<br>
my code: one in single precision, one in double precision. When I 
<br>
compare the two executable built with MPICH, one can observed an 
<br>
expected difference of performance: 115.7-sec in single precision 
<br>
against 178.68-sec in double precision (+54%).
<br>
<p>The thing is, when I use OpenMPI, the difference is really bigger: 
<br>
238.5-sec in single precision against 403.19-sec double precision (+69%).
<br>
<p>Our experiences have already shown OpenMPI is less efficient than MPICH 
<br>
on Ethernet with a small number of processes. This explain the 
<br>
differences between the first set of results with MPICH and the second 
<br>
set with OpenMPI. (But if someone have more information about that or 
<br>
even a solution, I am of course interested.)
<br>
But, using OpenMPI increases the difference between the two arithmetic. 
<br>
Is it the accentuation of the OpenMPI+Ethernet loss of performance, is 
<br>
it another issue into OpenMPI or is there any option a can use?
<br>
<p>Thank you for your help.
<br>
Mathieu.
<br>
<p><pre>
-- 
Mathieu Gontier
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14985.php">Daofeng Li: "[OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14983.php">Martin Siegert: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
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
