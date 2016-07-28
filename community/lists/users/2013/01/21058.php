<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 09:52:58 2013" -->
<!-- isoreceived="20130103145258" -->
<!-- sent="Thu, 03 Jan 2013 15:52:53 +0100" -->
<!-- isosent="20130103145253" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="1357224773.3355.25.camel_at_lurvas.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="399FC274-E941-447C-B975-36357ED1876C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] grpcomm component hier gone...<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 09:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21059.php">Chuck Mosher: "[OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Previous message:</strong> <a href="21057.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21057.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2013-01-03 at 06:18 -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Jan 3, 2013, at 3:01 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2013-01-03 at 11:54 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, 2013-01-03 at 11:15 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The grpcomm component hier seems to have vanished between 1.6.1 and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1.6.3.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Why?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It seems that the version of slurm we are using (not the latest at the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; moment) is using it for startup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be using PMI if you are directly launching processes via srun, and should not be using hier any more.
</span><br>
<p>Shouldn't the grpcomm pmi component be turned on by default then, if it
<br>
is needed?
<br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmm it seems it is the ess_slurmd_module.c that is using grpcomm=hier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes - that is the *only* scenario (a direct launch of procs via srun) that should use hier
</span><br>
<p>What i have in my submit file is:
<br>
#SBATCH -n x
<br>
<p>srun some-mpi-binary
<br>
<p>This fails since hier is missing.
<br>
<p>The reason one wants to use srun and not mpirun is getting slurms cgroup
<br>
containement.
<br>
<p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; orte/mca/plm/base/plm_base_rsh_support.c also tries to use the hier
</span><br>
<span class="quotelev2">&gt; &gt; grpcomm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something is very wrong if that is true. How was this configured, and how are you starting this job?
</span><br>
<p>Not sure if it actually tries to use hier at runtime, i just noticed
<br>
that it had a setenv OMPI_MCA_grpcomm=hier in the code.
<br>
<p>So what is the real problem here?
<br>
<p>configure line is:
<br>
./configure --enable-orterun-prefix-by-default --enable-cxx-exceptions
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21059.php">Chuck Mosher: "[OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Previous message:</strong> <a href="21057.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21057.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
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
