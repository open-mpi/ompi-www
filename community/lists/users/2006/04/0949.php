<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  1 13:41:20 2006" -->
<!-- isoreceived="20060401184120" -->
<!-- sent="Sat, 01 Apr 2006 13:40:52 -0500" -->
<!-- isosent="20060401184052" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and Torque error" -->
<!-- id="442EC934.200_at_cchmc.org" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-01 13:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0950.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Previous message:</strong> <a href="0948.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0980.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0982.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I have a minimal MPI program to test the TM interface and strangely I seem to get errors during tm_init call. Could you explain what could be wrong? Have you seen anything similar. Here is the MPI code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;tm.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>extern char **environ;
<br>
<p>void do_check(int val, char *msg) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (TM_SUCCESS != val) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ret is %d instead of %d: %s\n&quot;, val, TM_SUCCESS, msg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size, rank, ret, err, numnodes, local_err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char **input;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;input[0] = &quot;/bin/echo&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;input[1] = &quot;Hello There&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct tm_roots task_root;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_node_id *nodelist;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_event_t event;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_task_id task_id;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char hostname[64];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buf[]=&quot;11000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hostname, 64);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Error: %d\n&quot;, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error: %d\n&quot;, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error: %d\n&quot;, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;First Hostname: %s node %d out of %d\n&quot;, hostname, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (size%2 &amp;&amp; rank==size-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sitting out\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank%2==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, strlen(buf), MPI_BYTE, rank+1, 11, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, sizeof(buf), MPI_BYTE, rank-1, 11, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Second Hostname: %s node %d out of %d\n&quot;, hostname, rank, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = tm_init(NULL, &amp;task_root);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do_check(ret, &quot;tm_init failed&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Special Hostname: %s node %d out of %d\n&quot;, hostname, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;task_id = 0xabcdef;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event = 0xabcdef;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s\t%s&quot;, input[0], input[1]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>The error I am getting is:
<br>
<p>First Hostname: wins05 node 0 out of 4
<br>
First Hostname: wins03 node 1 out of 4
<br>
First Hostname: wins02 node 2 out of 4
<br>
First Hostname: wins01 node 3 out of 4
<br>
Second Hostname: wins05 node 0 out of 4
<br>
Second Hostname: wins02 node 2 out of 4
<br>
Second Hostname: wins03 node 1 out of 4
<br>
Second Hostname: wins01 node 3 out of 4
<br>
tm_poll: protocol number dis error 11
<br>
ret is 17002 instead of 0: tm_init failed
<br>
3 processes killed (possibly by Open MPI)
<br>
<p>I am using Torque-2.0.0p7 and Open MPI-1.0.1.
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0950.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Previous message:</strong> <a href="0948.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0980.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe reply:</strong> <a href="0982.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
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
