<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 03:59:54 2016" -->
<!-- isoreceived="20160208085954" -->
<!-- sent="Mon, 08 Feb 2016 17:59:45 +0900" -->
<!-- isosent="20160208085945" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="wpbgn2ilas5gmlh1wmbc8e82.1454921985356_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] Fortran vs C reductions" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 03:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That being said, should we remove these fortran types from include files and libs when ompi is configure'd without fortran support ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW: is there a reason you don't want to just use the C datatypes?&#194;&#160; The fundamental output of the index is an integer value -- casting it to a float of some flavor doesn't fundamentally change its value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The code in question is not mine.&#194;&#160; I have suggested to the developers that they should use the correct C types.&#194;&#160; The reason I became aware of this issue is that one of my colleagues compiled and ran this code on a system where OpenMPI was built without Fortran support and the code started failing with errors from MPI which were not seen on other systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you use an MPI library compiled without Fortran support, you should expect precisely nothing related to Fortran to work.&#194;&#160; You might get more than this because the universe is being nice to you, but you should treat it as serendipity when something works, not a bug when something doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jeff Hammond
</span><br>
<span class="quotelev1">&gt;jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28459/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
