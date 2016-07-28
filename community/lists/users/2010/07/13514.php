<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 14:32:27 2010" -->
<!-- isoreceived="20100707183227" -->
<!-- sent="Wed, 7 Jul 2010 11:32:22 -0700" -->
<!-- isosent="20100707183222" -->
<!-- name="David Roundy" -->
<!-- email="roundyd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="AANLkTinMuKdDKLJjpD396hUJ9OLLiRLYjDPvrcxxxl3B_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2E2CC0F2-9A55-42EA-9C3A-CE2A782B6B1D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-07-07 14:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13515.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13515.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13515.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alas, I'm sorry to hear that! I had hoped (assumed?) that the slurm
<br>
team would be hand-in-glove with the OMPI team in making sure the
<br>
interface between the two is smooth.  :(
<br>
<p>David
<br>
<p>On Wed, Jul 7, 2010 at 11:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ah, if only it were that simple. Slurm is a very difficult beast to interface with, and I have yet to find a single, reliable marker across the various slurm releases to detect options we cannot support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 7, 2010, at 11:59 AM, David Roundy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 7, 2010 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid the bottom line is that OMPI simply doesn't support core-level allocations. I tried it on a slurm machine available to me, using our devel trunk as well as 1.4, with the same results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure why you are trying to run that way, but I'm afraid you can't do it with OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm. &#194;&#160;I'm still trying to figure out how to configure slurm properly.
</span><br>
<span class="quotelev2">&gt;&gt; I want it to be able to put one single-process job per core on each
</span><br>
<span class="quotelev2">&gt;&gt; machine. &#194;&#160;I just now figured out that there is a slurm &quot;-n&quot; option. &#194;&#160;I
</span><br>
<span class="quotelev2">&gt;&gt; had previously only been aware of the &quot;-N&quot; and &quot;-c&quot; options, and the
</span><br>
<span class="quotelev2">&gt;&gt; latter was closer match. &#194;&#160;It looks like everything works fine with the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-n&quot; option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, wouldn't it be a good idea to avoid crashing when &quot;-c 2&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; used, e.g. by ignoring the environment variable SLURM_CPUS_PER_TASK?
</span><br>
<span class="quotelev2">&gt;&gt; It seems like this would be an important feature to be able to use if
</span><br>
<span class="quotelev2">&gt;&gt; one wanted to run mpi with multiple threads per node (as I've been
</span><br>
<span class="quotelev2">&gt;&gt; known to do in the past).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my trouble shooting, I came up with the following script, which can
</span><br>
<span class="quotelev2">&gt;&gt; reliably crash mpirun (when run without slurm, but obviously
</span><br>
<span class="quotelev2">&gt;&gt; pretending to be running under slurm). &#194;&#160;:(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; set -ev
</span><br>
<span class="quotelev2">&gt;&gt; export SLURM_JOBID=137
</span><br>
<span class="quotelev2">&gt;&gt; export SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev2">&gt;&gt; export SLURM_NNODES=1
</span><br>
<span class="quotelev2">&gt;&gt; export SLURM_CPUS_PER_TASK=2
</span><br>
<span class="quotelev2">&gt;&gt; export SLURM_NODELIST=localhost
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --display-devel-map echo hello world
</span><br>
<span class="quotelev2">&gt;&gt; echo it worked
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
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
<li><strong>Next message:</strong> <a href="13515.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13513.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13515.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13515.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
