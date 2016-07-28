<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 09:28:37 2010" -->
<!-- isoreceived="20100602132837" -->
<!-- sent="Wed, 2 Jun 2010 09:28:32 -0400" -->
<!-- isosent="20100602132832" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="E80D0C0B-5F72-4561-8565-4F9768217FC8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="457EBFE2-F4BC-4100-82A2-1DFEA2EB8FC1_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-06-02 09:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>Previous message:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8020.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 5:38 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think adding support for sysv shared memory is a good thing. However, I have some strong objections over the implementation in the hg tree. Here are 2 of the major ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) the sysv shared memory creation is __atomic__ based on the flags used. Therefore, all the RML messages exchange is totally useless.
</span><br>
<p>Not sure what you mean here.  common/sm may create new shmem segments at any time (e.g., during coll sm).  The RML message exchange is to ensure that only 1 process creates and initializes the segment and then all the others just attach to it.
<br>
<p>The initializing of the segment after it is created/attached could be pipelined a little more.  E.g, since the init has an atomicly-set flag indicating when it's done, the root could create the seg, signal the others that they can attach, and then do the init -- the non-root procs can wait for flag to change atomicly to know when the seg has been initialized).  Is that what you're referring to?
<br>
<p><span class="quotelev1">&gt; 2) the whole code is replicated in the 3 files (mmap, sysv and windows), even the common parts. However in the sysv case most of the comments have been modified to remove all capitals letter. I'm in favor of extracting all the common parts and moving them in a special file. What should be kept in the particular files should only be the really different parts (small part of the init and finalize).
</span><br>
<p>Sam -- are the common parts really common?  I.e., could they be factored out?  Or are they &quot;just different enough&quot; that factoring them out would be a PITA?
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
<li><strong>Next message:</strong> <a href="8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>Previous message:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8020.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
