<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 00:31:05 2015" -->
<!-- isoreceived="20150903043105" -->
<!-- sent="Thu, 3 Sep 2015 00:31:03 -0400" -->
<!-- isosent="20150903043103" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="CAMJJpkV6fdA5dHJw6UMserXNKm91V4Uh2PEQnzNqqzse1n1iTA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DB43050B-D680-43F8-9635-90D799173325_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 00:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17922.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I might have missed something here but:
<br>
<p>1. I bet that, and I'm certainly using a lower bound here, 99.9% of our
<br>
users will not even notice the issue between PSM and PSM2.
<br>
<p>2. If there is anything that might negatively impact us as a community is
<br>
the recurrent screwed-up with our own releases. For a production-quality
<br>
software, releasing a new &quot;stable&quot; version every 3 weeks is not being
<br>
reactive, is being obnoxious.
<br>
<p>3. Except if the distro builds OMPI statically, I see no reason to have 2
<br>
build of OMPI due to conflicting symbols between two shared libraries that
<br>
OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in the OMPI system wide
<br>
configuration file is not enough to solve the issue?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Sep 2, 2015 at 11:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid that won&#226;&#128;&#153;t solve the problem - the distro will still feel the
</span><br>
<span class="quotelev1">&gt; need to release -two- versions of OMPI, one with PSM and one with PSM2.
</span><br>
<span class="quotelev1">&gt; Ordinarily, I wouldn&#226;&#128;&#153;t care - but this creates user confusion and reflects
</span><br>
<span class="quotelev1">&gt; on us as a community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 2, 2015, at 6:50 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; what about automatically *not* building PSM2 if PSM is built and PSM2 is
</span><br>
<span class="quotelev1">&gt; not explicitly required ?
</span><br>
<span class="quotelev2">&gt; &gt; /* in order to be future proof, we could even do that only if we detect
</span><br>
<span class="quotelev1">&gt; a symbol conflict */
</span><br>
<span class="quotelev2">&gt; &gt; we could abort if ompi is configure'd with both --with-psm and
</span><br>
<span class="quotelev1">&gt; --with-psm2, or simply do nothing
</span><br>
<span class="quotelev2">&gt; &gt; (the end user might know what he/she is doing, and there will be nothing
</span><br>
<span class="quotelev1">&gt; to do on the ompi side
</span><br>
<span class="quotelev2">&gt; &gt; when this gets fixed by the PSM folks)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/3/2015 10:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least one
</span><br>
<span class="quotelev1">&gt; upstream distro. Apparently, there is a symbol conflict between the PSM and
</span><br>
<span class="quotelev1">&gt; PSM2 libraries that precludes building both of those MTLs at the same time.
</span><br>
<span class="quotelev1">&gt; This is leading the distro to push for release of two OMPI 1.10.0 builds -
</span><br>
<span class="quotelev1">&gt; one with PSM and the other with PSM2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IMO, this is a very undesirable situation. I agree with the distro that
</span><br>
<span class="quotelev1">&gt; delaying release for some significant time as this would impact everyone
</span><br>
<span class="quotelev1">&gt; else&#226;&#128;&#153;s users. Therefore, assuming that the PSM team is unable to quickly
</span><br>
<span class="quotelev1">&gt; resolve the problem in their libraries, my inclination is to release an
</span><br>
<span class="quotelev1">&gt; immediate 1.10.1 with the PSM2 MTL removed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17919.php">http://www.open-mpi.org/community/lists/devel/2015/09/17919.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17920.php">http://www.open-mpi.org/community/lists/devel/2015/09/17920.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17921.php">http://www.open-mpi.org/community/lists/devel/2015/09/17921.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17922.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17921.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
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
