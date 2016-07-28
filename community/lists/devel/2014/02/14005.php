<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 12:20:17 2014" -->
<!-- isoreceived="20140206172017" -->
<!-- sent="Thu, 6 Feb 2014 17:18:24 +0000" -->
<!-- isosent="20140206171824" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3EC63FB9_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KybZd_0dYGa4Q5y_S7cnO8YXZ3ByOCQX3sKKEb9t9AfgYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 12:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="14004.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="14003.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been CMRed, but scheduled for 1.7.5
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4185">https://svn.open-mpi.org/trac/ompi/ticket/4185</a>
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Mike Dubman
<br>
Sent: Thursday, February 06, 2014 12:17 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime
<br>
<p>It seems that similar code in not in v1.7 tree.
<br>
<p>On Thu, Feb 6, 2014 at 2:40 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
This commit is unnecessary. The call to delete_proc is already there, few lines above your own patch. It was introduced on Jan 26 2014 with commit <a href="https://svn.open-mpi.org/trac/ompi/changeset/30430">https://svn.open-mpi.org/trac/ompi/changeset/30430</a>.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Feb 6, 2014, at 09:38 , svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-02-06 03:38:32 EST (Thu, 06 Feb 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30571
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30571">https://svn.open-mpi.org/trac/ompi/changeset/30571</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; OMPI: add call to del_procs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fixed by AlexM, reviewed by miked
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.5:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_finalize.c |    15 +++++++++++++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 15 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_mpi_finalize.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_mpi_finalize.c    Wed Feb  5 17:49:26 2014        (r30570)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_mpi_finalize.c    2014-02-06 03:38:32 EST (Thu, 06 Feb 2014)      (r30571)
</span><br>
<span class="quotelev1">&gt; @@ -94,6 +94,9 @@
</span><br>
<span class="quotelev1">&gt;     opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt;     struct timeval ompistart, ompistop;
</span><br>
<span class="quotelev1">&gt;     ompi_rte_collective_t *coll;
</span><br>
<span class="quotelev1">&gt; +    ompi_proc_t** procs;
</span><br>
<span class="quotelev1">&gt; +    size_t nprocs;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Be a bit social if an erroneous program calls MPI_FINALIZE in
</span><br>
<span class="quotelev1">&gt;        two different threads, otherwise we may deadlock in
</span><br>
<span class="quotelev1">&gt; @@ -150,6 +153,18 @@
</span><br>
<span class="quotelev1">&gt;        MPI lifetime, to get better latency when not using TCP */
</span><br>
<span class="quotelev1">&gt;     opal_progress_event_users_increment();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (NULL == (procs = ompi_proc_world(&amp;nprocs))) {
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (OMPI_SUCCESS != (ret = MCA_PML_CALL(del_procs(procs, nprocs)))) {
</span><br>
<span class="quotelev1">&gt; +        free(procs);
</span><br>
<span class="quotelev1">&gt; +        return ret;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    free(procs);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* check to see if we want timing information */
</span><br>
<span class="quotelev1">&gt;     if (ompi_enable_timing != 0 &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt;         gettimeofday(&amp;ompistart, NULL);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]&lt;mailto:svn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="14004.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="14003.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="14006.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
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
