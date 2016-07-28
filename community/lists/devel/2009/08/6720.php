<?
$subject_val = "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1705";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 13:26:55 2009" -->
<!-- isoreceived="20090825172655" -->
<!-- sent="Tue, 25 Aug 2009 13:26:50 -0400" -->
<!-- isosent="20090825172650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1705" -->
<!-- id="2207CD60-0710-40AD-9B84-3ED62DC79D88_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200908251725.n7PHPDal030565_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1705<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 13:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6721.php">Jeff Squyres: "[OMPI devel] SVN and Trac outage"</a>
<li><strong>Previous message:</strong> <a href="6719.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow -- ignore that commit message; that was an ancient message from a  
<br>
really, really old commit.
<br>
<p>This commit is a new test that does reductions on MPI_MINLOC with  
<br>
SHORT_INT.
<br>
<p>Sorry for the confusion!
<br>
<p><p>On Aug 25, 2009, at 1:25 PM, jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2009-08-25 13:25:13 EDT (Tue, 25 Aug 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1705
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Oops -- had logic test backwards.  This test will pass when Edgar
</span><br>
<span class="quotelev1">&gt; commits the fixes to the OMPI trunk.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/ibm/collective/reduce_loc.c
</span><br>
<span class="quotelev1">&gt; Properties modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ibm/collective/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ibm/collective/Makefile.am |     5 +++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 5 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ibm/collective/Makefile.am
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ibm/collective/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ibm/collective/Makefile.am	2009-08-25 13:25:13 EDT (Tue,  
</span><br>
<span class="quotelev1">&gt; 25 Aug 2009)
</span><br>
<span class="quotelev1">&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev1">&gt; 			reduce \
</span><br>
<span class="quotelev1">&gt; 			reduce_big \
</span><br>
<span class="quotelev1">&gt; 			reduce_in_place \
</span><br>
<span class="quotelev1">&gt; +			reduce_loc \
</span><br>
<span class="quotelev1">&gt; 			reduce_scatter \
</span><br>
<span class="quotelev1">&gt; 			reduce_scatter_in_place \
</span><br>
<span class="quotelev1">&gt; 			scan \
</span><br>
<span class="quotelev1">&gt; @@ -124,6 +125,10 @@
</span><br>
<span class="quotelev1">&gt; reduce_in_place_LDADD		= $(libs)
</span><br>
<span class="quotelev1">&gt; reduce_in_place_DEPENDENCIES	= $(deps)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +reduce_loc_SOURCES	= reduce_loc.c
</span><br>
<span class="quotelev1">&gt; +reduce_loc_LDADD	= $(libs)
</span><br>
<span class="quotelev1">&gt; +reduce_loc_DEPENDENCIES	= $(deps)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; reduce_scatter_SOURCES	= reduce_scatter.c
</span><br>
<span class="quotelev1">&gt; reduce_scatter_LDADD	= $(libs)
</span><br>
<span class="quotelev1">&gt; reduce_scatter_DEPENDENCIES= $(deps)
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6721.php">Jeff Squyres: "[OMPI devel] SVN and Trac outage"</a>
<li><strong>Previous message:</strong> <a href="6719.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
