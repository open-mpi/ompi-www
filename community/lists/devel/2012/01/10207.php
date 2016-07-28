<?
$subject_val = "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 00:04:12 2012" -->
<!-- isoreceived="20120112050412" -->
<!-- sent="Thu, 12 Jan 2012 14:04:04 +0900" -->
<!-- isosent="20120112050404" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64" -->
<!-- id="87aa5to6kb.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64<br>
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 00:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10208.php">Christopher Yeoh: "[OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Previous message:</strong> <a href="10206.php">Rolf vandeVaart: "Re: [OMPI devel] RDMA with non-contiguous payload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Reply:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>We, Fujitsu, noticed that one-sided communication with some sort of
<br>
derived datatype fails on sparc64 machines.
<br>
<p>In one-sided communication of Open MPI, the structure of datatype of
<br>
target buffer is:
<br>
&nbsp;&nbsp;(1) encoded in origin process, and
<br>
&nbsp;&nbsp;(2) transfered to target process, and
<br>
&nbsp;&nbsp;(3) decoded in target process.
<br>
<p>This encoding and decoding are processed in ompi_datatype_args.c and
<br>
it has consideration of alignment issue. But it seems insufficient.
<br>
<p>On encoding stage, __ompi_datatype_pack_description function
<br>
has consideration of alignment issue, as described in its comment.
<br>
For derived datatypes of one level, that code is OK.
<br>
But for derived datatypes of multiple level (i.e. derived datatypes
<br>
created from derived datatypes), __ompi_datatype_pack_description
<br>
function is called recursively with unaligned packed_buffer if
<br>
args-&gt;ci is odd.
<br>
<p>On the other hand, on decoding stage,
<br>
__ompi_datatype_create_from_packed_description function expects
<br>
a padding for odd args-&gt;ci. For derived datatypes, packed_buffer is
<br>
always aligned to 64 bits even if this function is called recursively.
<br>
<p>This incompatibility causes a segmentation fault or something
<br>
in ompi_ddt_create_xxxx function called by __ompi_ddt_create_from_args
<br>
function.
<br>
<p>It seems decoding stage and buffer size calculation (ALLOC_ARGS macro)
<br>
have an enough consideration of alignment issue. So I think fixing encoding
<br>
stage is sufficient for this bug.
<br>
<p>I've attached patches for trunk and v1.4 branch respectively.
<br>
A program (needs sparc64) to reproduce this probrem is also attached.
<br>
<p>This bug appears if all following conditions are met.
<br>
<p>&nbsp;&nbsp;- sparc64 or some alignment sensitive architectures
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(configure generates OPAL_ALIGN_WORD_SIZE_INTEGERS == 1)
<br>
&nbsp;&nbsp;- use derived datatype for target buffer of one-sided communication
<br>
&nbsp;&nbsp;- create that derived datatype by multiple level MPI_Type_create_xxxx
<br>
&nbsp;&nbsp;- use one of following function in second level or later
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(args-&gt;ci is odd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* MPI_Type_create_hvector
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* MPI_Type_create_struct
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* MPI_Type_create_hindexed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* MPI_Type_create_indexed_block
<br>
<p><p>Regards,
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
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10207/osc-derived.trunk.patch">osc-derived.trunk.patch</a>
</ul>
<!-- attachment="osc-derived.trunk.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10207/osc-derived.v1.4.patch">osc-derived.v1.4.patch</a>
</ul>
<!-- attachment="osc-derived.v1.4.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10207/osc-hvector.c">osc-hvector.c</a>
</ul>
<!-- attachment="osc-hvector.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10208.php">Christopher Yeoh: "[OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Previous message:</strong> <a href="10206.php">Rolf vandeVaart: "Re: [OMPI devel] RDMA with non-contiguous payload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Reply:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
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
