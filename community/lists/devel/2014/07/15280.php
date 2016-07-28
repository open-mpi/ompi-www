<?
$subject_val = "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:10:38 2014" -->
<!-- isoreceived="20140728171038" -->
<!-- sent="Mon, 28 Jul 2014 13:10:34 -0400" -->
<!-- isosent="20140728171034" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_process_info.job_session_dir: &amp;quot;not yet defined&amp;quot;" -->
<!-- id="CAMJJpkVhU7MoQ4TGEm0WbO24Ywg4mVFx1DTG9mTzap5iBegXLw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7A75F174-6FE6-4C1D-AEC4-475945A90815_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Previous message:</strong> <a href="15279.php">Ralph Castain: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15279.php">Ralph Castain: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This means you are trying to initialize things too early. Most of the
<br>
information made available in opal/util/proc.h is only available once the
<br>
RTE was setup, i.e. only after the call to rte_init. Thus, the BTL can only
<br>
use it after the init call...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Jul 28, 2014 at 1:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2014, at 9:57 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm getting a value of &quot;not yet defined&quot; for
</span><br>
<span class="quotelev1">&gt; opal_process_info.job_session_dir in the usnic BTL (is this also what is
</span><br>
<span class="quotelev1">&gt; happening for
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15276.php">http://www.open-mpi.org/community/lists/devel/2014/07/15276.php</a>?).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can the job_session_dir be define/setup before the BTLs are setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but the BTL setup can't be done in opal_init - it'll have to be the
</span><br>
<span class="quotelev1">&gt; responsibility of the RTE layer to first set things up, and then init the
</span><br>
<span class="quotelev1">&gt; BTLs. George asked me to look into this, and I will - just slammed today
</span><br>
<span class="quotelev1">&gt; and so can't get to it until later this afternoon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15277.php">http://www.open-mpi.org/community/lists/devel/2014/07/15277.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15279.php">http://www.open-mpi.org/community/lists/devel/2014/07/15279.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Previous message:</strong> <a href="15279.php">Ralph Castain: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15279.php">Ralph Castain: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
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
