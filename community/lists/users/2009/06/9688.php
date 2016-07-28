<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 17:27:16 2009" -->
<!-- isoreceived="20090623212716" -->
<!-- sent="Tue, 23 Jun 2009 17:27:10 -0400" -->
<!-- isosent="20090623212710" -->
<!-- name="Jim Kress ORG" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="1245792430.5089.13.camel_at_master.org" -->
<!-- inreplyto="67166CFD-8629-4652-B633-FF49C03E1F8E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Jim Kress ORG (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 17:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9687.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK.  For version 1.2.8, I do this:
<br>
<p>export OMPI_MCA_mpi_show_mca_params=1
<br>
<p>and get this:
<br>
<p>root_at_master orca]# ./orca hexatriene_TDDFT_get_asa_input_parallel_1.inp
<br>
<span class="quotelev1">&gt; 1.2.8_test_crafted_input_file.out
</span><br>
[master.org:07943]
<br>
mca_param_files=/root/.openmpi/mca-params.conf:/usr/mpi/gcc/openmpi-1.2.8/etc/openmpi-mca-params.conf
<br>
[master.org:07943] opal_signal=6,7,8,11
<br>
[master.org:07943]
<br>
mca_component_path=/usr/mpi/gcc/openmpi-1.2.8/lib/openmpi:/root/.openmpi/components
<br>
[master.org:07943] mca_verbose=
<br>
[master.org:07943] mca_component_show_load_errors=1
<br>
[master.org:07943] mca_component_disable_dlopen=0
<br>
[master.org:07943] paffinity_base_verbose=0
<br>
[master.org:07943] paffinity=
<br>
[master.org:07943] paffinity_linux_priority=10
<br>
[master.org:07943] paffinity_linux_have_cpu_set_t=1
<br>
[master.org:07943] paffinity_linux_CPU_ZERO_ok=1
<br>
[master.org:07943] paffinity_linux_sched_setaffinity_num_params=3
<br>
[master.org:07943] memcpy=
<br>
[master.org:07943] memcpy_base_verbose=0
<br>
[master.org:07943] memory=
<br>
[master.org:07943] memory_base_verbose=0
<br>
[master.org:07943] memory_ptmalloc2_priority=0
<br>
[master.org:07943] backtrace=
<br>
[master.org:07943] backtrace_base_verbose=0
<br>
[master.org:07943] backtrace_execinfo_priority=0
<br>
[master.org:07943] timer=
<br>
[master.org:07943] timer_base_verbose=0
<br>
[master.org:07943] timer_linux_priority=0
<br>
[master.org:07943] ompi_timing=0
<br>
[master.org:07943] orte_debug=0
<br>
[master.org:07943] orte_debug_daemons_file=0
<br>
[master.org:07943] orte_no_daemonize=0
<br>
[master.org:07943] orte_debug_daemons=0
<br>
[master.org:07943] orte_base_user_debugger=totalview @mpirun@ -a
<br>
@mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@
<br>
@single_app@ : fxp @mpirun@ -a @mpirun_args@
<br>
[master.org:07943] orte_abort_timeout=10
<br>
[master.org:07943] orte_base_nodename=master
<br>
[master.org:07943] seed=0
<br>
[master.org:07943] orte_app_num=0
<br>
[master.org:07943] tmpdir_base=
<br>
[master.org:07943] universe=root_at_[hidden]:default-universe-7933
<br>
[master.org:07943] universe_persistence=0
<br>
[master.org:07943] universe_scope=
<br>
[master.org:07943] universe_console=0
<br>
[master.org:07943] universe_uri=
<br>
[master.org:07943] universe_script=
<br>
[master.org:07943] dss_buffer_type=0
<br>
[master.org:07943] dss_page_size=1
<br>
[master.org:07943] ns_base_verbose=0
<br>
[master.org:07943] ns=
<br>
[master.org:07943] ns_proxy_debug=0
<br>
[master.org:07943] ns_proxy_maxsize=2147483647
<br>
[master.org:07943] ns_proxy_blocksize=512
<br>
[master.org:07943] ns_proxy_priority=0
<br>
[master.org:07943] ns_replica_debug=0
<br>
[master.org:07943] ns_replica_isolate=0
<br>
[master.org:07943] ns_replica_maxsize=2147483647
<br>
[master.org:07943] ns_replica_blocksize=512
<br>
[master.org:07943] ns_replica_priority=0
<br>
[master.org:07943] errmgr_base_verbose=0
<br>
[master.org:07943] errmgr=
<br>
[master.org:07943] errmgr_hnp_debug=0
<br>
[master.org:07943] errmgr_hnp_priority=0
<br>
[master.org:07943] errmgr_orted_debug=0
<br>
[master.org:07943] errmgr_orted_priority=0
<br>
[master.org:07943] errmgr_proxy_debug=0
<br>
[master.org:07943] errmgr_proxy_priority=0
<br>
[master.org:07943] rml_base_debug=0
<br>
[master.org:07943] rml=
<br>
[master.org:07943] rml_base_verbose=0
<br>
[master.org:07943] oob=
<br>
[master.org:07943] oob_base_verbose=0
<br>
[master.org:07943] oob_tcp_peer_limit=-1
<br>
[master.org:07943] oob_tcp_peer_retries=60
<br>
[master.org:07943] oob_tcp_debug=0
<br>
[master.org:07943] oob_tcp_sndbuf=131072
<br>
[master.org:07943] oob_tcp_rcvbuf=131072
<br>
[master.org:07943] oob_tcp_if_include=
<br>
[master.org:07943] oob_tcp_if_exclude=
<br>
[master.org:07943] oob_tcp_connect_sleep=1
<br>
[master.org:07943] oob_tcp_listen_mode=event
<br>
[master.org:07943] oob_tcp_listen_thread_max_queue=10
<br>
[master.org:07943] oob_tcp_listen_thread_max_time=10
<br>
[master.org:07943] oob_tcp_accept_spin_count=10
<br>
[master.org:07943] oob_tcp_priority=0
<br>
[master.org:07943] oob_base_include=
<br>
[master.org:07943] oob_base_exclude=
<br>
[master.org:07943] orte_timing=0
<br>
[master.org:07943] oob_xcast_timing=0
<br>
[master.org:07943] oob_xcast_mode=linear
<br>
[master.org:07943] rml_oob_priority=0
<br>
[master.org:07943] gpr_base_verbose=0
<br>
[master.org:07943] gpr_base_maxsize=2147483647
<br>
[master.org:07943] gpr_base_blocksize=512
<br>
[master.org:07943] gpr=
<br>
[master.org:07943] gpr_null_priority=0
<br>
[master.org:07943] gpr_proxy_debug=0
<br>
[master.org:07943] gpr_proxy_priority=0
<br>
[master.org:07943] gpr_replica_debug=0
<br>
[master.org:07943] gpr_replica_isolate=0
<br>
[master.org:07943] gpr_replica_priority=0
<br>
[master.org:07943] schema_base_verbose=0
<br>
[master.org:07943] schema=
<br>
[master.org:07943] sds=
<br>
[master.org:07943] sds_base_verbose=0
<br>
[master.org:07943] sds_env_priority=0
<br>
[master.org:07943] sds_pipe_priority=0
<br>
[master.org:07943] sds_seed_priority=0
<br>
[master.org:07943] sds_singleton_priority=0
<br>
[master.org:07943] sds_slurm_priority=0
<br>
[master.org:07943] ns_nds=env
<br>
[master.org:07943] ns_nds_name=
<br>
[master.org:07943] ns_nds_cellid=0
<br>
[master.org:07943] ns_nds_jobid=1
<br>
[master.org:07943] ns_nds_vpid=0
<br>
[master.org:07943] ns_nds_vpid_start=0
<br>
[master.org:07943] ns_nds_num_procs=32
<br>
[master.org:07943] rds_base_verbose=0
<br>
[master.org:07943] rds=proxy
<br>
[master.org:07943] rds_proxy_priority=0
<br>
[master.org:07943] ras_base_verbose=0
<br>
[master.org:07943] ras=proxy
<br>
[master.org:07943] rmaps_base_verbose=0
<br>
[master.org:07943] rmaps_base_schedule_policy=unspec
<br>
[master.org:07943] rmaps_base_pernode=0
<br>
[master.org:07943] rmaps_base_n_pernode=-1
<br>
[master.org:07943] rmaps_base_no_schedule_local=0
<br>
[master.org:07943] rmaps_base_no_oversubscribe=0
<br>
[master.org:07943] rmaps_base_display_map=0
<br>
[master.org:07943] rmaps=proxy
<br>
[master.org:07943] pls_base_reuse_daemons=0
<br>
[master.org:07943] pls=proxy
<br>
[master.org:07943] pls_base_verbose=0
<br>
[master.org:07943] pls_proxy_priority=0
<br>
[master.org:07943] odls_base_verbose=0
<br>
[master.org:07943] odls_base_sigkill_timeout=1
<br>
[master.org:07943] odls=
<br>
[master.org:07943] odls_default_priority=0
<br>
[master.org:07943] rmgr_base_verbose=0
<br>
[master.org:07943] rmgr=proxy
<br>
[master.org:07943] rmgr_proxy_priority=0
<br>
[master.org:07943] smr_base_verbose=0
<br>
[master.org:07943] smr=
<br>
[master.org:07943] iof_base_window_size=4096
<br>
[master.org:07943] iof_base_service=0.0.0
<br>
[master.org:07943] iof_base_verbose=0
<br>
[master.org:07943] iof=
<br>
[master.org:07943] iof_proxy_priority=0
<br>
[master.org:07943] iof_svc_priority=0
<br>
[master.org:07943] mpi_param_check=1
<br>
[master.org:07943] mpi_yield_when_idle=0
<br>
[master.org:07943] mpi_event_tick_rate=-1
<br>
[master.org:07943] mpi_show_handle_leaks=0
<br>
[master.org:07943] mpi_no_free_handles=0
<br>
[master.org:07943] mpi_show_mca_params=1
<br>
[master.org:07943] mpi_show_mca_params_file=
<br>
[master.org:07943] mpi_paffinity_alone=0
<br>
[master.org:07943] mpi_keep_peer_hostnames=1
<br>
[master.org:07943] mpi_abort_delay=0
<br>
[master.org:07943] mpi_abort_print_stack=0
<br>
[master.org:07943] mpi_preconnect_all=0
<br>
[master.org:07943] mpi_preconnect_oob=0
<br>
[master.org:07943] mpi_leave_pinned=0
<br>
[master.org:07943] mpi_leave_pinned_pipeline=0
<br>
[master.org:07943] mpi_warn_if_thread_multiple=1
<br>
[master.org:07943] mpi_warn_if_progress_threads=1
<br>
[master.org:07943] allocator=
<br>
[master.org:07943] allocator_base_verbose=0
<br>
[master.org:07943] allocator_basic_priority=0
<br>
[master.org:07943] allocator_bucket_num_buckets=30
<br>
[master.org:07943] allocator_bucket_priority=0
<br>
[master.org:07943] rcache=
<br>
[master.org:07943] rcache_base_verbose=0
<br>
[master.org:07943] rcache_vma_priority=0
<br>
[master.org:07943] mpool=
<br>
[master.org:07943] mpool_base_verbose=0
<br>
[master.org:07943] mpool_rdma_rcache_name=vma
<br>
[master.org:07943] mpool_rdma_rcache_size_limit=0
<br>
[master.org:07943] mpool_rdma_print_stats=0
<br>
[master.org:07943] mpool_rdma_priority=0
<br>
[master.org:07943] mpool_sm_allocator=bucket
<br>
[master.org:07943] mpool_sm_max_size=536870912
<br>
[master.org:07943] mpool_sm_min_size=134217728
<br>
[master.org:07943] mpool_sm_per_peer_size=33554432
<br>
[master.org:07943] mpool_sm_verbose=0
<br>
[master.org:07943] mpool_sm_priority=0
<br>
[master.org:07943] mpool_base_use_mem_hooks=0
<br>
[master.org:07943] mpool_use_mem_hooks=0
<br>
[master.org:07943] mpool_base_disable_sbrk=0
<br>
[master.org:07943] mpool_disable_sbrk=0
<br>
[master.org:07943] pml=
<br>
[master.org:07943] pml_base_verbose=0
<br>
[master.org:07943] mtl=
<br>
[master.org:07943] mtl_base_verbose=0
<br>
[master.org:07943] pml_cm_free_list_num=4
<br>
[master.org:07943] pml_cm_free_list_max=-1
<br>
[master.org:07943] pml_cm_free_list_inc=64
<br>
[master.org:07943] pml_cm_priority=30
<br>
[master.org:07943] pml_ob1_free_list_num=4
<br>
[master.org:07943] pml_ob1_free_list_max=-1
<br>
[master.org:07943] pml_ob1_free_list_inc=64
<br>
[master.org:07943] pml_ob1_priority=20
<br>
[master.org:07943] pml_ob1_eager_limit=131072
<br>
[master.org:07943] pml_ob1_send_pipeline_depth=3
<br>
[master.org:07943] pml_ob1_recv_pipeline_depth=4
<br>
[master.org:07943] pml_ob1_use_early_completion=1
<br>
[master.org:07943] bml=
<br>
[master.org:07943] bml_base_verbose=0
<br>
[master.org:07943] bml_r2_show_unreach_errors=1
<br>
[master.org:07943] bml_r2_priority=0
<br>
[master.org:07943] btl_base_debug=0
<br>
[master.org:07943] btl=self,openib
<br>
[master.org:07943] btl_base_verbose=0
<br>
[master.org:07943] btl_self_free_list_num=0
<br>
[master.org:07943] btl_self_free_list_max=-1
<br>
[master.org:07943] btl_self_free_list_inc=32
<br>
[master.org:07943] btl_self_eager_limit=131072
<br>
[master.org:07943] btl_self_min_send_size=262144
<br>
[master.org:07943] btl_self_max_send_size=262144
<br>
[master.org:07943] btl_self_min_rdma_size=2147483647
<br>
[master.org:07943] btl_self_max_rdma_size=2147483647
<br>
[master.org:07943] btl_self_exclusivity=65536
<br>
[master.org:07943] btl_self_flags=10
<br>
[master.org:07943] btl_self_priority=0
<br>
[master.org:07943] btl_openib_verbose=0
<br>
[master.org:07943] btl_openib_warn_no_hca_params_found=1
<br>
[master.org:07943] btl_openib_warn_default_gid_prefix=1
<br>
[master.org:07943] btl_openib_want_fork_support=-1
<br>
[master.org:07943]
<br>
btl_openib_hca_param_files=/usr/mpi/gcc/openmpi-1.2.8/share/openmpi/mca-btl-openib-hca-params.ini
<br>
[master.org:07943] btl_openib_max_btls=-1
<br>
[master.org:07943] btl_openib_free_list_num=8
<br>
[master.org:07943] btl_openib_free_list_max=-1
<br>
[master.org:07943] btl_openib_free_list_inc=32
<br>
[master.org:07943] btl_openib_mpool=rdma
<br>
[master.org:07943] btl_openib_reg_mru_len=16
<br>
[master.org:07943] btl_openib_ib_cq_size=1000
<br>
[master.org:07943] btl_openib_ib_sg_list_size=4
<br>
[master.org:07943] btl_openib_ib_pkey_ix=0
<br>
[master.org:07943] btl_openib_ib_pkey_val=0
<br>
[master.org:07943] btl_openib_ib_psn=0
<br>
[master.org:07943] btl_openib_ib_qp_ous_rd_atom=4
<br>
[master.org:07943] btl_openib_ib_mtu=3
<br>
[master.org:07943] btl_openib_ib_min_rnr_timer=5
<br>
[master.org:07943] btl_openib_ib_timeout=10
<br>
[master.org:07943] btl_openib_ib_retry_count=7
<br>
[master.org:07943] btl_openib_ib_rnr_retry=7
<br>
[master.org:07943] btl_openib_ib_max_rdma_dst_ops=4
<br>
[master.org:07943] btl_openib_ib_service_level=0
<br>
[master.org:07943] btl_openib_ib_static_rate=0
<br>
[master.org:07943] btl_openib_exclusivity=1024
<br>
[master.org:07943] btl_openib_rd_num=8
<br>
[master.org:07943] btl_openib_rd_low=6
<br>
[master.org:07943] btl_openib_rd_win=4
<br>
[master.org:07943] btl_openib_use_srq=0
<br>
[master.org:07943] btl_openib_srq_rd_max=1000
<br>
[master.org:07943] btl_openib_srq_rd_per_peer=16
<br>
[master.org:07943] btl_openib_srq_sd_max=8
<br>
[master.org:07943] btl_openib_use_eager_rdma=1
<br>
[master.org:07943] btl_openib_eager_rdma_threshold=16
<br>
[master.org:07943] btl_openib_max_eager_rdma=16
<br>
[master.org:07943] btl_openib_eager_rdma_num=16
<br>
[master.org:07943] btl_openib_btls_per_lid=1
<br>
[master.org:07943] btl_openib_max_lmc=0
<br>
[master.org:07943] btl_openib_buffer_alignment=64
<br>
[master.org:07943] btl_openib_eager_limit=12288
<br>
[master.org:07943] btl_openib_min_send_size=32768
<br>
[master.org:07943] btl_openib_max_send_size=65536
<br>
[master.org:07943] btl_openib_min_rdma_size=1048576
<br>
[master.org:07943] btl_openib_max_rdma_size=1048576
<br>
[master.org:07943] btl_openib_flags=54
<br>
[master.org:07943] btl_openib_bandwidth=0
<br>
[master.org:07943] btl_openib_have_fork_support=1
<br>
[master.org:07943] btl_openib_priority=0
<br>
[master.org:07943] btl_base_include=
<br>
[master.org:07943] btl_base_exclude=
<br>
[master.org:07943] btl_base_warn_component_unused=1
<br>
[master.org:07943] coll=
<br>
[master.org:07943] coll_base_verbose=0
<br>
[master.org:07943] coll_basic_priority=10
<br>
[master.org:07943] coll_basic_crossover=4
<br>
[master.org:07943] coll_self_priority=75
<br>
[master.org:07943] coll_sm_priority=0
<br>
[master.org:07943] coll_sm_control_size=4096
<br>
[master.org:07943] coll_sm_bootstrap_filename=shared_mem_sm_bootstrap
<br>
[master.org:07943] coll_sm_bootstrap_num_segments=8
<br>
[master.org:07943] coll_sm_fragment_size=8192
<br>
[master.org:07943] coll_sm_mpool=sm
<br>
[master.org:07943] coll_sm_comm_in_use_flags=2
<br>
[master.org:07943] coll_sm_comm_num_segments=8
<br>
[master.org:07943] coll_sm_tree_degree=4
<br>
[master.org:07943] coll_sm_shared_mem_used_bootstrap=216
<br>
[master.org:07943] coll_sm_info_num_procs=4
<br>
[master.org:07943] coll_sm_shared_mem_used_data=548864
<br>
[master.org:07943] coll_tuned_priority=30
<br>
[master.org:07943] coll_tuned_pre_allocate_memory_comm_size_limit=32768
<br>
[master.org:07943] coll_tuned_init_tree_fanout=4
<br>
[master.org:07943] coll_tuned_init_chain_fanout=4
<br>
[master.org:07943] coll_tuned_use_dynamic_rules=0
<br>
[master.org:07943] osc=
<br>
[master.org:07943] osc_base_verbose=0
<br>
[master.org:07943] osc_pt2pt_no_locks=0
<br>
[master.org:07943] osc_pt2pt_eager_limit=16384
<br>
[master.org:07943] osc_pt2pt_priority=0
<br>
[master.org:07957]
<br>
mca_param_files=/root/.openmpi/mca-params.conf:/usr/mpi/gcc/openmpi-1.2.8/etc/openmpi-mca-params.conf
<br>
[master.org:07957] opal_signal=6,7,8,11
<br>
[master.org:07957]
<br>
mca_component_path=/usr/mpi/gcc/openmpi-1.2.8/lib/openmpi:/root/.openmpi/components
<br>
[master.org:07957] mca_verbose=
<br>
[master.org:07957] mca_component_show_load_errors=1
<br>
[master.org:07957] mca_component_disable_dlopen=0
<br>
[master.org:07957] paffinity_base_verbose=0
<br>
[master.org:07957] paffinity=
<br>
[master.org:07957] paffinity_linux_priority=10
<br>
[master.org:07957] paffinity_linux_have_cpu_set_t=1
<br>
[master.org:07957] paffinity_linux_CPU_ZERO_ok=1
<br>
[master.org:07957] paffinity_linux_sched_setaffinity_num_params=3
<br>
[master.org:07957] memcpy=
<br>
[master.org:07957] memcpy_base_verbose=0
<br>
[master.org:07957] memory=
<br>
[master.org:07957] memory_base_verbose=0
<br>
[master.org:07957] memory_ptmalloc2_priority=0
<br>
[master.org:07957] backtrace=
<br>
[master.org:07957] backtrace_base_verbose=0
<br>
[master.org:07957] backtrace_execinfo_priority=0
<br>
[master.org:07957] timer=
<br>
[master.org:07957] timer_base_verbose=0
<br>
[master.org:07957] timer_linux_priority=0
<br>
[master.org:07957] ompi_timing=0
<br>
[master.org:07957] orte_debug=0
<br>
[master.org:07957] orte_debug_daemons_file=0
<br>
[master.org:07957] orte_no_daemonize=0
<br>
[master.org:07957] orte_debug_daemons=0
<br>
[master.org:07957] orte_base_user_debugger=totalview @mpirun@ -a
<br>
@mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@
<br>
@single_app@ : fxp @mpirun@ -a @mpirun_args@
<br>
[master.org:07957] orte_abort_timeout=10
<br>
[master.org:07957] orte_base_nodename=master
<br>
[master.org:07957] seed=0
<br>
[master.org:07957] orte_app_num=0
<br>
[master.org:07957] tmpdir_base=
<br>
[master.org:07957] universe=root_at_[hidden]:default-universe-7947
<br>
[master.org:07957] universe_persistence=0
<br>
[master.org:07957] universe_scope=
<br>
[master.org:07957] universe_console=0
<br>
[master.org:07957] universe_uri=
<br>
[master.org:07957] universe_script=
<br>
[master.org:07957] dss_buffer_type=0
<br>
[master.org:07957] dss_page_size=1
<br>
[master.org:07957] ns_base_verbose=0
<br>
[master.org:07957] ns=
<br>
[master.org:07957] ns_proxy_debug=0
<br>
[master.org:07957] ns_proxy_maxsize=2147483647
<br>
[master.org:07957] ns_proxy_blocksize=512
<br>
[master.org:07957] ns_proxy_priority=0
<br>
[master.org:07957] ns_replica_debug=0
<br>
[master.org:07957] ns_replica_isolate=0
<br>
[master.org:07957] ns_replica_maxsize=2147483647
<br>
[master.org:07957] ns_replica_blocksize=512
<br>
[master.org:07957] ns_replica_priority=0
<br>
[master.org:07957] errmgr_base_verbose=0
<br>
[master.org:07957] errmgr=
<br>
[master.org:07957] errmgr_hnp_debug=0
<br>
[master.org:07957] errmgr_hnp_priority=0
<br>
[master.org:07957] errmgr_orted_debug=0
<br>
[master.org:07957] errmgr_orted_priority=0
<br>
[master.org:07957] errmgr_proxy_debug=0
<br>
[master.org:07957] errmgr_proxy_priority=0
<br>
[master.org:07957] rml_base_debug=0
<br>
[master.org:07957] rml=
<br>
[master.org:07957] rml_base_verbose=0
<br>
[master.org:07957] oob=
<br>
[master.org:07957] oob_base_verbose=0
<br>
[master.org:07957] oob_tcp_peer_limit=-1
<br>
[master.org:07957] oob_tcp_peer_retries=60
<br>
[master.org:07957] oob_tcp_debug=0
<br>
[master.org:07957] oob_tcp_sndbuf=131072
<br>
[master.org:07957] oob_tcp_rcvbuf=131072
<br>
[master.org:07957] oob_tcp_if_include=
<br>
[master.org:07957] oob_tcp_if_exclude=
<br>
[master.org:07957] oob_tcp_connect_sleep=1
<br>
[master.org:07957] oob_tcp_listen_mode=event
<br>
[master.org:07957] oob_tcp_listen_thread_max_queue=10
<br>
[master.org:07957] oob_tcp_listen_thread_max_time=10
<br>
[master.org:07957] oob_tcp_accept_spin_count=10
<br>
[master.org:07957] oob_tcp_priority=0
<br>
[master.org:07957] oob_base_include=
<br>
[master.org:07957] oob_base_exclude=
<br>
[master.org:07957] orte_timing=0
<br>
[master.org:07957] oob_xcast_timing=0
<br>
[master.org:07957] oob_xcast_mode=linear
<br>
[master.org:07957] rml_oob_priority=0
<br>
[master.org:07957] gpr_base_verbose=0
<br>
[master.org:07957] gpr_base_maxsize=2147483647
<br>
[master.org:07957] gpr_base_blocksize=512
<br>
[master.org:07957] gpr=
<br>
[master.org:07957] gpr_null_priority=0
<br>
[master.org:07957] gpr_proxy_debug=0
<br>
[master.org:07957] gpr_proxy_priority=0
<br>
[master.org:07957] gpr_replica_debug=0
<br>
[master.org:07957] gpr_replica_isolate=0
<br>
[master.org:07957] gpr_replica_priority=0
<br>
[master.org:07957] schema_base_verbose=0
<br>
[master.org:07957] schema=
<br>
[master.org:07957] sds=
<br>
[master.org:07957] sds_base_verbose=0
<br>
[master.org:07957] sds_env_priority=0
<br>
[master.org:07957] sds_pipe_priority=0
<br>
[master.org:07957] sds_seed_priority=0
<br>
[master.org:07957] sds_singleton_priority=0
<br>
[master.org:07957] sds_slurm_priority=0
<br>
[master.org:07957] ns_nds=env
<br>
[master.org:07957] ns_nds_name=
<br>
[master.org:07957] ns_nds_cellid=0
<br>
[master.org:07957] ns_nds_jobid=1
<br>
[master.org:07957] ns_nds_vpid=0
<br>
[master.org:07957] ns_nds_vpid_start=0
<br>
[master.org:07957] ns_nds_num_procs=32
<br>
[master.org:07957] rds_base_verbose=0
<br>
[master.org:07957] rds=proxy
<br>
[master.org:07957] rds_proxy_priority=0
<br>
[master.org:07957] ras_base_verbose=0
<br>
[master.org:07957] ras=proxy
<br>
[master.org:07957] rmaps_base_verbose=0
<br>
[master.org:07957] rmaps_base_schedule_policy=unspec
<br>
[master.org:07957] rmaps_base_pernode=0
<br>
[master.org:07957] rmaps_base_n_pernode=-1
<br>
[master.org:07957] rmaps_base_no_schedule_local=0
<br>
[master.org:07957] rmaps_base_no_oversubscribe=0
<br>
[master.org:07957] rmaps_base_display_map=0
<br>
[master.org:07957] rmaps=proxy
<br>
[master.org:07957] pls_base_reuse_daemons=0
<br>
[master.org:07957] pls=proxy
<br>
[master.org:07957] pls_base_verbose=0
<br>
[master.org:07957] pls_proxy_priority=0
<br>
[master.org:07957] odls_base_verbose=0
<br>
[master.org:07957] odls_base_sigkill_timeout=1
<br>
[master.org:07957] odls=
<br>
[master.org:07957] odls_default_priority=0
<br>
[master.org:07957] rmgr_base_verbose=0
<br>
[master.org:07957] rmgr=proxy
<br>
[master.org:07957] rmgr_proxy_priority=0
<br>
[master.org:07957] smr_base_verbose=0
<br>
[master.org:07957] smr=
<br>
[master.org:07957] iof_base_window_size=4096
<br>
[master.org:07957] iof_base_service=0.0.0
<br>
[master.org:07957] iof_base_verbose=0
<br>
[master.org:07957] iof=
<br>
[master.org:07957] iof_proxy_priority=0
<br>
[master.org:07957] iof_svc_priority=0
<br>
[master.org:07957] mpi_param_check=1
<br>
[master.org:07957] mpi_yield_when_idle=0
<br>
[master.org:07957] mpi_event_tick_rate=-1
<br>
[master.org:07957] mpi_show_handle_leaks=0
<br>
[master.org:07957] mpi_no_free_handles=0
<br>
[master.org:07957] mpi_show_mca_params=1
<br>
[master.org:07957] mpi_show_mca_params_file=
<br>
[master.org:07957] mpi_paffinity_alone=0
<br>
[master.org:07957] mpi_keep_peer_hostnames=1
<br>
[master.org:07957] mpi_abort_delay=0
<br>
[master.org:07957] mpi_abort_print_stack=0
<br>
[master.org:07957] mpi_preconnect_all=0
<br>
[master.org:07957] mpi_preconnect_oob=0
<br>
[master.org:07957] mpi_leave_pinned=0
<br>
[master.org:07957] mpi_leave_pinned_pipeline=0
<br>
[master.org:07957] mpi_warn_if_thread_multiple=1
<br>
[master.org:07957] mpi_warn_if_progress_threads=1
<br>
[master.org:07957] allocator=
<br>
[master.org:07957] allocator_base_verbose=0
<br>
[master.org:07957] allocator_basic_priority=0
<br>
[master.org:07957] allocator_bucket_num_buckets=30
<br>
[master.org:07957] allocator_bucket_priority=0
<br>
[master.org:07957] rcache=
<br>
[master.org:07957] rcache_base_verbose=0
<br>
[master.org:07957] rcache_vma_priority=0
<br>
[master.org:07957] mpool=
<br>
[master.org:07957] mpool_base_verbose=0
<br>
[master.org:07957] mpool_rdma_rcache_name=vma
<br>
[master.org:07957] mpool_rdma_rcache_size_limit=0
<br>
[master.org:07957] mpool_rdma_print_stats=0
<br>
[master.org:07957] mpool_rdma_priority=0
<br>
[master.org:07957] mpool_sm_allocator=bucket
<br>
[master.org:07957] mpool_sm_max_size=536870912
<br>
[master.org:07957] mpool_sm_min_size=134217728
<br>
[master.org:07957] mpool_sm_per_peer_size=33554432
<br>
[master.org:07957] mpool_sm_verbose=0
<br>
[master.org:07957] mpool_sm_priority=0
<br>
[master.org:07957] mpool_base_use_mem_hooks=0
<br>
[master.org:07957] mpool_use_mem_hooks=0
<br>
[master.org:07957] mpool_base_disable_sbrk=0
<br>
[master.org:07957] mpool_disable_sbrk=0
<br>
[master.org:07957] pml=
<br>
[master.org:07957] pml_base_verbose=0
<br>
[master.org:07957] mtl=
<br>
[master.org:07957] mtl_base_verbose=0
<br>
[master.org:07957] pml_cm_free_list_num=4
<br>
[master.org:07957] pml_cm_free_list_max=-1
<br>
[master.org:07957] pml_cm_free_list_inc=64
<br>
[master.org:07957] pml_cm_priority=30
<br>
[master.org:07957] pml_ob1_free_list_num=4
<br>
[master.org:07957] pml_ob1_free_list_max=-1
<br>
[master.org:07957] pml_ob1_free_list_inc=64
<br>
[master.org:07957] pml_ob1_priority=20
<br>
[master.org:07957] pml_ob1_eager_limit=131072
<br>
[master.org:07957] pml_ob1_send_pipeline_depth=3
<br>
[master.org:07957] pml_ob1_recv_pipeline_depth=4
<br>
[master.org:07957] pml_ob1_use_early_completion=1
<br>
[master.org:07957] bml=
<br>
[master.org:07957] bml_base_verbose=0
<br>
[master.org:07957] bml_r2_show_unreach_errors=1
<br>
[master.org:07957] bml_r2_priority=0
<br>
[master.org:07957] btl_base_debug=0
<br>
[master.org:07957] btl=self,openib
<br>
[master.org:07957] btl_base_verbose=0
<br>
[master.org:07957] btl_self_free_list_num=0
<br>
[master.org:07957] btl_self_free_list_max=-1
<br>
[master.org:07957] btl_self_free_list_inc=32
<br>
[master.org:07957] btl_self_eager_limit=131072
<br>
[master.org:07957] btl_self_min_send_size=262144
<br>
[master.org:07957] btl_self_max_send_size=262144
<br>
[master.org:07957] btl_self_min_rdma_size=2147483647
<br>
[master.org:07957] btl_self_max_rdma_size=2147483647
<br>
[master.org:07957] btl_self_exclusivity=65536
<br>
[master.org:07957] btl_self_flags=10
<br>
[master.org:07957] btl_self_priority=0
<br>
[master.org:07957] btl_openib_verbose=0
<br>
[master.org:07957] btl_openib_warn_no_hca_params_found=1
<br>
[master.org:07957] btl_openib_warn_default_gid_prefix=1
<br>
[master.org:07957] btl_openib_want_fork_support=-1
<br>
&nbsp;...
<br>
<p>for v 1.3.2 I do the same export command and get:
<br>
<p>[root_at_master orca]# ./orca hexatriene_TDDFT_get_asa_input_parallel_1.inp
<br>
<span class="quotelev1">&gt; 1.3.2_test_crafted_input_file_mca_params.out
</span><br>
[master.org:11857]
<br>
mca_param_files=/root/.openmpi/mca-params.conf:/usr/mpi/gcc/openmpi-1.3.2/etc/openmpi-mca-params.conf (default value)
<br>
[master.org:11857] mca_base_param_file_prefix= (default value)
<br>
[master.org:11857]
<br>
mca_base_param_file_path=/usr/mpi/gcc/openmpi-1.3.2/share/openmpi/amca-param-sets:/state/partition1/orca (default value)
<br>
[master.org:11857] mca_base_param_file_path_force= (default value)
<br>
[master.org:11857] opal_signal=6,7,8,11 (default value)
<br>
[master.org:11857] opal_set_max_sys_limits=0 (default value)
<br>
[master.org:11857] dss_buffer_type=0 (default value)
<br>
[master.org:11857] dss_buffer_initial_size=128 (default value)
<br>
[master.org:11857] dss_buffer_threshold_size=1024 (default value)
<br>
[master.org:11857] opal_event_include=all (API override)
<br>
[master.org:11857] ompi_timing=0 (default value)
<br>
[master.org:11857]
<br>
mca_component_path=/usr/mpi/gcc/openmpi-1.3.2/lib/openmpi:/root/.openmpi/components (default value)
<br>
[master.org:11857] mca_verbose= (default value)
<br>
[master.org:11857] mca_component_show_load_errors=1 (default value)
<br>
[master.org:11857] mca_component_disable_dlopen=0 (default value)
<br>
[master.org:11857] paffinity_base_verbose=0 (default value)
<br>
[master.org:11857] paffinity= (default value)
<br>
[master.org:11857] paffinity_linux_priority=10 (default value)
<br>
[master.org:11857] paffinity_linux_plpa_version=1.3rc4 (default value)
<br>
[master.org:11857] memcpy= (default value)
<br>
[master.org:11857] memcpy_base_verbose=0 (default value)
<br>
[master.org:11857] memory= (default value)
<br>
[master.org:11857] memory_base_verbose=0 (default value)
<br>
[master.org:11857] memory_ptmalloc2_priority=0 (default value)
<br>
[master.org:11857] memchecker_base_verbose=0 (default value)
<br>
[master.org:11857] memchecker= (default value)
<br>
[master.org:11857] backtrace= (default value)
<br>
[master.org:11857] backtrace_base_verbose=0 (default value)
<br>
[master.org:11857] backtrace_execinfo_priority=0 (default value)
<br>
[master.org:11857] timer= (default value)
<br>
[master.org:11857] timer_base_verbose=0 (default value)
<br>
[master.org:11857] timer_linux_priority=0 (default value)
<br>
[master.org:11857] carto_base_verbose=0 (default value)
<br>
[master.org:11857] carto= (default value)
<br>
[master.org:11857] carto_auto_detect_priority=11 (default value)
<br>
[master.org:11857] carto_file_path= (default value)
<br>
[master.org:11857] carto_file_priority=10 (default value)
<br>
[master.org:11857] opal_cr_verbose=0 (default value)
<br>
[master.org:11857] ft_cr_enabled=0 (default value)
<br>
[master.org:11857] opal_cr_enable_timer=0 (default value)
<br>
[master.org:11857] opal_cr_enable_timer_barrier=0 (default value)
<br>
[master.org:11857] opal_cr_timer_target_rank=0 (default value)
<br>
[master.org:11857] opal_cr_is_tool=0 (default value)
<br>
[master.org:11857] opal_cr_signal=10 (default value)
<br>
[master.org:11857] opal_cr_debug_sigpipe=0 (default value)
<br>
[master.org:11857] opal_cr_tmp_dir=/tmp (default value)
<br>
[master.org:11857] orte_base_help_aggregate=1 (default value)
<br>
[master.org:11857] orte_tmpdir_base= (default value)
<br>
[master.org:11857] orte_no_session_dirs= (default value)
<br>
[master.org:11857] orte_debug=0 (default value)
<br>
[master.org:11857] orte_debug_verbose=-1 (default value)
<br>
[master.org:11857] orte_debug_daemons=0 (default value)
<br>
[master.org:11857] orte_debug_daemons_file=0 (default value)
<br>
[master.org:11857] orte_leave_session_attached=0 (default value)
<br>
[master.org:11857] orte_do_not_launch=0 (default value)
<br>
[master.org:11857] orte_daemon_spin=0 (default value)
<br>
[master.org:11857] orte_daemon_fail=-1 (default value)
<br>
[master.org:11857] orte_daemon_fail_delay=0 (default value)
<br>
[master.org:11857] orte_heartbeat_rate=0 (default value)
<br>
[master.org:11857] orte_startup_timeout=0 (default value)
<br>
[master.org:11857] orte_timing=0 (default value)
<br>
[master.org:11857] orte_base_user_debugger=totalview @mpirun@ -a
<br>
@mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@
<br>
@single_app@ : fxp @mpirun@ -a @mpirun_args@ (default value)
<br>
[master.org:11857] orte_abort_timeout=1 (default value)
<br>
[master.org:11857] orte_timeout_step=1000 (default value)
<br>
[master.org:11857] orte_default_hostfile= (default value)
<br>
[master.org:11857] orte_keep_fqdn_hostnames=0 (default value)
<br>
[master.org:11857] orte_contiguous_nodes=2147483647 (default value)
<br>
[master.org:11857] orte_tag_output=0 (default value)
<br>
[master.org:11857] orte_xml_output=0 (default value)
<br>
[master.org:11857] orte_timestamp_output=0 (default value)
<br>
[master.org:11857] orte_output_filename= (default value)
<br>
[master.org:11857] orte_show_resolved_nodenames=0 (default value)
<br>
[master.org:11857] orte_hetero_apps=0 (default value)
<br>
[master.org:11857] orte_launch_agent=orted (default value)
<br>
[master.org:11857] orte_allocation_required=0 (default value)
<br>
[master.org:11857] orte_xterm= (default value)
<br>
[master.org:11857] orte_forward_job_control=0 (default value)
<br>
[master.org:11857] ess=env (environment)
<br>
[master.org:11857] ess_base_verbose=0 (default value)
<br>
[master.org:11857] ess_env_priority=0 (default value)
<br>
[master.org:11857] orte_ess_jobid=3016687617 (environment)
<br>
[master.org:11857] orte_ess_vpid=0 (environment)
<br>
[master.org:11857] rml_wrapper= (default value)
<br>
[master.org:11857] rml= (default value)
<br>
[master.org:11857] rml_base_verbose=0 (default value)
<br>
[master.org:11857] oob= (default value)
<br>
[master.org:11857] oob_base_verbose=0 (default value)
<br>
[master.org:11857] oob_tcp_verbose=0 (default value)
<br>
[master.org:11857] oob_tcp_peer_limit=-1 (default value)
<br>
[master.org:11857] oob_tcp_peer_retries=60 (default value)
<br>
[master.org:11857] oob_tcp_debug=0 (default value)
<br>
[master.org:11857] oob_tcp_sndbuf=131072 (default value)
<br>
[master.org:11857] oob_tcp_rcvbuf=131072 (default value)
<br>
[master.org:11857] oob_tcp_if_include= (default value)
<br>
[master.org:11857] oob_tcp_if_exclude= (default value)
<br>
[master.org:11857] oob_tcp_connect_sleep=1 (default value)
<br>
[master.org:11857] oob_tcp_listen_mode=event (default value)
<br>
[master.org:11857] oob_tcp_listen_thread_max_queue=10 (default value)
<br>
[master.org:11857] oob_tcp_listen_thread_wait_time=10 (default value)
<br>
[master.org:11857] oob_tcp_port_min_v4=0 (default value)
<br>
[master.org:11857] oob_tcp_port_range_v4=65535 (default value)
<br>
[master.org:11857] oob_tcp_disable_family=0 (default value)
<br>
[master.org:11857] oob_tcp_port_min_v6=0 (default value)
<br>
[master.org:11857] oob_tcp_port_range_v6=65535 (default value)
<br>
[master.org:11857] oob_tcp_priority=0 (default value)
<br>
[master.org:11857] rml_oob_priority=0 (default value)
<br>
[master.org:11857] opal_if_do_not_resolve=0 (default value)
<br>
[master.org:11857] routed= (default value)
<br>
[master.org:11857] routed_base_verbose=0 (default value)
<br>
[master.org:11857] routed_binomial_priority=0 (default value)
<br>
[master.org:11857] routed_direct_priority=0 (default value)
<br>
[master.org:11857] routed_linear_priority=0 (default value)
<br>
[master.org:11857] grpcomm= (default value)
<br>
[master.org:11857] grpcomm_base_verbose=0 (default value)
<br>
[master.org:11857] grpcomm_bad_priority=0 (default value)
<br>
[master.org:11857] grpcomm_basic_priority=0 (default value)
<br>
[master.org:11857] orte_cr_verbose=0 (default value)
<br>
[master.org:11857] notifier= (default value)
<br>
[master.org:11857] notifier_base_verbose=0 (default value)
<br>
[master.org:11857] notifier_syslog_priority=0 (default value)
<br>
[master.org:11857] mpi_param_check=1 (default value)
<br>
[master.org:11857] mpi_yield_when_idle=0 (environment)
<br>
[master.org:11857] mpi_event_tick_rate=-1 (default value)
<br>
[master.org:11857] mpi_show_handle_leaks=0 (default value)
<br>
[master.org:11857] mpi_no_free_handles=0 (default value)
<br>
[master.org:11857] mpi_show_mpi_alloc_mem_leaks=0 (default value)
<br>
[master.org:11857] mpi_show_mca_params=1 (environment)
<br>
[master.org:11857] mpi_show_mca_params_file= (default value)
<br>
[master.org:11857] mpi_keep_peer_hostnames=1 (default value)
<br>
[master.org:11857] mpi_abort_delay=0 (default value)
<br>
[master.org:11857] mpi_abort_print_stack=0 (default value)
<br>
[master.org:11857] mpi_preconnect_mpi=0 (default value)
<br>
[master.org:11857] mpi_preconnect_all=0 (default value)
<br>
[master.org:11857] mpi_leave_pinned=-1 (default value)
<br>
[master.org:11857] mpi_leave_pinned_pipeline=0 (default value)
<br>
[master.org:11857] mpi_paffinity_alone=0 (default value)
<br>
[master.org:11857] mpi_warn_on_fork=1 (default value)
<br>
[master.org:11857] mpi_have_sparse_group_storage=0 (default value)
<br>
[master.org:11857] mpi_use_sparse_group_storage=0 (default value)
<br>
[master.org:11857] allocator= (default value)
<br>
[master.org:11857] allocator_base_verbose=0 (default value)
<br>
[master.org:11857] allocator_basic_priority=0 (default value)
<br>
[master.org:11857] allocator_bucket_num_buckets=30 (default value)
<br>
[master.org:11857] allocator_bucket_priority=0 (default value)
<br>
[master.org:11857] rcache= (default value)
<br>
[master.org:11857] rcache_base_verbose=0 (default value)
<br>
[master.org:11857] rcache_vma_priority=0 (default value)
<br>
[master.org:11857] mpool= (default value)
<br>
[master.org:11857] mpool_base_verbose=0 (default value)
<br>
[master.org:11857] mpool_fake_priority=0 (default value)
<br>
[master.org:11857] mpool_rdma_rcache_name=vma (default value)
<br>
[master.org:11857] mpool_rdma_rcache_size_limit=0 (default value)
<br>
[master.org:11857] mpool_rdma_print_stats=0 (default value)
<br>
[master.org:11857] mpool_rdma_priority=0 (default value)
<br>
[master.org:11857] mpool_sm_allocator=bucket (default value)
<br>
[master.org:11857] mpool_sm_min_size=67108864 (default value)
<br>
[master.org:11857] mpool_sm_verbose=0 (default value)
<br>
[master.org:11857] mpool_sm_priority=0 (default value)
<br>
[master.org:11857] pml_base_verbose=0 (default value)
<br>
[master.org:11857] pml= (default value)
<br>
[master.org:11857] mtl= (default value)
<br>
[master.org:11857] mtl_base_verbose=0 (default value)
<br>
[master.org:11857] pml_cm_free_list_num=4 (default value)
<br>
[master.org:11857] pml_cm_free_list_max=-1 (default value)
<br>
[master.org:11857] pml_cm_free_list_inc=64 (default value)
<br>
[master.org:11857] pml_cm_priority=30 (default value)
<br>
[master.org:11857] pml_csum_free_list_num=4 (default value)
<br>
[master.org:11857] pml_csum_free_list_max=-1 (default value)
<br>
[master.org:11857] pml_csum_free_list_inc=64 (default value)
<br>
[master.org:11857] pml_csum_send_pipeline_depth=3 (default value)
<br>
[master.org:11857] pml_csum_recv_pipeline_depth=4 (default value)
<br>
[master.org:11857] pml_csum_rdma_put_retries_limit=5 (default value)
<br>
[master.org:11857] pml_csum_max_rdma_per_request=4 (default value)
<br>
[master.org:11857] pml_csum_max_send_per_range=4 (default value)
<br>
[master.org:11857] pml_csum_unexpected_limit=128 (default value)
<br>
[master.org:11857] pml_csum_allocator=bucket (default value)
<br>
[master.org:11857] bml= (default value)
<br>
[master.org:11857] bml_base_verbose=0 (default value)
<br>
[master.org:11857] bml_r2_show_unreach_errors=1 (default value)
<br>
[master.org:11857] bml_r2_priority=0 (default value)
<br>
[master.org:11857] btl_base_verbose=0 (default value)
<br>
[master.org:11857] btl=self,openib
<br>
(file:/usr/mpi/gcc/openmpi-1.3.2/etc/openmpi-mca-params.conf)
<br>
[master.org:11857] btl_openib_verbose=0 (default value)
<br>
[master.org:11857] btl_openib_warn_no_device_params_found=1 (default
<br>
value)
<br>
[master.org:11857] btl_openib_warn_no_hca_params_found=1 (default value)
<br>
[master.org:11857] btl_openib_warn_default_gid_prefix=1 (default value)
<br>
[master.org:11857] btl_openib_warn_nonexistent_if=1 (default value)
<br>
[master.org:11857] btl_openib_want_fork_support=-1 (default value)
<br>
[master.org:11857]
<br>
btl_openib_device_param_files=/usr/mpi/gcc/openmpi-1.3.2/share/openmpi/mca-btl-openib-device-params.ini (default value)
<br>
[master.org:11857]
<br>
btl_openib_hca_param_files=/usr/mpi/gcc/openmpi-1.3.2/share/openmpi/mca-btl-openib-device-params.ini (default value)
<br>
[master.org:11857] btl_openib_device_type=all (default value)
<br>
[master.org:11857] btl_openib_max_btls=-1 (default value)
<br>
[master.org:11857] btl_openib_free_list_num=8 (default value)
<br>
[master.org:11857] btl_openib_free_list_max=-1 (default value)
<br>
[master.org:11857] btl_openib_free_list_inc=32 (default value)
<br>
[master.org:11857] btl_openib_mpool=rdma (default value)
<br>
[master.org:11857] btl_openib_reg_mru_len=16 (default value)
<br>
[master.org:11857] btl_openib_cq_size=1000 (default value)
<br>
[master.org:11857] btl_openib_ib_cq_size=1000 (default value)
<br>
[master.org:11857] btl_openib_max_inline_data=-1 (default value)
<br>
[master.org:11857] btl_openib_ib_max_inline_data=-1 (default value)
<br>
[master.org:11857] btl_openib_pkey=0 (default value)
<br>
[master.org:11857] btl_openib_ib_pkey_val=0 (default value)
<br>
[master.org:11857] btl_openib_psn=0 (default value)
<br>
[master.org:11857] btl_openib_ib_psn=0 (default value)
<br>
[master.org:11857] btl_openib_ib_qp_ous_rd_atom=4 (default value)
<br>
[master.org:11857] btl_openib_mtu=3 (default value)
<br>
[master.org:11857] btl_openib_ib_mtu=3 (default value)
<br>
[master.org:11857] btl_openib_ib_min_rnr_timer=25 (default value)
<br>
[master.org:11857] btl_openib_ib_timeout=20 (default value)
<br>
[master.org:11857] btl_openib_ib_retry_count=7 (default value)
<br>
[master.org:11857] btl_openib_ib_rnr_retry=7 (default value)
<br>
[master.org:11857] btl_openib_ib_max_rdma_dst_ops=4 (default value)
<br>
[master.org:11857] btl_openib_ib_service_level=0 (default value)
<br>
[master.org:11857] btl_openib_use_eager_rdma=-1 (default value)
<br>
[master.org:11857] btl_openib_eager_rdma_threshold=16 (default value)
<br>
[master.org:11857] btl_openib_max_eager_rdma=16 (default value)
<br>
[master.org:11857] btl_openib_eager_rdma_num=16 (default value)
<br>
[master.org:11857] btl_openib_btls_per_lid=1 (default value)
<br>
[master.org:11857] btl_openib_max_lmc=0 (default value)
<br>
[master.org:11857] btl_openib_enable_apm_over_lmc=0 (default value)
<br>
[master.org:11857] btl_openib_enable_apm_over_ports=0 (default value)
<br>
[master.org:11857] btl_openib_use_async_event_thread=1 (default value)
<br>
[master.org:11857] btl_openib_buffer_alignment=64 (default value)
<br>
[master.org:11857] btl_openib_use_message_coalescing=1 (default value)
<br>
[master.org:11857] btl_openib_cq_poll_ratio=100 (default value)
<br>
[master.org:11857] btl_openib_eager_rdma_poll_ratio=100 (default value)
<br>
[master.org:11857] btl_openib_hp_cq_poll_per_progress=10 (default value)
<br>
[master.org:11857] btl_openib_have_fork_support=1 (default value)
<br>
[master.org:11857] btl_openib_exclusivity=1024 (default value)
<br>
[master.org:11857] btl_openib_flags=310 (default value)
<br>
[master.org:11857] btl_openib_rndv_eager_limit=12288 (default value)
<br>
[master.org:11857] btl_openib_eager_limit=12288 (default value)
<br>
[master.org:11857] btl_openib_max_send_size=65536 (default value)
<br>
[master.org:11857] btl_openib_rdma_pipeline_send_length=1048576 (default
<br>
value)
<br>
[master.org:11857] btl_openib_rdma_pipeline_frag_size=1048576 (default
<br>
value)
<br>
[master.org:11857] btl_openib_min_rdma_pipeline_size=262144 (default
<br>
value)
<br>
[master.org:11857] btl_openib_bandwidth=800 (default value)
<br>
[master.org:11857] btl_openib_latency=10 (default value)
<br>
[master.org:11857]
<br>
btl_openib_receive_queues=P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32 (default value)
<br>
[master.org:11857] btl_openib_if_include= (default value)
<br>
[master.org:11857] btl_openib_if_exclude= (default value)
<br>
[master.org:11857] btl_openib_ipaddr_include= (default value)
<br>
[master.org:11857] btl_openib_ipaddr_exclude= (default value)
<br>
[master.org:11857] btl_openib_cpc_include= (default value)
<br>
[master.org:11857] btl_openib_cpc_exclude= (default value)
<br>
[master.org:11857] btl_openib_connect_oob_priority=50 (default value)
<br>
[master.org:11857] btl_openib_connect_xoob_priority=60 (default value)
<br>
[master.org:11857] btl_openib_connect_rdmacm_priority=30 (default value)
<br>
[master.org:11857] btl_openib_connect_rdmacm_port=0 (default value)
<br>
[master.org:11857] btl_openib_connect_rdmacm_resolve_timeout=2000
<br>
(default value)
<br>
[master.org:11857]
<br>
btl_openib_connect_rdmacm_reject_causes_connect_error=0 (default value)
<br>
[master.org:11857] btl_openib_priority=0 (default value)
<br>
[master.org:11857] btl_self_free_list_num=0 (default value)
<br>
[master.org:11857] btl_self_free_list_max=-1 (default value)
<br>
[master.org:11857] btl_self_free_list_inc=32 (default value)
<br>
[master.org:11857] btl_self_exclusivity=65536 (default value)
<br>
[master.org:11857] btl_self_flags=10 (default value)
<br>
[master.org:11857] btl_self_rndv_eager_limit=131072 (default value)
<br>
[master.org:11857] btl_self_eager_limit=131072 (default value)
<br>
[master.org:11857] btl_self_max_send_size=262144 (default value)
<br>
[master.org:11857] btl_self_rdma_pipeline_send_length=2147483647
<br>
(default value)
<br>
[master.org:11857] btl_self_rdma_pipeline_frag_size=2147483647 (default
<br>
value)
<br>
[master.org:11857] btl_self_min_rdma_pipeline_size=0 (default value)
<br>
[master.org:11857] btl_self_bandwidth=100 (default value)
<br>
[master.org:11857] btl_self_latency=0 (default value)
<br>
[master.org:11857] btl_self_priority=0 (default value)
<br>
[master.org:11857] btl_base_include= (default value)
<br>
[master.org:11857] btl_base_exclude= (default value)
<br>
[master.org:11857] btl_base_warn_component_unused=1 (default value)
<br>
[master.org:11857] pml_csum_priority=0 (default value)
<br>
[master.org:11857] pml_ob1_free_list_num=4 (default value)
<br>
[master.org:11857] pml_ob1_free_list_max=-1 (default value)
<br>
[master.org:11857] pml_ob1_free_list_inc=64 (default value)
<br>
[master.org:11857] pml_ob1_priority=20 (default value)
<br>
[master.org:11857] pml_ob1_send_pipeline_depth=3 (default value)
<br>
[master.org:11857] pml_ob1_recv_pipeline_depth=4 (default value)
<br>
[master.org:11857] pml_ob1_rdma_put_retries_limit=5 (default value)
<br>
[master.org:11857] pml_ob1_max_rdma_per_request=4 (default value)
<br>
[master.org:11857] pml_ob1_max_send_per_range=4 (default value)
<br>
[master.org:11857] pml_ob1_unexpected_limit=128 (default value)
<br>
[master.org:11857] pml_ob1_allocator=bucket (default value)
<br>
[master.org:11857] pml_v_priority=-1 (default value)
<br>
[master.org:11857] pml_v_output=stderr (default value)
<br>
[master.org:11857] pml_v_verbose=0 (default value)
<br>
[master.org:11857] vprotocol= (default value)
<br>
[master.org:11857] coll= (default value)
<br>
[master.org:11857] coll_base_verbose=0 (default value)
<br>
[master.org:11857] coll_basic_priority=10 (default value)
<br>
[master.org:11857] coll_basic_crossover=4 (default value)
<br>
[master.org:11857] coll_hierarch_priority=0 (default value)
<br>
[master.org:11857] coll_hierarch_verbose=0 (default value)
<br>
[master.org:11857] coll_hierarch_use_rdma=0 (default value)
<br>
[master.org:11857] coll_hierarch_ignore_sm=0 (default value)
<br>
[master.org:11857] coll_hierarch_detection_alg=2 (default value)
<br>
[master.org:11857] coll_inter_priority=40 (default value)
<br>
[master.org:11857] coll_inter_verbose=0 (default value)
<br>
[master.org:11857] coll_self_priority=75 (default value)
<br>
[master.org:11857] coll_sm_priority=0 (default value)
<br>
[master.org:11857] coll_sm_control_size=4096 (default value)
<br>
[master.org:11857] coll_sm_bootstrap_filename=shared_mem_sm_bootstrap
<br>
(default value)
<br>
[master.org:11857] coll_sm_bootstrap_num_segments=8 (default value)
<br>
[master.org:11857] coll_sm_fragment_size=8192 (default value)
<br>
[master.org:11857] coll_sm_mpool=sm (default value)
<br>
[master.org:11857] coll_sm_comm_in_use_flags=2 (default value)
<br>
[master.org:11857] coll_sm_comm_num_segments=8 (default value)
<br>
[master.org:11857] coll_sm_tree_degree=4 (default value)
<br>
[master.org:11857] coll_sm_shared_mem_used_bootstrap=200 (default value)
<br>
[master.org:11857] coll_sm_info_num_procs=4 (default value)
<br>
[master.org:11857] coll_sm_shared_mem_used_data=548864 (default value)
<br>
[master.org:11857] coll_sync_priority=50 (default value)
<br>
[master.org:11857] coll_sync_barrier_before=0 (default value)
<br>
[master.org:11857] coll_sync_barrier_after=0 (default value)
<br>
[master.org:11857] coll_tuned_priority=30 (default value)
<br>
[master.org:11857] coll_tuned_pre_allocate_memory_comm_size_limit=32768
<br>
(default value)
<br>
[master.org:11857] coll_tuned_init_tree_fanout=4 (default value)
<br>
[master.org:11857] coll_tuned_init_chain_fanout=4 (default value)
<br>
[master.org:11857] coll_tuned_use_dynamic_rules=0 (default value)
<br>
[master.org:11857] osc= (default value)
<br>
[master.org:11857] osc_base_verbose=0 (default value)
<br>
[master.org:11857] osc_pt2pt_no_locks=0 (default value)
<br>
[master.org:11857] osc_pt2pt_eager_limit=16384 (default value)
<br>
[master.org:11857] osc_pt2pt_priority=0 (default value)
<br>
[master.org:11857] osc_rdma_eager_send=1 (default value)
<br>
[master.org:11857] osc_rdma_use_buffers=0 (default value)
<br>
[master.org:11857] osc_rdma_use_rdma=0 (default value)
<br>
[master.org:11857] osc_rdma_rdma_completion_wait=1 (default value)
<br>
[master.org:11857] osc_rdma_no_locks=0 (default value)
<br>
[master.org:11857] osc_rdma_priority=0 (default value)
<br>
[master.org:11857] btl_openib_bandwidth_mthca0=800 (default value)
<br>
[master.org:11857] btl_openib_bandwidth_mthca0:1=800 (default value)
<br>
[master.org:11857] btl_openib_bandwidth_mthca0:1:3=800 (default value)
<br>
[master.org:11857] btl_openib_latency_mthca0=10 (default value)
<br>
[master.org:11857] btl_openib_latency_mthca0:1=10 (default value)
<br>
[master.org:11857] btl_openib_latency_mthca0:1:3=10 (default value)
<br>
[master.org:12011]
<br>
mca_param_files=/root/.openmpi/mca-params.conf:/usr/mpi/gcc/openmpi-1.3.2/etc/openmpi-mca-params.conf (default value)
<br>
[master.org:12011] mca_base_param_file_prefix= (default value)
<br>
[master.org:12011]
<br>
mca_base_param_file_path=/usr/mpi/gcc/openmpi-1.3.2/share/openmpi/amca-param-sets:/state/partition1/orca (default value)
<br>
[master.org:12011] mca_base_param_file_path_force= (default value)
<br>
[master.org:12011] opal_signal=6,7,8,11 (default value)
<br>
[master.org:12011] opal_set_max_sys_limits=0 (default value)
<br>
[master.org:12011] dss_buffer_type=0 (default value)
<br>
[master.org:12011] dss_buffer_initial_size=128 (default value)
<br>
[master.org:12011] dss_buffer_threshold_size=1024 (default value)
<br>
[master.org:12011] opal_event_include=all (API override)
<br>
[master.org:12011] ompi_timing=0 (default value)
<br>
[master.org:12011]
<br>
mca_component_path=/usr/mpi/gcc/openmpi-1.3.2/lib/openmpi:/root/.openmpi/components (default value)
<br>
[master.org:12011] mca_verbose= (default value)
<br>
[master.org:12011] mca_component_show_load_errors=1 (default value)
<br>
[master.org:12011] mca_component_disable_dlopen=0 (default value)
<br>
[master.org:12011] paffinity_base_verbose=0 (default value)
<br>
[master.org:12011] paffinity= (default value)
<br>
[master.org:12011] paffinity_linux_priority=10 (default value)
<br>
[master.org:12011] paffinity_linux_plpa_version=1.3rc4 (default value)
<br>
[master.org:12011] memcpy= (default value)
<br>
[master.org:12011] memcpy_base_verbose=0 (default value)
<br>
[master.org:12011] memory= (default value)
<br>
[master.org:12011] memory_base_verbose=0 (default value)
<br>
[master.org:12011] memory_ptmalloc2_priority=0 (default value)
<br>
[master.org:12011] memchecker_base_verbose=0 (default value)
<br>
[master.org:12011] memchecker= (default value)
<br>
[master.org:12011] backtrace= (default value)
<br>
[master.org:12011] backtrace_base_verbose=0 (default value)
<br>
[master.org:12011] backtrace_execinfo_priority=0 (default value)
<br>
[master.org:12011] timer= (default value)
<br>
[master.org:12011] timer_base_verbose=0 (default value)
<br>
[master.org:12011] timer_linux_priority=0 (default value)
<br>
[master.org:12011] carto_base_verbose=0 (default value)
<br>
[master.org:12011] carto= (default value)
<br>
[master.org:12011] carto_auto_detect_priority=11 (default value)
<br>
[master.org:12011] carto_file_path= (default value)
<br>
[master.org:12011] carto_file_priority=10 (default value)
<br>
[master.org:12011] opal_cr_verbose=0 (default value)
<br>
[master.org:12011] ft_cr_enabled=0 (default value)
<br>
[master.org:12011] opal_cr_enable_timer=0 (default value)
<br>
[master.org:12011] opal_cr_enable_timer_barrier=0 (default value)
<br>
[master.org:12011] opal_cr_timer_target_rank=0 (default value)
<br>
[master.org:12011] opal_cr_is_tool=0 (default value)
<br>
[master.org:12011] opal_cr_signal=10 (default value)
<br>
[master.org:12011] opal_cr_debug_sigpipe=0 (default value)
<br>
[master.org:12011] opal_cr_tmp_dir=/tmp (default value)
<br>
[master.org:12011] orte_base_help_aggregate=1 (default value)
<br>
[master.org:12011] orte_tmpdir_base= (default value)
<br>
[master.org:12011] orte_no_session_dirs= (default value)
<br>
[master.org:12011] orte_debug=0 (default value)
<br>
[master.org:12011] orte_debug_verbose=-1 (default value)
<br>
[master.org:12011] orte_debug_daemons=0 (default value)
<br>
[master.org:12011] orte_debug_daemons_file=0 (default value)
<br>
[master.org:12011] orte_leave_session_attached=0 (default value)
<br>
[master.org:12011] orte_do_not_launch=0 (default value)
<br>
[master.org:12011] orte_daemon_spin=0 (default value)
<br>
[master.org:12011] orte_daemon_fail=-1 (default value)
<br>
[master.org:12011] orte_daemon_fail_delay=0 (default value)
<br>
[master.org:12011] orte_heartbeat_rate=0 (default value)
<br>
[master.org:12011] orte_startup_timeout=0 (default value)
<br>
[master.org:12011] orte_timing=0 (default value)
<br>
[master.org:12011] orte_base_user_debugger=totalview @mpirun@ -a
<br>
@mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@
<br>
@single_app@ : fxp @mpirun@ -a @mpirun_args@ (default value)
<br>
[master.org:12011] orte_abort_timeout=1 (default value)
<br>
[master.org:12011] orte_timeout_step=1000 (default value)
<br>
[master.org:12011] orte_default_hostfile= (default value)
<br>
[master.org:12011] orte_keep_fqdn_hostnames=0 (default value)
<br>
[master.org:12011] orte_contiguous_nodes=2147483647 (default value)
<br>
[master.org:12011] orte_tag_output=0 (default value)
<br>
[master.org:12011] orte_xml_output=0 (default value)
<br>
[master.org:12011] orte_timestamp_output=0 (default value)
<br>
[master.org:12011] orte_output_filename= (default value)
<br>
[master.org:12011] orte_show_resolved_nodenames=0 (default value)
<br>
[master.org:12011] orte_hetero_apps=0 (default value)
<br>
[master.org:12011] orte_launch_agent=orted (default value)
<br>
[master.org:12011] orte_allocation_required=0 (default value)
<br>
[master.org:12011] orte_xterm= (default value)
<br>
[master.org:12011] orte_forward_job_control=0 (default value)
<br>
[master.org:12011] ess=env (environment)
<br>
[master.org:12011] ess_base_verbose=0 (default value)
<br>
[master.org:12011] ess_env_priority=0 (default value)
<br>
[master.org:12011] orte_ess_jobid=3004366849 (environment)
<br>
[master.org:12011] orte_ess_vpid=0 (environment)
<br>
[master.org:12011] rml_wrapper= (default value)
<br>
[master.org:12011] rml= (default value)
<br>
[master.org:12011] rml_base_verbose=0 (default value)
<br>
[master.org:12011] oob= (default value)
<br>
[master.org:12011] oob_base_verbose=0 (default value)
<br>
[master.org:12011] oob_tcp_verbose=0 (default value)
<br>
[master.org:12011] oob_tcp_peer_limit=-1 (default value)
<br>
[master.org:12011] oob_tcp_peer_retries=60 (default value)
<br>
[master.org:12011] oob_tcp_debug=0 (default value)
<br>
[master.org:12011] oob_tcp_sndbuf=131072 (default value)
<br>
[master.org:12011] oob_tcp_rcvbuf=131072 (default value)
<br>
[master.org:12011] oob_tcp_if_include= (default value)
<br>
[master.org:12011] oob_tcp_if_exclude= (default value)
<br>
[master.org:12011] oob_tcp_connect_sleep=1 (default value)
<br>
[master.org:12011] oob_tcp_listen_mode=event (default value)
<br>
[master.org:12011] oob_tcp_listen_thread_max_queue=10 (default value)
<br>
[master.org:12011] oob_tcp_listen_thread_wait_time=10 (default value)
<br>
[master.org:12011] oob_tcp_port_min_v4=0 (default value)
<br>
[master.org:12011] oob_tcp_port_range_v4=65535 (default value)
<br>
[master.org:12011] oob_tcp_disable_family=0 (default value)
<br>
[master.org:12011] oob_tcp_port_min_v6=0 (default value)
<br>
[master.org:12011] oob_tcp_port_range_v6=65535 (default value)
<br>
[master.org:12011] oob_tcp_priority=0 (default value)
<br>
...
<br>
<p>Are there any useful clues here?  Please note, the app launches a number
<br>
of parallel programs in a sequence determined by the input file.  The
<br>
same input file was used for both runs.
<br>
<p>Jim
<br>
<p><p>On Mon, 2009-06-22 at 19:40 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sounds very strange, indeed. You might want to check that your app is  
</span><br>
<span class="quotelev1">&gt; actually getting the MCA param that you think it is. Try adding:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca mpi_show_mca_params file,env
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your cmd line. This will cause rank=0 to output the MCA params it  
</span><br>
<span class="quotelev1">&gt; thinks were set via the default files and/or environment (including  
</span><br>
<span class="quotelev1">&gt; cmd line).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 22, 2009, at 6:14 PM, Jim Kress ORG wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For the app I am using, ORCA (a Quantum Chemistry program), when it  
</span><br>
<span class="quotelev2">&gt; &gt; was
</span><br>
<span class="quotelev2">&gt; &gt; compiled using openMPI 1.2.8 and run under 1.2.8 with the following in
</span><br>
<span class="quotelev2">&gt; &gt; the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl=self,openib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the app ran fine with no traffic over my Ethernet network and all
</span><br>
<span class="quotelev2">&gt; &gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, now that ORCA has been recompiled with openMPI v1.3.2 and run
</span><br>
<span class="quotelev2">&gt; &gt; under 1.3.2 (using the same openmpi-mca-params.conf file), the
</span><br>
<span class="quotelev2">&gt; &gt; performance has been reduced by 50% and all the MPI traffic is going
</span><br>
<span class="quotelev2">&gt; &gt; over the Ethernet network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As a matter of fact, the openMPI v1.3.2 performance now looks exactly
</span><br>
<span class="quotelev2">&gt; &gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone have any ideas:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) How could this have happened?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) How can I fix it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a 50% reduction in performance is just not acceptable.  Ideas/
</span><br>
<span class="quotelev2">&gt; &gt; suggestions would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9687.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9666.php">Ralph Castain: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9670.php">Pavel Shamis (Pasha): "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
