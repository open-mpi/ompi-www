<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:17:26 2010" -->
<!-- isoreceived="20100602141726" -->
<!-- sent="Wed, 2 Jun 2010 08:17:19 -0600" -->
<!-- isosent="20100602141719" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="3278924F-F3D2-4743-8659-EE1436BA5288_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 7:28 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 2, 2010, at 5:38 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think adding support for sysv shared memory is a good thing.  
</span><br>
<span class="quotelev2">&gt;&gt; However, I have some strong objections over the implementation in  
</span><br>
<span class="quotelev2">&gt;&gt; the hg tree. Here are 2 of the major ones:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) the sysv shared memory creation is __atomic__ based on the flags  
</span><br>
<span class="quotelev2">&gt;&gt; used. Therefore, all the RML messages exchange is totally useless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure what you mean here.  common/sm may create new shmem  
</span><br>
<span class="quotelev1">&gt; segments at any time (e.g., during coll sm).  The RML message  
</span><br>
<span class="quotelev1">&gt; exchange is to ensure that only 1 process creates and initializes  
</span><br>
<span class="quotelev1">&gt; the segment and then all the others just attach to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The initializing of the segment after it is created/attached could  
</span><br>
<span class="quotelev1">&gt; be pipelined a little more.  E.g, since the init has an atomicly-set  
</span><br>
<span class="quotelev1">&gt; flag indicating when it's done, the root could create the seg,  
</span><br>
<span class="quotelev1">&gt; signal the others that they can attach, and then do the init -- the  
</span><br>
<span class="quotelev1">&gt; non-root procs can wait for flag to change atomicly to know when the  
</span><br>
<span class="quotelev1">&gt; seg has been initialized).  Is that what you're referring to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) the whole code is replicated in the 3 files (mmap, sysv and  
</span><br>
<span class="quotelev2">&gt;&gt; windows), even the common parts. However in the sysv case most of  
</span><br>
<span class="quotelev2">&gt;&gt; the comments have been modified to remove all capitals letter.
</span><br>
<span class="quotelev2">&gt;&gt; I'm in favor of extracting all the common parts and moving them in  
</span><br>
<span class="quotelev2">&gt;&gt; a special file. What should be kept in the particular files should  
</span><br>
<span class="quotelev2">&gt;&gt; only be the really different parts (small part of the init and  
</span><br>
<span class="quotelev2">&gt;&gt; finalize).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam -- are the common parts really common?  I.e., could they be  
</span><br>
<span class="quotelev1">&gt; factored out?  Or are they &quot;just different enough&quot; that factoring  
</span><br>
<span class="quotelev1">&gt; them out would be a PITA?
</span><br>
<p>I'm sure some refactoring could be done - let me take a look.
<br>
<pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="8023.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8027.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
