<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 11:58:03 2010" -->
<!-- isoreceived="20100717155803" -->
<!-- sent="Sat, 17 Jul 2010 11:58:33 -0400" -->
<!-- isosent="20100717155833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="95B5DBB7-A452-4D0B-A1FC-10F85C8198E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim1793fX7cVCt33L8cUG_wIPR5V3lLfp3XAeNh9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] do all processors have to execute MPI_Bcast?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 11:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2010, at 8:13 AM, David Zhang wrote:
<br>
<p><span class="quotelev1">&gt; collective calls return once it receive reply from everyone in the communicator that the message has been received (this is done under the hood).  Thus since only one process in the communicator calls Bcast, that process will hang indefinitely waiting for reply from other processes on the same communicator.
</span><br>
<p>This is not technically correct.  For example, MPI_BCAST of the root *could* return &quot;immediately&quot;, even before other processes have called MPI_BCAST.  But it doesn't have to.
<br>
<p>MPI only defines that collective operations must be invoked by all processes in the communicator.  The only collective operation with defined blocking / synchronization semantics is MPI_BARRIER.  It provides the guarantee that no process will exit the barrier until all processes have entered the barrier
<br>
<p>All other collective operations are just defined such that all processes in the communicator must invoke that collective -- no synchronization is guaranteed.  Synchronization *may* occur, but that's an implementation-specific issue (e.g., Open MPI may only synchronize processes in an MPI_BCAST if the message is &quot;large&quot;).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13684.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
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
