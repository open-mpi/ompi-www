<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 16:47:54 2014" -->
<!-- isoreceived="20140516204754" -->
<!-- sent="Fri, 16 May 2014 20:47:52 +0000" -->
<!-- isosent="20140516204752" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8BDC17_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140516044319.22F9416101D_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 16:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14822.php">Ralph Castain: "[OMPI devel] RFC: revamp of ORTE global structures"</a>
<li><strong>Previous message:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Reply:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this correct? Shouldn't the fix be to change the call before the loop to reference btl_send instead of btl_eager?
<br>
<p>I ask because it looks like the loop is trying to prevent a btl from getting del_procs twice for the same proc. If we do not remove the btl from the btl_send array it will get the call twice.
<br>
<p>Correct me if I am wrong.
<br>
<p>-Nathan
<br>
<p>________________________________________
<br>
From: svn [svn-bounces_at_[hidden]] on behalf of svn-commit-mailer_at_[hidden] [svn-commit-mailer_at_[hidden]]
<br>
Sent: Thursday, May 15, 2014 10:43 PM
<br>
To: svn_at_[hidden]
<br>
Subject: [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2
<br>
<p>Author: ggouaillardet (Gilles Gouaillardet)
<br>
Date: 2014-05-16 00:43:18 EDT (Fri, 16 May 2014)
<br>
New Revision: 31786
<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31786">https://svn.open-mpi.org/trac/ompi/changeset/31786</a>
<br>
<p>Log:
<br>
Fix a typo in mca_bml_r2_del_procs()
<br>
<p>Use bml_endpoint-&gt;btl_eager instead of bml_endpoint-&gt;btl_send.
<br>
<p>cmr=v1.8.2:reviewer=rhc
<br>
<p>Text files modified:
<br>
&nbsp;&nbsp;&nbsp;trunk/ompi/mca/bml/r2/bml_r2.c |     4 +++-
<br>
&nbsp;&nbsp;&nbsp;1 files changed, 3 insertions(+), 1 deletions(-)
<br>
<p>Modified: trunk/ompi/mca/bml/r2/bml_r2.c
<br>
==============================================================================
<br>
--- trunk/ompi/mca/bml/r2/bml_r2.c      Thu May 15 20:30:41 2014        (r31785)
<br>
+++ trunk/ompi/mca/bml/r2/bml_r2.c      2014-05-16 00:43:18 EDT (Fri, 16 May 2014)      (r31786)
<br>
@@ -15,6 +15,8 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2008-2014 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2013      Intel, Inc. All rights reserved
<br>
&nbsp;&nbsp;* Copyright (c) 2014      NVIDIA Corporation.  All rights reserved.
<br>
+ * Copyright (c) 2014      Research Organization for Information Science
<br>
+ *                         and Technology (RIST). All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -482,7 +484,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n_size = mca_bml_base_btl_array_get_size(&amp;bml_endpoint-&gt;btl_eager);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(n_index = 0; n_index &lt; n_size; n_index++) {
<br>
-                mca_bml_base_btl_t* search_bml_btl = mca_bml_base_btl_array_get_index(&amp;bml_endpoint-&gt;btl_send, n_index);
<br>
+                mca_bml_base_btl_t* search_bml_btl = mca_bml_base_btl_array_get_index(&amp;bml_endpoint-&gt;btl_eager, n_index);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(search_bml_btl-&gt;btl == btl) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(search_bml_btl, 0, sizeof(mca_bml_base_btl_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
_______________________________________________
<br>
svn mailing list
<br>
svn_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14822.php">Ralph Castain: "[OMPI devel] RFC: revamp of ORTE global structures"</a>
<li><strong>Previous message:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Reply:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
