<?
$subject_val = "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 07:46:47 2013" -->
<!-- isoreceived="20130515114647" -->
<!-- sent="Wed, 15 May 2013 20:46:40 +0900" -->
<!-- isosent="20130515114640" -->
<!-- name="Hayato KUNIIE" -->
<!-- email="kuni255_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype" -->
<!-- id="519375A0.3030309_at_oita.email.ne.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F620965_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype<br>
<strong>From:</strong> Hayato KUNIIE (<em>kuni255_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 07:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21907.php">H Hogreve: "[OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Previous message:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>In reply to:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Reply:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I using Ver, 1.6.4 in all nodes.
<br>
<p>(2013/05/15 7:10), Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Are you sure that you have exactly the same version of Open MPI on all your nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 14, 2013, at 11:39 AM, Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello I'm kuni255
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
</span><br>
<span class="quotelev2">&gt;&gt; about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REDUCE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, Error occured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This cluster system consist of one head node and 2 slave nodes.
</span><br>
<span class="quotelev2">&gt;&gt; And sharing home directory in head node by NFS. so Open MPI is installed
</span><br>
<span class="quotelev2">&gt;&gt; each nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I test this program on only head node, program is run correctly.
</span><br>
<span class="quotelev2">&gt;&gt; and output result.
</span><br>
<span class="quotelev2">&gt;&gt; But When I test this program on only slave node, same error occured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please tell me, good idea : )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error message
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
</span><br>
<span class="quotelev2">&gt;&gt; operation MPI_SUM is not defined on the MPI_INTEGER datatype
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt;&gt; [bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 1 with PID 30793 on
</span><br>
<span class="quotelev2">&gt;&gt; node bwslv01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [bwhead.clnet:02147] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt;&gt; [bwhead.clnet:02147] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev2">&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 source code
</span><br>
<span class="quotelev2">&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; parameter(nmax=12)
</span><br>
<span class="quotelev2">&gt;&gt; integer n(nmax)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_comm_size(MPI_COMM_WORLD, isize, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_comm_rank(MPI_COMM_WORLD, irank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; ista=irank*(nmax/isize) + 1
</span><br>
<span class="quotelev2">&gt;&gt; iend=ista+(nmax/isize-1)
</span><br>
<span class="quotelev2">&gt;&gt; isum=0
</span><br>
<span class="quotelev2">&gt;&gt; do i=1,nmax
</span><br>
<span class="quotelev2">&gt;&gt; n(i) = i
</span><br>
<span class="quotelev2">&gt;&gt; isum = isum + n(i)
</span><br>
<span class="quotelev2">&gt;&gt; end do
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_reduce(isum, itmp, 1, MPI_INTEGER, MPI_SUM,
</span><br>
<span class="quotelev2">&gt;&gt; &amp; 0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (irank == 0) then
</span><br>
<span class="quotelev2">&gt;&gt; isum=itmp
</span><br>
<span class="quotelev2">&gt;&gt; WRITE(*,*) isum
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21907.php">H Hogreve: "[OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Previous message:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>In reply to:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Reply:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
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
