<?
$subject_val = "[OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 12:06:55 2010" -->
<!-- isoreceived="20100708160655" -->
<!-- sent="Thu, 8 Jul 2010 17:06:49 +0100" -->
<!-- isosent="20100708160649" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="[OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory" -->
<!-- id="20100708160649.GA36636_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory<br>
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 12:06:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13546.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13544.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<li><strong>Reply:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to use MPI with fortran on Linux 2.6.18-164.6.1.el5 x86_64
<br>
I compiled this trivial code with mpif90:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer numtasks, rank, ierr, rc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc=1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ierr .ne. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *,'Error starting MPI program. Terminating.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ABORT(MPI_COMM_WORLD, rc, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Number of tasks=',numtasks,' My rank=',rank
<br>
<p>!    ****** do some work ******
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>I run it with mpirun.
<br>
<p>When I use 2 cpus or less, all is fine.
<br>
<p>When I try to specify more than 2 cpus I get this error:
<br>
<p>u02n065:0.ipath_userinit: userinit command failed: Cannot allocate memory
<br>
u02n065:0.Driver initialization failure on /dev/ipath
<br>
<p>where u02n065 is the node name.
<br>
<p>Please advise
<br>
<p>many thanks
<br>
anton
<br>
<p><p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13546.php">Gus Correa: "Re: [OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13544.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<li><strong>Reply:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
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
