<?
$subject_val = "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 16:17:14 2008" -->
<!-- isoreceived="20081028201714" -->
<!-- sent="Tue, 28 Oct 2008 16:17:07 -0400" -->
<!-- isosent="20081028201707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90" -->
<!-- id="FFDA97BA-0DCB-43D0-82FF-55AA73F1EC55_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0810281017520.28627_at_hoy.physics.ox.ac.uk" -->
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
<strong>Date:</strong> 2008-10-28 16:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7123.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7121.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>In reply to:</strong> <a href="7114.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7110.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something odd is definitely going on here.  I'm able to replicate your  
<br>
problem with the intel compiler suite, but I can't quite figure out  
<br>
why -- it all works properly if I convert the app to C (and still use  
<br>
the MPI_REAL16 datatype with long double data).
<br>
<p>George and I are investigating; I've opened a ticket on this: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1603">https://svn.open-mpi.org/trac/ompi/ticket/1603</a>
<br>
<p><p>On Oct 28, 2008, at 6:35 AM, Julien Devriendt wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes point to point communication is OK with quad prec. and one-way  
</span><br>
<span class="quotelev1">&gt; reductions as well. I also tried my sample code on another platform  
</span><br>
<span class="quotelev1">&gt; (which sports AMD opterons instead of Intel CPUs) with the same  
</span><br>
<span class="quotelev1">&gt; compilers, and get the same *wrong* results with the call to  
</span><br>
<span class="quotelev1">&gt; MPI_ALLREDUCE in quad prec, so it does not seem to be a machine bug.  
</span><br>
<span class="quotelev1">&gt; Also altering a bit my sample code so as to replace MPI_SUM by  
</span><br>
<span class="quotelev1">&gt; MPI_MAX in the call to MPI_ALLREDUCE works perfectly well in quad  
</span><br>
<span class="quotelev1">&gt; prec !!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 28 Oct 2008, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume you've confirmed that point to point communication works
</span><br>
<span class="quotelev2">&gt;&gt; happily with quad prec on your machine?  How about one-way  
</span><br>
<span class="quotelev2">&gt;&gt; reductions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 2008-10-28 at 08:47 +0000, Julien Devriendt wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your suggestions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried them all (declaring my variables as REAL*16 or REAL(16))  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avail. I still get the wrong answer with my call to MPI_ALLREDUCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the KINDs are compiler dependent.  For Sun Studio  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran, REAL*16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and REAL(16) are the same thing.  For Intel, maybe it's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different.  I don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; know.  Try running this program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double precision xDP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real(16) x16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real*16 xSTAR16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; write(6,*) kind(xDP), kind(x16), kind(xSTAR16), kind(1.0_16)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and checking if the output matches your expectations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I dabble in Fortran but am not an expert -- is REAL(kind=16) the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same  as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; REAL*16?  MPI_REAL16 should be a 16 byte REAL; I'm not 100%  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sure  that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; REAL(kind=16) is the same thing...?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 23, 2008, at 7:37 AM, Julien Devriendt wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm trying to do an MPI_ALLREDUCE with quadruple precision real  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_SUM and open mpi does not give me the correct answer (vartemp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is equal to vartored instead of 2*vartored). Switching to double
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; precision
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; real works fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My version of openmpi is 1.2.7 and it has been compiled with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ifort  v10.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and icc/icpc at installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here's the simple f90 code which fails:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program test_quad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   implicit none
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   include &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   real(kind=16)             :: vartored(8),vartemp(8)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   integer                   :: nn,nslaves,my_index
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   integer                   :: mpierror
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   call MPI_INIT(mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD,nslaves,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD,my_index,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   nn       = 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   vartored = 1.0_16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   vartemp  = 0.0_16
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   print*,&quot;P1 &quot;,my_index,vartored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   call  MPI_ALLREDUCE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (vartored,vartemp,nn,MPI_REAL16,MPI_SUM,MPI_COMM_WORLD,mpierror)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   print*,&quot;P2 &quot;,my_index,vartemp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   stop
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; end program test_quad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any idea why this happens?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7123.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7121.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>In reply to:</strong> <a href="7114.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7110.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
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
