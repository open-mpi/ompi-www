<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 16:33:37 2012" -->
<!-- isoreceived="20120911203337" -->
<!-- sent="Tue, 11 Sep 2012 16:33:35 -0400" -->
<!-- isosent="20120911203335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src" -->
<!-- id="BB61ADE2-C073-4AB6-818D-84B3B9BF8044_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="504F96E7.40907_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 16:33:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3279.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4824)"</a>
<li><strong>Previous message:</strong> <a href="3277.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool.  :-)
<br>
<p>On Sep 11, 2012, at 3:54 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Looks like git-svn can now merge svn branches properly (without losing
</span><br>
<span class="quotelev1">&gt; mergeinfo).
</span><br>
<span class="quotelev1">&gt; You set svn.pushmergeinfo=true is your .git/config and things just work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand the doc correctly, two things to check before using this:
</span><br>
<span class="quotelev1">&gt; * dcommit all local changes (in all involved branches) before merging
</span><br>
<span class="quotelev1">&gt; * both branches need new commits since the last merge to make this work
</span><br>
<span class="quotelev1">&gt; (don't want a fast-forward)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume that this won't work for backports with git cherry-pick (we'd
</span><br>
<span class="quotelev1">&gt; have to pass --mergeinfo=... to git svn dcommit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 11/09/2012 13:29, svn-commit-mailer_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin (Brice Goglin)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-09-11 07:29:01 EDT (Tue, 11 Sep 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 4825
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4825">https://svn.open-mpi.org/trac/hwloc/changeset/4825</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Merge trunk up to r4824 into components branch
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is an attempt to svn merge with git merge and svn.pushmergeinfo=true
</span><br>
<span class="quotelev2">&gt;&gt; Let's see if mergeinfos are correctly updated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Properties modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   branches/components/   (props changed)
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   branches/components/doc/Makefile.am |     8 +++++++-                                
</span><br>
<span class="quotelev2">&gt;&gt;   branches/components/src/topology.c  |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;   2 files changed, 8 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/components/doc/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/components/doc/Makefile.am	Tue Sep 11 07:22:08 2012	(r4824)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/components/doc/Makefile.am	2012-09-11 07:29:01 EDT (Tue, 11 Sep 2012)	(r4825)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -227,6 +227,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; # in _DATA suffix names, because AM won't allow us to do things like
</span><br>
<span class="quotelev2">&gt;&gt; # man3_extra_MANS = ...group...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +# When adding a new _DATA line below, remember to add it to the
</span><br>
<span class="quotelev2">&gt;&gt; +# list of dependencies too.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; man3_MANS = \
</span><br>
<span class="quotelev2">&gt;&gt;         $(DOX_MAN_DIR)/man3/hwlocality_api_version.3 \
</span><br>
<span class="quotelev2">&gt;&gt;         $(DOX_MAN_DIR)/man3/HWLOC_API_VERSION.3 \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -667,6 +670,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; # *first* before we can try to process/install man pages, the HTML,
</span><br>
<span class="quotelev2">&gt;&gt; # run pdflatex, .etc.).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +# The list below should match the list of _DATA lines above
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_MANS): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_topology_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_sets_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -674,6 +679,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_objects_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_creation_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_configuration_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; +$(man3_xmlexport_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_tinker_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_information_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_traversal_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -685,8 +691,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_types_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_traversal_basic_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_find_inside_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; -$(man3_helper_find_coverings_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_find_covering_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; +$(man3_helper_find_coverings_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_find_cache_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_traversal_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; $(man3_helper_binding_DATA): $(DOX_TAG)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/components/src/topology.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/components/src/topology.c	Tue Sep 11 07:22:08 2012	(r4824)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/components/src/topology.c	2012-09-11 07:29:01 EDT (Tue, 11 Sep 2012)	(r4825)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -381,7 +381,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    *** CHECKING ITS CORRECTNESS!
</span><br>
<span class="quotelev2">&gt;&gt;    *************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;    */
</span><br>
<span class="quotelev2">&gt;&gt; -static unsigned obj_type_order[] = {
</span><br>
<span class="quotelev2">&gt;&gt; +static const unsigned obj_type_order[] = {
</span><br>
<span class="quotelev2">&gt;&gt;     /* first entry is HWLOC_OBJ_SYSTEM */  0,
</span><br>
<span class="quotelev2">&gt;&gt;     /* next entry is HWLOC_OBJ_MACHINE */  1,
</span><br>
<span class="quotelev2">&gt;&gt;     /* next entry is HWLOC_OBJ_NODE */     3,
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="3279.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4824)"</a>
<li><strong>Previous message:</strong> <a href="3277.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4825 - in branches/components: . doc src"</a>
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
