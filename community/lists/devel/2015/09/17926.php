<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 01:15:44 2015" -->
<!-- isoreceived="20150903051544" -->
<!-- sent="Thu, 3 Sep 2015 01:15:42 -0400" -->
<!-- isosent="20150903051542" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="CAMJJpkUr1MdOVJLnfPaAVu=fqqn-Q+r_RBBJZJdfc1OsA0nNjw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F4671A74-7658-4D39-809C-E396E5068CC0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-09-03 01:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 3, 2015 at 12:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George, I think you misunderstand the difference between the two modules.
</span><br>
<span class="quotelev1">&gt; PSM supports one type of fabric, and PSM2 supports a different one. They
</span><br>
<span class="quotelev1">&gt; are not interchangeable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph, what these two modules do is irrelevant. My point is that if the two
<br>
MTL are build as shared libraries, and if as Gilles highlighted the dlopen
<br>
support __is__ enabled then there is a simple solution that do not require
<br>
a new release.
<br>
<p><p><span class="quotelev1">&gt; I agree with your second point. If you have a way of resolving it, I would
</span><br>
<span class="quotelev1">&gt; welcome hearing it. So far, the problems have been a lack of testing that
</span><br>
<span class="quotelev1">&gt; fails to identify problems, frequently due to missed use-cases. Perhaps
</span><br>
<span class="quotelev1">&gt; someone has a better suite of tests (or would volunteer to help develop
</span><br>
<span class="quotelev1">&gt; them), and/or would offer up access to a broader range of environments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I wonder how many other open source software packages are getting as much
<br>
testing as OMPI does? And this is without even talking about the testing
<br>
marathon Paul is putting it through before each release.
<br>
<p><p><span class="quotelev1">&gt; As for why the distro would provide two rpm&#226;&#128;&#153;s: you can argue that with
</span><br>
<span class="quotelev1">&gt; them. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You brought the issue here to the OMPI community, I assumed you knew more
<br>
about the problem. In any case it would be extremely helpful if you can
<br>
pinpoint us to the discussion related to this issue where we can gather a
<br>
little bit more insight.
<br>
<p><p><span class="quotelev1">&gt; However, I believe the issue is the same one we have with hcoll/ml and
</span><br>
<span class="quotelev1">&gt; libnl/libnl3 conflicts - and I have yet to see someone propose a reliable
</span><br>
<span class="quotelev1">&gt; fix for either of those. If you can create one, please chime in on the
</span><br>
<span class="quotelev1">&gt; libnl/libnl3 ticket as Gilles and Jeff have spent a lot of time and pain on
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There are few subtle differences that make the issue with PSM simpler. In
<br>
the NL/NL3 case they belong to the dependence list of some of the libraries
<br>
we are loading, which makes it difficult to prevent them from loading. In
<br>
the case of PSM/PSM2, the MCA framework has a saying in what gets loaded
<br>
(again under the assumption that we have dlopen support).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2015, at 9:38 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about your third point :
</span><br>
<span class="quotelev1">&gt; some libraries does stuff in the constructors, so &quot;mtl = ^psm&quot; might also
</span><br>
<span class="quotelev1">&gt; not work if OMPI was configure'd with --disable-dlopen.
</span><br>
<span class="quotelev1">&gt; as far as i know, --disable-dlopen is quite popular (and --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static is not so much)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might have missed something here but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I bet that, and I'm certainly using a lower bound here, 99.9% of our
</span><br>
<span class="quotelev1">&gt; users will not even notice the issue between PSM and PSM2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If there is anything that might negatively impact us as a community is
</span><br>
<span class="quotelev1">&gt; the recurrent screwed-up with our own releases. For a production-quality
</span><br>
<span class="quotelev1">&gt; software, releasing a new &quot;stable&quot; version every 3 weeks is not being
</span><br>
<span class="quotelev1">&gt; reactive, is being obnoxious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Except if the distro builds OMPI statically, I see no reason to have 2
</span><br>
<span class="quotelev1">&gt; build of OMPI due to conflicting symbols between two shared libraries that
</span><br>
<span class="quotelev1">&gt; OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in the OMPI system wide
</span><br>
<span class="quotelev1">&gt; configuration file is not enough to solve the issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 2, 2015 at 11:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m afraid that won&#226;&#128;&#153;t solve the problem - the distro will still feel the
</span><br>
<span class="quotelev2">&gt;&gt; need to release -two- versions of OMPI, one with PSM and one with PSM2.
</span><br>
<span class="quotelev2">&gt;&gt; Ordinarily, I wouldn&#226;&#128;&#153;t care - but this creates user confusion and reflects
</span><br>
<span class="quotelev2">&gt;&gt; on us as a community.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 2, 2015, at 6:50 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; what about automatically *not* building PSM2 if PSM is built and PSM2
</span><br>
<span class="quotelev2">&gt;&gt; is not explicitly required ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* in order to be future proof, we could even do that only if we detect
</span><br>
<span class="quotelev2">&gt;&gt; a symbol conflict */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; we could abort if ompi is configure'd with both --with-psm and
</span><br>
<span class="quotelev2">&gt;&gt; --with-psm2, or simply do nothing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (the end user might know what he/she is doing, and there will be
</span><br>
<span class="quotelev2">&gt;&gt; nothing to do on the ompi side
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
<span class="quotelev4">&gt;&gt; &gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least one
</span><br>
<span class="quotelev2">&gt;&gt; upstream distro. Apparently, there is a symbol conflict between the PSM and
</span><br>
<span class="quotelev2">&gt;&gt; PSM2 libraries that precludes building both of those MTLs at the same time.
</span><br>
<span class="quotelev2">&gt;&gt; This is leading the distro to push for release of two OMPI 1.10.0 builds -
</span><br>
<span class="quotelev2">&gt;&gt; one with PSM and the other with PSM2.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; IMO, this is a very undesirable situation. I agree with the distro
</span><br>
<span class="quotelev2">&gt;&gt; that delaying release for some significant time as this would impact
</span><br>
<span class="quotelev2">&gt;&gt; everyone else&#226;&#128;&#153;s users. Therefore, assuming that the PSM team is unable to
</span><br>
<span class="quotelev2">&gt;&gt; quickly resolve the problem in their libraries, my inclination is to
</span><br>
<span class="quotelev2">&gt;&gt; release an immediate 1.10.1 with the PSM2 MTL removed.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17919.php">http://www.open-mpi.org/community/lists/devel/2015/09/17919.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17920.php">http://www.open-mpi.org/community/lists/devel/2015/09/17920.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17921.php">http://www.open-mpi.org/community/lists/devel/2015/09/17921.php</a>
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17923.php">http://www.open-mpi.org/community/lists/devel/2015/09/17923.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17924.php">http://www.open-mpi.org/community/lists/devel/2015/09/17924.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17925.php">http://www.open-mpi.org/community/lists/devel/2015/09/17925.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17926/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17925.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
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
