<?
$subject_val = "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 20 18:18:53 2012" -->
<!-- isoreceived="20120520221853" -->
<!-- sent="Mon, 21 May 2012 00:18:33 +0200" -->
<!-- isosent="20120520221833" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers" -->
<!-- id="1BF73AB5-340A-4D7F-AC7B-8C3CBD9C2E16_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FB77C13.70207_at_aol.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-20 18:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19316.php">Jeff Squyres: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 19.05.2012 um 12:55 schrieb Tim Prince:
<br>
<p><span class="quotelev1">&gt; On 5/19/2012 2:20 AM, Sergiy Bubin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I built OpenMPI with that set of intel compilers. Everything seems to be fine and I can compile my fortran+MPI code with no problem when I invoke ifort. I should say that I do not actually invoke the &quot;wrapper&quot; mpi compiler. I normally just add flags as MPICOMPFLAGS=$(shell mpif90 --showme:compile) and MPILINKFLAGS=$(shell mpif90 --showme:link) in my makefile. I know it is not the recommended way of doing things but the reason I do that is that I absolutely need to be able to use different fortran compilers to build my fortran code.
</span><br>
<span class="quotelev1">&gt; Avoiding the use of mpif90 accomplishes nothing for changing between incompatible Fortran compilers.   Run-time libraries are incompatible among ifort, gfortran, and Oracle Fortran, so you can't link a mixture of objects compiled by incompatible Fortran compilers except in limited circumstances.  This includes the MPI Fortran library.
</span><br>
<p>Maybe I get your statement in the wrong way, but I wouldn't say that these are &quot;limited circumstances&quot;. How often does one link an Intel compiled program with a library form which you only use the *.so files which are already included in the distribution without recompiling the whole stuff? E.g. when I compile a graphical application I don't recompile the X11 libraries, which were compiled with gcc instead of icc.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I don't see how it is too great an inconvenience for your Makefile to set PATH and LD_LIBRARY_PATH to include the mpif90 corresponding to the chosen Fortran compiler.  You may need to build your own mpif90 for gfortran as well as the other compilers, so as to configure it to keep it off the default PATHs (e.g. --prefix=/opt/ompi1.4gf/), if you can't move the Ubuntu ompi.
</span><br>
<span class="quotelev1">&gt; Surely most of this is implied in the OpenMPI instructions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19315.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19316.php">Jeff Squyres: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
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
