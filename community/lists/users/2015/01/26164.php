<?
$subject_val = "[OMPI users] Segmentation fault when using CUDA Aware feature";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 11 23:41:03 2015" -->
<!-- isoreceived="20150112044103" -->
<!-- sent="Sun, 11 Jan 2015 23:41:01 -0500" -->
<!-- isosent="20150112044101" -->
<!-- name="Xun Gong" -->
<!-- email="realgxseven_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault when using CUDA Aware feature" -->
<!-- id="CADDypwWFYfssgqDrxPMJVjiDhUX_4TpqiY_71JbSJSFrWMX1ew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault when using CUDA Aware feature<br>
<strong>From:</strong> Xun Gong (<em>realgxseven_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-11 23:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26165.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<li><strong>Previous message:</strong> <a href="26163.php">Mike Dubman: "Re: [OMPI users] Determine IB transport type of OpenMPI job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26166.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<li><strong>Reply:</strong> <a href="26166.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<li><strong>Reply:</strong> <a href="26168.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The OpenMpi I used is 1.8.4. I just tried to run a test program to see if
<br>
the CUDA aware feature works. But I got the following errors.
<br>
<p>ss_at_ss-Inspiron-5439:~/cuda-workspace/cuda_mpi_ex1$ mpirun -np 2 s1
<br>
[ss-Inspiron-5439:32514] *** Process received signal ***
<br>
[ss-Inspiron-5439:32514] Signal: Segmentation fault (11)
<br>
[ss-Inspiron-5439:32514] Signal code: Address not mapped (1)
<br>
[ss-Inspiron-5439:32514] Failing at address: 0x3
<br>
[ss-Inspiron-5439:32514] [ 0]
<br>
/lib/x86_64-linux-gnu/libc.so.6(+0x36c30)[0x7f74d7048c30]
<br>
[ss-Inspiron-5439:32514] [ 1]
<br>
/lib/x86_64-linux-gnu/libc.so.6(+0x98a70)[0x7f74d70aaa70]
<br>
[ss-Inspiron-5439:32514] [ 2]
<br>
/usr/local/openmpi-1.8.4/lib/libopen-pal.so.6(opal_convertor_pack+0x187)[0x7f74d673f097]
<br>
[ss-Inspiron-5439:32514] [ 3]
<br>
/usr/local/openmpi-1.8.4/lib/openmpi/mca_btl_self.so(mca_btl_self_prepare_src+0xb8)[0x7f74ce196888]
<br>
[ss-Inspiron-5439:32514] [ 4]
<br>
/usr/local/openmpi-1.8.4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_prepare+0x4c)[0x7f74cd2c183c]
<br>
[ss-Inspiron-5439:32514] [ 5]
<br>
/usr/local/openmpi-1.8.4/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x5ba)[0x7f74cd2b78aa]
<br>
[ss-Inspiron-5439:32514] [ 6]
<br>
/usr/local/openmpi-1.8.4/lib/libmpi.so.1(PMPI_Send+0xf2)[0x7f74d79602a2]
<br>
[ss-Inspiron-5439:32514] [ 7] s1[0x408b1e]
<br>
[ss-Inspiron-5439:32514] [ 8]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f74d7033ec5]
<br>
[ss-Inspiron-5439:32514] [ 9] s1[0x4088e9]
<br>
[ss-Inspiron-5439:32514] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 32514 on node ss-Inspiron-5439
<br>
exited on signal 11 (Segmentation fault).
<br>
<p>Looks like MPI_Send can not send CUDA buffer. But I already did  the
<br>
command      ./configure --with-cuda for OpenMPI.
<br>
<p><p>The command I uesd is.
<br>
<p>ss_at_ss-Inspiron-5439:~/cuda-workspace/cuda_mpi_ex1$ nvcc -c k1.cu
<br>
ss_at_ss-Inspiron-5439:~/cuda-workspace/cuda_mpi_ex1$ mpic++ -c main.cc
<br>
ss_at_ss-Inspiron-5439:~/cuda-workspace/cuda_mpi_ex1$ mpic++ -o s1 main.o k1.o
<br>
-L/usr/local/cuda/lib64/ -lcudart
<br>
ss_at_ss-Inspiron-5439:~/cuda-workspace/cuda_mpi_ex1$ mpirun -np 2 ./s1
<br>
<p><p><p>The code I'm running is
<br>
<p>main.cc file
<br>
#include&lt;iostream&gt;
<br>
using namespace std;
<br>
#include&lt;mpi.h&gt;
<br>
#include&quot;k1.h&quot;
<br>
#define vect_len 16
<br>
const int blocksize = 16;
<br>
<p>int main(int argv, char *argc[])
<br>
{
<br>
int numprocs, myid;
<br>
MPI_Status status;
<br>
const int vect_size = vect_len*sizeof(int);
<br>
<p>int *vect1 = new int[vect_size];
<br>
int *vect2 = new int[vect_size];
<br>
int *result = new int[vect_size];
<br>
&nbsp;&nbsp;bool flag;
<br>
<p>&nbsp;&nbsp;int *ad;
<br>
&nbsp;&nbsp;int *bd;
<br>
<p>MPI_Init(&amp;argv, &amp;argc);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;if(myid == 0)
<br>
&nbsp;&nbsp;{
<br>
for(int i = 0; i &lt; vect_len; i++)
<br>
{
<br>
vect1[i] = i;
<br>
vect2[i] = 2 * i;
<br>
}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;{
<br>
for(int i = 0; i &lt; vect_len; i++)
<br>
{
<br>
vect1[i] = 2 * i;
<br>
vect2[i] = i;
<br>
}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;initializeGPU(vect1, vect2, ad, bd, vect_size);
<br>
<p>if(myid == 0)
<br>
{
<br>
for(int i = 0; i &lt; numprocs; i++)
<br>
{
<br>
MPI_Send(ad,vect_len, MPI_INT, i, 99, MPI_COMM_WORLD );
<br>
MPI_Send(bd,vect_len, MPI_INT, i, 99, MPI_COMM_WORLD );
<br>
}
<br>
}
<br>
else
<br>
{
<br>
MPI_Recv(ad,vect_len, MPI_INT, 0, 99, MPI_COMM_WORLD, &amp;status );
<br>
MPI_Recv(bd,vect_len, MPI_INT, 0, 99, MPI_COMM_WORLD, &amp;status );
<br>
}
<br>
<p><p><p>computeGPU(blocksize, vect_len, ad, bd, result, vect_size);
<br>
<p>//Verify
<br>
flag = true;
<br>
<p>for(int i = 0; i &lt; vect_len; i++)
<br>
{
<br>
if (i &lt; 8)
<br>
vect1[i] += vect2[i];
<br>
else
<br>
vect1[i] -= vect2[i];
<br>
<p>}
<br>
<p>for(int i = 0; i &lt; vect_len; i++)
<br>
{
<br>
if( result[i] != vect1[i] )
<br>
{
<br>
cout&lt;&lt;&quot;the result [&quot;&lt;&lt;i&lt;&lt;&quot;] by m2s is&quot;&lt;&lt;result[i]&lt;&lt;endl;
<br>
cout&lt;&lt;&quot;the result [&quot;&lt;&lt;i&lt;&lt;&quot;] of vector is&quot;&lt;&lt;vect1[i]&lt;&lt;endl;
<br>
cout &lt;&lt; &quot;Verification fail at &quot; &lt;&lt; i &lt;&lt; endl;
<br>
flag = false;
<br>
break;
<br>
}
<br>
<p>}
<br>
if(flag)
<br>
cout &lt;&lt; &quot;Verification passes.&quot; &lt;&lt;endl;
<br>
// free device memory
<br>
/* cudaFree( ad );
<br>
cudaFree( bd );
<br>
free(vect1);
<br>
free(vect2);
<br>
free(result);
<br>
*/
<br>
MPI_Finalize();
<br>
}
<br>
<p><p>k1.h file
<br>
<p>void initializeGPU(int *hostptr1, int *hostptr2, int *ad, int *bd, int
<br>
vect_size);
<br>
<p>void computeGPU(int block_size, int vect_len, int *ptr1, int *ptr2, int*
<br>
result, int vect_size);
<br>
<p><p><p>k1.cu file
<br>
<p>#include&quot;k1.h&quot;
<br>
<p>__global__ void vect_add(int *a, int *b, int n)
<br>
{
<br>
<p>int id = threadIdx.x;
<br>
<p>if (id &lt; n)
<br>
a[id] = a[id] + b[id];
<br>
else
<br>
a[id] = a[id] - b[id];
<br>
}
<br>
<p>void initializeGPU(int *hostptr1, int *hostptr2, int *ad, int *bd, int
<br>
vect_size)
<br>
{
<br>
<p>// initialize device memory
<br>
cudaMalloc( (void**)&amp;ad, vect_size );
<br>
cudaMalloc( (void**)&amp;bd, vect_size );
<br>
<p>// copy data to device
<br>
cudaMemcpy( ad, hostptr1, vect_size, cudaMemcpyHostToDevice );
<br>
cudaMemcpy( bd, hostptr2, vect_size, cudaMemcpyHostToDevice );
<br>
<p>}
<br>
<p>void computeGPU(int block_size, int vect_len, int *ptr1, int *ptr2, int*
<br>
result, int vect_size)
<br>
{
<br>
// setup block and grid size
<br>
dim3 dimBlock( block_size, 1, 1);
<br>
dim3 dimGrid( vect_len/block_size, 1 , 1);
<br>
vect_add&lt;&lt;&lt;dimGrid, dimBlock&gt;&gt;&gt;(ptr1, ptr2, 8);
<br>
<p>cudaMemcpy( result, ptr1 , vect_size, cudaMemcpyDeviceToHost );
<br>
}
<br>
<p><p>Many Thanks for help,
<br>
Xun
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26164/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26165.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-685-g881b1dc on Soalris 10"</a>
<li><strong>Previous message:</strong> <a href="26163.php">Mike Dubman: "Re: [OMPI users] Determine IB transport type of OpenMPI job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26166.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<li><strong>Reply:</strong> <a href="26166.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
<li><strong>Reply:</strong> <a href="26168.php">Rolf vandeVaart: "Re: [OMPI users] Segmentation fault when using CUDA Aware feature"</a>
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
