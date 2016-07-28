<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 01:39:41 2015" -->
<!-- isoreceived="20150418053941" -->
<!-- sent="Fri, 17 Apr 2015 22:39:37 -0700" -->
<!-- isosent="20150418053937" -->
<!-- name="Subhra Mazumdar" -->
<!-- email="subhramazumdar1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl" -->
<!-- id="CAATkYOVLh33W4go7WSyZhFU4J-WDb0WnRK7fWTs5Nw+7v=MtBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAO1KyarMiakFQhtN9+BD_awxWrA99Y0o-MwuBCnEcT6Cuermg_at_mail.gmail.com" -->
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
<strong>From:</strong> Subhra Mazumdar (<em>subhramazumdar1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-18 01:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26753.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<li><strong>Previous message:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26712.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26754.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26754.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I followed the instructions as in the README, now getting a different error:
<br>
<p>[root_at_JARVICE hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5]#
<br>
../openmpi-1.8.4/openmpinstall/bin/mpirun --allow-run-as-root --mca mtl mxm
<br>
-x LD_PRELOAD=&quot;../openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
<br>
./mxm/lib/libmxm.so.2&quot; -n 1 ../backend localhost : -x
<br>
LD_PRELOAD=&quot;../openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
<br>
./mxm/lib/libmxm.so.2 ../libci.so&quot; -n 1 ../app2
<br>
<p>--------------------------------------------------------------------------
<br>
<p>WARNING: a request was made to bind a process. While the system
<br>
<p>supports binding the process itself, at least one node does NOT
<br>
<p>support binding memory to the process location.
<br>
<p>&nbsp;Node:  JARVICE
<br>
<p>This usually is due to not having the required NUMA support installed
<br>
<p>on the node. In some Linux distributions, the required support is
<br>
<p>contained in the libnumactl and libnumactl-devel packages.
<br>
<p>This is a warning only; your job will continue, though performance may be
<br>
degraded.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>i am backend
<br>
<p>[1429334876.139452] [JARVICE:449  :0]   ib_dev.c:445  MXM  WARN  failed
<br>
call to ibv_exp_use_priv_env(): Function not implemented
<br>
<p>[1429334876.139464] [JARVICE:449  :0]   ib_dev.c:456  MXM  ERROR
<br>
ibv_query_device() returned 38: Function not implemented
<br>
<p>[1429334876.139982] [JARVICE:449  :0]   ib_dev.c:445  MXM  WARN  failed
<br>
call to ibv_exp_use_priv_env(): Function not implemented
<br>
<p>[1429334876.139990] [JARVICE:449  :0]   ib_dev.c:456  MXM  ERROR
<br>
ibv_query_device() returned 38: Function not implemented
<br>
<p>[1429334876.142649] [JARVICE:450  :0]   ib_dev.c:445  MXM  WARN  failed
<br>
call to ibv_exp_use_priv_env(): Function not implemented
<br>
<p>[1429334876.142666] [JARVICE:450  :0]   ib_dev.c:456  MXM  ERROR
<br>
ibv_query_device() returned 38: Function not implemented
<br>
<p>[1429334876.143235] [JARVICE:450  :0]   ib_dev.c:445  MXM  WARN  failed
<br>
call to ibv_exp_use_priv_env(): Function not implemented
<br>
<p>[1429334876.143243] [JARVICE:450  :0]   ib_dev.c:456  MXM  ERROR
<br>
ibv_query_device() returned 38: Function not implemented
<br>
<p>--------------------------------------------------------------------------
<br>
<p>Initialization of MXM library failed.
<br>
<p>&nbsp;Error: Input/output error
<br>
<p>--------------------------------------------------------------------------
<br>
<p>[JARVICE:449  :0] Caught signal 11 (Segmentation fault)
<br>
<p>[JARVICE:450  :0] Caught signal 11 (Segmentation fault)
<br>
<p>==== backtrace ====
<br>
<p>2 0x000000000005640c mxm_handle_error()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:641
<br>
<p>3 0x000000000005657c mxm_error_signal_handler()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:616
<br>
<p>4 0x00000000000329a0 killpg()  ??:0
<br>
<p>5 0x000000000004812c _IO_vfprintf()  ??:0
<br>
<p>6 0x000000000006f6da vasprintf()  ??:0
<br>
<p>7 0x0000000000059b3b opal_show_help_vstring()  ??:0
<br>
<p>8 0x0000000000026630 orte_show_help()  ??:0
<br>
<p>9 0x0000000000001a3f mca_bml_r2_add_procs()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/bml/r2/bml_r2.c:409
<br>
<p>10 0x0000000000004475 mca_pml_ob1_add_procs()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/pml/ob1/pml_ob1.c:332
<br>
<p>11 0x00000000000442f3 ompi_mpi_init()  ??:0
<br>
<p>12 0x0000000000067cb0 PMPI_Init_thread()  ??:0
<br>
<p>13 0x000000000000d0ca l_getLocalFromConfig()
<br>
&nbsp;/root/rain_ib/interposer/libciutils.c:83
<br>
<p>14 0x000000000000c7b4 __cudaRegisterFatBinary()
<br>
&nbsp;/root/rain_ib/interposer/libci.c:4055
<br>
<p>15 0x0000000000402b59
<br>
_ZL70__sti____cudaRegisterAll_39_tmpxft_00000703_00000000_6_app2_cpp1_ii_hwv()
<br>
&nbsp;tmpxft_00000703_00000000-3_app2.cudafe1.cpp:0
<br>
<p>16 0x0000000000402dd6 __do_global_ctors_aux()  crtstuff.c:0
<br>
<p>===================
<br>
<p>==== backtrace ====
<br>
<p>2 0x000000000005640c mxm_handle_error()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:641
<br>
<p>3 0x000000000005657c mxm_error_signal_handler()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:616
<br>
<p>4 0x00000000000329a0 killpg()  ??:0
<br>
<p>5 0x000000000004812c _IO_vfprintf()  ??:0
<br>
<p>6 0x000000000006f6da vasprintf()  ??:0
<br>
<p>7 0x0000000000059b3b opal_show_help_vstring()  ??:0
<br>
<p>8 0x0000000000026630 orte_show_help()  ??:0
<br>
<p>9 0x0000000000001a3f mca_bml_r2_add_procs()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/bml/r2/bml_r2.c:409
<br>
<p>10 0x0000000000004475 mca_pml_ob1_add_procs()
<br>
&nbsp;/scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/ompi-mellanox-v1.8/ompi/mca/pml/ob1/pml_ob1.c:332
<br>
<p>11 0x00000000000442f3 ompi_mpi_init()  ??:0
<br>
<p>12 0x0000000000067cb0 PMPI_Init_thread()  ??:0
<br>
<p>13 0x0000000000404fdf main()  /root/rain_ib/backend/backend.c:1237
<br>
<p>14 0x000000000001ed1d __libc_start_main()  ??:0
<br>
<p>15 0x0000000000402db9 _start()  ??:0
<br>
<p>===================
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that process rank 1 with PID 450 on node JARVICE exited on
<br>
signal 11 (Segmentation fault).
<br>
<p>--------------------------------------------------------------------------
<br>
<p>[JARVICE:00447] 1 more process has sent help message help-mtl-mxm.txt / mxm
<br>
init
<br>
<p>[JARVICE:00447] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>[root_at_JARVICE hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5]#
<br>
<p><p>Subhra.
<br>
<p><p>On Mon, Apr 13, 2015 at 10:58 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Have you followed installation steps from README (Also here for reference
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com/products/hpcx/README.txt">http://bgate.mellanox.com/products/hpcx/README.txt</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Load OpenMPI/OpenSHMEM v1.8 based package:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     % source $HPCX_HOME/hpcx-init.sh
</span><br>
<span class="quotelev1">&gt;     % hpcx_load
</span><br>
<span class="quotelev1">&gt;     % env | grep HPCX
</span><br>
<span class="quotelev1">&gt;     % mpirun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_usempi
</span><br>
<span class="quotelev1">&gt;     % oshrun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_oshmem
</span><br>
<span class="quotelev1">&gt;     % hpcx_unload
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Load HPCX environment from modules
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Load OpenMPI/OpenSHMEM based package:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     % module use $HPCX_HOME/modulefiles
</span><br>
<span class="quotelev1">&gt;     % module load hpcx
</span><br>
<span class="quotelev1">&gt;     % mpirun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_c
</span><br>
<span class="quotelev1">&gt;     % oshrun -np 2 $HPCX_MPI_TESTS_DIR/examples/hello_oshmem
</span><br>
<span class="quotelev1">&gt;     % module unload hpcx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 14, 2015 at 5:42 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev1">&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using 2.4-1.0.0 mellanox ofed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded mofed tarball
</span><br>
<span class="quotelev2">&gt;&gt; hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5.tar and extracted
</span><br>
<span class="quotelev2">&gt;&gt; it. It has mxm directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hpcx-v1.2.0-325-[root_at_JARVICE ~]# ls
</span><br>
<span class="quotelev2">&gt;&gt; hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5
</span><br>
<span class="quotelev2">&gt;&gt; archive      fca    hpcx-init-ompi-mellanox-v1.8.sh  ibprof
</span><br>
<span class="quotelev2">&gt;&gt; modulefiles  ompi-mellanox-v1.8  sources  VERSION
</span><br>
<span class="quotelev2">&gt;&gt; bupc-master  hcoll  hpcx-init.sh                     knem    mxm
</span><br>
<span class="quotelev2">&gt;&gt; README.txt          utils
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried using LD_PRELOAD for libmxm, but getting a different error stack
</span><br>
<span class="quotelev2">&gt;&gt; now as following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_JARVICE ~]# ./openmpi-1.8.4/openmpinstall/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --allow-run-as-root --mca mtl mxm -x
</span><br>
<span class="quotelev2">&gt;&gt; LD_PRELOAD=&quot;./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt; ./hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm/lib/libmxm.so.2&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -n 1 ./backend  localhost : -x
</span><br>
<span class="quotelev2">&gt;&gt; LD_PRELOAD=&quot;./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt; ./hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm/lib/libmxm.so.2
</span><br>
<span class="quotelev2">&gt;&gt; ./libci.so&quot; -n 1 ./app2
</span><br>
<span class="quotelev2">&gt;&gt;  i am backend
</span><br>
<span class="quotelev2">&gt;&gt; [JARVICE:00564] mca: base: components_open: component pml / cm open
</span><br>
<span class="quotelev2">&gt;&gt; function failed
</span><br>
<span class="quotelev2">&gt;&gt; [JARVICE:564  :0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt; [JARVICE:00565] mca: base: components_open: component pml / cm open
</span><br>
<span class="quotelev2">&gt;&gt; function failed
</span><br>
<span class="quotelev2">&gt;&gt; [JARVICE:565  :0] Caught signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt; ==== backtrace ====
</span><br>
<span class="quotelev2">&gt;&gt;  2 0x000000000005640c mxm_handle_error()
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:641
</span><br>
<span class="quotelev2">&gt;&gt;  3 0x000000000005657c mxm_error_signal_handler()
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/workspace/hpc-power-pack/label/r-vmb-rhel6-u5-x86-64-MOFED-CHECKER/hpcx_root/src/hpcx-v1.2.0-325-gcc-MLNX_OFED_LINUX-2.4-1.0.0-redhat6.5/mxm-v3.2/src/mxm/util/debug/debug.c:616
</span><br>
<span class="quotelev2">&gt;&gt;  4 0x00000000000329a0 killpg()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;  5 0x0000000000045491 mca_base_components_close()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;  6 0x000000000004e99a mca_base_framework_close()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;  7 0x0000000000045431 mca_base_component_close()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;  8 0x000000000004515c mca_base_framework_components_open()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt;  9 0x00000000000a0de9 mca_pml_base_open()  pml_base_frame.c:0
</span><br>
<span class="quotelev2">&gt;&gt; 10 0x000000000004eb1c mca_base_framework_open()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt; 11 0x0000000000043eb3 ompi_mpi_init()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt; 12 0x0000000000067cb0 PMPI_Init_thread()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt; 13 0x0000000000404fdf main()  /root/rain_ib/backend/backend.c:1237
</span><br>
<span class="quotelev2">&gt;&gt; 14 0x000000000001ed1d __libc_start_main()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt; 15 0x0000000000402db9 _start()  ??:0
</span><br>
<span class="quotelev2">&gt;&gt; ===================
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev2">&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev2">&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Host:      JARVICE
</span><br>
<span class="quotelev2">&gt;&gt; Framework: mtl
</span><br>
<span class="quotelev2">&gt;&gt; Component: mxm
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 564 on node JARVICE exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [JARVICE:00562] 1 more process has sent help message help-mca-base.txt /
</span><br>
<span class="quotelev2">&gt;&gt; find-available:not-valid
</span><br>
<span class="quotelev2">&gt;&gt; [JARVICE:00562] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subhra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Apr 12, 2015 at 10:48 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems like mxm was not found in your ld_library_path.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what mofed version do you use?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does it have /opt/mellanox/mxm in it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You could just run mpirun from HPCX package which looks for mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internally and recompile ompi as mentioned in README.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 13, 2015 at 3:24 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I used mxm mtl as follows but getting segfault. It says mxm component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not found but I have compiled openmpi with mxm. Any idea what I might be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; missing?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_JARVICE ~]# ./openmpi-1.8.4/openmpinstall/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --allow-run-as-root --mca pml cm --mca mtl mxm -n 1 -x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_PRELOAD=./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1 ./backend
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhosst : -n 1 -x LD_PRELOAD=&quot;./libci.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1&quot; ./app2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  i am backend
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] Failing at address: 0x10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 0] /lib64/libpthread.so.0(+0xf710)[0x7ff8d0ddb710]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_components_close+0x21)[0x7ff8cf9ae491]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_framework_close+0x6a)[0x7ff8cf9b799a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_component_close+0x21)[0x7ff8cf9ae431]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_framework_components_open+0x11c)[0x7ff8cf9ae15c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1(+0xa0de9)[0x7ff8d1089de9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6(mca_base_framework_open+0x7c)[0x7ff8cf9b7b1c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 7] [JARVICE:08398] mca: base: components_open:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component pml / cm open function failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1(ompi_mpi_init+0x4b3)[0x7ff8d102ceb3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1(PMPI_Init_thread+0x100)[0x7ff8d1050cb0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [ 9] ./backend[0x404fdf]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7ff8cfeded1d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] [11] ./backend[0x402db9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [JARVICE:08398] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host:      JARVICE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Framework: mtl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component: mxm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 8398 on node JARVICE exited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Apr 10, 2015 at 12:12 AM, Mike Dubman &lt;miked_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no need IPoIB, mxm uses native IB.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please see HPCX (pre-compiled ompi, integrated with MXM and FCA)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; README file for details how to compile/select.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The default transport is UD for internode communication and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared-memory for intra-node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://bgate,mellanox.com/products/hpcx/">http://bgate,mellanox.com/products/hpcx/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also, mxm included in the Mellanox OFED.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, Apr 10, 2015 at 5:26 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does ipoib need to be configured on the ib cards for mxm (I have a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; separate ethernet connection too)? Also are there special flags in mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to select from UD/RC/DC? What is the default?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Mar 31, 2015 at 9:46 AM, Mike Dubman &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mxm uses IB rdma/roce technologies. Once can select UD/RC/DC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; transports to be used in mxm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; By selecting mxm, all MPI p2p routines will be mapped to appropriate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mxm functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Mar 30, 2015 at 7:32 PM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi MIke,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does the mxm mtl use infiniband rdma? Also from programming
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; perspective, do I need to use anything else other than MPI_Send/MPI_Recv?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Mar 29, 2015 at 11:14 PM, Mike Dubman &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib btl does not support this thread model.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can use OMPI w/ mxm (-mca mtl mxm) and multiple thread mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lin 1.8 x series or (-mca pml yalla) in the master branch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Mar 30, 2015 at 9:09 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can MPI_THREAD_MULTIPLE and openib btl work together in open mpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.8.4? If so are there any command line options needed during run time?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subhra.
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26574.php">http://www.open-mpi.org/community/lists/users/2015/03/26574.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M.
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26575.php">http://www.open-mpi.org/community/lists/users/2015/03/26575.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26580.php">http://www.open-mpi.org/community/lists/users/2015/03/26580.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; M.
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
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26584.php">http://www.open-mpi.org/community/lists/users/2015/03/26584.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26663.php">http://www.open-mpi.org/community/lists/users/2015/04/26663.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; M.
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26665.php">http://www.open-mpi.org/community/lists/users/2015/04/26665.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26686.php">http://www.open-mpi.org/community/lists/users/2015/04/26686.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M.
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26688.php">http://www.open-mpi.org/community/lists/users/2015/04/26688.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26711.php">http://www.open-mpi.org/community/lists/users/2015/04/26711.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26712.php">http://www.open-mpi.org/community/lists/users/2015/04/26712.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26752/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26753.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<li><strong>Previous message:</strong> <a href="26751.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26712.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26754.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26754.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
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
