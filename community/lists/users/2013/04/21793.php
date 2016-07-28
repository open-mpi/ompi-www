<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 12:19:35 2013" -->
<!-- isoreceived="20130425161935" -->
<!-- sent="Thu, 25 Apr 2013 09:19:27 -0700" -->
<!-- isosent="20130425161927" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="F0DD2C3C-66BA-48FC-BD8A-72FC3D986A56_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87vc7aoaj1.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 12:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2013, at 9:11 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2013, at 8:58 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have seen it recommended to use psm instead of openib for QLogic cards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Tom] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes.  PSM will perform better and be more stable when running OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than using verbs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But unfortunately you won't be able to checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; True - yet remember that OMPI no longer supports checkpoint/restart
</span><br>
<span class="quotelev2">&gt;&gt; after the 1.6 series. Pending a new supporter coming along
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can tell, lack of PSM checkpointing isn't specific to OMPI,
</span><br>
<span class="quotelev1">&gt; and I know people have resorted to verbs to get it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dropped CR is definitely reason not to use OMPI past 1.6.  [By the way,
</span><br>
<span class="quotelev1">&gt; the release notes are confusing, saying that DMTCP is supported, but CR
</span><br>
<span class="quotelev1">&gt; is dropped.]  I'd have hoped a vendor who needs to support CR would
</span><br>
<span class="quotelev1">&gt; contribute, but I suppose changes just become proprietary if they move
</span><br>
<span class="quotelev1">&gt; the base past 1.6 :-(.
</span><br>
<p>Not necessarily
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For general information, what makes the CR support difficult to maintain
</span><br>
<span class="quotelev1">&gt; -- is it just a question of effort?
</span><br>
<p>Largely a lack of interest. Very few (i.e., a handful) of people around the world use it, and it is hard to justify putting in the effort for that small a user group. The person who did the work did so as part of his PhD thesis - he maintained it for a couple of years while doing a post-doc, but now has joined the &quot;real world&quot; and no longer has time. None of the other developers are employed by someone who cares.
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
<li><strong>Next message:</strong> <a href="21794.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
