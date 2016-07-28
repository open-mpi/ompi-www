<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 19:03:03 2015" -->
<!-- isoreceived="20150903230303" -->
<!-- sent="Thu, 3 Sep 2015 16:02:42 -0700" -->
<!-- isosent="20150903230242" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="CAAvDA14DUtTwoxvN6AzQ4JOU2jv5A3NXuRtmNmm+VEbXVyyy0w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tUCCduM_ecMpkUNFQHdou3uvgAMgTyodQC9mYi3UT-3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove --without-hwloc configure option<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 19:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17952.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>You have the nature of my question correct.
<br>
To restate:
<br>
<p>Imagine somebody is developing an experimental platform (such as a research
<br>
OS) and they want an MPI for it.
<br>
Additionally assume that hwloc (the embedded one or otherwise) doesn't
<br>
build at all for this platform.
<br>
It is my understanding (please correct if I've got it wrong) that currently
<br>
they can configure using --without-hwloc.
<br>
My concern is that if --without-hwloc is dropped then they cannot build
<br>
Open MPI at all without first porting hwloc.
<br>
<p>-Paul
<br>
<p>On Thu, Sep 3, 2015 at 3:36 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just to be clear, your proposal is to abort if openmpi is configured with
</span><br>
<span class="quotelev1">&gt; --without-hwloc, right ?
</span><br>
<span class="quotelev1">&gt; ( the --with-hwloc option is not removed because we want to keep the
</span><br>
<span class="quotelev1">&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I understand correctly, Paul's point is that if openmpi is ported to a
</span><br>
<span class="quotelev1">&gt; new architecture for which hwloc has not been ported yet (embedded hwloc or
</span><br>
<span class="quotelev1">&gt; external hwloc), then the very first step is to port hwloc before ompi can
</span><br>
<span class="quotelev1">&gt; be built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did I get it right Paul ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice, what would happen in such a case ?
</span><br>
<span class="quotelev1">&gt; embedded hwloc cannot be built ?
</span><br>
<span class="quotelev1">&gt; hwloc returns little or no information ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc reports
</span><br>
<span class="quotelev1">&gt; 16 sockets with one core each and no cache. though this is not correct,
</span><br>
<span class="quotelev1">&gt; that can be seen as equivalent to the real config by ompi, so this is not
</span><br>
<span class="quotelev1">&gt; really an issue for ompi.
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
<span class="quotelev1">&gt; On Friday, September 4, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No - hwloc is embedded in OMPI anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2015, at 11:09 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 3, 2015 at 8:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know of a reason why we shouldn&#226;&#128;&#153;t do this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would doing this mean that a port to a new system would require that one
</span><br>
<span class="quotelev2">&gt;&gt; first perform a full hwloc port?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17942.php">http://www.open-mpi.org/community/lists/devel/2015/09/17942.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17952.php">http://www.open-mpi.org/community/lists/devel/2015/09/17952.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17952.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17955.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
