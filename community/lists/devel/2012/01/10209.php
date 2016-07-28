<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 10:40:26 2012" -->
<!-- isoreceived="20120112154026" -->
<!-- sent="Thu, 12 Jan 2012 15:39:51 +0000" -->
<!-- isosent="20120112153951" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64" -->
<!-- id="CB344CB4.AF8B%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87aa5to6kb.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 10:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10210.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Previous message:</strong> <a href="10208.php">Christopher Yeoh: "[OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>In reply to:</strong> <a href="10207.php">Kawashima: "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10210.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Reply:</strong> <a href="10210.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -
<br>
<p>This looks right to me, but the patches are in the datatype engine, so can
<br>
you weigh in?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On 1/11/12 10:04 PM, &quot;Kawashima&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hi Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We, Fujitsu, noticed that one-sided communication with some sort of
</span><br>
<span class="quotelev1">&gt;derived datatype fails on sparc64 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In one-sided communication of Open MPI, the structure of datatype of
</span><br>
<span class="quotelev1">&gt;target buffer is:
</span><br>
<span class="quotelev1">&gt;  (1) encoded in origin process, and
</span><br>
<span class="quotelev1">&gt;  (2) transfered to target process, and
</span><br>
<span class="quotelev1">&gt;  (3) decoded in target process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This encoding and decoding are processed in ompi_datatype_args.c and
</span><br>
<span class="quotelev1">&gt;it has consideration of alignment issue. But it seems insufficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On encoding stage, __ompi_datatype_pack_description function
</span><br>
<span class="quotelev1">&gt;has consideration of alignment issue, as described in its comment.
</span><br>
<span class="quotelev1">&gt;For derived datatypes of one level, that code is OK.
</span><br>
<span class="quotelev1">&gt;But for derived datatypes of multiple level (i.e. derived datatypes
</span><br>
<span class="quotelev1">&gt;created from derived datatypes), __ompi_datatype_pack_description
</span><br>
<span class="quotelev1">&gt;function is called recursively with unaligned packed_buffer if
</span><br>
<span class="quotelev1">&gt;args-&gt;ci is odd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On the other hand, on decoding stage,
</span><br>
<span class="quotelev1">&gt;__ompi_datatype_create_from_packed_description function expects
</span><br>
<span class="quotelev1">&gt;a padding for odd args-&gt;ci. For derived datatypes, packed_buffer is
</span><br>
<span class="quotelev1">&gt;always aligned to 64 bits even if this function is called recursively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This incompatibility causes a segmentation fault or something
</span><br>
<span class="quotelev1">&gt;in ompi_ddt_create_xxxx function called by __ompi_ddt_create_from_args
</span><br>
<span class="quotelev1">&gt;function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It seems decoding stage and buffer size calculation (ALLOC_ARGS macro)
</span><br>
<span class="quotelev1">&gt;have an enough consideration of alignment issue. So I think fixing
</span><br>
<span class="quotelev1">&gt;encoding
</span><br>
<span class="quotelev1">&gt;stage is sufficient for this bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've attached patches for trunk and v1.4 branch respectively.
</span><br>
<span class="quotelev1">&gt;A program (needs sparc64) to reproduce this probrem is also attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This bug appears if all following conditions are met.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - sparc64 or some alignment sensitive architectures
</span><br>
<span class="quotelev1">&gt;    (configure generates OPAL_ALIGN_WORD_SIZE_INTEGERS == 1)
</span><br>
<span class="quotelev1">&gt;  - use derived datatype for target buffer of one-sided communication
</span><br>
<span class="quotelev1">&gt;  - create that derived datatype by multiple level MPI_Type_create_xxxx
</span><br>
<span class="quotelev1">&gt;  - use one of following function in second level or later
</span><br>
<span class="quotelev1">&gt;    (args-&gt;ci is odd)
</span><br>
<span class="quotelev1">&gt;      * MPI_Type_create_hvector
</span><br>
<span class="quotelev1">&gt;      * MPI_Type_create_struct
</span><br>
<span class="quotelev1">&gt;      * MPI_Type_create_hindexed
</span><br>
<span class="quotelev1">&gt;      * MPI_Type_create_indexed_block
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10210.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Previous message:</strong> <a href="10208.php">Christopher Yeoh: "[OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>In reply to:</strong> <a href="10207.php">Kawashima: "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10210.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Reply:</strong> <a href="10210.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
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
