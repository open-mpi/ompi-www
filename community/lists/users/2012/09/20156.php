<?
$subject_val = "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 06:25:47 2012" -->
<!-- isoreceived="20120908102547" -->
<!-- sent="Sat, 8 Sep 2012 06:25:22 -0400" -->
<!-- isosent="20120908102522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)" -->
<!-- id="1B815295-1D69-46DB-8DCB-B308C228BD2F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000001cd8c49$65e7e550$31b7aff0$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-08 06:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20157.php">Jed Brown: "[OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20143.php">Yonghui: "[OMPI users] MPI_Allreduce fail  (minGW gfortran + OpenMPI 1.6.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Maybe reply:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am unable to replicate your problem, but admittedly I only have access to gfortran on Linux.  And I am definitely *not* a Fortran expert.  :-\
<br>
<p>The code seems to run fine for me -- can you send another test program that actually tests the results of the all reduce?  Fortran allocatable stuff always confuses me; I wonder if perhaps we're not getting the passed pointer properly.  Checking the results of the all reduce would be a good way to check this theory.
<br>
<p><p><p>On Sep 6, 2012, at 12:05 PM, Yonghui wrote:
<br>
<p><span class="quotelev1">&gt; Dear mpi users and developers,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am having some trouble with MPI_Allreduce. I am using MinGW (gcc 4.6.2) with OpenMPI 1.6.1. The MPI_Allreduce in c version works fine, but the fortran version failed with error. Here is the simple fortran code to reproduce the error:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                 program main
</span><br>
<span class="quotelev1">&gt;                                 implicit none
</span><br>
<span class="quotelev1">&gt;                                 include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;                                 character * (MPI_MAX_PROCESSOR_NAME) processor_name
</span><br>
<span class="quotelev1">&gt;                                 integer myid, numprocs, namelen, rc, ierr
</span><br>
<span class="quotelev1">&gt;                                 integer, allocatable :: mat1(:, :, :)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                 call MPI_INIT( ierr )
</span><br>
<span class="quotelev1">&gt;                                 call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt;                                 call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev1">&gt;                                 allocate(mat1(-36:36, -36:36, -36:36))
</span><br>
<span class="quotelev1">&gt;                                 mat1(:,:,:) = 111
</span><br>
<span class="quotelev1">&gt;                                 print *, &quot;Going to call MPI_Allreduce.&quot;
</span><br>
<span class="quotelev1">&gt;                                 call MPI_Allreduce(MPI_IN_PLACE, mat1(-36, -36, -36), 389017, MPI_INTEGER, MPI_BOR, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;                                 print *, &quot;MPI_Allreduce done!!!&quot;
</span><br>
<span class="quotelev1">&gt;                                 call MPI_FINALIZE(rc)
</span><br>
<span class="quotelev1">&gt;                 endprogram
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The command that I used to compile:
</span><br>
<span class="quotelev1">&gt; gfortran Allreduce.f90 -IC:\OpenMPI-win32\include C:\OpenMPI-win32\lib\libmpi_f77.lib
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The MPI_Allreduce fail. [xxxxxxx:02112] [[17193,0],0]-[[17193,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108).
</span><br>
<span class="quotelev1">&gt; I am not sure why this happens. But I think it is the windows build MPI problem. Since the simple code works on a Linux system with gfortran.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas? I appreciate any response!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yonghui
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20157.php">Jed Brown: "[OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20143.php">Yonghui: "[OMPI users] MPI_Allreduce fail  (minGW gfortran + OpenMPI 1.6.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Maybe reply:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
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
