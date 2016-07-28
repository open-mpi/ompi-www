<?
$subject_val = "Re: [OMPI users] mpi_type_create_struct not working for large counts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 11:50:03 2015" -->
<!-- isoreceived="20150414155003" -->
<!-- sent="Tue, 14 Apr 2015 11:49:58 -0400" -->
<!-- isosent="20150414154958" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_type_create_struct not working for large counts" -->
<!-- id="F17CFF81-C8E7-471E-A475-BB9BFBCA0EDD_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FC64FEF6471E804DA9CA2F6DBDCFD62B014C6625_at_EXDAG0-B2.intra.cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_type_create_struct not working for large counts<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 11:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26720.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26720.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26733.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26733.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is one of the most classical bugs with point-to-point applications. Sends behave as non blocking as long as the amount of data is below the eager limit. Once the eager limit is passed, sends have a blocking behavior which requires that the peer has a posted receive. This explains why it is working for 100 but not for 1000.
<br>
<p>The correct application is attached below. This doesn&#226;&#128;&#153;t validate the one-sided run thou.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>

<br><p>
<p><span class="quotelev1">&gt; On Apr 14, 2015, at 11:07 , MOHR STEPHAN 239883 &lt;STEPHAN.MOHR_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried with send/recv, but the outcome is the same. It works for small counts (e.g. n=100), but hangs for larger ones (e.g. n=1000).
</span><br>
<span class="quotelev1">&gt; I attached my modified program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Nathan Hjelm [hjelmn_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 14, 2015 16:44
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi_type_create_struct not working for large counts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try using send/recv with the datatype in question? It could be a
</span><br>
<span class="quotelev1">&gt; problem with either the one-sided code or the datatype code. Could you
</span><br>
<span class="quotelev1">&gt; also give master a try?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 14, 2015 at 06:43:31AM +0000, MOHR STEPHAN 239883 wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Hi Howard,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   I tried with 1.8.5rc1, but it doesn't work either.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   The output of ompi_info is attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   Stephan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   From: users [users-bounces_at_[hidden]] on behalf of Howard Pritchard
</span><br>
<span class="quotelev2">&gt;&gt;   [hppritcha_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;   Sent: Monday, April 13, 2015 19:41
</span><br>
<span class="quotelev2">&gt;&gt;   To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;   Subject: Re: [OMPI users] mpi_type_create_struct not working for large
</span><br>
<span class="quotelev2">&gt;&gt;   counts
</span><br>
<span class="quotelev2">&gt;&gt;   HI Stephan,
</span><br>
<span class="quotelev2">&gt;&gt;   For starters, would you mind sending the output you get when you run the
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_info command?
</span><br>
<span class="quotelev2">&gt;&gt;   If you could, it would be great if you could try running the test against
</span><br>
<span class="quotelev2">&gt;&gt;   the latest 1.8.5rc1?
</span><br>
<span class="quotelev2">&gt;&gt;   The test appears to work without problem using mpich, at least with 4
</span><br>
<span class="quotelev2">&gt;&gt;   ranks.
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   Howard
</span><br>
<span class="quotelev2">&gt;&gt;   2015-04-13 10:40 GMT-06:00 MOHR STEPHAN 239883 &lt;STEPHAN.MOHR_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     I've got an issue when using a derived data type created by
</span><br>
<span class="quotelev2">&gt;&gt;     mpi_type_create_struct in a one-sided communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     The problem can be reproduced using the small standalone program which I
</span><br>
<span class="quotelev2">&gt;&gt;     attached. It just creates a type which should be equivalent to n
</span><br>
<span class="quotelev2">&gt;&gt;     contiguous elements. This type is then used in a mpi_get. With a value
</span><br>
<span class="quotelev2">&gt;&gt;     n=100 it works fine, but with n=1000 it either hangs (version 1.8.1) or
</span><br>
<span class="quotelev2">&gt;&gt;     crashes (version 1.6.5).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Stephan
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/04/26695.php">http://www.open-mpi.org/community/lists/users/2015/04/26695.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 Package: Open MPI stephanm_at_girofle Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.8.5rc1
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI repo revision: v1.8.4-184-g481d751
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI release date: Apr 05, 2015
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.8.5rc1
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE repo revision: v1.8.4-184-g481d751
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE release date: Apr 05, 2015
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.8.5rc1
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL repo revision: v1.8.4-184-g481d751
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL release date: Apr 05, 2015
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI API: 3.0
</span><br>
<span class="quotelev2">&gt;&gt;            Ident string: 1.8.5rc1
</span><br>
<span class="quotelev2">&gt;&gt;                  Prefix: /local/stephanm/openmpi-1.8.5rc1_intel
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: girofle
</span><br>
<span class="quotelev2">&gt;&gt;           Configured by: stephanm
</span><br>
<span class="quotelev2">&gt;&gt;           Configured on: Tue Apr 14 07:32:10 CEST 2015
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: girofle
</span><br>
<span class="quotelev2">&gt;&gt;                Built by: stephanm
</span><br>
<span class="quotelev2">&gt;&gt;                Built on: Tue Apr 14 08:05:43 CEST 2015
</span><br>
<span class="quotelev2">&gt;&gt;              Built host: girofle
</span><br>
<span class="quotelev2">&gt;&gt;              C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             Fort mpif.h: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;            Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev2">&gt;&gt;       Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev2">&gt;&gt;        Fort use mpi_f08: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fort mpi_f08 compliance: The mpi_f08 module is available, but due to limitations in the ifort compiler, does not support the following: array subsections, direct passthru (where possible) to underlying Open MPI's C functionality
</span><br>
<span class="quotelev2">&gt;&gt;  Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev2">&gt;&gt;           Java bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;  Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev2">&gt;&gt;              C compiler: icc
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /local/stephanm/composer_xe_2013_sp1.0.080/bin/intel64/icc
</span><br>
<span class="quotelev2">&gt;&gt;  C compiler family name: INTEL
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler version: 1400.20130728
</span><br>
<span class="quotelev2">&gt;&gt;            C++ compiler: icpc
</span><br>
<span class="quotelev2">&gt;&gt;   C++ compiler absolute: /local/stephanm/composer_xe_2013_sp1.0.080/bin/intel64/icpc
</span><br>
<span class="quotelev2">&gt;&gt;           Fort compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt;       Fort compiler abs: /local/stephanm/composer_xe_2013_sp1.0.080/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt;&gt;         Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev2">&gt;&gt;   Fort 08 assumed shape: no
</span><br>
<span class="quotelev2">&gt;&gt;      Fort optional args: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort INTERFACE: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fort ISO_FORTRAN_ENV: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort STORAGE_SIZE: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort BIND(C) (all): yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev2">&gt;&gt; Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev2">&gt;&gt;            Fort PRIVATE: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort PROTECTED: yes
</span><br>
<span class="quotelev2">&gt;&gt;           Fort ABSTRACT: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort PROCEDURE: yes
</span><br>
<span class="quotelev2">&gt;&gt;           Fort C_FUNLOC: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fort f08 using wrappers: yes
</span><br>
<span class="quotelev2">&gt;&gt;         Fort MPI_SIZEOF: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fort mpif.h profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fort use mpi profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;          Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev2">&gt;&gt;           Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;  MPI interface warnings: yes
</span><br>
<span class="quotelev2">&gt;&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;         libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Host topology support: yes
</span><br>
<span class="quotelev2">&gt;&gt;          MPI extensions:
</span><br>
<span class="quotelev2">&gt;&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;   C/R Enabled Debugging: no
</span><br>
<span class="quotelev2">&gt;&gt;     VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt;&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA compress: bzip (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA compress: gzip (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA crs: none (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA db: hash (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA db: print (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA event: libevent2021 (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA hwloc: hwloc191 (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA if: posix_ipv4 (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA if: linux_ipv6 (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA memory: linux (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA pstat: linux (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sec: basic (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA shmem: posix (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA dfs: app (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA dfs: orted (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA dfs: test (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: default_app (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: default_hnp (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: default_orted (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA errmgr: default_tool (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: env (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: hnp (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: singleton (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: slurm (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ess: tool (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA filem: raw (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: mr_hnp (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: mr_orted (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA plm: isolated (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: simulator (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: debruijn (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA routed: radix (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: app (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: hnp (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: novm (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: orted (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: staged_hnp (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: staged_orted (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA state: tool (MCA v2.0, API v1.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA bcol: basesmuma (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA bcol: ptpcoll (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: openib (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: vader (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: libnbc (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: ml (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA fbtl: posix (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA fcoll: dynamic (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA fcoll: individual (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA fcoll: static (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA fcoll: two_phase (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA fcoll: ylib (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA fs: ufs (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA io: ompio (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: grdma (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA osc: rdma (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA osc: sm (MCA v2.0, API v3.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rte: orte (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sbgp: basesmsocket (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sbgp: basesmuma (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sbgp: p2p (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA sharedfp: individual (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA sharedfp: lockedfile (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA sharedfp: sm (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA topo: basic (MCA v2.0, API v2.1, Component v1.8.5)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA vprotocol: pessimist (MCA v2.0, API v2.0, Component v1.8.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26713.php">http://www.open-mpi.org/community/lists/users/2015/04/26713.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;test_mpi_sendrecv.f90&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26720.php">http://www.open-mpi.org/community/lists/users/2015/04/26720.php</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26721/test_mpi_sendrecv.f90">test_mpi_sendrecv.f90</a>
</ul>
<!-- attachment="test_mpi_sendrecv.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26720.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26720.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26733.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26733.php">MOHR STEPHAN 239883: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
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
