<?
$subject_val = "Re: [OMPI users] C/R Enabled Debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 11:55:07 2015" -->
<!-- isoreceived="20150929155507" -->
<!-- sent="Tue, 29 Sep 2015 16:52:44 +0100" -->
<!-- isosent="20150929155244" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C/R Enabled Debugging" -->
<!-- id="87si5xxlwz.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="06C4489D-C31D-4E2C-A858-2719AE20DEC1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] C/R Enabled Debugging<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-29 11:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27712.php">Dave Love: "[OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>In reply to:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Meanwhile, much later, as I thought I'd sent this...]
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi Zhang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have seen little interest in binary level CR over the years, which
</span><br>
<span class="quotelev1">&gt; is the primary reason the support has lapsed.
</span><br>
<p>That might be a bit chicken and egg!
<br>
<p><span class="quotelev1">&gt; The approach just doesn&#226;&#128;&#153;t scale very well.
</span><br>
<p>Presumably that depends, and it definitely seems reasonable at our
<br>
scale.  (mvapich seems to take it seriously.)
<br>
<p><span class="quotelev1">&gt; Once the graduate student who wrote it
</span><br>
<span class="quotelev1">&gt; received his degree, there simply wasn&#226;&#128;&#153;t enough user-level interest to
</span><br>
<span class="quotelev1">&gt; motivate the developer members to maintain it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the interim, we&#226;&#128;&#153;ve seen considerable interest in application-level
</span><br>
<span class="quotelev1">&gt; CR in its place. You might checkout the SCR library from LLNL as an
</span><br>
<span class="quotelev1">&gt; example of what people are doing in that space:
</span><br>
<p>Does it support ORTE?  When I last looked, it said only SLURM, but maybe
<br>
that doesn't include mvapich with other starters.  Also it assumes local
<br>
storage (or the associated in-memory filesystem), in case that's an
<br>
issue.
<br>
<p>Is SCR not actually used for system-level checkpoints in mvapich?  I
<br>
assumed it was from what I'd read.
<br>
<p><span class="quotelev1">&gt; <a href="https://computation.llnl.gov/project/scr/">https://computation.llnl.gov/project/scr/</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://computation.llnl.gov/project/scr/">https://computation.llnl.gov/project/scr/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We did have someone (another graduate student) recently work with the
</span><br>
<span class="quotelev1">&gt; community to attempt to restore the binary-level CR support, but he
</span><br>
<span class="quotelev1">&gt; didn&#226;&#128;&#153;t get a chance to complete it prior to graduating. So we are
</span><br>
<span class="quotelev1">&gt; removing the leftover code from the 2.x release series until someone
</span><br>
<span class="quotelev1">&gt; comes along with enough interest to repair it.
</span><br>
<p>How much knowledge and effort would that take?  Presumably knowing what
<br>
broke it would give some indication.
<br>
<p><span class="quotelev1">&gt; Assuming that hasn&#226;&#128;&#153;t happened before sometime next year, I might take
</span><br>
<span class="quotelev1">&gt; a shot at it then - but I won&#226;&#128;&#153;t have any time to work on it before
</span><br>
<span class="quotelev1">&gt; next spring at the earliest, and as I said, it isn&#226;&#128;&#153;t clear there is a
</span><br>
<span class="quotelev1">&gt; significant user base for binary-level CR with the shift to
</span><br>
<span class="quotelev1">&gt; application-level systems.
</span><br>
<p>I'm sure it varies, but I don't see much useful checkpointing support,
<br>
and/or users willing to use it, here.
<br>
<p>[Quite often it would be more useful to migrate part of a job, rather
<br>
than restart the whole thing, though that obviously requires support
<br>
from the resource manager.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27712.php">Dave Love: "[OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>In reply to:</strong> <a href="27632.php">Ralph Castain: "Re: [OMPI users] C/R Enabled Debugging"</a>
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
