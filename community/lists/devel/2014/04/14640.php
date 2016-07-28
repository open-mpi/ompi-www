<?
$subject_val = "Re: [OMPI devel] mosix patches";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 15:05:24 2014" -->
<!-- isoreceived="20140428190524" -->
<!-- sent="Mon, 28 Apr 2014 21:05:23 +0200" -->
<!-- isosent="20140428190523" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mosix patches" -->
<!-- id="CAAoBEv=NjqxWjcjc5+83OtyZZzCw=woyhOPVzKcYZy4E8duoCA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9FBB5825-AC81-48AC-ADE2-FFF6B06B06DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mosix patches<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 15:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Previous message:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mosix patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Reply:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks jeff, I'll make it work.
<br>
<p>I'm moving my apartment tomorrow, so I hope I'll get to it on the weekend.
<br>
On 28 Apr 2014 18:09, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If it helps, I just updated that to the most recent OMPI trunk SVN
</span><br>
<span class="quotelev1">&gt; revision.  There were at least 3 files that had conflicts, though:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Skipped 'opal/mca/hwloc/base/hwloc_base_util.c' -- Node remains in conflict
</span><br>
<span class="quotelev1">&gt; Skipped 'ompi/mca/btl/usnic/btl_usnic_frag.c' -- Node remains in conflict
</span><br>
<span class="quotelev1">&gt; Skipped 'orte/mca/ess/hnp/ess_hnp_module.c' -- Node remains in conflict
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex will have to fix those, though...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2014, at 12:07 PM, Pavel V. Kaygorodov &lt;pasha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is current status of mosix support in OpenMPI?
</span><br>
<span class="quotelev2">&gt; &gt; I have tried patches from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.huji.ac.il/wikis/MediaWiki/mosix/index.php/Process_migration_for_OpenMPIbut">http://www.cs.huji.ac.il/wikis/MediaWiki/mosix/index.php/Process_migration_for_OpenMPIbut</a> without any success, even on 1.6 branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With best regards,
</span><br>
<span class="quotelev2">&gt; &gt;  Pavel.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14593.php">http://www.open-mpi.org/community/lists/devel/2014/04/14593.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14630.php">http://www.open-mpi.org/community/lists/devel/2014/04/14630.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>Previous message:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mosix patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Reply:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
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
