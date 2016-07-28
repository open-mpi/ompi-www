<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 10:39:34 2013" -->
<!-- isoreceived="20130209153934" -->
<!-- sent="Sat, 09 Feb 2013 16:39:27 +0100" -->
<!-- isosent="20130209153927" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="51166DAF.5000106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CCFF6C_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 10:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3532.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>Previous message:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3526.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3525.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/02/2013 15:50, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 8, 2013, at 6:08 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, do you want to put a patch into OMPI 1.7rc7 in the very near
</span><br>
<span class="quotelev2">&gt;&gt; future? I mean even before we do a v1.6.2? I still want some testing
</span><br>
<span class="quotelev2">&gt;&gt; before we put that into a hwloc release. And with at least one week
</span><br>
<span class="quotelev2">&gt;&gt; between rc1 and final, it'll take some time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OMPI v1.7, we're using hwloc 1.5.1 (plus a few post-1.5.1 patches, IIRC).  I've been staying about 1 generation behind the hwloc current series so that hwloc bugs get shaken out, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we have a patch for hwloc 1.5.x?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Here's a patch.
<br>
<p>To answer you other email: There's no warning anymore once libpci is
<br>
enabled. Only a warning when no PCI because we don't enable libpci by
<br>
default. The GPL issue is documented in the doxyfile and in configure
<br>
--help. If the user passes --enable-libpci without ever looking at what
<br>
it means, that's his fault.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3531/libpciaccess15.patch">libpciaccess15.patch</a>
</ul>
<!-- attachment="libpciaccess15.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3532.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>Previous message:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3526.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3525.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
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
