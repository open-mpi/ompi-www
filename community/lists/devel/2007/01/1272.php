<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 27 11:37:59 2007" -->
<!-- isoreceived="20070127163759" -->
<!-- sent="Sat, 27 Jan 2007 08:37:51 -0800" -->
<!-- isosent="20070127163751" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="FC1423C7-BF7E-4358-81B0-722890082B49_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E0B519.1615%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-27 11:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1271.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1271.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two more interfaces that have changed:
<br>
<p>1. orte_rds.query() now takes a job id, whereas in 1.2b1 it didn't  
<br>
take any arguments. I seem to remember that I call this to kick orted  
<br>
into action, but I'm not sure of the implications of not calling it.  
<br>
In any case, I don't have a job id when I call it, so what do I pass  
<br>
to get the old behavior?
<br>
<p>2. orte_pls.terminate_job() now takes a list of attributes in  
<br>
addition to a job id. What are the attributes for, and what happens  
<br>
if I pass a NULL here? Do I  need to crate an empty attribute list?
<br>
<p>Greg
<br>
<p><p>On Jan 27, 2007, at 6:51 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/26/07 11:36 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been using this define to implement the orte_stage_gate_init()
</span><br>
<span class="quotelev2">&gt;&gt; functionality in PTP using OpenMPI 1.2b1 for some months now. As of
</span><br>
<span class="quotelev2">&gt;&gt; 1.2b3 it appears that this define has been removed. New users
</span><br>
<span class="quotelev2">&gt;&gt; attempting to build PTP against the latest 1.2b3 build are
</span><br>
<span class="quotelev2">&gt;&gt; complaining that they are getting build errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what has replaced this define in 1.2b3, and how we
</span><br>
<span class="quotelev2">&gt;&gt; can obtain the same functionality that we had in 1.2b1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to use ORTE_PROC_MY_HNP - no API change is involved, it is  
</span><br>
<span class="quotelev1">&gt; just a
</span><br>
<span class="quotelev1">&gt; #define. You may need to add #include &quot;orte/mca/ns/ns_types.h&quot; to  
</span><br>
<span class="quotelev1">&gt; pick it
</span><br>
<span class="quotelev1">&gt; up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will also find that ORTE_RML_NAME_ANY is likewise gone - you  
</span><br>
<span class="quotelev1">&gt; need to use
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_WILDCARD instead for the same reasons as described below.
</span><br>
<span class="quotelev1">&gt; Similarly, ORTE_RML_NAME_SELF has been replaced by ORTE_PROC_MY_NAME.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We discovered during the testing/debugging of 1.2 that people had
</span><br>
<span class="quotelev1">&gt; unintentionally created multiple definitions for several critical  
</span><br>
<span class="quotelev1">&gt; names in
</span><br>
<span class="quotelev1">&gt; the system. Hence, we had an ORTE_RML_NAME_SEED, an ORTE_OOB_SEED, and
</span><br>
<span class="quotelev1">&gt; several others. In the event that definition had to change, we  
</span><br>
<span class="quotelev1">&gt; found the
</span><br>
<span class="quotelev1">&gt; code &quot;cracking&quot; all over the place - it was literally impossible to
</span><br>
<span class="quotelev1">&gt; maintain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we bit the bullet and cleaned it up. No API changes were  
</span><br>
<span class="quotelev1">&gt; involved, but we
</span><br>
<span class="quotelev1">&gt; did remove duplicative defines (and their associated storage  
</span><br>
<span class="quotelev1">&gt; locations).
</span><br>
<span class="quotelev1">&gt; Hopefully, people will take the time to lookup and use these system- 
</span><br>
<span class="quotelev1">&gt; level
</span><br>
<span class="quotelev1">&gt; defines instead of re-creating the problem!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I would like to know what the policy of changing interfaces is,
</span><br>
<span class="quotelev2">&gt;&gt; and when in the release cycle you freeze API changes. It's going to
</span><br>
<span class="quotelev2">&gt;&gt; be extremely difficult to release a version of PTP built against
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI if you change interfaces between beta versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my opinion, that is what &quot;beta&quot; is for - it isn't a &quot;lock-down&quot;  
</span><br>
<span class="quotelev1">&gt; release,
</span><br>
<span class="quotelev1">&gt; but rather a time to find your cracks and fix them. That said, we  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt; change APIs for no reason, but only because we either (a) needed to  
</span><br>
<span class="quotelev1">&gt; do so to
</span><br>
<span class="quotelev1">&gt; add some requested functionality (e.g., the recent request for  
</span><br>
<span class="quotelev1">&gt; &quot;pernode&quot;
</span><br>
<span class="quotelev1">&gt; launch capabilities), or (b) found a bug in the system that  
</span><br>
<span class="quotelev1">&gt; required some
</span><br>
<span class="quotelev1">&gt; change or added functionality to fix (e.g., the recent changes in  
</span><br>
<span class="quotelev1">&gt; the PLS
</span><br>
<span class="quotelev1">&gt; behavior and API to support ctrl-c interrupt capabilities).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I generally try to send emails out alerting people to these changes  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; they occur (in fact, I'm pretty certain I sent one out on this issue).
</span><br>
<span class="quotelev1">&gt; However, looking back, I find that I send them to the OMPI &quot;core  
</span><br>
<span class="quotelev1">&gt; developers&quot;
</span><br>
<span class="quotelev1">&gt; list - not the &quot;developers&quot; one. I note that the OMPI layer  
</span><br>
<span class="quotelev1">&gt; developers tend
</span><br>
<span class="quotelev1">&gt; to do the same thing. I'll try to rectify that in the future and  
</span><br>
<span class="quotelev1">&gt; suggest my
</span><br>
<span class="quotelev1">&gt; OMPI compatriots do so too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once an actual release is made, we only make an API change if a  
</span><br>
<span class="quotelev1">&gt; major bug is
</span><br>
<span class="quotelev1">&gt; found and an API change simply must be done to fix it. I don't  
</span><br>
<span class="quotelev1">&gt; recall such
</span><br>
<span class="quotelev1">&gt; an instance, though I think it may have happened once between minor  
</span><br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; numbers in the 1.1 family (not sure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1271.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1271.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1273.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
