<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 10:52:13 2007" -->
<!-- isoreceived="20071015145213" -->
<!-- sent="Mon, 15 Oct 2007 10:52:08 -0400" -->
<!-- isosent="20071015145208" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart." -->
<!-- id="C71F6C77-6800-467F-934F-247813E701F2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A332BEAB-3AF8-47EC-BC44-23082AB5E8FA_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-15 10:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4213.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4211.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem was caused by a couple of things.
<br>
<p>First is a problem with the default MCA parameters. By default the  
<br>
global and local snapshot directories are '/tmp', and the mode of  
<br>
file transfer is 'in_place'. 'in_place' file transfer assumes that  
<br>
the global snapshot directory points to an NFS mounted directory that  
<br>
all machines can access. Typically '/tmp' is not such a directory. :(
<br>
<p>I'll likely change the defaults (in the next day or so) to make the  
<br>
default global snapshot directory $HOME or $CWD. Of course all of  
<br>
this behavior can be changed by modifying the MCA parameters for the  
<br>
global and local snapshot directories and the transfer mechanism. The  
<br>
MCA parameters in question are described in the Checkpoint/Restart  
<br>
users guide located at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>Once we got around this problem then we discovered a problem with  
<br>
restarting on a local machine without the aid of a resource manager  
<br>
(e.g., SLURM, Torque, etc.). This bug was fixed in r16433.
<br>
<p>The combination of these two items fixed the problems that Hiep was  
<br>
experiencing.
<br>
<p>-- Josh
<br>
<p>On Oct 10, 2007, at 11:04 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; For anyone following this thread. I am following up with Hiep
</span><br>
<span class="quotelev1">&gt; offline. I'll reply back to the list once the issue is resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2007, at 11:11 AM, Hiep Bui Hoang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I had found that the problem is the firewall on one of my
</span><br>
<span class="quotelev2">&gt;&gt; computers. When I set firewall allow to connect with orther
</span><br>
<span class="quotelev2">&gt;&gt; computer through tcp with port from 1024 to 4999, it is ok, there
</span><br>
<span class="quotelev2">&gt;&gt; is no error about connection. But I still can not checkpoint and
</span><br>
<span class="quotelev2">&gt;&gt; restart my program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error is:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 3 -host 172.28.11.40, 172.28.11.28,172.28.11.18 -am ft-
</span><br>
<span class="quotelev2">&gt;&gt; enable-cr send_recv
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi-checkpoint 5693
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: The application (PID = 5693) failed to checkpoint properly.
</span><br>
<span class="quotelev2">&gt;&gt;        Returned -1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is only one local snapshot created on the computer where I
</span><br>
<span class="quotelev2">&gt;&gt; run command mpirun and ompi-checkpoint, and after create that local
</span><br>
<span class="quotelev2">&gt;&gt; snapshot the checkpoint is terminated with above error.
</span><br>
<span class="quotelev2">&gt;&gt; Some body help me to solve that error!
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/2/07, Hiep Bui Hoang &lt;bhoanghiep_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I had setup Open MPI &quot;trunk_16171&quot; for 3 computers with Lan
</span><br>
<span class="quotelev2">&gt;&gt; connection, and set environment parameters, ssh without typing
</span><br>
<span class="quotelev2">&gt;&gt; password for each node. I use Red Hat Enterprise Linux 5 . The
</span><br>
<span class="quotelev2">&gt;&gt; program I tried is 'send_recv'. I run successful my 'send_recv'
</span><br>
<span class="quotelev2">&gt;&gt; program in those 3 nodes. And checkpoint/restart successful on 1
</span><br>
<span class="quotelev2">&gt;&gt; node. But I had error when try to checkpoint/restart that program
</span><br>
<span class="quotelev2">&gt;&gt; on 3 nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     $ mpirun -np 4 -host 172.28.11.40, 172.28.11.28,172.28.11.18 -
</span><br>
<span class="quotelev2">&gt;&gt; am ft-enable-cr send_recv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; Send 32 from rank 0
</span><br>
<span class="quotelev2">&gt;&gt;  Receive 32 at rank 1
</span><br>
<span class="quotelev2">&gt;&gt; Send 33 from rank 0
</span><br>
<span class="quotelev2">&gt;&gt;  Receive 33 at rank 1
</span><br>
<span class="quotelev2">&gt;&gt; [HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 172.28.11.40:3680 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 172.28.11.40:3680 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev2">&gt;&gt; [node2:04837] [1,1]-[1,3] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 172.28.11.40:3680 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [node2:04837] [1,1]-[1,3] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 172.28.11.40:3680 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev2">&gt;&gt;  Receive 34 at rank 1
</span><br>
<span class="quotelev2">&gt;&gt; Send 34 from rank 0
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PID of above mpirun is 5693.
</span><br>
<span class="quotelev2">&gt;&gt;     $ ompi-checkpoint 5693
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Error: The application (PID = 5693) failed to checkpoint properly.
</span><br>
<span class="quotelev2">&gt;&gt;        Returned -1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Somebody know about this error?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is my 'send_recv' program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int node;
</span><br>
<span class="quotelev2">&gt;&gt;    int MAX = 1000;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    int    i = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    while( i &lt;= MAX){
</span><br>
<span class="quotelev2">&gt;&gt;     if( 0 == node){
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Send(&amp;i, 1, MPI_INT, 1, 10, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Send %d from rank %d \n&quot;,i, node);
</span><br>
<span class="quotelev2">&gt;&gt;         sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     if( 1 == node ){
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Recv(&amp;i, 1, MPI_INT, 0, 10, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;                      &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot; Receive %d at rank %d \n&quot;,i,node);
</span><br>
<span class="quotelev2">&gt;&gt;         sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     i++;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4213.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4211.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
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
