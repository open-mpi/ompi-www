<?
$subject_val = "[OMPI devel] SVN trunk PSM MTL is busted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 10:56:00 2012" -->
<!-- isoreceived="20120524145600" -->
<!-- sent="Thu, 24 May 2012 10:55:55 -0400" -->
<!-- isosent="20120524145555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] SVN trunk PSM MTL is busted" -->
<!-- id="4F86A0D6-240D-4D16-9435-070BA8077101_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] SVN trunk PSM MTL is busted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 10:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11030.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<li><strong>Previous message:</strong> <a href="11028.php">TERRY DONTJE: "[OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11030.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<li><strong>Reply:</strong> <a href="11030.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per Brian's recent MTL updates, the PSM MTL is busted.  I notice the following when I run on a machine that has the PSM software stack installed:
<br>
<p>[ompi_r00lez:19108] mca: base: component_find: unable to open /scratch/local/jsquyres/bogus/lib/openmpi/mca_mtl_psm: /scratch/local/jsquyres/bogus/lib/openmpi/mca_mtl_psm.so: undefined symbol: ompi_mtl_psm_imrecv (ignored)
<br>
<p>I'll file a bug about this; I'm assuming this is an issue the 1.7 RMs will care about.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11030.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<li><strong>Previous message:</strong> <a href="11028.php">TERRY DONTJE: "[OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11030.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<li><strong>Reply:</strong> <a href="11030.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
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
