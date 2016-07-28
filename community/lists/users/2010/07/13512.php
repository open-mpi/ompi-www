<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 13:59:38 2010" -->
<!-- isoreceived="20100707175938" -->
<!-- sent="Wed, 7 Jul 2010 10:59:32 -0700" -->
<!-- isosent="20100707175932" -->
<!-- name="David Roundy" -->
<!-- email="roundyd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="AANLkTikaMTwPsvQvEDkygu0d-Yyl2kXZAnATI5CeEtl-_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2F04DA66-FE62-4131-8F8A-DAFB69668C46_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-07-07 13:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 7, 2010 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm afraid the bottom line is that OMPI simply doesn't support core-level allocations. I tried it on a slurm machine available to me, using our devel trunk as well as 1.4, with the same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure why you are trying to run that way, but I'm afraid you can't do it with OMPI.
</span><br>
<p>Hmmm.  I'm still trying to figure out how to configure slurm properly.
<br>
&nbsp;I want it to be able to put one single-process job per core on each
<br>
machine.  I just now figured out that there is a slurm &quot;-n&quot; option.  I
<br>
had previously only been aware of the &quot;-N&quot; and &quot;-c&quot; options, and the
<br>
latter was closer match.  It looks like everything works fine with the
<br>
&quot;-n&quot; option.
<br>
<p>However, wouldn't it be a good idea to avoid crashing when &quot;-c 2&quot; is
<br>
used, e.g. by ignoring the environment variable SLURM_CPUS_PER_TASK?
<br>
It seems like this would be an important feature to be able to use if
<br>
one wanted to run mpi with multiple threads per node (as I've been
<br>
known to do in the past).
<br>
<p>In my trouble shooting, I came up with the following script, which can
<br>
reliably crash mpirun (when run without slurm, but obviously
<br>
pretending to be running under slurm).  :(
<br>
<p>#!/bin/sh
<br>
set -ev
<br>
export SLURM_JOBID=137
<br>
export SLURM_TASKS_PER_NODE=1
<br>
export SLURM_NNODES=1
<br>
export SLURM_CPUS_PER_TASK=2
<br>
export SLURM_NODELIST=localhost
<br>
mpirun --display-devel-map echo hello world
<br>
echo it worked
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
