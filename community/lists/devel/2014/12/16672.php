<?
$subject_val = "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 12:33:37 2014" -->
<!-- isoreceived="20141218173337" -->
<!-- sent="Thu, 18 Dec 2014 17:33:36 +0000" -->
<!-- isosent="20141218173336" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream" -->
<!-- id="2F842F2C-2149-4584-84D9-9FB8B7AA1AE9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj7mtkAPbpcApU-Oa5RTVQJ3uXiqz=sM568WFt0Pdit6pQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 12:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>Previous message:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16670.php">Howard Pritchard: "[OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>Reply:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To slightly expand on what Howard said:
<br>
<p>We'd basically fix ABI at the beginning of a stable series (i.e., 2.0.0), and maintain it for the entire stable series.
<br>
<p>The rationale here is that the adoption we've seen is that production shops are (rightfully) just moving from stable series to stable series -- they're skipping the feature series.  Meaning: ABI guarantees for the feature series don't seem that important.  So why hamstring ourselves?  Delay making final ABI decisions until the stable series.
<br>
<p><p>On Dec 18, 2014, at 12:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff and I have been considering changing the ABI compatibility store fory
</span><br>
<span class="quotelev1">&gt; Open MPI for the 1.9/2.0 release stream.  Basically no promises for the
</span><br>
<span class="quotelev1">&gt; odd/feature release series, but keep the current ABI promise for the
</span><br>
<span class="quotelev1">&gt; even release series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've updated the 1.9/2.0 release page on the wiki to include this proposal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let us know if you think that it might be problematic to relax
</span><br>
<span class="quotelev1">&gt; the ABI compatibility promise in the features release series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will be on the agenda for the developers' workshop next month.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16670.php">http://www.open-mpi.org/community/lists/devel/2014/12/16670.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>Previous message:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16670.php">Howard Pritchard: "[OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>Reply:</strong> <a href="16673.php">Nathan Hjelm: "Re: [OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
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
