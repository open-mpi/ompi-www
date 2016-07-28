<?
$subject_val = "Re: [OMPI users] problem with overlapping communication with calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 09:52:22 2009" -->
<!-- isoreceived="20090325135222" -->
<!-- sent="Wed, 25 Mar 2009 14:52:16 +0100" -->
<!-- isosent="20090325135216" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with overlapping communication with calculation" -->
<!-- id="op.urcotelphvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.urcaknq9hvmlko_at_girasole.cluster.mkem.uu.se" -->
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
<strong>Date:</strong> 2009-03-25 09:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8579.php">Lionel Gamet: "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv"</a>
<li><strong>Previous message:</strong> <a href="8577.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8572.php">Daniel Sp&#229;ngberg: "[OMPI users] problem with overlapping communication with calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8581.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>Reply:</strong> <a href="8581.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>A colleague pointed out an error in my test code. The final loop should  
<br>
not be
<br>
&nbsp;&nbsp;for (i=0; i&lt;arrlen*(size-1); i++)
<br>
but rather
<br>
&nbsp;&nbsp;for (i=0; i&lt;arrlen; i++)
<br>
<p>details, details... Anyway, I still get problems from time to time with  
<br>
this test code, but I have not yet had time to figure out the  
<br>
circumstances when this happens. I will report back to this list once I  
<br>
know what's going on.
<br>
<p>Sorry to trouble you too early!
<br>
<p>Daniel Sp&#229;ngberg
<br>
<p><p>Den 2009-03-25 09:44:37 skrev Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've found a problem with openmpi when running over IB when calculation  
</span><br>
<span class="quotelev1">&gt; reading elements of an array is overlapping communication to other  
</span><br>
<span class="quotelev1">&gt; elements (that are not used in the calculation) of the same array. I  
</span><br>
<span class="quotelev1">&gt; have written a small test program (below) that shows this behaviour.  
</span><br>
<span class="quotelev1">&gt; When the array is small (arrlen in the code), more problems occur. The  
</span><br>
<span class="quotelev1">&gt; problems only occur when using IB (even on the same node!?), using  
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl tcp,self the problem vanishes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The behaviour with 1.2.9 and 1.3.1 is slightly different, where problems  
</span><br>
<span class="quotelev1">&gt; occur already for 3 processes with openmpi 1.2.9 but 4 processes are  
</span><br>
<span class="quotelev1">&gt; required for problems with 1.3.1. Proper output on 4 processes should  
</span><br>
<span class="quotelev1">&gt; just be:
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With IB:
</span><br>
<span class="quotelev1">&gt; mpirun  -np 4 ./test3|head
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Sum should be 60
</span><br>
<span class="quotelev1">&gt; Result on rank 0 strangely is 1.06316e+248
</span><br>
<span class="quotelev1">&gt; Result on rank 2 strangely is 1.54396e+262
</span><br>
<span class="quotelev1">&gt; Result on rank 3 strangely is 3.87325e+233
</span><br>
<span class="quotelev1">&gt; Result on rank 1 strangely is 1.54396e+262
</span><br>
<span class="quotelev1">&gt; Result on rank 1 strangely is 1.54396e+262
</span><br>
<span class="quotelev1">&gt; Result on rank 2 strangely is 1.54396e+262
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Info about the system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi: 1.2.9, 1.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From ompi_info:
</span><br>
<span class="quotelev1">&gt;     MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From lspci:
</span><br>
<span class="quotelev1">&gt; 04:00.0 InfiniBand: Mellanox Technologies MT23108 InfiniHost (rev a1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure picks up ibverbs:
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:ofud (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:ofud compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-openib value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking --with-openib-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking sys/poll.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking sys/poll.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for sys/poll.h... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... yes
</span><br>
<span class="quotelev1">&gt; checking number of arguments to ibv_create_cq... 5
</span><br>
<span class="quotelev1">&gt; checking whether IBV_EVENT_CLIENT_REREGISTER is declared... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_get_device_list... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_resize_cq... yes
</span><br>
<span class="quotelev1">&gt; checking for struct ibv_device.transport_type... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_create_xrc_rcv_qp... no
</span><br>
<span class="quotelev1">&gt; checking rdma/rdma_cma.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking rdma/rdma_cma.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for rdma/rdma_cma.h... yes
</span><br>
<span class="quotelev1">&gt; checking for rdma_create_id in -lrdmacm... yes
</span><br>
<span class="quotelev1">&gt; checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/driver.h... yes
</span><br>
<span class="quotelev1">&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if OpenFabrics RDMACM support is enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if OpenFabrics IBCM support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:ofud can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-openib value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking --with-openib-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for sys/poll.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... yes
</span><br>
<span class="quotelev1">&gt; checking number of arguments to ibv_create_cq... (cached) 5
</span><br>
<span class="quotelev1">&gt; checking whether IBV_EVENT_CLIENT_REREGISTER is declared... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_get_device_list... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_resize_cq... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for struct ibv_device.transport_type... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_create_xrc_rcv_qp... (cached) no
</span><br>
<span class="quotelev1">&gt; checking for rdma/rdma_cma.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for rdma_create_id in -lrdmacm... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/driver.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if OpenFabrics RDMACM support is enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if OpenFabrics IBCM support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking for ibv_fork_init... yes
</span><br>
<span class="quotelev1">&gt; checking for thread support (needed for ibcm/rdmacm)... posix
</span><br>
<span class="quotelev1">&gt; checking which openib btl cpcs will be built... oob rdmacm
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compilers: gcc 4.1.2 and pgcc 8.0-4 same problems, optimization level  
</span><br>
<span class="quotelev1">&gt; does not matter. (-fast, -O3 or -O0) (64 bit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CPU: opteron 250
</span><br>
<span class="quotelev1">&gt; OS: Scientific linux 5.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you require any more information, I'll be more than happy to provide  
</span><br>
<span class="quotelev1">&gt; it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a proper way to overlap communication with calculation? Could  
</span><br>
<span class="quotelev1">&gt; this be some kind of cache-coherency problem? values in cpu cache  
</span><br>
<span class="quotelev1">&gt; already but rdma puts things in memory, although in that case I would  
</span><br>
<span class="quotelev1">&gt; expect the sum not to be that off? What would happen if the compiler  
</span><br>
<span class="quotelev1">&gt; decided to do non-temporal prefetches (or stores in the general case)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank,size,i,j,k;
</span><br>
<span class="quotelev1">&gt;    const int arrlen=10;
</span><br>
<span class="quotelev1">&gt;    const int repeattest=100;
</span><br>
<span class="quotelev1">&gt;    double *array;
</span><br>
<span class="quotelev1">&gt;    MPI_Request *reqarr;
</span><br>
<span class="quotelev1">&gt;    MPI_Status *mpistat;
</span><br>
<span class="quotelev1">&gt;    MPI_Datatype STRIDED;
</span><br>
<span class="quotelev1">&gt;    int torank,fromrank,nreq;
</span><br>
<span class="quotelev1">&gt;    int sumshouldbe;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* Non-contiguous data */
</span><br>
<span class="quotelev1">&gt;    MPI_Type_vector(arrlen,1,size,MPI_DOUBLE,&amp;STRIDED);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;STRIDED);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    array=malloc(arrlen*size *sizeof *array);
</span><br>
<span class="quotelev1">&gt;    reqarr=malloc(2*size*sizeof *reqarr);
</span><br>
<span class="quotelev1">&gt;    mpistat=malloc(2*size*sizeof *mpistat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* Setup communication */
</span><br>
<span class="quotelev1">&gt;    sumshouldbe=0;
</span><br>
<span class="quotelev1">&gt;    nreq=0;
</span><br>
<span class="quotelev1">&gt;    for (i=1; i&lt;size; i++)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;        torank=rank+i;
</span><br>
<span class="quotelev1">&gt;        if (torank&gt;=size)
</span><br>
<span class="quotelev1">&gt;          torank-=size;
</span><br>
<span class="quotelev1">&gt;        fromrank=rank-i;
</span><br>
<span class="quotelev1">&gt;        if (fromrank&lt;0)
</span><br>
<span class="quotelev1">&gt;          fromrank+=size;
</span><br>
<span class="quotelev1">&gt;        MPI_Recv_init(array+i,1,STRIDED,fromrank,i,MPI_COMM_WORLD,reqarr+nreq);
</span><br>
<span class="quotelev1">&gt;        nreq++;
</span><br>
<span class="quotelev1">&gt;        MPI_Send_init(array,1,STRIDED,torank,i,MPI_COMM_WORLD,reqarr+nreq);
</span><br>
<span class="quotelev1">&gt;        nreq++;
</span><br>
<span class="quotelev1">&gt;        sumshouldbe+=i;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Sum should be %g\n&quot;,(double)arrlen*sumshouldbe);
</span><br>
<span class="quotelev1">&gt;    /* Do the tests. */
</span><br>
<span class="quotelev1">&gt;    for (j=0; j&lt;repeattest; j++)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;        double sum=0.;
</span><br>
<span class="quotelev1">&gt;        /* Init test arrays. Array on first process is initially all
</span><br>
<span class="quotelev1">&gt;           zero. On second process all one, etc. Same as rank number. */
</span><br>
<span class="quotelev1">&gt;        for (i=0; i&lt;arrlen*size; i++)
</span><br>
<span class="quotelev1">&gt;          array[i]=(double)rank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* Start communication */
</span><br>
<span class="quotelev1">&gt;        MPI_Startall(nreq,reqarr);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* Accumulate part of arrays that are not communicated. This
</span><br>
<span class="quotelev1">&gt;           touches the parts of the arrays that are *not*
</span><br>
<span class="quotelev1">&gt;           communicated!! */
</span><br>
<span class="quotelev1">&gt;        for (i=0; i&lt;arrlen; i++)
</span><br>
<span class="quotelev1">&gt;          sum+=array[i*size];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* Wait for communication to finish */
</span><br>
<span class="quotelev1">&gt;        MPI_Waitall(nreq,reqarr,mpistat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /* Accumulate part of arrays that have been communicated. */
</span><br>
<span class="quotelev1">&gt;        for (i=0; i&lt;arrlen*(size-1); i++)
</span><br>
<span class="quotelev1">&gt;          {
</span><br>
<span class="quotelev1">&gt;            for (k=0; k&lt;size-1; k++)
</span><br>
<span class="quotelev1">&gt;              sum+=array[i*size+1+k];
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if (sum!=arrlen*sumshouldbe)
</span><br>
<span class="quotelev1">&gt;          printf(&quot;Result on rank %d strangely is %g\n&quot;,rank,sum);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8579.php">Lionel Gamet: "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv"</a>
<li><strong>Previous message:</strong> <a href="8577.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8572.php">Daniel Sp&#229;ngberg: "[OMPI users] problem with overlapping communication with calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8581.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>Reply:</strong> <a href="8581.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
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
