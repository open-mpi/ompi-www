<?
$subject_val = "Re: [OMPI devel] Question about barrier()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 10:11:23 2010" -->
<!-- isoreceived="20101102141123" -->
<!-- sent="Tue, 2 Nov 2010 07:11:38 -0700" -->
<!-- isosent="20101102141138" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about barrier()" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E708E32060_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Question about barrier()" -->
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
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Question%20about%20barrier()"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-02 10:11:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8654.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Previous message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Maybe in reply to:</strong> <a href="8650.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question about barrier()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8654.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Reply:</strong> <a href="8654.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
<p>&nbsp;
<br>
<p>Yes, I am calling MPI_Init_thread() with MPI_THREAD_MULTIPLE. And I have
<br>
enabled thread and mpi_threads while configuring OpenMPI. BTW, I am
<br>
using OpenMPI 1.4.2.
<br>
<p>&nbsp;
<br>
<p>It will be helpful to know if this is a design constraint or some
<br>
implementation defect.
<br>
<p>&nbsp;
<br>
<p>Regards
<br>
<p>Ananda
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>&nbsp;
<br>
<p>Subject: Re: [OMPI devel] Question about barrier()
<br>
From: Jeff Squyres (jsquyres_at_[hidden])
<br>
Date: 2010-11-02 09:53:53 
<br>
<p>*	Previous message: Jeff Squyres: &quot;Re: [OMPI devel] === CREATE
<br>
FAILURE (trunk) ===&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8651.php">http://www.open-mpi.org/community/lists/devel/2010/11/8651.php</a>&gt;  
<br>
*	In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI devel] Question
<br>
about barrier()&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8650.php">http://www.open-mpi.org/community/lists/devel/2010/11/8650.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>I'd have to check to be sure, but I'm pretty sure that it's because
<br>
we've activated lots of locks that aren't there in single-threaded mode.
<br>
<p><p>I say this because I *assume* you mean that when you use
<br>
MPI_INIT_THREAD, you mean that you're actually calling it with
<br>
MPI_THREAD_MULTIPLE. Calling MPI_INIT should be exactly equivalent to
<br>
calling MPI_INIT_THREAD with MPI_THREAD_SINGLE. 
<br>
<p>On Nov 1, 2010, at 12:46 PM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the following small program where the rank-0 process does sleep
</span><br>
and then all the processes perform barrier(). 
<br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) 
</span><br>
<span class="quotelev1">&gt; { 
</span><br>
<span class="quotelev1">&gt; int rank, nprocs; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc,&amp;argv); 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs); 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank); 
</span><br>
<span class="quotelev1">&gt; if ( rank == 0) sleep(60); 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(MPI_COMM_WORLD); 
</span><br>
<span class="quotelev1">&gt; printf(&quot;Hello, world. I am %d of %d\n&quot;, rank, nprocs);fflush(stdout); 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt; return 0; 
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run this program on two nodes consuming 16 cores, I see that
</span><br>
the non rank-0 processes which are in wait mode for rank-0 process to
<br>
complete barrier() are consuming only user time. I was expecting this
<br>
behavior and there are no questions about it. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However if I initialize MPI threads by replacing MPI_Init() with
</span><br>
MPI_Init_thread(), I see quite a different behavior of this program.
<br>
While rank-0 process is sleeping, all non rank-0 processes seem to be
<br>
spending time in kernel mode (thus increasing system time) instead of
<br>
waiting in user mode. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following is the sar output on the node where rank-0 process is
</span><br>
running 
<br>
<span class="quotelev1">&gt; Node1&gt; sar 2 10 
</span><br>
<span class="quotelev1">&gt; Linux 2.6.18-128.1.10.el5-perfctr (Node1) 10/29/2010 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:33:51 PM CPU %user %nice %system %iowait %steal %idle 
</span><br>
<span class="quotelev1">&gt; 02:33:53 PM all 6.69 0.00 80.88 0.00 0.00 12.44 
</span><br>
<span class="quotelev1">&gt; 02:33:55 PM all 6.56 0.00 81.00 0.00 0.00 12.44 
</span><br>
<span class="quotelev1">&gt; 02:33:57 PM all 6.62 0.00 80.89 0.00 0.00 12.49 
</span><br>
<span class="quotelev1">&gt; 02:33:59 PM all 6.68 0.00 80.89 0.00 0.00 12.43 
</span><br>
<span class="quotelev1">&gt; 02:34:01 PM all 6.69 0.00 81.00 0.00 0.00 12.31 
</span><br>
<span class="quotelev1">&gt; 02:34:03 PM all 6.75 0.00 80.76 0.00 0.00 12.49 
</span><br>
<span class="quotelev1">&gt; 02:34:05 PM all 6.75 0.00 80.82 0.00 0.00 12.43 
</span><br>
<span class="quotelev1">&gt; 02:34:07 PM all 6.75 0.00 81.19 0.00 0.00 12.06 
</span><br>
<span class="quotelev1">&gt; 02:34:09 PM all 6.93 0.00 80.64 0.00 0.00 12.43 
</span><br>
<span class="quotelev1">&gt; 02:34:11 PM all 6.75 0.00 80.81 0.00 0.00 12.44 
</span><br>
<span class="quotelev1">&gt; Average: all 6.72 0.00 80.89 0.00 0.00 12.40 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And following is the sar output on the second node: 
</span><br>
<span class="quotelev1">&gt; Node2&gt; sar 2 10 
</span><br>
<span class="quotelev1">&gt; Linux 2.6.18-128.1.10.el5-perfctr (Node2) 10/29/2010 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:33:48 PM CPU %user %nice %system %iowait %steal %idle 
</span><br>
<span class="quotelev1">&gt; 02:33:50 PM all 6.37 0.00 93.63 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:33:52 PM all 6.19 0.00 93.81 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:33:54 PM all 6.31 0.00 93.69 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:33:56 PM all 6.50 0.00 93.50 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:33:58 PM all 6.81 0.00 93.19 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:34:00 PM all 6.56 0.00 93.44 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:34:02 PM all 6.50 0.00 93.50 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:34:04 PM all 6.50 0.00 93.50 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:34:06 PM all 6.56 0.00 93.44 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 02:34:08 PM all 6.68 0.00 93.32 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; Average: all 6.50 0.00 93.50 0.00 0.00 0.00 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please explain the difference in behavior of barrier()
</span><br>
call when I use MPI_Init() vs MPI_Init_thread()? 
<br>
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
<span class="quotelev1">&gt; Ph: 972 765 8093 begin_of_the_skype_highlighting              972 765
</span><br>
8093      end_of_the_skype_highlighting 
<br>
<span class="quotelev1">&gt; ananda.mudar_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
should check this email and any attachments for the presence of viruses.
<br>
The company accepts no liability for any damage caused by any virus
<br>
transmitted by this email. 
<br>
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
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
________________________________
Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8654.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Previous message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Maybe in reply to:</strong> <a href="8650.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question about barrier()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8654.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Reply:</strong> <a href="8654.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
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
