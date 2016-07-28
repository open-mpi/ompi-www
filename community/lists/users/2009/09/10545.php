<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 23:53:21 2009" -->
<!-- isoreceived="20090902035321" -->
<!-- sent="Wed, 2 Sep 2009 06:53:15 +0300" -->
<!-- isosent="20090902035315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="6C041B43-0637-4289-8FA5-FFCDE6C3DBA6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A9C4A97.3000605_at_bcgsc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 23:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Previous message:</strong> <a href="10544.php">Elvedin Trnjanin: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying...
<br>
<p><p>On Sep 1, 2009, at 1:11 AM, Shaun Jackman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Looking at the source code of MPI_Request_get_status, it...
</span><br>
<span class="quotelev2">&gt; &gt; calls OPAL_CR_NOOP_PROGRESS()
</span><br>
<span class="quotelev2">&gt; &gt; returns true in *flag if request-&gt;req_complete
</span><br>
<span class="quotelev2">&gt; &gt; calls opal_progress()
</span><br>
<span class="quotelev2">&gt; &gt; returns false in *flag
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Keep in mind that MPI_REQUEST_GET_STATUS is exactly the same as  
<br>
MPI_TEST except that the MPI_Request will not be deallocated if the  
<br>
request has completed.
<br>
<p><span class="quotelev2">&gt; &gt; What's the difference between OPAL_CR_NOOP_PROGRESS() and
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress()? If the request has already completed, does it mean
</span><br>
<span class="quotelev2">&gt; &gt; that since opal_progress() is not called, no further progress is  
</span><br>
<span class="quotelev1">&gt; made?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OPAL_CR_NOOP_PROGRESS() seems to be related to checkpoint/restart and
</span><br>
<span class="quotelev1">&gt; is a no-op unless fault-tolerance is being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; Two questions then...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. If the request has already completed, does it mean that since
</span><br>
<span class="quotelev1">&gt; opal_progress() is not called, no further progress is made?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct.  It's a latency thing; if your request has already completed,  
<br>
we just tell you without further delay (i.e., without invoking  
<br>
opal_progress(), which may trigger lots of other things, and therefore  
<br>
increase the latency of MPI_REQUEST_GET_STATUS returning).
<br>
<p>opal_progress() is our lowest-level progression engine call.  It kicks  
<br>
all kinds of registered progression callbacks from all over the code  
<br>
base.
<br>
<p><span class="quotelev1">&gt; 2. request-&gt;req_complete is tested before calling opal_progress(). Is
</span><br>
<span class="quotelev1">&gt; it possible that request-&gt;req_complete is now true after calling
</span><br>
<span class="quotelev1">&gt; opal_progress() when this function returns false in *flag?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes.  I suppose it could be an optimization to duplicate the block  
<br>
testing for request-&gt;req_complete==true below the call to  
<br>
opal_progress().  I'm guessing the only reason it wasn't done was to  
<br>
avoid code duplication.  Additionally, the call to opal_progress() is  
<br>
surrounded by an #if block testing OPAL_ENABLE_PROGRESS_THREADS -- if  
<br>
we have progress threads enabled, the thought was that opal_progress()  
<br>
(and friends) would be invoked automatically (and probably  
<br>
continuously) by other threads.  The progression thread code is not  
<br>
well tested -- I'd be surprised if it worked at all, because I doubt  
<br>
anyone is testing it -- but it has been in our design since the very  
<br>
beginning.  This is likely another reason we don't test again for  
<br>
req_complete==true after the call to opal_progress() -- because that  
<br>
block would need to be protected by that #if, leading to further code  
<br>
complexity.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10546.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Previous message:</strong> <a href="10544.php">Elvedin Trnjanin: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10527.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
