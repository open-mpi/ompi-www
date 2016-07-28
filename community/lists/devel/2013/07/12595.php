<?
$subject_val = "[OMPI devel] [bug] One-sided communication with a duplicated datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 14 08:30:35 2013" -->
<!-- isoreceived="20130714123035" -->
<!-- sent="Sun, 14 Jul 2013 21:30:13 +0900" -->
<!-- isosent="20130714123013" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [bug] One-sided communication with a duplicated datatype" -->
<!-- id="20130714213013.447e8619a3463fcb6f8d6713_at_nifty.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [bug] One-sided communication with a duplicated datatype<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-14 08:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I encountered an assertion failure in Open MPI trunk and found a bug.
<br>
<p>See the attached program. This program can be run with mpiexec -n 1.
<br>
This program calls MPI_Put and writes one int value to the target side.
<br>
The target side datatype is equivalent to MPI_INT, but is a derived
<br>
datatype created by MPI_Type_contiguous and MPI_Type_Dup.
<br>
<p>This program aborts with the following output.
<br>
<p>==========================================================================
<br>
#### dt1 (0x2626160) ####
<br>
type 2 count ints 1 count disp 0 count datatype 1
<br>
ints:     1 
<br>
types:    MPI_INT 
<br>
#### dt2 (0x2626340) ####
<br>
type 1 count ints 0 count disp 0 count datatype 1
<br>
types:    0x2626160 
<br>
put_dup_type: ../../../ompi/datatype/ompi_datatype_args.c:565: __ompi_datatype_create_from_packed_description: Assertion `data_id &lt; 45' failed.
<br>
[ppc:05244] *** Process received signal ***
<br>
[ppc:05244] Signal: Aborted (6)
<br>
[ppc:05244] Signal code:  (-6)
<br>
[ppc:05244] [ 0] /lib/libpthread.so.0(+0xeff0) [0x7fe58a275ff0]
<br>
[ppc:05244] [ 1] /lib/libc.so.6(gsignal+0x35) [0x7fe589f371b5]
<br>
[ppc:05244] [ 2] /lib/libc.so.6(abort+0x180) [0x7fe589f39fc0]
<br>
[ppc:05244] [ 3] /lib/libc.so.6(__assert_fail+0xf1) [0x7fe589f30301]
<br>
[ppc:05244] [ 4] /ompi/lib/libmpi.so.0(+0x6504e) [0x7fe58a4e804e]
<br>
[ppc:05244] [ 5] /ompi/lib/libmpi.so.0(ompi_datatype_create_from_packed_description+0x23) [0x7fe58a4e8cf6]
<br>
[ppc:05244] [ 6] /ompi/lib/openmpi/mca_osc_rdma.so(+0xd04b) [0x7fe5839a104b]
<br>
[ppc:05244] [ 7] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_sendreq_recv_put+0xa8) [0x7fe5839a3ae5]
<br>
[ppc:05244] [ 8] /ompi/lib/openmpi/mca_osc_rdma.so(+0x86cc) [0x7fe58399c6cc]
<br>
[ppc:05244] [ 9] /ompi/lib/openmpi/mca_btl_self.so(mca_btl_self_send+0x87) [0x7fe58510bb04]
<br>
[ppc:05244] [10] /ompi/lib/openmpi/mca_osc_rdma.so(+0xc44b) [0x7fe5839a044b]
<br>
[ppc:05244] [11] /ompi/lib/openmpi/mca_osc_rdma.so(+0xd69d) [0x7fe5839a169d]
<br>
[ppc:05244] [12] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_flush+0x50) [0x7fe5839a1776]
<br>
[ppc:05244] [13] /ompi/lib/openmpi/mca_osc_rdma.so(ompi_osc_rdma_module_fence+0x8e6) [0x7fe5839a84ab]
<br>
[ppc:05244] [14] /ompi/lib/libmpi.so.0(MPI_Win_fence+0x16f) [0x7fe58a54127d]
<br>
[ppc:05244] [15] ompi-trunk/put_dup_type() [0x400d10]
<br>
[ppc:05244] [16] /lib/libc.so.6(__libc_start_main+0xfd) [0x7fe589f23c8d]
<br>
[ppc:05244] [17] put_dup_type() [0x400b09]
<br>
[ppc:05244] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 5244 on node ppc exited on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
==========================================================================
<br>
<p>__ompi_datatype_create_from_packed_description function, in which the
<br>
assertion failure occurred, seems to expect the value of data_id is an
<br>
ID of a predefined datatype. In my environment, the value of data_id
<br>
is 68, that is an ID of the datatype created by MPI_Type_contiguous.
<br>
<p>On one-sided communication, the target side datatype is encoded as
<br>
'description' at the origin side and then it is decoded at the target
<br>
side. I think there are problems in both encoding stage and decoding
<br>
stage.
<br>
<p>__ompi_datatype_pack_description function in
<br>
ompi/datatype/ompi_datatype_args.c file encodes the datatype.
<br>
For MPI_COMBINER_DUP on line 451, it encodes only create_type and id
<br>
and returns immediately. It doesn't encode the information of the base
<br>
dataype (in my case, the datatype created by MPI_Type_contiguous).
<br>
<p>__ompi_datatype_create_from_packed_description function in
<br>
ompi/datatype/ompi_datatype_args.c file decodes the description.
<br>
For MPI_COMBINER_DUP in line 557, it expects the value of data_id is
<br>
an ID of a predefined datatype. It is not always true.
<br>
<p>I cannot fix this problem yet because I'm not familiar with the datatype
<br>
code in Open MPI. MPI_COMBINER_DUP is also used for predefined datatypes
<br>
and the calculation of total_pack_size is also involved. It seems not
<br>
so simple.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12595/put_dup_type.c">put_dup_type.c</a>
</ul>
<!-- attachment="put_dup_type.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Previous message:</strong> <a href="12594.php">Vasiliy: "Re: [OMPI devel] basename: a faulty warning 'extra operand --test-name' in tests causes test-driver to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
<li><strong>Reply:</strong> <a href="12596.php">George Bosilca: "Re: [OMPI devel] [bug] One-sided communication with a duplicated datatype"</a>
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
