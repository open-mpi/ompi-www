<?
$subject_val = "Re: [OMPI users] Segmentation fault on master task";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 06:51:07 2012" -->
<!-- isoreceived="20120503105107" -->
<!-- sent="Thu, 3 May 2012 18:51:02 +0800" -->
<!-- isosent="20120503105102" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault on master task" -->
<!-- id="CAFAE9jikdWQ8Y-oZV8PQjXaJZ+pH8ET4jFBbkprYwaVwGpJgWw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4fa10536.874db40a.1c8c.4993SMTPIN_ADDED_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault on master task<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 06:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Maybe in reply to:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19173.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply.
<br>
<p>When I modify the code it still fails with segmentation error.
<br>
<p>my latest code looks like
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;mpi.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;string.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;time.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sys/time.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sys/resource.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#define  MASTER        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#define ARRAYSIZE 40000000
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;int
<br>
*masterarray,*onearray,*twoarray,*threearray,*fourarray,*fivearray,*sixarray,*sevenarray,*eightarray,*ninearray;
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;int main(int argc, char* argv[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int   numtasks, taskid,chunksize, namelen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mysum,one,two,three,four,five,six,seven,eight,nine;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char myname[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int a,b,c,d,e,f,g,h,i,j;
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;/***** Initializations *****/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(myname, &amp;namelen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;MPI task %d has started on host %s...\n&quot;, taskid, myname);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;masterarray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;onearray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;twoarray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;threearray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fourarray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fivearray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sixarray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sevenarray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;eightarray= malloc(ARRAYSIZE * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ninearray= malloc(ARRAYSIZE * sizeof(int));
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;/***** Master task only ******/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (taskid == MASTER){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(a=0; a &lt; ARRAYSIZE; a++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masterarray[a] = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel0(masterarray,ARRAYSIZE,taskid, myname);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}  /* end of master section */
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (taskid &gt; MASTER) {
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 1){
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 4){
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>and my kernel code is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;cutil_inline.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;cutil.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;thrust/version.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;thrust/generate.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;thrust/host_vector.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;thrust/device_vector.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;thrust/functional.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;thrust/transform_reduce.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;time.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sys/time.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sys/resource.h&gt;
<br>
#define BLOCK_NUM    8
<br>
#define THREAD_NUM    256
<br>
<p><p>__global__ static void sumOfSquares(int * num, int * result,int DATA_SIZE)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;extern __shared__ int shared[];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int tid = threadIdx.x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int bid = blockIdx.x;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;shared[tid] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int i = bid * THREAD_NUM + tid; i &lt; DATA_SIZE; i += BLOCK_NUM *
<br>
THREAD_NUM) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shared[tid] += num[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;__syncthreads();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int offset = THREAD_NUM / 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (offset &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (tid &lt; offset) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shared[tid] += shared[tid + offset];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offset &gt;&gt;= 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__syncthreads();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (tid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result[bid] = shared[0];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;extern &quot;C&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int run_kernel0( int array[], int nelements, int taskid, char
<br>
hostname[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int * gpudata, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int * result;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clock_t * time;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEvent_t start, stop;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventCreate(&amp;start);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventCreate(&amp;stop);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventRecord(start, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMalloc((void **) &amp;gpudata, sizeof(int) * nelements);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMalloc((void **) &amp;result, sizeof(int) * THREAD_NUM * BLOCK_NUM);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMemcpy(gpudata, array, sizeof(int) * nelements,
<br>
cudaMemcpyHostToDevice);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n MPI Task %d is executing Kernel function........&quot;,
<br>
taskid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int sum[BLOCK_NUM];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sumOfSquares&lt;&lt;&lt;BLOCK_NUM, THREAD_NUM, THREAD_NUM *
<br>
sizeof(int)&gt;&gt;&gt;(gpudata, result,nelements);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaMemcpy(&amp;sum, result, sizeof(int) * BLOCK_NUM,
<br>
cudaMemcpyDeviceToHost);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//calculate sum of each block.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int final_sum = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; BLOCK_NUM; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;final_sum += sum[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventRecord(stop, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventSynchronize(stop);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float elapsedTime;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventElapsedTime(&amp;elapsedTime, start, stop);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventDestroy(start);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaEventDestroy(stop);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaFree(gpudata);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaFree(result);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; Task %d has sum (on GPU): %ld Time for the kernel: %f ms \n&quot;,
<br>
taskid, final_sum, elapsedTime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return final_sum;
<br>
}
<br>
<p>Error trace -
<br>
<p>MPI task 0 has started on host
<br>
MPI task 1 has started on host
<br>
MPI task 2 has started on host
<br>
MPI task 3 has started on host
<br>
MPI task 4 has started on host
<br>
MPI task 6 has started on host
<br>
MPI task 7 has started on host
<br>
MPI task 8 has started on host
<br>
MPI task 9 has started on host
<br>
MPI task 5 has started on host
<br>
<p>&nbsp;MPI Task 1 is executing Kernel function........ Task 1 has sum (on GPU):
<br>
40000000 Time for the kernel: 120.534050 ms
<br>
<p>&nbsp;MPI Task 0 is executing Kernel function........ Task 0 has sum (on GPU):
<br>
40000000 Time for the kernel: 137.301315 ms
<br>
<p><p>&nbsp;MPI Task 4 is executing Kernel function........ Task 4 has sum (on GPU):
<br>
348456223 Time for the kernel: 0.000000 ms
<br>
&nbsp;MPI Task 7 is executing Kernel function........ Task 7 has sum (on GPU):
<br>
353682719 Time for the kernel: 0.000000 ms
<br>
<p>&nbsp;MPI Task 3 is executing Kernel function........ Task 3 has sum (on GPU):
<br>
40000000 Time for the kernel: 4172.341309 ms
<br>
<p>&nbsp;MPI Task 2 is executing Kernel function........ Task 2 has sum (on GPU):
<br>
40000000 Time for the kernel: 4204.969727 ms
<br>
&nbsp;*** Process received signal ***
<br>
&nbsp;Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
&nbsp;Failing at address: (nil)
<br>
[ 0] [0xd1340c]
<br>
&nbsp;[ 1] /usr/lib/libcuda.so(+0x163e12) [0x1092e12]
<br>
&nbsp;[ 2] /usr/lib/libcuda.so(+0x115749) [0x1044749]
<br>
] [ 3] /usr/lib/libcuda.so(cuEventRecord+0x5c) [0x103578c]
<br>
&nbsp;[ 4] /usr/local/cuda/lib/libcudart.so.4(+0x2480f) [0x7fd80f]
<br>
&nbsp;[ 5] /usr/local/cuda/lib/libcudart.so.4(cudaEventRecord+0x22f) [0x838b8f]
<br>
&nbsp;[ 6] mpi_array_distributed(run_kernel0+0x32) [0x804a2b2]
<br>
&nbsp;[ 7] mpi_array_distributed(main+0x3ee) [0x804a0a2]
<br>
[ 8] /lib/libc.so.6(__libc_start_main+0xe6) [0x2fece6]
<br>
&nbsp;[ 9] mpi_array_distributed() [0x8049c21]
<br>
*** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 5 with PID 6559 on node  exited on signal
<br>
11 (Segmentation fault).
<br>
<p>&nbsp;Not sure why it is failing. Each task initializes its own data and then
<br>
calls the kernel.
<br>
<p>Any help would be appreciated
<br>
<p>Thanks
<br>
<p><p>On Wed, May 2, 2012 at 6:00 PM, Eduardo Morras &lt;nec556_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At 08:51 02/05/2012, you wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to execute following code on cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  run_kernel is a cuda call with signature int run_kernel(int array[],int
</span><br>
<span class="quotelev2">&gt;&gt; nelements, int taskid, char hostname[]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... deleted code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mysum = run_kernel(&amp;onearray[20000000]**, chunksize, taskid, myname);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... more deleted code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am simply trying to calculate sum of array elements using kernel
</span><br>
<span class="quotelev2">&gt;&gt; function. Each task has its own data and it calculates its own sum.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting segmentation fault on master task but all other task
</span><br>
<span class="quotelev2">&gt;&gt; calculate the sum successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 0 has started on host node4
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 1 has started on host node4
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 2 has started on host node5
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 6 has started on host node6
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 5 has started on node5
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 9 has started on host node6
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 8 has started on host node6
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 3 has started on node5
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 4 has started on hnode5
</span><br>
<span class="quotelev2">&gt;&gt; MPI task 7 has started on node6
</span><br>
<span class="quotelev2">&gt;&gt; [node4] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [node4] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [node4] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [node4] Failing at address: 0xb7866000
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 0] [0xbc040c]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 1] /usr/lib/libcuda.so(+0x13a0f6) [0x10640f6]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 2] /usr/lib/libcuda.so(+0x146912) [0x1070912]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 3] /usr/lib/libcuda.so(+0x147231) [0x1071231]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 4] /usr/lib/libcuda.so(+0x13cb64) [0x1066b64]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 5] /usr/lib/libcuda.so(+0x11863c) [0x104263c]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 6] /usr/lib/libcuda.so(+0x11d93b) [0x104793b]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 7] /usr/lib/libcuda.so(**cuMemcpyHtoD_v2+0x64) [0x1037264]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 8] /usr/local/cuda/lib/libcudart.**so.4(+0x20336) [0x224336]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [ 9] /usr/local/cuda/lib/libcudart.**so.4(cudaMemcpy+0x230)
</span><br>
<span class="quotelev2">&gt;&gt; [0x257360]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [10] mpi_array_distributed(run_**kernel+0x9a) [0x804a482]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [11] mpi_array_distributed(main+**0x325) [0x804a139]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [12] /lib/libc.so.6(__libc_start_**main+0xe6) [0x4dece6]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] [13] mpi_array_distributed() [0x8049d81]
</span><br>
<span class="quotelev2">&gt;&gt; [node4] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It fails doing the cuMemcpyHtoD inside cuda code. Perhaps doing any of
</span><br>
<span class="quotelev1">&gt; this changes can fix your problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) mysum = run_kernel(onearray, chunksize, taskid, myname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) mysum = run_kernel(&amp;onearray[20000000-**1], chunksize, taskid, myname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ------------------------------**------------------------------**
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 3054 on node &lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://ecm-c-l-207-004.uniwa.**uwa.edu.au<http://ecm-c-l-207-004.uniwa.uwa.edu.au">http://ecm-c-l-207-004.uniwa.**uwa.edu.au<http://ecm-c-l-207-004.uniwa.uwa.edu.au</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;ecm-c-l-207-004.**uniwa.uwa.edu.au&lt;<a href="http://ecm-c-l-207-004.uniwa.uwa.edu.au">http://ecm-c-l-207-004.uniwa.uwa.edu.au</a>&gt;exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sadly i cant install memory checker such as valgrind on my machine due to
</span><br>
<span class="quotelev2">&gt;&gt; some restrictions. I could not spot any error by looking in code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help me ?what is wrong in above code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19171.php">seshendra seshu: "[OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19169.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Maybe in reply to:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19173.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
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
