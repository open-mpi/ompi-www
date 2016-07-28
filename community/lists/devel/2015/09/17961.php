<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 04:08:46 2015" -->
<!-- isoreceived="20150904080846" -->
<!-- sent="Fri, 4 Sep 2015 08:08:39 +0000" -->
<!-- isosent="20150904080839" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="20150904170839.2c7cca80f2b70fdaf7a3e56f_at_jp.fujitsu.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55E92F88.8050203_at_rist.or.jp" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 04:08:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17962.php">Gilles Gouaillardet: "[OMPI devel] no more cast away const"</a>
<li><strong>Previous message:</strong> <a href="17960.php">Gilles Gouaillardet: "[OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>

<br>
I'm a developer of Fujitsu MPI for K computer and Fujitsu
<br>
PRIMEHPC FX10/FX100 (SPARC-based CPU).
<br>

<br>
Though I'm not familiar with the hwloc code and didn't know
<br>
the issue reported by Gilles, I also would be able to help
<br>
you to fix the issue.
<br>

<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>

<br>
<span class="quotelev1">&gt; Thanks Brice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line, even if hwloc is not fully ported, it should build and ompi 
</span><br>
<span class="quotelev1">&gt; should get something usable.
</span><br>
<span class="quotelev1">&gt; in this case, i have no objection removing the --without-hwloc configure 
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can contact me off-list regarding the FX10 specific issue
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
<span class="quotelev1">&gt; On 9/4/2015 2:31 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Le 04/09/2015 00:36, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; just to be clear, your proposal is to abort if openmpi is configured 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with --without-hwloc, right ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ( the --with-hwloc option is not removed because we want to keep the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if I understand correctly, Paul's point is that if openmpi is ported 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to a new architecture for which hwloc has not been ported yet 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (embedded hwloc or external hwloc), then the very first step is to 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; port hwloc before ompi can be built.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; did I get it right Paul ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice, what would happen in such a case ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; embedded hwloc cannot be built ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc returns little or no information ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it's a new operating system and it supports at least things like 
</span><br>
<span class="quotelev2">&gt; &gt; sysconf, you will get a Machine object with one PUs per logical processor.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it's a new platform running Linux, they are supposed to tell Linux 
</span><br>
<span class="quotelev2">&gt; &gt; at least package/core/thread information. That's what we have for ARM 
</span><br>
<span class="quotelev2">&gt; &gt; for instance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Missing topology detection can be worked around easily (with XML and 
</span><br>
<span class="quotelev2">&gt; &gt; synthetic description, what we did for BlueGene/Q before adding manual 
</span><br>
<span class="quotelev2">&gt; &gt; support for that specific processor). Binding support can't.
</span><br>
<span class="quotelev2">&gt; &gt; And once you get binding, you get x86-topology even if the operating 
</span><br>
<span class="quotelev2">&gt; &gt; system isn't supported (using cpuid).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reports 16 sockets with one core each and no cache. though this is 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not correct, that can be seen as equivalent to the real config by 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi, so this is not really an issue for ompi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you help fixing this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue is indeed with supercomputers with uncommon architectures 
</span><br>
<span class="quotelev2">&gt; &gt; like this one.</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17962.php">Gilles Gouaillardet: "[OMPI devel] no more cast away const"</a>
<li><strong>Previous message:</strong> <a href="17960.php">Gilles Gouaillardet: "[OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
