<?
$subject_val = "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 10:36:16 2009" -->
<!-- isoreceived="20090305153616" -->
<!-- sent="Thu, 5 Mar 2009 10:36:08 -0500" -->
<!-- isosent="20090305153608" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?" -->
<!-- id="D3C4D85A-FE49-4010-A68A-77C41168C72D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AFF0CB.7030503_at_tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 10:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8316.php">Gerry Creager: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8316.php">Gerry Creager: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8326.php">Eugene Loh: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 10:33 AM, Gerry Creager wrote:
<br>
<p><span class="quotelev1">&gt; We've been playing with it in a coupled atmosphere-ocean model to  
</span><br>
<span class="quotelev1">&gt; allow
</span><br>
<span class="quotelev1">&gt; the two to synchronize and exchange data.  The models have differing
</span><br>
<span class="quotelev1">&gt; levels of physics complexity and the time step requirements are
</span><br>
<span class="quotelev1">&gt; significantly different.  To sync them up we have to know where the
</span><br>
<span class="quotelev1">&gt; timesteps are identical, stop the process, exchange data and continue.
</span><br>
<span class="quotelev1">&gt; We've been playing with barrier to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I'm not sure I understand -- &quot;help&quot; meaning what?
<br>
<p>If you're exchanging data at the end of an iteration, then you  
<br>
effectively have a synchronization anyway -- no need for an extra  
<br>
barrier synchronization.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8316.php">Gerry Creager: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8316.php">Gerry Creager: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8318.php">Joe Landman: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8326.php">Eugene Loh: "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?"</a>
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
