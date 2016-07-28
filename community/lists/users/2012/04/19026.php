<?
$subject_val = "[OMPI users] machine exited on signal 11 (Segmentation fault).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 05:05:54 2012" -->
<!-- isoreceived="20120417090554" -->
<!-- sent="Tue, 17 Apr 2012 17:05:50 +0800" -->
<!-- isosent="20120417090550" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] machine exited on signal 11 (Segmentation fault)." -->
<!-- id="CAFAE9jgRfJBhq_W+nWtFy=Lb+xoe5dkfnE5D1zeqkBuuFA=sBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] machine exited on signal 11 (Segmentation fault).<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 05:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19027.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19027.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19027.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to distribute large amount of data using MPI.
<br>
<p>When I exceed the certain data size the segmentation fault occurs.
<br>
<p>Here is my code,
<br>
<p><p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#define  ARRAYSIZE    2000000
<br>
#define  MASTER        0
<br>
<p>int  data[ARRAYSIZE];
<br>
<p><p>int main(int argc, char* argv[])
<br>
{
<br>
int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, source,
<br>
chunksize, namelen;
<br>
int mysum, sum;
<br>
int update(int myoffset, int chunk, int myid);
<br>
char myname[MPI_MAX_PROCESSOR_NAME];
<br>
MPI_Status status;
<br>
double start, stop, time;
<br>
double totaltime;
<br>
FILE *fp;
<br>
char line[128];
<br>
char element;
<br>
int n;
<br>
int k=0;
<br>
<p><p><p>/***** Initializations *****/
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
<br>
MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
MPI_Get_processor_name(myname, &amp;namelen);
<br>
printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname);
<br>
chunksize = (ARRAYSIZE / numtasks);
<br>
tag2 = 1;
<br>
tag1 = 2;
<br>
<p><p>/***** Master task only ******/
<br>
if (taskid == MASTER){
<br>
<p>&nbsp;&nbsp;&nbsp;/* Initialize the array */
<br>
&nbsp;&nbsp;sum = 0;
<br>
&nbsp;&nbsp;for(i=0; i&lt;ARRAYSIZE; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;data[i] =  i * 1 ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + data[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;Initialized array sum = %d\n&quot;,sum);
<br>
<p>&nbsp;&nbsp;/* Send each task its portion of the array - master keeps 1st part */
<br>
&nbsp;&nbsp;offset = chunksize;
<br>
&nbsp;&nbsp;for (dest=1; dest&lt;numtasks; dest++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;data[offset], chunksize, MPI_INT, dest, tag2,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sent %d elements to task %d offset=
<br>
%d\n&quot;,chunksize,dest,offset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offset = offset + chunksize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;/* Master does its part of the work */
<br>
&nbsp;&nbsp;offset = 0;
<br>
&nbsp;&nbsp;mysum = update(offset, chunksize, taskid);
<br>
<p>&nbsp;&nbsp;/* Wait to receive results from each task */
<br>
&nbsp;&nbsp;for (i=1; i&lt;numtasks; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;/* Get final sum and print sample results */
<br>
&nbsp;&nbsp;MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
&nbsp;/* printf(&quot;Sample results: \n&quot;);
<br>
&nbsp;&nbsp;offset = 0;
<br>
&nbsp;&nbsp;for (i=0; i&lt;numtasks; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j&lt;5; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;  %d&quot;,data[offset+j]);ARRAYSIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offset = offset + chunksize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}*/
<br>
&nbsp;&nbsp;printf(&quot;\n*** Final sum= %d ***\n&quot;,sum);
<br>
<p>&nbsp;&nbsp;}  /* end of master section */
<br>
<p><p>#include &lt;stdlib.h&gt;
<br>
/***** Non-master tasks only *****/
<br>
<p>if (taskid &gt; MASTER) {
<br>
<p>&nbsp;&nbsp;/* Receive my portion of array from the master task */
<br>
&nbsp;&nbsp;start= MPI_Wtime();
<br>
&nbsp;&nbsp;source = MASTER;
<br>
&nbsp;&nbsp;MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source, tag2,MPI_COMM_WORLD,
<br>
&amp;status);
<br>
<p>&nbsp;&nbsp;mysum = update(offset, chunksize, taskid);
<br>
&nbsp;&nbsp;stop = MPI_Wtime();
<br>
&nbsp;&nbsp;time = stop -start;
<br>
&nbsp;&nbsp;printf(&quot;time taken by process %d to recieve elements and caluclate own
<br>
sum is = %lf seconds \n&quot;, taskid, time);
<br>
&nbsp;&nbsp;totaltime = totaltime + time;
<br>
<p>&nbsp;&nbsp;/* Send my results back to the master task */
<br>
&nbsp;&nbsp;dest = MASTER;
<br>
&nbsp;&nbsp;MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Send(&amp;data[offset], chunksize, MPI_INT, MASTER, tag2,
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;} /* end of non-master */
<br>
<p>// printf(&quot;Total time taken for distribution is -  %lf  seconds&quot;,
<br>
totaltime);
<br>
MPI_Finalize();
<br>
<p>}   /* end of main */
<br>
<p><p>int update(int myoffset, int chunk, int myid) {
<br>
&nbsp;&nbsp;int i,j;
<br>
&nbsp;&nbsp;int mysum;
<br>
&nbsp;&nbsp;int mydata[myoffset+chunk];
<br>
&nbsp;&nbsp;/* Perform addition to each of my array elements and keep my sum */
<br>
&nbsp;&nbsp;mysum = 0;
<br>
&nbsp;/*  printf(&quot;task %d has elements:&quot;,myid);
<br>
&nbsp;&nbsp;for(j = myoffset; j&lt;myoffset+chunk; j++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\t%d&quot;, data[j]);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;printf(&quot;\n&quot;);*/
<br>
&nbsp;&nbsp;for(i=myoffset; i &lt; myoffset + chunk; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//data[i] = data[i] + i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mysum = mysum + data[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;printf(&quot;Task %d has sum = %d\n&quot;,myid,mysum);
<br>
&nbsp;&nbsp;return(mysum);
<br>
}
<br>
<p><p>When I run it with ARRAYSIZE = 2000000 The program works fine. But when I
<br>
increase the size ARRAYSIZE = 20000000. The program ends with segmentation
<br>
fault.
<br>
I am running it on a cluster (machine 4 is master, machine 5,6 are slaves)
<br>
and np=20
<br>
<p>MPI task 0 has started on host machine4
<br>
MPI task 2 has started on host machine4
<br>
MPI task 3 has started on host machine4
<br>
MPI task 14 has started on host machine4
<br>
MPI task 8 has started on host machine6
<br>
MPI task 10 has started on host machine6
<br>
MPI task 13 has started on host machine4
<br>
MPI task 4 has started on host machine5
<br>
MPI task 6 has started on host machine5
<br>
MPI task 7 has started on host machine5
<br>
MPI task 16 has started on host machine5
<br>
MPI task 11 has started on host machine6
<br>
MPI task 12 has started on host machine4
<br>
MPI task 5 has started on hostmachine5
<br>
MPI task 17 has started on host machine5
<br>
MPI task 18 has started on host machine5
<br>
MPI task 15 has started on host machine4
<br>
MPI task 19 has started on host machine5
<br>
MPI task 1 has started on host machine4
<br>
MPI task 9 has started on host machine6
<br>
Initialized array sum = 542894464
<br>
Sent 1000000 elements to task 1 offset= 1000000
<br>
Task 1 has sum = 1055913696
<br>
time taken by process 1 to recieve elements and caluclate own sum is =
<br>
0.249345 seconds
<br>
Sent 1000000 elements to task 2 offset= 2000000
<br>
Sent 1000000 elements to task 3 offset= 3000000
<br>
Task 2 has sum = 328533728
<br>
time taken by process 2 to recieve elements and caluclate own sum is =
<br>
0.274285 seconds
<br>
Sent 1000000 elements to task 4 offset= 4000000
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 5695 on node machine4 exited on
<br>
signal 11 (Segmentation fault).
<br>
<p>Any idea what could be wrong here?
<br>
<p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19027.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19027.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Reply:</strong> <a href="19027.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
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
