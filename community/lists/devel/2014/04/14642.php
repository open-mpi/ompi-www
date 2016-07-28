<?
$subject_val = "Re: [OMPI devel] mosix patches";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 17:35:28 2014" -->
<!-- isoreceived="20140428213528" -->
<!-- sent="Mon, 28 Apr 2014 14:34:59 -0700" -->
<!-- isosent="20140428213459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mosix patches" -->
<!-- id="A6CA078F-301B-4E18-B727-EEED589E35B6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAoBEv=NjqxWjcjc5+83OtyZZzCw=woyhOPVzKcYZy4E8duoCA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 17:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14643.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>In reply to:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Once you do, we really should commit it to the trunk this time so we can capture it for the future
<br>
<p><p>On Apr 28, 2014, at 12:05 PM, Alex Margolin &lt;alex.margolin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks jeff, I'll make it work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm moving my apartment tomorrow, so I hope I'll get to it on the weekend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 28 Apr 2014 18:09, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If it helps, I just updated that to the most recent OMPI trunk SVN revision.  There were at least 3 files that had conflicts, though:
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
<span class="quotelev2">&gt; &gt; I have tried patches from <a href="http://www.cs.huji.ac.il/wikis/MediaWiki/mosix/index.php/Process_migration_for_OpenMPI">http://www.cs.huji.ac.il/wikis/MediaWiki/mosix/index.php/Process_migration_for_OpenMPI</a> but without any success, even on 1.6 branch.
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14593.php">http://www.open-mpi.org/community/lists/devel/2014/04/14593.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14630.php">http://www.open-mpi.org/community/lists/devel/2014/04/14630.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14640.php">http://www.open-mpi.org/community/lists/devel/2014/04/14640.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14643.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14641.php">VandeVondele  Joost: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>In reply to:</strong> <a href="14640.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
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
