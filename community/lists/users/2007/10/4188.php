<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 11:04:33 2007" -->
<!-- isoreceived="20071010150433" -->
<!-- sent="Wed, 10 Oct 2007 11:04:29 -0400" -->
<!-- isosent="20071010150429" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart." -->
<!-- id="A332BEAB-3AF8-47EC-BC44-23082AB5E8FA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94f1baee0710030811h47123750qa5a4f82bbaf8d142_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 11:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Previous message:</strong> <a href="4187.php">Jeff Squyres: "Re: [OMPI users] problem in runing MPI job through XGrid"</a>
<li><strong>In reply to:</strong> <a href="4142.php">Hiep Bui Hoang: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Reply:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For anyone following this thread. I am following up with Hiep  
<br>
offline. I'll reply back to the list once the issue is resolved.
<br>
<p>-- Josh
<br>
<p>On Oct 3, 2007, at 11:11 AM, Hiep Bui Hoang wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I had found that the problem is the firewall on one of my  
</span><br>
<span class="quotelev1">&gt; computers. When I set firewall allow to connect with orther  
</span><br>
<span class="quotelev1">&gt; computer through tcp with port from 1024 to 4999, it is ok, there  
</span><br>
<span class="quotelev1">&gt; is no error about connection. But I still can not checkpoint and  
</span><br>
<span class="quotelev1">&gt; restart my program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error is:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 -host 172.28.11.40, 172.28.11.28,172.28.11.18 -am ft- 
</span><br>
<span class="quotelev1">&gt; enable-cr send_recv
</span><br>
<span class="quotelev1">&gt; $ ompi-checkpoint 5693
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The application (PID = 5693) failed to checkpoint properly.
</span><br>
<span class="quotelev1">&gt;        Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is only one local snapshot created on the computer where I  
</span><br>
<span class="quotelev1">&gt; run command mpirun and ompi-checkpoint, and after create that local  
</span><br>
<span class="quotelev1">&gt; snapshot the checkpoint is terminated with above error.
</span><br>
<span class="quotelev1">&gt; Some body help me to solve that error!
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/2/07, Hiep Bui Hoang &lt;bhoanghiep_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I had setup Open MPI &quot;trunk_16171&quot; for 3 computers with Lan  
</span><br>
<span class="quotelev1">&gt; connection, and set environment parameters, ssh without typing  
</span><br>
<span class="quotelev1">&gt; password for each node. I use Red Hat Enterprise Linux 5 . The  
</span><br>
<span class="quotelev1">&gt; program I tried is 'send_recv'. I run successful my 'send_recv'  
</span><br>
<span class="quotelev1">&gt; program in those 3 nodes. And checkpoint/restart successful on 1  
</span><br>
<span class="quotelev1">&gt; node. But I had error when try to checkpoint/restart that program  
</span><br>
<span class="quotelev1">&gt; on 3 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ mpirun -np 4 -host 172.28.11.40, 172.28.11.28,172.28.11.18 - 
</span><br>
<span class="quotelev1">&gt; am ft-enable-cr send_recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; Send 32 from rank 0
</span><br>
<span class="quotelev1">&gt;  Receive 32 at rank 1
</span><br>
<span class="quotelev1">&gt; Send 33 from rank 0
</span><br>
<span class="quotelev1">&gt;  Receive 33 at rank 1
</span><br>
<span class="quotelev1">&gt; [HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 172.28.11.40:3680 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 172.28.11.40:3680 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev1">&gt; [node2:04837] [1,1]-[1,3] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 172.28.11.40:3680 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [node2:04837] [1,1]-[1,3] mca_oob_tcp_peer_try_connect: connect to  
</span><br>
<span class="quotelev1">&gt; 172.28.11.40:3680 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev1">&gt;  Receive 34 at rank 1
</span><br>
<span class="quotelev1">&gt; Send 34 from rank 0
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID of above mpirun is 5693.
</span><br>
<span class="quotelev1">&gt;     $ ompi-checkpoint 5693
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Error: The application (PID = 5693) failed to checkpoint properly.
</span><br>
<span class="quotelev1">&gt;        Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody know about this error?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my 'send_recv' program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int node;
</span><br>
<span class="quotelev1">&gt;    int MAX = 1000;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int    i = 0;
</span><br>
<span class="quotelev1">&gt;    while( i &lt;= MAX){
</span><br>
<span class="quotelev1">&gt;     if( 0 == node){
</span><br>
<span class="quotelev1">&gt;         MPI_Send(&amp;i, 1, MPI_INT, 1, 10, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Send %d from rank %d \n&quot;,i, node);
</span><br>
<span class="quotelev1">&gt;         sleep(1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if( 1 == node ){
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;i, 1, MPI_INT, 0, 10, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                      &amp;status);
</span><br>
<span class="quotelev1">&gt;         printf(&quot; Receive %d at rank %d \n&quot;,i,node);
</span><br>
<span class="quotelev1">&gt;         sleep(1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     i++;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Previous message:</strong> <a href="4187.php">Jeff Squyres: "Re: [OMPI users] problem in runing MPI job through XGrid"</a>
<li><strong>In reply to:</strong> <a href="4142.php">Hiep Bui Hoang: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Reply:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
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
