<?
$subject_val = "Re: [OMPI devel] trunk - build failure on OpenBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:03:48 2014" -->
<!-- isoreceived="20140110150348" -->
<!-- sent="Fri, 10 Jan 2014 15:03:47 +0000" -->
<!-- isosent="20140110150347" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - build failure on OpenBSD" -->
<!-- id="2CAEBA31-0061-4579-B27F-67C44491B2A0_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA178=BJmTCfHxz4SbMHbYDvf8QPBi7kkLSTzHdL_y-WScg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 10:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like how we handled this issue elsewhere in the OMPI code base, too.
<br>
<p>Mellanox: in the interest of getting another good tarball today, since it's the weekend for you, I'll apply this patch.
<br>
<p>(thanks Paul!)
<br>
<p><p>On Jan 10, 2014, at 2:20 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Based on how MAP_ANONYMOUS vs MAP_ANON is dealt with in opal/mca/memory/linux/malloc.c,  I believe the patch below is an appropriate solution for this issue.  Additionally, it handles the possibility that MAP_FAILED is not defined (not sure where that comes up, but opal/mca/memory/linux/malloc.c allows for it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: oshmem/mca/memheap/base/memheap_base_alloc.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- oshmem/mca/memheap/base/memheap_base_alloc.c        (revision 30223)
</span><br>
<span class="quotelev1">&gt; +++ oshmem/mca/memheap/base/memheap_base_alloc.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -18,6 +18,12 @@
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_SYS_MMAN_H
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; +#if !defined(MAP_ANONYMOUS) &amp;&amp; defined(MAP_ANON)
</span><br>
<span class="quotelev1">&gt; +# define MAP_ANONYMOUS MAP_ANON
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +#if !defined(MAP_FAILED)
</span><br>
<span class="quotelev1">&gt; +# define MAP_FAILED ((char*)-1)
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/ipc.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/shm.h&gt;
</span><br>
<span class="quotelev1">&gt; @@ -278,10 +284,8 @@
</span><br>
<span class="quotelev1">&gt;                  size,
</span><br>
<span class="quotelev1">&gt;                  PROT_READ | PROT_WRITE,
</span><br>
<span class="quotelev1">&gt;                  MAP_SHARED |
</span><br>
<span class="quotelev1">&gt; -#if defined (__APPLE__)
</span><br>
<span class="quotelev1">&gt; -MAP_ANON |
</span><br>
<span class="quotelev1">&gt; -#elif defined (__GNUC__)
</span><br>
<span class="quotelev1">&gt; -MAP_ANONYMOUS |
</span><br>
<span class="quotelev1">&gt; +#ifdef MAP_ANONYMOUS
</span><br>
<span class="quotelev1">&gt; +                MAP_ANONYMOUS |
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;                  MAP_FIXED,
</span><br>
<span class="quotelev1">&gt;                  0,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 8:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Same issue for NetBSD, too.
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
<span class="quotelev1">&gt; With the new opal/util/path.c I get farther building the trunk on OpenBSD but hit a new failure:
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
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c: In function '_mmap_attach':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284: error: 'MAP_ANONYMOUS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/openmpi-1.9a1r30215/oshmem/mca/memheap/base/memheap_base_alloc.c:284: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; *** Error 1 in oshmem/mca/memheap (Makefile:1631 'base/memheap_base_alloc.lo': @echo &quot;  CC      &quot; base/memheap_base_alloc.lo;depbase=`echo b...)
</span><br>
<span class="quotelev1">&gt; *** Error 1 in oshmem (Makefile:1962 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-trunk-openbsd5-i386/BLD (Makefile:1685 'all-recursive')
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="13695.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13680.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Reply:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
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
