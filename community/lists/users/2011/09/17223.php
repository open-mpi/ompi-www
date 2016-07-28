<?
$subject_val = "Re: [OMPI users] qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 12:04:03 2011" -->
<!-- isoreceived="20110912160403" -->
<!-- sent="Mon, 12 Sep 2011 12:03:58 -0400" -->
<!-- isosent="20110912160358" -->
<!-- name="Teng Ma" -->
<!-- email="tma_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qp memory allocation problem" -->
<!-- id="251a98bbcbf73f843f92ae32b9130bec.squirrel_at_webmail.eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Teng Ma (<em>tma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 12:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17224.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17222.php">Nathan Hjelm: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17221.php">Samuel K. Gutierrez: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17225.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I met a similar problem possibly related with QP memory allocation.  I run
<br>
768 processes' allgather with 1MB message size but by node binding(forcing
<br>
the edge of Tuned's ring algorithm through IB links every time). The IMB
<br>
test hang over there more than 3 hours without any output.  I don't know
<br>
whether or not it takes too long time to finish or deadlock there.  But
<br>
messages smaller than 1MB are OK, some long time but it can be finished. 
<br>
I will follow your parameters to see whether or not it helps.
<br>
<p>Thanks
<br>
<p>Teng
<br>
<p><p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; default.  Do they buy us anything?  For what it is worth, we have stopped
</span><br>
<span class="quotelev1">&gt; using them on all of our large systems here at LANL.
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
<span class="quotelev2">&gt;&gt; I am getting this error message below and I don&#146;t know what it means or
</span><br>
<span class="quotelev2">&gt;&gt; how to fix it.   It only happens when I run on a large number of
</span><br>
<span class="quotelev2">&gt;&gt; processes, e.g. 960.  Things work fine on 480, and I don&#146;t think the
</span><br>
<span class="quotelev2">&gt;&gt; application has a bug.  Any help is appreciated&#133;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [c1n01][[30697,1],3][connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev2">&gt;&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; [c1n01][[30697,1],4][connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev2">&gt;&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here&#146;s the mpirun command I used:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /usr/mpi/intel/openmpi-1.4.3 --machinefile &lt;host file&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -np 960 --mca btl ^tcp --mca mpool_base_use_mem_hooks 1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned 1 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 &lt;application
</span><br>
<span class="quotelev2">&gt;&gt; name + arguments&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here&#146;s the applicable hardware from the
</span><br>
<span class="quotelev2">&gt;&gt; /usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini
</span><br>
<span class="quotelev2">&gt;&gt; file:
</span><br>
<span class="quotelev2">&gt;&gt; # A.k.a. ConnectX
</span><br>
<span class="quotelev2">&gt;&gt; [Mellanox Hermon]
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3,0x119f
</span><br>
<span class="quotelev2">&gt;&gt; vendor_part_id =
</span><br>
<span class="quotelev2">&gt;&gt; 25408,25418,25428,26418,26428,25448,26438,26448,26468,26478,26488
</span><br>
<span class="quotelev2">&gt;&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev2">&gt;&gt; mtu = 2048
</span><br>
<span class="quotelev2">&gt;&gt; max_inline_data = 128
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And this is the output of ompi_info &#150;param btl openib:
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level of the BTL framework
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data
</span><br>
<span class="quotelev2">&gt;&gt; source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; btl framework (&lt;none&gt; means use all components
</span><br>
<span class="quotelev2">&gt;&gt; that can be found)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Output some verbose OpenIB BTL information (0
</span><br>
<span class="quotelev2">&gt;&gt; = no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_warn_no_device_params_found&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                           Warn when no device-specific parameters are
</span><br>
<span class="quotelev2">&gt;&gt; found in the INI file specified by the
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_device_param_files MCA
</span><br>
<span class="quotelev2">&gt;&gt;                           parameter (0 = do not warn; any other value =
</span><br>
<span class="quotelev2">&gt;&gt; warn)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_warn_no_hca_params_found&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;, data source: default value, deprecated, synonym
</span><br>
<span class="quotelev2">&gt;&gt;                           of: btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                           Warn when no device-specific parameters are
</span><br>
<span class="quotelev2">&gt;&gt; found in the INI file specified by the
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_device_param_files MCA
</span><br>
<span class="quotelev2">&gt;&gt;                           parameter (0 = do not warn; any other value =
</span><br>
<span class="quotelev2">&gt;&gt; warn)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Warn when there is more than one active ports
</span><br>
<span class="quotelev2">&gt;&gt; and at least one of them connected to the
</span><br>
<span class="quotelev2">&gt;&gt; network with only default GID
</span><br>
<span class="quotelev2">&gt;&gt;                           prefix configured (0 = do not warn; any other
</span><br>
<span class="quotelev2">&gt;&gt; value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Warn if non-existent devices and/or ports are
</span><br>
<span class="quotelev2">&gt;&gt; specified in the btl_openib_if_[in|ex]clude
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameters (0 = do not
</span><br>
<span class="quotelev2">&gt;&gt;                           warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_want_fork_support&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether fork support is desired or not
</span><br>
<span class="quotelev2">&gt;&gt; (negative = try to enable fork support, but
</span><br>
<span class="quotelev2">&gt;&gt; continue even if it is not
</span><br>
<span class="quotelev2">&gt;&gt;                           available, 0 = do not enable fork support,
</span><br>
<span class="quotelev2">&gt;&gt; positive = try to enable fork support and fail
</span><br>
<span class="quotelev2">&gt;&gt; if it is not available)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_device_param_files&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;/usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_hca_param_files)
</span><br>
<span class="quotelev2">&gt;&gt;                           Colon-delimited list of INI-style files that
</span><br>
<span class="quotelev2">&gt;&gt; contain device vendor/part-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_hca_param_files&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;/usr/mpi/intel/openmpi-1.4.3/share/openmpi/mca-btl-openib-device-params.ini&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; data source: default value, deprecated,
</span><br>
<span class="quotelev2">&gt;&gt;                           synonym of: btl_openib_device_param_files)
</span><br>
<span class="quotelev2">&gt;&gt;                           Colon-delimited list of INI-style files that
</span><br>
<span class="quotelev2">&gt;&gt; contain device vendor/part-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_device_type&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;all&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Specify to only use IB or iWARP network
</span><br>
<span class="quotelev2">&gt;&gt; adapters (infiniband = only use InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; HCAs; iwarp = only use iWARP NICs;
</span><br>
<span class="quotelev2">&gt;&gt;                           all = use any available adapters)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_max_btls&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of device ports to use (-1 =
</span><br>
<span class="quotelev2">&gt;&gt; use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size of free lists (-1 = infinite,
</span><br>
<span class="quotelev2">&gt;&gt; otherwise must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_mpool&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rdma&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Name of the memory pool to be used (it is
</span><br>
<span class="quotelev2">&gt;&gt; unlikely that you will ever want to change
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Length of the registration cache most recently
</span><br>
<span class="quotelev2">&gt;&gt; used list (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_cq_size&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1000&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_cq_size)
</span><br>
<span class="quotelev2">&gt;&gt;                           Size of the OpenFabrics completion queue (will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be set to a minimum of (2 *
</span><br>
<span class="quotelev2">&gt;&gt; number_of_peers *
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_rd_num))
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1000&quot;, data source: default value, deprecated,
</span><br>
<span class="quotelev2">&gt;&gt; synonym of:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_cq_size)
</span><br>
<span class="quotelev2">&gt;&gt;                           Size of the OpenFabrics completion queue (will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be set to a minimum of (2 *
</span><br>
<span class="quotelev2">&gt;&gt; number_of_peers *
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_rd_num))
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_max_inline_data&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;-1&quot;, data source: default value,
</span><br>
<span class="quotelev2">&gt;&gt; synonyms:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_ib_max_inline_data)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size of inline data segment (-1 =
</span><br>
<span class="quotelev2">&gt;&gt; run-time probe to discover max value,
</span><br>
<span class="quotelev2">&gt;&gt; otherwise must be &gt;= 0). If not
</span><br>
<span class="quotelev2">&gt;&gt;                           explicitly set, use max_inline_data from the
</span><br>
<span class="quotelev2">&gt;&gt; INI file containing device-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_inline_data&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;-1&quot;, data source: default value,
</span><br>
<span class="quotelev2">&gt;&gt; deprecated, synonym of:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_max_inline_data)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size of inline data segment (-1 =
</span><br>
<span class="quotelev2">&gt;&gt; run-time probe to discover max value,
</span><br>
<span class="quotelev2">&gt;&gt; otherwise must be &gt;= 0). If not
</span><br>
<span class="quotelev2">&gt;&gt;                           explicitly set, use max_inline_data from the
</span><br>
<span class="quotelev2">&gt;&gt; INI file containing device-specific parameters
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_pkey&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_pkey_val)
</span><br>
<span class="quotelev2">&gt;&gt;                           OpenFabrics partition key (pkey) value.
</span><br>
<span class="quotelev2">&gt;&gt; Unsigned integer decimal or hex values are
</span><br>
<span class="quotelev2">&gt;&gt; allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and
</span><br>
<span class="quotelev2">&gt;&gt;                           will be masked against the maximum allowable
</span><br>
<span class="quotelev2">&gt;&gt; IB paritition key value (0x7fff)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value, deprecated,
</span><br>
<span class="quotelev2">&gt;&gt; synonym of:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_pkey)
</span><br>
<span class="quotelev2">&gt;&gt;                           OpenFabrics partition key (pkey) value.
</span><br>
<span class="quotelev2">&gt;&gt; Unsigned integer decimal or hex values are
</span><br>
<span class="quotelev2">&gt;&gt; allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and
</span><br>
<span class="quotelev2">&gt;&gt;                           will be masked against the maximum allowable
</span><br>
<span class="quotelev2">&gt;&gt; IB paritition key value (0x7fff)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_psn&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_psn)
</span><br>
<span class="quotelev2">&gt;&gt;                           OpenFabrics packet sequence starting number
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value, deprecated, synonym
</span><br>
<span class="quotelev2">&gt;&gt; of:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_psn)
</span><br>
<span class="quotelev2">&gt;&gt;                           OpenFabrics packet sequence starting number
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand outstanding atomic reads (must be
</span><br>
<span class="quotelev3">&gt;&gt; &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_mtu&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;3&quot;, data source: default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_mtu)
</span><br>
<span class="quotelev2">&gt;&gt;                           OpenFabrics MTU, in bytes (if not specified in
</span><br>
<span class="quotelev2">&gt;&gt; INI files).  Valid values are: 1=256 bytes,
</span><br>
<span class="quotelev2">&gt;&gt; 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev2">&gt;&gt;                           4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;3&quot;, data source: default value, deprecated, synonym
</span><br>
<span class="quotelev2">&gt;&gt; of:
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_mtu)
</span><br>
<span class="quotelev2">&gt;&gt;                           OpenFabrics MTU, in bytes (if not specified in
</span><br>
<span class="quotelev2">&gt;&gt; INI files).  Valid values are: 1=256 bytes,
</span><br>
<span class="quotelev2">&gt;&gt; 2=512 bytes, 3=1024 bytes,
</span><br>
<span class="quotelev2">&gt;&gt;                           4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;25&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand minimum &quot;receiver not ready&quot; timer,
</span><br>
<span class="quotelev2">&gt;&gt; in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand transmit timeout, plugged into
</span><br>
<span class="quotelev2">&gt;&gt; formula: 4.096 microseconds *
</span><br>
<span class="quotelev2">&gt;&gt; (2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;=
</span><br>
<span class="quotelev2">&gt;&gt;                           31)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand transmit retry count (must be &gt;= 0
</span><br>
<span class="quotelev2">&gt;&gt; and &lt;= 7)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand &quot;receiver not ready&quot; retry count;
</span><br>
<span class="quotelev2">&gt;&gt; applies *only* to SRQ/XRC queues.  PP queues
</span><br>
<span class="quotelev2">&gt;&gt; use RNR retry values of 0
</span><br>
<span class="quotelev2">&gt;&gt;                           because Open MPI performs software flow
</span><br>
<span class="quotelev2">&gt;&gt; control to guarantee that RNRs never occur
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 0 and &lt;= 7; 7 =
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;infinite&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand maximum pending RDMA destination
</span><br>
<span class="quotelev2">&gt;&gt; operations (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ib_service_level&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           InfiniBand service level (must be &gt;= 0 and &lt;=
</span><br>
<span class="quotelev2">&gt;&gt; 15)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Use RDMA for eager messages (-1 = use device
</span><br>
<span class="quotelev2">&gt;&gt; default, 0 = do not use eager RDMA, 1 = use
</span><br>
<span class="quotelev2">&gt;&gt; eager RDMA)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Use RDMA for short messages after this number
</span><br>
<span class="quotelev2">&gt;&gt; of messages are received from a given peer
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of peers allowed to use RDMA
</span><br>
<span class="quotelev2">&gt;&gt; for short messages (RDMA is used for all long
</span><br>
<span class="quotelev2">&gt;&gt; messages, except if
</span><br>
<span class="quotelev2">&gt;&gt;                           explicitly disabled, such as with the &quot;dr&quot;
</span><br>
<span class="quotelev2">&gt;&gt; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of RDMA buffers to allocate for small
</span><br>
<span class="quotelev2">&gt;&gt; messages(must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of BTLs to create for each InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; LID (must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of LIDs to use for each device
</span><br>
<span class="quotelev2">&gt;&gt; port (must be &gt;= 0, where 0 = use all
</span><br>
<span class="quotelev2">&gt;&gt; available)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_enable_apm_over_lmc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of alterative paths for each
</span><br>
<span class="quotelev2">&gt;&gt; device port (must be &gt;= -1, where 0 = disable
</span><br>
<span class="quotelev2">&gt;&gt; apm, -1 = all availible
</span><br>
<span class="quotelev2">&gt;&gt;                           alternative paths )
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_enable_apm_over_ports&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable alterative path migration (APM) over
</span><br>
<span class="quotelev2">&gt;&gt; different ports of the same device (must be &gt;=
</span><br>
<span class="quotelev2">&gt;&gt; 0, where 0 = disable APM
</span><br>
<span class="quotelev2">&gt;&gt;                           over ports , 1 = enable APM over ports of the
</span><br>
<span class="quotelev2">&gt;&gt; same device)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_use_async_event_thread&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, use the thread that will handle
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand asyncihronous events
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_buffer_alignment&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Prefered communication buffer alignment, in
</span><br>
<span class="quotelev2">&gt;&gt; bytes (must be &gt; 0 and power of two)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_use_message_coalescing&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Use message coalescing
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_cq_poll_ratio&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           how often poll high priority CQ versus low
</span><br>
<span class="quotelev2">&gt;&gt; priority CQ
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_poll_ratio&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           how often poll eager RDMA channel versus CQ
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_hp_cq_poll_per_progress&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           max number of completion events to process for
</span><br>
<span class="quotelev2">&gt;&gt; each call of BTL progress engine
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: information &quot;btl_openib_have_fork_support&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether the OpenFabrics stack supports
</span><br>
<span class="quotelev2">&gt;&gt; applications that invoke the &quot;fork()&quot; system
</span><br>
<span class="quotelev2">&gt;&gt; call or not (0 = no, 1 = yes).
</span><br>
<span class="quotelev2">&gt;&gt;                           Note that this value does NOT indicate whether
</span><br>
<span class="quotelev2">&gt;&gt; the system being run on supports &quot;fork()&quot; with
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics applications
</span><br>
<span class="quotelev2">&gt;&gt;                           or not.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_flags&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;310&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           BTL bit flags (general flags: SEND=1, PUT=2,
</span><br>
<span class="quotelev2">&gt;&gt; GET=4, SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev2">&gt;&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev2">&gt;&gt;                           only used by the &quot;dr&quot; PML (ignored by others):
</span><br>
<span class="quotelev2">&gt;&gt; ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_rndv_eager_limit&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Size (in bytes) of &quot;phase 1&quot; fragment sent for
</span><br>
<span class="quotelev2">&gt;&gt; all large messages (must be &gt;= 0 and &lt;=
</span><br>
<span class="quotelev2">&gt;&gt; eager_limit)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt; fragment of a long message when using the
</span><br>
<span class="quotelev2">&gt;&gt; pipeline protocol (must be &gt;=
</span><br>
<span class="quotelev2">&gt;&gt;                           1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_rdma_pipeline_send_length&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1048576&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev2">&gt;&gt; message (in bytes) when using the pipeline
</span><br>
<span class="quotelev2">&gt;&gt; protocol.  This part of the
</span><br>
<span class="quotelev2">&gt;&gt;                           message will be split into fragments of size
</span><br>
<span class="quotelev2">&gt;&gt; max_send_size and sent using send/receive
</span><br>
<span class="quotelev2">&gt;&gt; semantics (must be &gt;= 0; only
</span><br>
<span class="quotelev2">&gt;&gt;                           relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_rdma_pipeline_frag_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1048576&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum size (in bytes) of a single &quot;phase 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt; fragment from a long message when using the
</span><br>
<span class="quotelev2">&gt;&gt; pipeline protocol.  These
</span><br>
<span class="quotelev2">&gt;&gt;                           fragments will be sent using RDMA semantics
</span><br>
<span class="quotelev2">&gt;&gt; (must be &gt;= 1; only relevant when the PUT flag
</span><br>
<span class="quotelev2">&gt;&gt; is set)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_min_rdma_pipeline_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;262144&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Messages smaller than this size (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt; will not use the RDMA pipeline protocol.
</span><br>
<span class="quotelev2">&gt;&gt; Instead, they will be split into
</span><br>
<span class="quotelev2">&gt;&gt;                           fragments of max_send_size and sent using
</span><br>
<span class="quotelev2">&gt;&gt; send/receive semantics (must be &gt;=0, and is
</span><br>
<span class="quotelev2">&gt;&gt; automatically adjusted up to at
</span><br>
<span class="quotelev2">&gt;&gt;                           least
</span><br>
<span class="quotelev2">&gt;&gt; (eager_limit+btl_rdma_pipeline_send_length);
</span><br>
<span class="quotelev2">&gt;&gt; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;800&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev2">&gt;&gt; interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_latency&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Approximate latency of interconnect (must be
</span><br>
<span class="quotelev3">&gt;&gt; &gt;= 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Colon-delimited, comma delimited list of
</span><br>
<span class="quotelev2">&gt;&gt; receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_if_include&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of devices/ports to be
</span><br>
<span class="quotelev2">&gt;&gt; used (e.g. &quot;mthca0,mthca1:2&quot;; empty value
</span><br>
<span class="quotelev2">&gt;&gt; means to use all ports found).
</span><br>
<span class="quotelev2">&gt;&gt;                           Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of device/ports to be
</span><br>
<span class="quotelev2">&gt;&gt; excluded (empty value means to not exclude any
</span><br>
<span class="quotelev2">&gt;&gt; ports).  Mutually exclusive
</span><br>
<span class="quotelev2">&gt;&gt;                           with btl_openib_if_include.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ipaddr_include&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of IP Addresses to be
</span><br>
<span class="quotelev2">&gt;&gt; used (e.g. &quot;192.168.1.0/24&quot;).  Mutually
</span><br>
<span class="quotelev2">&gt;&gt; exclusive with
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_ipaddr_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_ipaddr_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of IP Addresses to be
</span><br>
<span class="quotelev2">&gt;&gt; excluded (e.g. &quot;192.168.1.0/24&quot;).  Mutually
</span><br>
<span class="quotelev2">&gt;&gt; exclusive with
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_openib_ipaddr_include.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_cpc_include&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Method used to select OpenFabrics connections
</span><br>
<span class="quotelev2">&gt;&gt; (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_cpc_exclude&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Method used to exclude OpenFabrics connections
</span><br>
<span class="quotelev2">&gt;&gt; (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_connect_oob_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;50&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           The selection method priority for oob
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_connect_xoob_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;60&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           The selection method priority for xoob
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;30&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           The selection method priority for rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_port&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           The selection method port for rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_connect_rdmacm_resolve_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           The timeout (in miliseconds) for address and
</span><br>
<span class="quotelev2">&gt;&gt; route resolution
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_connect_rdmacm_retry_count&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of times rdmacm will retry
</span><br>
<span class="quotelev2">&gt;&gt; route resolution
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_connect_rdmacm_reject_causes_connect_error&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           The drivers for some devices are buggy such
</span><br>
<span class="quotelev2">&gt;&gt; that an RDMA REJECT action may result in a
</span><br>
<span class="quotelev2">&gt;&gt; CONNECT_ERROR event instead of
</span><br>
<span class="quotelev2">&gt;&gt;                           a REJECTED event.  Setting this MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; to true tells Open MPI to treat CONNECT_ERROR
</span><br>
<span class="quotelev2">&gt;&gt; events on connections
</span><br>
<span class="quotelev2">&gt;&gt;                           where a REJECT is expected as a REJECT
</span><br>
<span class="quotelev2">&gt;&gt; (default: false)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_openib_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                           This parameter is used to turn on warning
</span><br>
<span class="quotelev2">&gt;&gt; messages when certain NICs are not used
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>| Teng Ma          Univ. of Tennessee |
<br>
| tma_at_[hidden]        Knoxville, TN |
<br>
| <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17224.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17222.php">Nathan Hjelm: "Re: [OMPI users] qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17221.php">Samuel K. Gutierrez: "Re: [OMPI users] qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17225.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
