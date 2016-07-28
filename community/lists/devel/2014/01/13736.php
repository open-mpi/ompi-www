<?
$subject_val = "Re: [OMPI devel] trunk - build failure on OpenBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 22:21:54 2014" -->
<!-- isoreceived="20140111032154" -->
<!-- sent="Fri, 10 Jan 2014 19:21:52 -0800" -->
<!-- isosent="20140111032152" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - build failure on OpenBSD" -->
<!-- id="CAAvDA15PcBsQObJzHP90ewEiPE1jt9DXkUP169e4jaZSpQcS6w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2CAEBA31-0061-4579-B27F-67C44491B2A0_at_cisco.com" -->
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
<strong>Date:</strong> 2014-01-10 22:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13737.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13735.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appears to be fixed in tonight's trunk tarball (1.9a1r30255).
<br>
<p>Thanks,
<br>
-Paul
<br>
<p><p>On Fri, Jan 10, 2014 at 7:03 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; This looks like how we handled this issue elsewhere in the OMPI code base,
</span><br>
<span class="quotelev1">&gt; too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox: in the interest of getting another good tarball today, since
</span><br>
<span class="quotelev1">&gt; it's the weekend for you, I'll apply this patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (thanks Paul!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 2:20 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Based on how MAP_ANONYMOUS vs MAP_ANON is dealt with in
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/malloc.c,  I believe the patch below is an
</span><br>
<span class="quotelev1">&gt; appropriate solution for this issue.  Additionally, it handles the
</span><br>
<span class="quotelev1">&gt; possibility that MAP_FAILED is not defined (not sure where that comes up,
</span><br>
<span class="quotelev1">&gt; but opal/mca/memory/linux/malloc.c allows for it).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: oshmem/mca/memheap/base/memheap_base_alloc.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- oshmem/mca/memheap/base/memheap_base_alloc.c        (revision 30223)
</span><br>
<span class="quotelev2">&gt; &gt; +++ oshmem/mca/memheap/base/memheap_base_alloc.c        (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -18,6 +18,12 @@
</span><br>
<span class="quotelev2">&gt; &gt;  #ifdef HAVE_SYS_MMAN_H
</span><br>
<span class="quotelev2">&gt; &gt;  #include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(MAP_ANONYMOUS) &amp;&amp; defined(MAP_ANON)
</span><br>
<span class="quotelev2">&gt; &gt; +# define MAP_ANONYMOUS MAP_ANON
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +#if !defined(MAP_FAILED)
</span><br>
<span class="quotelev2">&gt; &gt; +# define MAP_FAILED ((char*)-1)
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #include &lt;sys/ipc.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #include &lt;sys/shm.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -278,10 +284,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;                  size,
</span><br>
<span class="quotelev2">&gt; &gt;                  PROT_READ | PROT_WRITE,
</span><br>
<span class="quotelev2">&gt; &gt;                  MAP_SHARED |
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined (__APPLE__)
</span><br>
<span class="quotelev2">&gt; &gt; -MAP_ANON |
</span><br>
<span class="quotelev2">&gt; &gt; -#elif defined (__GNUC__)
</span><br>
<span class="quotelev2">&gt; &gt; -MAP_ANONYMOUS |
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef MAP_ANONYMOUS
</span><br>
<span class="quotelev2">&gt; &gt; +                MAP_ANONYMOUS |
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt;                  MAP_FIXED,
</span><br>
<span class="quotelev2">&gt; &gt;                  0,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 9, 2014 at 8:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Same issue for NetBSD, too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 9, 2014 at 7:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With the new opal/util/path.c I get farther building the trunk on
</span><br>
<span class="quotelev1">&gt; OpenBSD but hit a new failure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mca/memheap
</span><br>
<span class="quotelev2">&gt; &gt;   CC       base/memheap_base_frame.lo
</span><br>
<span class="quotelev2">&gt; &gt;   CC       base/memheap_base_select.lo
</span><br>
<span class="quotelev2">&gt; &gt;   CC       base/memheap_base_alloc.lo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:
</span><br>
<span class="quotelev1">&gt; In function '_mmap_attach':
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev1">&gt; error: 'MAP_ANONYMOUS' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev1">&gt; error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284:
</span><br>
<span class="quotelev1">&gt; error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt; &gt; *** Error 1 in oshmem/mca/memheap (Makefile:1631
</span><br>
<span class="quotelev1">&gt; 'base/memheap_base_alloc.lo': @echo &quot;  CC      &quot;
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.lo;depbase=`echo b...)
</span><br>
<span class="quotelev2">&gt; &gt; *** Error 1 in oshmem (Makefile:1962 'all-recursive')
</span><br>
<span class="quotelev2">&gt; &gt; *** Error 1 in /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/BLD
</span><br>
<span class="quotelev1">&gt; (Makefile:1685 'all-recursive')
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On OpenBSD one must use MAP_ANON rather than MAP_ANONYMOUS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13737.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13735.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>In reply to:</strong> <a href="13694.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
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
