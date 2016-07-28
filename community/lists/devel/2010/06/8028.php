<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:49:45 2010" -->
<!-- isoreceived="20100602144945" -->
<!-- sent="Wed, 2 Jun 2010 10:49:41 -0400" -->
<!-- isosent="20100602144941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="8BCA7A8A-B1ED-4103-9198-E6809E3E7D77_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1833561F-6E90-4DEF-B522-D81FBD3311E6_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: System V Shared Memory for Open MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8029.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8031.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8031.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 10:44 AM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Not sure what you mean here.  common/sm may create new shmem segments at any time (e.g., during coll sm).  The RML message exchange is to ensure that only 1 process creates and initializes the segment and then all the others just attach to it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Absolutely not! The RML messaging is not about initializing the shared memory segment. As stated on my original text it has only one purpose: to ensure the file used by mmap is created atomically. The code for Windows do not exchange any RML messages as the function to allocate the shared memory region provided by the OS is atomic (exactly as the sysv one).
</span><br>
<p>I thought that Sam said that it was important that only 1 process shmctl/IPC_RMID...?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8029.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8031.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8031.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
