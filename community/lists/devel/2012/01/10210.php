<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 14:17:32 2012" -->
<!-- isoreceived="20120112191732" -->
<!-- sent="Thu, 12 Jan 2012 14:17:19 -0500" -->
<!-- isosent="20120112191719" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64" -->
<!-- id="3AAE4623-9B4D-4DAB-8FBD-710EA59979DF_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB344CB4.AF8B%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 14:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Previous message:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>In reply to:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is correctly identified and solved. I already pushed the patch in the trunk. I will create the CMR for both 1.5 and 1.4.
<br>
<p>Kudos to the Fujitsu team, that was a tricky one to find. Thanks for you contributions!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 12, 2012, at 10:39 , Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks right to me, but the patches are in the datatype engine, so can
</span><br>
<span class="quotelev1">&gt; you weigh in?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/11/12 10:04 PM, &quot;Kawashima&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Open MPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We, Fujitsu, noticed that one-sided communication with some sort of
</span><br>
<span class="quotelev2">&gt;&gt; derived datatype fails on sparc64 machines.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In one-sided communication of Open MPI, the structure of datatype of
</span><br>
<span class="quotelev2">&gt;&gt; target buffer is:
</span><br>
<span class="quotelev2">&gt;&gt; (1) encoded in origin process, and
</span><br>
<span class="quotelev2">&gt;&gt; (2) transfered to target process, and
</span><br>
<span class="quotelev2">&gt;&gt; (3) decoded in target process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This encoding and decoding are processed in ompi_datatype_args.c and
</span><br>
<span class="quotelev2">&gt;&gt; it has consideration of alignment issue. But it seems insufficient.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On encoding stage, __ompi_datatype_pack_description function
</span><br>
<span class="quotelev2">&gt;&gt; has consideration of alignment issue, as described in its comment.
</span><br>
<span class="quotelev2">&gt;&gt; For derived datatypes of one level, that code is OK.
</span><br>
<span class="quotelev2">&gt;&gt; But for derived datatypes of multiple level (i.e. derived datatypes
</span><br>
<span class="quotelev2">&gt;&gt; created from derived datatypes), __ompi_datatype_pack_description
</span><br>
<span class="quotelev2">&gt;&gt; function is called recursively with unaligned packed_buffer if
</span><br>
<span class="quotelev2">&gt;&gt; args-&gt;ci is odd.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, on decoding stage,
</span><br>
<span class="quotelev2">&gt;&gt; __ompi_datatype_create_from_packed_description function expects
</span><br>
<span class="quotelev2">&gt;&gt; a padding for odd args-&gt;ci. For derived datatypes, packed_buffer is
</span><br>
<span class="quotelev2">&gt;&gt; always aligned to 64 bits even if this function is called recursively.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This incompatibility causes a segmentation fault or something
</span><br>
<span class="quotelev2">&gt;&gt; in ompi_ddt_create_xxxx function called by __ompi_ddt_create_from_args
</span><br>
<span class="quotelev2">&gt;&gt; function.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems decoding stage and buffer size calculation (ALLOC_ARGS macro)
</span><br>
<span class="quotelev2">&gt;&gt; have an enough consideration of alignment issue. So I think fixing
</span><br>
<span class="quotelev2">&gt;&gt; encoding
</span><br>
<span class="quotelev2">&gt;&gt; stage is sufficient for this bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've attached patches for trunk and v1.4 branch respectively.
</span><br>
<span class="quotelev2">&gt;&gt; A program (needs sparc64) to reproduce this probrem is also attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This bug appears if all following conditions are met.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - sparc64 or some alignment sensitive architectures
</span><br>
<span class="quotelev2">&gt;&gt;   (configure generates OPAL_ALIGN_WORD_SIZE_INTEGERS == 1)
</span><br>
<span class="quotelev2">&gt;&gt; - use derived datatype for target buffer of one-sided communication
</span><br>
<span class="quotelev2">&gt;&gt; - create that derived datatype by multiple level MPI_Type_create_xxxx
</span><br>
<span class="quotelev2">&gt;&gt; - use one of following function in second level or later
</span><br>
<span class="quotelev2">&gt;&gt;   (args-&gt;ci is odd)
</span><br>
<span class="quotelev2">&gt;&gt;     * MPI_Type_create_hvector
</span><br>
<span class="quotelev2">&gt;&gt;     * MPI_Type_create_struct
</span><br>
<span class="quotelev2">&gt;&gt;     * MPI_Type_create_hindexed
</span><br>
<span class="quotelev2">&gt;&gt;     * MPI_Type_create_indexed_block
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt;&gt; MPI development team,
</span><br>
<span class="quotelev2">&gt;&gt; Fujitsu
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Previous message:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>In reply to:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
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
