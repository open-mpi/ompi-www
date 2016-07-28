<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 13:07:31 2009" -->
<!-- isoreceived="20090908170731" -->
<!-- sent="Tue, 8 Sep 2009 10:06:07 -0700" -->
<!-- isosent="20090908170607" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4AA68EFF.6050203_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6C041B43-0637-4289-8FA5-FFCDE6C3DBA6_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-08 13:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10593.php">Douglas Guptill: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
...
<br>
<span class="quotelev2">&gt;&gt; Two questions then...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. If the request has already completed, does it mean that since
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() is not called, no further progress is made?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.  It's a latency thing; if your request has already completed,  
</span><br>
<span class="quotelev1">&gt; we just tell you without further delay (i.e., without invoking  
</span><br>
<span class="quotelev1">&gt; opal_progress(), which may trigger lots of other things, and therefore  
</span><br>
<span class="quotelev1">&gt; increase the latency of MPI_REQUEST_GET_STATUS returning).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_progress() is our lowest-level progression engine call.  It kicks  
</span><br>
<span class="quotelev1">&gt; all kinds of registered progression callbacks from all over the code  
</span><br>
<span class="quotelev1">&gt; base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. request-&gt;req_complete is tested before calling opal_progress(). Is
</span><br>
<span class="quotelev2">&gt;&gt; it possible that request-&gt;req_complete is now true after calling
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() when this function returns false in *flag?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  I suppose it could be an optimization to duplicate the block  
</span><br>
<span class="quotelev1">&gt; testing for request-&gt;req_complete==true below the call to  
</span><br>
<span class="quotelev1">&gt; opal_progress().  I'm guessing the only reason it wasn't done was to  
</span><br>
<span class="quotelev1">&gt; avoid code duplication.  Additionally, the call to opal_progress() is  
</span><br>
<span class="quotelev1">&gt; surrounded by an #if block testing OPAL_ENABLE_PROGRESS_THREADS -- if  
</span><br>
<span class="quotelev1">&gt; we have progress threads enabled, the thought was that opal_progress()  
</span><br>
<span class="quotelev1">&gt; (and friends) would be invoked automatically (and probably  
</span><br>
<span class="quotelev1">&gt; continuously) by other threads.  The progression thread code is not  
</span><br>
<span class="quotelev1">&gt; well tested -- I'd be surprised if it worked at all, because I doubt  
</span><br>
<span class="quotelev1">&gt; anyone is testing it -- but it has been in our design since the very  
</span><br>
<span class="quotelev1">&gt; beginning.  This is likely another reason we don't test again for  
</span><br>
<span class="quotelev1">&gt; req_complete==true after the call to opal_progress() -- because that  
</span><br>
<span class="quotelev1">&gt; block would need to be protected by that #if, leading to further code  
</span><br>
<span class="quotelev1">&gt; complexity.
</span><br>
<p>Hi Jeff,
<br>
<p>I can see one sort of ugly scenario unfolding in my head. Consider two 
<br>
processes running the following pseudocode:
<br>
<p>req = MPI_Irecv
<br>
while (!done) {
<br>
&nbsp;&nbsp;&nbsp;while (MPI_Test(req)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req = MPI_Irecv
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(!me)
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(!me)
<br>
}
<br>
<p>I'll describe one process here:
<br>
* MPI_Test checks req-&gt;req_complete, which is false, then calls 
<br>
opal_progress (which finds two packets from the other guy).
<br>
* Send two packets to the other guy.
<br>
<p>* MPI_Test checks req-&gt;req_complete, which is true, returns 
<br>
immediately. No progress is made.
<br>
* MPI_Test checks req-&gt;req_complete, which is false, because no 
<br>
progress has been made since the last call. Call opal_progress (which 
<br>
finds two packets from the other guy).
<br>
* Send two packets to the other guy.
<br>
<p>* MPI_Test checks req-&gt;req_complete, which is true, returns 
<br>
immediately. No progress is made.
<br>
* MPI_Test checks req-&gt;req_complete, which is false, because no 
<br>
progress has been made since the last time. Call opal_progress (which 
<br>
finds two packets from the other guy).
<br>
* Send two packets to the other guy.
<br>
<p>and loop.
<br>
<p>In each iteration through the loop, one packet is received and two 
<br>
packets are sent. Eventually this has to end badly.
<br>
<p>Following is an untested fix to request_get_status.c. It checks 
<br>
req-&gt;req_complete and returns immediately if it is true. If not, it 
<br>
calls opal_progress() and checks req-&gt;req_complete again. If 
<br>
OMPI_ENABLE_PROGRESS_THREADS is defined, it only checks the once and 
<br>
does not call opal_progress(). It would look better if the body of the 
<br>
loop were factored out into its own function.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 2; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( request-&gt;req_complete ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If this is a generalized request, we *always* have to call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the query function to get the status (MPI-2:8.2), even if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the user passed STATUS_IGNORE. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_REQUEST_GEN == request-&gt;req_type) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_grequest_invoke_query(request, &amp;request-&gt;req_status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_STATUS_IGNORE != status) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = request-&gt;req_status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#if OMPI_ENABLE_PROGRESS_THREADS == 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*flag = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10593.php">Douglas Guptill: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10545.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Reply:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
