<?
$subject_val = "[OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 14:16:53 2010" -->
<!-- isoreceived="20100706181653" -->
<!-- sent="Tue, 6 Jul 2010 11:16:47 -0700" -->
<!-- isosent="20100706181647" -->
<!-- name="David Roundy" -->
<!-- email="roundyd_at_[hidden]" -->
<!-- subject="[OMPI users] trouble using openmpi under slurm" -->
<!-- id="AANLkTinTEhbbANXjF6FF8rVVSzmEq1GJLjqiBLLIQUTP_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] trouble using openmpi under slurm<br>
<strong>From:</strong> David Roundy (<em>roundyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 14:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13480.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13478.php">Don Kerr: "Re: [OMPI users] UDAPL 2.0 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13480.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13480.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13481.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm running into trouble running an openmpi job under slurm.  I
<br>
imagine the trouble may be in my slurm configuration, but since the
<br>
error itself involves mpirun crashing, I thought I'd best ask here
<br>
first.  The error message I get is:
<br>
<p>--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>This shows up when I run my MPI job with the following script:
<br>
<p>#!/bin/sh
<br>
set -ev
<br>
hostname
<br>
mpirun pw.x &lt; pw.in &gt; pw.out 2&gt; errors_pw
<br>
(end of submit.sh)
<br>
<p>if I submit using
<br>
<p>sbatch -c 2 submit.sh
<br>
<p>If I use &quot;-N 2&quot; instead of &quot;-c 2&quot;, the job runs fine, but runs on two
<br>
separate nodes, rather than two separate cores on a single node (which
<br>
makes it extremely slow).  I know that the problem is related somehow
<br>
to the environment variables that are passed to openmpi by slurm,
<br>
since I can fix the crash by changing my script to read:
<br>
<p>#!/bin/sh
<br>
set -ev
<br>
hostname
<br>
# clear SLURM environment variables
<br>
for i in `env | awk -F= '/SLURM/ {print $1}' | grep SLURM`; do
<br>
&nbsp;&nbsp;echo unsetting $i
<br>
&nbsp;&nbsp;unset $i
<br>
done
<br>
mpirun -np 2 pw.x &lt; pw.in &gt; pw.out 2&gt; errors_pw
<br>
<p>So you can see that I just clear all the environment variables and
<br>
then specify the number of processors to use manually.  I suppose I
<br>
could use a bisection approach to figure out which environment
<br>
variable is triggering this crash, and then could either edit my
<br>
script to just modify that variable, or could figure out how to make
<br>
slurm pass things differently.  But I thought that before entering
<br>
upon this laborious process, it'd be worth asking on the list to see
<br>
if anyone has a suggestion as to what might be going wrong? I'll be
<br>
happy to provide my slurm config (or anything else that seems useful)
<br>
if you think that would be helpful!
<br>
<pre>
-- 
David Roundy
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13480.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13478.php">Don Kerr: "Re: [OMPI users] UDAPL 2.0 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13480.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13480.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13481.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
