<?
$subject_val = "Re: [OMPI users] TCP Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 05:56:13 2008" -->
<!-- isoreceived="20080819095613" -->
<!-- sent="Tue, 19 Aug 2008 11:57:08 +0200" -->
<!-- isosent="20080819095708" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Bandwidth" -->
<!-- id="48AA98F4.6080805_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD2623C6-C2CA-4772-9C78-5AAEA81AF49C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Bandwidth<br>
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-19 05:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="6388.php">Robert Kubrick: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>In reply to:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1"> &gt; Btw, can you run the Netpipe benchmark on this configuration please ?
</span><br>
<span class="quotelev1"> &gt; Once compiled with MPI support and once with TCP. This might give us
</span><br>
<span class="quotelev1"> &gt; more equitable details (same benchmark).
</span><br>
<p>NPmpi and NPtcp belong to Netpipe but this doesn't mean that they do the same ;-). Anyway, here the 
<br>
results:
<br>
<p>mpirun --hostfile my_hostfile_netpipe -mca btl_tcp_if_include eth2 -np 2 -nolocal NPmpi -l 20971520 
<br>
-u 209715200
<br>
0: chel02
<br>
1: chel03
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;&nbsp;0: 20971517 bytes      3 times --&gt;   6630.84 Mbps in   24129.67 usec
<br>
&nbsp;&nbsp;&nbsp;1: 20971520 bytes      3 times --&gt;   6631.67 Mbps in   24126.65 usec
<br>
&nbsp;&nbsp;&nbsp;2: 20971523 bytes      3 times --&gt;   6649.08 Mbps in   24063.47 usec
<br>
&nbsp;&nbsp;&nbsp;3: 31457277 bytes      3 times --&gt;   6680.40 Mbps in   35925.98 usec
<br>
&nbsp;&nbsp;&nbsp;4: 31457280 bytes      3 times --&gt;   6667.34 Mbps in   35996.36 usec
<br>
&nbsp;&nbsp;&nbsp;5: 31457283 bytes      3 times --&gt;   6667.53 Mbps in   35995.32 usec
<br>
&nbsp;&nbsp;&nbsp;6: 41943037 bytes      3 times --&gt;   6708.97 Mbps in   47697.35 usec
<br>
&nbsp;&nbsp;&nbsp;7: 41943040 bytes      3 times --&gt;   6700.24 Mbps in   47759.49 usec
<br>
&nbsp;&nbsp;&nbsp;8: 41943043 bytes      3 times --&gt;   6698.70 Mbps in   47770.50 usec
<br>
&nbsp;&nbsp;&nbsp;9: 62914557 bytes      3 times --&gt;   6724.57 Mbps in   71380.02 usec
<br>
&nbsp;&nbsp;10: 62914560 bytes      3 times --&gt;   6726.09 Mbps in   71363.85 usec
<br>
&nbsp;&nbsp;11: 62914563 bytes      3 times --&gt;   6728.26 Mbps in   71340.84 usec
<br>
&nbsp;&nbsp;12: 83886077 bytes      3 times --&gt;   6736.77 Mbps in   95000.98 usec
<br>
&nbsp;&nbsp;13: 83886080 bytes      3 times --&gt;   6741.62 Mbps in   94932.68 usec
<br>
&nbsp;&nbsp;14: 83886083 bytes      3 times --&gt;   6743.01 Mbps in   94913.16 usec
<br>
&nbsp;&nbsp;15: 125829117 bytes      3 times --&gt;   6765.21 Mbps in  141902.49 usec
<br>
&nbsp;&nbsp;16: 125829120 bytes      3 times --&gt;   6764.36 Mbps in  141920.33 usec
<br>
&nbsp;&nbsp;17: 125829123 bytes      3 times --&gt;   6765.18 Mbps in  141903.00 usec
<br>
&nbsp;&nbsp;18: 167772157 bytes      3 times --&gt;   6767.28 Mbps in  189145.53 usec
<br>
&nbsp;&nbsp;19: 167772160 bytes      3 times --&gt;   6775.90 Mbps in  188904.84 usec
<br>
&nbsp;&nbsp;20: 167772163 bytes      3 times --&gt;   6768.77 Mbps in  189103.80 usec
<br>
<p>NPtcp -h 192.168.10.2 -l 20971520 -u 209715200
<br>
Send and receive buffers are 107374182 and 107374182 bytes
<br>
(A bug in Linux doubles the requested buffer sizes)
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;&nbsp;0: 20971517 bytes      3 times --&gt;   8565.70 Mbps in   18679.14 usec
<br>
&nbsp;&nbsp;&nbsp;1: 20971520 bytes      3 times --&gt;   8561.11 Mbps in   18689.16 usec
<br>
&nbsp;&nbsp;&nbsp;2: 20971523 bytes      3 times --&gt;   8570.28 Mbps in   18669.17 usec
<br>
&nbsp;&nbsp;&nbsp;3: 31457277 bytes      3 times --&gt;   8554.48 Mbps in   28055.47 usec
<br>
&nbsp;&nbsp;&nbsp;4: 31457280 bytes      3 times --&gt;   8556.30 Mbps in   28049.51 usec
<br>
&nbsp;&nbsp;&nbsp;5: 31457283 bytes      3 times --&gt;   8566.58 Mbps in   28015.85 usec
<br>
&nbsp;&nbsp;&nbsp;6: 41943037 bytes      3 times --&gt;   8560.95 Mbps in   37379.03 usec
<br>
&nbsp;&nbsp;&nbsp;7: 41943040 bytes      3 times --&gt;   8554.36 Mbps in   37407.84 usec
<br>
&nbsp;&nbsp;&nbsp;8: 41943043 bytes      3 times --&gt;   8558.02 Mbps in   37391.82 usec
<br>
&nbsp;&nbsp;&nbsp;9: 62914557 bytes      3 times --&gt;   8546.83 Mbps in   56161.17 usec
<br>
&nbsp;&nbsp;10: 62914560 bytes      3 times --&gt;   8549.41 Mbps in   56144.20 usec
<br>
&nbsp;&nbsp;11: 62914563 bytes      3 times --&gt;   8561.18 Mbps in   56067.03 usec
<br>
&nbsp;&nbsp;12: 83886077 bytes      3 times --&gt;   8565.96 Mbps in   74714.34 usec
<br>
&nbsp;&nbsp;13: 83886080 bytes      3 times --&gt;   8563.17 Mbps in   74738.66 usec
<br>
&nbsp;&nbsp;14: 83886083 bytes      3 times --&gt;   8549.71 Mbps in   74856.32 usec
<br>
&nbsp;&nbsp;15: 125829117 bytes      3 times --&gt;   8580.90 Mbps in  111876.33 usec
<br>
&nbsp;&nbsp;16: 125829120 bytes      3 times --&gt;   8574.20 Mbps in  111963.83 usec
<br>
&nbsp;&nbsp;17: 125829123 bytes      3 times --&gt;   8572.41 Mbps in  111987.19 usec
<br>
&nbsp;&nbsp;18: 167772157 bytes      3 times --&gt;   8601.10 Mbps in  148818.17 usec
<br>
&nbsp;&nbsp;19: 167772160 bytes      3 times --&gt;   8602.33 Mbps in  148796.84 usec
<br>
&nbsp;&nbsp;20: 167772163 bytes      3 times --&gt;   8595.99 Mbps in  148906.67 usec
<br>
<p>Let us be optimistic and say ~1075 MB/s with NPtcp and ~850 MB/s with NPmpi. Vaguely the same 
<br>
differences but lower values.
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1"> &gt; There are two parameters hat can slightly improve the
</span><br>
<span class="quotelev1"> &gt; behavior: btl_tcp_rdma_pipeline_send_length and
</span><br>
<span class="quotelev1"> &gt; btl_tcp_min_rdma_pipeline_size.
</span><br>
<p>These two parameters doesn't exist. Here the result of ompi_info --param btl tcp:
<br>
<p>MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose debug is output
<br>
MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the btl framework (&lt;none&gt; means &quot;use all components 		that 
<br>
can be found&quot;)
<br>
MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the btl framework (0 = no verbosity)
<br>
MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;)
<br>
MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;393216&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;393216&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
<br>
MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This parameter is used to turn on warning messages when certain NICs are not used
<br>
<p>The buffer sizes are already &quot;tuned&quot;. Btw, what is optimal for the send values 
<br>
(&quot;btl_tcp_min_send_size&quot; and &quot;btl_tcp_max_send_size&quot;)? A high value (just few segmentations on MPI 
<br>
level) or a low value? We changed it both ways, but it had nearly no effects.
<br>
<p><p>Jon Mason wrote:
<br>
<p><span class="quotelev1"> &gt; That script should optimally tune your NIC.  If you are still not
</span><br>
<span class="quotelev1"> &gt; satisfied with the performance, Chelsio should have people available to
</span><br>
<span class="quotelev1"> &gt; help.  Since the TOE module is not opensource, there is not much anyone
</span><br>
<span class="quotelev1"> &gt; else can do.  You can try tweaking any module parms that are exposed.
</span><br>
<span class="quotelev1"> &gt; Checkout the modinfo output for that module.
</span><br>
<p>The NIC is well tuned, as the results on TCP-level show. There seems to be a bottleneck in Open MPI.
<br>
<p><p>Jon Mason wrote:
<br>
<p><span class="quotelev1"> &gt; You can also try the new iWARP support in OMPI 1.3.  The perf for that
</span><br>
<span class="quotelev1"> &gt; should be much better.
</span><br>
<p>Yes i will try it, but i can't offer a unstable version of Open MPI in a productive system. So still 
<br>
it's not released official the users have to work with 1.2.6
<br>
<p><p>Steve Wise wrote:
<br>
<p><span class="quotelev1"> &gt; So OMPI experts, what is the overhead you see on other TCP links for
</span><br>
<span class="quotelev1"> &gt; OMPI BW tests vs native sockets TCP BW tests?
</span><br>
<p>This is exactly what i need to know :)
<br>
<p>Thanks a lot for the interest and the hints by now
<br>
<p>Andy
<br>
<p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
Phone:    (+49) 351/463-38783
Fax:      (+49) 351/463-38245
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6390.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="6388.php">Robert Kubrick: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>In reply to:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<!-- nextthread="start" -->
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
