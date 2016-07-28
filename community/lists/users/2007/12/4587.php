<?
$subject_val = "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 06:18:22 2007" -->
<!-- isoreceived="20071204111822" -->
<!-- sent="Tue, 04 Dec 2007 12:18:10 +0100" -->
<!-- isosent="20071204111810" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4" -->
<!-- id="1196767090.29992.71.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1196757192.29992.61.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 06:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4588.php">doktora v: "[OMPI users] arch question: long running app"</a>
<li><strong>Previous message:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
<li><strong>In reply to:</strong> <a href="4585.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-12-04 at 09:33 +0100, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; On Sun, 2007-12-02 at 21:27 -0500, de Almeida, Valmor F. wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; After compiling ompi-1.2.4 with the intel compiler suite 10.1.008, I get
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;mpicxx --showme
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;ompi_info
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The 10.1.008 is the only one I know that officially supports the linux
</span><br>
<span class="quotelev2">&gt; &gt; kernel 2.6 and glibc-2.6 that I have on my system.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; config.log file attached.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run an nm on opal/mca/memory/ptmalloc2/.libs/malloc.o and check if
</span><br>
<span class="quotelev1">&gt; malloc is defined in there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to be the problem i have when compiling with pathscale.
</span><br>
<span class="quotelev1">&gt; It removes the malloc (public_mALLOc) function from the objectfile but
</span><br>
<span class="quotelev1">&gt; leaves the free (public_fREe) in there, resulting in malloc/free
</span><br>
<span class="quotelev1">&gt; mismatch.
</span><br>
<p>For pathscale the solution for me was to add -fno-builtin.
<br>
Now ompi_info doesn't segfault anymore.
<br>
<p>Check if the intel 10 has something similar.
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
<li><strong>Next message:</strong> <a href="4588.php">doktora v: "[OMPI users] arch question: long running app"</a>
<li><strong>Previous message:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
<li><strong>In reply to:</strong> <a href="4585.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
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
