<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 12:59:34 2011" -->
<!-- isoreceived="20110803165934" -->
<!-- sent="Wed, 3 Aug 2011 16:59:03 +0000" -->
<!-- isosent="20110803165903" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="CA5EDA40.695F%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C691E518F345F4882FAB9E9839E60BA0BCA4622F7_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 12:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9599.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9600.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9600.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/3/11 10:51 AM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Err.. I don't quite understand.  How exactly are you configuring?  If I
</span><br>
<span class="quotelev2">&gt;&gt;do this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/jsquyres/bogus --disable-mpi-f77
</span><br>
<span class="quotelev2">&gt;&gt;--disable-vt --
</span><br>
<span class="quotelev2">&gt;&gt; disable-io-romio --disable-mpi-cxx --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;--enable-
</span><br>
<span class="quotelev2">&gt;&gt; mpirun-prefix-by-default LDFLAGS=-static
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I fail when linking opal_wrapper because of the ptmalloc shared memory
</span><br>
<span class="quotelev2">&gt;&gt; hooks that we're looking for:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.a(memory_linux_munmap.o): In function
</span><br>
<span class="quotelev2">&gt;&gt; `opal_memory_linux_free_ptmalloc2_munmap':
</span><br>
<span class="quotelev2">&gt;&gt; /users/jsquyres/svn/ompi5/opal/mca/memory/linux/memory_linux_munm
</span><br>
<span class="quotelev2">&gt;&gt; ap.c:74: undefined reference to `__munmap'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the goal here -- to make libmpi.a (and friends) that have no
</span><br>
<span class="quotelev2">&gt;&gt;external
</span><br>
<span class="quotelev2">&gt;&gt; dependencies?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Not only. We also need orted and all the friends as static binaries.
</span><br>
<p>On linux, you can not use both the memory manager hooks and -static.  Add
<br>
--disable-memory-manager or remove -static and all will be well.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9599.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9600.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9600.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
