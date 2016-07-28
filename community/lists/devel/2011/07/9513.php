<?
$subject_val = "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 03:16:32 2011" -->
<!-- isoreceived="20110713071632" -->
<!-- sent="Wed, 13 Jul 2011 09:16:11 +0200" -->
<!-- isosent="20110713071611" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="op.vyjqg9y8c1q7tl_at_tupolev" -->
<!-- charset="utf-8" -->
<!-- inreplyto="07B87497-617F-4F94-A170-978619BEA89C_at_cisco.com" -->
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
<strong>Date:</strong> 2011-07-13 03:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9514.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>In reply to:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9535.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="9535.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I could not observe such a VmRSS increase.
<br>
<p>Here is the command line used to perform this test:
<br>
/opt/openmpi-1.4.2/bin/mpirun -np 256 --hostfile host.list --display-map  
<br>
--mca mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 --mca btl  
<br>
openib,sm,self --mca btl_openib_receive_queues P,32768,128,96,64 --mca  
<br>
btl_openib_max_send_size 32768 --mca btl_openib_eager_limit 32768 --mca  
<br>
btl_openib_rndv_eager_limit 32768 $HOME/info_mp
<br>
<p>and the outputs from rank 0 and rank 255 (the root of the 1-byte  
<br>
MPI_Gather):
<br>
[hbn0170: 0/256] Allgather with one byte to process with rank 255 (VmRSS:  
<br>
1343463424bytes)
<br>
[hbn0170: 0/256] Done Allgather with one byte to process with rank 255  
<br>
(VmRSS: 1343488000bytes)
<br>
<p>[hbn0232: 255/256] Allgather with one byte to process with rank 255  
<br>
(VmRSS: 261124096bytes)
<br>
[hbn0232: 255/256] Done Allgather with one byte to process with rank 255  
<br>
(VmRSS: 288129024bytes)
<br>
<p>note that 256*128*(96+64+32768)=1340108800 bytes and it matches the VmRSS  
<br>
observed on proc 0.
<br>
<p>&#195;&#169;loi
<br>
<p><p><p>On Sat, 09 Jul 2011 13:13:04 +0200, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delayed reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that there's some kind of rooted collective operation  
</span><br>
<span class="quotelev1">&gt; occurring during MPI_INIT.  Try doing a 1 byte MPI_GATHER to another  
</span><br>
<span class="quotelev1">&gt; rank in MCW (e.g., to rank 5) and see if the VmSS goes to the same size  
</span><br>
<span class="quotelev1">&gt; as MCW rank 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2011, at 5:17 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what i cannot understand is the reason why this extra memory would be  
</span><br>
<span class="quotelev2">&gt;&gt; initialized on proc 0 only.
</span><br>
<span class="quotelev2">&gt;&gt; as far as i know, this doesn't make sense.
</span><br>
<span class="quotelev2">&gt;&gt; &#195;&#169;loi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 22/04/2011 08:52, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it varies with the receive_queues specification *and* with the number  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of mpi processes:  memory_consumed = nb_mpi_process * nb_buffers *  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (buffer_size + low_buffer_count_watermark + credit_window_size )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#195;&#169;loi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 04/22/2011 12:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does it vary exactly according to your receive_queues specification?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i would like to get your input on this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when launching a parallel computation on 128 nodes using openib and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; observe a rather large resident memory consumption (2GB:  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 65336*256*128) on the process with rank 0 (and only this process)  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; just after a call to MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - other processes located on the same nodes don't use that amount  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#195;&#169;loi
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
<li><strong>Next message:</strong> <a href="9514.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>In reply to:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9535.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="9535.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
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
