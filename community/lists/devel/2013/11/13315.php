<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 24 10:11:24 2013" -->
<!-- isoreceived="20131124151124" -->
<!-- sent="Sun, 24 Nov 2013 10:11:20 -0500" -->
<!-- isosent="20131124151120" -->
<!-- name="J&#246;rg Bornschein" -->
<!-- email="jb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="ADEE93CD-E26D-40A8-B4F8-04D2A39FD37B_at_capsec.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGR4S9FF6kj=g8K_-B_M+_KSSBv87rjJpeTZWkS2HA-j2zftUw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-11-24 10:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13316.php">George Bosilca: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13316.php">George Bosilca: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13316.php">George Bosilca: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13317.php">Ralph Castain: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23.11.2013, at 22:56, Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; VT is getting out of sync with CUDA from time to time, this already
</span><br>
<span class="quotelev1">&gt; happened before.
</span><br>
<p>Yes, thats what I thought and thats why I didn&#146;t mention it as my main issue. 
<br>
<p><p><p>I&#146;m rather stuck because cuda support and ob1 don&#146;t seem to fit together &#151; at least on my systems.
<br>
<p><p>&nbsp;&nbsp;&nbsp;j
<br>
<p><p><p><span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/11/24 J&#246;rg Bornschein &lt;jb_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On 23.11.2013, at 21:42, J&#246;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m typically compiling with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure &#151;with-cuda
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m actually compiling with
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure &#151;with-cuda &#151;disable-vt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; because otherwise I get a compile time error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Entering directory `/u/bornj/software-old/src/openmpi-1.7.3/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_la-vt_cudart.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_pform_linux.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_thrd.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_trc.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_user_comment.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_user_control.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_user_count.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_mpi_la-vt_user_marker.lo
</span><br>
<span class="quotelev2">&gt;&gt; vt_cudart.c: In function 'cudaLaunch':
</span><br>
<span class="quotelev2">&gt;&gt; vt_cudart.c:2725:15: error: 'vt_cupti_events_enabled' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; vt_cudart.c:2725:15: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    j
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I tried combining it with various other options. OMPI builds fine, but when I try to run programs compiled against it I always get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /a.out: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That error even seems to make sense, because the code in ompi/mca/pml/ob1/ refers to common_cuda.[ch], but it does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seem to link against it's dynamic binary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   jb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13316.php">George Bosilca: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>In reply to:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13316.php">George Bosilca: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13316.php">George Bosilca: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13317.php">Ralph Castain: "Re: [OMPI devel] CUDA support not working?"</a>
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
