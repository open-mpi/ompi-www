<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 13:57:29 2010" -->
<!-- isoreceived="20100609175729" -->
<!-- sent="Wed, 9 Jun 2010 13:57:24 -0400" -->
<!-- isosent="20100609175724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="729021B4-CEDD-4D2B-917E-0EFE3CB46902_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1006091749240.3820_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 13:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8082.php">Eugene Loh: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8080.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8082.php">Eugene Loh: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8082.php">Eugene Loh: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8084.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Iiinnnnteresting.
<br>
<p>This, of course, begs the question of whether we should use sysv shmem or not.  It seems like the order of preference should be:
<br>
<p>- sysv
<br>
- mmap in a tmpfs
<br>
- mmap in a &quot;regular&quot; (but not networked) fs
<br>
<p>The big downer, of course, is the whole &quot;what happens if the job crashes?&quot; issue.  With mmap, an rm -rf will clean up any leftover files (although looking for them in /dev/shm might be a bit non-obvious).  With sysv, you have to use the ipc* commands to look for and whack any orphan shmem segments.
<br>
<p>Right now, the orted/hnp won't clean up any left over sysv segments.  This seems like something we should fix.
<br>
<p>But even with that, if the orted/hnp is killed, sysv segments can get let over.  Hrm.
<br>
<p><p>On Jun 9, 2010, at 11:58 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; As stated at the conf call, I did some performance testing on a 32 cores
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, here is graph showing 500 timings of an allreduce operation (repeated
</span><br>
<span class="quotelev1">&gt; 15,000 times for good timing) with sysv, mmap on /dev/shm and mmap on
</span><br>
<span class="quotelev1">&gt; /tmp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is shows :
</span><br>
<span class="quotelev1">&gt;   - sysv has the better performance ;
</span><br>
<span class="quotelev1">&gt;   - having the mmap file in /dev/shm is very close to sysv. We only have
</span><br>
<span class="quotelev1">&gt; +0.1 us for a complete allreduce operation, but it seems stable. The noise
</span><br>
<span class="quotelev1">&gt; is identical to sysv (must be OS noise) ;
</span><br>
<span class="quotelev1">&gt;   - having the mmap file in /tmp (ext3) decreases performance (+0.4 us
</span><br>
<span class="quotelev1">&gt; compared to /dev/shm) and seems prone to some &quot;other&quot; noise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Warning : the graph does not start at 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 27 Apr 2010, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With Jeff and Ralph's help, I have completed a System V shared memory
</span><br>
<span class="quotelev2">&gt; &gt; component for Open MPI.  I have conducted some preliminary tests on our
</span><br>
<span class="quotelev2">&gt; &gt; systems, but would like to get test results from a broader audience.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As it stands, mmap is the defaul, but System V shared memory can be activated
</span><br>
<span class="quotelev2">&gt; &gt; using: -mca mpi_common_sm sysv
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Repository:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Input is greatly appreciated!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt; &gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;sm-compared.png&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8082.php">Eugene Loh: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8080.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8082.php">Eugene Loh: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8082.php">Eugene Loh: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8084.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
