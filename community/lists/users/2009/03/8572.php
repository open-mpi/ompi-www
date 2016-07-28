<?
$subject_val = "[OMPI users] problem with overlapping communication with calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 04:44:44 2009" -->
<!-- isoreceived="20090325084444" -->
<!-- sent="Wed, 25 Mar 2009 09:44:37 +0100" -->
<!-- isosent="20090325084437" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="[OMPI users] problem with overlapping communication with calculation" -->
<!-- id="op.urcaknq9hvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem with overlapping communication with calculation<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 04:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8578.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>Reply:</strong> <a href="8578.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>We've found a problem with openmpi when running over IB when calculation  
<br>
reading elements of an array is overlapping communication to other  
<br>
elements (that are not used in the calculation) of the same array. I have  
<br>
written a small test program (below) that shows this behaviour. When the  
<br>
array is small (arrlen in the code), more problems occur. The problems  
<br>
only occur when using IB (even on the same node!?), using mpirun -mca btl  
<br>
tcp,self the problem vanishes.
<br>
<p>The behaviour with 1.2.9 and 1.3.1 is slightly different, where problems  
<br>
occur already for 3 processes with openmpi 1.2.9 but 4 processes are  
<br>
required for problems with 1.3.1. Proper output on 4 processes should just  
<br>
be:
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
<p>With IB:
<br>
mpirun  -np 4 ./test3|head
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Result on rank 0 strangely is 1.06316e+248
<br>
Result on rank 2 strangely is 1.54396e+262
<br>
Result on rank 3 strangely is 3.87325e+233
<br>
Result on rank 1 strangely is 1.54396e+262
<br>
Result on rank 1 strangely is 1.54396e+262
<br>
Result on rank 2 strangely is 1.54396e+262
<br>
<p><p>Info about the system:
<br>
<p>openmpi: 1.2.9, 1.3.1
<br>
<p>&nbsp;From ompi_info:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.1)
<br>
<p>&nbsp;From lspci:
<br>
04:00.0 InfiniBand: Mellanox Technologies MT23108 InfiniHost (rev a1)
<br>
<p>configure picks up ibverbs:
<br>
--- MCA component btl:ofud (m4 configuration macro)
<br>
checking for MCA component btl:ofud compile mode... dso
<br>
checking --with-openib value... simple ok (unspecified)
<br>
checking --with-openib-libdir value... simple ok (unspecified)
<br>
checking for fcntl.h... (cached) yes
<br>
checking sys/poll.h usability... yes
<br>
checking sys/poll.h presence... yes
<br>
checking for sys/poll.h... yes
<br>
checking infiniband/verbs.h usability... yes
<br>
checking infiniband/verbs.h presence... yes
<br>
checking for infiniband/verbs.h... yes
<br>
looking for library without search path
<br>
checking for ibv_open_device in -libverbs... yes
<br>
checking number of arguments to ibv_create_cq... 5
<br>
checking whether IBV_EVENT_CLIENT_REREGISTER is declared... yes
<br>
checking for ibv_get_device_list... yes
<br>
checking for ibv_resize_cq... yes
<br>
checking for struct ibv_device.transport_type... yes
<br>
checking for ibv_create_xrc_rcv_qp... no
<br>
checking rdma/rdma_cma.h usability... yes
<br>
checking rdma/rdma_cma.h presence... yes
<br>
checking for rdma/rdma_cma.h... yes
<br>
checking for rdma_create_id in -lrdmacm... yes
<br>
checking for rdma_get_peer_addr... yes
<br>
checking for infiniband/driver.h... yes
<br>
checking if ConnectX XRC support is enabled... no
<br>
checking if OpenFabrics RDMACM support is enabled... yes
<br>
checking if OpenFabrics IBCM support is enabled... no
<br>
checking if MCA component btl:ofud can compile... yes
<br>
<p>--- MCA component btl:openib (m4 configuration macro)
<br>
checking for MCA component btl:openib compile mode... dso
<br>
checking --with-openib value... simple ok (unspecified)
<br>
checking --with-openib-libdir value... simple ok (unspecified)
<br>
checking for fcntl.h... (cached) yes
<br>
checking for sys/poll.h... (cached) yes
<br>
checking infiniband/verbs.h usability... yes
<br>
checking infiniband/verbs.h presence... yes
<br>
checking for infiniband/verbs.h... yes
<br>
looking for library without search path
<br>
checking for ibv_open_device in -libverbs... yes
<br>
checking number of arguments to ibv_create_cq... (cached) 5
<br>
checking whether IBV_EVENT_CLIENT_REREGISTER is declared... (cached) yes
<br>
checking for ibv_get_device_list... (cached) yes
<br>
checking for ibv_resize_cq... (cached) yes
<br>
checking for struct ibv_device.transport_type... (cached) yes
<br>
checking for ibv_create_xrc_rcv_qp... (cached) no
<br>
checking for rdma/rdma_cma.h... (cached) yes
<br>
checking for rdma_create_id in -lrdmacm... (cached) yes
<br>
checking for rdma_get_peer_addr... yes
<br>
checking for infiniband/driver.h... (cached) yes
<br>
checking if ConnectX XRC support is enabled... no
<br>
checking if OpenFabrics RDMACM support is enabled... yes
<br>
checking if OpenFabrics IBCM support is enabled... no
<br>
checking for ibv_fork_init... yes
<br>
checking for thread support (needed for ibcm/rdmacm)... posix
<br>
checking which openib btl cpcs will be built... oob rdmacm
<br>
checking if MCA component btl:openib can compile... yes
<br>
<p><p>Compilers: gcc 4.1.2 and pgcc 8.0-4 same problems, optimization level does  
<br>
not matter. (-fast, -O3 or -O0) (64 bit)
<br>
<p>CPU: opteron 250
<br>
OS: Scientific linux 5.2
<br>
<p>If you require any more information, I'll be more than happy to provide it!
<br>
<p>Is this a proper way to overlap communication with calculation? Could this  
<br>
be some kind of cache-coherency problem? values in cpu cache already but  
<br>
rdma puts things in memory, although in that case I would expect the sum  
<br>
not to be that off? What would happen if the compiler decided to do  
<br>
non-temporal prefetches (or stores in the general case)?
<br>
<p><p><p>The code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank,size,i,j,k;
<br>
&nbsp;&nbsp;&nbsp;const int arrlen=10;
<br>
&nbsp;&nbsp;&nbsp;const int repeattest=100;
<br>
&nbsp;&nbsp;&nbsp;double *array;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request *reqarr;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status *mpistat;
<br>
&nbsp;&nbsp;&nbsp;MPI_Datatype STRIDED;
<br>
&nbsp;&nbsp;&nbsp;int torank,fromrank,nreq;
<br>
&nbsp;&nbsp;&nbsp;int sumshouldbe;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Non-contiguous data */
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_vector(arrlen,1,size,MPI_DOUBLE,&amp;STRIDED);
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;STRIDED);
<br>
<p>&nbsp;&nbsp;&nbsp;array=malloc(arrlen*size *sizeof *array);
<br>
&nbsp;&nbsp;&nbsp;reqarr=malloc(2*size*sizeof *reqarr);
<br>
&nbsp;&nbsp;&nbsp;mpistat=malloc(2*size*sizeof *mpistat);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Setup communication */
<br>
&nbsp;&nbsp;&nbsp;sumshouldbe=0;
<br>
&nbsp;&nbsp;&nbsp;nreq=0;
<br>
&nbsp;&nbsp;&nbsp;for (i=1; i&lt;size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;torank=rank+i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (torank&gt;=size)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;torank-=size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fromrank=rank-i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (fromrank&lt;0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fromrank+=size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init(array+i,1,STRIDED,fromrank,i,MPI_COMM_WORLD,reqarr+nreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nreq++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send_init(array,1,STRIDED,torank,i,MPI_COMM_WORLD,reqarr+nreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nreq++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sumshouldbe+=i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Sum should be %g\n&quot;,(double)arrlen*sumshouldbe);
<br>
&nbsp;&nbsp;&nbsp;/* Do the tests. */
<br>
&nbsp;&nbsp;&nbsp;for (j=0; j&lt;repeattest; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double sum=0.;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Init test arrays. Array on first process is initially all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zero. On second process all one, etc. Same as rank number. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;arrlen*size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i]=(double)rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Start communication */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Startall(nreq,reqarr);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Accumulate part of arrays that are not communicated. This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;touches the parts of the arrays that are *not*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;communicated!! */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;arrlen; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum+=array[i*size];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Wait for communication to finish */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(nreq,reqarr,mpistat);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Accumulate part of arrays that have been communicated. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;arrlen*(size-1); i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (k=0; k&lt;size-1; k++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum+=array[i*size+1+k];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (sum!=arrlen*sumshouldbe)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Result on rank %d strangely is %g\n&quot;,rank,sum);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p><p><p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8571.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8578.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>Reply:</strong> <a href="8578.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
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
