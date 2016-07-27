<?
$subject_val = "Re: [hwloc-devel] python bindings testing help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  5 01:30:04 2013" -->
<!-- isoreceived="20130605053004" -->
<!-- sent="Wed, 05 Jun 2013 07:29:55 +0200" -->
<!-- isosent="20130605052955" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings testing help needed" -->
<!-- id="51AECCD3.9080606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51AE6428.5060901_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] python bindings testing help needed<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-05 01:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3794.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3797.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Reply:</strong> <a href="3797.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/06/2013 00:03, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 06/04/2013 03:52 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; (forgot to CC the list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 04/06/2013 10:48, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are some slightly fixed tests. cuda/cudart/nvml look good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel-mic looks good but I couldn't test on a real machine (I used XML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead), so the cpuset retrieving code wasn't tested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gl doesn't seem to find any GPU, but I don't know enough about Python to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug things. If you have a debugging version, I can test it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I think my regular expression code is broken in the gl stuff. Do you have to
</span><br>
<span class="quotelev1">&gt; have the hardware and drivers for GL, or could I use an XML file for testing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main thing I need to know is what the &quot;name&quot; of a GPU object really looks
</span><br>
<span class="quotelev1">&gt; like. Perhaps the output of the hwloc gl test on an appropriate system would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Here's a XML with cuda/nvml/gl objects. Just set HWLOC_XMLFILE to this
<br>
file in your environment. Note that most functions get_foo_cpuset()
<br>
won't work in this case (since they directly read cpuset from Linux
<br>
sysfs files).
<br>
<p>And the output of the tests are below.
<br>
<p>Brice
<br>
<p>$ ./cuda
<br>
cuDeviceGetCount found 3 devices
<br>
found OSDev cuda0
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x0003f03f for device 0
<br>
found OSDev cuda1
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x0003f03f for device 1
<br>
found OSDev cuda2
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x00fc0fc0 for device 2
<br>
<p>$ ./cudart
<br>
cudaGetDeviceCount found 3 devices
<br>
found OSDev cuda0
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x0003f03f for device 0
<br>
found OSDev cuda1
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x0003f03f for device 1
<br>
found OSDev cuda2
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x00fc0fc0 for device 2
<br>
<p>$ ./gl
<br>
&nbsp;0x0003f03f | NVIDIA Corporation GF100 [Tesla C2050 / C2070] 
<br>
&nbsp;0x0003f03f | NVIDIA Corporation GF100 [Tesla C2050 / C2070] 
<br>
&nbsp;0x0003f03f | Intel Corporation 82574L Gigabit Network Connection 
<br>
&nbsp;0x0003f03f | Intel Corporation 82574L Gigabit Network Connection 
<br>
&nbsp;0x0003f03f | Matrox Electronics Systems Ltd. MGA G200eW WPCM450 
<br>
&nbsp;0x0003f03f | Intel Corporation 82801JI (ICH10 Family) SATA AHCI Controller 
<br>
&nbsp;0x00fc0fc0 | NVIDIA Corporation GF100 [Tesla C2050 / C2070] 
<br>
GPU #0 (Tesla C2050) is connected to DISPLAY:0.0 
<br>
GPU #1 (Tesla C2050) is connected to DISPLAY:0.3 
<br>
GPU #2 (Tesla C2050) is connected to DISPLAY:0.2 
<br>
GPU :0.0 (PCI 0000:02:00.0) is connected to DISPLAY:0.0 close to 0x0003f03f
<br>
GPU :0.2 (PCI 0000:84:00.0) is connected to DISPLAY:0.2 close to 0x00fc0fc0
<br>
<p>$ ./nvml
<br>
nvmlDeviceGetCount found 3 devices
<br>
found OSDev nvml0
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x0003f03f for device 0
<br>
found OSDev nvml1
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x0003f03f for device 1
<br>
found OSDev nvml2
<br>
found OSDev model Tesla C2050
<br>
got cpuset 0x00fc0fc0 for device 2
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3793/attila_cuda_nvml_gl.xml">attila_cuda_nvml_gl.xml</a>
</ul>
<!-- attachment="attila_cuda_nvml_gl.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3794.php">Brice Goglin: "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>Previous message:</strong> <a href="3792.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] First plugin namespace issue report"</a>
<li><strong>In reply to:</strong> <a href="3791.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3797.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
<li><strong>Reply:</strong> <a href="3797.php">Guy Streeter: "Re: [hwloc-devel] python bindings testing help needed"</a>
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
