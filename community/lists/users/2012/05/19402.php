<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 16:54:14 2012" -->
<!-- isoreceived="20120531205414" -->
<!-- sent="Thu, 31 May 2012 16:54:08 -0400" -->
<!-- isosent="20120531205408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="9578E75B-DA39-4B26-9D2A-40671BB03F6A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkgxcznY4mapMko1HcRxiF6u9XdtNtgMU_-niyJdOXT_kTJ6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 16:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19401.php">Edmund Sumbar: "[OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19401.php">Edmund Sumbar: "[OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This type of error usually means that you are inadvertently mixing versions of Open MPI (e.g., version A.B.C on one node and D.E.F on another node).
<br>
<p>Ensure that your paths are setup consistently and that you're getting both the same OMPI tools in your $path and the same libmpi.so in your $LD_LIBRARY_PATH.
<br>
<p><p><p>On May 31, 2012, at 3:43 PM, Edmund Sumbar wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I feel like a dope. I can't seem to successfully run the following simple test program (from Intel MPI distro) as a Torque batch job on a Cent OS 5.7 cluster with Open MPI 1.6 compiled using Intel compilers 12.1.0.233.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I comment out MPI_Get_processor_name(), it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int i, rank, size, namelen;
</span><br>
<span class="quotelev1">&gt;     char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;     MPI_Status stat;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name (name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf (&quot;Hello world: rank %d of %d running on %s\n&quot;, rank, size, name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (i = 1; i &lt; size; i++) {
</span><br>
<span class="quotelev1">&gt;         MPI_Recv (&amp;rank, 1, MPI_INT, i, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv (&amp;size, 1, MPI_INT, i, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv (&amp;namelen, 1, MPI_INT, i, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv (name, namelen + 1, MPI_CHAR, i, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;         printf (&quot;Hello world: rank %d of %d running on %s\n&quot;, rank, size, name);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Send (&amp;rank, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Send (&amp;size, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Send (&amp;namelen, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Send (name, namelen + 1, MPI_CHAR, 0, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return (0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The result I get is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 0] /lib64/libpthread.so.0 [0x306980ebe0]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 1] /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3) [0x2af078563113]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 2] /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x59) [0x2af0785658a9]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 3] /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1 [0x2af078565596]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 4] /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_class_initialize+0xaa) [0x2af078582faa]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 5] /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/openmpi/mca_btl_openib.so [0x2af07c3e1909]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 6] /lib64/libpthread.so.0 [0x306980677d]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] [ 7] /lib64/libc.so.6(clone+0x6d) [0x3068cd325d]
</span><br>
<span class="quotelev1">&gt; [cl2n007:19441] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [cl2n006:11146] [[51262,0],8] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt; [cl2n006:11146] [[51262,0],8] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n006:11146] [[51262,0],8] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line[cl2n007:19434] [[51262,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt;  2342
</span><br>
<span class="quotelev1">&gt; [cl2n007:19434] [[51262,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n007:19434] [[51262,0],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line 2342
</span><br>
<span class="quotelev1">&gt; [cl2n005:13582] [[51262,0],9] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 776
</span><br>
<span class="quotelev1">&gt; [cl2n005:13582] [[51262,0],9] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_tm_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [cl2n005:13582] [[51262,0],9] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/odls_base_default_fns.c at line 2342
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...more of the same...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info 
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.6
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.6
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.6
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;        OPAL release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;                  MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.6
</span><br>
<span class="quotelev1">&gt;                   Prefix: /lustre/jasper/software/openmpi/openmpi-1.6-intel
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: jasper.westgrid.ca
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed May 30 13:56:39 MDT 2012
</span><br>
<span class="quotelev1">&gt;           Configure host: jasper.westgrid.ca
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed May 30 14:35:10 MDT 2012
</span><br>
<span class="quotelev1">&gt;               Built host: jasper.westgrid.ca
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
<span class="quotelev1">&gt;               C compiler: icc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt;   C compiler family name: INTEL
</span><br>
<span class="quotelev1">&gt;       C compiler version: 9999.20110811
</span><br>
<span class="quotelev1">&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64/ifort
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
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;              MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; University of Alberta
</span><br>
<span class="quotelev1">&gt; +1 780 492 9360
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
<li><strong>Next message:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19401.php">Edmund Sumbar: "[OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19401.php">Edmund Sumbar: "[OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
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
