<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 21:54:46 2013" -->
<!-- isoreceived="20130124025446" -->
<!-- sent="Thu, 24 Jan 2013 02:54:41 +0000" -->
<!-- isosent="20130124025441" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E08F2AC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000001cdf979$bf428860$3dc79920$_at_lindholm@arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New ARM patch<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 21:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11974.php">Alessandro Fanfarillo: "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Previous message:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11967.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2013, at 9:55 AM, Leif Lindholm &lt;leif.lindholm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To summarize the out-of-line assembler changes of this patch:
</span><br>
<span class="quotelev1">&gt; - The patch is functionally correct for ARMv7 (which we know, because the code
</span><br>
<span class="quotelev1">&gt; - It also appears to be functionally correct for ARMv6, given reports of
</span><br>
<span class="quotelev1">&gt; - It *might* be functionally correct for ARMv5, although I have seen no
</span><br>
<span class="quotelev1">&gt; - It is not functionally correct on ARMv4.
</span><br>
<p>Thanks for the summary (snipped, above).
<br>
<p><span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; Basic point is - this is an insufficiently validated patch referred to as
</span><br>
<span class="quotelev1">&gt; &quot;an ugly kludge&quot; by the original author (Jon Masters_at_Red Hat), who created
</span><br>
<span class="quotelev1">&gt; it to be able to include it in the Fedora ARMv5 port. I has previously
</span><br>
<span class="quotelev1">&gt; provided suggestions for improvements, but it has still been submitted to
</span><br>
<span class="quotelev1">&gt; the Open MPI users list without any of those suggestions being acted on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I admit to being slightly miffed with it being accepted and applied without
</span><br>
<span class="quotelev1">&gt; ever being mentioned on the Open MPI developers list
</span><br>
<p>It was done by one of the core committers (George); it's in our community's culture to go commit without discussion on the devel list for many kinds of things.  
<br>
<p>FWIW: Since we all know each other pretty well, we do a lot of communication via IM and telephone in addition to the public mailing list discussions.  This is not because we're discussing secret things -- it's just that you can get a lot more accomplished in a 10 minute phone call than 15 back-n-forth, 10-page, highly detailed emails.
<br>
<p><span class="quotelev1">&gt; - only on the users list.
</span><br>
<p>All the above being said: you're absolutely right.  We have not been careful about what gets discussed on the users' list vs. the devel list.  You're right that this was discussed over on the users' list (because of a bug report; the conversation turned to devel-like topics, but stayed on the users' list).  George committed a fix and then said &quot;how's this?&quot; (on the users' list).  And he didn't consult you, the primary maintainer of this section of code.
<br>
<p><span class="quotelev1">&gt; A list to which I now find myself subscribed to without having asked
</span><br>
<span class="quotelev1">&gt; for or being told about - miffed again.
</span><br>
<p>Sorry about that; this was my fault.  I interpreted your off-post mails to me about not being able to post to the users list as an ask to be subscribed (since we don't allow posts from unsubscribed users).  
<br>
<p>Rather than unsubscribe you, though, I just marked you as &quot;nomail&quot; on the users' list.  So you won't receive any further mail from that list, but you're still subscribed, so you can post.
<br>
<p><span class="quotelev1">&gt; If the main purpose of accepting this patch is to provide a stopgap measure
</span><br>
<span class="quotelev1">&gt; for something better, I would much prefer simply incorporating your
</span><br>
<span class="quotelev1">&gt; CCASFLAGS
</span><br>
<span class="quotelev1">&gt; workaround into the configure script - removing the out-of-line asm
</span><br>
<span class="quotelev1">&gt; implementations of the atomics, but still providing a functional library for
</span><br>
<span class="quotelev1">&gt; the most common use-cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like:
</span><br>
<p>I tested this patch in v1.6 and v1.7 on my Pi, and it seems to work just fine.  &quot;make check&quot; passes all the ASM tests.
<br>
<p>To be clear: I consider you to be the primary author and maintainer of this code, and you're certainly more of an ARM expert than any of us.  George may not have realized that someone from ARM was still an active part of the community; I'm not sure.
<br>
<p>But I, too, vote that we should back out his changes from the trunk and put your suggested patch (his patch did not make it over to v1.6 or v1.7, because I was waiting for your response).
<br>
<p>We actually do try to get consensus for these kinds of things, so let's give George a little time to respond before backing it out.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11974.php">Alessandro Fanfarillo: "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Previous message:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11967.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11976.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
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
