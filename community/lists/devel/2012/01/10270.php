<?
$subject_val = "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 07:38:36 2012" -->
<!-- isoreceived="20120128123836" -->
<!-- sent="Sat, 28 Jan 2012 07:38:31 -0500" -->
<!-- isosent="20120128123831" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl" -->
<!-- id="E7AE6D96-C484-4503-A1E6-68798D310EF5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1EED86A0-E976-485E-AA7A-43E9BDA45DE3_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 07:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10271.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="10269.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing: Open64 and PathScale"</a>
<li><strong>In reply to:</strong> <a href="10214.php">George Bosilca: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also +1.
<br>
<p>On Jan 13, 2012, at 11:00 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Chris,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the sys call are there we should clearly take advantage of them. The patch looks good, I vote for it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 12, 2012, at 04:34 , Christopher Yeoh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brad,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Adds Cross Memory Attach support to the sm btl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: For faster intranode communication 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/mca/btl/sm/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Open MPI trunk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: 13/2/2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cross Memory Attach (CMA) is a pair of new syscalls (process_vm_readv
</span><br>
<span class="quotelev2">&gt;&gt; and process_vm_writev) which allow for fast intranode
</span><br>
<span class="quotelev2">&gt;&gt; communication. It has added to the Linux 3.2 kernel. There is a man page
</span><br>
<span class="quotelev2">&gt;&gt; for the new system calls here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://ozlabs.org/~cyeoh/cma/process_vm_readv.txt">http://ozlabs.org/~cyeoh/cma/process_vm_readv.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a patch for the OMPI trunk tree which augments the sm btl
</span><br>
<span class="quotelev2">&gt;&gt; to use these calls. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - CMA is quite similar in many respects to KNEM and what I've done is to
</span><br>
<span class="quotelev2">&gt;&gt; pretty much copy what KNEM does in many cases. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Both KNEM and CMA can be compiled in at the same time, though if
</span><br>
<span class="quotelev2">&gt;&gt; both are enabled at runtime, only KNEM runs. To enable CMA use
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_sm_use_cma 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - To enable CMA at compile time, add --with-cma=yes to the configure
</span><br>
<span class="quotelev2">&gt;&gt; command line. Support for the syscalls is in the git glibc archive,
</span><br>
<span class="quotelev2">&gt;&gt; but its not yet out in the distros so as an interim
</span><br>
<span class="quotelev2">&gt;&gt; workaround I have added some arch/os specific wrappers which are used
</span><br>
<span class="quotelev2">&gt;&gt; if the syscalls are not found at configure time. The syscalls numbers
</span><br>
<span class="quotelev2">&gt;&gt; won't change as 3.2 is out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - I'm far from sure that the way I have used CMA in OMPI is the best
</span><br>
<span class="quotelev2">&gt;&gt; way to do it, so any feedback is very welcome.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; cyeoh_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cma-openmpi-v1.patch&gt;_______________________________________________
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10271.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="10269.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing: Open64 and PathScale"</a>
<li><strong>In reply to:</strong> <a href="10214.php">George Bosilca: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
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
