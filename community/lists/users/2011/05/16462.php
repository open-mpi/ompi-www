<?
$subject_val = "[OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:56:50 2011" -->
<!-- isoreceived="20110506165650" -->
<!-- sent="Fri, 6 May 2011 04:56:45 -1200" -->
<!-- isosent="20110506165645" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="[OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="BANLkTimgxRGxFtKo+_cUvpyb23zCLY-8Nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 12:56:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16463.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16463.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe reply:</strong> <a href="16463.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16492.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe reply:</strong> <a href="16657.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings!!!
<br>
<p>I am observing crash in MPI_Allreduce() call from my actual application.
<br>
After debugging I found that MPI_Allreduce() with MPI_DOUBLE_PRECISION
<br>
returns NULL for following code in op.h
<br>
<p>if (0 != (op-&gt;o_flags &amp; OMPI_OP_FLAGS_INTRINSIC)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;op-&gt;o_func.intrinsic.fns[ompi_op_ddt_map[dtype-&gt;id]](source, target,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;count, &amp;dtype,
<br>
<p>op-&gt;o_func.intrinsic.modules[ompi_op_ddt_map[dtype-&gt;id]]);
<br>
<p>where, o_func.intrinsic.fns[27] points to 0.
<br>
<p>On further debugging, I found that it is making call to
<br>
mca_coll_basic_reduce_lin_intra(); see below trace...
<br>
<p><span class="quotelev1">&gt;       libmpid.dll!ompi_op_reduce(ompi_op_t * op, void * source, void * target, int count, ompi_datatype_t * dtype)  Line 500  C++
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!mca_coll_basic_reduce_lin_intra(void * sbuf, void *
<br>
rbuf, int count, ompi_datatype_t * dtype, ompi_op_t * op, int root,
<br>
ompi_communicator_t * comm, mca_coll_base_module_2_0_0_t * module)
<br>
Line 249        C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!mca_coll_sync_reduce(void * sbuf, void * rbuf, int
<br>
count, ompi_datatype_t * dtype, ompi_op_t * op, int root,
<br>
ompi_communicator_t * comm, mca_coll_base_module_2_0_0_t * module)
<br>
Line 45 + 0xd4 bytes    C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!mca_coll_basic_allreduce_intra(void * sbuf, void * rbuf,
<br>
int count, ompi_datatype_t * dtype, ompi_op_t * op,
<br>
ompi_communicator_t * comm, mca_coll_base_module_2_0_0_t * module)
<br>
Line 57 + 0x58 bytes    C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!MPI_Allreduce(void * sendbuf, void * recvbuf, int count,
<br>
ompi_datatype_t * datatype, ompi_op_t * op, ompi_communicator_t *
<br>
comm)  Line 107 + 0x5c bytes    C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77d.dll!mpi_allreduce_f(char * sendbuf, char * recvbuf, int
<br>
* count, int * datatype, int * op, int * comm, int * ierr)  Line 79 +
<br>
0x34 bytes      C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77d.dll!MPI_ALLREDUCE(char * sendbuf, char * recvbuf, int *
<br>
count, int * datatype, int * op, int * comm, int * ierr)  Line 53 +
<br>
0x67 bytes      C++
<br>
<p><p>Now to simulate this problem, the attached test program works fine but
<br>
I observed completely different callstack see attached images...
<br>
<p>Just for information: I am executing my application using following command:
<br>
c:/openmpi/bin/orterun -mca mca_component_show_load_errors 0 --prefix
<br>
... -x ... -x ...  --machinefile ... -np 2 myApplication
<br>
<p>And test program using following command:
<br>
c:/openmpi/bin/mpirun mar_f_dp.exe
<br>
<p><p>Please let me know based on what criteria &quot;coll_reduce&quot; is pointing to
<br>
&quot;mca_coll_basic_allreduce_intra() or mca_coll_self_allreduce_intra();
<br>
this would help me to debug my application further.
<br>
<p>Thank you in advance.
<br>
-Hiral
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16463.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16463.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe reply:</strong> <a href="16463.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16492.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe reply:</strong> <a href="16657.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
