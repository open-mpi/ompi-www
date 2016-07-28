<?
$subject_val = "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 04:00:52 2016" -->
<!-- isoreceived="20160107090052" -->
<!-- sent="Wed, 06 Jan 2016 18:41:20 +0900" -->
<!-- isosent="20160106094120" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab" -->
<!-- id="x3tmpvrymbstcki7lr9rkplo.1452072991790_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 04:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18480.php">Michael Rutter: "[OMPI devel] Low mem provokes infinite loop"</a>
<li><strong>Previous message:</strong> <a href="18478.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>That solves the several mtt failures involving collective and intercommunicators (allgather_inter and friends), that occured when running with --mca mpi_procs_cutoff 0.
<br>
I could reproduce the issue with 8 tasks or more and two nodes 
<br>
(Not sure two nodes matter here...)
<br>
<p>In this case proc_list[i] might be a sentinel, so it is not always possible to simply access proc_list[i]-&gt;super.proc_name
<br>
<p>Note this commit was incomplete and i pushed a second one when i figured it out.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Could you please explain this one - I honestly don&#226;&#128;&#153;t understand the change, and haven&#226;&#128;&#153;t encountered a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2016, at 11:22 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;       via  213b2abde47cf02ba3152a301d3ec0ffeec54438 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;      from  e4bdad09c1bf7f11dada5ae6ac32e052b553ce4b (commit)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438">https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit 213b2abde47cf02ba3152a301d3ec0ffeec54438
</span><br>
<span class="quotelev2">&gt;&gt; Author: Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Wed Jan 6 16:21:13 2016 +0900
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    dpm: correctly handle procs_cutoff in ompi_dpm_connect_accept()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/dpm/dpm.c b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev2">&gt;&gt; index 9a236d0..b1c562e 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/dpm/dpm.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2011-2015 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2013-2015 Intel, Inc. All rights reserved
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014-2016 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt; @@ -167,7 +167,13 @@ int ompi_dpm_connect_accept(ompi_communicator_t *comm, int root,
</span><br>
<span class="quotelev2">&gt;&gt;             dense = false;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         for (i=0; i &lt; size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; -            rc = opal_convert_process_name_to_string(&amp;nstring, &amp;(proc_list[i]-&gt;super.proc_name));
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_process_name_t proc_name;
</span><br>
<span class="quotelev2">&gt;&gt; +            if (ompi_proc_is_sentinel (proc_list[i])) {
</span><br>
<span class="quotelev2">&gt;&gt; +                proc_name = ompi_proc_sentinel_to_name ((intptr_t) proc_list[i]);
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                proc_name = proc_list[i]-&gt;super.proc_name;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +            rc = opal_convert_process_name_to_string(&amp;nstring, &amp;proc_name);
</span><br>
<span class="quotelev2">&gt;&gt;             if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt;&gt;                 if (!dense) {
</span><br>
<span class="quotelev2">&gt;&gt;                     free(proc_list);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt; ompi/dpm/dpm.c | 10 ++++++++--
</span><br>
<span class="quotelev2">&gt;&gt; 1 file changed, 8 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18473.php">http://www.open-mpi.org/community/lists/devel/2016/01/18473.php</a></span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18480.php">Michael Rutter: "[OMPI devel] Low mem provokes infinite loop"</a>
<li><strong>Previous message:</strong> <a href="18478.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
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
