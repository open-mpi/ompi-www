<?
$subject_val = "[OMPI users] How to force eager behavior during Isend?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 02:57:29 2008" -->
<!-- isoreceived="20081208075729" -->
<!-- sent="Mon, 8 Dec 2008 02:57:24 -0500" -->
<!-- isosent="20081208075724" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="[OMPI users] How to force eager behavior during Isend?" -->
<!-- id="200812080257.24630.rountree_at_cs.uga.edu" -->
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
<strong>Subject:</strong> [OMPI users] How to force eager behavior during Isend?<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 02:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7446.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Reply:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to find a set of mca parameters that will (among other things) 
<br>
force all but the largest messages to be transmitted eagerly during an 
<br>
MPI_Isend call rather than during the accompanying MPI_Wait.  I thought 
<br>
increasing the btl_tcp_eager_limit and other buffer sizes would accomplish 
<br>
this, but that's didn't work on this system.
<br>
<p>What's the correct way of doing this?  
<br>
<p>Thanks much, 
<br>
<p>Barry Rountree
<br>
University of Georgia
<br>
<p><p><p>OpenMPI 2.8 Linux+gcc, self+tcp.
<br>
Relevant bit of the hostfile looks like:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opt00 slots=1 max_slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opt01 slots=1 max_slots=1
<br>
The program is being launched from a remote node.
<br>
<p>This is the default case:
<br>
<p>mpirun -np 2 -hostfile /osr/users/rountree/hostfile 
<br>
-mca btl self,tcp                
<br>
./harness -v -h --test_ping
<br>
<p>I'm assuming it's using these default values that were reported by 
<br>
ompi_info --param all all
<br>
<p>btl_tcp_sndbuf=131072
<br>
btl_tcp_rcvbuf=131072
<br>
btl_tcp_endpoint_cache=30720
<br>
btl_tcp_exclusivity=0
<br>
btl_tcp_eager_limit=65536
<br>
btl_tcp_min_send_size=65536
<br>
btl_tcp_max_send_size=131072
<br>
btl_tcp_min_rdma_size=131072
<br>
btl_tcp_max_rdma_size=2147483647
<br>
<p>btl_self_eager_limit=131072
<br>
btl_self_min_send_size=262144
<br>
btl_self_max_send_size=262144
<br>
btl_self_min_rdma_size=2147483647
<br>
btl_self_max_rdma_size=2147483647
<br>
<p><p>This gives me a tracefile that looks like:
<br>
<p>&nbsp;Rank            File Line             Function      Comp      Comm   MsgSz
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c   97            MPI_Irecv  0.103897  0.000003   16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  100          MPI_Waitall  0.000006  0.000088      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  105          MPI_Barrier  0.000002  0.000021      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c   97            MPI_Irecv  0.103877  0.000003   32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  100          MPI_Waitall  0.000005  0.000155      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  105          MPI_Barrier  0.000002  0.000019      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c   97            MPI_Irecv  0.103807  0.000003   65536
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  100          MPI_Waitall  0.000005  0.001516      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  105          MPI_Barrier  0.000002  0.000020      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c   97            MPI_Irecv  0.102436  0.000003  131072
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  100          MPI_Waitall  0.000007  0.001975      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  105          MPI_Barrier  0.000002  0.000020      -1
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  102            MPI_Isend  0.000002  0.000143   16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  103             MPI_Wait  0.000001  0.000002      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  105          MPI_Barrier  0.000001  0.103813      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  102            MPI_Isend  0.000002  0.000423   32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  103             MPI_Wait  0.000002  0.000002      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  105          MPI_Barrier  0.000002  0.103627      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  102            MPI_Isend  0.000001  0.000027   65536
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  103             MPI_Wait  0.000002  0.104615      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  105          MPI_Barrier  0.000002  0.000709      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  102            MPI_Isend  0.000002  0.000017  131072
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  103             MPI_Wait  0.000002  0.103822      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  105          MPI_Barrier  0.000002  0.000602      -1
<br>
...
<br>
<p>So there's an expected transition from 32k to 64k, where the MPI_Isend time 
<br>
goes from 0.000423 seconds to 0.000027 and the MPI_Wait time on the sender's 
<br>
side goes from 0.000002 seconds to 0.104615 seconds.  
<br>
<p>Ok, so let's increase buffer sizes and such and see if we can make that 
<br>
transition happen at a larger message size.  I tried:
<br>
<p>mpirun -np 2 -hostfile /osr/users/rountree/hostfile 
<br>
-mca btl self,tcp 
<br>
-mca btl btl_tcp_sndbuf=2097152          
<br>
-mca btl btl_tcp_rcvbuf=2097152              
<br>
-mca btl btl_tcp_endpoint_cache=491520                  
<br>
-mca btl btl_tcp_eager_limit=1048576    
<br>
-mca btl btl_tcp_min_send_size=1048576  
<br>
-mca btl btl_tcp_max_send_size=2097152 
<br>
-mca btl btl_tcp_min_rdma_size=2097152 
<br>
-mca btl btl_tcp_max_rdma_size=2147483647 
<br>
-mca btl btl_self_eager_limit=2097152                
<br>
-mca btl btl_self_min_send_size=2097152                 
<br>
-mca btl btl_self_max_send_size=2097152              
<br>
-mca btl btl_self_min_rdma_size=2147483647      
<br>
-mca btl btl_self_max_rdma_size=2147483647      
<br>
./harness -v -h --test_ping
<br>
<p><p>and.... nothing changed.
<br>
<p><p>&nbsp;Rank            File Line             Function      Comp      Comm   MsgSz
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c   97            MPI_Irecv  0.103861  0.000003   32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  100          MPI_Waitall  0.000005  0.000161      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  105          MPI_Barrier  0.000002  0.000020      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c   97            MPI_Irecv  0.103800  0.000003   65536
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  100          MPI_Waitall  0.000005  0.001483      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0       harness.c  105          MPI_Barrier  0.000001  0.000020      -1
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  102            MPI_Isend  0.000002  0.000426   32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  103             MPI_Wait  0.000001  0.000002      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  105          MPI_Barrier  0.000002  0.103619      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  102            MPI_Isend  0.000001  0.000027   65536
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  103             MPI_Wait  0.000001  0.104673      -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1       harness.c  105          MPI_Barrier  0.000001  0.000602      -1
<br>
<p><p><p>The code looks like:
<br>
<p>static int
<br>
test_ping(){
<br>
#define PP_BUFSZ (1024*1024*2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int s, r, reps=1, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *buf=malloc(PP_BUFSZ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request* req = malloc( sizeof(MPI_Request) * g_size );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status*  sta = malloc( sizeof(MPI_Status) * g_size );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(sta);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(r=0; r&lt;reps; r++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(s=1; s&lt;PP_BUFSZ; s=s*2){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(g_rank==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usleep(100000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1; i&lt;g_size; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv( buf, s, MPI_CHAR, i,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xFF+r, MPI_COMM_WORLD, &amp;req[i] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall( g_size-1, &amp;req[1], &amp;sta[1] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend( buf, s, MPI_CHAR, 0, 0xFF+r,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &amp;req[g_rank] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait( &amp;req[g_rank], &amp;sta[g_rank] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
#undef PP_BUFSZ
<br>
}
<br>
<p>The same behavior is observed when I put the usleep on the send side, or if I 
<br>
remove it altogether.
<br>
<p>Just doubling the default values (instead of going up by 16x) also didn't 
<br>
work.
<br>
<p>Barry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7446.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Reply:</strong> <a href="7459.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
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
