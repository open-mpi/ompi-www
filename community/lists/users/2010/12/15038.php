<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 10:35:32 2010" -->
<!-- isoreceived="20101208153532" -->
<!-- sent="Wed, 8 Dec 2010 08:35:23 -0700" -->
<!-- isosent="20101208153523" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="BC8D5815-9693-4195-8BA4-70F7361A8129_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101208100801.14646_at_web001.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 10:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15039.php">Gilbert Grosdidier: "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>In reply to:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Reply:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Reply:</strong> <a href="15042.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know we have said this many times - OMPI made a design decision to poll hard while waiting for messages to arrive to minimize latency.
<br>
<p>If you want to decrease cpu usage, you can use the yield_when_idle option (it will cost you some latency, though) - see ompi_info --param ompi all
<br>
<p>Or don't set affinity and we won't be as aggressive - but you'll lose some performance
<br>
<p>Choice is yours! :-)
<br>
<p>On Dec 8, 2010, at 8:08 AM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on win32 openmpi 1.4.3, I have a slave process that reaches this pseudo-code and then blocks and the CPU usage for that process stays at 25% all the time (I have a quadcore processor). When I set the affinity to 1 of the cores, that core is 100% busy because of my slave process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; MPI_ISEND
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; std::cout&lt;&lt; &quot;about to get broadcast&quot;&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; MPI_Bcast of an integer
</span><br>
<span class="quotelev1">&gt; std::cout&lt;&lt; &quot; broadcast received&quot;&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first printout is seen but not the next which makes me thing the process is inside the MPI_Bcast call. Should the CPU be 100% busy while this call is waiting for the broadcast message to arrive?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas? below the output of ompi-info:
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI 
</span><br>
<span class="quotelev1">&gt;                          Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.4.3
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r23834
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.4.3
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r23834
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.4.3
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r23834
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.4.3
</span><br>
<span class="quotelev1">&gt;                  Prefix: C:/Program Files/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86 Windows-5.1
</span><br>
<span class="quotelev1">&gt;          Configure host: LC12-003-D-055A
</span><br>
<span class="quotelev1">&gt;           Configured by: hicham.mouline
</span><br>
<span class="quotelev1">&gt;           Configured on: 18:07 19/11/2010
</span><br>
<span class="quotelev1">&gt;          Configure host: 
</span><br>
<span class="quotelev1">&gt;                Built by: hicham.mouline
</span><br>
<span class="quotelev1">&gt;                Built on: 18:07 19/11/2010
</span><br>
<span class="quotelev1">&gt;              Built host: 
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;              C compiler: C:/Program Files/Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;                          9.0/VC/bin/cl.exe
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: C:/Program Files/Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;                          9.0/VC/bin/cl.exe
</span><br>
<span class="quotelev1">&gt;            C++ compiler: C:/Program Files/Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;                          9.0/VC/bin/cl.exe
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: C:/Program Files/Microsoft Visual Studio
</span><br>
<span class="quotelev1">&gt;                          9.0/VC/bin/cl.exe
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: CMAKE_Fortran_COMPILER-NOTFOUND
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: none
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler:
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: no
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: no
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: yes  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: none (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: windows (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA timer: windows (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: windows (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA crs: none (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA odls: process (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: ftrm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: process (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
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
<li><strong>Next message:</strong> <a href="15039.php">Gilbert Grosdidier: "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>In reply to:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Reply:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Reply:</strong> <a href="15042.php">Eugene Loh: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
