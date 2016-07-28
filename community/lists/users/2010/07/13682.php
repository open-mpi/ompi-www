<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 08:09:30 2010" -->
<!-- isoreceived="20100717120930" -->
<!-- sent="Sat, 17 Jul 2010 13:09:25 +0100" -->
<!-- isosent="20100717120925" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="20100717120925.GA51417_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF6431E5-E7DB-4BAE-9B9B-E8101F77F11E_at_cisco.com" -->
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
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 08:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jul 17, 2010 at 07:49:21AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 17, 2010, at 4:13 AM, Anton Shterenlikht wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, just to be absolutely clear, are you saying
</span><br>
<span class="quotelev2">&gt; &gt; that even though only one process in the communicator
</span><br>
<span class="quotelev2">&gt; &gt; is calling Bcast, the call will be made on all
</span><br>
<span class="quotelev2">&gt; &gt; processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI does not magically cause all processes to call MPI_Bcast behind the scenes for you.  You must ensure that every process in the communicator explicitly invokes MPI_Bcast.  You can do whatever logic you want (to include &quot;if&quot; blocks, etc.) as long as they all call MPI_Bcast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: all MPI collective operations must be explicitly invoked by every process in the target communicator.
</span><br>
<p>Jeff, many thanks. Now I'm very clear indeed.
<br>
<p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
