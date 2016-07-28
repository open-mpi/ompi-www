<?
$subject_val = "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 15:45:13 2007" -->
<!-- isoreceived="20071204204513" -->
<!-- sent="Tue, 04 Dec 2007 21:44:59 +0100" -->
<!-- isosent="20071204204459" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4" -->
<!-- id="1196801099.5744.1.camel_at_y-boda.ydc.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B530727700D_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 15:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4591.php">de Almeida, Valmor F.: "[OMPI users] suggested  intel compiler version for openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-12-04 at 15:28 -0500, de Almeida, Valmor F. wrote:
<br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2007-12-04 at 09:33 +0100, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sun, 2007-12-02 at 21:27 -0500, de Almeida, Valmor F. wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Run an nm on opal/mca/memory/ptmalloc2/.libs/malloc.o and check if
</span><br>
<span class="quotelev3">&gt; &gt; &gt; malloc is defined in there.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This seems to be the problem i have when compiling with pathscale.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It removes the malloc (public_mALLOc) function from the objectfile but
</span><br>
<span class="quotelev3">&gt; &gt; &gt; leaves the free (public_fREe) in there, resulting in malloc/free
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mismatch.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For pathscale the solution for me was to add -fno-builtin.
</span><br>
<span class="quotelev2">&gt; &gt; Now ompi_info doesn't segfault anymore.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Check if the intel 10 has something similar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the nm output. The no builtin compiler option you mentioned above seems to belong to gcc. I have compiled openmpi-1.2.4 with the gcc-4.1.2 suite without problems.
</span><br>
<p>Ok, it was a long short anyway.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4591.php">de Almeida, Valmor F.: "[OMPI users] suggested  intel compiler version for openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
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
