<?
$subject_val = "Re: [OMPI devel] MPI_Reduce Hangs in my Application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 13:20:06 2012" -->
<!-- isoreceived="20121010172006" -->
<!-- sent="Wed, 10 Oct 2012 17:20:00 +0000" -->
<!-- isosent="20121010172000" -->
<!-- name="Santhosh Kokala" -->
<!-- email="Santhosh.Kokala_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Reduce Hangs in my Application" -->
<!-- id="E6D5D6AF68E4194BAC1905E29435983190C50D6E_at_365EXCH-MBX-P3.nbttech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8C5422F1-3621-43B9-AB24-56EB990E2B77_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Reduce Hangs in my Application<br>
<strong>From:</strong> Santhosh Kokala (<em>Santhosh.Kokala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 13:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11586.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>In reply to:</strong> <a href="11586.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Reply:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
You are a life saver. This solved my issue.
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: Wednesday, October 10, 2012 10:10 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] MPI_Reduce Hangs in my Application
<br>
<p>I guess the TCP BTL gets confused by your virtual interfaces (vmnet?). Try to limit the used interfaces using the &quot;--mca btl_tcp_if_include eth0&quot; argument. Let us know if this solves your issue.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Oct 10, 2012, at 18:54 , Santhosh Kokala &lt;Santhosh.Kokala_at_[hidden]&lt;mailto:Santhosh.Kokala_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>George,
<br>
I am using each host with  4 interfaces including loopback interface. Can you please let me know more about your environment?
<br>
<p>eth0      Link encap:Ethernet  HWaddr bc:30:5b:db:ae:6f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:xxx.xxx.xxx.134  Bcast:xxx.xxx.xxx.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::be30:5bff:fedb:ae6f/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1375598 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:709644 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1431654357 (1.4 GB)  TX bytes:69604165 (69.6 MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:17
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:944 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:944 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:264692 (264.6 KB)  TX bytes:264692 (264.6 KB)
<br>
<p>vmnet1    Link encap:Ethernet  HWaddr 00:50:56:c0:00:01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr: xxx.xxx.xxx.1  Bcast: xxx.xxx.xxx.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::250:56ff:fec0:1/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:245 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
<br>
<p>vmnet8    Link encap:Ethernet  HWaddr 00:50:56:c0:00:08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr: xxx.xxx.xxx..1  Bcast: xxx.xxx.xxx..255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::250:56ff:fec0:8/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:58357 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:238 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
<br>
<p>From: devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt; [mailto:devel-bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of George Bosilca
<br>
Sent: Wednesday, October 10, 2012 4:41 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] MPI_Reduce Hangs in my Application
<br>
<p>Your code works for me on two platforms. Thus, I guess the problem is with the communication layer (BTL) is Open MPI. What network do you use? If Ethernet how many interfaces?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 10, 2012, at 09:30 , Santhosh Kokala &lt;Santhosh.Kokala_at_[hidden]&lt;mailto:Santhosh.Kokala_at_[hidden]&gt;&gt; wrote:
<br>
<p><p><p>I have a problem with my MPI code, it hangs when the code is run on multiple nodes. It successfullycompletes when run on a single node. I am not sure how to debug this. Can someone help me debug this issue?
<br>
Program Usage:
<br>
mpicc -o string string.cpp
<br>
mpirun -np 4 -npernode 2 -hostfile hosts ./string 12 0.1 0.9 10 2
<br>
<p>MPI_Reduce Hangs in 2nd iteration: (Output cout statements from my program)
<br>
<p>1st Iteration (Timestep 1)
<br>
-----------------------------------------------------
<br>
0 Waiting for MPI_Reduce()
<br>
0 Done Waiting for MPI_Reduce()
<br>
<p>1 Waiting for MPI_Reduce()
<br>
1 Done Waiting for MPI_Reduce()
<br>
<p>2 Waiting for MPI_Reduce()
<br>
2 Done Waiting for MPI_Reduce()
<br>
<p>3 Waiting for MPI_Reduce()
<br>
3 Done Waiting for MPI_Reduce()
<br>
<p>0 Sending to right  task      = 1
<br>
0 Receiving from right task   = 1
<br>
<p>1 Receiving from left task   = 0
<br>
1 Sending to left task       = 0
<br>
<p>1 Sending to right  task      = 2
<br>
1 Receiving from right task   = 2
<br>
<p><p>2 Receiving from left task   = 1
<br>
2 Sending to left task       = 1
<br>
<p>2 Sending to right  task      = 3
<br>
2 Receiving from right task   = 3
<br>
<p>3 Receiving from left task   = 2
<br>
3 Sending to left task       = 2
<br>
<p><p><p>2nd Iteration (Timestep 2)
<br>
-----------------------------------------------------
<br>
0 Waiting for MPI_Reduce()
<br>
<p>1 Waiting for MPI_Reduce()
<br>
1 Done Waiting for MPI_Reduce()
<br>
<p>2 Waiting for MPI_Reduce()
<br>
<p>3 Waiting for MPI_Reduce()
<br>
<p><p><p>My Code:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;vector&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define MASTER 0
<br>
int RtoL = 10;
<br>
int LtoR = 20;
<br>
<p>int main ( int argc, char **argv )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int nprocs, taskid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FILE *f = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int left, right, i_start, i_end;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float sum = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float *y, *yold;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float *v, *vold;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//  const int NUM_MASSES = 1000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//  const float Ktension = 0.1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//  const float Kdamping = 0.9;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//  const float duration = 10.0;
<br>
<p>#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( argc != 5 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;usage: &quot; &lt;&lt; argv[0] &lt;&lt; &quot; NUM_MASSES durationInSecs Ktension Kdamping\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int NUM_MASSES  = atoi ( argv[1] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float duration = atof ( argv[2] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float Ktension = atof ( argv[3] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;float Kdamping = atof ( argv[4] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int PICKUP_POS = NUM_MASSES / 7;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int OVERSAMPLING = 16;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (taskid  == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f = fopen ( &quot;rstring.raw&quot;, &quot;wb&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!f) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;can't open output file\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;y = new float[NUM_MASSES];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;yold = new float[NUM_MASSES];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;v = new float[NUM_MASSES];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; NUM_MASSES; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v[i]  = 0.0f;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yold[i] = y[i] = 0.0f;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i == NUM_MASSES/2 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yold[i] = 1.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (taskid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (taskid == nprocs - 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left = taskid - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left = taskid - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right = taskid + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;i_start = taskid * (NUM_MASSES/nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i_end = i_start + (NUM_MASSES/nprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int numIters = duration * 44100 * OVERSAMPLING;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (argc == 6) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numIters = atoi(argv[5]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for ( int t = 0; t &lt; numIters; t++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float sum = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float gsum = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( int i = i_start; i &lt; i_end; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( i == 0 || i == NUM_MASSES-1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float accel = Ktension * (yold[i+1] + yold[i-1] - 2*yold[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v[i] += accel;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v[i] *= Kdamping;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y[i] = yold[i] + v[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += y[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; taskid &lt;&lt; &quot; Waiting for MPI_Reduce()&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;sum, &amp;gsum, 1, MPI_FLOAT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; taskid &lt;&lt; &quot; Done Waiting for MPI_Reduce()&quot; &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (taskid != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;y[i_start-1], 1, MPI_FLOAT, left, LtoR, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; taskid &lt;&lt; &quot; Receiving from left task   = &quot; &lt;&lt; left &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;y[i_start],   1, MPI_FLOAT, left, RtoL, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; taskid &lt;&lt; &quot; Sending to left task       = &quot; &lt;&lt; left &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (taskid != nprocs - 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;y[i_end-1],1, MPI_FLOAT, right, LtoR, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; taskid &lt;&lt;&quot; Sending to right  task      = &quot; &lt;&lt; right &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;y[i_end],  1, MPI_FLOAT, right, RtoL, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; taskid &lt;&lt;&quot; Receiving from right task   = &quot; &lt;&lt; right &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//printf(&quot;After Reduce task = %d yold = %f %f %f %f\n&quot;, taskid,yold[0], yold[1], yold[2], yold[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//printf(&quot;After Reduce task = %d y = %f %f %f %f\n&quot;, taskid, y[0], y[1], y[2], y[3]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//printf(&quot;After Reduce task = %d v = %f %f %f %f\n&quot;, taskid, v[0], v[1], v[2], v[3]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *tmp = y;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y = yold;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yold = tmp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (taskid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//std::cout&lt;&lt; &quot;sum = &quot; &lt;&lt; gsum &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( t % OVERSAMPLING == 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fwrite ( &amp;gsum, sizeof(float), 1, f );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (taskid  == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fclose ( f );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11586.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>In reply to:</strong> <a href="11586.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Reply:</strong> <a href="11588.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
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
