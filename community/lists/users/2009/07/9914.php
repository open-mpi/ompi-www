<?
$subject_val = "Re: [OMPI users] default host file ignore?  (also, what limits connections?)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 09:33:13 2009" -->
<!-- isoreceived="20090711133313" -->
<!-- sent="Sat, 11 Jul 2009 07:33:00 -0600" -->
<!-- isosent="20090711133300" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default host file ignore?  (also, what limits connections?)" -->
<!-- id="29D20845-B6E3-472A-BE8D-DBF7F19C7B7B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A5891C0.6090007_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] default host file ignore?  (also, what limits connections?)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-11 09:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<li><strong>Previous message:</strong> <a href="9913.php">John R. Cary: "[OMPI users] default host file ignore?  (also, what limits connections?)"</a>
<li><strong>In reply to:</strong> <a href="9913.php">John R. Cary: "[OMPI users] default host file ignore?  (also, what limits connections?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<li><strong>Reply:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the 1.3 series and beyond, you have to specifically tell us the  
<br>
name of any hostfile, including the default one for your system. So,  
<br>
in this example, you would want to set:
<br>
<p>OMPI_MCA_orte_default_hostfile=absolute-path-to-openmpi-default-hostfile
<br>
<p>in your environment, or just add:
<br>
<p>-mca default-hostfile path-to-openmpi-default-hostfile
<br>
<p>on your cmd line. Check out &quot;man orte_hosts&quot; for a full explanation of  
<br>
how these are used as it has changed from 1.2.
<br>
<p>Ralph
<br>
<p><p>On Jul 11, 2009, at 7:21 AM, John R. Cary wrote:
<br>
<p><span class="quotelev1">&gt; The original problem was that I could not get an 8-proc job to
</span><br>
<span class="quotelev1">&gt; run on an 8-core cluster.  I loaded mpi4py and petsc4py, and then
</span><br>
<span class="quotelev1">&gt; I try to run the python script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt; from petsc4py import PETSc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 -x PYTHONPATH python test-mpi4py.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This hangs on my 8-core FC11 box.  Either of the following
</span><br>
<span class="quotelev1">&gt; allows it to work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remove the petsc4py import statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run not on localhost, but on two machines in the cluster:
</span><br>
<span class="quotelev1">&gt;   mpirun -n 8 -host 10.0.0.14,10.0.0.15 -x PYTHONPATH python test- 
</span><br>
<span class="quotelev1">&gt; mpi4py.py
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Curiously, putting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.0.0.12 slots=4
</span><br>
<span class="quotelev1">&gt; 10.0.0.13 slots=4
</span><br>
<span class="quotelev1">&gt; 10.0.0.14 slots=4
</span><br>
<span class="quotelev1">&gt; 10.0.0.15 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in openmpi-default-hostfile does not seem to affect anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, I am running over rsh.  The output of ompi_info is appended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems as though something (openmpi? rsh?) is limiting the
</span><br>
<span class="quotelev1">&gt; number of connections per machine, and then that petsc is
</span><br>
<span class="quotelev1">&gt; requiring additional connections which exceed that limit.
</span><br>
<span class="quotelev1">&gt; What could be doing this limiting?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks....John Cary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt;                Package: Open MPI cary_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;               Open MPI: 1.3.2
</span><br>
<span class="quotelev1">&gt;  Open MPI SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;  Open MPI release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;               Open RTE: 1.3.2
</span><br>
<span class="quotelev1">&gt;  Open RTE SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;  Open RTE release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;                   OPAL: 1.3.2
</span><br>
<span class="quotelev1">&gt;      OPAL SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;      OPAL release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;           Ident string: 1.3.2
</span><br>
<span class="quotelev1">&gt;                 Prefix: /usr/local/openmpi-1.3.2-nodlopen
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;         Configure host: iter.txcorp.com
</span><br>
<span class="quotelev1">&gt;          Configured by: cary
</span><br>
<span class="quotelev1">&gt;          Configured on: Fri Jul 10 07:12:06 MDT 2009
</span><br>
<span class="quotelev1">&gt;         Configure host: iter.txcorp.com
</span><br>
<span class="quotelev1">&gt;               Built by: cary
</span><br>
<span class="quotelev1">&gt;               Built on: Fri Jul 10 07:42:03 MDT 2009
</span><br>
<span class="quotelev1">&gt;             Built host: iter.txcorp.com
</span><br>
<span class="quotelev1">&gt;             C bindings: yes
</span><br>
<span class="quotelev1">&gt;           C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;     Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;             C compiler: gcc
</span><br>
<span class="quotelev1">&gt;    C compiler absolute: /usr/lib64/ccache/gcc
</span><br>
<span class="quotelev1">&gt;           C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;  C++ compiler absolute: /usr/lib64/ccache/g++
</span><br>
<span class="quotelev1">&gt;     Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;     Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;            C profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;         C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;          Sparse Groups: no
</span><br>
<span class="quotelev1">&gt; Internal debug support: no
</span><br>
<span class="quotelev1">&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;        libltdl support: no
</span><br>
<span class="quotelev1">&gt;  Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;        MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;      MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;  FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;          MCA backtrace: execinfo (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;          MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA carto: auto_detect (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA carto: file (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;          MCA maffinity: first_use (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;        MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;        MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;          MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;          MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: hierarch (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: self (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA io: romio (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA pml: v (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA btl: self (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA odls: default (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ras: tm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: rank_file (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: round_robin (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA routed: binomial (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA plm: tm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ess: env (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ess: singleton (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;            MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;            MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<li><strong>Previous message:</strong> <a href="9913.php">John R. Cary: "[OMPI users] default host file ignore?  (also, what limits connections?)"</a>
<li><strong>In reply to:</strong> <a href="9913.php">John R. Cary: "[OMPI users] default host file ignore?  (also, what limits connections?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
<li><strong>Reply:</strong> <a href="9915.php">John R. Cary: "[OMPI users] And anyone know what limits connections?"</a>
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
