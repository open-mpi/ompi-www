<?
$subject_val = "Re: [OMPI devel] trunk - build failure on OpenBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 23:35:30 2014" -->
<!-- isoreceived="20140110043530" -->
<!-- sent="Thu, 9 Jan 2014 20:35:28 -0800" -->
<!-- isosent="20140110043528" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - build failure on OpenBSD" -->
<!-- id="CAAvDA14fvBGC0yqPxhyVV7Z=9juqDDXdB_8p+VNPaMr5nMS78g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17rks5PNMK9zfW3HVBd9x+V=KbFx7B62hs=gJDUc1zowA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-09 23:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13667.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13664.php">Paul Hargrove: "[OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Same issue for NetBSD, too.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 7:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With the new opal/util/path.c I get farther building the trunk on OpenBSD
</span><br>
<span class="quotelev1">&gt; but hit a new failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/memheap
</span><br>
<span class="quotelev1">&gt;   CC       base/memheap_base_frame.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/memheap_base_select.lo
</span><br>
<span class="quotelev1">&gt;   CC       base/memheap_base_alloc.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:
</span><br>
<span class="quotelev1">&gt; In function '_mmap_attach':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev1">&gt; error: 'MAP_ANONYMOUS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev1">&gt; error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev1">&gt; error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; *** Error 1 in oshmem/mca/memheap (Makefile:1631
</span><br>
<span class="quotelev1">&gt; 'base/memheap_base_alloc.lo': @echo &quot;  CC      &quot;
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.lo;depbase=`echo b...)
</span><br>
<span class="quotelev1">&gt; *** Error 1 in oshmem (Makefile:1962 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/BLD
</span><br>
<span class="quotelev1">&gt; (Makefile:1685 'all-recursive')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On OpenBSD one must use MAP_ANON rather than MAP_ANONYMOUS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13668/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13669.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13667.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13664.php">Paul Hargrove: "[OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
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
