<?
$subject_val = "Re: [hwloc-users] Magny Cours L3 cache issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 11:01:34 2011" -->
<!-- isoreceived="20110816150134" -->
<!-- sent="Tue, 16 Aug 2011 17:01:29 +0200" -->
<!-- isosent="20110816150129" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Magny Cours L3 cache issue" -->
<!-- id="20110816150129.GI18853_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1411217461.2017308.1313506374402.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Magny Cours L3 cache issue<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 11:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="0405.php">Wheeler, Kyle Bruce: "[hwloc-users] Magny Cours L3 cache issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wheeler, Kyle Bruce, le Tue 16 Aug 2011 16:52:54 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Aug 15, 2011, at 4:14 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Wheeler, Kyle Bruce, le Tue 16 Aug 2011 00:11:41 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm having the problem that my Magny Cours system is being identified (via hwloc-ls) as sharing an L3 cache between the NUMAnodes on a single socket. I know that this is not actually true, and I don't know how to begin debugging hwloc to see why it thinks that about the L3 cache. Thoughts?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I guess you have updated to the latest Linux kernel version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, this is not on a machine I have root access to. But, for what it's worth, here's the uname -a output:
</span><br>
<span class="quotelev1">&gt; Linux mzlogin01e 2.6.27.45-0.1-default #1 SMP 2010-02-22 16:49:47 +0100 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<p>This is quite old indeed, I'm not surprised that there are topology
<br>
detection issues on it. And our x86 backend will probably not help since
<br>
it's not NUMA-aware.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="0405.php">Wheeler, Kyle Bruce: "[hwloc-users] Magny Cours L3 cache issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
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
