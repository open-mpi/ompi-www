<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:57:28 2007" -->
<!-- isoreceived="20070130015728" -->
<!-- sent="Mon, 29 Jan 2007 18:57:22 -0700" -->
<!-- isosent="20070130015722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="C1E3F412.1678%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E3F3DD.1674%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 20:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Maybe in reply to:</strong> <a href="1270.php">Greg Watson: "[OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On further thought, perhaps I should be clearer. If you are saying that you
<br>
need to read the hostfile to display the cluster *before* the user actually
<br>
submits a job for execution, then fine - go ahead and call rds.query.
<br>
<p>What I'm trying to communicate to you is that you need to call setup_job
<br>
when you are launching the resulting application. If you want, you could do
<br>
the following:
<br>
<p>1. call orte_rds.query(ORTE_JOBID_INVALID) to get your host info. Note that
<br>
only a hostfile will be read here - so if you are in (for example) a bproc
<br>
environment, you won't get any node info at this point.
<br>
<p>2. when you are ready to launch the app, call orte_rmgr.spawn with an
<br>
attribute list that contains ORTE_RMGR_SPAWN_FLOW with a value of
<br>
ORTE_RMGR_SETUP | ORTE_RMGR_ALLOC | ORTE_RMGR_MAP | ORTE_RMGR_SETUP_TRIGS |
<br>
ORTE_RMGR_LAUNCH. This will tell spawn to do everything *except* rds.query
<br>
so you avoid re-entering the hostfile info.
<br>
<p>Unfortunately, if you want to see node info prior to launch on anything
<br>
other than a hostfile, we really don't have a way to do that right now. The
<br>
ORTE 2.0 design allows for it, but we haven't implemented that yet -
<br>
probably a few months away.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 1/29/07 6:45 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/29/07 5:57 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2007, at 11:10 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/29/07 10:20 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, we have always called query() first, just after orte_init().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since query() has never required a job id before, this used to work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the call was required to kick the SOH into action, but I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not sure if it was needed for any other purpose.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Query has nothing to do with the SOH - the only time you would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;need&quot; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be if you are reading a hostfile. Otherwise, it doesn't do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not calling setup_job would be risky, in my opinion...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've had this discussion before. We *need* to read the hostfile
</span><br>
<span class="quotelev2">&gt;&gt; before calling setup_job() because we have to populate the registry
</span><br>
<span class="quotelev2">&gt;&gt; with node information. If you're saying that this is now no longer
</span><br>
<span class="quotelev2">&gt;&gt; possible, then I'd respectfully ask that this functionality be
</span><br>
<span class="quotelev2">&gt;&gt; restored before you release 1.2. If there is some other way to
</span><br>
<span class="quotelev2">&gt;&gt; achieve this, then please let me know. We've been doing this ever
</span><br>
<span class="quotelev2">&gt;&gt; since 1.0 and in the alpha and beta versions of 1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you don't understand what setup_job does. Setup_job has four
</span><br>
<span class="quotelev1">&gt; arguments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) an array of app_context objects that contain the application to be
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) the number of elements in that array
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (c) a pointer to a location where the jobid for this job is to be returned;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (d) a list of attributes that allows the caller to &quot;fine-tune&quot; behavior
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With that info, setup_job will:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) create a new jobid for your application; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) store the app_context info in appropriate places in the registry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And that is *all* setup_job does - it simply gets a jobid and initializes some
</span><br>
<span class="quotelev1">&gt; important info in the registry. It never looks at node information, nor does
</span><br>
<span class="quotelev1">&gt; it in any way impact node info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Calling rds.query after rmgr.setup_job is how we always do it. In truth, the
</span><br>
<span class="quotelev1">&gt; precise ordering of those two operations is immaterial as they have absolutely
</span><br>
<span class="quotelev1">&gt; nothing in common. However, we always do it in the described order so that
</span><br>
<span class="quotelev1">&gt; rds.query can have a valid jobid. As I said, at the moment rds.query doesn't
</span><br>
<span class="quotelev1">&gt; actually use the jobid, though that will change at some point in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although it isn't *absolutely* necessary, I would still suggest that you call
</span><br>
<span class="quotelev1">&gt; rmgr.setup_job before calling rds.query to ensure that any subsequent
</span><br>
<span class="quotelev1">&gt; operations have all the info they require to function correctly. You can see
</span><br>
<span class="quotelev1">&gt; the progression we use in orte/mca/rmgr/urm/rmgr_urm.c - I believe you will
</span><br>
<span class="quotelev1">&gt; find it helpful to follow that logic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, if you want, you can simply repeatedly call orte_rmgr.spawn and
</span><br>
<span class="quotelev1">&gt; use the attributes I built for you to step your way through the standard
</span><br>
<span class="quotelev1">&gt; launch. As you probably recall, I gave you the ability to specify - at a very
</span><br>
<span class="quotelev1">&gt; atomistic level - exactly which steps in the spawn process were to be
</span><br>
<span class="quotelev1">&gt; implemented at each call into rmgr.spawn. You can look at the referenced file
</span><br>
<span class="quotelev1">&gt; to see the attribute for each step in the procedure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are there likely to be further API changes before the release
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version? We are trying to release PTP, but I think this is impossible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; until your API's stabilize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None planned, other than what I mentioned above. If you want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1.2, you may need a slight phase shift, though, so you can see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the final
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please explain &quot;phase shift&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>------ End of Forwarded Message
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Maybe in reply to:</strong> <a href="1270.php">Greg Watson: "[OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1279.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
