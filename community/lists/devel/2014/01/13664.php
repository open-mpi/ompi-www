<?
$subject_val = "[OMPI devel] trunk - build failure on OpenBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 22:09:43 2014" -->
<!-- isoreceived="20140110030943" -->
<!-- sent="Thu, 9 Jan 2014 19:09:42 -0800" -->
<!-- isosent="20140110030942" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk - build failure on OpenBSD" -->
<!-- id="CAAvDA17rks5PNMK9zfW3HVBd9x+V=KbFx7B62hs=gJDUc1zowA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk - build failure on OpenBSD<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 22:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13665.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13668.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13668.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the new opal/util/path.c I get farther building the trunk on OpenBSD
<br>
but hit a new failure:
<br>
<p>Making all in mca/memheap
<br>
&nbsp;&nbsp;CC       base/memheap_base_frame.lo
<br>
&nbsp;&nbsp;CC       base/memheap_base_select.lo
<br>
&nbsp;&nbsp;CC       base/memheap_base_alloc.lo
<br>
/home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:
<br>
In function '_mmap_attach':
<br>
/home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
<br>
error: 'MAP_ANONYMOUS' undeclared (first use in this function)
<br>
/home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
<br>
error: (Each undeclared identifier is reported only once
<br>
/home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
<br>
error: for each function it appears in.)
<br>
*** Error 1 in oshmem/mca/memheap (Makefile:1631
<br>
'base/memheap_base_alloc.lo': @echo &quot;  CC      &quot;
<br>
base/memheap_base_alloc.lo;depbase=`echo b...)
<br>
*** Error 1 in oshmem (Makefile:1962 'all-recursive')
<br>
*** Error 1 in /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/BLD
<br>
(Makefile:1685 'all-recursive')
<br>
<p>On OpenBSD one must use MAP_ANON rather than MAP_ANONYMOUS.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13664/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13665.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13668.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13668.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
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
