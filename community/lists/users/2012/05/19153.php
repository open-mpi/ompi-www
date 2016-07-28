<?
$subject_val = "[OMPI users] Segmentation fault on master task";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 02:52:03 2012" -->
<!-- isoreceived="20120502065203" -->
<!-- sent="Wed, 2 May 2012 14:51:58 +0800" -->
<!-- isosent="20120502065158" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault on master task" -->
<!-- id="CAFAE9jjALiK4625SS+42zX-XPE1GrABGWEXj1sBX9xrRN4WMRA_at_mail.gmail.com" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 02:51:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19154.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19152.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19154.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe reply:</strong> <a href="19154.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe reply:</strong> <a href="19159.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe reply:</strong> <a href="19162.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to execute following code on cluster.
<br>
<p>run_kernel is a cuda call with signature int run_kernel(int array[],int
<br>
nelements, int taskid, char hostname[]);
<br>
<p>My MPI code is
<br>
<p><p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>#define  MASTER        0
<br>
<p><p>int *masterarray;
<br>
int *onearray;
<br>
int *twoarray;
<br>
int *threearray;
<br>
int *fourarray;
<br>
int *fivearray;
<br>
int *sixarray;
<br>
int *sevenarray;
<br>
int *eightarray;
<br>
int *ninearray;
<br>
<p><p><p><p>int main(int argc, char* argv[])
<br>
{
<br>
int   numtasks, taskid, rc, dest, offset, i, j, tag1, tag2, source,
<br>
chunksize, namelen;
<br>
<p>int mysum;
<br>
int update(int myoffset, int chunk, int myid);
<br>
char myname[MPI_MAX_PROCESSOR_NAME];
<br>
MPI_Status status;
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
chunksize = 20000000;
<br>
tag2 = 1;
<br>
tag1 = 2;
<br>
<p>masterarray= malloc(chunksize * sizeof(int));
<br>
onearray= malloc(chunksize * sizeof(int));
<br>
twoarray= malloc(chunksize * sizeof(int));
<br>
threearray= malloc(chunksize * sizeof(int));
<br>
fourarray= malloc(chunksize * sizeof(int));
<br>
fivearray= malloc(chunksize * sizeof(int));
<br>
sixarray= malloc(chunksize * sizeof(int));
<br>
sevenarray= malloc(chunksize * sizeof(int));
<br>
eightarray= malloc(chunksize * sizeof(int));
<br>
ninearray= malloc(chunksize * sizeof(int));
<br>
<p>int a;
<br>
<p>/*initialize all the arrays*/
<br>
for(a=0;a&lt;chunksize;a++){
<br>
&nbsp;&nbsp;&nbsp;masterarray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;onearray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;twoarray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;threearray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;fourarray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;fivearray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;sixarray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;sevenarray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;eightarray[a] = 1;
<br>
&nbsp;&nbsp;&nbsp;ninearray[a] = 1;
<br>
<p>&nbsp;}
<br>
<p>/***** Master task only ******/
<br>
if (taskid == MASTER){
<br>
<p><p>&nbsp;&nbsp;mysum = run_kernel(&amp;masterarray[20000000], chunksize, taskid, myname);
<br>
<p>&nbsp;}  /* end of master section */
<br>
<p><p>if (taskid &gt; MASTER) {
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;onearray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;if(taskid == 2){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;twoarray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;if(taskid == 3){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;threearray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;if(taskid == 4){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;fourarray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if(taskid == 5){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;fivearray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(taskid == 6){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;sixarray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if(taskid == 7){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;sevenarray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if(taskid == 8){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;eightarray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if(taskid == 9){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysum = run_kernel(&amp;ninearray[20000000], chunksize, taskid, myname);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;}
<br>
<p>&nbsp;MPI_Finalize();
<br>
<p>}
<br>
<p><p>I am simply trying to calculate sum of array elements using kernel
<br>
function. Each task has its own data and it calculates its own sum.
<br>
<p>I am getting segmentation fault on master task but all other task calculate
<br>
the sum successfully.
<br>
<p>Here is the output
<br>
<p><p>MPI task 0 has started on host node4
<br>
MPI task 1 has started on host node4
<br>
MPI task 2 has started on host node5
<br>
MPI task 6 has started on host node6
<br>
MPI task 5 has started on node5
<br>
MPI task 9 has started on host node6
<br>
MPI task 8 has started on host node6
<br>
MPI task 3 has started on node5
<br>
MPI task 4 has started on hnode5
<br>
MPI task 7 has started on node6
<br>
[node4] *** Process received signal ***
<br>
[node4] Signal: Segmentation fault (11)
<br>
[node4] Signal code: Address not mapped (1)
<br>
[node4] Failing at address: 0xb7866000
<br>
[node4] [ 0] [0xbc040c]
<br>
[node4] [ 1] /usr/lib/libcuda.so(+0x13a0f6) [0x10640f6]
<br>
[node4] [ 2] /usr/lib/libcuda.so(+0x146912) [0x1070912]
<br>
[node4] [ 3] /usr/lib/libcuda.so(+0x147231) [0x1071231]
<br>
[node4] [ 4] /usr/lib/libcuda.so(+0x13cb64) [0x1066b64]
<br>
[node4] [ 5] /usr/lib/libcuda.so(+0x11863c) [0x104263c]
<br>
[node4] [ 6] /usr/lib/libcuda.so(+0x11d93b) [0x104793b]
<br>
[node4] [ 7] /usr/lib/libcuda.so(cuMemcpyHtoD_v2+0x64) [0x1037264]
<br>
[node4] [ 8] /usr/local/cuda/lib/libcudart.so.4(+0x20336) [0x224336]
<br>
[node4] [ 9] /usr/local/cuda/lib/libcudart.so.4(cudaMemcpy+0x230) [0x257360]
<br>
[node4] [10] mpi_array_distributed(run_kernel+0x9a) [0x804a482]
<br>
[node4] [11] mpi_array_distributed(main+0x325) [0x804a139]
<br>
[node4] [12] /lib/libc.so.6(__libc_start_main+0xe6) [0x4dece6]
<br>
[node4] [13] mpi_array_distributed() [0x8049d81]
<br>
[node4] *** End of error message ***
<br>
<p>&nbsp;MPI Task 1 is executing Kernel function........
<br>
&nbsp;Task 1 has sum (on GPU): 100002306 Time for the kernel: 39.462273 ms
<br>
<p>&nbsp;MPI Task 7 is executing Kernel function........
<br>
&nbsp;Task 7 has sum (on GPU): 100002306 Time for the kernel: 64.105377 ms
<br>
<p>&nbsp;MPI Task 9 is executing Kernel function.....
<br>
&nbsp;Task 9 has sum (on GPU): 100002306 Time for the kernel: 45.486912 ms
<br>
<p>&nbsp;MPI Task 8 is executing Kernel function........Size of shared memory: 2048
<br>
<p>&nbsp;MPI Task 4 is executing Kernel function.......
<br>
&nbsp;Task 8 has sum (on GPU): 100002306 Time for the kernel: 70.883362 ms
<br>
<p>&nbsp;MPI Task 2 is executing Kernel function......
<br>
&nbsp;Task 4 has sum (on GPU): 100002306 Time for the kernel: 129.759079 ms
<br>
&nbsp;Task 2 has sum (on GPU): 100002306 Time for the kernel: 139.709473 ms
<br>
<p>&nbsp;MPI Task 6 is executing Kernel function......
<br>
<p>&nbsp;MPI Task 3 is executing Kernel function.......
<br>
&nbsp;Task 6 has sum (on GPU): 100002306 Time for the kernel: 47.691456 ms
<br>
&nbsp;Task 3 has sum (on GPU): 100002306 Time for the kernel: 110.210335 ms
<br>
<p>&nbsp;MPI Task 5 is executing Kernel function......
<br>
&nbsp;Task 5 has sum (on GPU): 100002306 Time for the kernel: 110.706787 ms
<br>
<p>&nbsp;--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3054 on node
<br>
ecm-c-l-207-004.uniwa.uwa.edu.au exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Sadly i cant install memory checker such as valgrind on my machine due to
<br>
some restrictions. I could not spot any error by looking in code.
<br>
<p>Can anyone help me ?what is wrong in above code.
<br>
<p>Thanks
<br>
<pre>
--
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19154.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Previous message:</strong> <a href="19152.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19154.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe reply:</strong> <a href="19154.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe reply:</strong> <a href="19159.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe reply:</strong> <a href="19162.php">Eduardo Morras: "Re: [OMPI users] Segmentation fault on master task"</a>
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
