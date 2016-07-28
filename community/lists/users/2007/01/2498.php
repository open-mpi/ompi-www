<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 12:56:35 2007" -->
<!-- isoreceived="20070118175635" -->
<!-- sent="Wed, 17 Jan 2007 14:16:00 -0500" -->
<!-- isosent="20070117191600" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY" -->
<!-- id="45AE75F0.6060501_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31E9C5FD-42CA-4E9F-A6E1-413F10501D51_at_lanl.gov" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 14:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2499.php">Arif Ali: "[OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for jumping in late.
<br>
<p>I was able to use ~128 SGE slots for my test run, with the either of the
<br>
SGE allocation rules ($fill_up or $round_robin) and -np 64 on my test
<br>
MPI program, but I wasn't able to reproduce your error though on 
<br>
Solaris. Like Brian said, having the stack trace could help. Also, I 
<br>
wonder if you can can try with a non-MPI program, a smaller number of 
<br>
slots, or -np to see if he's still able to see the issue?
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jan 15, 2007, at 10:13 AM, Marcelo Maia Garcia wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   I am trying to setup SGE to run DLPOLY compiled with mpif90  
</span><br>
<span class="quotelev2">&gt;&gt; (OpenMPI 1.2b2, pathscale Fortran compilers and gcc c/c++). In  
</span><br>
<span class="quotelev2">&gt;&gt; general I am much more luckier running DLPOLY interactively then  
</span><br>
<span class="quotelev2">&gt;&gt; using SGE. The error that I got is: Signal:7 info.si_errno:0 
</span><br>
<span class="quotelev2">&gt;&gt; (Success) si_code:2()[1]. A previous message in the list[2], says  
</span><br>
<span class="quotelev2">&gt;&gt; that this is more likely to be a configuration problem. But what  
</span><br>
<span class="quotelev2">&gt;&gt; kind of configuration? It is in the run time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you include the entire stack trace next time?  That can help  
</span><br>
<span class="quotelev1">&gt; localize where the error is occurring.  The message is saying that a  
</span><br>
<span class="quotelev1">&gt; process died from a signal 7, which on Linux is a Bus Error.  This  
</span><br>
<span class="quotelev1">&gt; usually points to memory errors, either in Open MPI or in the user  
</span><br>
<span class="quotelev1">&gt; application.  Without seeing the stack trace, it's difficult to pin  
</span><br>
<span class="quotelev1">&gt; down where the error is occurring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Another error that I got sometimes is related with &quot;writev&quot;[3]  
</span><br>
<span class="quotelev2">&gt;&gt; But this is pretty rare.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually these point to some process in the job dying and the other  
</span><br>
<span class="quotelev1">&gt; processes having issues completing outstanding sends to the dead  
</span><br>
<span class="quotelev1">&gt; process.  I would guess that the problem originates with the bus  
</span><br>
<span class="quotelev1">&gt; error you are seeing.  Cleaning that up will likely make these errors  
</span><br>
<span class="quotelev1">&gt; go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [1]
</span><br>
<span class="quotelev2">&gt;&gt; [ocf_at_master TEST2]$ mpirun -np 16 --hostfile /home/ocf/SRIFBENCH/ 
</span><br>
<span class="quotelev2">&gt;&gt; DLPOLY3/data/nodes_16_slots4.txt /home/ocf/SRIFBENCH/DLPOLY3/ 
</span><br>
<span class="quotelev2">&gt;&gt; execute/DLPOLY.Y
</span><br>
<span class="quotelev2">&gt;&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x5107b0
</span><br>
<span class="quotelev2">&gt;&gt; (...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [2] <a href="http://www.open-mpi.org/community/lists/users/2007/01/2423.php">http://www.open-mpi.org/community/lists/users/2007/01/2423.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [3]
</span><br>
<span class="quotelev2">&gt;&gt; [node007:05003] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node007:05004] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node007:05005] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node007:05006] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node node003 exited on  
</span><br>
<span class="quotelev2">&gt;&gt; signal 48.
</span><br>
<span class="quotelev2">&gt;&gt; 15 additional processes aborted (not shown)
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
<p><p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2499.php">Arif Ali: "[OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
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
