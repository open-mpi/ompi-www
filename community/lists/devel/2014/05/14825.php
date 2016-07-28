<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 01:15:00 2014" -->
<!-- isoreceived="20140519051500" -->
<!-- sent="Mon, 19 May 2014 14:14:57 +0900" -->
<!-- isosent="20140519051457" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2" -->
<!-- id="CAAkFZ5t_50qmiCJC5YJE2U-g04nqeC13ezREDKnt1PFck-D7YA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8BDC17_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 01:14:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>In reply to:</strong> <a href="14821.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Reply:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>do you mean the bug/typo was not at line 487
<br>
(e.g. btl_send was ok)
<br>
but at line 498 ?
<br>
(e.g. btl_send must be used instead of btl_eager)
<br>
<p>at first sight, that make sense.
<br>
<p>i'd rather let the author/maintainer of this part comment on that
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Sat, May 17, 2014 at 5:47 AM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is this correct? Shouldn't the fix be to change the call before the loop
</span><br>
<span class="quotelev1">&gt; to reference btl_send instead of btl_eager?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because it looks like the loop is trying to prevent a btl from
</span><br>
<span class="quotelev1">&gt; getting del_procs twice for the same proc. If we do not remove the btl from
</span><br>
<span class="quotelev1">&gt; the btl_send array it will get the call twice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct me if I am wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: svn [svn-bounces_at_[hidden]] on behalf of
</span><br>
<span class="quotelev1">&gt; svn-commit-mailer_at_[hidden] [svn-commit-mailer_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 15, 2014 10:43 PM
</span><br>
<span class="quotelev1">&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: ggouaillardet (Gilles Gouaillardet)
</span><br>
<span class="quotelev1">&gt; Date: 2014-05-16 00:43:18 EDT (Fri, 16 May 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31786
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31786">https://svn.open-mpi.org/trac/ompi/changeset/31786</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a typo in mca_bml_r2_del_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use bml_endpoint-&gt;btl_eager instead of bml_endpoint-&gt;btl_send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmr=v1.8.2:reviewer=rhc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/bml/r2/bml_r2.c |     4 +++-
</span><br>
<span class="quotelev1">&gt;    1 files changed, 3 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/bml/r2/bml_r2.c      Thu May 15 20:30:41 2014
</span><br>
<span class="quotelev1">&gt;  (r31785)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/bml/r2/bml_r2.c      2014-05-16 00:43:18 EDT (Fri, 16
</span><br>
<span class="quotelev1">&gt; May 2014)      (r31786)
</span><br>
<span class="quotelev1">&gt; @@ -15,6 +15,8 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2008-2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2013      Intel, Inc. All rights reserved
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2014      NVIDIA Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -482,7 +484,7 @@
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt;              n_size =
</span><br>
<span class="quotelev1">&gt; mca_bml_base_btl_array_get_size(&amp;bml_endpoint-&gt;btl_eager);
</span><br>
<span class="quotelev1">&gt;              for(n_index = 0; n_index &lt; n_size; n_index++) {
</span><br>
<span class="quotelev1">&gt; -                mca_bml_base_btl_t* search_bml_btl =
</span><br>
<span class="quotelev1">&gt; mca_bml_base_btl_array_get_index(&amp;bml_endpoint-&gt;btl_send, n_index);
</span><br>
<span class="quotelev1">&gt; +                mca_bml_base_btl_t* search_bml_btl =
</span><br>
<span class="quotelev1">&gt; mca_bml_base_btl_array_get_index(&amp;bml_endpoint-&gt;btl_eager, n_index);
</span><br>
<span class="quotelev1">&gt;                  if(search_bml_btl-&gt;btl == btl) {
</span><br>
<span class="quotelev1">&gt;                      memset(search_bml_btl, 0, sizeof(mca_bml_base_btl_t));
</span><br>
<span class="quotelev1">&gt;                      break;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14821.php">http://www.open-mpi.org/community/lists/devel/2014/05/14821.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14824.php">Ralph Castain: "Re: [OMPI devel] problem compiling trunk after r31810"</a>
<li><strong>In reply to:</strong> <a href="14821.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Reply:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
