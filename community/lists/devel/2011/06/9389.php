<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 18 09:51:03 2011" -->
<!-- isoreceived="20110618135103" -->
<!-- sent="Sat, 18 Jun 2011 09:50:59 -0400" -->
<!-- isosent="20110618135059" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTikY8T72ZpCD9mMYdBgmLOeSFSBLDQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinqD5OVpUz8-PwLRpcF7EgXQ3HqNQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-18 09:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<li><strong>Previous message:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9401.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good. Thanks.
<br>
<p>On Sat, Jun 18, 2011 at 9:31 AM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; That's fine. Let's say Thursday COB is now the timeout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2011 9:10 AM, &quot;Joshua Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Cool. Then can we hold off pushing this into the trunk for a couple days
</span><br>
<span class="quotelev2">&gt;&gt; until I get a chance to test it? Monday COB does not give me much time since
</span><br>
<span class="quotelev2">&gt;&gt; we just got the new patch on Friday COB (the RFC gave us 2 weeks to review
</span><br>
<span class="quotelev2">&gt;&gt; the original patch). Would waiting until next Thursday/Friday COB be too
</span><br>
<span class="quotelev2">&gt;&gt; disruptive? That should give me and maybe Ralph enough time to test and send
</span><br>
<span class="quotelev2">&gt;&gt; any further feedback.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 17, 2011, at 5:59 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that it does. I made quite a few changes in the last checkin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though I didn't run your specific test this afternoon. I'll be able to try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it later this evening but it should be easy to test now that it's synced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the trunk again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 17, 2011 5:32 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does this include a fix for the problem I reported with mpirun-hosted
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; processes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; If not I would ask that we holding off on putting it into the trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; until that particular bug is addressed. From my experience tackling
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; this particular issues requires some code refactoring, which should
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; probably be done once in the trunk instead of two possibly disruptive
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; commits.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Fri, Jun 17, 2011 at 5:18 PM, Wesley Bland &lt;wbland_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; This is a reminder that the Resilient ORTE RFC is set to go into the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; trunk
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; on Monday at COB.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I've updated the code with a few of the changes that were mentioned on
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; off the list (moved code out of orted_comm.c, errmgr_set_callback
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; returns
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; previous callback, post_startup function, corrected normal termination
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; issues). Please take another look at it if you have any interest. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; code
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; can be found here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="https://bitbucket.org/wesbland/resilient-orte/">https://bitbucket.org/wesbland/resilient-orte/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Wesley Bland
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9390.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: Bring in Shared Memory Backing Facility Framework (shmem)"</a>
<li><strong>Previous message:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9401.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
