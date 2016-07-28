<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 09:18:18 2013" -->
<!-- isoreceived="20130103141818" -->
<!-- sent="Thu, 3 Jan 2013 06:18:07 -0800" -->
<!-- isosent="20130103141807" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="399FC274-E941-447C-B975-36357ED1876C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1357210889.3355.16.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>Date:</strong> 2013-01-03 09:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21056.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21056.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2013, at 3:01 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2013-01-03 at 11:54 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2013-01-03 at 11:15 +0100, Ake Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The grpcomm component hier seems to have vanished between 1.6.1 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the version of slurm we are using (not the latest at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; moment) is using it for startup.
</span><br>
<p>It should be using PMI if you are directly launching processes via srun, and should not be using hier any more.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm it seems it is the ess_slurmd_module.c that is using grpcomm=hier.
</span><br>
<p>Yes - that is the *only* scenario (a direct launch of procs via srun) that should use hier
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/plm_base_rsh_support.c also tries to use the hier
</span><br>
<span class="quotelev1">&gt; grpcomm
</span><br>
<p>Something is very wrong if that is true. How was this configured, and how are you starting this job?
<br>
<p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21056.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21056.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21058.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
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
