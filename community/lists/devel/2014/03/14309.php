<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 16:02:41 2014" -->
<!-- isoreceived="20140306210241" -->
<!-- sent="Thu, 6 Mar 2014 22:02:40 +0100" -->
<!-- isosent="20140306210240" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="20140306210240.GM25323_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140218144658.GX24474_at_lisas.de" -->
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
<strong>Date:</strong> 2014-03-06 16:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14175.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 18, 2014 at 03:46:58PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I tried to implement something like you described. It is not yet event
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; driven, but before continuing I wanted to get some feedback if it is at
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; least the right start:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I looked at the other ORTE_OOB_* macros and tried to model my
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; functionality a bit after what I have seen there. Right now it is still
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; a simple function which just tries to call ft_event() on all oob
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; components. Does this look right so far?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sorry for delay - yes, that looks like the right direction. I would suggest doing it via the current state machine, though, by simply defining another job or proc state in orte/mca/plm/plm_types.h, and then registering a callback function using the orte_state.add_job[proc]_state(state, function to be called, ORTE_ERR_PRI). Then you can activate it by calling ORTE_ACTIVATE_JOB[PROC]_STATE(NULL, state) and it will be handled in the proper order.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What is a job/proc in the Open MPI context.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A &quot;job&quot; is the entire application, while a &quot;proc&quot; is just one process in that application. In this case you could use either one as you are checkpointing the entire job, but all this activity is occurring inside each proc. So I'd suggest defining it as a proc state since it only really involves local actions.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you like, I can define the required code in the trunk and let you fill in the event functionality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would be great.
</span><br>
<p>Thanks for your changes. When using --with-ft there are a few compiler
<br>
errors which I tried to fix with following patch:
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=71521789ef9d248a7eef53030d2ec5de900faa4c</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14175.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14310.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
