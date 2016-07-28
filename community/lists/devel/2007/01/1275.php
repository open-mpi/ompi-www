<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 13:10:05 2007" -->
<!-- isoreceived="20070129181005" -->
<!-- sent="Mon, 29 Jan 2007 11:10:01 -0700" -->
<!-- isosent="20070129181001" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="C1E38689.73ED%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BD5EC6BA-EEEF-4FD9-BB60-EB029411AB80_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-29 13:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/07 10:20 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2007, at 6:47 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/27/07 9:37 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are two more interfaces that have changed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. orte_rds.query() now takes a job id, whereas in 1.2b1 it didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; take any arguments. I seem to remember that I call this to kick orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into action, but I'm not sure of the implications of not calling it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any case, I don't have a job id when I call it, so what do I pass
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get the old behavior?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For now, you can just use ORTE_JOBID_INVALID (defined in
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/ns/ns_types.h).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, your question raises a flag. You should be calling
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmgr.setup_job before you call the RDS, and that function
</span><br>
<span class="quotelev2">&gt;&gt; returns the
</span><br>
<span class="quotelev2">&gt;&gt; jobid for your job. Failing to call setup_job first may cause other
</span><br>
<span class="quotelev2">&gt;&gt; parts of
</span><br>
<span class="quotelev2">&gt;&gt; the code base to fail as they are expecting certain data to be
</span><br>
<span class="quotelev2">&gt;&gt; setup in the
</span><br>
<span class="quotelev2">&gt;&gt; registry by setup_job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you do call setup_job first, then just pass the returned jobid
</span><br>
<span class="quotelev2">&gt;&gt; along to
</span><br>
<span class="quotelev2">&gt;&gt; rds.query.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, we have always called query() first, just after orte_init().
</span><br>
<span class="quotelev1">&gt; Since query() has never required a job id before, this used to work.
</span><br>
<span class="quotelev1">&gt; I think the call was required to kick the SOH into action, but I'm
</span><br>
<span class="quotelev1">&gt; not sure if it was needed for any other purpose.
</span><br>
<p>Query has nothing to do with the SOH - the only time you would &quot;need&quot; it
<br>
would be if you are reading a hostfile. Otherwise, it doesn't do anything at
<br>
the moment.
<br>
<p><p>Not calling setup_job would be risky, in my opinion...
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. orte_pls.terminate_job() now takes a list of attributes in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addition to a job id. What are the attributes for, and what happens
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if I pass a NULL here? Do I  need to crate an empty attribute list?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can always pass a NULL to any function looking for attributes -
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; system knows how to handle that situation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What you should pass here depends upon what you are trying to do.
</span><br>
<span class="quotelev2">&gt;&gt; If you
</span><br>
<span class="quotelev2">&gt;&gt; just want to terminate a specific job, then you can just pass a NULL.
</span><br>
<span class="quotelev2">&gt;&gt; However, if you want to terminate the specified job AND any
</span><br>
<span class="quotelev2">&gt;&gt; &quot;children&quot; that
</span><br>
<span class="quotelev2">&gt;&gt; were dynamically spawned by that job, then you need to pass the
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NS_INCLUDE_DESCENDANTS attribute - something like the
</span><br>
<span class="quotelev2">&gt;&gt; following code
</span><br>
<span class="quotelev2">&gt;&gt; snippet (pulled from orterun) would work:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/pls/pls.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/rmgr/rmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/ns/ns_types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     opal_list_t attrs;
</span><br>
<span class="quotelev2">&gt;&gt;     opal_list_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_CONSTRUCT(&amp;attrs, opal_list_t);
</span><br>
<span class="quotelev2">&gt;&gt;     orte_rmgr.add_attribute(&amp;attrs, ORTE_NS_INCLUDE_DESCENDANTS,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_UNDEF,
</span><br>
<span class="quotelev2">&gt;&gt; NULL, ORTE_RMGR_ATTR_OVERRIDE);
</span><br>
<span class="quotelev2">&gt;&gt;     ret = orte_pls.terminate_job(jobid, &amp;orte_abort_timeout, &amp;attrs);
</span><br>
<span class="quotelev2">&gt;&gt;     while (NULL != (item = opal_list_remove_first(&amp;attrs)))
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_DESTRUCT(&amp;attrs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please note that the orte_pls.terminate_job API in 1.2 will undergo
</span><br>
<span class="quotelev2">&gt;&gt; a change
</span><br>
<span class="quotelev2">&gt;&gt; in the next few days (it already is changed in the trunk). The change,
</span><br>
<span class="quotelev2">&gt;&gt; included in the code snippet above, adds a timeout capability to
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; function &quot;give up&quot; if the job doesn't terminate within the
</span><br>
<span class="quotelev2">&gt;&gt; specified time.
</span><br>
<span class="quotelev2">&gt;&gt; The parameter given above references the orte-wide default value
</span><br>
<span class="quotelev2">&gt;&gt; (adjustable
</span><br>
<span class="quotelev2">&gt;&gt; via MCA param), but you can give it anything you like - a NULL for the
</span><br>
<span class="quotelev2">&gt;&gt; timeout param means don't timeout so we'll try until you order us
</span><br>
<span class="quotelev2">&gt;&gt; to quit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this going to be in &quot;1.2b4&quot;, or some other version? The previous
</span><br>
<span class="quotelev1">&gt; API changes mean that PTP will no longer work with pre-1.2b3
</span><br>
<span class="quotelev1">&gt; versions. It sounds like this is going to cause a similar issue.
</span><br>
<p>I don't know if the Open MPI folks plan on rolling another 1.2 beta or just
<br>
do the full release. If they do roll another beta, I would expect these
<br>
changes to be in it, though that depends on their timing (not in my hands).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there likely to be further API changes before the release
</span><br>
<span class="quotelev1">&gt; version? We are trying to release PTP, but I think this is impossible
</span><br>
<span class="quotelev1">&gt; until your API's stabilize.
</span><br>
<p>None planned, other than what I mentioned above. If you want to support Open
<br>
MPI 1.2, you may need a slight phase shift, though, so you can see the final
<br>
release.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What about orte_ns.free_name()?
</span><br>
<p>Just do a &quot;free&quot; - the name structures are not OPAL objects, so there is no
<br>
need for a special API to free them.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1276.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
