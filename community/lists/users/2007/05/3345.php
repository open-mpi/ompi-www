<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 30 15:20:58 2007" -->
<!-- isoreceived="20070530192058" -->
<!-- sent="Wed, 30 May 2007 15:19:53 -0400 (EDT)" -->
<!-- isosent="20070530191953" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in MPI_Barrier" -->
<!-- id="Pine.LNX.4.62.0705301518570.18269_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="465C0B06.2010502_at_lnl.infn.it" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-30 15:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>In reply to:</strong> <a href="3338.php">Marcin Skoczylas: "[OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcin,
<br>
<p>what version of Open MPI did you use?
<br>
Is it still occurring?
<br>
It is also possible that the connection went down during the execution... 
<br>
although, a segfault really should not occur.
<br>
<p>Thanks,
<br>
Jelena
<br>
<p>On Tue, 29 May 2007, Marcin Skoczylas wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; recently my administrator made some changes on our cluster and now I
</span><br>
<span class="quotelev1">&gt; have a crash during MPI_Barrier:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [our-host:12566] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [our-host:12566] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [our-host:12566] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [our-host:12566] Failing at address: 0x4
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 0] /lib/tls/libpthread.so.0 [0xa22f80]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x68f)
</span><br>
<span class="quotelev1">&gt; [0xcd86d7]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x32) [0xcb7e3a]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 3] /usr/lib/libopen-pal.so.0(opal_progress+0xed)
</span><br>
<span class="quotelev1">&gt; [0xc2b221]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 4] /usr/lib/libmpi.so.0 [0x3aecc5]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 5] /usr/lib/libmpi.so.0(ompi_request_wait_all+0xec)
</span><br>
<span class="quotelev1">&gt; [0x3ae784]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x77)
</span><br>
<span class="quotelev1">&gt; [0xd025bb]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling+0xde)
</span><br>
<span class="quotelev1">&gt; [0xd05e3a]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_dec_fixed+0x44)
</span><br>
<span class="quotelev1">&gt; [0xd027d8]
</span><br>
<span class="quotelev1">&gt; [our-host:12566] [ 9] /usr/lib/libmpi.so.0(PMPI_Barrier+0x176) [0x3c0cea]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I made small investigation and I realised that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [user_at_our-host]$ ssh our-host
</span><br>
<span class="quotelev1">&gt; ssh(12704) ssh: connect to host our-host port 22: No route to host
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that could be the thing, I'm going to talk with my admin soon about this
</span><br>
<span class="quotelev1">&gt; routing change, however if it is really this problem, shouldn't it be
</span><br>
<span class="quotelev1">&gt; recognised during startup, f.e. in MPI_Init? Actually, I'm not sure...
</span><br>
<span class="quotelev1">&gt; your comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             greetings, Marcin
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
Murphy's Law of Research:
         Enough research will tend to support your theory.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3346.php">smairal_at_[hidden]: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3344.php">Brian Barrett: "Re: [OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>In reply to:</strong> <a href="3338.php">Marcin Skoczylas: "[OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
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
