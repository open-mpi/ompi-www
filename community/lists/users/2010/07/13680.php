<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 07:48:51 2010" -->
<!-- isoreceived="20100717114851" -->
<!-- sent="Sat, 17 Jul 2010 07:49:21 -0400" -->
<!-- isosent="20100717114921" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="DF6431E5-E7DB-4BAE-9B9B-E8101F77F11E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100717081339.GA50676_at_mech-cluster241.men.bris.ac.uk" -->
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
<strong>Date:</strong> 2010-07-17 07:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2010, at 4:13 AM, Anton Shterenlikht wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, just to be absolutely clear, are you saying
</span><br>
<span class="quotelev1">&gt; that even though only one process in the communicator
</span><br>
<span class="quotelev1">&gt; is calling Bcast, the call will be made on all
</span><br>
<span class="quotelev1">&gt; processes?
</span><br>
<p>MPI does not magically cause all processes to call MPI_Bcast behind the scenes for you.  You must ensure that every process in the communicator explicitly invokes MPI_Bcast.  You can do whatever logic you want (to include &quot;if&quot; blocks, etc.) as long as they all call MPI_Bcast.
<br>
<p>To be clear: all MPI collective operations must be explicitly invoked by every process in the target communicator.
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
<li><strong>Next message:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13682.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
