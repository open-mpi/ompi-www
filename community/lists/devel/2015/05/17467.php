<?
$subject_val = "Re: [OMPI devel] v1.8.6 release";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 11:51:39 2015" -->
<!-- isoreceived="20150529155139" -->
<!-- sent="Sat, 30 May 2015 00:51:37 +0900" -->
<!-- isosent="20150529155137" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.6 release" -->
<!-- id="CAAkFZ5v_GC_vn6nfG-t2AmB8nzzNKkttft5y_CCY==5SPFwOSg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="291DC5ED-B441-4BF9-80C8-9BD29E08990A_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 11:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17468.php">Nathan Hjelm: "[OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17466.php">Ralph Castain: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>In reply to:</strong> <a href="17466.php">Ralph Castain: "Re: [OMPI devel] v1.8.6 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i do not know :-(
<br>
<p>all I can tell is I did not run into any issue involving the oob tcp
<br>
<p>that being said, I am not sure link-local addresses are considered as local
<br>
addresses by oob/tcp since these IPv6 are part of the orted command line
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, May 30, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Gilles!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at your patch, do we have a remaining issue in the OOB TCP
</span><br>
<span class="quotelev1">&gt; component? I believe the answer is &#226;&#128;&#156;no&#226;&#128;&#157; because we already ignore all local
</span><br>
<span class="quotelev1">&gt; addresses there unless nothing else is available, but can you please
</span><br>
<span class="quotelev1">&gt; confirm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 29, 2015, at 8:11 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/605">https://github.com/open-mpi/ompi/pull/605</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my latest solution is available at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ggouaillardet/ompi/commit/2a8ef01bad02b6c833c642d17d9a1140ea9292a4">https://github.com/ggouaillardet/ompi/commit/2a8ef01bad02b6c833c642d17d9a1140ea9292a4</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the pr is a simple but temporary solution in which I introduced a new mca
</span><br>
<span class="quotelev1">&gt; param,
</span><br>
<span class="quotelev1">&gt; so if we decide this is good enough for 1.8.6 we might want to hardcode
</span><br>
<span class="quotelev1">&gt; the mca value in this branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dont remember anything was committed to the master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I get a positive review, I will do the back port and pr vs v1.8 on
</span><br>
<span class="quotelev1">&gt; Monday
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
<span class="quotelev1">&gt; On Friday, May 29, 2015, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 1.8.6 branch is nearing the planned closure date - the only known
</span><br>
<span class="quotelev2">&gt;&gt; outstanding issue is the IPv6 support, which remains broken for the TCP
</span><br>
<span class="quotelev2">&gt;&gt; BTL. I know a solution has been proposed and/or committed to the master,
</span><br>
<span class="quotelev2">&gt;&gt; but we need something resolved for 1.8.6 so we can release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone please update me on our situation?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17464.php">http://www.open-mpi.org/community/lists/devel/2015/05/17464.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17465.php">http://www.open-mpi.org/community/lists/devel/2015/05/17465.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17468.php">Nathan Hjelm: "[OMPI devel] RFC: standardize verbosity values"</a>
<li><strong>Previous message:</strong> <a href="17466.php">Ralph Castain: "Re: [OMPI devel] v1.8.6 release"</a>
<li><strong>In reply to:</strong> <a href="17466.php">Ralph Castain: "Re: [OMPI devel] v1.8.6 release"</a>
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
