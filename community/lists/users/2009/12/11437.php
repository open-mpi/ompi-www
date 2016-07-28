<?
$subject_val = "Re: [OMPI users] Tons of warnings in running my first openmpi job";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 07:55:44 2009" -->
<!-- isoreceived="20091206125544" -->
<!-- sent="Sun, 6 Dec 2009 07:55:37 -0500" -->
<!-- isosent="20091206125537" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tons of warnings in running my first openmpi job" -->
<!-- id="ECB3AC99-0DEC-4372-846F-C4470910851A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="36ce1c690912052017h500e061ct261a7aff6a54a48_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tons of warnings in running my first openmpi job<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-06 07:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11434.php">Zheng Li: "[OMPI users] Tons of warnings in running my first openmpi job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your version of Open MPI is compiled and linked against the DAPL library, but the DAPL library is not present on your system (or it is incorrectly installed...?  I'm not very familiar with DAPL).  You should probably contact your sysadmin to ask about the DAPL installation.
<br>
<p>FWIW, DAPL is not recommended for Linux systems.  It is mainly in the Open MPI code base to support Solaris.
<br>
<p>You should be able to avoid these warnings by editing the Open MPI system-wide run-time parameters file and adding the following:
<br>
<p>btl = ^udapl
<br>
<p>This tells Open MPI to load all BTL plugins *except* the &quot;udapl&quot; plugin.  
<br>
<p>I don't know where the Open MPI system-wide param file will be installed on your system; look for a file named &quot;openmpi-mca-params.conf&quot;.
<br>
<p><p><p>On Dec 5, 2009, at 11:17 PM, Zheng Li wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a new user of openmpi, and I tried to run hello world in mpi but
</span><br>
<span class="quotelev1">&gt; get tons of warning during runing. I tried to go through the FAQ but
</span><br>
<span class="quotelev1">&gt; still could not figure out why these warnings happen. Could anyone
</span><br>
<span class="quotelev1">&gt; help to give me some hint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Zheng
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running openmpi on a opensuse linux of a two quad core machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======Code ===========
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( argc, argv )
</span><br>
<span class="quotelev1">&gt; int argc;
</span><br>
<span class="quotelev1">&gt; char **argv;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt; printf( &quot;Hello world\n&quot; );
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========Warnings during run time ========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 1 a.out
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplcma.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-cma&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplcma.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-cma-1&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplscm.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplscm.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplscm.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplscm.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; DAT: library load failure: /usr/lib64/libdaplcma.so.1: undefined
</span><br>
<span class="quotelev1">&gt; symbol: dat_registry_add_provider
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-mthca0-1&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-mthca0-2&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-mlx4_0-1&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-mlx4_0-2&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;OpenIB-iwarp&quot;
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: uDAPL on host ecee189-99-dhcp was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====System configuration========
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.8
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.8
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.8
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r19718
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: abuild
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Dec  3 11:38:52 UTC 2008
</span><br>
<span class="quotelev1">&gt;           Configure host: build21
</span><br>
<span class="quotelev1">&gt;                 Built by: abuild
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed Dec  3 11:48:22 UTC 2008
</span><br>
<span class="quotelev1">&gt;               Built host: build21
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11438.php">Douglas Guptill: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11436.php">Katz, Jacob: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11434.php">Zheng Li: "[OMPI users] Tons of warnings in running my first openmpi job"</a>
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
