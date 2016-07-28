<?
$subject_val = "[OMPI devel] TCP btl seq";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:02:40 2014" -->
<!-- isoreceived="20140728170240" -->
<!-- sent="Mon, 28 Jul 2014 17:02:38 +0000" -->
<!-- isosent="20140728170238" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] TCP btl seq" -->
<!-- id="3A1332AE-7AA8-433C-8F73-0E200551BD42_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] TCP btl seq<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15279.php">Ralph Castain: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15277.php">Jeff Squyres (jsquyres): "[OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Reply:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From George's comments on <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15275.php">http://www.open-mpi.org/community/lists/devel/2014/07/15275.php</a>:
</span><br>
<p>&quot;Ralph and Jeff (I think you added the seq interface to TCP), please take a look at the following:
<br>
- the implementation of the TCP seq interface seems to be wrong: it used the my_node_rank to compute the sequence number instead of the my_local_rank (I changed this to my_local_rank)&quot;
<br>
<p>1. I'd be in favor of just deleting the seq implementation (is anyone actually using it?).
<br>
<p>2. If we keep it, I don't remember offhand what the difference is between node_rank and local_rank.  The one we want is the 0-based index rank of this process *on this server*.  E.g., on a 2-server job, each with 16 slots, the first process on each server will be &lt;foo&gt;_rank 0, the second process on each server will be &lt;foo&gt;_rank 1, etc.  That's the one we want.  If it's node_rank and not local_rank, ok.
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
<li><strong>Next message:</strong> <a href="15279.php">Ralph Castain: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15277.php">Jeff Squyres (jsquyres): "[OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Reply:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
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
