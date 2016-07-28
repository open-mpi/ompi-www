<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3586";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 15:30:02 2011" -->
<!-- isoreceived="20110804193002" -->
<!-- sent="Thu, 4 Aug 2011 15:29:57 -0400" -->
<!-- isosent="20110804192957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3586" -->
<!-- id="BEACE8BC-E77B-48F8-B4F6-4C5F25FD87EF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108041901.p74J10oZ024427_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3586<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 15:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2277.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3586)"</a>
<li><strong>Previous message:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice --
<br>
<p>Will you bring this to the v1.2 branch, too?
<br>
<p><p>On Aug 4, 2011, at 3:01 PM, bgoglin_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-04 15:01:00 EDT (Thu, 04 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3586
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3586">https://svn.open-mpi.org/trac/hwloc/changeset/3586</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix build on Solaris 2.8 by using atof+index instead of strtof.
</span><br>
<span class="quotelev1">&gt; Thanks to Andreas Kupries for providing a patch, simplified by me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/src/distances.c |     8 +++++---                                
</span><br>
<span class="quotelev1">&gt;   1 files changed, 5 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/distances.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/distances.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/distances.c	2011-08-04 15:01:00 EDT (Thu, 04 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -180,9 +180,11 @@
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;     /* parse a comma separated list of distances */
</span><br>
<span class="quotelev1">&gt;     for(i=0; i&lt;nbobjs*nbobjs; i++) {
</span><br>
<span class="quotelev1">&gt; -      distances[i] = strtof(tmp, &amp;next);
</span><br>
<span class="quotelev1">&gt; -      tmp = next+1;
</span><br>
<span class="quotelev1">&gt; -      if (!*next &amp;&amp; i!=nbobjs*nbobjs-1) {
</span><br>
<span class="quotelev1">&gt; +      distances[i] = atof(tmp);
</span><br>
<span class="quotelev1">&gt; +      next = index(tmp, ',');
</span><br>
<span class="quotelev1">&gt; +      if (next) {
</span><br>
<span class="quotelev1">&gt; +        tmp = next+1;
</span><br>
<span class="quotelev1">&gt; +      } else if (i!=nbobjs*nbobjs-1) {
</span><br>
<span class="quotelev1">&gt; 	fprintf(stderr, &quot;Ignoring %s distances from environment variable, not enough values (%u out of %u)\n&quot;,
</span><br>
<span class="quotelev1">&gt; 		hwloc_obj_type_string(type), i+1, nbobjs*nbobjs);
</span><br>
<span class="quotelev1">&gt; 	free(indexes);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="2277.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3586)"</a>
<li><strong>Previous message:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
