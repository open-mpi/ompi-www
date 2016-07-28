<?
$subject_val = "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:03:00 2014" -->
<!-- isoreceived="20140728170300" -->
<!-- sent="Mon, 28 Jul 2014 10:01:28 -0700" -->
<!-- isosent="20140728170128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_process_info.job_session_dir: &amp;quot;not yet defined&amp;quot;" -->
<!-- id="7A75F174-6FE6-4C1D-AEC4-475945A90815_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10CEC201-E1A5-486A-90F4-D54EE8A305EC_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15278.php">Jeff Squyres (jsquyres): "[OMPI devel] TCP btl seq"</a>
<li><strong>In reply to:</strong> <a href="15277.php">Jeff Squyres (jsquyres): "[OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2014, at 9:57 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting a value of &quot;not yet defined&quot; for opal_process_info.job_session_dir in the usnic BTL (is this also what is happening for <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15276.php">http://www.open-mpi.org/community/lists/devel/2014/07/15276.php</a>?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can the job_session_dir be define/setup before the BTLs are setup?
</span><br>
<p>Yes, but the BTL setup can't be done in opal_init - it'll have to be the responsibility of the RTE layer to first set things up, and then init the BTLs. George asked me to look into this, and I will - just slammed today and so can't get to it until later this afternoon
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15277.php">http://www.open-mpi.org/community/lists/devel/2014/07/15277.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15278.php">Jeff Squyres (jsquyres): "[OMPI devel] TCP btl seq"</a>
<li><strong>In reply to:</strong> <a href="15277.php">Jeff Squyres (jsquyres): "[OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
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
