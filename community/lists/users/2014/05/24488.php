<?
$subject_val = "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 10:03:58 2014" -->
<!-- isoreceived="20140527140358" -->
<!-- sent="Tue, 27 May 2014 07:03:56 -0700" -->
<!-- isosent="20140527140356" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3604568AA75_at_HQMAIL02.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="537FAFE9.1050709_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 10:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24489.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24487.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>In reply to:</strong> <a href="24473.php">Maxime Boissonneault: "[OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Answers inline...
<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime
</span><br>
<span class="quotelev1">&gt;Boissonneault
</span><br>
<span class="quotelev1">&gt;Sent: Friday, May 23, 2014 4:31 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Advices for parameter tuning for CUDA-aware MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;I am currently configuring a GPU cluster. The cluster has 8 K20 GPUs per node
</span><br>
<span class="quotelev1">&gt;on two sockets, 4 PCIe bus (2 K20 per bus, 4 K20 per socket), with a single QDR
</span><br>
<span class="quotelev1">&gt;InfiniBand card on each node. We have the latest NVidia drivers and Cuda 6.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am wondering if someone could tell me if all the default MCA parameters are
</span><br>
<span class="quotelev1">&gt;optimal for cuda. More precisely, I am interrested about GDR and IPC. It
</span><br>
<span class="quotelev1">&gt;seems from the parameters (see below) that they are both available
</span><br>
<span class="quotelev1">&gt;(although GDR is disabled by default). However, my notes from
</span><br>
<span class="quotelev1">&gt;GTC14 mention the btl_openib_have_driver_gdr parameter, which I do not
</span><br>
<span class="quotelev1">&gt;see at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So, I guess, my questions :
</span><br>
<span class="quotelev1">&gt;1) Why is GDR disabled by default when available ?
</span><br>
It was disabled by default because it did not always give optimum performance.  That may change in the future but for now, as you mentioned, you have to turn on the feature explicitly.
<br>
<p><span class="quotelev1">&gt;2) Is the absence of btl_openib_have_driver_gdr an indicator of something
</span><br>
<span class="quotelev1">&gt;missing ?
</span><br>
Yes, that means that somehow the GPU Direct RDMA is not installed correctly. All that check does is make sure that the file /sys/kernel/mm/memory_peers/nv_mem/version exists.  Does that exist?
<br>
<p><span class="quotelev1">&gt;3) Are the default parameters, especially the rdma limits and such, optimal for
</span><br>
<span class="quotelev1">&gt;our configuration ?
</span><br>
That is hard to say.  GPU Direct RDMA does not work well when the GPU and IB card are not &quot;close&quot; on the system. Can you run &quot;nvidia-smi topo -m&quot; on your system? 
<br>
<p><span class="quotelev1">&gt;4) Do I want to enable or disable IPC by default (my notes state that bandwith
</span><br>
<span class="quotelev1">&gt;is much better with MPS than IPC).
</span><br>
Yes, you should leave IPC enabled by default.  That should give good performance.  They were some issues with earlier CUDA versions, but they were all fixed in CUDA 6.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is what I get from
</span><br>
<span class="quotelev1">&gt;ompi_info --all | grep cuda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[mboisson_at_login-gpu01 ~]$ ompi_info --all | grep cuda [login-
</span><br>
<span class="quotelev1">&gt;gpu01.calculquebec.ca:11486] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt;registering filem components
</span><br>
<span class="quotelev1">&gt;[login-gpu01.calculquebec.ca:11486] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt;found loaded component raw
</span><br>
<span class="quotelev1">&gt;[login-gpu01.calculquebec.ca:11486] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt;component raw register function successful [login-
</span><br>
<span class="quotelev1">&gt;gpu01.calculquebec.ca:11486] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt;registering snapc components
</span><br>
<span class="quotelev1">&gt;                   Prefix: /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37
</span><br>
<span class="quotelev1">&gt;              Exec_prefix: /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37
</span><br>
<span class="quotelev1">&gt;                   Bindir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/bin
</span><br>
<span class="quotelev1">&gt;                  Sbindir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/sbin
</span><br>
<span class="quotelev1">&gt;                   Libdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/include
</span><br>
<span class="quotelev1">&gt;                   Mandir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/man
</span><br>
<span class="quotelev1">&gt;                Pkglibdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Libexecdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/libexec
</span><br>
<span class="quotelev1">&gt;              Datarootdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share
</span><br>
<span class="quotelev1">&gt;                  Datadir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share
</span><br>
<span class="quotelev1">&gt;               Sysconfdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc
</span><br>
<span class="quotelev1">&gt;           Sharedstatedir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/com
</span><br>
<span class="quotelev1">&gt;            Localstatedir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/var
</span><br>
<span class="quotelev1">&gt;                  Infodir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/info
</span><br>
<span class="quotelev1">&gt;               Pkgdatadir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi
</span><br>
<span class="quotelev1">&gt;                Pkglibdir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi
</span><br>
<span class="quotelev1">&gt;            Pkgincludedir:
</span><br>
<span class="quotelev1">&gt;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/include/openmpi
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&quot;/home/mboisson/.openmpi/mca-params.conf:/software-
</span><br>
<span class="quotelev1">&gt;gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 2 user/detail, type: string, deprecated, synonym
</span><br>
<span class="quotelev1">&gt;of: mca_base_param_files)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current
</span><br>
<span class="quotelev1">&gt;value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-
</span><br>
<span class="quotelev1">&gt;gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi:/home/mboisson/.o
</span><br>
<span class="quotelev1">&gt;penmpi/components&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 9 dev/all, type: string, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;mca_base_component_path)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_files&quot; (current
</span><br>
<span class="quotelev1">&gt;value:
</span><br>
<span class="quotelev1">&gt;&quot;/home/mboisson/.openmpi/mca-params.conf:/software-
</span><br>
<span class="quotelev1">&gt;gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-mca-params.conf&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 2 user/detail, type: string, synonyms:
</span><br>
<span class="quotelev1">&gt;mca_param_files)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: informational &quot;mca_base_override_param_file&quot;
</span><br>
<span class="quotelev1">&gt;(current value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-mca-
</span><br>
<span class="quotelev1">&gt;params-override.conf&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path&quot; (current
</span><br>
<span class="quotelev1">&gt;value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-
</span><br>
<span class="quotelev1">&gt;gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/amca-param-
</span><br>
<span class="quotelev1">&gt;sets:/home/mboisson&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_component_path&quot; (current
</span><br>
<span class="quotelev1">&gt;value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-
</span><br>
<span class="quotelev1">&gt;gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/openmpi:/home/mboisson/.o
</span><br>
<span class="quotelev1">&gt;penmpi/components&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 9 dev/all, type: string, synonyms:
</span><br>
<span class="quotelev1">&gt;mca_component_path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_default_hostfile&quot; (current
</span><br>
<span class="quotelev1">&gt;value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/etc/openmpi-
</span><br>
<span class="quotelev1">&gt;default-hostfile&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: informational &quot;mpi_built_with_cuda_support&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;true&quot;, data source: default, level: 4 tuner/basic,
</span><br>
<span class="quotelev1">&gt;type: bool)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_cuda_support&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&quot;true&quot;, data source: default, level: 4 tuner/basic, type: bool)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_cuda_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt;size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_cuda_rdma_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;18446744073709551615&quot;, data source: default, level: 5 tuner/detail,
</span><br>
<span class="quotelev1">&gt;type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;64&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_max_procs&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_fifo_size&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_num_fifos&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_fifo_lazy_free&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;120&quot;, data source: default, level: 5 tuner/detail,
</span><br>
<span class="quotelev1">&gt;type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_sm_extra_procs&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_use_cuda_ipc&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_use_cuda_ipc_same_gpu&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_cuda_ipc_verbose&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;0&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;65537&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&quot;1&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;4096&quot;, data source: default, level: 4 tuner/basic,
</span><br>
<span class="quotelev1">&gt;type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_cuda_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt;size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_cuda_rdma_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;18446744073709551615&quot;, data source: default, level: 5
</span><br>
<span class="quotelev1">&gt;tuner/detail, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_smcuda_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;32768&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_cuda_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_cuda_rdma_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;18446744073709551615&quot;, data source: default, level: 5 tuner/detail,
</span><br>
<span class="quotelev1">&gt;type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_cuda_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_cuda_rdma_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;18446744073709551615&quot;, data source: default, level: 5 tuner/detail,
</span><br>
<span class="quotelev1">&gt;type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_device_param_files&quot;
</span><br>
<span class="quotelev1">&gt;(current value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/mca-
</span><br>
<span class="quotelev1">&gt;btl-openib-device-params.ini&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 9 dev/all, type: string, synonyms:
</span><br>
<span class="quotelev1">&gt;btl_openib_hca_param_files)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_hca_param_files&quot;
</span><br>
<span class="quotelev1">&gt;(current value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/mca-
</span><br>
<span class="quotelev1">&gt;btl-openib-device-params.ini&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 9 dev/all, type: string, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;btl_openib_device_param_files)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cuda_async_send&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cuda_async_recv&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: informational &quot;btl_openib_have_cuda_gdr&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;true&quot;, data source: default, level: 5 tuner/detail,
</span><br>
<span class="quotelev1">&gt;type: bool)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_want_cuda_gdr&quot; (current
</span><br>
<span class="quotelev1">&gt;value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cuda_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt;size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cuda_rdma_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;18446744073709551615&quot;, data source: default, level: 5
</span><br>
<span class="quotelev1">&gt;tuner/detail, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_cuda_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type:
</span><br>
<span class="quotelev1">&gt;size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_cuda_rdma_limit&quot;
</span><br>
<span class="quotelev1">&gt;(current value: &quot;18446744073709551615&quot;, data source: default, level: 5
</span><br>
<span class="quotelev1">&gt;tuner/detail, type: size_t)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_config_file&quot; (current
</span><br>
<span class="quotelev1">&gt;value:
</span><br>
<span class="quotelev1">&gt;&quot;/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/share/openmpi/mca-
</span><br>
<span class="quotelev1">&gt;coll-ml.config&quot;,
</span><br>
<span class="quotelev1">&gt;data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                   MCA io: informational &quot;io_romio_complete_configure_params&quot;
</span><br>
<span class="quotelev1">&gt;(current value:
</span><br>
<span class="quotelev1">&gt;&quot;--with-file-system=nfs+lustre  FROM_OMPI=yes
</span><br>
<span class="quotelev1">&gt;CC='/software6/compilers/gcc/4.8/bin/gcc -std=gnu99' CFLAGS='-O3 -
</span><br>
<span class="quotelev1">&gt;DNDEBUG -finline-functions -fno-strict-aliasing -pthread' CPPFLAGS='
</span><br>
<span class="quotelev1">&gt;-I/software-gpu/src/openmpi-1.8.1/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev1">&gt;-I/software-gpu/src/openmpi-1.8.1/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt;-I/software-gpu/src/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.1/opal/mca/event/libevent2021/libevent/include'
</span><br>
<span class="quotelev1">&gt;FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static --with-file-
</span><br>
<span class="quotelev1">&gt;system=nfs+lustre
</span><br>
<span class="quotelev1">&gt;--prefix=/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37
</span><br>
<span class="quotelev1">&gt;--disable-aio&quot;, data source: default, level: 9 dev/all, type: string) [login-
</span><br>
<span class="quotelev1">&gt;gpu01.calculquebec.ca:11486] mca: base: close: unloading component Q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;---------------------------------
</span><br>
<span class="quotelev1">&gt;Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24489.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24487.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>In reply to:</strong> <a href="24473.php">Maxime Boissonneault: "[OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="24496.php">Maxime Boissonneault: "Re: [OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
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
