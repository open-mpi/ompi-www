<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 17:52:14 2014" -->
<!-- isoreceived="20140214225214" -->
<!-- sent="Fri, 14 Feb 2014 14:51:51 -0800" -->
<!-- isosent="20140214225151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="CF2C040F-3177-4D4A-8AA2-4991A4C632E2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140213192642.GH24474_at_lisas.de" -->
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
<strong>Date:</strong> 2014-02-14 17:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14152.php">Andreas Schwab: "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Previous message:</strong> <a href="14150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14141.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14173.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14173.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2014, at 11:26 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Feb 06, 2014 at 02:45:07PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2014, at 2:16 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh explained it to me a few days ago, that after a checkpoint has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received TCP should no longer be used to not lose any messages. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication happens over named pipes and therefore (I think) OOB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ft_event() is used to quite anything besides the pipes. This all seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work but I was just confused as the functions for ft_event()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in oob/tcp and oob/ud do not seem to contain any functionality.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So do I try to fix the ft_event() function in oob/base/ to call the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; registered ft_event() function which does nothing or do I just remove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the call to orte oob ft_event().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like you'll need to tell the OOB components to stop processing messages, so that will require that you insert an event into the system. You have to account for two things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (a) the OOB base and OOB components are operating on the orte_event_base, but
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (b) each OOB component can have multiple active modules (one per NIC) that are operating on their own event base/thread.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So you have to start by pushing an event that calls the OOB base, which then loops across the components calling their ft_event interface. Each component would then have to create an event for each active module, inserting that event into the module's event base/thread. When activated, each module would have to shutdown its message engine, and activate another event to notify its component that all is quiet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once a component finds out that all its modules are quiet, it would then have to activate an event to the OOB base. Once the OOB base sees all components report quiet, then it would have to activate an event to take you to the next step in your process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In other words, you need to turn the quieting process into its own set of states and run it through the state machine. This is the only way to guarantee that you'll keep things orderly, and is the major change needed in the C/R procedure as it flows thru ORTE. You can't just progress thru a set of function calls as you'll inevitably run into a roadblock requiring that you wait for an event-driven process to complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to implement something like you described. It is not yet event
</span><br>
<span class="quotelev1">&gt; driven, but before continuing I wanted to get some feedback if it is at
</span><br>
<span class="quotelev1">&gt; least the right start:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked at the other ORTE_OOB_* macros and tried to model my
</span><br>
<span class="quotelev1">&gt; functionality a bit after what I have seen there. Right now it is still
</span><br>
<span class="quotelev1">&gt; a simple function which just tries to call ft_event() on all oob
</span><br>
<span class="quotelev1">&gt; components. Does this look right so far?
</span><br>
<p>Sorry for delay - yes, that looks like the right direction. I would suggest doing it via the current state machine, though, by simply defining another job or proc state in orte/mca/plm/plm_types.h, and then registering a callback function using the orte_state.add_job[proc]_state(state, function to be called, ORTE_ERR_PRI). Then you can activate it by calling ORTE_ACTIVATE_JOB[PROC]_STATE(NULL, state) and it will be handled in the proper order.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14152.php">Andreas Schwab: "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<li><strong>Previous message:</strong> <a href="14150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14141.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14173.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14173.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
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
