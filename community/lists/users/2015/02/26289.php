<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 05:22:07 2015" -->
<!-- isoreceived="20150204102207" -->
<!-- sent="Wed, 4 Feb 2015 11:22:03 +0100" -->
<!-- isosent="20150204102203" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="0255060D-66C3-4DD7-87B7-BED63E4855B2_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57occxECXNMJU=EiKsdkMmOZ452gF6xfek+81xa4_oLLwew_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-04 05:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26288.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>In reply to:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok great, sounds like a plan!
<br>
<p><span class="quotelev1">&gt; On 04 Feb 2015, at 2:53 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appreciate your patience! I'm somewhat limited this week by being on travel to our HQ, so I don't have access to my usual test cluster. I'll be better situated to complete the implementation once I get home.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, some quick thoughts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. stdout/stderr: yes, I just need to &quot;register&quot; orte-submit as the one to receive those from the submitted job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. That one is going to be a tad trickier, but is resolvable. May take me a little longer to fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. dang - I thought I had it doing so. I'll look to find the issue. I suspect it's just a case of correctly setting the return code of orte-submit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd welcome the help! Let me ponder the best way to point you to the areas needing work, and we can kick around off-list about who does what.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great to hear this is working with your tool so quickly!!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 3:49 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides the items in the other mail, I have three more items that would need resolving at some point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. STDOUT/STDERR currently go to the orte-dvm console.
</span><br>
<span class="quotelev1">&gt;    I'm sure this is not a fundamental limitation.
</span><br>
<span class="quotelev1">&gt;    Even if getting the information to the orte-submit instance would be problematic, the orte-dvm writing this to a file per session would be good enough too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Failing applications currently tear down the dvm.
</span><br>
<span class="quotelev1">&gt;    Ideally that would not be the case, and this would be handled in relation to item (3).
</span><br>
<span class="quotelev1">&gt;    Possibly this needs to be configurable, if others would like to see different behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. orte-submit doesn't return the exit code of the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear, I realise the current implementation is a proof of concept, so these are no complaints, just wishes of where I hope to see this going!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: these items might require less intricate knowledge of OMPI in general, so with some pointers/guidance I can probably work on these myself if needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps. I did a quick-and-dirty integration with our own tool and the ORTE abstraction maps like a charm!
</span><br>
<span class="quotelev1">&gt;     (<a href="https://github.com/radical-cybertools/radical.pilot/commit/2d36e886081bf8531097edfc95ada1826257e460">https://github.com/radical-cybertools/radical.pilot/commit/2d36e886081bf8531097edfc95ada1826257e460</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 03 Feb 2015, at 20:38 , Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 03 Feb 2015, at 16:28 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think I fixed some of the handshake issues - please give it another try.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You should see orte-submit properly shutdown upon completion,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, it works on my laptop now! Great!
</span><br>
<span class="quotelev2">&gt; &gt; It feels quite fast too, for sort tasks :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and orte-dvm properly shutdown when sent the terminate cmd.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ACK. This also works as expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was able to cleanly run MPI jobs on my laptop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you also see the following errors/warnings on the dvm side?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] [[20896,0],0] Releasing job data for [INVALID]
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI mark_at_netbook Distribution, ident: 1.9.0a1, repo rev: dev-811-g7299cc3, Unreleased developer copy, 132)
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] [[20896,0],0] dvm: job [20896,20] has completed
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] [[20896,0],0] Releasing job data for [20896,20]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;INVALID&quot; message is there for every &quot;submit&quot;, the sess_dir_finalize exists per instance/core.
</span><br>
<span class="quotelev2">&gt; &gt; Is that something to worry about, that needs fixing or is that a configuration issue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't been able to test on Edison because of maintenance (today+tomorrow), so I will report on that later.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26282.php">http://www.open-mpi.org/community/lists/users/2015/02/26282.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26284.php">http://www.open-mpi.org/community/lists/users/2015/02/26284.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26288.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>In reply to:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26290.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
