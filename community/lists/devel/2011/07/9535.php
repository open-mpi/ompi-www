<?
$subject_val = "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 15:14:32 2011" -->
<!-- isoreceived="20110719191432" -->
<!-- sent="Tue, 19 Jul 2011 21:14:27 +0200" -->
<!-- isosent="20110719191427" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="op.vyvrqdurc1q7tl_at_divergence.home" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="op.vyjqg9y8c1q7tl_at_tupolev" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-19 15:14:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9536.php">Barrett, Brian W: "[OMPI devel] RFC: MProbe addition"</a>
<li><strong>Previous message:</strong> <a href="9534.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
is there any other tests you could think of to progress on this issue ?
<br>
<p>thanks,
<br>
&#233;loi
<br>
<p><p><p><p>On Wed, 13 Jul 2011 09:16:11 +0200, Eloi Gaudry &lt;eg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, I could not observe such a VmRSS increase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the command line used to perform this test:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.4.2/bin/mpirun -np 256 --hostfile host.list --display-map  
</span><br>
<span class="quotelev1">&gt; --mca mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 --mca btl  
</span><br>
<span class="quotelev1">&gt; openib,sm,self --mca btl_openib_receive_queues P,32768,128,96,64 --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_max_send_size 32768 --mca btl_openib_eager_limit 32768 --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_rndv_eager_limit 32768 $HOME/info_mp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the outputs from rank 0 and rank 255 (the root of the 1-byte  
</span><br>
<span class="quotelev1">&gt; MPI_Gather):
</span><br>
<span class="quotelev1">&gt; [hbn0170: 0/256] Allgather with one byte to process with rank 255  
</span><br>
<span class="quotelev1">&gt; (VmRSS: 1343463424bytes)
</span><br>
<span class="quotelev1">&gt; [hbn0170: 0/256] Done Allgather with one byte to process with rank 255  
</span><br>
<span class="quotelev1">&gt; (VmRSS: 1343488000bytes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hbn0232: 255/256] Allgather with one byte to process with rank 255  
</span><br>
<span class="quotelev1">&gt; (VmRSS: 261124096bytes)
</span><br>
<span class="quotelev1">&gt; [hbn0232: 255/256] Done Allgather with one byte to process with rank 255  
</span><br>
<span class="quotelev1">&gt; (VmRSS: 288129024bytes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note that 256*128*(96+64+32768)=1340108800 bytes and it matches the  
</span><br>
<span class="quotelev1">&gt; VmRSS observed on proc 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, 09 Jul 2011 13:13:04 +0200, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delayed reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing that there's some kind of rooted collective operation  
</span><br>
<span class="quotelev2">&gt;&gt; occurring during MPI_INIT.  Try doing a 1 byte MPI_GATHER to another  
</span><br>
<span class="quotelev2">&gt;&gt; rank in MCW (e.g., to rank 5) and see if the VmSS goes to the same size  
</span><br>
<span class="quotelev2">&gt;&gt; as MCW rank 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2011, at 5:17 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what i cannot understand is the reason why this extra memory would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialized on proc 0 only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as far as i know, this doesn't make sense.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 22/04/2011 08:52, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it varies with the receive_queues specification *and* with the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number of mpi processes:  memory_consumed = nb_mpi_process *  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nb_buffers * (buffer_size + low_buffer_count_watermark +  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; credit_window_size )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 04/22/2011 12:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does it vary exactly according to your receive_queues specification?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; i would like to get your input on this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; when launching a parallel computation on 128 nodes using openib  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; option, i observe a rather large resident memory consumption (2GB:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 65336*256*128) on the process with rank 0 (and only this process)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; just after a call to MPI_Init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - other processes located on the same nodes don't use that amount  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9536.php">Barrett, Brian W: "[OMPI devel] RFC: MProbe addition"</a>
<li><strong>Previous message:</strong> <a href="9534.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
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
