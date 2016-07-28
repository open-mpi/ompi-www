<?
$subject_val = "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 11:58:17 2010" -->
<!-- isoreceived="20100125165817" -->
<!-- sent="Mon, 25 Jan 2010 17:58:32 +0100" -->
<!-- isosent="20100125165832" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3" -->
<!-- id="4B5DCDB8.5000806_at_laposte.net" -->
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
<strong>Subject:</strong> [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 11:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11868.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
</head>
<body bgcolor="#ffffff" text="#000000">
Hello, <br>
<br>
I built OpenMPI-1.4.1 without openib support with the following
configuration options:<br>
<br>
<font face="Courier 10 Pitch"><i><small>./configure
--prefix=/develop/libs/OpenMPI/openmpi-1.4.1/LINUX_GCC_4_1_tcp_mach
--enable-static --enable-shared --enable-cxx-exceptions
--enable-mpi-f77 --disable-mpi-f90 --enable-mpi-cxx
--disable-mpi-cxx-seek --enable-dist --enable-mpi-profile
--enable-binaries --enable-mpi-threads --enable-memchecker
--disable-debug --with-pic --with-threads&nbsp;&nbsp; --with-sge</small></i></font><br>
<br>
On my cluster, I run a small test (a broadcast on a 100 integer array)
on 12 processes balanced on 3 nodes, but I asked for using openib. It
works with the following messages:<br>
<br>
<font face="Courier 10 Pitch"><i><small>mpirun -np 12 -hostfile
/tmp/72936.1.64.q/machines --mca btl openib,sm,self
/home/numeca/tmp/gontier/bcast/exe_ompi_cluster -nloop 2 -nbuff 100<br>
<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
--------------------------------------------------------------------------<br>
WARNING: There was an error initializing an OpenFabrics device.<br>
<br>
&nbsp; Local host:&nbsp;&nbsp; node005<br>
&nbsp; Local device: mthca0<br>
--------------------------------------------------------------------------<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.<br>
&nbsp;&nbsp;&nbsp; This will severely limit memory registrations.<br>
processing...<br>
done<br>
[node005:04791] 11 more processes have sent help message
help-mpi-btl-openib.txt / error in device init<br>
[node005:04791] Set MCA parameter "orte_base_help_aggregate" to 0 to
see all help / error messages</small></i></font><br>
<br>
I finally run ompi_info:<br>
<br>
<font face="Courier 10 Pitch"><i><small>./ompi_info | grep openib<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.1)</small></i></font><br>
<br>
Openib seems to be supported. That is weird because I did not ask for...<br>
So, assuming the compilation of OpenMPI which does not support openib
here, what happened? Was tcp selected? How can I check which device has
been used (or force an explicit message)?<br>
By the way, what is the meaning of this message in my case?<br>
<br>
By the way, another different think: does OpenMPI must be compiled with
gcc-4.1 or later, or gcc-3.4 (for example) can be used? <br>
<br>
Thank you for your help, <br>
Mathieu.<br>
<br>
<br>
<br>
<br>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11868.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
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
