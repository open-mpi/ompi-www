<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:44:20 2010" -->
<!-- isoreceived="20100602144420" -->
<!-- sent="Wed, 2 Jun 2010 10:44:12 -0400" -->
<!-- isosent="20100602144412" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="1833561F-6E90-4DEF-B522-D81FBD3311E6_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E80D0C0B-5F72-4561-8565-4F9768217FC8_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 09:28 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 2, 2010, at 5:38 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think adding support for sysv shared memory is a good thing. However, I have some strong objections over the implementation in the hg tree. Here are 2 of the major ones:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) the sysv shared memory creation is __atomic__ based on the flags used. Therefore, all the RML messages exchange is totally useless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what you mean here.  common/sm may create new shmem segments at any time (e.g., during coll sm).  The RML message exchange is to ensure that only 1 process creates and initializes the segment and then all the others just attach to it.
</span><br>
<p>Absolutely not! The RML messaging is not about initializing the shared memory segment. As stated on my original text it has only one purpose: to ensure the file used by mmap is created atomically. The code for Windows do not exchange any RML messages as the function to allocate the shared memory region provided by the OS is atomic (exactly as the sysv one).
<br>
<p><span class="quotelev1">&gt; The initializing of the segment after it is created/attached could be pipelined a little more.  E.g, since the init has an atomicly-set flag indicating when it's done, the root could create the seg, signal the others that they can attach, and then do the init -- the non-root procs can wait for flag to change atomicly to know when the seg has been initialized).  Is that what you're referring to?
</span><br>
<p>This is actually how the whole stuff is working today. As an example look at the sm BTL in file btl_sm.c line 541.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) the whole code is replicated in the 3 files (mmap, sysv and windows), even the common parts. However in the sysv case most of the comments have been modified to remove all capitals letter. I'm in favor of extracting all the common parts and moving them in a special file. What should be kept in the particular files should only be the really different parts (small part of the init and finalize).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam -- are the common parts really common?  I.e., could they be factored out?  Or are they &quot;just different enough&quot; that factoring them out would be a PITA?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Reply:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
