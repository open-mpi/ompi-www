<?
$subject_val = "[OMPI users] Failure in MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 10:12:23 2009" -->
<!-- isoreceived="20090721141223" -->
<!-- sent="Tue, 21 Jul 2009 16:12:01 +0200" -->
<!-- isosent="20090721141201" -->
<!-- name="Guillaume Sylvand" -->
<!-- email="guillaume.sylvand_at_[hidden]" -->
<!-- subject="[OMPI users] Failure in MPI_Gather" -->
<!-- id="4A65CCB1.5020606_at_eads.net" -->
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
<strong>Subject:</strong> [OMPI users] Failure in MPI_Gather<br>
<strong>From:</strong> Guillaume Sylvand (<em>guillaume.sylvand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 10:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10024.php">Song, Kai Song: "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
</head>
<body bgcolor="#ffffff" text="#000000">
Hi,<br>
<br>
I'm having a problem with MPI_Gather in openMPI 1.3.3. The code that
fails here works fine with mpich1.2.5, mpich2 1.1 and hpmpi 2.2.5 (I'm
not blaming anyone, I just want to understand !). My code runs locally
on a
bi-pro, debian 32 bits, with 2 processes, and fails during an
MPI_Gather call with the following message :<br>
<blockquote><tt>[sabrina:14631] *** An error occurred in MPI_Gather<br>
[sabrina:14631] *** on communicator MPI COMMUNICATOR 37 SPLIT
FROM 5<br>
[sabrina:14631] *** MPI_ERR_TRUNCATE: message truncated<br>
[sabrina:14631] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
abort)<br>
  </tt> </blockquote>
when I run it with memchecker, valgrind produces the following message
about an uninitialised value (I know that sometimes valgrind is wrong
about this kind of error) :<br>
<blockquote><tt>==14634==<br>
==14634== Conditional jump or move depends on uninitialised
value(s)<br>
==14634==&nbsp;&nbsp;&nbsp; at 0x42E3A4C: ompi_convertor_need_buffers
(convertor.h:175)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x42E3800: mca_pml_ob1_recv_request_ack
(pml_ob1_recvreq.c:264)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x42E5566: mca_pml_ob1_recv_request_progress_rndv
(pml_ob1_recvreq.c:554)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x42E1316: mca_pml_ob1_recv_frag_match
(pml_ob1_recvfrag.c:641)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x42DFFDD: mca_pml_ob1_recv_frag_callback_rndv
(pml_ob1_recvfrag.c:259)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x42322E7: mca_btl_sm_component_progress
(btl_sm_component.c:426)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x44E3CF4: opal_progress (opal_progress.c:207)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x41A6E66: opal_condition_wait (condition.h:99)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x41A73E6: ompi_request_default_wait_all
(req_wait.c:262)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x424E99A:
ompi_coll_tuned_gather_intra_linear_sync (coll_tuned_gather.c:328)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x423CB98: ompi_coll_tuned_gather_intra_dec_fixed
(coll_tuned_decision_fixed.c:718)<br>
==14634==&nbsp;&nbsp;&nbsp; by 0x4252B9E: mca_coll_sync_gather
(coll_sync_gather.c:46)<br>
==14634==<br>
  </tt> </blockquote>
<br>
This is the first error message, if we except those produced during
MPI_Init(). If I attach the debugger, I get the following backtrace :<br>
<blockquote><tt>0x042e3a4c in ompi_convertor_need_buffers
(pConvertor=0x4a2c000)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/datatype/convertor.h:175<br>
175&nbsp;&nbsp;&nbsp;&nbsp; ../../../../../../ompi/datatype/convertor.h: No such file
or directory.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; in ../../../../../../ompi/datatype/convertor.h<br>
(gdb) where<br>
#0&nbsp; 0x042e3a4c in ompi_convertor_need_buffers
(pConvertor=0x4a2c000)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/datatype/convertor.h:175<br>
#1&nbsp; 0x042e3801 in mca_pml_ob1_recv_request_ack (recvreq=0x4a2bf80,<br>
&nbsp;&nbsp;&nbsp; hdr=0x95b0a90, bytes_received=4032)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/mca/pml/ob1/pml_ob1_recvreq.c:264<br>
#2&nbsp; 0x042e5567 in mca_pml_ob1_recv_request_progress_rndv
(recvreq=0x4a2bf80,<br>
&nbsp;&nbsp;&nbsp; btl=0x4375260, segments=0xbecc3490, num_segments=1)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/mca/pml/ob1/pml_ob1_recvreq.c:554<br>
#3&nbsp; 0x042e1317 in mca_pml_ob1_recv_frag_match (btl=0x4375260,
hdr=0x95b0a90,<br>
&nbsp;&nbsp;&nbsp; segments=0xbecc3490, num_segments=1, type=66)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/mca/pml/ob1/pml_ob1_recvfrag.c:641<br>
#4&nbsp; 0x042dffde in mca_pml_ob1_recv_frag_callback_rndv
(btl=0x4375260,<br>
&nbsp;&nbsp;&nbsp; tag=66 'B', des=0xbecc3438, cbdata=0x0)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/mca/pml/ob1/pml_ob1_recvfrag.c:259<br>
#5&nbsp; 0x042322e8 in mca_btl_sm_component_progress ()<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/mca/btl/sm/btl_sm_component.c:426<br>
#6&nbsp; 0x044e3cf5 in opal_progress () at
../../../opal/runtime/opal_progress.c:207<br>
#7&nbsp; 0x041a6e67 in opal_condition_wait (c=0x4382700, m=0x4382760)<br>
&nbsp;&nbsp;&nbsp; at ../../../opal/threads/condition.h:99<br>
#8&nbsp; 0x041a73e7 in ompi_request_default_wait_all (count=2,
requests=0x4ef5360,<br>
&nbsp;&nbsp;&nbsp; statuses=0x0) at ../../../ompi/request/req_wait.c:262<br>
#9&nbsp; 0x0424e99b in ompi_coll_tuned_gather_intra_linear_sync
(sbuf=0x4ebd438,<br>
&nbsp;&nbsp;&nbsp; scount=3016, sdtype=0x4a3aa70, rbuf=0x4ecda00, rcount=1,
rdtype=0x4f4b348,<br>
&nbsp;&nbsp;&nbsp; root=0, comm=0x4d0d8a8, module=0x4d0e220,
first_segment_size=1024)<br>
&nbsp;&nbsp;&nbsp; at
../../../../../../ompi/mca/coll/tuned/coll_tuned_gather.c:328<br>
#10 0x0423cb99 in ompi_coll_tuned_gather_intra_dec_fixed
(sbuf=0x4ebd438,<br>
&nbsp;&nbsp;&nbsp; scount=3016, sdtype=0x4a3aa70, rbuf=0x4ecda00, rcount=1,
rdtype=0x4f4b348,<br>
&nbsp;&nbsp;&nbsp; root=0, comm=0x4d0d8a8, module=0x4d0e220)<br>
&nbsp;&nbsp;&nbsp; at
../../../../../../ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:718<br>
#11 0x04252b9f in mca_coll_sync_gather (sbuf=0x4ebd438,
scount=3016,<br>
&nbsp;&nbsp;&nbsp; sdtype=0x4a3aa70, rbuf=0x4ecda00, rcount=1, rdtype=0x4f4b348,
root=0,<br>
&nbsp;&nbsp;&nbsp; comm=0x4d0d8a8, module=0x4d0e098)<br>
&nbsp;&nbsp;&nbsp; at ../../../../../../ompi/mca/coll/sync/coll_sync_gather.c:46<br>
#12 0x041db441 in PMPI_Gather (sendbuf=0x4ebd438, sendcount=3016,<br>
&nbsp;&nbsp;&nbsp; sendtype=0x4a3aa70, recvbuf=0x4ecda00, recvcount=1,
recvtype=0x4f4b348,<br>
&nbsp;&nbsp;&nbsp; root=0, comm=0x4d0d8a8) at pgather.c:175<br>
#13 0x082a47c9 in MPF_GEMV_SPARSE_INCORE (comm_row=0x4d0ce38,<br>
&nbsp;&nbsp;&nbsp; comm_col=0x4d0d8a8, transa=84 'T', M=232, N=464, P=232, Q=13,<br>
&nbsp;&nbsp;&nbsp; ALPHA=0x8d22e88, gBuffer=0x4f4aec0, bufferB=0x4f3f210,
bufferC=0x4ebd438)<br>
&nbsp;&nbsp;&nbsp; at
/home/gsylvand/BE_COMMON/MPF/src/MAT/IMPLS/SPARSE/matgemv_sparse.c:160<br>
#14 0x082a592b in MPF_GEMV_SPARSE (TRANSA=0xbecc38f7 "T",
ALPHA=0x8d22e88,<br>
&nbsp;&nbsp;&nbsp; matA=0x4d0b7d0, vecB=0x4cbb7e0, BETA=0x8d22e88,
vecC=0x4f3d8f0)<br>
&nbsp;&nbsp;&nbsp; at
/home/gsylvand/BE_COMMON/MPF/src/MAT/IMPLS/SPARSE/matgemv_sparse.c:331<br>
#15 0x08251f2a in MPF_GEMV (transa=0x8c937ec "T", alpha=0x8d22e88,<br>
&nbsp;&nbsp;&nbsp; matA=0x4d0b7d0, vecB=0x4cbb7e0, beta=0x8d22e88,
vecC=0x4f3d8f0)<br>
&nbsp;&nbsp;&nbsp; at
/home/gsylvand/BE_COMMON/MPF/src/MAT/INTERFACE/mat_gemv.c:150<br>
#16 0x080ab641 in main (argc=1, argv=0xbecc3aa4)<br>
&nbsp;&nbsp;&nbsp; at /home/gsylvand/ACTIPOLE/src/COUCHA/SRC/coucha.c:358<br>
  </tt> </blockquote>
The content of pConvertor is :<br>
<blockquote><tt>(gdb)&nbsp; p pConvertor[0]</tt><br>
  <tt>$2 = {super = {obj_magic_id = 16046253926196952813, obj_class =
0x43741e0,</tt><br>
  <tt>&nbsp;&nbsp;&nbsp; obj_reference_count = 1,</tt><br>
  <tt>&nbsp;&nbsp;&nbsp; cls_init_file_name = 0x435687c
"../../../../../ompi/mca/pml/base/pml_base_recvreq.c", cls_init_lineno
= 42}, remoteArch = 4291428864, flags = 134873088,</tt><br>
  <tt>&nbsp; local_size = 0, remote_size = 0, pDesc = 0x0, use_desc = 0x0,
count = 0,</tt><br>
  <tt>&nbsp; pBaseBuf = 0x0, pStack = 0x4a2c060, stack_size = 5, fAdvance =
0,</tt><br>
  <tt>&nbsp; master = 0x485eb60, stack_pos = 0, bConverted = 0,
partial_length = 0,</tt><br>
  <tt>&nbsp; checksum = 0, csum_ui1 = 0, csum_ui2 = 0, static_stack =
{{index = 0,</tt><br>
  <tt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type = 0, count = 0, disp = 0}, {index = 0, type = 0, count
= 0,</tt><br>
  <tt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp = 0}, {index = 0, type = 0, count = 0, disp = 0},
{index = 0,</tt><br>
  <tt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type = 0, count = 0, disp = 0}, {index = 0, type = 0, count
= 0,</tt><br>
  <tt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp = 0}}}</tt><br>
</blockquote>
<br>
The MPI_Gather that fails is a bit complicated, since it uses MPI type
created with MPI_Type_vector and MPI_Struct. The call is :<br>
<blockquote><tt>/* here we have N=464 P=232 Q=13 */<br>
&nbsp;&nbsp;&nbsp; bufferC = calloc(P * Q, 2*sizeof(double));<br>
&nbsp;&nbsp;&nbsp; bufferE = calloc(N * Q, 2*sizeof(double));<br>
....<br>
&nbsp;&nbsp;&nbsp; ierr = MPI_Gather( bufferC, P*Q, BasicType, bufferE, 1,
NStridedType, 0, comm_col );<br>
  </tt> </blockquote>
where BasicType is a double complex created with :<br>
<blockquote><tt>&nbsp;&nbsp;&nbsp; MPI_Type_contiguous(2, MPI_DOUBLE, &amp;BasicType);<br>
&nbsp;&nbsp;&nbsp; MPI_Type_commit(&amp;BasicType);<br>
  </tt> </blockquote>
and NStridedType is an array of Q blocks of P complexes every N with
extent=P, created with :<br>
<blockquote><tt>&nbsp; MPI_Type_vector(Q, P, N, BasicType,
&amp;QPNStridedType) ; /* Q blocks of P BasicType every N */<br>
&nbsp; disp[0]=0 ;<br>
&nbsp; type[0]=QPNStridedType ;<br>
&nbsp; blocklen[0]=1 ;<br>
&nbsp; MPI_Type_extent(BasicType, &amp;(disp[1]) ) ;<br>
&nbsp; disp[1] *= P ;<br>
&nbsp; type[1]=MPI_UB ;<br>
&nbsp; blocklen[1]=1 ;<br>
&nbsp; MPI_Type_struct(2, blocklen, disp, type, &amp;NStridedType) ;
/* Just to set the extent=P */<br>
&nbsp; MPI_Type_commit(&amp;NStridedType) ;<br>
  </tt> </blockquote>
<br>
As mentionned earlier, this works with other MPI implementation, and
this kind of mechanism is widely used in this code, and it works
(usually) fine.<br>
Moreover, if I replace MPI_Gather by MPI_Allgather, no more bugs, it
works :<br>
<blockquote><tt>ierr = MPI_Allgather( bufferC, P*Q, BasicType, bufferE,
1, NStridedType, comm_col ); CHKERRQ(ierr) ;<br>
  </tt></blockquote>
Another strange thing is that if I try to produce a small test.c code
with these commands to reproduce this bug, no more bug ! It works :(<br>
Any suggestions on something to test ?<br>
Thanks in advance for your help,<br>
Best regards,<br>
<br>
Guillaume<br>
<pre class="moz-signature" cols="72">-- 
Guillaume SYLVAND</pre>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10024.php">Song, Kai Song: "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
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
