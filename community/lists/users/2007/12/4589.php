<?
$subject_val = "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 15:29:18 2007" -->
<!-- isoreceived="20071204202918" -->
<!-- sent="Tue, 04 Dec 2007 15:28:53 -0500" -->
<!-- isosent="20071204202853" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B530727700D_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1196767090.29992.71.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4<br>
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 15:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4590.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4588.php">doktora v: "[OMPI users] arch question: long running app"</a>
<li><strong>In reply to:</strong> <a href="4587.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4590.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4590.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2007-12-04 at 09:33 +0100, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, 2007-12-02 at 21:27 -0500, de Almeida, Valmor F. wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Run an nm on opal/mca/memory/ptmalloc2/.libs/malloc.o and check if
</span><br>
<span class="quotelev2">&gt; &gt; malloc is defined in there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This seems to be the problem i have when compiling with pathscale.
</span><br>
<span class="quotelev2">&gt; &gt; It removes the malloc (public_mALLOc) function from the objectfile but
</span><br>
<span class="quotelev2">&gt; &gt; leaves the free (public_fREe) in there, resulting in malloc/free
</span><br>
<span class="quotelev2">&gt; &gt; mismatch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For pathscale the solution for me was to add -fno-builtin.
</span><br>
<span class="quotelev1">&gt; Now ompi_info doesn't segfault anymore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check if the intel 10 has something similar.
</span><br>
<p>Below is the nm output. The no builtin compiler option you mentioned above seems to belong to gcc. I have compiled openmpi-1.2.4 with the gcc-4.1.2 suite without problems.
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor
-&gt;nm ./opal/mca/memory/ptmalloc2/.libs/malloc.o | grep -i &quot;malloc&quot;
00003faa T __malloc_check_init
00000004 D __malloc_hook
000008b8 B __malloc_initialize_hook
00000010 D __malloc_initialized
00003944 t _int_icomalloc
00000c36 T _int_malloc
000008b0 b disallow_malloc_check
00003742 T independent_comalloc
000006a8 T malloc
00000000 t malloc_atfork
00002224 t malloc_check
00001184 t malloc_consolidate
00002c00 T malloc_get_state
00000410 t malloc_hook_ini
000044f2 t malloc_init_state
00002d84 T malloc_set_state
00002b5e t malloc_starter
00003ad4 T malloc_trim
00003b5e T malloc_usable_size
         U opal_mem_free_ptmalloc2_mmap
         U opal_mem_free_ptmalloc2_munmap
000017d6 t opal_mem_free_ptmalloc2_sbrk
00004032 t ptmalloc_init
000044b0 t ptmalloc_init_minimal
000001dc t ptmalloc_lock_all
000002f6 t ptmalloc_unlock_all
0000036a t ptmalloc_unlock_all2
0000129e t sYSMALLOc
00000870 b save_malloc_hook
000008ac b using_malloc_checking
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4590.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4588.php">doktora v: "[OMPI users] arch question: long running app"</a>
<li><strong>In reply to:</strong> <a href="4587.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4590.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Reply:</strong> <a href="4590.php">흆e Sandgren: "Re: [OMPI users] Segmentation fault: intel	10.1.008	compilers	w/openmpi-1.2.4"</a>
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
