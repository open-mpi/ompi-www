<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 04:34:56 2010" -->
<!-- isoreceived="20100717083456" -->
<!-- sent="Sat, 17 Jul 2010 10:32:27 +0200" -->
<!-- isosent="20100717083227" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336" -->
<!-- id="4C416A9B.50507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007170826.o6H8QmIG026835_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 04:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1185.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Previous message:</strong> <a href="1183.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2333)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1187.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<li><strong>Reply:</strong> <a href="1187.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It also seems to me that XML checks should move from HWLOC_SETUP_UTILS
<br>
to HWLOC_SETUP_CORE. XML is used inside the core library and some people
<br>
might use it even when embedded. For instance the MPI launcher could
<br>
discover node topologies, do stuff with them, store them inside XML
<br>
files, and let the MPI processes read them later when needed.
<br>
<p>Jeff, do you get XML support when building hwloc inside OMPI?
<br>
<p>Brice
<br>
<p><p><p><p>Le 17/07/2010 10:26, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-07-17 04:26:47 EDT (Sat, 17 Jul 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2336
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2336">https://svn.open-mpi.org/trac/hwloc/changeset/2336</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; numa_bitmask_alloc is only needed in tests, move the relevant configure stuff in HWLOC_SETUP_TESTS
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/config/hwloc.m4          |     3 ---                                     
</span><br>
<span class="quotelev1">&gt;    trunk/config/hwloc_internal.m4 |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;    2 files changed, 4 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc.m4	2010-07-17 04:26:47 EDT (Sat, 17 Jul 2010)
</span><br>
<span class="quotelev1">&gt; @@ -523,9 +523,6 @@
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_FUNCS([openat], [hwloc_have_openat=yes])
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; -    AC_CHECK_DECL([numa_bitmask_alloc], [hwloc_have_linux_libnuma=yes], [],
</span><br>
<span class="quotelev1">&gt; -    	      [#include &lt;numa.h&gt;])
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADERS([pthread_np.h])
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_DECLS([pthread_setaffinity_np],,[:],[[
</span><br>
<span class="quotelev1">&gt;        #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc_internal.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc_internal.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc_internal.m4	2010-07-17 04:26:47 EDT (Sat, 17 Jul 2010)
</span><br>
<span class="quotelev1">&gt; @@ -253,6 +253,10 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      hwloc_build_tests=yes
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    # linux-libnuma.h testing requires libnuma with numa_bitmask_alloc()
</span><br>
<span class="quotelev1">&gt; +    AC_CHECK_DECL([numa_bitmask_alloc], [hwloc_have_linux_libnuma=yes], [],
</span><br>
<span class="quotelev1">&gt; +    	      [#include &lt;numa.h&gt;])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # Only generate these files if we're making the tests
</span><br>
<span class="quotelev1">&gt;      AC_CONFIG_FILES(
</span><br>
<span class="quotelev1">&gt;          hwloc_config_prefix[tests/Makefile ]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1185.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Previous message:</strong> <a href="1183.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2333)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1187.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<li><strong>Reply:</strong> <a href="1187.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
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
