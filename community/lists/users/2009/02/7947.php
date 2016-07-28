<?
$subject_val = "Re: [OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 10:06:38 2009" -->
<!-- isoreceived="20090203150638" -->
<!-- sent="Tue, 3 Feb 2009 10:06:14 -0500" -->
<!-- isosent="20090203150614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal 15 (terminated)" -->
<!-- id="EC148471-ED2B-4E36-8A98-93E811623858_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490713.31221.qm_at_web111205.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] signal 15 (terminated)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 10:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7948.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7946.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7943.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not to be pedantic, but you haven't answered the questions that I  
<br>
asked from the last time I tried to help you.  :-(
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/01/7710.php">http://www.open-mpi.org/community/lists/users/2009/01/7710.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/01/7717.php">http://www.open-mpi.org/community/lists/users/2009/01/7717.php</a>
<br>
<p><p>On Feb 3, 2009, at 6:52 AM, Hana Milani wrote:
<br>
<p><span class="quotelev1">&gt; I have posted this problem before, but still I am trying to solve it  
</span><br>
<span class="quotelev1">&gt; so I put it again so that maybe you can help me. I run my simulating  
</span><br>
<span class="quotelev1">&gt; code in a system with Intel Core 2 Quad, 4x2.4 GHz cpu, with 7.9 GiB  
</span><br>
<span class="quotelev1">&gt; memopry. My linux is opensuse 11.0 with gfortran compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi together with blacs and scalapack from <a href="http://www.netlib.org/scalapack/scalapack_installer.tgz">http://www.netlib.org/scalapack/scalapack_installer.tgz</a> 
</span><br>
<span class="quotelev1">&gt; . They both have been installed smoothly with no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also compiled and installed my code &quot;SIESTA&quot; in parallel with  
</span><br>
<span class="quotelev1">&gt; no problem. But when I execute the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ../../Src/siesta &lt;input&gt; output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I receive the following message and the process is killed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 13234 on node linux-4pel  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After I run the input with debugger I receive the follwing messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --debug-daemons -np 4 ../../Src/siesta &lt;input&gt; output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 13286 on host linux-4pel
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] orted_recv_pls: received message from  
</span><br>
<span class="quotelev1">&gt; [0,0,0]
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 13287 on node linux-4pel  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] orted_recv_pls: received message from  
</span><br>
<span class="quotelev1">&gt; [0,0,0]
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file .../../../../../orte/mca/odls/default/odls_default_module.c at  
</span><br>
<span class="quotelev1">&gt; line 540
</span><br>
<span class="quotelev1">&gt; [linux-4pel:13286] [0,0,1] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev1">&gt; file .../../../../../orte/mca/odls/default/odls_default_module.c at  
</span><br>
<span class="quotelev1">&gt; line 540
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have enclosed a copy of the &quot;arch.make&quot; of the code in which I  
</span><br>
<span class="quotelev1">&gt; have to make changes to compile the code in parallel. Please let me  
</span><br>
<span class="quotelev1">&gt; know how to solve the said problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Hana
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # This file is part of the SIESTA package.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Copyright (c) Fundacion General Universidad Autonoma de Madrid:
</span><br>
<span class="quotelev1">&gt; # E.Artacho, J.Gale, A.Garcia, J.Junquera, P.Ordejon, D.Sanchez-Portal
</span><br>
<span class="quotelev1">&gt; # and J.M.Soler, 1996-2006.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Use of this software constitutes agreement with the full conditions
</span><br>
<span class="quotelev1">&gt; # given in the SIESTA license, as signed by all legitimate users.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; .SUFFIXES:
</span><br>
<span class="quotelev1">&gt; .SUFFIXES: .f .F .o .a .f90 .F90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SIESTA_ARCH=i686-pc-linux-gnu--Gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FPP=
</span><br>
<span class="quotelev1">&gt; FPP_OUTPUT=
</span><br>
<span class="quotelev1">&gt; FC=/home/sara/mpich2-1.0.8/bin/mpif90
</span><br>
<span class="quotelev1">&gt; RANLIB=ranlib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SYS=nag
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SP_KIND=4
</span><br>
<span class="quotelev1">&gt; DP_KIND=8
</span><br>
<span class="quotelev1">&gt; KINDS=$(SP_KIND) $(DP_KIND)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FFLAGS=-g -O2
</span><br>
<span class="quotelev1">&gt; FPPFLAGS= -DMPI -DFC_HAVE_FLUSH -DFC_HAVE_ABORT
</span><br>
<span class="quotelev1">&gt; LDFLAGS=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARFLAGS_EXTRA=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FCFLAGS_fixed_f=
</span><br>
<span class="quotelev1">&gt; FCFLAGS_free_f90=
</span><br>
<span class="quotelev1">&gt; FPPFLAGS_fixed_F=
</span><br>
<span class="quotelev1">&gt; FPPFLAGS_free_F90=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLAS_LIBS=/home/sara/scalapack_installer_0.94/lib/librefblas.a
</span><br>
<span class="quotelev1">&gt; LAPACK_LIBS=/home/sara/scalapack_installer_0.94/lib/libreflapack.a
</span><br>
<span class="quotelev1">&gt; BLACS_LIBS=/home/sara/scalapack_installer_0.94/lib/blacs.a /home/ 
</span><br>
<span class="quotelev1">&gt; sara/scalapack_installer_0.94/lib/blacsC.a
</span><br>
<span class="quotelev1">&gt; SCALAPACK_LIBS=/home/sara/scalapack_installer_0.94/lib/libscalapack.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMP_LIBS=dc_lapack.a liblapack.a libblas.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NETCDF_LIBS=
</span><br>
<span class="quotelev1">&gt; NETCDF_INTERFACE=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIBS=$(SCALAPACK_LIBS) $(BLACS_LIBS) $(LAPACK_LIBS) $(BLAS_LIBS) $ 
</span><br>
<span class="quotelev1">&gt; (NETCDF_LIBS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #SIESTA needs an F90 interface to MPI
</span><br>
<span class="quotelev1">&gt; #This will give you SIESTA's own implementation
</span><br>
<span class="quotelev1">&gt; #If your compiler vendor offers an alternative, you may change
</span><br>
<span class="quotelev1">&gt; #to it here.
</span><br>
<span class="quotelev1">&gt; MPI_INTERFACE=libmpi_f90.a
</span><br>
<span class="quotelev1">&gt; MPI_HOME=$/home/sara/mpich2-1.0.8
</span><br>
<span class="quotelev1">&gt; MPI_INCLUDE=$/home/sara/mpich2-1.0.8/src/include
</span><br>
<span class="quotelev1">&gt; MPI_LIB=$/home/sara/mpich2-1.0.8/lib
</span><br>
<span class="quotelev1">&gt; DEFS_MPI=-DMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #Dependency rules are created by autoconf according to whether
</span><br>
<span class="quotelev1">&gt; #discrete preprocessing is necessary or not.
</span><br>
<span class="quotelev1">&gt; .F.o:
</span><br>
<span class="quotelev1">&gt; $(FC) -c $(FFLAGS) $(INCFLAGS) $(FPPFLAGS) $(FPPFLAGS_fixed_F) $&lt;
</span><br>
<span class="quotelev1">&gt; .F90.o:
</span><br>
<span class="quotelev1">&gt; $(FC) -c $(FFLAGS) $(INCFLAGS) $(FPPFLAGS) $(FPPFLAGS_free_F90) $&lt;
</span><br>
<span class="quotelev1">&gt; .f.o:
</span><br>
<span class="quotelev1">&gt; $(FC) -c $(FFLAGS) $(INCFLAGS) $(FCFLAGS_fixed_f) $&lt;
</span><br>
<span class="quotelev1">&gt; .f90.o:
</span><br>
<span class="quotelev1">&gt; $(FC) -c $(FFLAGS) $(INCFLAGS) $(FCFLAGS_free_f90) $&lt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7948.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7946.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7943.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
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
