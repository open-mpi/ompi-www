<?
$subject_val = "Re: [OMPI users] fortran program with integer kind=8 using openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 20:12:50 2012" -->
<!-- isoreceived="20120704001250" -->
<!-- sent="Tue, 3 Jul 2012 17:12:46 -0700" -->
<!-- isosent="20120704001246" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran program with integer kind=8 using openmpi?" -->
<!-- id="20120704001246.GA30051_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-W58C21ABC3A68C44D5A48ADD3E90_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran program with integer kind=8 using openmpi?<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 20:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19734.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Previous message:</strong> <a href="19732.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi&#254;"</a>
<li><strong>In reply to:</strong> <a href="19732.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi&#254;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Reply:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 03, 2012 at 04:03:51PM -0700, William Au wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for all responses. There is another problem using
</span><br>
<span class="quotelev1">&gt; -fdefault-integer-8.
</span><br>
<p>I'll make the unsolicited suggestion that you really
<br>
really really don't want to use the -fdefault-integer-8
<br>
option.  It would be far better to actually audit your
<br>
Fortran code and use Fortran's kind type mechanism to
<br>
choose the appropriate kinds.
<br>
<p>I think that you're just hitting the tip of the iceberg
<br>
with problems and potential nasty bugs.
<br>
<p>Before dismissing my suggestion, it may be beneficial
<br>
to review th history of the -fdefault-* options in
<br>
gfortran.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19734.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Previous message:</strong> <a href="19732.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi&#254;"</a>
<li><strong>In reply to:</strong> <a href="19732.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi&#254;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<li><strong>Reply:</strong> <a href="19741.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
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
