<?
$subject_val = "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 21:22:39 2013" -->
<!-- isoreceived="20130126022239" -->
<!-- sent="Sat, 26 Jan 2013 02:22:27 +0000" -->
<!-- isosent="20130126022227" -->
<!-- name="#YEO JINGJIE#" -->
<!-- email="JYEO1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI" -->
<!-- id="009017CD69F590478F7063E1C082325823BB6F2D_at_HKNPRD0111MB375.apcprd01.prod.exchangelabs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="991C018B-C4CC-4680-8244-CED71C071368_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI<br>
<strong>From:</strong> #YEO JINGJIE# (<em>JYEO1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 21:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21232.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21230.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21230.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21232.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21232.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok this was what I got:
<br>
<p><p><p>which srun
<br>
<p>/usr/bin/which: no srun in (/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/root/bin:/usr/lib64/openmpi/bin:)
<br>
<p><p><p>ls -R /usr/lib64/openmpi
<br>
<p>/usr/lib64/openmpi:
<br>
bin  lib  share
<br>
<p>/usr/lib64/openmpi/bin:
<br>
mpic++     mpif90         opal_wrapper       orte-top             vtc++
<br>
mpicc      mpif90-vt      opari              orte_wrapper_script  vtcc
<br>
mpiCC      mpirun         orte-bootproxy.sh  otfaux               vtCC
<br>
mpicc-vt   ompi-clean     ortec++            otfcompress          vtcxx
<br>
mpiCC-vt   ompi_info      ortecc             otfconfig            vtf77
<br>
mpic++-vt  ompi-iof       orteCC             otfdecompress        vtf90
<br>
mpicxx     ompi-probe     orte-clean         otfdump              vtfilter
<br>
mpicxx-vt  ompi-profiler  orted              otfinfo              vtunify
<br>
mpiexec    ompi-ps        orte-iof           otfmerge             vtunify-mpi
<br>
mpif77     ompi-server    orte-ps            otfprofile           vtwrapper
<br>
mpif77-vt  ompi-top       orterun            otfshrink
<br>
<p>/usr/lib64/openmpi/lib:
<br>
libmca_common_sm.so        libompitrace.so.0      libvt-hyb.so.0.0.0
<br>
libmca_common_sm.so.2      libompitrace.so.0.0.0  libvt-mpi.a
<br>
libmca_common_sm.so.2.0.0  libopen-pal.so         libvt-mpi.so
<br>
libmpi_cxx.so              libopen-pal.so.3       libvt-mpi.so.0
<br>
libmpi_cxx.so.1            libopen-pal.so.3.0.0   libvt-mpi.so.0.0.0
<br>
libmpi_cxx.so.1.0.1        libopen-rte.so         libvt-mt.a
<br>
libmpi_f77.so              libopen-rte.so.3       libvt-mt.so
<br>
libmpi_f77.so.1            libopen-rte.so.3.0.0   libvt-mt.so.0
<br>
libmpi_f77.so.1.0.2        libotf.a               libvt-mt.so.0.0.0
<br>
libmpi_f90.so              libotf.so              libvt-pomp.a
<br>
libmpi_f90.so.1            libotf.so.0            libvt.so
<br>
libmpi_f90.so.1.1.0        libotf.so.0.0.1        libvt.so.0
<br>
libmpi.so                  libvt.a                libvt.so.0.0.0
<br>
libmpi.so.1                libvt-hyb.a            mpi.mod
<br>
libmpi.so.1.0.2            libvt-hyb.so           openmpi
<br>
libompitrace.so            libvt-hyb.so.0
<br>
<p>/usr/lib64/openmpi/lib/openmpi:
<br>
libompi_dbg_msgq.so         mca_mtl_psm.so
<br>
mca_allocator_basic.so      mca_notifier_command.so
<br>
mca_allocator_bucket.so     mca_notifier_smtp.so
<br>
mca_bml_r2.so               mca_notifier_syslog.so
<br>
mca_btl_ofud.so             mca_odls_default.so
<br>
mca_btl_openib.so           mca_oob_tcp.so
<br>
mca_btl_self.so             mca_osc_pt2pt.so
<br>
mca_btl_sm.so               mca_osc_rdma.so
<br>
mca_btl_tcp.so              mca_paffinity_hwloc.so
<br>
mca_carto_auto_detect.so    mca_plm_rshd.so
<br>
mca_carto_file.so           mca_plm_rsh.so
<br>
mca_coll_basic.so           mca_plm_slurm.so
<br>
mca_coll_hierarch.so        mca_pml_bfo.so
<br>
mca_coll_inter.so           mca_pml_cm.so
<br>
mca_coll_self.so            mca_pml_csum.so
<br>
mca_coll_sm.so              mca_pml_ob1.so
<br>
mca_coll_sync.so            mca_pml_v.so
<br>
mca_coll_tuned.so           mca_pstat_linux.so
<br>
mca_crs_none.so             mca_pubsub_orte.so
<br>
mca_debugger_mpir.so        mca_ras_cm.so
<br>
mca_debugger_mpirx.so       mca_ras_gridengine.so
<br>
mca_dpm_orte.so             mca_ras_loadleveler.so
<br>
mca_errmgr_default.so       mca_ras_slurm.so
<br>
mca_ess_env.so              mca_rcache_vma.so
<br>
mca_ess_hnp.so              mca_rmaps_load_balance.so
<br>
mca_ess_singleton.so        mca_rmaps_rank_file.so
<br>
mca_ess_slave.so            mca_rmaps_resilient.so
<br>
mca_ess_slurmd.so           mca_rmaps_round_robin.so
<br>
mca_ess_slurm.so            mca_rmaps_seq.so
<br>
mca_ess_tool.so             mca_rmaps_topo.so
<br>
mca_filem_rsh.so            mca_rmcast_tcp.so
<br>
mca_grpcomm_bad.so          mca_rmcast_udp.so
<br>
mca_grpcomm_basic.so        mca_rml_oob.so
<br>
mca_grpcomm_hier.so         mca_routed_binomial.so
<br>
mca_iof_hnp.so              mca_routed_cm.so
<br>
mca_iof_orted.so            mca_routed_direct.so
<br>
mca_iof_tool.so             mca_routed_linear.so
<br>
mca_maffinity_first_use.so  mca_routed_radix.so
<br>
mca_maffinity_libnuma.so    mca_routed_slave.so
<br>
mca_mpool_fake.so           mca_sysinfo_linux.so
<br>
mca_mpool_rdma.so           mca_topo_unity.so
<br>
mca_mpool_sm.so             mca_vprotocol_pessimist.so
<br>
<p>/usr/lib64/openmpi/share:
<br>
openmpi  vampirtrace
<br>
<p>/usr/lib64/openmpi/share/openmpi:
<br>
amca-param-sets                     help-orte-filem-base.txt
<br>
doc                                 help-orte-filem-rsh.txt
<br>
help-coll-sync.txt                  help-orte-iof.txt
<br>
help-dash-host.txt                  help-orte-notifier-command.txt
<br>
help-ess-base.txt                   help-orte-notifier-smtp.txt
<br>
help-hostfile.txt                   help-orte-odls-base.txt
<br>
help-mca-base.txt                   help-orte-ps.txt
<br>
help-mca-bml-r2.txt                 help-orte-rmaps-base.txt
<br>
help-mca-coll-base.txt              help-orte-rmaps-lb.txt
<br>
help-mca-op-base.txt                help-orte-rmaps-resilient.txt
<br>
help-mca-param.txt                  help-orte-rmaps-rr.txt
<br>
help-mpi-api.txt                    help-orte-rmaps-seq.txt
<br>
help-mpi-btl-base.txt               help-orte-rmaps-topo.txt
<br>
help-mpi-btl-openib-cpc-base.txt    help-orte-rmcast-udp.txt
<br>
help-mpi-btl-openib-cpc-rdmacm.txt  help-orte-runtime.txt
<br>
help-mpi-btl-openib.txt             help-orterun.txt
<br>
help-mpi-btl-sm.txt                 help-orte-snapc-base.txt
<br>
help-mpi-btl-tcp.txt                help-orte-top.txt
<br>
help-mpi-coll-sm.txt                help-plm-base.txt
<br>
help-mpi-common-sm.txt              help-plm-rshd.txt
<br>
help-mpi-errors.txt                 help-plm-rsh.txt
<br>
help-mpi-pml-bfo.txt                help-plm-slurm.txt
<br>
help-mpi-pml-csum.txt               help-ras-base.txt
<br>
help-mpi-pml-ob1.txt                help-ras-gridengine.txt
<br>
help-mpi-runtime.txt                help-ras-slurm.txt
<br>
help-mpool-base.txt                 help-regex.txt
<br>
help-mtl-psm.txt                    help-rmaps_rank_file.txt
<br>
help-odls-default.txt               help-rmcast-base.txt
<br>
help-ompi-crcp-base.txt             mca-btl-openib-device-params.ini
<br>
help-ompi-dpm-base.txt              mpicc-vt-wrapper-data.txt
<br>
help-ompi-dpm-orte.txt              mpiCC-vt-wrapper-data.txt
<br>
help-ompi_info.txt                  mpicc-wrapper-data.txt
<br>
help-ompi-probe.txt                 mpiCC-wrapper-data.txt
<br>
help-ompi-profiler.txt              mpic++-vt-wrapper-data.txt
<br>
help-ompi-pubsub-orte.txt           mpic++-wrapper-data.txt
<br>
help-ompi-server.txt                mpicxx-vt-wrapper-data.txt
<br>
help-oob-tcp.txt                    mpicxx-wrapper-data.txt
<br>
help-opal-carto-file.txt            mpif77-vt-wrapper-data.txt
<br>
help-opal-crs-base.txt              mpif77-wrapper-data.txt
<br>
help-opal-crs-none.txt              mpif90-vt-wrapper-data.txt
<br>
help-opal-memory-linux.txt          mpif90-wrapper-data.txt
<br>
help-opal-runtime.txt               openmpi-valgrind.supp
<br>
help-opal-util.txt                  ortecc-wrapper-data.txt
<br>
help-opal-wrapper.txt               orteCC-wrapper-data.txt
<br>
help-orte-clean.txt                 ortec++-wrapper-data.txt
<br>
help-orted.txt
<br>
<p>/usr/lib64/openmpi/share/openmpi/amca-param-sets:
<br>
btl-openib-benchmark  example.conf
<br>
<p>/usr/lib64/openmpi/share/openmpi/doc:
<br>
COPYRIGHT-ptmalloc2.txt
<br>
<p>/usr/lib64/openmpi/share/vampirtrace:
<br>
doc          METRICS.SPEC            vtcxx-wrapper-data.txt
<br>
FILTER.SPEC  vtcc-wrapper-data.txt   vtf77-wrapper-data.txt
<br>
GROUPS.SPEC  vtCC-wrapper-data.txt   vtf90-wrapper-data.txt
<br>
libtool      vtc++-wrapper-data.txt
<br>
<p>/usr/lib64/openmpi/share/vampirtrace/doc:
<br>
ChangeLog  LICENSE  opari  otf  UserManual.html  UserManual.pdf
<br>
<p>/usr/lib64/openmpi/share/vampirtrace/doc/opari:
<br>
ChangeLog  lacsi01.pdf  LICENSE  opari-logo-100.gif  Readme.html
<br>
<p>/usr/lib64/openmpi/share/vampirtrace/doc/otf:
<br>
ChangeLog  LICENSE  otftools.pdf  specification.pdf
<br>
<p><p><p>Regards,
<br>
Jingjie Yeo
<br>
Ph.D. Student
<br>
School of Mechanical and Aerospace Engineering
<br>
Nanyang Technological University, Singapore
<br>
________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Saturday, 26 January, 2013 10:17:25 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
<br>
<p>Hmmm...looks like it was built with Slurm support - is your cluster running Slurm? Do you see an &quot;srun&quot; command - e.g., if you do &quot;which srun&quot;, what do you get?
<br>
<p>You should also do an &quot;ls -R /usr/lib64/openmpi&quot; and see what modules were installed. Send that along and let's see why it didn't find anything.
<br>
<p><p>On Jan 25, 2013, at 6:05 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&lt;mailto:JYEO1_at_[hidden]&gt;&gt; wrote:
<br>
<p>Yes sir here it is:
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI mockbuild_at_[hidden]&lt;mailto:mockbuild_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.5.4
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r25060
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Aug 18, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.5.4
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r25060
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Aug 18, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.5.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r25060
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Aug 18, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.5.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/lib64/openmpi
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: c6b8.bsys.dev.centos.org&lt;<a href="http://bsys.dev.centos.org">http://bsys.dev.centos.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: mockbuild
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Jun 22 06:42:03 UTC 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: c6b8.bsys.dev.centos.org&lt;<a href="http://bsys.dev.centos.org">http://bsys.dev.centos.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: mockbuild
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Jun 22 06:46:48 UTC 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: c6b8.bsys.dev.centos.org&lt;<a href="http://bsys.dev.centos.org">http://bsys.dev.centos.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;C compiler family name: GNU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 4.4.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;MPI interface warnings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: affinity example
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: ofud (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA notifier: smtp (MCA v2.0, API v1.0, Component v1.5.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.4)
<br>
<p><p><p>Regards,
<br>
Jingjie Yeo
<br>
Ph.D. Student
<br>
School of Mechanical and Aerospace Engineering
<br>
Nanyang Technological University, Singapore
<br>
________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Saturday, 26 January, 2013 9:58:04 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
<br>
<p>Groan - I hate these bundled installs :-(
<br>
<p>If you do &quot;ompi_info&quot;, what does it tell you? Could you please send it along?
<br>
<p>Thanks
<br>
<p>On Jan 25, 2013, at 5:51 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&lt;mailto:JYEO1_at_[hidden]&gt;&gt; wrote:
<br>
<p>I tried to follow the installation instructions over here:
<br>
<p><p><p><a href="http://amusecode.org/doc/install/install-prerequisites-redhat.html">http://amusecode.org/doc/install/install-prerequisites-redhat.html</a>
<br>
<p><p><p>And I am using bash and yum.
<br>
<p><p><p>Regards,
<br>
Jingjie Yeo
<br>
Ph.D. Student
<br>
School of Mechanical and Aerospace Engineering
<br>
Nanyang Technological University, Singapore
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21232.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21230.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21230.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21232.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21232.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
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
