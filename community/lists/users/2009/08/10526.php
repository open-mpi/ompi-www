<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 17:07:15 2009" -->
<!-- isoreceived="20090831210715" -->
<!-- sent="Mon, 31 Aug 2009 14:05:54 -0700" -->
<!-- isosent="20090831210554" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4A9C3B32.2010800_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2C3B3673-3880-40E5-95C9-99F25F6D17F6_at_cisco.com" -->
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
<strong>Date:</strong> 2009-08-31 17:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 26, 2009, at 10:38 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this could cause blocking.  Specifically, the receiver may not
</span><br>
<span class="quotelev2">&gt;&gt; advance any other senders until the matching Irecv is posted and is
</span><br>
<span class="quotelev2">&gt;&gt; able to make progress.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should clarify something else here -- for long messages where the  
</span><br>
<span class="quotelev1">&gt; pipeline protocol is used, OB1 may need to be invoked repeatedly to  
</span><br>
<span class="quotelev1">&gt; keep making progress on all the successive fragments.  I.e., if a send  
</span><br>
<span class="quotelev1">&gt; is long enough to entail many fragments, then OB1 may (read: likely  
</span><br>
<span class="quotelev1">&gt; will) not progress *all* of them simultaneously.  Hence, if you're  
</span><br>
<span class="quotelev1">&gt; calling MPI_Test(), for example, to kick the progress engine, you may  
</span><br>
<span class="quotelev1">&gt; have to call it a few times to get *all* the fragments processed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How many fragments are processed in each call to progress can depend  
</span><br>
<span class="quotelev1">&gt; on the speed of your hardware and network, etc.
</span><br>
<p>Hi Jeff,
<br>
<p>Looking at the source code of MPI_Request_get_status, it...
<br>
calls OPAL_CR_NOOP_PROGRESS()
<br>
returns true in *flag if request-&gt;req_complete
<br>
calls opal_progress()
<br>
returns false in *flag
<br>
<p>What's the difference between OPAL_CR_NOOP_PROGRESS() and 
<br>
opal_progress()? If the request has already completed, does it mean 
<br>
that since opal_progress() is not called, no further progress is made?
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10488.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
