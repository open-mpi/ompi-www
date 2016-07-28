<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 11:39:35 2007" -->
<!-- isoreceived="20070130163935" -->
<!-- sent="Tue, 30 Jan 2007 09:39:26 -0700" -->
<!-- isosent="20070130163926" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="C1E4C2CE.7473%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FE3152B5-AEFA-4038-A030-E85467CA3BA8_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 11:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/30/07 9:24 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, we need the hostfile information before job execution. We call
</span><br>
<span class="quotelev1">&gt; setup_job() before a debug job to request a process allocation for
</span><br>
<span class="quotelev1">&gt; the application being debugged. We use spawn() to launch a non-debug
</span><br>
<span class="quotelev1">&gt; application. It sounds like I should just leave things the way they
</span><br>
<span class="quotelev1">&gt; currently are.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we've had the discussion about bproc before, but the reason
</span><br>
<span class="quotelev1">&gt; we still support 1.0.2 is that the registry *is* populated with node
</span><br>
<span class="quotelev1">&gt; information prior to launch. This was an agreed on feature that
</span><br>
<span class="quotelev1">&gt; OpenMPI was to provide for PTP. I haven't been able to test 1.2 on a
</span><br>
<span class="quotelev1">&gt; bproc machine (since I can't get it to work), but it sounds like the
</span><br>
<span class="quotelev1">&gt; changes removed this functionality. Frankly, this makes OpenMPI less
</span><br>
<span class="quotelev1">&gt; attractive to us, since we now have to go and get this information
</span><br>
<span class="quotelev1">&gt; ourselves. My thinking now is that in the future we probably won't
</span><br>
<span class="quotelev1">&gt; use OpenMPI for anything other than building and launching the
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<p>Decisions such as that, of course, are up to you. Meantime, take a gander at
<br>
the data in ORTE_BPROC_NODE_SEGMENT within the registry. I tried to preserve
<br>
some of what was being done, even though the method used to populate the
<br>
bproc data was problematic and not really correct. You may find that the
<br>
info stuck in there meets your needs for the GUI.
<br>
<p>My point, though, is that only bproc and hostfile would be supported under
<br>
the best of current conditions, and we only get that by circumscribing the
<br>
functional intent of several key frameworks. The general ability (across all
<br>
systems) to obtain the node info prior to launch isn't built into the code
<br>
at the moment, but is planned for ORTE 2.0 (and was built in a separate
<br>
prototype branch). For reasons totally beyond my control, the prototype ORTE
<br>
2.0 code has *not* been incorporated into Open MPI yet.
<br>
<p>Sorry...I like that no more than you... :-/
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2007, at 6:57 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On further thought, perhaps I should be clearer. If you are saying
</span><br>
<span class="quotelev2">&gt;&gt; that you
</span><br>
<span class="quotelev2">&gt;&gt; need to read the hostfile to display the cluster *before* the user
</span><br>
<span class="quotelev2">&gt;&gt; actually
</span><br>
<span class="quotelev2">&gt;&gt; submits a job for execution, then fine - go ahead and call rds.query.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I'm trying to communicate to you is that you need to call
</span><br>
<span class="quotelev2">&gt;&gt; setup_job
</span><br>
<span class="quotelev2">&gt;&gt; when you are launching the resulting application. If you want, you
</span><br>
<span class="quotelev2">&gt;&gt; could do
</span><br>
<span class="quotelev2">&gt;&gt; the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. call orte_rds.query(ORTE_JOBID_INVALID) to get your host info.
</span><br>
<span class="quotelev2">&gt;&gt; Note that
</span><br>
<span class="quotelev2">&gt;&gt; only a hostfile will be read here - so if you are in (for example)
</span><br>
<span class="quotelev2">&gt;&gt; a bproc
</span><br>
<span class="quotelev2">&gt;&gt; environment, you won't get any node info at this point.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. when you are ready to launch the app, call orte_rmgr.spawn with an
</span><br>
<span class="quotelev2">&gt;&gt; attribute list that contains ORTE_RMGR_SPAWN_FLOW with a value of
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RMGR_SETUP | ORTE_RMGR_ALLOC | ORTE_RMGR_MAP |
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RMGR_SETUP_TRIGS |
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RMGR_LAUNCH. This will tell spawn to do everything *except*
</span><br>
<span class="quotelev2">&gt;&gt; rds.query
</span><br>
<span class="quotelev2">&gt;&gt; so you avoid re-entering the hostfile info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, if you want to see node info prior to launch on
</span><br>
<span class="quotelev2">&gt;&gt; anything
</span><br>
<span class="quotelev2">&gt;&gt; other than a hostfile, we really don't have a way to do that right
</span><br>
<span class="quotelev2">&gt;&gt; now. The
</span><br>
<span class="quotelev2">&gt;&gt; ORTE 2.0 design allows for it, but we haven't implemented that yet -
</span><br>
<span class="quotelev2">&gt;&gt; probably a few months away.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/29/07 6:45 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/29/07 5:57 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 29, 2007, at 11:10 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 1/29/07 10:20 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; No, we have always called query() first, just after orte_init().
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Since query() has never required a job id before, this used to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; work.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think the call was required to kick the SOH into action, but I'm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not sure if it was needed for any other purpose.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Query has nothing to do with the SOH - the only time you would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;need&quot; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be if you are reading a hostfile. Otherwise, it doesn't do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the moment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not calling setup_job would be risky, in my opinion...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've had this discussion before. We *need* to read the hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before calling setup_job() because we have to populate the registry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with node information. If you're saying that this is now no longer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible, then I'd respectfully ask that this functionality be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restored before you release 1.2. If there is some other way to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; achieve this, then please let me know. We've been doing this ever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; since 1.0 and in the alpha and beta versions of 1.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think you don't understand what setup_job does. Setup_job has four
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arguments:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (a) an array of app_context objects that contain the application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (b) the number of elements in that array
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (c) a pointer to a location where the jobid for this job is to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returned;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (d) a list of attributes that allows the caller to &quot;fine-tune&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With that info, setup_job will:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (a) create a new jobid for your application; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (b) store the app_context info in appropriate places in the registry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And that is *all* setup_job does - it simply gets a jobid and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initializes some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important info in the registry. It never looks at node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information, nor does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it in any way impact node info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Calling rds.query after rmgr.setup_job is how we always do it. In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; truth, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; precise ordering of those two operations is immaterial as they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have absolutely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nothing in common. However, we always do it in the described order
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rds.query can have a valid jobid. As I said, at the moment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rds.query doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually use the jobid, though that will change at some point in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although it isn't *absolutely* necessary, I would still suggest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmgr.setup_job before calling rds.query to ensure that any subsequent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations have all the info they require to function correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the progression we use in orte/mca/rmgr/urm/rmgr_urm.c - I believe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find it helpful to follow that logic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, if you want, you can simply repeatedly call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rmgr.spawn and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use the attributes I built for you to step your way through the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch. As you probably recall, I gave you the ability to specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - at a very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomistic level - exactly which steps in the spawn process were to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implemented at each call into rmgr.spawn. You can look at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; referenced file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to see the attribute for each step in the procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are there likely to be further API changes before the release
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; version? We are trying to release PTP, but I think this is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; impossible
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; until your API's stabilize.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; None planned, other than what I mentioned above. If you want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support Open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 1.2, you may need a slight phase shift, though, so you can see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the final
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; release.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please explain &quot;phase shift&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------ End of Forwarded Message
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1281.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
