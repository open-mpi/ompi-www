<?
$subject_val = "[OMPI users] MPI and CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 03:35:52 2012" -->
<!-- isoreceived="20120424073552" -->
<!-- sent="Tue, 24 Apr 2012 15:35:47 +0800" -->
<!-- isosent="20120424073547" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] MPI and CUDA" -->
<!-- id="CAFAE9jgz=oyy3TTjJXfn4KcCu9K178eGukCkzV_9+eMNWc=rVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI and CUDA<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 03:35:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19084.php">seshendra seshu: "[OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<li><strong>Previous message:</strong> <a href="19082.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I am combining mpi and cuda. Trying to find out sum of array elements
<br>
using cuda and using mpi to distribute the array.
<br>
<p>my cuda code
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>__global__ void add(int *devarray, int *devsum)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int index = blockIdx.x * blockDim.x + threadIdx.x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*devsum = *devsum + devarray[index];
<br>
}
<br>
<p>extern &quot;C&quot;
<br>
int * run_kernel(int array[],int nelements)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int  *devarray, *sum, *devsum;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum =(int *) malloc(1 * sizeof(int));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\nrun_kernel called..............&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMalloc((void**) &amp;devarray, sizeof(int)*nelements);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMalloc((void**) &amp;devsum, sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMemcpy(devarray, array, sizeof(int)*nelements,
<br>
cudaMemcpyHostToDevice);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//cudaMemcpy(devsum, sum, sizeof(int), cudaMemcpyHostToDevice);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add&lt;&lt;&lt;2, 3&gt;&gt;&gt;(devarray, devsum);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//  printf(&quot;\ndevsum is %d&quot;, devsum);		
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMemcpy(sum, devsum, sizeof(int), cudaMemcpyDeviceToHost);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; \nthe sum is %d\n&quot;, *sum);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaFree(devarray);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaFree(devsum);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return sum;
<br>
<p>}
<br>
<p><p><p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>#define  ARRAYSIZE	2000
<br>
#define  MASTER		0
<br>
int  data[ARRAYSIZE];
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
<p>int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, source,
<br>
chunksize, namelen;
<br>
int mysum;
<br>
long sum;
<br>
int update(int myoffset, int chunk, int myid);
<br>
char myname[MPI_MAX_PROCESSOR_NAME];
<br>
MPI_Status status;
<br>
double start = 0.0, stop = 0.0, time = 0.0;
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
<p>/***** Initializations *****/
<br>
<p>MPI_Init(&amp;argc, &amp;argv);
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
<p>/***** Master task only ******/
<br>
<p>if (taskid == MASTER){
<br>
<p>&nbsp;&nbsp;fp=fopen(&quot;integers.txt&quot;, &quot;r&quot;);
<br>
&nbsp;&nbsp;if(fp != NULL){
<br>
&nbsp;&nbsp;&nbsp;sum = 0;
<br>
&nbsp;&nbsp;&nbsp;while(fgets(line, sizeof line, fp)!= NULL){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fscanf(fp,&quot;%d&quot;,&amp;data[k]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + data[k]; // calculate sum to verify later on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k++;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p><p>printf(&quot;Initialized array sum %d\n&quot;, sum);
<br>
<p>&nbsp;&nbsp;/* Send each task its portion of the array - master keeps 1st part */
<br>
&nbsp;&nbsp;offset = chunksize;
<br>
&nbsp;&nbsp;for (dest=1; dest&lt;numtasks; dest++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;data[offset], chunksize, MPI_INT, dest, tag2, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sent %d elements to task %d offset= %d\n&quot;,chunksize,dest,offset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offset = offset + chunksize;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>&nbsp;&nbsp;/* Master does its part of the work */
<br>
<p>&nbsp;&nbsp;offset = 0;
<br>
&nbsp;&nbsp;mysum = run_kernel(&amp;data[offset], chunksize);
<br>
&nbsp;&nbsp;printf(&quot;Kernel returns sum %d&quot;, mysum);
<br>
&nbsp;&nbsp;//mysum = update(offset, chunksize, taskid);
<br>
<p>&nbsp;&nbsp;/* Wait to receive results from each task */
<br>
<p>&nbsp;&nbsp;for (i=1; i&lt;numtasks; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source,
<br>
tag2,MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;/* Get final sum and print sample results */
<br>
<p>&nbsp;&nbsp;MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;printf(&quot;\n*** Final sum= %d ***\n&quot;,sum);
<br>
&nbsp;}  /* end of master section */
<br>
<p>/***** Non-master tasks only *****/
<br>
<p><p>if (taskid &gt; MASTER) {
<br>
<p>&nbsp;&nbsp;/* Receive my portion of array from the master task */
<br>
&nbsp;&nbsp;start= MPI_Wtime();
<br>
&nbsp;&nbsp;source = MASTER;
<br>
&nbsp;&nbsp;MPI_Recv(&amp;offset, 1, MPI_INT, source, tag1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;MPI_Recv(&amp;data[offset], chunksize, MPI_INT, source,
<br>
tag2,MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;mysum = run_kernel(&amp;data[offset], chunksize);
<br>
&nbsp;&nbsp;printf(&quot;\nKernel returns sum %d &quot;, mysum);
<br>
<p>// mysum = update(offset, chunksize, taskid);
<br>
&nbsp;&nbsp;stop = MPI_Wtime();
<br>
&nbsp;&nbsp;time = stop -start;
<br>
&nbsp;&nbsp;printf(&quot;time taken by process %d to recieve elements and caluclate
<br>
own sum is = %lf seconds \n&quot;, taskid, time);
<br>
&nbsp;// totaltime = totaltime + time;
<br>
<p><p><p>&nbsp;&nbsp;/* Send my results back to the master task */
<br>
&nbsp;&nbsp;dest = MASTER;
<br>
&nbsp;&nbsp;MPI_Send(&amp;offset, 1, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Send(&amp;data[offset], chunksize, MPI_INT, MASTER, tag2, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Reduce(&amp;mysum, &amp;sum, 1, MPI_INT, MPI_SUM, MASTER, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;} /* end of non-master */
<br>
<p>&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>here is the output of above code -
<br>
<p>MPI task 2 has started on host 4
<br>
MPI task 3 has started on host 4
<br>
MPI task 0 has started on host 4
<br>
MPI task 1 has started on host 4
<br>
<p>Initialized array sum 9061
<br>
Sent 500 elements to task 1 offset= 500
<br>
Sent 500 elements to task 2 offset= 1000
<br>
Sent 500 elements to task 3 offset= 1500
<br>
<p><p><p>run_kernel called..............
<br>
the sum is 10
<br>
<p>Kernel returns sum 159300360 time taken by process 2 to recieve elements
<br>
and caluclate own sum is = 0.290016 seconds
<br>
run_kernel called..............
<br>
the sum is 268452367
<br>
run_kernel called..............
<br>
the sum is 10
<br>
<p>Kernel returns sum 145185544 time taken by process 3 to recieve elements
<br>
and caluclate own sum is = 0.293579 seconds
<br>
run_kernel called..............
<br>
the sum is 1048
<br>
<p>Kernel returns sum 156969736 time taken by process 1 to recieve elements
<br>
and caluclate own sum is = 0.297599 seconds
<br>
Kernel returns sum 152148496
<br>
*** Final sum= 613604136 ***
<br>
<p>The final sum and initialized sum is not matching. I am guessing its a
<br>
pointer issue. mysum should be pointer? but then MPI_REDUCE does not
<br>
execute properly and segmentation fault occurs.
<br>
<p>Any idea what is going wrong?
<br>
Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19083/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19084.php">seshendra seshu: "[OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<li><strong>Previous message:</strong> <a href="19082.php">Syed Ahsan Ali: "Re: [OMPI users] HRM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<li><strong>Reply:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
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
