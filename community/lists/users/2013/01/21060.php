<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:00:39 2013" -->
<!-- isoreceived="20130103150039" -->
<!-- sent="Thu, 3 Jan 2013 07:00:31 -0800" -->
<!-- isosent="20130103150031" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="EB1725D9-D74D-4346-906C-28EECC401334_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1357224773.3355.25.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 10:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Previous message:</strong> <a href="21059.php">Chuck Mosher: "[OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>In reply to:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2013, at 6:52 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2013-01-03 at 06:18 -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 3, 2013, at 3:01 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 2013-01-03 at 11:54 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, 2013-01-03 at 11:15 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The grpcomm component hier seems to have vanished between 1.6.1 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.6.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems that the version of slurm we are using (not the latest at the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; moment) is using it for startup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It should be using PMI if you are directly launching processes via srun, and should not be using hier any more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't the grpcomm pmi component be turned on by default then, if it
</span><br>
<span class="quotelev1">&gt; is needed?
</span><br>
<p>It should be
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmm it seems it is the ess_slurmd_module.c that is using grpcomm=hier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes - that is the *only* scenario (a direct launch of procs via srun) that should use hier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What i have in my submit file is:
</span><br>
<span class="quotelev1">&gt; #SBATCH -n x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun some-mpi-binary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This fails since hier is missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason one wants to use srun and not mpirun is getting slurms cgroup
</span><br>
<span class="quotelev1">&gt; containement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/mca/plm/base/plm_base_rsh_support.c also tries to use the hier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grpcomm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Something is very wrong if that is true. How was this configured, and how are you starting this job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if it actually tries to use hier at runtime, i just noticed
</span><br>
<span class="quotelev1">&gt; that it had a setenv OMPI_MCA_grpcomm=hier in the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what is the real problem here?
</span><br>
<p>Do you have PMI installed and running on your system? I think that is the source of the trouble - if PMI isn't running, then this will fail.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure line is:
</span><br>
<span class="quotelev1">&gt; ./configure --enable-orterun-prefix-by-default --enable-cxx-exceptions
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
<li><strong>Next message:</strong> <a href="21061.php">Ralph Castain: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Previous message:</strong> <a href="21059.php">Chuck Mosher: "[OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>In reply to:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
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
