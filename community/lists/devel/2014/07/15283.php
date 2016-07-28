<?
$subject_val = "Re: [OMPI devel] TCP btl seq";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:13:27 2014" -->
<!-- isoreceived="20140728171327" -->
<!-- sent="Mon, 28 Jul 2014 17:13:25 +0000" -->
<!-- isosent="20140728171325" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TCP btl seq" -->
<!-- id="16D4682C-4DF1-4684-8BCF-833A18339EF8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D2710343-F508-4601-982C-EE0AC27BE2D1_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>In reply to:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2014, at 1:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. If we keep it, I don't remember offhand what the difference is between node_rank and local_rank.  The one we want is the 0-based index rank of this process *on this server*.  E.g., on a 2-server job, each with 16 slots, the first process on each server will be &lt;foo&gt;_rank 0, the second process on each server will be &lt;foo&gt;_rank 1, etc.  That's the one we want.  If it's node_rank and not local_rank, ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;local rank&quot; is the relative rank of that proc on that server within its own job, not across all jobs on that server. Hence, &quot;local rank&quot; is not unique if multiple jobs are running on a server (e.g., as a result of comm_spawn)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;node rank&quot; is the relative rank of that proc on this server, looking across all jobs. It is therefore unique regardless of the number of jobs running on a server
</span><br>
<p>I probably picked &quot;local_rank&quot; because I was thinking of repeatability.
<br>
<p>...but you could probably make the same &quot;repeatability&quot; argument for &quot;node_rank&quot;, especially when in the presence of multiple jobs on the same server (assuming no oversubscription, which would throw all possibility of repeatability out the window).
<br>
<p>So I'm not sure what the Right answer is here.  :-\
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
<li><strong>Next message:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15282.php">George Bosilca: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>In reply to:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<!-- nextthread="start" -->
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
