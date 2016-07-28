<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 12:40:40 2011" -->
<!-- isoreceived="20110912164040" -->
<!-- sent="Mon, 12 Sep 2011 10:32:02 -0600" -->
<!-- isosent="20110912163202" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E2E5A40_at_HDXMSPB.us.lmco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="alpine.OSX.2.00.1109120951310.924_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 12:32:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17226.php">Shamis, Pavel: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17222.php">Nathan Hjelm: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,   I found this parameters under /sys/module/mlx4_core/parameters.   How do you incorporate a changed value?  What to restart/rebuild?
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Monday, September 12, 2011 11:00 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] qp memory allocation problem
<br>
<p>I also recommend checking the log_mtts_per_set parameter to the mlx4 module. This parameter controls how much memory can be registered for use by the mlx4 driver and it should be in the range 1-5 (or 0-7 depending on the version of the mlx4 driver). I recommend tthe parameter be set such that you can register all the memory on the node. Assuming you are not using huge pages here is a list of possible values (and how much memory can be registered).
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
<span class="quotelev1">&gt; This problem can be  caused by a variety of things, but I suspect our
</span><br>
<span class="quotelev1">&gt; default queue pair parameters (QP) aren't helping the situation :-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happens when you add the following to your mpirun command?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_receive_queues S,4096,128:S,12288,128:S,65536,12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI Developers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe we should consider disabling the use of per-peer queue pairs by
</span><br>
<span class="quotelev1">&gt; default.  Do they buy us anything?  For what it is worth, we have stopped using them on all of our large systems here at LANL.
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
<span class="quotelev1">&gt;       I am getting this error message below and I don't know what it means or how to fix it.   It only happens when I
</span><br>
<span class="quotelev1">&gt;       run on a large number of processes, e.g. 960.  Things work fine on 480, and I don't think the application has a
</span><br>
<span class="quotelev1">&gt;       bug.  Any help is appreciated...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [c1n01][[30697,1],3][connect/btl_openib_connect_oob.c:464:qp_create_on
</span><br>
<span class="quotelev1">&gt; e] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [c1n01][[30697,1],4][connect/btl_openib_connect_oob.c:464:qp_create_on
</span><br>
<span class="quotelev1">&gt; e] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the mpirun command I used:
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/mpi/intel/openmpi-1.4.3 --machinefile &lt;host file&gt;
</span><br>
<span class="quotelev1">&gt; -np 960 --mca btl ^tcp --mca mpool_base_use_mem_hooks 1 --mca
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1
</span><br>
<span class="quotelev1">&gt; &lt;application name +
</span><br>
<span class="quotelev1">&gt; arguments&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the applicable hardware from the
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-param
</span><br>
<span class="quotelev1">&gt; s.ini
</span><br>
<span class="quotelev1">&gt; file:
</span><br>
<span class="quotelev1">&gt; # A.k.a. ConnectX
</span><br>
<span class="quotelev1">&gt; [Mellanox Hermon]
</span><br>
<span class="quotelev1">&gt; vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3,0x119f
</span><br>
<span class="quotelev1">&gt; vendor_part_id =
</span><br>
<span class="quotelev1">&gt; 25408,25418,25428,26418,26428,25448,26438,26448,26468,26478,26488
</span><br>
<span class="quotelev1">&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt; mtu = 2048
</span><br>
<span class="quotelev1">&gt; max_inline_data = 128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this is the output of ompi_info -param btl openib:
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; btl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose OpenIB BTL information
</span><br>
<span class="quotelev1">&gt; (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;1&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev1">&gt;                           Warn when no device-specific parameters are
</span><br>
<span class="quotelev1">&gt; found in the INI file specified by the btl_openib_device_param_files
</span><br>
<span class="quotelev1">&gt; MCA
</span><br>
<span class="quotelev1">&gt;                           parameter (0 = do not warn; any other value
</span><br>
<span class="quotelev1">&gt; = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default value, deprecated, synonym
</span><br>
<span class="quotelev1">&gt;                           of: btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev1">&gt;                           Warn when no device-specific parameters are
</span><br>
<span class="quotelev1">&gt; found in the INI file specified by the btl_openib_device_param_files
</span><br>
<span class="quotelev1">&gt; MCA
</span><br>
<span class="quotelev1">&gt;                           parameter (0 = do not warn; any other value
</span><br>
<span class="quotelev1">&gt; = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Warn when there is more than one active
</span><br>
<span class="quotelev1">&gt; ports and at least one of them connected to the network with only
</span><br>
<span class="quotelev1">&gt; default GID
</span><br>
<span class="quotelev1">&gt;                           prefix configured (0 = do not warn; any
</span><br>
<span class="quotelev1">&gt; other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Warn if non-existent devices and/or ports
</span><br>
<span class="quotelev1">&gt; are specified in the btl_openib_if_[in|ex]clude MCA parameters (0 = do
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt;                           warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_want_fork_support&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether fork support is desired or not
</span><br>
<span class="quotelev1">&gt; (negative = try to enable fork support, but continue even if it is not
</span><br>
<span class="quotelev1">&gt;                           available, 0 = do not enable fork support,
</span><br>
<span class="quotelev1">&gt; positive = try to enable fork support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_device_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                           &quot;/usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value, synonyms:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_hca_param_files)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited list of INI-style files that
</span><br>
<span class="quotelev1">&gt; contain device vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                           &quot;/usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value, deprecated,
</span><br>
<span class="quotelev1">&gt;                           synonym of: btl_openib_device_param_files)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited list of INI-style files that
</span><br>
<span class="quotelev1">&gt; contain device vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_device_type&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;all&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Specify to only use IB or iWARP network
</span><br>
<span class="quotelev1">&gt; adapters (infiniband = only use InfiniBand HCAs; iwarp = only use
</span><br>
<span class="quotelev1">&gt; iWARP NICs;
</span><br>
<span class="quotelev1">&gt;                           all = use any available adapters)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_btls&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of device ports to use (-1 =
</span><br>
<span class="quotelev1">&gt; use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_num&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_max&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of free lists (-1 = infinite,
</span><br>
<span class="quotelev1">&gt; otherwise must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_inc&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;32&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_mpool&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;rdma&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of the memory pool to be used (it is
</span><br>
<span class="quotelev1">&gt; unlikely that you will ever want to change this
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the registration cache most
</span><br>
<span class="quotelev1">&gt; recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cq_size&quot; (current value: &quot;1000&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_cq_size)
</span><br>
<span class="quotelev1">&gt;                           Size of the OpenFabrics completion queue
</span><br>
<span class="quotelev1">&gt; (will automatically be set to a minimum of (2 * number_of_peers *
</span><br>
<span class="quotelev1">&gt;                           btl_openib_rd_num))
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1000&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_cq_size)
</span><br>
<span class="quotelev1">&gt;                           Size of the OpenFabrics completion queue
</span><br>
<span class="quotelev1">&gt; (will automatically be set to a minimum of (2 * number_of_peers *
</span><br>
<span class="quotelev1">&gt;                           btl_openib_rd_num))
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_inline_data&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;, data source: default value,
</span><br>
<span class="quotelev1">&gt; synonyms:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_ib_max_inline_data)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of inline data segment (-1 =
</span><br>
<span class="quotelev1">&gt; run-time probe to discover max value, otherwise must be &gt;= 0). If not
</span><br>
<span class="quotelev1">&gt;                           explicitly set, use max_inline_data from the
</span><br>
<span class="quotelev1">&gt; INI file containing device-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_inline_data&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_max_inline_data)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of inline data segment (-1 =
</span><br>
<span class="quotelev1">&gt; run-time probe to discover max value, otherwise must be &gt;= 0). If not
</span><br>
<span class="quotelev1">&gt;                           explicitly set, use max_inline_data from the
</span><br>
<span class="quotelev1">&gt; INI file containing device-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_pkey&quot; (current value: &quot;0&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_pkey_val)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics partition key (pkey) value.
</span><br>
<span class="quotelev1">&gt; Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;0x3f&quot;) and
</span><br>
<span class="quotelev1">&gt;                           will be masked against the maximum allowable
</span><br>
<span class="quotelev1">&gt; IB paritition key value (0x7fff)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_pkey)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics partition key (pkey) value.
</span><br>
<span class="quotelev1">&gt; Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;0x3f&quot;) and
</span><br>
<span class="quotelev1">&gt;                           will be masked against the maximum allowable
</span><br>
<span class="quotelev1">&gt; IB paritition key value (0x7fff)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_psn&quot; (current value: &quot;0&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_psn)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics packet sequence starting number
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_psn)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics packet sequence starting number
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand outstanding atomic reads (must be
</span><br>
<span class="quotelev2">&gt; &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_mtu&quot; (current value: &quot;3&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_mtu)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics MTU, in bytes (if not specified
</span><br>
<span class="quotelev1">&gt; in INI files).  Valid values are: 1=256 bytes,
</span><br>
<span class="quotelev1">&gt; 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev1">&gt;                           4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;3&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_mtu)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics MTU, in bytes (if not specified
</span><br>
<span class="quotelev1">&gt; in INI files).  Valid values are: 1=256 bytes,
</span><br>
<span class="quotelev1">&gt; 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev1">&gt;                           4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;25&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand minimum &quot;receiver not ready&quot;
</span><br>
<span class="quotelev1">&gt; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit timeout, plugged into
</span><br>
<span class="quotelev1">&gt; formula: 4.096 microseconds * (2^btl_openib_ib_timeout)(must be &gt;= 0
</span><br>
<span class="quotelev1">&gt; and &lt;=
</span><br>
<span class="quotelev1">&gt;                           31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_retry_count&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit retry count (must be &gt;=
</span><br>
<span class="quotelev1">&gt; 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand &quot;receiver not ready&quot; retry count;
</span><br>
<span class="quotelev1">&gt; applies *only* to SRQ/XRC queues.  PP queues use RNR retry values of 0
</span><br>
<span class="quotelev1">&gt;                           because Open MPI performs software flow
</span><br>
<span class="quotelev1">&gt; control to guarantee that RNRs never occur (must be &gt;= 0 and &lt;= 7; 7 =
</span><br>
<span class="quotelev1">&gt;                           &quot;infinite&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand maximum pending RDMA destination
</span><br>
<span class="quotelev1">&gt; operations (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_service_level&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand service level (must be &gt;= 0 and
</span><br>
<span class="quotelev1">&gt; &lt;= 15)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for eager messages (-1 = use device
</span><br>
<span class="quotelev1">&gt; default, 0 = do not use eager RDMA, 1 = use eager
</span><br>
<span class="quotelev1">&gt; RDMA)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for short messages after this
</span><br>
<span class="quotelev1">&gt; number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of peers allowed to use RDMA
</span><br>
<span class="quotelev1">&gt; for short messages (RDMA is used for all long messages, except if
</span><br>
<span class="quotelev1">&gt;                           explicitly disabled, such as with the &quot;dr&quot;
</span><br>
<span class="quotelev1">&gt; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of RDMA buffers to allocate for small
</span><br>
<span class="quotelev1">&gt; messages(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of BTLs to create for each InfiniBand
</span><br>
<span class="quotelev1">&gt; LID (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of LIDs to use for each
</span><br>
<span class="quotelev1">&gt; device port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_enable_apm_over_lmc&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of alterative paths for each
</span><br>
<span class="quotelev1">&gt; device port (must be &gt;= -1, where 0 = disable apm,
</span><br>
<span class="quotelev1">&gt; -1 = all availible
</span><br>
<span class="quotelev1">&gt;                           alternative paths )
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_enable_apm_over_ports&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable alterative path migration (APM) over
</span><br>
<span class="quotelev1">&gt; different ports of the same device (must be &gt;= 0, where 0 = disable
</span><br>
<span class="quotelev1">&gt; APM
</span><br>
<span class="quotelev1">&gt;                           over ports , 1 = enable APM over ports of
</span><br>
<span class="quotelev1">&gt; the same device)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_use_async_event_thread&quot; (current value: &quot;1&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, use the thread that will handle
</span><br>
<span class="quotelev1">&gt; InfiniBand asyncihronous events
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_buffer_alignment&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Prefered communication buffer alignment, in
</span><br>
<span class="quotelev1">&gt; bytes (must be &gt; 0 and power of two)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_use_message_coalescing&quot; (current value: &quot;1&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Use message coalescing
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cq_poll_ratio&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           how often poll high priority CQ versus low
</span><br>
<span class="quotelev1">&gt; priority CQ
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_poll_ratio&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;100&quot;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           how often poll eager RDMA channel versus CQ
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_hp_cq_poll_per_progress&quot; (current value: &quot;10&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           max number of completion events to process
</span><br>
<span class="quotelev1">&gt; for each call of BTL progress engine
</span><br>
<span class="quotelev1">&gt;                  MCA btl: information &quot;btl_openib_have_fork_support&quot;
</span><br>
<span class="quotelev1">&gt; (value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether the OpenFabrics stack supports
</span><br>
<span class="quotelev1">&gt; applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1 = yes).
</span><br>
<span class="quotelev1">&gt;                           Note that this value does NOT indicate
</span><br>
<span class="quotelev1">&gt; whether the system being run on supports &quot;fork()&quot; with OpenFabrics
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;                           or not.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;310&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2,
</span><br>
<span class="quotelev1">&gt; GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;                           only used by the &quot;dr&quot; PML (ignored by
</span><br>
<span class="quotelev1">&gt; others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt; for all large messages (must be &gt;= 0 and &lt;=
</span><br>
<span class="quotelev1">&gt; eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_send_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 2&quot; fragment of a long message when using the pipeline protocol (must
</span><br>
<span class="quotelev1">&gt; be &gt;=
</span><br>
<span class="quotelev1">&gt;                           1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rdma_pipeline_send_length&quot; (current value: &quot;1048576&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev1">&gt; message (in bytes) when using the pipeline protocol.  This part of the
</span><br>
<span class="quotelev1">&gt;                           message will be split into fragments of size
</span><br>
<span class="quotelev1">&gt; max_send_size and sent using send/receive semantics (must be &gt;= 0;
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt;                           relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_rdma_pipeline_frag_size&quot; (current value: &quot;1048576&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt; 3&quot; fragment from a long message when using the pipeline protocol.
</span><br>
<span class="quotelev1">&gt; These
</span><br>
<span class="quotelev1">&gt;                           fragments will be sent using RDMA semantics
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 1; only relevant when the PUT flag is
</span><br>
<span class="quotelev1">&gt; set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_min_rdma_pipeline_size&quot; (current value: &quot;262144&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Messages smaller than this size (in bytes)
</span><br>
<span class="quotelev1">&gt; will not use the RDMA pipeline protocol.  Instead, they will be split
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt;                           fragments of max_send_size and sent using
</span><br>
<span class="quotelev1">&gt; send/receive semantics (must be &gt;=0, and is automatically adjusted up
</span><br>
<span class="quotelev1">&gt; to at
</span><br>
<span class="quotelev1">&gt;                           least
</span><br>
<span class="quotelev1">&gt; (eager_limit+btl_rdma_pipeline_send_length); only relevant when the
</span><br>
<span class="quotelev1">&gt; PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;800&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_latency&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate latency of interconnect (must be
</span><br>
<span class="quotelev2">&gt; &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                           &quot;P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited, comma delimited list of
</span><br>
<span class="quotelev1">&gt; receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of devices/ports to be
</span><br>
<span class="quotelev1">&gt; used (e.g. &quot;mthca0,mthca1:2&quot;; empty value means to use all ports found).
</span><br>
<span class="quotelev1">&gt;                           Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of device/ports to be
</span><br>
<span class="quotelev1">&gt; excluded (empty value means to not exclude any ports).  Mutually
</span><br>
<span class="quotelev1">&gt; exclusive
</span><br>
<span class="quotelev1">&gt;                           with btl_openib_if_include.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ipaddr_include&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of IP Addresses to be
</span><br>
<span class="quotelev1">&gt; used (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with
</span><br>
<span class="quotelev1">&gt;                           btl_openib_ipaddr_exclude.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ipaddr_exclude&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of IP Addresses to be
</span><br>
<span class="quotelev1">&gt; excluded (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with
</span><br>
<span class="quotelev1">&gt;                           btl_openib_ipaddr_include.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cpc_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Method used to select OpenFabrics
</span><br>
<span class="quotelev1">&gt; connections (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cpc_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Method used to exclude OpenFabrics
</span><br>
<span class="quotelev1">&gt; connections (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_oob_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;50&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method priority for oob
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_xoob_priority&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;60&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method priority for xoob
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_connect_rdmacm_priority&quot; (current value: &quot;30&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           The selection method priority for rdma_cm
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_port&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method port for rdma_cm
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_resolve_timeout&quot; (current value: &quot;1000&quot;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           The timeout (in miliseconds) for address and
</span><br>
<span class="quotelev1">&gt; route resolution
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_connect_rdmacm_retry_count&quot; (current value: &quot;20&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of times rdmacm will retry
</span><br>
<span class="quotelev1">&gt; route resolution
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_connect_rdmacm_reject_causes_connect_error&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           The drivers for some devices are buggy such
</span><br>
<span class="quotelev1">&gt; that an RDMA REJECT action may result in a CONNECT_ERROR event instead
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt;                           a REJECTED event.  Setting this MCA
</span><br>
<span class="quotelev1">&gt; parameter to true tells Open MPI to treat CONNECT_ERROR events on
</span><br>
<span class="quotelev1">&gt; connections
</span><br>
<span class="quotelev1">&gt;                           where a REJECT is expected as a REJECT
</span><br>
<span class="quotelev1">&gt; (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
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
<li><strong>Next message:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17226.php">Shamis, Pavel: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17222.php">Nathan Hjelm: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
