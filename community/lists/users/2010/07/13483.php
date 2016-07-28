<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 15:31:50 2010" -->
<!-- isoreceived="20100706193150" -->
<!-- sent="Tue, 6 Jul 2010 13:31:40 -0600" -->
<!-- isosent="20100706193140" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="5CF41CDB-39F0-477C-B6D6-4F2E50BE6909_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilcgGu1kA8x6VRA2DZAQn-jD-8ecy6EYJ8NkwNY_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-06 15:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13482.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13482.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13487.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13487.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - that helps.
<br>
<p>As you note, the issue is that OMPI doesn't support the core-level allocation options of slurm - never has, probably never will. What I found interesting, though, was that your envars don't anywhere indicate that this is what you requested. I don't see anything there that would case the daemon to crash.
<br>
<p>So I'm left to guess that this is an issue where slurm doesn't like something OMPI does because it violates that core-level option. Can you add --display-devel-map to your mpirun command? It would be interesting to see where it thinks the daemon should go.
<br>
<p>Just to check - the envars you sent in your other note came from the sbatch -c 2 run, yes?
<br>
<p>On Jul 6, 2010, at 12:42 PM, David Roundy wrote:
<br>
<p><span class="quotelev1">&gt; Ah yes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's the versions of each that are packaged in debian testing, which
</span><br>
<span class="quotelev1">&gt; are openmpi 1.4.1 and slurm 2.1.9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 6, 2010 at 11:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It would really help if you told us what version of OMPI you are using, and what version of SLURM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 6, 2010, at 12:16 PM, David Roundy wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running into trouble running an openmpi job under slurm.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imagine the trouble may be in my slurm configuration, but since the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error itself involves mpirun crashing, I thought I'd best ask here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first.  The error message I get is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This shows up when I run my MPI job with the following script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set -ev
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun pw.x &lt; pw.in &gt; pw.out 2&gt; errors_pw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (end of submit.sh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I submit using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sbatch -c 2 submit.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I use &quot;-N 2&quot; instead of &quot;-c 2&quot;, the job runs fine, but runs on two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separate nodes, rather than two separate cores on a single node (which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; makes it extremely slow).  I know that the problem is related somehow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the environment variables that are passed to openmpi by slurm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since I can fix the crash by changing my script to read:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set -ev
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # clear SLURM environment variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for i in `env | awk -F= '/SLURM/ {print $1}' | grep SLURM`; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  echo unsetting $i
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  unset $i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 pw.x &lt; pw.in &gt; pw.out 2&gt; errors_pw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So you can see that I just clear all the environment variables and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then specify the number of processors to use manually.  I suppose I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could use a bisection approach to figure out which environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable is triggering this crash, and then could either edit my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script to just modify that variable, or could figure out how to make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm pass things differently.  But I thought that before entering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upon this laborious process, it'd be worth asking on the list to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if anyone has a suggestion as to what might be going wrong? I'll be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happy to provide my slurm config (or anything else that seems useful)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you think that would be helpful!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Roundy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Roundy
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
<li><strong>Next message:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13482.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13482.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13487.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13487.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
