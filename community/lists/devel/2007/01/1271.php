<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 27 09:52:02 2007" -->
<!-- isoreceived="20070127145202" -->
<!-- sent="Sat, 27 Jan 2007 07:51:53 -0700" -->
<!-- isosent="20070127145153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="C1E0B519.1615%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EAF02381-1077-4766-8805-C55567F1E2E5_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-27 09:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1270.php">Greg Watson: "[OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1270.php">Greg Watson: "[OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/26/07 11:36 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been using this define to implement the orte_stage_gate_init()
</span><br>
<span class="quotelev1">&gt; functionality in PTP using OpenMPI 1.2b1 for some months now. As of
</span><br>
<span class="quotelev1">&gt; 1.2b3 it appears that this define has been removed. New users
</span><br>
<span class="quotelev1">&gt; attempting to build PTP against the latest 1.2b3 build are
</span><br>
<span class="quotelev1">&gt; complaining that they are getting build errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know what has replaced this define in 1.2b3, and how we
</span><br>
<span class="quotelev1">&gt; can obtain the same functionality that we had in 1.2b1.
</span><br>
<p>You need to use ORTE_PROC_MY_HNP - no API change is involved, it is just a
<br>
#define. You may need to add #include &quot;orte/mca/ns/ns_types.h&quot; to pick it
<br>
up.
<br>
<p>You will also find that ORTE_RML_NAME_ANY is likewise gone - you need to use
<br>
ORTE_NAME_WILDCARD instead for the same reasons as described below.
<br>
Similarly, ORTE_RML_NAME_SELF has been replaced by ORTE_PROC_MY_NAME.
<br>
<p>We discovered during the testing/debugging of 1.2 that people had
<br>
unintentionally created multiple definitions for several critical names in
<br>
the system. Hence, we had an ORTE_RML_NAME_SEED, an ORTE_OOB_SEED, and
<br>
several others. In the event that definition had to change, we found the
<br>
code &quot;cracking&quot; all over the place - it was literally impossible to
<br>
maintain.
<br>
<p>So we bit the bullet and cleaned it up. No API changes were involved, but we
<br>
did remove duplicative defines (and their associated storage locations).
<br>
Hopefully, people will take the time to lookup and use these system-level
<br>
defines instead of re-creating the problem!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I would like to know what the policy of changing interfaces is,
</span><br>
<span class="quotelev1">&gt; and when in the release cycle you freeze API changes. It's going to
</span><br>
<span class="quotelev1">&gt; be extremely difficult to release a version of PTP built against
</span><br>
<span class="quotelev1">&gt; OpenMPI if you change interfaces between beta versions.
</span><br>
<p>In my opinion, that is what &quot;beta&quot; is for - it isn't a &quot;lock-down&quot; release,
<br>
but rather a time to find your cracks and fix them. That said, we don't
<br>
change APIs for no reason, but only because we either (a) needed to do so to
<br>
add some requested functionality (e.g., the recent request for &quot;pernode&quot;
<br>
launch capabilities), or (b) found a bug in the system that required some
<br>
change or added functionality to fix (e.g., the recent changes in the PLS
<br>
behavior and API to support ctrl-c interrupt capabilities).
<br>
<p>I generally try to send emails out alerting people to these changes when
<br>
they occur (in fact, I'm pretty certain I sent one out on this issue).
<br>
However, looking back, I find that I send them to the OMPI &quot;core developers&quot;
<br>
list - not the &quot;developers&quot; one. I note that the OMPI layer developers tend
<br>
to do the same thing. I'll try to rectify that in the future and suggest my
<br>
OMPI compatriots do so too.
<br>
<p>Once an actual release is made, we only make an API change if a major bug is
<br>
found and an API change simply must be done to fix it. I don't recall such
<br>
an instance, though I think it may have happened once between minor release
<br>
numbers in the 1.1 family (not sure).
<br>
<p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1270.php">Greg Watson: "[OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1270.php">Greg Watson: "[OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1272.php">Greg Watson: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
