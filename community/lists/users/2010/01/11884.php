<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 03:57:36 2010" -->
<!-- isoreceived="20100126085736" -->
<!-- sent="Tue, 26 Jan 2010 09:57:35 +0100" -->
<!-- isosent="20100126085735" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ..." -->
<!-- id="4B5EAE7F.5080508_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100126014351.0430d53b3e916c69cc97ff130928da34.6a2225f321.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows CMake build problems ...<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 03:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11885.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11883.php">cjohnson_at_[hidden]: "[OMPI users]  Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11883.php">cjohnson_at_[hidden]: "[OMPI users]  Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charlie ,
<br>
<p>Did you run the mpicc command in the Visual Studio Command Prompt? Is it 
<br>
possible for you to call cl.exe from there? Because it sounds like the 
<br>
VS compiler was not found.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; The mpicc, mpic++ and mpicxx apparently don't work, even though the 
</span><br>
<span class="quotelev1">&gt; rest of the wrapper commands do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\examples&gt;ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI Charles Johnson_at_WORK Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r22285
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Dec 08, 2009
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: C:\Program Files\OpenMPI_v1.4-win32
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86 Windows-6.1
</span><br>
<span class="quotelev1">&gt;           Configure host: WORK
</span><br>
<span class="quotelev1">&gt;            Configured by: Charles Johnson
</span><br>
<span class="quotelev1">&gt;            Configured on: 02:27 AM Sun 01/24/2010
</span><br>
<span class="quotelev1">&gt;           Configure host: WORK
</span><br>
<span class="quotelev1">&gt;                 Built by: Charles Johnson
</span><br>
<span class="quotelev1">&gt;                 Built on: 02:27 AM Sun 01/24/2010
</span><br>
<span class="quotelev1">&gt;               Built host: WORK
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: cl
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: cl
</span><br>
<span class="quotelev1">&gt;             C++ compiler: cl
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: cl
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: CMAKE_Fortran_COMPILER-NOTFOUND
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: none
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler:
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: no
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: no
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: yes  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: none (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: windows (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA timer: windows (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: windows (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: process (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: ftrm (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: process (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\examples&gt;mpirun --help
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usage: mpirun [OPTION]...  [PROGRAM]...
</span><br>
<span class="quotelev1">&gt; Start the given program using Open RTE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt;    --app &lt;arg0&gt;          Provide an appfile; ignore all other command line
</span><br>
<span class="quotelev1">&gt;                          options
</span><br>
<span class="quotelev1">&gt;    -bind-to-board|--bind-to-board
</span><br>
<span class="quotelev1">&gt;                          Whether to bind processes to specific boards
</span><br>
<span class="quotelev1">&gt;                          (meaningless on 1 board/node)
</span><br>
<span class="quotelev1">&gt;    -bind-to-core|--bind-to-core
</span><br>
<span class="quotelev1">&gt;                          Whether to bind processes to specific cores (the
</span><br>
<span class="quotelev1">&gt;                          default)
</span><br>
<span class="quotelev1">&gt;    -bind-to-none|--bind-to-none
</span><br>
<span class="quotelev1">&gt;                          Do not bind processes to cores or sockets
</span><br>
<span class="quotelev1">&gt;    -bind-to-socket|--bind-to-socket
</span><br>
<span class="quotelev1">&gt;                          Whether to bind processes to sockets
</span><br>
<span class="quotelev1">&gt;    -byboard|--byboard    Whether to assign processes round-robin by board
</span><br>
<span class="quotelev1">&gt;                          (equivalent to bynode if only 1 board/node)
</span><br>
<span class="quotelev1">&gt;    -bycore|--bycore      Alias for byslot
</span><br>
<span class="quotelev1">&gt;    -bynode|--bynode      Whether to assign processes round-robin by node
</span><br>
<span class="quotelev1">&gt;    -byslot|--byslot      Whether to assign processes round-robin by slot
</span><br>
<span class="quotelev1">&gt;                          (the default)
</span><br>
<span class="quotelev1">&gt;    -bysocket|--bysocket  Whether to assign processes round-robin by socket
</span><br>
<span class="quotelev1">&gt; -c|-np|--np &lt;arg0&gt;       Number of processes to run
</span><br>
<span class="quotelev1">&gt;    -cf|--cartofile &lt;arg0&gt;
</span><br>
<span class="quotelev1">&gt;                          Provide a cartography file ..........
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... and so on. But when I run mpicc, nothing good happens:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\examples&gt;mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     no-compiler-found
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;     C:\Program 
</span><br>
<span class="quotelev1">&gt; Files\OpenMPI_v1.4-win32\share\openmpi\help-opal-wrapper.txt: No such 
</span><br>
<span class="quotelev1">&gt; file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like the wiring to the VCC compiler is disconnected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charlie ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11885.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11883.php">cjohnson_at_[hidden]: "[OMPI users]  Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11883.php">cjohnson_at_[hidden]: "[OMPI users]  Windows CMake build problems ..."</a>
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
