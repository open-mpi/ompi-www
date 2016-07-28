<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 10:47:17 2011" -->
<!-- isoreceived="20110803144717" -->
<!-- sent="Wed, 3 Aug 2011 10:47:08 -0400" -->
<!-- isosent="20110803144708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="D0E429AF-C402-49E5-B84A-85AA2A0476ED_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E395B3C.7090701_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 10:47:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9592.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah!  Brice's email crossed mine in the ether...
<br>
<p><p>On Aug 3, 2011, at 10:29 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I finally reproduced here. Based on the ornl platform script, you're
</span><br>
<span class="quotelev1">&gt; configuring with LDFLAGS=-static and then building with make
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-all-static. Surprisingly, this works fine when building vanilla
</span><br>
<span class="quotelev1">&gt; hwloc, but it breaks inside OMPI. The reason is that OMPI doesn't pass
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-static to hwloc's checks. Inside the vanilla hwloc, the libnuma
</span><br>
<span class="quotelev1">&gt; related checks properly use the static libnuma:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:9786: checking for set_mempolicy in -lnuma
</span><br>
<span class="quotelev1">&gt; configure:9811: gcc -o conftest   -static conftest.c -lnuma  -lpthread &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lnuma
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Inside OMPI, there's no -static so it uses libnuma.so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:65582: checking for set_mempolicy in -lnuma
</span><br>
<span class="quotelev1">&gt; configure:65607: gcc -o conftest -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread     conftest.c -lnuma  -lnsl  -lutil -lm  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:65607: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:65616: result: yes
</span><br>
<p>Err.. I don't quite understand.  How exactly are you configuring?  If I do this:
<br>
<p>./configure --prefix=/home/jsquyres/bogus --disable-mpi-f77 --disable-vt --disable-io-romio --disable-mpi-cxx --disable-shared --enable-static --enable-mpirun-prefix-by-default LDFLAGS=-static
<br>
<p>I fail when linking opal_wrapper because of the ptmalloc shared memory hooks that we're looking for:
<br>
<p>&nbsp;&nbsp;CCLD   opal_wrapper
<br>
../../../opal/.libs/libopen-pal.a(memory_linux_munmap.o): In function `opal_memory_linux_free_ptmalloc2_munmap':
<br>
/users/jsquyres/svn/ompi5/opal/mca/memory/linux/memory_linux_munmap.c:74: undefined reference to `__munmap'
<br>
<p>What is the goal here -- to make libmpi.a (and friends) that have no external dependencies?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9592.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9597.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
