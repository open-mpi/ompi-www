<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 19:12:53 2016" -->
<!-- isoreceived="20160107001253" -->
<!-- sent="Thu, 7 Jan 2016 09:12:51 +0900" -->
<!-- isosent="20160107001251" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab" -->
<!-- id="568DAD83.9080509_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3ADD729D-479B-4B0F-A398-0507C83EC370_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 19:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18479.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Previous message:</strong> <a href="18477.php">Mudit Sharma: "[OMPI devel] Contributing to mpi"</a>
<li><strong>In reply to:</strong> <a href="18475.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i did forget that indeed ... and i just pushed it
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/7/2016 12:33 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm&#133;I don&#146;t see a second commit message anywhere. Did you perhaps 
</span><br>
<span class="quotelev1">&gt; forget to push it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the explanation!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2016, at 2:30 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That solves the multiple mtt failures that occurred with inter 
</span><br>
<span class="quotelev2">&gt;&gt; communicators and mpi_procs_cutoff.
</span><br>
<span class="quotelev2">&gt;&gt; You can reproduce this with allgather_inter from ibm/collective, 
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_procs_cutoff 0, 8 tasks and two nodes.
</span><br>
<span class="quotelev2">&gt;&gt; Basically, a proc_list[i] can be a sentinel, so it is not always 
</span><br>
<span class="quotelev2">&gt;&gt; correct to simply dereference proc_list[i] in order to access its 
</span><br>
<span class="quotelev2">&gt;&gt; proc_name.
</span><br>
<span class="quotelev2">&gt;&gt; Note this commit is incomplete and I pushed a second one right after 
</span><br>
<span class="quotelev2">&gt;&gt; I figured it out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, January 6, 2016, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Could you please explain this one - I honestly don&#146;t understand
</span><br>
<span class="quotelev2">&gt;&gt;     the change, and haven&#146;t encountered a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; On Jan 5, 2016, at 11:22 PM, gitdub_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; This is an automated email from the git hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt;     script. It was
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; generated because a ref change was pushed to the repository
</span><br>
<span class="quotelev2">&gt;&gt;     containing
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; The branch, master has been updated
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;       via 213b2abde47cf02ba3152a301d3ec0ffeec54438 (commit)
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;      from e4bdad09c1bf7f11dada5ae6ac32e052b553ce4b (commit)
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; revisions in full, below.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; - Log
</span><br>
<span class="quotelev2">&gt;&gt;     -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438">https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; commit 213b2abde47cf02ba3152a301d3ec0ffeec54438
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Author: Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Date:   Wed Jan 6 16:21:13 2016 +0900
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;    dpm: correctly handle procs_cutoff in ompi_dpm_connect_accept()
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; diff --git a/ompi/dpm/dpm.c b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; index 9a236d0..b1c562e 100644
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; --- a/ompi/dpm/dpm.c
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +++ b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;  * Copyright (c) 2011-2015 Los Alamos National Security, LLC. 
</span><br>
<span class="quotelev2">&gt;&gt;     All rights
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;  *                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;  * Copyright (c) 2013-2015 Intel, Inc. All rights reserved
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; - * Copyright (c) 2014-2015 Research Organization for
</span><br>
<span class="quotelev2">&gt;&gt;     Information Science
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; + * Copyright (c) 2014-2016 Research Organization for
</span><br>
<span class="quotelev2">&gt;&gt;     Information Science
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;  *                         and Technology (RIST). All rights
</span><br>
<span class="quotelev2">&gt;&gt;     reserved.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; @@ -167,7 +167,13 @@ int
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_dpm_connect_accept(ompi_communicator_t *comm, int root,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;             dense = false;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;         for (i=0; i &lt; size; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; -            rc = opal_convert_process_name_to_string(&amp;nstring,
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;(proc_list[i]-&gt;super.proc_name));
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +            opal_process_name_t proc_name;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +            if (ompi_proc_is_sentinel (proc_list[i])) {
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +                proc_name = ompi_proc_sentinel_to_name
</span><br>
<span class="quotelev2">&gt;&gt;     ((intptr_t) proc_list[i]);
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +            } else {
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +                proc_name = proc_list[i]-&gt;super.proc_name;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +            }
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; +            rc = opal_convert_process_name_to_string(&amp;nstring,
</span><br>
<span class="quotelev2">&gt;&gt;     &amp;proc_name);
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;             if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;                 if (!dense) {
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;                     free(proc_list);
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Summary of changes:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; ompi/dpm/dpm.c | 10 ++++++++--
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; 1 file changed, 8 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; hooks/post-receive
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; open-mpi/ompi
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; ompi-commits mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; ompi-commits_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18473.php">http://www.open-mpi.org/community/lists/devel/2016/01/18473.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18474.php">http://www.open-mpi.org/community/lists/devel/2016/01/18474.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18475.php">http://www.open-mpi.org/community/lists/devel/2016/01/18475.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18479.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Previous message:</strong> <a href="18477.php">Mudit Sharma: "[OMPI devel] Contributing to mpi"</a>
<li><strong>In reply to:</strong> <a href="18475.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
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
