<?
$subject_val = "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 14 10:41:29 2013" -->
<!-- isoreceived="20130714144129" -->
<!-- sent="Sun, 14 Jul 2013 16:41:21 +0200" -->
<!-- isosent="20130714144121" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype" -->
<!-- id="BF0B0D8A-DC40-4AC0-92F4-430FB9B3E222_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20130714213013.447e8619a3463fcb6f8d6713_at_nifty.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-14 10:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12597.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12595.php">KAWASHIMA Takahiro: "[OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12595.php">KAWASHIMA Takahiro: "[OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12597.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12597.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Nice catch. That particular code was an over-optimizations &#133; that failed. Please try with the patch below.
<br>
<p>Let me know if it's working as expected, I will push it in the trunk once confirmed.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>Index: ompi/datatype/ompi_datatype_args.c
<br>
===================================================================
<br>
--- ompi/datatype/ompi_datatype_args.c	(revision 28787)
<br>
+++ ompi/datatype/ompi_datatype_args.c	(working copy)
<br>
@@ -449,9 +449,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* For duplicated datatype we don't have to store all the information */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_COMBINER_DUP == args-&gt;create_type ) {
<br>
-        position[0] = args-&gt;create_type;
<br>
-        position[1] = args-&gt;d[0]-&gt;id; /* On the OMPI - layer, copy the ompi_datatype.id */
<br>
-        return OMPI_SUCCESS;
<br>
+        ompi_datatype_t* temp_data = args-&gt;d[0];
<br>
+        return __ompi_datatype_pack_description(temp_data,
<br>
+                                                packed_buffer,
<br>
+                                                next_index );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position[0] = args-&gt;create_type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position[1] = args-&gt;ci;
<br>
<p><p><p>On Jul 14, 2013, at 14:30 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered an assertion failure in Open MPI trunk and found a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the attached program. This program can be run with mpiexec -n 1.
</span><br>
<span class="quotelev1">&gt; This program calls MPI_Put and writes one int value to the target side.
</span><br>
<span class="quotelev1">&gt; The target side datatype is equivalent to MPI_INT, but is a derived
</span><br>
<span class="quotelev1">&gt; datatype created by MPI_Type_contiguous and MPI_Type_Dup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This program aborts with the following output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==========================================================================
</span><br>
<span class="quotelev1">&gt; #### dt1 (0x2626160) ####
</span><br>
<span class="quotelev1">&gt; type 2 count ints 1 count disp 0 count datatype 1
</span><br>
<span class="quotelev1">&gt; ints:     1 
</span><br>
<span class="quotelev1">&gt; types:    MPI_INT 
</span><br>
<span class="quotelev1">&gt; #### dt2 (0x2626340) ####
</span><br>
<span class="quotelev1">&gt; type 1 count ints 0 count disp 0 count datatype 1
</span><br>
<span class="quotelev1">&gt; types:    0x2626160 
</span><br>
<span class="quotelev1">&gt; put_dup_type: ../../../ompi/datatype/ompi_datatype_args.c:565: __ompi_datatype_create_from_packed_description: Assertion `data_id &lt; 45' failed.
</span><br>
<span class="quotelev1">&gt; [ppc:05244] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ppc:05244] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [ppc:05244] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 0] /lib/libpthread.so.0(+0xeff0) [0x7fe58a275ff0]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7fe589f371b5]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 2] /lib/libc.so.6(abort+0x180) [0x7fe589f39fc0]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 3] /lib/libc.so.6(__assert_fail+0xf1) [0x7fe589f30301]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 4] /ompi/lib/libmpi.so.0(+0x6504e) [0x7fe58a4e804e]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 5] /ompi/lib/libmpi.so.0(ompi_datatype_create_from_packed_description+0x23) [0x7fe58a4e8cf6]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 6] /ompi/lib/openmpi/mca_osc_rdma.so(+0xd04b) [0x7fe5839a104b]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 7] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_sendreq_recv_put+0xa8) [0x7fe5839a3ae5]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 8] /ompi/lib/openmpi/mca_osc_rdma.so(+0x86cc) [0x7fe58399c6cc]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [ 9] /ompi/lib/openmpi/mca_btl_self.so(mca_btl_self_send+0x87) [0x7fe58510bb04]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [10] /ompi/lib/openmpi/mca_osc_rdma.so(+0xc44b) [0x7fe5839a044b]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [11] /ompi/lib/openmpi/mca_osc_rdma.so(+0xd69d) [0x7fe5839a169d]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [12] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_flush+0x50) [0x7fe5839a1776]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [13] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_module_fence+0x8e6) [0x7fe5839a84ab]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [14] /ompi/lib/libmpi.so.0(MPI_Win_fence+0x16f) [0x7fe58a54127d]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [15] ompi-trunk/put_dup_type() [0x400d10]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [16] /lib/libc.so.6(__libc_start_main+0xfd) [0x7fe589f23c8d]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] [17] put_dup_type() [0x400b09]
</span><br>
<span class="quotelev1">&gt; [ppc:05244] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 5244 on node ppc exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ==========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __ompi_datatype_create_from_packed_description function, in which the
</span><br>
<span class="quotelev1">&gt; assertion failure occurred, seems to expect the value of data_id is an
</span><br>
<span class="quotelev1">&gt; ID of a predefined datatype. In my environment, the value of data_id
</span><br>
<span class="quotelev1">&gt; is 68, that is an ID of the datatype created by MPI_Type_contiguous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On one-sided communication, the target side datatype is encoded as
</span><br>
<span class="quotelev1">&gt; 'description' at the origin side and then it is decoded at the target
</span><br>
<span class="quotelev1">&gt; side. I think there are problems in both encoding stage and decoding
</span><br>
<span class="quotelev1">&gt; stage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __ompi_datatype_pack_description function in
</span><br>
<span class="quotelev1">&gt; ompi/datatype/ompi_datatype_args.c file encodes the datatype.
</span><br>
<span class="quotelev1">&gt; For MPI_COMBINER_DUP on line 451, it encodes only create_type and id
</span><br>
<span class="quotelev1">&gt; and returns immediately. It doesn't encode the information of the base
</span><br>
<span class="quotelev1">&gt; dataype (in my case, the datatype created by MPI_Type_contiguous).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __ompi_datatype_create_from_packed_description function in
</span><br>
<span class="quotelev1">&gt; ompi/datatype/ompi_datatype_args.c file decodes the description.
</span><br>
<span class="quotelev1">&gt; For MPI_COMBINER_DUP in line 557, it expects the value of data_id is
</span><br>
<span class="quotelev1">&gt; an ID of a predefined datatype. It is not always true.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot fix this problem yet because I'm not familiar with the datatype
</span><br>
<span class="quotelev1">&gt; code in Open MPI. MPI_COMBINER_DUP is also used for predefined datatypes
</span><br>
<span class="quotelev1">&gt; and the calculation of total_pack_size is also involved. It seems not
</span><br>
<span class="quotelev1">&gt; so simple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; &lt;put_dup_type.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12597.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12595.php">KAWASHIMA Takahiro: "[OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>In reply to:</strong> <a href="12595.php">KAWASHIMA Takahiro: "[OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12597.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12597.php">KAWASHIMA Takahiro: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
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
