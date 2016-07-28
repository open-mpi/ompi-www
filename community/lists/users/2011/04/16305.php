<?
$subject_val = "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 18:26:34 2011" -->
<!-- isoreceived="20110421222634" -->
<!-- sent="Thu, 21 Apr 2011 18:26:27 -0400" -->
<!-- isosent="20110421222627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="EAC05BEC-BD5C-4250-B75E-C1C254846B92_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DAD8825.5040807_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 18:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Previous message:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16274.php">Eloi Gaudry: "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does it vary exactly according to your receive_queues specification?
<br>
<p>On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i would like to get your input on this:
</span><br>
<span class="quotelev1">&gt; when launching a parallel computation on 128 nodes using openib and the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i observe a rather large resident memory consumption (2GB: 65336*256*128) on the process with rank 0 (and only this process) just after a call to MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev1">&gt; - other processes located on the same nodes don't use that amount of memory
</span><br>
<span class="quotelev1">&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your help,
</span><br>
<span class="quotelev1">&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt; Senior Product Development Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev1">&gt; Direct Phone Number: +32 10 495 147
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Previous message:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16274.php">Eloi Gaudry: "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
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
