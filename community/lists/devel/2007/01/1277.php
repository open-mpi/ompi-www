<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:45:23 2007" -->
<!-- isoreceived="20070130014523" -->
<!-- sent="Mon, 29 Jan 2007 18:45:16 -0700" -->
<!-- isosent="20070130014516" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="C1E3F13C.166B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EAFF12E9-7223-45A6-80E4-C9CF8200560E_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-29 20:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/07 5:57 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2007, at 11:10 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/29/07 10:20 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, we have always called query() first, just after orte_init().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since query() has never required a job id before, this used to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the call was required to kick the SOH into action, but I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not sure if it was needed for any other purpose.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Query has nothing to do with the SOH - the only time you would
</span><br>
<span class="quotelev2">&gt;&gt; &quot;need&quot; it
</span><br>
<span class="quotelev2">&gt;&gt; would be if you are reading a hostfile. Otherwise, it doesn't do
</span><br>
<span class="quotelev2">&gt;&gt; anything at
</span><br>
<span class="quotelev2">&gt;&gt; the moment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not calling setup_job would be risky, in my opinion...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've had this discussion before. We *need* to read the hostfile
</span><br>
<span class="quotelev1">&gt; before calling setup_job() because we have to populate the registry
</span><br>
<span class="quotelev1">&gt; with node information. If you're saying that this is now no longer
</span><br>
<span class="quotelev1">&gt; possible, then I'd respectfully ask that this functionality be
</span><br>
<span class="quotelev1">&gt; restored before you release 1.2. If there is some other way to
</span><br>
<span class="quotelev1">&gt; achieve this, then please let me know. We've been doing this ever
</span><br>
<span class="quotelev1">&gt; since 1.0 and in the alpha and beta versions of 1.2.
</span><br>
<p>I think you don't understand what setup_job does. Setup_job has four
<br>
arguments:
<br>
<p>(a) an array of app_context objects that contain the application to be
<br>
launched
<br>
<p>(b) the number of elements in that array
<br>
<p>(c) a pointer to a location where the jobid for this job is to be returned;
<br>
and
<br>
<p>(d) a list of attributes that allows the caller to &quot;fine-tune&quot; behavior
<br>
<p>With that info, setup_job will:
<br>
<p>(a) create a new jobid for your application; and
<br>
<p>(b) store the app_context info in appropriate places in the registry
<br>
<p>And that is *all* setup_job does - it simply gets a jobid and initializes
<br>
some important info in the registry. It never looks at node information, nor
<br>
does it in any way impact node info.
<br>
<p>Calling rds.query after rmgr.setup_job is how we always do it. In truth, the
<br>
precise ordering of those two operations is immaterial as they have
<br>
absolutely nothing in common. However, we always do it in the described
<br>
order so that rds.query can have a valid jobid. As I said, at the moment
<br>
rds.query doesn't actually use the jobid, though that will change at some
<br>
point in the future.
<br>
<p>Although it isn't *absolutely* necessary, I would still suggest that you
<br>
call rmgr.setup_job before calling rds.query to ensure that any subsequent
<br>
operations have all the info they require to function correctly. You can see
<br>
the progression we use in orte/mca/rmgr/urm/rmgr_urm.c - I believe you will
<br>
find it helpful to follow that logic.
<br>
<p>Alternatively, if you want, you can simply repeatedly call orte_rmgr.spawn
<br>
and use the attributes I built for you to step your way through the standard
<br>
launch. As you probably recall, I gave you the ability to specify - at a
<br>
very atomistic level - exactly which steps in the spawn process were to be
<br>
implemented at each call into rmgr.spawn. You can look at the referenced
<br>
file to see the attribute for each step in the procedure.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there likely to be further API changes before the release
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version? We are trying to release PTP, but I think this is impossible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until your API's stabilize.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; None planned, other than what I mentioned above. If you want to
</span><br>
<span class="quotelev2">&gt;&gt; support Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1.2, you may need a slight phase shift, though, so you can see
</span><br>
<span class="quotelev2">&gt;&gt; the final
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please explain &quot;phase shift&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1278.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
