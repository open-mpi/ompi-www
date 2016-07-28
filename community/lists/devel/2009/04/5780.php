<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 18:58:48 2009" -->
<!-- isoreceived="20090401225848" -->
<!-- sent="Wed, 1 Apr 2009 16:58:38 -0600" -->
<!-- isosent="20090401225838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="778C7D38-3E44-423A-AC54-F65B139FF32A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8E6CB7E8-0B46-44CA-A2B6-DDA2E814E635_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 18:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5781.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, we certainly used to unlink the file after init. Are you sure  
<br>
somebody changed that?
<br>
<p><p>On Apr 1, 2009, at 4:29 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; So everyone hates SYSV.  Ok.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that part of the problems we've been having with mmap have  
</span><br>
<span class="quotelev1">&gt; been due to filesystem issues, should we just unlink() the file once  
</span><br>
<span class="quotelev1">&gt; all processes have mapped it?  I believe we didn't do that  
</span><br>
<span class="quotelev1">&gt; originally for two reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - leave it around for debugging purposes
</span><br>
<span class="quotelev1">&gt; - possibly supporting MPI-2 dynamics someday
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We still don't support the sm BTL for dynamics, so why not  
</span><br>
<span class="quotelev1">&gt; unlink()?  (I'm probably forgetting something obvious...?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2009, at 5:12 PM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 2009-03-31 at 11:00 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 31, 2009, at 3:45 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; System V shared memory used to be the main way to do shared  
</span><br>
<span class="quotelev2">&gt;&gt; memory on
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; MPICH and from my (little) experience, this was truly painful :
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;   - Cleanup issues : does shmctl(IPC_RMID) solve _all_ cases ?  
</span><br>
<span class="quotelev2">&gt;&gt; (even
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; kill
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; -9 ?)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Indeed.  The one saving grace here is that the cleanup issues
</span><br>
<span class="quotelev3">&gt;&gt; &gt; apparently can be solved on Linux with a special flag that  
</span><br>
<span class="quotelev2">&gt;&gt; indicates
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;automatically remove this shmem when all processes attaching to it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have died.&quot;  That was really the impetus for [re-]investigating  
</span><br>
<span class="quotelev2">&gt;&gt; sysv
</span><br>
<span class="quotelev3">&gt;&gt; &gt; shm.  I, too, remember the sysv pain because we used it in LAM,  
</span><br>
<span class="quotelev2">&gt;&gt; too...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unless there is something newer than IPC_RMID that I haven't heard of
</span><br>
<span class="quotelev2">&gt;&gt; this is far from a complete solution, setting RMID causes it to be
</span><br>
<span class="quotelev2">&gt;&gt; deleted when the attach count becomes zero so it handles the kill -9
</span><br>
<span class="quotelev2">&gt;&gt; case however it has the down side that once it's been set no further
</span><br>
<span class="quotelev2">&gt;&gt; processes can attach to the memory so you have to leave a window  
</span><br>
<span class="quotelev2">&gt;&gt; during
</span><br>
<span class="quotelev2">&gt;&gt; init during which any crash will leave the memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've always been of the opinion that mmaping shared files was a much
</span><br>
<span class="quotelev2">&gt;&gt; more advanced solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5781.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
