<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 09:23:14 2005" -->
<!-- isoreceived="20050809142314" -->
<!-- sent="Tue, 9 Aug 2005 19:53:08 +0530" -->
<!-- isosent="20050809142308" -->
<!-- name="Sridhar Chirravuri" -->
<!-- email="sridhar_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4A388685F814D54CAE412B2DAB7CE91C5AD4AE_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-09 09:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay Tim. Thanks for the mail.
<br>
<p>Tomorrow, I will try with configuration options that Brian had mentioned
<br>
and will let you guys know the status.
<br>
<p>Thanks all for your support.
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Tim S. Woodall
<br>
Sent: Tuesday, August 09, 2005 7:50 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p>Hello Sridhar,
<br>
<p>We'll see if we can reproduce this today.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>Sridhar Chirravuri wrote:
<br>
<span class="quotelev1">&gt; The same kind of output while running Pallas &quot;pingpong&quot; test.
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
Connection
<br>
<span class="quotelev1">&gt; to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; Initialized High Priority QP num = 263177, Low Priority QP num =
</span><br>
263178,
<br>
<span class="quotelev1">&gt; LID = 785
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
[0,1,0][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
<br>
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
263180,
<br>
<span class="quotelev1">&gt; LID = 786
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
[0,1,0][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
<br>
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
<span class="quotelev1">&gt;
</span><br>
[0,1,1][btl_mvapi_endpoint.c:368:mca_btl_mvapi_endpoint_reply_start_conn
<br>
<span class="quotelev1">&gt; ect] Initialized High Priority QP num = 263177, Low Priority QP num =
</span><br>
<span class="quotelev1">&gt; 263178,  LID = 777
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
[0,1,1][btl_mvapi_endpoint.c:266:mca_btl_mvapi_endpoint_set_remote_info]
<br>
<span class="quotelev1">&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,
</span><br>
LID
<br>
<span class="quotelev1">&gt; = 785
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to init..Qp
</span><br>
<span class="quotelev1">&gt;
</span><br>
7080096[0,1,1][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_q
<br>
<span class="quotelev1">&gt; uery] Modified to RTR..Qp
</span><br>
<span class="quotelev1">&gt;
</span><br>
7080096[0,1,1][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
<br>
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
<span class="quotelev1">&gt;
</span><br>
7240736[0,1,1][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
<br>
<span class="quotelev1">&gt; uery] Modified to RTS..Qp 7240736
</span><br>
<span class="quotelev1">&gt;
</span><br>
[0,1,1][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
<br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev1">&gt; LID = 777
</span><br>
<span class="quotelev1">&gt;
</span><br>
[0,1,0][btl_mvapi_endpoint.c:266:mca_btl_mvapi_endpoint_set_remote_info]
<br>
<span class="quotelev1">&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,
</span><br>
LID
<br>
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
<span class="quotelev1">&gt;
</span><br>
7241888[0,1,0][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
<br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Does r6774 has lot of changes that are related to 3rd generation  
</span><br>
<span class="quotelev2">&gt;&gt;point-to-point? I am trying to run some benchmark tests (ex:  
</span><br>
<span class="quotelev2">&gt;&gt;pallas) with Open MPI stack and just want to compare the  
</span><br>
<span class="quotelev2">&gt;&gt;performance figures with MVAPICH 095 and MVAPICH 092.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In order to use 3rd generation p2p communication, I have added the  
</span><br>
<span class="quotelev2">&gt;&gt;following line in the /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;pml=ob1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I also exported (as double check) OMPI_MCA_pml=ob1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Then, I have tried running on the same machine. My machine has got  
</span><br>
<span class="quotelev2">&gt;&gt;2 processors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Mpirun -np 2 ./PMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I still see the following lines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev2">&gt;&gt;Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev2">&gt;&gt;Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev2">&gt;&gt;Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These errors are coming from the collective routines, not the PML/BTL
</span><br>
<p><span class="quotelev1">&gt; layers.  It looks like the reduction codes are trying to call malloc 
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
_______________________________________________
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
<li><strong>Next message:</strong> <a href="0113.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0111.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
