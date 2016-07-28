<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 09:32:16 2007" -->
<!-- isoreceived="20070119143216" -->
<!-- sent="Fri, 19 Jan 2007 07:32:09 -0700" -->
<!-- isosent="20070119143209" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]" -->
<!-- id="026E15D4-2EAD-4B23-BA13-3D0329991C18_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43185D89536AD545B065B7ECEA6300651626BB_at_mailserver.ocf.co.uk" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 09:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2510.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2508.php">Ralph Castain: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>In reply to:</strong> <a href="2507.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2510.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ah, disregard..
<br>
<p><p>On Jan 19, 2007, at 1:35 AM, Barry Evans wrote:
<br>
<p><span class="quotelev1">&gt; It's gigabit attached, pathscale is there simply to indicate that ompi
</span><br>
<span class="quotelev1">&gt; was compiled with ekopath
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Barry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Galen Shipman
</span><br>
<span class="quotelev1">&gt; Sent: 19 January 2007 01:56
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Pak.Lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problems with ompi1.2b2, SGE and
</span><br>
<span class="quotelev1">&gt; DLPOLY[Scanned]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca pml cm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for pathscale or are you using openib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2007, at 4:42 PM, Barry Evans wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We tried running with 32 and 16, had some success but after a
</span><br>
<span class="quotelev2">&gt;&gt; reboot of
</span><br>
<span class="quotelev2">&gt;&gt; the cluster it seems to be any DLPOLY run attempted falls over,  
</span><br>
<span class="quotelev2">&gt;&gt; either
</span><br>
<span class="quotelev2">&gt;&gt; interactively or through SGE. Standard benchmarks such as IMB and HPL
</span><br>
<span class="quotelev2">&gt;&gt; execute to completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the full output of a typical error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107c0
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/openmpi/pathscale/64/lib/libopal.so.0 [0x2a958b0a68]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/openmpi/pathscale/64/lib/libopal.so.0 [0x2a958b0a68]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/openmpi/pathscale/64/lib/libopal.so.0 [0x2a958b0a68]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/openmpi/pathscale/64/lib/libopal.so.0 [0x2a958b0a68]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 17 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Barry
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 17 January 2007 19:16
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problems with ompi1.2b2, SGE and
</span><br>
<span class="quotelev2">&gt;&gt; DLPOLY[Scanned]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for jumping in late.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to use ~128 SGE slots for my test run, with the either
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev2">&gt;&gt; SGE allocation rules ($fill_up or $round_robin) and -np 64 on my test
</span><br>
<span class="quotelev2">&gt;&gt; MPI program, but I wasn't able to reproduce your error though on
</span><br>
<span class="quotelev2">&gt;&gt; Solaris. Like Brian said, having the stack trace could help. Also, I
</span><br>
<span class="quotelev2">&gt;&gt; wonder if you can can try with a non-MPI program, a smaller number of
</span><br>
<span class="quotelev2">&gt;&gt; slots, or -np to see if he's still able to see the issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 15, 2007, at 10:13 AM, Marcelo Maia Garcia wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   I am trying to setup SGE to run DLPOLY compiled with mpif90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (OpenMPI 1.2b2, pathscale Fortran compilers and gcc c/c++). In
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; general I am much more luckier running DLPOLY interactively then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using SGE. The error that I got is: Signal:7 info.si_errno:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Success) si_code:2()[1]. A previous message in the list[2], says
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that this is more likely to be a configuration problem. But what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kind of configuration? It is in the run time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you include the entire stack trace next time?  That can help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; localize where the error is occurring.  The message is saying that a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process died from a signal 7, which on Linux is a Bus Error.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usually points to memory errors, either in Open MPI or in the user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application.  Without seeing the stack trace, it's difficult to pin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; down where the error is occurring.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Another error that I got sometimes is related with &quot;writev&quot;[3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But this is pretty rare.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usually these point to some process in the job dying and the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes having issues completing outstanding sends to the dead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process.  I would guess that the problem originates with the bus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error you are seeing.  Cleaning that up will likely make these  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [ocf_at_master TEST2]$ mpirun -np 16 --hostfile /home/ocf/SRIFBENCH/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DLPOLY3/data/nodes_16_slots4.txt /home/ocf/SRIFBENCH/DLPOLY3/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execute/DLPOLY.Y
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0x5107b0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [2] <a href="http://www.open-mpi.org/community/lists/users/2007/01/2423.php">http://www.open-mpi.org/community/lists/users/2007/01/2423.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node007:05003] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node007:05004] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node007:05005] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node007:05006] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node node003 exited on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signal 48.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2510.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2508.php">Ralph Castain: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>In reply to:</strong> <a href="2507.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2510.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
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
