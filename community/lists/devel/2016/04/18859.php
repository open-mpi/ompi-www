<?
$subject_val = "Re: [OMPI devel] Open MPI v2.0.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 30 00:20:21 2016" -->
<!-- isoreceived="20160430042021" -->
<!-- sent="Fri, 29 Apr 2016 22:20:18 -0600" -->
<!-- isosent="20160430042018" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v2.0.0rc2" -->
<!-- id="57243282.6030300_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B466AA6F-24DE-4FEA-9619-24FF3DF73907_at_cisco.com" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-30 00:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="18858.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>In reply to:</strong> <a href="18834.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/28/2016 05:01 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; At long last, here's the next v2.0.0 release candidate: 2.0.0rc2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We didn't keep a good list of all the things that have changed since rc1 -- but it's many things.  Here's a link to the NEWS file for v2.0.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://github.com/open-mpi/ompi-release/blob/v2.x/NEWS">https://github.com/open-mpi/ompi-release/blob/v2.x/NEWS</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test test test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I see that --enable-mpi-cxx appears to default to disabled now, but I 
<br>
don't see any mention of it in the NEWS.
<br>
<p><a href="https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809">https://github.com/open-mpi/ompi-release/commit/84f1e14b17dcc467e315038596535d8c7717c809</a>
<br>
<p>I suspect I'll keep this enabled in the Fedora openmpi builds just 
<br>
because.  But I could be persuaded otherwise.
<br>
<p>Also, I see mention of improved MPI_THREAD_MULTIPLE support but that it 
<br>
still defaults to disabled, so I assume it probably should still be 
<br>
disabled in the basic fedora package.
<br>
<p>Also filed <a href="https://github.com/open-mpi/ompi/issues/1609">https://github.com/open-mpi/ompi/issues/1609</a> for failing to 
<br>
find system pmix library.
<br>
<p>I think that's it for me so far.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="18858.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>In reply to:</strong> <a href="18834.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="18860.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Reply:</strong> <a href="18863.php">Howard Pritchard: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
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
