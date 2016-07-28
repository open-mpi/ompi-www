<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 01:43:41 2015" -->
<!-- isoreceived="20150904054341" -->
<!-- sent="Fri, 4 Sep 2015 14:43:36 +0900" -->
<!-- isosent="20150904054336" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="55E92F88.8050203_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55E92CAA.3010108_at_inria.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 01:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17960.php">Gilles Gouaillardet: "[OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="17958.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17958.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brice,
<br>
<p>bottom line, even if hwloc is not fully ported, it should build and ompi 
<br>
should get something usable.
<br>
in this case, i have no objection removing the --without-hwloc configure 
<br>
option.
<br>
<p>you can contact me off-list regarding the FX10 specific issue
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/4/2015 2:31 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 04/09/2015 00:36, Gilles Gouaillardet a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; just to be clear, your proposal is to abort if openmpi is configured 
</span><br>
<span class="quotelev2">&gt;&gt; with --without-hwloc, right ?
</span><br>
<span class="quotelev2">&gt;&gt; ( the --with-hwloc option is not removed because we want to keep the 
</span><br>
<span class="quotelev2">&gt;&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if I understand correctly, Paul's point is that if openmpi is ported 
</span><br>
<span class="quotelev2">&gt;&gt; to a new architecture for which hwloc has not been ported yet 
</span><br>
<span class="quotelev2">&gt;&gt; (embedded hwloc or external hwloc), then the very first step is to 
</span><br>
<span class="quotelev2">&gt;&gt; port hwloc before ompi can be built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; did I get it right Paul ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice, what would happen in such a case ?
</span><br>
<span class="quotelev2">&gt;&gt; embedded hwloc cannot be built ?
</span><br>
<span class="quotelev2">&gt;&gt; hwloc returns little or no information ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it's a new operating system and it supports at least things like 
</span><br>
<span class="quotelev1">&gt; sysconf, you will get a Machine object with one PUs per logical processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it's a new platform running Linux, they are supposed to tell Linux 
</span><br>
<span class="quotelev1">&gt; at least package/core/thread information. That's what we have for ARM 
</span><br>
<span class="quotelev1">&gt; for instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Missing topology detection can be worked around easily (with XML and 
</span><br>
<span class="quotelev1">&gt; synthetic description, what we did for BlueGene/Q before adding manual 
</span><br>
<span class="quotelev1">&gt; support for that specific processor). Binding support can't.
</span><br>
<span class="quotelev1">&gt; And once you get binding, you get x86-topology even if the operating 
</span><br>
<span class="quotelev1">&gt; system isn't supported (using cpuid).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc 
</span><br>
<span class="quotelev2">&gt;&gt; reports 16 sockets with one core each and no cache. though this is 
</span><br>
<span class="quotelev2">&gt;&gt; not correct, that can be seen as equivalent to the real config by 
</span><br>
<span class="quotelev2">&gt;&gt; ompi, so this is not really an issue for ompi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you help fixing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is indeed with supercomputers with uncommon architectures 
</span><br>
<span class="quotelev1">&gt; like this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, September 4, 2015, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     No - hwloc is embedded in OMPI anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Sep 3, 2015, at 11:09 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','phhargrove_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Thu, Sep 3, 2015 at 8:03 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Does anyone know of a reason why we shouldn&#146;t do this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Would doing this mean that a port to a new system would require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     that one first perform a full hwloc port?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Computer Science Department         Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17942.php">http://www.open-mpi.org/community/lists/devel/2015/09/17942.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17952.php">http://www.open-mpi.org/community/lists/devel/2015/09/17952.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17958.php">http://www.open-mpi.org/community/lists/devel/2015/09/17958.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17960.php">Gilles Gouaillardet: "[OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="17958.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>In reply to:</strong> <a href="17958.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
