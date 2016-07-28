<?
$subject_val = "Re: [hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 17:42:28 2013" -->
<!-- isoreceived="20131226224228" -->
<!-- sent="Thu, 26 Dec 2013 22:42:18 +0000" -->
<!-- isosent="20131226224218" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="52BCB0CA.1050706_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131226223941.GC5398_at_type" -->
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
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 17:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26/12/2013 22:39, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Andrew Cooper, le Thu 26 Dec 2013 23:31:36 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 26/12/2013 21:43, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew Cooper, le Thu 26 Dec 2013 22:17:38 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe can make a topology-xen.c without too much trouble.  It likely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wants to checked before an os-specific hook (Xen dom0's come in at least
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux, FreeBSD, NetBSD flavours which have mainstream support)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are there any hints/suggestion/information about how to go about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integrating this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, you can probably play with plugin priorities for that.  See for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance what happens with the pci plugins.
</span><br>
<span class="quotelev2">&gt;&gt; Are there any hints on exactly what I have to tweak to get
</span><br>
<span class="quotelev2">&gt;&gt; topology-xen.c picked up properly?
</span><br>
<span class="quotelev1">&gt; Things happen in config/hwloc.m4, where you have to specify in
</span><br>
<span class="quotelev1">&gt; hwloc_components that you want to build a new plugin. You can probably
</span><br>
<span class="quotelev1">&gt; use the xml plugin as an example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>I found it in the meantime.  I needed an extra line in src/Makefile.am 
<br>
(I had already done the hwloc change)
<br>
<p>Currently it is hacked in beside linux for ease of development, but I
<br>
shall clean that up to have its own options when I have actually tried
<br>
developing the topology driver.
<br>
<p>Thanks for the help,
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
