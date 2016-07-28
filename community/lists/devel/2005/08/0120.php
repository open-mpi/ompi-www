<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 05:28:33 2005" -->
<!-- isoreceived="20050810102833" -->
<!-- sent="Wed, 10 Aug 2005 15:58:26 +0530" -->
<!-- isosent="20050810102826" -->
<!-- name="Sridhar Chirravuri" -->
<!-- email="sridhar_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4A388685F814D54CAE412B2DAB7CE91C016A15_at_initexch.topspincom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto=" Fwd: Regarding MVAPI Component in Open MPI" -->
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
<strong>From:</strong> Sridhar Chirravuri (<em>sridhar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-10 05:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Jeff Squyres: "New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0128.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I got the latest code drop of 6791 today morning.
<br>
<p>I have removed .ompi_ignore and .ompi_unignore files from
<br>
ompi/mca/mpool/mvapi directory. If I don't remove and build, the MPI
<br>
program fails with signal 11. After removing those hidden files from
<br>
that directory and building, signal 11 error disappeared.
<br>
<p>I have configured with the options given by Galen.
<br>
<p>./configure --prefix=/openmpi --with-btl-mvapi=/usr/local/topspin/
<br>
--enable-mca-no-build=btl-openib,pml-teg,pml-uniq
<br>
<p>After make all install, I have run pallas but I got the same error
<br>
messages (please see down below for error messages). I have run 3-4
<br>
times, sometimes I didn't get any output but pallas just hungs. I have
<br>
run pingpong only. I have run pallas (all functions including reduce),
<br>
but got the following messages in intra-node case.
<br>
<p>Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
<p>Since these types of messages seen by George, upcoming patch might
<br>
resolve this issue.
<br>
<p>Also, I have run mpi-ping.c program given by Galen with the latest code
<br>
drop and it just hung. Here is the output
<br>
<p>[root_at_micrompi-1 ~]# mpirun -np 2 ./a.out -r 10 0 100000 1000
<br>
Could not join a running, existing universe
<br>
Establishing a new one named: default-universe-12461
<br>
mpi-ping: ping-pong
<br>
nprocs=2, reps=10, min bytes=0, max bytes=100000 inc bytes=1000
<br>
0 pings 1
<br>
<p><p>... I just did ctrl+c here after 10 mins ...
<br>
<p>2 processes killed (possibly by Open MPI)
<br>
<p>I have no clue whether the George patch will fix this problem or not. 
<br>
<p>Before running mpi-ping program, I have export OMPI_MCA_btl_base_debug=2
<br>
in my shell.
<br>
<p>Thanks
<br>
-Sridhar
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Galen Shipman
<br>
Sent: Tuesday, August 09, 2005 11:10 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p>Hi
<br>
On Aug 9, 2005, at 8:15 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; The same kind of output while running Pallas &quot;pingpong&quot; test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Sridhar Chirravuri
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 09, 2005 7:44 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run sendrecv function in Pallas but it failed to run it. Here
</span><br>
is
<br>
<span class="quotelev1">&gt; the output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-2 SRC_PMB]# mpirun -np 2 PMB-MPI1 sendrecv
</span><br>
<span class="quotelev1">&gt; Could not join a running, existing universe
</span><br>
<span class="quotelev1">&gt; Establishing a new one named: default-universe-5097
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send]  
</span><br>
<span class="quotelev1">&gt; Connection
</span><br>
<span class="quotelev1">&gt; to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; Initialized High Priority QP num = 263177, Low Priority QP num =  
</span><br>
<span class="quotelev1">&gt; 263178,
</span><br>
<span class="quotelev1">&gt; LID = 785
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:190: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev1">&gt; LID = 785[0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send]
</span><br>
<span class="quotelev1">&gt; Connection to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; Initialized High Priority QP num = 263179, Low Priority QP num =  
</span><br>
<span class="quotelev1">&gt; 263180,
</span><br>
<span class="quotelev1">&gt; LID = 786
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:190: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263179, Low Priority QP num = 263180,
</span><br>
<span class="quotelev1">&gt; LID = 786#---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    PALLAS MPI Benchmark Suite V2.2, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date       : Tue Aug  9 07:11:25 2005
</span><br>
<span class="quotelev1">&gt; # Machine    : x86_64# System     : Linux
</span><br>
<span class="quotelev1">&gt; # Release    : 2.6.9-5.ELsmp
</span><br>
<span class="quotelev1">&gt; # Version    : #1 SMP Wed Jan 5 19:29:47 EST 2005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes:   0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes:   4194304
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype                   :   MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions    :   MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op                         :   MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Sendrecv
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:368: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_reply_start_conn
</span><br>
<span class="quotelev1">&gt; ect] Initialized High Priority QP num = 263177, Low Priority QP num =
</span><br>
<span class="quotelev1">&gt; 263178,  LID = 777
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:266: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev1">&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,   
</span><br>
<span class="quotelev1">&gt; LID
</span><br>
<span class="quotelev1">&gt; = 785
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to init..Qp
</span><br>
<span class="quotelev1">&gt; 7080096[0,1,1][btl_mvapi_endpoint.c:791: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTR..Qp
</span><br>
<span class="quotelev1">&gt; 7080096[0,1,1][btl_mvapi_endpoint.c:814: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTS..Qp 7080096
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to init..Qp 7240736
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to RTR..Qp
</span><br>
<span class="quotelev1">&gt; 7240736[0,1,1][btl_mvapi_endpoint.c:814: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTS..Qp 7240736
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:190: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev1">&gt; LID = 777
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:266: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev1">&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,   
</span><br>
<span class="quotelev1">&gt; LID
</span><br>
<span class="quotelev1">&gt; = 777
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to init..Qp 7081440
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to RTR..Qp 7081440
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to RTS..Qp 7081440
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to init..Qp 7241888
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to RTR..Qp
</span><br>
<span class="quotelev1">&gt; 7241888[0,1,0][btl_mvapi_endpoint.c:814: 
</span><br>
<span class="quotelev1">&gt; mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTS..Qp 7241888
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_component.c:523:mca_btl_mvapi_component_progress]
</span><br>
Got
<br>
<span class="quotelev1">&gt; a recv completion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Brian Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 09, 2005 7:35 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2005, at 8:48 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does r6774 has lot of changes that are related to 3rd generation
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These errors are coming from the collective routines, not the PML/BTL
</span><br>
<span class="quotelev1">&gt; layers.  It looks like the reduction codes are trying to call malloc
</span><br>
<span class="quotelev1">&gt; (0), which doesn't work so well.  We'll take a look as soon as we
</span><br>
<span class="quotelev1">&gt; can.  In the mean time, can you just not run the tests that call the
</span><br>
<span class="quotelev1">&gt; reduction collectives?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Jeff Squyres: "New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0128.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0129.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
