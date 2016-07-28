<?
$subject_val = "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 02:51:43 2011" -->
<!-- isoreceived="20110422065143" -->
<!-- sent="Fri, 22 Apr 2011 08:52:41 +0200" -->
<!-- isosent="20110422065241" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="4DB125B9.6030400_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EAC05BEC-BD5C-4250-B75E-C1C254846B92_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-22 02:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<li><strong>Previous message:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>In reply to:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it varies with the receive_queues specification *and* with the number of 
<br>
mpi processes:  memory_consumed = nb_mpi_process * nb_buffers * 
<br>
(buffer_size + low_buffer_count_watermark + credit_window_size )
<br>
<p>&#233;loi
<br>
<p><p>On 04/22/2011 12:26 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Does it vary exactly according to your receive_queues specification?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i would like to get your input on this:
</span><br>
<span class="quotelev2">&gt;&gt; when launching a parallel computation on 128 nodes using openib and the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i observe a rather large resident memory consumption (2GB: 65336*256*128) on the process with rank 0 (and only this process) just after a call to MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev2">&gt;&gt; - other processes located on the same nodes don't use that amount of memory
</span><br>
<span class="quotelev2">&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; &#233;loi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev2">&gt;&gt; Senior Product Development Engineer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev2">&gt;&gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev2">&gt;&gt; Direct Phone Number: +32 10 495 147
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Eloi Gaudry
Senior Product Development Engineer
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Direct Phone Number: +32 10 495 147
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<li><strong>Previous message:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>In reply to:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
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
