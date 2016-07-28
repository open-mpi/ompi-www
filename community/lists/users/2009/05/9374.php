<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 19:48:31 2009" -->
<!-- isoreceived="20090518234831" -->
<!-- sent="Mon, 18 May 2009 16:48:23 -0700" -->
<!-- isosent="20090518234823" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="4A11F3C7.2020309_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49FEA92C.9010301_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 19:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9375.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9373.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>In reply to:</strong> <a href="9176.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; sorry for the delay but I did some additional experiments to found out 
</span><br>
<span class="quotelev1">&gt; whether the problem was openmpi or gcc!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program just hangs... and never terminates! I am running on a SMP 
</span><br>
<span class="quotelev1">&gt; machine with 32 cores, actually it is a Sun Fire X4600 X2. (8 
</span><br>
<span class="quotelev1">&gt; quad-core Barcelona AMD chips), the OS is CentOS 5 and the kernel is 
</span><br>
<span class="quotelev1">&gt; 2.6.18-92.el5.src-PAPI (patched with PAPI).
</span><br>
<span class="quotelev1">&gt; I use a N of 1024, and if I print out the value of the iterator i, 
</span><br>
<span class="quotelev1">&gt; sometimes it stops around 165, other times around 520... and it 
</span><br>
<span class="quotelev1">&gt; doesn't make any sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run the program (and it's important to notice I don't recompile 
</span><br>
<span class="quotelev1">&gt; it, I just use another mpirun from a different mpi version) the 
</span><br>
<span class="quotelev1">&gt; program works fine. I did some experiments during the weekend and if I 
</span><br>
<span class="quotelev1">&gt; use openmpi-1.3.2 compiled with gcc433 everything works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I really think the problem is strictly related to the usage of 
</span><br>
<span class="quotelev1">&gt; gcc-4.4.0! ...and it doesn't depends from OpenMPI as the program hangs 
</span><br>
<span class="quotelev1">&gt; even when I use gcc 1.3.1 compiled with gcc 4.4!
</span><br>
<p>I finally got GCC 4.4, but was unable to reproduce the problem.  How 
<br>
small can you make np (number of MPI processes) and still see the 
<br>
problem?  How reproducible is the problem?  When it hangs, can you get 
<br>
stack traces of all the processes?  We're trying to hunt down some 
<br>
similar behavior, but I think yours is of a different flavor.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9375.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9373.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>In reply to:</strong> <a href="9176.php">Simone Pellegrini: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11228.php">Bill Broadley: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
