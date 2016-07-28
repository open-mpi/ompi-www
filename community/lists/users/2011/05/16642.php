<?
$subject_val = "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 14:03:58 2011" -->
<!-- isoreceived="20110526180358" -->
<!-- sent="Thu, 26 May 2011 20:03:51 +0200" -->
<!-- isosent="20110526180351" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="4DDE9607.7070608_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DB125B9.6030400_at_fft.be" -->
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
<strong>Date:</strong> 2011-05-26 14:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16643.php">Bill Johnstone: "[OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
does anyone have a clue here ?
<br>
&#233;loi
<br>
<p>On 22/04/2011 08:52, Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; it varies with the receive_queues specification *and* with the number 
</span><br>
<span class="quotelev1">&gt; of mpi processes:  memory_consumed = nb_mpi_process * nb_buffers * 
</span><br>
<span class="quotelev1">&gt; (buffer_size + low_buffer_count_watermark + credit_window_size )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#233;loi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/22/2011 12:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Does it vary exactly according to your receive_queues specification?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 19, 2011, at 9:03 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i would like to get your input on this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when launching a parallel computation on 128 nodes using openib and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; observe a rather large resident memory consumption (2GB: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65336*256*128) on the process with rank 0 (and only this process) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just after a call to MPI_Init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i'd like to know why the other processes doesn't behave the same:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - other processes located on the same nodes don't use that amount of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - all others processes (i.e. located on any other nodes) neither
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--enable-cxx-exceptions --with-pic --with-threads=posix' options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#233;loi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Senior Product Development Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Direct Phone Number: +32 10 495 147
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="16643.php">Bill Johnstone: "[OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16641.php">Jagannath Mondal: "Re: [OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
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
