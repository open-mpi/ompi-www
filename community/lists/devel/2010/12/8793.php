<?
$subject_val = "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 18 07:15:19 2010" -->
<!-- isoreceived="20101218121519" -->
<!-- sent="18 Dec 2010 12:15:14 +0000" -->
<!-- isosent="20101218121514" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)" -->
<!-- id="Prayer.1.3.3.1012181215140.17642_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D3F5AA6-DD8F-49B1-8D5B-47DAD09F875F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-18 07:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17 2010, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not an unknown problem -- as George and Ralph were trying to say, it 
</span><br>
<span class="quotelev1">&gt; was a design decision on our part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sadly, flexible dynamic processing is not something that many people ask 
</span><br>
<span class="quotelev1">&gt; for. We have invested time in it over the year to get it working and have 
</span><br>
<span class="quotelev1">&gt; a baseline functionality level. Beyond that, we unfortunately simply 
</span><br>
<span class="quotelev1">&gt; haven't had enough requests to justify spending time to do stuff like you 
</span><br>
<span class="quotelev1">&gt; suggest (e.g., allow abnormal termination of MPI-disconnected processes 
</span><br>
<span class="quotelev1">&gt; to not also take down previously-connected processes). :-(
</span><br>
<p>And my responses (which were probably confusing) were some hint as to WHY
<br>
it is a hard problem.  I have a lot of experience at this level for a very
<br>
wide range of systems, and it's something that I would hate to have to
<br>
implement even for a single system - let alone for the range of systems
<br>
that OpenMPI supports.
<br>
<p>I could tell you some horror stories of processes owned by one user taking
<br>
down ones owned by OTHER users, because the controlling terminal had been
<br>
reused.  And, upon investigation, it wasn't even possible to identify a
<br>
bug in any of the programs or operating system - it was merely a &quot;gotcha&quot;
<br>
that had sneaked through the cracks in the specifications and bitten me
<br>
in a painful place.
<br>
<p>The following is what I teach about it in my course (in full):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;You can add groups of processes dynamically \break
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{\cyan MPI-2} is probably the best way to do this \break
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;\bully My recommendation is don't even {\magenta think} of it \break
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This was a nightmare area in {\cyan PVM} \break
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The potential system problems are unbelievable \break
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;And that is even if you are your own {\sky administrator} \break
<br>
&nbsp;&nbsp;&nbsp;&nbsp;If you aren't, you may get strangled for using this \break
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8792.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
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
