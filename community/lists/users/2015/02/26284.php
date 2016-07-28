<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 20:53:05 2015" -->
<!-- isoreceived="20150204015305" -->
<!-- sent="Tue, 3 Feb 2015 17:53:03 -0800" -->
<!-- isosent="20150204015303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="CAMD57occxECXNMJU=EiKsdkMmOZ452gF6xfek+81xa4_oLLwew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="14A29B47-2400-4286-A99E-F37768559E7A_at_rutgers.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 20:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26285.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26283.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26289.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26289.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appreciate your patience! I'm somewhat limited this week by being on travel
<br>
to our HQ, so I don't have access to my usual test cluster. I'll be better
<br>
situated to complete the implementation once I get home.
<br>
<p>For now, some quick thoughts:
<br>
<p>1. stdout/stderr: yes, I just need to &quot;register&quot; orte-submit as the one to
<br>
receive those from the submitted job.
<br>
<p>2. That one is going to be a tad trickier, but is resolvable. May take me a
<br>
little longer to fix.
<br>
<p>3. dang - I thought I had it doing so. I'll look to find the issue. I
<br>
suspect it's just a case of correctly setting the return code of
<br>
orte-submit.
<br>
<p>I'd welcome the help! Let me ponder the best way to point you to the areas
<br>
needing work, and we can kick around off-list about who does what.
<br>
<p>Great to hear this is working with your tool so quickly!!
<br>
Ralph
<br>
<p><p>On Tue, Feb 3, 2015 at 3:49 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides the items in the other mail, I have three more items that would
</span><br>
<span class="quotelev1">&gt; need resolving at some point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. STDOUT/STDERR currently go to the orte-dvm console.
</span><br>
<span class="quotelev1">&gt;    I'm sure this is not a fundamental limitation.
</span><br>
<span class="quotelev1">&gt;    Even if getting the information to the orte-submit instance would be
</span><br>
<span class="quotelev1">&gt; problematic, the orte-dvm writing this to a file per session would be good
</span><br>
<span class="quotelev1">&gt; enough too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Failing applications currently tear down the dvm.
</span><br>
<span class="quotelev1">&gt;    Ideally that would not be the case, and this would be handled in
</span><br>
<span class="quotelev1">&gt; relation to item (3).
</span><br>
<span class="quotelev1">&gt;    Possibly this needs to be configurable, if others would like to see
</span><br>
<span class="quotelev1">&gt; different behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. orte-submit doesn't return the exit code of the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear, I realise the current implementation is a proof of concept,
</span><br>
<span class="quotelev1">&gt; so these are no complaints, just wishes of where I hope to see this going!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: these items might require less intricate knowledge of OMPI in
</span><br>
<span class="quotelev1">&gt; general, so with some pointers/guidance I can probably work on these myself
</span><br>
<span class="quotelev1">&gt; if needed.
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
<span class="quotelev1">&gt; ps. I did a quick-and-dirty integration with our own tool and the ORTE
</span><br>
<span class="quotelev1">&gt; abstraction maps like a charm!
</span><br>
<span class="quotelev1">&gt;     (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/radical-cybertools/radical.pilot/commit/2d36e886081bf8531097edfc95ada1826257e460">https://github.com/radical-cybertools/radical.pilot/commit/2d36e886081bf8531097edfc95ada1826257e460</a>
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 03 Feb 2015, at 20:38 , Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 03 Feb 2015, at 16:28 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think I fixed some of the handshake issues - please give it another
</span><br>
<span class="quotelev1">&gt; try.
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
<span class="quotelev2">&gt; &gt; Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; mark_at_netbook Distribution, ident: 1.9.0a1, repo rev: dev-811-g7299cc3,
</span><br>
<span class="quotelev1">&gt; Unreleased developer copy, 132)
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] [[20896,0],0] dvm: job [20896,20] has completed
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:28324] [[20896,0],0] Releasing job data for [20896,20]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;INVALID&quot; message is there for every &quot;submit&quot;, the sess_dir_finalize
</span><br>
<span class="quotelev1">&gt; exists per instance/core.
</span><br>
<span class="quotelev2">&gt; &gt; Is that something to worry about, that needs fixing or is that a
</span><br>
<span class="quotelev1">&gt; configuration issue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't been able to test on Edison because of maintenance
</span><br>
<span class="quotelev1">&gt; (today+tomorrow), so I will report on that later.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26282.php">http://www.open-mpi.org/community/lists/users/2015/02/26282.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26285.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26283.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26289.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26289.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
