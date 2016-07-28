<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 04:39:48 2008" -->
<!-- isoreceived="20080903083948" -->
<!-- sent="Wed, 3 Sep 2008 09:39:43 +0100" -->
<!-- isosent="20080903083943" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="590EFCC2-0680-4F2B-82F1-469EFF1A83C7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48BD852C.2010604_at_polytechnique.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 04:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6457.php">Vincent Rotival: "[OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6457.php">Vincent Rotival: "[OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 2, 2008, at 7:25 PM, Vincent Rotival wrote:
<br>
<p><span class="quotelev1">&gt; I think I already read some comments on this issue, but I'd like to  
</span><br>
<span class="quotelev1">&gt; know of latest versions of OpenMPI have managed to solve it. I am  
</span><br>
<span class="quotelev1">&gt; now running 1.2.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run a MPI program with synchronization routines (e.g.  
</span><br>
<span class="quotelev1">&gt; MPI_barrier, MPI_bcast...), all threads waiting for data are still  
</span><br>
<span class="quotelev1">&gt; burning CPU. On the other hand when using non-blocking receives all  
</span><br>
<span class="quotelev1">&gt; threads waiting for data are not consuming any CPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would there be a possibility to use MPI_Bcast without  burning CPU  
</span><br>
<span class="quotelev1">&gt; power ?
</span><br>
<p><p>I'm afraid not at this time.  We've talked about adding a blocking  
<br>
mode for progress, but it hasn't happened yet (and is very unlikely to  
<br>
happen for the v1.3 series).
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
<li><strong>Next message:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6457.php">Vincent Rotival: "[OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6457.php">Vincent Rotival: "[OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6459.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
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
