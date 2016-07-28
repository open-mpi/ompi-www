<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 12:11:43 2013" -->
<!-- isoreceived="20130425161143" -->
<!-- sent="Thu, 25 Apr 2013 17:11:30 +0100" -->
<!-- isosent="20130425161130" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="87vc7aoaj1.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E5F279DC-2E74-44D9-BF04-8013B61CD8B5_at_open-mpi.org" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 12:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Apr 24, 2013, at 8:58 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have seen it recommended to use psm instead of openib for QLogic cards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Tom] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes.  PSM will perform better and be more stable when running OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than using verbs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But unfortunately you won't be able to checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True - yet remember that OMPI no longer supports checkpoint/restart
</span><br>
<span class="quotelev1">&gt; after the 1.6 series. Pending a new supporter coming along
</span><br>
<p>As far as I can tell, lack of PSM checkpointing isn't specific to OMPI,
<br>
and I know people have resorted to verbs to get it.
<br>
<p>Dropped CR is definitely reason not to use OMPI past 1.6.  [By the way,
<br>
the release notes are confusing, saying that DMTCP is supported, but CR
<br>
is dropped.]  I'd have hoped a vendor who needs to support CR would
<br>
contribute, but I suppose changes just become proprietary if they move
<br>
the base past 1.6 :-(.
<br>
<p>For general information, what makes the CR support difficult to maintain
<br>
-- is it just a question of effort?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21791.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
