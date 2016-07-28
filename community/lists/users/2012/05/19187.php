<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 07:00:28 2012" -->
<!-- isoreceived="20120504110028" -->
<!-- sent="Fri, 4 May 2012 07:00:22 -0400" -->
<!-- isosent="20120504110022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="495376E8-3A96-4A49-9092-5828BAB6F58A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1336125161.8607.2420.camel_at_hokuto" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 07:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19182.php">Jorge Chiva Segura: "[OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try removing the barrier.
<br>
<p>On May 4, 2012, at 5:52 AM, Jorge Chiva Segura wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a program that executes a communication loop similar to this one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1:    for(int p1=0; p1&lt;np; ++p1) {
</span><br>
<span class="quotelev1">&gt; 2:        for(int p2=0; p2&lt;np; ++p2) {
</span><br>
<span class="quotelev1">&gt; 3:            if(me==p1) {
</span><br>
<span class="quotelev1">&gt; 4:                if(sendSize(p2)) MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw); 
</span><br>
<span class="quotelev1">&gt; 5:                if(recvSize(p2)) MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status); 
</span><br>
<span class="quotelev1">&gt; 6:            } else if(yo==p2) {
</span><br>
<span class="quotelev1">&gt; 7:                if(recvSize(p1)) MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p2,0,myw,&amp;status); 
</span><br>
<span class="quotelev1">&gt; 8:                if(sendSize(p1)) MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p2,0,myw); 
</span><br>
<span class="quotelev1">&gt; 9:            }
</span><br>
<span class="quotelev1">&gt; 10:          MPI_Barrier(myw);
</span><br>
<span class="quotelev1">&gt; 11:     }
</span><br>
<span class="quotelev1">&gt; 12:   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program is an iterative process that makes some calculations, communicates and then continues with the next iteration. The problem is that after making 30 successful iterations the program hangs. With padb I have seen that one of the processors waits at line 5 for the reception of data that was already sent and the rest of the processors are waiting at the barrier in line 10. The size of the messages and buffers is the same for all the iterations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My real program makes use of asynchronous communications for obvious performance reasons and it worked without problems when the case to solve was smaller (lower number of processors and memory), but I found that for this case the program hanged and that is why a changed the communication routine using synchronous communications to see where is the problem. Now I know where the program hangs, but I don't understand what I am doing wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specific data of the case and cluster:
</span><br>
<span class="quotelev1">&gt; Number of processors: 320
</span><br>
<span class="quotelev1">&gt; Max size of the message: 6800 floats (27200 bytes)
</span><br>
<span class="quotelev1">&gt; Number of cores by node: 32
</span><br>
<span class="quotelev1">&gt; File system: lustre
</span><br>
<span class="quotelev1">&gt; Resource manager: slurm
</span><br>
<span class="quotelev1">&gt; OMPI version: 1.4.4
</span><br>
<span class="quotelev1">&gt; Operative system: Ubuntu 10.04.4 LTS
</span><br>
<span class="quotelev1">&gt; Kernel: RHEL 6.2 2.6.32-220.4.2
</span><br>
<span class="quotelev1">&gt; Infiniband: OFED 1.4.2
</span><br>
<span class="quotelev1">&gt; InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE] (rev b0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your time,
</span><br>
<span class="quotelev1">&gt; Jorge 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Aquest missatge ha estat analitzat per MailScanner 
</span><br>
<span class="quotelev1">&gt; a la cerca de virus i d'altres continguts perillosos, 
</span><br>
<span class="quotelev1">&gt; i es considera que est&#225; net.
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19182.php">Jorge Chiva Segura: "[OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19188.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
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
