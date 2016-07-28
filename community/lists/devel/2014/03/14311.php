<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 06:07:09 2014" -->
<!-- isoreceived="20140307110709" -->
<!-- sent="Fri, 7 Mar 2014 12:07:08 +0100" -->
<!-- isosent="20140307110708" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="20140307110708.GQ25323_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3636EB78-AF2E-4D96-9FA2-61059F53C123_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-03-07 06:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 06, 2014 at 07:47:22PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sorry for delay - yes, that looks like the right direction. I would suggest doing it via the current state machine, though, by simply defining another job or proc state in orte/mca/plm/plm_types.h, and then registering a callback function using the orte_state.add_job[proc]_state(state, function to be called, ORTE_ERR_PRI). Then you can activate it by calling ORTE_ACTIVATE_JOB[PROC]_STATE(NULL, state) and it will be handled in the proper order.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What is a job/proc in the Open MPI context.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A &quot;job&quot; is the entire application, while a &quot;proc&quot; is just one process in that application. In this case you could use either one as you are checkpointing the entire job, but all this activity is occurring inside each proc. So I'd suggest defining it as a proc state since it only really involves local actions.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you like, I can define the required code in the trunk and let you fill in the event functionality.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That would be great.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your changes. When using --with-ft there are a few compiler
</span><br>
<span class="quotelev2">&gt; &gt; errors which I tried to fix with following patch:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That looks okay, with the only caveat being that you wouldn't ordinarily pass the state_caddy_t into a function. It's just there to pass along the job etc in case the callback function needs to reference something. In this case, I can't think of anything the FT event function would need to know - you just want it to quiet all messaging.
</span><br>
<p>I need to pass the type of state to the ft_event() functions:
<br>
<p>enum opal_crs_state_type_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CRS_NONE        = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CRS_CHECKPOINT  = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CRS_RESTART_PRE = 2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CRS_RESTART     = 3, /* RESTART_POST */
<br>
<p>so an int is all I need. So I probably need to encode it into *cbdata. Do I
<br>
just use an int directly in *cbdata or should it be part of a struct?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
