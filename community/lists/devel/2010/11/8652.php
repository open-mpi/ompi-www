<?
$subject_val = "Re: [OMPI devel] Question about barrier()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 09:53:59 2010" -->
<!-- isoreceived="20101102135359" -->
<!-- sent="Tue, 2 Nov 2010 09:53:53 -0400" -->
<!-- isosent="20101102135353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about barrier()" -->
<!-- id="3271FFCF-6181-47A0-9339-D8D6A5A4E250_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E708E31990_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about barrier()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 09:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Previous message:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8650.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question about barrier()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd have to check to be sure, but I'm pretty sure that it's because we've activated lots of locks that aren't there in single-threaded mode.
<br>
<p>I say this because I *assume* you mean that when you use MPI_INIT_THREAD, you mean that you're actually calling it with MPI_THREAD_MULTIPLE.  Calling MPI_INIT should be exactly equivalent to calling MPI_INIT_THREAD with MPI_THREAD_SINGLE.
<br>
<p><p>On Nov 1, 2010, at 12:46 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have the following small program where the rank-0 process  does sleep and then all the processes perform barrier().
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank, nprocs;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;     if ( rank == 0) sleep(60);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello, world.  I am %d of %d\n&quot;, rank, nprocs);fflush(stdout);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I run this program on two nodes consuming 16 cores, I see that the non rank-0 processes which are in wait mode for rank-0 process to complete barrier() are consuming only user time. I was expecting this behavior and there are no questions about it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However if I initialize MPI threads by replacing MPI_Init() with MPI_Init_thread(), I see quite a different behavior of this program. While rank-0 process is sleeping, all non rank-0 processes seem to be spending time in kernel mode (thus increasing system time) instead of waiting in user mode.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Following is the sar output on the node where rank-0 process is running
</span><br>
<span class="quotelev1">&gt; Node1&gt; sar 2 10
</span><br>
<span class="quotelev1">&gt; Linux 2.6.18-128.1.10.el5-perfctr (Node1)  10/29/2010
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 02:33:51 PM       CPU     %user     %nice   %system   %iowait    %steal     %idle
</span><br>
<span class="quotelev1">&gt; 02:33:53 PM       all      6.69      0.00     80.88      0.00      0.00     12.44
</span><br>
<span class="quotelev1">&gt; 02:33:55 PM       all      6.56      0.00     81.00      0.00      0.00     12.44
</span><br>
<span class="quotelev1">&gt; 02:33:57 PM       all      6.62      0.00     80.89      0.00      0.00     12.49
</span><br>
<span class="quotelev1">&gt; 02:33:59 PM       all      6.68      0.00     80.89      0.00      0.00     12.43
</span><br>
<span class="quotelev1">&gt; 02:34:01 PM       all      6.69      0.00     81.00      0.00      0.00     12.31
</span><br>
<span class="quotelev1">&gt; 02:34:03 PM       all      6.75      0.00     80.76      0.00      0.00     12.49
</span><br>
<span class="quotelev1">&gt; 02:34:05 PM       all      6.75      0.00     80.82      0.00      0.00     12.43
</span><br>
<span class="quotelev1">&gt; 02:34:07 PM       all      6.75      0.00     81.19      0.00      0.00     12.06
</span><br>
<span class="quotelev1">&gt; 02:34:09 PM       all      6.93      0.00     80.64      0.00      0.00     12.43
</span><br>
<span class="quotelev1">&gt; 02:34:11 PM       all      6.75      0.00     80.81      0.00      0.00     12.44
</span><br>
<span class="quotelev1">&gt; Average:          all      6.72      0.00     80.89      0.00      0.00     12.40
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And following is the sar output on the second node:
</span><br>
<span class="quotelev1">&gt; Node2&gt; sar 2 10
</span><br>
<span class="quotelev1">&gt; Linux 2.6.18-128.1.10.el5-perfctr (Node2)  10/29/2010
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 02:33:48 PM       CPU     %user     %nice   %system   %iowait    %steal     %idle
</span><br>
<span class="quotelev1">&gt; 02:33:50 PM       all      6.37      0.00     93.63      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:33:52 PM       all      6.19      0.00     93.81      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:33:54 PM       all      6.31      0.00     93.69      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:33:56 PM       all      6.50      0.00     93.50      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:33:58 PM       all      6.81      0.00     93.19      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:34:00 PM       all      6.56      0.00     93.44      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:34:02 PM       all      6.50      0.00     93.50      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:34:04 PM       all      6.50      0.00     93.50      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:34:06 PM       all      6.56      0.00     93.44      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; 02:34:08 PM       all      6.68      0.00     93.32      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt; Average:          all      6.50      0.00     93.50      0.00      0.00      0.00
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can someone please explain the difference in behavior of barrier() call when I use MPI_Init() vs MPI_Init_thread()?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect
</span><br>
<span class="quotelev1">&gt; Wipro Technologies
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093
</span><br>
<span class="quotelev1">&gt; ananda.mudar_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
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
<li><strong>Next message:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Previous message:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8650.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question about barrier()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
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
