<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 12:47:24 2012" -->
<!-- isoreceived="20121204174724" -->
<!-- sent="Tue, 4 Dec 2012 09:46:53 -0800" -->
<!-- isosent="20121204174653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file" -->
<!-- id="F1D5EAD0-6CC6-4FC0-B6E7-9A2B3BED35C4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7151AE2BFDF_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 12:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11831.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11829.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv	ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11826.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2012, at 5:39 PM, Hjelm, Nathan T wrote:
<br>
<p><span class="quotelev1">&gt; Oh, and I don't know if you have tried this but we don't recreate the keyval_lex.c file if it already exists. This allows use to not put a flex requirement on the end user.
</span><br>
<p>Why?  Shouldn't we have a proper .l.c rule in the Makefile.am?
<br>
<p>Does that somehow cause tarball builds to invoke flex?  And if so, should we put the .l.c rule in an automake conditional something like:
<br>
<p>if THIS_IS_A_DEVELOPER_BUILD
<br>
.l.c:
<br>
&nbsp;&nbsp;&nbsp;flex ....
<br>
endif
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11831.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11829.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv	ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11826.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
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
