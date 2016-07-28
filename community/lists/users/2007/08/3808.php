<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 08:48:49 2007" -->
<!-- isoreceived="20070806124849" -->
<!-- sent="Mon, 06 Aug 2007 06:48:00 -0600" -->
<!-- isosent="20070806124800" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leaks on solaris" -->
<!-- id="C2DC74A0.A578%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="p05111b01c2dc16339fa9_at_[10.0.1.6]" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 08:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3809.php">Sven Stork: "[OMPI users] using google-perftools for hunting memory leaks"</a>
<li><strong>Previous message:</strong> <a href="3807.php">Glenn Carver: "[OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3807.php">Glenn Carver: "[OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Reply:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/5/07 6:35 PM, &quot;Glenn Carver&quot; &lt;Glenn.Carver_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'd appreciate some advice and help on this one.  We're having
</span><br>
<span class="quotelev1">&gt; serious problems running parallel applications on our cluster.  After
</span><br>
<span class="quotelev1">&gt; each batch job finishes, we lose a certain amount of available
</span><br>
<span class="quotelev1">&gt; memory. Additional jobs cause free memory to gradually go down until
</span><br>
<span class="quotelev1">&gt; the machine starts swapping and becomes unusable or hangs. Taking the
</span><br>
<span class="quotelev1">&gt; machine to single user mode doesn't restore the memory, only a reboot
</span><br>
<span class="quotelev1">&gt; returns all available memory. This happens on all our nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've been doing some testing to try to pin the problems down,
</span><br>
<span class="quotelev1">&gt; although we still don't fully know where the problem is coming from.
</span><br>
<span class="quotelev1">&gt; We have ruled out our applications (fortran codes); we see the same
</span><br>
<span class="quotelev1">&gt; behaviour with  Intel's IMB. We know it's not a network issue as a
</span><br>
<span class="quotelev1">&gt; parallel job running solely on the 4 cores on each node produces the
</span><br>
<span class="quotelev1">&gt; same effect. All nodes have been brought up to the very latest OS
</span><br>
<span class="quotelev1">&gt; patches and we still see the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Details: we're running Solaris 10/06, Sun Studio 12, Clustertools 7
</span><br>
<span class="quotelev1">&gt; (open-mpi 1.2.1) and Sun Gridengine 6.1. Hardware is Sun X4100/X4200.
</span><br>
<span class="quotelev1">&gt; Kernel version: SunOS 5.10 Generic_125101-10 on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read in the release notes that a number of memory leaks were fixed
</span><br>
<span class="quotelev1">&gt; for the 1.2.1 release but none have been noticed since so I'm not
</span><br>
<span class="quotelev1">&gt; sure where the problem might be.
</span><br>
<p>I'm not sure where that claim came from, but it is certainly not true that
<br>
we haven't noticed any leaks since 1.2.1. We know we have quite a few memory
<br>
leaks in the code base, many of which are small in themselves but can add up
<br>
depending upon exactly what the application does (i.e., which code paths it
<br>
travels). Running a simple hello_world app under valgrind will show
<br>
significant unreleased memory.
<br>
<p>I doubt you will see much, if any, improvement in 1.2.4. There have probably
<br>
been a few patches applied, but a comprehensive effort to eradicate the
<br>
problem has not been made. It is something we are trying to cleanup over
<br>
time, but hasn't been a crash priority as most OS's do a fairly good job of
<br>
cleaning up when the app completes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My next move is to try the very latest release (probably
</span><br>
<span class="quotelev1">&gt; 1.2.4pre-release). As CT7 is built with sun studio 11 rather than 12
</span><br>
<span class="quotelev1">&gt; which we're using, I might also try downgrading. At the moment we're
</span><br>
<span class="quotelev1">&gt; rebooting our cluster nodes every day to keep things going. So any
</span><br>
<span class="quotelev1">&gt; suggestions are appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,        Glenn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info
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
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
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
<li><strong>Next message:</strong> <a href="3809.php">Sven Stork: "[OMPI users] using google-perftools for hunting memory leaks"</a>
<li><strong>Previous message:</strong> <a href="3807.php">Glenn Carver: "[OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3807.php">Glenn Carver: "[OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Reply:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
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
