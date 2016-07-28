<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 11:24:25 2007" -->
<!-- isoreceived="20070130162425" -->
<!-- sent="Tue, 30 Jan 2007 09:24:17 -0700" -->
<!-- isosent="20070130162417" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="FE3152B5-AEFA-4038-A030-E85467CA3BA8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E3F412.1678%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-30 11:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we need the hostfile information before job execution. We call  
<br>
setup_job() before a debug job to request a process allocation for  
<br>
the application being debugged. We use spawn() to launch a non-debug  
<br>
application. It sounds like I should just leave things the way they  
<br>
currently are.
<br>
<p>I think we've had the discussion about bproc before, but the reason  
<br>
we still support 1.0.2 is that the registry *is* populated with node  
<br>
information prior to launch. This was an agreed on feature that  
<br>
OpenMPI was to provide for PTP. I haven't been able to test 1.2 on a  
<br>
bproc machine (since I can't get it to work), but it sounds like the  
<br>
changes removed this functionality. Frankly, this makes OpenMPI less  
<br>
attractive to us, since we now have to go and get this information  
<br>
ourselves. My thinking now is that in the future we probably won't  
<br>
use OpenMPI for anything other than building and launching the  
<br>
application.
<br>
<p>Greg
<br>
<p>On Jan 29, 2007, at 6:57 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On further thought, perhaps I should be clearer. If you are saying  
</span><br>
<span class="quotelev1">&gt; that you
</span><br>
<span class="quotelev1">&gt; need to read the hostfile to display the cluster *before* the user  
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev1">&gt; submits a job for execution, then fine - go ahead and call rds.query.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm trying to communicate to you is that you need to call  
</span><br>
<span class="quotelev1">&gt; setup_job
</span><br>
<span class="quotelev1">&gt; when you are launching the resulting application. If you want, you  
</span><br>
<span class="quotelev1">&gt; could do
</span><br>
<span class="quotelev1">&gt; the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. call orte_rds.query(ORTE_JOBID_INVALID) to get your host info.  
</span><br>
<span class="quotelev1">&gt; Note that
</span><br>
<span class="quotelev1">&gt; only a hostfile will be read here - so if you are in (for example)  
</span><br>
<span class="quotelev1">&gt; a bproc
</span><br>
<span class="quotelev1">&gt; environment, you won't get any node info at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. when you are ready to launch the app, call orte_rmgr.spawn with an
</span><br>
<span class="quotelev1">&gt; attribute list that contains ORTE_RMGR_SPAWN_FLOW with a value of
</span><br>
<span class="quotelev1">&gt; ORTE_RMGR_SETUP | ORTE_RMGR_ALLOC | ORTE_RMGR_MAP |  
</span><br>
<span class="quotelev1">&gt; ORTE_RMGR_SETUP_TRIGS |
</span><br>
<span class="quotelev1">&gt; ORTE_RMGR_LAUNCH. This will tell spawn to do everything *except*  
</span><br>
<span class="quotelev1">&gt; rds.query
</span><br>
<span class="quotelev1">&gt; so you avoid re-entering the hostfile info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, if you want to see node info prior to launch on  
</span><br>
<span class="quotelev1">&gt; anything
</span><br>
<span class="quotelev1">&gt; other than a hostfile, we really don't have a way to do that right  
</span><br>
<span class="quotelev1">&gt; now. The
</span><br>
<span class="quotelev1">&gt; ORTE 2.0 design allows for it, but we haven't implemented that yet -
</span><br>
<span class="quotelev1">&gt; probably a few months away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/29/07 6:45 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/29/07 5:57 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 29, 2007, at 11:10 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1/29/07 10:20 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No, we have always called query() first, just after orte_init().
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since query() has never required a job id before, this used to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think the call was required to kick the SOH into action, but I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not sure if it was needed for any other purpose.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Query has nothing to do with the SOH - the only time you would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;need&quot; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be if you are reading a hostfile. Otherwise, it doesn't do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not calling setup_job would be risky, in my opinion...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've had this discussion before. We *need* to read the hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before calling setup_job() because we have to populate the registry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with node information. If you're saying that this is now no longer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible, then I'd respectfully ask that this functionality be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restored before you release 1.2. If there is some other way to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; achieve this, then please let me know. We've been doing this ever
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since 1.0 and in the alpha and beta versions of 1.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you don't understand what setup_job does. Setup_job has four
</span><br>
<span class="quotelev2">&gt;&gt; arguments:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (a) an array of app_context objects that contain the application  
</span><br>
<span class="quotelev2">&gt;&gt; to be
</span><br>
<span class="quotelev2">&gt;&gt; launched
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (b) the number of elements in that array
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (c) a pointer to a location where the jobid for this job is to be  
</span><br>
<span class="quotelev2">&gt;&gt; returned;
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (d) a list of attributes that allows the caller to &quot;fine-tune&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; behavior
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With that info, setup_job will:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (a) create a new jobid for your application; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (b) store the app_context info in appropriate places in the registry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And that is *all* setup_job does - it simply gets a jobid and  
</span><br>
<span class="quotelev2">&gt;&gt; initializes some
</span><br>
<span class="quotelev2">&gt;&gt; important info in the registry. It never looks at node  
</span><br>
<span class="quotelev2">&gt;&gt; information, nor does
</span><br>
<span class="quotelev2">&gt;&gt; it in any way impact node info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Calling rds.query after rmgr.setup_job is how we always do it. In  
</span><br>
<span class="quotelev2">&gt;&gt; truth, the
</span><br>
<span class="quotelev2">&gt;&gt; precise ordering of those two operations is immaterial as they  
</span><br>
<span class="quotelev2">&gt;&gt; have absolutely
</span><br>
<span class="quotelev2">&gt;&gt; nothing in common. However, we always do it in the described order  
</span><br>
<span class="quotelev2">&gt;&gt; so that
</span><br>
<span class="quotelev2">&gt;&gt; rds.query can have a valid jobid. As I said, at the moment  
</span><br>
<span class="quotelev2">&gt;&gt; rds.query doesn't
</span><br>
<span class="quotelev2">&gt;&gt; actually use the jobid, though that will change at some point in  
</span><br>
<span class="quotelev2">&gt;&gt; the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although it isn't *absolutely* necessary, I would still suggest  
</span><br>
<span class="quotelev2">&gt;&gt; that you call
</span><br>
<span class="quotelev2">&gt;&gt; rmgr.setup_job before calling rds.query to ensure that any subsequent
</span><br>
<span class="quotelev2">&gt;&gt; operations have all the info they require to function correctly.  
</span><br>
<span class="quotelev2">&gt;&gt; You can see
</span><br>
<span class="quotelev2">&gt;&gt; the progression we use in orte/mca/rmgr/urm/rmgr_urm.c - I believe  
</span><br>
<span class="quotelev2">&gt;&gt; you will
</span><br>
<span class="quotelev2">&gt;&gt; find it helpful to follow that logic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, if you want, you can simply repeatedly call  
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmgr.spawn and
</span><br>
<span class="quotelev2">&gt;&gt; use the attributes I built for you to step your way through the  
</span><br>
<span class="quotelev2">&gt;&gt; standard
</span><br>
<span class="quotelev2">&gt;&gt; launch. As you probably recall, I gave you the ability to specify  
</span><br>
<span class="quotelev2">&gt;&gt; - at a very
</span><br>
<span class="quotelev2">&gt;&gt; atomistic level - exactly which steps in the spawn process were to be
</span><br>
<span class="quotelev2">&gt;&gt; implemented at each call into rmgr.spawn. You can look at the  
</span><br>
<span class="quotelev2">&gt;&gt; referenced file
</span><br>
<span class="quotelev2">&gt;&gt; to see the attribute for each step in the procedure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are there likely to be further API changes before the release
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version? We are trying to release PTP, but I think this is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; impossible
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; until your API's stabilize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; None planned, other than what I mentioned above. If you want to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 1.2, you may need a slight phase shift, though, so you can see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the final
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please explain &quot;phase shift&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------ End of Forwarded Message
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1280.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
