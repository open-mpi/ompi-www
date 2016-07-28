<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 04:54:18 2009" -->
<!-- isoreceived="20090113095418" -->
<!-- sent="Tue, 13 Jan 2009 10:54:12 +0100" -->
<!-- isosent="20090113095412" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled" -->
<!-- id="1231840452.16220.14.camel_at_ce170155.zmb.uni-essen.de" -->
<!-- inreplyto="98A403D5-0CDF-4803-ADA2-C898AB5BB277_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled<br>
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 04:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5123.php">Gregor Dschung: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>In reply to:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Reply:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Montag, den 12.01.2009, 18:04 -0500 schrieb Jeff Squyres:
<br>
<span class="quotelev1">&gt; I don't see much harm in including this as long as rpath builds are  
</span><br>
<span class="quotelev1">&gt; still the default.  If there's a non-default option to disable rpath  
</span><br>
<span class="quotelev1">&gt; builds, that would be fine with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this patch disable rpath by default, or do you have to explicitly  
</span><br>
<span class="quotelev1">&gt; use the --disable-rpath flag to configure?
</span><br>
<p>You have to pass --disable-rpath explicitely. Building with rpath is
<br>
still the default. I verified by building without passing any option to
<br>
configure and the resulting libs contained an rpath.
<br>
<p>Best regards
<br>
Manuel
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5122/signature.asc">Dies ist ein digital signierter Nachrichtenteil</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5123.php">Gregor Dschung: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>In reply to:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Reply:</strong> <a href="5128.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
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
