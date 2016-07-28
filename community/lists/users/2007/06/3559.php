<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 30 05:23:20 2007" -->
<!-- isoreceived="20070630092320" -->
<!-- sent="Sat, 30 Jun 2007 10:19:57 +0100" -->
<!-- isosent="20070630091957" -->
<!-- name="Glenn Carver" -->
<!-- email="Glenn.Carver_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over IB not working : &amp;quot;Connection event not handled: 16391&amp;quot;" -->
<!-- id="p05111b02c2abcf4063a2_at_[10.0.1.6]" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="p05111b0ac2ab49306ec9_at_[10.0.1.6]" -->
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
<strong>From:</strong> Glenn Carver (<em>Glenn.Carver_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-30 05:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Previous message:</strong> <a href="3558.php">Ed D'Azevedo: "[OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>In reply to:</strong> <a href="3556.php">Glenn Carver: "[OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Reply:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Further to my email below regarding problems with uDAPL across IB, I 
<br>
found a bug report lodged with Sun (also reported with Opensolaris at:
<br>
<a href="http://bugs.opensolaris.org/bugdatabase/view_bug.do?bug_id=6545187">http://bugs.opensolaris.org/bugdatabase/view_bug.do?bug_id=6545187</a>). 
<br>
I will lodge a support call with Sun first thing Monday though it 
<br>
might not get me very far.
<br>
<p>Would ditching clustertools and compiling the latest open-mpi and 
<br>
trying the IB / OpenIB interface work for me?  Another option would 
<br>
be to revert to clustertools 6 but ideally I need the better 
<br>
implementation of MPI2 that's in open-mpi.
<br>
<p>Any workarounds on the first issue appreciated and advice on the 
<br>
second question appreciated too!
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glenn
<br>
<p><p><span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm trying to set up a new small cluster. It's based on Sun's X4100
</span><br>
<span class="quotelev1">&gt;servers running Solaris 10_x86. I have Open MPI that comes within
</span><br>
<span class="quotelev1">&gt;Clustertools 7.  In addition, I have an Infiniband network between
</span><br>
<span class="quotelev1">&gt;the nodes.  I can run parallel jobs fine if processes remain on one
</span><br>
<span class="quotelev1">&gt;node (each node has 4 cores). However, as soon as I try to run across
</span><br>
<span class="quotelev1">&gt;the nodes I get these errors from the job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[node3][0,1,8][/ws/hpc-ct-7/builds/7.0.build-ct7-030/ompi-ct7/ompi/mca/btl/udapl/btl_udapl_component.c:827:mca_btl_udapl_component_progress]
</span><br>
<span class="quotelev1">&gt;WARNING : Connection event not handled : 16391
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've had a good look through the archives but can't find a reference
</span><br>
<span class="quotelev1">&gt;to this error. I realise the udapl interface is a sun addition to
</span><br>
<span class="quotelev1">&gt;OpenMPI but I'm hoping someone else will have seen this before and
</span><br>
<span class="quotelev1">&gt;know what's wrong. I have checked my IB network is functioning
</span><br>
<span class="quotelev1">&gt;correctly (seemed the obvious thing that could be wrong).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any pointers on what could be wrong much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Glenn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ifconfig for the IB port reports:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ ifconfig ibd1
</span><br>
<span class="quotelev1">&gt;ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044 index 3
</span><br>
<span class="quotelev1">&gt;          inet 192.168.50.200 netmask ffffff00 broadcast 192.168.50.255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;.. and for the other configured interface:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ ifconfig e1000g0
</span><br>
<span class="quotelev1">&gt;e1000g0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
</span><br>
<span class="quotelev1">&gt;          inet 192.168.47.190 netmask ffffff00 broadcast 192.168.47.255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Output from ompi_info is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ompi_info | more
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                    Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev1">&gt;   Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt;             Configured by: root
</span><br>
<span class="quotelev1">&gt;             Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: burpen-csx10-0
</span><br>
<span class="quotelev1">&gt;                  Built by: root
</span><br>
<span class="quotelev1">&gt;                  Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev1">&gt;                Built host: burpen-csx10-0
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;   Fortran90 bindings size: trivial
</span><br>
<span class="quotelev1">&gt;                C compiler: cc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev1">&gt;              C++ compiler: CC
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: f77
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: f95
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;            Thread support: no
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;   mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Previous message:</strong> <a href="3558.php">Ed D'Azevedo: "[OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>In reply to:</strong> <a href="3556.php">Glenn Carver: "[OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Reply:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
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
