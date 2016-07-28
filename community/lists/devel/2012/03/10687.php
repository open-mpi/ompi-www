<?
$subject_val = "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 10:47:49 2012" -->
<!-- isoreceived="20120306154749" -->
<!-- sent="Tue, 6 Mar 2012 07:47:45 -0800" -->
<!-- isosent="20120306154745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks" -->
<!-- id="CAMD57odPG-JNWcdGw_ZU7F3yiup=AYCC8ftdjw4dX36qJxwVSQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1331036294.11863.45.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 10:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Previous message:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10684.php">nadia.derbey: "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are quite right - good catch! Fixed in trunk with r26107 - will file
<br>
patch for 1.5.
<br>
Ralph
<br>
<p><p>On Tue, Mar 6, 2012 at 4:18 AM, nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When forwarding stdin to all ranks in the job (mpirun --stdin all), the
</span><br>
<span class="quotelev1">&gt; following error message is output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; [berlin73:02223] [[56600,0],0] ORTE_ERROR_LOG: A message is attempting
</span><br>
<span class="quotelev1">&gt; to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 316
</span><br>
<span class="quotelev1">&gt; [berlin73:02223] [[56600,0],0] unable to find address for
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [berlin73:02223] [[56600,0],0] ORTE_ERROR_LOG: A message is attempting
</span><br>
<span class="quotelev1">&gt; to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/iof/hnp/iof_hnp_send.c at line 116
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is due to the daemon part of the sink structure not beeing
</span><br>
<span class="quotelev1">&gt; initialized in hnp_push() when the destination vpid is
</span><br>
<span class="quotelev1">&gt; ORTE_VPID_WILDCARD.
</span><br>
<span class="quotelev1">&gt; And then, when orte_iof_hnp_read_local_handler() is called, it calls
</span><br>
<span class="quotelev1">&gt; orte_iof_hnp_send_data_to_endpoint() with a sink-&gt;daemon that is not
</span><br>
<span class="quotelev1">&gt; set.
</span><br>
<span class="quotelev1">&gt; orte_iof_hnp_send_data_to_endpoint() in turn doesn't call
</span><br>
<span class="quotelev1">&gt; orte_grpcomm.xcast() but orte_rml.send_buffer_nb() with an invalid host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch applied on the trunk solves the issue. This patch is
</span><br>
<span class="quotelev1">&gt; trivial, but since it's the first time I have to look at iof code, I'm
</span><br>
<span class="quotelev1">&gt; not sure of all its impacts...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Previous message:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10684.php">nadia.derbey: "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
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
