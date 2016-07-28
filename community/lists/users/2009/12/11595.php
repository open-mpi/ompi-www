<?
$subject_val = "[OMPI users] Unable to run WRF on large core counts (1024+), queue pair error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 18:16:35 2009" -->
<!-- isoreceived="20091217231635" -->
<!-- sent="Thu, 17 Dec 2009 16:14:58 -0700" -->
<!-- isosent="20091217231458" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Unable to run WRF on large core counts (1024+), queue pair error" -->
<!-- id="4B2ABB72.4030403_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2678f00e3443debc62e28824114b9d04.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> [OMPI users] Unable to run WRF on large core counts (1024+), queue pair error<br>
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 18:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>In reply to:</strong> <a href="11593.php">Kevin.Buckley_at_[hidden]: "[OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to run WRF on 1024 cores with OpenMPI 1.3.3 and
<br>
1.4.  I can get the code to run with 512 cores, but it crashes
<br>
at startup on 1024 cores.  I am getting the following error message:
<br>
<p>[n172][[43536,1],0][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[n172][[43536,1],0][connect/btl_openib_connect_oob.c:809:rml_recv_cb] error in endpoint reply start connect
<br>
<p>&nbsp;From google, I have tried to change the settings for btl_openib_receive_queues,
<br>
but my tries have not worked.  Here was my latest try to reduce the
<br>
total queue pairs.
<br>
<p>mpirun -np 1024 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-mca btl_openib_receive_queues P,128,2048,128,128:S,65536,256,192,128 \
<br>
&nbsp;&nbsp;&nbsp;`wrf.exe
<br>
<p>These settings did not help.
<br>
<p>Am I looking in the right place?
<br>
<p>System setup:
<br>
Centos-5.3
<br>
Ofed-1.4.1
<br>
Intel Compiler 11.1.038
<br>
Openmpi-1.3.3 and 1.4
<br>
<p>Build options:
<br>
<p>./configure CC=icc CXX=icpc F77=ifort F90=ifort FC=ifort --prefix=/opt/openmpi/1.3.3-intel --without-sge --with-openib --enable-io-romio 
<br>
--with-io-romio-flags=--with-file-system=lustre --with-pic
<br>
<p>Thanks,
<br>
Craig
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11596.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11594.php">Jeff Squyres: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>In reply to:</strong> <a href="11593.php">Kevin.Buckley_at_[hidden]: "[OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
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
