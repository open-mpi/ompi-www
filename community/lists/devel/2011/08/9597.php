<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 12:52:14 2011" -->
<!-- isoreceived="20110803165214" -->
<!-- sent="Wed, 03 Aug 2011 12:51:56 -0400" -->
<!-- isosent="20110803165156" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="5C691E518F345F4882FAB9E9839E60BA0BCA4622F7_at_EXCHMB.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D0E429AF-C402-49E5-B84A-85AA2A0476ED_at_cisco.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 12:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9598.php">Barrett, Brian W: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9596.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9598.php">Barrett, Brian W: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9598.php">Barrett, Brian W: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Err.. I don't quite understand.  How exactly are you configuring?  If I do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/jsquyres/bogus --disable-mpi-f77 --disable-vt --
</span><br>
<span class="quotelev1">&gt; disable-io-romio --disable-mpi-cxx --disable-shared --enable-static --enable-
</span><br>
<span class="quotelev1">&gt; mpirun-prefix-by-default LDFLAGS=-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fail when linking opal_wrapper because of the ptmalloc shared memory
</span><br>
<span class="quotelev1">&gt; hooks that we're looking for:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(memory_linux_munmap.o): In function
</span><br>
<span class="quotelev1">&gt; `opal_memory_linux_free_ptmalloc2_munmap':
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/svn/ompi5/opal/mca/memory/linux/memory_linux_munm
</span><br>
<span class="quotelev1">&gt; ap.c:74: undefined reference to `__munmap'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the goal here -- to make libmpi.a (and friends) that have no external
</span><br>
<span class="quotelev1">&gt; dependencies?
</span><br>
<p>Not only. We also need orted and all the friends as static binaries.
<br>
<p>Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9598.php">Barrett, Brian W: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9596.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9598.php">Barrett, Brian W: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9598.php">Barrett, Brian W: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
