<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 10:16:05 2007" -->
<!-- isoreceived="20070806141605" -->
<!-- sent="Mon, 06 Aug 2007 08:15:57 -0600" -->
<!-- isosent="20070806141557" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leaks on solaris" -->
<!-- id="C2DC893D.A58A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46B72B6F.3070106_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-08-06 10:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3812.php">Graham Jenkins: "[OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Reply:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...just to clarify as I think there may be some confusion here.
<br>
<p>Orte-clean will kill any outstanding Open MPI daemons (which should kill
<br>
their local apps) and will cleanup their associated temporary file systems.
<br>
If you are having problems with zombied processes or stale daemons, then
<br>
this will hopefully help (it isn't perfect, but it helps).
<br>
<p>However, orte-clean will not do anything about releasing memory that has
<br>
been &quot;leaked&quot; by Open MPI. We don't have any tools for doing that, I'm
<br>
afraid.
<br>
<p><p>On 8/6/07 8:08 AM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Glenn,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With CT7 there is a utility which can be used to clean up left over
</span><br>
<span class="quotelev1">&gt; cruft from stale  MPI processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % man -M /opt/SUNWhpc/man -s 1 orte-clean
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Achtung: This will remove current running jobs as well. Use of &quot;-v&quot; for
</span><br>
<span class="quotelev1">&gt; verbose recommended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be curious if this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; p.s. orte-clean does not exist in the ompi v1.2 branch, it is in the
</span><br>
<span class="quotelev1">&gt; trunk but  I think there is an issue with it currently
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/5/07 6:35 PM, &quot;Glenn Carver&quot; &lt;Glenn.Carver_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd appreciate some advice and help on this one.  We're having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; serious problems running parallel applications on our cluster.  After
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each batch job finishes, we lose a certain amount of available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory. Additional jobs cause free memory to gradually go down until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machine starts swapping and becomes unusable or hangs. Taking the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine to single user mode doesn't restore the memory, only a reboot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returns all available memory. This happens on all our nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've been doing some testing to try to pin the problems down,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; although we still don't fully know where the problem is coming from.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have ruled out our applications (fortran codes); we see the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behaviour with  Intel's IMB. We know it's not a network issue as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel job running solely on the 4 cores on each node produces the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same effect. All nodes have been brought up to the very latest OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patches and we still see the same problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Details: we're running Solaris 10/06, Sun Studio 12, Clustertools 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (open-mpi 1.2.1) and Sun Gridengine 6.1. Hardware is Sun X4100/X4200.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kernel version: SunOS 5.10 Generic_125101-10 on all nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I read in the release notes that a number of memory leaks were fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the 1.2.1 release but none have been noticed since so I'm not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure where the problem might be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure where that claim came from, but it is certainly not true that
</span><br>
<span class="quotelev2">&gt;&gt; we haven't noticed any leaks since 1.2.1. We know we have quite a few memory
</span><br>
<span class="quotelev2">&gt;&gt; leaks in the code base, many of which are small in themselves but can add up
</span><br>
<span class="quotelev2">&gt;&gt; depending upon exactly what the application does (i.e., which code paths it
</span><br>
<span class="quotelev2">&gt;&gt; travels). Running a simple hello_world app under valgrind will show
</span><br>
<span class="quotelev2">&gt;&gt; significant unreleased memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I doubt you will see much, if any, improvement in 1.2.4. There have probably
</span><br>
<span class="quotelev2">&gt;&gt; been a few patches applied, but a comprehensive effort to eradicate the
</span><br>
<span class="quotelev2">&gt;&gt; problem has not been made. It is something we are trying to cleanup over
</span><br>
<span class="quotelev2">&gt;&gt; time, but hasn't been a crash priority as most OS's do a fairly good job of
</span><br>
<span class="quotelev2">&gt;&gt; cleaning up when the app completes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My next move is to try the very latest release (probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.4pre-release). As CT7 is built with sun studio 11 rather than 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which we're using, I might also try downgrading. At the moment we're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rebooting our cluster nodes every day to keep things going. So any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestions are appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,        Glenn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: burpen-csx10-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: burpen-csx10-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fortran90 bindings size: trivial
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler: f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="3812.php">Graham Jenkins: "[OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3810.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Reply:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
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
