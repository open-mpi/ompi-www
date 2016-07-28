<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 20:48:11 2015" -->
<!-- isoreceived="20150204014811" -->
<!-- sent="Tue, 3 Feb 2015 17:48:09 -0800" -->
<!-- isosent="20150204014809" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="CAMD57odJqFMBhrqJAce4tnsv6Noy9NXsg5vUWKZx-G7y2JttCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 20:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....no, I wasn't seeing those warnings/errors, but I only ran one
<br>
submit job. I'll investigate.
<br>
<p>On Tue, Feb 3, 2015 at 11:38 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 03 Feb 2015, at 16:28 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I think I fixed some of the handshake issues - please give it another
</span><br>
<span class="quotelev1">&gt; try.
</span><br>
<span class="quotelev2">&gt; &gt; You should see orte-submit properly shutdown upon completion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, it works on my laptop now! Great!
</span><br>
<span class="quotelev1">&gt; It feels quite fast too, for sort tasks :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and orte-dvm properly shutdown when sent the terminate cmd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ACK. This also works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was able to cleanly run MPI jobs on my laptop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you also see the following errors/warnings on the dvm side?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [netbook:28324] [[20896,0],0] Releasing job data for [INVALID]
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI mark_at_netbook
</span><br>
<span class="quotelev1">&gt; Distribution, ident: 1.9.0a1, repo rev: dev-811-g7299cc3, Unreleased
</span><br>
<span class="quotelev1">&gt; developer copy, 132)
</span><br>
<span class="quotelev1">&gt; [netbook:28324] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt; [netbook:28324] [[20896,0],0] dvm: job [20896,20] has completed
</span><br>
<span class="quotelev1">&gt; [netbook:28324] [[20896,0],0] Releasing job data for [20896,20]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;INVALID&quot; message is there for every &quot;submit&quot;, the sess_dir_finalize
</span><br>
<span class="quotelev1">&gt; exists per instance/core.
</span><br>
<span class="quotelev1">&gt; Is that something to worry about, that needs fixing or is that a
</span><br>
<span class="quotelev1">&gt; configuration issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't been able to test on Edison because of maintenance
</span><br>
<span class="quotelev1">&gt; (today+tomorrow), so I will report on that later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26278.php">http://www.open-mpi.org/community/lists/users/2015/02/26278.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26284.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26282.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
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
