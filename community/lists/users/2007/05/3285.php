<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 16 15:32:09 2007" -->
<!-- isoreceived="20070516193209" -->
<!-- sent="Wed, 16 May 2007 12:31:53 -0700" -->
<!-- isosent="20070516193153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV in mpiexec" -->
<!-- id="890E8284-730E-41E2-A8BE-A9743F0256B2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070508072701.GA32211_at_creus.mpi.zmaw.de" -->
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
<strong>Date:</strong> 2007-05-16 15:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3286.php">Code Master: "[OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3284.php">Tim Mattox: "[OMPI users] Open MPI v1.2.2"</a>
<li><strong>In reply to:</strong> <a href="3205.php">Luis Kornblueh: "[OMPI users] SIGSEGV in mpiexec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I unfortunately do not have these versions of compilers to test this  
<br>
particular scenario.
<br>
<p>I don't see anything obvious in the stack trace that would be causing  
<br>
a problem.
<br>
<p>I'm assuming that /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/ 
<br>
openmpi exists and is populated with all the components for the 1.2.1  
<br>
installation (and no other plugins), right?
<br>
<p>Can you run ompi_info, or does it also segv?  (based on the stack  
<br>
trace, I'm guessing that it will -- this is the code that is trying  
<br>
to open Open MPI's plugins)
<br>
<p><p>On May 8, 2007, at 12:27 AM, Luis Kornblueh wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we've got some problems on our cluster with openmpi versions 1.2 and
</span><br>
<span class="quotelev1">&gt; upward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following setup does work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.2b3: SLES 9 SP3 with gcc/g++ 4.1.1 and PGI f95 6.1-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following two setups give a SISEGV in mpiexec (stack see below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.2:   SLES 9 SP3 with gcc/g++ 4.1.1 and PGI f95 6.1-1
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1: SLES 9 SP3 with gcc/g++ 4.1.1 and PGI f95 6.1-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All have been compiled with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export F77=pgf95
</span><br>
<span class="quotelev1">&gt; export FC=pgf95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/sw/sles9-x64/voltaire/openmpi-1.2b3-pgi \
</span><br>
<span class="quotelev1">&gt;             --enable-pretty-print-stacktrace \
</span><br>
<span class="quotelev1">&gt;             --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt;             --with-mvapi=/usr \
</span><br>
<span class="quotelev1">&gt;             --with-mvapi-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (with changing prefix, of course)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The stack trace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Starting program: /scratch/work/system/sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/bin/mpiexec -host tornado1 --prefix=$MPIROOT -v - 
</span><br>
<span class="quotelev1">&gt; np 8 `pwd`/osu_bw
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 182906198784 (LWP 30805)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 182906198784 (LWP 30805)]
</span><br>
<span class="quotelev1">&gt; 0x0000002a957f1b5b in _int_free () from /sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a957f1b5b in _int_free () from /sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a957f1e7d in free () from /sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a95563b72 in __tls_get_addr () from /lib64/ld-linux- 
</span><br>
<span class="quotelev1">&gt; x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a95fb51ec in __libc_dl_error_tsd () from /lib64/tls/ 
</span><br>
<span class="quotelev1">&gt; libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a95dba6ec in __pthread_initialize_minimal_internal ()  
</span><br>
<span class="quotelev1">&gt; from /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a95dba419 in call_initialize_minimal () from /lib64/ 
</span><br>
<span class="quotelev1">&gt; tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x0000002a95ec9000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000002a95db9fe9 in _init () from /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x0000007fbfffe7c0 in ?? ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000002a9556168d in call_init () from /lib64/ld-linux- 
</span><br>
<span class="quotelev1">&gt; x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #10 0x0000002a9556179b in _dl_init_internal () from /lib64/ld-linux- 
</span><br>
<span class="quotelev1">&gt; x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #11 0x0000002a95fb39ac in dl_open_worker () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #12 0x0000002a955612de in _dl_catch_error () from /lib64/ld-linux- 
</span><br>
<span class="quotelev1">&gt; x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #13 0x0000002a95fb3160 in _dl_open () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #14 0x0000002a959413b5 in dlopen_doit () from /lib64/libdl.so.2
</span><br>
<span class="quotelev1">&gt; #15 0x0000002a955612de in _dl_catch_error () from /lib64/ld-linux- 
</span><br>
<span class="quotelev1">&gt; x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #16 0x0000002a959416fa in _dlerror_run () from /lib64/libdl.so.2
</span><br>
<span class="quotelev1">&gt; #17 0x0000002a95941362 in dlopen@@GLIBC_2.2.5 () from /lib64/ 
</span><br>
<span class="quotelev1">&gt; libdl.so.2
</span><br>
<span class="quotelev1">&gt; #18 0x0000002a957db2ee in vm_open () from /sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #19 0x0000002a957d9645 in tryall_dlopen () from /sw/sles9-x64/ 
</span><br>
<span class="quotelev1">&gt; voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #20 0x0000002a957d981e in tryall_dlopen_module () from /sw/sles9- 
</span><br>
<span class="quotelev1">&gt; x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #21 0x0000002a957daab1 in try_dlopen () from /sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #22 0x0000002a957dacd6 in lt_dlopenext () from /sw/sles9-x64/ 
</span><br>
<span class="quotelev1">&gt; voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #23 0x0000002a957e04f5 in open_component () from /sw/sles9-x64/ 
</span><br>
<span class="quotelev1">&gt; voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #24 0x0000002a957e0f60 in mca_base_component_find () from /sw/sles9- 
</span><br>
<span class="quotelev1">&gt; x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #25 0x0000002a957e189c in mca_base_components_open () from /sw/ 
</span><br>
<span class="quotelev1">&gt; sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #26 0x0000002a956a6119 in orte_rds_base_open () from /sw/sles9-x64/ 
</span><br>
<span class="quotelev1">&gt; voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; #27 0x0000002a95681d18 in orte_init_stage1 () from /sw/sles9-x64/ 
</span><br>
<span class="quotelev1">&gt; voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; #28 0x0000002a95684eba in orte_system_init () from /sw/sles9-x64/ 
</span><br>
<span class="quotelev1">&gt; voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; #29 0x0000002a9568179d in orte_init () from /sw/sles9-x64/voltaire/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.1-pgi/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; #30 0x0000000000402a3a in orterun (argc=8, argv=0x7fbfffe778) at  
</span><br>
<span class="quotelev1">&gt; orterun.c:374
</span><br>
<span class="quotelev1">&gt; #31 0x00000000004028d3 in main (argc=8, argv=0x7fbfffe778) at  
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) quit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case access to our cluster could help, we would be happy to
</span><br>
<span class="quotelev1">&gt; provide an account.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheerio,
</span><br>
<span class="quotelev1">&gt; Luis
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;                              \\\\\\
</span><br>
<span class="quotelev1">&gt;                              (-0^0-)
</span><br>
<span class="quotelev1">&gt; --------------------------oOO--(_)--OOo-----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Luis Kornblueh                           Tel. : +49-40-41173289
</span><br>
<span class="quotelev1">&gt;  Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
</span><br>
<span class="quotelev1">&gt;  Bundesstr. 53
</span><br>
<span class="quotelev1">&gt;  D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Federal Republic of Germany
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
<li><strong>Next message:</strong> <a href="3286.php">Code Master: "[OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3284.php">Tim Mattox: "[OMPI users] Open MPI v1.2.2"</a>
<li><strong>In reply to:</strong> <a href="3205.php">Luis Kornblueh: "[OMPI users] SIGSEGV in mpiexec"</a>
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
