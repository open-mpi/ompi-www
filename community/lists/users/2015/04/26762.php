<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 01:43:30 2015" -->
<!-- isoreceived="20150422054330" -->
<!-- sent="Wed, 22 Apr 2015 08:43:26 +0300" -->
<!-- isosent="20150422054326" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl" -->
<!-- id="CAAO1KyYsf3-TcMQwSGaDw7Mq9i_Q2yKYrN6SSb1KEu3D7Wgm5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAATkYOWqi9mJZkahWa05ubJdbRQNp6ZsZYsXYQzJiwbws1dB0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 01:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<li><strong>Previous message:</strong> <a href="26761.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26761.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26766.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26766.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
cool, progress!
<br>
<p><span class="quotelev2">&gt;&gt;1429676565.124664]         sys.c:719  MXM  WARN  Conflicting CPU
</span><br>
frequencies detected, using: 2601.00
<br>
<p>means that cpu governor on your machine is not on &quot;performance&quot; mode
<br>
<p><span class="quotelev2">&gt;&gt; MXM  ERROR ibv_query_device() returned 38: Function not implemented
</span><br>
<p>indicates that ofed installed on your nodes is not indeed 2.4.-1.0.0 or
<br>
there is a mismatch between ofed kernel drivers version and ofed userspace
<br>
libraries version.
<br>
or you have multiple ofed libraries installed on your node and use
<br>
incorrect one.
<br>
could you please check that ofed_info -s indeed prints mofed 2.4-1.0.0?
<br>
<p><p><p><p><p>On Wed, Apr 22, 2015 at 7:59 AM, Subhra Mazumdar &lt;subhramazumdar1_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the openmpi that comes inside the mellanox hpcx package with
</span><br>
<span class="quotelev1">&gt; mxm support instead of separately downloaded openmpi. I also used the
</span><br>
<span class="quotelev1">&gt; environment as in the README so that no LD_PRELOAD (except our own library
</span><br>
<span class="quotelev1">&gt; which is unrelated) is needed. Now it runs fine (no segfault) but we get
</span><br>
<span class="quotelev1">&gt; same errors as before (saying initialization of MXM library failed). Is it
</span><br>
<span class="quotelev1">&gt; using MXM successfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_JARVICE
</span><br>
<span class="quotelev1">&gt; hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5]# mpirun
</span><br>
<span class="quotelev1">&gt; --allow-run-as-root  --mca mtl mxm -n 1 /root/backend  localhost : -x
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD=/root/libci.so -n 1 /root/app2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  JARVICE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be
</span><br>
<span class="quotelev1">&gt; degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  i am backend
</span><br>
<span class="quotelev1">&gt; [1429676565.121218]         sys.c:719  MXM  WARN  Conflicting CPU
</span><br>
<span class="quotelev1">&gt; frequencies detected, using: 2601.00
</span><br>
<span class="quotelev1">&gt; [1429676565.122937] [JARVICE:14767:0]      ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev1">&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.122950] [JARVICE:14767:0]      ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev1">&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.123535] [JARVICE:14767:0]      ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev1">&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.123543] [JARVICE:14767:0]      ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev1">&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.124664]         sys.c:719  MXM  WARN  Conflicting CPU
</span><br>
<span class="quotelev1">&gt; frequencies detected, using: 2601.00
</span><br>
<span class="quotelev1">&gt; [1429676565.126264] [JARVICE:14768:0]      ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev1">&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.126276] [JARVICE:14768:0]      ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev1">&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.126812] [JARVICE:14768:0]      ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev1">&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev1">&gt; [1429676565.126821] [JARVICE:14768:0]      ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev1">&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Initialization of MXM library failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Error: Input/output error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;application runs fine&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Subhra.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 18, 2015 at 12:28 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please check that ofed_info -s indeed prints mofed 2.4-1.0.0?
</span><br>
<span class="quotelev2">&gt;&gt; why LD_PRELOAD needed in your command line? Can you try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module load hpcx
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np $np test.exe
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 18, 2015 at 8:39 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev2">&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I followed the instructions as in the README, now getting a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_JARVICE hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5]#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-1.8.4/openmpinstall/bin/mpirun --allow-run-as-root --mca mtl mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -x LD_PRELOAD=&quot;../openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./mxm/lib/libmxm.so.2&quot; -n 1 ../backend localhost : -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_PRELOAD=&quot;../openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./mxm/lib/libmxm.so.2 ../libci.so&quot; -n 1 ../app2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Node:  JARVICE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be degraded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i am backend
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.139452] [JARVICE:449  :0]   ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.139464] [JARVICE:449  :0]   ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.139982] [JARVICE:449  :0]   ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.139990] [JARVICE:449  :0]   ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.142649] [JARVICE:450  :0]   ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.142666] [JARVICE:450  :0]   ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.143235] [JARVICE:450  :0]   ib_dev.c:445  MXM  WARN  failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call to ibv_exp_use_priv_env(): Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1429334876.143243] [JARVICE:450  :0]   ib_dev.c:456  MXM  ERROR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_query_device() returned 38: Function not implemented
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initialization of MXM library failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Error: Input/output error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [JARVICE:449  :0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [JARVICE:450  :0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 0x000000000005640c mxm_handle_error()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 0x000000000005657c mxm_error_signal_handler()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 0x00000000000329a0 killpg()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 0x000000000004812c _IO_vfprintf()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6 0x000000000006f6da vasprintf()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7 0x0000000000059b3b opal_show_help_vstring()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 0x0000000000026630 orte_show_help()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9 0x0000000000001a3f mca_bml_r2_add_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/bml/r2/bml_r2.c:409
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10 0x0000000000004475 mca_pml_ob1_add_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/pml/ob1/pml_ob1.c:332
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11 0x00000000000442f3 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12 0x0000000000067cb0 PMPI_Init_thread()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13 0x000000000000d0ca l_getLocalFromConfig()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /root/rain_ib/interposer/libciutils.c:83
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14 0x000000000000c7b4 __cudaRegisterFatBinary()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /root/rain_ib/interposer/libci.c:4055
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 0x0000000000402b59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _ZL70__sti____cudaRegisterAll_39_tmpxft_00000703_00000000_6_app2_cpp1_ii_hwv()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  tmpxft_00000703_00000000-3_app2.cudafe1.cpp:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 0x0000000000402dd6 __do_global_ctors_aux()  crtstuff.c:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 0x000000000005640c mxm_handle_error()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 0x000000000005657c mxm_error_signal_handler()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 0x00000000000329a0 killpg()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 0x000000000004812c _IO_vfprintf()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6 0x000000000006f6da vasprintf()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7 0x0000000000059b3b opal_show_help_vstring()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 0x0000000000026630 orte_show_help()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9 0x0000000000001a3f mca_bml_r2_add_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/bml/r2/bml_r2.c:409
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10 0x0000000000004475 mca_pml_ob1_add_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/pml/ob1/pml_ob1.c:332
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11 0x00000000000442f3 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12 0x0000000000067cb0 PMPI_Init_thread()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13 0x0000000000404fdf main()  /root/rain_ib/backend/backend.c:1237
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14 0x000000000001ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 0x0000000000402db9 _start()  ??:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 450 on node JARVICE exited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [JARVICE:00447] 1 more process has sent help message help-mtl-mxm.txt /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mxm init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [JARVICE:00447] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_JARVICE hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5]#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 13, 2015 at 10:58 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you followed installation steps from README (Also here for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reference <a href="http://bgate.mellanox.com/products/hpcx/README.txt">http://bgate.mellanox.com/products/hpcx/README.txt</a>)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Load OpenMPI/OpenSHMEM v1.8 based package:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % source $HPCX_HOME/hpcx-init.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % hpcx_load
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % env | grep HPCX
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % mpirun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_usempi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % oshrun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_oshmem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % hpcx_unload
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. Load HPCX environment from modules
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Load OpenMPI/OpenSHMEM based package:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % module use $HPCX_HOME/modulefiles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % module load hpcx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % mpirun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % oshrun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_oshmem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     % module unload hpcx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Apr 14, 2015 at 5:42 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using 2.4-1.0.0 mellanox ofed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I downloaded mofed tarball
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5.tar and extracted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it. It has mxm directory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hpcx-v1.2.0-325-[root_at_JARVICE ~]# ls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; archive      fca    hpcx-init-ompi-mellanox-v1.8.sh  ibprof
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modulefiles  ompi-mellanox-v1.8  sources  VERSION
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bupc-master  hcoll  hpcx-init.sh                     knem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mxm          README.txt          utils
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried using LD_PRELOAD for libmxm, but getting a different error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stack now as following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_JARVICE ~]# ./openmpi-1.8.4/openmpinstall/bin/mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --allow-run-as-root --mca mtl mxm -x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_PRELOAD=&quot;./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm/lib/libmxm.so.2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -n 1 ./backend  localhost : -x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_PRELOAD=&quot;./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm/lib/libmxm.so.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./libci.so&quot; -n 1 ./app2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  i am backend
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [JARVICE:00564] mca: base: components_open: component pml / cm open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [JARVICE:564  :0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [JARVICE:00565] mca: base: components_open: component pml / cm open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [JARVICE:565  :0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  2 0x000000000005640c mxm_handle_error()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  3 0x000000000005657c mxm_error_signal_handler()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  4 0x00000000000329a0 killpg()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  5 0x0000000000045491 mca_base_components_close()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  6 0x000000000004e99a mca_base_framework_close()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  7 0x0000000000045431 mca_base_component_close()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  8 0x000000000004515c mca_base_framework_components_open()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  9 0x00000000000a0de9 mca_pml_base_open()  pml_base_frame.c:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10 0x000000000004eb1c mca_base_framework_open()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 11 0x0000000000043eb3 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 12 0x0000000000067cb0 PMPI_Init_thread()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 13 0x0000000000404fdf main()  /root/rain_ib/backend/backend.c:1237
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 14 0x000000000001ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 15 0x0000000000402db9 _start()  ??:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Host:      JARVICE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Framework: mtl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Component: mxm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 564 on node JARVICE exited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [JARVICE:00562] 1 more process has sent help message help-mca-base.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; / find-available:not-valid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [JARVICE:00562] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subhra
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sun, Apr 12, 2015 at 10:48 PM, Mike Dubman &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seems like mxm was not found in your ld_library_path.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; what mofed version do you use?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; does it have /opt/mellanox/mxm in it?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You could just run mpirun from HPCX package which looks for mxm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; internally and recompile ompi as mentioned in README.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Apr 13, 2015 at 3:24 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I used mxm mtl as follows but getting segfault. It says mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; component not found but I have compiled openmpi with mxm. Any idea what I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; might be missing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_JARVICE ~]# ./openmpi-1.8.4/openmpinstall/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --allow-run-as-root --mca pml cm --mca mtl mxm -n 1 -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_PRELOAD=./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1 ./backend
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; localhosst : -n 1 -x LD_PRELOAD=&quot;./libci.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1&quot; ./app2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  i am backend
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] Failing at address: 0x10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 0] /lib64/libpthread.so.0(+0xf710)[0x7ff8d0ddb710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_components_close+0x21)[0x7ff8cf9ae491]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_framework_close+0x6a)[0x7ff8cf9b799a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_component_close+0x21)[0x7ff8cf9ae431]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_framework_components_open+0x11c)[0x7ff8cf9ae15c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1(+0xa0de9)[0x7ff8d1089de9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_framework_open+0x7c)[0x7ff8cf9b7b1c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 7] [JARVICE:08398] mca: base: components_open:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; component pml / cm open function failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1(ompi_mpi_init+0x4b3)[0x7ff8d102ceb3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1(PMPI_Init_thread+0x100)[0x7ff8d1050cb0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [ 9] ./backend[0x404fdf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff8cfeded1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] [11] ./backend[0x402db9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [JARVICE:08398] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A requested component was not found, or was unable to be opened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that the component requires are unable to be found/loaded).  Note
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI stopped checking at the first component that it did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; find.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host:      JARVICE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Framework: mtl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Component: mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 8398 on node JARVICE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Apr 10, 2015 at 12:12 AM, Mike Dubman &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; no need IPoIB, mxm uses native IB.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please see HPCX (pre-compiled ompi, integrated with MXM and FCA)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; README file for details how to compile/select.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The default transport is UD for internode communication and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared-memory for intra-node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://bgate,mellanox.com/products/hpcx/">http://bgate,mellanox.com/products/hpcx/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Also, mxm included in the Mellanox OFED.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Apr 10, 2015 at 5:26 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does ipoib need to be configured on the ib cards for mxm (I have a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; separate ethernet connection too)? Also are there special flags in mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to select from UD/RC/DC? What is the default?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Mar 31, 2015 at 9:46 AM, Mike Dubman &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mxm uses IB rdma/roce technologies. Once can select UD/RC/DC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; transports to be used in mxm.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; By selecting mxm, all MPI p2p routines will be mapped to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; appropriate mxm functions.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Mar 30, 2015 at 7:32 PM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi MIke,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does the mxm mtl use infiniband rdma? Also from programming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; perspective, do I need to use anything else other than MPI_Send/MPI_Recv?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Mar 29, 2015 at 11:14 PM, Mike Dubman &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl does not support this thread model.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can use OMPI w/ mxm (-mca mtl mxm) and multiple thread mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lin 1.8 x series or (-mca pml yalla) in the master branch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Mar 30, 2015 at 9:09 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can MPI_THREAD_MULTIPLE and openib btl work together in open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpi 1.8.4? If so are there any command line options needed during run time?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26574.php">http://www.open-mpi.org/community/lists/users/2015/03/26574.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26575.php">http://www.open-mpi.org/community/lists/users/2015/03/26575.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26580.php">http://www.open-mpi.org/community/lists/users/2015/03/26580.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26584.php">http://www.open-mpi.org/community/lists/users/2015/03/26584.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26663.php">http://www.open-mpi.org/community/lists/users/2015/04/26663.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26665.php">http://www.open-mpi.org/community/lists/users/2015/04/26665.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26686.php">http://www.open-mpi.org/community/lists/users/2015/04/26686.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; M.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26688.php">http://www.open-mpi.org/community/lists/users/2015/04/26688.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26711.php">http://www.open-mpi.org/community/lists/users/2015/04/26711.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26712.php">http://www.open-mpi.org/community/lists/users/2015/04/26712.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26752.php">http://www.open-mpi.org/community/lists/users/2015/04/26752.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; M.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26754.php">http://www.open-mpi.org/community/lists/users/2015/04/26754.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26761.php">http://www.open-mpi.org/community/lists/users/2015/04/26761.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<li><strong>Previous message:</strong> <a href="26761.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26761.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26766.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26766.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
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
