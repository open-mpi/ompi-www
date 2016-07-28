<?
$subject_val = "Re: [OMPI devel] New SM BTL Initialization Take 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 12:43:30 2013" -->
<!-- isoreceived="20130111174330" -->
<!-- sent="Fri, 11 Jan 2013 17:43:26 +0000" -->
<!-- isosent="20130111174326" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New SM BTL Initialization Take 2" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B18644E40_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B18634991_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New SM BTL Initialization Take 2<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 12:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11924.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding"</a>
<li><strong>Previous message:</strong> <a href="11922.php">Jeff Squyres (jsquyres): "[OMPI devel] New warning in btl_openib_endpoint.h"</a>
<li><strong>In reply to:</strong> <a href="11908.php">Gutierrez, Samuel K: "[OMPI devel] New SM BTL Initialization Take 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In r27789.
<br>
<p>On Jan 9, 2013, at 1:24 PM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've reworked the SM BTL initialization to address some of the concerns voiced last week. The update is pretty simple and like last week's change does not use RML for initialization.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short Description of Change:
</span><br>
<span class="quotelev1">&gt; All local ranks agree upon a well-known rendezvous point during component init.
</span><br>
<span class="quotelev1">&gt; Rank 0 writes initialization data into that file.
</span><br>
<span class="quotelev1">&gt; During add_procs the rest of the local ranks read from that file and extract the info required for attach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The repo is here: <a href="https://bitbucket.org/samuelkgutierrez/rmllesssm2">https://bitbucket.org/samuelkgutierrez/rmllesssm2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to commit the changes on Friday, so please take a look and tell me what you think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
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
<li><strong>Next message:</strong> <a href="11924.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding"</a>
<li><strong>Previous message:</strong> <a href="11922.php">Jeff Squyres (jsquyres): "[OMPI devel] New warning in btl_openib_endpoint.h"</a>
<li><strong>In reply to:</strong> <a href="11908.php">Gutierrez, Samuel K: "[OMPI devel] New SM BTL Initialization Take 2"</a>
<!-- nextthread="start" -->
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
