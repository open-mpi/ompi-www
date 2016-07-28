<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 04:19:30 2014" -->
<!-- isoreceived="20141027081930" -->
<!-- sent="Mon, 27 Oct 2014 09:21:16 +0100" -->
<!-- isosent="20141027082116" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="544E007C.8060107_at_dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="544DE354.5040509_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 04:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>Previous message:</strong> <a href="25599.php">maxinator333: "[OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>In reply to:</strong> <a href="25596.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Takahiro, Gilles, Siegmar,
<br>
<p>Thank you very much for all your fix.
<br>
I don't notice about calling 'mca_base_var_register' before MPI_Init.
<br>
I'm sorry for the inconvenience.
<br>
<p>Regards,
<br>
Oscar
<br>
<p>El 27/10/14 07:16, Gilles Gouaillardet escribi&#243;:
<br>
<span class="quotelev1">&gt; Kawashima-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot for the detailled explanation.
</span><br>
<span class="quotelev1">&gt; FWIW, i was previously testing on Solaris 11 that behaves like Linux : 
</span><br>
<span class="quotelev1">&gt; printf(&quot;%s&quot;, NULL) outputs '(null)'
</span><br>
<span class="quotelev1">&gt; vs a SIGSEGV on Solaris 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i commited a16c1e44189366fbc8e967769e050f517a40f3f8 in order to fix 
</span><br>
<span class="quotelev1">&gt; this issue
</span><br>
<span class="quotelev1">&gt; (i moved the call to mca_base_var_register *after* MPI_Init)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regarding the BUS error reported by Siegmar, i also commited 
</span><br>
<span class="quotelev1">&gt; 62bde1fcb554079143030bb305512c236672386f
</span><br>
<span class="quotelev1">&gt; in order to fix it (this is based on code review only, i have no 
</span><br>
<span class="quotelev1">&gt; sparc64 hardware to test it is enough)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar, --enable-heterogeneous is known to be broken on the trunk, 
</span><br>
<span class="quotelev1">&gt; and there are discussions on how to fix it.
</span><br>
<span class="quotelev1">&gt; in the mean time, you can either apply the attached minimal 
</span><br>
<span class="quotelev1">&gt; heterogeneous.diff patch or avoid the --enable-heterogeneous option
</span><br>
<span class="quotelev1">&gt; /* the attached patch &quot;fixes&quot; --enable-heterogeneous on homogeneous 
</span><br>
<span class="quotelev1">&gt; clusters *only* */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about attaching a process with gdb, i usually run
</span><br>
<span class="quotelev1">&gt; gdb none &lt;pid&gt;
</span><br>
<span class="quotelev1">&gt; on Linux and everything is fine
</span><br>
<span class="quotelev1">&gt; on Solaris, i had to do
</span><br>
<span class="quotelev1">&gt; gdb /usr/bin/java &lt;pid&gt;
</span><br>
<span class="quotelev1">&gt; in order to get the symbols loaded by gdb
</span><br>
<span class="quotelev1">&gt; and then
</span><br>
<span class="quotelev1">&gt; thread 11
</span><br>
<span class="quotelev1">&gt; f 3
</span><br>
<span class="quotelev1">&gt; set _dbg=0
</span><br>
<span class="quotelev1">&gt; /* but this is likely environment specific */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/10/27 10:58, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Oh yeah - that would indeed be very bad :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 26, 2014, at 6:06 PM, Kawashima, Takahiro&lt;t-kawashima_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar, Oscar,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect that the problem is calling mca_base_var_register
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without initializing OPAL in JNI_OnLoad.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mpi/java/c/mpi_MPI.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jint JNI_OnLoad(JavaVM *vm, void *reserved)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libmpi = dlopen(&quot;libmpi.&quot; OPAL_DYN_LIB_SUFFIX, RTLD_NOW | RTLD_GLOBAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if(libmpi == NULL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fprintf(stderr, &quot;Java bindings failed to load liboshmem.\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         exit(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mca_base_var_register(&quot;ompi&quot;, &quot;mpi&quot;, &quot;java&quot;, &quot;eager&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           &quot;Java buffers eager size&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           MCA_BASE_VAR_TYPE_INT, NULL, 0, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           OPAL_INFO_LVL_5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           &amp;ompi_mpi_java_eager);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return JNI_VERSION_1_6;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suppose JNI_OnLoad is the first function in the libmpi_java.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is called by JVM. So OPAL is not initialized yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As shown in Siegmar's JRE log, SEGV occurred in asprintf called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by mca_base_var_cache_files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar's hs_err_pid13080.log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siginfo:si_signo=SIGSEGV: si_errno=0, si_code=1 (SEGV_MAPERR), si_addr=0x0000000000000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stack: [0xffffffff7b400000,0xffffffff7b500000],  sp=0xffffffff7b4fc730,  free space=1009k
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Native frames: (J=compiled Java code, j=interpreted, Vv=VM code, C=native code)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libc.so.1+0xaf640]  vsnprintf+0x84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libc.so.1+0xaadb4]  vasprintf+0x20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libc.so.1+0xaaf04]  asprintf+0x28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libopen-pal.so.0.0.0+0xaf3cc]  mca_base_var_cache_files+0x160
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libopen-pal.so.0.0.0+0xaed90]  mca_base_var_init+0x4e8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libopen-pal.so.0.0.0+0xb260c]  register_variable+0x214
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libopen-pal.so.0.0.0+0xb36a0]  mca_base_var_register+0x104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libmpi_java.so.0.0.0+0x221e8]  JNI_OnLoad+0x128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C  [libjava.so+0x10860]  Java_java_lang_ClassLoader_00024NativeLibrary_load+0xb8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  java.lang.ClassLoader$NativeLibrary.load(Ljava/lang/String;Z)V+-665819
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  java.lang.ClassLoader$NativeLibrary.load(Ljava/lang/String;Z)V+0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  java.lang.ClassLoader.loadLibrary0(Ljava/lang/Class;Ljava/io/File;)Z+328
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  java.lang.ClassLoader.loadLibrary(Ljava/lang/Class;Ljava/lang/String;Z)V+290
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  java.lang.Runtime.loadLibrary0(Ljava/lang/Class;Ljava/lang/String;)V+54
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  java.lang.System.loadLibrary(Ljava/lang/String;)V+7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; j  mpi.MPI.&lt;clinit&gt;()V+28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_var_cache_files passes opal_install_dirs.sysconfdir to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; asprintf.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/mca/base/mca_base_var.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     asprintf(&amp;mca_base_var_files, &quot;%s&quot;OPAL_PATH_SEP&quot;.openmpi&quot; OPAL_PATH_SEP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              &quot;mca-params.conf%c%s&quot; OPAL_PATH_SEP &quot;openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              home, OPAL_ENV_SEP, opal_install_dirs.sysconfdir);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this situation, opal_install_dirs.sysconfdir is still NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run a MPI Java program that only calls MPI.Init() and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI.Finalize() with MCA variable mpi_show_mca_params=1 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux to confirm this. mca_base_param_files contains &quot;(null)&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_show_mca_params=1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_param_files=/home/rivis/.openmpi/mca-params.conf:(null)/openmpi-mca-params.conf (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_param_files=/home/rivis/.openmpi/mca-params.conf:(null)/openmpi-mca-params.conf (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_override_param_file=(null)/openmpi-mca-params-override.conf (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_suppress_override_warning=false (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_param_file_prefix= (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_param_file_path=(null)/amca-param-sets:/home/rivis/src/mpisample (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_param_file_path_force= (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_env_list= (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mca_base_env_list_delimiter=; (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc:12232] mpi_java_eager=65536 (default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (snip)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU libc sets &quot;(null)&quot; for asprintf(buf, &quot;%s&quot;, NULL) but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris libc raises SEGV for it. I think this is the difference
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Siegmar's runs on Linux and Solaris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this mca_base_var_register should be moved to another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; place or opal_init_util or something should be called before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this mca_base_var_register.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Takahiro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thank you very much for the quick tutorial. Unfortunately I still
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can't get a backtrace.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You might need to configure with --enable-debug and add -g -O0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to your CFLAGS and LDFLAGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then once you attach with gdb, you have to find the thread that is polling :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thread 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thread 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and so on until you find the good thread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If _dbg is a local variable, you need to select the right frame
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before you can change the value :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get the frame number from bt (generally 1 under linux)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; f &lt;frame number&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set _dbg=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope this helps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;--enable-debug&quot; is one of my default options. Now I used the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following command to configure Open MPI. I always start the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build process in an empty directory and I always remove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/openmpi-1.9.0_64_gcc, before I install a new version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr openmpi-dev-124-g91e9686-SunOS.sparc.64_gcc 112 head config.log \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   | grep openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ../openmpi-dev-124-g91e9686/configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --prefix=/usr/local/openmpi-1.9.0_64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   LDFLAGS=-m64 -g -O0 CC=gcc CXX=g++ FC=gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CFLAGS=-m64 -D_REENTRANT -g -O0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPPFLAGS=-D_REENTRANT CXXCPPFLAGS=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-heterogeneous --enable-mpi-thread-multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-threads=posix --with-hwloc=internal --without-verbs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-wrapper-cflags=-std=c11 -m64 --enable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr openmpi-dev-124-g91e9686-SunOS.sparc.64_gcc 113
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;gbd&quot; doesn't allow any backtrace for any thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr java 124 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) attach 18876
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attaching to process 18876
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New process 18876]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Retry #1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Retry #2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Retry #3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Retry #4:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) info threads
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 12]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 11]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [New LWP 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Id   Target Id         Frame
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   12   LWP 2             0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   11   LWP 3             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10   LWP 4             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   9    LWP 5             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   8    LWP 6             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   7    LWP 7             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   6    LWP 8             0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   5    LWP 9             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   4    LWP 10            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   3    LWP 11            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   2    LWP 12            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 1    LWP 1             0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eaca12c in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 2 (LWP 12)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 3 (LWP 11)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 4 (LWP 10)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 5 (LWP 9)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 6 (LWP 8)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eacbcb0 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 7 (LWP 7)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 8 (LWP 6)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 9 (LWP 5)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac2638 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 10 (LWP 4)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 11 (LWP 3)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eac25a8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame identical to this frame (corrupt stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 12 (LWP 2)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried to set _dbg in all available frames without success.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) f 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eacb46c in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No symbol table is loaded.  Use the &quot;file&quot; command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reading symbols from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) f 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x7eacb46c in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) f 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00000000 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) set _dbg=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With &quot;list&quot; I get source code from mpi_CartComm.c and not from mpi_MPI.c.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If a switch threads, &quot;list&quot; continues in the old file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 1 (LWP 1)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) list 36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 31          distributed under the License is distributed on an &quot;AS IS&quot; BASIS,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 32          WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 33          See the License for the specific language governing permissions and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 34          limitations under the License.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 35      */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 36      /*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 37       * File         : mpi_CartComm.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 38       * Headerfile   : mpi_CartComm.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 39       * Author       : Sung-Hoon Ko, Xinying Li
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 40       * Created      : Thu Apr  9 12:22:15 1998
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) thread 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Switching to thread 2 (LWP 12)]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 41       * Revision     : $Revision: 1.6 $
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 42       * Updated      : $Date: 2003/01/16 16:39:34 $
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 43       * Copyright: Northeast Parallel Architectures Center
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 44       *            at Syracuse University 1998
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 45       */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 46      #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 47
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 48      #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 49      #ifdef HAVE_TARGETCONDITIONALS_H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 50      #include &lt;TargetConditionals.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have any ideas, what's going wrong or if I must use a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol table?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar Gross&lt;Siegmar.Gross_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I changed _dbg to a static variable, so that it is visible in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; library, but unfortunately still not in the symbol table.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr java 419 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so | grep -i _dbg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [271]   |  1249644|     4|OBJT |LOCL |0    |18     |_dbg.14258
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tyr java 420 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (gdb) attach 13019
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Attaching to process 13019
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [New process 13019]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Retry #1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Retry #2:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Retry #3:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Retry #4:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reading symbols from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (gdb) set var _dbg.14258=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; unfortunately I didn't get anything useful. It's probably my fault,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; because I'm still not very familiar with gdb or any other debugger.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I did the following things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1st window:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 174 setenv OMPI_ATTACH 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 175 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; warning: [path] bad path element
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   &quot;/usr/local/openmpi-1.9.0_64_gcc/lib64/shmem.jar&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   no such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 176 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2nd window:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 379 ps -aef | grep java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; noaccess  1345     1   0   May 22 ?         113:23 /usr/java/bin/java -server -Xmx128m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -XX:+UseParallelGC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -XX:ParallelGCThreads=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   fd1026  3661 10753   0 14:09:12 pts/14      0:00 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   fd1026  3677 13371   0 14:16:55 pts/2       0:00 grep java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   fd1026  3663  3661   0 14:09:12 pts/14      0:01 java -cp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/java:/usr/local/jun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 380 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) attach 3663
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Attaching to process 3663
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New process 3663]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Retry #1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Retry #2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Retry #3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Retry #4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reading symbols from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) set var _dbg=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) set var JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) set JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) info threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Id   Target Id         Frame
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   12   LWP 2             0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   11   LWP 3             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   10   LWP 4             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   9    LWP 5             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   8    LWP 6             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   7    LWP 7             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   6    LWP 8             0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   5    LWP 9             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   4    LWP 10            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   3    LWP 11            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   2    LWP 12            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * 1    LWP 1             0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems that &quot;_dbg&quot; is unknown and unavailable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 399 grep _dbg /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        volatile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int _dbg = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (_dbg) poll(NULL, 0, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 400 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i _dbg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 401 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i JNI_OnLoad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [1057]  |              139688|                 444|FUNC |GLOB |0    |11     |JNI_OnLoad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 402
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; How can I set _dbg to zero to continue mpiexec? I also tried to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; set a breakpoint for function JNI_OnLoad, but it seems, that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; function isn't called before SIGSEGV.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 177 unsetenv OMPI_ATTACH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 178 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) b mpi_MPI.c:JNI_OnLoad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No source file named mpi_MPI.c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Make breakpoint pending on future shared library load? (y or [n]) y
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Breakpoint 1 (mpi_MPI.c:JNI_OnLoad) pending.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) run -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3518, tid=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 381 cat InitFinalizeMain.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; import mpi.*;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; public class InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI.Init (args);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     System.out.print (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI.Finalize ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; SIGSEGV happens in MPI.Init(args), because I can print a message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; before I call the method.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 192 unsetenv OMPI_ATTACH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 193 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 194 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Before MPI.Init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3697, tid=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas, how I can continue? I couldn't find a C function for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI.Init() in a C file. Do you know, which function is called first,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; so that I can set a breakpoint? By the way, I get the same error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; for Solaris 10 x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr java 388 ssh sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sunpc1 java 106 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sunpc1 java 107 uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sunpc1 java 108 isainfo -k
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; amd64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sunpc1 java 109 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #  SIGSEGV (0xb) at pc=0xfffffd7fff1d77f0, pid=20256, tid=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thank you very much for your help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; how did you configure openmpi ? which java version did you use ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; i just found a regression and you currently have to explicitly add
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS=-D_REENTRANT CPPFLAGS=-D_REENTRANT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to your configure command line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I added &quot;-D_REENTRANT&quot; to my command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../openmpi-dev-124-g91e9686/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   CFLAGS=&quot;-m64 -D_REENTRANT&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   CPPFLAGS=&quot;-D_REENTRANT&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --with-threads=posix \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I use Java 8.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr openmpi-1.9 112 java -version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; java version &quot;1.8.0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Java(TM) SE Runtime Environment (build 1.8.0-b132)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Java HotSpot(TM) 64-Bit Server VM (build 25.0-b70, mixed mode)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tyr openmpi-1.9 113
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately I still get a SIGSEGV with openmpi-dev-124-g91e9686.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have applied your patch and will try to debug my small Java
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program tomorrow or next week and then let you know the result.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/10/25590.php">http://www.open-mpi.org/community/lists/users/2014/10/25590.php</a>  &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/10/25590.php">http://www.open-mpi.org/community/lists/users/2014/10/25590.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/10/25591.php">http://www.open-mpi.org/community/lists/users/2014/10/25591.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25596.php">http://www.open-mpi.org/community/lists/users/2014/10/25596.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>Previous message:</strong> <a href="25599.php">maxinator333: "[OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>In reply to:</strong> <a href="25596.php">Gilles Gouaillardet: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
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
