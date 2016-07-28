<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 05:11:39 2005" -->
<!-- isoreceived="20050810101139" -->
<!-- sent="Wed, 10 Aug 2005 06:11:36 -0400" -->
<!-- isosent="20050810101136" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="9f92bd3fd421c7a18ab5cf36ad88a6b3_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0508092336200.4142_at_localhost" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-10 05:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for finding this, George!
<br>
<p><p>On Aug 10, 2005, at 12:37 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I run all the ex-Pallas test and the same error happens. We try to  
</span><br>
<span class="quotelev1">&gt; malloc
</span><br>
<span class="quotelev1">&gt; 0 bytes and we hang somewhere. Let me explain what I found. First of  
</span><br>
<span class="quotelev1">&gt; all,
</span><br>
<span class="quotelev1">&gt; most of the tests seems to work perfectly (at least with the PTL/BTL I  
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev1">&gt; able to run: sm, tcp, mx). The deadlock as well as the memory  
</span><br>
<span class="quotelev1">&gt; allocation
</span><br>
<span class="quotelev1">&gt; problem happens in the reduce_scatter operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem 1: allocating 0 bytes
</span><br>
<span class="quotelev1">&gt; - it's not a datatype problem. The datatype return the correct extent,
</span><br>
<span class="quotelev1">&gt;   true_extent, lb. The problem is that we miss one case in the  
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt;   communications. How about the case when the user do a reduce_scatter
</span><br>
<span class="quotelev1">&gt;   with all the counts set to zero ? We check if they are greater than  
</span><br>
<span class="quotelev1">&gt; zero
</span><br>
<span class="quotelev1">&gt;   and it's the case. Then we add them together and as expected a sum of
</span><br>
<span class="quotelev1">&gt;   zero is zero. So in the coll_basic_reduce_scatter line 79 we will
</span><br>
<span class="quotelev1">&gt;   allocate zero bytes because the extent and the true_extent of the
</span><br>
<span class="quotelev1">&gt;   MPI_FLOAT datatype are equal and (count - 1) is -1 !!! There is a  
</span><br>
<span class="quotelev1">&gt; simple
</span><br>
<span class="quotelev1">&gt;   fix for this problem, if count == 0 then free_buffer should be set to
</span><br>
<span class="quotelev1">&gt;   NULL (as we don't send or receive anything in this buffer it will  
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev1">&gt;   work fine) at the PTL/PML level.
</span><br>
<span class="quotelev1">&gt; - the same error can happens on the reduce function if the count is  
</span><br>
<span class="quotelev1">&gt; zero.
</span><br>
<span class="quotelev1">&gt;   I will protect this function too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem 2: hanging
</span><br>
<span class="quotelev1">&gt; - somehow a strange optimization get inside the scatterv function. In  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;   case where the sender has to send zero bytes it completly skip the  
</span><br>
<span class="quotelev1">&gt; send
</span><br>
<span class="quotelev1">&gt;   operation. But the receiver still expect to get a message. Anyway,  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt;   optimization is not correct, all messages have to be send. I know  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt;   it can (slightly) increase the time for the collective but it give  
</span><br>
<span class="quotelev1">&gt; us a
</span><br>
<span class="quotelev1">&gt;   simple way of checking the correctness of the global communication  
</span><br>
<span class="quotelev1">&gt; (as
</span><br>
<span class="quotelev1">&gt;   the PML handle the truncate case). Patch is on the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once these 2 problems corrected we pass all the Pallas MPI1 tests. I  
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt; the tests with the PML ob1, teg and uniq and the PTL/BTL sm, tcp, gm  
</span><br>
<span class="quotelev1">&gt; (PTL)
</span><br>
<span class="quotelev1">&gt; and mx(PTL) with 2 and 8 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: the patches will be commited soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 9, 2005, at 1:53 PM, Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Hi Sridhar,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have committed changes that allow you to set the debg verbosity,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_base_debug
</span><br>
<span class="quotelev2">&gt;&gt; 0 - no debug output
</span><br>
<span class="quotelev2">&gt;&gt; 1 - standard debug output
</span><br>
<span class="quotelev2">&gt;&gt; 2 - very verbose debug output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also we have run the Pallas tests and are not able to reproduce your  
</span><br>
<span class="quotelev2">&gt;&gt; failures. We do see a warning in
</span><br>
<span class="quotelev2">&gt;&gt; the Reduce test but it does not hang and runs to completion. Attached  
</span><br>
<span class="quotelev2">&gt;&gt; is a simple ping pong program,
</span><br>
<span class="quotelev2">&gt;&gt; try running this and let us know the results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi-ping.c&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 9, 2005, at 8:15 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       The same kind of output while running Pallas &quot;pingpong&quot; test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Sridhar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]  
</span><br>
<span class="quotelev2">&gt;&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Sridhar Chirravuri
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, August 09, 2005 7:44 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have run sendrecv function in Pallas but it failed to run it. Here  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; the output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_micrompi-2 SRC_PMB]# mpirun -np 2 PMB-MPI1 sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; Could not join a running, existing universe
</span><br>
<span class="quotelev2">&gt;&gt; Establishing a new one named: default-universe-5097
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send]  
</span><br>
<span class="quotelev2">&gt;&gt; Connection
</span><br>
<span class="quotelev2">&gt;&gt; to endpoint closed ... connecting ...
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev2">&gt;&gt; Initialized High Priority QP num = 263177, Low Priority QP num =  
</span><br>
<span class="quotelev2">&gt;&gt; 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 785
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:190: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev2">&gt;&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 785[0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send]
</span><br>
<span class="quotelev2">&gt;&gt; Connection to endpoint closed ... connecting ...
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev2">&gt;&gt; Initialized High Priority QP num = 263179, Low Priority QP num =  
</span><br>
<span class="quotelev2">&gt;&gt; 263180,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 786
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:190: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev2">&gt;&gt; ] Sending High Priority QP num = 263179, Low Priority QP num = 263180,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 786#---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #&#160; &#160; PALLAS MPI Benchmark Suite V2.2, MPI-1 part
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Date &#160; &#160; &#160; : Tue Aug&#160; 9 07:11:25 2005
</span><br>
<span class="quotelev2">&gt;&gt; # Machine&#160; &#160; : x86_64# System &#160; &#160; : Linux
</span><br>
<span class="quotelev2">&gt;&gt; # Release&#160; &#160; : 2.6.9-5.ELsmp
</span><br>
<span class="quotelev2">&gt;&gt; # Version&#160; &#160; : #1 SMP Wed Jan 5 19:29:47 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Minimum message length in bytes: &#160; 0
</span><br>
<span class="quotelev2">&gt;&gt; # Maximum message length in bytes: &#160; 4194304
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Datatype &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; : &#160; MPI_BYTE
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Datatype for reductions&#160; &#160; : &#160; MPI_FLOAT
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Op &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; : &#160; MPI_SUM
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:368: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_reply_start_conn
</span><br>
<span class="quotelev2">&gt;&gt; ect] Initialized High Priority QP num = 263177, Low Priority QP num =
</span><br>
<span class="quotelev2">&gt;&gt; 263178,&#160; LID = 777
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:266: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev2">&gt;&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,&#160;  
</span><br>
<span class="quotelev2">&gt;&gt; LID
</span><br>
<span class="quotelev2">&gt;&gt; = 785
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp
</span><br>
<span class="quotelev2">&gt;&gt; 7080096[0,1,1][btl_mvapi_endpoint.c:791: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev2">&gt;&gt; uery] Modified to RTR..Qp
</span><br>
<span class="quotelev2">&gt;&gt; 7080096[0,1,1][btl_mvapi_endpoint.c:814: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev2">&gt;&gt; uery] Modified to RTS..Qp 7080096
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp 7240736
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to RTR..Qp
</span><br>
<span class="quotelev2">&gt;&gt; 7240736[0,1,1][btl_mvapi_endpoint.c:814: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev2">&gt;&gt; uery] Modified to RTS..Qp 7240736
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:190: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev2">&gt;&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 777
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:266: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev2">&gt;&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,&#160;  
</span><br>
<span class="quotelev2">&gt;&gt; LID
</span><br>
<span class="quotelev2">&gt;&gt; = 777
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp 7081440
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to RTR..Qp 7081440
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to RTS..Qp 7081440
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp 7241888
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to RTR..Qp
</span><br>
<span class="quotelev2">&gt;&gt; 7241888[0,1,0][btl_mvapi_endpoint.c:814: 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev2">&gt;&gt; uery] Modified to RTS..Qp 7241888
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_component.c:523:mca_btl_mvapi_component_progress]  
</span><br>
<span class="quotelev2">&gt;&gt; Got
</span><br>
<span class="quotelev2">&gt;&gt; a recv completion
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; -Sridhar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]  
</span><br>
<span class="quotelev2">&gt;&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, August 09, 2005 7:35 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 9, 2005, at 8:48 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Does r6774 has lot of changes that are related to 3rd generation
</span><br>
<span class="quotelev2">&gt;&gt; point-to-point? I am trying to run some benchmark tests (ex:
</span><br>
<span class="quotelev2">&gt;&gt; pallas) with Open MPI stack and just want to compare the
</span><br>
<span class="quotelev2">&gt;&gt; performance figures with MVAPICH 095 and MVAPICH 092.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to use 3rd generation p2p communication, I have added the
</span><br>
<span class="quotelev2">&gt;&gt; following line in the /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pml=ob1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also exported (as double check) OMPI_MCA_pml=ob1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, I have tried running on the same machine. My machine has got
</span><br>
<span class="quotelev2">&gt;&gt; 2 processors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mpirun -np 2 ./PMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I still see the following lines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These errors are coming from the collective routines, not the PML/BTL
</span><br>
<span class="quotelev2">&gt;&gt; layers.&#160; It looks like the reduction codes are trying to call malloc
</span><br>
<span class="quotelev2">&gt;&gt; (0), which doesn't work so well.&#160; We'll take a look as soon as we
</span><br>
<span class="quotelev2">&gt;&gt; can.&#160; In the mean time, can you just not run the tests that call the
</span><br>
<span class="quotelev2">&gt;&gt; reduction collectives?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&#160;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;&#160; Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt; &#160;&#160; Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt; &#160;&#160; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                   Martin Luther King
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
