<?
$subject_val = "Re: [OMPI devel] Open MPI v2.0.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 30 07:16:13 2016" -->
<!-- isoreceived="20160430111613" -->
<!-- sent="Sat, 30 Apr 2016 11:16:10 +0000" -->
<!-- isosent="20160430111610" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v2.0.0rc2" -->
<!-- id="4A9D2262-DC14-4565-A753-D80E156AA7AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="57243282.6030300_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v2.0.0rc2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-30 07:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18861.php">Ralph Castain: "[OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Previous message:</strong> <a href="18859.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="18859.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2016, at 12:20 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see that --enable-mpi-cxx appears to default to disabled now, but I don't see any mention of it in the NEWS.
</span><br>
<p>Doh!  Yes, we do need to mention that in the NEWS.
<br>
<p><span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809">https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect I'll keep this enabled in the Fedora openmpi builds just because.  But I could be persuaded otherwise.
</span><br>
<p>The C++ bindings have actually been deleted from the MPI specification since 3.0.  Disabling them by default is the first step to (eventual) removal from Open MPI.  Note: no date has been set for actual removal; that could be quite a ways in the future.
<br>
<p>Enabling them by default in a downstream package seems fine to me.
<br>
<p><span class="quotelev1">&gt; Also, I see mention of improved MPI_THREAD_MULTIPLE support but that it still defaults to disabled, so I assume it probably should still be disabled in the basic fedora package.
</span><br>
<p>Mmmm.  Good question.
<br>
<p>Anyone have any opinions about this?
<br>
<p><span class="quotelev1">&gt; Also filed <a href="https://github.com/open-mpi/ompi/issues/1609">https://github.com/open-mpi/ompi/issues/1609</a> for failing to find system pmix library.
</span><br>
<p>Thanks!
<br>
<pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18861.php">Ralph Castain: "[OMPI devel] Warnings in 2.0 release candidate"</a>
<li><strong>Previous message:</strong> <a href="18859.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="18859.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
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
