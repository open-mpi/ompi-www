<?
$subject_val = "Re: [OMPI devel] TCP btl seq";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:11:26 2014" -->
<!-- isoreceived="20140728171126" -->
<!-- sent="Mon, 28 Jul 2014 10:09:54 -0700" -->
<!-- isosent="20140728170954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TCP btl seq" -->
<!-- id="D2710343-F508-4601-982C-EE0AC27BE2D1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A1332AE-7AA8-433C-8F73-0E200551BD42_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TCP btl seq<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Previous message:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15278.php">Jeff Squyres (jsquyres): "[OMPI devel] TCP btl seq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Reply:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Reply:</strong> <a href="15283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TCP btl seq"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2014, at 10:02 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From George's comments on <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15275.php">http://www.open-mpi.org/community/lists/devel/2014/07/15275.php</a>:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Ralph and Jeff (I think you added the seq interface to TCP), please take a look at the following:
</span><br>
<span class="quotelev1">&gt; - the implementation of the TCP seq interface seems to be wrong: it used the my_node_rank to compute the sequence number instead of the my_local_rank (I changed this to my_local_rank)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I'd be in favor of just deleting the seq implementation (is anyone actually using it?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If we keep it, I don't remember offhand what the difference is between node_rank and local_rank.  The one we want is the 0-based index rank of this process *on this server*.  E.g., on a 2-server job, each with 16 slots, the first process on each server will be &lt;foo&gt;_rank 0, the second process on each server will be &lt;foo&gt;_rank 1, etc.  That's the one we want.  If it's node_rank and not local_rank, ok.
</span><br>
<p>&quot;local rank&quot; is the relative rank of that proc on that server within its own job, not across all jobs on that server. Hence, &quot;local rank&quot; is not unique if multiple jobs are running on a server (e.g., as a result of comm_spawn)
<br>
<p>&quot;node rank&quot; is the relative rank of that proc on this server, looking across all jobs. It is therefore unique regardless of the number of jobs running on a server
<br>
<p><p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15278.php">http://www.open-mpi.org/community/lists/devel/2014/07/15278.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Previous message:</strong> <a href="15280.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15278.php">Jeff Squyres (jsquyres): "[OMPI devel] TCP btl seq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Reply:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Reply:</strong> <a href="15283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TCP btl seq"</a>
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
