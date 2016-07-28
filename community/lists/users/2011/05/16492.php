<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 09:39:15 2011" -->
<!-- isoreceived="20110509133915" -->
<!-- sent="Mon, 9 May 2011 06:39:15 -0700" -->
<!-- isosent="20110509133915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="EC07A946-E6AD-4CCC-9959-14690D498C4D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimgxRGxFtKo+_cUvpyb23zCLY-8Nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 09:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16462.php">hi: "[OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>I am able to run your test program with no problem, so I'm not quite sure what the issue is...?
<br>
<p>If op-&gt;o_func.intrinsic.fns[27] initially points to a valid value and then later it points to 0, that could imply that there is memory corruption occurring in your application somewhere.  Have you tried running through a memory-checking debugger?
<br>
<p><p>On May 6, 2011, at 9:56 AM, hi wrote:
<br>
<p><span class="quotelev1">&gt; I am observing crash in MPI_Allreduce() call from my actual application.
</span><br>
<span class="quotelev1">&gt; After debugging I found that MPI_Allreduce() with MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt; returns NULL for following code in op.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (0 != (op-&gt;o_flags &amp; OMPI_OP_FLAGS_INTRINSIC)) {
</span><br>
<span class="quotelev1">&gt;       op-&gt;o_func.intrinsic.fns[ompi_op_ddt_map[dtype-&gt;id]](source, target,
</span><br>
<span class="quotelev1">&gt;                                                            &amp;count, &amp;dtype,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; op-&gt;o_func.intrinsic.modules[ompi_op_ddt_map[dtype-&gt;id]]);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where, o_func.intrinsic.fns[27] points to 0.
</span><br>
<p><span class="quotelev1">&gt; On further debugging, I found that it is making call to
</span><br>
<span class="quotelev1">&gt; mca_coll_basic_reduce_lin_intra(); see below trace...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      libmpid.dll!ompi_op_reduce(ompi_op_t * op, void * source, void * target, int count, ompi_datatype_t * dtype)  Line 500  C++
</span><br>
<span class="quotelev1">&gt;       libmpid.dll!mca_coll_basic_reduce_lin_intra(void * sbuf, void *
</span><br>
<span class="quotelev1">&gt; rbuf, int count, ompi_datatype_t * dtype, ompi_op_t * op, int root,
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t * comm, mca_coll_base_module_2_0_0_t * module)
</span><br>
<span class="quotelev1">&gt; Line 249        C++
</span><br>
<span class="quotelev1">&gt;       libmpid.dll!mca_coll_sync_reduce(void * sbuf, void * rbuf, int
</span><br>
<span class="quotelev1">&gt; count, ompi_datatype_t * dtype, ompi_op_t * op, int root,
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t * comm, mca_coll_base_module_2_0_0_t * module)
</span><br>
<span class="quotelev1">&gt; Line 45 + 0xd4 bytes    C++
</span><br>
<span class="quotelev1">&gt;       libmpid.dll!mca_coll_basic_allreduce_intra(void * sbuf, void * rbuf,
</span><br>
<span class="quotelev1">&gt; int count, ompi_datatype_t * dtype, ompi_op_t * op,
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t * comm, mca_coll_base_module_2_0_0_t * module)
</span><br>
<span class="quotelev1">&gt; Line 57 + 0x58 bytes    C++
</span><br>
<span class="quotelev1">&gt;       libmpid.dll!MPI_Allreduce(void * sendbuf, void * recvbuf, int count,
</span><br>
<span class="quotelev1">&gt; ompi_datatype_t * datatype, ompi_op_t * op, ompi_communicator_t *
</span><br>
<span class="quotelev1">&gt; comm)  Line 107 + 0x5c bytes    C++
</span><br>
<span class="quotelev1">&gt;       libmpi_f77d.dll!mpi_allreduce_f(char * sendbuf, char * recvbuf, int
</span><br>
<span class="quotelev1">&gt; * count, int * datatype, int * op, int * comm, int * ierr)  Line 79 +
</span><br>
<span class="quotelev1">&gt; 0x34 bytes      C++
</span><br>
<span class="quotelev1">&gt;       libmpi_f77d.dll!MPI_ALLREDUCE(char * sendbuf, char * recvbuf, int *
</span><br>
<span class="quotelev1">&gt; count, int * datatype, int * op, int * comm, int * ierr)  Line 53 +
</span><br>
<span class="quotelev1">&gt; 0x67 bytes      C++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now to simulate this problem, the attached test program works fine but
</span><br>
<span class="quotelev1">&gt; I observed completely different callstack see attached images...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for information: I am executing my application using following command:
</span><br>
<span class="quotelev1">&gt; c:/openmpi/bin/orterun -mca mca_component_show_load_errors 0 --prefix
</span><br>
<span class="quotelev1">&gt; ... -x ... -x ...  --machinefile ... -np 2 myApplication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And test program using following command:
</span><br>
<span class="quotelev1">&gt; c:/openmpi/bin/mpirun mar_f_dp.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know based on what criteria &quot;coll_reduce&quot; is pointing to
</span><br>
<span class="quotelev1">&gt; &quot;mca_coll_basic_allreduce_intra() or mca_coll_self_allreduce_intra();
</span><br>
<span class="quotelev1">&gt; this would help me to debug my application further.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16462.php">hi: "[OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16493.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
