<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 08:45:17 2009" -->
<!-- isoreceived="20090912124517" -->
<!-- sent="Sat, 12 Sep 2009 08:45:11 -0400" -->
<!-- isosent="20090912124511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="821734D7-550A-4F62-92F5-F19E580715D7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA68EFF.6050203_at_bcgsc.ca" -->
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
<strong>Date:</strong> 2009-09-12 08:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10630.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10628.php">Marcin Stolarek: "[OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>In reply to:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2009, at 1:06 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>My INBOX has been a disaster recently.  Please ping me repeatedly if  
<br>
you need quicker replies (sorry! :-( ).
<br>
<p>(btw, should this really be on the devel list, not the user list?)
<br>
<p><span class="quotelev1">&gt; I can see one sort of ugly scenario unfolding in my head. Consider two
</span><br>
<span class="quotelev1">&gt; processes running the following pseudocode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; req = MPI_Irecv
</span><br>
<span class="quotelev1">&gt; while (!done) {
</span><br>
<span class="quotelev1">&gt;    while (MPI_Test(req)) {
</span><br>
<span class="quotelev1">&gt;      req = MPI_Irecv
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Send(!me)
</span><br>
<span class="quotelev1">&gt;    MPI_Send(!me)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are the sends guaranteed to have matching receives elsewhere?  If not,  
<br>
this has potential to deadlock on the whole assuming-buffering issue...
<br>
<p>If you're expecting the sends to be matched by the Irecv's, this looks  
<br>
like an erroneous program to me (there will always be 2x as many sends  
<br>
outstanding as receives).
<br>
<p><span class="quotelev1">&gt; I'll describe one process here:
</span><br>
<span class="quotelev1">&gt; * MPI_Test checks req-&gt;req_complete, which is false, then calls
</span><br>
<span class="quotelev1">&gt; opal_progress (which finds two packets from the other guy).
</span><br>
<span class="quotelev1">&gt; * Send two packets to the other guy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>...only if they're eager.  The sends are *not* guaranteed to complete  
<br>
until the matching receives occur.
<br>
<p><span class="quotelev1">&gt; * MPI_Test checks req-&gt;req_complete, which is true, returns
</span><br>
<span class="quotelev1">&gt; immediately. No progress is made.
</span><br>
<span class="quotelev1">&gt; * MPI_Test checks req-&gt;req_complete, which is false, because no
</span><br>
<span class="quotelev1">&gt; progress has been made since the last call. Call opal_progress (which
</span><br>
<span class="quotelev1">&gt; finds two packets from the other guy).
</span><br>
<span class="quotelev1">&gt; * Send two packets to the other guy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * MPI_Test checks req-&gt;req_complete, which is true, returns
</span><br>
<span class="quotelev1">&gt; immediately. No progress is made.
</span><br>
<span class="quotelev1">&gt; * MPI_Test checks req-&gt;req_complete, which is false, because no
</span><br>
<span class="quotelev1">&gt; progress has been made since the last time. Call opal_progress (which
</span><br>
<span class="quotelev1">&gt; finds two packets from the other guy).
</span><br>
<span class="quotelev1">&gt; * Send two packets to the other guy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In each iteration through the loop, one packet is received and two
</span><br>
<span class="quotelev1">&gt; packets are sent. Eventually this has to end badly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Bad user behavior should be punished, yes.  :-)
<br>
<p>I'm not quite sure that I see the problem you're identifying -- from  
<br>
what you describe, I think it's an erroneous program.
<br>
<p><span class="quotelev1">&gt; Following is an untested fix to request_get_status.c. It checks
</span><br>
<span class="quotelev1">&gt; req-&gt;req_complete and returns immediately if it is true. If not, it
</span><br>
<span class="quotelev1">&gt; calls opal_progress() and checks req-&gt;req_complete again. If
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_PROGRESS_THREADS is defined, it only checks the once and
</span><br>
<span class="quotelev1">&gt; does not call opal_progress(). It would look better if the body of the
</span><br>
<span class="quotelev1">&gt; loop were factored out into its own function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmm.  Do you mean this to be in request_get_status.c or req_test.c?   
<br>
(you mentioned MPI_TEST above, not MPI_REQUEST_GET_STATUS)
<br>
<p>Is this the optimization I mentioned in my previous reply (i.e., if  
<br>
req_complete is false, call opal_progress, and then check req_complete  
<br>
again?)  If so, I think it would be better to do it without an if loop  
<br>
somehow (testing and branching, etc.).
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int i;
</span><br>
<span class="quotelev1">&gt;         for (i = 0; i &lt; 2; i++) {
</span><br>
<span class="quotelev1">&gt;                 if( request-&gt;req_complete ) {
</span><br>
<span class="quotelev1">&gt;                         *flag = true;
</span><br>
<span class="quotelev1">&gt;                         /* If this is a generalized request, we  
</span><br>
<span class="quotelev1">&gt; *always* have to call
</span><br>
<span class="quotelev1">&gt;                            the query function to get the status  
</span><br>
<span class="quotelev1">&gt; (MPI-2:8.2), even if
</span><br>
<span class="quotelev1">&gt;                            the user passed STATUS_IGNORE. */
</span><br>
<span class="quotelev1">&gt;                         if (OMPI_REQUEST_GEN == request-&gt;req_type) {
</span><br>
<span class="quotelev1">&gt;                                 ompi_grequest_invoke_query(request,  
</span><br>
<span class="quotelev1">&gt; &amp;request-&gt;req_status);
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;                         if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev1">&gt;                                 *status = request-&gt;req_status;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;                         return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev1">&gt;                 if (i == 0)
</span><br>
<span class="quotelev1">&gt;                         opal_progress();
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;                 break;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         *flag = false;
</span><br>
<span class="quotelev1">&gt;         return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10630.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10628.php">Marcin Stolarek: "[OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>In reply to:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10644.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
