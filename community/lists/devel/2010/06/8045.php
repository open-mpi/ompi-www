<?
$subject_val = "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 12:27:31 2010" -->
<!-- isoreceived="20100603162731" -->
<!-- sent="Thu, 3 Jun 2010 10:27:26 -0600" -->
<!-- isosent="20100603162726" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: System V Shared Memory for Open MPI" -->
<!-- id="02BC1555-F84D-4D8A-8186-787A910B2762_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9EFAF024-D76B-4552-AE9A-9AF69D9F71B0_at_lanl.gov" -->
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
<strong>Date:</strong> 2010-06-03 12:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8046.php">Jeff Squyres: "[OMPI devel] 1.5rc1 has been released"</a>
<li><strong>Previous message:</strong> <a href="8044.php">KHALDI Dounia: "[OMPI devel] mpi_comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="8041.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 11:58 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Good point - I forgot about that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2010, at 11:40 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't forget that the RML is also used to broadcast the success/ 
</span><br>
<span class="quotelev2">&gt;&gt; failure of the creation of the shared memory segment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the RML goes away, be sure that you can still determine that  
</span><br>
<span class="quotelev2">&gt;&gt; without hanging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Personally, I still don't see the problem with using the RML stuff...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2010, at 1:07 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That may work - I'll try it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 2, 2010, at 10:59 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How about ftok ? The init function takes a file_name as argument,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and this file name is unique per instance of the shared memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; region we want to create. We can use this file name with ftok to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; create a unique key_t that can be used by shmget to retrieve the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared memory identifier.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<p>Hi George,
<br>
<p>I think ftok brings us back to the atomic file creation problem.  In  
<br>
particular, ftok requires pathname be an existing file.  As it stands,  
<br>
this file is created by the common sm module.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Jun 2, 2010, at 11:53 , Samuel K. Gutierrez wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On Jun 2, 2010, at 8:49 AM, Jeff Squyres wrote:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; On Jun 2, 2010, at 10:44 AM, George Bosilca wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not sure what you mean here.  common/sm may create new shmem
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; segments at any time (e.g., during coll sm).  The RML message
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exchange is to ensure that only 1 process creates and
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; initializes the segment and then all the others just attach  
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to it.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt; Absolutely not! The RML messaging is not about initializing the
&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared memory segment. As stated on my original text it has only
&gt;&gt;&gt;&gt;&gt;&gt;&gt; one purpose: to ensure the file used by mmap is created
&gt;&gt;&gt;&gt;&gt;&gt;&gt; atomically. The code for Windows do not exchange any RML  
&gt;&gt;&gt;&gt;&gt;&gt;&gt; messages
&gt;&gt;&gt;&gt;&gt;&gt;&gt; as the function to allocate the shared memory region provided by
&gt;&gt;&gt;&gt;&gt;&gt;&gt; the OS is atomic (exactly as the sysv one).
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I thought that Sam said that it was important that only 1 process
&gt;&gt;&gt;&gt;&gt;&gt; shmctl/IPC_RMID...?
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hi George,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; We are using RML messaging in the sysv code to exchange the shared
&gt;&gt;&gt;&gt;&gt; memory ID (generated by exactly one process).  I'm not sure how we
&gt;&gt;&gt;&gt;&gt; would go about passing along the shared memory ID without RML, but
&gt;&gt;&gt;&gt;&gt; any ideas are greatly appreciated.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt; Samuel K. Gutierrez
&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8046.php">Jeff Squyres: "[OMPI devel] 1.5rc1 has been released"</a>
<li><strong>Previous message:</strong> <a href="8044.php">KHALDI Dounia: "[OMPI devel] mpi_comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="8041.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8010.php">Graham, Richard L.: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
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
