<?
$subject_val = "Re: [OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 09:24:46 2014" -->
<!-- isoreceived="20140218142446" -->
<!-- sent="Tue, 18 Feb 2014 15:24:45 +0100" -->
<!-- isosent="20140218142445" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C/R and orte_oob" -->
<!-- id="20140218142445.GV24474_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CF2C040F-3177-4D4A-8AA2-4991A4C632E2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-18 09:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14174.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14174.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14174.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 14, 2014 at 02:51:51PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Feb 13, 2014, at 11:26 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I tried to implement something like you described. It is not yet event
</span><br>
<span class="quotelev2">&gt; &gt; driven, but before continuing I wanted to get some feedback if it is at
</span><br>
<span class="quotelev2">&gt; &gt; least the right start:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=5048a9cec2cd0bc4867eadfd7e48412b73267706</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I looked at the other ORTE_OOB_* macros and tried to model my
</span><br>
<span class="quotelev2">&gt; &gt; functionality a bit after what I have seen there. Right now it is still
</span><br>
<span class="quotelev2">&gt; &gt; a simple function which just tries to call ft_event() on all oob
</span><br>
<span class="quotelev2">&gt; &gt; components. Does this look right so far?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for delay - yes, that looks like the right direction. I would suggest doing it via the current state machine, though, by simply defining another job or proc state in orte/mca/plm/plm_types.h, and then registering a callback function using the orte_state.add_job[proc]_state(state, function to be called, ORTE_ERR_PRI). Then you can activate it by calling ORTE_ACTIVATE_JOB[PROC]_STATE(NULL, state) and it will be handled in the proper order.
</span><br>
<p>What is a job/proc in the Open MPI context.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14174.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14172.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14151.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14174.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14174.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
