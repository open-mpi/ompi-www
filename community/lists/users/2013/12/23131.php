<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 07:44:54 2013" -->
<!-- isoreceived="20131203124454" -->
<!-- sent="Tue, 3 Dec 2013 07:44:52 -0500" -->
<!-- isosent="20131203124452" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="904DCD83-033D-4A82-88D6-93BEE039B1BF_at_fmglobal.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="75F1D7D7-3979-474C-9701-2016C152E3FC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 07:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23130.php">Ivan Borisov: "[OMPI users] Several questions about new Java bindings"</a>
<li><strong>In reply to:</strong> <a href="23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using the latest nightly snapshot (1.7.4) and only Apple compilers/tools (no macports), I configure/build with the following:
<br>
<p>./configure --prefix=/opt/trunk/apple-only-1.7.4 --enable-shared --disable-static --enable-debug --disable-io-romio --enable-contrib-no-build=vt,libtrace --enable-mpirun-prefix-by-default
<br>
make all
<br>
make install
<br>
export PATH=/opt/trunk/apple-only-1.7.4/bin/:$PATH
<br>
export LD_LIBRARY_PATH=/opt/trunk/apple-only-1.7.4/lib:$LD_LIBRARY_PATH
<br>
export DYLD_LIBRARY_PATH=/opt/trunk/apple-only-1.7.4/lib:$DYLD_LIBRARY_PATH
<br>
cd examples
<br>
make all
<br>
mpirun -v -np 2 ./hello_cxx
<br>
<p>Here&#146;s the stack trace for one of the hanging process:
<br>
<p>(lldb) bt
<br>
* thread #1: tid = 0x57052, 0x00007fff8c991a3a libsystem_kernel.dylib`__semwait_signal + 10, queue = 'com.apple.main-thread, stop reason = signal SIGSTOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #0: 0x00007fff8c991a3a libsystem_kernel.dylib`__semwait_signal + 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #1: 0x00007fff8ade4e60 libsystem_c.dylib`nanosleep + 200
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #2: 0x0000000100be98e3 libopen-rte.6.dylib`orte_routed_base_register_sync(setup=true) + 2435 at routed_base_fns.c:344
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #3: 0x0000000100ecc3a7 mca_routed_binomial.so`init_routes(job=1305542657, ndat=0x0000000000000000) + 2759 at routed_binomial.c:708
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #4: 0x0000000100b9e84d libopen-rte.6.dylib`orte_ess_base_app_setup(db_restrict_local=true) + 2109 at ess_base_std_app.c:233
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #5: 0x0000000100e3a442 mca_ess_env.so`rte_init + 418 at ess_env_module.c:146
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #6: 0x0000000100b59cfe libopen-rte.6.dylib`orte_init(pargc=0x0000000000000000, pargv=0x0000000000000000, flags=32) + 718 at orte_init.c:158
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #7: 0x00000001008bd3c8 libmpi.1.dylib`ompi_mpi_init(argc=0, argv=0x0000000000000000, requested=0, provided=0x00007fff5f3cd370) + 616 at ompi_mpi_init.c:451
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #8: 0x000000010090b5c3 libmpi.1.dylib`MPI_Init(argc=0x0000000000000000, argv=0x0000000000000000) + 515 at init.c:86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #9: 0x0000000100833a1d hello_cxx`MPI::Init() + 29 at functions_inln.h:128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #10: 0x00000001008332ac hello_cxx`main(argc=1, argv=0x00007fff5f3cd550) + 44 at hello_cxx.cc:18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #11: 0x00007fff8d5df5fd libdyld.dylib`start + 1
<br>
<p>Karl
<br>
<p><p>On Dec 2, 2013, at 2:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah -- sorry, I missed this mail before I replied to the other thread (OS X Mail threaded them separately somehow...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to ask you to dive deeper, but can you find out where in orte_ess.init() it's failing?  orte_ess.init is actually a function pointer; it's a jump-off point into a dlopen'ed plugin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 11:53 AM, &quot;Meredith, Karl&quot; &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Digging a little deeper by running the code in the lldb debugger, I found that the stall occurs in a call to init_orte from ompi_mpi_init.c:
</span><br>
<span class="quotelev2">&gt;&gt;  356     /* Setup ORTE - note that we are an MPI process  */
</span><br>
<span class="quotelev2">&gt;&gt;  357     if (ORTE_SUCCESS != (ret = orte_init(NULL, NULL, ORTE_PROC_MPI))) {
</span><br>
<span class="quotelev2">&gt;&gt;  358         error = &quot;ompi_mpi_init: orte_init failed&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;  359         goto error;
</span><br>
<span class="quotelev2">&gt;&gt;  360     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code never returns from orte_init.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It gets stuck in orte_ess.init() called from orte_init.c:
</span><br>
<span class="quotelev2">&gt;&gt;  126     /* initialize the RTE for this environment */
</span><br>
<span class="quotelev2">&gt;&gt;  127     if (ORTE_SUCCESS != (ret = orte_ess.init())) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I step through this orte_ess_init in the lldb debugger, I actually get some output from the code (no output if not using the debugger and stepping through):
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 9:20 AM, Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#146;s the back trace from lldb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ )ps -elf | grep  hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1042653210 45231 45230     4006   0  31  0  2448976   2148 -      S+                  0 ttys002    0:00.01 hello_cxx         9:07AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1042653210 45232 45230     4006   0  31  0  2457168   2156 -      S+                  0 ttys002    0:00.04 hello_cxx         9:07AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (meredithk_at_meredithk-mac)-(09:15 AM Mon Nov 25)-(~/tools/openmpi-1.6.5/examples)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ )lldb -p 45231
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attaching to process with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  process attach -p 45231
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 45231 stopped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable module set to &quot;/Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Architecture set to: x86_64-apple-macosx.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (lldb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * thread #1: tid = 0x168535, 0x00007fff8c1859aa libsystem_kernel.dylib`select$DARWIN_EXTSN + 10, queue = 'com.apple.main-thread, stop reason = signal SIGSTOP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  frame #0: 0x00007fff8c1859aa libsystem_kernel.dylib`select$DARWIN_EXTSN + 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  frame #1: 0x0000000106b73ea0 libmpi.1.dylib`select_dispatch(base=0x00007f84c3c0b430, arg=0x00007f84c3c0b3e0, tv=0x00007fff5924ca70) + 80 at select.c:174
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  frame #2: 0x0000000106b3eb0f libmpi.1.dylib`opal_event_base_loop(base=0x00007f84c3c0b430, flags=5) + 415 at event.c:838
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both processors are at this state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#146;s the output from otool -L ./hello_cxx:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ )otool -L ./hello_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./hello_cxx:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib (compatibility version 2.0.0, current version 2.2.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility version 2.0.0, current version 2.8.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version 7.0.0, current version 7.18.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0, current version 1.0.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 25, 2013, at 9:14 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mac OS X 1.9 dropped support for gdb. Please report the output of lldb instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, can you run &#147;otool -L ./hello_cxx&#148; and report the output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 25, 2013, at 15:09 , Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do have DYLD_LIBRARY_PATH set to the same paths as LD_LIBRARY_PATH.  This does not resolve the problem.  The code still hangs on MPI::Init().
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another thing I tried is I recompiled openmpi with the debug flags activated:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=$HOME/tools/openmpi --enable-debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make install
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then, I attached to the running process using gdb.  I tried to do a back trace and see where it was hanging up at, but all I got was this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Attaching to process 45231
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reading symbols from /Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx...Reading symbols from /Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx.dSYM/Contents/Resources/DWARF/hello_cxx...done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0x00007fff8c1859aa in ?? ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #0  0x00007fff8c1859aa in ?? ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #1  0x0000000106b73ea0 in ?? ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #2  0x706d6e65706f2f2f in ?? ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3  0x0000000000000001 in ?? ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This output from gdb was not terribly helpful to me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 25, 2013, at 8:30 AM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&lt;mailto:sdhammo_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have occasionally had a problem like this when we set LD_LIBRARY_PATH only. On OSX you may need to set DYLD_LIBRARY_PATH instead ( set it to the same lib directory )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you try that and see if it resolves the problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Remote Connection
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Meredith, Karl [karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Monday, November 25, 2013 06:25 AM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: [EXTERNAL] Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do have these two environment variables set:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH=/Users/meredithk/tools/openmpi/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Running mpirun seems to work fine with a simple command, like hostname:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ )mpirun -n 2 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to run the simple hello_cxx example from the openmpi distribution, compiled as such:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It compiles fine, without warning or error.  However, when I go to run the example, it stalls on the MPI::Init() command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 1 hello_cxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It never errors out or crashes.  It simply hangs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using the same mpic++ and mpirun version:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ )which mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ )which mpic++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpic++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not quite sure what else to check.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Strange - I run on Mavericks now without problem. Can you run &quot;mpirun -n 1 hostname&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You also might want to check your PATH and LD_LIBRARY_PATH to ensure you have the prefix where you installed OMPI 1.6.5 at the front. Mac distributes a very old version of OMPI with its software and you don't want to pick it up by mistake.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8 to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with gcc 4.8 (gcc installed from macports).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi compiled and installed without error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, when I try to run any of the example test cases, the code gets stuck inside the first MPI::Init() call and never returns.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any thoughts on what might be going wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The same install on OS 10.8 works fine and the example test cases run without error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="23132.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23130.php">Ivan Borisov: "[OMPI users] Several questions about new Java bindings"</a>
<li><strong>In reply to:</strong> <a href="23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
