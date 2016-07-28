<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 16:37:03 2014" -->
<!-- isoreceived="20140310203703" -->
<!-- sent="Mon, 10 Mar 2014 13:36:35 -0700" -->
<!-- isosent="20140310203635" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="413D61F6-2077-47A7-92A9-B4737E853A1F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140310202948.GB31434_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] C/R and orte_oob<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-10 16:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14317.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14315.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14315.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2014, at 1:29 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Mar 07, 2014 at 06:54:18AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you like, I can define the required code in the trunk and let you fill in the event functionality.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That would be great.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your changes. When using --with-ft there are a few compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errors which I tried to fix with following patch:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That looks okay, with the only caveat being that you wouldn't ordinarily pass the state_caddy_t into a function. It's just there to pass along the job etc in case the callback function needs to reference something. In this case, I can't think of anything the FT event function would need to know - you just want it to quiet all messaging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to pass the type of state to the ft_event() functions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enum opal_crs_state_type_t {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_CRS_NONE        = 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_CRS_CHECKPOINT  = 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_CRS_RESTART_PRE = 2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_CRS_RESTART     = 3, /* RESTART_POST */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so an int is all I need. So I probably need to encode it into *cbdata. Do I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just use an int directly in *cbdata or should it be part of a struct?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why don't you define a job state for each of those, and then you can walk the state machine thru them if needed? That way the state caddy will already provide you with the state and you can just pass it to the functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=79d6c8262bf809bb2f9ecc853d4a7a42a88654da">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=79d6c8262bf809bb2f9ecc853d4a7a42a88654da</a>
</span><br>
<p>Yep! You can now use those states to sequence things as desired
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14315.php">http://www.open-mpi.org/community/lists/devel/2014/03/14315.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14317.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14315.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14315.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
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
