<?
$subject_val = "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 12:34:40 2012" -->
<!-- isoreceived="20120615163440" -->
<!-- sent="Fri, 15 Jun 2012 12:34:32 -0400" -->
<!-- isosent="20120615163432" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types" -->
<!-- id="4FDB6418.3000504_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDC951AF-12F3-4FF9-9866-9A9E07A4C951_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 12:34:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11106.php">Josh Hursey: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Reply:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Backing out r26597 solves my particular test cases.  I'll back it out of 
<br>
the trunk as well unless someone has objections.
<br>
<p>I like how you say &quot;same segfault.&quot;  In certain cases, I just go on to 
<br>
different segfaults.  E.g.,
<br>
<p>&nbsp;&nbsp;&nbsp;[2] btl_openib_handle_incoming(openib_btl, ep, frag, byte_len = 20U), 
<br>
line 3208 in &quot;btl_openib_component.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[3] handle_wc(device, cq = 0, wc), line 3516 in &quot;btl_openib_component.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[4] poll_device(device, count = 1), line 3654 in &quot;btl_openib_component.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[5] progress_one_device(device), line 3762 in &quot;btl_openib_component.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[6] btl_openib_component_progress(), line 3787 in 
<br>
&quot;btl_openib_component.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[7] opal_progress(), line 207 in &quot;opal_progress.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[8] opal_condition_wait(c, m), line 100 in &quot;condition.h&quot;
<br>
&nbsp;&nbsp;&nbsp;[9] ompi_request_default_wait_all(count = 2U, requests, statuses), 
<br>
line 281 in &quot;req_wait.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[10] ompi_coll_tuned_sendrecv_actual(sendbuf = (nil), scount = 0, 
<br>
sdatatype, dest = 0, stag = -16, recvbuf = (nil), rcount = 0, rdatatype, 
<br>
source = 0, rtag = -16, comm, status = (nil)), line 54 in 
<br>
&quot;coll_tuned_util.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[11] ompi_coll_tuned_barrier_intra_recursivedoubling(comm, module), 
<br>
line 172 in &quot;coll_tuned_barrier.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[12] ompi_coll_tuned_barrier_intra_dec_fixed(comm, module), line 207 
<br>
in &quot;coll_tuned_decision_fixed.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[13] PMPI_Barrier(comm = 0x518370), line 62 in &quot;pbarrier.c&quot;
<br>
<p>The reg-&gt;cbfunc is NULL.  I'm still considering whether that's an 
<br>
artifact of how I build that particular case, though.
<br>
<p>On 06/15/12 09:44, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; There should be no datatype attached to the barrier, so it is normal you get the zero values in the convertor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something weird is definitively going on. As there is no data to be sent, the opal_convertor_set_position function is supposed to trigger the special path, mark the convertor as completed and return successfully. However, this seems not to be the case anymore as in your backtrace I see the call to opal_convertor_set_position_nocheck, which only happens if the above described test fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had some doubts about r26597, but I don't have time to check into it until Monday. Maybe you can remove it and se if you continue to have the same segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 15, 2012, at 01:24 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see a segfault show up in trunk testing starting with r26598 when tests like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ibm  collective/struct_gatherv
</span><br>
<span class="quotelev2">&gt;&gt;     intel src/MPI_Type_free_[types|pending_msg]_[f|c]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are run over openib.  Here is a typical stack trace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_convertor_create_stack_at_begining(convertor = 0x689730, sizes), line 404 in &quot;opal_convertor.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_convertor_set_position_nocheck(convertor = 0x689730, position), line 423 in &quot;opal_convertor.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_convertor_set_position(convertor = 0x689730, position = 0x7fffc36e0bf0), line 321 in &quot;opal_convertor.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_pml_ob1_send_request_start_copy(sendreq, bml_btl = 0x6a3ea0, size = 0), line 485 in &quot;pml_ob1_sendreq.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_pml_ob1_send_request_start_btl(sendreq, bml_btl), line 387 in &quot;pml_ob1_sendreq.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_pml_ob1_send_request_start(sendreq = 0x689680), line 458 in &quot;pml_ob1_sendreq.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_pml_ob1_isend(buf = (nil), count = 0, datatype, dst = 2, tag = -16, sendmode = MCA_PML_BASE_SEND_STANDARD, comm, request), line 87 in &quot;pml_ob1_isend.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_coll_tuned_sendrecv_actual(sendbuf = (nil), scount = 0, sdatatype, dest = 2, stag = -16, recvbuf = (nil), rcount = 0, rdatatype, source = 2, rtag = -16, comm, status = (nil)), line 51 in &quot;coll_tuned_util.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_coll_tuned_barrier_intra_recursivedoubling(comm, module), line 172 in &quot;coll_tuned_barrier.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    ompi_coll_tuned_barrier_intra_dec_fixed(comm, module), line 207 in &quot;coll_tuned_decision_fixed.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    PMPI_Barrier(comm = 0x5195a0), line 62 in &quot;pbarrier.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    main(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at 0x403219
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The fact that some derived data types were sent before seems to have something to do with it.  I see this sort of problem cropping up in Cisco and Oracle testing.  Up at the level of pml_ob1_send_request_start_copy, at line 485:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MCA_PML_OB1_SEND_REQUEST_RESET(sendreq);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *sendreq-&gt;req_send.req_base.req_convertor.use_desc = {
</span><br>
<span class="quotelev2">&gt;&gt;         length = 0
</span><br>
<span class="quotelev2">&gt;&gt;         used   = 0
</span><br>
<span class="quotelev2">&gt;&gt;         desc   = (nil)
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I guess that desc=NULL is causing the segfault at opal_convertor.c line 404.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, I'm trudging along, but thought I would share at least that much with you helpful folks in case any of this is ringing a bell.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11106.php">Josh Hursey: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Reply:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
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
