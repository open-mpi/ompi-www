<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 12:43:10 2006" -->
<!-- isoreceived="20060829164310" -->
<!-- sent="Tue, 29 Aug 2006 12:43:00 -0400" -->
<!-- isosent="20060829164300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.1.1" -->
<!-- id="C119E6D4.24A6D%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060829105305.A18744_at_tequila.chem.utoronto.ca" -->
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
<strong>Date:</strong> 2006-08-29 12:43:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This list is a fine place to report bugs.
<br>
<p>The problem that you are running into is that you upgraded Open MPI without
<br>
first removing the prior version (it looks like the prior version of OMPI
<br>
was in the 1.0.x series -- 1.0.2 by your mail).  Since Open MPI is based on
<br>
plugins, you need to ensure to remove all prior plugins before installing
<br>
the new version.  In particular, the mca_pml_teg plugin was removed in the
<br>
1.1 series, so if you install any 1.1.x version over an old 1.0.x install,
<br>
the mca_pml_teg plugin will still be left there and cause the exact problem
<br>
that you're seeing.  Sorry about that!  :-(
<br>
<p>That being said, Los Alamos discovered a problem with the bproc support (see
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/318">https://svn.open-mpi.org/trac/ompi/ticket/318</a>) which will probably force a
<br>
v1.1.2 in the Very Near Future.
<br>
<p><p>On 8/29/06 10:53 AM, &quot;Daniel Gruner&quot; &lt;dgruner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering who to report bugs to...  In short, the version 1.1.1
</span><br>
<span class="quotelev1">&gt; that I downloaded yesterday simply does NOT work.  I have tried it on
</span><br>
<span class="quotelev1">&gt; two different clusters, both running bproc.  One is an i386 cluster
</span><br>
<span class="quotelev1">&gt; with GNU compilers, and the other is an x86_64 (Opteron) cluster with
</span><br>
<span class="quotelev1">&gt; PathScale compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an example of the problems, from the Opteron cluster.  The example
</span><br>
<span class="quotelev1">&gt; is in C++, but the failures are the same for fortran programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------  hello++.cc --------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; // modified to reference the master mpi.h file, to meet the MPI standard spec.
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   //MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; //  int size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt; //  int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;   int size, rank;
</span><br>
<span class="quotelev1">&gt;   int  namelen;
</span><br>
<span class="quotelev1">&gt;   char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Get_processor_name(processor_name,&amp;namelen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   std::cerr &lt;&lt; &quot;Process &quot; &lt;&lt; rank &lt;&lt; &quot; on &quot; &lt;&lt; processor_name &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   std::cout &lt;&lt; &quot;Hello World! I am &quot; &lt;&lt; rank &lt;&lt; &quot; of &quot; &lt;&lt; size &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   //MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are 3 attempts at running the program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sonoma:dgruner{128}&gt; ./hello
</span><br>
<span class="quotelev1">&gt; [sonoma.chem.utoronto.ca:31072] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_pml_teg.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_ptl_base_modules_initialized (ignored)
</span><br>
<span class="quotelev1">&gt; Process 0 on sonoma.chem.utoronto.ca
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:128()
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/lib/libopal.so.0 [0x2a959f7463]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sonoma:dgruner{129}&gt; mpirun -n 1 ./hello
</span><br>
<span class="quotelev1">&gt; [n17:31074] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; [n17:31075] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_pml_teg.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_ptl_base_modules_initialized (ignored)
</span><br>
<span class="quotelev1">&gt; Process 0 on n17
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:128()
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/lib/libopal.so.0 [0x2a95702463]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sonoma:dgruner{130}&gt; mpirun -n 2 ./hello
</span><br>
<span class="quotelev1">&gt; [n17:31078] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; [n17:31080] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_pml_teg.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_ptl_base_modules_initialized (ignored)
</span><br>
<span class="quotelev1">&gt; [n21:31081] mca: base: component_find: unable to open:
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_pml_teg.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; mca_ptl_base_modules_initialized (ignored)
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    IT HANGS, SO I KILLED IT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 31080 on node &quot;17&quot; exited on signal 2.
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:128()
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/lib/libopal.so.0 [0x2a95702463]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Similar problems happen on the i386 cluster, and in both clusters with fortran
</span><br>
<span class="quotelev1">&gt; programs as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the record, version 1.0.2 was running OK on both clusters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 28, 2006 at 03:37:55PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI Team, representing a consortium of research, academic, and
</span><br>
<span class="quotelev2">&gt;&gt; industry partners, is pleased to announce the release of Open MPI version
</span><br>
<span class="quotelev2">&gt;&gt; 1.1.1.  This release is mainly a bug fix release over the the v1.1 release,
</span><br>
<span class="quotelev2">&gt;&gt; but there are few minor new features.  Version 1.1.1 can be downloaded from
</span><br>
<span class="quotelev2">&gt;&gt; the main Open MPI web site or any of its mirrors (mirrors will be updating
</span><br>
<span class="quotelev2">&gt;&gt; shortly). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We strongly recommend that all users upgrade to version 1.1.1 if possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are a list of changes in v1.1.1 as compared to v1.1:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Fix for Fortran string handling in various MPI API functions.
</span><br>
<span class="quotelev2">&gt;&gt; - Fix for Fortran status handling in MPI_WAITSOME and MPI_TESTSOME.
</span><br>
<span class="quotelev2">&gt;&gt; - Various fixes for the XL compilers.
</span><br>
<span class="quotelev2">&gt;&gt; - Automatically disable using mallot() on AIX.
</span><br>
<span class="quotelev2">&gt;&gt; - Memory fixes for 64 bit platforms with registering MCA parameters in
</span><br>
<span class="quotelev2">&gt;&gt;   the self and MX BTL components.
</span><br>
<span class="quotelev2">&gt;&gt; - Fixes for BProc to support oversubscription and changes to the
</span><br>
<span class="quotelev2">&gt;&gt;   mapping algorithm so that mapping processes &quot;by slot&quot; works as
</span><br>
<span class="quotelev2">&gt;&gt;   expected.
</span><br>
<span class="quotelev2">&gt;&gt; - Fixes for various abort cases to not hang and clean up nicely.
</span><br>
<span class="quotelev2">&gt;&gt; - If using the Intel 9.0 v20051201 compiler on an IA64 platform, the
</span><br>
<span class="quotelev2">&gt;&gt;   ptmalloc2 memory manager component will automatically disable
</span><br>
<span class="quotelev2">&gt;&gt;   itself.  Other versions of the Intel compiler on this platform seem
</span><br>
<span class="quotelev2">&gt;&gt;   to work fine (e.g., 9.1).
</span><br>
<span class="quotelev2">&gt;&gt; - Added &quot;host&quot; MPI_Info key to MPI_COMM_SPAWN and
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_COMM_SPAWN_MULTIPLE.
</span><br>
<span class="quotelev2">&gt;&gt; - Add missing C++ methods: MPI::Datatype::Create_indexed_block,
</span><br>
<span class="quotelev2">&gt;&gt;   MPI::Datatype::Create_resized, MPI::Datatype::Get_true_extent.
</span><br>
<span class="quotelev2">&gt;&gt; - Fix OSX linker issue with Fortran bindings.
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed MPI_COMM_SPAWN to start spawning new processes in slots that
</span><br>
<span class="quotelev2">&gt;&gt;   (according to Open MPI) are not already in use.
</span><br>
<span class="quotelev2">&gt;&gt; - Added capability to &quot;mpirun a.out&quot; (without specifying -np) that
</span><br>
<span class="quotelev2">&gt;&gt;   will run on all currently-allocated resources (e.g., within a batch
</span><br>
<span class="quotelev2">&gt;&gt;   job such as SLURM, Torque, etc.).
</span><br>
<span class="quotelev2">&gt;&gt; - Fix a bug with one particular case of MPI_BCAST.  Thanks to Doug
</span><br>
<span class="quotelev2">&gt;&gt;   Gregor for identifying the problem.
</span><br>
<span class="quotelev2">&gt;&gt; - Ensure that the shared memory mapped file is only created when there
</span><br>
<span class="quotelev2">&gt;&gt;   is more than one process on a node.
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed problems with BProc stdin forwarding.
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed problem with MPI_TYPE_INDEXED datatypes.  Thanks to Yven
</span><br>
<span class="quotelev2">&gt;&gt;   Fournier for identifying this problem.
</span><br>
<span class="quotelev2">&gt;&gt; - Fix some thread safety issues in MPI attributes and the openib BTL.
</span><br>
<span class="quotelev2">&gt;&gt; - Fix the BProc allocator to not potentially use the same resources
</span><br>
<span class="quotelev2">&gt;&gt;   across multiple ORTE universes.
</span><br>
<span class="quotelev2">&gt;&gt; - Fix gm resource leak.
</span><br>
<span class="quotelev2">&gt;&gt; - More latency reduction throughout the code base.
</span><br>
<span class="quotelev2">&gt;&gt; - Make the TM PLS (PBS Pro, Torque, Open PBS) more scalable, and fix
</span><br>
<span class="quotelev2">&gt;&gt;   some latent bugs that crept in v1.1.  Thanks to the Thunderbird crew
</span><br>
<span class="quotelev2">&gt;&gt;   at Sandia National Laboratories and Martin Schaffoner for access to
</span><br>
<span class="quotelev2">&gt;&gt;   testing facilities to make this happen.
</span><br>
<span class="quotelev2">&gt;&gt; - Added new command line options to mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;   --nolocal: Do not run any MPI processes on the same node as mpirun
</span><br>
<span class="quotelev2">&gt;&gt;     (compatibility with the OSC mpiexec launcher)
</span><br>
<span class="quotelev2">&gt;&gt;   --nooversubscribe: Abort if the number of processes requested would
</span><br>
<span class="quotelev2">&gt;&gt;     cause oversubscription
</span><br>
<span class="quotelev2">&gt;&gt;   --quiet / -q: do not show spurious status messages
</span><br>
<span class="quotelev2">&gt;&gt;   --version / -V: show the version of Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; - Fix bus error in XGrid process starter.  Thanks to Frank from the
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI user's list for identifying the problem.
</span><br>
<span class="quotelev2">&gt;&gt; - Fix data size mismatches that caused memory errors on PPC64
</span><br>
<span class="quotelev2">&gt;&gt;   platforms during the startup of the openib BTL.
</span><br>
<span class="quotelev2">&gt;&gt; - Allow propagation of SIGUSR1 and SIGUSR2 signals from mpirun to
</span><br>
<span class="quotelev2">&gt;&gt;   back-end MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; - Add missing MPI::Is_finalized() function.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; announce mailing list
</span><br>
<span class="quotelev2">&gt;&gt; announce_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>
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
<li><strong>Next message:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
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
