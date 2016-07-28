<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 17:16:34 2011" -->
<!-- isoreceived="20110106221634" -->
<!-- sent="Thu, 6 Jan 2011 17:16:29 -0500" -->
<!-- isosent="20110106221629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="9C5E8507-93DF-4E41-8518-DDD6B57E7536_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D263D16.9020806_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 17:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15296.php">David Mathog: "[OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15294.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15294.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2011, at 5:07 PM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Yes Jeff, I'm pretty sure  indeed that hyperthreading is enabled, since 16 CPUs are visible in the /proc/cpuinfo pseudo-file, while it's a 8 core Nehalem node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I always carefully checked that only 8 processes are running on each node.  Could it be that they are assigned to 8 hyperthreads but only 4 cores, for example ?  Is this actually possible with paffinity set to 1 ?
</span><br>
<p>Yes.  I actually had this happen to another user recently; I should add this to the FAQ...  (/me adds to to-do list)
<br>
<p>Here's what I'm guessing is happening: OMPI's paffinity_alone algorithm is currently pretty stupid.  It simply assigns the first MPI process on the node to OS processor ID 0.  It then assigned the second MPI process on the node to OS processor ID 1.  ...and so on.
<br>
<p>However, if hyperthreading is enabled, OS processor ID's 0 and 1 might be 2 hyperthreads on the same core.  And therefore OMPI has effectively just bound 2 processes to the same core.  Ouch!
<br>
<p>The output of lstopo can verify if this is happening: look to see if processor ID's 0 through 7 are on the same 4 cores.
<br>
<p>Instead of paffinity_alone, use the mpirun --bind-to-core option; that should bind each MPI process to (the first hyperthread in) its own core. 
<br>
<p>Sidenote: many improvements are coming to our processor affinity system over the next few releases...  See my slides from the Open MPI BOF at SC'10 for some discussion of what's coming:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/sc-2010/">http://www.open-mpi.org/papers/sc-2010/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15296.php">David Mathog: "[OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15294.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15294.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
