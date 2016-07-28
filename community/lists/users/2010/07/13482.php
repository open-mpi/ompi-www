<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 14:42:28 2010" -->
<!-- isoreceived="20100706184228" -->
<!-- sent="Tue, 6 Jul 2010 11:42:24 -0700" -->
<!-- isosent="20100706184224" -->
<!-- name="David Roundy" -->
<!-- email="roundyd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="AANLkTilcgGu1kA8x6VRA2DZAQn-jD-8ecy6EYJ8NkwNY_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1C0B8956-5EF5-4B09-A513-201B1B3B9159_at_open-mpi.org" -->
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
<strong>From:</strong> David Roundy (<em>roundyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 14:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13481.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13481.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah yes,
<br>
<p>It's the versions of each that are packaged in debian testing, which
<br>
are openmpi 1.4.1 and slurm 2.1.9.
<br>
<p>David
<br>
<p>On Tue, Jul 6, 2010 at 11:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It would really help if you told us what version of OMPI you are using, and what version of SLURM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2010, at 12:16 PM, David Roundy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running into trouble running an openmpi job under slurm. &#194;&#160;I
</span><br>
<span class="quotelev2">&gt;&gt; imagine the trouble may be in my slurm configuration, but since the
</span><br>
<span class="quotelev2">&gt;&gt; error itself involves mpirun crashing, I thought I'd best ask here
</span><br>
<span class="quotelev2">&gt;&gt; first. &#194;&#160;The error message I get is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#194;&#160;while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This shows up when I run my MPI job with the following script:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; set -ev
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt; mpirun pw.x &lt; pw.in &gt; pw.out 2&gt; errors_pw
</span><br>
<span class="quotelev2">&gt;&gt; (end of submit.sh)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if I submit using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sbatch -c 2 submit.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I use &quot;-N 2&quot; instead of &quot;-c 2&quot;, the job runs fine, but runs on two
</span><br>
<span class="quotelev2">&gt;&gt; separate nodes, rather than two separate cores on a single node (which
</span><br>
<span class="quotelev2">&gt;&gt; makes it extremely slow). &#194;&#160;I know that the problem is related somehow
</span><br>
<span class="quotelev2">&gt;&gt; to the environment variables that are passed to openmpi by slurm,
</span><br>
<span class="quotelev2">&gt;&gt; since I can fix the crash by changing my script to read:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; set -ev
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt; # clear SLURM environment variables
</span><br>
<span class="quotelev2">&gt;&gt; for i in `env | awk -F= '/SLURM/ {print $1}' | grep SLURM`; do
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;echo unsetting $i
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;unset $i
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 pw.x &lt; pw.in &gt; pw.out 2&gt; errors_pw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you can see that I just clear all the environment variables and
</span><br>
<span class="quotelev2">&gt;&gt; then specify the number of processors to use manually. &#194;&#160;I suppose I
</span><br>
<span class="quotelev2">&gt;&gt; could use a bisection approach to figure out which environment
</span><br>
<span class="quotelev2">&gt;&gt; variable is triggering this crash, and then could either edit my
</span><br>
<span class="quotelev2">&gt;&gt; script to just modify that variable, or could figure out how to make
</span><br>
<span class="quotelev2">&gt;&gt; slurm pass things differently. &#194;&#160;But I thought that before entering
</span><br>
<span class="quotelev2">&gt;&gt; upon this laborious process, it'd be worth asking on the list to see
</span><br>
<span class="quotelev2">&gt;&gt; if anyone has a suggestion as to what might be going wrong? I'll be
</span><br>
<span class="quotelev2">&gt;&gt; happy to provide my slurm config (or anything else that seems useful)
</span><br>
<span class="quotelev2">&gt;&gt; if you think that would be helpful!
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Roundy
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Roundy
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13481.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13481.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
