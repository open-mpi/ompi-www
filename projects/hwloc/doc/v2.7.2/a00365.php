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
<!-- Generated by Doxygen 1.9.1 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="PageDoc"><div class="header">
  <div class="headertitle">
<div class="title">Object attributes </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p> 
<div class="section" id="attributes_normal">
 </p>
<h1><a class="anchor" id="attributes_normal"></a>
Normal attributes</h1>
<p>hwloc objects have many generic attributes in the <a class="el" href="a00217.php" title="Structure of a topology object.">hwloc_obj</a> structure, for instance their <code>logical_index</code> or <code>os_index</code> (see <a class="el" href="a00373.php#faq_indexes">Should I use logical or physical/OS indexes? and how?</a>), <code>depth</code> or <code>name</code>.</p>
<p>The kind of object is first described by the <code>obj-&gt;type</code> generic attribute (an integer). OS devices also have a specific <code>obj-&gt;attr-&gt;osdev.type</code> integer for distinguishing between NICs, GPUs, etc.</p>
<p>Objects may also have an optional <code>obj-&gt;subtype</code> pointing to a better description string (displayed by lstopo either in place or after the main <code>obj-&gt;type</code> attribute): </p><ul>
<li>
NUMA nodes: subtype <code>MCDRAM</code> (on KNL) or <code>GPUMemory</code> (on POWER architecture with NVIDIA GPU memory shared over NVLink).  </li>
<li>
Groups: subtype <code>Cluster</code>, <code>Module</code>, <code>Tile</code>, <code>Compute Unit</code>, <code>Book</code> or <code>Drawer</code> for different architecture-specific groups of CPUs (see also <a class="el" href="a00373.php#faq_groups">What are these Group objects in my topology?</a>).  </li>
<li>
OS devices (see also <a class="el" href="a00363.php#iodevices_osdev">OS devices</a>): <ul>
<li>
Co-processor: subtype <code>OpenCL</code>, <code>LevelZero</code>, <code>CUDA</code>, or <code>VectorEngine</code>. </li>
<li>
GPU: subtype <code>RSMI</code> (AMD GPU) or <code>NVML</code> (NVIDIA GPU). </li>
<li>
OpenFabrics: subtype <code>BXI</code> (Bull/Atos BXI HCA). </li>
<li>
Block: subtype <code>Disk</code>, <code>NVDIMM</code>, <code>Tape</code>, or <code>Removable Media Device</code>. </li>
</ul>
</li>
<li>
L3 Caches: subtype <code>MemorySideCache</code> when hwloc is configured to expose the KNL MCDRAM in Cache mode as a L3.  </li>
<li>
PCI devices: subtype <code>NVSwitch</code> for NVLink switches (see also NVLinkBandwidth in <a class="el" href="a00366.php#topoattrs_distances">Distances</a>).  </li>
<li>
Misc devices: subtype <code>MemoryModule</code> (see also <a class="el" href="a00364.php#miscobjs_auto">Misc objects added by hwloc</a>)  </li>
</ul>
<p>Each object also contains an <code>attr</code> field that, if non NULL, points to a union <a class="el" href="a00221.php" title="Object type-specific Attributes.">hwloc_obj_attr_u</a> of type-specific attribute structures. For instance, a L2Cache object <code>obj</code> contains cache-specific information in <code>obj-&gt;attr-&gt;cache</code>, such as its size and associativity, cache type. See <a class="el" href="a00221.php" title="Object type-specific Attributes.">hwloc_obj_attr_u</a> for details.</p>
<p> 
</div><div class="section" id="attributes_info">
 </p>
<h1><a class="anchor" id="attributes_info"></a>
Custom string infos</h1>
<p>Aside os these generic attribute fields, hwloc annotates many objects with string attributes that are made of a key and a value. Each object contains a list of such pairs that may be consulted manually (looking at the object <code>infos</code> array field) or using the <a class="el" href="a00165.php#gab358661a92bb27d8542b255cc9f6f25e" title="Search the given key name in object infos and return the corresponding value.">hwloc_obj_get_info_by_name()</a>. The user may additionally add new key-value pairs to any object using <a class="el" href="a00165.php#gace7654bb8a9002caae1a4b8a59e7452e" title="Add the given info name and value pair to the given object.">hwloc_obj_add_info()</a> or the <a class="el" href="a00360.php#cli_hwloc_annotate">hwloc-annotate</a> program.</p>
<p>Here is a non-exhaustive list of attributes that may be automatically added by hwloc. Note that these attributes heavily depend on the ability of the operating system to report them. Many of them will therefore be missing on some OS.</p>
<p> 
</div><div class="subsection" id="attributes_info_platform">
 </p>
<h2><a class="anchor" id="attributes_info_platform"></a>
Hardware Platform Information</h2>
<p>These info attributes are attached to the root object (Machine).</p>
<dl>
<dt>PlatformName, PlatformModel, PlatformVendor, PlatformBoardID, PlatformRevision, </dt>
<dd></dd>
<dt>SystemVersionRegister, ProcessorVersionRegister (Machine) </dt>
<dd>Some POWER/PowerPC-specific attributes describing the platform and processor. Currently only available on Linux. Usually added to Package objects, but can be in Machine instead if hwloc failed to discover any package.  </dd>
<dt>DMIBoardVendor, DMIBoardName, etc. </dt>
<dd>DMI hardware information such as the motherboard and chassis models and vendors, the BIOS revision, etc., as reported by Linux under <code>/sys/class/dmi/id/</code>.  </dd>
<dt>MemoryMode, ClusterMode </dt>
<dd><p class="startdd">Intel Xeon Phi processor configuration modes. Available if hwloc-dump-hwdata was used (see <a class="el" href="a00373.php#faq_knl_dump">Why do I need hwloc-dump-hwdata for memory on Intel Xeon Phi processor?</a>) or if hwloc managed to guess them from the NUMA configuration.</p>
<p class="enddd">The memory mode may be <em>Cache</em>, <em>Flat</em>, <em>Hybrid50</em> (half the MCDRAM is used as a cache) or <em>Hybrid25</em> (25% of MCDRAM as cache). The cluster mode may be <em>Quadrant</em>, <em>Hemisphere</em>, <em>All2All</em>, <em>SNC2</em> or <em>SNC4</em>. See doc/examples/get-knl-modes.c in the source directory for an example of retrieving these attributes.  </p>
</dd>
</dl>
<p> 
</div><div class="subsection" id="attributes_info_os">
 </p>
<h2><a class="anchor" id="attributes_info_os"></a>
Operating System Information</h2>
<p>These info attributes are attached to the root object (Machine).</p>
<dl>
<dt>OSName, OSRelease, OSVersion, HostName, Architecture </dt>
<dd>The operating system name, release, version, the hostname and the architecture name, as reported by the Unix <code>uname</code> command.  </dd>
<dt>LinuxCgroup </dt>
<dd>The name the Linux control group where the calling process is placed.  </dd>
<dt>WindowsBuildEnvironment </dt>
<dd>Either MinGW or Cygwin when one of these environments was used during build.  </dd>
</dl>
<p> 
</div><div class="subsection" id="attributes_info_hwloc">
 </p>
<h2><a class="anchor" id="attributes_info_hwloc"></a>
hwloc Information</h2>
<p>Unless specified, these info attributes are attached to the root object (Machine).</p>
<dl>
<dt>Backend (topology root, or specific object added by that backend) </dt>
<dd>The name of the hwloc backend/component that filled the topology. If several components were combined, multiple Backend keys may exist, with different values, for instance <code>x86</code> and <code>Linux</code> in the root object and <code>CUDA</code> in CUDA OS device objects.  </dd>
<dt>SyntheticDescription </dt>
<dd>The description string that was given to hwloc to build this synthetic topology.  </dd>
<dt>hwlocVersion </dt>
<dd>The version number of the hwloc library that was used to generate the topology. If the topology was loaded from XML, this is not the hwloc version that loaded it, but rather the first hwloc instance that exported the topology to XML earlier.  </dd>
<dt>ProcessName </dt>
<dd>The name of the process that contains the hwloc library that was used to generate the topology. If the topology was from XML, this is not the hwloc process that loaded it, but rather the first process that exported the topology to XML earlier.  </dd>
</dl>
<p> 
</div><div class="subsection" id="attributes_info_cpu">
 </p>
<h2><a class="anchor" id="attributes_info_cpu"></a>
CPU Information</h2>
<p>These info attributes are attached to Package objects, or to the root object (Machine) if package locality information is missing.</p>
<dl>
<dt>CPUModel </dt>
<dd>The processor model name. </dd>
<dt>CPUVendor, CPUModelNumber, CPUFamilyNumber, CPUStepping </dt>
<dd>The processor vendor name, model number, family number, and stepping number. Currently available for x86 and Xeon Phi processors on most systems, and for ia64 processors on Linux (except CPUStepping).  </dd>
<dt>CPURevision </dt>
<dd>A POWER/PowerPC-specific general processor revision number, currently only available on Linux.  </dd>
<dt>CPUType </dt>
<dd>A Solaris-specific general processor type name, such as "i86pc".  </dd>
</dl>
<p> 
</div><div class="subsection" id="attributes_info_osdev">
 </p>
<h2><a class="anchor" id="attributes_info_osdev"></a>
OS Device Information</h2>
<p>These info attributes are attached to OS device objects specified in parentheses.</p>
<dl>
<dt>Vendor, Model, Revision, SerialNumber, Size, SectorSize (Block OS devices) </dt>
<dd>The vendor and model names, revision, serial number, size (in KiB = 1024 bytes) and SectorSize (in bytes).  </dd>
<dt>LinuxDeviceID (Block OS devices) </dt>
<dd>The major/minor device number such as 8:0 of Linux device.  </dd>
<dt>GPUVendor, GPUModel (GPU or Co-Processor OS devices) </dt>
<dd>The vendor and model names of the GPU device.  </dd>
<dt>OpenCLDeviceType, OpenCLPlatformIndex, </dt>
<dd></dd>
<dt>OpenCLPlatformName, OpenCLPlatformDeviceIndex (OpenCL OS devices) </dt>
<dd>The type of OpenCL device, the OpenCL platform index and name, and the index of the device within the platform.  </dd>
<dt>OpenCLComputeUnits, OpenCLGlobalMemorySize (OpenCL OS devices) </dt>
<dd>The number of compute units and global memory size of an OpenCL device. Sizes are in KiB (1024 bytes).  </dd>
<dt>LevelZeroVendor, LevelZeroModel, LevelZeroBrand, </dt>
<dd></dd>
<dt>LevelZeroSerialNumber, LevelZeroBoardNumber (LevelZero OS devices) </dt>
<dd>The name of the vendor, device model, brand of a Level Zero device, and its serial and board numbers.  </dd>
<dt>LevelZeroDriverIndex, LevelZeroDriverDeviceIndex (LevelZero OS devices) </dt>
<dd>The index of the Level Zero driver within the list of drivers, and the index of the device within the list of devices managed by this driver.  </dd>
<dt>LevelZeroSubdevices (LevelZero OS devices) </dt>
<dd>The number of subdevices below this OS device.  </dd>
<dt>LevelZeroSubdeviceID (LevelZero OS subdevices) </dt>
<dd>The index of this subdevice within its parent.  </dd>
<dt>LevelZeroDeviceType (LevelZero OS devices or subdevices) </dt>
<dd>A string describing the type of device, for instance "GPU", "CPU", "FPGA", etc.  </dd>
<dt>LevelZeroNumSlices, LevelZeroNumSubslicesPerSlice, </dt>
<dd></dd>
<dt>LevelZeroNumEUsPerSubslice, LevelZeroNumThreadsPerEU (LevelZero OS devices or subdevices) </dt>
<dd>The number of slices in the device, of subslices per slice, of execution units (EU) per subslice, and of threads per EU.  </dd>
<dt>LevelZeroHBMSize, LevelZeroDDRSize, LevelZeroMemorySize (LevelZero OS devices or subdevices) </dt>
<dd>The amount of HBM or DDR memory of a LevelZero device or subdevice. Sizes are in KiB (1024 bytes). If the type of memory could not be determined, the generic name LevelZeroMemorySize is used. For devices that contain subdevices, the amount reported in the root device includes the memories of all its subdevices.  </dd>
<dt>LevelZeroCQGroups, LevelZeroCQGroup2 (LevelZero OS devices or subdevices) </dt>
<dd>The number of completion queue groups, and the description of the third group (as <code>N*0xX</code> where <code>N</code> is the number of queues in the group, and <code>0xX</code> is the hexadecimal bitmask of <code>ze_command_queue_group_property_flag_t</code> listing properties of those queues).  </dd>
<dt>AMDUUID, AMDSerial (RSMI GPU OS devices) </dt>
<dd>The UUID and serial number of AMD GPUs.  </dd>
<dt>RSMIVRAMSize, RSMIVisibleVRAMSize, RSMIGTTSize (RSMI GPU OS devices) </dt>
<dd>The amount of GPU memory (VRAM), of GPU memory that is visible from the host (Visible VRAM), and of system memory that is usable by the GPU (Graphics Translation Table). Sizes are in KiB (1024 bytes).  </dd>
<dt>XGMIHiveID (RSMI GPU OS devices) </dt>
<dd>The ID of the group of GPUs (Hive) interconnected by XGMI links  </dd>
<dt>XGMIPeers (RSMI GPU OS devices) </dt>
<dd>The list of RSMI OS devices that are directly connected to the current device through XGMI links. They are given as a space-separated list of object names, for instance <em>rsmi2 rsmi3</em>.  </dd>
<dt>NVIDIAUUID, NVIDIASerial (NVML GPU OS devices) </dt>
<dd>The UUID and serial number of NVIDIA GPUs.  </dd>
<dt>CUDAMultiProcessors, CUDACoresPerMP, </dt>
<dd></dd>
<dt>CUDAGlobalMemorySize, CUDAL2CacheSize, CUDASharedMemorySizePerMP (CUDA OS devices) </dt>
<dd>The number of shared multiprocessors, the number of cores per multiprocessor, the global memory size, the (global) L2 cache size, and size of the shared memory in each multiprocessor of a CUDA device. Sizes are in KiB (1024 bytes).  </dd>
<dt>VectorEngineModel, VectorEngineSerialNumber (VectorEngine OS devices) </dt>
<dd>The model and serial number of a VectorEngine device.  </dd>
<dt>VectorEngineCores, VectorEngineMemorySize, VectorEngineLLCSize, </dt>
<dd></dd>
<dt>VectorEngineL2Size, VectorEngineL1dSize, VectorEngineL1iSize (VectorEngine OS devices) </dt>
<dd>The number of cores, memory size, and the sizes of the (global) last level cache and of L2, L1d and L1i caches of a VectorEngine device. Sizes are in KiB (1024 bytes).  </dd>
<dt>VectorEngineNUMAPartitioned (VectorEngine OS devices) </dt>
<dd>If this attribute exists, the VectorEngine device is configured in partitioned mode with multiple NUMA nodes.  </dd>
<dt>Address, Port (Network interface OS devices) </dt>
<dd>The MAC address and the port number of a software network interface, such as <code>eth4</code> on Linux.  </dd>
<dt>NodeGUID, SysImageGUID, Port1State, Port2LID, Port2LMC, Port3GID1 (OpenFabrics OS devices) </dt>
<dd>The node GUID and GUID mask, the state of a port #1 (value is 4 when active), the LID and LID mask count of port #2, and GID #1 of port #3.  </dd>
<dt>BXIUUID (OpenFabrics BXI OS devices) </dt>
<dd>The UUID of an Atos/Bull BXI HCA.  </dd>
</dl>
<p> 
</div><div class="subsection" id="attributes_info_otherobjs">
 </p>
<h2><a class="anchor" id="attributes_info_otherobjs"></a>
Other Object-specific Information</h2>
<p>These info attributes are attached to objects specified in parentheses.</p>
<dl>
<dt>DAXDevice (NUMA Nodes) </dt>
<dd>The name of the Linux DAX device that was used to expose a non-volatile memory region as a volatile NUMA node.  </dd>
<dt>PCIBusID (GPUMemory NUMA Nodes) </dt>
<dd>The PCI bus ID of the GPU whose memory is exposed in this NUMA node.  </dd>
<dt>Inclusive (Caches) </dt>
<dd>The inclusiveness of a cache (1 if inclusive, 0 otherwise). Currently only available on x86 processors.  </dd>
<dt>SolarisProcessorGroup (Group) </dt>
<dd>The Solaris kstat processor group name that was used to build this Group object.  </dd>
<dt>PCIVendor, PCIDevice (PCI devices and bridges) </dt>
<dd>The vendor and device names of the PCI device.  </dd>
<dt>PCISlot (PCI devices or Bridges) </dt>
<dd>The name/number of the physical slot where the device is plugged. If the physical device contains PCI bridges above the actual PCI device, the attribute may be attached to the highest bridge (i.e. the first object that actually appears below the physical slot).  </dd>
<dt>Vendor, AssetTag, PartNumber, DeviceLocation, BankLocation (MemoryModule Misc objects) </dt>
<dd>Information about memory modules (DIMMs) extracted from SMBIOS.  </dd>
</dl>
<p> 
</div><div class="subsection" id="attributes_info_user">
 </p>
<h2><a class="anchor" id="attributes_info_user"></a>
User-Given Information</h2>
<p>Here is a non-exhaustive list of user-provided info attributes that have a special meaning: </p><dl>
<dt>lstopoStyle </dt>
<dd>Enforces the style of an object (background and text colors) in the graphical output of lstopo. See CUSTOM COLORS in the lstopo(1) manpage for details.  </dd>
</dl>
</div></div><!-- contents -->
</div><!-- PageDoc -->
<?php
include_once("$topdir/includes/footer.inc");
