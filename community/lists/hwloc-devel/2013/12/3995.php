<?
$subject_val = "Re: [hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 17:39:43 2013" -->
<!-- isoreceived="20131226223943" -->
<!-- sent="Thu, 26 Dec 2013 23:39:41 +0100" -->
<!-- isosent="20131226223941" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="20131226223941.GC5398_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52BCAE37.5000004_at_citrix.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Creating a topology generation method for Xen<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 17:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3994.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3994.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew Cooper, le Thu 26 Dec 2013 23:31:36 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 26/12/2013 21:43, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Andrew Cooper, le Thu 26 Dec 2013 22:17:38 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe can make a topology-xen.c without too much trouble.  It likely
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wants to checked before an os-specific hook (Xen dom0's come in at least
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux, FreeBSD, NetBSD flavours which have mainstream support)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are there any hints/suggestion/information about how to go about
</span><br>
<span class="quotelev3">&gt; &gt;&gt; integrating this?
</span><br>
<span class="quotelev2">&gt; &gt; Yes, you can probably play with plugin priorities for that.  See for
</span><br>
<span class="quotelev2">&gt; &gt; instance what happens with the pci plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any hints on exactly what I have to tweak to get
</span><br>
<span class="quotelev1">&gt; topology-xen.c picked up properly?
</span><br>
<p>Things happen in config/hwloc.m4, where you have to specify in
<br>
hwloc_components that you want to build a new plugin. You can probably
<br>
use the xml plugin as an example.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3994.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3994.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
