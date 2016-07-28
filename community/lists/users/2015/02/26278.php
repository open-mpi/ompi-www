<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 14:38:46 2015" -->
<!-- isoreceived="20150203193846" -->
<!-- sent="Tue, 3 Feb 2015 20:38:45 +0100" -->
<!-- isosent="20150203193845" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="930726AF-3D32-4042-B186-98A58856A785_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oerTtQVeT90ruK3yP+f=26zqhacNcDCb-b6E0j7J5UE_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] independent startup of orted and orterun<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 14:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26267.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26283.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; On 03 Feb 2015, at 16:28 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think I fixed some of the handshake issues - please give it another try.
</span><br>
<span class="quotelev1">&gt; You should see orte-submit properly shutdown upon completion,
</span><br>
<p>Indeed, it works on my laptop now! Great!
<br>
It feels quite fast too, for sort tasks :-)
<br>
<p><span class="quotelev1">&gt; and orte-dvm properly shutdown when sent the terminate cmd.
</span><br>
<p>ACK. This also works as expected.
<br>
<p><span class="quotelev1">&gt; I was able to cleanly run MPI jobs on my laptop.
</span><br>
<p>Do you also see the following errors/warnings on the dvm side?
<br>
<p>[netbook:28324] [[20896,0],0] Releasing job data for [INVALID]
<br>
Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI mark_at_netbook Distribution, ident: 1.9.0a1, repo rev: dev-811-g7299cc3, Unreleased developer copy, 132)
<br>
[netbook:28324] sess_dir_finalize: proc session dir does not exist
<br>
[netbook:28324] [[20896,0],0] dvm: job [20896,20] has completed
<br>
[netbook:28324] [[20896,0],0] Releasing job data for [20896,20]
<br>
<p>The &quot;INVALID&quot; message is there for every &quot;submit&quot;, the sess_dir_finalize exists per instance/core.
<br>
Is that something to worry about, that needs fixing or is that a configuration issue?
<br>
<p>I haven't been able to test on Edison because of maintenance (today+tomorrow), so I will report on that later.
<br>
<p>Thanks again!
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26267.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26283.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
