<?
$subject_val = "[OMPI users] Advices for parameter tuning for CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 16:30:36 2014" -->
<!-- isoreceived="20140523203036" -->
<!-- sent="Fri, 23 May 2014 16:30:33 -0400" -->
<!-- isosent="20140523203033" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Advices for parameter tuning for CUDA-aware MPI" -->
<!-- id="537FAFE9.1050709_at_calculquebec.ca" -->
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
<strong>Subject:</strong> [OMPI users] Advices for parameter tuning for CUDA-aware MPI<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 16:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24488.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="24488.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am currently configuring a GPU cluster. The cluster has 8 K20 GPUs per 
<br>
node on two sockets, 4 PCIe bus (2 K20 per bus, 4 K20 per socket), with 
<br>
a single QDR InfiniBand card on each node. We have the latest NVidia 
<br>
drivers and Cuda 6.0.
<br>
<p>I am wondering if someone could tell me if all the default MCA 
<br>
parameters are optimal for cuda. More precisely, I am interrested about 
<br>
GDR and IPC. It seems from the parameters (see below) that they are both 
<br>
available (although GDR is disabled by default). However, my notes from 
<br>
GTC14 mention the btl_openib_have_driver_gdr parameter, which I do not 
<br>
see at all.
<br>
<p>So, I guess, my questions :
<br>
1) Why is GDR disabled by default when available ?
<br>
2) Is the absence of btl_openib_have_driver_gdr an indicator of 
<br>
something missing ?
<br>
3) Are the default parameters, especially the rdma limits and such, 
<br>
optimal for our configuration ?
<br>
4) Do I want to enable or disable IPC by default (my notes state that 
<br>
bandwith is much better with MPS than IPC).
<br>
<p>Thanks,
<br>
<p>Here is what I get from
<br>
ompi_info --all | grep cuda
<br>
<p>[mboisson_at_login-gpu01 ~]$ ompi_info --all | grep cuda
<br>
[login-gpu01.calculquebec.ca:11486] mca: base: components_register: 
<br>
registering filem components
<br>
[login-gpu01.calculquebec.ca:11486] mca: base: components_register: 
<br>
found loaded component raw
<br>
[login-gpu01.calculquebec.ca:11486] mca: base: components_register: 
<br>
component raw register function successful
<br>
[login-gpu01.calculquebec.ca:11486] mca: base: components_register: 
<br>
registering snapc components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exec_prefix: /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bindir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/bin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sbindir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/sbin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Incdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/include
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mandir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/man
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pkglibdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libexecdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/libexec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datarootdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datadir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sysconfdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sharedstatedir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Localstatedir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/var
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Infodir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pkgdatadir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pkglibdir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pkgincludedir: 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/include/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_param_files&quot; (current value: 
<br>
&quot;/home/mboisson/.openmpi/mca-params.conf:/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-mca-params.conf&quot;, 
<br>
data source: default, level: 2 user/detail, type: string, deprecated, 
<br>
synonym of: mca_base_param_files)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_component_path&quot; (current 
<br>
value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi:/home/mboisson/.openmpi/components&quot;, 
<br>
data source: default, level: 9 dev/all, type: string, deprecated, 
<br>
synonym of: mca_base_component_path)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_base_param_files&quot; (current 
<br>
value: 
<br>
&quot;/home/mboisson/.openmpi/mca-params.conf:/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-mca-params.conf&quot;, 
<br>
data source: default, level: 2 user/detail, type: string, synonyms: 
<br>
mca_param_files)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: informational &quot;mca_base_override_param_file&quot; 
<br>
(current value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-mca-params-override.conf&quot;, 
<br>
data source: default, level: 2 user/detail, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_base_param_file_path&quot; (current 
<br>
value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/amca-param-sets:/home/mboisson&quot;, 
<br>
data source: default, level: 3 user/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mca: parameter &quot;mca_base_component_path&quot; (current 
<br>
value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi:/home/mboisson/.openmpi/components&quot;, 
<br>
data source: default, level: 9 dev/all, type: string, synonyms: 
<br>
mca_component_path)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_default_hostfile&quot; (current 
<br>
value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-default-hostfile&quot;, 
<br>
data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: informational &quot;mpi_built_with_cuda_support&quot; 
<br>
(current value: &quot;true&quot;, data source: default, level: 4 tuner/basic, 
<br>
type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_cuda_support&quot; (current value: 
<br>
&quot;true&quot;, data source: default, level: 4 tuner/basic, type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_self_cuda_eager_limit&quot; 
<br>
(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: 
<br>
size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_self_cuda_rdma_limit&quot; (current 
<br>
value: &quot;18446744073709551615&quot;, data source: default, level: 5 
<br>
tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_free_list_num&quot; (current 
<br>
value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_free_list_max&quot; (current 
<br>
value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_free_list_inc&quot; (current 
<br>
value: &quot;64&quot;, data source: default, level: 5 tuner/detail, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_max_procs&quot; (current 
<br>
value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_fifo_size&quot; (current 
<br>
value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: unsigned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_num_fifos&quot; (current 
<br>
value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_fifo_lazy_free&quot; 
<br>
(current value: &quot;120&quot;, data source: default, level: 5 tuner/detail, 
<br>
type: unsigned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_sm_extra_procs&quot; 
<br>
(current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_use_cuda_ipc&quot; (current 
<br>
value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_use_cuda_ipc_same_gpu&quot; 
<br>
(current value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_cuda_ipc_verbose&quot; 
<br>
(current value: &quot;0&quot;, data source: default, level: 4 tuner/basic, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_exclusivity&quot; (current 
<br>
value: &quot;65537&quot;, data source: default, level: 7 dev/basic, type: unsigned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_flags&quot; (current value: 
<br>
&quot;1&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_rndv_eager_limit&quot; 
<br>
(current value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, 
<br>
type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_eager_limit&quot; (current 
<br>
value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_cuda_eager_limit&quot; 
<br>
(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: 
<br>
size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_cuda_rdma_limit&quot; 
<br>
(current value: &quot;18446744073709551615&quot;, data source: default, level: 5 
<br>
tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_smcuda_max_send_size&quot; (current 
<br>
value: &quot;32768&quot;, data source: default, level: 4 tuner/basic, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_sm_cuda_eager_limit&quot; (current 
<br>
value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_sm_cuda_rdma_limit&quot; (current 
<br>
value: &quot;18446744073709551615&quot;, data source: default, level: 5 
<br>
tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_cuda_eager_limit&quot; (current 
<br>
value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_cuda_rdma_limit&quot; (current 
<br>
value: &quot;18446744073709551615&quot;, data source: default, level: 5 
<br>
tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_device_param_files&quot; 
<br>
(current value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/mca-btl-openib-device-params.ini&quot;, 
<br>
data source: default, level: 9 dev/all, type: string, synonyms: 
<br>
btl_openib_hca_param_files)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_hca_param_files&quot; 
<br>
(current value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/mca-btl-openib-device-params.ini&quot;, 
<br>
data source: default, level: 9 dev/all, type: string, deprecated, 
<br>
synonym of: btl_openib_device_param_files)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_cuda_async_send&quot; 
<br>
(current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_cuda_async_recv&quot; 
<br>
(current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: informational &quot;btl_openib_have_cuda_gdr&quot; 
<br>
(current value: &quot;true&quot;, data source: default, level: 5 tuner/detail, 
<br>
type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_want_cuda_gdr&quot; (current 
<br>
value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_cuda_eager_limit&quot; 
<br>
(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: 
<br>
size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_cuda_rdma_limit&quot; 
<br>
(current value: &quot;18446744073709551615&quot;, data source: default, level: 5 
<br>
tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_vader_cuda_eager_limit&quot; 
<br>
(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: 
<br>
size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_vader_cuda_rdma_limit&quot; 
<br>
(current value: &quot;18446744073709551615&quot;, data source: default, level: 5 
<br>
tuner/detail, type: size_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_ml_config_file&quot; (current 
<br>
value: 
<br>
&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/mca-coll-ml.config&quot;, 
<br>
data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: informational 
<br>
&quot;io_romio_complete_configure_params&quot; (current value: 
<br>
&quot;--with-file-system=nfs+lustre  FROM_OMPI=yes 
<br>
CC='/software6/compilers/gcc/4.8/bin/gcc -std=gnu99' CFLAGS='-O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread' CPPFLAGS=' 
<br>
-I/software-gpu/src/openmpi-1.8.1/opal/mca/hwloc/hwloc172/hwloc/include 
<br>
-I/software-gpu/src/openmpi-1.8.1/opal/mca/event/libevent2021/libevent 
<br>
-I/software-gpu/src/openmpi-1.8.1/opal/mca/event/libevent2021/libevent/include' 
<br>
FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static 
<br>
--with-file-system=nfs+lustre 
<br>
--prefix=/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37 
<br>
--disable-aio&quot;, data source: default, level: 9 dev/all, type: string)
<br>
[login-gpu01.calculquebec.ca:11486] mca: base: close: unloading component Q
<br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24488.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="24488.php">Rolf vandeVaart: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
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
