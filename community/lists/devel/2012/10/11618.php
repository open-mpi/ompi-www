<?
$subject_val = "Re: [OMPI devel] [patch] SEGV on processing unexpected messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 20:51:30 2012" -->
<!-- isoreceived="20121019005130" -->
<!-- sent="Fri, 19 Oct 2012 00:51:22 +0000" -->
<!-- isosent="20121019005122" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] SEGV on processing unexpected messages" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E8AE469_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="FE709567-05E7-42C2-92EA-31ECC6E8C9E5_at_icl.utk.edu" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 20:51:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11617.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, Brian,
<br>
<p>I also think my patch is icky. George's patch may be nicer.
<br>
<p>Thanks,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nice catch. A nicer fix will be to check the type of the header, and copy the header accordingly. Attached is a patch following this idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2012, at 03:06 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Open MPI developers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found another issue in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In MCA_PML_OB1_RECV_FRAG_INIT macro in ompi/mca/pml/ob1/pml_ob1_recvfrag.h
</span><br>
<span class="quotelev2">&gt; &gt; file, we copy a PML header from an arrived message to another buffer,
</span><br>
<span class="quotelev2">&gt; &gt; as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    frag-&gt;hdr = *(mca_pml_ob1_hdr_t*)hdr;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On this copy, we cast hdr to mca_pml_ob1_hdr_t, which is a union
</span><br>
<span class="quotelev2">&gt; &gt; of all actual header structs such as mca_pml_ob1_match_hdr_t.
</span><br>
<span class="quotelev2">&gt; &gt; This means we copy the buffer of the size of the largest header
</span><br>
<span class="quotelev2">&gt; &gt; even if the arrived message is smaller than it. This can cause
</span><br>
<span class="quotelev2">&gt; &gt; SEGV if the arrived message is small and it is laid on the bottom
</span><br>
<span class="quotelev2">&gt; &gt; of the page. Actually, my tofu BTL, the BTL component of Fujitsu
</span><br>
<span class="quotelev2">&gt; &gt; MPI for K computer, suffered from this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The attached patch will be one of possible fixes for this issue.
</span><br>
<span class="quotelev2">&gt; &gt; This fix assume that the arrived header has at least segs[0].seg_len
</span><br>
<span class="quotelev2">&gt; &gt; bytes. This is always true for current Open MPI code because hdr
</span><br>
<span class="quotelev2">&gt; &gt; equals to segs[0].seg_addr.pval. There may exist a smarter fix.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11619.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11617.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>In reply to:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
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
