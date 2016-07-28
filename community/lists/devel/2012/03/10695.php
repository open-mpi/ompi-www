<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 09:50:37 2012" -->
<!-- isoreceived="20120309145037" -->
<!-- sent="Fri, 9 Mar 2012 15:50:29 +0100" -->
<!-- isosent="20120309145029" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203091550.30559.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201203050952.40040.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2012-03-09 09:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>In reply to:</strong> <a href="10676.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just made an interesting observation:
<br>
<p>When binding the processes to two neighboring cores (L2 sharing) NetPIPE shows 
<br>
*sometimes* pretty good results: ~0.5us
<br>
<p>$ mpirun -mca btl sm,self -np 1 hwloc-bind -v core:0 ./NPmpi_ompi1.5.5 -u 4 -n 
<br>
100000 -p 0 : -np 1 hwloc-bind -v core:1 ./NPmpi_ompi1.5.5 -u 4 -n 100000 -p 0
<br>
using object #0 depth 6 below cpuset 0xffffffff,0xffffffff
<br>
using object #1 depth 6 below cpuset 0xffffffff,0xffffffff
<br>
adding 0x00000001 to 0x0
<br>
adding 0x00000001 to 0x0
<br>
assuming the command starts at ./NPmpi_ompi1.5.5
<br>
binding on cpu set 0x00000001
<br>
adding 0x00000002 to 0x0
<br>
adding 0x00000002 to 0x0
<br>
assuming the command starts at ./NPmpi_ompi1.5.5
<br>
binding on cpu set 0x00000002
<br>
Using no perturbations
<br>
<p>0: n035
<br>
Using no perturbations
<br>
<p>1: n035
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 100000 times --&gt;      6.01 Mbps in       1.27 usec
<br>
&nbsp;&nbsp;1:       2 bytes 100000 times --&gt;     12.04 Mbps in       1.27 usec
<br>
&nbsp;&nbsp;2:       3 bytes 100000 times --&gt;     18.07 Mbps in       1.27 usec
<br>
&nbsp;&nbsp;3:       4 bytes 100000 times --&gt;     24.13 Mbps in       1.26 usec
<br>
<p>$ mpirun -mca btl sm,self -np 1 hwloc-bind -v core:0 ./NPmpi_ompi1.5.5 -u 4 -n 
<br>
100000 -p 0 : -np 1 hwloc-bind -v core:1 ./NPmpi_ompi1.5.5 -u 4 -n 100000 -p 0
<br>
using object #0 depth 6 below cpuset 0xffffffff,0xffffffff
<br>
adding 0x00000001 to 0x0
<br>
adding 0x00000001 to 0x0
<br>
assuming the command starts at ./NPmpi_ompi1.5.5
<br>
binding on cpu set 0x00000001
<br>
using object #1 depth 6 below cpuset 0xffffffff,0xffffffff
<br>
adding 0x00000002 to 0x0
<br>
adding 0x00000002 to 0x0
<br>
assuming the command starts at ./NPmpi_ompi1.5.5
<br>
binding on cpu set 0x00000002
<br>
Using no perturbations
<br>
<p>0: n035
<br>
Using no perturbations
<br>
<p>1: n035
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 100000 times --&gt;     12.96 Mbps in       0.59 usec
<br>
&nbsp;&nbsp;1:       2 bytes 100000 times --&gt;     25.78 Mbps in       0.59 usec
<br>
&nbsp;&nbsp;2:       3 bytes 100000 times --&gt;     38.62 Mbps in       0.59 usec
<br>
&nbsp;&nbsp;3:       4 bytes 100000 times --&gt;     52.88 Mbps in       0.58 usec
<br>
<p>I can reproduce that approximately every tenth run.
<br>
<p>When binding the processes for exclusive L2 caches (e.g. core 0 and 2) I get 
<br>
constant latencies ~1.1us
<br>
<p>Matthias
<br>
<p>On Monday 05 March 2012 09:52:39 Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; Here the SM BTL parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info --param btl sm
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value) Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl&quot; (current value: &lt;self,sm,openib&gt;, data source:
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; [/sw/atlas/libraries/openmpi/1.5.5rc3/x86_64/etc/openmpi-mca-params.conf])
</span><br>
<span class="quotelev1">&gt; Default selection set of components for the btl framework (&lt;none&gt; means
</span><br>
<span class="quotelev1">&gt; use all components that can be found)
</span><br>
<span class="quotelev1">&gt; MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value) Whether this component supports the knem Linux kernel module
</span><br>
<span class="quotelev1">&gt; or not
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_use_knem&quot; (current value: &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value) Whether knem support is desired or not (negative = try to
</span><br>
<span class="quotelev1">&gt; enable knem support, but continue even if it is not available, 0 = do not
</span><br>
<span class="quotelev1">&gt; enable knem support, positive = try to enable knem support and fail if it
</span><br>
<span class="quotelev1">&gt; is not available)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value) Minimum message size (in bytes) to use the knem DMA mode;
</span><br>
<span class="quotelev1">&gt; ignored if knem does not support DMA mode (0 = do not use the knem DMA
</span><br>
<span class="quotelev1">&gt; mode) MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;0&gt;, data source: default value) Max number of simultaneous ongoing knem
</span><br>
<span class="quotelev1">&gt; operations to support (0 = do everything synchronously, which probably
</span><br>
<span class="quotelev1">&gt; gives the best large message latency; &gt;0 means to do all operations
</span><br>
<span class="quotelev1">&gt; asynchronously, which supports better overlap for simultaneous large
</span><br>
<span class="quotelev1">&gt; message sends)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &lt;8&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &lt;sm&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value: &lt;4096&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current value: &lt;120&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &lt;65535&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value) BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_flags&quot; (current value: &lt;5&gt;, data source: default
</span><br>
<span class="quotelev1">&gt; value) BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8,
</span><br>
<span class="quotelev1">&gt; RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML
</span><br>
<span class="quotelev1">&gt; (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt; used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_rndv_eager_limit&quot; (current value: &lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value) Size (in bytes) of &quot;phase 1&quot; fragment sent for all
</span><br>
<span class="quotelev1">&gt; large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt; source: default value) Maximum size (in bytes) of &quot;short&quot; messages (must
</span><br>
<span class="quotelev1">&gt; be &gt;= 1). MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;32768&gt;, data source: default value) Maximum size (in bytes) of a single
</span><br>
<span class="quotelev1">&gt; &quot;phase 2&quot; fragment of a long message when using the pipeline protocol
</span><br>
<span class="quotelev1">&gt; (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value: &lt;9000&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value) Approximate maximum bandwidth of interconnect(0 =
</span><br>
<span class="quotelev1">&gt; auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 =
</span><br>
<span class="quotelev1">&gt; bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value) Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &lt;1&gt;,
</span><br>
<span class="quotelev1">&gt; data source: default value) This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday 02 March 2012 16:23:32 George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Please do a &quot;ompi_info --param btl sm&quot; on your environment. The lazy_free
</span><br>
<span class="quotelev2">&gt; &gt; direct the internals of the SM BTL not to release the memory fragments
</span><br>
<span class="quotelev2">&gt; &gt; used to communicate until the lazy limit is reached. The default value
</span><br>
<span class="quotelev2">&gt; &gt; was deemed as reasonable a while back when the number of default
</span><br>
<span class="quotelev2">&gt; &gt; fragments was large. Lately there were some patches to reduce the memory
</span><br>
<span class="quotelev2">&gt; &gt; footprint of the SM BTL and these might have lowered the available
</span><br>
<span class="quotelev2">&gt; &gt; fragments to a limit where the default value for the lazy_free is now
</span><br>
<span class="quotelev2">&gt; &gt; too large.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 2, 2012, at 10:08 , Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In thanks to the OTPO tool, I figured out that setting the MCA
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parameter btl_sm_fifo_lazy_free to 1 (default is 120) improves the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; latency significantly: 0,88&#181;s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But somehow I get the feeling that this doesn't eliminate the actual
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Friday 02 March 2012 15:37:03 Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Friday 02 March 2012 14:58:45 Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Ok.  Good that there's no oversubscription bug, at least.  :-)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Did you see my off-list mail to you yesterday about building with an
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; external copy of hwloc 1.4 to see if that helps?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Yes, I did - I answered as well. Our mail server seems to be something
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; busy today...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Just for the record: Using hwloc-1.4 makes no difference.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Mar 2, 2012, at 8:26 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; To exclude a possible bug within the LSF component, I rebuilt Open
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; MPI without support for LSF (--without-lsf).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; -&gt; It makes no difference - the latency is still bad: ~1.1us.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; On Friday 02 March 2012 13:50:13 Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; SORRY, it was obviously a big mistake by me. :-(
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.5.5 was built with LSF support, so when starting an LSF
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; job it's necessary to request at least the number of tasks/cores as
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; used for the subsequent mpirun command. That was not the case - I
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; forgot the bsub's '-n' option to specify the number of task, so
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; only *one* task/core was requested.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Open MPI 1.4.5 was built *without* LSF support, so the supposed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; misbehavior could not happen with it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; In short, there is no bug in Open MPI 1.5.x regarding to the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; detection of oversubscription. Sorry for any confusion!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same result as
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I get with Open MPI v1.5.x using mpi_yield_when_idle=0.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; So I think there is a bug in Open MPI (v1.5.4 and v1.5.5rc2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; regarding to the automatic performance mode selection.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>In reply to:</strong> <a href="10676.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
