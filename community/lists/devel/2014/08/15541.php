<?
$subject_val = "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 00:04:00 2014" -->
<!-- isoreceived="20140808040400" -->
<!-- sent="Fri, 8 Aug 2014 04:03:52 +0000" -->
<!-- isosent="20140808040352" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
<!-- id="20140808130353.bd7dc1b05950ce3004d7cb33_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="201408071100.s77B04Eg029869_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 00:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15542.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15540.php">Paul Hargrove: "[OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15542.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="15542.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="15543.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 10 Sparc and I receive a bus error, if I run a small program.
</span><br>
<p>I've finally reproduced the bus error in my SPARC environment.
<br>
<p>#0 0xffffffff00db4740 (__waitpid_nocancel + 0x44) (0x200,0x0,0x0,0xa0,0xfffff80100064af0,0x35b4)
<br>
#1 0xffffffff0001a310 (handle_signal + 0x574) (signo=10,info=(struct siginfo *) 0x000007feffffd100,p=(void *) 0x000007feffffd100) at line 277 in ../sigattach.c &lt;SIGNAL HANDLER&gt;
<br>
#2 0xffffffff0282aff4 (store + 0x540) (uid=(unsigned long *) 0xffffffff0118a128,scope=8:'\b',key=(char *) 0xffffffff0106a0a8 &quot;opal.local.ldr&quot;,data=(void *) 0x000007feffffde74,type=15:'\017') at line 252 in db_hash.c
<br>
#3 0xffffffff01266350 (opal_db_base_store + 0xc4) (proc=(unsigned long *) 0xffffffff0118a128,scope=8:'\b',key=(char *) 0xffffffff0106a0a8 &quot;opal.local.ldr&quot;,object=(void *) 0x000007feffffde74,type=15:'\017') at line 49 in db_base_fns.c
<br>
#4 0xffffffff00fdbab4 (orte_util_decode_pidmap + 0x790) (bo=(struct *) 0x0000000000281d70) at line 975 in nidmap.c
<br>
#5 0xffffffff00fd6d20 (orte_util_nidmap_init + 0x3dc) (buffer=(struct opal_buffer_t *) 0x0000000000241fc0) at line 141 in nidmap.c
<br>
#6 0xffffffff01e298cc (rte_init + 0x2a0) () at line 153 in ess_env_module.c
<br>
#7 0xffffffff00f9f28c (orte_init + 0x308) (pargc=(int *) 0x0000000000000000,pargv=(char ***) 0x0000000000000000,flags=32) at line 148 in orte_init.c
<br>
#8 0xffffffff001a6f08 (ompi_mpi_init + 0x31c) (argc=1,argv=(char **) 0x000007fefffff348,requested=0,provided=(int *) 0x000007feffffe698) at line 464 in ompi_mpi_init.c
<br>
#9 0xffffffff001ff79c (MPI_Init + 0x2b0) (argc=(int *) 0x000007feffffe814,argv=(char ***) 0x000007feffffe818) at line 84 in init.c
<br>
#10 0x0000000000100ae4 (main + 0x44) (argc=1,argv=(char **) 0x000007fefffff348) at line 8 in mpiinitfinalize.c
<br>
#11 0xffffffff00d2b81c (__libc_start_main + 0x194) (0x100aa0,0x1,0x7fefffff348,0x100d24,0x100d14,0x0)
<br>
#12 0x000000000010094c (_start + 0x2c) ()
<br>
<p>The line 252 in opal/mca/db/hash/db_hash.c is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;case OPAL_UINT64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == data) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_ERROR_LOG(OPAL_ERR_BAD_PARAM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERR_BAD_PARAM;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kv-&gt;type = OPAL_UINT64;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kv-&gt;data.uint64 = *(uint64_t*)(data); // !!! here !!!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>My environment is:
<br>
<p>&nbsp;&nbsp;Open MPI v1.8 branch r32447 (latest)
<br>
&nbsp;&nbsp;configure --enable-debug
<br>
&nbsp;&nbsp;SPARC-V9 (Fujitsu SPARC64 IXfx)
<br>
&nbsp;&nbsp;Linux (custom)
<br>
&nbsp;&nbsp;gcc 4.2.4
<br>
<p>I could not reproduce it with Open MPI trunk nor with Fujitsu compiler.
<br>
<p>Can this information help?
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry once more to answer late, but the last two days our mail
</span><br>
<span class="quotelev1">&gt; server was down (hardware error).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Did you configure this --enable-debug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I used the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.8.2rc3/configure --prefix=/usr/local/openmpi-1.8.2_64_gcc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.8.2_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.9.0/lib/amd64&quot; \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If so, you should get a line number in the backtrace
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got them for gdb (see below), but not for &quot;dbx&quot;.
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 5, 2014, at 2:59 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm sorry to answer so late, but last week I didn't have Internet
</span><br>
<span class="quotelev3">&gt; &gt; &gt; access. In the meantime I've installed openmpi-1.8.2rc3 and I get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the same error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; This looks like the typical type of alignment error that we used
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to see when testing regularly on SPARC.  :-\
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It looks like the error was happening in mca_db_hash.so.  Could
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; you get a stack trace / file+line number where it was failing
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; in mca_db_hash?  (i.e., the actual bad code will likely be under
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; opal/mca/db/hash somewhere)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately I don't get a file+line number from a file in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal/mca/db/Hash.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 102 ompi_info | grep MPI:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                Open MPI: 1.8.2rc3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 103 which mpicc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/openmpi-1.8.2_64_gcc/bin/mpicc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 104 mpicc init_finalize.c 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 106 /opt/solstudio12.3/bin/sparcv9/dbx 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For information about new features see `help changes'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To remove this message, put `dbxenv suppress_startup_message 7.9' in your 
</span><br>
<span class="quotelev1">&gt; .dbxrc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading mpiexec
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libopen-rte.so.7.0.4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libopen-pal.so.6.2.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libsendfile.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libpicl.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libkstat.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading liblgrp.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libsocket.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libnsl.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading librt.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libm.so.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libpthread.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libc.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libdoor.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libaio.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libmd.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (dbx) check -all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; access checking - ON
</span><br>
<span class="quotelev3">&gt; &gt; &gt; memuse checking - ON
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (dbx) run -np 1 a.outRunning: mpiexec -np 1 a.out 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (process id 27833)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading rtcapihook.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libdl.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading rtcaudit.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libmapmalloc.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libgen.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading rtcboot.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading librtc.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading libmd_psr.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0xffffffff55174da0: _readdir+0x0064:    call     
</span><br>
<span class="quotelev1">&gt; _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (dbx) where
</span><br>
<span class="quotelev3">&gt; &gt; &gt; current thread: t_at_1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; =&gt;[1] _readdir(0xffffffff79f00300, 0x2e6800, 0x4, 0x2d, 0x4, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff79f00300), at 0xffffffff55174da0 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [2] list_files_by_dir(0x100138fd8, 0xffffffff7fffd1f0, 0xffffffff7fffd1e8, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff7fffd210, 0x0, 0xffffffff702a0010), at 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0xffffffff63174594 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [3] foreachfile_callback(0x100138fd8, 0xffffffff7fffd458, 0x0, 0x2e, 0x0, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff702a0010), at 0xffffffff6317461c 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [4] foreach_dirinpath(0x1001d8a28, 0x0, 0xffffffff631745e0, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff7fffd458, 0x0, 0xffffffff702a0010), at 0xffffffff63171684 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [5] lt_dlforeachfile(0x1001d8a28, 0xffffffff6319656c, 0x0, 0x53, 0x2f, 
</span><br>
<span class="quotelev1">&gt; 0xf), at 0xffffffff63174748 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [6] find_dyn_components(0x0, 0xffffffff6323b570, 0x0, 0x1, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff7fffd6a0, 0xffffffff702a0010), at 0xffffffff63195e38 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [7] mca_base_component_find(0x0, 0xffffffff6323b570, 0xffffffff6335e1b0, 
</span><br>
<span class="quotelev1">&gt; 0x0, 0xffffffff7fffd6a0, 0x1), at 0xffffffff631954d8 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [8] mca_base_framework_components_register(0xffffffff6335e1c0, 0x0, 0x3e, 
</span><br>
<span class="quotelev1">&gt; 0x0, 0x3b, 0x100800), at 0xffffffff631b1638 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [9] mca_base_framework_register(0xffffffff6335e1c0, 0x0, 0x2, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff7fffd8d0, 0x0, 0xffffffff702a0010), at 0xffffffff631b24d4 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [10] mca_base_framework_open(0xffffffff6335e1c0, 0x0, 0x2, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff7fffd990, 0x0, 0xffffffff702a0010), at 0xffffffff631b25d0 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [11] opal_init(0xffffffff7fffdd70, 0xffffffff7fffdd78, 0x100117c60, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff7fffde58, 0x400, 0x100117c60), at 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0xffffffff63153694 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [12] orterun(0x4, 0xffffffff7fffde58, 0x2, 0xffffffff7fffdda0, 0x0, 
</span><br>
<span class="quotelev1">&gt; 0xffffffff702a0010), at 0x100005078 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [13] main(0x4, 0xffffffff7fffde58, 0xffffffff7fffde80, 0x100117c60, 
</span><br>
<span class="quotelev1">&gt; 0x100000000, 0xffffffff6a700200), at 0x100003d68 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (dbx) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get the following output with gdb.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 107 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; License GPLv3+: GNU GPL version 3 or later 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reading symbols from 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) run -np 1 a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:27867] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:27867] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:27867] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:27867] Failing at address: ffffffff7fffd224
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_b
</span><br>
<span class="quotelev1">&gt; acktrace_print+0x2c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfa
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3e
</span><br>
<span class="quotelev1">&gt; e8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_d
</span><br>
<span class="quotelev1">&gt; b_base_store+0xc8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt; til_decode_pidmap+0x798
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt; til_nidmap_init+0x3cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x22
</span><br>
<span class="quotelev1">&gt; 6c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_i
</span><br>
<span class="quotelev1">&gt; nit+0x308
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_in
</span><br>
<span class="quotelev1">&gt; it+0x31c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0
</span><br>
<span class="quotelev1">&gt; x2a8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:27867] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiexec noticed that process rank 0 with PID 27867 on node tyr exited on 
</span><br>
<span class="quotelev1">&gt; signal 10 (Bus Error).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to 
</span><br>
<span class="quotelev1">&gt; satisfy query
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from 
</span><br>
<span class="quotelev1">&gt; /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0xffffffff7ec7746c in vm_close ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0xffffffff7ec74a4c in lt_dlclose ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #10 0xffffffff7ec99b70 in ri_destructor (obj=0x1001ead30)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #11 0xffffffff7ec98488 in opal_obj_run_destructors (object=0x1001ead30)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../../../openmpi-1.8.2rc3/opal/class/opal_object.h:446
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #12 0xffffffff7ec993ec in mca_base_component_repository_release (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #13 0xffffffff7ec9b734 in mca_base_component_unload (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #14 0xffffffff7ec9b7c8 in mca_base_component_close (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #15 0xffffffff7ec9b89c in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    components=0xffffffff7f12b430 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #16 0xffffffff7ec9b804 in mca_base_framework_components_close (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    framework=0xffffffff7f12b3e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #17 0xffffffff7efae1e4 in orte_oob_base_close ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../../../openmpi-1.8.2rc3/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #18 0xffffffff7ecb28ac in mca_base_framework_close (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    framework=0xffffffff7f12b3e0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../../../../openmpi-1.8.2rc3/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #20 0xffffffff7ef30a44 in orte_finalize ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../openmpi-1.8.2rc3/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #21 0x00000001000070c4 in orterun (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../../../openmpi-1.8.2rc3/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #22 0x0000000100003d70 in main (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    at ../../../../openmpi-1.8.2rc3/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is the above information helpful to track down the error? Do you need
</span><br>
<span class="quotelev3">&gt; &gt; &gt; anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Jul 25, 2014, at 2:08 AM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 10 Sparc and I receive a bus error, if I run a small program.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; tyr hello_1 105 mpiexec -np 2 a.out 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; [tyr:29164] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; [tyr:29164] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; [tyr:29164] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; [tyr:29164] Failing at address: ffffffff7fffd1c4
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_b
</span><br>
<span class="quotelev1">&gt; acktrace_print+0x2c
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3e
</span><br>
<span class="quotelev1">&gt; e8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_d
</span><br>
<span class="quotelev1">&gt; b_base_store+0xc8
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt; til_decode_pidmap+0x798
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt; til_nidmap_init+0x3cc
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x22
</span><br>
<span class="quotelev1">&gt; 6c
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_i
</span><br>
<span class="quotelev1">&gt; nit+0x308
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_in
</span><br>
<span class="quotelev1">&gt; it+0x31c
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0
</span><br>
<span class="quotelev1">&gt; x2a8
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; [tyr:29164] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I get the following output if I run the program in &quot;dbx&quot;.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 0xffffffff55174da0: _readdir+0x0064:    call     
</span><br>
<span class="quotelev1">&gt; _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Hopefully the above output helps to fix the error. Can I provide
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Siegmar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15542.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15540.php">Paul Hargrove: "[OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15542.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="15542.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="15543.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
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
