<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 10:28:19 2013" -->
<!-- isoreceived="20130130152819" -->
<!-- sent="Wed, 30 Jan 2013 16:28:14 +0100" -->
<!-- isosent="20130130152814" -->
<!-- name="Jure Pe&#196;&#141;ar" -->
<!-- email="pegasus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="20130130162814.065e8eea.pegasus_at_nerv.eu.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16FboN4ej297AxJVmi6Td-B_itSNhkexK+uLcDTd0osVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI (not quite) on Cray XC30<br>
<strong>From:</strong> Jure Pe&#196;&#141;ar (<em>pegasus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 10:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12034.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 28 Jan 2013 12:28:34 -0800
<br>
Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I will be happy to retest on both the XC30 and XE6 at NERSC from a nightly
</span><br>
<span class="quotelev1">&gt; tarball with the fixes.
</span><br>
<span class="quotelev1">&gt; Please give me a heads up when that is available.
</span><br>
<p>I'd be interested in that too.
<br>
<p>Hello all,
<br>
<p>sorry to hijack a thread, but I have to build OpenMPI on Cray XE6 to get an openmpi-only app running and thought it makes sense to have all cray things in one thread.
<br>
<p>I'm working with 1.7rc6 tarball and passing these arguments to configure script: --prefix, --with-ugni, --with-ugni-libdir, --with-ugni-includedir
<br>
<p>Build is successful and I get mca_btl_ugni.so in lib/openmpi/. However running ompi_info gives this on stderr:
<br>
mca: base: component_find: unable to open $prefix/lib/openmpi/mca_btl_ugni: $prefix/lib/openmpi/mca_btl_ugni.so: undefined symbol: ompi_common_ugni_module (ignored)
<br>
<p>(I put $prefix in there to shorten the whole text)
<br>
<p>and ugni is not loaded and not available as btl.
<br>
<p>Since the undefined symbol comes from openmpi, I think this is openmpi thing.
<br>
<p>I just tried 1.7rc7r27980 and see this problem still exists.
<br>
<p><p><pre>
-- 
Jure Pe&#196;&#141;ar
<a href="http://jure.pecar.org">http://jure.pecar.org</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12034.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
