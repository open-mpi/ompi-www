<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 04:10:39 2010" -->
<!-- isoreceived="20100126091039" -->
<!-- sent="Tue, 26 Jan 2010 02:10:28 -0700" -->
<!-- isosent="20100126091028" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ..." -->
<!-- id="20100126021028.0430d53b3e916c69cc97ff130928da34.362d157a34.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Windows CMake build problems ..." -->
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
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows%20CMake%20build%20problems%20..."><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-26 04:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11885.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Yeah, that was it. Thanks.</div><div><br></div><div>Charlie ...<br></div>
<blockquote id="replyBlockquote" webmail="1" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;">
<div   >
-------- Original Message --------<br>
Subject: Re: [OMPI users] Windows CMake build problems ...<br>
From: Shiqing Fan &lt;fan@hlrs.de&gt;<br>
Date: Tue, January 26, 2010 1:57 am<br>
To: cjohnson@valverdecomputing.com<br>
Cc: Open MPI Users &lt;users@open-mpi.org&gt;<br>
<br>
<br>
Hi Charlie ,<br>
<br>
Did you run the mpicc command in the Visual Studio Command Prompt? Is it <br>
possible for you to call cl.exe from there? Because it sounds like the <br>
VS compiler was not found.<br>
<br>
<br>
Regards,<br>
Shiqing<br>
<br>
<br>
cjohnson@valverdecomputing.com wrote:<br>
&gt; The mpicc, mpic++ and mpicxx apparently don't work, even though the <br>
&gt; rest of the wrapper commands do:<br>
&gt;<br>
&gt;<br>
&gt; C:\prog\mon\examples&gt;ompi_info<br>
&gt;                  Package: Open MPI Charles Johnson@WORK Distribution<br>
&gt;                 Open MPI: 1.4<br>
&gt;    Open MPI SVN revision: r22285<br>
&gt;    Open MPI release date: Dec 08, 2009<br>
&gt;                 Open RTE: 1.4<br>
&gt;    Open RTE SVN revision: r22285<br>
&gt;    Open RTE release date: Dec 08, 2009<br>
&gt;                     OPAL: 1.4<br>
&gt;        OPAL SVN revision: r22285<br>
&gt;        OPAL release date: Dec 08, 2009<br>
&gt;             Ident string: 1.4<br>
&gt;                   Prefix: C:\Program Files\OpenMPI_v1.4-win32<br>
&gt;  Configured architecture: x86 Windows-6.1<br>
&gt;           Configure host: WORK<br>
&gt;            Configured by: Charles Johnson<br>
&gt;            Configured on: 02:27 AM Sun 01/24/2010<br>
&gt;           Configure host: WORK<br>
&gt;                 Built by: Charles Johnson<br>
&gt;                 Built on: 02:27 AM Sun 01/24/2010<br>
&gt;               Built host: WORK<br>
&gt;               C bindings: yes<br>
&gt;             C++ bindings: yes<br>
&gt;       Fortran77 bindings: no<br>
&gt;       Fortran90 bindings: no<br>
&gt;  Fortran90 bindings size: na<br>
&gt;               C compiler: cl<br>
&gt;      C compiler absolute: cl<br>
&gt;             C++ compiler: cl<br>
&gt;    C++ compiler absolute: cl<br>
&gt;       Fortran77 compiler: CMAKE_Fortran_COMPILER-NOTFOUND<br>
&gt;   Fortran77 compiler abs: none<br>
&gt;       Fortran90 compiler:<br>
&gt;   Fortran90 compiler abs: none<br>
&gt;              C profiling: yes<br>
&gt;            C++ profiling: yes<br>
&gt;      Fortran77 profiling: no<br>
&gt;      Fortran90 profiling: no<br>
&gt;           C++ exceptions: no<br>
&gt;           Thread support: no<br>
&gt;            Sparse Groups: no<br>
&gt;   Internal debug support: no<br>
&gt;      MPI parameter check: runtime<br>
&gt; Memory profiling support: no<br>
&gt; Memory debugging support: no<br>
&gt;          libltdl support: no<br>
&gt;    Heterogeneous support: no<br>
&gt;  mpirun default --prefix: yes<br>
&gt;          MPI I/O support: yes<br>
&gt;        MPI_WTIME support: gettimeofday<br>
&gt; Symbol visibility support: yes<br>
&gt;    FT Checkpoint support: yes  (checkpoint thread: no)<br>
&gt;            MCA backtrace: none (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;            MCA paffinity: windows (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                MCA timer: windows (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;          MCA installdirs: windows (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA crs: none (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                 MCA odls: process (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA rml: ftrm (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA plm: process (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4)<br>
&gt;<br>
&gt; C:\prog\mon\examples&gt;mpirun --help<br>
&gt; mpirun (Open MPI) 1.4<br>
&gt;<br>
&gt; Usage: mpirun [OPTION]...  [PROGRAM]...<br>
&gt; Start the given program using Open RTE<br>
&gt;<br>
&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list<br>
&gt;    --app &lt;arg0&gt;          Provide an appfile; ignore all other command line<br>
&gt;                          options<br>
&gt;    -bind-to-board|--bind-to-board<br>
&gt;                          Whether to bind processes to specific boards<br>
&gt;                          (meaningless on 1 board/node)<br>
&gt;    -bind-to-core|--bind-to-core<br>
&gt;                          Whether to bind processes to specific cores (the<br>
&gt;                          default)<br>
&gt;    -bind-to-none|--bind-to-none<br>
&gt;                          Do not bind processes to cores or sockets<br>
&gt;    -bind-to-socket|--bind-to-socket<br>
&gt;                          Whether to bind processes to sockets<br>
&gt;    -byboard|--byboard    Whether to assign processes round-robin by board<br>
&gt;                          (equivalent to bynode if only 1 board/node)<br>
&gt;    -bycore|--bycore      Alias for byslot<br>
&gt;    -bynode|--bynode      Whether to assign processes round-robin by node<br>
&gt;    -byslot|--byslot      Whether to assign processes round-robin by slot<br>
&gt;                          (the default)<br>
&gt;    -bysocket|--bysocket  Whether to assign processes round-robin by socket<br>
&gt; -c|-np|--np &lt;arg0&gt;       Number of processes to run<br>
&gt;    -cf|--cartofile &lt;arg0&gt;<br>
&gt;                          Provide a cartography file ..........<br>
&gt;<br>
&gt; ... and so on. But when I run mpicc, nothing good happens:<br>
&gt;<br>
&gt; C:\prog\mon\examples&gt;mpicc hello_c.c<br>
&gt; --------------------------------------------------------------------------<br>
&gt; Sorry!  You were supposed to get help about:<br>
&gt;     no-compiler-found<br>
&gt; But I couldn't open the help file:<br>
&gt;     C:\Program <br>
&gt; Files\OpenMPI_v1.4-win32\share\openmpi\help-opal-wrapper.txt: No such <br>
&gt; file or directory.  Sorry!<br>
&gt; --------------------------------------------------------------------------<br>
&gt;<br>
&gt; Looks like the wiring to the VCC compiler is disconnected.<br>
&gt;<br>
&gt; Charlie ...<br>
&gt;<br>
<br>
<br>
-- <br>
--------------------------------------------------------------<br>
Shiqing Fan                          <a target="_blank" href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a><br>
High Performance Computing           Tel.: +49 711 685 87234<br>
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832<br>
Address:Allmandring 30               email: fan@hlrs.de    <br>
70569 Stuttgart<br>
<br>

</div>
</blockquote></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11885.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
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
