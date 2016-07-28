<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 13:36:58 2010" -->
<!-- isoreceived="20100609173658" -->
<!-- sent="Wed, 9 Jun 2010 11:36:53 -0600" -->
<!-- isosent="20100609173653" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="8D70B07F-E181-46F1-B0C3-42DF073D4863_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 13:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8080.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Sylvain!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Jun 9, 2010, at 9:58 AM, Sylvain Jeaugey wrote:
&gt; As stated at the conf call, I did some performance testing on a 32  
&gt; cores node.
&gt;
&gt; So, here is graph showing 500 timings of an allreduce operation  
&gt; (repeated 15,000 times for good timing) with sysv, mmap on /dev/shm  
&gt; and mmap on /tmp.
&gt;
&gt; What is shows :
&gt; - sysv has the better performance ;
&gt; - having the mmap file in /dev/shm is very close to sysv. We only  
&gt; have +0.1 us for a complete allreduce operation, but it seems  
&gt; stable. The noise is identical to sysv (must be OS noise) ;
&gt; - having the mmap file in /tmp (ext3) decreases performance (+0.4 us  
&gt; compared to /dev/shm) and seems prone to some &quot;other&quot; noise.
&gt;
&gt; Warning : the graph does not start at 0.
&gt;
&gt; Sylvain
&gt;
&gt; On Tue, 27 Apr 2010, Samuel K. Gutierrez wrote:
&gt;
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; With Jeff and Ralph's help, I have completed a System V shared  
&gt;&gt; memory component for Open MPI.  I have conducted some preliminary  
&gt;&gt; tests on our systems, but would like to get test results from a  
&gt;&gt; broader audience.
&gt;&gt;
&gt;&gt; As it stands, mmap is the defaul, but System V shared memory can be  
&gt;&gt; activated using: -mca mpi_common_sm sysv
&gt;&gt;
&gt;&gt; Repository:
&gt;&gt; <a href="http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm">http://bitbucket.org/samuelkgutierrez/ompi_sysv_sm</a>
&gt;&gt;
&gt;&gt; Input is greatly appreciated!
&gt;&gt;
&gt;&gt; --
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &lt;sm-compared.png&gt;_______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8080.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8081.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
