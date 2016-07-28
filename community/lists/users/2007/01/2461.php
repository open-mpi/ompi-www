<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 15 12:13:32 2007" -->
<!-- isoreceived="20070115171332" -->
<!-- sent="Mon, 15 Jan 2007 17:13:18 +0000" -->
<!-- isosent="20070115171318" -->
<!-- name="Marcelo Maia Garcia" -->
<!-- email="marcelomgarcia_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with ompi1.2b2, SGE and DLPOLY" -->
<!-- id="d576661e0701150913o5684d472j86adc2979555e4d9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Marcelo Maia Garcia (<em>marcelomgarcia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-15 12:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2462.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2460.php">Nader Ahmadi: "[OMPI users] OpenMPI on HPUX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Reply:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;&nbsp;I am trying to setup SGE to run DLPOLY compiled with mpif90 (OpenMPI 1.2b2,
<br>
pathscale Fortran compilers and gcc c/c++). In general I am much more
<br>
luckier running DLPOLY interactively then using SGE. The error that I got
<br>
is: Signal:7 info.si_errno:0(Success) si_code:2()[1]. A previous message in
<br>
the list[2], says that this is more likely to be a configuration problem.
<br>
But what kind of configuration? It is in the run time?
<br>
<p>&nbsp;&nbsp;Another error that I got sometimes is related with &quot;writev&quot;[3] But this is
<br>
pretty rare.
<br>
<p>&nbsp;&nbsp;My network is Gigabit, OS is Red Hat EL 4 the nodes are dual core Opteron
<br>
275 (4 cores). I did not use any (except for prefix) option during the
<br>
configuration process
<br>
<p>&nbsp;&nbsp;Any suggestion?
<br>
<p>&nbsp;&nbsp;Thanks
<br>
<p>Marcelo Garcia
<br>
<p>[1]
<br>
[ocf_at_master TEST2]$ mpirun -np 16 --hostfile
<br>
/home/ocf/SRIFBENCH/DLPOLY3/data/nodes_16_slots4.txt
<br>
/home/ocf/SRIFBENCH/DLPOLY3/execute/DLPOLY.Y
<br>
Signal:7 info.si_errno:0(Success) si_code:2()
<br>
Failing at addr:0x5107b0
<br>
(...)
<br>
<p>[2] <a href="http://www.open-mpi.org/community/lists/users/2007/01/2423.php">http://www.open-mpi.org/community/lists/users/2007/01/2423.php</a>
<br>
<p><p>[3]
<br>
[node007:05003] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node007:05004] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node007:05005] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node007:05006] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05170] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05171] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05172] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[node006:05173] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
mpirun noticed that job rank 0 with PID 0 on node node003 exited on signal
<br>
48.
<br>
15 additional processes aborted (not shown)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2462.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2460.php">Nader Ahmadi: "[OMPI users] OpenMPI on HPUX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Reply:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
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
