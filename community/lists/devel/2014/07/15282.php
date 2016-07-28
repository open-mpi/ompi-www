<?
$subject_val = "Re: [OMPI devel] TCP btl seq";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:13:21 2014" -->
<!-- isoreceived="20140728171321" -->
<!-- sent="Mon, 28 Jul 2014 13:13:20 -0400" -->
<!-- isosent="20140728171320" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TCP btl seq" -->
<!-- id="CAMJJpkWEXKqYnYkapLDP6PcH-7C-9TUeXYwPb4MCXUBTnv5QdQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Previous message:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>In reply to:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TCP btl seq"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So do we want to sequence the BTL interfaces between jobs or only between
<br>
local processes on the same job?
<br>
<p>I'm also fine with removing this option if it is not in use.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Jul 28, 2014 at 1:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2014, at 10:02 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From George's comments on
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15275.php">http://www.open-mpi.org/community/lists/devel/2014/07/15275.php</a>:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Ralph and Jeff (I think you added the seq interface to TCP), please
</span><br>
<span class="quotelev1">&gt; take a look at the following:
</span><br>
<span class="quotelev2">&gt; &gt; - the implementation of the TCP seq interface seems to be wrong: it used
</span><br>
<span class="quotelev1">&gt; the my_node_rank to compute the sequence number instead of the
</span><br>
<span class="quotelev1">&gt; my_local_rank (I changed this to my_local_rank)&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. I'd be in favor of just deleting the seq implementation (is anyone
</span><br>
<span class="quotelev1">&gt; actually using it?).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. If we keep it, I don't remember offhand what the difference is
</span><br>
<span class="quotelev1">&gt; between node_rank and local_rank.  The one we want is the 0-based index
</span><br>
<span class="quotelev1">&gt; rank of this process *on this server*.  E.g., on a 2-server job, each with
</span><br>
<span class="quotelev1">&gt; 16 slots, the first process on each server will be &lt;foo&gt;_rank 0, the second
</span><br>
<span class="quotelev1">&gt; process on each server will be &lt;foo&gt;_rank 1, etc.  That's the one we want.
</span><br>
<span class="quotelev1">&gt;  If it's node_rank and not local_rank, ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;local rank&quot; is the relative rank of that proc on that server within its
</span><br>
<span class="quotelev1">&gt; own job, not across all jobs on that server. Hence, &quot;local rank&quot; is not
</span><br>
<span class="quotelev1">&gt; unique if multiple jobs are running on a server (e.g., as a result of
</span><br>
<span class="quotelev1">&gt; comm_spawn)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;node rank&quot; is the relative rank of that proc on this server, looking
</span><br>
<span class="quotelev1">&gt; across all jobs. It is therefore unique regardless of the number of jobs
</span><br>
<span class="quotelev1">&gt; running on a server
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15278.php">http://www.open-mpi.org/community/lists/devel/2014/07/15278.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15281.php">http://www.open-mpi.org/community/lists/devel/2014/07/15281.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>Previous message:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<li><strong>In reply to:</strong> <a href="15281.php">Ralph Castain: "Re: [OMPI devel] TCP btl seq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15283.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TCP btl seq"</a>
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
