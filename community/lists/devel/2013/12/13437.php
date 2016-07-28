<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 15 12:18:24 2013" -->
<!-- isoreceived="20131215171824" -->
<!-- sent="Sun, 15 Dec 2013 09:18:13 -0800" -->
<!-- isosent="20131215171813" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte" -->
<!-- id="2FCA1CAB-6791-4DF9-A1DB-21D8700D3A1D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131215165402.2FA2C16042F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-15 12:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13438.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Previous message:</strong> <a href="13436.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13438.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Reply:</strong> <a href="13438.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This actually creates a bit of a problem. The reason we did this was because the OMPI-layer &quot;show-help&quot; calls want to report the hostname of the proc. Since we don't retrieve that info by default, the show-help calls all fail due to a NULL pointer.
<br>
<p>Nathan tried wrapping all the show-help calls with a modex-fetch of hostname, but that isn't a good solution as the fetch might fail depending on the problem we are trying to report.
<br>
<p>We also noted that the modex recv's current implemented all fetched the complete RTE-level info whenever any info was requested for that proc. So the fetch of the hostname was a very low cost operation.
<br>
<p>So we decided to always ensure we load the hostname info if it hasn't already been done, thus keeping the show-help operations functional.
<br>
<p>Make sense? Or do you have an alternative method?
<br>
Ralph
<br>
<p><p>On Dec 15, 2013, at 8:54 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2013-12-15 11:54:01 EST (Sun, 15 Dec 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29917
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29917">https://svn.open-mpi.org/trac/ompi/changeset/29917</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Don't be greedy, just do what we asked for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/rte/orte/rte_orte_module.c |    15 ---------------                         
</span><br>
<span class="quotelev1">&gt;   1 files changed, 0 insertions(+), 15 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/rte/orte/rte_orte_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/rte/orte/rte_orte_module.c	Sun Dec 15 11:49:27 2013	(r29916)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/rte/orte/rte_orte_module.c	2013-12-15 11:54:01 EST (Sun, 15 Dec 2013)	(r29917)
</span><br>
<span class="quotelev1">&gt; @@ -153,11 +153,6 @@
</span><br>
<span class="quotelev1">&gt;     if (OPAL_SUCCESS != (rc = opal_db.fetch((opal_identifier_t*)nm, key, data, type))) {
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    /* update the hostname */
</span><br>
<span class="quotelev1">&gt; -    proct = ompi_proc_find(nm);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == proct-&gt;proc_hostname) {
</span><br>
<span class="quotelev1">&gt; -        opal_db.fetch_pointer((opal_identifier_t*)nm, ORTE_DB_HOSTNAME, (void**)&amp;proct-&gt;proc_hostname, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -171,11 +166,6 @@
</span><br>
<span class="quotelev1">&gt;     if (OPAL_SUCCESS != (rc = opal_db.fetch_pointer((opal_identifier_t*)nm, key, data, type))) {
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    /* update the hostname */
</span><br>
<span class="quotelev1">&gt; -    proct = ompi_proc_find(nm);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == proct-&gt;proc_hostname) {
</span><br>
<span class="quotelev1">&gt; -        opal_db.fetch_pointer((opal_identifier_t*)nm, ORTE_DB_HOSTNAME, (void**)&amp;proct-&gt;proc_hostname, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -191,11 +181,6 @@
</span><br>
<span class="quotelev1">&gt;                                                      OPAL_SCOPE_GLOBAL, key, kvs))) {
</span><br>
<span class="quotelev1">&gt;         return rc;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    /* update the hostname */
</span><br>
<span class="quotelev1">&gt; -    proct = ompi_proc_find(nm);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == proct-&gt;proc_hostname) {
</span><br>
<span class="quotelev1">&gt; -        opal_db.fetch_pointer((opal_identifier_t*)nm, ORTE_DB_HOSTNAME, (void**)&amp;proct-&gt;proc_hostname, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13438.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Previous message:</strong> <a href="13436.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13438.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Reply:</strong> <a href="13438.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
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
