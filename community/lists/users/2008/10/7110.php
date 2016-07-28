<?
$subject_val = "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 04:41:54 2008" -->
<!-- isoreceived="20081028084154" -->
<!-- sent="Tue, 28 Oct 2008 08:41:45 +0000 (GMT)" -->
<!-- isosent="20081028084145" -->
<!-- name="Julien Devriendt" -->
<!-- email="jeg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90" -->
<!-- id="Pine.LNX.4.62.0810280839510.28627_at_hoy.physics.ox.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DE6C7FD8-7416-4C86-993B-EBBCAE6B3082_at_cisco.com" -->
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
<strong>From:</strong> Julien Devriendt (<em>jeg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 04:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7111.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7109.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes it is: REAL(kind=16) = REAL*16 = 16 byte REAL in fortran, or a 
<br>
long double in C that is why I thought MPI_REAL16 should work.
<br>
<p>On Mon, 27 Oct 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I dabble in Fortran but am not an expert -- is REAL(kind=16) the same as 
</span><br>
<span class="quotelev1">&gt; REAL*16?  MPI_REAL16 should be a 16 byte REAL; I'm not 100% sure that 
</span><br>
<span class="quotelev1">&gt; REAL(kind=16) is the same thing...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2008, at 7:37 AM, Julien Devriendt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to do an MPI_ALLREDUCE with quadruple precision real and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SUM and open mpi does not give me the correct answer (vartemp
</span><br>
<span class="quotelev2">&gt;&gt; is equal to vartored instead of 2*vartored). Switching to double precision
</span><br>
<span class="quotelev2">&gt;&gt; real works fine.
</span><br>
<span class="quotelev2">&gt;&gt; My version of openmpi is 1.2.7 and it has been compiled with ifort v10.1
</span><br>
<span class="quotelev2">&gt;&gt; and icc/icpc at installation
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the simple f90 code which fails:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; program test_quad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    implicit none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    include &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    real(kind=16)             :: vartored(8),vartemp(8)
</span><br>
<span class="quotelev2">&gt;&gt;    integer                   :: nn,nslaves,my_index
</span><br>
<span class="quotelev2">&gt;&gt;    integer                   :: mpierror
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_INIT(mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_SIZE(MPI_COMM_WORLD,nslaves,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_RANK(MPI_COMM_WORLD,my_index,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    nn       = 8
</span><br>
<span class="quotelev2">&gt;&gt;    vartored = 1.0_16
</span><br>
<span class="quotelev2">&gt;&gt;    vartemp  = 0.0_16
</span><br>
<span class="quotelev2">&gt;&gt;    print*,&quot;P1 &quot;,my_index,vartored
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_ALLREDUCE 
</span><br>
<span class="quotelev2">&gt;&gt; (vartored,vartemp,nn,MPI_REAL16,MPI_SUM,MPI_COMM_WORLD,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;    print*,&quot;P2 &quot;,my_index,vartemp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    stop
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; end program test_quad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea why this happens?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; J.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7111.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7109.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
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
