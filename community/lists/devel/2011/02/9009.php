<?
$subject_val = "[OMPI devel] libnuma Libnuma LIBNUMA!!!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 08:22:32 2011" -->
<!-- isoreceived="20110223132232" -->
<!-- sent="Wed, 23 Feb 2011 08:22:27 -0500" -->
<!-- isosent="20110223132227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] libnuma Libnuma LIBNUMA!!!" -->
<!-- id="22C1F6C5-06A3-4B68-8283-DC1940945183_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201102231259.p1NCxoWe018474_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] libnuma Libnuma LIBNUMA!!!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 08:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9010.php">Jeff Squyres: "[OMPI devel] Open MPI HG mirror"</a>
<li><strong>Previous message:</strong> <a href="9008.php">Tony Lam: "[OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may fix the issue for newer versions of libnuma (2.0.x), but it breaks it for older versions (0.9.x -- which is what is shipped in RHEL4 and 5).  I'm thinking we're going to need a configure test for this.  Sigh.
<br>
<p>#$%#@% libnuma!!!  :-(
<br>
<p><p><p>On Feb 23, 2011, at 7:59 AM, rusraink_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2011-02-23 07:59:49 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24442
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24442">https://svn.open-mpi.org/trac/ompi/changeset/24442</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - Addendum to r24421: get mca_maffinity_libnuma to compile on linux
</span><br>
<span class="quotelev1">&gt;   (with libnuma-2.0.4 / LIBNUMA_API_VERSION 2): numa_get_run_node_mask
</span><br>
<span class="quotelev1">&gt;   returns a struct bitmask *.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Whether it's a good idea to blindly pass that on to
</span><br>
<span class="quotelev1">&gt;   numa_set_membind() is another matter: one might want to match against
</span><br>
<span class="quotelev1">&gt;   the list returned by numa_get_mems_allowed(), which may be set by the
</span><br>
<span class="quotelev1">&gt;   outside environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Refs #2698.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c	2011-02-23 07:59:49 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -69,7 +69,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int libnuma_module_init(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    nodemask_t mask;
</span><br>
<span class="quotelev1">&gt; +    struct bitmask * mask;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* If we have a strict policy set, then bind all memory to this
</span><br>
<span class="quotelev1">&gt;        numa node.  Note that maffinity won't be invoked unless the
</span><br>
<span class="quotelev1">&gt; @@ -78,7 +78,7 @@
</span><br>
<span class="quotelev1">&gt;        numa_get_run_node_mask(). */
</span><br>
<span class="quotelev1">&gt;     if (MPOL_BIND == mca_maffinity_libnuma_component.libnuma_policy) {
</span><br>
<span class="quotelev1">&gt;         mask = numa_get_run_node_mask();
</span><br>
<span class="quotelev1">&gt; -        numa_set_membind(&amp;mask);
</span><br>
<span class="quotelev1">&gt; +        numa_set_membind(mask);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* We want libnuma to fail to alloc if it can't allocate on the
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9010.php">Jeff Squyres: "[OMPI devel] Open MPI HG mirror"</a>
<li><strong>Previous message:</strong> <a href="9008.php">Tony Lam: "[OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
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
