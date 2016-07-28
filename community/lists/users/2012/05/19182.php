<?
$subject_val = "[OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 05:54:44 2012" -->
<!-- isoreceived="20120504095444" -->
<!-- sent="Fri, 04 May 2012 11:52:41 +0200" -->
<!-- isosent="20120504095241" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Recv hangs" -->
<!-- id="1336125161.8607.2420.camel_at_hokuto" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Recv hangs<br>
<strong>From:</strong> Jorge Chiva Segura (<em>jordic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 05:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19183.php">Jeff Squyres: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a program that executes a communication loop similar to this one:
<br>
<p>1:    for(int p1=0; p1&lt;np; ++p1) {
<br>
2:        for(int p2=0; p2&lt;np; ++p2) {
<br>
3:            if(me==p1) {
<br>
4:                if(sendSize(p2))
<br>
MPI_Ssend(sendBuffer[p2],sendSize(p2),MPI_FLOAT,p2,0,myw); 
<br>
5:                if(recvSize(p2))
<br>
MPI_Recv(recvBuffer[p2],recvSize(p2),MPI_FLOAT,p2,0,myw,&amp;status); 
<br>
6:            } else if(yo==p2) {
<br>
7:                if(recvSize(p1))
<br>
MPI_Recv(recvBuffer[p1],recvSize(p1),MPI_FLOAT,p2,0,myw,&amp;status); 
<br>
8:                if(sendSize(p1))
<br>
MPI_Ssend(sendBuffer[p1],sendSize(p1),MPI_FLOAT,p2,0,myw); 
<br>
9:            }
<br>
10:          MPI_Barrier(myw);
<br>
11:     }
<br>
12:   }
<br>
<p>The program is an iterative process that makes some calculations,
<br>
communicates and then continues with the next iteration. The problem is
<br>
that after making 30 successful iterations the program hangs. With padb
<br>
I have seen that one of the processors waits at line 5 for the reception
<br>
of data that was already sent and the rest of the processors are waiting
<br>
at the barrier in line 10. The size of the messages and buffers is the
<br>
same for all the iterations.
<br>
<p>My real program makes use of asynchronous communications for obvious
<br>
performance reasons and it worked without problems when the case to
<br>
solve was smaller (lower number of processors and memory), but I found
<br>
that for this case the program hanged and that is why a changed the
<br>
communication routine using synchronous communications to see where is
<br>
the problem. Now I know where the program hangs, but I don't understand
<br>
what I am doing wrong.
<br>
<p>Any suggestions?
<br>
<p>More specific data of the case and cluster:
<br>
Number of processors: 320
<br>
Max size of the message: 6800 floats (27200 bytes)
<br>
Number of cores by node: 32
<br>
File system: lustre
<br>
Resource manager: slurm
<br>
OMPI version: 1.4.4
<br>
Operative system: Ubuntu 10.04.4 LTS
<br>
Kernel: RHEL 6.2 2.6.32-220.4.2
<br>
Infiniband: OFED 1.4.2
<br>
InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s -
<br>
IB QDR / 10GigE] (rev b0)
<br>
<p>Thank you for your time,
<br>
Jorge 
<br>
<p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19182/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19183.php">Jeff Squyres: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Previous message:</strong> <a href="19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19187.php">Jeff Squyres: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19192.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
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
