<?
$subject_val = "[hwloc-devel] Fwd: [OMPI svn-full] svn:open-mpi r32675 - in	trunk/opal/mca/hwloc/hwloc191/hwloc: include/hwloc src";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 16:34:50 2014" -->
<!-- isoreceived="20140908203450" -->
<!-- sent="Mon, 8 Sep 2014 20:34:49 +0000" -->
<!-- isosent="20140908203449" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd: [OMPI svn-full] svn:open-mpi r32675 - in	trunk/opal/mca/hwloc/hwloc191/hwloc: include/hwloc src" -->
<!-- id="3685BC8B-12DE-40B9-8A9D-00FF3DD022A7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140907154205.90D0E160BE0_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd: [OMPI svn-full] svn:open-mpi r32675 - in	trunk/opal/mca/hwloc/hwloc191/hwloc: include/hwloc src<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-08 16:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4206.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-207-g038c372)"</a>
<li><strong>Previous message:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice --
<br>
<p>Did you see this?
<br>
<p>The issue is that ipmi.h has a #define for &quot;uint64&quot;.  :-(
<br>
<p>So this isn't hwloc's fault at all, but it's a change we had to make in OMPI so that ORCM can have a topology-aware IPMI module.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r32675 - in trunk/opal/mca/hwloc/hwloc191/hwloc: include/hwloc src
</span><br>
<span class="quotelev1">&gt; Date: September 7, 2014 at 11:42:05 AM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2014-09-07 11:42:05 EDT (Sun, 07 Sep 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32675
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32675">https://svn.open-mpi.org/trac/ompi/changeset/32675</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Rename an HWLOC member of a union in the diff.h file to avoid a naming conflict with an external library - it isn't that HWLOC did something wrong, but rather that the name being used is so close to a type name that other folks has a tendency to #define it as well. We could argue with those folks that what they are doing is incorrect, but it is just easier to make a slight change and resolve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/hwloc/hwloc191/hwloc/include/hwloc/diff.h |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/hwloc/hwloc191/hwloc/src/diff.c           |    12 ++++++------                            
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/hwloc/hwloc191/hwloc/src/topology-xml.c   |    10 +++++-----                              
</span><br>
<span class="quotelev1">&gt;   3 files changed, 12 insertions(+), 12 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/hwloc/hwloc191/hwloc/include/hwloc/diff.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/hwloc/hwloc191/hwloc/include/hwloc/diff.h	Sun Sep  7 11:14:57 2014	(r32674)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/hwloc/hwloc191/hwloc/include/hwloc/diff.h	2014-09-07 11:42:05 EDT (Sun, 07 Sep 2014)	(r32675)
</span><br>
<span class="quotelev1">&gt; @@ -91,7 +91,7 @@
</span><br>
<span class="quotelev1">&gt;     hwloc_uint64_t index; /* not used for SIZE */
</span><br>
<span class="quotelev1">&gt;     hwloc_uint64_t oldvalue;
</span><br>
<span class="quotelev1">&gt;     hwloc_uint64_t newvalue;
</span><br>
<span class="quotelev1">&gt; -  } uint64;
</span><br>
<span class="quotelev1">&gt; +  } ui64;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   /** \brief String attribute modification with an optional name */
</span><br>
<span class="quotelev1">&gt;   struct hwloc_topology_diff_obj_attr_string_s {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/hwloc/hwloc191/hwloc/src/diff.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/hwloc/hwloc191/hwloc/src/diff.c	Sun Sep  7 11:14:57 2014	(r32674)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/hwloc/hwloc191/hwloc/src/diff.c	2014-09-07 11:42:05 EDT (Sun, 07 Sep 2014)	(r32675)
</span><br>
<span class="quotelev1">&gt; @@ -117,10 +117,10 @@
</span><br>
<span class="quotelev1">&gt; 	newdiff-&gt;obj_attr.type = HWLOC_TOPOLOGY_DIFF_OBJ_ATTR;
</span><br>
<span class="quotelev1">&gt; 	newdiff-&gt;obj_attr.obj_depth = obj-&gt;depth;
</span><br>
<span class="quotelev1">&gt; 	newdiff-&gt;obj_attr.obj_index = obj-&gt;logical_index;
</span><br>
<span class="quotelev1">&gt; -	newdiff-&gt;obj_attr.diff.uint64.type = type;
</span><br>
<span class="quotelev1">&gt; -	newdiff-&gt;obj_attr.diff.uint64.index = index;
</span><br>
<span class="quotelev1">&gt; -	newdiff-&gt;obj_attr.diff.uint64.oldvalue = oldvalue;
</span><br>
<span class="quotelev1">&gt; -	newdiff-&gt;obj_attr.diff.uint64.newvalue = newvalue;
</span><br>
<span class="quotelev1">&gt; +	newdiff-&gt;obj_attr.diff.ui64.type = type;
</span><br>
<span class="quotelev1">&gt; +	newdiff-&gt;obj_attr.diff.ui64.index = index;
</span><br>
<span class="quotelev1">&gt; +	newdiff-&gt;obj_attr.diff.ui64.oldvalue = oldvalue;
</span><br>
<span class="quotelev1">&gt; +	newdiff-&gt;obj_attr.diff.ui64.newvalue = newvalue;
</span><br>
<span class="quotelev1">&gt; 	hwloc_append_diff(newdiff, firstdiffp, lastdiffp);
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -316,8 +316,8 @@
</span><br>
<span class="quotelev1">&gt; 		switch (obj_attr-&gt;diff.generic.type) {
</span><br>
<span class="quotelev1">&gt; 		case HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_SIZE: {
</span><br>
<span class="quotelev1">&gt; 			hwloc_obj_t tmpobj;
</span><br>
<span class="quotelev1">&gt; -			hwloc_uint64_t oldvalue = reverse ? obj_attr-&gt;diff.uint64.newvalue : obj_attr-&gt;diff.uint64.oldvalue;
</span><br>
<span class="quotelev1">&gt; -			hwloc_uint64_t newvalue = reverse ? obj_attr-&gt;diff.uint64.oldvalue : obj_attr-&gt;diff.uint64.newvalue;
</span><br>
<span class="quotelev1">&gt; +			hwloc_uint64_t oldvalue = reverse ? obj_attr-&gt;diff.ui64.newvalue : obj_attr-&gt;diff.ui64.oldvalue;
</span><br>
<span class="quotelev1">&gt; +			hwloc_uint64_t newvalue = reverse ? obj_attr-&gt;diff.ui64.oldvalue : obj_attr-&gt;diff.ui64.newvalue;
</span><br>
<span class="quotelev1">&gt; 			hwloc_uint64_t valuediff = newvalue - oldvalue;
</span><br>
<span class="quotelev1">&gt; 			if (obj-&gt;memory.local_memory != oldvalue)
</span><br>
<span class="quotelev1">&gt; 				return -1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/hwloc/hwloc191/hwloc/src/topology-xml.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/hwloc/hwloc191/hwloc/src/topology-xml.c	Sun Sep  7 11:14:57 2014	(r32674)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/hwloc/hwloc191/hwloc/src/topology-xml.c	2014-09-07 11:42:05 EDT (Sun, 07 Sep 2014)	(r32675)
</span><br>
<span class="quotelev1">&gt; @@ -683,8 +683,8 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       switch (atoi(obj_attr_type_s)) {
</span><br>
<span class="quotelev1">&gt;       case HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_SIZE:
</span><br>
<span class="quotelev1">&gt; -	diff-&gt;obj_attr.diff.uint64.oldvalue = strtoull(obj_attr_oldvalue_s, NULL, 0);
</span><br>
<span class="quotelev1">&gt; -	diff-&gt;obj_attr.diff.uint64.newvalue = strtoull(obj_attr_newvalue_s, NULL, 0);
</span><br>
<span class="quotelev1">&gt; +	diff-&gt;obj_attr.diff.ui64.oldvalue = strtoull(obj_attr_oldvalue_s, NULL, 0);
</span><br>
<span class="quotelev1">&gt; +	diff-&gt;obj_attr.diff.ui64.newvalue = strtoull(obj_attr_newvalue_s, NULL, 0);
</span><br>
<span class="quotelev1">&gt; 	break;
</span><br>
<span class="quotelev1">&gt;       case HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_INFO:
</span><br>
<span class="quotelev1">&gt; 	diff-&gt;obj_attr.diff.string.name = strdup(obj_attr_name_s);
</span><br>
<span class="quotelev1">&gt; @@ -1154,11 +1154,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       switch (diff-&gt;obj_attr.diff.generic.type) {
</span><br>
<span class="quotelev1">&gt;       case HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_SIZE:
</span><br>
<span class="quotelev1">&gt; -	sprintf(tmp, &quot;%llu&quot;, (unsigned long long) diff-&gt;obj_attr.diff.uint64.index);
</span><br>
<span class="quotelev1">&gt; +	sprintf(tmp, &quot;%llu&quot;, (unsigned long long) diff-&gt;obj_attr.diff.ui64.index);
</span><br>
<span class="quotelev1">&gt; 	state.new_prop(&amp;state, &quot;obj_attr_index&quot;, tmp);
</span><br>
<span class="quotelev1">&gt; -	sprintf(tmp, &quot;%llu&quot;, (unsigned long long) diff-&gt;obj_attr.diff.uint64.oldvalue);
</span><br>
<span class="quotelev1">&gt; +	sprintf(tmp, &quot;%llu&quot;, (unsigned long long) diff-&gt;obj_attr.diff.ui64.oldvalue);
</span><br>
<span class="quotelev1">&gt; 	state.new_prop(&amp;state, &quot;obj_attr_oldvalue&quot;, tmp);
</span><br>
<span class="quotelev1">&gt; -	sprintf(tmp, &quot;%llu&quot;, (unsigned long long) diff-&gt;obj_attr.diff.uint64.newvalue);
</span><br>
<span class="quotelev1">&gt; +	sprintf(tmp, &quot;%llu&quot;, (unsigned long long) diff-&gt;obj_attr.diff.ui64.newvalue);
</span><br>
<span class="quotelev1">&gt; 	state.new_prop(&amp;state, &quot;obj_attr_newvalue&quot;, tmp);
</span><br>
<span class="quotelev1">&gt; 	break;
</span><br>
<span class="quotelev1">&gt;       case HWLOC_TOPOLOGY_DIFF_OBJ_ATTR_NAME:
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4206.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-207-g038c372)"</a>
<li><strong>Previous message:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
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
