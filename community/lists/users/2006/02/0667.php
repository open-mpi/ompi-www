<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 15 08:28:09 2006" -->
<!-- isoreceived="20060215132809" -->
<!-- sent="Wed, 15 Feb 2006 08:27:57 -0500" -->
<!-- isosent="20060215132757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] Job fails with mpiP" -->
<!-- id="4B6BF26C-B72A-447D-9E7C-488E0ED2136D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="008801c62dca$b33cae60$3401a8c0_at_dl474swarup" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-15 08:27:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0668.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0620.php">Aniruddha Shet: "[O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Reply:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry it took so long to reply to this -- the mpiP download site was  
<br>
down for a few days.  I have downloaded and installed mpiP and run it  
<br>
with some toy MPI programs under Open MPI and it seems to work fine  
<br>
for me.
<br>
<p>1. We have recently committed some bug fixes to both the trunk and  
<br>
the v1.0 branch (i.e., since you sent this mail).  We don't have a  
<br>
new 1.0.2 alpha yet, but could you try a new nightly tarball from  
<br>
either the trunk or v1.0 branch and see if it solves your problem?
<br>
<p>2. From the description in the README in your tarball, it looks like  
<br>
things are dying right away during startup (which is why I was  
<br>
hopeful that I could replicate the problem, even without your  
<br>
application).  It also looks like a process died due to a segv -- was  
<br>
a core produced?  If #1 doesn't solve your problems, can you generate  
<br>
a backtrace from that corefile and send it here?
<br>
<p><p>On Feb 9, 2006, at 5:46 PM, Aniruddha Shet wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to profile an Open MPI job using the mpiP profiling  
</span><br>
<span class="quotelev1">&gt; library.
</span><br>
<span class="quotelev1">&gt; Running the job without the library completes successfully. When I  
</span><br>
<span class="quotelev1">&gt; link the
</span><br>
<span class="quotelev1">&gt; profiling library into the executable, the job fails to run. I am  
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt; build the job with mpiP, but the execution fails. Please see the  
</span><br>
<span class="quotelev1">&gt; attached
</span><br>
<span class="quotelev1">&gt; tar file for details.
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0668.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0666.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0620.php">Aniruddha Shet: "[O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Reply:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
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
