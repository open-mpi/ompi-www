<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 07:21:55 2013" -->
<!-- isoreceived="20130718112155" -->
<!-- sent="Thu, 18 Jul 2013 12:21:49 +0100" -->
<!-- isosent="20130718112149" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="87r4ewf702.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05f04d27-302e-45eb-af08-7c463082b1b1_at_HUB1.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 07:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22332.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22330.php">mohammad assadsolimani: "Re: [OMPI users] max. message size"</a>
<li><strong>In reply to:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul Kapinos &lt;kapinos_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Jeff, I would turn the question the other way around:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - are there any penalties when using KNEM?
</span><br>
<p>Bull should be able to comment on that -- they turn it on by default in
<br>
their proprietary OMPI derivative -- but I doubt I can get much of a
<br>
story on it.  Mellanox ship it now too, but I don't know if their
<br>
distribution defaults to using it.
<br>
<p>I expect to use knem on hardware that's essentially the same as Mark's.
<br>
If any issues appear in production, I'll be surprised and will report
<br>
them.
<br>
<p><span class="quotelev1">&gt; We have a couple of Really Big Nodes (128 cores) with non-huge memory
</span><br>
<span class="quotelev1">&gt; bandwidth (because coupled of 4x standalone nodes with 4 sockets
</span><br>
<span class="quotelev1">&gt; each).
</span><br>
<p>I was hoping to have some results for just such a setup, but haven't
<br>
been able to spend any time on it this week.  If there are any
<br>
suggestions for OMPI tuning on it I'd be interested.
<br>
<p><span class="quotelev1">&gt; So cutting the bandwidth in halves on these nodes sound like
</span><br>
<span class="quotelev1">&gt; Very Good Thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But otherwise we've 1500+ nodes with 2 sockets and 24GB memory only
</span><br>
<span class="quotelev1">&gt; and we do not wanna to disturb the production on these nodes.... (and
</span><br>
<span class="quotelev1">&gt; different MPI versions for different nodes are doofy).
</span><br>
<p>Why would you need that?  Our horribly heterogeneous cluster just has a
<br>
node group-specific openmpi-mca-params.conf, and SGE parallel
<br>
environments keep jobs in specific host groups with basically the same
<br>
CPU speed and interconnect.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22332.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22330.php">mohammad assadsolimani: "Re: [OMPI users] max. message size"</a>
<li><strong>In reply to:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
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
