<?
$subject_val = "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 03:33:21 2007" -->
<!-- isoreceived="20071204083321" -->
<!-- sent="Tue, 04 Dec 2007 09:33:12 +0100" -->
<!-- isosent="20071204083312" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4" -->
<!-- id="1196757192.29992.61.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B53071D7AA8_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers w/	openmpi-1.2.4<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 03:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4584.php">Jeffrey M Ceason: "[OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>In reply to:</strong> <a href="4578.php">de Almeida, Valmor F.: "[OMPI users] Segmentation fault: intel 10.1.008 compilers w/ openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4587.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4587.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2007-12-02 at 21:27 -0500, de Almeida, Valmor F. wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After compiling ompi-1.2.4 with the intel compiler suite 10.1.008, I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -&gt;mpicxx --showme
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -&gt;ompi_info
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 10.1.008 is the only one I know that officially supports the linux
</span><br>
<span class="quotelev1">&gt; kernel 2.6 and glibc-2.6 that I have on my system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; config.log file attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help appreciated.
</span><br>
<p>Run an nm on opal/mca/memory/ptmalloc2/.libs/malloc.o and check if
<br>
malloc is defined in there.
<br>
<p>This seems to be the problem i have when compiling with pathscale.
<br>
It removes the malloc (public_mALLOc) function from the objectfile but
<br>
leaves the free (public_fREe) in there, resulting in malloc/free
<br>
mismatch.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4586.php">hbtcx243_at_[hidden]: "Re: [OMPI users] large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4584.php">Jeffrey M Ceason: "[OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>In reply to:</strong> <a href="4578.php">de Almeida, Valmor F.: "[OMPI users] Segmentation fault: intel 10.1.008 compilers w/ openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4587.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4587.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
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
