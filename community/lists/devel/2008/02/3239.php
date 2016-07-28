<?
$subject_val = "[OMPI devel] Newest PLPA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 08:44:14 2008" -->
<!-- isoreceived="20080213134414" -->
<!-- sent="Wed, 13 Feb 2008 08:43:45 -0500" -->
<!-- isosent="20080213134345" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Newest PLPA" -->
<!-- id="5B7E6E59-BF8D-4874-844E-0E0FEAF8DECB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200802131309.m1DD9E4x007771_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Newest PLPA<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 08:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Previous message:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI devel] Please set svn:ignore properly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey!
<br>
<p>This was *just* discussed on the list yesterday and I said that we  
<br>
needed to use the official 3rd party import SVN procedures for PLPA.   
<br>
This was *NOT* done here!
<br>
<p>I also said that I would do an actual PLPA release before it was  
<br>
imported into Open MPI so that we could have an official drop rather  
<br>
than someone grabbing an arbitrary PLPA release.
<br>
<p>Even worse, the new PLPA was mixed in with other code in a single SVN  
<br>
commit.  Bad, bad, bad!
<br>
<p>r17443 should be backed out immediately and done properly.
<br>
<p><p><p><p><p>On Feb 13, 2008, at 8:09 AM, sharonm_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: sharonm
</span><br>
<span class="quotelev1">&gt; Date: 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17443
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17443">https://svn.open-mpi.org/trac/ompi/changeset/17443</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Replaced PLPA to the latest PLPA (plpa-1.1a3r123)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c                    |     4
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/base/ 
</span><br>
<span class="quotelev1">&gt; base.h                                |     6
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/base/ 
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c             |    13 +-
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/linux/ 
</span><br>
<span class="quotelev1">&gt; paffinity_linux_module.c             |    24 ++--
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/linux/plpa/src/libplpa/ 
</span><br>
<span class="quotelev1">&gt; plpa_bottom.h       |     9
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/linux/plpa/src/libplpa/ 
</span><br>
<span class="quotelev1">&gt; plpa_map.c          |   218 +++++++++++++++++++++++++++------------
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/linux/plpa/src/plpa-info/plpa- 
</span><br>
<span class="quotelev1">&gt; info.c       |    23 ++-
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/linux/plpa/src/plpa-taskset/plpa- 
</span><br>
<span class="quotelev1">&gt; taskset.c |    15 +-
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; paffinity.h                                |    12 +-
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/solaris/ 
</span><br>
<span class="quotelev1">&gt; paffinity_solaris_module.c         |    18 +-
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/paffinity/windows/ 
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c         |    18 +-
</span><br>
<span class="quotelev1">&gt;   11 files changed, 224 insertions(+), 136 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2008-02-13  
</span><br>
<span class="quotelev1">&gt; 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -1175,10 +1175,10 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     opal_paffinity_base_cpu_set_t cpus;
</span><br>
<span class="quotelev1">&gt;     opal_carto_base_node_t *hca_node;
</span><br>
<span class="quotelev1">&gt; -    int min_distance = -1, i, max_proc_id;
</span><br>
<span class="quotelev1">&gt; +    int min_distance = -1, i, max_proc_id, num_processors;
</span><br>
<span class="quotelev1">&gt;     const char *hca = ibv_get_device_name(dev);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if(opal_paffinity_base_max_processor_id(&amp;max_proc_id) !=  
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; +    if(opal_paffinity_base_get_processor_info(&amp;num_processors,  
</span><br>
<span class="quotelev1">&gt; &amp;max_proc_id) != OMPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;         max_proc_id = 100; /* Choose something big enough */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hca_node = carto_base_find_node(host_topo, hca);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/base/base.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/base/base.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/base/base.h	2008-02-13 08:09:11 EST  
</span><br>
<span class="quotelev1">&gt; (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -167,7 +167,7 @@
</span><br>
<span class="quotelev1">&gt;      * @return int - OPAL_SUCCESS or OPAL_ERR_NOT_SUPPORTED if not
</span><br>
<span class="quotelev1">&gt;      *         supported
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    OPAL_DECLSPEC int opal_paffinity_base_max_processor_id(int  
</span><br>
<span class="quotelev1">&gt; *max_processor_id);
</span><br>
<span class="quotelev1">&gt; +    OPAL_DECLSPEC int opal_paffinity_base_get_processor_info(int  
</span><br>
<span class="quotelev1">&gt; *num_processors, int *max_processor_id);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Return the max socket number
</span><br>
<span class="quotelev1">&gt; @@ -177,7 +177,7 @@
</span><br>
<span class="quotelev1">&gt;      * @return int - OPAL_SUCCESS or OPAL_ERR_NOT_SUPPORTED if not
</span><br>
<span class="quotelev1">&gt;      *         supported
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    OPAL_DECLSPEC int opal_paffinity_base_max_socket(int  
</span><br>
<span class="quotelev1">&gt; *max_socket);
</span><br>
<span class="quotelev1">&gt; +    OPAL_DECLSPEC int opal_paffinity_base_get_socket_info(int  
</span><br>
<span class="quotelev1">&gt; *num_sockets, int *max_socket_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Return the max core number for a given socket
</span><br>
<span class="quotelev1">&gt; @@ -188,7 +188,7 @@
</span><br>
<span class="quotelev1">&gt;      * @return int - OPAL_SUCCESS or OPAL_ERR_NOT_SUPPORTED if not
</span><br>
<span class="quotelev1">&gt;      *         supported
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    OPAL_DECLSPEC int opal_paffinity_base_max_core(int socket, int  
</span><br>
<span class="quotelev1">&gt; *max_core);
</span><br>
<span class="quotelev1">&gt; +    OPAL_DECLSPEC int opal_paffinity_base_get_core_info(int socket,  
</span><br>
<span class="quotelev1">&gt; int *num_cores, int *max_core_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /**
</span><br>
<span class="quotelev1">&gt;      * Indication of whether a component was successfully selected or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/base/paffinity_base_wrappers.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/base/paffinity_base_wrappers.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/base/paffinity_base_wrappers.c	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -63,27 +63,28 @@
</span><br>
<span class="quotelev1">&gt;     return opal_paffinity_base_module- 
</span><br>
<span class="quotelev2">&gt; &gt;paff_map_to_socket_core(processor_id, socket, core);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int opal_paffinity_base_max_processor_id(int *max_processor_id)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int opal_paffinity_base_get_processor_info(int *num_processors, int  
</span><br>
<span class="quotelev1">&gt; *max_processor_id)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (!opal_paffinity_base_selected) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    return opal_paffinity_base_module- 
</span><br>
<span class="quotelev2">&gt; &gt;paff_max_processor_id(max_processor_id);
</span><br>
<span class="quotelev1">&gt; +    return opal_paffinity_base_module- 
</span><br>
<span class="quotelev2">&gt; &gt;paff_get_processor_info(num_processors, max_processor_id);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int opal_paffinity_base_max_socket(int *max_socket)
</span><br>
<span class="quotelev1">&gt; +int opal_paffinity_base_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (!opal_paffinity_base_selected) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    return opal_paffinity_base_module-&gt;paff_max_socket(max_socket);
</span><br>
<span class="quotelev1">&gt; +    return opal_paffinity_base_module- 
</span><br>
<span class="quotelev2">&gt; &gt;paff_get_socket_info(num_sockets, max_socket_num);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int opal_paffinity_base_max_core(int socket, int *max_core)
</span><br>
<span class="quotelev1">&gt; +int opal_paffinity_base_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (!opal_paffinity_base_selected) {
</span><br>
<span class="quotelev1">&gt;         return OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    return opal_paffinity_base_module-&gt;paff_max_core(socket,  
</span><br>
<span class="quotelev1">&gt; max_core);
</span><br>
<span class="quotelev1">&gt; +    return opal_paffinity_base_module-&gt;paff_get_core_info(socket,  
</span><br>
<span class="quotelev1">&gt; num_cores, max_core_num);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/linux/paffinity_linux_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/linux/paffinity_linux_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/linux/paffinity_linux_module.c	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -45,9 +45,9 @@
</span><br>
<span class="quotelev1">&gt; static int linux_module_get(opal_paffinity_base_cpu_set_t *cpumask);
</span><br>
<span class="quotelev1">&gt; static int linux_module_map_to_processor_id(int socket, int core,  
</span><br>
<span class="quotelev1">&gt; int *processor_id);
</span><br>
<span class="quotelev1">&gt; static int linux_module_map_to_socket_core(int processor_id, int  
</span><br>
<span class="quotelev1">&gt; *socket, int *core);
</span><br>
<span class="quotelev1">&gt; -static int linux_module_max_processor_id(int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; -static int linux_module_max_socket(int *max_socket);
</span><br>
<span class="quotelev1">&gt; -static int linux_module_max_core(int socket, int *max_core);
</span><br>
<span class="quotelev1">&gt; +static int linux_module_get_processor_info(int *num_processors, int  
</span><br>
<span class="quotelev1">&gt; *max_processor_id);
</span><br>
<span class="quotelev1">&gt; +static int linux_module_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num);
</span><br>
<span class="quotelev1">&gt; +static int linux_module_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Linux paffinity module
</span><br>
<span class="quotelev1">&gt; @@ -64,9 +64,9 @@
</span><br>
<span class="quotelev1">&gt;     linux_module_get,
</span><br>
<span class="quotelev1">&gt;     linux_module_map_to_processor_id,
</span><br>
<span class="quotelev1">&gt;     linux_module_map_to_socket_core,
</span><br>
<span class="quotelev1">&gt; -    linux_module_max_processor_id,
</span><br>
<span class="quotelev1">&gt; -    linux_module_max_socket,
</span><br>
<span class="quotelev1">&gt; -    linux_module_max_core,
</span><br>
<span class="quotelev1">&gt; +    linux_module_get_processor_info,
</span><br>
<span class="quotelev1">&gt; +    linux_module_get_socket_info,
</span><br>
<span class="quotelev1">&gt; +    linux_module_get_core_info,
</span><br>
<span class="quotelev1">&gt;     NULL
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -168,18 +168,18 @@
</span><br>
<span class="quotelev1">&gt;    return opal_paffinity_linux_plpa_map_to_socket_core(processor_id,  
</span><br>
<span class="quotelev1">&gt; socket, core);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int linux_module_max_processor_id(int *max_processor_id)
</span><br>
<span class="quotelev1">&gt; +static int linux_module_get_processor_info(int *num_processors, int  
</span><br>
<span class="quotelev1">&gt; *max_processor_id)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -   return  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_linux_plpa_max_processor_id(max_processor_id);
</span><br>
<span class="quotelev1">&gt; +   return  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_linux_plpa_get_processor_info(num_processors,  
</span><br>
<span class="quotelev1">&gt; max_processor_id);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int linux_module_max_socket(int *max_socket)
</span><br>
<span class="quotelev1">&gt; +static int linux_module_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -   return opal_paffinity_linux_plpa_max_socket(max_socket);
</span><br>
<span class="quotelev1">&gt; +   return opal_paffinity_linux_plpa_get_socket_info(num_sockets,  
</span><br>
<span class="quotelev1">&gt; max_socket_num);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int linux_module_max_core(int socket, int *max_core)
</span><br>
<span class="quotelev1">&gt; +static int linux_module_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -   return opal_paffinity_linux_plpa_max_core(socket, max_core);
</span><br>
<span class="quotelev1">&gt; +   return opal_paffinity_linux_plpa_get_core_info(socket,  
</span><br>
<span class="quotelev1">&gt; num_cores, max_core_num);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/linux/plpa/src/libplpa/ 
</span><br>
<span class="quotelev1">&gt; plpa_bottom.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/linux/plpa/src/libplpa/plpa_bottom.h	 
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/linux/plpa/src/libplpa/plpa_bottom.h	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -4,6 +4,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2006-2007 Cisco, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -26,7 +27,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Internal macro to munge names */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -/* Preprocessors are fun -- the double indirection is necessary.
</span><br>
<span class="quotelev1">&gt; +/* Preprocessors are fun -- the double inderection is necessary.
</span><br>
<span class="quotelev1">&gt;    Extra bonus points if you can figure out why! :p */
</span><br>
<span class="quotelev1">&gt; #define PLPA_MUNGE_NAME(a, b) PLPA_MUNGE_NAME2(a, b)
</span><br>
<span class="quotelev1">&gt; #define PLPA_MUNGE_NAME2(a, b) a ## b
</span><br>
<span class="quotelev1">&gt; @@ -119,13 +120,13 @@
</span><br>
<span class="quotelev1">&gt; int PLPA_NAME(map_to_socket_core)(int processor_id, int *socket, int  
</span><br>
<span class="quotelev1">&gt; *core);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Return the max processor ID */
</span><br>
<span class="quotelev1">&gt; -int PLPA_NAME(max_processor_id)(int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; +int PLPA_NAME(get_processor_info)(int *num_processors, int  
</span><br>
<span class="quotelev1">&gt; *max_processor_id);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Return the max socket number */
</span><br>
<span class="quotelev1">&gt; -int PLPA_NAME(max_socket)(int *max_socket);
</span><br>
<span class="quotelev1">&gt; +int PLPA_NAME(get_socket_info)(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Return the max core number for a given socket */
</span><br>
<span class="quotelev1">&gt; -int PLPA_NAME(max_core)(int socket, int *max_core);
</span><br>
<span class="quotelev1">&gt; +int PLPA_NAME(get_core_info)(int socket, int *num_cores, int  
</span><br>
<span class="quotelev1">&gt; *max_core_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Shut down PLPA */
</span><br>
<span class="quotelev1">&gt; int PLPA_NAME(finalize)(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/linux/plpa/src/libplpa/plpa_map.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/linux/plpa/src/libplpa/plpa_map.c	 
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/linux/plpa/src/libplpa/plpa_map.c	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -130,18 +130,25 @@
</span><br>
<span class="quotelev1">&gt; } tuple_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int supported = 0;
</span><br>
<span class="quotelev1">&gt; -static int max_processor = -1;
</span><br>
<span class="quotelev1">&gt; -static int max_socket = -1;
</span><br>
<span class="quotelev1">&gt; -static int *max_core = NULL;
</span><br>
<span class="quotelev1">&gt; -static int max_core_overall = -1;
</span><br>
<span class="quotelev1">&gt; +static int num_processors = -1;
</span><br>
<span class="quotelev1">&gt; +static int max_processor_num = -1;
</span><br>
<span class="quotelev1">&gt; +static int num_sockets = -1;
</span><br>
<span class="quotelev1">&gt; +static int max_socket_num = -1;
</span><br>
<span class="quotelev1">&gt; +static int *max_core_num = NULL;
</span><br>
<span class="quotelev1">&gt; +static int *num_cores = NULL;
</span><br>
<span class="quotelev1">&gt; +static int max_core_num_overall = -1;
</span><br>
<span class="quotelev1">&gt; static tuple_t *map_processor_id_to_tuple = NULL;
</span><br>
<span class="quotelev1">&gt; static tuple_t ***map_tuple_to_processor_id = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void clear_cache(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    if (NULL != max_core) {
</span><br>
<span class="quotelev1">&gt; -        free(max_core);
</span><br>
<span class="quotelev1">&gt; -        max_core = NULL;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != max_core_num) {
</span><br>
<span class="quotelev1">&gt; +        free(max_core_num);
</span><br>
<span class="quotelev1">&gt; +        max_core_num = NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (NULL != num_cores) {
</span><br>
<span class="quotelev1">&gt; +        free(num_cores);
</span><br>
<span class="quotelev1">&gt; +        num_cores = NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if (NULL != map_processor_id_to_tuple) {
</span><br>
<span class="quotelev1">&gt;         free(map_processor_id_to_tuple);
</span><br>
<span class="quotelev1">&gt; @@ -156,15 +163,17 @@
</span><br>
<span class="quotelev1">&gt;         map_tuple_to_processor_id = NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    max_processor = -1;
</span><br>
<span class="quotelev1">&gt; -    max_socket = -1;
</span><br>
<span class="quotelev1">&gt; -    max_core_overall = -1;
</span><br>
<span class="quotelev1">&gt; +    num_processors = max_processor_num = -1;
</span><br>
<span class="quotelev1">&gt; +    num_sockets = max_socket_num = -1;
</span><br>
<span class="quotelev1">&gt; +    max_core_num_overall = -1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void load_cache(const char *sysfs_mount)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int i, j, k, invalid_entry, fd;
</span><br>
<span class="quotelev1">&gt;     char path[PATH_MAX], buf[8];
</span><br>
<span class="quotelev1">&gt; +    PLPA_NAME(cpu_set_t) *cores_on_sockets;
</span><br>
<span class="quotelev1">&gt; +    int found;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for the parent directory */
</span><br>
<span class="quotelev1">&gt;     sprintf(path, &quot;%s/devices/system/cpu&quot;, sysfs_mount);
</span><br>
<span class="quotelev1">&gt; @@ -173,23 +182,30 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Go through and find the max processor ID */
</span><br>
<span class="quotelev1">&gt; -    for (max_processor = 0; max_processor &lt; PLPA_BITMASK_CPU_MAX;
</span><br>
<span class="quotelev1">&gt; -         ++max_processor) {
</span><br>
<span class="quotelev1">&gt; -        sprintf(path, &quot;%s/devices/system/cpu/cpu%d&quot;, sysfs_mount,
</span><br>
<span class="quotelev1">&gt; -                max_processor);
</span><br>
<span class="quotelev1">&gt; -        if ( access(path, R_OK|X_OK) ) {
</span><br>
<span class="quotelev1">&gt; +    for (num_processors = max_processor_num = i = 0;
</span><br>
<span class="quotelev1">&gt; +         i &lt; PLPA_BITMASK_CPU_MAX; ++i) {
</span><br>
<span class="quotelev1">&gt; +        sprintf(path, &quot;%s/devices/system/cpu/cpu%d&quot;, sysfs_mount, i);
</span><br>
<span class="quotelev1">&gt; +        if (0 != access(path, (R_OK | X_OK))) {
</span><br>
<span class="quotelev1">&gt; +            max_processor_num = i - 1;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +        ++num_processors;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* If we found no processors, then we have no topology info */
</span><br>
<span class="quotelev1">&gt; +    if (0 == num_processors) {
</span><br>
<span class="quotelev1">&gt; +        clear_cache();
</span><br>
<span class="quotelev1">&gt; +        return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    --max_processor;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Malloc space for the first map (processor ID -&gt; tuple).
</span><br>
<span class="quotelev1">&gt;        Include enough space for one invalid entry. */
</span><br>
<span class="quotelev1">&gt; -    map_processor_id_to_tuple = malloc(sizeof(tuple_t) *  
</span><br>
<span class="quotelev1">&gt; (max_processor + 2));
</span><br>
<span class="quotelev1">&gt; +    map_processor_id_to_tuple = malloc(sizeof(tuple_t) *
</span><br>
<span class="quotelev1">&gt; +                                       (max_processor_num + 2));
</span><br>
<span class="quotelev1">&gt;     if (NULL == map_processor_id_to_tuple) {
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt;= max_processor; ++i) {
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_processor_num; ++i) {
</span><br>
<span class="quotelev1">&gt;         map_processor_id_to_tuple[i].processor_id = i;
</span><br>
<span class="quotelev1">&gt;         map_processor_id_to_tuple[i].socket = -1;
</span><br>
<span class="quotelev1">&gt;         map_processor_id_to_tuple[i].core = -1;
</span><br>
<span class="quotelev1">&gt; @@ -200,57 +216,119 @@
</span><br>
<span class="quotelev1">&gt;     map_processor_id_to_tuple[invalid_entry].socket = -1;
</span><br>
<span class="quotelev1">&gt;     map_processor_id_to_tuple[invalid_entry].core = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* Malloc space for the max number of cores on each socket */
</span><br>
<span class="quotelev1">&gt; -    max_core = malloc(sizeof(int) * (max_processor + 1));
</span><br>
<span class="quotelev1">&gt; -    if (NULL == max_core) {
</span><br>
<span class="quotelev1">&gt; -        clear_cache();
</span><br>
<span class="quotelev1">&gt; -        return;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt;= max_processor; ++i) {
</span><br>
<span class="quotelev1">&gt; -        max_core[i] = -1;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     /* Build a cached map of (socket,core) tuples */
</span><br>
<span class="quotelev1">&gt; -    for ( i = 0; i &lt;= max_processor; i++ ) {
</span><br>
<span class="quotelev1">&gt; +    for (found = 0, i = 0; i &lt;= max_processor_num; ++i) {
</span><br>
<span class="quotelev1">&gt;         sprintf(path, &quot;%s/devices/system/cpu/cpu%d/topology/core_id&quot;,
</span><br>
<span class="quotelev1">&gt;                 sysfs_mount, i);
</span><br>
<span class="quotelev1">&gt;         fd = open(path, O_RDONLY);
</span><br>
<span class="quotelev1">&gt;         if ( fd &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt; -            clear_cache();
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if ( read(fd, buf, 7) &lt;= 0 ) {
</span><br>
<span class="quotelev1">&gt; -            clear_cache();
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         sscanf(buf, &quot;%d&quot;, &amp;(map_processor_id_to_tuple[i].core));
</span><br>
<span class="quotelev1">&gt;         close(fd);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        sprintf(path, &quot;%s/devices/system/cpu/cpu%d/topology/ 
</span><br>
<span class="quotelev1">&gt; physical_package_id&quot;,
</span><br>
<span class="quotelev1">&gt; +        sprintf(path,
</span><br>
<span class="quotelev1">&gt; +                &quot;%s/devices/system/cpu/cpu%d/topology/ 
</span><br>
<span class="quotelev1">&gt; physical_package_id&quot;,
</span><br>
<span class="quotelev1">&gt;                 sysfs_mount, i);
</span><br>
<span class="quotelev1">&gt;         fd = open(path, O_RDONLY);
</span><br>
<span class="quotelev1">&gt;         if ( fd &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt; -            clear_cache();
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if ( read(fd, buf, 7) &lt;= 0 ) {
</span><br>
<span class="quotelev1">&gt; -            clear_cache();
</span><br>
<span class="quotelev1">&gt; -            return;
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         sscanf(buf, &quot;%d&quot;, &amp;(map_processor_id_to_tuple[i].socket));
</span><br>
<span class="quotelev1">&gt;         close(fd);
</span><br>
<span class="quotelev1">&gt; +        found = 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        /* Compute some globals */
</span><br>
<span class="quotelev1">&gt; -        if (map_processor_id_to_tuple[i].socket &gt; max_socket) {
</span><br>
<span class="quotelev1">&gt; -            max_socket = map_processor_id_to_tuple[i].socket;
</span><br>
<span class="quotelev1">&gt; +        /* Keep a running tab on the max socket number */
</span><br>
<span class="quotelev1">&gt; +        if (map_processor_id_to_tuple[i].socket &gt; max_socket_num) {
</span><br>
<span class="quotelev1">&gt; +            max_socket_num = map_processor_id_to_tuple[i].socket;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Now that we know the max number of sockets, allocate some
</span><br>
<span class="quotelev1">&gt; +       arrays */
</span><br>
<span class="quotelev1">&gt; +    max_core_num = malloc(sizeof(int) * (max_socket_num + 1));
</span><br>
<span class="quotelev1">&gt; +    if (NULL == max_core_num) {
</span><br>
<span class="quotelev1">&gt; +        clear_cache();
</span><br>
<span class="quotelev1">&gt; +        return;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    num_cores = malloc(sizeof(int) * (max_socket_num + 1));
</span><br>
<span class="quotelev1">&gt; +    if (NULL == num_cores) {
</span><br>
<span class="quotelev1">&gt; +        clear_cache();
</span><br>
<span class="quotelev1">&gt; +        return;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +        num_cores[i] = -1;
</span><br>
<span class="quotelev1">&gt; +        max_core_num[i] = -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Find the max core number on each socket */
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_processor_num; ++i) {
</span><br>
<span class="quotelev1">&gt;         if (map_processor_id_to_tuple[i].core &gt;
</span><br>
<span class="quotelev1">&gt; -            max_core[map_processor_id_to_tuple[i].socket]) {
</span><br>
<span class="quotelev1">&gt; -            max_core[map_processor_id_to_tuple[i].socket] =
</span><br>
<span class="quotelev1">&gt; +            max_core_num[map_processor_id_to_tuple[i].socket]) {
</span><br>
<span class="quotelev1">&gt; +            max_core_num[map_processor_id_to_tuple[i].socket] =
</span><br>
<span class="quotelev1">&gt;                 map_processor_id_to_tuple[i].core;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        if (max_core[map_processor_id_to_tuple[i].socket] &gt;  
</span><br>
<span class="quotelev1">&gt; max_core_overall) {
</span><br>
<span class="quotelev1">&gt; -            max_core_overall =  
</span><br>
<span class="quotelev1">&gt; max_core[map_processor_id_to_tuple[i].socket];
</span><br>
<span class="quotelev1">&gt; +        if (max_core_num[map_processor_id_to_tuple[i].socket] &gt;
</span><br>
<span class="quotelev1">&gt; +            max_core_num_overall) {
</span><br>
<span class="quotelev1">&gt; +            max_core_num_overall =
</span><br>
<span class="quotelev1">&gt; +                max_core_num[map_processor_id_to_tuple[i].socket];
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* If we didn't find any core_id/physical_package_id's, then we
</span><br>
<span class="quotelev1">&gt; +       don't have the topology info */
</span><br>
<span class="quotelev1">&gt; +    if (!found) {
</span><br>
<span class="quotelev1">&gt; +        clear_cache();
</span><br>
<span class="quotelev1">&gt; +        return;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Go through and count the number of unique sockets found.  It
</span><br>
<span class="quotelev1">&gt; +       may not be the same as max_socket_num because there may be
</span><br>
<span class="quotelev1">&gt; +       &quot;holes&quot; -- e.g., sockets 0 and 3 are used, but sockets 1 and 2
</span><br>
<span class="quotelev1">&gt; +       are empty. */
</span><br>
<span class="quotelev1">&gt; +    for (j = i = 0; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +        if (max_core_num[i] &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; +            ++j;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (j &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +        num_sockets = j;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Count how many cores are available on each socket.  This may
</span><br>
<span class="quotelev1">&gt; +       not be the same as max_core_num[socket_num] if there are
</span><br>
<span class="quotelev1">&gt; +       &quot;holes&quot;.  I don't know if holes can happen (i.e., if specific
</span><br>
<span class="quotelev1">&gt; +       cores can be taken offline), but what the heck... */
</span><br>
<span class="quotelev1">&gt; +    cores_on_sockets = malloc(sizeof(PLPA_NAME(cpu_set_t)) *
</span><br>
<span class="quotelev1">&gt; +                              (max_socket_num + 1));
</span><br>
<span class="quotelev1">&gt; +    if (NULL == cores_on_sockets) {
</span><br>
<span class="quotelev1">&gt; +        clear_cache();
</span><br>
<span class="quotelev1">&gt; +        return;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +        PLPA_CPU_ZERO(&amp;(cores_on_sockets[i]));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_processor_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +        if (map_processor_id_to_tuple[i].socket &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; +            PLPA_CPU_SET(map_processor_id_to_tuple[i].core,
</span><br>
<span class="quotelev1">&gt; +                          
</span><br>
<span class="quotelev1">&gt; &amp;(cores_on_sockets[map_processor_id_to_tuple[i].socket]));
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +        int count = 0;
</span><br>
<span class="quotelev1">&gt; +        for (j = 0; j &lt; PLPA_BITMASK_CPU_MAX; ++j) {
</span><br>
<span class="quotelev1">&gt; +            if (PLPA_CPU_ISSET(j, &amp;(cores_on_sockets[i]))) {
</span><br>
<span class="quotelev1">&gt; +                ++count;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if (count &gt; 0) {
</span><br>
<span class="quotelev1">&gt; +            num_cores[i] = count;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -258,26 +336,27 @@
</span><br>
<span class="quotelev1">&gt;        (socket,core) =&gt; processor_id.  This map simply points to
</span><br>
<span class="quotelev1">&gt;        entries in the other map (i.e., it's by reference instead of by
</span><br>
<span class="quotelev1">&gt;        value). */
</span><br>
<span class="quotelev1">&gt; -    map_tuple_to_processor_id = malloc(sizeof(tuple_t **) *  
</span><br>
<span class="quotelev1">&gt; (max_socket + 1));
</span><br>
<span class="quotelev1">&gt; +    map_tuple_to_processor_id = malloc(sizeof(tuple_t **) *
</span><br>
<span class="quotelev1">&gt; +                                       (max_socket_num + 1));
</span><br>
<span class="quotelev1">&gt;     if (NULL == map_tuple_to_processor_id) {
</span><br>
<span class="quotelev1">&gt;         clear_cache();
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     map_tuple_to_processor_id[0] = malloc(sizeof(tuple_t *) *
</span><br>
<span class="quotelev1">&gt; -                                          ((max_socket + 1) *
</span><br>
<span class="quotelev1">&gt; -                                           (max_core_overall + 1)));
</span><br>
<span class="quotelev1">&gt; +                                          ((max_socket_num + 1) *
</span><br>
<span class="quotelev1">&gt; +                                           (max_core_num_overall +  
</span><br>
<span class="quotelev1">&gt; 1)));
</span><br>
<span class="quotelev1">&gt;     if (NULL == map_tuple_to_processor_id[0]) {
</span><br>
<span class="quotelev1">&gt;         clear_cache();
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* Set pointers for 2nd dimension */
</span><br>
<span class="quotelev1">&gt; -    for (i = 1; i &lt;= max_socket; ++i) {
</span><br>
<span class="quotelev1">&gt; +    for (i = 1; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt;         map_tuple_to_processor_id[i] =
</span><br>
<span class="quotelev1">&gt; -            map_tuple_to_processor_id[i - 1] + max_core_overall;
</span><br>
<span class="quotelev1">&gt; +            map_tuple_to_processor_id[i - 1] + max_core_num_overall;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* Compute map */
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt;= max_socket; ++i) {
</span><br>
<span class="quotelev1">&gt; -        for (j = 0; j &lt;= max_core_overall; ++j) {
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +        for (j = 0; j &lt;= max_core_num_overall; ++j) {
</span><br>
<span class="quotelev1">&gt;             /* Default to the invalid entry in the other map, meaning
</span><br>
<span class="quotelev1">&gt;                that this (socket,core) combination doesn't exist
</span><br>
<span class="quotelev1">&gt;                (e.g., the core number does not exist in this socket,
</span><br>
<span class="quotelev1">&gt; @@ -288,7 +367,7 @@
</span><br>
<span class="quotelev1">&gt;             /* See if this (socket,core) tuple exists in the other
</span><br>
<span class="quotelev1">&gt;                map.  If so, set this entry to point to it (overriding
</span><br>
<span class="quotelev1">&gt;                the invalid entry default). */
</span><br>
<span class="quotelev1">&gt; -            for (k = 0; k &lt;= max_processor; ++k) {
</span><br>
<span class="quotelev1">&gt; +            for (k = 0; k &lt;= max_processor_num; ++k) {
</span><br>
<span class="quotelev1">&gt;                 if (map_processor_id_to_tuple[k].socket == i &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                     map_processor_id_to_tuple[k].core == j) {
</span><br>
<span class="quotelev1">&gt;                     map_tuple_to_processor_id[i][j] =
</span><br>
<span class="quotelev1">&gt; @@ -370,8 +449,8 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for some invalid entries */
</span><br>
<span class="quotelev1">&gt; -    if (socket &lt; 0 || socket &gt; max_socket ||
</span><br>
<span class="quotelev1">&gt; -        core &lt; 0 || core &gt; max_core_overall ||
</span><br>
<span class="quotelev1">&gt; +    if (socket &lt; 0 || socket &gt; max_socket_num ||
</span><br>
<span class="quotelev1">&gt; +        core &lt; 0 || core &gt; max_core_num_overall ||
</span><br>
<span class="quotelev1">&gt;         NULL == processor_id) {
</span><br>
<span class="quotelev1">&gt;         return EINVAL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -403,7 +482,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for some invalid entries */
</span><br>
<span class="quotelev1">&gt; -    if (processor_id &lt; 0 || processor_id &gt; max_processor ||
</span><br>
<span class="quotelev1">&gt; +    if (processor_id &lt; 0 || processor_id &gt; max_processor_num ||
</span><br>
<span class="quotelev1">&gt;         NULL == socket ||
</span><br>
<span class="quotelev1">&gt;         NULL == core) {
</span><br>
<span class="quotelev1">&gt;         return EINVAL;
</span><br>
<span class="quotelev1">&gt; @@ -415,7 +494,8 @@
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int PLPA_NAME(max_processor_id)(int *max_processor_id_arg)
</span><br>
<span class="quotelev1">&gt; +int PLPA_NAME(get_processor_info)(int *num_processors_arg,
</span><br>
<span class="quotelev1">&gt; +                                  int *max_processor_num_arg)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -427,7 +507,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for bozo arguments */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == max_processor_id_arg) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == max_processor_num_arg || NULL ==  
</span><br>
<span class="quotelev1">&gt; num_processors_arg) {
</span><br>
<span class="quotelev1">&gt;         return EINVAL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -437,12 +517,13 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt; -    *max_processor_id_arg = max_processor;
</span><br>
<span class="quotelev1">&gt; +    *num_processors_arg = num_processors;
</span><br>
<span class="quotelev1">&gt; +    *max_processor_num_arg = max_processor_num;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Return the max socket number */
</span><br>
<span class="quotelev1">&gt; -int PLPA_NAME(max_socket)(int *max_socket_arg)
</span><br>
<span class="quotelev1">&gt; +int PLPA_NAME(get_socket_info)(int *num_sockets_arg, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num_arg)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -454,7 +535,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for bozo arguments */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == max_socket_arg) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == max_socket_num_arg || NULL == num_sockets_arg) {
</span><br>
<span class="quotelev1">&gt;         return EINVAL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -464,12 +545,14 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt; -    *max_socket_arg = max_socket;
</span><br>
<span class="quotelev1">&gt; +    *num_sockets_arg = num_sockets;
</span><br>
<span class="quotelev1">&gt; +    *max_socket_num_arg = max_socket_num;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -/* Return the max core number for a given socket */
</span><br>
<span class="quotelev1">&gt; -int PLPA_NAME(max_core)(int socket, int *max_core_arg)
</span><br>
<span class="quotelev1">&gt; +/* Return the number of cores in a socket and the max core ID  
</span><br>
<span class="quotelev1">&gt; number */
</span><br>
<span class="quotelev1">&gt; +int PLPA_NAME(get_core_info)(int socket, int *num_cores_arg,
</span><br>
<span class="quotelev1">&gt; +                             int *max_core_num_arg)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -481,7 +564,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for bozo arguments */
</span><br>
<span class="quotelev1">&gt; -    if (NULL == max_core_arg) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL == max_core_num_arg || NULL == num_cores_arg) {
</span><br>
<span class="quotelev1">&gt;         return EINVAL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -491,11 +574,12 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Check for some invalid entries */
</span><br>
<span class="quotelev1">&gt; -    if (socket &lt; 0 || socket &gt; max_socket) {
</span><br>
<span class="quotelev1">&gt; +    if (socket &lt; 0 || socket &gt; max_socket_num || -1 ==  
</span><br>
<span class="quotelev1">&gt; max_core_num[socket]) {
</span><br>
<span class="quotelev1">&gt;         return EINVAL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt; -    *max_core_arg = max_core[socket];
</span><br>
<span class="quotelev1">&gt; +    *num_cores_arg = num_cores[socket];
</span><br>
<span class="quotelev1">&gt; +    *max_core_num_arg = max_core_num[socket];
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/linux/plpa/src/plpa-info/plpa- 
</span><br>
<span class="quotelev1">&gt; info.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/linux/plpa/src/plpa-info/plpa-info.c	 
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/linux/plpa/src/plpa-info/plpa-info.c	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev1">&gt;     int ret = 0;
</span><br>
<span class="quotelev1">&gt;     int need_help = 0;
</span><br>
<span class="quotelev1">&gt;     int show_topo = 0;
</span><br>
<span class="quotelev1">&gt; -    int have_topo, max_socket, max_core;
</span><br>
<span class="quotelev1">&gt; +    int have_topo, num_sockets, max_socket_num, num_cores,  
</span><br>
<span class="quotelev1">&gt; max_core_num;
</span><br>
<span class="quotelev1">&gt;     PLPA_NAME(api_type_t) api_probe;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for (i = 1; i &lt; argc; ++i) {
</span><br>
<span class="quotelev1">&gt; @@ -73,10 +73,15 @@
</span><br>
<span class="quotelev1">&gt;         have_topo = 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Kernel topology support: %s\n&quot;, have_topo ? &quot;yes&quot; : &quot;no&quot;);
</span><br>
<span class="quotelev1">&gt; -    if (0 != PLPA_NAME(max_socket)(&amp;max_socket)) {
</span><br>
<span class="quotelev1">&gt; -        max_socket = -1;
</span><br>
<span class="quotelev1">&gt; +    if (0 != PLPA_NAME(get_socket_info)(&amp;num_sockets,  
</span><br>
<span class="quotelev1">&gt; &amp;max_socket_num)) {
</span><br>
<span class="quotelev1">&gt; +        num_sockets = max_socket_num = -1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    printf(&quot;Number of processor sockets: &quot;);
</span><br>
<span class="quotelev1">&gt; +    if (have_topo &amp;&amp; num_sockets &gt;= 0) {
</span><br>
<span class="quotelev1">&gt; +        printf(&quot;%d\n&quot;, num_sockets);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        printf(&quot;unknown\n&quot;);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    printf(&quot;Number of processor sockets: %d\n&quot;, have_topo ?  
</span><br>
<span class="quotelev1">&gt; max_socket : -1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* If asked, print the map */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -84,13 +89,11 @@
</span><br>
<span class="quotelev1">&gt;         if (have_topo) {
</span><br>
<span class="quotelev1">&gt;             /* Remember that max_socket and max_core values are
</span><br>
<span class="quotelev1">&gt;                0-indexed */
</span><br>
<span class="quotelev1">&gt; -            for (i = 0; i &lt;= max_socket; ++i) {
</span><br>
<span class="quotelev1">&gt; -                ret = PLPA_NAME(max_core)(i, &amp;max_core);
</span><br>
<span class="quotelev1">&gt; +            for (i = 0; i &lt;= max_socket_num; ++i) {
</span><br>
<span class="quotelev1">&gt; +                ret = PLPA_NAME(get_core_info)(i, &amp;num_cores,  
</span><br>
<span class="quotelev1">&gt; &amp;max_core_num);
</span><br>
<span class="quotelev1">&gt;                 if (0 == ret) {
</span><br>
<span class="quotelev1">&gt; -                    printf(&quot;Socket %d: %d core%s\n&quot;, i, max_core + 1,
</span><br>
<span class="quotelev1">&gt; -                           (0 == max_core) ? &quot;&quot; : &quot;s&quot;);
</span><br>
<span class="quotelev1">&gt; -                } else {
</span><br>
<span class="quotelev1">&gt; -                    printf(&quot;Socket %d: unknown cores\n&quot;, i);
</span><br>
<span class="quotelev1">&gt; +                    printf(&quot;Socket %d: %d core%s\n&quot;, i, num_cores,
</span><br>
<span class="quotelev1">&gt; +                           (1 == num_cores) ? &quot;&quot; : &quot;s&quot;);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/linux/plpa/src/plpa-taskset/plpa- 
</span><br>
<span class="quotelev1">&gt; taskset.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/linux/plpa/src/plpa-taskset/plpa- 
</span><br>
<span class="quotelev1">&gt; taskset.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/linux/plpa/src/plpa-taskset/plpa- 
</span><br>
<span class="quotelev1">&gt; taskset.c	2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -87,11 +87,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static char *cpu_set_to_list(const PLPA_NAME(cpu_set_t) *cpu_set)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    size_t i, j, last_bit, size = PLPA_BITMASK_NUM_ELEMENTS;
</span><br>
<span class="quotelev1">&gt; +    size_t i, j, last_bit, size = PLPA_BITMASK_CPU_MAX;
</span><br>
<span class="quotelev1">&gt;     unsigned long long mask_value = 0;
</span><br>
<span class="quotelev1">&gt;     /* Upper bound on string length: 4 digits per
</span><br>
<span class="quotelev1">&gt; -       PLPA_BITMASK_NUM_ELEMENTS + 1 comma for each */
</span><br>
<span class="quotelev1">&gt; -    static char str[PLPA_BITMASK_NUM_ELEMENTS * 5];
</span><br>
<span class="quotelev1">&gt; +       PLPA_BITMASK_CPU_MAX + 1 comma for each */
</span><br>
<span class="quotelev1">&gt; +    static char str[PLPA_BITMASK_CPU_MAX * 5];
</span><br>
<span class="quotelev1">&gt;     char temp[8];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (sizeof(mask_value) * 8 &lt; size) {
</span><br>
<span class="quotelev1">&gt; @@ -156,7 +156,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static unsigned long long cpu_set_to_ll(const PLPA_NAME(cpu_set_t)  
</span><br>
<span class="quotelev1">&gt; *cpu_set)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    size_t i, size = PLPA_BITMASK_NUM_ELEMENTS;
</span><br>
<span class="quotelev1">&gt; +    size_t i, size = PLPA_BITMASK_CPU_MAX;
</span><br>
<span class="quotelev1">&gt;     unsigned long long mask_value = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (sizeof(mask_value) * 8 &lt; size) {
</span><br>
<span class="quotelev1">&gt; @@ -164,7 +164,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; size; ++i) {
</span><br>
<span class="quotelev1">&gt;         if (PLPA_CPU_ISSET(i, cpu_set)) {
</span><br>
<span class="quotelev1">&gt; -            mask_value += 1 &lt;&lt; i;
</span><br>
<span class="quotelev1">&gt; +            mask_value |= 1llu &lt;&lt; i;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     return mask_value;
</span><br>
<span class="quotelev1">&gt; @@ -184,7 +184,7 @@
</span><br>
<span class="quotelev1">&gt;     return ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int mask_to_cpu_set(char *mask_string, PLPA_NAME(cpu_set_t)  
</span><br>
<span class="quotelev1">&gt; *cpu_set)
</span><br>
<span class="quotelev1">&gt; +static int mask_to_cpu_set(const char *mask_string,  
</span><br>
<span class="quotelev1">&gt; PLPA_NAME(cpu_set_t) *cpu_set)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     size_t i;
</span><br>
<span class="quotelev1">&gt;     unsigned int mask_value;
</span><br>
<span class="quotelev1">&gt; @@ -192,7 +192,7 @@
</span><br>
<span class="quotelev1">&gt;     PLPA_CPU_ZERO(cpu_set);
</span><br>
<span class="quotelev1">&gt;     sscanf(mask_string, &quot;%x&quot;, &amp;mask_value);
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; sizeof(mask_value) * 8; ++i) {
</span><br>
<span class="quotelev1">&gt; -        if (0 != (mask_value &amp; (1 &lt;&lt; i))) {
</span><br>
<span class="quotelev1">&gt; +        if (0 != (mask_value &amp; (1u &lt;&lt; i))) {
</span><br>
<span class="quotelev1">&gt;             PLPA_CPU_SET(i, cpu_set);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; @@ -371,7 +371,6 @@
</span><br>
<span class="quotelev1">&gt;         { &quot;cpu-list&quot;, 0, NULL, 'c' },
</span><br>
<span class="quotelev1">&gt;         { &quot;help&quot;, 0, NULL, 'h' },
</span><br>
<span class="quotelev1">&gt;         { &quot;version&quot;, 0, NULL, 'V' },
</span><br>
<span class="quotelev1">&gt; -        { &quot;testing&quot;, 0, NULL, 't' },
</span><br>
<span class="quotelev1">&gt;         /* Undocumented testing function */
</span><br>
<span class="quotelev1">&gt;         { &quot;testing&quot;, 0, NULL, 't' },
</span><br>
<span class="quotelev1">&gt;         { NULL, 0, NULL, 0 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/paffinity.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/paffinity.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/paffinity.h	2008-02-13 08:09:11 EST  
</span><br>
<span class="quotelev1">&gt; (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -194,7 +194,7 @@
</span><br>
<span class="quotelev1">&gt;  * return OPAL_SUCCESS or OPAL_ERR_NOT_SUPPORTED if not
</span><br>
<span class="quotelev1">&gt;  * supporeted (solaris, windows, etc...)
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -typedef int (*opal_paffinity_base_module_max_processor_id_fn_t)(int  
</span><br>
<span class="quotelev1">&gt; *max_processor_id);
</span><br>
<span class="quotelev1">&gt; +typedef int (*opal_paffinity_base_module_get_processor_info_fn_t) 
</span><br>
<span class="quotelev1">&gt; (int *num_processors, int *max_processor_id);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Provides the number of sockets in a host. currently supported
</span><br>
<span class="quotelev1">&gt; @@ -203,7 +203,7 @@
</span><br>
<span class="quotelev1">&gt;  * return OPAL_SUCCESS or OPAL_ERR_NOT_SUPPORTED if not
</span><br>
<span class="quotelev1">&gt;  * supporeted (solaris, windows, etc...)
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -typedef int (*opal_paffinity_base_module_max_socket_fn_t)(int  
</span><br>
<span class="quotelev1">&gt; *max_socket);
</span><br>
<span class="quotelev1">&gt; +typedef int (*opal_paffinity_base_module_get_socket_info_fn_t)(int  
</span><br>
<span class="quotelev1">&gt; *num_sockets, int *max_socket_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Provides the number of cores in a socket. currently supported
</span><br>
<span class="quotelev1">&gt; @@ -212,7 +212,7 @@
</span><br>
<span class="quotelev1">&gt;  * return OPAL_SUCCESS or OPAL_ERR_NOT_SUPPORTED if not
</span><br>
<span class="quotelev1">&gt;  * supporeted (solaris, windows, etc...)
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; -typedef int (*opal_paffinity_base_module_max_core)(int socket, int  
</span><br>
<span class="quotelev1">&gt; *max_core);
</span><br>
<span class="quotelev1">&gt; +typedef int (*opal_paffinity_base_module_get_core_info_fn_t)(int  
</span><br>
<span class="quotelev1">&gt; socket, int *num_cores, int *max_core_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt; @@ -262,13 +262,13 @@
</span><br>
<span class="quotelev1">&gt;     opal_paffinity_base_module_map_to_socket_core_fn_t   
</span><br>
<span class="quotelev1">&gt; paff_map_to_socket_core;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /** Return the max processor ID */
</span><br>
<span class="quotelev1">&gt; -    opal_paffinity_base_module_max_processor_id_fn_t  
</span><br>
<span class="quotelev1">&gt; paff_max_processor_id;
</span><br>
<span class="quotelev1">&gt; +    opal_paffinity_base_module_get_processor_info_fn_t  
</span><br>
<span class="quotelev1">&gt; paff_get_processor_info;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /** Return the max socket number */
</span><br>
<span class="quotelev1">&gt; -    opal_paffinity_base_module_max_socket_fn_t paff_max_socket;
</span><br>
<span class="quotelev1">&gt; +    opal_paffinity_base_module_get_socket_info_fn_t  
</span><br>
<span class="quotelev1">&gt; paff_get_socket_info;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /** Return the max core number */
</span><br>
<span class="quotelev1">&gt; -    opal_paffinity_base_module_max_core paff_max_core;
</span><br>
<span class="quotelev1">&gt; +    opal_paffinity_base_module_get_core_info_fn_t paff_get_core_info;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /** Shut down this module */
</span><br>
<span class="quotelev1">&gt;     opal_paffinity_base_module_finalize_fn_t paff_module_finalize;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/solaris/paffinity_solaris_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/solaris/paffinity_solaris_module.c	 
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/solaris/paffinity_solaris_module.c	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -45,9 +45,9 @@
</span><br>
<span class="quotelev1">&gt; static int cpumask_to_id(opal_paffinity_base_cpu_set_t cpumask);
</span><br>
<span class="quotelev1">&gt; static int solaris_module_map_to_processor_id(int socket, int core,  
</span><br>
<span class="quotelev1">&gt; int *processor_id);
</span><br>
<span class="quotelev1">&gt; static int solaris_module_map_to_socket_core(int processor_id, int  
</span><br>
<span class="quotelev1">&gt; *socket, int *core);
</span><br>
<span class="quotelev1">&gt; -static int solaris_module_max_processor_id(int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; -static int solaris_module_max_socket(int *max_socket);
</span><br>
<span class="quotelev1">&gt; -static int solaris_module_max_core(int socket, int *max_core);
</span><br>
<span class="quotelev1">&gt; +static int solaris_module_get_processor_info(int *num_processors,  
</span><br>
<span class="quotelev1">&gt; int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; +static int solaris_module_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num);
</span><br>
<span class="quotelev1">&gt; +static int solaris_module_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Solaris paffinity module
</span><br>
<span class="quotelev1">&gt; @@ -64,9 +64,9 @@
</span><br>
<span class="quotelev1">&gt;     solaris_module_get,
</span><br>
<span class="quotelev1">&gt;     solaris_module_map_to_processor_id,
</span><br>
<span class="quotelev1">&gt;     solaris_module_map_to_socket_core,
</span><br>
<span class="quotelev1">&gt; -    solaris_module_max_processor_id,
</span><br>
<span class="quotelev1">&gt; -    solaris_module_max_socket,
</span><br>
<span class="quotelev1">&gt; -    solaris_module_max_core,
</span><br>
<span class="quotelev1">&gt; +    solaris_module_get_processor_info,
</span><br>
<span class="quotelev1">&gt; +    solaris_module_get_socket_info,
</span><br>
<span class="quotelev1">&gt; +    solaris_module_get_core_info,
</span><br>
<span class="quotelev1">&gt;     solaris_module_finalize
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -173,17 +173,17 @@
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int solaris_module_max_processor_id(int *max_processor_id)
</span><br>
<span class="quotelev1">&gt; +static int solaris_module_get_processor_info(int *num_processors,  
</span><br>
<span class="quotelev1">&gt; int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int solaris_module_max_socket(int *max_socket)
</span><br>
<span class="quotelev1">&gt; +static int solaris_module_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num);
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int solaris_module_max_core(int socket, int *max_core)
</span><br>
<span class="quotelev1">&gt; +static int solaris_module_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num);
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/paffinity/windows/paffinity_windows_module.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/paffinity/windows/paffinity_windows_module.c	 
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/paffinity/windows/paffinity_windows_module.c	 
</span><br>
<span class="quotelev1">&gt; 2008-02-13 08:09:11 EST (Wed, 13 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -34,9 +34,9 @@
</span><br>
<span class="quotelev1">&gt; static int windows_module_get(opal_paffinity_base_cpu_set_t *cpumask);
</span><br>
<span class="quotelev1">&gt; static int windows_module_map_to_processor_id(int socket, int core,  
</span><br>
<span class="quotelev1">&gt; int *processor_id);
</span><br>
<span class="quotelev1">&gt; static int windows_module_map_to_socket_core(int processor_id, int  
</span><br>
<span class="quotelev1">&gt; *socket, int *core);
</span><br>
<span class="quotelev1">&gt; -static int windows_module_max_processor_id(int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; -static int windows_module_max_socket(int *max_socket);
</span><br>
<span class="quotelev1">&gt; -static int windows_module_max_core(int socket, int *max_core);
</span><br>
<span class="quotelev1">&gt; +static int windows_module_get_processor_info(int *num_processors,  
</span><br>
<span class="quotelev1">&gt; int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; +static int windows_module_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num);
</span><br>
<span class="quotelev1">&gt; +static int windows_module_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static SYSTEM_INFO sys_info;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -54,9 +54,9 @@
</span><br>
<span class="quotelev1">&gt;     windows_module_get,
</span><br>
<span class="quotelev1">&gt;     windows_module_map_to_processor_id,
</span><br>
<span class="quotelev1">&gt;     windows_module_map_to_socket_core,
</span><br>
<span class="quotelev1">&gt; -    windows_module_max_processor_id,
</span><br>
<span class="quotelev1">&gt; -    windows_module_max_socket,
</span><br>
<span class="quotelev1">&gt; -    windows_module_max_core,
</span><br>
<span class="quotelev1">&gt; +    windows_module_get_processor_info,
</span><br>
<span class="quotelev1">&gt; +    windows_module_get_socket_info,
</span><br>
<span class="quotelev1">&gt; +    windows_module_get_core_info,
</span><br>
<span class="quotelev1">&gt;     windows_module_finalize
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -134,17 +134,17 @@
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int windows_module_max_processor_id(int *max_processor_id)
</span><br>
<span class="quotelev1">&gt; +static int windows_module_get_processor_info(int *num_processors,  
</span><br>
<span class="quotelev1">&gt; int *max_processor_id);
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int windows_module_max_socket(int *max_socket)
</span><br>
<span class="quotelev1">&gt; +static int windows_module_get_socket_info(int *num_sockets, int  
</span><br>
<span class="quotelev1">&gt; *max_socket_num);
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int windows_module_max_core(int socket, int *max_core)
</span><br>
<span class="quotelev1">&gt; +static int windows_module_get_core_info(int socket, int *num_cores,  
</span><br>
<span class="quotelev1">&gt; int *max_core_num);
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Previous message:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI devel] Please set svn:ignore properly"</a>
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
