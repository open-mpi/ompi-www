<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 09:47:51 2007" -->
<!-- isoreceived="20070611134751" -->
<!-- sent="Mon, 11 Jun 2007 09:47:40 -0400" -->
<!-- isosent="20070611134740" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems" -->
<!-- id="466D527C.7070208_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="466C655F.8080706_at_physik.uni-halle.de" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 09:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1655.php">Jeff Squyres: "[OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Markus Daene wrote:
<br>
<span class="quotelev1">&gt; then it becomes ever worse:
</span><br>
<span class="quotelev1">&gt; openmpi nicely report the (max./act.) used virtual memory to the grid
</span><br>
<span class="quotelev1">&gt; engine as sum of all processes.
</span><br>
<span class="quotelev1">&gt; This value is the compared with the one the user has specified with the
</span><br>
<span class="quotelev1">&gt; h_vmem option, but the
</span><br>
<span class="quotelev1">&gt; gridengine takes this value per process for the allocation of the job
</span><br>
<span class="quotelev1">&gt; (works) and does not multiply
</span><br>
<span class="quotelev1">&gt; this with the number of processes. Maybe one should report this to the
</span><br>
<span class="quotelev1">&gt; gridenging mailing list, but it
</span><br>
<span class="quotelev1">&gt; could be related as well for the openmpi interface.
</span><br>
<p>Hi Markus,
<br>
<p>&nbsp;From the SGE 6.1 man page, it shows the hard virtual memory limit 
<br>
(h_vmem) is for the virtual memory consumed by all processes in a job. I 
<br>
don't think SGE does the fine-grained resource limit for each process 
<br>
anyway. Maybe you can verify this with the grid engine mailing list to 
<br>
just to confirm.
<br>
<p><p><p>N1GE 6          Last change: 2007/02/14 13:34:15               12
<br>
<p>N1 Grid Engine File Formats                         QUEUE_CONF(5)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The resource limit parameters s_vmem and h_vmem  are  imple-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mented by N1 Grid Engine as a job limit. They impose a limit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on the amount of combined virtual memory consumed by all the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processes in the job. If h_vmem is exceeded by a job running
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in the queue, it  is  aborted  via  a  SIGKILL  signal  (see
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kill(1)).   If s_vmem is exceeded, the job is sent a SIGXCPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal which can be caught by the job.  If you wish to allow
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a  job to be &quot;warned&quot; so it can exit gracefully before it is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;killed then you should set the s_vmem limit to a lower value
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;than  h_vmem.   For parallel processes, the limit is applied
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;per slot which means that the limit  is  multiplied  by  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of slots being used by the job before being applied.
<br>
<p>...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h_cpu     The per-job CPU time limit in seconds.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h_data    The per-job maximum memory limit in bytes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h_vmem    The same as h_data (if both are set the minimum is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last thing I noticed:
</span><br>
<span class="quotelev1">&gt; It seems that if the v_mem option for gridengine jobs is specified like
</span><br>
<span class="quotelev1">&gt; '2.0G' my test job was
</span><br>
<span class="quotelev1">&gt; immedialtely killed; but when I specify '2000M' (which is obviously
</span><br>
<span class="quotelev1">&gt; less) it work. The gridengine
</span><br>
<span class="quotelev1">&gt; puts the job allways on the correct node as requested, but I think there
</span><br>
<span class="quotelev1">&gt; is might be a problem in
</span><br>
<span class="quotelev1">&gt; the openmpi interface.
</span><br>
<p>You should email the grid engine alias. This sounds like a SGE bug to me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be nice if someone could give some hints how to avoid the
</span><br>
<span class="quotelev1">&gt; quadratic scaling or maybe to think
</span><br>
<span class="quotelev1">&gt; if this is really neccessary in openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Markus Daene
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my compiling options:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/not_important --enable-static
</span><br>
<span class="quotelev1">&gt; --with-f90-size=medium --with-f90-max-array-dim=7  --with-mpi-para
</span><br>
<span class="quotelev1">&gt; m-check=always --enable-cxx-exceptions --with-mvapi
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info output:
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usrurz/openmpi/1.2.2/pathscale_3.0
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Jun  4 16:04:38 CEST 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: GE1N01
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Jun  4 16:09:37 CEST 2007
</span><br>
<span class="quotelev1">&gt;               Built host: GE1N01
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
<span class="quotelev1">&gt;               C compiler: pathcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usrurz/pathscale/bin/pathcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: pathCC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usrurz/pathscale/bin/pathCC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: pathf90
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usrurz/pathscale/bin/pathf90
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: pathf90
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usrurz/pathscale/bin/pathf90
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: always
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
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mvapi (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Markus Daene
</span><br>
<span class="quotelev1">&gt; Martin Luther University Halle-Wittenberg
</span><br>
<span class="quotelev1">&gt; Naturwissenschaftliche Fakultaet II
</span><br>
<span class="quotelev1">&gt; Institute of Physics
</span><br>
<span class="quotelev1">&gt; Von Seckendorff-Platz 1 (room 1.28)
</span><br>
<span class="quotelev1">&gt; 06120 Halle
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1655.php">Jeff Squyres: "[OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1653.php">Jeff Squyres: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Markus Daene: "[OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
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
