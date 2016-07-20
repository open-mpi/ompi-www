<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 02:57:10 2014" -->
<!-- isoreceived="20140326065710" -->
<!-- sent="Wed, 26 Mar 2014 07:57:06 +0100" -->
<!-- isosent="20140326065706" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="53327A42.6080705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="533218A1.9080705_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-26 02:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1002.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1002.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 26/03/2014 01:00, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 26/03/14 01:34, Biddiscombe, John A. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I compile on the login node, but run lstopo on the ION, I get
</span><br>
<span class="quotelev2">&gt; &gt; this (wrong, below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you build this with GCC (the standard system one, not the
</span><br>
<span class="quotelev1">&gt; cross-compiler for BGQ) does it still get it wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My suspicion is that the hwloc BGQ backend is designed to fill in
</span><br>
<span class="quotelev1">&gt; information for code running under the CNK which would otherwise be
</span><br>
<span class="quotelev1">&gt; discoverable under Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure it's a good idea to try and use it under RHEL.
</span><br>
<p>If you do so, the BGQ backend disables itself by default because it
<br>
doesn't find the right CNK uname info. It falls back to other backends,
<br>
Linux here. But you can force the BGQ backend with an env var if really
<br>
needed.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1002.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1002.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
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
