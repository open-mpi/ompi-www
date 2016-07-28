<?
$subject_val = "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 09:03:37 2008" -->
<!-- isoreceived="20080729130337" -->
<!-- sent="Tue, 29 Jul 2008 09:03:40 -0400" -->
<!-- isosent="20080729130340" -->
<!-- name="Alexander Shabarshin" -->
<!-- email="ashabarshin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communitcation between OpenMPI and ClusterTools" -->
<!-- id="001e01c8f17b$867d2900$0349130a_at_Shabarshin" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="488EFD05.5050409_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communitcation between OpenMPI and ClusterTools<br>
<strong>From:</strong> Alexander Shabarshin (<em>ashabarshin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 09:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6187.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6180.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Yes, you are right - subnets are different, but routes set up correctly and 
<br>
everything like ping, ssh etc. are working OK between them
<br>
<p>Alexander Shabarshin
<br>
<p>P.S. Between Linuxes I even tried different versions of OpenMPI 1.2.4 and 
<br>
1.2.5 - these versions work together correctly, but not with ClusterTools...
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, July 29, 2008 7:20 AM
<br>
Subject: Re: [OMPI users] Communitcation between OpenMPI and ClusterTools
<br>
<p><p><span class="quotelev1">&gt;I have not tested this type of setup so the following disclaimer needs to 
</span><br>
<span class="quotelev1">&gt;be said. These are not exactly the same release number.  They are close but 
</span><br>
<span class="quotelev1">&gt;their code could have something in them that makes them incompatible.
</span><br>
<span class="quotelev1">&gt; One idea comes to mind is whether the two nodes are on the same subnet? 
</span><br>
<span class="quotelev1">&gt; If they are not on the same subnet I think there is a bug in which the TCP 
</span><br>
<span class="quotelev1">&gt; BTL will recuse itself from communications between the two nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Mon, 28 Jul 2008 16:58:57 -0400
</span><br>
<span class="quotelev1">&gt; From: &quot;Alexander Shabarshin&quot; &lt;ashabarshin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Communitcation between OpenMPI and ClusterTools
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;010001c8f0f4$c1ec8990$e7afcea7_at_Shabarshin&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; format=flowed; charset=&quot;koi8-r&quot;;
</span><br>
<span class="quotelev1">&gt; reply-type=original
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to launch the same MPI sample code on Linux PC (Intel processors) 
</span><br>
<span class="quotelev1">&gt; servers with OpenMPI 1.2.5 and SunFire X2100 (AMD Opteron) servers with 
</span><br>
<span class="quotelev1">&gt; Solaris 10 and ClusterTools 7.1 (it looks like OpenMPI 1.2.5) using TCP 
</span><br>
<span class="quotelev1">&gt; through Ethernet. Linux PC with Linux PC work fine. SunFire with SunFire 
</span><br>
<span class="quotelev1">&gt; work fine. But when I launch the same task on Linux AND SunFire I get this 
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 25782 on node 10.0.0.2 exited on 
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it was launched by this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl tcp,self --hostfile mpshosts -np 2 /mpi/sample
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /mpi/sample exists on both platforms compiled properly for each particular 
</span><br>
<span class="quotelev1">&gt; platform
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux machines have replicated path for SUN-like orted launch: 
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC7.1/bin/orted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Servers are pingable from each other. SSH works fine in both directions. 
</span><br>
<span class="quotelev1">&gt; But OpenMPI doesn't work on these servers... How can I make them 
</span><br>
<span class="quotelev1">&gt; understand each other? Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alexander Shabarshin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. This is output of ompi_info diagnostic for ClusterTools 7.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.2.5r16572-ct7.1b003r3852
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.2.5r16572-ct7.1b003r3852
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.2.5r16572-ct7.1b003r3852
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/SUNWhpc/HPC7.1
</span><br>
<span class="quotelev1">&gt; Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt;           Configured by: root
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue Oct 30 17:37:07 EDT 2007
</span><br>
<span class="quotelev1">&gt;          Configure host: burpen-csx10-0
</span><br>
<span class="quotelev1">&gt;                Built by:
</span><br>
<span class="quotelev1">&gt;                Built on: Tue Oct 30 17:52:10 EDT 2007
</span><br>
<span class="quotelev1">&gt;              Built host: burpen-csx10-0
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: cc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: CC
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: f77
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: f95
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;          Thread support: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and output of ompi_info diagnostic for OpenMPI 1.2.5 compiled on Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.2.5
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.2.5
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.2.5
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r16989
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configured by: shaos
</span><br>
<span class="quotelev1">&gt;           Configured on: Thu Jul 24 12:07:38 EDT 2008
</span><br>
<span class="quotelev1">&gt;          Configure host: remote-linux
</span><br>
<span class="quotelev1">&gt;                Built by: shaos
</span><br>
<span class="quotelev1">&gt;                Built on: Thu Jul 24 12:23:40 EDT 2008
</span><br>
<span class="quotelev1">&gt;              Built host: remote-linux
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
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
<span class="quotelev1">&gt;      Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: none
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
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                  MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6187.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6180.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
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
