<?
$subject_val = "Re: [OMPI devel] trunk - build failure on OpenBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 02:20:08 2014" -->
<!-- isoreceived="20140110072008" -->
<!-- sent="Thu, 9 Jan 2014 23:20:06 -0800" -->
<!-- isosent="20140110072006" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - build failure on OpenBSD" -->
<!-- id="CAAvDA178=BJmTCfHxz4SbMHbYDvf8QPBi7kkLSTzHdL_y-WScg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14fvBGC0yqPxhyVV7Z=9juqDDXdB_8p+VNPaMr5nMS78g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk - build failure on OpenBSD<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 02:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13681.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13679.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13668.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on how MAP_ANONYMOUS vs MAP_ANON is dealt with
<br>
in opal/mca/memory/linux/malloc.c,  I believe the patch below is an
<br>
appropriate solution for this issue.  Additionally, it handles the
<br>
possibility that MAP_FAILED is not defined (not sure where that comes up,
<br>
but opal/mca/memory/linux/malloc.c allows for it).
<br>
<p>-Paul
<br>
<p>Index: oshmem/mca/memheap/base/memheap_base_alloc.c
<br>
===================================================================
<br>
--- oshmem/mca/memheap/base/memheap_base_alloc.c        (revision 30223)
<br>
+++ oshmem/mca/memheap/base/memheap_base_alloc.c        (working copy)
<br>
@@ -18,6 +18,12 @@
<br>
&nbsp;#ifdef HAVE_SYS_MMAN_H
<br>
&nbsp;#include &lt;sys/mman.h&gt;
<br>
&nbsp;#endif
<br>
+#if !defined(MAP_ANONYMOUS) &amp;&amp; defined(MAP_ANON)
<br>
+# define MAP_ANONYMOUS MAP_ANON
<br>
+#endif
<br>
+#if !defined(MAP_FAILED)
<br>
+# define MAP_FAILED ((char*)-1)
<br>
+#endif
<br>
<p>&nbsp;#include &lt;sys/ipc.h&gt;
<br>
&nbsp;#include &lt;sys/shm.h&gt;
<br>
@@ -278,10 +284,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROT_READ | PROT_WRITE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAP_SHARED |
<br>
-#if defined (__APPLE__)
<br>
-MAP_ANON |
<br>
-#elif defined (__GNUC__)
<br>
-MAP_ANONYMOUS |
<br>
+#ifdef MAP_ANONYMOUS
<br>
+                MAP_ANONYMOUS |
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAP_FIXED,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,
<br>
<p><p><p><p>On Thu, Jan 9, 2014 at 8:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Same issue for NetBSD, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 7:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the new opal/util/path.c I get farther building the trunk on OpenBSD
</span><br>
<span class="quotelev2">&gt;&gt; but hit a new failure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/memheap
</span><br>
<span class="quotelev2">&gt;&gt;   CC       base/memheap_base_frame.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       base/memheap_base_select.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       base/memheap_base_alloc.lo
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function '_mmap_attach':
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev2">&gt;&gt; error: 'MAP_ANONYMOUS' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev2">&gt;&gt; error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev2">&gt;&gt; error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; *** Error 1 in oshmem/mca/memheap (Makefile:1631
</span><br>
<span class="quotelev2">&gt;&gt; 'base/memheap_base_alloc.lo': @echo &quot;  CC      &quot;
</span><br>
<span class="quotelev2">&gt;&gt; base/memheap_base_alloc.lo;depbase=`echo b...)
</span><br>
<span class="quotelev2">&gt;&gt; *** Error 1 in oshmem (Makefile:1962 'all-recursive')
</span><br>
<span class="quotelev2">&gt;&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/BLD
</span><br>
<span class="quotelev2">&gt;&gt; (Makefile:1685 'all-recursive')
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On OpenBSD one must use MAP_ANON rather than MAP_ANONYMOUS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13681.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13679.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13668.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
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
