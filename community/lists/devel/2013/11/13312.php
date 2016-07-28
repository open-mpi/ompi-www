<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 22:56:52 2013" -->
<!-- isoreceived="20131124035652" -->
<!-- sent="Sun, 24 Nov 2013 04:56:51 +0100" -->
<!-- isosent="20131124035651" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="CAGR4S9FF6kj=g8K_-B_M+_KSSBv87rjJpeTZWkS2HA-j2zftUw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="93626187-4AE9-4623-B0AF-7288B534251D_at_capsec.org" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 22:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13313.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13311.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13311.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13315.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13315.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VT is getting out of sync with CUDA from time to time, this already
<br>
happened before.
<br>
<p>- D.
<br>
<p><p>2013/11/24 J&#246;rg Bornschein &lt;jb_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On 23.11.2013, at 21:42, J&#246;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m typically compiling with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure &#151;with-cuda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m actually compiling with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ./configure &#151;with-cuda &#151;disable-vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; because otherwise I get a compile time error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/u/bornj/software-old/src/openmpi-1.7.3/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;   CC       libvt_la-vt_cudart.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_pform_linux.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_thrd.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_trc.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_user_comment.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_user_control.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_user_count.lo
</span><br>
<span class="quotelev1">&gt;   CC       libvt_mpi_la-vt_user_marker.lo
</span><br>
<span class="quotelev1">&gt; vt_cudart.c: In function 'cudaLaunch':
</span><br>
<span class="quotelev1">&gt; vt_cudart.c:2725:15: error: 'vt_cupti_events_enabled' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_cudart.c:2725:15: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     j
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but I tried combining it with various other options. OMPI builds fine, but when I try to run programs compiled against it I always get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /a.out: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That error even seems to make sense, because the code in ompi/mca/pml/ob1/ refers to common_cuda.[ch], but it does not
</span><br>
<span class="quotelev2">&gt;&gt; seem to link against it's dynamic binary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    jb
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13313.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13311.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13311.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13315.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13315.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
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
