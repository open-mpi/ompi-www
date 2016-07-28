<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 01:03:29 2006" -->
<!-- isoreceived="20060421050329" -->
<!-- sent="Fri, 21 Apr 2006 01:03:19 -0400" -->
<!-- isosent="20060421050319" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF708703_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OMPI-F90-CHECK macro needs to be updated?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 01:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>Previous message:</strong> <a href="1114.php">semper: "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1099.php">Michael Kluskens: "[OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I intended this check to be a simple sanity check to ensure that we were
<br>
getting consistent test results between F77 and F90.  However, it turned
<br>
into a visit into what I like to call the Alignment House of Horrors.
<br>
<p>The short version is that this test is now:
<br>
<p>A) an inaccurate warning that should be removed
<br>
B) the result of a long, sordid story
<br>
<p>The gist of B) is exactly what the warning message says: the alignment
<br>
of a type between F77 and F90 does not match!  This is fairly amazing to
<br>
me (indeed, in this case, it is the *same* compiler, but operating in
<br>
F77 mode vs. F90 mode), but apparently it's common practice in Fortran
<br>
compilers.
<br>
<p>We went back and forth about this with various members of the Fortran
<br>
committee and various Fortran compiler authors and could never give us a
<br>
definite &quot;yes, it will always be this way&quot; kind of answer.  That being
<br>
said, we haven't yet run into a place where these alignment problems
<br>
have been a problem, even though our tests indicate that the alignments
<br>
are wrong.
<br>
<p>To be fair, we aren't 100% sure that our F90 test is right (and couldn't
<br>
get a definitive answer out of the F90 compiler authors). 
<br>
<p>So I'm pretty sure that we left it that this test is fairly meaningless.
<br>
I'll do a little more checking and will probably end up removing it (may
<br>
take a few days because everyone is traveling home from the OMPI
<br>
Developer's Workshop and I need to check with a few of the other
<br>
developers).
<br>
<p>Thanks for reminding me -- I had intended to close this out a while ago
<br>
and forgot about it.
<br>
<p><p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 20, 2006 12:19 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OMPI-F90-CHECK macro needs to be updated?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Getting warnings like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: *** Fortran 77 alignment for INTEGER (1) does not match
</span><br>
<span class="quotelev1">&gt; WARNING: *** Fortran 90 alignment for INTEGER (4)
</span><br>
<span class="quotelev1">&gt; WARNING: *** OMPI-F90-CHECK macro needs to be updated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; same for LOGICAL, REAL, COMPLEX, INTEGER*2, INTEGER*4, INTEGER*8, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe these are new within the last week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure script is generating these warnings when building  
</span><br>
<span class="quotelev1">&gt; openmpi-1.1a3r9663 using g95 from April 19 on OS X 10.4.6.   
</span><br>
<span class="quotelev1">&gt; Configured with &quot;./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>Previous message:</strong> <a href="1114.php">semper: "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1099.php">Michael Kluskens: "[OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
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
