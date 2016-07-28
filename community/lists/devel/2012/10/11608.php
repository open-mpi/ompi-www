<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 10:20:10 2012" -->
<!-- isoreceived="20121018142010" -->
<!-- sent="Thu, 18 Oct 2012 14:19:33 +0000" -->
<!-- isosent="20121018141933" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239CBF57_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 10:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Previous message:</strong> <a href="11607.php">Jeff Squyres: "[OMPI devel] 1.6.3rc2"</a>
<li><strong>In reply to:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm torn on this one.  On the one hand, I think this is probably the most
<br>
performant solution.  On the other hand, it feels icky; a more clean
<br>
solution would be to use hdr-&gt;type to determine the size to copy.  What do
<br>
others think?
<br>
<p>Brian 
<br>
<p>On 10/17/12 9:06 PM, &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I found another issue in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In MCA_PML_OB1_RECV_FRAG_INIT macro in ompi/mca/pml/ob1/pml_ob1_recvfrag.h
</span><br>
<span class="quotelev1">&gt;file, we copy a PML header from an arrived message to another buffer,
</span><br>
<span class="quotelev1">&gt;as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    frag-&gt;hdr = *(mca_pml_ob1_hdr_t*)hdr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On this copy, we cast hdr to mca_pml_ob1_hdr_t, which is a union
</span><br>
<span class="quotelev1">&gt;of all actual header structs such as mca_pml_ob1_match_hdr_t.
</span><br>
<span class="quotelev1">&gt;This means we copy the buffer of the size of the largest header
</span><br>
<span class="quotelev1">&gt;even if the arrived message is smaller than it. This can cause
</span><br>
<span class="quotelev1">&gt;SEGV if the arrived message is small and it is laid on the bottom
</span><br>
<span class="quotelev1">&gt;of the page. Actually, my tofu BTL, the BTL component of Fujitsu
</span><br>
<span class="quotelev1">&gt;MPI for K computer, suffered from this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The attached patch will be one of possible fixes for this issue.
</span><br>
<span class="quotelev1">&gt;This fix assume that the arrived header has at least segs[0].seg_len
</span><br>
<span class="quotelev1">&gt;bytes. This is always true for current Open MPI code because hdr
</span><br>
<span class="quotelev1">&gt;equals to segs[0].seg_addr.pval. There may exist a smarter fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt;MPI development team,
</span><br>
<span class="quotelev1">&gt;Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Previous message:</strong> <a href="11607.php">Jeff Squyres: "[OMPI devel] 1.6.3rc2"</a>
<li><strong>In reply to:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
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
