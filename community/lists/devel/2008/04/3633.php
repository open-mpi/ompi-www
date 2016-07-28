<?
$subject_val = "Re: [OMPI devel] [PATCH] Fix compilation error without XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 15:52:29 2008" -->
<!-- isoreceived="20080402195229" -->
<!-- sent="Wed, 2 Apr 2008 15:52:18 -0400" -->
<!-- isosent="20080402195218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Fix compilation error without XRC" -->
<!-- id="37B0C443-CFB9-4246-A039-BBE186A39D43_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080402122112.GB9436_at_mx.loc" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Fix compilation error without XRC<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 15:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3632.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3611.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks; applied <a href="https://svn.open-mpi.org/trac/ompi/changeset/18076">https://svn.open-mpi.org/trac/ompi/changeset/18076</a>.
<br>
<p><p>On Apr 2, 2008, at 8:21 AM, Bernhard Fischer wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	* ompi/mca/btl/openib/btl_openib_component.c (init_one_hca):
</span><br>
<span class="quotelev1">&gt; 	mca_btl_openib_open_xrc_domain and
</span><br>
<span class="quotelev1">&gt; 	mca_btl_openib_close_xrc_domain depend on XRC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixes the compilation failure as in the head of attached patch.
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt; Bernhard
</span><br>
<span class="quotelev1">&gt; &lt;ompi-trunk.openib-xrc_domain. 
</span><br>
<span class="quotelev1">&gt; 01.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3632.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3611.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix compilation error without XRC"</a>
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
