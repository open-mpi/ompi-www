<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 19:58:05 2007" -->
<!-- isoreceived="20070130005805" -->
<!-- sent="Mon, 29 Jan 2007 17:57:20 -0700" -->
<!-- isosent="20070130005720" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!" -->
<!-- id="EAFF12E9-7223-45A6-80E4-C9CF8200560E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E38689.73ED%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-29 19:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>On Jan 29, 2007, at 11:10 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/29/07 10:20 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, we have always called query() first, just after orte_init().
</span><br>
<span class="quotelev2">&gt;&gt; Since query() has never required a job id before, this used to work.
</span><br>
<span class="quotelev2">&gt;&gt; I think the call was required to kick the SOH into action, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; not sure if it was needed for any other purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Query has nothing to do with the SOH - the only time you would  
</span><br>
<span class="quotelev1">&gt; &quot;need&quot; it
</span><br>
<span class="quotelev1">&gt; would be if you are reading a hostfile. Otherwise, it doesn't do  
</span><br>
<span class="quotelev1">&gt; anything at
</span><br>
<span class="quotelev1">&gt; the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not calling setup_job would be risky, in my opinion...
</span><br>
<p>We've had this discussion before. We *need* to read the hostfile  
<br>
before calling setup_job() because we have to populate the registry  
<br>
with node information. If you're saying that this is now no longer  
<br>
possible, then I'd respectfully ask that this functionality be  
<br>
restored before you release 1.2. If there is some other way to  
<br>
achieve this, then please let me know. We've been doing this ever  
<br>
since 1.0 and in the alpha and beta versions of 1.2.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there likely to be further API changes before the release
</span><br>
<span class="quotelev2">&gt;&gt; version? We are trying to release PTP, but I think this is impossible
</span><br>
<span class="quotelev2">&gt;&gt; until your API's stabilize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None planned, other than what I mentioned above. If you want to  
</span><br>
<span class="quotelev1">&gt; support Open
</span><br>
<span class="quotelev1">&gt; MPI 1.2, you may need a slight phase shift, though, so you can see  
</span><br>
<span class="quotelev1">&gt; the final
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<p>Please explain &quot;phase shift&quot;.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Previous message:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>In reply to:</strong> <a href="1275.php">Ralph H Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
<li><strong>Reply:</strong> <a href="1277.php">Ralph Castain: "Re: [OMPI devel] Urgent: ORTE_RML_NAME_SEED removed from 1.2b3!"</a>
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
