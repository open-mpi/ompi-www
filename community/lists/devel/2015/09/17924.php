<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 00:39:00 2015" -->
<!-- isoreceived="20150903043900" -->
<!-- sent="Thu, 3 Sep 2015 13:38:56 +0900" -->
<!-- isosent="20150903043856" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="55E7CEE0.4030305_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkV6fdA5dHJw6UMserXNKm91V4Uh2PEQnzNqqzse1n1iTA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 00:38:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17923.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17923.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>about your third point :
<br>
some libraries does stuff in the constructors, so &quot;mtl = ^psm&quot; might 
<br>
also not work if OMPI was configure'd with --disable-dlopen.
<br>
as far as i know, --disable-dlopen is quite popular (and 
<br>
--disable-shared --enable-static is not so much)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/3/2015 1:31 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I might have missed something here but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I bet that, and I'm certainly using a lower bound here, 99.9% of 
</span><br>
<span class="quotelev1">&gt; our users will not even notice the issue between PSM and PSM2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If there is anything that might negatively impact us as a community 
</span><br>
<span class="quotelev1">&gt; is the recurrent screwed-up with our own releases. For a 
</span><br>
<span class="quotelev1">&gt; production-quality software, releasing a new &quot;stable&quot; version every 3 
</span><br>
<span class="quotelev1">&gt; weeks is not being reactive, is being obnoxious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Except if the distro builds OMPI statically, I see no reason to 
</span><br>
<span class="quotelev1">&gt; have 2 build of OMPI due to conflicting symbols between two shared 
</span><br>
<span class="quotelev1">&gt; libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in 
</span><br>
<span class="quotelev1">&gt; the OMPI system wide configuration file is not enough to solve the issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 2, 2015 at 11:47 PM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I&#146;m afraid that won&#146;t solve the problem - the distro will still
</span><br>
<span class="quotelev1">&gt;     feel the need to release -two- versions of OMPI, one with PSM and
</span><br>
<span class="quotelev1">&gt;     one with PSM2. Ordinarily, I wouldn&#146;t care - but this creates user
</span><br>
<span class="quotelev1">&gt;     confusion and reflects on us as a community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Sep 2, 2015, at 6:50 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Ralph,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; what about automatically *not* building PSM2 if PSM is built and
</span><br>
<span class="quotelev1">&gt;     PSM2 is not explicitly required ?
</span><br>
<span class="quotelev2">&gt;     &gt; /* in order to be future proof, we could even do that only if we
</span><br>
<span class="quotelev1">&gt;     detect a symbol conflict */
</span><br>
<span class="quotelev2">&gt;     &gt; we could abort if ompi is configure'd with both --with-psm and
</span><br>
<span class="quotelev1">&gt;     --with-psm2, or simply do nothing
</span><br>
<span class="quotelev2">&gt;     &gt; (the end user might know what he/she is doing, and there will be
</span><br>
<span class="quotelev1">&gt;     nothing to do on the ompi side
</span><br>
<span class="quotelev2">&gt;     &gt; when this gets fixed by the PSM folks)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Gilles
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On 9/3/2015 10:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least
</span><br>
<span class="quotelev1">&gt;     one upstream distro. Apparently, there is a symbol conflict
</span><br>
<span class="quotelev1">&gt;     between the PSM and PSM2 libraries that precludes building both of
</span><br>
<span class="quotelev1">&gt;     those MTLs at the same time. This is leading the distro to push
</span><br>
<span class="quotelev1">&gt;     for release of two OMPI 1.10.0 builds - one with PSM and the other
</span><br>
<span class="quotelev1">&gt;     with PSM2.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; IMO, this is a very undesirable situation. I agree with the
</span><br>
<span class="quotelev1">&gt;     distro that delaying release for some significant time as this
</span><br>
<span class="quotelev1">&gt;     would impact everyone else&#146;s users. Therefore, assuming that the
</span><br>
<span class="quotelev1">&gt;     PSM team is unable to quickly resolve the problem in their
</span><br>
<span class="quotelev1">&gt;     libraries, my inclination is to release an immediate 1.10.1 with
</span><br>
<span class="quotelev1">&gt;     the PSM2 MTL removed.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I&#146;m soliciting input - any opinions?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17919.php">http://www.open-mpi.org/community/lists/devel/2015/09/17919.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17920.php">http://www.open-mpi.org/community/lists/devel/2015/09/17920.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17921.php">http://www.open-mpi.org/community/lists/devel/2015/09/17921.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17923.php">http://www.open-mpi.org/community/lists/devel/2015/09/17923.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17924/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17923.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17923.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
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
