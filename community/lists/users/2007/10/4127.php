<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 23:28:44 2007" -->
<!-- isoreceived="20071002032844" -->
<!-- sent="Tue, 2 Oct 2007 10:28:39 +0700" -->
<!-- isosent="20071002032839" -->
<!-- name="Hiep Bui Hoang" -->
<!-- email="bhoanghiep_at_[hidden]" -->
<!-- subject="[OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart." -->
<!-- id="94f1baee0710012028t1bd70919r239fb02569e56cd4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-10-01 23:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4126.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4142.php">Hiep Bui Hoang: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Reply:</strong> <a href="4142.php">Hiep Bui Hoang: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I had setup Open MPI &quot;trunk_16171&quot; for 3 computers with Lan connection, and
<br>
set environment parameters, ssh without typing password for each node. I use
<br>
Red Hat Enterprise Linux 5. The program I tried is 'send_recv'. I run
<br>
successful my 'send_recv' program in those 3 nodes. And checkpoint/restart
<br>
successful on 1 node. But I had error when try to checkpoint/restart that
<br>
program on 3 nodes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 4 -host 172.28.11.40,172.28.11.28,172.28.11.18 -am
<br>
ft-enable-cr send_recv
<br>
<p>....
<br>
Send 32 from rank 0
<br>
&nbsp;Receive 32 at rank 1
<br>
Send 33 from rank 0
<br>
&nbsp;Receive 33 at rank 1
<br>
[HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to
<br>
172.28.11.40:3680 failed: Software caused connection abort (103)
<br>
[HNP:05700] [1,2]-[1,3] mca_oob_tcp_peer_try_connect: connect to
<br>
172.28.11.40:3680 failed, connecting over all interfaces failed!
<br>
[node2:04837] [1,1]-[1,3] mca_oob_tcp_peer_try_connect: connect to
<br>
172.28.11.40:3680 failed: Software caused connection abort (103)
<br>
[node2:04837] [1,1]-[1,3] mca_oob_tcp_peer_try_connect: connect to
<br>
172.28.11.40:3680 failed, connecting over all interfaces failed!
<br>
&nbsp;Receive 34 at rank 1
<br>
Send 34 from rank 0
<br>
.....
<br>
<p>PID of above mpirun is 5693.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ ompi-checkpoint 5693
<br>
--------------------------------------------------------------------------
<br>
Error: The application (PID = 5693) failed to checkpoint properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Somebody know about this error?
<br>
Thanks.
<br>
<p>This is my 'send_recv' program:
<br>
<p>main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int node;
<br>
&nbsp;&nbsp;&nbsp;int MAX = 1000;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
<br>
<p>&nbsp;&nbsp;&nbsp;int    i = 0;
<br>
&nbsp;&nbsp;&nbsp;while( i &lt;= MAX){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == node){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;i, 1, MPI_INT, 1, 10, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Send %d from rank %d \n&quot;,i, node);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if( 1 == node ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;i, 1, MPI_INT, 0, 10, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; Receive %d at rank %d \n&quot;,i,node);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i++;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4126.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4142.php">Hiep Bui Hoang: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Reply:</strong> <a href="4142.php">Hiep Bui Hoang: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
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
