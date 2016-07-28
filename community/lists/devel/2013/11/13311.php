<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 21:50:38 2013" -->
<!-- isoreceived="20131124025038" -->
<!-- sent="Sat, 23 Nov 2013 21:50:34 -0500" -->
<!-- isosent="20131124025034" -->
<!-- name="J&#246;rg Bornschein" -->
<!-- email="jb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="93626187-4AE9-4623-B0AF-7288B534251D_at_capsec.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1EC54122-3098-4209-B9AF-9FF62BEC08C3_at_capsec.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CUDA support not working?<br>
<strong>From:</strong> J&#246;rg Bornschein (<em>jb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 21:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13309.php">J&#246;rg Bornschein: "[OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23.11.2013, at 21:42, J&#246;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
<br>
<p>Sorry, 
<br>
<p><span class="quotelev1">&gt; I&#146;m typically compiling with  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure &#151;with-cuda     
</span><br>
<p><p>I&#146;m actually compiling with 
<br>
<p>&nbsp;&nbsp;./configure &#151;with-cuda &#151;disable-vt
<br>
<p>because otherwise I get a compile time error:
<br>
<p>make[5]: Entering directory `/u/bornj/software-old/src/openmpi-1.7.3/ompi/contrib/vt/vt/vtlib'
<br>
&nbsp;&nbsp;CC       libvt_la-vt_cudart.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_pform_linux.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_thrd.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_trc.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_user_comment.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_user_control.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_user_count.lo
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_user_marker.lo
<br>
vt_cudart.c: In function 'cudaLaunch':
<br>
vt_cudart.c:2725:15: error: 'vt_cupti_events_enabled' undeclared (first use in this function)
<br>
vt_cudart.c:2725:15: note: each undeclared identifier is reported only once for each function it appears in
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;j
<br>
<p><p><p><span class="quotelev1">&gt; but I tried combining it with various other options. OMPI builds fine, but when I try to run programs compiled against it I always get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /a.out: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That error even seems to make sense, because the code in ompi/mca/pml/ob1/ refers to common_cuda.[ch], but it does not 
</span><br>
<span class="quotelev1">&gt; seem to link against it's dynamic binary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    jb
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13309.php">J&#246;rg Bornschein: "[OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13326.php">Matthias Jurenz: "Re: [OMPI devel] CUDA support not working?"</a>
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
