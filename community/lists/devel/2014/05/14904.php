<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 09:59:54 2014" -->
<!-- isoreceived="20140529135954" -->
<!-- sent="Thu, 29 May 2014 13:59:52 +0000" -->
<!-- isosent="20140529135952" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="3DC59BF2-99B4-4144-AAFE-53B489EE8E8A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.01.1405271222190.16134_at_tigger.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 09:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14905.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14852.php">Thomas Naughton: "[OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14905.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14905.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I refrained from speaking up on this thread because I was on travel, and I wanted to think a bit more about this before I said anything.
<br>
<p>Let me try to summarize the arguments that have been made so far...
<br>
<p>A. Things people seem to agree on:
<br>
<p>1. Inclusion in trunk has no correlation to being included in a release
<br>
2. Prior examples of (effectively) single-organization components
<br>
<p>B. Reasons to have STCI/HPX/etc. components in SVN trunk:
<br>
<p>1. Multiple organizations are asking (ORNL, UTK, UH)
<br>
2. Easier to develop/merge the STCI/HPX/etc. components over time
<br>
3. Find all alternate RTE components in one place (vs. multiple internet repos)
<br>
4. More examples of how to use the RTE framework
<br>
<p>C. Reasons not to have STCI/HPX/etc. components in the SVN trunk:
<br>
<p>1. What is the (technical) gain is for being in the trunk?
<br>
2. Concerns about external release schedule pressure
<br>
3. Why have something on the trunk if it's not eventually destined for a release?
<br>
<p>In particular, I think B2 and C1 seem to be in conflict with each other.
<br>
<p>I have several thoughts about this topic, but I'm hesitant to continue this already lengthy thread on a contentious topic.  I also don't want to spend the next 30 minutes writing a lengthy, carefully-worded email that will just spawn further lengthy, carefully-worded emails (each costing 15-30 minutes).  Prior history has shown that we discuss and resolve issues much more rationally on the phone (vs. email hell).
<br>
<p>I would therefore like to discuss this on a weekly Tuesday call.
<br>
<p>Next week is bad because it's the MPI Forum meeting; I suspect that some -- but not all -- of us will not be on the Tuesday call because we'll be at the Forum.
<br>
<p>Thomas indicated there was no rush on the RFC; perhaps we can discuss this next-next-Tuesday (June 10)?
<br>
<p><p><p><p>On May 27, 2014, at 12:25 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:   because it will simplify our maintenance &amp; provide an alt. reference
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a component we currently maintain outside of the ompi tree to
</span><br>
<span class="quotelev1">&gt; support using OMPI with an alternate runtime system.  This will also
</span><br>
<span class="quotelev1">&gt; provide an alternate component to ORTE, which was motivation for PMI
</span><br>
<span class="quotelev1">&gt; component in related RFC.   We build/test nightly and it occasionally
</span><br>
<span class="quotelev1">&gt; catches ompi-rte abstraction violations, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14905.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14903.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>In reply to:</strong> <a href="14852.php">Thomas Naughton: "[OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14905.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14905.php">Thomas Naughton: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
