<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 14:26:43 2014" -->
<!-- isoreceived="20140213192643" -->
<!-- sent="Thu, 13 Feb 2014 20:26:42 +0100" -->
<!-- isosent="20140213192642" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="20140213192642.GH24474_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2308DE3F-C5BF-4537-ABDB-974A51ECCE4B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-13 14:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>In reply to:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 06, 2014 at 02:45:07PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Feb 6, 2014, at 2:16 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Josh explained it to me a few days ago, that after a checkpoint has been
</span><br>
<span class="quotelev2">&gt; &gt; received TCP should no longer be used to not lose any messages. The
</span><br>
<span class="quotelev2">&gt; &gt; communication happens over named pipes and therefore (I think) OOB
</span><br>
<span class="quotelev2">&gt; &gt; ft_event() is used to quite anything besides the pipes. This all seems
</span><br>
<span class="quotelev2">&gt; &gt; to work but I was just confused as the functions for ft_event()
</span><br>
<span class="quotelev2">&gt; &gt; in oob/tcp and oob/ud do not seem to contain any functionality.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So do I try to fix the ft_event() function in oob/base/ to call the
</span><br>
<span class="quotelev2">&gt; &gt; registered ft_event() function which does nothing or do I just remove
</span><br>
<span class="quotelev2">&gt; &gt; the call to orte oob ft_event().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds like you'll need to tell the OOB components to stop processing messages, so that will require that you insert an event into the system. You have to account for two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) the OOB base and OOB components are operating on the orte_event_base, but
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) each OOB component can have multiple active modules (one per NIC) that are operating on their own event base/thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you have to start by pushing an event that calls the OOB base, which then loops across the components calling their ft_event interface. Each component would then have to create an event for each active module, inserting that event into the module's event base/thread. When activated, each module would have to shutdown its message engine, and activate another event to notify its component that all is quiet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once a component finds out that all its modules are quiet, it would then have to activate an event to the OOB base. Once the OOB base sees all components report quiet, then it would have to activate an event to take you to the next step in your process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words, you need to turn the quieting process into its own set of states and run it through the state machine. This is the only way to guarantee that you'll keep things orderly, and is the major change needed in the C/R procedure as it flows thru ORTE. You can't just progress thru a set of function calls as you'll inevitably run into a roadblock requiring that you wait for an event-driven process to complete.
</span><br>
<p>I tried to implement something like you described. It is not yet event
<br>
driven, but before continuing I wanted to get some feedback if it is at
<br>
least the right start:
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706</a>
<br>
<p>I looked at the other ORTE_OOB_* macros and tried to model my
<br>
functionality a bit after what I have seen there. Right now it is still
<br>
a simple function which just tries to call ft_event() on all oob
<br>
components. Does this look right so far?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14140.php">Marco Atzeri: "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>In reply to:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
