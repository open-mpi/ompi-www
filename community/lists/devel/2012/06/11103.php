<?
$subject_val = "[OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 19:24:19 2012" -->
<!-- isoreceived="20120614232419" -->
<!-- sent="Thu, 14 Jun 2012 19:24:08 -0400" -->
<!-- isosent="20120614232408" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types" -->
<!-- id="4FDA7298.7030701_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 19:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Reply:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see a segfault show up in trunk testing starting with r26598 when 
<br>
tests like
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibm  collective/struct_gatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intel src/MPI_Type_free_[types|pending_msg]_[f|c]
<br>
<p>are run over openib.  Here is a typical stack trace:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal_convertor_create_stack_at_begining(convertor = 0x689730, 
<br>
sizes), line 404 in &quot;opal_convertor.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_convertor_set_position_nocheck(convertor = 0x689730, position), 
<br>
line 423 in &quot;opal_convertor.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_convertor_set_position(convertor = 0x689730, position = 
<br>
0x7fffc36e0bf0), line 321 in &quot;opal_convertor.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_start_copy(sendreq, bml_btl = 0x6a3ea0, 
<br>
size = 0), line 485 in &quot;pml_ob1_sendreq.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_start_btl(sendreq, bml_btl), line 387 in 
<br>
&quot;pml_ob1_sendreq.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_start(sendreq = 0x689680), line 458 in 
<br>
&quot;pml_ob1_sendreq.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_isend(buf = (nil), count = 0, datatype, dst = 2, tag = 
<br>
-16, sendmode = MCA_PML_BASE_SEND_STANDARD, comm, request), line 87 in 
<br>
&quot;pml_ob1_isend.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_sendrecv_actual(sendbuf = (nil), scount = 0, 
<br>
sdatatype, dest = 2, stag = -16, recvbuf = (nil), rcount = 0, rdatatype, 
<br>
source = 2, rtag = -16, comm, status = (nil)), line 51 in 
<br>
&quot;coll_tuned_util.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_barrier_intra_recursivedoubling(comm, module), line 
<br>
172 in &quot;coll_tuned_barrier.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_barrier_intra_dec_fixed(comm, module), line 207 in 
<br>
&quot;coll_tuned_decision_fixed.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PMPI_Barrier(comm = 0x5195a0), line 62 in &quot;pbarrier.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;main(0x0, 0x0, 0x0, 0x0, 0x0, 0x0), at 0x403219
<br>
<p>The fact that some derived data types were sent before seems to have 
<br>
something to do with it.  I see this sort of problem cropping up in 
<br>
Cisco and Oracle testing.  Up at the level of 
<br>
pml_ob1_send_request_start_copy, at line 485:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_SEND_REQUEST_RESET(sendreq);
<br>
<p>I see
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*sendreq-&gt;req_send.req_base.req_convertor.use_desc = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used   = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;desc   = (nil)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>and I guess that desc=NULL is causing the segfault at opal_convertor.c 
<br>
line 404.
<br>
<p>Anyhow, I'm trudging along, but thought I would share at least that much 
<br>
with you helpful folks in case any of this is ringing a bell.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Reply:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
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
