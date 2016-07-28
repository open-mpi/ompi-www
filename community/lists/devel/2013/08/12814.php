<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 28 12:58:54 2013" -->
<!-- isoreceived="20130828165854" -->
<!-- sent="Wed, 28 Aug 2013 09:58:50 -0700" -->
<!-- isosent="20130828165850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist" -->
<!-- id="53228EC0-46E6-4E58-99F0-51AE345711B2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130828164031.GI78270_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-28 12:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12813.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<li><strong>In reply to:</strong> <a href="12813.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please also change the name - it is being declared in a component, and thus the &quot;base&quot; should not be in the name
<br>
<p>On Aug 28, 2013, at 9:40 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Would something even more generic such as rmaps_base_dist_network_device
</span><br>
<span class="quotelev1">&gt; be better. Could update the code to detect Gemini or Ares for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 28, 2013 at 04:36:22PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can we rename rmaps_base_dist_hca to something that is less specific to IB?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; E.g., rmaps_base_dist_verbs_device?  (admittedly, that's a little long, but...)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 28, 2013, at 12:23 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2013-08-28 12:23:33 EDT (Wed, 28 Aug 2013)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 29079
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29079">https://svn.open-mpi.org/trac/ompi/changeset/29079</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add support for autodetecting a MLNX HCA in the rmaps min distance feature. In this way, .ini files distributed with software stacks need not specify a particular HCA but instead may select the key word auto which will automatically select the discovered device. To use this feature, simply pass the keyword auto instead of a specific device name, --mca rmaps_base_dist_hca auto. If more than one card is installed, the mapper will inform the user of this and, at this point, the user will then need to specify which card via the normal route, e.g. --mca rmaps_base_dist_hca &lt;dev_name&gt;. This should be added to \ncmr=v1.7.4:reviewer=rhc:subject=Autodetect logic for min dist mapping
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/mca/hwloc/base/base.h                    |     4 ++--                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/mca/hwloc/base/hwloc_base_util.c         |    40 ++++++++++++++++++++++++++++++++++++----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/orte/mca/rmaps/mindist/help-orte-rmaps-md.txt |     8 ++++++++                                
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c |    11 +++++++++--                             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4 files changed, 55 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/hwloc/base/base.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/hwloc/base/base.h	Wed Aug 28 12:03:23 2013	(r29078)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/hwloc/base/base.h	2013-08-28 12:23:33 EDT (Wed, 28 Aug 2013)	(r29079)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -169,8 +169,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       hwloc_obj_t obj,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                       opal_hwloc_resource_type_t rtype);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -OPAL_DECLSPEC void opal_hwloc_get_sorted_numa_list(hwloc_topology_t topo, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                    const char* device_name, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +OPAL_DECLSPEC int opal_hwloc_get_sorted_numa_list(hwloc_topology_t topo, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                    char* device_name, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    opal_list_t *sorted_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/hwloc/base/hwloc_base_util.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/hwloc/base/hwloc_base_util.c	Wed Aug 28 12:03:23 2013	(r29078)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/hwloc/base/hwloc_base_util.c	2013-08-28 12:23:33 EDT (Wed, 28 Aug 2013)	(r29079)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1729,7 +1729,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -static void sort_by_dist(hwloc_topology_t topo, const char* device_name, opal_list_t *sorted_list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static void sort_by_dist(hwloc_topology_t topo, char* device_name, opal_list_t *sorted_list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hwloc_obj_t device_obj = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hwloc_obj_t obj = NULL, root = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1751,6 +1751,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    obj = obj-&gt;parent;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                if (obj == NULL) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    opal_output_verbose(5, opal_hwloc_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            &quot;hwloc:base:get_sorted_numa_list: NUMA node closest to %s wasn't found.&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            device_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    close_node_index = obj-&gt;logical_index;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1762,6 +1765,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    /* we can try to find distances under group object. This info can be there. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    depth = hwloc_get_type_depth(topo, HWLOC_OBJ_NODE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    if (depth &lt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        opal_output_verbose(5, opal_hwloc_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                &quot;hwloc:base:get_sorted_numa_list: There is no information about distances on the node.&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    root = hwloc_get_root_obj(topo);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1779,6 +1784,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                /* find all distances for our close node with logical index = close_node_index as close_node_index + nbobjs*j */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                if ((NULL == distances) || (0 == distances-&gt;nbobjs)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    opal_output_verbose(5, opal_hwloc_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                            &quot;hwloc:base:get_sorted_numa_list: There is no information about distances on the node.&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                /* fill list of numa nodes */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1797,13 +1804,28 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -void opal_hwloc_get_sorted_numa_list(hwloc_topology_t topo, const char* device_name, opal_list_t *sorted_list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +static int find_devices(hwloc_topology_t topo, char* device_name) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    hwloc_obj_t device_obj = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int count = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    for (device_obj = hwloc_get_obj_by_type(topo, HWLOC_OBJ_OS_DEVICE, 0); device_obj; device_obj = hwloc_get_next_osdev(topo, device_obj)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (device_obj-&gt;attr-&gt;osdev.type == HWLOC_OBJ_OSDEV_OPENFABRICS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            count++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            free(device_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            device_name = strdup(device_obj-&gt;name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    return count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +int opal_hwloc_get_sorted_numa_list(hwloc_topology_t topo, char* device_name, opal_list_t *sorted_list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    hwloc_obj_t obj;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_list_item_t *item;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_hwloc_summary_t *sum;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_hwloc_topo_data_t *data;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_rmaps_numa_node_t *numa, *copy_numa;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    obj = hwloc_get_root_obj(topo);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1823,9 +1845,19 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        copy_numa-&gt;dist_from_closed = numa-&gt;dist_from_closed;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        opal_list_append(sorted_list, &amp;copy_numa-&gt;super);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    /* don't already know it - go get it */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    /* firstly we check if we need to autodetect OpenFabrics  devices or we have the specified one */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    if (!strcmp(device_name, &quot;auto&quot;)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        count = find_devices(topo, device_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       if (count &gt; 1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                           return count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    if (!device_name || (strlen(device_name) == 0)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        return 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    sort_by_dist(topo, device_name, sorted_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    /* store this info in summary object for later usage */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    OPAL_LIST_FOREACH(numa, sorted_list, orte_rmaps_numa_node_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1834,7 +1866,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        copy_numa-&gt;dist_from_closed = numa-&gt;dist_from_closed;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        opal_list_append(&amp;(sum-&gt;sorted_by_dist_list), &amp;copy_numa-&gt;super);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/mca/rmaps/mindist/help-orte-rmaps-md.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/mca/rmaps/mindist/help-orte-rmaps-md.txt	Wed Aug 28 12:03:23 2013	(r29078)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/mca/rmaps/mindist/help-orte-rmaps-md.txt	2013-08-28 12:23:33 EDT (Wed, 28 Aug 2013)	(r29079)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -29,3 +29,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Node: %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI therefore cannot mapp the application as specified.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +[orte-rmaps-mindist:several-hca-devices]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +There are several OpenFabrics devices found on at least one node. Please specify the definite one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  Devices: %d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  Node: %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +Open MPI therefore cannot mapp the application as specified.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c	Wed Aug 28 12:03:23 2013	(r29078)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c	2013-08-28 12:23:33 EDT (Wed, 28 Aug 2013)	(r29079)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -71,6 +71,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mca_base_component_t *c = &amp;mca_rmaps_mindist_component.base_version;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    bool initial_map=true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    bool bynode = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    int ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* this mapper can only handle initial launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     * when mindist mapping is desired
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -245,7 +246,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             * so we call opal_hwloc_base_get_nbobjs_by_type */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            opal_hwloc_base_get_nbobjs_by_type(node-&gt;topology, HWLOC_OBJ_NODE, 0, OPAL_HWLOC_AVAILABLE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            OBJ_CONSTRUCT(&amp;numa_list, opal_list_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            opal_hwloc_get_sorted_numa_list(node-&gt;topology, orte_rmaps_base.device, &amp;numa_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ret = opal_hwloc_get_sorted_numa_list(node-&gt;topology, orte_rmaps_base.device, &amp;numa_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if (ret &gt; 1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                orte_show_help(&quot;help-orte-rmaps-md.txt&quot;, &quot;orte-rmaps-mindist:several-hca-devices&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        true, ret, node-&gt;name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                rc = ORTE_ERR_SILENT;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                goto error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            if (opal_list_get_size(&amp;numa_list) &gt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                j = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                required = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -390,7 +397,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OBJ_DESTRUCT(&amp;node_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    free(orte_rmaps_base.device);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12813.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<li><strong>In reply to:</strong> <a href="12813.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
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
