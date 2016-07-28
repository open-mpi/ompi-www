<?
$subject_val = "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 17:28:46 2008" -->
<!-- isoreceived="20080318212846" -->
<!-- sent="Tue, 18 Mar 2008 17:28:26 -0400" -->
<!-- isosent="20080318212826" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?" -->
<!-- id="47E033FA.1070104_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="258BABDDC780384FBF0FF15CCFDFABE104EE192C_at_XCH-NW-7V2.nw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 17:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5241.php">Chembeti, Ramesh (S&T-Student): "[OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<li><strong>Previous message:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5217.php">Siekas, Greg: "[OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg,
<br>
<p>Siekas, Greg wrote:
<br>
<span class="quotelev1">&gt; Is it possible to get the same blocking behavior with openmpi?  I'm
</span><br>
<span class="quotelev1">&gt; having a difficult time getting this to work properly.  The application
</span><br>
<span class="quotelev1">&gt; is spinning on sched_yield which takes up a cpu core.
</span><br>
<p>Per its design, OpenMPI cannot block. sched_yield is all it can do to 
<br>
improve fairness.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5241.php">Chembeti, Ramesh (S&T-Student): "[OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<li><strong>Previous message:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5217.php">Siekas, Greg: "[OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
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
