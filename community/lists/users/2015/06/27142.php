<?
$subject_val = "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 16:29:24 2015" -->
<!-- isoreceived="20150616202924" -->
<!-- sent="Tue, 16 Jun 2015 20:29:21 +0000" -->
<!-- isosent="20150616202921" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux" -->
<!-- id="46171249-3FD1-4D15-9621-64BC743F28E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201506161517.t5GFH8Al023892_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-16 16:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Previous message:</strong> <a href="27141.php">Tim Miller: "[OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>In reply to:</strong> <a href="27139.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We just recently started showing these common symbol warnings -- they're really motivations to ourselves to reduce the number of common symbols.  :-)
<br>
<p><p><span class="quotelev1">&gt; On Jun 16, 2015, at 11:17 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; these are just warnings, you can safely ignore them
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good to know. Nevertheless, I thought that you may be interested to
</span><br>
<span class="quotelev1">&gt; know about the warnings, because they are new.
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
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, June 16, 2015, Siegmar Gross &lt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; today I tried to build openmpi-dev-1883-g7cce015 on my machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64) with gcc-5.1.0 and Sun C 5.13/5.12. I got the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error for gcc-5.1.0 and Sun C 5.12 on Linux and I didn't get any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors on my Solaris machines for gcc-5.1.0 and Sun C 5.13.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used the following command to configure the package for gcc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-dev-1883-g7cce015/configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/usr/local/openmpi-master_64_gcc \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --libdir=/usr/local/openmpi-master_64_gcc/lib64 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --without-verbs \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-debug \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  install-exec-hook
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_argv_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_argvs_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skipping remaining symbols. To see all symbols, run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ../openmpi-dev-1883-g7cce015/config/find_common_syms --top_builddir=.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --top_srcdir=../openmpi-dev-1883-g7cce015 --objext=o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-dev-1883-g7cce015/config/find_common_syms --top_builddir=.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --top_srcdir=../openmpi-dev-1883-g7cce015 --objext=o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_argv_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_argvs_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_bottom
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_errcodes_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_in_place
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000018 C mpi_fortran_status_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000018 C mpi_fortran_statuses_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_unweighted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C mpi_fortran_weights_empty
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2double_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_f08_mpi_2double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_band
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_bor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_bxor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_byte
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_character
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_comm_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_comm_self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_comm_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_complex8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_datatype_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_double_complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_double_precision
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_errhandler_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_errors_are_fatal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_errors_return
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_file_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_group_empty
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_group_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_info_env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_info_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_integer8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_land
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_lb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_logical8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_lor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_lxor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_max
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_maxloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_message_no_proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_message_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_min
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_minloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_op_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_packed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_prod
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_real8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_replace
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_request_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_sum
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_ub
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_win_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            shmem_ShMem.o: 0000000000000010 C shmem_java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_gcc 131
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  install-exec-hook
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            shmem_ShMem.o: 0000000000000010 C shmem_java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export2/src/openmpi-master/openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-dev-1883-g7cce015/config/find_common_syms --top_builddir=.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --top_srcdir=../openmpi-dev-1883-g7cce015 --objext=o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            shmem_ShMem.o: 0000000000000010 C shmem_java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 openmpi-dev-1883-g7cce015-Linux.x86_64.64_cc 131
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27136.php">http://www.open-mpi.org/community/lists/users/2015/06/27136.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27139.php">http://www.open-mpi.org/community/lists/users/2015/06/27139.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Previous message:</strong> <a href="27141.php">Tim Miller: "[OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>In reply to:</strong> <a href="27139.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
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
