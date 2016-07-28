<?
$subject_val = "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  9 07:13:10 2011" -->
<!-- isoreceived="20110709111310" -->
<!-- sent="Sat, 9 Jul 2011 07:13:04 -0400" -->
<!-- isosent="20110709111304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="07B87497-617F-4F94-A170-978619BEA89C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.vyamr8hkc1q7tl_at_tupolev" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-09 07:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9489.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9487.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9482.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delayed reply.
<br>
<p>I'm guessing that there's some kind of rooted collective operation occurring during MPI_INIT.  Try doing a 1 byte MPI_GATHER to another rank in MCW (e.g., to rank 5) and see if the VmSS goes to the same size as MCW rank 0.
<br>
<p><p>On Jul 8, 2011, at 5:17 AM, Eloi Gaudry wrote:
<br>
<p><span class="quotelev1">&gt; what i cannot understand is the reason why this extra memory would be initialized on proc 0 only.
</span><br>
<span class="quotelev1">&gt; as far as i know, this doesn't make sense.
</span><br>
<span class="quotelev1">&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 22/04/2011 08:52, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it varies with the receive_queues specification *and* with the number of mpi processes:  memory_consumed = nb_mpi_process * nb_buffers * (buffer_size + low_buffer_count_watermark + credit_window_size )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/22/2011 12:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does it vary exactly according to your receive_queues specification?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i would like to get your input on this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when launching a parallel computation on 128 nodes using openib and the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i observe a rather large resident memory consumption (2GB: 65336*256*128) on the process with rank 0 (and only this process) just after a call to MPI_Init.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - other processes located on the same nodes don't use that amount of memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#233;loi
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
<li><strong>Next message:</strong> <a href="9489.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9487.php">Jeff Squyres: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="9482.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
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
