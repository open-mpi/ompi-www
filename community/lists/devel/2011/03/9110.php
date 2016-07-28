<?
$subject_val = "Re: [OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 16:51:20 2011" -->
<!-- isoreceived="20110321205120" -->
<!-- sent="Mon, 21 Mar 2011 21:51:14 +0100" -->
<!-- isosent="20110321205114" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] JDATA access problem." -->
<!-- id="AANLkTikJkh+qpHzApCLuXw=szE=0Z-2cLiB4viMPC74F_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C3F0D2D-C408-446A-BD6E-C8636E41431D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-21 16:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9109.php">Joshua Hursey: "[OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph for your reply.
<br>
<p>2011/3/21 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; You should never access a pointer array's data area that way (i.e., by
</span><br>
<span class="quotelev1">&gt; index against the raw data). You really should do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs,
</span><br>
<span class="quotelev1">&gt; vpid))) {
</span><br>
<span class="quotelev1">&gt;       /* error report */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
About this, i've changed this in my code but i'm getting the same result.
<br>
Null when asking about a dead process.
<br>
<p><p><span class="quotelev1">&gt; The errmgr generally doesn't remove a process object upon failure - it just
</span><br>
<span class="quotelev1">&gt; sets its state to some appropriate value. However, depending upon where you
</span><br>
<span class="quotelev1">&gt; are trying to do this, and the history that got you down this code path, it
</span><br>
<span class="quotelev1">&gt; is possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm writing this code into the errmgr_orted.c, and it is executed when a
<br>
process fails.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, remember that if you are in a daemon, then the jdata objects are not
</span><br>
<span class="quotelev1">&gt; populated. The daemons work exclusively from the orte_local_jobdata and
</span><br>
<span class="quotelev1">&gt; orte_local_children lists, so you would have to find your process there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's why i'm asking to the hnp about the jdata using *
<br>
ORTE_DAEMON_REPORT_JOB_INFO_CMD*, i assume that he has the information about
<br>
the dead process.
<br>
<p>Any idea?
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9109.php">Joshua Hursey: "[OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>In reply to:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
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
