<?
$subject_val = "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 08:21:13 2012" -->
<!-- isoreceived="20120508122113" -->
<!-- sent="Tue, 8 May 2012 05:21:05 -0700" -->
<!-- isosent="20120508122105" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E842E53AE_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jiYGGGaq742BKF62umwM_6jTCsTuRRnr5d6UJJkSurg=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 08:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19223.php">Rohan Deshpande: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Previous message:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19216.php">Rohan Deshpande: "[OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19223.php">Rohan Deshpande: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Reply:</strong> <a href="19223.php">Rohan Deshpande: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should be running with one GPU per MPI process.  If I understand correctly, you have a 3 node cluster and each node has a GPU so you should run with np=3.
<br>
Maybe you can try that and see if your numbers come out better.
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Rohan Deshpande
<br>
Sent: Monday, May 07, 2012 9:38 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] GPU and CPU timing - OpenMPI and Thrust
<br>
<p>&nbsp;I am running MPI and Thrust code on a cluster and measuring time for calculations.
<br>
<p>My MPI code -
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;time.h&gt;
<br>
#include &lt;sys/time.h&gt;
<br>
#include &lt;sys/resource.h&gt;
<br>
<p>#define  MASTER 0
<br>
#define ARRAYSIZE 20000000
<br>
<p>int *masterarray,*onearray,*twoarray,*threearray,*fourarray,*fivearray,*sixarray,*sevenarray,*eightarray,*ninearray;
<br>
&nbsp;&nbsp;&nbsp;int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;int   numtasks, taskid,chunksize, namelen;
<br>
&nbsp;&nbsp;int mysum,one,two,three,four,five,six,seven,eight,nine;
<br>
<p>&nbsp;&nbsp;char myname[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;int a,b,c,d,e,f,g,h,i,j;
<br>
<p>/***** Initializations *****/
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
<p>masterarray= malloc(ARRAYSIZE * sizeof(int));
<br>
onearray= malloc(ARRAYSIZE * sizeof(int));
<br>
twoarray= malloc(ARRAYSIZE * sizeof(int));
<br>
threearray= malloc(ARRAYSIZE * sizeof(int));
<br>
fourarray= malloc(ARRAYSIZE * sizeof(int));
<br>
fivearray= malloc(ARRAYSIZE * sizeof(int));
<br>
sixarray= malloc(ARRAYSIZE * sizeof(int));
<br>
sevenarray= malloc(ARRAYSIZE * sizeof(int));
<br>
eightarray= malloc(ARRAYSIZE * sizeof(int));
<br>
ninearray= malloc(ARRAYSIZE * sizeof(int));
<br>
<p>/***** Master task only ******/
<br>
if (taskid == MASTER){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(a=0; a &lt; ARRAYSIZE; a++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masterarray[a] = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;mysum = run_kernel0(masterarray,ARRAYSIZE,taskid, myname);
<br>
<p>&nbsp;}  /* end of master section */
<br>
<p>&nbsp;&nbsp;if (taskid &gt; MASTER) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 1){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(b=0;b&lt;ARRAYSIZE;b++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;onearray[b] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one = run_kernel0(onearray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 2){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(c=0;c&lt;ARRAYSIZE;c++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;twoarray[c] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;two = run_kernel0(twoarray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 3){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(d=0;d&lt;ARRAYSIZE;d++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;threearray[d] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;three = run_kernel0(threearray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 4){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(e=0;e &lt; ARRAYSIZE; e++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fourarray[e] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;four = run_kernel0(fourarray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 5){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(f=0;f&lt;ARRAYSIZE;f++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fivearray[f] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;five = run_kernel0(fivearray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 6){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(g=0;g&lt;ARRAYSIZE;g++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sixarray[g] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;six = run_kernel0(sixarray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 7){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(h=0;h&lt;ARRAYSIZE;h++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sevenarray[h] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seven = run_kernel0(sevenarray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 8){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;ARRAYSIZE;i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eightarray[i] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eight = run_kernel0(eightarray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 9){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j=0;j&lt;ARRAYSIZE;j++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ninearray[j] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nine = run_kernel0(ninearray,ARRAYSIZE,taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;MPI_Finalize();
<br>
<p>}
<br>
<p>All the tasks just initialize their own array and then calculate the sum using cuda thrust.
<br>
My CUDA Thrust code -
<br>
<p>&nbsp;#include &lt;stdio.h&gt;
<br>
#include &lt;cutil_inline.h&gt;
<br>
#include &lt;cutil.h&gt;
<br>
#include &lt;thrust/version.h&gt;
<br>
#include &lt;thrust/generate.h&gt;
<br>
#include &lt;thrust/host_vector.h&gt;
<br>
#include &lt;thrust/device_vector.h&gt;
<br>
#include &lt;thrust/functional.h&gt;
<br>
#include &lt;thrust/transform_reduce.h&gt;
<br>
#include &lt;time.h&gt;
<br>
#include &lt;sys/time.h&gt;
<br>
#include &lt;sys/resource.h&gt;
<br>
<p>&nbsp;&nbsp;extern &quot;C&quot;
<br>
&nbsp;int run_kernel0( int array[], int nelements, int taskid, char hostname[])
<br>
&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float elapsedTime;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int result = 0;
<br>
int threshold = 25000000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEvent_t start, stop;
<br>
cudaEventCreate(&amp;start);
<br>
cudaEventCreate(&amp;stop);
<br>
cudaEventRecord(start, 0);
<br>
thrust::device_vector&lt;int&gt; gpuarray;
<br>
int *begin = array;
<br>
int *end = array + nelements;
<br>
while(begin != end)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int chunk_size = thrust::min(threshold,end - begin);
<br>
&nbsp;&nbsp;&nbsp;gpuarray.assign(begin, begin + chunk_size);
<br>
&nbsp;result += thrust::reduce(gpuarray.begin(), gpuarray.end());
<br>
&nbsp;&nbsp;&nbsp;begin += chunk_size;
<br>
}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventRecord(stop, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventSynchronize(stop);
<br>
cudaEventElapsedTime(&amp;elapsedTime, start, stop);
<br>
cudaEventDestroy(start);
<br>
cudaEventDestroy(stop);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; Task %d on has sum (on GPU): %ld Time for the kernel: %f ms \n&quot;, taskid, result, elapsedTime);
<br>
<p>return result;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I also calculate the sum using CPU and the code is as below -
<br>
<p>&nbsp;&nbsp;struct timespec time1, time2, temp_time;
<br>
<p>&nbsp;&nbsp;clock_gettime(CLOCK_PROCESS_CPUTIME_ID, &amp;time1);
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;int cpu_sum = 0;
<br>
&nbsp;&nbsp;long diff = 0;
<br>
<p>&nbsp;&nbsp;for (i = 0; i &lt; nelements; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu_sum += array[i];
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;clock_gettime(CLOCK_PROCESS_CPUTIME_ID, &amp;time2);
<br>
&nbsp;&nbsp;temp_time.tv_sec = time2.tv_sec - time1.tv_sec;
<br>
&nbsp;&nbsp;temp_time.tv_nsec = time2.tv_nsec - time1.tv_nsec;
<br>
&nbsp;&nbsp;diff = temp_time.tv_sec * 1000000000 + temp_time.tv_nsec;
<br>
&nbsp;&nbsp;printf(&quot;Task %d calculated sum: %d using CPU in %lf ms \n&quot;, taskid, cpu_sum, (double) diff/1000000);
<br>
&nbsp;&nbsp;return cpu_sum;
<br>
<p>Now when I run the job on cluster with 10 MPI tasks and compare the timings of CPU and GPU, I get weird results where GPU time is much much higher than CPU time.
<br>
But the case should be opposite isnt it?
<br>
<p>The CPU time is almost same for all the task but GPU time increases.
<br>
<p>Just wondering what might be the cause of this or are these results correct? Anything wrong with MPI code?
<br>
<p>My cluster has 3 machines. 4 MPI tasks run on 2 machine and 2 Tasks run on 1 machine.
<br>
Each machine has 1 GPU - GForce 9500 GT with 512 MB memory.
<br>
<p>Can anyone please help me with this.?
<br>
<p>Thanks
<br>
<pre>
--
-----------------------------------------------------------------------------------
This email message is for the sole use of the intended recipient(s) and may contain
confidential information.  Any unauthorized review, use, disclosure or distribution
is prohibited.  If you are not the intended recipient, please contact the sender by
reply email and destroy all copies of the original message.
-----------------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19223.php">Rohan Deshpande: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Previous message:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19216.php">Rohan Deshpande: "[OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19223.php">Rohan Deshpande: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Reply:</strong> <a href="19223.php">Rohan Deshpande: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
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
