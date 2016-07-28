<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  3 14:36:26 2006" -->
<!-- isoreceived="20060703183626" -->
<!-- sent="Mon, 3 Jul 2006 14:31:28 -0400" -->
<!-- isosent="20060703183128" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Openmpi 1.1" -->
<!-- id="84D9675A-C9EC-45C8-B837-D551EB43F3DB_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F202C92875_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Date:</strong> 2006-07-03 14:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1530.php">Michael Alexander: "[OMPI users] 2nd Call for Papers - Workshop on XEN in HPC Cluster and Grid Computing Environments (XHPC)"</a>
<li><strong>Previous message:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1567.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1567.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernard,
<br>
<p>A bug in the Open MPI GM driver was discovered after the 1.1 release.  
<br>
A patch for the 1.1 is on the way. However, I don't know if it will  
<br>
be available before the 1.1.1. Meanwhile, you can use the nightly  
<br>
build version or a fresh check-out from the SVN repository. Both of  
<br>
them have the GM bug corrected.
<br>
<p>&nbsp;&nbsp;&nbsp;Sorry for the troubles,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 3, 2006, at 12:58 PM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; I've built and sucessfully run the Nasa Overflow 2.0aa program with
</span><br>
<span class="quotelev1">&gt; Openmpi 1.0.2.  I'm running on an opteron linux cluster running SLES 9
</span><br>
<span class="quotelev1">&gt; and GM 2.0.24. I built Openmpi 1.1 with the intel 9 compilers and  
</span><br>
<span class="quotelev1">&gt; try to
</span><br>
<span class="quotelev1">&gt; run Overflow 2.0aa with myrinet, it get what looks like a data
</span><br>
<span class="quotelev1">&gt; corruption error and the program dies quickly.
</span><br>
<span class="quotelev1">&gt; There are no mpi errors at all.If I run using GIGE (--mca btl  
</span><br>
<span class="quotelev1">&gt; self,tcp),
</span><br>
<span class="quotelev1">&gt; the program runs to competion correctly.  Here is my ompi_info  
</span><br>
<span class="quotelev1">&gt; output :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsb3227_at_mahler:~/openmpi_1.1/bin&gt; ./ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/bsb3227/openmpi_1.1
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: bsb3227
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Jun 30 07:08:54 PDT 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: mahler
</span><br>
<span class="quotelev1">&gt;                 Built by: bsb3227
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Jun 30 07:54:46 PDT 2006
</span><br>
<span class="quotelev1">&gt;               Built host: mahler
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: icc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/intel/cce/9.0.25/bin/icc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/intel/cce/9.0.25/bin/icpc
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the ifconfig for one of the nodes :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsb3227_at_m045:~&gt; /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:50:45:5D:CD:FE
</span><br>
<span class="quotelev1">&gt;           inet addr:10.241.194.45  Bcast:10.241.195.255
</span><br>
<span class="quotelev1">&gt; Mask:255.255.254.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::250:45ff:fe5d:cdfe/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST NOTRAILERS RUNNING MULTICAST  MTU:1500   
</span><br>
<span class="quotelev1">&gt; Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:39913407 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:48794587 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:31847343907 (30371.9 Mb)  TX bytes:48231713866
</span><br>
<span class="quotelev1">&gt; (45997.3 Mb)
</span><br>
<span class="quotelev1">&gt;           Interrupt:19
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:50:45:5D:CD:FF
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::250:45ff:fe5d:cdff/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;           Interrupt:19
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:23141 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:23141 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:20145689 (19.2 Mb)  TX bytes:20145689 (19.2 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope someone can give me some guidance on how to debug this problem.
</span><br>
<span class="quotelev1">&gt; Thanx in advance for any help
</span><br>
<span class="quotelev1">&gt; that can be provided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1530.php">Michael Alexander: "[OMPI users] 2nd Call for Papers - Workshop on XEN in HPC Cluster and Grid Computing Environments (XHPC)"</a>
<li><strong>Previous message:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1567.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1567.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
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
