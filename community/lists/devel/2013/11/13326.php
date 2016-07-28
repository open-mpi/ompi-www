<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 08:16:02 2013" -->
<!-- isoreceived="20131125131602" -->
<!-- sent="Mon, 25 Nov 2013 14:15:54 +0100" -->
<!-- isosent="20131125131554" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="1722264.d7AGG6dkXu_at_rico" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 08:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13311.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 23 November 2013 21:50:34 J&#195;&#182;rg Bornschein wrote:
<br>
<span class="quotelev1">&gt; On 23.11.2013, at 21:42, J&#195;&#182;rg Bornschein &lt;jb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I&#226;&#128;&#153;m typically compiling with
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  ./configure &#226;&#128;&#148;with-cuda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m actually compiling with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ./configure &#226;&#128;&#148;with-cuda &#226;&#128;&#148;disable-vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; because otherwise I get a compile time error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/u/bornj/software-old/src/openmpi-1.7.3/ompi/contrib/vt/vt/vtlib' CC      
</span><br>
<span class="quotelev1">&gt; libvt_la-vt_cudart.lo
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
<span class="quotelev1">&gt; vt_cudart.c:2725:15: error: 'vt_cupti_events_enabled' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function) vt_cudart.c:2725:15: note: each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once for each function it appears in
</span><br>
<p>FYI, this issue is fixed in revision 29754. Thanks for the hint J&#195;&#182;rg!
<br>
<p>Kind regards,
<br>
Matthias Jurenz
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     j
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; but I tried combining it with various other options. OMPI builds fine, but
</span><br>
<span class="quotelev2">&gt; &gt; when I try to run programs compiled against it I always get:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /a.out: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so:
</span><br>
<span class="quotelev2">&gt; &gt; undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That error even seems to make sense, because the code in ompi/mca/pml/ob1/
</span><br>
<span class="quotelev2">&gt; &gt; refers to common_cuda.[ch], but it does not seem to link against it's
</span><br>
<span class="quotelev2">&gt; &gt; dynamic binary.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am I missing something?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    jb
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<pre>
-- 
Matthias Jurenz
Technische Universit&#195;&#164;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone: +49 (351) 463-31945
Fax: +49 (351) 463-37773
E-Mail: matthias.jurenz_at_[hidden]

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13326/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13327.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13325.php">Nadia Derbey: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13311.php">J&#246;rg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
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
