<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 18 17:19:37 2006" -->
<!-- isoreceived="20060818211937" -->
<!-- sent="Fri, 18 Aug 2006 17:19:34 -0400 (EDT)" -->
<!-- isosent="20060818211934" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi with gfortran and g95" -->
<!-- id="Pine.LNX.4.64.0608181704320.26504_at_grizzly.cita.utoronto.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18783563.1155934554692.JavaMail.root_at_mswamui-andean.atl.sa.earthlink.net" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-18 17:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>In reply to:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Reply:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 18 Aug 2006, Steven A. DuChene wrote:
<br>
<span class="quotelev1">&gt; I am attempting to build OpenMPI-1.1 on a RHEL4u2 system that has
</span><br>
<span class="quotelev1">&gt; the standard gfortran install as part of the distro and with a self installed
</span><br>
<span class="quotelev1">&gt; recent version of g95 from g95.org but when I use the FC flag to
</span><br>
<span class="quotelev1">&gt; configure to tell it where to find the g95 executable I get a message
</span><br>
<span class="quotelev1">&gt; during the configure run of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether /app/g95-newer/g95-install/bin/x86_64-unknown-linux-gnu-g95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran and /app/g95-newer/g95-install/bin/x86_64-unknown-linux-gnu-g95 compilers are compatible... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link compatible
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports LOGICAL... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*1... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*2... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*4... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*8... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports INTEGER*16... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL*4... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL*8... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports REAL*16... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports DOUBLE PRECISION... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX*8... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX*16... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports COMPLEX*32... skipped
</span><br>
<span class="quotelev1">&gt; checking if Fortran 90 compiler supports DOUBLE COMPLEX... skipped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not specifying any particular FCFLAGS but from searching through the mailing
</span><br>
<span class="quotelev1">&gt; lists I am pretty sure I should be but I just don't know what exactly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any info on this anywhere?
</span><br>
<p>Compiler incompatibility is hinted at in this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=sysadmin#multiple-installs">http://www.open-mpi.org/faq/?category=sysadmin#multiple-installs</a>
<br>
<p>Try setting the F77 environment variable to use g95 for Fortran 77 compiler as well.
<br>
<p>If you don't need F77 bindings, then supply '--disable-f77' to configure and it should build fine.
<br>
<p>Hugh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>In reply to:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Reply:</strong> <a href="1758.php">Brian Barrett: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
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
