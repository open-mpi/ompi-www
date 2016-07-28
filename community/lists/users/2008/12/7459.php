<?
$subject_val = "Re: [OMPI users] How to force eager behavior during Isend?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 11:47:24 2008" -->
<!-- isoreceived="20081208164724" -->
<!-- sent="Mon, 8 Dec 2008 11:47:19 -0500" -->
<!-- isosent="20081208164719" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force eager behavior during Isend?" -->
<!-- id="28004994-EA3C-404C-BB3B-226286F3E5E2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200812080257.24630.rountree_at_cs.uga.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to force eager behavior during Isend?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 11:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7458.php">George Bosilca: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>In reply to:</strong> <a href="7445.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Barry,
<br>
<p>These values are used deep inside the Open MPI library, in order to  
<br>
define how we handle the messages internally. From a user perspective  
<br>
you will not see much difference. Moreover, checking the number of  
<br>
completed requests returned by MPI_Wait* if definitively not the most  
<br>
accurate way to test this. If you really want to see that these  
<br>
parameters are taken in account you will need to a lower level  
<br>
interface, such as PERUSE.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 8, 2008, at 02:57 , Barry Rountree wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to find a set of mca parameters that will (among other  
</span><br>
<span class="quotelev1">&gt; things)
</span><br>
<span class="quotelev1">&gt; force all but the largest messages to be transmitted eagerly during an
</span><br>
<span class="quotelev1">&gt; MPI_Isend call rather than during the accompanying MPI_Wait.  I  
</span><br>
<span class="quotelev1">&gt; thought
</span><br>
<span class="quotelev1">&gt; increasing the btl_tcp_eager_limit and other buffer sizes would  
</span><br>
<span class="quotelev1">&gt; accomplish
</span><br>
<span class="quotelev1">&gt; this, but that's didn't work on this system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the correct way of doing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks much,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry Rountree
</span><br>
<span class="quotelev1">&gt; University of Georgia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 2.8 Linux+gcc, self+tcp.
</span><br>
<span class="quotelev1">&gt; Relevant bit of the hostfile looks like:
</span><br>
<span class="quotelev1">&gt; 	opt00 slots=1 max_slots=1
</span><br>
<span class="quotelev1">&gt; 	opt01 slots=1 max_slots=1
</span><br>
<span class="quotelev1">&gt; The program is being launched from a remote node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the default case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile /osr/users/rountree/hostfile
</span><br>
<span class="quotelev1">&gt; -mca btl self,tcp
</span><br>
<span class="quotelev1">&gt; ./harness -v -h --test_ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming it's using these default values that were reported by
</span><br>
<span class="quotelev1">&gt; ompi_info --param all all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_tcp_sndbuf=131072
</span><br>
<span class="quotelev1">&gt; btl_tcp_rcvbuf=131072
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint_cache=30720
</span><br>
<span class="quotelev1">&gt; btl_tcp_exclusivity=0
</span><br>
<span class="quotelev1">&gt; btl_tcp_eager_limit=65536
</span><br>
<span class="quotelev1">&gt; btl_tcp_min_send_size=65536
</span><br>
<span class="quotelev1">&gt; btl_tcp_max_send_size=131072
</span><br>
<span class="quotelev1">&gt; btl_tcp_min_rdma_size=131072
</span><br>
<span class="quotelev1">&gt; btl_tcp_max_rdma_size=2147483647
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_self_eager_limit=131072
</span><br>
<span class="quotelev1">&gt; btl_self_min_send_size=262144
</span><br>
<span class="quotelev1">&gt; btl_self_max_send_size=262144
</span><br>
<span class="quotelev1">&gt; btl_self_min_rdma_size=2147483647
</span><br>
<span class="quotelev1">&gt; btl_self_max_rdma_size=2147483647
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This gives me a tracefile that looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank            File Line             Function      Comp      Comm    
</span><br>
<span class="quotelev1">&gt; MsgSz
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    0       harness.c   97            MPI_Irecv  0.103897  0.000003    
</span><br>
<span class="quotelev1">&gt; 16384
</span><br>
<span class="quotelev1">&gt;    0       harness.c  100          MPI_Waitall  0.000006   
</span><br>
<span class="quotelev1">&gt; 0.000088      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000021      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c   97            MPI_Irecv  0.103877  0.000003    
</span><br>
<span class="quotelev1">&gt; 32768
</span><br>
<span class="quotelev1">&gt;    0       harness.c  100          MPI_Waitall  0.000005   
</span><br>
<span class="quotelev1">&gt; 0.000155      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000019      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c   97            MPI_Irecv  0.103807  0.000003    
</span><br>
<span class="quotelev1">&gt; 65536
</span><br>
<span class="quotelev1">&gt;    0       harness.c  100          MPI_Waitall  0.000005   
</span><br>
<span class="quotelev1">&gt; 0.001516      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000020      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c   97            MPI_Irecv  0.102436  0.000003   
</span><br>
<span class="quotelev1">&gt; 131072
</span><br>
<span class="quotelev1">&gt;    0       harness.c  100          MPI_Waitall  0.000007   
</span><br>
<span class="quotelev1">&gt; 0.001975      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000020      -1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    1       harness.c  102            MPI_Isend  0.000002  0.000143    
</span><br>
<span class="quotelev1">&gt; 16384
</span><br>
<span class="quotelev1">&gt;    1       harness.c  103             MPI_Wait  0.000001   
</span><br>
<span class="quotelev1">&gt; 0.000002      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  105          MPI_Barrier  0.000001   
</span><br>
<span class="quotelev1">&gt; 0.103813      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  102            MPI_Isend  0.000002  0.000423    
</span><br>
<span class="quotelev1">&gt; 32768
</span><br>
<span class="quotelev1">&gt;    1       harness.c  103             MPI_Wait  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000002      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.103627      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  102            MPI_Isend  0.000001  0.000027    
</span><br>
<span class="quotelev1">&gt; 65536
</span><br>
<span class="quotelev1">&gt;    1       harness.c  103             MPI_Wait  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.104615      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000709      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  102            MPI_Isend  0.000002  0.000017   
</span><br>
<span class="quotelev1">&gt; 131072
</span><br>
<span class="quotelev1">&gt;    1       harness.c  103             MPI_Wait  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.103822      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000602      -1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there's an expected transition from 32k to 64k, where the  
</span><br>
<span class="quotelev1">&gt; MPI_Isend time
</span><br>
<span class="quotelev1">&gt; goes from 0.000423 seconds to 0.000027 and the MPI_Wait time on the  
</span><br>
<span class="quotelev1">&gt; sender's
</span><br>
<span class="quotelev1">&gt; side goes from 0.000002 seconds to 0.104615 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so let's increase buffer sizes and such and see if we can make  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; transition happen at a larger message size.  I tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile /osr/users/rountree/hostfile
</span><br>
<span class="quotelev1">&gt; -mca btl self,tcp
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_sndbuf=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_rcvbuf=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_endpoint_cache=491520
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_eager_limit=1048576
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_min_send_size=1048576
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_max_send_size=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_min_rdma_size=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_tcp_max_rdma_size=2147483647
</span><br>
<span class="quotelev1">&gt; -mca btl btl_self_eager_limit=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_self_min_send_size=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_self_max_send_size=2097152
</span><br>
<span class="quotelev1">&gt; -mca btl btl_self_min_rdma_size=2147483647
</span><br>
<span class="quotelev1">&gt; -mca btl btl_self_max_rdma_size=2147483647
</span><br>
<span class="quotelev1">&gt; ./harness -v -h --test_ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and.... nothing changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank            File Line             Function      Comp      Comm    
</span><br>
<span class="quotelev1">&gt; MsgSz
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    0       harness.c   97            MPI_Irecv  0.103861  0.000003    
</span><br>
<span class="quotelev1">&gt; 32768
</span><br>
<span class="quotelev1">&gt;    0       harness.c  100          MPI_Waitall  0.000005   
</span><br>
<span class="quotelev1">&gt; 0.000161      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.000020      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c   97            MPI_Irecv  0.103800  0.000003    
</span><br>
<span class="quotelev1">&gt; 65536
</span><br>
<span class="quotelev1">&gt;    0       harness.c  100          MPI_Waitall  0.000005   
</span><br>
<span class="quotelev1">&gt; 0.001483      -1
</span><br>
<span class="quotelev1">&gt;    0       harness.c  105          MPI_Barrier  0.000001   
</span><br>
<span class="quotelev1">&gt; 0.000020      -1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    1       harness.c  102            MPI_Isend  0.000002  0.000426    
</span><br>
<span class="quotelev1">&gt; 32768
</span><br>
<span class="quotelev1">&gt;    1       harness.c  103             MPI_Wait  0.000001   
</span><br>
<span class="quotelev1">&gt; 0.000002      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  105          MPI_Barrier  0.000002   
</span><br>
<span class="quotelev1">&gt; 0.103619      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  102            MPI_Isend  0.000001  0.000027    
</span><br>
<span class="quotelev1">&gt; 65536
</span><br>
<span class="quotelev1">&gt;    1       harness.c  103             MPI_Wait  0.000001   
</span><br>
<span class="quotelev1">&gt; 0.104673      -1
</span><br>
<span class="quotelev1">&gt;    1       harness.c  105          MPI_Barrier  0.000001   
</span><br>
<span class="quotelev1">&gt; 0.000602      -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int
</span><br>
<span class="quotelev1">&gt; test_ping(){
</span><br>
<span class="quotelev1">&gt; #define PP_BUFSZ (1024*1024*2)
</span><br>
<span class="quotelev1">&gt;        int s, r, reps=1, i;
</span><br>
<span class="quotelev1">&gt;        char *buf=malloc(PP_BUFSZ);
</span><br>
<span class="quotelev1">&gt;        MPI_Request* req = malloc( sizeof(MPI_Request) * g_size );
</span><br>
<span class="quotelev1">&gt;        MPI_Status*  sta = malloc( sizeof(MPI_Status) * g_size );
</span><br>
<span class="quotelev1">&gt;        assert(buf);
</span><br>
<span class="quotelev1">&gt;        assert(req);
</span><br>
<span class="quotelev1">&gt;        assert(sta);
</span><br>
<span class="quotelev1">&gt;        for(r=0; r&lt;reps; r++){
</span><br>
<span class="quotelev1">&gt;                for(s=1; s&lt;PP_BUFSZ; s=s*2){
</span><br>
<span class="quotelev1">&gt;                        if(g_rank==0){
</span><br>
<span class="quotelev1">&gt;                                usleep(100000);
</span><br>
<span class="quotelev1">&gt;                                for(i=1; i&lt;g_size; i++){
</span><br>
<span class="quotelev1">&gt;                                        MPI_Irecv( buf, s, MPI_CHAR, i,
</span><br>
<span class="quotelev1">&gt; 						0xFF+r, MPI_COMM_WORLD, &amp;req[i] );
</span><br>
<span class="quotelev1">&gt;                                }
</span><br>
<span class="quotelev1">&gt;                                MPI_Waitall( g_size-1, &amp;req[1],  
</span><br>
<span class="quotelev1">&gt; &amp;sta[1] );
</span><br>
<span class="quotelev1">&gt;                        }else{
</span><br>
<span class="quotelev1">&gt;                                MPI_Isend( buf, s, MPI_CHAR, 0, 0xFF+r,
</span><br>
<span class="quotelev1">&gt; 					MPI_COMM_WORLD, &amp;req[g_rank] );
</span><br>
<span class="quotelev1">&gt;                                MPI_Wait( &amp;req[g_rank], &amp;sta[g_rank] );
</span><br>
<span class="quotelev1">&gt;                        }
</span><br>
<span class="quotelev1">&gt;                        MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        return 0;
</span><br>
<span class="quotelev1">&gt; #undef PP_BUFSZ
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same behavior is observed when I put the usleep on the send  
</span><br>
<span class="quotelev1">&gt; side, or if I
</span><br>
<span class="quotelev1">&gt; remove it altogether.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just doubling the default values (instead of going up by 16x) also  
</span><br>
<span class="quotelev1">&gt; didn't
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7458.php">George Bosilca: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>In reply to:</strong> <a href="7445.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
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
