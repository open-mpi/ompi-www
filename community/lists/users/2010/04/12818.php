<?
$subject_val = "Re: [OMPI users] deadlock when calling MPI_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 09:33:58 2010" -->
<!-- isoreceived="20100427133358" -->
<!-- sent="Tue, 27 Apr 2010 09:33:53 -0400" -->
<!-- isosent="20100427133353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock when calling MPI_gatherv" -->
<!-- id="D22085D7-87D5-4A34-BE50-2B26BF7CF61C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD6E52C.5010102_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] deadlock when calling MPI_gatherv<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 09:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12820.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you provide a small chunk of code that replicates the problem, perchance?
<br>
<p>On Apr 27, 2010, at 9:22 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; How does the stack for the non-SM BTL run look, I assume it probably is the same?  Also, can you dump the message queues for rank 1?  What's interesting is you have a bunch of pending receives, do you expect that to be the case when the MPI_Gatherv occurred?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Teng Lin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We recently ran into deadlock when calling MPI_gatherv with Open MPI 1.3.4. It seems to have something to do with sm at first. However, it still hangs even after turning off sm btl.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea how to track down the problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Teng
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #################################################
</span><br>
<span class="quotelev2">&gt;&gt; Stack trace for master node
</span><br>
<span class="quotelev2">&gt;&gt; #################################################
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm_component_progress
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress
</span><br>
<span class="quotelev2">&gt;&gt; opal_condition_wait
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_default_wait_all
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_sync_gatherv
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Gatherv
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #################################################
</span><br>
<span class="quotelev2">&gt;&gt; Stack trace for slave node
</span><br>
<span class="quotelev2">&gt;&gt; #################################################
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm_component_progress
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress
</span><br>
<span class="quotelev2">&gt;&gt; opal_condition_wait
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_wait_completion
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_basic_gatherv_intra
</span><br>
<span class="quotelev2">&gt;&gt; mca_coll_sync_gatherv
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #################################################
</span><br>
<span class="quotelev2">&gt;&gt; Message queue from totalview
</span><br>
<span class="quotelev2">&gt;&gt; ################################################
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SELF
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                1
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_NULL
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                0
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank               -2
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 3 DUP FROM 0
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 4 SPLIT FROM 3
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 5 SPLIT FROM 4
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 6 SPLIT FROM 4
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                1
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 7 DUP FROM 4
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives   
</span><br>
<span class="quotelev2">&gt;&gt; [0]
</span><br>
<span class="quotelev2">&gt;&gt;    Receive: 0x80b9000
</span><br>
<span class="quotelev2">&gt;&gt;    Data: 1 * MPI_CHAR
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Pending
</span><br>
<span class="quotelev2">&gt;&gt;    Source           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              7 (0x00000007)
</span><br>
<span class="quotelev2">&gt;&gt;    User Buffer      0xb06fa010 -&gt; 0x00000000 (0)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    1359312 (0x0014bdd0)
</span><br>
<span class="quotelev2">&gt;&gt; [1]
</span><br>
<span class="quotelev2">&gt;&gt;    Receive: 0x80b9200
</span><br>
<span class="quotelev2">&gt;&gt;    Data: 1 * MPI_CHAR
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Pending
</span><br>
<span class="quotelev2">&gt;&gt;    Source           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              5 (0x00000005)
</span><br>
<span class="quotelev2">&gt;&gt;    User Buffer      0xb0c2a010 -&gt; 0x00000000 (0)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    1359312 (0x0014bdd0)
</span><br>
<span class="quotelev2">&gt;&gt; [2]
</span><br>
<span class="quotelev2">&gt;&gt;    Receive: 0x80b9400
</span><br>
<span class="quotelev2">&gt;&gt;    Data: 1 * MPI_CHAR
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Pending
</span><br>
<span class="quotelev2">&gt;&gt;    Source           1 (orterun&lt;xxxx&gt;.1)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              3 (0x00000003)
</span><br>
<span class="quotelev2">&gt;&gt;    User Buffer      0xb115a010 -&gt; 0xc0ef9e79 (-1058038151)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    1359312 (0x0014bdd0)
</span><br>
<span class="quotelev2">&gt;&gt; [3]
</span><br>
<span class="quotelev2">&gt;&gt;    Receive: 0x80b9600
</span><br>
<span class="quotelev2">&gt;&gt;    Data: 1 * MPI_CHAR
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Pending
</span><br>
<span class="quotelev2">&gt;&gt;    Source           1 (orterun&lt;xxxx&gt;.1)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              1 (0x00000001)
</span><br>
<span class="quotelev2">&gt;&gt;    User Buffer      0xb168a010 -&gt; 0xc0c662aa (-1060740438)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    1359312 (0x0014bdd0)
</span><br>
<span class="quotelev2">&gt;&gt; [4]
</span><br>
<span class="quotelev2">&gt;&gt;    Receive: 0x82a2500
</span><br>
<span class="quotelev2">&gt;&gt;    Data: 1 * MPI_CHAR
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Pending
</span><br>
<span class="quotelev2">&gt;&gt;    Source           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              11 (0x0000000b)
</span><br>
<span class="quotelev2">&gt;&gt;    User Buffer      0xafc9a010 -&gt; 0x00000000 (0)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    1359312 (0x0014bdd0)
</span><br>
<span class="quotelev2">&gt;&gt; [5]
</span><br>
<span class="quotelev2">&gt;&gt;    Receive: 0x82a2700
</span><br>
<span class="quotelev2">&gt;&gt;    Data: 1 * MPI_CHAR
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Pending
</span><br>
<span class="quotelev2">&gt;&gt;    Source           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              9 (0x00000009)
</span><br>
<span class="quotelev2">&gt;&gt;    User Buffer      0xb01ca010 -&gt; 0x00000000 (0)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    1359312 (0x0014bdd0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends
</span><br>
<span class="quotelev2">&gt;&gt; [0]
</span><br>
<span class="quotelev2">&gt;&gt;    Send: 0x80b8500
</span><br>
<span class="quotelev2">&gt;&gt;    Data transfer completed
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Complete
</span><br>
<span class="quotelev2">&gt;&gt;    Target           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              4 (0x00000004)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer           0xb0846010 -&gt; 0x40544279 (1079263865)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    2548 (0x000009f4)
</span><br>
<span class="quotelev2">&gt;&gt; [1]
</span><br>
<span class="quotelev2">&gt;&gt;    Send: 0x80b8780
</span><br>
<span class="quotelev2">&gt;&gt;    Data transfer completed
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Complete
</span><br>
<span class="quotelev2">&gt;&gt;    Target           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              6 (0x00000006)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer           0xb0d76010 -&gt; 0x41a756bf (1101485759)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    2992 (0x00000bb0)
</span><br>
<span class="quotelev2">&gt;&gt; [2]
</span><br>
<span class="quotelev2">&gt;&gt;    Send: 0x80b8a00
</span><br>
<span class="quotelev2">&gt;&gt;    Data transfer completed
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Complete
</span><br>
<span class="quotelev2">&gt;&gt;    Target           1 (orterun&lt;xxxx&gt;.1)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              0 (0x00000000)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer           0xb12a6010 -&gt; 0xbf94cfc4 (-1080766524)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    3856 (0x00000f10)
</span><br>
<span class="quotelev2">&gt;&gt; [3]
</span><br>
<span class="quotelev2">&gt;&gt;    Send: 0x80b8c80
</span><br>
<span class="quotelev2">&gt;&gt;    Data transfer completed
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Complete
</span><br>
<span class="quotelev2">&gt;&gt;    Target           1 (orterun&lt;xxxx&gt;.1)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              2 (0x00000002)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer           0xb17d6010 -&gt; 0x400a1a6c (1074403948)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    3952 (0x00000f70)
</span><br>
<span class="quotelev2">&gt;&gt; [4]
</span><br>
<span class="quotelev2">&gt;&gt;    Send: 0x831f080
</span><br>
<span class="quotelev2">&gt;&gt;    Data transfer completed
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Complete
</span><br>
<span class="quotelev2">&gt;&gt;    Target           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              8 (0x00000008)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer           0xafde6010 -&gt; 0xc0de2c50 (-1059181488)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    3292 (0x00000cdc)
</span><br>
<span class="quotelev2">&gt;&gt; [5]
</span><br>
<span class="quotelev2">&gt;&gt;    Send: 0x831f300
</span><br>
<span class="quotelev2">&gt;&gt;    Data transfer completed
</span><br>
<span class="quotelev2">&gt;&gt;    Status           Complete
</span><br>
<span class="quotelev2">&gt;&gt;    Target           0 (orterun&lt;xxxx&gt;.0)
</span><br>
<span class="quotelev2">&gt;&gt;    Tag              10 (0x0000000a)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer           0xb0316010 -&gt; 0x41169ca7 (1092000935)
</span><br>
<span class="quotelev2">&gt;&gt;    Buffer Length    3232 (0x00000ca0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 8 SPLIT FROM 5
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI COMMUNICATOR 9 SPLIT FROM 5
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size                2
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;ATT17906524.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12820.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
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
