<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 22:22:00 2013" -->
<!-- isoreceived="20130811022200" -->
<!-- sent="Sun, 11 Aug 2013 02:21:30 +0000" -->
<!-- isosent="20130811022130" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="CE2C50D6.13422%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A21FFB29B_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 22:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12710.php">Michael Schlottke: "[OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>In reply to:</strong> <a href="12699.php">Joshua Ladd: "[OMPI devel] OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/6/13 10:30 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Dear OMPI Community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;Please find on Bitbucket the latest round of OSHMEM changes based on
</span><br>
<span class="quotelev1">&gt;community feedback. Please git and test at your leisure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;<a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<p>Josh -
<br>
<p>In general, I think everything looks ok.  However, the &quot;right&quot; thing
<br>
doesn't happen if the CM PML is used (at least, when using the Portals 4
<br>
MTL).  When configured with:
<br>
<p>&nbsp;&nbsp;./configure --enable-mca-no-build=pml-ob1,pml-bfo,pml-v,btl,bml,mpool
<br>
<p>The build segfaults trying to run a SHMEM program:
<br>
<p>mpirun -np 2 ./bcast
<br>
[shannon:90397] *** Process received signal ***
<br>
[shannon:90397] Signal: Segmentation fault (11)
<br>
[shannon:90397] Signal code: Address not mapped (1)
<br>
[shannon:90397] Failing at address: (nil)
<br>
[shannon:90398] *** Process received signal ***
<br>
[shannon:90398] Signal: Segmentation fault (11)
<br>
[shannon:90398] Signal code: Address not mapped (1)
<br>
[shannon:90398] Failing at address: (nil)
<br>
[shannon:90397] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
<br>
[shannon:90397] *** End of error message ***
<br>
[shannon:90398] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
<br>
[shannon:90398] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 90398 on node shannon exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12710.php">Michael Schlottke: "[OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>In reply to:</strong> <a href="12699.php">Joshua Ladd: "[OMPI devel] OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
