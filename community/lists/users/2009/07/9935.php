<?
$subject_val = "Re: [OMPI users] Problems in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 05:34:08 2009" -->
<!-- isoreceived="20090713093408" -->
<!-- sent="Mon, 13 Jul 2009 10:34:17 +0100" -->
<!-- isosent="20090713093417" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in OpenMPI" -->
<!-- id="1247477657.3733.61.camel_at_alpha" -->
<!-- inreplyto="1e8c69dc0907121749y185cc1der6dc2512b692485b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in OpenMPI<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 05:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9936.php">Ashley Pittman: "Re: [OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?"</a>
<li><strong>Previous message:</strong> <a href="9934.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2009-07-12 at 19:49 -0500, Yin Feng wrote:
<br>
<span class="quotelev1">&gt; Can you give me a further explanation about why results are different
</span><br>
<span class="quotelev1">&gt; when it ran it on mutiprocessors against single processor?
</span><br>
<p>Floating point number are problematical for a number of reasons, they
<br>
are only *approximations of real numbers because of the limited
<br>
precision.  This means that when you do calculations with floating point
<br>
numbers the you end up with approximations of the answers (because you
<br>
only really had a approximation of the question).
<br>
<p>In parallel computing you find that the route taken to reach an answer
<br>
is different to that taken in serial computing and hence you get
<br>
different errors so the eventual answer is different.  Furthermore
<br>
you'll quite likely find that you get different answers running at
<br>
different scales, depending on how you spread out your job.
<br>
<p>Unfortunately it's a fundamental limitation of classical computing and
<br>
one that people have learned to live with.
<br>
<p><a href="http://en.wikipedia.org/wiki/Floating_point#Accuracy_problems">http://en.wikipedia.org/wiki/Floating_point#Accuracy_problems</a>
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9936.php">Ashley Pittman: "Re: [OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?"</a>
<li><strong>Previous message:</strong> <a href="9934.php">Zou, Lin (GE, Research, Consultant): "[OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
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
