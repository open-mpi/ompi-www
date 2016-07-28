<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 13:37:31 2007" -->
<!-- isoreceived="20070130183731" -->
<!-- sent="Tue, 30 Jan 2007 11:37:23 -0700" -->
<!-- isosent="20070130183723" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="7F7BC4CE-DEBF-4C13-8DED-E0891BB7AF8C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E4C2CE.7473%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 13:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/02/1282.php">Greg Watson: "[OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Previous message:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2007, at 9:39 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/30/07 9:24 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we need the hostfile information before job execution. We call
</span><br>
<span class="quotelev2">&gt;&gt; setup_job() before a debug job to request a process allocation for
</span><br>
<span class="quotelev2">&gt;&gt; the application being debugged. We use spawn() to launch a non-debug
</span><br>
<span class="quotelev2">&gt;&gt; application. It sounds like I should just leave things the way they
</span><br>
<span class="quotelev2">&gt;&gt; currently are.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we've had the discussion about bproc before, but the reason
</span><br>
<span class="quotelev2">&gt;&gt; we still support 1.0.2 is that the registry *is* populated with node
</span><br>
<span class="quotelev2">&gt;&gt; information prior to launch. This was an agreed on feature that
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI was to provide for PTP. I haven't been able to test 1.2 on a
</span><br>
<span class="quotelev2">&gt;&gt; bproc machine (since I can't get it to work), but it sounds like the
</span><br>
<span class="quotelev2">&gt;&gt; changes removed this functionality. Frankly, this makes OpenMPI less
</span><br>
<span class="quotelev2">&gt;&gt; attractive to us, since we now have to go and get this information
</span><br>
<span class="quotelev2">&gt;&gt; ourselves. My thinking now is that in the future we probably won't
</span><br>
<span class="quotelev2">&gt;&gt; use OpenMPI for anything other than building and launching the
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Decisions such as that, of course, are up to you. Meantime, take a  
</span><br>
<span class="quotelev1">&gt; gander at
</span><br>
<span class="quotelev1">&gt; the data in ORTE_BPROC_NODE_SEGMENT within the registry. I tried to  
</span><br>
<span class="quotelev1">&gt; preserve
</span><br>
<span class="quotelev1">&gt; some of what was being done, even though the method used to  
</span><br>
<span class="quotelev1">&gt; populate the
</span><br>
<span class="quotelev1">&gt; bproc data was problematic and not really correct. You may find  
</span><br>
<span class="quotelev1">&gt; that the
</span><br>
<span class="quotelev1">&gt; info stuck in there meets your needs for the GUI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point, though, is that only bproc and hostfile would be  
</span><br>
<span class="quotelev1">&gt; supported under
</span><br>
<span class="quotelev1">&gt; the best of current conditions, and we only get that by  
</span><br>
<span class="quotelev1">&gt; circumscribing the
</span><br>
<span class="quotelev1">&gt; functional intent of several key frameworks. The general ability  
</span><br>
<span class="quotelev1">&gt; (across all
</span><br>
<span class="quotelev1">&gt; systems) to obtain the node info prior to launch isn't built into  
</span><br>
<span class="quotelev1">&gt; the code
</span><br>
<span class="quotelev1">&gt; at the moment, but is planned for ORTE 2.0 (and was built in a  
</span><br>
<span class="quotelev1">&gt; separate
</span><br>
<span class="quotelev1">&gt; prototype branch). For reasons totally beyond my control, the  
</span><br>
<span class="quotelev1">&gt; prototype ORTE
</span><br>
<span class="quotelev1">&gt; 2.0 code has *not* been incorporated into Open MPI yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry...I like that no more than you... :-/
</span><br>
<p>I suppose it is our decision in the sense that we could decide not to  
<br>
provide the functionality and hope that it is implemented in OpenMPI  
<br>
sometime in the future. If we have to implement something ourselves  
<br>
to provide this functionality, then we may as well do it in a generic  
<br>
way that will work with any runtime systems.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/02/1282.php">Greg Watson: "[OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Previous message:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
