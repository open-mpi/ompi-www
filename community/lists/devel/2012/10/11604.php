<?
$subject_val = "[OMPI devel] [patch] SEGV on processing unexpected messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 21:06:42 2012" -->
<!-- isoreceived="20121018010642" -->
<!-- sent="Thu, 18 Oct 2012 01:06:34 +0000" -->
<!-- isosent="20121018010634" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] SEGV on processing unexpected messages" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC0E8AD7BF_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] SEGV on processing unexpected messages<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 21:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11603.php">Gutierrez, Samuel K: "[OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11608.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Reply:</strong> <a href="11608.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Reply:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>I found another issue in Open MPI.
<br>
<p>In MCA_PML_OB1_RECV_FRAG_INIT macro in ompi/mca/pml/ob1/pml_ob1_recvfrag.h
<br>
file, we copy a PML header from an arrived message to another buffer,
<br>
as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;hdr = *(mca_pml_ob1_hdr_t*)hdr;
<br>
<p>On this copy, we cast hdr to mca_pml_ob1_hdr_t, which is a union
<br>
of all actual header structs such as mca_pml_ob1_match_hdr_t.
<br>
This means we copy the buffer of the size of the largest header
<br>
even if the arrived message is smaller than it. This can cause
<br>
SEGV if the arrived message is small and it is laid on the bottom
<br>
of the page. Actually, my tofu BTL, the BTL component of Fujitsu
<br>
MPI for K computer, suffered from this.
<br>
<p>The attached patch will be one of possible fixes for this issue.
<br>
This fix assume that the arrived header has at least segs[0].seg_len
<br>
bytes. This is always true for current Open MPI code because hdr
<br>
equals to segs[0].seg_addr.pval. There may exist a smarter fix.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>

<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11604/recvfrag-segv-fix.patch">recvfrag-segv-fix.patch</a>
</ul>
<!-- attachment="recvfrag-segv-fix.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11604/License.txt">License.txt</a>
</ul>
<!-- attachment="License.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11603.php">Gutierrez, Samuel K: "[OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11608.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Reply:</strong> <a href="11608.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Reply:</strong> <a href="11609.php">George Bosilca: "Re: [OMPI devel] [patch] SEGV on processing unexpected messages"</a>
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
