<?
$subject_val = "[OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 31 00:12:54 2013" -->
<!-- isoreceived="20130531041254" -->
<!-- sent="Thu, 30 May 2013 21:12:48 -0700" -->
<!-- isosent="20130531041248" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="[OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set" -->
<!-- id="51A82340.3000203_at_earthlink.net" -->
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
<strong>Subject:</strong> [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-31 00:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21998.php">Neel Sunil Desai: "[OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="21996.php">Ralph Castain: "Re: [OMPI users] trying to install Open MPI 1.6.4 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI group,
<br>
<p>The following trivial program hangs on the mpi_barrier call with 1.7.1. 
<br>
&nbsp;&nbsp;I am using gfortran/gcc 4.6.3 on Ubuntu linux.  OpenMPI was built with 
<br>
--enable-mpi-thread-multiple support and no other options (other than 
<br>
--prefix).
<br>
<p>Are there additional options we should be telling configure about?  Or 
<br>
have we done something very silly?  Mpich2 works just fine...
<br>
<p>Walter Spector
<br>
<p><p>program hang
<br>
&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: me, npes
<br>
&nbsp;&nbsp;&nbsp;integer :: mpierr, provided
<br>
&nbsp;&nbsp;&nbsp;logical :: iampe0
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_init_thread (  &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_THREAD_MULTIPLE,  &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;provided,  &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpierr)
<br>
&nbsp;&nbsp;&nbsp;print *, 'hello, world!'
<br>
<p>! Hangs here with MPI_THREAD_MULTIPLE set...
<br>
&nbsp;&nbsp;&nbsp;call mpi_barrier (MPI_COMM_WORLD, mpierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_comm_rank (MPI_COMM_WORLD, me, mpierr)
<br>
&nbsp;&nbsp;&nbsp;iampe0 = me == 0
<br>
&nbsp;&nbsp;&nbsp;call mpi_comm_size (MPI_COMM_WORLD, npes, mpierr)
<br>
&nbsp;&nbsp;&nbsp;print *, 'pe:', me, ', total comm size:', npes
<br>
&nbsp;&nbsp;&nbsp;print *, 'I am ', trim (merge ('PE 0    ', 'not PE 0', iampe0))
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_finalize (mpierr)
<br>
<p>end program
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21998.php">Neel Sunil Desai: "[OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>Previous message:</strong> <a href="21996.php">Ralph Castain: "Re: [OMPI users] trying to install Open MPI 1.6.4 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
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
