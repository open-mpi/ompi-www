<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 10:48:07 2013" -->
<!-- isoreceived="20130130154807" -->
<!-- sent="Wed, 30 Jan 2013 08:48:02 -0700" -->
<!-- isosent="20130130154802" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="20130130154802.GG99519_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130130162814.065e8eea.pegasus_at_nerv.eu.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 10:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12076.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12081.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12081.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try configuring with --with-platform=contrib/platform/lanl/cray_xe6/optimized-nopanasas . That might work. If it doesn't try the optimized-lustre file from the same directory in trunk.
<br>
<p>-Nathan
<br>
<p>On Wed, Jan 30, 2013 at 04:28:14PM +0100, Jure Pe??ar wrote:
<br>
<span class="quotelev1">&gt; On Mon, 28 Jan 2013 12:28:34 -0800
</span><br>
<span class="quotelev1">&gt; Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I will be happy to retest on both the XC30 and XE6 at NERSC from a nightly
</span><br>
<span class="quotelev2">&gt; &gt; tarball with the fixes.
</span><br>
<span class="quotelev2">&gt; &gt; Please give me a heads up when that is available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd be interested in that too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry to hijack a thread, but I have to build OpenMPI on Cray XE6 to get an openmpi-only app running and thought it makes sense to have all cray things in one thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working with 1.7rc6 tarball and passing these arguments to configure script: --prefix, --with-ugni, --with-ugni-libdir, --with-ugni-includedir
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Build is successful and I get mca_btl_ugni.so in lib/openmpi/. However running ompi_info gives this on stderr:
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open $prefix/lib/openmpi/mca_btl_ugni: $prefix/lib/openmpi/mca_btl_ugni.so: undefined symbol: ompi_common_ugni_module (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I put $prefix in there to shorten the whole text)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and ugni is not loaded and not available as btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the undefined symbol comes from openmpi, I think this is openmpi thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tried 1.7rc7r27980 and see this problem still exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jure Pe??ar
</span><br>
<span class="quotelev1">&gt; <a href="http://jure.pecar.org">http://jure.pecar.org</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12079.php">Nathan Hjelm: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>Previous message:</strong> <a href="12077.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12076.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12081.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12081.php">Jure Pečar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
