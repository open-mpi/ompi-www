<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 15 15:41:03 2013" -->
<!-- isoreceived="20131215204103" -->
<!-- sent="Sun, 15 Dec 2013 12:40:51 -0800" -->
<!-- isosent="20131215204051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte" -->
<!-- id="C754C787-81A1-43EA-A1DF-D86885B7184B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D498181A-C64C-4953-B9F7-89A67555FA0E_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-12-15 15:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13444.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Previous message:</strong> <a href="13442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>In reply to:</strong> <a href="13442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13444.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Reply:</strong> <a href="13444.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2013, at 12:08 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 15, 2013, at 14:36 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure you can - just find the ompi_proc_t without setting the thread lock since (as you point out) it is already being held.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is hardly thread-safe for all the cases where this function is not called while owning the lock (aka all the modules).
</span><br>
<p>Fair enough - we can use the other option.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or we could pass the ompi_proc_t into the call, if necessary. Either way should work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is already the orte_process_name_t on the call, as it is the only information needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be extremely clear, there is no need to alter the current code, it is correct by all means. The first thing we do after the modex_exchange is going in the second stage of the ompi_proc setup (ompi_proc_complete_init) where the first call is for retrieving the proc_hostname from the database. The code I removed was 1) totally superfluous and 2) completely broken on multi-threaded scenarios.
</span><br>
<p>Not true, George - look more closely at the code. We only retrieve the hostname if the number of procs is low. Otherwise, we do *not* retrieve it until we do a modex_recv, and thus the debug is now broken at scale. This was required for scalable launch, which is something I know is important to you as well.
<br>
<p>Modifying the API isn't a big deal, so why the fuss? Let's just change it and get the debug working again.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2013, at 11:30 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current code is correct. If the goal is to continue to retrieve the proc_name in a call that is asking for something else, I don&#146;t see how you can remove this circular dependency between setting and using the ompi_procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 15, 2013, at 13:52 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay - then let's correct the code rather than lose the debug. I'll fix that problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 15, 2013, at 9:54 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I understand your reasons but the code as it was in the trunk is not correct. In most of the cases when you reach one of the ompi_rte_db_fetch calls, you are setting up an ompi_proc &#133; which means you own the ompi_proc_lock mutex. As the ompi_rte_db_fetch was calling back into the proc infrastructure to find a proc, it was deadlocking on acquiring the ompi_proc_lock mutex as locking this mutex it is the first thing ompi_proc_find is doing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A quick grep indicates that most places where the proc_hostname is used are capable of handling NULL, so avoiding a deadlock in exchange for few hostname replaced by NULL in the output seemed like a acceptable approach to me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 15, 2013, at 12:18 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This actually creates a bit of a problem. The reason we did this was because the OMPI-layer &quot;show-help&quot; calls want to report the hostname of the proc. Since we don't retrieve that info by default, the show-help calls all fail due to a NULL pointer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Nathan tried wrapping all the show-help calls with a modex-fetch of hostname, but that isn't a good solution as the fetch might fail depending on the problem we are trying to report.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We also noted that the modex recv's current implemented all fetched the complete RTE-level info whenever any info was requested for that proc. So the fetch of the hostname was a very low cost operation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So we decided to always ensure we load the hostname info if it hasn't already been done, thus keeping the show-help operations functional.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Make sense? Or do you have an alternative method?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 15, 2013, at 8:54 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: 2013-12-15 11:54:01 EST (Sun, 15 Dec 2013)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 29917
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29917">https://svn.open-mpi.org/trac/ompi/changeset/29917</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Don't be greedy, just do what we asked for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/rte/orte/rte_orte_module.c |    15 ---------------                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 0 insertions(+), 15 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/rte/orte/rte_orte_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- trunk/ompi/mca/rte/orte/rte_orte_module.c	Sun Dec 15 11:49:27 2013	(r29916)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/rte/orte/rte_orte_module.c	2013-12-15 11:54:01 EST (Sun, 15 Dec 2013)	(r29917)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -153,11 +153,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; if (OPAL_SUCCESS != (rc = opal_db.fetch((opal_identifier_t*)nm, key, data, type))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    /* update the hostname */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    proct = ompi_proc_find(nm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    if (NULL == proct-&gt;proc_hostname) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -        opal_db.fetch_pointer((opal_identifier_t*)nm, ORTE_DB_HOSTNAME, (void**)&amp;proct-&gt;proc_hostname, OPAL_STRING);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -171,11 +166,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; if (OPAL_SUCCESS != (rc = opal_db.fetch_pointer((opal_identifier_t*)nm, key, data, type))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    /* update the hostname */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    proct = ompi_proc_find(nm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    if (NULL == proct-&gt;proc_hostname) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -        opal_db.fetch_pointer((opal_identifier_t*)nm, ORTE_DB_HOSTNAME, (void**)&amp;proct-&gt;proc_hostname, OPAL_STRING);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -191,11 +181,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                                OPAL_SCOPE_GLOBAL, key, kvs))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    /* update the hostname */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    proct = ompi_proc_find(nm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    if (NULL == proct-&gt;proc_hostname) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -        opal_db.fetch_pointer((opal_identifier_t*)nm, ORTE_DB_HOSTNAME, (void**)&amp;proct-&gt;proc_hostname, OPAL_STRING);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13444.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Previous message:</strong> <a href="13442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>In reply to:</strong> <a href="13442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13444.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Reply:</strong> <a href="13444.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
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
