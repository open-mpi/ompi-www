<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 01:31:25 2015" -->
<!-- isoreceived="20150904053125" -->
<!-- sent="Fri, 04 Sep 2015 07:31:22 +0200" -->
<!-- isosent="20150904053122" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="55E92CAA.3010108_at_inria.fr" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 01:31:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>In reply to:</strong> <a href="17952.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/09/2015 00:36, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just to be clear, your proposal is to abort if openmpi is configured
</span><br>
<span class="quotelev1">&gt; with --without-hwloc, right ?
</span><br>
<span class="quotelev1">&gt; ( the --with-hwloc option is not removed because we want to keep the
</span><br>
<span class="quotelev1">&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I understand correctly, Paul's point is that if openmpi is ported
</span><br>
<span class="quotelev1">&gt; to a new architecture for which hwloc has not been ported yet
</span><br>
<span class="quotelev1">&gt; (embedded hwloc or external hwloc), then the very first step is to
</span><br>
<span class="quotelev1">&gt; port hwloc before ompi can be built.
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
<p>If it's a new operating system and it supports at least things like
<br>
sysconf, you will get a Machine object with one PUs per logical processor.
<br>
<p>If it's a new platform running Linux, they are supposed to tell Linux at
<br>
least package/core/thread information. That's what we have for ARM for
<br>
instance.
<br>
<p>Missing topology detection can be worked around easily (with XML and
<br>
synthetic description, what we did for BlueGene/Q before adding manual
<br>
support for that specific processor). Binding support can't.
<br>
And once you get binding, you get x86-topology even if the operating
<br>
system isn't supported (using cpuid).
<br>
<p><span class="quotelev1">&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc
</span><br>
<span class="quotelev1">&gt; reports 16 sockets with one core each and no cache. though this is not
</span><br>
<span class="quotelev1">&gt; correct, that can be seen as equivalent to the real config by ompi, so
</span><br>
<span class="quotelev1">&gt; this is not really an issue for ompi.
</span><br>
<p>Can you help fixing this?
<br>
<p>The issue is indeed with supercomputers with uncommon architectures like
<br>
this one.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, September 4, 2015, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     No - hwloc is embedded in OMPI anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sep 3, 2015, at 11:09 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','phhargrove_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Sep 3, 2015 at 8:03 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Does anyone know of a reason why we shouldn&#146;t do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Would doing this mean that a port to a new system would require
</span><br>
<span class="quotelev2">&gt;&gt;     that one first perform a full hwloc port?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt;     Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17942.php">http://www.open-mpi.org/community/lists/devel/2015/09/17942.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17952.php">http://www.open-mpi.org/community/lists/devel/2015/09/17952.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17957.php">Ralph Castain: "Re: [OMPI devel] periodic hangs of hello_usempi.x on uh jenkins slave"</a>
<li><strong>In reply to:</strong> <a href="17952.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
