<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 19:32:58 2012" -->
<!-- isoreceived="20121207003258" -->
<!-- sent="Fri, 7 Dec 2012 00:32:53 +0000" -->
<!-- isosent="20121207003253" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7151AE2C7AD_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15KS3sDSf-skkZs3g2YqKUUhk=t9_556GrUAajxCS6nbQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 19:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11840.php">Ralph Castain: "[OMPI devel] RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11838.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11838.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11826.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I *think* the destroy functions I added to the .l files for the old flex case will clean up everything correctly. What I mean is we will correctly clean up  when using new flex (valgrind clean). We still recommend using new flex (2.5.33 or newer recommended) but we will continue to support old flex because of Redhat's decision to include old flex in RHEL 5.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Paul Hargrove [phhargrove_at_[hidden]]
<br>
Sent: Thursday, December 06, 2012 5:20 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file
<br>
<p>Nathan,
<br>
<p>What does this mean with respect to &quot;clean up&quot; and old flex?
<br>
Have you simply conceded that old flex will leak memory?
<br>
<p>-Paul
<br>
<p>On Thu, Dec 6, 2012 at 4:16 PM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
<br>
Done. We now clean up correctly in new flex while having support for old flex.
<br>
<p>-Nathan
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11840.php">Ralph Castain: "[OMPI devel] RFC: Enable thread support by default"</a>
<li><strong>Previous message:</strong> <a href="11838.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11838.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11826.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
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
