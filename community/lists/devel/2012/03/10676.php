<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 03:52:46 2012" -->
<!-- isoreceived="20120305085246" -->
<!-- sent="Mon, 5 Mar 2012 09:52:39 +0100" -->
<!-- isosent="20120305085239" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203050952.40040.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D44F50AE-6504-4ACD-9604-504DE383E4C9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 03:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10677.php">Y.MATSUMOTO: "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10675.php">Eugene Loh: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>In reply to:</strong> <a href="10665.php">George Bosilca: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here the SM BTL parameters:
<br>
<p>$ ompi_info --param btl sm
<br>
MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &lt;0&gt;, data source: 
<br>
default value) Verbosity level of the BTL framework
<br>
MCA btl: parameter &quot;btl&quot; (current value: &lt;self,sm,openib&gt;, data source: file 
<br>
[/sw/atlas/libraries/openmpi/1.5.5rc3/x86_64/etc/openmpi-mca-params.conf]) 
<br>
Default selection set of components for the btl framework (&lt;none&gt; means use 
<br>
all components that can be found)
<br>
MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data source: 
<br>
default value) Whether this component supports the knem Linux kernel module or 
<br>
not
<br>
MCA btl: parameter &quot;btl_sm_use_knem&quot; (current value: &lt;-1&gt;, data source: 
<br>
default value) Whether knem support is desired or not (negative = try to 
<br>
enable knem support, but continue even if it is not available, 0 = do not 
<br>
enable knem support, positive = try to enable knem support and fail if it is 
<br>
not available)
<br>
MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current value: &lt;0&gt;, data source: 
<br>
default value) Minimum message size (in bytes) to use the knem DMA mode; 
<br>
ignored if knem does not support DMA mode (0 = do not use the knem DMA mode)
<br>
MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot; (current value: &lt;0&gt;, data 
<br>
source: default value) Max number of simultaneous ongoing knem operations to 
<br>
support (0 = do everything synchronously, which probably gives the best large 
<br>
message latency; &gt;0 means to do all operations asynchronously, which supports 
<br>
better overlap for simultaneous large message sends)
<br>
MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &lt;8&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &lt;-1&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &lt;64&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &lt;-1&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &lt;sm&gt;, data source: default 
<br>
value)
<br>
MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value: &lt;4096&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &lt;1&gt;, data source: default 
<br>
value)
<br>
MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current value: &lt;120&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &lt;0&gt;, data source: 
<br>
default value)
<br>
MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &lt;65535&gt;, data source: 
<br>
default value) BTL exclusivity (must be &gt;= 0)
<br>
MCA btl: parameter &quot;btl_sm_flags&quot; (current value: &lt;5&gt;, data source: default 
<br>
value) BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, 
<br>
RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML 
<br>
(ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used 
<br>
by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
<br>
MCA btl: parameter &quot;btl_sm_rndv_eager_limit&quot; (current value: &lt;4096&gt;, data 
<br>
source: default value) Size (in bytes) of &quot;phase 1&quot; fragment sent for all 
<br>
large messages (must be &gt;= 0 and &lt;= eager_limit)
<br>
MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data source: 
<br>
default value) Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
<br>
MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current value: &lt;32768&gt;, data 
<br>
source: default value) Maximum size (in bytes) of a single &quot;phase 2&quot; fragment 
<br>
of a long message when using the pipeline protocol (must be &gt;= 1)
<br>
MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value: &lt;9000&gt;, data source: 
<br>
default value) Approximate maximum bandwidth of interconnect(0 = auto-detect 
<br>
value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in 
<br>
Mbps)
<br>
MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &lt;1&gt;, data source: default 
<br>
value) Approximate latency of interconnect (must be &gt;= 0)
<br>
MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &lt;0&gt;, data source: default 
<br>
value)
<br>
MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &lt;1&gt;, data 
<br>
source: default value) This parameter is used to turn on warning messages when 
<br>
certain NICs are not used
<br>
<p>Matthias
<br>
<p>On Friday 02 March 2012 16:23:32 George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Please do a &quot;ompi_info --param btl sm&quot; on your environment. The lazy_free
</span><br>
<span class="quotelev1">&gt; direct the internals of the SM BTL not to release the memory fragments
</span><br>
<span class="quotelev1">&gt; used to communicate until the lazy limit is reached. The default value was
</span><br>
<span class="quotelev1">&gt; deemed as reasonable a while back when the number of default fragments was
</span><br>
<span class="quotelev1">&gt; large. Lately there were some patches to reduce the memory footprint of
</span><br>
<span class="quotelev1">&gt; the SM BTL and these might have lowered the available fragments to a limit
</span><br>
<span class="quotelev1">&gt; where the default value for the lazy_free is now too large.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2012, at 10:08 , Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In thanks to the OTPO tool, I figured out that setting the MCA parameter
</span><br>
<span class="quotelev2">&gt; &gt; btl_sm_fifo_lazy_free to 1 (default is 120) improves the latency
</span><br>
<span class="quotelev2">&gt; &gt; significantly: 0,88&#181;s
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But somehow I get the feeling that this doesn't eliminate the actual
</span><br>
<span class="quotelev2">&gt; &gt; problem...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 02 March 2012 15:37:03 Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Friday 02 March 2012 14:58:45 Jeffrey Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ok.  Good that there's no oversubscription bug, at least.  :-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did you see my off-list mail to you yesterday about building with an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; external copy of hwloc 1.4 to see if that helps?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, I did - I answered as well. Our mail server seems to be something
</span><br>
<span class="quotelev3">&gt; &gt;&gt; busy today...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just for the record: Using hwloc-1.4 makes no difference.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 2, 2012, at 8:26 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To exclude a possible bug within the LSF component, I rebuilt Open MPI
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; without support for LSF (--without-lsf).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -&gt; It makes no difference - the latency is still bad: ~1.1us.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Friday 02 March 2012 13:50:13 Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SORRY, it was obviously a big mistake by me. :-(
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.5.5 was built with LSF support, so when starting an LSF
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; job it's necessary to request at least the number of tasks/cores as
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; used for the subsequent mpirun command. That was not the case - I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; forgot the bsub's '-n' option to specify the number of task, so only
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *one* task/core was requested.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.4.5 was built *without* LSF support, so the supposed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; misbehavior could not happen with it.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In short, there is no bug in Open MPI 1.5.x regarding to the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; detection of oversubscription. Sorry for any confusion!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same result as I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; get with Open MPI v1.5.x using mpi_yield_when_idle=0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; So I think there is a bug in Open MPI (v1.5.4 and v1.5.5rc2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; regarding to the automatic performance mode selection.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10677.php">Y.MATSUMOTO: "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10675.php">Eugene Loh: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>In reply to:</strong> <a href="10665.php">George Bosilca: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
