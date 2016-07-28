<?
$subject_val = "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 21:29:20 2013" -->
<!-- isoreceived="20130126022920" -->
<!-- sent="Fri, 25 Jan 2013 18:29:13 -0800" -->
<!-- isosent="20130126022913" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI" -->
<!-- id="AAB3DD08-B30D-4316-BB63-13DE6DD6481B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="009017CD69F590478F7063E1C082325823BB6F2D_at_HKNPRD0111MB375.apcprd01.prod.exchangelabs.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 21:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21233.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on	Centos	6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21233.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on	Centos	6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21233.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on	Centos	6.2	with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay - that's why I don't like package installs...
<br>
<p>Still, it should work. One thing I don't like is that you have /usr/lib64/openmpi/bin at the end of your PATH - that's a bad idea. Most OS's come with a preinstalled version, usually something really old, so you want the desired version of OMPI to be at the front of your path.
<br>
<p>Do you have LD_LIBRARY_PATH set as well? Again, you need /usr/lib64/openmpi/lib set at the very front of that envar.
<br>
<p><p>On Jan 25, 2013, at 6:22 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok this was what I got:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; which srun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/which: no srun in (/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/root/bin:/usr/lib64/openmpi/bin:)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ls -R /usr/lib64/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi:
</span><br>
<span class="quotelev1">&gt; bin  lib  share
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/bin:
</span><br>
<span class="quotelev1">&gt; mpic++     mpif90         opal_wrapper       orte-top             vtc++
</span><br>
<span class="quotelev1">&gt; mpicc      mpif90-vt      opari              orte_wrapper_script  vtcc
</span><br>
<span class="quotelev1">&gt; mpiCC      mpirun         orte-bootproxy.sh  otfaux               vtCC
</span><br>
<span class="quotelev1">&gt; mpicc-vt   ompi-clean     ortec++            otfcompress          vtcxx
</span><br>
<span class="quotelev1">&gt; mpiCC-vt   ompi_info      ortecc             otfconfig            vtf77
</span><br>
<span class="quotelev1">&gt; mpic++-vt  ompi-iof       orteCC             otfdecompress        vtf90
</span><br>
<span class="quotelev1">&gt; mpicxx     ompi-probe     orte-clean         otfdump              vtfilter
</span><br>
<span class="quotelev1">&gt; mpicxx-vt  ompi-profiler  orted              otfinfo              vtunify
</span><br>
<span class="quotelev1">&gt; mpiexec    ompi-ps        orte-iof           otfmerge             vtunify-mpi
</span><br>
<span class="quotelev1">&gt; mpif77     ompi-server    orte-ps            otfprofile           vtwrapper
</span><br>
<span class="quotelev1">&gt; mpif77-vt  ompi-top       orterun            otfshrink
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/lib:
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so        libompitrace.so.0      libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.2      libompitrace.so.0.0.0  libvt-mpi.a
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.2.0.0  libopen-pal.so         libvt-mpi.so
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so              libopen-pal.so.3       libvt-mpi.so.0
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.1            libopen-pal.so.3.0.0   libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.1.0.1        libopen-rte.so         libvt-mt.a
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so              libopen-rte.so.3       libvt-mt.so
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.1            libopen-rte.so.3.0.0   libvt-mt.so.0
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.1.0.2        libotf.a               libvt-mt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so              libotf.so              libvt-pomp.a
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.1            libotf.so.0            libvt.so
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.1.1.0        libotf.so.0.0.1        libvt.so.0
</span><br>
<span class="quotelev1">&gt; libmpi.so                  libvt.a                libvt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi.so.1                libvt-hyb.a            mpi.mod
</span><br>
<span class="quotelev1">&gt; libmpi.so.1.0.2            libvt-hyb.so           openmpi
</span><br>
<span class="quotelev1">&gt; libompitrace.so            libvt-hyb.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/lib/openmpi:
</span><br>
<span class="quotelev1">&gt; libompi_dbg_msgq.so         mca_mtl_psm.so
</span><br>
<span class="quotelev1">&gt; mca_allocator_basic.so      mca_notifier_command.so
</span><br>
<span class="quotelev1">&gt; mca_allocator_bucket.so     mca_notifier_smtp.so
</span><br>
<span class="quotelev1">&gt; mca_bml_r2.so               mca_notifier_syslog.so
</span><br>
<span class="quotelev1">&gt; mca_btl_ofud.so             mca_odls_default.so
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so           mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; mca_btl_self.so             mca_osc_pt2pt.so
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so               mca_osc_rdma.so
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp.so              mca_paffinity_hwloc.so
</span><br>
<span class="quotelev1">&gt; mca_carto_auto_detect.so    mca_plm_rshd.so
</span><br>
<span class="quotelev1">&gt; mca_carto_file.so           mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; mca_coll_basic.so           mca_plm_slurm.so
</span><br>
<span class="quotelev1">&gt; mca_coll_hierarch.so        mca_pml_bfo.so
</span><br>
<span class="quotelev1">&gt; mca_coll_inter.so           mca_pml_cm.so
</span><br>
<span class="quotelev1">&gt; mca_coll_self.so            mca_pml_csum.so
</span><br>
<span class="quotelev1">&gt; mca_coll_sm.so              mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; mca_coll_sync.so            mca_pml_v.so
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so           mca_pstat_linux.so
</span><br>
<span class="quotelev1">&gt; mca_crs_none.so             mca_pubsub_orte.so
</span><br>
<span class="quotelev1">&gt; mca_debugger_mpir.so        mca_ras_cm.so
</span><br>
<span class="quotelev1">&gt; mca_debugger_mpirx.so       mca_ras_gridengine.so
</span><br>
<span class="quotelev1">&gt; mca_dpm_orte.so             mca_ras_loadleveler.so
</span><br>
<span class="quotelev1">&gt; mca_errmgr_default.so       mca_ras_slurm.so
</span><br>
<span class="quotelev1">&gt; mca_ess_env.so              mca_rcache_vma.so
</span><br>
<span class="quotelev1">&gt; mca_ess_hnp.so              mca_rmaps_load_balance.so
</span><br>
<span class="quotelev1">&gt; mca_ess_singleton.so        mca_rmaps_rank_file.so
</span><br>
<span class="quotelev1">&gt; mca_ess_slave.so            mca_rmaps_resilient.so
</span><br>
<span class="quotelev1">&gt; mca_ess_slurmd.so           mca_rmaps_round_robin.so
</span><br>
<span class="quotelev1">&gt; mca_ess_slurm.so            mca_rmaps_seq.so
</span><br>
<span class="quotelev1">&gt; mca_ess_tool.so             mca_rmaps_topo.so
</span><br>
<span class="quotelev1">&gt; mca_filem_rsh.so            mca_rmcast_tcp.so
</span><br>
<span class="quotelev1">&gt; mca_grpcomm_bad.so          mca_rmcast_udp.so
</span><br>
<span class="quotelev1">&gt; mca_grpcomm_basic.so        mca_rml_oob.so
</span><br>
<span class="quotelev1">&gt; mca_grpcomm_hier.so         mca_routed_binomial.so
</span><br>
<span class="quotelev1">&gt; mca_iof_hnp.so              mca_routed_cm.so
</span><br>
<span class="quotelev1">&gt; mca_iof_orted.so            mca_routed_direct.so
</span><br>
<span class="quotelev1">&gt; mca_iof_tool.so             mca_routed_linear.so
</span><br>
<span class="quotelev1">&gt; mca_maffinity_first_use.so  mca_routed_radix.so
</span><br>
<span class="quotelev1">&gt; mca_maffinity_libnuma.so    mca_routed_slave.so
</span><br>
<span class="quotelev1">&gt; mca_mpool_fake.so           mca_sysinfo_linux.so
</span><br>
<span class="quotelev1">&gt; mca_mpool_rdma.so           mca_topo_unity.so
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm.so             mca_vprotocol_pessimist.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share:
</span><br>
<span class="quotelev1">&gt; openmpi  vampirtrace
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/openmpi:
</span><br>
<span class="quotelev1">&gt; amca-param-sets                     help-orte-filem-base.txt
</span><br>
<span class="quotelev1">&gt; doc                                 help-orte-filem-rsh.txt
</span><br>
<span class="quotelev1">&gt; help-coll-sync.txt                  help-orte-iof.txt
</span><br>
<span class="quotelev1">&gt; help-dash-host.txt                  help-orte-notifier-command.txt
</span><br>
<span class="quotelev1">&gt; help-ess-base.txt                   help-orte-notifier-smtp.txt
</span><br>
<span class="quotelev1">&gt; help-hostfile.txt                   help-orte-odls-base.txt
</span><br>
<span class="quotelev1">&gt; help-mca-base.txt                   help-orte-ps.txt
</span><br>
<span class="quotelev1">&gt; help-mca-bml-r2.txt                 help-orte-rmaps-base.txt
</span><br>
<span class="quotelev1">&gt; help-mca-coll-base.txt              help-orte-rmaps-lb.txt
</span><br>
<span class="quotelev1">&gt; help-mca-op-base.txt                help-orte-rmaps-resilient.txt
</span><br>
<span class="quotelev1">&gt; help-mca-param.txt                  help-orte-rmaps-rr.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-api.txt                    help-orte-rmaps-seq.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt               help-orte-rmaps-topo.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib-cpc-base.txt    help-orte-rmcast-udp.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib-cpc-rdmacm.txt  help-orte-runtime.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt             help-orterun.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-sm.txt                 help-orte-snapc-base.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-tcp.txt                help-orte-top.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-coll-sm.txt                help-plm-base.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-common-sm.txt              help-plm-rshd.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt                 help-plm-rsh.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-pml-bfo.txt                help-plm-slurm.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-pml-csum.txt               help-ras-base.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-pml-ob1.txt                help-ras-gridengine.txt
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime.txt                help-ras-slurm.txt
</span><br>
<span class="quotelev1">&gt; help-mpool-base.txt                 help-regex.txt
</span><br>
<span class="quotelev1">&gt; help-mtl-psm.txt                    help-rmaps_rank_file.txt
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt               help-rmcast-base.txt
</span><br>
<span class="quotelev1">&gt; help-ompi-crcp-base.txt             mca-btl-openib-device-params.ini
</span><br>
<span class="quotelev1">&gt; help-ompi-dpm-base.txt              mpicc-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-ompi-dpm-orte.txt              mpiCC-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-ompi_info.txt                  mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-ompi-probe.txt                 mpiCC-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-ompi-profiler.txt              mpic++-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-ompi-pubsub-orte.txt           mpic++-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-ompi-server.txt                mpicxx-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-oob-tcp.txt                    mpicxx-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-opal-carto-file.txt            mpif77-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-opal-crs-base.txt              mpif77-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-opal-crs-none.txt              mpif90-vt-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-opal-memory-linux.txt          mpif90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-opal-runtime.txt               openmpi-valgrind.supp
</span><br>
<span class="quotelev1">&gt; help-opal-util.txt                  ortecc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-opal-wrapper.txt               orteCC-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-orte-clean.txt                 ortec++-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; help-orted.txt
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/openmpi/amca-param-sets:
</span><br>
<span class="quotelev1">&gt; btl-openib-benchmark  example.conf
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/openmpi/doc:
</span><br>
<span class="quotelev1">&gt; COPYRIGHT-ptmalloc2.txt
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/vampirtrace:
</span><br>
<span class="quotelev1">&gt; doc          METRICS.SPEC            vtcxx-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; FILTER.SPEC  vtcc-wrapper-data.txt   vtf77-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; GROUPS.SPEC  vtCC-wrapper-data.txt   vtf90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; libtool      vtc++-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/vampirtrace/doc:
</span><br>
<span class="quotelev1">&gt; ChangeLog  LICENSE  opari  otf  UserManual.html  UserManual.pdf
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/vampirtrace/doc/opari:
</span><br>
<span class="quotelev1">&gt; ChangeLog  lacsi01.pdf  LICENSE  opari-logo-100.gif  Readme.html
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/share/vampirtrace/doc/otf:
</span><br>
<span class="quotelev1">&gt; ChangeLog  LICENSE  otftools.pdf  specification.pdf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jingjie Yeo
</span><br>
<span class="quotelev1">&gt; Ph.D. Student
</span><br>
<span class="quotelev1">&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev1">&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, 26 January, 2013 10:17:25 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...looks like it was built with Slurm support - is your cluster running Slurm? Do you see an &quot;srun&quot; command - e.g., if you do &quot;which srun&quot;, what do you get?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should also do an &quot;ls -R /usr/lib64/openmpi&quot; and see what modules were installed. Send that along and let's see why it didn't find anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2013, at 6:05 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes sir here it is:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                  Package: Open MPI mockbuild_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                           Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt;             Ident string: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr/lib64/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: mockbuild
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Fri Jun 22 06:42:03 UTC 2012
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: mockbuild
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Fri Jun 22 06:46:48 UTC 2012
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: c6b8.bsys.dev.centos.org
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler version: 4.4.6
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt;&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev2">&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: bfo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: cm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: radix (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA routed: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: rshd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: slave (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA notifier: command (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA notifier: smtp (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.5.4)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jingjie Yeo
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Student
</span><br>
<span class="quotelev2">&gt;&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev2">&gt;&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, 26 January, 2013 9:58:04 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Groan - I hate these bundled installs :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you do &quot;ompi_info&quot;, what does it tell you? Could you please send it along?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2013, at 5:51 PM, #YEO JINGJIE# &lt;JYEO1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to follow the installation instructions over here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://amusecode.org/doc/install/install-prerequisites-redhat.html">http://amusecode.org/doc/install/install-prerequisites-redhat.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And I am using bash and yum.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jingjie Yeo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Student
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Mechanical and Aerospace Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nanyang Technological University, Singapore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21233.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on	Centos	6.2	with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21231.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos	6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21233.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on	Centos	6.2	with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21233.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on	Centos	6.2	with OpenMPI"</a>
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
