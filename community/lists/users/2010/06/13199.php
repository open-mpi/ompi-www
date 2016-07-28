<?
$subject_val = "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 08:03:11 2010" -->
<!-- isoreceived="20100602120311" -->
<!-- sent="Wed, 2 Jun 2010 06:03:05 -0600" -->
<!-- isosent="20100602120305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?" -->
<!-- id="AANLkTik8vQgomnIIx_gKfm_D7C4C7shKZloFYYk93UZo_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201006021149.26302.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 08:03:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13201.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Reply:</strong> <a href="13201.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird - it works fine for me:
<br>
<p>sjc-vpn5-109:mpi rhc$ mpirun -n 3 ./abort
<br>
Hello, World, I am 1 of 3
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
<br>
with errorcode 2.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 22980 on
<br>
node sjc-vpn5-109.cisco.com exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
Hello, World, I am 0 of 3
<br>
Hello, World, I am 2 of 3
<br>
<p>I built it with gcc 4.2.1, though - I know we have a problem with shared
<br>
memory hanging when built with gcc 4.4.x, so I wonder if the issue here is
<br>
your use of gcc 4.5?
<br>
<p>Can you try running this again with -mca btl ^sm?
<br>
<p><p>On Wed, Jun 2, 2010 at 3:49 AM, Yves Caniou &lt;yves.caniou_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As already said on this mailing list, I found that a simple Hello_world
</span><br>
<span class="quotelev1">&gt; program does not necessarily  end (the program just hangs after the
</span><br>
<span class="quotelev1">&gt; MPI_Finalize(), and I can printf the MPI_FINALIZED which confirm that the
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; part of the code has finished, but the exit() or return() never ends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I tried to use MPI_Abort(), and observed two different behaviors
</span><br>
<span class="quotelev1">&gt; (description of the architecture is given below).
</span><br>
<span class="quotelev1">&gt; Either it ends with a segfault, or the application doesn't return to shell,
</span><br>
<span class="quotelev1">&gt; even if the string &quot;MPI_ABORT was [...] here).&quot; appears on screen (program
</span><br>
<span class="quotelev1">&gt; just hangs, as with MPI_Finalize()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is annoying since I need several execution in a batch script, since
</span><br>
<span class="quotelev1">&gt; several submission cost a lot of time in queues. Then, if you have any tips
</span><br>
<span class="quotelev1">&gt; to bypass the hanging of the application, I take it (even if it means
</span><br>
<span class="quotelev1">&gt; recompile OpenMPI with specific options of course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is an example of the output produced on screen. Note that errorcode is
</span><br>
<span class="quotelev1">&gt; the rank of the process which called MPI_Abort().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ############################################
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 0 with PID 18062 on
</span><br>
<span class="quotelev1">&gt; node ha8000-1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ha8000-1:18060] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ha8000-1:18060] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [ha8000-1:18060] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [ha8000-1:18060] Failing at address: 0x2aaaac1bd940
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; ############################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The architecture is a Quad-Core AMD Opteron(tm) Processor 8356, Ethernet
</span><br>
<span class="quotelev1">&gt; controller: MYRICOM Inc. Myri-10G Dual-Protocol NIC (10G-PCIE-8A), the
</span><br>
<span class="quotelev1">&gt; version of OMPI is 1.4.2 and have been compiled with GCC-4.5
</span><br>
<span class="quotelev1">&gt; $&gt;ompi_info
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI p10015_at_ha8000-1 Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.4.2
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r23093
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: May 04, 2010
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.4.2
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r23093
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: May 04, 2010
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.4.2
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r23093
</span><br>
<span class="quotelev1">&gt;       OPAL release date: May 04, 2010
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.4.2
</span><br>
<span class="quotelev1">&gt;                  Prefix: /home/p10015/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: ha8000-1
</span><br>
<span class="quotelev1">&gt;           Configured by: p10015
</span><br>
<span class="quotelev1">&gt;           Configured on: Wed May 19 19:01:19 JST 2010
</span><br>
<span class="quotelev1">&gt;          Configure host: ha8000-1
</span><br>
<span class="quotelev1">&gt;                Built by: p10015
</span><br>
<span class="quotelev1">&gt;                Built on: Wed May 19 21:03:33 JST 2010
</span><br>
<span class="quotelev1">&gt;              Built host: ha8000-1
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C
</span><br>
<span class="quotelev1">&gt; compiler: /home/p10015/gcc/bin/x86_64-unknown-linux-gnu-gcc-4.5.0
</span><br>
<span class="quotelev1">&gt;     C compiler absolute:
</span><br>
<span class="quotelev1">&gt;            C++ compiler: /home/p10015/gcc/bin/x86_64-unknown-linux-gnu-g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute:
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: yes, progress: yes)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: yes
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: load_balance (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-4212-2412
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a> &lt;<a href="http://graal.ens-lyon.fr/%7Eycaniou/">http://graal.ens-lyon.fr/%7Eycaniou/</a>&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13201.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Reply:</strong> <a href="13201.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
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
