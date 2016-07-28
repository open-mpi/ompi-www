<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 01:46:17 2006" -->
<!-- isoreceived="20061011054617" -->
<!-- sent="Tue, 10 Oct 2006 22:46:12 -0700" -->
<!-- isosent="20061011054612" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with C++ Binding" -->
<!-- id="C151D334.2A479%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C11DA0D0.25249%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-11 01:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1962.php">Åke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<li><strong>Previous message:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1810.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tobias / all --
<br>
<p>I swear there were further mails about this topic, but perhaps they were
<br>
off-list.  
<br>
<p>The end result is that this has finally been confirmed as an Intel 9.1 C++
<br>
compiler bug.  I don't know exactly what platforms it occurred on, but I was
<br>
eventually able to replicate Tobias' problem on an EM64T machine running
<br>
RHEL4U3.  The problem was that the compiler was not initializing some
<br>
private members of global C++ objects properly (e.g., the underlying
<br>
MPI_Comm in MPI::COMM_WORLD).
<br>
<p>Intel released a new version of the 9.1 C++ compiler last week (Oct 5, 2006,
<br>
build 44).  This new version of the compiler now seems to initialize data
<br>
members properly, and C++ applications (including the trivial &quot;hello world&quot;
<br>
that Tobias ran into problems with) seem to be working fine now.
<br>
<p>So: please upgrade your version of the Intel compilers if you can.
<br>
<p><p><p>On 9/1/06 8:33 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tobias --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am unfortunately unable to replicate your problem.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you confirm that you're getting the &quot;right&quot; mpi.h?  That's the most
</span><br>
<span class="quotelev1">&gt; obvious problem that I can think of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it seems to be right, can you compile your program with debugging enabled
</span><br>
<span class="quotelev1">&gt; and step through it with a debugger?  A trivial program like this does not
</span><br>
<span class="quotelev1">&gt; need to be started via mpirun -- you should be able to just launch it directly
</span><br>
<span class="quotelev1">&gt; in a debugger (e.g., put a breakpoint in main() and step into
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Get_rank()).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI's C++ bindings are layered on top of the C bindings, so you should step
</span><br>
<span class="quotelev1">&gt; into an inlined C++ function that calls MPI_Comm_rank(), and see if the
</span><br>
<span class="quotelev1">&gt; communicator that it was invoked with is, indeed, MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/31/06 2:26 AM, &quot;Tobias Graf&quot; &lt;tgraf_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear List,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to use the C++ binding of OpenMPI, but unfortunately I ran
</span><br>
<span class="quotelev2">&gt;&gt; into a problem. I'm trying to use MPI::COMM_WORLD, but I always get the
</span><br>
<span class="quotelev2">&gt;&gt; following error message when I try to run it (compiling works fine):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code I'm trying to use is:
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; // testcpp.cpp
</span><br>
<span class="quotelev2">&gt;&gt; // mpic++ testcpp.cpp -o testcpp
</span><br>
<span class="quotelev2">&gt;&gt; // mpiexec -np 2 ./testcpp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; using namespace std;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev2">&gt;&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Init ( argc, argv );
</span><br>
<span class="quotelev2">&gt;&gt;     process_id = MPI::COMM_WORLD.Get_rank ();
</span><br>
<span class="quotelev2">&gt;&gt;     process_num = MPI::COMM_WORLD.Get_size ();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A similar program using the normal C interface (also compiled with
</span><br>
<span class="quotelev2">&gt;&gt; mpic++) works fine (File: testc.cpp).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For this example I'm using the Intel C/C++ V9.1 compiler on Linux
</span><br>
<span class="quotelev2">&gt;&gt; (Ubuntu 5.10). I compiled openmpi by myself, so maybe something went
</span><br>
<span class="quotelev2">&gt;&gt; wrong there. I added config.log and also the output from ompi_info. If
</span><br>
<span class="quotelev2">&gt;&gt; necessary, I can also provide a capture of the configuration,
</span><br>
<span class="quotelev2">&gt;&gt; compilation and installation process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tobias
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r11473
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r11473
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r11473
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /opt/libs/openmpi-1.1.1_intel9.1
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: tgraf
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Thu Aug 31 14:52:07 JST 2006
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: tobias
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: tgraf
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Thu Aug 31 15:05:52 JST 2006
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: tobias
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: icc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /opt/intel/cc/9.1.042/bin/icc
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /opt/intel/cc/9.1.042/bin/icpc
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /opt/intel/fc/9.1.036/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: /opt/intel/fc/9.1.036/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev2">&gt;&gt; // testc.cpp
</span><br>
<span class="quotelev2">&gt;&gt; // mpic++ testc.cpp -o testc
</span><br>
<span class="quotelev2">&gt;&gt; // mpiexec -np 2 ./testc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; using namespace std;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev2">&gt;&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;process_num);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;process_id);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; // testcpp.cpp
</span><br>
<span class="quotelev2">&gt;&gt; // mpic++ testcpp.cpp -o testcpp
</span><br>
<span class="quotelev2">&gt;&gt; // mpiexec -np 2 ./testcpp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; using namespace std;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev2">&gt;&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Init ( argc, argv );
</span><br>
<span class="quotelev2">&gt;&gt;     process_id = MPI::COMM_WORLD.Get_rank ();
</span><br>
<span class="quotelev2">&gt;&gt;     process_num = MPI::COMM_WORLD.Get_size ();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
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
<li><strong>Next message:</strong> <a href="1962.php">Åke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<li><strong>Previous message:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1810.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Reply:</strong> <a href="1989.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
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
