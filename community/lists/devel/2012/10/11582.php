<?
$subject_val = "[OMPI devel] MPI_Reduce Hangs in my Application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 03:31:12 2012" -->
<!-- isoreceived="20121010073112" -->
<!-- sent="Wed, 10 Oct 2012 07:30:59 +0000" -->
<!-- isosent="20121010073059" -->
<!-- name="Santhosh Kokala" -->
<!-- email="Santhosh.Kokala_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Reduce Hangs in my Application" -->
<!-- id="E6D5D6AF68E4194BAC1905E29435983190C50B0E_at_365EXCH-MBX-P3.nbttech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Reduce Hangs in my Application<br>
<strong>From:</strong> Santhosh Kokala (<em>Santhosh.Kokala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 03:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11581.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Reply:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem with my MPI code, it hangs when the code is run on multiple nodes. It successfullycompletes when run on a single node. I am not sure how to debug this. Can someone help me debug this issue?
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11581.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an	Inadequate Amount of Disk Space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Reply:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
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
