<?
$subject_val = "Re: [OMPI users] qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 12:00:20 2011" -->
<!-- isoreceived="20110912160020" -->
<!-- sent="Mon, 12 Sep 2011 10:00:12 -0600 (MDT)" -->
<!-- isosent="20110912160012" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qp memory allocation problem" -->
<!-- id="alpine.OSX.2.00.1109120951310.924_at_panthera.lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BCC119DD-72C3-4A34-BB5E-D795C186411C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] qp memory allocation problem<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 12:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17223.php">Teng Ma: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17221.php">Samuel K. Gutierrez: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17221.php">Samuel K. Gutierrez: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also recommend checking the log_mtts_per_set parameter to the mlx4 module. This parameter controls how much memory can be registered for use by the mlx4 driver and it should be in the range 1-5 (or 0-7 depending on the version of the mlx4 driver). I recommend tthe parameter be set such that you can register all the memory on the node. Assuming you are not using huge pages here is a list of possible values (and how much memory can be registered).
<br>
<p>0 -   2 GB (new mlx4 default-- bad setting)
<br>
1 -   4 GB
<br>
2 -   8 GB
<br>
3 -  16 GB (old mlx4 default)
<br>
4 -  32 GB
<br>
5 -  64 GB
<br>
6 - 128 GB
<br>
7 - 256 GB
<br>
<p>-Nathan Hjelm
<br>
Los Alamos National Laboratory
<br>
<p>On Mon, 12 Sep 2011, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; This problem can be &#160;caused by a variety of things, but I suspect our&#160;default queue pair parameters (QP) aren't helping the
</span><br>
<span class="quotelev1">&gt; situation :-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens when you add the following to your mpirun command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca&#160;btl_openib_receive_queues&#160;S,4096,128:S,12288,128:S,65536,12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI Developers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe we should consider disabling the use of per-peer queue pairs by default. &#160;Do they buy us anything? &#160;For what it is
</span><br>
<span class="quotelev1">&gt; worth, we have stopped using them on all of our large systems here at LANL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2011, at 9:23 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I am getting this error message below and I don&#146;t know what it means or how to fix it.&#160;&#160; It only happens when I
</span><br>
<span class="quotelev1">&gt;       run on a large number of processes, e.g. 960.&#160; Things work fine on 480, and I don&#146;t think the application has a
</span><br>
<span class="quotelev1">&gt;       bug.&#160; Any help is appreciated&#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [c1n01][[30697,1],3][connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; [c1n01][[30697,1],4][connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#146;s the mpirun command I used:
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/mpi/intel/openmpi-1.4.3 --machinefile &lt;host file&gt; -np 960 --mca btl ^tcp --mca
</span><br>
<span class="quotelev1">&gt; mpool_base_use_mem_hooks 1 --mca mpi_leave_pinned 1 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 &lt;application name +
</span><br>
<span class="quotelev1">&gt; arguments&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#146;s the applicable hardware from the /usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini
</span><br>
<span class="quotelev1">&gt; file:
</span><br>
<span class="quotelev1">&gt; # A.k.a. ConnectX
</span><br>
<span class="quotelev1">&gt; [Mellanox Hermon]
</span><br>
<span class="quotelev1">&gt; vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3,0x119f
</span><br>
<span class="quotelev1">&gt; vendor_part_id = 25408,25418,25428,26418,26428,25448,26438,26448,26468,26478,26488
</span><br>
<span class="quotelev1">&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt; mtu = 2048
</span><br>
<span class="quotelev1">&gt; max_inline_data = 128
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this is the output of ompi_info &#150;param btl openib:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Default selection set of components for the btl framework (&lt;none&gt; means use all components
</span><br>
<span class="quotelev1">&gt; that can be found)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Output some verbose OpenIB BTL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;1&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value, synonyms:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Warn when no device-specific parameters are found in the INI file specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value, deprecated, synonym
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; of: btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Warn when no device-specific parameters are found in the INI file specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Warn when there is more than one active ports and at least one of them connected to the
</span><br>
<span class="quotelev1">&gt; network with only default GID
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; prefix configured (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Warn if non-existent devices and/or ports are specified in the btl_openib_if_[in|ex]clude MCA
</span><br>
<span class="quotelev1">&gt; parameters (0 = do not
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_want_fork_support&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Whether fork support is desired or not (negative = try to enable fork support, but continue
</span><br>
<span class="quotelev1">&gt; even if it is not
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; available, 0 = do not enable fork support, positive = try to enable fork support and fail if
</span><br>
<span class="quotelev1">&gt; it is not available)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_device_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &quot;/usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value, synonyms:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_hca_param_files)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Colon-delimited list of INI-style files that contain device vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &quot;/usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value, deprecated,
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; synonym of: btl_openib_device_param_files)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Colon-delimited list of INI-style files that contain device vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_device_type&quot; (current value: &quot;all&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Specify to only use IB or iWARP network adapters (infiniband = only use InfiniBand HCAs; iwarp
</span><br>
<span class="quotelev1">&gt; = only use iWARP NICs;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; all = use any available adapters)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Maximum number of device ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum size of free lists (-1 = infinite, otherwise must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Name of the memory pool to be used (it is unlikely that you will ever want to change this
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;Length of the registration cache most recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_cq_size&quot; (current value: &quot;1000&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_cq_size)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Size of the OpenFabrics completion queue (will automatically be set to a minimum of (2 *
</span><br>
<span class="quotelev1">&gt; number_of_peers *
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_rd_num))
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current value: &quot;1000&quot;, data source: default value,
</span><br>
<span class="quotelev1">&gt; deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_cq_size)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Size of the OpenFabrics completion queue (will automatically be set to a minimum of (2 *
</span><br>
<span class="quotelev1">&gt; number_of_peers *
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_rd_num))
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default value,
</span><br>
<span class="quotelev1">&gt; synonyms:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_ib_max_inline_data)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must
</span><br>
<span class="quotelev1">&gt; be &gt;= 0). If not
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default value,
</span><br>
<span class="quotelev1">&gt; deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_max_inline_data)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must
</span><br>
<span class="quotelev1">&gt; be &gt;= 0). If not
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_pkey&quot; (current value: &quot;0&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_pkey_val)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed
</span><br>
<span class="quotelev1">&gt; (e.g., &quot;3&quot; or &quot;0x3f&quot;) and
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; will be masked against the maximum allowable IB paritition key value (0x7fff)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;, data source: default value,
</span><br>
<span class="quotelev1">&gt; deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_pkey)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed
</span><br>
<span class="quotelev1">&gt; (e.g., &quot;3&quot; or &quot;0x3f&quot;) and
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; will be masked against the maximum allowable IB paritition key value (0x7fff)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_psn&quot; (current value: &quot;0&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_psn)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value: &quot;0&quot;, data source: default value, deprecated,
</span><br>
<span class="quotelev1">&gt; synonym of:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_psn)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand outstanding atomic reads (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_mtu&quot; (current value: &quot;3&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_mtu)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OpenFabrics MTU, in bytes (if not specified in INI files).&#160; Valid values are: 1=256 bytes,
</span><br>
<span class="quotelev1">&gt; 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value: &quot;3&quot;, data source: default value, deprecated,
</span><br>
<span class="quotelev1">&gt; synonym of:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_mtu)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OpenFabrics MTU, in bytes (if not specified in INI files).&#160; Valid values are: 1=256 bytes,
</span><br>
<span class="quotelev1">&gt; 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;25&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand minimum &quot;receiver not ready&quot; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand transmit timeout, plugged into formula: 4.096 microseconds *
</span><br>
<span class="quotelev1">&gt; (2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;=
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 31)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand transmit retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand &quot;receiver not ready&quot; retry count; applies *only* to SRQ/XRC queues.&#160; PP queues use
</span><br>
<span class="quotelev1">&gt; RNR retry values of 0
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; because Open MPI performs software flow control to guarantee that RNRs never occur (must be &gt;=
</span><br>
<span class="quotelev1">&gt; 0 and &lt;= 7; 7 =
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&quot;infinite&quot;)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand maximum pending RDMA destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; InfiniBand service level (must be &gt;= 0 and &lt;= 15)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Use RDMA for eager messages (-1 = use device default, 0 = do not use eager RDMA, 1 = use eager
</span><br>
<span class="quotelev1">&gt; RDMA)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Use RDMA for short messages after this number of messages are received from a given peer (must
</span><br>
<span class="quotelev1">&gt; be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum number of peers allowed to use RDMA for short messages (RDMA is used for all long
</span><br>
<span class="quotelev1">&gt; messages, except if
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Number of RDMA buffers to allocate for small messages(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Number of BTLs to create for each InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Maximum number of LIDs to use for each device port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_enable_apm_over_lmc&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum number of alterative paths for each device port (must be &gt;= -1, where 0 = disable apm,
</span><br>
<span class="quotelev1">&gt; -1 = all availible
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; alternative paths )
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_enable_apm_over_ports&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Enable alterative path migration (APM) over different ports of the same device (must be &gt;= 0,
</span><br>
<span class="quotelev1">&gt; where 0 = disable APM
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; over ports , 1 = enable APM over ports of the same device)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_use_async_event_thread&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; If nonzero, use the thread that will handle InfiniBand asyncihronous events
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Prefered communication buffer alignment, in bytes (must be &gt; 0 and power of two)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_use_message_coalescing&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Use message coalescing
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_cq_poll_ratio&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; how often poll high priority CQ versus low priority CQ
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_eager_rdma_poll_ratio&quot; (current value: &quot;100&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; how often poll eager RDMA channel versus CQ
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_hp_cq_poll_per_progress&quot; (current value: &quot;10&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; max number of completion events to process for each call of BTL progress engine
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: information &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Whether the OpenFabrics stack supports applications that invoke the &quot;fork()&quot; system call or
</span><br>
<span class="quotelev1">&gt; not (0 = no, 1 = yes).
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Note that this value does NOT indicate whether the system being run on supports &quot;fork()&quot; with
</span><br>
<span class="quotelev1">&gt; OpenFabrics applications
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; or not.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;310&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_rndv_eager_limit&quot; (current value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Size (in bytes) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;=
</span><br>
<span class="quotelev1">&gt; eager_limit)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the
</span><br>
<span class="quotelev1">&gt; pipeline protocol (must be &gt;=
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_rdma_pipeline_send_length&quot; (current value: &quot;1048576&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline
</span><br>
<span class="quotelev1">&gt; protocol.&#160; This part of the
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; message will be split into fragments of size max_send_size and sent using send/receive
</span><br>
<span class="quotelev1">&gt; semantics (must be &gt;= 0; only
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_rdma_pipeline_frag_size&quot; (current value: &quot;1048576&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the
</span><br>
<span class="quotelev1">&gt; pipeline protocol.&#160; These
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is
</span><br>
<span class="quotelev1">&gt; set)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_min_rdma_pipeline_size&quot; (current value: &quot;262144&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.&#160; Instead,
</span><br>
<span class="quotelev1">&gt; they will be split into
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is
</span><br>
<span class="quotelev1">&gt; automatically adjusted up to at
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;800&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Approximate maximum bandwidth of interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_latency&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &quot;P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Colon-delimited, comma delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_if_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Comma-delimited list of devices/ports to be used (e.g. &quot;mthca0,mthca1:2&quot;; empty value means to
</span><br>
<span class="quotelev1">&gt; use all ports found).
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Comma-delimited list of device/ports to be excluded (empty value means to not exclude any
</span><br>
<span class="quotelev1">&gt; ports).&#160; Mutually exclusive
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;with btl_openib_if_include.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ipaddr_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Comma-delimited list of IP Addresses to be used (e.g. &quot;192.168.1.0/24&quot;).&#160; Mutually exclusive
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_ipaddr_exclude.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_ipaddr_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Comma-delimited list of IP Addresses to be excluded (e.g. &quot;192.168.1.0/24&quot;).&#160; Mutually
</span><br>
<span class="quotelev1">&gt; exclusive with
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; btl_openib_ipaddr_include.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_cpc_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Method used to select OpenFabrics connections (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_cpc_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Method used to exclude OpenFabrics connections (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_connect_oob_priority&quot; (current value: &quot;50&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The selection method priority for oob
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_connect_xoob_priority&quot; (current value: &quot;60&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The selection method priority for xoob
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_connect_rdmacm_priority&quot; (current value: &quot;30&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The selection method priority for rdma_cm
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_connect_rdmacm_port&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The selection method port for rdma_cm
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_connect_rdmacm_resolve_timeout&quot; (current value: &quot;1000&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The timeout (in miliseconds) for address and route resolution
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_openib_connect_rdmacm_retry_count&quot; (current value: &quot;20&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Maximum number of times rdmacm will retry route resolution
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_connect_rdmacm_reject_causes_connect_error&quot; (current value: &quot;0&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The drivers for some devices are buggy such that an RDMA REJECT action may result in a
</span><br>
<span class="quotelev1">&gt; CONNECT_ERROR event instead of
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; a REJECTED event.&#160; Setting this MCA parameter to true tells Open MPI to treat CONNECT_ERROR
</span><br>
<span class="quotelev1">&gt; events on connections
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; where a REJECT is expected as a REJECT (default: false)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MCA btl: parameter &quot;btl_openib_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; This parameter is used to turn on warning messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17223.php">Teng Ma: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17221.php">Samuel K. Gutierrez: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17221.php">Samuel K. Gutierrez: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17227.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
