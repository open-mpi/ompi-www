<?
$subject_val = "Re: [OMPI devel] RFC: CUDA register sm and openib host memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 10:57:59 2011" -->
<!-- isoreceived="20110802145759" -->
<!-- sent="Tue, 2 Aug 2011 07:57:54 -0700" -->
<!-- isosent="20110802145754" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: CUDA register sm and openib host memory" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3019363A08D_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A13D903A-5031-4855-875E-A82D498C09CA_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: CUDA register sm and openib host memory<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 10:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9586.php">Leif Lindholm: "[OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>Previous message:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>In reply to:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George:
<br>
<p>In the current implementation, to send CUDA device memory, we move it through internal host buffers.  In other words, we force the usage of the send protocols.
<br>
If the host buffers are CUDA registered, then when we call cuMemcpy to move the data into those host buffers, the cuMemcpy performs better if the memory is registered, and cannot be paged out.
<br>
This also may allow future optimizations, for example, asynchronous copies, that require the host memory we are copying into to be CUDA registered.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, August 02, 2011 10:50 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] RFC: CUDA register sm and openib host memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can we have some more details on how this will improve performance of
</span><br>
<span class="quotelev1">&gt;sending GPU device memory? I fail to see how registering the backend shared
</span><br>
<span class="quotelev1">&gt;memory file with CUDA is supposed to do anything at all, as this memory is
</span><br>
<span class="quotelev1">&gt;internal to Open MPI and not supposed to be visible at any other level.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 28, 2011, at 23:52 , Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DETAILS: In order to improve performance of sending GPU device memory,
</span><br>
<span class="quotelev2">&gt;&gt; we need to register the host memory with the CUDA framework.  These
</span><br>
<span class="quotelev2">&gt;&gt; changes allow that to happen.  These changes are somewhat different
</span><br>
<span class="quotelev2">&gt;&gt; from what I proposed a while ago and I think a lot cleaner.  There is
</span><br>
<span class="quotelev2">&gt;&gt; a new memory pool flag that indicates whether a piece of memory should
</span><br>
<span class="quotelev2">&gt;&gt; be registered.  This allows us to register the sm memory and the
</span><br>
<span class="quotelev2">&gt;&gt; pre-posted openib memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9586.php">Leif Lindholm: "[OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>Previous message:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>In reply to:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
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
