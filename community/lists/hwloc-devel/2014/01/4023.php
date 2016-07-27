<?
$subject_val = "[hwloc-devel] Use of &lt;malloc.h&gt;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 11:34:59 2014" -->
<!-- isoreceived="20140110163459" -->
<!-- sent="Fri, 10 Jan 2014 16:34:57 +0000" -->
<!-- isosent="20140110163457" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Use of &amp;lt;malloc.h&amp;gt;" -->
<!-- id="4FDFEC62-4D9B-40FE-945D-6143B178A638_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Use of &lt;malloc.h&gt;<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 11:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4024.php">Brice Goglin: "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Previous message:</strong> <a href="4022.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-33-g089185d)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4024.php">Brice Goglin: "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Reply:</strong> <a href="4024.php">Brice Goglin: "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice / Samuel --
<br>
<p>In <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13619.php">http://www.open-mpi.org/community/lists/devel/2014/01/13619.php</a>, Paul Hargrove found this compiler warning:
<br>
<p>-----
<br>
On OpenBSD the header malloc.h exists, but is NOT intended to be used:
<br>
-bash-4.2$ grep -B2 'is obsolete' make.log 
<br>
&nbsp;&nbsp;CC       bind.lo
<br>
In file included from /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/openmpi-1.7.4rc2r30168/opal/mca/hwloc/hwloc172/hwloc/src/bind.c:17:
<br>
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, use &lt;stdlib.h&gt;&quot;
<br>
-----
<br>
<p>What do you think of this patch (or something like it)?
<br>
<p>diff --git a/src/bind.c b/src/bind.c
<br>
index 046b7cf..37921bc 100644
<br>
--- a/src/bind.c
<br>
+++ b/src/bind.c
<br>
@@ -13,8 +13,9 @@
<br>
&nbsp;#ifdef HAVE_SYS_MMAN_H
<br>
&nbsp;#  include &lt;sys/mman.h&gt;
<br>
&nbsp;#endif
<br>
-#ifdef HAVE_MALLOC_H
<br>
-#  include &lt;malloc.h&gt;
<br>
+/* &lt;malloc.h&gt; is only needed if we don't have posix_memalign() */
<br>
+#if defined(hwloc_getpagesize) &amp;&amp; !defined(HAVE_POSIX_MEMALIGN) &amp;&amp; defined(HAVE_MEMALIGN) &amp;&amp; defined(HAVE_MALLOC_H)
<br>
+#include &lt;malloc.h&gt;
<br>
&nbsp;#endif
<br>
&nbsp;#ifdef HAVE_UNISTD_H
<br>
&nbsp;#include &lt;unistd.h&gt;
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4024.php">Brice Goglin: "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Previous message:</strong> <a href="4022.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-33-g089185d)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4024.php">Brice Goglin: "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
<li><strong>Reply:</strong> <a href="4024.php">Brice Goglin: "Re: [hwloc-devel] Use of &lt;malloc.h&gt;"</a>
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
