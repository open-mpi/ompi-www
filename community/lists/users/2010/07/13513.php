<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 14:09:45 2010" -->
<!-- isoreceived="20100707180945" -->
<!-- sent="Wed, 7 Jul 2010 12:09:36 -0600" -->
<!-- isosent="20100707180936" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="2E2CC0F2-9A55-42EA-9C3A-CE2A782B6B1D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikaMTwPsvQvEDkygu0d-Yyl2kXZAnATI5CeEtl-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using openmpi under slurm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 14:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13514.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13514.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13514.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, if only it were that simple. Slurm is a very difficult beast to interface with, and I have yet to find a single, reliable marker across the various slurm releases to detect options we cannot support.
<br>
<p><p>On Jul 7, 2010, at 11:59 AM, David Roundy wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 7, 2010 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid the bottom line is that OMPI simply doesn't support core-level allocations. I tried it on a slurm machine available to me, using our devel trunk as well as 1.4, with the same results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure why you are trying to run that way, but I'm afraid you can't do it with OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm.  I'm still trying to figure out how to configure slurm properly.
</span><br>
<span class="quotelev1">&gt; I want it to be able to put one single-process job per core on each
</span><br>
<span class="quotelev1">&gt; machine.  I just now figured out that there is a slurm &quot;-n&quot; option.  I
</span><br>
<span class="quotelev1">&gt; had previously only been aware of the &quot;-N&quot; and &quot;-c&quot; options, and the
</span><br>
<span class="quotelev1">&gt; latter was closer match.  It looks like everything works fine with the
</span><br>
<span class="quotelev1">&gt; &quot;-n&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, wouldn't it be a good idea to avoid crashing when &quot;-c 2&quot; is
</span><br>
<span class="quotelev1">&gt; used, e.g. by ignoring the environment variable SLURM_CPUS_PER_TASK?
</span><br>
<span class="quotelev1">&gt; It seems like this would be an important feature to be able to use if
</span><br>
<span class="quotelev1">&gt; one wanted to run mpi with multiple threads per node (as I've been
</span><br>
<span class="quotelev1">&gt; known to do in the past).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my trouble shooting, I came up with the following script, which can
</span><br>
<span class="quotelev1">&gt; reliably crash mpirun (when run without slurm, but obviously
</span><br>
<span class="quotelev1">&gt; pretending to be running under slurm).  :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; set -ev
</span><br>
<span class="quotelev1">&gt; export SLURM_JOBID=137
</span><br>
<span class="quotelev1">&gt; export SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev1">&gt; export SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; export SLURM_CPUS_PER_TASK=2
</span><br>
<span class="quotelev1">&gt; export SLURM_NODELIST=localhost
</span><br>
<span class="quotelev1">&gt; mpirun --display-devel-map echo hello world
</span><br>
<span class="quotelev1">&gt; echo it worked
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
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
<li><strong>Next message:</strong> <a href="13514.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13514.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13514.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
