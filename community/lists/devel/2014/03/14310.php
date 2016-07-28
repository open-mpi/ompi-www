<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 22:47:27 2014" -->
<!-- isoreceived="20140307034727" -->
<!-- sent="Thu, 6 Mar 2014 19:47:22 -0800" -->
<!-- isosent="20140307034722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="3636EB78-AF2E-4D96-9FA2-61059F53C123_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140306210240.GM25323_at_lisas.de" -->
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
<strong>Date:</strong> 2014-03-06 22:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14311.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14309.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14309.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14311.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14311.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2014, at 1:02 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 18, 2014 at 03:46:58PM +0100, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I tried to implement something like you described. It is not yet event
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; driven, but before continuing I wanted to get some feedback if it is at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; least the right start:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I looked at the other ORTE_OOB_* macros and tried to model my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; functionality a bit after what I have seen there. Right now it is still
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a simple function which just tries to call ft_event() on all oob
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components. Does this look right so far?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry for delay - yes, that looks like the right direction. I would suggest doing it via the current state machine, though, by simply defining another job or proc state in orte/mca/plm/plm_types.h, and then registering a callback function using the orte_state.add_job[proc]_state(state, function to be called, ORTE_ERR_PRI). Then you can activate it by calling ORTE_ACTIVATE_JOB[PROC]_STATE(NULL, state) and it will be handled in the proper order.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is a job/proc in the Open MPI context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A &quot;job&quot; is the entire application, while a &quot;proc&quot; is just one process in that application. In this case you could use either one as you are checkpointing the entire job, but all this activity is occurring inside each proc. So I'd suggest defining it as a proc state since it only really involves local actions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you like, I can define the required code in the trunk and let you fill in the event functionality.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your changes. When using --with-ft there are a few compiler
</span><br>
<span class="quotelev1">&gt; errors which I tried to fix with following patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c</a>
</span><br>
<p>That looks okay, with the only caveat being that you wouldn't ordinarily pass the state_caddy_t into a function. It's just there to pass along the job etc in case the callback function needs to reference something. In this case, I can't think of anything the FT event function would need to know - you just want it to quiet all messaging.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14309.php">http://www.open-mpi.org/community/lists/devel/2014/03/14309.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14311.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14309.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="14309.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14311.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14311.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
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
