<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:04:30 2015" -->
<!-- isoreceived="20151021190430" -->
<!-- sent="Wed, 21 Oct 2015 12:04:24 -0700" -->
<!-- isosent="20151021190424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)" -->
<!-- id="D233D3CA-84AD-4D27-BE8D-DA726594E619_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0087122D-0369-4B8F-9FBB-4919566F1C06_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 15:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18238.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m not sure you are correct in stating that the simplest case &#226;&#128;&#156;obviously&#226;&#128;&#157; still needs to work. In fact, there were several proposals on the last telecon to the contrary as it was unclear that the community would be able to agree on defaults. So people suggested either requiring configuring with a default, or using MCA params for a sys admin to set the defaults and exiting with error if they aren&#226;&#128;&#153;t provided.
<br>
<p>So I guess I&#226;&#128;&#153;m asking: before expending a lot of effort worrying about syntax, do we actually have agreement that users can run without any additional stuff? With what defaults, and how will those defaults be made clear to them?
<br>
<p>If not, then I have some concerned opinions on what you are proposing. If yes, then I&#226;&#128;&#153;m less concerned as the 10% who care are advanced users and willing to figure it out.
<br>
<p><p><span class="quotelev1">&gt; On Oct 21, 2015, at 11:07 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2015, at 12:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seemed like this topic was straying, so I&#226;&#128;&#153;m glad to hear that specifying nothing means we still execute.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I'm not trying to change the simple/easiest case.  That obviously still needs to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question remains, though: what is the default? What are the default values of the networks/qualifiers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This proposal is not addressing that issue.  Today, I think we (developers / OMPI experts) mostly understand what it does.  And for most users, I think OMPI does the Right Thing.  When UCX comes in, it will get a bit muddier (but this is exacerbating an existing problem -- not causing it).  We might want to dovetail a conversation about the defaults on to this proposal, but it's still (logically) a separate -- albeit related -- issue.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18236.php">http://www.open-mpi.org/community/lists/devel/2015/10/18236.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18238.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
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
