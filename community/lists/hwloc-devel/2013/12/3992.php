<?
$subject_val = "Re: [hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 16:43:38 2013" -->
<!-- isoreceived="20131226214338" -->
<!-- sent="Thu, 26 Dec 2013 22:43:35 +0100" -->
<!-- isosent="20131226214335" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="20131226214335.GU5398_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52BC9CE3.7060703_at_citrix.com" -->
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
<strong>Date:</strong> 2013-12-26 16:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3991.php">Andrew Cooper: "[hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Andrew Cooper: "[hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3994.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Andrew Cooper, le Thu 26 Dec 2013 22:17:38 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I believe can make a topology-xen.c without too much trouble.  It likely
</span><br>
<span class="quotelev1">&gt; wants to checked before an os-specific hook (Xen dom0's come in at least
</span><br>
<span class="quotelev1">&gt; Linux, FreeBSD, NetBSD flavours which have mainstream support)
</span><br>
<span class="quotelev1">&gt; Are there any hints/suggestion/information about how to go about
</span><br>
<span class="quotelev1">&gt; integrating this?
</span><br>
<p>Yes, you can probably play with plugin priorities for that.  See for
<br>
instance what happens with the pci plugins.
<br>
<p><span class="quotelev1">&gt; What is the policy with regards to linking against
</span><br>
<span class="quotelev1">&gt; new libraries by default (or perhaps by an --enable-xen configure
</span><br>
<span class="quotelev1">&gt; option)?
</span><br>
<p>By default we usually link against anything which is there, so linking
<br>
against libxenctrl is fine.
<br>
<p>IIRC hypercalls through libxenctrl are reserved to root?  We'd like to
<br>
let normal users be able to get the topology...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3991.php">Andrew Cooper: "[hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Andrew Cooper: "[hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3994.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
