<?
$subject_val = "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 11:00:39 2012" -->
<!-- isoreceived="20120113160039" -->
<!-- sent="Fri, 13 Jan 2012 11:00:32 -0500" -->
<!-- isosent="20120113160032" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl" -->
<!-- id="1EED86A0-E976-485E-AA7A-43E9BDA45DE3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120112200406.511b3da3_at_Gantu.yeoh.info" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-13 11:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10215.php">Y.MATSUMOTO: "[OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<li><strong>Previous message:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>In reply to:</strong> <a href="10208.php">Christopher Yeoh: "[OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10270.php">Jeff Squyres: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10270.php">Jeff Squyres: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris,
<br>
<p>If the sys call are there we should clearly take advantage of them. The patch looks good, I vote for it!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 12, 2012, at 04:34 , Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brad,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: Adds Cross Memory Attach support to the sm btl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: For faster intranode communication 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/btl/sm/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Open MPI trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 13/2/2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cross Memory Attach (CMA) is a pair of new syscalls (process_vm_readv
</span><br>
<span class="quotelev1">&gt; and process_vm_writev) which allow for fast intranode
</span><br>
<span class="quotelev1">&gt; communication. It has added to the Linux 3.2 kernel. There is a man page
</span><br>
<span class="quotelev1">&gt; for the new system calls here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://ozlabs.org/~cyeoh/cma/process_vm_readv.txt">http://ozlabs.org/~cyeoh/cma/process_vm_readv.txt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a patch for the OMPI trunk tree which augments the sm btl
</span><br>
<span class="quotelev1">&gt; to use these calls. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - CMA is quite similar in many respects to KNEM and what I've done is to
</span><br>
<span class="quotelev1">&gt;  pretty much copy what KNEM does in many cases. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Both KNEM and CMA can be compiled in at the same time, though if
</span><br>
<span class="quotelev1">&gt;  both are enabled at runtime, only KNEM runs. To enable CMA use
</span><br>
<span class="quotelev1">&gt;  --mca btl_sm_use_cma 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - To enable CMA at compile time, add --with-cma=yes to the configure
</span><br>
<span class="quotelev1">&gt;  command line. Support for the syscalls is in the git glibc archive,
</span><br>
<span class="quotelev1">&gt;  but its not yet out in the distros so as an interim
</span><br>
<span class="quotelev1">&gt;  workaround I have added some arch/os specific wrappers which are used
</span><br>
<span class="quotelev1">&gt;  if the syscalls are not found at configure time. The syscalls numbers
</span><br>
<span class="quotelev1">&gt;  won't change as 3.2 is out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I'm far from sure that the way I have used CMA in OMPI is the best
</span><br>
<span class="quotelev1">&gt;  way to do it, so any feedback is very welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; cyeoh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;cma-openmpi-v1.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10215.php">Y.MATSUMOTO: "[OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<li><strong>Previous message:</strong> <a href="10213.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>In reply to:</strong> <a href="10208.php">Christopher Yeoh: "[OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10270.php">Jeff Squyres: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10270.php">Jeff Squyres: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
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
