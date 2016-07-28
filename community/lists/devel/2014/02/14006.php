<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 12:28:52 2014" -->
<!-- isoreceived="20140206172852" -->
<!-- sent="Thu, 6 Feb 2014 09:27:40 -0800" -->
<!-- isosent="20140206172740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime" -->
<!-- id="3FDF4E85-BBC3-471A-B0AF-354193C3453B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3EC63FB9_at_MTIDAG01.mtl.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 12:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14007.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="14005.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="14005.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - I'll add it in the next wave. Meantime, we can revert this one
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Feb 6, 2014, at 9:18 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It&#146;s been CMRed, but scheduled for 1.7.5
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4185">https://svn.open-mpi.org/trac/ompi/ticket/4185</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Mike Dubman
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 06, 2014 12:17 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It seems that similar code in not in v1.7 tree.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 6, 2014 at 2:40 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; This commit is unnecessary. The call to delete_proc is already there, few lines above your own patch. It was introduced on Jan 26 2014 with commit <a href="https://svn.open-mpi.org/trac/ompi/changeset/30430">https://svn.open-mpi.org/trac/ompi/changeset/30430</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2014, at 09:38 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-02-06 03:38:32 EST (Thu, 06 Feb 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 30571
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30571">https://svn.open-mpi.org/trac/ompi/changeset/30571</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; OMPI: add call to del_procs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fixed by AlexM, reviewed by miked
</span><br>
<span class="quotelev2">&gt; &gt; cmr=v1.7.5:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/runtime/ompi_mpi_finalize.c |    15 +++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 15 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/runtime/ompi_mpi_finalize.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/runtime/ompi_mpi_finalize.c    Wed Feb  5 17:49:26 2014        (r30570)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/runtime/ompi_mpi_finalize.c    2014-02-06 03:38:32 EST (Thu, 06 Feb 2014)      (r30571)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -94,6 +94,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;     opal_list_item_t *item;
</span><br>
<span class="quotelev2">&gt; &gt;     struct timeval ompistart, ompistop;
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_rte_collective_t *coll;
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_proc_t** procs;
</span><br>
<span class="quotelev2">&gt; &gt; +    size_t nprocs;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Be a bit social if an erroneous program calls MPI_FINALIZE in
</span><br>
<span class="quotelev2">&gt; &gt;        two different threads, otherwise we may deadlock in
</span><br>
<span class="quotelev2">&gt; &gt; @@ -150,6 +153,18 @@
</span><br>
<span class="quotelev2">&gt; &gt;        MPI lifetime, to get better latency when not using TCP */
</span><br>
<span class="quotelev2">&gt; &gt;     opal_progress_event_users_increment();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (NULL == (procs = ompi_proc_world(&amp;nprocs))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    if (OMPI_SUCCESS != (ret = MCA_PML_CALL(del_procs(procs, nprocs)))) {
</span><br>
<span class="quotelev2">&gt; &gt; +        free(procs);
</span><br>
<span class="quotelev2">&gt; &gt; +        return ret;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +    free(procs);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;     /* check to see if we want timing information */
</span><br>
<span class="quotelev2">&gt; &gt;     if (ompi_enable_timing != 0 &amp;&amp; 0 == OMPI_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt; &gt;         gettimeofday(&amp;ompistart, NULL);
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14007.php">Paul Hargrove: "Re: [OMPI devel] mpirun oddity w/ PBS on an SGI UV"</a>
<li><strong>Previous message:</strong> <a href="14005.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="14005.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
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
