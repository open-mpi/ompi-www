<?
$subject_val = "[OMPI users] OpenMPI less fast than MPICH";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 07:59:50 2010" -->
<!-- isoreceived="20100111125950" -->
<!-- sent="Mon, 11 Jan 2010 14:00:07 +0100" -->
<!-- isosent="20100111130007" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI less fast than MPICH" -->
<!-- id="4B4B20D7.1020502_at_laposte.net" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI less fast than MPICH<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 08:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Previous message:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Reply:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
</head>
<body bgcolor="#ffffff" text="#000000">
Hi all<br>
<br>
I want to migrate my CFD application from MPICH-1.2.4 (ch_p4 device) to
OpenMPI-1.4. Hence, I compared the two libraries compiled with my
application and I noted OpenMPI is less efficient thant MPICH on
ethernet (170min with MPICH against 200min with OpenMPI). So, I wonder
if someone has more information/explanation.<br>
<br>
Here the configure options of OpenMPI:<br>
<br>
<small><i>export FC=gfortran<br>
export F77=$FC<br>
export CC=gcc<br>
export PREFIX=/usr/local/bin/openmpi-1.4<br>
./configure --prefix=$PREFIX --enable-cxx-exceptions --enable-mpi-f77
--enable-mpi-f90 --enable-mpi-cxx --enable-mpi-cxx-seek --enable-dist
--enable-mpi-profile --enable-binaries --enable-cxx-exceptions
--enable-mpi-threads --enable-memchecker --with-pic --with-threads
--with-valgrind --with-libnuma --with-openib<br>
</i></small><br>
Despite my OpenMPI compilation supports OpenIB, I did not specified any
mca/btl options because the machine does not have access to a
Infiniband interconnect. So, I guess tcp, sm and self are used (or at
least something close).<br>
<br>
Thank you for your help.<br>
Mathieu.
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Previous message:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Reply:</strong> <a href="11757.php">Aaron Knister: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
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
