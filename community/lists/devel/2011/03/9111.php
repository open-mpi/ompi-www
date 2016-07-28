<?
$subject_val = "Re: [OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 17:13:28 2011" -->
<!-- isoreceived="20110321211328" -->
<!-- sent="Mon, 21 Mar 2011 15:13:19 -0600" -->
<!-- isosent="20110321211319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] JDATA access problem." -->
<!-- id="2F2ADC98-E9F3-43BF-86FB-B3FEA83B225D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikJkh+qpHzApCLuXw=szE=0Z-2cLiB4viMPC74F_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-21 17:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2011, at 2:51 PM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/3/21 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; You should never access a pointer array's data area that way (i.e., by index against the raw data). You really should do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, vpid))) {
</span><br>
<span class="quotelev1">&gt;       /* error report */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About this, i've changed this in my code but i'm getting the same result. Null when asking about a dead process.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The errmgr generally doesn't remove a process object upon failure - it just sets its state to some appropriate value. However, depending upon where you are trying to do this, and the history that got you down this code path, it is possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm writing this code into the errmgr_orted.c, and it is executed when a process fails. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>There's your problem - that module is run in the daemon, where the orte_job_data pointer array isn't used. You have to use the orte_local_jobdata and orte_local_children lists instead. So once the HNP replies with the jobid, you look up the orte_odls_job_t for that job from the orte_local_jobdata list.
<br>
<p>If you want to find a particular proc, though, you would look under orte_local_children - search the list for a child whose jobid and vpid both match.
<br>
<p>Note that you will not find that child process -unless- the child is under that daemon.
<br>
<p>I'm not sure what you are trying to accomplish, so I can't give further advice. Note that daemons have limited knowledge of application processes that are not their own immediate children. What little they know regarding processes other than their own is stored in the nidmap/pidmap arrays - limited to location, local rank, and node rank. They have no storage currently allocated for things like the state of a non-local process.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, remember that if you are in a daemon, then the jdata objects are not populated. The daemons work exclusively from the orte_local_jobdata and orte_local_children lists, so you would have to find your process there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's why i'm asking to the hnp about the jdata using ORTE_DAEMON_REPORT_JOB_INFO_CMD, i assume that he has the information about the dead process.
</span><br>
<p>Only after the daemon reports it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
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
