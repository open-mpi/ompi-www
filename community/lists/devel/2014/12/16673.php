<?
$subject_val = "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 12:38:41 2014" -->
<!-- isoreceived="20141218173841" -->
<!-- sent="Thu, 18 Dec 2014 10:38:40 -0700" -->
<!-- isosent="20141218173840" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream" -->
<!-- id="20141218173840.GB10622_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F842F2C-2149-4584-84D9-9FB8B7AA1AE9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 12:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16674.php">Howard Pritchard: "[OMPI devel] simple ./configure doesn't work on master/HEAD"</a>
<li><strong>Previous message:</strong> <a href="16672.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>In reply to:</strong> <a href="16672.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Thu, Dec 18, 2014 at 05:33:36PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; To slightly expand on what Howard said:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'd basically fix ABI at the beginning of a stable series (i.e., 2.0.0), and maintain it for the entire stable series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rationale here is that the adoption we've seen is that production shops are (rightfully) just moving from stable series to stable series -- they're skipping the feature series.  Meaning: ABI guarantees for the feature series don't seem that important.  So why hamstring ourselves?  Delay making final ABI decisions until the stable series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2014, at 12:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff and I have been considering changing the ABI compatibility store fory
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI for the 1.9/2.0 release stream.  Basically no promises for the
</span><br>
<span class="quotelev2">&gt; &gt; odd/feature release series, but keep the current ABI promise for the
</span><br>
<span class="quotelev2">&gt; &gt; even release series.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've updated the 1.9/2.0 release page on the wiki to include this proposal.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please let us know if you think that it might be problematic to relax
</span><br>
<span class="quotelev2">&gt; &gt; the ABI compatibility promise in the features release series.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This will be on the agenda for the developers' workshop next month.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Howard
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16670.php">http://www.open-mpi.org/community/lists/devel/2014/12/16670.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16672.php">http://www.open-mpi.org/community/lists/devel/2014/12/16672.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16673/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16674.php">Howard Pritchard: "[OMPI devel] simple ./configure doesn't work on master/HEAD"</a>
<li><strong>Previous message:</strong> <a href="16672.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>In reply to:</strong> <a href="16672.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
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
