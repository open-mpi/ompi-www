<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 07:09:45 2012" -->
<!-- isoreceived="20120504110945" -->
<!-- sent="Fri, 04 May 2012 13:07:32 +0200" -->
<!-- isosent="20120504110732" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="1336129652.8607.2447.camel_at_hokuto" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="495376E8-3A96-4A49-9092-5828BAB6F58A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv hangs<br>
<strong>From:</strong> Jorge Chiva Segura (<em>jordic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 07:07:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why? Removing the barrier will make all the other processors advance but
<br>
the processor that is waiting for the reception will wait forever.
<br>
Moreover, in the real code there is no Barrier. I use Isend's and
<br>
Irecv's and Wait's so I don't think that the problem is the Barrier.
<br>
<p>I have tried to add &quot;-mca btl_openib_flags 305&quot; and it worked ^^. Now I
<br>
am trying to understand why and which is the impact in performance.
<br>
<p>Thank you anyway for your suggestion,
<br>
Jorge
<br>
<p><p>On Fri, 2012-05-04 at 07:00 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Try removing the barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 4, 2012, at 5:52 AM, Jorge Chiva Segura wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a program that executes a communication loop similar to this one:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1:    for(int p1=0; p1&lt;np; ++p1) {
</span><br>
<span class="quotelev2">&gt; &gt; 2:        for(int p2=0; p2&lt;np; ++p2) {
</span><br>
<span class="quotelev2">&gt; &gt; 3:            if(me==p1) {
</span><br>
<span class="quotelev2">&gt; &gt; 4:                if(sendSize(p2)) MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw); 
</span><br>
<span class="quotelev2">&gt; &gt; 5:                if(recvSize(p2)) MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status); 
</span><br>
<span class="quotelev2">&gt; &gt; 6:            } else if(yo==p2) {
</span><br>
<span class="quotelev2">&gt; &gt; 7:                if(recvSize(p1)) MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p2,0,myw,&amp;status); 
</span><br>
<span class="quotelev2">&gt; &gt; 8:                if(sendSize(p1)) MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p2,0,myw); 
</span><br>
<span class="quotelev2">&gt; &gt; 9:            }
</span><br>
<span class="quotelev2">&gt; &gt; 10:          MPI_Barrier(myw);
</span><br>
<span class="quotelev2">&gt; &gt; 11:     }
</span><br>
<span class="quotelev2">&gt; &gt; 12:   }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The program is an iterative process that makes some calculations, communicates and then continues with the next iteration. The problem is that after making 30 successful iterations the program hangs. With padb I have seen that one of the processors waits at line 5 for the reception of data that was already sent and the rest of the processors are waiting at the barrier in line 10. The size of the messages and buffers is the same for all the iterations.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My real program makes use of asynchronous communications for obvious performance reasons and it worked without problems when the case to solve was smaller (lower number of processors and memory), but I found that for this case the program hanged and that is why a changed the communication routine using synchronous communications to see where is the problem. Now I know where the program hangs, but I don't understand what I am doing wrong.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; More specific data of the case and cluster:
</span><br>
<span class="quotelev2">&gt; &gt; Number of processors: 320
</span><br>
<span class="quotelev2">&gt; &gt; Max size of the message: 6800 floats (27200 bytes)
</span><br>
<span class="quotelev2">&gt; &gt; Number of cores by node: 32
</span><br>
<span class="quotelev2">&gt; &gt; File system: lustre
</span><br>
<span class="quotelev2">&gt; &gt; Resource manager: slurm
</span><br>
<span class="quotelev2">&gt; &gt; OMPI version: 1.4.4
</span><br>
<span class="quotelev2">&gt; &gt; Operative system: Ubuntu 10.04.4 LTS
</span><br>
<span class="quotelev2">&gt; &gt; Kernel: RHEL 6.2 2.6.32-220.4.2
</span><br>
<span class="quotelev2">&gt; &gt; Infiniband: OFED 1.4.2
</span><br>
<span class="quotelev2">&gt; &gt; InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE] (rev b0)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your time,
</span><br>
<span class="quotelev2">&gt; &gt; Jorge 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Aquest missatge ha estat analitzat per MailScanner 
</span><br>
<span class="quotelev2">&gt; &gt; a la cerca de virus i d'altres continguts perillosos, 
</span><br>
<span class="quotelev2">&gt; &gt; i es considera que est&#195;&#161; net.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19189.php">seshendra seshu: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
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
