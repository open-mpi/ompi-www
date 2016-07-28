<?
$subject_val = "Re: [OMPI devel] v1.7.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 09:38:11 2014" -->
<!-- isoreceived="20140304143811" -->
<!-- sent="Tue, 04 Mar 2014 15:38:01 +0100" -->
<!-- isosent="20140304143801" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5rc1 posted" -->
<!-- id="5315E549.9020906_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC5F287A-3B46-4D5C-8462-0D8D3D86C0AD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5rc1 posted<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 09:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14289.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="14289.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/03/2014 03:13, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please subject this to your best tests as we hope to roll this (plus bug fixes) to 1.8.0 at the end of the month. This includes the new OSHMEM support, plus a completely updated MPI-3 compliant one-sided implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scheduled release date: Mar 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/ompi/mca/osc/rdma/osc_rdma_data_move.c: 
<br>
In function 'osc_rdma_accumulate_buffer':
<br>
/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/ompi/mca/osc/rdma/osc_rdma_data_move.c:481:28: 
<br>
error: 'header' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;primitive_count *= header-&gt;hdr_target_count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/pub/devel/openmpi/openmpi-1.7.5rc1-1/src/openmpi-1.7.5rc1/ompi/mca/osc/rdma/osc_rdma_data_move.c:481:28: 
<br>
note: each undeclared identifier is reported only once for each function 
<br>
it appears in
<br>
Makefile:1660: recipe for target 'osc_rdma_data_move.lo' failed
<br>
make[2]: *** [osc_rdma_data_move.lo] Error 1
<br>
<p><p><p>suggestions ? The relevant code is this one :
<br>
<p><p>#if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (proc-&gt;proc_arch != ompi_proc_local()-&gt;proc_arch) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_t *primitive_datatype = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t primitive_count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t buflen;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_base_get_primitive_type_info(datatype, 
<br>
&amp;primitive_datatype, &amp;primitive_count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;primitive_count *= header-&gt;hdr_target_count;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* figure out how big a buffer we need */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_type_size(primitive_datatype, &amp;buflen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buflen *= primitive_count;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer = malloc (buflen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_UNLIKELY(NULL == buffer)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;osc_rdma_copy_on_recv (buffer, source, source_len, proc, count, 
<br>
datatype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14289.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="14289.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
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
