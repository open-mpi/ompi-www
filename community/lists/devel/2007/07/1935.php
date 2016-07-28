<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 14:46:55 2007" -->
<!-- isoreceived="20070718184655" -->
<!-- sent="Wed, 18 Jul 2007 14:44:48 -0400" -->
<!-- isosent="20070718184448" -->
<!-- name="Neil Ludban" -->
<!-- email="nludban_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 802, Issue 1" -->
<!-- id="20070718144448.11f5b0b2.nludban_at_osc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.2633.1184672281.6844.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Neil Ludban (<em>nludban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 14:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good suggestion, increasing the timeout to somewhere around 12
<br>
allowed the job to finish.  Initial experimentation showed that
<br>
I could get a factor of 3-4x improvement in performance using
<br>
even larger timeouts, matching the times for 64 processes and
<br>
1/4 the data set.  The cluster is presently having scheduler
<br>
issues, I'll post again if I find anything else interesting.
<br>
<p>Thanks-
<br>
-Neil
<br>
<p><span class="quotelev1">&gt; Date: Tue, 17 Jul 2007 10:14:44 +0300
</span><br>
<span class="quotelev1">&gt; From: &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] InfiniBand timeout errors
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;469C6C64.4040709_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Try to increase the IB time out parameter: --mca btl_mvapi_ib_timeout 14
</span><br>
<span class="quotelev1">&gt; If the 14 will not work , try to increase little bit more (16)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neil Ludban wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm getting the errors below when calling MPI_Alltoallv() as part of
</span><br>
<span class="quotelev2">&gt; &gt; a matrix transpose operation.  It's 100% repeatable when testing with
</span><br>
<span class="quotelev2">&gt; &gt; 16M matrix elements divided between 64 processes on 32 dual core nodes.
</span><br>
<span class="quotelev2">&gt; &gt; There are never any errors with fewer processes or elements, including
</span><br>
<span class="quotelev2">&gt; &gt; the same 32 nodes with only one process per node.  If anyone wants
</span><br>
<span class="quotelev2">&gt; &gt; any additional information or has suggestions to try, please let me
</span><br>
<span class="quotelev2">&gt; &gt; know.  Otherwise, I'll have the system rebooted and hope the problem
</span><br>
<span class="quotelev2">&gt; &gt; goes away.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Neil
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,7][btl_mvapi_component.c:854:mca_btl_mvapi_component_progress]
</span><br>
<span class="quotelev2">&gt; &gt; 	from c065 to: c077 [0,1,3][btl_mvapi_component.c:854:
</span><br>
<span class="quotelev2">&gt; &gt; 	mca_btl_mvapi_component_progress] from c069 error polling HP
</span><br>
<span class="quotelev2">&gt; &gt; 	CQ with status VAPI_RETRY_EXC_ERR status number 12 for Frag :
</span><br>
<span class="quotelev2">&gt; &gt; 	0x2ab6590200 to: c078 error polling HP CQ with status
</span><br>
<span class="quotelev2">&gt; &gt; 	VAPI_RETRY_EXC_ERR status number 12 for Frag : 0x2ab61f6380
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The retry count is a down counter initialized on creation of the QP. Retry
</span><br>
<span class="quotelev2">&gt; &gt; count is defined in the InfiniBand Spec 1.2 (12.7.38): 
</span><br>
<span class="quotelev2">&gt; &gt; The total number of times that the sender wishes the receiver to retry tim- 
</span><br>
<span class="quotelev2">&gt; &gt; eout, packet sequence, etc. errors before posting a completion error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that two mca parameters are involved here: 
</span><br>
<span class="quotelev2">&gt; &gt; btl_mvapi_ib_retry_count - The number of times the sender will attempt to
</span><br>
<span class="quotelev2">&gt; &gt; retry  (defaulted to 7, the maximum value). 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl_mvapi_ib_timeout - The local ack timeout parameter (defaulted to 10). The
</span><br>
<span class="quotelev2">&gt; &gt; actual timeout value used is calculated as: 
</span><br>
<span class="quotelev2">&gt; &gt; (4.096 micro-seconds * 2^btl_mvapi_ib_timeout). 
</span><br>
<span class="quotelev2">&gt; &gt; See InfiniBand Spec 1.2 (12.7.34) for more details.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1934.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
