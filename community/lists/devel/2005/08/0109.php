<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 09:15:13 2005" -->
<!-- isoreceived="20050809141513" -->
<!-- sent="Tue, 9 Aug 2005 19:45:08 +0530" -->
<!-- isosent="20050809141508" -->
<!-- name="Sridhar Chirravuri" -->
<!-- email="sridhar_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4A388685F814D54CAE412B2DAB7CE91C5AD4AD_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-09 09:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0115.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0116.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The same kind of output while running Pallas &quot;pingpong&quot; test.
<br>
<p>-Sridhar
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Sridhar Chirravuri
<br>
Sent: Tuesday, August 09, 2005 7:44 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p><p>I have run sendrecv function in Pallas but it failed to run it. Here is
<br>
the output
<br>
<p>[root_at_micrompi-2 SRC_PMB]# mpirun -np 2 PMB-MPI1 sendrecv
<br>
Could not join a running, existing universe
<br>
Establishing a new one named: default-universe-5097
<br>
[0,1,1][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
<br>
[0,1,1][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
<br>
<p><p>[0,1,0][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
<br>
<p>[0,1,0][btl_mvapi.c:130:mca_btl_mvapi_del_procs] Stub
<br>
<p>[0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send] Connection
<br>
to endpoint closed ... connecting ...
<br>
[0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
<br>
Initialized High Priority QP num = 263177, Low Priority QP num = 263178,
<br>
LID = 785
<br>
<p>[0,1,0][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
<br>
] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
<br>
LID = 785[0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send]
<br>
Connection to endpoint closed ... connecting ...
<br>
[0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
<br>
Initialized High Priority QP num = 263179, Low Priority QP num = 263180,
<br>
LID = 786
<br>
<p>[0,1,0][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
<br>
] Sending High Priority QP num = 263179, Low Priority QP num = 263180,
<br>
LID = 786#---------------------------------------------------
<br>
#    PALLAS MPI Benchmark Suite V2.2, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date       : Tue Aug  9 07:11:25 2005
<br>
# Machine    : x86_64# System     : Linux
<br>
# Release    : 2.6.9-5.ELsmp
<br>
# Version    : #1 SMP Wed Jan 5 19:29:47 EST 2005
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   4194304
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># Sendrecv
<br>
[0,1,1][btl_mvapi_endpoint.c:368:mca_btl_mvapi_endpoint_reply_start_conn
<br>
ect] Initialized High Priority QP num = 263177, Low Priority QP num =
<br>
263178,  LID = 777
<br>
<p>[0,1,1][btl_mvapi_endpoint.c:266:mca_btl_mvapi_endpoint_set_remote_info]
<br>
Received High Priority QP num = 263177, Low Priority QP num 263178,  LID
<br>
= 785
<br>
<p>[0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to init..Qp
<br>
7080096[0,1,1][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_q
<br>
uery] Modified to RTR..Qp
<br>
7080096[0,1,1][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
<br>
uery] Modified to RTS..Qp 7080096
<br>
<p>[0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to init..Qp 7240736
<br>
[0,1,1][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to RTR..Qp
<br>
7240736[0,1,1][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
<br>
uery] Modified to RTS..Qp 7240736
<br>
[0,1,1][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
<br>
] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
<br>
LID = 777
<br>
[0,1,0][btl_mvapi_endpoint.c:266:mca_btl_mvapi_endpoint_set_remote_info]
<br>
Received High Priority QP num = 263177, Low Priority QP num 263178,  LID
<br>
= 777
<br>
[0,1,0][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to init..Qp 7081440
<br>
[0,1,0][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to RTR..Qp 7081440
<br>
[0,1,0][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to RTS..Qp 7081440
<br>
[0,1,0][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to init..Qp 7241888
<br>
[0,1,0][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_query]
<br>
Modified to RTR..Qp
<br>
7241888[0,1,0][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
<br>
uery] Modified to RTS..Qp 7241888
<br>
[0,1,1][btl_mvapi_component.c:523:mca_btl_mvapi_component_progress] Got
<br>
a recv completion
<br>
<p><p>Thanks
<br>
-Sridhar
<br>
<p><p><p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Brian Barrett
<br>
Sent: Tuesday, August 09, 2005 7:35 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p>On Aug 9, 2005, at 8:48 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; Does r6774 has lot of changes that are related to 3rd generation  
</span><br>
<span class="quotelev1">&gt; point-to-point? I am trying to run some benchmark tests (ex:  
</span><br>
<span class="quotelev1">&gt; pallas) with Open MPI stack and just want to compare the  
</span><br>
<span class="quotelev1">&gt; performance figures with MVAPICH 095 and MVAPICH 092.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to use 3rd generation p2p communication, I have added the  
</span><br>
<span class="quotelev1">&gt; following line in the /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml=ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also exported (as double check) OMPI_MCA_pml=ob1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I have tried running on the same machine. My machine has got  
</span><br>
<span class="quotelev1">&gt; 2 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mpirun -np 2 ./PMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still see the following lines
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
<p>These errors are coming from the collective routines, not the PML/BTL  
<br>
layers.  It looks like the reduction codes are trying to call malloc 
<br>
(0), which doesn't work so well.  We'll take a look as soon as we  
<br>
can.  In the mean time, can you just not run the tests that call the  
<br>
reduction collectives?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0110.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0115.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0116.php">Galen Shipman: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
