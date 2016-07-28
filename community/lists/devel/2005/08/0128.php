<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 13:28:57 2005" -->
<!-- isoreceived="20050810182857" -->
<!-- sent="Wed, 10 Aug 2005 14:26:12 -0400" -->
<!-- isosent="20050810182612" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="10A44E25-9F1B-416D-AB5F-ED5479EC050D_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C016A15_at_initexch.topspincom.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-10 13:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just commit the collective fix. Now I'm able to run the ex-pallas  
<br>
test on 2, 4 and 8 nodes without any errors. However, I'm unable to  
<br>
test the IB BTL as I don't have access to any machine having such  
<br>
hardware.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: if one still notice the malloc with 0 bytes length, please sent a  
<br>
bug report.
<br>
<p>On Aug 10, 2005, at 6:28 AM, Sridhar Chirravuri wrote:
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the latest code drop of 6791 today morning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have removed .ompi_ignore and .ompi_unignore files from
</span><br>
<span class="quotelev1">&gt; ompi/mca/mpool/mvapi directory. If I don't remove and build, the MPI
</span><br>
<span class="quotelev1">&gt; program fails with signal 11. After removing those hidden files from
</span><br>
<span class="quotelev1">&gt; that directory and building, signal 11 error disappeared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have configured with the options given by Galen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/openmpi --with-btl-mvapi=/usr/local/topspin/
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-openib,pml-teg,pml-uniq
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After make all install, I have run pallas but I got the same error
</span><br>
<span class="quotelev1">&gt; messages (please see down below for error messages). I have run 3-4
</span><br>
<span class="quotelev1">&gt; times, sometimes I didn't get any output but pallas just hungs. I have
</span><br>
<span class="quotelev1">&gt; run pingpong only. I have run pallas (all functions including reduce),
</span><br>
<span class="quotelev1">&gt; but got the following messages in intra-node case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since these types of messages seen by George, upcoming patch might
</span><br>
<span class="quotelev1">&gt; resolve this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I have run mpi-ping.c program given by Galen with the latest  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; drop and it just hung. Here is the output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-1 ~]# mpirun -np 2 ./a.out -r 10 0 100000 1000
</span><br>
<span class="quotelev1">&gt; Could not join a running, existing universe
</span><br>
<span class="quotelev1">&gt; Establishing a new one named: default-universe-12461
</span><br>
<span class="quotelev1">&gt; mpi-ping: ping-pong
</span><br>
<span class="quotelev1">&gt; nprocs=2, reps=10, min bytes=0, max bytes=100000 inc bytes=1000
</span><br>
<span class="quotelev1">&gt; 0 pings 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... I just did ctrl+c here after 10 mins ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no clue whether the George patch will fix this problem or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before running mpi-ping program, I have export  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_base_debug=2
</span><br>
<span class="quotelev1">&gt; in my shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Galen Shipman
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 09, 2005 11:10 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2005, at 8:15 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same kind of output while running Pallas &quot;pingpong&quot; test.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 318:mca_btl_mvapi_endpoint_start_connect]
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
<span class="quotelev2">&gt;&gt; ] Sending High Priority QP num = 263177, Low Priority QP num =  
</span><br>
<span class="quotelev2">&gt;&gt; 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 785[0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 542:mca_btl_mvapi_endpoint_send]
</span><br>
<span class="quotelev2">&gt;&gt; Connection to endpoint closed ... connecting ...
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 318:mca_btl_mvapi_endpoint_start_connect]
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
<span class="quotelev2">&gt;&gt; ] Sending High Priority QP num = 263179, Low Priority QP num =  
</span><br>
<span class="quotelev2">&gt;&gt; 263180,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 786#---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #    PALLAS MPI Benchmark Suite V2.2, MPI-1 part
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Date       : Tue Aug  9 07:11:25 2005
</span><br>
<span class="quotelev2">&gt;&gt; # Machine    : x86_64# System     : Linux
</span><br>
<span class="quotelev2">&gt;&gt; # Release    : 2.6.9-5.ELsmp
</span><br>
<span class="quotelev2">&gt;&gt; # Version    : #1 SMP Wed Jan 5 19:29:47 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev2">&gt;&gt; # Maximum message length in bytes:   4194304
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Op                         :   MPI_SUM
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
<span class="quotelev2">&gt;&gt; 263178,  LID = 777
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c:266:
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev2">&gt;&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID
</span><br>
<span class="quotelev2">&gt;&gt; = 785
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 756:mca_btl_mvapi_endpoint_qp_init_query]
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
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp 7240736
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 791:mca_btl_mvapi_endpoint_qp_init_query]
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
<span class="quotelev2">&gt;&gt; ] Sending High Priority QP num = 263177, Low Priority QP num =  
</span><br>
<span class="quotelev2">&gt;&gt; 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID = 777
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c:266:
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev2">&gt;&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,
</span><br>
<span class="quotelev2">&gt;&gt; LID
</span><br>
<span class="quotelev2">&gt;&gt; = 777
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp 7081440
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to RTR..Qp 7081440
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 814:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to RTS..Qp 7081440
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev2">&gt;&gt; Modified to init..Qp 7241888
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_mvapi_endpoint.c: 
</span><br>
<span class="quotelev2">&gt;&gt; 791:mca_btl_mvapi_endpoint_qp_init_query]
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does r6774 has lot of changes that are related to 3rd generation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point-to-point? I am trying to run some benchmark tests (ex:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pallas) with Open MPI stack and just want to compare the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance figures with MVAPICH 095 and MVAPICH 092.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In order to use 3rd generation p2p communication, I have added the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following line in the /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml=ob1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also exported (as double check) OMPI_MCA_pml=ob1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, I have tried running on the same machine. My machine has got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mpirun -np 2 ./PMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still see the following lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These errors are coming from the collective routines, not the PML/BTL
</span><br>
<span class="quotelev2">&gt;&gt; layers.  It looks like the reduction codes are trying to call malloc
</span><br>
<span class="quotelev2">&gt;&gt; (0), which doesn't work so well.  We'll take a look as soon as we
</span><br>
<span class="quotelev2">&gt;&gt; can.  In the mean time, can you just not run the tests that call the
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
