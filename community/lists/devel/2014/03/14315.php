<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 16:29:49 2014" -->
<!-- isoreceived="20140310202949" -->
<!-- sent="Mon, 10 Mar 2014 21:29:48 +0100" -->
<!-- isosent="20140310202948" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="20140310202948.GB31434_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C46586F-8681-4B24-A743-B70818A1C3DC_at_open-mpi.org" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-10 16:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14314.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI Tuesday teleconf: US just changed time"</a>
<li><strong>In reply to:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 07, 2014 at 06:54:18AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If you like, I can define the required code in the trunk and let you fill in the event functionality.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; That would be great.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for your changes. When using --with-ft there are a few compiler
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; errors which I tried to fix with following patch:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That looks okay, with the only caveat being that you wouldn't ordinarily pass the state_caddy_t into a function. It's just there to pass along the job etc in case the callback function needs to reference something. In this case, I can't think of anything the FT event function would need to know - you just want it to quiet all messaging.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I need to pass the type of state to the ft_event() functions:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; enum opal_crs_state_type_t {
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_CRS_NONE        = 0,
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_CRS_CHECKPOINT  = 1,
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_CRS_RESTART_PRE = 2,
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_CRS_RESTART     = 3, /* RESTART_POST */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; so an int is all I need. So I probably need to encode it into *cbdata. Do I
</span><br>
<span class="quotelev2">&gt; &gt; just use an int directly in *cbdata or should it be part of a struct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why don't you define a job state for each of those, and then you can walk the state machine thru them if needed? That way the state caddy will already provide you with the state and you can just pass it to the functions.
</span><br>
<p>Like this?
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=79d6c8262bf809bb2f9ecc853d4a7a42a88654da">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=79d6c8262bf809bb2f9ecc853d4a7a42a88654da</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14314.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI Tuesday teleconf: US just changed time"</a>
<li><strong>In reply to:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14316.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
