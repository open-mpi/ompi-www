<?
$subject_val = "[OMPI users] building boost.mpi with openmpi: mpi.jam";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 13:36:22 2011" -->
<!-- isoreceived="20110611173622" -->
<!-- sent="Sat, 11 Jun 2011 18:36:15 +0100" -->
<!-- isosent="20110611173615" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] building boost.mpi with openmpi: mpi.jam" -->
<!-- id="000001cc285e$11cf7ff0$356e7fd0$_at_com" -->
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
<strong>Subject:</strong> [OMPI users] building boost.mpi with openmpi: mpi.jam<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-11 13:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16709.php">Frédéric Feyel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>boost: 1.46.1
<br>
openmpi: 1.5.3
<br>
winxp : 64bit
<br>
<p>For openmpi mailing list users, boost comes with a boost.MPI library which
<br>
is a C++-nativized library that wraps around any MPI-1 implementation
<br>
available.
<br>
Boost libraries can be built with bjam, a tool that is part of a build
<br>
system. It comes with a number of .jam files that describe how to build some
<br>
items. One file is mpi.jam that is used to help build boost.mpi and that
<br>
detects the installed MPI implementation.
<br>
<p>8 months ago roughly, I've removed a large chunk of if tests from mpi.jam
<br>
that allowed me to build boost.mpi successfully against openmpi.
<br>
<p>I'm trying now to do the same thing w 1.46.1 (but I'm not 100% certain that
<br>
I am trying exactly the same thing) and this time MPI autodetection fails.
<br>
<p>I've created a boost trac ticket
<br>
<a href="https://svn.boost.org/trac/boost/ticket/5602">https://svn.boost.org/trac/boost/ticket/5602</a> for this issue and would
<br>
appreciate if someone helped me tweak the .jam file to recognize the openmpi
<br>
implementation,
<br>
<p>It would be pretty cool if mpi.jam could pick up openmpi by default where
<br>
the openmpi installer 32bit version and 64bit version installed it, on
<br>
either win32 or win64 systems.
<br>
<p>regards,
<br>
<p>H
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16709.php">Frédéric Feyel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16707.php">Shiqing Fan: "Re: [OMPI users] mpi.h:: OMPI_HAVE_FORTRAN_LOGICAL / INTEGER / REAL are	set to 0 (zero)"</a>
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
