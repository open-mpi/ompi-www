<?
$subject_val = "Re: [OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 15:25:39 2011" -->
<!-- isoreceived="20110321192539" -->
<!-- sent="Mon, 21 Mar 2011 13:23:53 -0600" -->
<!-- isosent="20110321192353" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] JDATA access problem." -->
<!-- id="4C3F0D2D-C408-446A-BD6E-C8636E41431D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTim4UnD6Tgp8nRcg26QezAy3w3P31-TitzOCRk-G_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] JDATA access problem.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 15:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9109.php">Joshua Hursey: "[OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9107.php">Hugo Meyer: "[OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9107.php">Hugo Meyer: "[OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should never access a pointer array's data area that way (i.e., by index against the raw data). You really should do:
<br>
<p>if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, vpid))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* error report */
<br>
}
<br>
<p>to protect against changes. The errmgr generally doesn't remove a process object upon failure - it just sets its state to some appropriate value. However, depending upon where you are trying to do this, and the history that got you down this code path, it is possible.
<br>
<p>Also, remember that if you are in a daemon, then the jdata objects are not populated. The daemons work exclusively from the orte_local_jobdata and orte_local_children lists, so you would have to find your process there.
<br>
<p>We might change that someday, but my first attempt at doing so ran into a snarled mess.
<br>
<p>On Mar 21, 2011, at 12:40 PM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having a problem when i try to access to data-&gt;procs-&gt;addr[vpid] when the vpid belong to a recently killed process. I'm sending here a piece of my code. The problem is that the execution is always entering in the last if clause maybe because the information of the dead process is no longer available, or maybe i'm doing something wrong when accessing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help will be apreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         command = ORTE_DAEMON_REPORT_JOB_INFO_CMD;
</span><br>
<span class="quotelev1">&gt;                                         buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;                                             return rc;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &amp;proc-&gt;jobid, 1, ORTE_JOBID))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;                                             return rc;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt;                                         /* do the send */
</span><br>
<span class="quotelev1">&gt;                                         if (0 &gt; (rc = orte_rml.send_buffer(ORTE_PROC_MY_HNP, buffer, ORTE_RML_TAG_DAEMON, 0))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;                                             return rc;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt;                                         OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;                                         buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         orte_rml.recv_buffer(ORTE_NAME_WILDCARD, buffer, ORTE_RML_TAG_TOOL, 0);
</span><br>
<span class="quotelev1">&gt;                                         
</span><br>
<span class="quotelev1">&gt;                                         opal_dss.unpack(buffer, &amp;response, &amp;n, OPAL_INT32);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         if(response==0){
</span><br>
<span class="quotelev1">&gt;                                             OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output,&quot;NO ESCRIB&#205; AL HNP\n &quot;));
</span><br>
<span class="quotelev1">&gt;                                         }else{
</span><br>
<span class="quotelev1">&gt;                                             opal_dss.unpack(buffer, &amp;jdata, &amp;n, ORTE_JOB);
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
</span><br>
<span class="quotelev1">&gt;                                         if(procs==NULL){
</span><br>
<span class="quotelev1">&gt;                                             OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output, &quot;grave: procs==null&quot;));
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         command = ORTE_DAEMON_UPDATE_STATE_CMD;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;                                         buffer = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev1">&gt;                                         
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;                                             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         orte_proc_state_t state = ORTE_PROC_STATE_FAULT;
</span><br>
<span class="quotelev1">&gt;                                         /* Pack the faulty vpid */
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &amp;proc, 1, ORTE_NAME))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         /* Pack the state */
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &amp;state, 1, OPAL_UINT16))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                         if (NULL == procs[proc-&gt;vpid] || NULL == procs[proc-&gt;vpid]-&gt;node) {
</span><br>
<span class="quotelev1">&gt;                                             OPAL_OUTPUT_VERBOSE((5, orte_errmgr_base.output, &quot;PROBLEM: procs[proc.vpid]==null&quot;));
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9109.php">Joshua Hursey: "[OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9107.php">Hugo Meyer: "[OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9107.php">Hugo Meyer: "[OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
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
