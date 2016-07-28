<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 18 09:10:59 2011" -->
<!-- isoreceived="20110618131059" -->
<!-- sent="Sat, 18 Jun 2011 09:10:51 -0400" -->
<!-- isosent="20110618131051" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="255332D6-B659-4611-A746-6159A809B9E7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTik52Y6fbGQWVyaeBc8r=v7Syawe0A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-18 09:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool. Then can we hold off pushing this into the trunk for a couple days until I get a chance to test it? Monday COB does not give me much time since we just got the new patch on Friday COB (the RFC gave us 2 weeks to review the original patch). Would waiting until next Thursday/Friday COB be too disruptive? That should give me and maybe Ralph enough time to test and send any further feedback.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Jun 17, 2011, at 5:59 PM, Wesley Bland wrote:
<br>
<p><span class="quotelev1">&gt; I believe that it does. I made quite a few changes in the last checkin though I didn't run your specific test this afternoon. I'll be able to try it later this evening but it should be easy to test now that it's synced with the trunk again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 17, 2011 5:32 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Does this include a fix for the problem I reported with mpirun-hosted processes?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If not I would ask that we holding off on putting it into the trunk
</span><br>
<span class="quotelev2">&gt; &gt; until that particular bug is addressed. From my experience tackling
</span><br>
<span class="quotelev2">&gt; &gt; this particular issues requires some code refactoring, which should
</span><br>
<span class="quotelev2">&gt; &gt; probably be done once in the trunk instead of two possibly disruptive
</span><br>
<span class="quotelev2">&gt; &gt; commits.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jun 17, 2011 at 5:18 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is a reminder that the Resilient ORTE RFC is set to go into the trunk
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on Monday at COB.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've updated the code with a few of the changes that were mentioned on and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; off the list (moved code out of orted_comm.c, errmgr_set_callback returns
</span><br>
<span class="quotelev3">&gt; &gt;&gt; previous callback, post_startup function, corrected normal termination
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issues). Please take another look at it if you have any interest. The code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; can be found here:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://bitbucket.org/wesbland/resilient-orte/">https://bitbucket.org/wesbland/resilient-orte/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wesley Bland
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9386.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
