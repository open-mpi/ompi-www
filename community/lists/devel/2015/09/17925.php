<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 00:49:59 2015" -->
<!-- isoreceived="20150903044959" -->
<!-- sent="Wed, 2 Sep 2015 21:49:55 -0700" -->
<!-- isosent="20150903044955" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="F4671A74-7658-4D39-809C-E396E5068CC0_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55E7CEE0.4030305_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 00:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17926.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17926.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17926.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, I think you misunderstand the difference between the two modules. PSM supports one type of fabric, and PSM2 supports a different one. They are not interchangeable.
<br>
<p>I agree with your second point. If you have a way of resolving it, I would welcome hearing it. So far, the problems have been a lack of testing that fails to identify problems, frequently due to missed use-cases. Perhaps someone has a better suite of tests (or would volunteer to help develop them), and/or would offer up access to a broader range of environments?
<br>
<p>As for why the distro would provide two rpm&#146;s: you can argue that with them. :-)  However, I believe the issue is the same one we have with hcoll/ml and libnl/libnl3 conflicts - and I have yet to see someone propose a reliable fix for either of those. If you can create one, please chime in on the libnl/libnl3 ticket as Gilles and Jeff have spent a lot of time and pain on it.
<br>
<p><p><span class="quotelev1">&gt; On Sep 2, 2015, at 9:38 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about your third point :
</span><br>
<span class="quotelev1">&gt; some libraries does stuff in the constructors, so &quot;mtl = ^psm&quot; might also not work if OMPI was configure'd with --disable-dlopen.
</span><br>
<span class="quotelev1">&gt; as far as i know, --disable-dlopen is quite popular (and --disable-shared --enable-static is not so much)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/3/2015 1:31 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I might have missed something here but:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I bet that, and I'm certainly using a lower bound here, 99.9% of our users will not even notice the issue between PSM and PSM2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. If there is anything that might negatively impact us as a community is the recurrent screwed-up with our own releases. For a production-quality software, releasing a new &quot;stable&quot; version every 3 weeks is not being reactive, is being obnoxious.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Except if the distro builds OMPI statically, I see no reason to have 2 build of OMPI due to conflicting symbols between two shared libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in the OMPI system wide configuration file is not enough to solve the issue?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 2, 2015 at 11:47 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m afraid that won&#146;t solve the problem - the distro will still feel the need to release -two- versions of OMPI, one with PSM and one with PSM2. Ordinarily, I wouldn&#146;t care - but this creates user confusion and reflects on us as a community.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 2, 2015, at 6:50 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; what about automatically *not* building PSM2 if PSM is built and PSM2 is not explicitly required ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* in order to be future proof, we could even do that only if we detect a symbol conflict */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; we could abort if ompi is configure'd with both --with-psm and --with-psm2, or simply do nothing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (the end user might know what he/she is doing, and there will be nothing to do on the ompi side
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when this gets fixed by the PSM folks)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 9/3/2015 10:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least one upstream distro. Apparently, there is a symbol conflict between the PSM and PSM2 libraries that precludes building both of those MTLs at the same time. This is leading the distro to push for release of two OMPI 1.10.0 builds - one with PSM and the other with PSM2.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; IMO, this is a very undesirable situation. I agree with the distro that delaying release for some significant time as this would impact everyone else&#146;s users. Therefore, assuming that the PSM team is unable to quickly resolve the problem in their libraries, my inclination is to release an immediate 1.10.1 with the PSM2 MTL removed.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I&#146;m soliciting input - any opinions?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17919.php">http://www.open-mpi.org/community/lists/devel/2015/09/17919.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17919.php">http://www.open-mpi.org/community/lists/devel/2015/09/17919.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17920.php">http://www.open-mpi.org/community/lists/devel/2015/09/17920.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17920.php">http://www.open-mpi.org/community/lists/devel/2015/09/17920.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17921.php">http://www.open-mpi.org/community/lists/devel/2015/09/17921.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17921.php">http://www.open-mpi.org/community/lists/devel/2015/09/17921.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17923.php">http://www.open-mpi.org/community/lists/devel/2015/09/17923.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17923.php">http://www.open-mpi.org/community/lists/devel/2015/09/17923.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17924.php">http://www.open-mpi.org/community/lists/devel/2015/09/17924.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17925/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17926.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17924.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17926.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17926.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
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
