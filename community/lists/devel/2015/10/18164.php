<?
$subject_val = "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 13:35:23 2015" -->
<!-- isoreceived="20151014173523" -->
<!-- sent="Wed, 14 Oct 2015 17:35:03 +0000" -->
<!-- isosent="20151014173503" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x" -->
<!-- id="3432ACF5-8A14-4D20-81BF-D280E5D13B9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20151014164813.GD50260_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 13:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18165.php">Mark Santcroos: "[OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>In reply to:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Reply:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2015, at 12:48 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is from a known issue. Try applying this and run again:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/952d01db70eab4cbe11ff4557434acaa928685a4.patch">https://github.com/open-mpi/ompi/commit/952d01db70eab4cbe11ff4557434acaa928685a4.patch</a>
</span><br>
<p>The good news is that if this fixes your problem, the fix is already included in the upcoming v1.10.1 release.
<br>
<p><p><span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 14, 2015 at 06:33:07PM +0200, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're puzzled by reproducible performance (bandwidth) penalty observed when
</span><br>
<span class="quotelev2">&gt;&gt; comparing measurements via InfibiBand between two nodes, OpenMPI/1.10.0
</span><br>
<span class="quotelev2">&gt;&gt; compiled with *GCC/5.2* instead of GCC 4.8 and Intel compiler.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Take a look at the attached picture of two measurements of NetPIPE
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitspjoule.org/netpipe/">http://bitspjoule.org/netpipe/</a> benchmark done with one MPI rank per node,
</span><br>
<span class="quotelev2">&gt;&gt; communicating via QDR InfiniBand (y axis: Mbps, y axis: sample number)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Up to sample 64 (8195 bytes message size) the achieved performance is
</span><br>
<span class="quotelev2">&gt;&gt; virtually the same; from sample 65 (12285 bytes, *less* than 12k) the
</span><br>
<span class="quotelev2">&gt;&gt; version of GCC compiled using GCC 5.2 suffer form 20%+ penalty in bandwidth.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The result is reproducible and independent from nodes and ever linux
</span><br>
<span class="quotelev2">&gt;&gt; distribution (both Scientific Linux 6 and CentOS 7 have the same results).
</span><br>
<span class="quotelev2">&gt;&gt; Both C and Fortran benchmarks offer the very same behaviour so it is *not*
</span><br>
<span class="quotelev2">&gt;&gt; an f08 issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The acchieved bandwidth is definitely IB-range (gigabytes per second), the
</span><br>
<span class="quotelev2">&gt;&gt; communication is running via InfinfiBand in all cases (no failback to IP,
</span><br>
<span class="quotelev2">&gt;&gt; huh).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The compile line is the same; the output of ompi_info --all and --params is
</span><br>
<span class="quotelev2">&gt;&gt; the very same (cf. attachments) up to added support for fortran-08 in /5.2
</span><br>
<span class="quotelev2">&gt;&gt; version.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We know about existence of 'eager_limit' parameter, which is *not* changed
</span><br>
<span class="quotelev2">&gt;&gt; and is 12288 in both versions (this is *less* that the first distinguishing
</span><br>
<span class="quotelev2">&gt;&gt; sample).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, for us the *only* difference is usage of other (new) GCC release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea about this 20%+ bandwidth loss?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_verbose&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Output some verbose OpenIB BTL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when no device-specific parameters are found in the INI file specified by the btl_openib_device_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when no device-specific parameters are found in the INI file specified by the btl_openib_device_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when there is more than one active ports and at least one of them connected to the network with only default GID prefix configured (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn if non-existent devices and/or ports are specified in the btl_openib_if_[in|ex]clude MCA parameters (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_abort_not_enough_reg_mem&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          If there is not enough registered memory available on the system for Open MPI to function properly, Open MPI will issue a warning.  If this MCA parameter is set to true, then Open MPI will also abort all MPI jobs (0 = warn, but do not abort; any other value = warn and abort)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_poll_cq_batch&quot; (current value: &quot;256&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Retrieve up to poll_cq_batch completions from CQ
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_device_param_files&quot; (current value: &quot;/opt/MPI/openmpi-1.10.0/linux/gcc/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source: default, level: 9 dev/all, type: string, synonyms: btl_openib_hca_param_files)
</span><br>
<span class="quotelev2">&gt;&gt;                          Colon-delimited list of INI-style files that contain device vendor/part-specific parameters (use semicolon for Windows)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value: &quot;/opt/MPI/openmpi-1.10.0/linux/gcc/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: btl_openib_device_param_files)
</span><br>
<span class="quotelev2">&gt;&gt;                          Colon-delimited list of INI-style files that contain device vendor/part-specific parameters (use semicolon for Windows)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_device_type&quot; (current value: &quot;all&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Specify to only use IB or iWARP network adapters (infiniband = only use InfiniBand HCAs; iwarp = only use iWARP NICs; all = use any available adapters)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0:&quot;infiniband&quot;, 0:&quot;ib&quot;, 1:&quot;iwarp&quot;, 1:&quot;iw&quot;, 2:&quot;all&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of device ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Initial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size of free lists (-1 = infinite, otherwise must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;grdma&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Name of the memory pool to be used (it is unlikely that you will ever want to change this)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Length of the registration cache most recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cq_size&quot; (current value: &quot;8192&quot;, data source: default, level: 9 dev/all, type: int, synonyms: btl_openib_ib_cq_size)
</span><br>
<span class="quotelev2">&gt;&gt;                          Minimum size of the OpenFabrics completion queue (CQs are automatically sized based on the number of peer MPI processes; this value determines the *minimum* size of all CQs)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current value: &quot;8192&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: btl_openib_cq_size)
</span><br>
<span class="quotelev2">&gt;&gt;                          Minimum size of the OpenFabrics completion queue (CQs are automatically sized based on the number of peer MPI processes; this value determines the *minimum* size of all CQs)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int, synonyms: btl_openib_ib_max_inline_data)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must be &gt;= 0). If not explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: btl_openib_max_inline_data)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must be &gt;= 0). If not explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_pkey&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, synonyms: btl_openib_ib_pkey_val)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and will be masked against the maximum allowable IB partition key value (0x7fff)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, deprecated, synonym of: btl_openib_pkey)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and will be masked against the maximum allowable IB partition key value (0x7fff)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_psn&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, synonyms: btl_openib_ib_psn)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, deprecated, synonym of: btl_openib_psn)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand outstanding atomic reads (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_mtu&quot; (current value: &quot;1k&quot;, data source: default, level: 9 dev/all, type: int, synonyms: btl_openib_ib_mtu)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 1:&quot;256B&quot;, 2:&quot;512B&quot;, 3:&quot;1k&quot;, 4:&quot;2k&quot;, 5:&quot;4k&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value: &quot;1k&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: btl_openib_mtu)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 1:&quot;256B&quot;, 2:&quot;512B&quot;, 3:&quot;1k&quot;, 4:&quot;2k&quot;, 5:&quot;4k&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;25&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand minimum &quot;receiver not ready&quot; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;24&quot;, data source: environment, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand transmit timeout, plugged into formula: 4.096 microseconds * (2^btl_openib_ib_timeout) (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand transmit retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand &quot;receiver not ready&quot; retry count; applies *only* to SRQ/XRC queues.  PP queues use RNR retry values of 0 because Open MPI performs software flow control to guarantee that RNRs never occur (must be &gt;= 0 and &lt;= 7; 7 = &quot;infinite&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand maximum pending RDMA destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand service level (must be &gt;= 0 and &lt;= 15)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_path_record_service_level&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable getting InfiniBand service level from PathRecord (must be &gt;= 0, 0 = disabled, positive = try to get the service level from PathRecord)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Use RDMA for eager messages (-1 = use device default, 0 = do not use eager RDMA, 1 = use eager RDMA)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Use RDMA for short messages after this number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of peers allowed to use RDMA for short messages (RDMA is used for all long messages, except if explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;17&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Number of RDMA buffers to allocate for small messages (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Number of BTLs to create for each InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of LIDs to use for each device port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_enable_apm_over_lmc&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of alternative paths for each device port (must be &gt;= -1, where 0 = disable apm, -1 = all available alternative paths )
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_enable_apm_over_ports&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable alternative path migration (APM) over different ports of the same device (must be &gt;= 0, where 0 = disable APM over ports, 1 = enable APM over ports of the same device)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_use_async_event_thread&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          If nonzero, use the thread that will handle InfiniBand asynchronous events
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_enable_srq_resize&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable/Disable on demand SRQ resize. (0 = without resizing, nonzero = with resizing)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rroce_enable&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable/Disable routing between different subnets(0 = disable, nonzero = enable)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Preferred communication buffer alignment, in bytes (must be &gt; 0 and power of two)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cq_poll_ratio&quot; (current value: &quot;100&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          How often to poll high priority CQ versus low priority CQ
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_rdma_poll_ratio&quot; (current value: &quot;100&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          How often to poll eager RDMA channel versus CQ
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_hp_cq_poll_per_progress&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Max number of completion events to process for each call of BTL progress engine
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_hw_msg_size&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes) of a single fragment of a long message when using the RDMA protocols (must be &gt; 0 and &lt;= hw capabilities).
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_allow_max_memory_registration&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Allow maximum possible memory to register with HCA
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_memory_registration_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Output some verbose memory registration information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ignore_locality&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Ignore any locality information and use all devices (0 = use locality informaiton and use only close devices, nonzero = ignore locality information)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: informational &quot;btl_openib_have_fork_support&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Whether the OpenFabrics stack supports applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1 = yes). Note that this value does NOT indicate whether the system being run on supports &quot;fork()&quot; with OpenFabrics applications or not.
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;310&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rndv_eager_limit&quot; (current value: &quot;12288&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rdma_pipeline_send_length&quot; (current value: &quot;1048576&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rdma_pipeline_frag_size&quot; (current value: &quot;1048576&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_min_rdma_pipeline_size&quot; (current value: &quot;1060864&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_latency&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Approximate latency of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = latency in microseconds)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value: &quot;P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Colon-delimited, comma-delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_if_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of devices/ports to be used (e.g. &quot;mthca0,mthca1:2&quot;; empty value means to use all ports found).  Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of device/ports to be excluded (empty value means to not exclude any ports).  Mutually exclusive with btl_openib_if_include.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ipaddr_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of IP Addresses to be used (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with btl_openib_ipaddr_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ipaddr_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of IP Addresses to be excluded (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with btl_openib_ipaddr_include.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_gid_index&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          GID index to use on verbs device ports
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_memalign&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          [64 | 32 | 0] - Enable (64bit or 32bit)/Disable(0) memoryalignment for all malloc calls if btl openib is used.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_memalign_threshold&quot; (current value: &quot;12288&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Allocating memory more than btl_openib_memalign_threshholdbytes will automatically be aligned to the value of btl_openib_memalign bytes.memalign_threshhold defaults to the same value as mca_btl_openib_eager_limit.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cpc_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Method used to select OpenFabrics connections (valid values: rdmacm,udcm)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cpc_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Method used to exclude OpenFabrics connections (valid values: rdmacm,udcm)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_priority&quot; (current value: &quot;30&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          The selection method priority for rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_port&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          The selection method port for rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_resolve_timeout&quot; (current value: &quot;30000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          The timeout (in miliseconds) for address and route resolution
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_retry_count&quot; (current value: &quot;20&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of times rdmacm will retry route resolution
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_reject_causes_connect_error&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          The drivers for some devices are buggy such that an RDMA REJECT action may result in a CONNECT_ERROR event instead of a REJECTED event.  Setting this MCA parameter to true tells Open MPI to treat CONNECT_ERROR events on connections where a REJECT is expected as a REJECT (default: false)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_priority&quot; (current value: &quot;63&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Priority of the udcm connection method
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_recv_count&quot; (current value: &quot;512&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Number of registered buffers to post
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_timeout&quot; (current value: &quot;500000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Ack timeout for udcm connection messages
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_max_retry&quot; (current value: &quot;25&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of times to retry sending a udcm connection message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_verbose&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Output some verbose OpenIB BTL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when no device-specific parameters are found in the INI file specified by the btl_openib_device_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when no device-specific parameters are found in the INI file specified by the btl_openib_device_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when there is more than one active ports and at least one of them connected to the network with only default GID prefix configured (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn if non-existent devices and/or ports are specified in the btl_openib_if_[in|ex]clude MCA parameters (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_abort_not_enough_reg_mem&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          If there is not enough registered memory available on the system for Open MPI to function properly, Open MPI will issue a warning.  If this MCA parameter is set to true, then Open MPI will also abort all MPI jobs (0 = warn, but do not abort; any other value = warn and abort)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_poll_cq_batch&quot; (current value: &quot;256&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Retrieve up to poll_cq_batch completions from CQ
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_device_param_files&quot; (current value: &quot;/opt/MPI/openmpi-1.10.0/linux/gcc_5.2.0/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source: default, level: 9 dev/all, type: string, synonyms: btl_openib_hca_param_files)
</span><br>
<span class="quotelev2">&gt;&gt;                          Colon-delimited list of INI-style files that contain device vendor/part-specific parameters (use semicolon for Windows)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value: &quot;/opt/MPI/openmpi-1.10.0/linux/gcc_5.2.0/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: btl_openib_device_param_files)
</span><br>
<span class="quotelev2">&gt;&gt;                          Colon-delimited list of INI-style files that contain device vendor/part-specific parameters (use semicolon for Windows)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_device_type&quot; (current value: &quot;all&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Specify to only use IB or iWARP network adapters (infiniband = only use InfiniBand HCAs; iwarp = only use iWARP NICs; all = use any available adapters)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0:&quot;infiniband&quot;, 0:&quot;ib&quot;, 1:&quot;iwarp&quot;, 1:&quot;iw&quot;, 2:&quot;all&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of device ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Initial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size of free lists (-1 = infinite, otherwise must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;grdma&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Name of the memory pool to be used (it is unlikely that you will ever want to change this)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Length of the registration cache most recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cq_size&quot; (current value: &quot;8192&quot;, data source: default, level: 9 dev/all, type: int, synonyms: btl_openib_ib_cq_size)
</span><br>
<span class="quotelev2">&gt;&gt;                          Minimum size of the OpenFabrics completion queue (CQs are automatically sized based on the number of peer MPI processes; this value determines the *minimum* size of all CQs)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current value: &quot;8192&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: btl_openib_cq_size)
</span><br>
<span class="quotelev2">&gt;&gt;                          Minimum size of the OpenFabrics completion queue (CQs are automatically sized based on the number of peer MPI processes; this value determines the *minimum* size of all CQs)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int, synonyms: btl_openib_ib_max_inline_data)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must be &gt;= 0). If not explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: btl_openib_max_inline_data)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must be &gt;= 0). If not explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_pkey&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, synonyms: btl_openib_ib_pkey_val)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and will be masked against the maximum allowable IB partition key value (0x7fff)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, deprecated, synonym of: btl_openib_pkey)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and will be masked against the maximum allowable IB partition key value (0x7fff)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_psn&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, synonyms: btl_openib_ib_psn)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned, deprecated, synonym of: btl_openib_psn)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand outstanding atomic reads (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_mtu&quot; (current value: &quot;1k&quot;, data source: default, level: 9 dev/all, type: int, synonyms: btl_openib_ib_mtu)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 1:&quot;256B&quot;, 2:&quot;512B&quot;, 3:&quot;1k&quot;, 4:&quot;2k&quot;, 5:&quot;4k&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value: &quot;1k&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: btl_openib_mtu)
</span><br>
<span class="quotelev2">&gt;&gt;                          OpenFabrics MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 1:&quot;256B&quot;, 2:&quot;512B&quot;, 3:&quot;1k&quot;, 4:&quot;2k&quot;, 5:&quot;4k&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;25&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand minimum &quot;receiver not ready&quot; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;24&quot;, data source: environment, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand transmit timeout, plugged into formula: 4.096 microseconds * (2^btl_openib_ib_timeout) (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand transmit retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand &quot;receiver not ready&quot; retry count; applies *only* to SRQ/XRC queues.  PP queues use RNR retry values of 0 because Open MPI performs software flow control to guarantee that RNRs never occur (must be &gt;= 0 and &lt;= 7; 7 = &quot;infinite&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand maximum pending RDMA destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          InfiniBand service level (must be &gt;= 0 and &lt;= 15)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ib_path_record_service_level&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable getting InfiniBand service level from PathRecord (must be &gt;= 0, 0 = disabled, positive = try to get the service level from PathRecord)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Use RDMA for eager messages (-1 = use device default, 0 = do not use eager RDMA, 1 = use eager RDMA)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Use RDMA for short messages after this number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of peers allowed to use RDMA for short messages (RDMA is used for all long messages, except if explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;17&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Number of RDMA buffers to allocate for small messages (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Number of BTLs to create for each InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of LIDs to use for each device port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_enable_apm_over_lmc&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of alternative paths for each device port (must be &gt;= -1, where 0 = disable apm, -1 = all available alternative paths )
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_enable_apm_over_ports&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable alternative path migration (APM) over different ports of the same device (must be &gt;= 0, where 0 = disable APM over ports, 1 = enable APM over ports of the same device)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_use_async_event_thread&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          If nonzero, use the thread that will handle InfiniBand asynchronous events
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_enable_srq_resize&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable/Disable on demand SRQ resize. (0 = without resizing, nonzero = with resizing)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rroce_enable&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Enable/Disable routing between different subnets(0 = disable, nonzero = enable)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Preferred communication buffer alignment, in bytes (must be &gt; 0 and power of two)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cq_poll_ratio&quot; (current value: &quot;100&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          How often to poll high priority CQ versus low priority CQ
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_rdma_poll_ratio&quot; (current value: &quot;100&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          How often to poll eager RDMA channel versus CQ
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_hp_cq_poll_per_progress&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Max number of completion events to process for each call of BTL progress engine
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_hw_msg_size&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes) of a single fragment of a long message when using the RDMA protocols (must be &gt; 0 and &lt;= hw capabilities).
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_allow_max_memory_registration&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Allow maximum possible memory to register with HCA
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_memory_registration_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Output some verbose memory registration information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ignore_locality&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Ignore any locality information and use all devices (0 = use locality informaiton and use only close devices, nonzero = ignore locality information)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: informational &quot;btl_openib_have_fork_support&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          Whether the OpenFabrics stack supports applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1 = yes). Note that this value does NOT indicate whether the system being run on supports &quot;fork()&quot; with OpenFabrics applications or not.
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;310&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rndv_eager_limit&quot; (current value: &quot;12288&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rdma_pipeline_send_length&quot; (current value: &quot;1048576&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_rdma_pipeline_frag_size&quot; (current value: &quot;1048576&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_min_rdma_pipeline_size&quot; (current value: &quot;1060864&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_latency&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Approximate latency of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = latency in microseconds)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value: &quot;P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Colon-delimited, comma-delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_if_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of devices/ports to be used (e.g. &quot;mthca0,mthca1:2&quot;; empty value means to use all ports found).  Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of device/ports to be excluded (empty value means to not exclude any ports).  Mutually exclusive with btl_openib_if_include.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ipaddr_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of IP Addresses to be used (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with btl_openib_ipaddr_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_ipaddr_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of IP Addresses to be excluded (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with btl_openib_ipaddr_include.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_gid_index&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          GID index to use on verbs device ports
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_memalign&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          [64 | 32 | 0] - Enable (64bit or 32bit)/Disable(0) memoryalignment for all malloc calls if btl openib is used.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_memalign_threshold&quot; (current value: &quot;12288&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev2">&gt;&gt;                          Allocating memory more than btl_openib_memalign_threshholdbytes will automatically be aligned to the value of btl_openib_memalign bytes.memalign_threshhold defaults to the same value as mca_btl_openib_eager_limit.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cpc_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Method used to select OpenFabrics connections (valid values: rdmacm,udcm)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_cpc_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Method used to exclude OpenFabrics connections (valid values: rdmacm,udcm)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_priority&quot; (current value: &quot;30&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          The selection method priority for rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_port&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev2">&gt;&gt;                          The selection method port for rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_resolve_timeout&quot; (current value: &quot;30000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          The timeout (in miliseconds) for address and route resolution
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_retry_count&quot; (current value: &quot;20&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of times rdmacm will retry route resolution
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_rdmacm_reject_causes_connect_error&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt;                          The drivers for some devices are buggy such that an RDMA REJECT action may result in a CONNECT_ERROR event instead of a REJECTED event.  Setting this MCA parameter to true tells Open MPI to treat CONNECT_ERROR events on connections where a REJECT is expected as a REJECT (default: false)
</span><br>
<span class="quotelev2">&gt;&gt;                          Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_priority&quot; (current value: &quot;63&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Priority of the udcm connection method
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_recv_count&quot; (current value: &quot;512&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Number of registered buffers to post
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_timeout&quot; (current value: &quot;500000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Ack timeout for udcm connection messages
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_connect_udcm_max_retry&quot; (current value: &quot;25&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev2">&gt;&gt;                          Maximum number of times to retry sending a udcm connection message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18162.php">http://www.open-mpi.org/community/lists/devel/2015/10/18162.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18163.php">http://www.open-mpi.org/community/lists/devel/2015/10/18163.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18165.php">Mark Santcroos: "[OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>In reply to:</strong> <a href="18163.php">Nathan Hjelm: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<li><strong>Reply:</strong> <a href="18179.php">Paul Kapinos: "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
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
