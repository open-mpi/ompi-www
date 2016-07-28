<?
$subject_val = "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 14:36:36 2008" -->
<!-- isoreceived="20081111193636" -->
<!-- sent="Tue, 11 Nov 2008 11:36:31 -0800 (PST)" -->
<!-- isosent="20081111193631" -->
<!-- name="Steve Jones" -->
<!-- email="stevejones_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers" -->
<!-- id="17587664.51221226432191650.JavaMail.root_at_zm09.stanford.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4919DAE8.5090002_at_aem.umn.edu" -->
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
<strong>From:</strong> Steve Jones (<em>stevejones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 14:36:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7287.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7287.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7287.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ray Muno&quot; &lt;muno_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ray and list
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have Intel ifort 10.1.017 on a Rocks 4.3 cluster.
</span><br>
<span class="quotelev2">&gt; &gt; The OpenMPI compiler wrappers (i.e. &quot;opal_wrapper&quot;) work fine,
</span><br>
<span class="quotelev2">&gt; &gt; and find the shared libraries (Intel or other) without a problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My guess is that this is not an OpenMPI problem, but an Intel
</span><br>
<span class="quotelev1">&gt; compiler 
</span><br>
<span class="quotelev2">&gt; &gt; environment glitch.
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if your .profile/.tcshrc/.bashrc files initialize the Intel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; compiler environment properly.
</span><br>
<span class="quotelev2">&gt; &gt; I.e., &quot;source /share/apps/intel/fce/10.1.018/bin/ifortvars.csh&quot; or 
</span><br>
<span class="quotelev2">&gt; &gt; similar, to get the right
</span><br>
<span class="quotelev2">&gt; &gt; Intel environment variables inserted on
</span><br>
<span class="quotelev2">&gt; &gt; PATH, LD_LIBRARY_PATH, MANPATH. and INTEL_LICENSE_FILE.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Not doing this caused trouble for me in the past.
</span><br>
<span class="quotelev2">&gt; &gt; Double or inconsistent assignment of LD_LIBRARY_PATH and PATH
</span><br>
<span class="quotelev2">&gt; &gt; (say on the ifortvars.csh and on the user login files) also caused 
</span><br>
<span class="quotelev2">&gt; &gt; conflicts.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure if this needs to be done before you configure and
</span><br>
<span class="quotelev1">&gt; install 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt; but doing it after you build OpenMPI may still be OK.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That does help. I confirmed that what I added needs to be in the 
</span><br>
<span class="quotelev1">&gt; environment (LD_LIBRARY_PATH).  Must have missed that in the docs. I 
</span><br>
<span class="quotelev1">&gt; have now added the appropriate variables to our modules environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems strange that OpenMPI built without these being set at all. I
</span><br>
<span class="quotelev1">&gt; could 
</span><br>
<span class="quotelev1">&gt; also compile test codes with the compilers, just not with mpicc and
</span><br>
<span class="quotelev1">&gt; mpif90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Are you adding -i_dynamic to base flags, or something different?
<br>
<p>Steve
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7287.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Previous message:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>In reply to:</strong> <a href="7285.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7287.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
<li><strong>Reply:</strong> <a href="7287.php">Ray Muno: "Re: [OMPI users] Trouble with OpenMPI and Intel 10.1 compilers"</a>
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
