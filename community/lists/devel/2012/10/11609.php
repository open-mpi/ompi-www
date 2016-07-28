<?
$subject_val = "Re: [OMPI devel] [patch] SEGV on processing unexpected messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 10:20:52 2012" -->
<!-- isoreceived="20121018142052" -->
<!-- sent="Thu, 18 Oct 2012 16:20:50 +0200" -->
<!-- isosent="20121018142050" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] SEGV on processing unexpected messages" -->
<!-- id="FE709567-05E7-42C2-92EA-31ECC6E8C9E5_at_icl.utk.edu" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E8AD7BF_at_G01JPEXMBYT02" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] SEGV on processing unexpected messages<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 10:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11608.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages"</a>
<li><strong>In reply to:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Reply:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Nice catch. A nicer fix will be to check the type of the header, and copy the header accordingly. Attached is a patch following this idea.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p>On Oct 18, 2012, at 03:06 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found another issue in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In MCA_PML_OB1_RECV_FRAG_INIT macro in ompi/mca/pml/ob1/pml_ob1_recvfrag.h
</span><br>
<span class="quotelev1">&gt; file, we copy a PML header from an arrived message to another buffer,
</span><br>
<span class="quotelev1">&gt; as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    frag-&gt;hdr = *(mca_pml_ob1_hdr_t*)hdr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On this copy, we cast hdr to mca_pml_ob1_hdr_t, which is a union
</span><br>
<span class="quotelev1">&gt; of all actual header structs such as mca_pml_ob1_match_hdr_t.
</span><br>
<span class="quotelev1">&gt; This means we copy the buffer of the size of the largest header
</span><br>
<span class="quotelev1">&gt; even if the arrived message is smaller than it. This can cause
</span><br>
<span class="quotelev1">&gt; SEGV if the arrived message is small and it is laid on the bottom
</span><br>
<span class="quotelev1">&gt; of the page. Actually, my tofu BTL, the BTL component of Fujitsu
</span><br>
<span class="quotelev1">&gt; MPI for K computer, suffered from this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch will be one of possible fixes for this issue.
</span><br>
<span class="quotelev1">&gt; This fix assume that the arrived header has at least segs[0].seg_len
</span><br>
<span class="quotelev1">&gt; bytes. This is always true for current Open MPI code because hdr
</span><br>
<span class="quotelev1">&gt; equals to segs[0].seg_addr.pval. There may exist a smarter fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; &lt;recvfrag-segv-fix.patch&gt;&lt;License.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11609/hdr_copy.patch">hdr_copy.patch</a>
</ul>
<!-- attachment="hdr_copy.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11608.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages"</a>
<li><strong>In reply to:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Reply:</strong> <a href="11618.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
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
