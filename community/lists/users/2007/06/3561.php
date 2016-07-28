<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 30 17:25:43 2007" -->
<!-- isoreceived="20070630212543" -->
<!-- sent="Sat, 30 Jun 2007 22:23:28 +0100" -->
<!-- isosent="20070630212328" -->
<!-- name="Glenn Carver" -->
<!-- email="Glenn.Carver_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over IB not working : &amp;quot;Connection event not handled: 16391&amp;quot;" -->
<!-- id="p05111b07c2ac795353c0_at_[10.0.1.6]" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46865F92.90200_at_sun.com" -->
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
<strong>Date:</strong> 2007-06-30 17:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3562.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>In reply to:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak,
<br>
<p>Thanks. After I received your email I went back and checked my patch 
<br>
install logs (I'd not missed that I needed the patch). Turns out that 
<br>
patch install had failed on the node and when I applied the patch by 
<br>
hand and rebooted it all started working.
<br>
<p>Thanks again for taking the time to reply at the weekend! Much appreciated.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Glenn
<br>
<p><p><span class="quotelev1">&gt;Glenn,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are you running with Solaris 10 Update 3 (11/06) and with this patch
</span><br>
<span class="quotelev1">&gt;125793-01? It is required for running with udapl btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.sun.com/products-n-solutions/hardware/docs/html/819-7478-11/body.html#93180">http://www.sun.com/products-n-solutions/hardware/docs/html/819-7478-11/body.html#93180</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Glenn Carver wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Further to my email below regarding problems with uDAPL across IB, I
</span><br>
<span class="quotelev2">&gt;&gt;  found a bug report lodged with Sun (also reported with Opensolaris at:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://bugs.opensolaris.org/bugdatabase/view_bug.do?bug_id=6545187">http://bugs.opensolaris.org/bugdatabase/view_bug.do?bug_id=6545187</a>).
</span><br>
<span class="quotelev2">&gt;&gt;  I will lodge a support call with Sun first thing Monday though it
</span><br>
<span class="quotelev2">&gt;&gt;  might not get me very far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Would ditching clustertools and compiling the latest open-mpi and
</span><br>
<span class="quotelev2">&gt;&gt;  trying the IB / OpenIB interface work for me?  Another option would
</span><br>
<span class="quotelev2">&gt;&gt;  be to revert to clustertools 6 but ideally I need the better
</span><br>
<span class="quotelev2">&gt;&gt;  implementation of MPI2 that's in open-mpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Any workarounds on the first issue appreciated and advice on the
</span><br>
<span class="quotelev2">&gt;&gt;  second question appreciated too!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks
</span><br>
<span class="quotelev2">&gt;&gt;                  Glenn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I'm trying to set up a new small cluster. It's based on Sun's X4100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  servers running Solaris 10_x86. I have Open MPI that comes within
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Clustertools 7.  In addition, I have an Infiniband network between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  the nodes.  I can run parallel jobs fine if processes remain on one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  node (each node has 4 cores). However, as soon as I try to run across
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  the nodes I get these errors from the job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[node3][0,1,8][/ws/hpc-ct-7/builds/7.0.build-ct7-030/ompi-ct7/ompi/mca/btl/udapl/btl_udapl_component.c:827:mca_btl_udapl_component_progress]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  WARNING : Connection event not handled : 16391
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I've had a good look through the archives but can't find a reference
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  to this error. I realise the udapl interface is a sun addition to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OpenMPI but I'm hoping someone else will have seen this before and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  know what's wrong. I have checked my IB network is functioning
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  correctly (seemed the obvious thing that could be wrong).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Any pointers on what could be wrong much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Glenn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ifconfig for the IB port reports:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ ifconfig ibd1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ibd1: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 2044 index 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet 192.168.50.200 netmask ffffff00 broadcast 192.168.50.255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  .. and for the other configured interface:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ ifconfig e1000g0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  e1000g0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1500 index 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet 192.168.47.190 netmask ffffff00 broadcast 192.168.47.255
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Output from ompi_info is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi_info | more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Open MPI SVN revision: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Open RTE SVN revision: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          OPAL SVN revision: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Configured by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;            Configure host: burpen-csx10-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Built by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built host: burpen-csx10-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Fortran90 bindings size: trivial
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 C compiler: cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C++ compiler: CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fortran77 compiler: f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;        Fortran90 compiler: f95
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ exceptions: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thread support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Heterogeneous support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun default --prefix: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA backtrace: printstack (MCA v1.0, API v1.0, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA ras: gridengine (MCA v1.0, API v1.3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rmaps: round_robin (MCA v1.0, API v1.3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA pls: gridengine (MCA v1.0, API v1.3, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Pak Lui
</span><br>
<span class="quotelev1">&gt;pak.lui_at_[hidden]
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3562.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>In reply to:</strong> <a href="3560.php">Pak Lui: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
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
