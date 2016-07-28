<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 03:27:07 2007" -->
<!-- isoreceived="20070508072707" -->
<!-- sent="Tue, 8 May 2007 09:27:02 +0200" -->
<!-- isosent="20070508072702" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEGV in mpiexec" -->
<!-- id="20070508072701.GA32211_at_creus.mpi.zmaw.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 03:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3285.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>Reply:</strong> <a href="3285.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>we've got some problems on our cluster with openmpi versions 1.2 and 
<br>
upward.
<br>
<p>The following setup does work: 
<br>
<p>openmpi-1.2b3: SLES 9 SP3 with gcc/g++ 4.1.1 and PGI f95 6.1-1 
<br>
<p>The following two setups give a SISEGV in mpiexec (stack see below)
<br>
<p>openmpi-1.2:   SLES 9 SP3 with gcc/g++ 4.1.1 and PGI f95 6.1-1 
<br>
openmpi-1.2.1: SLES 9 SP3 with gcc/g++ 4.1.1 and PGI f95 6.1-1 
<br>
<p>All have been compiled with
<br>
<p>export F77=pgf95
<br>
export FC=pgf95
<br>
&nbsp;
<br>
./configure --prefix=/sw/sles9-x64/voltaire/openmpi-1.2b3-pgi \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-pretty-print-stacktrace \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-libnuma=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mvapi=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mvapi-libdir=/usr/lib64
<br>
<p>(with changing prefix, of course)
<br>
<p>The stack trace:
<br>
<p>Starting program: /scratch/work/system/sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/bin/mpiexec -host tornado1 --prefix=$MPIROOT -v -np 8 `pwd`/osu_bw
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 182906198784 (LWP 30805)]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 182906198784 (LWP 30805)]
<br>
0x0000002a957f1b5b in _int_free () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
(gdb) where
<br>
#0  0x0000002a957f1b5b in _int_free () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#1  0x0000002a957f1e7d in free () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#2  0x0000002a95563b72 in __tls_get_addr () from /lib64/ld-linux-x86-64.so.2
<br>
#3  0x0000002a95fb51ec in __libc_dl_error_tsd () from /lib64/tls/libc.so.6
<br>
#4  0x0000002a95dba6ec in __pthread_initialize_minimal_internal () from /lib64/tls/libpthread.so.0
<br>
#5  0x0000002a95dba419 in call_initialize_minimal () from /lib64/tls/libpthread.so.0
<br>
#6  0x0000002a95ec9000 in ?? ()
<br>
#7  0x0000002a95db9fe9 in _init () from /lib64/tls/libpthread.so.0
<br>
#8  0x0000007fbfffe7c0 in ?? ()
<br>
#9  0x0000002a9556168d in call_init () from /lib64/ld-linux-x86-64.so.2
<br>
#10 0x0000002a9556179b in _dl_init_internal () from /lib64/ld-linux-x86-64.so.2
<br>
#11 0x0000002a95fb39ac in dl_open_worker () from /lib64/tls/libc.so.6
<br>
#12 0x0000002a955612de in _dl_catch_error () from /lib64/ld-linux-x86-64.so.2
<br>
#13 0x0000002a95fb3160 in _dl_open () from /lib64/tls/libc.so.6
<br>
#14 0x0000002a959413b5 in dlopen_doit () from /lib64/libdl.so.2
<br>
#15 0x0000002a955612de in _dl_catch_error () from /lib64/ld-linux-x86-64.so.2
<br>
#16 0x0000002a959416fa in _dlerror_run () from /lib64/libdl.so.2
<br>
#17 0x0000002a95941362 in dlopen@@GLIBC_2.2.5 () from /lib64/libdl.so.2
<br>
#18 0x0000002a957db2ee in vm_open () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#19 0x0000002a957d9645 in tryall_dlopen () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#20 0x0000002a957d981e in tryall_dlopen_module () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#21 0x0000002a957daab1 in try_dlopen () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#22 0x0000002a957dacd6 in lt_dlopenext () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#23 0x0000002a957e04f5 in open_component () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#24 0x0000002a957e0f60 in mca_base_component_find () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#25 0x0000002a957e189c in mca_base_components_open () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-pal.so.0
<br>
#26 0x0000002a956a6119 in orte_rds_base_open () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
<br>
#27 0x0000002a95681d18 in orte_init_stage1 () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
<br>
#28 0x0000002a95684eba in orte_system_init () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
<br>
#29 0x0000002a9568179d in orte_init () from /sw/sles9-x64/voltaire/openmpi-1.2.1-pgi/lib/libopen-rte.so.0
<br>
#30 0x0000000000402a3a in orterun (argc=8, argv=0x7fbfffe778) at orterun.c:374
<br>
#31 0x00000000004028d3 in main (argc=8, argv=0x7fbfffe778) at main.c:13
<br>
(gdb) quit
<br>
<p>In case access to our cluster could help, we would be happy to 
<br>
provide an account.
<br>
<p>Cheerio,
<br>
Luis
<br>
<pre>
-- 
                             \\\\\\
                             (-0^0-)
--------------------------oOO--(_)--OOo-----------------------------
 Luis Kornblueh                           Tel. : +49-40-41173289
 Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
 Bundesstr. 53              
 D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
 Federal Republic of Germany                                               
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3206.php">Boris Bierbaum: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3285.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>Reply:</strong> <a href="3285.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in mpiexec"</a>
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
