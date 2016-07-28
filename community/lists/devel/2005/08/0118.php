<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 23:37:44 2005" -->
<!-- isoreceived="20050810043744" -->
<!-- sent="Wed, 10 Aug 2005 00:37:31 -0400 (EDT)" -->
<!-- isosent="20050810043731" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="Pine.LNX.4.58.0508092336200.4142_at_localhost" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2E1A5E52-B184-45AE-9C5D-EAD4CC3AA0DA_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2005-08-09 23:37:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Brian Barrett: "memory manager hooks"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I run all the ex-Pallas test and the same error happens. We try to malloc
<br>
0 bytes and we hang somewhere. Let me explain what I found. First of all,
<br>
most of the tests seems to work perfectly (at least with the PTL/BTL I was
<br>
able to run: sm, tcp, mx). The deadlock as well as the memory allocation
<br>
problem happens in the reduce_scatter operation.
<br>
<p>Problem 1: allocating 0 bytes
<br>
- it's not a datatype problem. The datatype return the correct extent,
<br>
&nbsp;&nbsp;true_extent, lb. The problem is that we miss one case in the collective
<br>
&nbsp;&nbsp;communications. How about the case when the user do a reduce_scatter
<br>
&nbsp;&nbsp;with all the counts set to zero ? We check if they are greater than zero
<br>
&nbsp;&nbsp;and it's the case. Then we add them together and as expected a sum of
<br>
&nbsp;&nbsp;zero is zero. So in the coll_basic_reduce_scatter line 79 we will
<br>
&nbsp;&nbsp;allocate zero bytes because the extent and the true_extent of the
<br>
&nbsp;&nbsp;MPI_FLOAT datatype are equal and (count - 1) is -1 !!! There is a simple
<br>
&nbsp;&nbsp;fix for this problem, if count == 0 then free_buffer should be set to
<br>
&nbsp;&nbsp;NULL (as we don't send or receive anything in this buffer it will just
<br>
&nbsp;&nbsp;work fine) at the PTL/PML level.
<br>
- the same error can happens on the reduce function if the count is zero.
<br>
&nbsp;&nbsp;I will protect this function too.
<br>
<p>Problem 2: hanging
<br>
- somehow a strange optimization get inside the scatterv function. In the
<br>
&nbsp;&nbsp;case where the sender has to send zero bytes it completly skip the send
<br>
&nbsp;&nbsp;operation. But the receiver still expect to get a message. Anyway, this
<br>
&nbsp;&nbsp;optimization is not correct, all messages have to be send. I know that
<br>
&nbsp;&nbsp;it can (slightly) increase the time for the collective but it give us a
<br>
&nbsp;&nbsp;simple way of checking the correctness of the global communication (as
<br>
&nbsp;&nbsp;the PML handle the truncate case). Patch is on the way.
<br>
<p>Once these 2 problems corrected we pass all the Pallas MPI1 tests. I run
<br>
the tests with the PML ob1, teg and uniq and the PTL/BTL sm, tcp, gm (PTL)
<br>
and mx(PTL) with 2 and 8 processes.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: the patches will be commited soon.
<br>
<p><span class="quotelev1">&gt; On Aug 9, 2005, at 1:53 PM, Galen Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Hi Sridhar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have committed changes that allow you to set the debg verbosity,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_base_debug
</span><br>
<span class="quotelev1">&gt; 0 - no debug output
</span><br>
<span class="quotelev1">&gt; 1 - standard debug output
</span><br>
<span class="quotelev1">&gt; 2 - very verbose debug output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also we have run the Pallas tests and are not able to reproduce your failures. We do see a warning in
</span><br>
<span class="quotelev1">&gt; the Reduce test but it does not hang and runs to completion. Attached is a simple ping pong program,
</span><br>
<span class="quotelev1">&gt; try running this and let us know the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpi-ping.c&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2005, at 8:15 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       The same kind of output while running Pallas &quot;pingpong&quot; test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
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
<span class="quotelev1">&gt; I have run sendrecv function in Pallas but it failed to run it. Here is
</span><br>
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
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send] Connection
</span><br>
<span class="quotelev1">&gt; to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; Initialized High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev1">&gt; LID = 785
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev1">&gt; LID = 785[0,1,0][btl_mvapi_endpoint.c:542:mca_btl_mvapi_endpoint_send]
</span><br>
<span class="quotelev1">&gt; Connection to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:318:mca_btl_mvapi_endpoint_start_connect]
</span><br>
<span class="quotelev1">&gt; Initialized High Priority QP num = 263179, Low Priority QP num = 263180,
</span><br>
<span class="quotelev1">&gt; LID = 786
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263179, Low Priority QP num = 263180,
</span><br>
<span class="quotelev1">&gt; LID = 786#---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #&#160; &#160; PALLAS MPI Benchmark Suite V2.2, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date &#160; &#160; &#160; : Tue Aug&#160; 9 07:11:25 2005
</span><br>
<span class="quotelev1">&gt; # Machine&#160; &#160; : x86_64# System &#160; &#160; : Linux
</span><br>
<span class="quotelev1">&gt; # Release&#160; &#160; : 2.6.9-5.ELsmp
</span><br>
<span class="quotelev1">&gt; # Version&#160; &#160; : #1 SMP Wed Jan 5 19:29:47 EST 2005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes: &#160; 0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes: &#160; 4194304
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; : &#160; MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions&#160; &#160; : &#160; MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; : &#160; MPI_SUM
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
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:368:mca_btl_mvapi_endpoint_reply_start_conn
</span><br>
<span class="quotelev1">&gt; ect] Initialized High Priority QP num = 263177, Low Priority QP num =
</span><br>
<span class="quotelev1">&gt; 263178,&#160; LID = 777
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:266:mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev1">&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,&#160; LID
</span><br>
<span class="quotelev1">&gt; = 785
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:756:mca_btl_mvapi_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Modified to init..Qp
</span><br>
<span class="quotelev1">&gt; 7080096[0,1,1][btl_mvapi_endpoint.c:791:mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTR..Qp
</span><br>
<span class="quotelev1">&gt; 7080096[0,1,1][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
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
<span class="quotelev1">&gt; 7240736[0,1,1][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTS..Qp 7240736
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_endpoint.c:190:mca_btl_mvapi_endpoint_send_connect_req
</span><br>
<span class="quotelev1">&gt; ] Sending High Priority QP num = 263177, Low Priority QP num = 263178,
</span><br>
<span class="quotelev1">&gt; LID = 777
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_mvapi_endpoint.c:266:mca_btl_mvapi_endpoint_set_remote_info]
</span><br>
<span class="quotelev1">&gt; Received High Priority QP num = 263177, Low Priority QP num 263178,&#160; LID
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
<span class="quotelev1">&gt; 7241888[0,1,0][btl_mvapi_endpoint.c:814:mca_btl_mvapi_endpoint_qp_init_q
</span><br>
<span class="quotelev1">&gt; uery] Modified to RTS..Qp 7241888
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_mvapi_component.c:523:mca_btl_mvapi_component_progress] Got
</span><br>
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
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
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
<span class="quotelev1">&gt;       Does r6774 has lot of changes that are related to 3rd generation
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These errors are coming from the collective routines, not the PML/BTL
</span><br>
<span class="quotelev1">&gt; layers.&#160; It looks like the reduction codes are trying to call malloc
</span><br>
<span class="quotelev1">&gt; (0), which doesn't work so well.&#160; We'll take a look as soon as we
</span><br>
<span class="quotelev1">&gt; can.&#160; In the mean time, can you just not run the tests that call the
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
<span class="quotelev1">&gt; --&#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160; Brian Barrett
</span><br>
<span class="quotelev1">&gt; &#160;&#160; Open MPI developer
</span><br>
<span class="quotelev1">&gt; &#160;&#160; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Brian Barrett: "memory manager hooks"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0119.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
