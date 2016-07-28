<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 15:05:42 2006" -->
<!-- isoreceived="20061011190542" -->
<!-- sent="Wed, 11 Oct 2006 13:05:39 -0600" -->
<!-- isosent="20061011190539" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Help building static and shared libs at the same time" -->
<!-- id="74226107-E0AA-4A5F-8F74-26147CD3E704_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 15:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I configure and build OpenMPI 1.1.1 with only --enable-shared, the  
<br>
files listed below are created.  If I build with both --enable-shared  
<br>
and --enable-static, these same files do not appear in the final  
<br>
install.  Is this the correct behavior?
<br>
<p>Thanks,
<br>
david
<br>
<p><p><span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_allocator_basic.la
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_allocator_basic.so
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_allocator_bucket.la
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_allocator_bucket.so
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_bml_r2.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_openib.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_self.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_self.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_sm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_tcp.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_basic.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_hierarch.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_hierarch.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_self.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_self.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_sm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_sm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_tuned.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_gpr_null.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_gpr_null.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_gpr_proxy.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_gpr_proxy.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_gpr_replica.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_gpr_replica.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_io_romio.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_iof_proxy.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_iof_proxy.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_iof_svc.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_iof_svc.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_maffinity_first_use.la
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_maffinity_first_use.so
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_mpool_openib.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_mpool_openib.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_mpool_sm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ns_proxy.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ns_proxy.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ns_replica.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ns_replica.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_oob_tcp.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_osc_pt2pt.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_osc_pt2pt.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_paffinity_linux.la
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_paffinity_linux.so
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_bproc.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_bproc.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_pls_bproc_orted.la
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_pls_bproc_orted.so
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_fork.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_fork.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_rsh.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_rsh.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_slurm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pls_slurm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pml_ob1.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_bjs.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_bjs.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_dash_host.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_dash_host.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_hostfile.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_hostfile.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_localhost.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_localhost.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_lsf_bproc.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_lsf_bproc.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_slurm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_ras_slurm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rcache_rb.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rcache_rb.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rds_hostfile.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rds_hostfile.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rds_resfile.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rds_resfile.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_rmaps_round_robin.la
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/ 
</span><br>
mca_rmaps_round_robin.so
<br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rmgr_proxy.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rmgr_proxy.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rmgr_urm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rml_oob.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_rml_oob.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_bproc.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_bproc.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_env.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_env.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_pipe.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_pipe.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_seed.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_seed.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_singleton.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_singleton.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_slurm.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_sds_slurm.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_soh_bproc.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_soh_bproc.so
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_topo_unity.la
</span><br>
<span class="quotelev1"> &gt; /opt/OpenMPI/openmpi-pgi-1.1.1/ib/lib64/openmpi/mca_topo_unity.so
</span><br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1965.php">Tobias Graf: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
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
