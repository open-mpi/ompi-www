<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 09:47:42 2007" -->
<!-- isoreceived="20070129144742" -->
<!-- sent="Mon, 29 Jan 2007 07:47:37 -0700" -->
<!-- isosent="20070129144737" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="C1E35719.73CC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FC1423C7-BF7E-4358-81B0-722890082B49_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-29 09:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/27/07 9:37 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There are two more interfaces that have changed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. orte_rds.query() now takes a job id, whereas in 1.2b1 it didn't
</span><br>
<span class="quotelev1">&gt; take any arguments. I seem to remember that I call this to kick orted
</span><br>
<span class="quotelev1">&gt; into action, but I'm not sure of the implications of not calling it.
</span><br>
<span class="quotelev1">&gt; In any case, I don't have a job id when I call it, so what do I pass
</span><br>
<span class="quotelev1">&gt; to get the old behavior?
</span><br>
<p>For now, you can just use ORTE_JOBID_INVALID (defined in
<br>
orte/mca/ns/ns_types.h).
<br>
<p>However, your question raises a flag. You should be calling
<br>
orte_rmgr.setup_job before you call the RDS, and that function returns the
<br>
jobid for your job. Failing to call setup_job first may cause other parts of
<br>
the code base to fail as they are expecting certain data to be setup in the
<br>
registry by setup_job.
<br>
<p>If you do call setup_job first, then just pass the returned jobid along to
<br>
rds.query.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. orte_pls.terminate_job() now takes a list of attributes in
</span><br>
<span class="quotelev1">&gt; addition to a job id. What are the attributes for, and what happens
</span><br>
<span class="quotelev1">&gt; if I pass a NULL here? Do I  need to crate an empty attribute list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You can always pass a NULL to any function looking for attributes - the
<br>
system knows how to handle that situation.
<br>
<p>What you should pass here depends upon what you are trying to do. If you
<br>
just want to terminate a specific job, then you can just pass a NULL.
<br>
However, if you want to terminate the specified job AND any &quot;children&quot; that
<br>
were dynamically spawned by that job, then you need to pass the
<br>
ORTE_NS_INCLUDE_DESCENDANTS attribute - something like the following code
<br>
snippet (pulled from orterun) would work:
<br>
<p>#include &quot;opal/class/opal_list.h&quot;
<br>
<p>#include &quot;orte/mca/pls/pls.h&quot;
<br>
#include &quot;orte/mca/rmgr/rmgr.h&quot;
<br>
#include &quot;orte/mca/ns/ns_types.h&quot;
<br>
#include &quot;orte/runtime/params.h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t attrs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t *item;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;attrs, opal_list_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_rmgr.add_attribute(&amp;attrs, ORTE_NS_INCLUDE_DESCENDANTS, ORTE_UNDEF,
<br>
NULL, ORTE_RMGR_ATTR_OVERRIDE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = orte_pls.terminate_job(jobid, &amp;orte_abort_timeout, &amp;attrs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (NULL != (item = opal_list_remove_first(&amp;attrs)))
<br>
OBJ_RELEASE(item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;attrs);
<br>
<p><p>Please note that the orte_pls.terminate_job API in 1.2 will undergo a change
<br>
in the next few days (it already is changed in the trunk). The change,
<br>
included in the code snippet above, adds a timeout capability to have the
<br>
function &quot;give up&quot; if the job doesn't terminate within the specified time.
<br>
The parameter given above references the orte-wide default value (adjustable
<br>
via MCA param), but you can give it anything you like - a NULL for the
<br>
timeout param means don't timeout so we'll try until you order us to quit.
<br>
<p><span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2007, at 6:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/26/07 11:36 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been using this define to implement the orte_stage_gate_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality in PTP using OpenMPI 1.2b1 for some months now. As of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2b3 it appears that this define has been removed. New users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting to build PTP against the latest 1.2b3 build are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complaining that they are getting build errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know what has replaced this define in 1.2b3, and how we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can obtain the same functionality that we had in 1.2b1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You need to use ORTE_PROC_MY_HNP - no API change is involved, it is
</span><br>
<span class="quotelev2">&gt;&gt; just a
</span><br>
<span class="quotelev2">&gt;&gt; #define. You may need to add #include &quot;orte/mca/ns/ns_types.h&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; pick it
</span><br>
<span class="quotelev2">&gt;&gt; up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You will also find that ORTE_RML_NAME_ANY is likewise gone - you
</span><br>
<span class="quotelev2">&gt;&gt; need to use
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_WILDCARD instead for the same reasons as described below.
</span><br>
<span class="quotelev2">&gt;&gt; Similarly, ORTE_RML_NAME_SELF has been replaced by ORTE_PROC_MY_NAME.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We discovered during the testing/debugging of 1.2 that people had
</span><br>
<span class="quotelev2">&gt;&gt; unintentionally created multiple definitions for several critical
</span><br>
<span class="quotelev2">&gt;&gt; names in
</span><br>
<span class="quotelev2">&gt;&gt; the system. Hence, we had an ORTE_RML_NAME_SEED, an ORTE_OOB_SEED, and
</span><br>
<span class="quotelev2">&gt;&gt; several others. In the event that definition had to change, we
</span><br>
<span class="quotelev2">&gt;&gt; found the
</span><br>
<span class="quotelev2">&gt;&gt; code &quot;cracking&quot; all over the place - it was literally impossible to
</span><br>
<span class="quotelev2">&gt;&gt; maintain.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So we bit the bullet and cleaned it up. No API changes were
</span><br>
<span class="quotelev2">&gt;&gt; involved, but we
</span><br>
<span class="quotelev2">&gt;&gt; did remove duplicative defines (and their associated storage
</span><br>
<span class="quotelev2">&gt;&gt; locations).
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully, people will take the time to lookup and use these system-
</span><br>
<span class="quotelev2">&gt;&gt; level
</span><br>
<span class="quotelev2">&gt;&gt; defines instead of re-creating the problem!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, I would like to know what the policy of changing interfaces is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and when in the release cycle you freeze API changes. It's going to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be extremely difficult to release a version of PTP built against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI if you change interfaces between beta versions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my opinion, that is what &quot;beta&quot; is for - it isn't a &quot;lock-down&quot;
</span><br>
<span class="quotelev2">&gt;&gt; release,
</span><br>
<span class="quotelev2">&gt;&gt; but rather a time to find your cracks and fix them. That said, we
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; change APIs for no reason, but only because we either (a) needed to
</span><br>
<span class="quotelev2">&gt;&gt; do so to
</span><br>
<span class="quotelev2">&gt;&gt; add some requested functionality (e.g., the recent request for
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pernode&quot;
</span><br>
<span class="quotelev2">&gt;&gt; launch capabilities), or (b) found a bug in the system that
</span><br>
<span class="quotelev2">&gt;&gt; required some
</span><br>
<span class="quotelev2">&gt;&gt; change or added functionality to fix (e.g., the recent changes in
</span><br>
<span class="quotelev2">&gt;&gt; the PLS
</span><br>
<span class="quotelev2">&gt;&gt; behavior and API to support ctrl-c interrupt capabilities).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I generally try to send emails out alerting people to these changes
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev2">&gt;&gt; they occur (in fact, I'm pretty certain I sent one out on this issue).
</span><br>
<span class="quotelev2">&gt;&gt; However, looking back, I find that I send them to the OMPI &quot;core
</span><br>
<span class="quotelev2">&gt;&gt; developers&quot;
</span><br>
<span class="quotelev2">&gt;&gt; list - not the &quot;developers&quot; one. I note that the OMPI layer
</span><br>
<span class="quotelev2">&gt;&gt; developers tend
</span><br>
<span class="quotelev2">&gt;&gt; to do the same thing. I'll try to rectify that in the future and
</span><br>
<span class="quotelev2">&gt;&gt; suggest my
</span><br>
<span class="quotelev2">&gt;&gt; OMPI compatriots do so too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once an actual release is made, we only make an API change if a
</span><br>
<span class="quotelev2">&gt;&gt; major bug is
</span><br>
<span class="quotelev2">&gt;&gt; found and an API change simply must be done to fix it. I don't
</span><br>
<span class="quotelev2">&gt;&gt; recall such
</span><br>
<span class="quotelev2">&gt;&gt; an instance, though I think it may have happened once between minor
</span><br>
<span class="quotelev2">&gt;&gt; release
</span><br>
<span class="quotelev2">&gt;&gt; numbers in the 1.1 family (not sure).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1274.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
