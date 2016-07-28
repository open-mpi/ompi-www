<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 18:36:16 2015" -->
<!-- isoreceived="20150903223616" -->
<!-- sent="Fri, 4 Sep 2015 07:36:15 +0900" -->
<!-- isosent="20150903223615" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="CAAkFZ5tUCCduM_ecMpkUNFQHdou3uvgAMgTyodQC9mYi3UT-3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C6C255D5-9C93-4881-8926-A4652529CAFB_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 18:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17951.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch	master	updated.	dev-2436-g7adb9b7"</a>
<li><strong>In reply to:</strong> <a href="17944.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17954.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17954.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17958.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>just to be clear, your proposal is to abort if openmpi is configured with
<br>
--without-hwloc, right ?
<br>
( the --with-hwloc option is not removed because we want to keep the option
<br>
of using an external hwloc library )
<br>
<p>if I understand correctly, Paul's point is that if openmpi is ported to a
<br>
new architecture for which hwloc has not been ported yet (embedded hwloc or
<br>
external hwloc), then the very first step is to port hwloc before ompi can
<br>
be built.
<br>
<p>did I get it right Paul ?
<br>
<p>Brice, what would happen in such a case ?
<br>
embedded hwloc cannot be built ?
<br>
hwloc returns little or no information ?
<br>
<p>for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc reports
<br>
16 sockets with one core each and no cache. though this is not correct,
<br>
that can be seen as equivalent to the real config by ompi, so this is not
<br>
really an issue for ompi.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, September 4, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No - hwloc is embedded in OMPI anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2015, at 11:09 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','phhargrove_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 3, 2015 at 8:03 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know of a reason why we shouldn&#226;&#128;&#153;t do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would doing this mean that a port to a new system would require that one
</span><br>
<span class="quotelev1">&gt; first perform a full hwloc port?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17942.php">http://www.open-mpi.org/community/lists/devel/2015/09/17942.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17951.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch	master	updated.	dev-2436-g7adb9b7"</a>
<li><strong>In reply to:</strong> <a href="17944.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17954.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17954.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17958.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
