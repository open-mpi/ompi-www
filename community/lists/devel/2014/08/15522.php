<?
$subject_val = "Re: [OMPI devel] canceling buffered send request with pml/cm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 13:47:20 2014" -->
<!-- isoreceived="20140805174720" -->
<!-- sent="Tue, 5 Aug 2014 13:47:19 -0400" -->
<!-- isosent="20140805174719" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] canceling buffered send request with pml/cm" -->
<!-- id="86E9FC6D-5091-4B56-A701-161F81025C73_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="fb4f0a2be4254fecb9220a517f1dfb6f_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] canceling buffered send request with pml/cm<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 13:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15523.php">George Bosilca: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15521.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15494.php">Yossi Etigin: "[OMPI devel] canceling buffered send request with pml/cm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yossi,
<br>
<p>I think you raised an interesting corner-case, and a possible bug in the MTL implementation. As the request is marked as complete by the CM/PML the cancel should never succeed. As the CM/PML is forcing the completion on all bend requests, it should also enforce that all completed requests cannot be cancelled (instead of leaving this task to the MTL).
<br>
<p>I think the cleanest approach will be to allow the MTL itself  o handle the complete case, by moving the code you pinpointed to (MCA_PML_CM_HVY_SEND_REQUEST_START) from the CM/MTL down in each MTL send case (they can check for buffered send requests). This approach will possible allow an MTL to implement cancel sends.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Aug 4, 2014, at 09:49 , Yossi Etigin &lt;yosefe_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Seems like it&#146;s impossible to cancel buffered sends with pml/cm.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From one hand, pml/cm completes the buffered send immediately (MCA_PML_CM_HVY_SEND_REQUEST_START):
</span><br>
<span class="quotelev1">&gt;         if(OMPI_SUCCESS == ret &amp;&amp;                                                \
</span><br>
<span class="quotelev1">&gt;            sendreq-&gt;req_send.req_send_mode == MCA_PML_BASE_SEND_BUFFERED) {      \
</span><br>
<span class="quotelev1">&gt;             sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR = 0;        \
</span><br>
<span class="quotelev1">&gt;             ompi_request_complete(&amp;(sendreq)-&gt;req_send.req_base.req_ompi, true); \
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So, if the user is doing Bsend()/Cancel()/Wait()/Test_canceled(), the Wait() would be a no-op.
</span><br>
<span class="quotelev1">&gt; Therefore when mtl_cancel() was called, it had to either cancel/guarantee completion *immediately*, otherwise the return from Test_canceled would be undefined.
</span><br>
<span class="quotelev1">&gt; However, it&#146;s not always possible to cancel immediately, because need to make sure the peer has not matched it yet (fox example, with mtl mxm).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; IMHO it&#146;s wrong for pml_cm to complete a buffered send immediately.
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --Yossi
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15522/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15523.php">George Bosilca: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15521.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15494.php">Yossi Etigin: "[OMPI devel] canceling buffered send request with pml/cm"</a>
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
