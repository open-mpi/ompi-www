<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 18:49:32 2015" -->
<!-- isoreceived="20150203234932" -->
<!-- sent="Wed, 4 Feb 2015 00:49:29 +0100" -->
<!-- isosent="20150203234929" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="14A29B47-2400-4286-A99E-F37768559E7A_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="930726AF-3D32-4042-B186-98A58856A785_at_rutgers.edu" -->
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
<strong>Date:</strong> 2015-02-03 18:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26283.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Besides the items in the other mail, I have three more items that would need resolving at some point.
<br>
<p>1. STDOUT/STDERR currently go to the orte-dvm console.
<br>
&nbsp;&nbsp;&nbsp;I'm sure this is not a fundamental limitation.
<br>
&nbsp;&nbsp;&nbsp;Even if getting the information to the orte-submit instance would be problematic, the orte-dvm writing this to a file per session would be good enough too.
<br>
<p>2. Failing applications currently tear down the dvm.
<br>
&nbsp;&nbsp;&nbsp;Ideally that would not be the case, and this would be handled in relation to item (3).
<br>
&nbsp;&nbsp;&nbsp;Possibly this needs to be configurable, if others would like to see different behaviour.
<br>
<p>3. orte-submit doesn't return the exit code of the application.
<br>
<p>To be clear, I realise the current implementation is a proof of concept, so these are no complaints, just wishes of where I hope to see this going!
<br>
<p>FWIW: these items might require less intricate knowledge of OMPI in general, so with some pointers/guidance I can probably work on these myself if needed.
<br>
<p>Cheers,
<br>
<p>Mark 
<br>
<p>ps. I did a quick-and-dirty integration with our own tool and the ORTE abstraction maps like a charm!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(<a href="https://github.com/radical-cybertools/radical.pilot/commit/2d36e886081bf8531097edfc95ada1826257e460">https://github.com/radical-cybertools/radical.pilot/commit/2d36e886081bf8531097edfc95ada1826257e460</a>)
<br>
<p><span class="quotelev1">&gt; On 03 Feb 2015, at 20:38 , Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 03 Feb 2015, at 16:28 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think I fixed some of the handshake issues - please give it another try.
</span><br>
<span class="quotelev2">&gt;&gt; You should see orte-submit properly shutdown upon completion,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, it works on my laptop now! Great!
</span><br>
<span class="quotelev1">&gt; It feels quite fast too, for sort tasks :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and orte-dvm properly shutdown when sent the terminate cmd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ACK. This also works as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was able to cleanly run MPI jobs on my laptop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you also see the following errors/warnings on the dvm side?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [netbook:28324] [[20896,0],0] Releasing job data for [INVALID]
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI mark_at_netbook Distribution, ident: 1.9.0a1, repo rev: dev-811-g7299cc3, Unreleased developer copy, 132)
</span><br>
<span class="quotelev1">&gt; [netbook:28324] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt; [netbook:28324] [[20896,0],0] dvm: job [20896,20] has completed
</span><br>
<span class="quotelev1">&gt; [netbook:28324] [[20896,0],0] Releasing job data for [20896,20]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;INVALID&quot; message is there for every &quot;submit&quot;, the sess_dir_finalize exists per instance/core.
</span><br>
<span class="quotelev1">&gt; Is that something to worry about, that needs fixing or is that a configuration issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't been able to test on Edison because of maintenance (today+tomorrow), so I will report on that later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26283.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
