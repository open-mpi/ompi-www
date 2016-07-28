<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 18 17:44:56 2006" -->
<!-- isoreceived="20060818214456" -->
<!-- sent="Fri, 18 Aug 2006 15:44:33 -0600" -->
<!-- isosent="20060818214433" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi with gfortran and g95" -->
<!-- id="2CB79FB7-DABB-406A-ABEF-0FB3E367B861_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0608181704320.26504_at_grizzly.cita.utoronto.ca" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-18 17:44:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1759.php">Steven A. DuChene: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>In reply to:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1759.php">Steven A. DuChene: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2006, at 3:19 PM, Hugh Merz wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 18 Aug 2006, Steven A. DuChene wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am attempting to build OpenMPI-1.1 on a RHEL4u2 system that has
</span><br>
<span class="quotelev2">&gt;&gt; the standard gfortran install as part of the distro and with a  
</span><br>
<span class="quotelev2">&gt;&gt; self installed
</span><br>
<span class="quotelev2">&gt;&gt; recent version of g95 from g95.org but when I use the FC flag to
</span><br>
<span class="quotelev2">&gt;&gt; configure to tell it where to find the g95 executable I get a message
</span><br>
<span class="quotelev2">&gt;&gt; during the configure run of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether /app/g95-newer/g95-install/bin/x86_64-unknown- 
</span><br>
<span class="quotelev2">&gt;&gt; linux-gnu-g95 accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether gfortran and /app/g95-newer/g95-install/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64-unknown-linux-gnu-g95 compilers are compatible... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are  
</span><br>
<span class="quotelev2">&gt;&gt; not link compatible
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not specifying any particular FCFLAGS but from searching  
</span><br>
<span class="quotelev2">&gt;&gt; through the mailing
</span><br>
<span class="quotelev2">&gt;&gt; lists I am pretty sure I should be but I just don't know what  
</span><br>
<span class="quotelev2">&gt;&gt; exactly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any info on this anywhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler incompatibility is hinted at in this FAQ entry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=sysadmin#multiple-installs">http://www.open-mpi.org/faq/?category=sysadmin#multiple-installs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try setting the F77 environment variable to use g95 for Fortran 77  
</span><br>
<span class="quotelev1">&gt; compiler as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't need F77 bindings, then supply '--disable-f77' to  
</span><br>
<span class="quotelev1">&gt; configure and it should build fine.
</span><br>
<p>Hugh is correct -- the issue is that you tried to use gfortran as the  
<br>
Fortran 77 compiler and g95 as the Fortran 90 compiler.  The Fortran  
<br>
90 bindings are based on the Fortran 77, so the two compilers must be  
<br>
link compatible.  You can configure with both F77 and FC variables  
<br>
set to either gfortran or g95 and all should be ok.
<br>
<p>By the way, because the Fortran 90 bindings are layered on the  
<br>
Fortran 77 bindings, supplying --disable-mpi-f77 to turn off the  
<br>
Fortran 77 bindings will also disable the Fortran 90 bindings.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1759.php">Steven A. DuChene: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>In reply to:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1759.php">Steven A. DuChene: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
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
