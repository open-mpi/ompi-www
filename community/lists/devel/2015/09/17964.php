<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 08:25:16 2015" -->
<!-- isoreceived="20150904122516" -->
<!-- sent="Fri, 4 Sep 2015 05:25:13 -0700" -->
<!-- isosent="20150904122513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="D9E73430-CE57-4671-9EDA-ADFAE4E6286C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150904170839.2c7cca80f2b70fdaf7a3e56f_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 08:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds, then, like removing &#226;&#128;&#148;without-hwloc will do no harm. At worst, hwloc might report inaccurate info, but that won&#226;&#128;&#153;t stop us from running with appropriate cmd line options (e.g., to set the #slots and bind-to none).
<br>
<p>Unless there are any further concerns, I&#226;&#128;&#153;ll prep the PR
<br>
<p><p><span class="quotelev1">&gt; On Sep 4, 2015, at 1:08 AM, Kawashima, Takahiro &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a developer of Fujitsu MPI for K computer and Fujitsu
</span><br>
<span class="quotelev1">&gt; PRIMEHPC FX10/FX100 (SPARC-based CPU).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though I'm not familiar with the hwloc code and didn't know
</span><br>
<span class="quotelev1">&gt; the issue reported by Gilles, I also would be able to help
</span><br>
<span class="quotelev1">&gt; you to fix the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Brice,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, even if hwloc is not fully ported, it should build and ompi 
</span><br>
<span class="quotelev2">&gt;&gt; should get something usable.
</span><br>
<span class="quotelev2">&gt;&gt; in this case, i have no objection removing the --without-hwloc configure 
</span><br>
<span class="quotelev2">&gt;&gt; option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; you can contact me off-list regarding the FX10 specific issue
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
<span class="quotelev2">&gt;&gt; On 9/4/2015 2:31 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 04/09/2015 00:36, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just to be clear, your proposal is to abort if openmpi is configured 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with --without-hwloc, right ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( the --with-hwloc option is not removed because we want to keep the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if I understand correctly, Paul's point is that if openmpi is ported 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a new architecture for which hwloc has not been ported yet 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (embedded hwloc or external hwloc), then the very first step is to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; port hwloc before ompi can be built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did I get it right Paul ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice, what would happen in such a case ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; embedded hwloc cannot be built ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc returns little or no information ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it's a new operating system and it supports at least things like 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sysconf, you will get a Machine object with one PUs per logical processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it's a new platform running Linux, they are supposed to tell Linux 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least package/core/thread information. That's what we have for ARM 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for instance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Missing topology detection can be worked around easily (with XML and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; synthetic description, what we did for BlueGene/Q before adding manual 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support for that specific processor). Binding support can't.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And once you get binding, you get x86-topology even if the operating 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system isn't supported (using cpuid).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reports 16 sockets with one core each and no cache. though this is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not correct, that can be seen as equivalent to the real config by 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi, so this is not really an issue for ompi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you help fixing this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue is indeed with supercomputers with uncommon architectures 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like this one.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17961.php">http://www.open-mpi.org/community/lists/devel/2015/09/17961.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17961.php">http://www.open-mpi.org/community/lists/devel/2015/09/17961.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
