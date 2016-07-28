<?
$subject_val = "[OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 06:52:08 2009" -->
<!-- isoreceived="20090203115208" -->
<!-- sent="Tue, 3 Feb 2009 03:52:03 -0800 (PST)" -->
<!-- isosent="20090203115203" -->
<!-- name="Hana Milani" -->
<!-- email="hana.milani_at_[hidden]" -->
<!-- subject="[OMPI users] signal 15 (terminated)" -->
<!-- id="490713.31221.qm_at_web111205.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] signal 15 (terminated)<br>
<strong>From:</strong> Hana Milani (<em>hana.milani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 06:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Maybe reply:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Users,
<br>
<p>I have posted this problem before, but still I am trying to solve it so I put it again so that maybe you can help me. I run my simulating code in a system with Intel Core 2 Quad, 4x2.4 GHz cpu, with 7.9 GiB memopry. My linux is opensuse 11.0 with gfortran compiler.
<br>
<p>I have installed openmpi together with blacs and scalapack from <a href="http://www.netlib.org/scalapack/scalapack_installer.tgz.They">http://www.netlib.org/scalapack/scalapack_installer.tgz.They</a> both have been installed smoothly with no problem.
<br>
<p>I have also compiled and installed my code &quot;SIESTA&quot; in parallel with no problem. But when I execute the following command:
<br>
<p>mpirun -np 4 ../../Src/siesta &lt;input&gt; output
<br>
<p>I receive the following message and the process is killed:
<br>
<p>mpirun noticed that job rank 0 with PID 13234 on node linux-4pel exited on signal 15 (Terminated).
<br>
<p>After I run the input with debugger I receive the follwing messages:
<br>
<p>mpirun --debug-daemons -np 4 ../../Src/siesta &lt;input&gt; output
<br>
<p>Daemon [0,0,1] checking in as pid 13286 on host linux-4pel
<br>
[linux-4pel:13286] [0,0,1] orted: received launch callback
<br>
[linux-4pel:13286] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[linux-4pel:13286] [0,0,1] orted_recv_pls: received kill_local_procs
<br>
mpirun noticed that job rank 0 with PID 13287 on node linux-4pel exited on signal 15 (Terminated). 
<br>
[linux-4pel:13286] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[linux-4pel:13286] [0,0,1] orted_recv_pls: received exit
<br>
[linux-4pel:13286]
<br>
[0,0,1] ORTE_ERROR_LOG: Not found in file
<br>
.../../../../../orte/mca/odls/default/odls_default_module.c at line 540
<br>
[linux-4pel:13286]
<br>
[0,0,1] ORTE_ERROR_LOG: Not found in file
<br>
.../../../../../orte/mca/odls/default/odls_default_module.c at line 540
<br>
<p>&nbsp;I have enclosed a copy of
<br>
the &quot;arch.make&quot; of the code in which I have to make changes to compile
<br>
the code in parallel. Please let me know how to solve the said problem.
<br>
<p>Regards,
<br>
Hana
<br>
<p># 
<br>
# This file is part of the SIESTA package.
<br>
#
<br>
# Copyright (c) Fundacion General Universidad Autonoma de Madrid:
<br>
# E.Artacho, J.Gale, A.Garcia, J.Junquera, P.Ordejon, D.Sanchez-Portal
<br>
# and J.M.Soler, 1996-2006.
<br>
# 
<br>
# Use of this software constitutes agreement with the full conditions
<br>
# given in the SIESTA license, as signed by all legitimate users.
<br>
#
<br>
..SUFFIXES:
<br>
..SUFFIXES: .f .F .o .a .f90 .F90
<br>
<p>SIESTA_ARCH=i686-pc-linux-gnu--Gfortran
<br>
<p>FPP=
<br>
FPP_OUTPUT= 
<br>
FC=/home/sara/mpich2-1.0.8/bin/mpif90
<br>
RANLIB=ranlib
<br>
<p>SYS=nag
<br>
<p>SP_KIND=4
<br>
DP_KIND=8
<br>
KINDS=$(SP_KIND) $(DP_KIND)
<br>
<p>FFLAGS=-g -O2
<br>
FPPFLAGS= -DMPI -DFC_HAVE_FLUSH -DFC_HAVE_ABORT
<br>
LDFLAGS=
<br>
<p>ARFLAGS_EXTRA=
<br>
<p>FCFLAGS_fixed_f=
<br>
FCFLAGS_free_f90=
<br>
FPPFLAGS_fixed_F=
<br>
FPPFLAGS_free_F90=
<br>
<p>BLAS_LIBS=/home/sara/scalapack_installer_0.94/lib/librefblas.a
<br>
LAPACK_LIBS=/home/sara/scalapack_installer_0.94/lib/libreflapack.a
<br>
BLACS_LIBS=/home/sara/scalapack_installer_0.94/lib/blacs.a  /home/sara/scalapack_installer_0.94/lib/blacsC.a
<br>
SCALAPACK_LIBS=/home/sara/scalapack_installer_0.94/lib/libscalapack.a
<br>
<p>COMP_LIBS=dc_lapack.a liblapack.a libblas.a 
<br>
<p>NETCDF_LIBS=
<br>
NETCDF_INTERFACE=
<br>
<p>LIBS=$(SCALAPACK_LIBS) $(BLACS_LIBS) $(LAPACK_LIBS) $(BLAS_LIBS) $(NETCDF_LIBS)
<br>
<p>#SIESTA needs an F90 interface to MPI
<br>
#This will give you SIESTA's own implementation
<br>
#If your compiler vendor offers an alternative, you may change
<br>
#to it here.
<br>
MPI_INTERFACE=libmpi_f90.a
<br>
MPI_HOME=$/home/sara/mpich2-1.0.8
<br>
MPI_INCLUDE=$/home/sara/mpich2-1.0.8/src/include
<br>
MPI_LIB=$/home/sara/mpich2-1.0.8/lib
<br>
DEFS_MPI=-DMPI
<br>
<p><p>#Dependency rules are created by autoconf according to whether
<br>
#discrete preprocessing is necessary or not.
<br>
..F.o:
<br>
$(FC) -c $(FFLAGS) $(INCFLAGS) $(FPPFLAGS) $(FPPFLAGS_fixed_F)  $&lt; 
<br>
..F90.o:
<br>
$(FC) -c $(FFLAGS) $(INCFLAGS) $(FPPFLAGS) $(FPPFLAGS_free_F90) $&lt; 
<br>
..f.o:
<br>
$(FC) -c $(FFLAGS) $(INCFLAGS) $(FCFLAGS_fixed_f)  $&lt;
<br>
..f90.o:
<br>
$(FC) -c $(FFLAGS) $(INCFLAGS) $(FCFLAGS_free_f90)  $&lt;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7942.php">Rainer Keller: "Re: [OMPI users] Open mpi 123 install error for BLACS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Maybe reply:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
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
