<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 08:51:48 2007" -->
<!-- isoreceived="20070920125148" -->
<!-- sent="Thu, 20 Sep 2007 08:51:42 -0400" -->
<!-- isosent="20070920125142" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue." -->
<!-- id="941E0143-B18D-4B9F-9D19-D5388867F9C1_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F25E49.80209_at_open-mpi.org" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 08:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4051.php">Troy Telford: "[OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>Previous message:</strong> <a href="4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<li><strong>In reply to:</strong> <a href="4048.php">Tim Prins: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2007, at 7:49 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; This is because Open MPI is finding gcc for the C compiler and  
</span><br>
<span class="quotelev1">&gt; ifort for
</span><br>
<span class="quotelev1">&gt; the Fortran compiler.
</span><br>
<p>Just to be clear:  it is possible to build OpenMPI using ifort for  
<br>
Fortran and gcc for the C compiler on at least Linux.  I have done  
<br>
that on several Linux systems for many releases of OpenMPI, but have  
<br>
not tried on OS X.  On OS X I have been using g95.
<br>
<p>For reference below is my build commands for Linux with ifort:
<br>
<p>./configure F77=ifort FC=ifort --with-mpi-f90-size=small ; make all
<br>
<p><p>For reference below is my build commands OS X with g95:
<br>
<p>./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
<br>
size=small ; make all
<br>
<p><p>I'm not aware if special flags are needed with ifort on OS X, but - 
<br>
ISystemStubs is required for g95 and might be for ifort as well on OS X.
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4051.php">Troy Telford: "[OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>Previous message:</strong> <a href="4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<li><strong>In reply to:</strong> <a href="4048.php">Tim Prins: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
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
