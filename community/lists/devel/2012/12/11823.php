<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 20:28:44 2012" -->
<!-- isoreceived="20121204012844" -->
<!-- sent="Tue, 4 Dec 2012 02:28:32 +0100" -->
<!-- isosent="20121204012832" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file" -->
<!-- id="ADFDE0C0-F6A3-4EDB-825D-7614DEFABCBD_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121109220027.777A81605D9_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 20:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11824.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11822.php">Jeff Squyres: "[OMPI devel] EuroMPI 2013 - Call for Papers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11824.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Reply:</strong> <a href="11824.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Reply:</strong> <a href="11826.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I remember there were some discussions about lex (or flex) and their version, but I don't remember the specifics. Whatever the outcome was, we're back at having a problem there, more specifically a missing reference (opal_util_keyval_yylex_destroy) which seems to indicate the issue was not fixed.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>&nbsp;
<br>


<br><p>
<p><p>On Nov 9, 2012, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2012-11-09 17:00:27 EST (Fri, 09 Nov 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 27580
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27580">https://svn.open-mpi.org/trac/ompi/changeset/27580</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add prototypes for lex destroy functions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_lex.h       |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/wv/btl_wv_lex.h               |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/ml/coll_ml_lex.h             |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/opal/util/keyval/keyval_lex.h              |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/rank_file/rmaps_rank_file.h |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   5 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<p><p><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11823/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11824.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11822.php">Jeff Squyres: "[OMPI devel] EuroMPI 2013 - Call for Papers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11824.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Reply:</strong> <a href="11824.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Reply:</strong> <a href="11826.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
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
