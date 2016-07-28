<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 16 09:47:41 2007" -->
<!-- isoreceived="20070116144741" -->
<!-- sent="Tue, 16 Jan 2007 07:47:30 -0700" -->
<!-- isosent="20070116144730" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY" -->
<!-- id="31E9C5FD-42CA-4E9F-A6E1-413F10501D51_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d576661e0701150913o5684d472j86adc2979555e4d9_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-16 09:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2467.php">Peter Kjellstrom: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2465.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>In reply to:</strong> <a href="2461.php">Marcelo Maia Garcia: "[OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Reply:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2007, at 10:13 AM, Marcelo Maia Garcia wrote:
<br>
<p><span class="quotelev1">&gt;   I am trying to setup SGE to run DLPOLY compiled with mpif90  
</span><br>
<span class="quotelev1">&gt; (OpenMPI 1.2b2, pathscale Fortran compilers and gcc c/c++). In  
</span><br>
<span class="quotelev1">&gt; general I am much more luckier running DLPOLY interactively then  
</span><br>
<span class="quotelev1">&gt; using SGE. The error that I got is: Signal:7 info.si_errno:0 
</span><br>
<span class="quotelev1">&gt; (Success) si_code:2()[1]. A previous message in the list[2], says  
</span><br>
<span class="quotelev1">&gt; that this is more likely to be a configuration problem. But what  
</span><br>
<span class="quotelev1">&gt; kind of configuration? It is in the run time?
</span><br>
<p>Could you include the entire stack trace next time?  That can help  
<br>
localize where the error is occurring.  The message is saying that a  
<br>
process died from a signal 7, which on Linux is a Bus Error.  This  
<br>
usually points to memory errors, either in Open MPI or in the user  
<br>
application.  Without seeing the stack trace, it's difficult to pin  
<br>
down where the error is occurring.
<br>
<p><span class="quotelev1">&gt;   Another error that I got sometimes is related with &quot;writev&quot;[3]  
</span><br>
<span class="quotelev1">&gt; But this is pretty rare.
</span><br>
<p>Usually these point to some process in the job dying and the other  
<br>
processes having issues completing outstanding sends to the dead  
<br>
process.  I would guess that the problem originates with the bus  
<br>
error you are seeing.  Cleaning that up will likely make these errors  
<br>
go away.
<br>
<p>Brian
<br>
<p><p><p><span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; [ocf_at_master TEST2]$ mpirun -np 16 --hostfile /home/ocf/SRIFBENCH/ 
</span><br>
<span class="quotelev1">&gt; DLPOLY3/data/nodes_16_slots4.txt /home/ocf/SRIFBENCH/DLPOLY3/ 
</span><br>
<span class="quotelev1">&gt; execute/DLPOLY.Y
</span><br>
<span class="quotelev1">&gt; Signal:7 info.si_errno:0(Success) si_code:2()
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x5107b0
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://www.open-mpi.org/community/lists/users/2007/01/2423.php">http://www.open-mpi.org/community/lists/users/2007/01/2423.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [3]
</span><br>
<span class="quotelev1">&gt; [node007:05003] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node007:05004] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node007:05005] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node007:05006] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node node003 exited on  
</span><br>
<span class="quotelev1">&gt; signal 48.
</span><br>
<span class="quotelev1">&gt; 15 additional processes aborted (not shown)
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
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2467.php">Peter Kjellstrom: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2465.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>In reply to:</strong> <a href="2461.php">Marcelo Maia Garcia: "[OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Reply:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
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
