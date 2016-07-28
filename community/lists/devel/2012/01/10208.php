<?
$subject_val = "[OMPI devel] RFC: Support Cross Memory Attach in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 04:34:16 2012" -->
<!-- isoreceived="20120112093416" -->
<!-- sent="Thu, 12 Jan 2012 20:04:06 +1030" -->
<!-- isosent="20120112093406" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Support Cross Memory Attach in sm btl" -->
<!-- id="20120112200406.511b3da3_at_Gantu.yeoh.info" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Support Cross Memory Attach in sm btl<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 04:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Previous message:</strong> <a href="10207.php">Kawashima: "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10214.php">George Bosilca: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brad,
<br>
<p>WHAT: Adds Cross Memory Attach support to the sm btl
<br>
<p>WHY: For faster intranode communication 
<br>
<p>WHERE: ompi/mca/btl/sm/
<br>
<p>WHEN: Open MPI trunk
<br>
<p>TIMEOUT: 13/2/2012
<br>
<p>Cross Memory Attach (CMA) is a pair of new syscalls (process_vm_readv
<br>
and process_vm_writev) which allow for fast intranode
<br>
communication. It has added to the Linux 3.2 kernel. There is a man page
<br>
for the new system calls here:
<br>
<p><a href="http://ozlabs.org/~cyeoh/cma/process_vm_readv.txt">http://ozlabs.org/~cyeoh/cma/process_vm_readv.txt</a>
<br>
<p>Attached is a patch for the OMPI trunk tree which augments the sm btl
<br>
to use these calls. 
<br>
<p>- CMA is quite similar in many respects to KNEM and what I've done is to
<br>
&nbsp;&nbsp;pretty much copy what KNEM does in many cases. 
<br>
<p>- Both KNEM and CMA can be compiled in at the same time, though if
<br>
&nbsp;&nbsp;both are enabled at runtime, only KNEM runs. To enable CMA use
<br>
&nbsp;&nbsp;--mca btl_sm_use_cma 1
<br>
<p>- To enable CMA at compile time, add --with-cma=yes to the configure
<br>
&nbsp;&nbsp;command line. Support for the syscalls is in the git glibc archive,
<br>
&nbsp;&nbsp;but its not yet out in the distros so as an interim
<br>
&nbsp;&nbsp;workaround I have added some arch/os specific wrappers which are used
<br>
&nbsp;&nbsp;if the syscalls are not found at configure time. The syscalls numbers
<br>
&nbsp;&nbsp;won't change as 3.2 is out.
<br>
<p>- I'm far from sure that the way I have used CMA in OMPI is the best
<br>
&nbsp;&nbsp;way to do it, so any feedback is very welcome.
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10208/cma-openmpi-v1.patch">cma-openmpi-v1.patch</a>
</ul>
<!-- attachment="cma-openmpi-v1.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10209.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<li><strong>Previous message:</strong> <a href="10207.php">Kawashima: "[OMPI devel] [patch] One-sided communication with derived datatype fails on sparc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10211.php">Christopher Samuel: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<li><strong>Reply:</strong> <a href="10214.php">George Bosilca: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
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
