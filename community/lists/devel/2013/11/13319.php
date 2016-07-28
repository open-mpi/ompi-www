<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 24 12:08:32 2013" -->
<!-- isoreceived="20131124170832" -->
<!-- sent="Sun, 24 Nov 2013 09:08:13 -0800" -->
<!-- isosent="20131124170813" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="82FE8B9F-98F3-489F-9E76-5F322879760F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D0B57931-D047-45C8-915A-E74E169107FE_at_capsec.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-24 12:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13320.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13318.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13318.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13320.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13320.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2013, at 8:30 AM, J&#246;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 24.11.2013, at 10:22, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The cuda support in the 1.7 series has been evolving - a number of patches have been applied since 1.7.3 was released, and I see another (for optimization) scheduled.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might try the 1.7.4 nightly tarball and see if the problem has been fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same problem with 1.7.4-nightly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I compiled and started my little test program on a machine with actual Infiniband hardware
</span><br>
<span class="quotelev1">&gt; and the problem disappeared! I guess on machines with Inifniband hardware OB1 is not
</span><br>
<span class="quotelev1">&gt; selected at runtime? Is this correct?
</span><br>
<p>Sounds like a bug to me - if cuda is being used, we need to select ob1 regardless. I'll have to let Rolf figure that one out.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still believe that ompi/mca/pml/ob1/* is not linked to common_cuda.*, although it 
</span><br>
<span class="quotelev1">&gt; should. I&#146;m slightly overwhelmed by automake, so I don&#146;t know how to add this
</span><br>
<span class="quotelev1">&gt; reference and try it myself..
</span><br>
<p>Try the attached - should fix the problem.
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    j 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2013, at 7:11 AM, J&#246;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 23.11.2013, at 22:56, Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VT is getting out of sync with CUDA from time to time, this already
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happened before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, thats what I thought and thats why I didn&#146;t mention it as my main issue. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m rather stuck because cuda support and ob1 don&#146;t seem to fit together &#151; at least on my systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  j
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2013/11/24 J&#246;rg Bornschein &lt;jb_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 23.11.2013, at 21:42, J&#246;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I&#146;m typically compiling with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure &#151;with-cuda
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I&#146;m actually compiling with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure &#151;with-cuda &#151;disable-vt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because otherwise I get a compile time error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: Entering directory `/u/bornj/software-old/src/openmpi-1.7.3/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_la-vt_cudart.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_pform_linux.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_thrd.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_trc.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_user_comment.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_user_control.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_user_count.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libvt_mpi_la-vt_user_marker.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_cudart.c: In function 'cudaLaunch':
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_cudart.c:2725:15: error: 'vt_cupti_events_enabled' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_cudart.c:2725:15: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  j
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but I tried combining it with various other options. OMPI builds fine, but when I try to run programs compiled against it I always get:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /a.out: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That error even seems to make sense, because the code in ompi/mca/pml/ob1/ refers to common_cuda.[ch], but it does not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seem to link against it's dynamic binary.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jb
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13319/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13319/pml.diff">pml.diff</a>
</ul>
<!-- attachment="pml.diff" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13319/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13320.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Previous message:</strong> <a href="13318.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>In reply to:</strong> <a href="13318.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13320.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13320.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13322.php">Solibakke Per Bjarte: "Re: [OMPI devel] CUDA support not working?"</a>
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
