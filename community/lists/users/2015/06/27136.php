<?
$subject_val = "[OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 06:40:50 2015" -->
<!-- isoreceived="20150616104050" -->
<!-- sent="Tue, 16 Jun 2015 12:40:27 +0200 (CEST)" -->
<!-- isosent="20150616104027" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux" -->
<!-- id="201506161040.t5GAeRID022203_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-16 06:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27137.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Previous message:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27137.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Reply:</strong> <a href="27137.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Maybe reply:</strong> <a href="27139.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-1883-g7cce015 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-5.1.0 and Sun C 5.13/5.12. I got the following
<br>
error for gcc-5.1.0 and Sun C 5.12 on Linux and I didn't get any
<br>
errors on my Solaris machines for gcc-5.1.0 and Sun C 5.13.
<br>
I used the following command to configure the package for gcc.
<br>
<p>../openmpi-dev-1883-g7cce015/configure --prefix=/usr/local/openmpi-master_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-master_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>...
<br>
make  install-exec-hook
<br>
make[3]: Entering directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_argv_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_argvs_null
<br>
[...]
<br>
skipping remaining symbols. To see all symbols, run:
<br>
&nbsp;&nbsp;../openmpi-dev-1883-g7cce015/config/find_common_syms --top_builddir=. --top_srcdir=../openmpi-dev-1883-g7cce015 --objext=o
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>
make[3]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
<br>
linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc 130 
<br>
<p><p><p>linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc 130 ../openmpi-dev-1883-g7cce015/config/find_common_syms --top_builddir=. --top_srcdir=../openmpi-dev-1883-g7cce015 --objext=o
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_argv_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_argvs_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_bottom
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_errcodes_ignore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_in_place
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000018 C mpi_fortran_status_ignore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000018 C mpi_fortran_statuses_ignore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_unweighted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C mpi_fortran_weights_empty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2complex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2double_complex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2double_precision
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2integer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2real
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_band
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_bor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_bxor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_byte
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_character
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_comm_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_comm_self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_comm_world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_datatype_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_double_complex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_double_precision
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_errhandler_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_errors_are_fatal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_errors_return
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_file_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_group_empty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_group_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_info_env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_info_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_land
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_lb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_lor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_lxor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_max
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_maxloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_message_no_proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_message_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_min
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_minloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_op_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_packed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_prod
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_replace
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_request_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_sum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_ub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_win_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 0000000000000010 C shmem_java
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
<br>
linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc 131 
<br>
<p><p><p><p>...
<br>
make  install-exec-hook
<br>
make[3]: Entering directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 0000000000000010 C shmem_java
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>
make[3]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
<br>
linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc 130 
<br>
<p><p>linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc 130 ../openmpi-dev-1883-g7cce015/config/find_common_syms --top_builddir=. --top_srcdir=../openmpi-dev-1883-g7cce015 --objext=o
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 0000000000000010 C shmem_java
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
<br>
linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc 131 
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27137.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Previous message:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27137.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Reply:</strong> <a href="27137.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Maybe reply:</strong> <a href="27139.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
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
