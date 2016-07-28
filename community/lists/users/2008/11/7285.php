<?
$subject_val = "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 14:20:14 2008" -->
<!-- isoreceived="20081111192014" -->
<!-- sent="Tue, 11 Nov 2008 13:20:08 -0600" -->
<!-- isosent="20081111192008" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers" -->
<!-- id="4919DAE8.5090002_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4919D842.5030505_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 14:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7286.php">Steve Jones: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7284.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7284.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7286.php">Steve Jones: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7286.php">Steve Jones: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7292.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Ray and list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have Intel ifort 10.1.017 on a Rocks 4.3 cluster.
</span><br>
<span class="quotelev1">&gt; The OpenMPI compiler wrappers (i.e. &quot;opal_wrapper&quot;) work fine,
</span><br>
<span class="quotelev1">&gt; and find the shared libraries (Intel or other) without a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is that this is not an OpenMPI problem, but an Intel compiler 
</span><br>
<span class="quotelev1">&gt; environment glitch.
</span><br>
<span class="quotelev1">&gt; I wonder if your .profile/.tcshrc/.bashrc files initialize the Intel 
</span><br>
<span class="quotelev1">&gt; compiler environment properly.
</span><br>
<span class="quotelev1">&gt; I.e., &quot;source /share/apps/intel/fce/10.1.018/bin/ifortvars.csh&quot; or 
</span><br>
<span class="quotelev1">&gt; similar, to get the right
</span><br>
<span class="quotelev1">&gt; Intel environment variables inserted on
</span><br>
<span class="quotelev1">&gt; PATH, LD_LIBRARY_PATH, MANPATH. and INTEL_LICENSE_FILE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not doing this caused trouble for me in the past.
</span><br>
<span class="quotelev1">&gt; Double or inconsistent assignment of LD_LIBRARY_PATH and PATH
</span><br>
<span class="quotelev1">&gt; (say on the ifortvars.csh and on the user login files) also caused 
</span><br>
<span class="quotelev1">&gt; conflicts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if this needs to be done before you configure and install 
</span><br>
<span class="quotelev1">&gt; OpenMPI,
</span><br>
<span class="quotelev1">&gt; but doing it after you build OpenMPI may still be OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That does help. I confirmed that what I added needs to be in the 
<br>
environment (LD_LIBRARY_PATH).  Must have missed that in the docs. I 
<br>
have now added the appropriate variables to our modules environment.
<br>
<p>Seems strange that OpenMPI built without these being set at all. I could 
<br>
also compile test codes with the compilers, just not with mpicc and mpif90.
<br>
<p><p>-Ray Muno
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7286.php">Steve Jones: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7284.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7284.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7286.php">Steve Jones: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7286.php">Steve Jones: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7292.php">Gus Correa: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
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
