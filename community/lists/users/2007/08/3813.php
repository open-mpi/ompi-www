<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 19:53:56 2007" -->
<!-- isoreceived="20070806235356" -->
<!-- sent="Mon, 6 Aug 2007 17:53:48 -0600" -->
<!-- isosent="20070806235348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory leaks on solaris" -->
<!-- id="49E7FCB1-B5BA-45DD-8E87-F16383BF4F40_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2DC893D.A58A%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 19:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3812.php">Graham Jenkins: "[OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>In reply to:</strong> <a href="3811.php">Ralph H Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3816.php">Ralph Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Reply:</strong> <a href="3816.php">Ralph Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unless there's something weird going on in the Solaris kernel, the  
<br>
only memory that we should be leaking after MPI processes exit would  
<br>
be shared memory files that are [somehow] not getting removed properly.
<br>
<p>Right?
<br>
<p><p>On Aug 6, 2007, at 8:15 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...just to clarify as I think there may be some confusion here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Orte-clean will kill any outstanding Open MPI daemons (which should  
</span><br>
<span class="quotelev1">&gt; kill
</span><br>
<span class="quotelev1">&gt; their local apps) and will cleanup their associated temporary file  
</span><br>
<span class="quotelev1">&gt; systems.
</span><br>
<span class="quotelev1">&gt; If you are having problems with zombied processes or stale daemons,  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; this will hopefully help (it isn't perfect, but it helps).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, orte-clean will not do anything about releasing memory  
</span><br>
<span class="quotelev1">&gt; that has
</span><br>
<span class="quotelev1">&gt; been &quot;leaked&quot; by Open MPI. We don't have any tools for doing that, I'm
</span><br>
<span class="quotelev1">&gt; afraid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/6/07 8:08 AM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Glenn,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With CT7 there is a utility which can be used to clean up left over
</span><br>
<span class="quotelev2">&gt;&gt; cruft from stale  MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % man -M /opt/SUNWhpc/man -s 1 orte-clean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Achtung: This will remove current running jobs as well. Use of &quot;- 
</span><br>
<span class="quotelev2">&gt;&gt; v&quot; for
</span><br>
<span class="quotelev2">&gt;&gt; verbose recommended.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be curious if this helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -DON
</span><br>
<span class="quotelev2">&gt;&gt; p.s. orte-clean does not exist in the ompi v1.2 branch, it is in the
</span><br>
<span class="quotelev2">&gt;&gt; trunk but  I think there is an issue with it currently
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/5/07 6:35 PM, &quot;Glenn Carver&quot; &lt;Glenn.Carver_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd appreciate some advice and help on this one.  We're having
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; serious problems running parallel applications on our cluster.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each batch job finishes, we lose a certain amount of available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory. Additional jobs cause free memory to gradually go down  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; until
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the machine starts swapping and becomes unusable or hangs.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Taking the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine to single user mode doesn't restore the memory, only a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reboot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returns all available memory. This happens on all our nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've been doing some testing to try to pin the problems down,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; although we still don't fully know where the problem is coming  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have ruled out our applications (fortran codes); we see the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behaviour with  Intel's IMB. We know it's not a network issue as a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parallel job running solely on the 4 cores on each node produces  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same effect. All nodes have been brought up to the very latest OS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; patches and we still see the same problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Details: we're running Solaris 10/06, Sun Studio 12, Clustertools 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (open-mpi 1.2.1) and Sun Gridengine 6.1. Hardware is Sun X4100/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; X4200.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kernel version: SunOS 5.10 Generic_125101-10 on all nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I read in the release notes that a number of memory leaks were  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fixed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the 1.2.1 release but none have been noticed since so I'm not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sure where the problem might be.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure where that claim came from, but it is certainly not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we haven't noticed any leaks since 1.2.1. We know we have quite a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leaks in the code base, many of which are small in themselves but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can add up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depending upon exactly what the application does (i.e., which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code paths it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; travels). Running a simple hello_world app under valgrind will show
</span><br>
<span class="quotelev3">&gt;&gt;&gt; significant unreleased memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I doubt you will see much, if any, improvement in 1.2.4. There  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been a few patches applied, but a comprehensive effort to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eradicate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem has not been made. It is something we are trying to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cleanup over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time, but hasn't been a crash priority as most OS's do a fairly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good job of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cleaning up when the app completes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My next move is to try the very latest release (probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.4pre-release). As CT7 is built with sun studio 11 rather  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which we're using, I might also try downgrading. At the moment  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rebooting our cluster nodes every day to keep things going. So any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggestions are appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,        Glenn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open MPI SVN revision: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Open RTE SVN revision: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        OPAL SVN revision: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Configured architecture: i386-pc-solaris2.10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Configured on: Fri Mar 30 13:40:12 EDT 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Configure host: burpen-csx10-0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Built on: Fri Mar 30 13:57:25 EDT 2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Built host: burpen-csx10-0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Fortran90 bindings size: trivial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               C compiler: cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             C++ compiler: CC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran77 compiler: f77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Thread support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA mpool: udapl (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.2.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3812.php">Graham Jenkins: "[OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>In reply to:</strong> <a href="3811.php">Ralph H Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3816.php">Ralph Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Reply:</strong> <a href="3816.php">Ralph Castain: "Re: [OMPI users] memory leaks on solaris"</a>
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
