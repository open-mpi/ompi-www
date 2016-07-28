<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 10:59:29 2006" -->
<!-- isoreceived="20061016145929" -->
<!-- sent="Mon, 16 Oct 2006 10:58:55 -0400" -->
<!-- isosent="20061016145855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with C++ Binding" -->
<!-- id="F2521849-1AC3-4088-B03A-C0B17385FE57_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C151D334.2A479%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-16 10:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Previous message:</strong> <a href="1988.php">Maestas, Christopher Daniel: "[OMPI users] Question on mpi collectives"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correction.  :-(
<br>
<p>Upgrading the version of the Intel compiler worked on one platform  
<br>
that I tested on, but not others.  So it looks like this is still an  
<br>
open issue.
<br>
<p><p>On Oct 11, 2006, at 1:46 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Tobias / all --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I swear there were further mails about this topic, but perhaps they  
</span><br>
<span class="quotelev1">&gt; were
</span><br>
<span class="quotelev1">&gt; off-list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The end result is that this has finally been confirmed as an Intel  
</span><br>
<span class="quotelev1">&gt; 9.1 C++
</span><br>
<span class="quotelev1">&gt; compiler bug.  I don't know exactly what platforms it occurred on,  
</span><br>
<span class="quotelev1">&gt; but I was
</span><br>
<span class="quotelev1">&gt; eventually able to replicate Tobias' problem on an EM64T machine  
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; RHEL4U3.  The problem was that the compiler was not initializing some
</span><br>
<span class="quotelev1">&gt; private members of global C++ objects properly (e.g., the underlying
</span><br>
<span class="quotelev1">&gt; MPI_Comm in MPI::COMM_WORLD).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel released a new version of the 9.1 C++ compiler last week (Oct  
</span><br>
<span class="quotelev1">&gt; 5, 2006,
</span><br>
<span class="quotelev1">&gt; build 44).  This new version of the compiler now seems to  
</span><br>
<span class="quotelev1">&gt; initialize data
</span><br>
<span class="quotelev1">&gt; members properly, and C++ applications (including the trivial  
</span><br>
<span class="quotelev1">&gt; &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt; that Tobias ran into problems with) seem to be working fine now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So: please upgrade your version of the Intel compilers if you can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/1/06 8:33 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tobias --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am unfortunately unable to replicate your problem.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you confirm that you're getting the &quot;right&quot; mpi.h?  That's the  
</span><br>
<span class="quotelev2">&gt;&gt; most
</span><br>
<span class="quotelev2">&gt;&gt; obvious problem that I can think of.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If it seems to be right, can you compile your program with  
</span><br>
<span class="quotelev2">&gt;&gt; debugging enabled
</span><br>
<span class="quotelev2">&gt;&gt; and step through it with a debugger?  A trivial program like this  
</span><br>
<span class="quotelev2">&gt;&gt; does not
</span><br>
<span class="quotelev2">&gt;&gt; need to be started via mpirun -- you should be able to just launch  
</span><br>
<span class="quotelev2">&gt;&gt; it directly
</span><br>
<span class="quotelev2">&gt;&gt; in a debugger (e.g., put a breakpoint in main() and step into
</span><br>
<span class="quotelev2">&gt;&gt; MPI::COMM_WORLD.Get_rank()).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI's C++ bindings are layered on top of the C bindings, so you  
</span><br>
<span class="quotelev2">&gt;&gt; should step
</span><br>
<span class="quotelev2">&gt;&gt; into an inlined C++ function that calls MPI_Comm_rank(), and see  
</span><br>
<span class="quotelev2">&gt;&gt; if the
</span><br>
<span class="quotelev2">&gt;&gt; communicator that it was invoked with is, indeed, MPI_COMM_WORLD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/31/06 2:26 AM, &quot;Tobias Graf&quot; &lt;tgraf_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear List,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was trying to use the C++ binding of OpenMPI, but unfortunately  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into a problem. I'm trying to use MPI::COMM_WORLD, but I always  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error message when I try to run it (compiling works fine):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed with errno=104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code I'm trying to use is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // testcpp.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpic++ testcpp.cpp -o testcpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpiexec -np 2 ./testcpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Init ( argc, argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     process_id = MPI::COMM_WORLD.Get_rank ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     process_num = MPI::COMM_WORLD.Get_size ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A similar program using the normal C interface (also compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++) works fine (File: testc.cpp).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For this example I'm using the Intel C/C++ V9.1 compiler on Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Ubuntu 5.10). I compiled openmpi by myself, so maybe something went
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong there. I added config.log and also the output from  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info. If
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary, I can also provide a capture of the configuration,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation and installation process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tobias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: r11473
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r11473
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r11473
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /opt/libs/openmpi-1.1.1_intel9.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: tgraf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Thu Aug 31 14:52:07 JST 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: tobias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: tgraf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Thu Aug 31 15:05:52 JST 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: tobias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /opt/intel/cc/9.1.042/bin/icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /opt/intel/cc/9.1.042/bin/icpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs: /opt/intel/fc/9.1.036/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs: /opt/intel/fc/9.1.036/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (mpi: no, progress: no)
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
<span class="quotelev3">&gt;&gt;&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // testc.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpic++ testc.cpp -o testc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpiexec -np 2 ./testc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;process_num);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;process_id);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // testcpp.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpic++ testcpp.cpp -o testcpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpiexec -np 2 ./testcpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int process_id;   // rank of process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int process_num;  // total number of processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Init ( argc, argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     process_id = MPI::COMM_WORLD.Get_rank ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     process_num = MPI::COMM_WORLD.Get_size ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cout &lt;&lt; process_id+1 &lt;&lt; &quot;/&quot; &lt;&lt; process_num &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI::Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Previous message:</strong> <a href="1988.php">Maestas, Christopher Daniel: "[OMPI users] Question on mpi collectives"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
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
