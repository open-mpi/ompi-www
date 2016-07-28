<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 13:56:58 2009" -->
<!-- isoreceived="20090914175658" -->
<!-- sent="Mon, 14 Sep 2009 10:55:35 -0700" -->
<!-- isosent="20090914175535" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4AAE8397.8020709_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="821734D7-550A-4F62-92F5-F19E580715D7_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-14 13:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10645.php">Brock Palen: "[OMPI users] openmpi+nag/5.1 error with libpthread"</a>
<li><strong>Previous message:</strong> <a href="10643.php">Josh Hursey: "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 8, 2009, at 1:06 PM, Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; My INBOX has been a disaster recently.  Please ping me repeatedly if  
</span><br>
<span class="quotelev1">&gt; you need quicker replies (sorry! :-( ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (btw, should this really be on the devel list, not the user list?)
</span><br>
<p>It's tending that way. I'll keep the thread here for now for 
<br>
continuity. If I start a new thread on this topic, I'll move it to devel.
<br>
<p><span class="quotelev2">&gt;&gt; I can see one sort of ugly scenario unfolding in my head. Consider two
</span><br>
<span class="quotelev2">&gt;&gt; processes running the following pseudocode:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; req = MPI_Irecv
</span><br>
<span class="quotelev2">&gt;&gt; while (!done) {
</span><br>
<span class="quotelev2">&gt;&gt;    while (MPI_Test(req)) {
</span><br>
<span class="quotelev2">&gt;&gt;      req = MPI_Irecv
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Send(!me)
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Send(!me)
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are the sends guaranteed to have matching receives elsewhere?  If not,  
</span><br>
<span class="quotelev1">&gt; this has potential to deadlock on the whole assuming-buffering issue...
</span><br>
<p>You're right that this is an erroneous program because there is only 
<br>
one Irecv posted and two Send. Change the two MPI_Send to MPI_Bsend to 
<br>
prevent deadlock, and the situation I'm describing below still applies.
<br>
<p><span class="quotelev1">&gt; If you're expecting the sends to be matched by the Irecv's, this looks  
</span><br>
<span class="quotelev1">&gt; like an erroneous program to me (there will always be 2x as many sends  
</span><br>
<span class="quotelev1">&gt; outstanding as receives).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll describe one process here:
</span><br>
<span class="quotelev2">&gt;&gt; * MPI_Test checks req-&gt;req_complete, which is false, then calls
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress (which finds two packets from the other guy).
</span><br>
<span class="quotelev2">&gt;&gt; * Send two packets to the other guy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...only if they're eager.  The sends are *not* guaranteed to complete  
</span><br>
<span class="quotelev1">&gt; until the matching receives occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * MPI_Test checks req-&gt;req_complete, which is true, returns
</span><br>
<span class="quotelev2">&gt;&gt; immediately. No progress is made.
</span><br>
<span class="quotelev2">&gt;&gt; * MPI_Test checks req-&gt;req_complete, which is false, because no
</span><br>
<span class="quotelev2">&gt;&gt; progress has been made since the last call. Call opal_progress (which
</span><br>
<span class="quotelev2">&gt;&gt; finds two packets from the other guy).
</span><br>
<span class="quotelev2">&gt;&gt; * Send two packets to the other guy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * MPI_Test checks req-&gt;req_complete, which is true, returns
</span><br>
<span class="quotelev2">&gt;&gt; immediately. No progress is made.
</span><br>
<span class="quotelev2">&gt;&gt; * MPI_Test checks req-&gt;req_complete, which is false, because no
</span><br>
<span class="quotelev2">&gt;&gt; progress has been made since the last time. Call opal_progress (which
</span><br>
<span class="quotelev2">&gt;&gt; finds two packets from the other guy).
</span><br>
<span class="quotelev2">&gt;&gt; * Send two packets to the other guy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In each iteration through the loop, one packet is received and two
</span><br>
<span class="quotelev2">&gt;&gt; packets are sent. Eventually this has to end badly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bad user behavior should be punished, yes.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure that I see the problem you're identifying -- from  
</span><br>
<span class="quotelev1">&gt; what you describe, I think it's an erroneous program.
</span><br>
<p>With buffered sends, in each iteration through the loop two packets 
<br>
will be sent and only one packet will be received due to 
<br>
MPI_Request_get_status not checking request-&gt;req_complete after 
<br>
calling opal_progress.
<br>
<p><span class="quotelev2">&gt;&gt; Following is an untested fix to request_get_status.c. It checks
</span><br>
<span class="quotelev2">&gt;&gt; req-&gt;req_complete and returns immediately if it is true. If not, it
</span><br>
<span class="quotelev2">&gt;&gt; calls opal_progress() and checks req-&gt;req_complete again. If
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_ENABLE_PROGRESS_THREADS is defined, it only checks the once and
</span><br>
<span class="quotelev2">&gt;&gt; does not call opal_progress(). It would look better if the body of the
</span><br>
<span class="quotelev2">&gt;&gt; loop were factored out into its own function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  Do you mean this to be in request_get_status.c or req_test.c?   
</span><br>
<span class="quotelev1">&gt; (you mentioned MPI_TEST above, not MPI_REQUEST_GET_STATUS)
</span><br>
<p>I meant this code for MPI_Request_get_status. I just read the code for 
<br>
ompi_request_default_test in req_test.c. It includes code very similar 
<br>
to what I suggested for checking request-&gt;req_complete, calling 
<br>
opal_progress and then checking request-&gt;req_complete a second time, 
<br>
except that it implements the loop using a goto.
<br>
<p><span class="quotelev1">&gt; Is this the optimization I mentioned in my previous reply (i.e., if  
</span><br>
<span class="quotelev1">&gt; req_complete is false, call opal_progress, and then check req_complete  
</span><br>
<span class="quotelev1">&gt; again?)  If so, I think it would be better to do it without an if loop  
</span><br>
<span class="quotelev1">&gt; somehow (testing and branching, etc.).
</span><br>
<p>Yes, and MPI_Request_get_status would then behave as MPI_Test does 
<br>
currently. Is it not so crazy for MPI_Test to be implemented as calls 
<br>
to MPI_Request_get_status and MPI_Request_free? It would eliminate the 
<br>
code duplication.
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10645.php">Brock Palen: "[OMPI users] openmpi+nag/5.1 error with libpthread"</a>
<li><strong>Previous message:</strong> <a href="10643.php">Josh Hursey: "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
