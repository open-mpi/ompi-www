<?
$subject_val = "Re: [OMPI users] problem with overlapping communication with calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 11:06:02 2009" -->
<!-- isoreceived="20090325150602" -->
<!-- sent="Wed, 25 Mar 2009 16:05:56 +0100" -->
<!-- isosent="20090325150556" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with overlapping communication with calculation" -->
<!-- id="op.urcr76pehvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.urcotelphvmlko_at_girasole.cluster.mkem.uu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with overlapping communication with calculation<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 11:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Previous message:</strong> <a href="8580.php">Gus Correa: "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>In reply to:</strong> <a href="8578.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>The bad behaviour now only occurs with version 1.2.X of openmpi (I have  
<br>
tried 1.2.5, 1.2.8 and 1.2.9 with gcc and 1.2.7 and 1.2.9 with pgi cc.  
<br>
Problem is in all of those.). With 1.3.1 I can find no problem at all. So  
<br>
perhaps that means that the problem is solved?
<br>
<p>mpirun -np 4 ./test4|head
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Result on rank 1 strangely is 50
<br>
Result on rank 1 strangely is 30
<br>
Result on rank 3 strangely is 90
<br>
Result on rank 3 strangely is 80
<br>
Result on rank 0 strangely is 50
<br>
Result on rank 1 strangely is 40
<br>
<p>Without IB there is no problem:
<br>
mpirun -mca btl self,tcp -np 4 ./test4
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
Sum should be 60
<br>
<p>The full (bug fixed code):
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
&nbsp;&nbsp;&nbsp;const int repeattest=1000000;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;arrlen; i++)
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
<p>Details about the computer &amp; os is in the original mail (quoted below).
<br>
<p><p>Daniel Sp&#229;ngberg
<br>
<p><p>Den 2009-03-25 14:52:16 skrev Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A colleague pointed out an error in my test code. The final loop should  
</span><br>
<span class="quotelev1">&gt; not be
</span><br>
<span class="quotelev1">&gt;   for (i=0; i&lt;arrlen*(size-1); i++)
</span><br>
<span class="quotelev1">&gt; but rather
</span><br>
<span class="quotelev1">&gt;   for (i=0; i&lt;arrlen; i++)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; details, details... Anyway, I still get problems from time to time with  
</span><br>
<span class="quotelev1">&gt; this test code, but I have not yet had time to figure out the  
</span><br>
<span class="quotelev1">&gt; circumstances when this happens. I will report back to this list once I  
</span><br>
<span class="quotelev1">&gt; know what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to trouble you too early!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Den 2009-03-25 09:44:37 skrev Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've found a problem with openmpi when running over IB when  
</span><br>
<span class="quotelev2">&gt;&gt; calculation reading elements of an array is overlapping communication  
</span><br>
<span class="quotelev2">&gt;&gt; to other elements (that are not used in the calculation) of the same  
</span><br>
<span class="quotelev2">&gt;&gt; array. I have written a small test program (below) that shows this  
</span><br>
<span class="quotelev2">&gt;&gt; behaviour. When the array is small (arrlen in the code), more problems  
</span><br>
<span class="quotelev2">&gt;&gt; occur. The problems only occur when using IB (even on the same node!?),  
</span><br>
<span class="quotelev2">&gt;&gt; using mpirun -mca btl tcp,self the problem vanishes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The behaviour with 1.2.9 and 1.3.1 is slightly different, where  
</span><br>
<span class="quotelev2">&gt;&gt; problems occur already for 3 processes with openmpi 1.2.9 but 4  
</span><br>
<span class="quotelev2">&gt;&gt; processes are required for problems with 1.3.1. Proper output on 4  
</span><br>
<span class="quotelev2">&gt;&gt; processes should just be:
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With IB:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  -np 4 ./test3|head
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Sum should be 60
</span><br>
<span class="quotelev2">&gt;&gt; Result on rank 0 strangely is 1.06316e+248
</span><br>
<span class="quotelev2">&gt;&gt; Result on rank 2 strangely is 1.54396e+262
</span><br>
<span class="quotelev2">&gt;&gt; Result on rank 3 strangely is 3.87325e+233
</span><br>
<span class="quotelev2">&gt;&gt; Result on rank 1 strangely is 1.54396e+262
</span><br>
<span class="quotelev2">&gt;&gt; Result on rank 1 strangely is 1.54396e+262
</span><br>
<span class="quotelev2">&gt;&gt; Result on rank 2 strangely is 1.54396e+262
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Info about the system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi: 1.2.9, 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From ompi_info:
</span><br>
<span class="quotelev2">&gt;&gt;     MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From lspci:
</span><br>
<span class="quotelev2">&gt;&gt; 04:00.0 InfiniBand: Mellanox Technologies MT23108 InfiniHost (rev a1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure picks up ibverbs:
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component btl:ofud (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component btl:ofud compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-openib value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-openib-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking sys/poll.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking sys/poll.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for sys/poll.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; looking for library without search path
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_open_device in -libverbs... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking number of arguments to ibv_create_cq... 5
</span><br>
<span class="quotelev2">&gt;&gt; checking whether IBV_EVENT_CLIENT_REREGISTER is declared... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_get_device_list... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_resize_cq... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for struct ibv_device.transport_type... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_create_xrc_rcv_qp... no
</span><br>
<span class="quotelev2">&gt;&gt; checking rdma/rdma_cma.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking rdma/rdma_cma.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma/rdma_cma.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma_create_id in -lrdmacm... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for infiniband/driver.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if OpenFabrics RDMACM support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if OpenFabrics IBCM support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if MCA component btl:ofud can compile... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-openib value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-openib-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for sys/poll.h... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; looking for library without search path
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_open_device in -libverbs... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking number of arguments to ibv_create_cq... (cached) 5
</span><br>
<span class="quotelev2">&gt;&gt; checking whether IBV_EVENT_CLIENT_REREGISTER is declared... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_get_device_list... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_resize_cq... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for struct ibv_device.transport_type... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_create_xrc_rcv_qp... (cached) no
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma/rdma_cma.h... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma_create_id in -lrdmacm... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for infiniband/driver.h... (cached) yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if OpenFabrics RDMACM support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if OpenFabrics IBCM support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for ibv_fork_init... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for thread support (needed for ibcm/rdmacm)... posix
</span><br>
<span class="quotelev2">&gt;&gt; checking which openib btl cpcs will be built... oob rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compilers: gcc 4.1.2 and pgcc 8.0-4 same problems, optimization level  
</span><br>
<span class="quotelev2">&gt;&gt; does not matter. (-fast, -O3 or -O0) (64 bit)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CPU: opteron 250
</span><br>
<span class="quotelev2">&gt;&gt; OS: Scientific linux 5.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you require any more information, I'll be more than happy to provide  
</span><br>
<span class="quotelev2">&gt;&gt; it!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a proper way to overlap communication with calculation? Could  
</span><br>
<span class="quotelev2">&gt;&gt; this be some kind of cache-coherency problem? values in cpu cache  
</span><br>
<span class="quotelev2">&gt;&gt; already but rdma puts things in memory, although in that case I would  
</span><br>
<span class="quotelev2">&gt;&gt; expect the sum not to be that off? What would happen if the compiler  
</span><br>
<span class="quotelev2">&gt;&gt; decided to do non-temporal prefetches (or stores in the general case)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank,size,i,j,k;
</span><br>
<span class="quotelev2">&gt;&gt;    const int arrlen=10;
</span><br>
<span class="quotelev2">&gt;&gt;    const int repeattest=100;
</span><br>
<span class="quotelev2">&gt;&gt;    double *array;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Request *reqarr;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status *mpistat;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Datatype STRIDED;
</span><br>
<span class="quotelev2">&gt;&gt;    int torank,fromrank,nreq;
</span><br>
<span class="quotelev2">&gt;&gt;    int sumshouldbe;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* Non-contiguous data */
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Type_vector(arrlen,1,size,MPI_DOUBLE,&amp;STRIDED);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Type_commit(&amp;STRIDED);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    array=malloc(arrlen*size *sizeof *array);
</span><br>
<span class="quotelev2">&gt;&gt;    reqarr=malloc(2*size*sizeof *reqarr);
</span><br>
<span class="quotelev2">&gt;&gt;    mpistat=malloc(2*size*sizeof *mpistat);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* Setup communication */
</span><br>
<span class="quotelev2">&gt;&gt;    sumshouldbe=0;
</span><br>
<span class="quotelev2">&gt;&gt;    nreq=0;
</span><br>
<span class="quotelev2">&gt;&gt;    for (i=1; i&lt;size; i++)
</span><br>
<span class="quotelev2">&gt;&gt;      {
</span><br>
<span class="quotelev2">&gt;&gt;        torank=rank+i;
</span><br>
<span class="quotelev2">&gt;&gt;        if (torank&gt;=size)
</span><br>
<span class="quotelev2">&gt;&gt;          torank-=size;
</span><br>
<span class="quotelev2">&gt;&gt;        fromrank=rank-i;
</span><br>
<span class="quotelev2">&gt;&gt;        if (fromrank&lt;0)
</span><br>
<span class="quotelev2">&gt;&gt;          fromrank+=size;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Recv_init(array+i,1,STRIDED,fromrank,i,MPI_COMM_WORLD,reqarr+nreq);
</span><br>
<span class="quotelev2">&gt;&gt;        nreq++;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Send_init(array,1,STRIDED,torank,i,MPI_COMM_WORLD,reqarr+nreq);
</span><br>
<span class="quotelev2">&gt;&gt;        nreq++;
</span><br>
<span class="quotelev2">&gt;&gt;        sumshouldbe+=i;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;Sum should be %g\n&quot;,(double)arrlen*sumshouldbe);
</span><br>
<span class="quotelev2">&gt;&gt;    /* Do the tests. */
</span><br>
<span class="quotelev2">&gt;&gt;    for (j=0; j&lt;repeattest; j++)
</span><br>
<span class="quotelev2">&gt;&gt;      {
</span><br>
<span class="quotelev2">&gt;&gt;        double sum=0.;
</span><br>
<span class="quotelev2">&gt;&gt;        /* Init test arrays. Array on first process is initially all
</span><br>
<span class="quotelev2">&gt;&gt;           zero. On second process all one, etc. Same as rank number. */
</span><br>
<span class="quotelev2">&gt;&gt;        for (i=0; i&lt;arrlen*size; i++)
</span><br>
<span class="quotelev2">&gt;&gt;          array[i]=(double)rank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        /* Start communication */
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Startall(nreq,reqarr);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        /* Accumulate part of arrays that are not communicated. This
</span><br>
<span class="quotelev2">&gt;&gt;           touches the parts of the arrays that are *not*
</span><br>
<span class="quotelev2">&gt;&gt;           communicated!! */
</span><br>
<span class="quotelev2">&gt;&gt;        for (i=0; i&lt;arrlen; i++)
</span><br>
<span class="quotelev2">&gt;&gt;          sum+=array[i*size];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        /* Wait for communication to finish */
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Waitall(nreq,reqarr,mpistat);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        /* Accumulate part of arrays that have been communicated. */
</span><br>
<span class="quotelev2">&gt;&gt;        for (i=0; i&lt;arrlen*(size-1); i++)
</span><br>
<span class="quotelev2">&gt;&gt;          {
</span><br>
<span class="quotelev2">&gt;&gt;            for (k=0; k&lt;size-1; k++)
</span><br>
<span class="quotelev2">&gt;&gt;              sum+=array[i*size+1+k];
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if (sum!=arrlen*sumshouldbe)
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;Result on rank %d strangely is %g\n&quot;,rank,sum);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Previous message:</strong> <a href="8580.php">Gus Correa: "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>In reply to:</strong> <a href="8578.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<!-- nextthread="start" -->
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
