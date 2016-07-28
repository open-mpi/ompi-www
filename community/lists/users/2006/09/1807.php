<?
$subject_val = "Re: [OMPI users] Problem with C++ Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  1 08:33:34 2006" -->
<!-- isoreceived="20060901123334" -->
<!-- sent="Fri, 01 Sep 2006 08:33:20 -0400" -->
<!-- isosent="20060901123320" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with C++ Binding" -->
<!-- id="C11DA0D0.25249%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44F68113.8020304_at_hydra.t.u-tokyo.ac.jp" -->
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
<strong>Date:</strong> 2006-09-01 08:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1808.php">Wang,  Peng: "[OMPI users] question about passing MPI communicator"</a>
<li><strong>Previous message:</strong> <a href="1806.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>In reply to:</strong> <a href="../../2006/08/1802.php">Tobias Graf: "[OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1810.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="1810.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="../../2006/10/1958.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tobias --
<br>
<p>I am unfortunately unable to replicate your problem.  :-(
<br>
<p>Can you confirm that you're getting the &quot;right&quot; mpi.h?  That's the most
<br>
obvious problem that I can think of.
<br>
<p>If it seems to be right, can you compile your program with debugging enabled
<br>
and step through it with a debugger?  A trivial program like this does not
<br>
need to be started via mpirun -- you should be able to just launch it
<br>
directly in a debugger (e.g., put a breakpoint in main() and step into
<br>
MPI::COMM_WORLD.Get_rank()).
<br>
<p>OMPI's C++ bindings are layered on top of the C bindings, so you should step
<br>
into an inlined C++ function that calls MPI_Comm_rank(), and see if the
<br>
communicator that it was invoked with is, indeed, MPI_COMM_WORLD.
<br>
<p><p>On 8/31/06 2:26 AM, &quot;Tobias Graf&quot; &lt;tgraf_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was trying to use the C++ binding of OpenMPI, but unfortunately I ran
</span><br>
<span class="quotelev1">&gt; into a problem. I'm trying to use MPI::COMM_WORLD, but I always get the
</span><br>
<span class="quotelev1">&gt; following error message when I try to run it (compiling works fine):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed with errno=104
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code I'm trying to use is:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; // testcpp.cpp
</span><br>
<span class="quotelev1">&gt; // mpic++ testcpp.cpp -o testcpp
</span><br>
<span class="quotelev1">&gt; // mpiexec -np 2 ./testcpp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev1">&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI::Init ( argc, argv );
</span><br>
<span class="quotelev1">&gt;     process_id = MPI::COMM_WORLD.Get_rank ();
</span><br>
<span class="quotelev1">&gt;     process_num = MPI::COMM_WORLD.Get_size ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A similar program using the normal C interface (also compiled with
</span><br>
<span class="quotelev1">&gt; mpic++) works fine (File: testc.cpp).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For this example I'm using the Intel C/C++ V9.1 compiler on Linux
</span><br>
<span class="quotelev1">&gt; (Ubuntu 5.10). I compiled openmpi by myself, so maybe something went
</span><br>
<span class="quotelev1">&gt; wrong there. I added config.log and also the output from ompi_info. If
</span><br>
<span class="quotelev1">&gt; necessary, I can also provide a capture of the configuration,
</span><br>
<span class="quotelev1">&gt; compilation and installation process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Tobias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r11473
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r11473
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r11473
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/libs/openmpi-1.1.1_intel9.1
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: tgraf
</span><br>
<span class="quotelev1">&gt;            Configured on: Thu Aug 31 14:52:07 JST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: tobias
</span><br>
<span class="quotelev1">&gt;                 Built by: tgraf
</span><br>
<span class="quotelev1">&gt;                 Built on: Thu Aug 31 15:05:52 JST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: tobias
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
<span class="quotelev1">&gt;      C compiler absolute: /opt/intel/cc/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/intel/cc/9.1.042/bin/icpc
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/fc/9.1.036/bin/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/fc/9.1.036/bin/ifort
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
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt; // testc.cpp
</span><br>
<span class="quotelev1">&gt; // mpic++ testc.cpp -o testc
</span><br>
<span class="quotelev1">&gt; // mpiexec -np 2 ./testc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev1">&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;process_num);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;process_id);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; // testcpp.cpp
</span><br>
<span class="quotelev1">&gt; // mpic++ testcpp.cpp -o testcpp
</span><br>
<span class="quotelev1">&gt; // mpiexec -np 2 ./testcpp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev1">&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     MPI::Init ( argc, argv );
</span><br>
<span class="quotelev1">&gt;     process_id = MPI::COMM_WORLD.Get_rank ();
</span><br>
<span class="quotelev1">&gt;     process_num = MPI::COMM_WORLD.Get_size ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; }
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1808.php">Wang,  Peng: "[OMPI users] question about passing MPI communicator"</a>
<li><strong>Previous message:</strong> <a href="1806.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>In reply to:</strong> <a href="../../2006/08/1802.php">Tobias Graf: "[OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1810.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="1810.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="../../2006/10/1958.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
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
