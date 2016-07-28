<?
$subject_val = "Re: [hwloc-devel] Use of &lt;malloc.h&gt;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 12:00:47 2014" -->
<!-- isoreceived="20140110170047" -->
<!-- sent="Fri, 10 Jan 2014 18:00:41 +0100" -->
<!-- isosent="20140110170041" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Use of &amp;lt;malloc.h&amp;gt;" -->
<!-- id="319d47f1-3527-4a0b-8a51-7361f4235154_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FDFEC62-4D9B-40FE-945D-6143B178A638_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Use of &lt;malloc.h&gt;<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 12:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4025.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Previous message:</strong> <a href="4023.php">Jeff Squyres (jsquyres): "[hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>In reply to:</strong> <a href="4023.php">Jeff Squyres (jsquyres): "[hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4025.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Reply:</strong> <a href="4025.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Push it to master, we'll what regression testing at <a href="https://ci.inria.fr/hwloc/job/master-1-check/">https://ci.inria.fr/hwloc/job/master-1-check/</a> thinks about it
<br>
Brice
<br>
<p><p><p>&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; a &#195;&#169;crit&#194;&#160;:
<br>
<span class="quotelev1">&gt;Brice / Samuel --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13619.php">http://www.open-mpi.org/community/lists/devel/2014/01/13619.php</a>,
</span><br>
<span class="quotelev1">&gt;Paul Hargrove found this compiler warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;On OpenBSD the header malloc.h exists, but is NOT intended to be used:
</span><br>
<span class="quotelev1">&gt;-bash-4.2$ grep -B2 'is obsolete' make.log 
</span><br>
<span class="quotelev1">&gt;  CC       bind.lo
</span><br>
<span class="quotelev1">&gt;In file included from
</span><br>
<span class="quotelev1">&gt;/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/opal/mca/hwloc/hwloc172/hwloc/src/bind.c:17:
</span><br>
<span class="quotelev1">&gt;/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete,
</span><br>
<span class="quotelev1">&gt;use &lt;stdlib.h&gt;&quot;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What do you think of this patch (or something like it)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;diff --git a/src/bind.c b/src/bind.c
</span><br>
<span class="quotelev1">&gt;index 046b7cf..37921bc 100644
</span><br>
<span class="quotelev1">&gt;--- a/src/bind.c
</span><br>
<span class="quotelev1">&gt;+++ b/src/bind.c
</span><br>
<span class="quotelev1">&gt;@@ -13,8 +13,9 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_SYS_MMAN_H
</span><br>
<span class="quotelev1">&gt; #  include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;-#ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev1">&gt;-#  include &lt;malloc.h&gt;
</span><br>
<span class="quotelev1">&gt;+/* &lt;malloc.h&gt; is only needed if we don't have posix_memalign() */
</span><br>
<span class="quotelev1">&gt;+#if defined(hwloc_getpagesize) &amp;&amp; !defined(HAVE_POSIX_MEMALIGN) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;defined(HAVE_MEMALIGN) &amp;&amp; defined(HAVE_MALLOC_H)
</span><br>
<span class="quotelev1">&gt;+#include &lt;malloc.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4025.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Previous message:</strong> <a href="4023.php">Jeff Squyres (jsquyres): "[hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>In reply to:</strong> <a href="4023.php">Jeff Squyres (jsquyres): "[hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4025.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Reply:</strong> <a href="4025.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
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
