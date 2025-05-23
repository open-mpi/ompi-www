<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div><div class="header">
  <div class="headertitle"><div class="title">I/O Devices</div></div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p>hwloc usually manipulates processing units and memory but it can also discover I/O devices and report their locality as well. This is useful for placing I/O intensive applications on cores near the I/O devices they use, or for gathering information about all platform components.</p>
<h1><a class="anchor" id="iodevices_enabling"></a>
Enabling and requirements</h1>
<p>I/O discovery is disabled by default (except in lstopo) for performance reasons. It can be enabled by changing the filtering of I/O object types to <code><a class="el" href="a00149.php#gga9a5a1f0140cd1952544477833733195ba63fd24954e18c83ff7eae9588759adb5" title="Only keep likely-important objects of the given type.">HWLOC_TYPE_FILTER_KEEP_IMPORTANT</a></code> or <code><a class="el" href="a00149.php#gga9a5a1f0140cd1952544477833733195bafda7b59e6810dfe778d8f9a4cc1e350e" title="Keep all objects of this type.">HWLOC_TYPE_FILTER_KEEP_ALL</a></code> before loading the topology, for instance with <code><a class="el" href="a00149.php#ga0ab38705357bc1203abe829da8a12ad3" title="Set the filtering for all I/O object types.">hwloc_topology_set_io_types_filter()</a></code>.</p>
<p>Note that I/O discovery requires significant help from the operating system. The pciaccess library (the development package is usually <code>libpciaccess-devel</code> or <code>libpciaccess-dev</code>) is needed to fully detect PCI devices and bridges/switches. On Linux, PCI discovery may still be performed even if <code>libpciaccess</code> cannot be used. But it misses PCI device names. Moreover, some operating systems require privileges for probing PCI devices, see <a class="el" href="a00358.php#faq_privileged">Does hwloc require privileged access?</a> for details.</p>
<p>The actual locality of I/O devices is only currently detected on Linux. Other operating system will just report I/O devices as being attached to the topology root object.</p>
<h1><a class="anchor" id="iodevices_objects"></a>
I/O objects</h1>
<p>When I/O discovery is enabled and supported, some additional objects are added to the topology. The corresponding I/O object types are: </p><ul>
<li>
<code><a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a51e7280240fd9f25589cbbe538bdb075" title="Operating system device (filtered out by default).">HWLOC_OBJ_OS_DEVICE</a></code> describes an operating-system-specific handle such as the <em>sda</em> drive or the <em>eth0</em> network interface. See <a class="el" href="a00347.php#iodevices_osdev">OS devices</a>. </li>
<li>
<code><a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9" title="PCI device (filtered out by default).">HWLOC_OBJ_PCI_DEVICE</a></code> and <code><a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a6825f10895fea60aca7a6ba9fe273db0" title="Bridge (filtered out by default). Any bridge (or PCI switch) that connects the host or an I/O bus,...">HWLOC_OBJ_BRIDGE</a></code> build up a PCI hierarchy made of bridges (that may be actually be switches) and devices. See <a class="el" href="a00347.php#iodevices_pci">PCI devices and bridges</a>. </li>
</ul>
<p>Any of these types may be filtered individually with <code><a class="el" href="a00149.php#gad894e70f15f8d4aada7be8d1aba38b7e" title="Set the filtering for the given object type.">hwloc_topology_set_type_filter()</a></code>.</p>
<p>hwloc tries to attach these new objects to normal objects (usually NUMA nodes) to match their actual physical location. For instance, if a I/O hub (or root complex) is physically connected to a package, the corresponding hwloc bridge object (and its PCI bridges and devices children) is inserted as a child of the corresponding hwloc Package object. <b>These children are not in the normal children list but rather in the I/O-specific children list.</b></p>
<p>I/O objects also have neither CPU sets nor node sets (NULL pointers) because they are not directly usable by the user applications for binding. Moreover I/O hierarchies may be highly complex (asymmetric trees of bridges). So I/O objects are placed in specific levels with custom depths. Their lists may still be traversed with regular helpers such as <a class="el" href="a00143.php#ga759e88eaf5a230ad283e9d4c42486735" title="Returns the next object of type type.">hwloc_get_next_obj_by_type()</a>. However, hwloc offers some dedicated helpers such as <a class="el" href="a00160.php#ga66470dabce9db19a57c5940a909d0baa" title="Get the next PCI device in the system.">hwloc_get_next_pcidev()</a> and <a class="el" href="a00160.php#ga8b4584c8949e2c5f1c97ba7fe92b8145" title="Get the next OS device in the system.">hwloc_get_next_osdev()</a> for convenience (see <a class="el" href="a00160.php">Finding I/O objects</a>).</p>
<h1><a class="anchor" id="iodevices_osdev"></a>
OS devices</h1>
<p>Although each PCI device is uniquely identified by its bus ID (e.g. 0000:01:02.3), a user-space application can hardly find out which PCI device it is actually using. Applications rather use software handles (such as the <em>eth0</em> network interface, the <em>sda</em> hard drive, or the <em>mlx4_0</em> OpenFabrics HCA). Therefore hwloc tries to add software devices (<code><a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a51e7280240fd9f25589cbbe538bdb075" title="Operating system device (filtered out by default).">HWLOC_OBJ_OS_DEVICE</a></code>, also known as OS devices).</p>
<p>OS devices may be attached below PCI devices, but they may also be attached directly to normal objects. Indeed some OS devices are not related to PCI. For instance, NVDIMM block devices (such as <em>pmem0s</em> on Linux) are directly attached near their NUMA node (I/O child of the parent whose memory child is the NUMA node). Also, if hwloc could not discover PCI for some reason, PCI-related OS devices may also be attached directly to normal objects.</p>
<p>Finally, OS <em>subdevices</em> may be exposed as OS devices children of another OS device. This is the case of LevelZero subdevices for instance.</p>
<p>hwloc first tries to discover OS devices from the operating system, e.g. <em>eth0</em>, <em>sda</em> or <em>mlx4_0</em>. However, this ability is currently only available on Linux for some classes of devices.</p>
<p>hwloc then tries to discover software devices through additional I/O components using external libraries. For instance proprietary graphics drivers do not expose any named OS device, but hwloc may still create one OS object per software handle when supported. For instance the <code>opencl</code> and <code>cuda</code> components may add some <em>opencl0d0</em> and <em>cuda0</em> OS device objects.</p>
<p>Here is a list of OS device objects commonly created by hwloc components when I/O discovery is enabled and supported.</p>
<ul>
<li>
Hard disks or non-volatile memory devices (<a class="el" href="a00140.php#gga64f5d539df299c97ae80ce53fc4b56c0a689b0488c3c0d08d116751c6b9cb8871" title="Operating system block device, or non-volatile memory device. For instance &quot;sda&quot; or &quot;dax2....">HWLOC_OBJ_OSDEV_BLOCK</a>) <ul>
<li>
<em>sda</em> or <em>dax2.0</em> (Linux component) </li>
</ul>
</li>
<li>
Network interfaces (<a class="el" href="a00140.php#gga64f5d539df299c97ae80ce53fc4b56c0ab715d81155f771573c8682dffc65021b" title="Operating system network device. For instance the &quot;eth0&quot; interface on Linux.">HWLOC_OBJ_OSDEV_NETWORK</a>) <ul>
<li>
<em>eth0</em>, <em>wlan0</em>, <em>ib0</em> (Linux component) </li>
<li>
<em>hsn0</em> with "Slingshot" subtype for HPE Cray HSNs (Linux component). </li>
</ul>
</li>
<li>
OpenFabrics (InfiniBand, Omni-Path, usNIC, etc) HCAs (<a class="el" href="a00140.php#gga64f5d539df299c97ae80ce53fc4b56c0a52157d03694fdae82dddd57ca8c973b6" title="Operating system openfabrics device. For instance the &quot;mlx4_0&quot; InfiniBand HCA, &quot;hfi1_0&quot; Omni-Path int...">HWLOC_OBJ_OSDEV_OPENFABRICS</a>) <ul>
<li>
<em>mlx5_0</em>, <em>hfi1_0</em>, <em>qib0</em>, <em>usnic_0</em> (Linux component) </li>
<li>
<em>bxi0</em> with "BXI" subtype for Atos/Bull BXI HCAs (Linux component) even if those are not really OpenFabrics. </li>
</ul>
</li>
<li>
GPUs (<a class="el" href="a00140.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90" title="Operating system GPU device. For instance &quot;:0.0&quot; for a GL display, &quot;card0&quot; for a Linux DRM device.">HWLOC_OBJ_OSDEV_GPU</a>) <ul>
<li>
<em>rsmi0</em> for the first RSMI device ("RSMI" subtype, from the RSMI component, using the AMD ROCm SMI library) </li>
<li>
<em>nvml0</em> for the first NVML device ("NVML" subtype, from the NVML component, using the NVIDIA Management Library) </li>
<li>
<em>:0.0</em> for the first display ("Display" subtype, from the GL component, using the NV-CONTROL X extension library, NVCtrl) </li>
<li>
<em>card0</em> and <em>renderD128</em> for DRM device files (from the Linux component, filtered-out by default because considered non-important) </li>
</ul>
</li>
<li>
Co-Processors (<a class="el" href="a00140.php#gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83" title="Operating system co-processor device. For instance &quot;opencl0d0&quot; for a OpenCL device,...">HWLOC_OBJ_OSDEV_COPROC</a>) <ul>
<li>
<em>opencl0d0</em> for the first device of the first OpenCL platform, <em>opencl1d3</em> for the fourth device of the second OpenCL platform ("OpenCL" subtype, from the OpenCL component) </li>
<li>
<em>ze0</em> for the first Level Zero device ("LevelZero" subtype, from the levelzero component, using the oneAPI Level Zero library), and <em>ze0.1</em> for its second subdevice (if any). </li>
<li>
<em>cuda0</em> for the first NVIDIA CUDA device ("CUDA" subtype, from the CUDA component, using the NVIDIA CUDA Library) </li>
<li>
<em>ve0</em> for the first NEC Vector Engine device ("VectorEngine" subtype, from the Linux component) </li>
</ul>
</li>
<li>
DMA engine channel (<a class="el" href="a00140.php#gga64f5d539df299c97ae80ce53fc4b56c0a827ad1643360711a8b6c6af671366791" title="Operating system dma engine device. For instance the &quot;dma0chan0&quot; DMA channel on Linux.">HWLOC_OBJ_OSDEV_DMA</a>) <ul>
<li>
<em>dma0chan0</em> (Linux component) when all OS devices are enabled (<a class="el" href="a00149.php#gga9a5a1f0140cd1952544477833733195bafda7b59e6810dfe778d8f9a4cc1e350e" title="Keep all objects of this type.">HWLOC_TYPE_FILTER_KEEP_ALL</a>) </li>
</ul>
</li>
</ul>
<p>Note that some PCI devices may contain multiple software devices (see the example below).</p>
<p>See also <a class="el" href="a00354.php">Interoperability With Other Software</a> for managing these devices without considering them as hwloc objects.</p>
<h1><a class="anchor" id="iodevices_pci"></a>
PCI devices and bridges</h1>
<p>A PCI hierarchy is usually organized as follows: A hostbridge object ( <code><a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a6825f10895fea60aca7a6ba9fe273db0" title="Bridge (filtered out by default). Any bridge (or PCI switch) that connects the host or an I/O bus,...">HWLOC_OBJ_BRIDGE</a></code> object with upstream type <em>Host</em> and downstream type <em>PCI</em>) is attached below a normal object (usually the entire machine or a NUMA node). There may be multiple hostbridges in the machine, attached to different places, but all PCI devices are below one of them (unless the Bridge object type is filtered-out).</p>
<p>Each hostbridge contains one or several children, either other bridges (usually PCI to PCI switches) or PCI devices (<code><a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9" title="PCI device (filtered out by default).">HWLOC_OBJ_PCI_DEVICE</a></code>). The number of bridges between the hostbridge and a PCI device depends on the machine.</p>
<h1><a class="anchor" id="iodevices_consult"></a>
Consulting I/O devices and binding</h1>
<p>I/O devices may be consulted by traversing the topology manually (with usual routines such as <a class="el" href="a00143.php#ga6f414dd80a2b943967a0ac92da3181a2" title="Returns the topology object at logical index idx with type type.">hwloc_get_obj_by_type()</a>) or by using dedicated helpers (such as <a class="el" href="a00160.php#gacdbaf0db98872e224b7883a84bfb0455" title="Find the PCI device object matching the PCI bus id given domain, bus device and function PCI bus id.">hwloc_get_pcidev_by_busid()</a>, see <a class="el" href="a00160.php">Finding I/O objects</a>).</p>
<p>I/O objects do not actually contain any locality information because their CPU sets and node sets are NULL. Their locality must be retrieved by walking up the object tree (through the <code>parent</code> link) until a non-I/O object is found (see <a class="el" href="a00160.php#gaf139bb61375178e90cc3f1835b452ab6" title="Get the first non-I/O ancestor object.">hwloc_get_non_io_ancestor_obj()</a>). This normal object should have non-NULL CPU sets and node sets which describe the processing units and memory that are immediately close to the I/O device. For instance the path from a OS device to its locality may go across a PCI device parent, one or several bridges, up to a Package node with the same locality.</p>
<p>Command-line tools are also aware of I/O devices. lstopo displays the interesting ones by default (passing <code>--no-io</code> disables it).</p>
<p>hwloc-calc and hwloc-bind may manipulate I/O devices specified by PCI bus ID or by OS device name. </p><ul>
<li>
<code>pci=0000:02:03.0</code> is replaced by the set of CPUs that are close to the PCI device whose bus ID is given.  </li>
<li>
<code>os=eth0</code> is replaced by CPUs that are close to the I/O device whose software handle is called <code>eth0</code>.  </li>
</ul>
<p>This enables easy binding of I/O-intensive applications near the device they use.</p>
<h1><a class="anchor" id="iodevices_examples"></a>
Examples</h1>
<p>The following picture shows a dual-package dual-core host whose PCI bus is connected to the first package and NUMA node.</p>
<div class="image">
<img src="devel09-pci.png" alt=""/>
</div>
 <p>Six interesting PCI devices were discovered (dark green boxes). However, hwloc found some corresponding software devices (<em>eth0</em>, <em>eth1</em>, <em>sda</em>, <em>mlx4_0</em>, <em>ib0</em>, and <em>ib1</em> light grey boxes) for only four of these physical devices. The other ones (<em>PCI 04:03.0</em> and <em>PCI 00:1f.2</em>) are an unused IDE controller (no disk attached) and a graphic card (no corresponding software device reported to the user by the operating system).</p>
<p>On the contrary, it should be noted that three different software devices were found for the last PCI device (<em>PCI 51:00.0</em>). Indeed this OpenFabrics HCA PCI device object contains one OpenFabrics software device (<em>mlx4_0</em>) and two virtual network interfaces (<em>ib0</em> and <em>ib1</em>).</p>
<p>Here is the corresponding textual output:</p>
<pre class="fragment">Machine (24GB total)
  Package L#0
    NUMANode L#0 (P#0 12GB)
    L3 L#0 (8192KB)
      L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
      L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)
    HostBridge
      PCIBridge
        PCI 01:00.0 (Ethernet)
          Net "eth0"
        PCI 01:00.1 (Ethernet)
          Net "eth1"
      PCIBridge
        PCI 03:00.0 (RAID)
          Block "sda"
      PCIBridge
        PCI 04:03.0 (VGA)
      PCI 00:1f.2 (IDE)
      PCI 51:00.0 (InfiniBand)
        Net "ib0"
        Net "ib1"
        Net "mlx4_0"
  Package L#1
    NUMANode L#1 (P#1 12GB)
    L3 L#1 (8192KB)
      L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#1)
      L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</pre> </div></div><!-- contents -->
</div><!-- PageDoc -->
<?php
include_once("$topdir/includes/footer.inc");
