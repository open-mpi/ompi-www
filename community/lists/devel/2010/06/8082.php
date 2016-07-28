<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 14:45:55 2010" -->
<!-- isoreceived="20100609184555" -->
<!-- sent="Wed, 09 Jun 2010 11:46:42 -0700" -->
<!-- isosent="20100609184642" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="4C0FE192.4080808_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 14:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8083.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8084.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If anyone is up for it, another interesting performance comparison could 
<br>
be start-up time.  That is, consider a fat node with many on-node 
<br>
processes and a large shared-memory area.  How long does it take for all 
<br>
that shared memory to be set up?  Arguably, start-up time is a 
<br>
&quot;second-order effect&quot;, but it ends up mattering to someone sometime.  I 
<br>
can't find my notes on this, but I thought SysV had some nice advantages 
<br>
in this area, but there were many other complicating factors (even 
<br>
beyond the clean-up stuff Jeff mentions).
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Iiinnnnteresting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This, of course, begs the question of whether we should use sysv shmem or not.  It seems like the order of preference should be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- sysv
</span><br>
<span class="quotelev1">&gt;- mmap in a tmpfs
</span><br>
<span class="quotelev1">&gt;- mmap in a &quot;regular&quot; (but not networked) fs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The big downer, of course, is the whole &quot;what happens if the job crashes?&quot; issue.  With mmap, an rm -rf will clean up any leftover files (although looking for them in /dev/shm might be a bit non-obvious).  With sysv, you have to use the ipc* commands to look for and whack any orphan shmem segments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Right now, the orted/hnp won't clean up any left over sysv segments.  This seems like something we should fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But even with that, if the orted/hnp is killed, sysv segments can get let over.  Hrm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 9, 2010, at 11:58 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As stated at the conf call, I did some performance testing on a 32 cores
</span><br>
<span class="quotelev2">&gt;&gt;node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;So, here is graph showing 500 timings of an allreduce operation (repeated
</span><br>
<span class="quotelev2">&gt;&gt;15,000 times for good timing) with sysv, mmap on /dev/shm and mmap on
</span><br>
<span class="quotelev2">&gt;&gt;/tmp.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What is shows :
</span><br>
<span class="quotelev2">&gt;&gt;  - sysv has the better performance ;
</span><br>
<span class="quotelev2">&gt;&gt;  - having the mmap file in /dev/shm is very close to sysv. We only have
</span><br>
<span class="quotelev2">&gt;&gt;+0.1 us for a complete allreduce operation, but it seems stable. The noise
</span><br>
<span class="quotelev2">&gt;&gt;is identical to sysv (must be OS noise) ;
</span><br>
<span class="quotelev2">&gt;&gt;  - having the mmap file in /tmp (ext3) decreases performance (+0.4 us
</span><br>
<span class="quotelev2">&gt;&gt;compared to /dev/shm) and seems prone to some &quot;other&quot; noise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Warning : the graph does not start at 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Tue, 27 Apr 2010, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;With Jeff and Ralph's help, I have completed a System V shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;component for Open MPI.  I have conducted some preliminary tests on our
</span><br>
<span class="quotelev3">&gt;&gt;&gt;systems, but would like to get test results from a broader audience.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;As it stands, mmap is the defaul, but System V shared memory can be activated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;using: -mca mpi_common_sm sysv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Repository:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Input is greatly appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8083.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8084.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
