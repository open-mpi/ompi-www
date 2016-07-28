<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 11:06:39 2012" -->
<!-- isoreceived="20120315150639" -->
<!-- sent="Thu, 15 Mar 2012 16:06:31 +0100" -->
<!-- isosent="20120315150631" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203151606.32636.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201203121109.01542.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2012-03-15 11:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10714.php">Eugene Loh: "[OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>In reply to:</strong> <a href="10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We made a big step forward today!
<br>
<p>The used Kernel has a bug regarding to the shared L1 instruction cache in AMD 
<br>
Bulldozer processors:
<br>
See 
<br>
<a href="http://git.kernel.org/?p=linux/kernel/git/torvalds/linux-2.6.git;a=commitdiff;h=dfb09f9b7ab03fd367740e541a5caf830ed56726">http://git.kernel.org/?p=linux/kernel/git/torvalds/linux-2.6.git;a=commitdiff;h=dfb09f9b7ab03fd367740e541a5caf830ed56726</a> 
<br>
and
<br>
<a href="http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf">http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf</a>
<br>
<p>Until the Kernel is patched we disable the address-space layout randomization 
<br>
(ASLR) as described in the above PDF:
<br>
<p>&nbsp;&nbsp;&nbsp;$ sudo /sbin/sysctl -w kernel.randomize_va_space=0
<br>
<p>Therewith, NetPIPE results in ~0.5us latency when binding the processes for 
<br>
L2/L1I cache sharing (i.e. -bind-to-core).
<br>
<p>However, when binding the processes for exclusive L2/L1I caches (i.e. -cpus-
<br>
per-proc 2) we still get ~1.1us latency. I don't think that the upcoming 
<br>
kernel patch will help for this kind of process binding...
<br>
<p>Matthias
<br>
<p>On Monday 12 March 2012 11:09:01 Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; It's a SUSE Linux Enterprise Server 11 Service Pack 1 with kernel version
</span><br>
<span class="quotelev1">&gt; 2.6.32.49-0.3-default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday 09 March 2012 16:36:41 you wrote:
</span><br>
<span class="quotelev2">&gt; &gt; What OS are you using ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Joshua
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: Matthias Jurenz [mailto:matthias.jurenz_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, March 09, 2012 08:50 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Mora, Joshua
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just made an interesting observation:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When binding the processes to two neighboring cores (L2 sharing) NetPIPE
</span><br>
<span class="quotelev2">&gt; &gt; shows *sometimes* pretty good results: ~0.5us
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -mca btl sm,self -np 1 hwloc-bind -v core:0 ./NPmpi_ompi1.5.5 -u
</span><br>
<span class="quotelev2">&gt; &gt; 4 -n 100000 -p 0 : -np 1 hwloc-bind -v core:1 ./NPmpi_ompi1.5.5 -u 4 -n
</span><br>
<span class="quotelev2">&gt; &gt; 100000 -p 0 using object #0 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev2">&gt; &gt; using object #1 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev2">&gt; &gt; binding on cpu set 0x00000001
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev2">&gt; &gt; binding on cpu set 0x00000002
</span><br>
<span class="quotelev2">&gt; &gt; Using no perturbations
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 0: n035
</span><br>
<span class="quotelev2">&gt; &gt; Using no perturbations
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1: n035
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   0:       1 bytes 100000 times --&gt;      6.01 Mbps in       1.27 usec
</span><br>
<span class="quotelev2">&gt; &gt;   1:       2 bytes 100000 times --&gt;     12.04 Mbps in       1.27 usec
</span><br>
<span class="quotelev2">&gt; &gt;   2:       3 bytes 100000 times --&gt;     18.07 Mbps in       1.27 usec
</span><br>
<span class="quotelev2">&gt; &gt;   3:       4 bytes 100000 times --&gt;     24.13 Mbps in       1.26 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -mca btl sm,self -np 1 hwloc-bind -v core:0 ./NPmpi_ompi1.5.5 -u
</span><br>
<span class="quotelev2">&gt; &gt; 4 -n 100000 -p 0 : -np 1 hwloc-bind -v core:1 ./NPmpi_ompi1.5.5 -u 4 -n
</span><br>
<span class="quotelev2">&gt; &gt; 100000 -p 0 using object #0 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000001 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev2">&gt; &gt; binding on cpu set 0x00000001
</span><br>
<span class="quotelev2">&gt; &gt; using object #1 depth 6 below cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; adding 0x00000002 to 0x0
</span><br>
<span class="quotelev2">&gt; &gt; assuming the command starts at ./NPmpi_ompi1.5.5
</span><br>
<span class="quotelev2">&gt; &gt; binding on cpu set 0x00000002
</span><br>
<span class="quotelev2">&gt; &gt; Using no perturbations
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 0: n035
</span><br>
<span class="quotelev2">&gt; &gt; Using no perturbations
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1: n035
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   0:       1 bytes 100000 times --&gt;     12.96 Mbps in       0.59 usec
</span><br>
<span class="quotelev2">&gt; &gt;   1:       2 bytes 100000 times --&gt;     25.78 Mbps in       0.59 usec
</span><br>
<span class="quotelev2">&gt; &gt;   2:       3 bytes 100000 times --&gt;     38.62 Mbps in       0.59 usec
</span><br>
<span class="quotelev2">&gt; &gt;   3:       4 bytes 100000 times --&gt;     52.88 Mbps in       0.58 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can reproduce that approximately every tenth run.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When binding the processes for exclusive L2 caches (e.g. core 0 and 2) I
</span><br>
<span class="quotelev2">&gt; &gt; get constant latencies ~1.1us
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Monday 05 March 2012 09:52:39 Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here the SM BTL parameters:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ompi_info --param btl sm
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value) Verbosity level of the BTL framework
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl&quot; (current value: &lt;self,sm,openib&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [/sw/atlas/libraries/openmpi/1.5.5rc3/x86_64/etc/openmpi-mca-params.con
</span><br>
<span class="quotelev3">&gt; &gt; &gt; f] ) Default selection set of components for the btl framework (&lt;none&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; means use all components that can be found)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value) Whether this component supports the knem Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kernel module or not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_use_knem&quot; (current value: &lt;-1&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value) Whether knem support is desired or not (negative = try
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to enable knem support, but continue even if it is not available, 0 =
</span><br>
<span class="quotelev3">&gt; &gt; &gt; do not enable knem support, positive = try to enable knem support and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail if it is not available)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current value: &lt;0&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value) Minimum message size (in bytes) to use the knem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; DMA mode; ignored if knem does not support DMA mode (0 = do not use the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; knem DMA mode) MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (current value: &lt;0&gt;, data source: default value) Max number of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; simultaneous ongoing knem operations to support (0 = do everything
</span><br>
<span class="quotelev3">&gt; &gt; &gt; synchronously, which probably gives the best large message latency; &gt;0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; means to do all operations asynchronously, which supports better
</span><br>
<span class="quotelev3">&gt; &gt; &gt; overlap for simultaneous large message sends)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &lt;8&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &lt;-1&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &lt;64&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &lt;-1&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &lt;sm&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value: &lt;4096&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current value: &lt;120&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &lt;0&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &lt;65535&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value) BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_flags&quot; (current value: &lt;5&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value) BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only
</span><br>
<span class="quotelev3">&gt; &gt; &gt; used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; others): FAILOVER_SUPPORT=512) MCA btl: parameter
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;btl_sm_rndv_eager_limit&quot; (current value: &lt;4096&gt;, data source: default
</span><br>
<span class="quotelev3">&gt; &gt; &gt; value) Size (in bytes) of &quot;phase 1&quot; fragment sent for all large
</span><br>
<span class="quotelev3">&gt; &gt; &gt; messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value) Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (must be &gt;= 1). MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current
</span><br>
<span class="quotelev3">&gt; &gt; &gt; value: &lt;32768&gt;, data source: default value) Maximum size (in bytes) of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a single &quot;phase 2&quot; fragment of a long message when using the pipeline
</span><br>
<span class="quotelev3">&gt; &gt; &gt; protocol (must be &gt;= 1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value: &lt;9000&gt;, data
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source: default value) Approximate maximum bandwidth of interconnect(0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; = auto-detect value at run-time [not supported in all BTL modules], &gt;=
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value) Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default value)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;1&gt;, data source: default value) This parameter is used to turn on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; warning messages when certain NICs are not used
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Friday 02 March 2012 16:23:32 George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Please do a &quot;ompi_info --param btl sm&quot; on your environment. The
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; lazy_free direct the internals of the SM BTL not to release the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; memory fragments used to communicate until the lazy limit is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; reached. The default value was deemed as reasonable a while back
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; when the number of default fragments was large. Lately there were
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; some patches to reduce the memory footprint of the SM BTL and these
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; might have lowered the available fragments to a limit where the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; default value for the lazy_free is now too large.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   george.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mar 2, 2012, at 10:08 , Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; In thanks to the OTPO tool, I figured out that setting the MCA
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; parameter btl_sm_fifo_lazy_free to 1 (default is 120) improves the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; latency significantly: 0,88&#181;s
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; But somehow I get the feeling that this doesn't eliminate the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; actual problem...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Matthias
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Friday 02 March 2012 15:37:03 Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; On Friday 02 March 2012 14:58:45 Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; Ok.  Good that there's no oversubscription bug, at least.  :-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; Did you see my off-list mail to you yesterday about building with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; an external copy of hwloc 1.4 to see if that helps?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; Yes, I did - I answered as well. Our mail server seems to be
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; something busy today...
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; Just for the record: Using hwloc-1.4 makes no difference.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt; On Mar 2, 2012, at 8:26 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; To exclude a possible bug within the LSF component, I rebuilt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Open MPI without support for LSF (--without-lsf).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; -&gt; It makes no difference - the latency is still bad: ~1.1us.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; On Friday 02 March 2012 13:50:13 Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; SORRY, it was obviously a big mistake by me. :-(
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.5.5 was built with LSF support, so when starting an
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; LSF job it's necessary to request at least the number of
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; tasks/cores as used for the subsequent mpirun command. That was
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; not the case - I forgot the bsub's '-n' option to specify the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; number of task, so only *one* task/core was requested.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.4.5 was built *without* LSF support, so the supposed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; misbehavior could not happen with it.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; In short, there is no bug in Open MPI 1.5.x regarding to the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; detection of oversubscription. Sorry for any confusion!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; result as I get with Open MPI v1.5.x using
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; mpi_yield_when_idle=0. So I think there is a bug in Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; (v1.5.4 and v1.5.5rc2) regarding to the automatic performance
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; mode selection.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10714.php">Eugene Loh: "[OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>In reply to:</strong> <a href="10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
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
