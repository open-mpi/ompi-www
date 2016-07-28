<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 12:20:31 2007" -->
<!-- isoreceived="20070129172031" -->
<!-- sent="Mon, 29 Jan 2007 09:20:27 -0800" -->
<!-- isosent="20070129172027" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="BD5EC6BA-EEEF-4FD9-BB60-EB029411AB80_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E35719.73CC%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-29 12:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2007, at 6:47 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/27/07 9:37 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are two more interfaces that have changed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. orte_rds.query() now takes a job id, whereas in 1.2b1 it didn't
</span><br>
<span class="quotelev2">&gt;&gt; take any arguments. I seem to remember that I call this to kick orted
</span><br>
<span class="quotelev2">&gt;&gt; into action, but I'm not sure of the implications of not calling it.
</span><br>
<span class="quotelev2">&gt;&gt; In any case, I don't have a job id when I call it, so what do I pass
</span><br>
<span class="quotelev2">&gt;&gt; to get the old behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, you can just use ORTE_JOBID_INVALID (defined in
</span><br>
<span class="quotelev1">&gt; orte/mca/ns/ns_types.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, your question raises a flag. You should be calling
</span><br>
<span class="quotelev1">&gt; orte_rmgr.setup_job before you call the RDS, and that function  
</span><br>
<span class="quotelev1">&gt; returns the
</span><br>
<span class="quotelev1">&gt; jobid for your job. Failing to call setup_job first may cause other  
</span><br>
<span class="quotelev1">&gt; parts of
</span><br>
<span class="quotelev1">&gt; the code base to fail as they are expecting certain data to be  
</span><br>
<span class="quotelev1">&gt; setup in the
</span><br>
<span class="quotelev1">&gt; registry by setup_job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do call setup_job first, then just pass the returned jobid  
</span><br>
<span class="quotelev1">&gt; along to
</span><br>
<span class="quotelev1">&gt; rds.query.
</span><br>
<p>No, we have always called query() first, just after orte_init().  
<br>
Since query() has never required a job id before, this used to work.  
<br>
I think the call was required to kick the SOH into action, but I'm  
<br>
not sure if it was needed for any other purpose.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. orte_pls.terminate_job() now takes a list of attributes in
</span><br>
<span class="quotelev2">&gt;&gt; addition to a job id. What are the attributes for, and what happens
</span><br>
<span class="quotelev2">&gt;&gt; if I pass a NULL here? Do I  need to crate an empty attribute list?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can always pass a NULL to any function looking for attributes -  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; system knows how to handle that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you should pass here depends upon what you are trying to do.  
</span><br>
<span class="quotelev1">&gt; If you
</span><br>
<span class="quotelev1">&gt; just want to terminate a specific job, then you can just pass a NULL.
</span><br>
<span class="quotelev1">&gt; However, if you want to terminate the specified job AND any  
</span><br>
<span class="quotelev1">&gt; &quot;children&quot; that
</span><br>
<span class="quotelev1">&gt; were dynamically spawned by that job, then you need to pass the
</span><br>
<span class="quotelev1">&gt; ORTE_NS_INCLUDE_DESCENDANTS attribute - something like the  
</span><br>
<span class="quotelev1">&gt; following code
</span><br>
<span class="quotelev1">&gt; snippet (pulled from orterun) would work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/pls/pls.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/rmgr/rmgr.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/ns/ns_types.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/params.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     opal_list_t attrs;
</span><br>
<span class="quotelev1">&gt;     opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;attrs, opal_list_t);
</span><br>
<span class="quotelev1">&gt;     orte_rmgr.add_attribute(&amp;attrs, ORTE_NS_INCLUDE_DESCENDANTS,  
</span><br>
<span class="quotelev1">&gt; ORTE_UNDEF,
</span><br>
<span class="quotelev1">&gt; NULL, ORTE_RMGR_ATTR_OVERRIDE);
</span><br>
<span class="quotelev1">&gt;     ret = orte_pls.terminate_job(jobid, &amp;orte_abort_timeout, &amp;attrs);
</span><br>
<span class="quotelev1">&gt;     while (NULL != (item = opal_list_remove_first(&amp;attrs)))
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt;     OBJ_DESTRUCT(&amp;attrs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that the orte_pls.terminate_job API in 1.2 will undergo  
</span><br>
<span class="quotelev1">&gt; a change
</span><br>
<span class="quotelev1">&gt; in the next few days (it already is changed in the trunk). The change,
</span><br>
<span class="quotelev1">&gt; included in the code snippet above, adds a timeout capability to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; function &quot;give up&quot; if the job doesn't terminate within the  
</span><br>
<span class="quotelev1">&gt; specified time.
</span><br>
<span class="quotelev1">&gt; The parameter given above references the orte-wide default value  
</span><br>
<span class="quotelev1">&gt; (adjustable
</span><br>
<span class="quotelev1">&gt; via MCA param), but you can give it anything you like - a NULL for the
</span><br>
<span class="quotelev1">&gt; timeout param means don't timeout so we'll try until you order us  
</span><br>
<span class="quotelev1">&gt; to quit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is this going to be in &quot;1.2b4&quot;, or some other version? The previous  
<br>
API changes mean that PTP will no longer work with pre-1.2b3  
<br>
versions. It sounds like this is going to cause a similar issue.
<br>
<p>Are there likely to be further API changes before the release  
<br>
version? We are trying to release PTP, but I think this is impossible  
<br>
until your API's stabilize.
<br>
<p>What about orte_ns.free_name()?
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
