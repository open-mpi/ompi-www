<?
$subject_val = "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 05:18:37 2011" -->
<!-- isoreceived="20110708091837" -->
<!-- sent="Fri, 08 Jul 2011 11:17:58 +0200" -->
<!-- isosent="20110708091758" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="op.vyamr8hkc1q7tl_at_tupolev" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4DDE9607.7070608_at_fft.be" -->
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
<strong>Date:</strong> 2011-07-08 05:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9483.php">Jeff Squyres: "[OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what i cannot understand is the reason why this extra memory would be  
<br>
initialized on proc 0 only.
<br>
as far as i know, this doesn't make sense.
<br>
&#195;&#169;loi
<br>
<p><span class="quotelev1">&gt; On 22/04/2011 08:52, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt; it varies with the receive_queues specification *and* with the number  
</span><br>
<span class="quotelev2">&gt;&gt; of mpi processes:  memory_consumed = nb_mpi_process * nb_buffers *  
</span><br>
<span class="quotelev2">&gt;&gt; (buffer_size + low_buffer_count_watermark + credit_window_size )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#195;&#169;loi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/22/2011 12:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does it vary exactly according to your receive_queues specification?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i would like to get your input on this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when launching a parallel computation on 128 nodes using openib and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; observe a rather large resident memory consumption (2GB:  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 65336*256*128) on the process with rank 0 (and only this process)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just after a call to MPI_Init.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - other processes located on the same nodes don't use that amount of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#195;&#169;loi
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9483.php">Jeff Squyres: "[OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="9488.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
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
