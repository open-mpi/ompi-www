<?
$subject_val = "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 26 11:22:48 2014" -->
<!-- isoreceived="20141026152248" -->
<!-- sent="Sun, 26 Oct 2014 16:22:32 +0100 (CET)" -->
<!-- isosent="20141026152232" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="201410261522.s9QFMWok019247_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-26 11:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25586.php">Ralph Castain: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25584.php">Siegmar Gross: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25586.php">Ralph Castain: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Reply:</strong> <a href="25586.php">Ralph Castain: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>I wanted to explore which function is called, when I call MPI_Init
<br>
in a C program, because this function should be called from a Java
<br>
program as well. Unfortunately C programs break with a Bus Error
<br>
once more for openmpi-dev-124-g91e9686 on Solaris. I assume that's
<br>
the reason why I get no useful backtrace for my Java program.
<br>
<p>tyr small_prog 117 mpicc -o init_finalize init_finalize.c
<br>
tyr small_prog 118 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
...
<br>
(gdb) run -np 1 init_finalize
<br>
Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[tyr:19240] *** Process received signal ***
<br>
[tyr:19240] Signal: Bus Error (10)
<br>
[tyr:19240] Signal code: Invalid address alignment (1)
<br>
[tyr:19240] Failing at address: ffffffff7bd1c10c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdcc04
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_proc_set_name+0x1c [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x103e8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/init_finalize:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/init_finalize:_start+0x7c
<br>
[tyr:19240] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 10 (Bus Error).
<br>
--------------------------------------------------------------------------
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
<br>
(gdb) bt
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
<br>
#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
<br>
#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
<br>
#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
<br>
#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
<br>
#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
<br>
#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
<br>
#8  0xffffffff7ec87f60 in vm_close (loader_data=0x0, module=0xffffffff7c901fe0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../openmpi-dev-124-g91e9686/opal/libltdl/loaders/dlopen.c:212
<br>
#9  0xffffffff7ec85534 in lt_dlclose (handle=0x100189b50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../openmpi-dev-124-g91e9686/opal/libltdl/ltdl.c:1982
<br>
#10 0xffffffff7ecaabd4 in ri_destructor (obj=0x1001893a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7eca9504 in opal_obj_run_destructors (object=0x1001893a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ecaa474 in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7ecac774 in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ecac808 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ecac8dc in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f14ba58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ecac844 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14ba08 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efcaf58 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/orte/mca/oob/base/oob_base_frame.c:112
<br>
#18 0xffffffff7ecc136c in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14ba08 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be07858 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-dev-124-g91e9686/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ef338a4 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-124-g91e9686/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000723c in orterun (argc=4, argv=0xffffffff7fffe0b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/orterun.c:1103
<br>
#22 0x0000000100003e80 in main (argc=4, argv=0xffffffff7fffe0b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-124-g91e9686/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; thank you very much for the quick tutorial. Unfortunately I still
</span><br>
<span class="quotelev1">&gt; can't get a backtrace.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You might need to configure with --enable-debug and add -g -O0
</span><br>
<span class="quotelev2">&gt; &gt; to your CFLAGS and LDFLAGS
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then once you attach with gdb, you have to find the thread that is polling :
</span><br>
<span class="quotelev2">&gt; &gt; thread 1
</span><br>
<span class="quotelev2">&gt; &gt; bt
</span><br>
<span class="quotelev2">&gt; &gt; thread 2
</span><br>
<span class="quotelev2">&gt; &gt; bt
</span><br>
<span class="quotelev2">&gt; &gt; and so on until you find the good thread
</span><br>
<span class="quotelev2">&gt; &gt; If _dbg is a local variable, you need to select the right frame
</span><br>
<span class="quotelev2">&gt; &gt; before you can change the value :
</span><br>
<span class="quotelev2">&gt; &gt; get the frame number from bt (generally 1 under linux)
</span><br>
<span class="quotelev2">&gt; &gt; f &lt;frame number&gt;
</span><br>
<span class="quotelev2">&gt; &gt; set _dbg=0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;--enable-debug&quot; is one of my default options. Now I used the
</span><br>
<span class="quotelev1">&gt; following command to configure Open MPI. I always start the
</span><br>
<span class="quotelev1">&gt; build process in an empty directory and I always remove
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9.0_64_gcc, before I install a new version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-124-g91e9686-SunOS.sparc.64_gcc 112 head config.log \
</span><br>
<span class="quotelev1">&gt;   | grep openmpi
</span><br>
<span class="quotelev1">&gt; $ ../openmpi-dev-124-g91e9686/configure
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-1.9.0_64_gcc
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=-m64 -g -O0 CC=gcc CXX=g++ FC=gfortran
</span><br>
<span class="quotelev1">&gt;   CFLAGS=-m64 -D_REENTRANT -g -O0
</span><br>
<span class="quotelev1">&gt;   CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=-D_REENTRANT CXXCPPFLAGS=
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix --with-hwloc=internal --without-verbs
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=-std=c11 -m64 --enable-debug
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-124-g91e9686-SunOS.sparc.64_gcc 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;gbd&quot; doesn't allow any backtrace for any thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 124 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) attach 18876
</span><br>
<span class="quotelev1">&gt; Attaching to process 18876
</span><br>
<span class="quotelev1">&gt; [New process 18876]
</span><br>
<span class="quotelev1">&gt; Retry #1:
</span><br>
<span class="quotelev1">&gt; Retry #2:
</span><br>
<span class="quotelev1">&gt; Retry #3:
</span><br>
<span class="quotelev1">&gt; Retry #4:
</span><br>
<span class="quotelev1">&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) info threads
</span><br>
<span class="quotelev1">&gt; [New LWP 12]
</span><br>
<span class="quotelev1">&gt; [New LWP 11]
</span><br>
<span class="quotelev1">&gt; [New LWP 10]
</span><br>
<span class="quotelev1">&gt; [New LWP 9]
</span><br>
<span class="quotelev1">&gt; [New LWP 8]
</span><br>
<span class="quotelev1">&gt; [New LWP 7]
</span><br>
<span class="quotelev1">&gt; [New LWP 6]
</span><br>
<span class="quotelev1">&gt; [New LWP 5]
</span><br>
<span class="quotelev1">&gt; [New LWP 4]
</span><br>
<span class="quotelev1">&gt; [New LWP 3]
</span><br>
<span class="quotelev1">&gt; [New LWP 2]
</span><br>
<span class="quotelev1">&gt;   Id   Target Id         Frame 
</span><br>
<span class="quotelev1">&gt;   12   LWP 2             0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev1">&gt;   11   LWP 3             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   10   LWP 4             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   9    LWP 5             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   8    LWP 6             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   7    LWP 7             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   6    LWP 8             0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev1">&gt;   5    LWP 9             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   4    LWP 10            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   3    LWP 11            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt;   2    LWP 12            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; * 1    LWP 1             0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) thread 1
</span><br>
<span class="quotelev1">&gt; [Switching to thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eaca12c in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 2
</span><br>
<span class="quotelev1">&gt; [Switching to thread 2 (LWP 12)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 3
</span><br>
<span class="quotelev1">&gt; [Switching to thread 3 (LWP 11)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 4
</span><br>
<span class="quotelev1">&gt; [Switching to thread 4 (LWP 10)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 5
</span><br>
<span class="quotelev1">&gt; [Switching to thread 5 (LWP 9)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 6
</span><br>
<span class="quotelev1">&gt; [Switching to thread 6 (LWP 8)]
</span><br>
<span class="quotelev1">&gt; #0  0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eacbcb0 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 7
</span><br>
<span class="quotelev1">&gt; [Switching to thread 7 (LWP 7)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 8
</span><br>
<span class="quotelev1">&gt; [Switching to thread 8 (LWP 6)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 9
</span><br>
<span class="quotelev1">&gt; [Switching to thread 9 (LWP 5)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 10
</span><br>
<span class="quotelev1">&gt; [Switching to thread 10 (LWP 4)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 11
</span><br>
<span class="quotelev1">&gt; [Switching to thread 11 (LWP 3)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) thread 12
</span><br>
<span class="quotelev1">&gt; [Switching to thread 12 (LWP 2)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried to set _dbg in all available frames without success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) f 1
</span><br>
<span class="quotelev1">&gt; #1  0x7eacb46c in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev1">&gt; No symbol table is loaded.  Use the &quot;file&quot; command.
</span><br>
<span class="quotelev1">&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev1">&gt; (gdb) f 1
</span><br>
<span class="quotelev1">&gt; #1  0x7eacb46c in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev1">&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev1">&gt; (gdb) f 2
</span><br>
<span class="quotelev1">&gt; #0  0x00000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev1">&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With &quot;list&quot; I get source code from mpi_CartComm.c and not from mpi_MPI.c.
</span><br>
<span class="quotelev1">&gt; If a switch threads, &quot;list&quot; continues in the old file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) thread 1
</span><br>
<span class="quotelev1">&gt; [Switching to thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) list 36
</span><br>
<span class="quotelev1">&gt; 31          distributed under the License is distributed on an &quot;AS IS&quot; BASIS,
</span><br>
<span class="quotelev1">&gt; 32          WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
</span><br>
<span class="quotelev1">&gt; 33          See the License for the specific language governing permissions and
</span><br>
<span class="quotelev1">&gt; 34          limitations under the License.
</span><br>
<span class="quotelev1">&gt; 35      */
</span><br>
<span class="quotelev1">&gt; 36      /*
</span><br>
<span class="quotelev1">&gt; 37       * File         : mpi_CartComm.c
</span><br>
<span class="quotelev1">&gt; 38       * Headerfile   : mpi_CartComm.h
</span><br>
<span class="quotelev1">&gt; 39       * Author       : Sung-Hoon Ko, Xinying Li
</span><br>
<span class="quotelev1">&gt; 40       * Created      : Thu Apr  9 12:22:15 1998
</span><br>
<span class="quotelev1">&gt; (gdb) thread 2
</span><br>
<span class="quotelev1">&gt; [Switching to thread 2 (LWP 12)]
</span><br>
<span class="quotelev1">&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) list
</span><br>
<span class="quotelev1">&gt; 41       * Revision     : $Revision: 1.6 $
</span><br>
<span class="quotelev1">&gt; 42       * Updated      : $Date: 2003/01/16 16:39:34 $
</span><br>
<span class="quotelev1">&gt; 43       * Copyright: Northeast Parallel Architectures Center
</span><br>
<span class="quotelev1">&gt; 44       *            at Syracuse University 1998
</span><br>
<span class="quotelev1">&gt; 45       */
</span><br>
<span class="quotelev1">&gt; 46      #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; 47      
</span><br>
<span class="quotelev1">&gt; 48      #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 49      #ifdef HAVE_TARGETCONDITIONALS_H
</span><br>
<span class="quotelev1">&gt; 50      #include &lt;TargetConditionals.h&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any ideas, what's going wrong or if I must use a different
</span><br>
<span class="quotelev1">&gt; symbol table?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Hi Gilles,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;I changed _dbg to a static variable, so that it is visible in the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;library, but unfortunately still not in the symbol table.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;tyr java 419 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so | grep -i _dbg
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[271]   |  1249644|     4|OBJT |LOCL |0    |18     |_dbg.14258
</span><br>
<span class="quotelev3">&gt; &gt; &gt;tyr java 420 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev3">&gt; &gt; &gt;GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;(gdb) attach 13019
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Attaching to process 13019
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[New process 13019]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Retry #1:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Retry #2:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Retry #3:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Retry #4:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;(gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Reading symbols from 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;(gdb) set var _dbg.14258=0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;(gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; unfortunately I didn't get anything useful. It's probably my fault,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; because I'm still not very familiar with gdb or any other debugger.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I did the following things.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1st window:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 174 setenv OMPI_ATTACH 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 175 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; warning: [path] bad path element
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   &quot;/usr/local/openmpi-1.9.0_64_gcc/lib64/shmem.jar&quot;:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   no such file or directory
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1 warning
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 176 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2nd window:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 379 ps -aef | grep java
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; noaccess  1345     1   0   May 22 ?         113:23 /usr/java/bin/java -server -Xmx128m 
</span><br>
<span class="quotelev1">&gt; -XX:+UseParallelGC 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;-XX:ParallelGCThreads=4 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   fd1026  3661 10753   0 14:09:12 pts/14      0:00 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   fd1026  3677 13371   0 14:16:55 pts/2       0:00 grep java
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   fd1026  3663  3661   0 14:09:12 pts/14      0:01 java -cp 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;/home/fd1026/work/skripte/master/parallel/prog/mpi/java:/usr/local/jun
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 380 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) attach 3663
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Attaching to process 3663
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New process 3663]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Retry #1:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Retry #2:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Retry #3:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Retry #4:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Reading symbols from 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) set var _dbg=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) set var JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) set JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) info threads
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 12]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 11]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 10]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 9]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 8]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 7]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 6]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 5]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 4]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 3]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP 2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Id   Target Id         Frame 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   12   LWP 2             0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   11   LWP 3             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   10   LWP 4             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   9    LWP 5             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   8    LWP 6             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   7    LWP 7             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   6    LWP 8             0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   5    LWP 9             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   4    LWP 10            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   3    LWP 11            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   2    LWP 12            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; * 1    LWP 1             0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It seems that &quot;_dbg&quot; is unknown and unavailable.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 399 grep _dbg /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/*
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        volatile 
</span><br>
<span class="quotelev1">&gt; int _dbg = 1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        while 
</span><br>
<span class="quotelev1">&gt; (_dbg) poll(NULL, 0, 1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 400 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i _dbg
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 401 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i JNI_OnLoad
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [1057]  |              139688|                 444|FUNC |GLOB |0    |11     |JNI_OnLoad
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 402 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; How can I set _dbg to zero to continue mpiexec? I also tried to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; set a breakpoint for function JNI_OnLoad, but it seems, that the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; function isn't called before SIGSEGV.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 177 unsetenv OMPI_ATTACH 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 178 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) b mpi_MPI.c:JNI_OnLoad
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; No source file named mpi_MPI.c.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Make breakpoint pending on future shared library load? (y or [n]) y
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Breakpoint 1 (mpi_MPI.c:JNI_OnLoad) pending.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3518, tid=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 381 cat InitFinalizeMain.java 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; import mpi.*;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; public class InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI.Init (args);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     System.out.print (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI.Finalize ();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; SIGSEGV happens in MPI.Init(args), because I can print a message
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; before I call the method.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 192 unsetenv OMPI_ATTACH
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 193 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 194 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Before MPI.Init()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3697, tid=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Any ideas, how I can continue? I couldn't find a C function for
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI.Init() in a C file. Do you know, which function is called first,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; so that I can set a breakpoint? By the way, I get the same error
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for Solaris 10 x86_64.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tyr java 388 ssh sunpc1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; sunpc1 java 106 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; sunpc1 java 107 uname -a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; sunpc1 java 108 isainfo -k
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; amd64
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; sunpc1 java 109 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #  SIGSEGV (0xb) at pc=0xfffffd7fff1d77f0, pid=20256, tid=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; thank you very much for your help.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; how did you configure openmpi ? which java version did you use ?
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; i just found a regression and you currently have to explicitly add
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; CFLAGS=-D_REENTRANT CPPFLAGS=-D_REENTRANT
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; to your configure command line
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I added &quot;-D_REENTRANT&quot; to my command.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ../openmpi-dev-124-g91e9686/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   CFLAGS=&quot;-m64 -D_REENTRANT&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   CPPFLAGS=&quot;-D_REENTRANT&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I use Java 8.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; tyr openmpi-1.9 112 java -version
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; java version &quot;1.8.0&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Java(TM) SE Runtime Environment (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Java HotSpot(TM) 64-Bit Server VM (build 25.0-b70, mixed mode)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; tyr openmpi-1.9 113 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Unfortunately I still get a SIGSEGV with openmpi-dev-124-g91e9686.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I have applied your patch and will try to debug my small Java
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; program tomorrow or next week and then let you know the result.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25581.php">http://www.open-mpi.org/community/lists/users/2014/10/25581.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25582.php">http://www.open-mpi.org/community/lists/users/2014/10/25582.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25584.php">http://www.open-mpi.org/community/lists/users/2014/10/25584.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25586.php">Ralph Castain: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25584.php">Siegmar Gross: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25586.php">Ralph Castain: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Reply:</strong> <a href="25586.php">Ralph Castain: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
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
