<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 15:26:51 2010" -->
<!-- isoreceived="20100609192651" -->
<!-- sent="Wed, 9 Jun 2010 13:26:46 -0600" -->
<!-- isosent="20100609192646" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="511FA5A8-FA14-4F02-A671-2BD447985E03_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="729021B4-CEDD-4D2B-917E-0EFE3CB46902_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 15:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8083.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2010, at 11:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Iiinnnnteresting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This, of course, begs the question of whether we should use sysv  
</span><br>
<span class="quotelev1">&gt; shmem or not.  It seems like the order of preference should be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - sysv
</span><br>
<span class="quotelev1">&gt; - mmap in a tmpfs
</span><br>
<span class="quotelev1">&gt; - mmap in a &quot;regular&quot; (but not networked) fs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The big downer, of course, is the whole &quot;what happens if the job  
</span><br>
<span class="quotelev1">&gt; crashes?&quot; issue.  With mmap, an rm -rf will clean up any leftover  
</span><br>
<span class="quotelev1">&gt; files (although looking for them in /dev/shm might be a bit non- 
</span><br>
<span class="quotelev1">&gt; obvious).  With sysv, you have to use the ipc* commands to look for  
</span><br>
<span class="quotelev1">&gt; and whack any orphan shmem segments.
</span><br>
<p>System V shared memory cleanup is a concern only if a process dies in  
<br>
between shmat and shmctl IPC_RMID.  Shared memory segment cleanup  
<br>
should happen automagically in most cases, including abnormal process  
<br>
termination.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt;
&gt; Right now, the orted/hnp won't clean up any left over sysv  
&gt; segments.  This seems like something we should fix.
&gt;
&gt; But even with that, if the orted/hnp is killed, sysv segments can  
&gt; get let over.  Hrm.
&gt;
&gt;
&gt; On Jun 9, 2010, at 11:58 AM, Sylvain Jeaugey wrote:
&gt;
&gt;&gt; As stated at the conf call, I did some performance testing on a 32  
&gt;&gt; cores
&gt;&gt; node.
&gt;&gt;
&gt;&gt; So, here is graph showing 500 timings of an allreduce operation  
&gt;&gt; (repeated
&gt;&gt; 15,000 times for good timing) with sysv, mmap on /dev/shm and mmap on
&gt;&gt; /tmp.
&gt;&gt;
&gt;&gt; What is shows :
&gt;&gt;  - sysv has the better performance ;
&gt;&gt;  - having the mmap file in /dev/shm is very close to sysv. We only  
&gt;&gt; have
&gt;&gt; +0.1 us for a complete allreduce operation, but it seems stable.  
&gt;&gt; The noise
&gt;&gt; is identical to sysv (must be OS noise) ;
&gt;&gt;  - having the mmap file in /tmp (ext3) decreases performance (+0.4 us
&gt;&gt; compared to /dev/shm) and seems prone to some &quot;other&quot; noise.
&gt;&gt;
&gt;&gt; Warning : the graph does not start at 0.
&gt;&gt;
&gt;&gt; Sylvain
&gt;&gt;
&gt;&gt; On Tue, 27 Apr 2010, Samuel K. Gutierrez wrote:
&gt;&gt;
&gt;&gt;&gt; Hi,
&gt;&gt;&gt;
&gt;&gt;&gt; With Jeff and Ralph's help, I have completed a System V shared  
&gt;&gt;&gt; memory
&gt;&gt;&gt; component for Open MPI.  I have conducted some preliminary tests  
&gt;&gt;&gt; on our
&gt;&gt;&gt; systems, but would like to get test results from a broader audience.
&gt;&gt;&gt;
&gt;&gt;&gt; As it stands, mmap is the defaul, but System V shared memory can  
&gt;&gt;&gt; be activated
&gt;&gt;&gt; using: -mca mpi_common_sm sysv
&gt;&gt;&gt;
&gt;&gt;&gt; Repository:
&gt;&gt;&gt; <a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
&gt;&gt;&gt;
&gt;&gt;&gt; Input is greatly appreciated!
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Samuel K. Gutierrez
&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; &lt;sm-compared.png&gt;_______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
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
<li><strong>Next message:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8083.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8085.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
