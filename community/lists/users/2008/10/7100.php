<?
$subject_val = "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 14:57:05 2008" -->
<!-- isoreceived="20081027185705" -->
<!-- sent="Mon, 27 Oct 2008 14:56:21 -0400" -->
<!-- isosent="20081027185621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90" -->
<!-- id="DE6C7FD8-7416-4C86-993B-EBBCAE6B3082_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0810231229470.26405_at_hoy.physics.ox.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 14:56:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7101.php">Eugene Loh: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90"</a>
<li><strong>Previous message:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<li><strong>In reply to:</strong> <a href="7081.php">Julien Devriendt: "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7101.php">Eugene Loh: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90"</a>
<li><strong>Reply:</strong> <a href="7101.php">Eugene Loh: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90"</a>
<li><strong>Reply:</strong> <a href="7110.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dabble in Fortran but am not an expert -- is REAL(kind=16) the same  
<br>
as REAL*16?  MPI_REAL16 should be a 16 byte REAL; I'm not 100% sure  
<br>
that REAL(kind=16) is the same thing...?
<br>
<p><p>On Oct 23, 2008, at 7:37 AM, Julien Devriendt wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to do an MPI_ALLREDUCE with quadruple precision real and
</span><br>
<span class="quotelev1">&gt; MPI_SUM and open mpi does not give me the correct answer (vartemp
</span><br>
<span class="quotelev1">&gt; is equal to vartored instead of 2*vartored). Switching to double  
</span><br>
<span class="quotelev1">&gt; precision
</span><br>
<span class="quotelev1">&gt; real works fine.
</span><br>
<span class="quotelev1">&gt; My version of openmpi is 1.2.7 and it has been compiled with ifort  
</span><br>
<span class="quotelev1">&gt; v10.1
</span><br>
<span class="quotelev1">&gt; and icc/icpc at installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the simple f90 code which fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program test_quad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    real(kind=16)             :: vartored(8),vartemp(8)
</span><br>
<span class="quotelev1">&gt;    integer                   :: nn,nslaves,my_index
</span><br>
<span class="quotelev1">&gt;    integer                   :: mpierror
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_INIT(mpierror)
</span><br>
<span class="quotelev1">&gt;    call MPI_COMM_SIZE(MPI_COMM_WORLD,nslaves,mpierror)
</span><br>
<span class="quotelev1">&gt;    call MPI_COMM_RANK(MPI_COMM_WORLD,my_index,mpierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    nn       = 8
</span><br>
<span class="quotelev1">&gt;    vartored = 1.0_16
</span><br>
<span class="quotelev1">&gt;    vartemp  = 0.0_16
</span><br>
<span class="quotelev1">&gt;    print*,&quot;P1 &quot;,my_index,vartored
</span><br>
<span class="quotelev1">&gt;    call  
</span><br>
<span class="quotelev1">&gt; MPI_ALLREDUCE 
</span><br>
<span class="quotelev1">&gt; (vartored,vartemp,nn,MPI_REAL16,MPI_SUM,MPI_COMM_WORLD,mpierror)
</span><br>
<span class="quotelev1">&gt;    print*,&quot;P2 &quot;,my_index,vartemp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    stop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program test_quad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why this happens?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J.
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
<li><strong>Next message:</strong> <a href="7101.php">Eugene Loh: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90"</a>
<li><strong>Previous message:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<li><strong>In reply to:</strong> <a href="7081.php">Julien Devriendt: "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7101.php">Eugene Loh: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90"</a>
<li><strong>Reply:</strong> <a href="7101.php">Eugene Loh: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90"</a>
<li><strong>Reply:</strong> <a href="7110.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
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
