<?
$subject_val = "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 15:19:02 2008" -->
<!-- isoreceived="20081027191902" -->
<!-- sent="Mon, 27 Oct 2008 11:22:16 -0800" -->
<!-- isosent="20081027192216" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90" -->
<!-- id="490614E8.5000701_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in	fortran90<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 15:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>In reply to:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7111.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Reply:</strong> <a href="7111.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the KINDs are compiler dependent.  For Sun Studio Fortran, 
<br>
REAL*16 and REAL(16) are the same thing.  For Intel, maybe it's 
<br>
different.  I don't know.  Try running this program:
<br>
<p>double precision xDP
<br>
real(16) x16
<br>
real*16 xSTAR16
<br>
write(6,*) kind(xDP), kind(x16), kind(xSTAR16), kind(1.0_16)
<br>
end
<br>
<p>and checking if the output matches your expectations.
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I dabble in Fortran but am not an expert -- is REAL(kind=16) the same  
</span><br>
<span class="quotelev1">&gt; as REAL*16?  MPI_REAL16 should be a 16 byte REAL; I'm not 100% sure  
</span><br>
<span class="quotelev1">&gt; that REAL(kind=16) is the same thing...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2008, at 7:37 AM, Julien Devriendt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to do an MPI_ALLREDUCE with quadruple precision real and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SUM and open mpi does not give me the correct answer (vartemp
</span><br>
<span class="quotelev2">&gt;&gt; is equal to vartored instead of 2*vartored). Switching to double  
</span><br>
<span class="quotelev2">&gt;&gt; precision
</span><br>
<span class="quotelev2">&gt;&gt; real works fine.
</span><br>
<span class="quotelev2">&gt;&gt; My version of openmpi is 1.2.7 and it has been compiled with ifort  
</span><br>
<span class="quotelev2">&gt;&gt; v10.1
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
<span class="quotelev2">&gt;&gt;    real(kind=16)             :: vartored(8),vartemp(8)
</span><br>
<span class="quotelev2">&gt;&gt;    integer                   :: nn,nslaves,my_index
</span><br>
<span class="quotelev2">&gt;&gt;    integer                   :: mpierror
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
<span class="quotelev2">&gt;&gt;    call  MPI_ALLREDUCE 
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Previous message:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>In reply to:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7111.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Reply:</strong> <a href="7111.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
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
