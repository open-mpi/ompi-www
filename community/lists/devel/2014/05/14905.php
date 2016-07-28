<?
$subject_val = "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 10:26:24 2014" -->
<!-- isoreceived="20140529142624" -->
<!-- sent="Thu, 29 May 2014 10:26:23 -0400 (EDT)" -->
<!-- isosent="20140529142623" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework" -->
<!-- id="alpine.OSX.2.01.1405291023021.63053_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3DC59BF2-99B4-4144-AAFE-53B489EE8E8A_at_cisco.com" -->
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
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 10:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14906.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14906.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14906.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks Jeff, I think that was a pretty good summary of things.
<br>
<p><span class="quotelev1">&gt; Thomas indicated there was no rush on the RFC; perhaps we can 
</span><br>
<span class="quotelev1">&gt; discuss this next-next-Tuesday (June 10)?
</span><br>
<p>Phone discussion seems like a good idea and June 10 sounds good to me.
<br>
<p>Thanks,
<br>
--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<p><p>On Thu, 29 May 2014, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I refrained from speaking up on this thread because I was on travel, and I wanted to think a bit more about this before I said anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me try to summarize the arguments that have been made so far...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A. Things people seem to agree on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Inclusion in trunk has no correlation to being included in a release
</span><br>
<span class="quotelev1">&gt; 2. Prior examples of (effectively) single-organization components
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B. Reasons to have STCI/HPX/etc. components in SVN trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Multiple organizations are asking (ORNL, UTK, UH)
</span><br>
<span class="quotelev1">&gt; 2. Easier to develop/merge the STCI/HPX/etc. components over time
</span><br>
<span class="quotelev1">&gt; 3. Find all alternate RTE components in one place (vs. multiple internet repos)
</span><br>
<span class="quotelev1">&gt; 4. More examples of how to use the RTE framework
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C. Reasons not to have STCI/HPX/etc. components in the SVN trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. What is the (technical) gain is for being in the trunk?
</span><br>
<span class="quotelev1">&gt; 2. Concerns about external release schedule pressure
</span><br>
<span class="quotelev1">&gt; 3. Why have something on the trunk if it's not eventually destined for a release?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In particular, I think B2 and C1 seem to be in conflict with each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have several thoughts about this topic, but I'm hesitant to continue this already lengthy thread on a contentious topic.  I also don't want to spend the next 30 minutes writing a lengthy, carefully-worded email that will just spawn further lengthy, carefully-worded emails (each costing 15-30 minutes).  Prior history has shown that we discuss and resolve issues much more rationally on the phone (vs. email hell).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would therefore like to discuss this on a weekly Tuesday call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next week is bad because it's the MPI Forum meeting; I suspect that some -- but not all -- of us will not be on the Tuesday call because we'll be at the Forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas indicated there was no rush on the RFC; perhaps we can discuss this next-next-Tuesday (June 10)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 12:25 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:  add new component to ompi/rte framework
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:   because it will simplify our maintenance &amp; provide an alt. reference
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:  no rush, soon-ish? (June 12?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a component we currently maintain outside of the ompi tree to
</span><br>
<span class="quotelev2">&gt;&gt; support using OMPI with an alternate runtime system.  This will also
</span><br>
<span class="quotelev2">&gt;&gt; provide an alternate component to ORTE, which was motivation for PMI
</span><br>
<span class="quotelev2">&gt;&gt; component in related RFC.   We build/test nightly and it occasionally
</span><br>
<span class="quotelev2">&gt;&gt; catches ompi-rte abstraction violations, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14852.php">http://www.open-mpi.org/community/lists/devel/2014/05/14852.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14904.php">http://www.open-mpi.org/community/lists/devel/2014/05/14904.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14906.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14906.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>Reply:</strong> <a href="14906.php">Ralph Castain: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
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
