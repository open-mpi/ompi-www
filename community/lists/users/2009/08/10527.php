<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 18:12:50 2009" -->
<!-- isoreceived="20090831221250" -->
<!-- sent="Mon, 31 Aug 2009 15:11:35 -0700" -->
<!-- isosent="20090831221135" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4A9C4A97.3000605_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A9C3B32.2010800_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_pml_ob1_send blocks<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 18:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 26, 2009, at 10:38 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, this could cause blocking.  Specifically, the receiver may not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advance any other senders until the matching Irecv is posted and is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to make progress.
</span><br>
<span class="quotelev2">&gt;&gt; I should clarify something else here -- for long messages where the  
</span><br>
<span class="quotelev2">&gt;&gt; pipeline protocol is used, OB1 may need to be invoked repeatedly to  
</span><br>
<span class="quotelev2">&gt;&gt; keep making progress on all the successive fragments.  I.e., if a send  
</span><br>
<span class="quotelev2">&gt;&gt; is long enough to entail many fragments, then OB1 may (read: likely  
</span><br>
<span class="quotelev2">&gt;&gt; will) not progress *all* of them simultaneously.  Hence, if you're  
</span><br>
<span class="quotelev2">&gt;&gt; calling MPI_Test(), for example, to kick the progress engine, you may  
</span><br>
<span class="quotelev2">&gt;&gt; have to call it a few times to get *all* the fragments processed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How many fragments are processed in each call to progress can depend  
</span><br>
<span class="quotelev2">&gt;&gt; on the speed of your hardware and network, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the source code of MPI_Request_get_status, it...
</span><br>
<span class="quotelev1">&gt; calls OPAL_CR_NOOP_PROGRESS()
</span><br>
<span class="quotelev1">&gt; returns true in *flag if request-&gt;req_complete
</span><br>
<span class="quotelev1">&gt; calls opal_progress()
</span><br>
<span class="quotelev1">&gt; returns false in *flag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's the difference between OPAL_CR_NOOP_PROGRESS() and 
</span><br>
<span class="quotelev1">&gt; opal_progress()? If the request has already completed, does it mean 
</span><br>
<span class="quotelev1">&gt; that since opal_progress() is not called, no further progress is made?
</span><br>
<p>OPAL_CR_NOOP_PROGRESS() seems to be related to checkpoint/restart and 
<br>
is a no-op unless fault-tolerance is being used.
<br>
<p>Two questions then...
<br>
<p>1. If the request has already completed, does it mean that since 
<br>
opal_progress() is not called, no further progress is made?
<br>
<p>2. request-&gt;req_complete is tested before calling opal_progress(). Is 
<br>
it possible that request-&gt;req_complete is now true after calling 
<br>
opal_progress() when this function returns false in *flag?
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10528.php">Tim Miller: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
