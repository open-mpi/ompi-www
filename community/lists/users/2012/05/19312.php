<?
$subject_val = "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 19 06:55:29 2012" -->
<!-- isoreceived="20120519105529" -->
<!-- sent="Sat, 19 May 2012 05:55:15 -0500" -->
<!-- isosent="20120519105515" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers" -->
<!-- id="4FB77C13.70207_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL110-W120B0AD19E798CAC258C97AE1F0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-19 06:55:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19311.php">Sergiy Bubin: "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>In reply to:</strong> <a href="19311.php">Sergiy Bubin: "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Reply:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Reply:</strong> <a href="19316.php">Jeff Squyres: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/19/2012 2:20 AM, Sergiy Bubin wrote:
<br>
<span class="quotelev1">&gt; I built OpenMPI with that set of intel compilers. Everything seems to 
</span><br>
<span class="quotelev1">&gt; be fine and I can compile my fortran+MPI code with no problem when I 
</span><br>
<span class="quotelev1">&gt; invoke ifort. I should say that I do not actually invoke the &quot;wrapper&quot; 
</span><br>
<span class="quotelev1">&gt; mpi compiler. I normally just add flags as MPICOMPFLAGS=$(shell mpif90 
</span><br>
<span class="quotelev1">&gt; --showme:compile) and MPILINKFLAGS=$(shell mpif90 --showme:link) in my 
</span><br>
<span class="quotelev1">&gt; makefile. I know it is not the recommended way of doing things but the 
</span><br>
<span class="quotelev1">&gt; reason I do that is that I absolutely need to be able to use different 
</span><br>
<span class="quotelev1">&gt; fortran compilers to build my fortran code.
</span><br>
Avoiding the use of mpif90 accomplishes nothing for changing between 
<br>
incompatible Fortran compilers.   Run-time libraries are incompatible 
<br>
among ifort, gfortran, and Oracle Fortran, so you can't link a mixture 
<br>
of objects compiled by incompatible Fortran compilers except in limited 
<br>
circumstances.  This includes the MPI Fortran library.
<br>
I don't see how it is too great an inconvenience for your Makefile to 
<br>
set PATH and LD_LIBRARY_PATH to include the mpif90 corresponding to the 
<br>
chosen Fortran compiler.  You may need to build your own mpif90 for 
<br>
gfortran as well as the other compilers, so as to configure it to keep 
<br>
it off the default PATHs (e.g. --prefix=/opt/ompi1.4gf/), if you can't 
<br>
move the Ubuntu ompi.
<br>
Surely most of this is implied in the OpenMPI instructions.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19311.php">Sergiy Bubin: "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>In reply to:</strong> <a href="19311.php">Sergiy Bubin: "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Reply:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Reply:</strong> <a href="19316.php">Jeff Squyres: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
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
