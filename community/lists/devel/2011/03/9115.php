<?
$subject_val = "Re: [OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 09:57:30 2011" -->
<!-- isoreceived="20110322135730" -->
<!-- sent="Tue, 22 Mar 2011 07:56:19 -0600" -->
<!-- isosent="20110322135619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] JDATA access problem." -->
<!-- id="FDC34F7A-DF6B-4E73-81A6-A243825BE6A6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=rHk8cJ_kvGk2=0K2kYK9nvsr+MFXntRaRyUgb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-22 09:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9116.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9118.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9118.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Pack the faulty vpid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, &amp;proc, 1, ORTE_NAME))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>The variable proc is apparently a pointer to orte_process_name_t. You therefore should have packed it like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Pack the faulty vpid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (rc = opal_dss.pack(buffer, proc, 1, ORTE_NAME))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>i.e.., without the &amp; in front. Accordingly, the problem was that the HNP was getting garbage for the process name, and thus finding NULL at the specified locations.
<br>
<p>Just for testing, you might want to print out the received process name to ensure your communication is correct :-)
<br>
<p><p>On Mar 22, 2011, at 5:58 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Thanks again Ralph for your reply.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There's your problem - that module is run in the daemon, where the orte_job_data pointer array isn't used. You have to use the orte_local_jobdata and orte_local_children lists instead. So once the HNP replies with the jobid, you look up the orte_odls_job_t for that job from the orte_local_jobdata list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sending now to you all the piece of code involved, at the beginning i'm doing something about what you are saying. Then having the child info i ask to the hnp for the jobdata of the child, but i'm still getting no data about the child (that is the dead process). I'm trying to get this info to send info to another orted to restart this failed process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you are trying to accomplish, so I can't give further advice. Note that daemons have limited knowledge of application processes that are not their own immediate children. What little they know regarding processes other than their own is stored in the nidmap/pidmap arrays - limited to location, local rank, and node rank. They have no storage currently allocated for things like the state of a non-local process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to restart the process in another node, that's why i'm needing the jobdata. So, the hnp cannot do something like:
</span><br>
<span class="quotelev1">&gt; jdata = orte_get_job_data_object(proc.jobid))  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the proc doesn't belong to him??
</span><br>
<span class="quotelev1">&gt; So where i can obtain this information, because i'm asumming that i cannot ask about the dead process to his daemon (because i assume that the daemon also is dead, but that's not true). I was supossing that in the HNP i could execute the sentence above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching all the code involving the described situation. But i have made some changes after my first email, but what i'm trying to do is basically the same. In the line 23 of the orted_comm.c, that i'm sending, i'm always getting NULL as a result, so i can't obtain the jdata.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot again for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;orted_comm.c&gt;&lt;errmgr_orted.c&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9115/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9116.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9118.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9118.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
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
