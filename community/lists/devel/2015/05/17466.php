<?
$subject_val = "Re: [OMPI devel] v1.8.6 release";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 11:20:51 2015" -->
<!-- isoreceived="20150529152051" -->
<!-- sent="Fri, 29 May 2015 08:20:47 -0700" -->
<!-- isosent="20150529152047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.6 release" -->
<!-- id="291DC5ED-B441-4BF9-80C8-9BD29E08990A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sJth3DPzOGh-8royKYDHZzJeEaL=6iYCBb1AoxYRG5fg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8.6 release<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 11:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17467.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>Previous message:</strong> <a href="17465.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>In reply to:</strong> <a href="17465.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17467.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>Reply:</strong> <a href="17467.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles!
<br>
<p>Looking at your patch, do we have a remaining issue in the OOB TCP component? I believe the answer is &#226;&#128;&#156;no&#226;&#128;&#157; because we already ignore all local addresses there unless nothing else is available, but can you please confirm?
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; On May 29, 2015, at 8:11 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/605">https://github.com/open-mpi/ompi/pull/605</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/605">https://github.com/open-mpi/ompi/pull/605</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my latest solution is available at <a href="https://github.com/ggouaillardet/ompi/commit/2a8ef01bad02b6c833c642d17d9a1140ea9292a4">https://github.com/ggouaillardet/ompi/commit/2a8ef01bad02b6c833c642d17d9a1140ea9292a4</a> &lt;<a href="https://github.com/ggouaillardet/ompi/commit/2a8ef01bad02b6c833c642d17d9a1140ea9292a4">https://github.com/ggouaillardet/ompi/commit/2a8ef01bad02b6c833c642d17d9a1140ea9292a4</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the pr is a simple but temporary solution in which I introduced a new mca param,
</span><br>
<span class="quotelev1">&gt; so if we decide this is good enough for 1.8.6 we might want to hardcode the mca value in this branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I dont remember anything was committed to the master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I get a positive review, I will do the back port and pr vs v1.8 on Monday
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, May 29, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 1.8.6 branch is nearing the planned closure date - the only known outstanding issue is the IPv6 support, which remains broken for the TCP BTL. I know a solution has been proposed and/or committed to the master, but we need something resolved for 1.8.6 so we can release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please update me on our situation?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17464.php">http://www.open-mpi.org/community/lists/devel/2015/05/17464.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/05/17464.php">http://www.open-mpi.org/community/lists/devel/2015/05/17464.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17465.php">http://www.open-mpi.org/community/lists/devel/2015/05/17465.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17466/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17467.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>Previous message:</strong> <a href="17465.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>In reply to:</strong> <a href="17465.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17467.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>Reply:</strong> <a href="17467.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.6 release"</a>
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
