<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 30 19:15:56 2007" -->
<!-- isoreceived="20070930231556" -->
<!-- sent="Sun, 30 Sep 2007 16:15:46 -0700 (PDT)" -->
<!-- isosent="20070930231546" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] mca_oob_tcp_peer_try_connect: messages" -->
<!-- id="Pine.GSO.4.64.0709301608590.9306_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-30 19:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4105.php">Torje Henriksen: "[OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any ideas about this. One dual core operton box talking to another using
<br>
infincon/silverstorm/qlogic hardware and mvapi (actually it's the same
<br>
just using ethernet and tcp):
<br>
<p>$OPENMPI_INFINICON_GCC_MVAPI/bin/mpicc cpi.c
<br>
$OPENMPI_INFINICON_GCC_MVAPI/bin/-np 4 -machinefile j ./a.out
<br>
[s0121:07450] [1,0]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
<br>
[s0121:07451] [1,1]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
<br>
[s0121:07453] [1,3]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
<br>
[s0121:07452] [1,2]-[0,0] mca_oob_tcp_peer_try_connect: connect to 10.173.128.48:43359 failed: Software caused connection abort (103)
<br>
Process 2 of 4 on s0121
<br>
Process 0 of 4 on s0121
<br>
Process 1 of 4 on s0121
<br>
Process 3 of 4 on s0121
<br>
7451:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
<br>
7453:a.out *-&gt;2 (f=noaffinity,0,1,2,3)
<br>
7450:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
<br>
7452:a.out *-&gt;3 (f=noaffinity,0,1,2,3)
<br>
<p>The Process msgs and the affinity stuff means it ran. The oob msgs are somewhat annoying
<br>
(imagine hundreds of nodes). The 10.173.128.48 address is the launch node (s0120).
<br>
This is SuSE SLES10:
<br>
s0120    Sun Sep 30 16:15:02 PDT 2007
<br>
SUSE Linux Enterprise Server 10 (x86_64)
<br>
Linux version 2.6.16.21-0.8-smp.lustre-1.6.1.X2200.MRL-0.8-smp (geeko_at_buildhost) (gcc version 4.1.0 (SUSE Linux)) #1 SMP Tue Aug 28 09:51:26 PDT 2007
<br>
Machine Model Sun Fire X2200 M2
<br>
Bus Speed 202 MHz
<br>
4 Cpus
<br>
CPU0 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
<br>
L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
<br>
L2 cache: 1024 KB
<br>
CPU1 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
<br>
L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
<br>
L2 cache: 1024 KB
<br>
CPU2 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
<br>
L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
<br>
L2 cache: 1024 KB
<br>
CPU3 Dual-Core AMD Opteron(tm) Processor 2220(2814.485Mhz) stepping 3
<br>
L1 I Cache: 64K (64 bytes/line), D cache 64K (64 bytes/line)
<br>
L2 cache: 1024 KB
<br>
16.0 GB memory
<br>
<p>Regards,
<br>
Mostyn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4105.php">Torje Henriksen: "[OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4123.php">Mostyn Lewis: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
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
