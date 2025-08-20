/*
 @licstart  The following is the entire license notice for the JavaScript code in this file.

 The MIT License (MIT)

 Copyright (C) 1997-2020 by Dimitri van Heesch

 Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 and associated documentation files (the "Software"), to deal in the Software without restriction,
 including without limitation the rights to use, copy, modify, merge, publish, distribute,
 sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in all copies or
 substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
 BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 @licend  The above is the entire license notice for the JavaScript code in this file
*/
var NAVTREE =
[
  [ "Hardware Locality (hwloc)", "index.html", [
    [ "Hardware Locality", "index.html", "index" ],
    [ "Installation", "installation.html", [
      [ "Basic Installation", "installation.html#basic_installation", null ],
      [ "Optional Dependencies", "installation.html#optional_dependencies", null ],
      [ "Installing from a Git clone", "installation.html#gitclone_installation", null ]
    ] ],
    [ "Compiling software on top of hwloc's C API", "useapi.html", [
      [ "Compiling on top of hwloc's C API with GNU Make", "useapi.html#useapi_gnumake", null ],
      [ "Compiling on top of hwloc's C API with CMake", "useapi.html#useapi_cmake", null ]
    ] ],
    [ "Terms and Definitions", "termsanddefs.html", [
      [ "Objects", "termsanddefs.html#termsanddefs_objects", null ],
      [ "Indexes and Sets", "termsanddefs.html#termsanddefs_indexes", null ],
      [ "Hierarchy, Tree and Levels", "termsanddefs.html#termsanddefs_tree", null ]
    ] ],
    [ "Command-Line Tools", "tools.html", [
      [ "lstopo and lstopo-no-graphics", "tools.html#cli_lstopo", null ],
      [ "hwloc-bind", "tools.html#cli_hwloc_bind", null ],
      [ "hwloc-calc", "tools.html#cli_hwloc_calc", null ],
      [ "hwloc-info", "tools.html#cli_hwloc_info", null ],
      [ "hwloc-distrib", "tools.html#cli_hwloc_distrib", null ],
      [ "hwloc-ps", "tools.html#cli_hwloc_ps", null ],
      [ "hwloc-annotate", "tools.html#cli_hwloc_annotate", null ],
      [ "hwloc-diff, hwloc-patch and hwloc-compress-dir", "tools.html#cli_hwloc_diffpatchcompress", null ],
      [ "hwloc-dump-hwdata", "tools.html#cli_hwloc_dump_hwdata", null ],
      [ "hwloc-gather-topology and hwloc-gather-cpuid", "tools.html#cli_hwloc_gather", null ]
    ] ],
    [ "Environment Variables", "envvar.html", null ],
    [ "CPU and Memory Binding Overview", "cpu_mem_bind.html", [
      [ "Binding Policies and Portability", "cpu_mem_bind.html#cpu_mem_bind_portability", null ],
      [ "Joint CPU and Memory Binding (or not)", "cpu_mem_bind.html#cpu_mem_bind_joint", null ],
      [ "Current Memory Binding Policy", "cpu_mem_bind.html#cpu_mem_bind_current_membind", null ]
    ] ],
    [ "I/O Devices", "iodevices.html", [
      [ "Enabling and requirements", "iodevices.html#iodevices_enabling", null ],
      [ "I/O objects", "iodevices.html#iodevices_objects", null ],
      [ "OS devices", "iodevices.html#iodevices_osdev", null ],
      [ "PCI devices and bridges", "iodevices.html#iodevices_pci", null ],
      [ "Consulting I/O devices and binding", "iodevices.html#iodevices_consult", null ],
      [ "Examples", "iodevices.html#iodevices_examples", null ]
    ] ],
    [ "Miscellaneous objects", "miscobjs.html", [
      [ "Misc objects added by hwloc", "miscobjs.html#miscobjs_auto", null ],
      [ "Annotating topologies with Misc objects", "miscobjs.html#miscobjs_annotate", null ]
    ] ],
    [ "Object attributes", "attributes.html", [
      [ "Normal attributes", "attributes.html#attributes_normal", null ],
      [ "Custom string infos", "attributes.html#attributes_info", [
        [ "Hardware Platform Information", "attributes.html#attributes_info_platform", null ],
        [ "Operating System Information", "attributes.html#attributes_info_os", null ],
        [ "hwloc Information", "attributes.html#attributes_info_hwloc", null ],
        [ "CPU Information", "attributes.html#attributes_info_cpu", null ],
        [ "OS Device Information", "attributes.html#attributes_info_osdev", null ],
        [ "Other Object-specific Information", "attributes.html#attributes_info_otherobjs", null ],
        [ "User-Given Information", "attributes.html#attributes_info_user", null ]
      ] ]
    ] ],
    [ "Topology Attributes: Distances, Memory Attributes and CPU Kinds", "topoattrs.html", [
      [ "Distances", "topoattrs.html#topoattrs_distances", null ],
      [ "Memory Attributes", "topoattrs.html#topoattrs_memattrs", null ],
      [ "CPU Kinds", "topoattrs.html#topoattrs_cpukinds", null ]
    ] ],
    [ "Heterogeneous Memory", "heteromem.html", [
      [ "Memory Tiers and Default nodes", "heteromem.html#heteromem_memtiers", null ],
      [ "Using Heterogeneous Memory from the command-line", "heteromem.html#heteromem_use_cli", null ],
      [ "Using Heterogeneous Memory from the C API", "heteromem.html#heteromem_use_api", [
        [ "Iterating over the list of (heterogeneous) NUMA nodes", "heteromem.html#heteromem_use_api_iterate", null ],
        [ "Iterating over local (heterogeneous) NUMA nodes", "heteromem.html#heteromem_use_api_vertical", null ]
      ] ]
    ] ],
    [ "Importing and exporting topologies from/to XML files", "xml.html", [
      [ "libxml2 and minimalistic XML backends", "xml.html#xml_backends", null ],
      [ "XML import error management", "xml.html#xml_errors", null ]
    ] ],
    [ "Synthetic topologies", "synthetic.html", [
      [ "Synthetic description string", "synthetic.html#synthetic_string", null ],
      [ "Loading a synthetic topology", "synthetic.html#synthetic_use", null ],
      [ "Exporting a topology as a synthetic string", "synthetic.html#synthetic_export", null ]
    ] ],
    [ "Interoperability With Other Software", "interoperability.html", null ],
    [ "Thread Safety", "threadsafety.html", null ],
    [ "Components and plugins", "plugins.html", [
      [ "Components enabled by default", "plugins.html#plugins_default", null ],
      [ "Selecting which components to use", "plugins.html#plugins_select", null ],
      [ "Loading components from plugins", "plugins.html#plugins_load", null ],
      [ "Existing components and plugins", "plugins.html#plugins_list", null ]
    ] ],
    [ "Embedding hwloc in Other Software", "embed.html", [
      [ "Using hwloc's M4 Embedding Capabilities", "embed.html#embedding_m4", null ],
      [ "Example Embedding hwloc", "embed.html#embedding_example", null ]
    ] ],
    [ "Frequently Asked Questions (FAQ)", "faq.html", [
      [ "Concepts", "faq.html#faq1", [
        [ "I only need binding, or the number of cores, why should I use hwloc ?", "faq.html#faq_why", null ],
        [ "What may I disable to make hwloc faster?", "faq.html#faq_disable_faster", null ],
        [ "Should I use logical or physical/OS indexes? and how?", "faq.html#faq_indexes", null ],
        [ "hwloc is only a structural model, it ignores performance models, memory bandwidth, etc.?", "faq.html#faq_structural", null ],
        [ "hwloc only has a one-dimensional view of the architecture, it ignores distances?", "faq.html#faq_onedim", null ],
        [ "What are these Group objects in my topology?", "faq.html#faq_groups", null ],
        [ "What happens if my topology is asymmetric?", "faq.html#faq_asymmetric", null ],
        [ "What happens to my topology if I disable symmetric multithreading, hyper-threading, etc. in the system?", "faq.html#faq_nosmt", null ],
        [ "How may I ignore symmetric multithreading, hyper-threading, etc. in hwloc?", "faq.html#faq_smt", null ]
      ] ],
      [ "Advanced", "faq.html#faq2", [
        [ "I do not want hwloc to rediscover my enormous machine topology every time I rerun a process", "faq.html#faq_xml", null ],
        [ "How many topologies may I use in my program?", "faq.html#faq_multitopo", null ],
        [ "How to avoid memory waste when manipulating multiple similar topologies?", "faq.html#faq_diff", null ],
        [ "How do I annotate the topology with private notes?", "faq.html#faq_annotate", null ],
        [ "How do I create a custom heterogeneous and asymmetric topology?", "faq.html#faq_create_asymmetric", null ]
      ] ],
      [ "Caveats", "faq.html#faq3", [
        [ "Why is lstopo slow?", "faq.html#faq_slow_lstopo", null ],
        [ "Does hwloc require privileged access?", "faq.html#faq_privileged", null ],
        [ "What should I do when hwloc reports \"operating system\" warnings?", "faq.html#faq_os_error", null ],
        [ "Why does Valgrind complain about hwloc memory leaks?", "faq.html#faq_valgrind", null ]
      ] ],
      [ "Platform-specific", "faq.html#faq4", [
        [ "How do I enable ROCm SMI and select which version to use?", "faq.html#faq_rocm_build", null ],
        [ "How do I enable CUDA and select which CUDA version to use?", "faq.html#faq_cuda_build", null ],
        [ "How do I find the local MCDRAM NUMA node on Intel Xeon Phi processor?", "faq.html#faq_knl_numa", null ],
        [ "Why do I need hwloc-dump-hwdata for memory on Intel Xeon Phi processor?", "faq.html#faq_knl_dump", null ],
        [ "How do I build hwloc for BlueGene/Q?", "faq.html#faq_bgq", null ],
        [ "How do I build hwloc for Windows?", "faq.html#faq_windows", null ],
        [ "How to get useful topology information on NetBSD?", "faq.html#faq_netbsd_bind", null ],
        [ "Why does binding fail on AIX?", "faq.html#faq_aix_bind", null ]
      ] ],
      [ "Compatibility between hwloc versions", "faq.html#faq5", [
        [ "How do I handle API changes?", "faq.html#faq_version_api", null ],
        [ "What is the difference between API and library version numbers?", "faq.html#faq_version", null ],
        [ "How do I handle ABI breaks?", "faq.html#faq_version_abi", null ],
        [ "Are XML topology files compatible between hwloc releases?", "faq.html#faq_version_xml", null ],
        [ "Are synthetic strings compatible between hwloc releases?", "faq.html#faq_version_synthetic", null ],
        [ "Is it possible to share a shared-memory topology between different hwloc releases?", "faq.html#faq_version_shmem", null ]
      ] ]
    ] ],
    [ "Upgrading to the hwloc 2.0 API", "upgrade_to_api_2x.html", [
      [ "New Organization of NUMA nodes and Memory", "upgrade_to_api_2x.html#upgrade_to_api_2x_memory", [
        [ "Memory children", "upgrade_to_api_2x.html#upgrade_to_api_2x_memory_children", null ],
        [ "Examples", "upgrade_to_api_2x.html#upgrade_to_api_2x_memory_examples", null ],
        [ "NUMA level and depth", "upgrade_to_api_2x.html#upgrade_to_api_2x_numa_level", null ],
        [ "Finding Local NUMA nodes and looking at Children and Parents", "upgrade_to_api_2x.html#upgrade_to_api_2x_memory_find", null ]
      ] ],
      [ "4 Kinds of Objects and Children", "upgrade_to_api_2x.html#upgrade_to_api_2x_children", [
        [ "I/O and Misc children", "upgrade_to_api_2x.html#upgrade_to_api_2x_io_misc_children", null ],
        [ "Kinds of objects", "upgrade_to_api_2x.html#upgrade_to_api_2x_kinds_subsec", null ]
      ] ],
      [ "HWLOC_OBJ_CACHE replaced", "upgrade_to_api_2x.html#upgrade_to_api_2x_cache", null ],
      [ "allowed_cpuset and allowed_nodeset only in the main topology", "upgrade_to_api_2x.html#upgrade_to_api_2x_allowed", null ],
      [ "Object depths are now signed int", "upgrade_to_api_2x.html#upgrade_to_api_2x_depth", null ],
      [ "Memory attributes become NUMANode-specific", "upgrade_to_api_2x.html#upgrade_to_api_2x_memory_attrs", null ],
      [ "Topology configuration changes", "upgrade_to_api_2x.html#upgrade_to_api_2x_config", null ],
      [ "XML changes", "upgrade_to_api_2x.html#upgrade_to_api_2x_xml", null ],
      [ "Distances API totally rewritten", "upgrade_to_api_2x.html#upgrade_to_api_2x_distances", null ],
      [ "Return values of functions", "upgrade_to_api_2x.html#upgrade_to_api_2x_return", null ],
      [ "Misc API changes", "upgrade_to_api_2x.html#upgrade_to_api_2x_misc", null ],
      [ "API removals and deprecations", "upgrade_to_api_2x.html#upgrade_to_api_2x_removals", null ]
    ] ],
    [ "Topics", "topics.html", "topics" ],
    [ "Data Structures", "annotated.html", [
      [ "Data Structures", "annotated.html", "annotated_dup" ],
      [ "Data Fields", "functions.html", [
        [ "All", "functions.html", null ],
        [ "Variables", "functions_vars.html", null ]
      ] ]
    ] ]
  ] ]
];

var NAVTREEINDEX =
[
"annotated.html",
"group__hwlocality__disc__components.html#gga8c314121c2fc478161bcce758688b9a1a6360474df197027761a69bd5fc620250",
"group__hwlocality__object__types.html#gga64f5d539df299c97ae80ce53fc4b56c0a689b0488c3c0d08d116751c6b9cb8871",
"structhwloc__topology__cpubind__support.html#a2554620148b7992a5093f338f5ae254f"
];

var SYNCONMSG = 'click to disable panel synchronisation';
var SYNCOFFMSG = 'click to enable panel synchronisation';