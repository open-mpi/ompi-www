<?
$subject_val = "[OMPI users] hybrid programming and OpenMPI compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 12:37:26 2015" -->
<!-- isoreceived="20150625163726" -->
<!-- sent="Thu, 25 Jun 2015 18:37:21 +0200" -->
<!-- isosent="20150625163721" -->
<!-- name="Fedele Stabile" -->
<!-- email="fedele.stabile_at_[hidden]" -->
<!-- subject="[OMPI users] hybrid programming and OpenMPI compilation" -->
<!-- id="1435250241.6175.25.camel_at_tango.fis.unical.it" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] hybrid programming and OpenMPI compilation<br>
<strong>From:</strong> Fedele Stabile (<em>fedele.stabile_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 12:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27193.php">Howard Pritchard: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Previous message:</strong> <a href="27191.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27193.php">Howard Pritchard: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Reply:</strong> <a href="27193.php">Howard Pritchard: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello to all,
<br>
I'm trying hybrid OpenMP + MPI programming, when I run the simple code
<br>
listed below I have an error:
<br>
forrtl: severe (40): recursive I/O operation, unit -1, file unknown
<br>
Image              PC                Routine            Line
<br>
Source             
<br>
aa                 0000000000403D8E  Unknown               Unknown
<br>
Unknown
<br>
aa                 0000000000403680  Unknown               Unknown
<br>
Unknown
<br>
libiomp5.so        00002B705F7C5BB3  Unknown               Unknown
<br>
Unknown
<br>
libiomp5.so        00002B705F79A617  Unknown               Unknown
<br>
Unknown
<br>
libiomp5.so        00002B705F799D3A  Unknown               Unknown
<br>
Unknown
<br>
libiomp5.so        00002B705F7C5EAD  Unknown               Unknown
<br>
Unknown
<br>
libpthread.so.0    00002B705FA699D1  Unknown               Unknown
<br>
Unknown
<br>
libc.so.6          00002B705FD688FD  Unknown               Unknown
<br>
Unknown
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[61634,1],0]
<br>
&nbsp;&nbsp;Exit code:    40
<br>
<p>I have compiled OpenMPI using this configuration options:
<br>
./configure --prefix=/data/apps/mpi/openmpi-1.8.4-intel
<br>
-enable-mpirun-prefix-by-default --enable-mpi-fortran
<br>
--enable-mpi-thread-multiple
<br>
--with-tm=/usr/local/torque-5.1.0-1_4048f77c/src --with-verbs
<br>
--with-openib --with-cuda=/usr/local/cuda-6.5
<br>
<p>This is the listing of the simple code:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer numprocs, rank, namelen, ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*(MPI_MAX_PROCESSOR_NAME) processor_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer iam, np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer omp_get_num_threads, omp_get_thread_num
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_size(MPI_COMM_WORLD, numprocs, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_rank(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Get_processor_name(processor_name, namelen, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iam = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np = 1
<br>
!$omp parallel default(shared) private(iam, np)
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np = omp_get_num_threads()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iam = omp_get_thread_num();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)&quot;Hello from thread &quot;, iam,&quot; out of &quot;, np,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%		&quot; from process &quot;, rank,&quot; out of &quot;, numprocs, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% 		&quot; on &quot;, processor_name
<br>
<p>!$omp end parallel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>Can you help me to solve the problem?
<br>
Thank you,
<br>
Fedele Stabile
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27193.php">Howard Pritchard: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Previous message:</strong> <a href="27191.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27193.php">Howard Pritchard: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Reply:</strong> <a href="27193.php">Howard Pritchard: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
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
