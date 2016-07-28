<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 15:43:10 2006" -->
<!-- isoreceived="20060316204310" -->
<!-- sent="Thu, 16 Mar 2006 15:41:42 -0500 (EST)" -->
<!-- isosent="20060316204142" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection failed" -->
<!-- id="Pine.OSX.4.61.0603161537040.14245_at_applebasket.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4419C45A.5030707_at_asc.edu" -->
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
<strong>Date:</strong> 2006-03-16 15:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Charles Wright: "[OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<li><strong>In reply to:</strong> <a href="0876.php">Charles Wright: "[OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed"</a>
<li><strong>Reply:</strong> <a href="0878.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see only 2 possibilities:
<br>
1. your trying to run Open MPI on nodes having multiple IP 
<br>
addresses.
<br>
2. your nodes are behind firewalls and Open MPI is unable to pass through.
<br>
<p>Please check the FAQ on <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a> to find out the full 
<br>
answer to your question.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Thu, 16 Mar 2006, Charles Wright wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;    I'm just compiled open-mpi and tried to run my code which just
</span><br>
<span class="quotelev1">&gt; measures bandwidth from one node to another.   (Code compile fine and
</span><br>
<span class="quotelev1">&gt; runs under other mpi implementations)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I did I got this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uahrcw_at_c275-6:~/mpi-benchmarks&gt; cat openmpitcp.o15380
</span><br>
<span class="quotelev1">&gt; c317-6
</span><br>
<span class="quotelev1">&gt; c317-5
</span><br>
<span class="quotelev1">&gt; [c317-5:24979] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed (errno=110) - retrying (pid=24979)
</span><br>
<span class="quotelev1">&gt; [c317-5:24979] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev1">&gt; [c317-5:24997] [0,1,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; connection failed (errno=110) - retrying (pid=24997)
</span><br>
<span class="quotelev1">&gt; [c317-5:24997] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=110
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled open-mpi with Pbspro 5.4-4 and I'm guessing that has
</span><br>
<span class="quotelev1">&gt; something to do with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached my config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help with this would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uahrcw_at_c275-6:~/mpi-benchmarks&gt; ompi_info
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.0.1r8453
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r8453
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.0.1r8453
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r8453
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.0.1r8453
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r8453
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/asn/apps/openmpi-1.0.1
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configured by: asnrcw
</span><br>
<span class="quotelev1">&gt;           Configured on: Fri Feb 24 15:19:37 CST 2006
</span><br>
<span class="quotelev1">&gt;          Configure host: c275-6
</span><br>
<span class="quotelev1">&gt;                Built by: asnrcw
</span><br>
<span class="quotelev1">&gt;                Built on: Fri Feb 24 15:40:09 CST 2006
</span><br>
<span class="quotelev1">&gt;              Built host: c275-6
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: ifort
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /opt/asn/intel/fce/9.0/bin/ifort
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: 1
</span><br>
<span class="quotelev1">&gt;              MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.0.1)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: replica (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: tm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: tm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev1">&gt; uahrcw_at_c275-6:~/mpi-benchmarks&gt;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Charles Wright: "[OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<li><strong>In reply to:</strong> <a href="0876.php">Charles Wright: "[OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed"</a>
<li><strong>Reply:</strong> <a href="0878.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed"</a>
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
