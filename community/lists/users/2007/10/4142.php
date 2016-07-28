<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 11:11:49 2007" -->
<!-- isoreceived="20071003151149" -->
<!-- sent="Wed, 3 Oct 2007 22:11:44 +0700" -->
<!-- isosent="20071003151144" -->
<!-- name="Hiep Bui Hoang" -->
<!-- email="bhoanghiep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart." -->
<!-- id="94f1baee0710030811h47123750qa5a4f82bbaf8d142_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94f1baee0710012028t1bd70919r239fb02569e56cd4_at_mail.gmail.com" -->
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
<strong>From:</strong> Hiep Bui Hoang (<em>bhoanghiep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 11:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4143.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>In reply to:</strong> <a href="4127.php">Hiep Bui Hoang: "[OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Reply:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I had found that the problem is the firewall on one of my computers. When I
<br>
set firewall allow to connect with orther computer through tcp with port
<br>
from 1024 to 4999, it is ok, there is no error about connection. But I still
<br>
can not checkpoint and restart my program.
<br>
<p>The error is:
<br>
$ mpirun -np 3 -host 172.28.11.40,172.28.11.28,172.28.11.18 -am ft-enable-cr
<br>
send_recv
<br>
$ ompi-checkpoint 5693--------------------------------------------
<br>
Error: The application (PID = 5693) failed to checkpoint properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>There is only one local snapshot created on the computer where I run command
<br>
mpirun and ompi-checkpoint, and after create that local snapshot the
<br>
checkpoint is terminated with above error.
<br>
Some body help me to solve that error!
<br>
Thanks.
<br>
<p>On 10/2/07, Hiep Bui Hoang &lt;bhoanghiep_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I had setup Open MPI &quot;trunk_16171&quot; for 3 computers with Lan connection,
</span><br>
<span class="quotelev1">&gt; and set environment parameters, ssh without typing password for each node. I
</span><br>
<span class="quotelev1">&gt; use Red Hat Enterprise Linux 5 . The program I tried is 'send_recv'. I run
</span><br>
<span class="quotelev1">&gt; successful my 'send_recv' program in those 3 nodes. And checkpoint/restart
</span><br>
<span class="quotelev1">&gt; successful on 1 node. But I had error when try to checkpoint/restart that
</span><br>
<span class="quotelev1">&gt; program on 3 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ mpirun -np 4 -host 172.28.11.40,172.28.11.28,172.28.11.18 -am
</span><br>
<span class="quotelev1">&gt; ft-enable-cr send_recv
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
<span class="quotelev1">&gt; [HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to 172.28.11.40:3680
</span><br>
<span class="quotelev1">&gt; failed: Software caused connection abort (103)
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The application (PID = 5693) failed to checkpoint properly.
</span><br>
<span class="quotelev1">&gt;        Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4143.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>In reply to:</strong> <a href="4127.php">Hiep Bui Hoang: "[OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Reply:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
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
