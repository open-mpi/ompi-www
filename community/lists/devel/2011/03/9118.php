<?
$subject_val = "Re: [OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 11:15:30 2011" -->
<!-- isoreceived="20110322151530" -->
<!-- sent="Tue, 22 Mar 2011 16:15:12 +0100" -->
<!-- isosent="20110322151512" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] JDATA access problem." -->
<!-- id="AANLkTikfNuCmSg1Gnx8-9HwZcajNG5jpccZw1PsuOjGT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDC34F7A-DF6B-4E73-81A6-A243825BE6A6_at_open-mpi.org" -->
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
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 11:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9119.php">Ralph Castain: "[OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Previous message:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.
<br>
<p>That was the problem Ralph. Again, thanks a lot for your help, it was a
<br>
silly mistake of mine :).
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p>2011/3/22 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; The problem is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       /* Pack the faulty vpid */
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc =
</span><br>
<span class="quotelev1">&gt; opal_dss.pack(buffer, &amp;proc, 1, ORTE_NAME))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The variable proc is apparently a pointer to orte_process_name_t. You
</span><br>
<span class="quotelev1">&gt; therefore should have packed it like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                         /* Pack the faulty vpid */
</span><br>
<span class="quotelev1">&gt;                                         if (ORTE_SUCCESS != (rc =
</span><br>
<span class="quotelev1">&gt; opal_dss.pack(buffer, proc, 1, ORTE_NAME))) {
</span><br>
<span class="quotelev1">&gt;                                             ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;                                             goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;                                         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e.., without the &amp; in front. Accordingly, the problem was that the HNP
</span><br>
<span class="quotelev1">&gt; was getting garbage for the process name, and thus finding NULL at the
</span><br>
<span class="quotelev1">&gt; specified locations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just for testing, you might want to print out the received process name to
</span><br>
<span class="quotelev1">&gt; ensure your communication is correct :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2011, at 5:58 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again Ralph for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There's your problem - that module is run in the daemon, where the
</span><br>
<span class="quotelev2">&gt;&gt; orte_job_data pointer array isn't used. You have to use the
</span><br>
<span class="quotelev2">&gt;&gt; orte_local_jobdata and orte_local_children lists instead. So once the HNP
</span><br>
<span class="quotelev2">&gt;&gt; replies with the jobid, you look up the orte_odls_job_t for that job from
</span><br>
<span class="quotelev2">&gt;&gt; the orte_local_jobdata list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sending now to you all the piece of code involved, at the beginning i'm
</span><br>
<span class="quotelev1">&gt; doing something about what you are saying. Then having the child info i ask
</span><br>
<span class="quotelev1">&gt; to the hnp for the jobdata of the child, but i'm still getting no data about
</span><br>
<span class="quotelev1">&gt; the child (that is the dead process). I'm trying to get this info to send
</span><br>
<span class="quotelev1">&gt; info to another orted to restart this failed process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you are trying to accomplish, so I can't give further
</span><br>
<span class="quotelev2">&gt;&gt; advice. Note that daemons have limited knowledge of application processes
</span><br>
<span class="quotelev2">&gt;&gt; that are not their own immediate children. What little they know regarding
</span><br>
<span class="quotelev2">&gt;&gt; processes other than their own is stored in the nidmap/pidmap arrays -
</span><br>
<span class="quotelev2">&gt;&gt; limited to location, local rank, and node rank. They have no storage
</span><br>
<span class="quotelev2">&gt;&gt; currently allocated for things like the state of a non-local process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to restart the process in another node, that's why i'm needing the
</span><br>
<span class="quotelev1">&gt; jobdata. So, the hnp cannot do something like:
</span><br>
<span class="quotelev1">&gt; *jdata = orte_get_job_data_object(proc.jobid))*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when the proc doesn't belong to him??
</span><br>
<span class="quotelev1">&gt; So where i can obtain this information, because i'm asumming that i cannot
</span><br>
<span class="quotelev1">&gt; ask about the dead process to his daemon (because i assume that the daemon
</span><br>
<span class="quotelev1">&gt; also is dead, but that's not true). I was supossing that in the HNP i could
</span><br>
<span class="quotelev1">&gt; execute the sentence above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attaching all the code involving the described situation. But i have
</span><br>
<span class="quotelev1">&gt; made some changes after my first email, but what i'm trying to do is
</span><br>
<span class="quotelev1">&gt; basically the same. In the line 23 of the orted_comm.c, that i'm sending,
</span><br>
<span class="quotelev1">&gt; i'm always getting NULL as a result, so i can't obtain the jdata.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9119.php">Ralph Castain: "[OMPI devel] Multicast grpcomm now available"</a>
<li><strong>Previous message:</strong> <a href="9117.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
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
