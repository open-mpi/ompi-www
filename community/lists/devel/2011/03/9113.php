<?
$subject_val = "Re: [OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 07:58:39 2011" -->
<!-- isoreceived="20110322115839" -->
<!-- sent="Tue, 22 Mar 2011 12:58:33 +0100" -->
<!-- isosent="20110322115833" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] JDATA access problem." -->
<!-- id="AANLkTi=rHk8cJ_kvGk2=0K2kYK9nvsr+MFXntRaRyUgb_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2F2ADC98-E9F3-43BF-86FB-B3FEA83B225D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-22 07:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again Ralph for your reply.
<br>
<p><p><span class="quotelev1">&gt; There's your problem - that module is run in the daemon, where the
</span><br>
<span class="quotelev1">&gt; orte_job_data pointer array isn't used. You have to use the
</span><br>
<span class="quotelev1">&gt; orte_local_jobdata and orte_local_children lists instead. So once the HNP
</span><br>
<span class="quotelev1">&gt; replies with the jobid, you look up the orte_odls_job_t for that job from
</span><br>
<span class="quotelev1">&gt; the orte_local_jobdata list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm sending now to you all the piece of code involved, at the beginning i'm
<br>
doing something about what you are saying. Then having the child info i ask
<br>
to the hnp for the jobdata of the child, but i'm still getting no data about
<br>
the child (that is the dead process). I'm trying to get this info to send
<br>
info to another orted to restart this failed process.
<br>
<p><p><span class="quotelev1">&gt; I'm not sure what you are trying to accomplish, so I can't give further
</span><br>
<span class="quotelev1">&gt; advice. Note that daemons have limited knowledge of application processes
</span><br>
<span class="quotelev1">&gt; that are not their own immediate children. What little they know regarding
</span><br>
<span class="quotelev1">&gt; processes other than their own is stored in the nidmap/pidmap arrays -
</span><br>
<span class="quotelev1">&gt; limited to location, local rank, and node rank. They have no storage
</span><br>
<span class="quotelev1">&gt; currently allocated for things like the state of a non-local process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I want to restart the process in another node, that's why i'm needing the
<br>
jobdata. So, the hnp cannot do something like:
<br>
*jdata = orte_get_job_data_object(proc.jobid))*
<br>
<p>when the proc doesn't belong to him??
<br>
So where i can obtain this information, because i'm asumming that i cannot
<br>
ask about the dead process to his daemon (because i assume that the daemon
<br>
also is dead, but that's not true). I was supossing that in the HNP i could
<br>
execute the sentence above.
<br>
<p>I'm attaching all the code involving the described situation. But i have
<br>
made some changes after my first email, but what i'm trying to do is
<br>
basically the same. In the line 23 of the orted_comm.c, that i'm sending,
<br>
i'm always getting NULL as a result, so i can't obtain the jdata.
<br>
<p>Thanks a lot again for your help.
<br>
<p>Best Regards.
<br>
<p>Hugo Meyer
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9113/orted_comm.c">orted_comm.c</a>
</ul>
<!-- attachment="orted_comm.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9113/errmgr_orted.c">errmgr_orted.c</a>
</ul>
<!-- attachment="errmgr_orted.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Previous message:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9115.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
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
