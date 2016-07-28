<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 11:53:41 2010" -->
<!-- isoreceived="20100609155341" -->
<!-- sent="Wed, 9 Jun 2010 17:58:11 +0200 (CEST)" -->
<!-- isosent="20100609155811" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="alpine.DEB.2.00.1006091749240.3820_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8D5A8F04-0F59-45E0-ABA0-6A19069769C9_at_lanl.gov" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 11:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8079.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8077.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7825.php">Samuel K. Gutierrez: "[OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8079.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8079.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As stated at the conf call, I did some performance testing on a 32 cores 
<br>
node.
<br>
<p>So, here is graph showing 500 timings of an allreduce operation (repeated 
<br>
15,000 times for good timing) with sysv, mmap on /dev/shm and mmap on 
<br>
/tmp.
<br>
<p>What is shows :
<br>
&nbsp;&nbsp;- sysv has the better performance ;
<br>
&nbsp;&nbsp;- having the mmap file in /dev/shm is very close to sysv. We only have 
<br>
+0.1 us for a complete allreduce operation, but it seems stable. The noise 
<br>
is identical to sysv (must be OS noise) ;
<br>
&nbsp;&nbsp;- having the mmap file in /tmp (ext3) decreases performance (+0.4 us 
<br>
compared to /dev/shm) and seems prone to some &quot;other&quot; noise.
<br>
<p>Warning : the graph does not start at 0.
<br>
<p>Sylvain
<br>
<p>On Tue, 27 Apr 2010, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With Jeff and Ralph's help, I have completed a System V shared memory 
</span><br>
<span class="quotelev1">&gt; component for Open MPI.  I have conducted some preliminary tests on our 
</span><br>
<span class="quotelev1">&gt; systems, but would like to get test results from a broader audience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As it stands, mmap is the defaul, but System V shared memory can be activated 
</span><br>
<span class="quotelev1">&gt; using: -mca mpi_common_sm sysv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Repository:
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Input is greatly appreciated!
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br><hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8078/sm-compared.png" alt="sm-compared.png">
<!-- attachment="sm-compared.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8079.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8077.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7825.php">Samuel K. Gutierrez: "[OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8079.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8079.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
