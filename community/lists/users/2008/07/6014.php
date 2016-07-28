<?
$subject_val = "[OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 12:46:49 2008" -->
<!-- isoreceived="20080702164649" -->
<!-- sent="Wed, 02 Jul 2008 11:46:42 -0500" -->
<!-- isosent="20080702164642" -->
<!-- name="Steve Johnson" -->
<!-- email="steve_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid" -->
<!-- id="486BB0F2.7020000_at_isc.tamu.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid<br>
<strong>From:</strong> Steve Johnson (<em>steve_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 12:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>Previous message:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>Reply:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If mpirun is given an application that isn't in the PATH, then instead of 
<br>
exiting it prints the error that it failed to find the executable and then 
<br>
proceeds spins up cpu time.  strace shows an endless stream of sched_yield().
<br>
<p>For example, if &quot;blah&quot; doesn't exist:
<br>
mpirun -np 16 blah
<br>
Ditto if ./blah doesn't exist and mpirun is called as
<br>
mpirun -np 16 ./blah
<br>
<p>OS: CentOS 5.1
<br>
Kernel: 2.6.18-92.1.1.el5.centos.plus
<br>
Arch: x86_64
<br>
glibc/pthread: glibc-2.5-18.el5_1.1
<br>
GCC: 4.1.2-14.el5
<br>
<p>CC=gcc
<br>
CXX=g++
<br>
F77=gfortran
<br>
FC=gfortran
<br>
./configure --with-tm --prefix=$HOME/openmpi --libdir=$HOME/openmpi/lib64 
<br>
--enable-mpi-threads
<br>
<p>A qsig -s 15 will terminate the mpirun processes.
<br>
<p>ompi_info is at <a href="http://isc.tamu.edu/~steve/ompi_info.txt">http://isc.tamu.edu/~steve/ompi_info.txt</a>
<br>
config.log.bz is at <a href="http://isc.tamu.edu/~steve/ompi_config.log.bz2">http://isc.tamu.edu/~steve/ompi_config.log.bz2</a>
<br>
<p>Also confirmed this on openSUSE 10.2, 2.6.18.8-0.9-default, x86_64, 
<br>
glibc-2.5-34.7, gcc-4.1.3-29.
<br>
<p>// Steve
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>Previous message:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>Reply:</strong> <a href="6015.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
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
