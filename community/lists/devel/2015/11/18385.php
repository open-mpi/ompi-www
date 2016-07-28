<?
$subject_val = "Re: [OMPI devel] Proposal on RFCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 12:22:15 2015" -->
<!-- isoreceived="20151123172215" -->
<!-- sent="Mon, 23 Nov 2015 10:22:11 -0700" -->
<!-- isosent="20151123172211" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal on RFCs" -->
<!-- id="CAF1Cqj45injZBm87hqEp4ze_LFk5mopuKebN9Hp45FdwCM3aqg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6E00DE85-B064-448D-91D7-4CBCB343B341_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proposal on RFCs<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-23 12:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18386.php">Federico Reghenzani: "Re: [OMPI devel] Remote orted verbosity"</a>
<li><strong>Previous message:</strong> <a href="18384.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Remote orted verbosity"</a>
<li><strong>In reply to:</strong> <a href="18379.php">Ralph Castain: "[OMPI devel] Proposal on RFCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18396.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal on RFCs"</a>
<li><strong>Reply:</strong> <a href="18396.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal on RFCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ralph,
<br>
<p>Let's definitely discuss on 12/1.  Unless it's something like code deletion
<br>
or  large extern package update (like the PMIx 1.1 PR
<br>
or hwloc refresh), just opening a PR that touches like 100+ files across a
<br>
range of the code base needs more than the current github
<br>
PR interface provides.
<br>
<p>I'd add that it would not hurt for proposals involving major changes/new
<br>
algorithms, etc. to have a wiki page.
<br>
<p>Howard
<br>
<p><p><p><p>2015-11-21 11:16 GMT-07:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we moved to Github, we decided that we would use their &#226;&#128;&#156;pull
</span><br>
<span class="quotelev1">&gt; requests&#226;&#128;&#157; to replace our RFC process. Our thinking at the time was that
</span><br>
<span class="quotelev1">&gt; everyone would receive these, and so would know that something had been
</span><br>
<span class="quotelev1">&gt; proposed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we hadn&#226;&#128;&#153;t really anticipated was the volume of PRs that would be
</span><br>
<span class="quotelev1">&gt; generated. Quite frankly, it has become hard to sift thru them all to
</span><br>
<span class="quotelev1">&gt; identify those that involve significant change from those involving minor
</span><br>
<span class="quotelev1">&gt; bug fixes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh and I were kicking this around last week at SC&#226;&#128;&#153;15, and after some
</span><br>
<span class="quotelev1">&gt; consideration, I thought it makes sense to at least propose a couple of
</span><br>
<span class="quotelev1">&gt; modifications that might help people to track what&#226;&#128;&#153;s going on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) revive the RFC for significant changes. If the PR touches core code,
</span><br>
<span class="quotelev1">&gt; or involves a change that exceeds an isolated bug fix, it would help if
</span><br>
<span class="quotelev1">&gt; people announced it on the devel mailing list with &#226;&#128;&#156;RFC&#226;&#128;&#157; in the subject
</span><br>
<span class="quotelev1">&gt; line, an explanation appropriate in length to the corresponding change, and
</span><br>
<span class="quotelev1">&gt; a pointer to the PR. We should also include a &#226;&#128;&#156;timeout&#226;&#128;&#157; to indicate when
</span><br>
<span class="quotelev1">&gt; this PR is intended to be committed, minus any expressed concerns. This
</span><br>
<span class="quotelev1">&gt; would allow people to become aware of a proposed change that could impact
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) send a note to the devel mailing list indicating you are about to
</span><br>
<span class="quotelev1">&gt; start working on a significant change to the code base. We generally do
</span><br>
<span class="quotelev1">&gt; this on our weekly telecon, but not everyone can attend those. So rather
</span><br>
<span class="quotelev1">&gt; than surprising folks with a PR out of the blue, it would be good to let
</span><br>
<span class="quotelev1">&gt; the community know of your intentions so people can chime in with
</span><br>
<span class="quotelev1">&gt; suggestions and contact you off-list about possibly contributing to the
</span><br>
<span class="quotelev1">&gt; change. Besides, it might help to avoid having others committing
</span><br>
<span class="quotelev1">&gt; conflicting changes during the effort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I figured we could discuss this on the next telecon (Dec 1st), but wanted
</span><br>
<span class="quotelev1">&gt; to throw it out there for comment and advanced consideration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18379.php">http://www.open-mpi.org/community/lists/devel/2015/11/18379.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18386.php">Federico Reghenzani: "Re: [OMPI devel] Remote orted verbosity"</a>
<li><strong>Previous message:</strong> <a href="18384.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Remote orted verbosity"</a>
<li><strong>In reply to:</strong> <a href="18379.php">Ralph Castain: "[OMPI devel] Proposal on RFCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18396.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal on RFCs"</a>
<li><strong>Reply:</strong> <a href="18396.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal on RFCs"</a>
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
