<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 11:06:20 2015" -->
<!-- isoreceived="20150326150620" -->
<!-- sent="Thu, 26 Mar 2015 16:06:17 +0100" -->
<!-- isosent="20150326150617" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="D26631AA-0515-427E-BCC9-27F340D0CF5B_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7FABAC5F-D490-4DBF-9A9F-21524EA3B445_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 11:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26547.php">Hammond, Simon David (-EXP): "[OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26545.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26544.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26549.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 26 Mar 2015, at 16:01 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2015, at 1:33 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi guys,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the follow-up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It appears that you are ruling out that Munge is required because the system runs TORQUE, but as far as I can see Munge is/can be used by both SLURM and TORQUE.
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://docs.adaptivecomputing.com/torque/4-0-2/Content/topics/1-installConfig/serverConfig.htm#usingMUNGEAuth">http://docs.adaptivecomputing.com/torque/4-0-2/Content/topics/1-installConfig/serverConfig.htm#usingMUNGEAuth</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really ruling it out, Mark, but I didn&#226;&#128;&#153;t consider it likely because then munge would indeed have to be on the compute nodes. Otherwise, the sister moms wouldn&#226;&#128;&#153;t be able to authenticate back to the mom on the IO node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear, I&#226;&#128;&#153;m not 100% sure what is using munge on the IO node. My real point was only that there are other subsystems that can use such security services, and that those subsystems might not extend into the compute node itself. Thus, the need to work in multiple security domains is going to exist into the future.
</span><br>
<p>Right, I think I'm clear on the issue now :-)<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26547.php">Hammond, Simon David (-EXP): "[OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26545.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26544.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26549.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
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
