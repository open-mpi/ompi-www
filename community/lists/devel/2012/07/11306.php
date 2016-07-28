<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 19 12:18:55 2012" -->
<!-- isoreceived="20120719161855" -->
<!-- sent="Thu, 19 Jul 2012 09:18:46 -0700" -->
<!-- isosent="20120719161846" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib" -->
<!-- id="F980903C-E38A-4B61-BCB1-1618707DAE89_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120718172948.D362C15F679_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-19 12:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="11305.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've spent hours trying to fix this commit so openib would even compile again, but failed. Just too many errors. Setting aside the need to include &lt;sys/types.h&gt;, &lt;sys/stat.h&gt;, and &lt;unistd.h&gt; to handle the stat call under linux, there is no function &quot;read_module_param&quot; anywhere, nor is &quot;device&quot; defined in btl_openib_component.c
<br>
<p>Please - a tad more care in what gets committed??
<br>
<p>I finally just reverted it so the trunk could build.
<br>
<p>On Jul 18, 2012, at 10:29 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2012-07-18 13:29:48 EDT (Wed, 18 Jul 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26804
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26804">https://svn.open-mpi.org/trac/ompi/changeset/26804</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; btl/openib: limit each process to a ppn fraction of the available registered memory when using mellanox hardware (mlx4 and mthca)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib.c            |    74 ++++++++++++++++++++++++++++++++++++++- 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib.h            |     4 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c  |    15 ++++++++                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt |    19 ++++++++++                              
</span><br>
<span class="quotelev1">&gt;   4 files changed, 110 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.c	Wed Jul 18 13:29:37 2012	(r26803)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.c	2012-07-18 13:29:48 EDT (Wed, 18 Jul 2012)	(r26804)
</span><br>
<span class="quotelev1">&gt; @@ -70,6 +70,10 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; +#ifdef OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/mca/hwloc/hwloc.h&quot;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #ifndef MIN
</span><br>
<span class="quotelev1">&gt; #define MIN(a,b) ((a)&lt;(b)?(a):(b))
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; @@ -579,6 +583,65 @@
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +/* calculate memory registation limits */
</span><br>
<span class="quotelev1">&gt; +static uint64_t calculate_total_mem (void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_t machine;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    machine = hwloc_get_next_obj_by_type (opal_hwloc_topology, HWLOC_OBJ_MACHINE, NULL);
</span><br>
<span class="quotelev1">&gt; +    if (NULL == machine) {
</span><br>
<span class="quotelev1">&gt; +        return 0;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt; +    return machine-&gt;memory.total_memory;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +    return 0;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static uint64_t calculate_max_reg (void) 
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    struct stat statinfo;
</span><br>
<span class="quotelev1">&gt; +    uint64_t mtts_per_seg = 1;
</span><br>
<span class="quotelev1">&gt; +    uint64_t num_mtt = 1 &lt;&lt; 19;
</span><br>
<span class="quotelev1">&gt; +    uint64_t reserved_mtt = 0;
</span><br>
<span class="quotelev1">&gt; +    uint64_t max_reg, mem_total;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mem_total = calculate_total_mem ();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (0 == stat(&quot;/sys/module/mlx4_core/parameters&quot;, &amp;statinfo)) {
</span><br>
<span class="quotelev1">&gt; +        mtts_per_seg = 1 &lt;&lt; read_module_param(&quot;/sys/module/mlx4_core/parameters/log_mtts_per_seg&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +        num_mtt = 1 &lt;&lt; read_module_param(&quot;/sys/module/mlx4_core/parameters/log_num_mtt&quot;, 20);
</span><br>
<span class="quotelev1">&gt; +        if (1 == num_mtt) {
</span><br>
<span class="quotelev1">&gt; +            /* NTH: is 19 a minimum? when log_num_mtt is set to 0 use 19 */
</span><br>
<span class="quotelev1">&gt; +            num_mtt = 1 &lt;&lt; 20;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        max_reg = (num_mtt - reserved_mtt) * getpagesize () * mtts_per_seg;
</span><br>
<span class="quotelev1">&gt; +    } else if (0 == stat(&quot;/sys/module/ib_mthca/parameters&quot;, &amp;statinfo)) {
</span><br>
<span class="quotelev1">&gt; +        mtts_per_seg = 1 &lt;&lt; read_module_param(&quot;/sys/module/ib_mthca/parameters/log_mtts_per_seg&quot;, 1);
</span><br>
<span class="quotelev1">&gt; +        num_mtt = read_module_param(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;, 1 &lt;&lt; 20);
</span><br>
<span class="quotelev1">&gt; +        reserved_mtt = read_module_param(&quot;/sys/module/ib_mthca/parameters/fmr_reserved_mtts&quot;, 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        max_reg = (num_mtt - reserved_mtt) * getpagesize () * mtts_per_seg;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        /* need to update to determine the registration limit for this configuration */
</span><br>
<span class="quotelev1">&gt; +        max_reg = mem_total;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* NTH: print a warning if we can't register more than 75% of physical memory */
</span><br>
<span class="quotelev1">&gt; +    if (max_reg &lt; mem_total * 3 / 4) {
</span><br>
<span class="quotelev1">&gt; +        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;reg mem limit low&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                       orte_process_info.nodename, (unsigned long)(max_reg &gt;&gt; 20),
</span><br>
<span class="quotelev1">&gt; +                       (unsigned long)(mem_total &gt;&gt; 20));
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* limit us to 87.5% of the registered memory (some fluff for QPs, file systems, etc) */
</span><br>
<span class="quotelev1">&gt; +    return (max_reg * 7) &gt;&gt; 3;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  *  add a proc to this btl module
</span><br>
<span class="quotelev1">&gt;  *    creates an endpoint that is setup on the
</span><br>
<span class="quotelev1">&gt; @@ -592,7 +655,7 @@
</span><br>
<span class="quotelev1">&gt;     opal_bitmap_t* reachable)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_module_t* openib_btl = (mca_btl_openib_module_t*)btl;
</span><br>
<span class="quotelev1">&gt; -    int i,j, rc;
</span><br>
<span class="quotelev1">&gt; +    int i,j, rc, local_procs;
</span><br>
<span class="quotelev1">&gt;     int rem_subnet_id_port_cnt;
</span><br>
<span class="quotelev1">&gt;     int lcl_subnet_id_port_cnt = 0;
</span><br>
<span class="quotelev1">&gt;     int btl_rank = 0;
</span><br>
<span class="quotelev1">&gt; @@ -621,13 +684,17 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; (int) nprocs; i++) {
</span><br>
<span class="quotelev1">&gt; +    for (i = 0, local_procs = 0 ; i &lt; (int) nprocs; i++) {
</span><br>
<span class="quotelev1">&gt;         struct ompi_proc_t* ompi_proc = ompi_procs[i];
</span><br>
<span class="quotelev1">&gt;         mca_btl_openib_proc_t* ib_proc;
</span><br>
<span class="quotelev1">&gt;         int remote_matching_port;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         opal_output(-1, &quot;add procs: adding proc %d&quot;, i);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +        if (OPAL_PROC_ON_LOCAL_NODE(ompi_proc-&gt;proc_flags)) {
</span><br>
<span class="quotelev1">&gt; +            local_procs ++;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         /* OOB, XOOB, and RDMACM do not support SELF comunication, so
</span><br>
<span class="quotelev1">&gt;          * mark the prco as unreachable by openib btl  */
</span><br>
<span class="quotelev1">&gt;         if (OPAL_EQUAL == orte_util_compare_name_fields
</span><br>
<span class="quotelev1">&gt; @@ -794,6 +861,9 @@
</span><br>
<span class="quotelev1">&gt;         peers[i] = endpoint;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;local_procs += local_procs;
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;device-&gt;mem_reg_max = calculate_max_reg () / openib_btl-&gt;local_procs;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     return mca_btl_openib_size_queues(openib_btl, nprocs);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.h	Wed Jul 18 13:29:37 2012	(r26803)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.h	2012-07-18 13:29:48 EDT (Wed, 18 Jul 2012)	(r26804)
</span><br>
<span class="quotelev1">&gt; @@ -390,6 +390,8 @@
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_device_qp_t *qps;
</span><br>
<span class="quotelev1">&gt;     /* Maximum value supported by this device for max_inline_data */
</span><br>
<span class="quotelev1">&gt;     uint32_t max_inline_data;
</span><br>
<span class="quotelev1">&gt; +    /* Registration limit and current count */
</span><br>
<span class="quotelev1">&gt; +    uint64_t mem_reg_max, mem_reg_active;
</span><br>
<span class="quotelev1">&gt; } mca_btl_openib_device_t;
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_DECLARATION(mca_btl_openib_device_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -467,6 +469,8 @@
</span><br>
<span class="quotelev1">&gt;     mca_btl_base_module_error_cb_fn_t error_cb; /**&lt; error handler */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_module_qp_t * qps;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    int local_procs;                   /** number of local procs */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct mca_btl_openib_module_t mca_btl_openib_module_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	Wed Jul 18 13:29:37 2012	(r26803)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2012-07-18 13:29:48 EDT (Wed, 18 Jul 2012)	(r26804)
</span><br>
<span class="quotelev1">&gt; @@ -596,6 +596,13 @@
</span><br>
<span class="quotelev1">&gt;     enum ibv_access_flags access_flag = (enum ibv_access_flags) (IBV_ACCESS_LOCAL_WRITE |
</span><br>
<span class="quotelev1">&gt;         IBV_ACCESS_REMOTE_WRITE | IBV_ACCESS_REMOTE_READ);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if (device-&gt;mem_reg_max &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        device-&gt;mem_reg_max &lt; (device-&gt;mem_reg_active + size)) {
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    device-&gt;mem_reg_active += size;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #if HAVE_DECL_IBV_ACCESS_SO
</span><br>
<span class="quotelev1">&gt;     if (reg-&gt;flags &amp; MCA_MPOOL_FLAGS_SO_MEM) {
</span><br>
<span class="quotelev1">&gt;         access_flag |= IBV_ACCESS_SO;
</span><br>
<span class="quotelev1">&gt; @@ -637,6 +644,9 @@
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    device-&gt;mem_reg_active -= (uint64_t) (reg-&gt;bound - reg-&gt;base + 1);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     openib_reg-&gt;mr = NULL;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -818,6 +828,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;cpcs = NULL;
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;num_cpcs = 0;
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;local_procs = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             mca_btl_base_active_message_trigger[MCA_BTL_TAG_IB].cbfunc = btl_openib_control;
</span><br>
<span class="quotelev1">&gt;             mca_btl_base_active_message_trigger[MCA_BTL_TAG_IB].cbdata = NULL;
</span><br>
<span class="quotelev1">&gt; @@ -1670,6 +1681,10 @@
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    device-&gt;mem_reg_active = 0;
</span><br>
<span class="quotelev1">&gt; +    /* NTH: set some high default until we know how many local peers we have */
</span><br>
<span class="quotelev1">&gt; +    device-&gt;mem_reg_max    = 1ull &lt;&lt; 48;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     device-&gt;ib_dev = ib_dev;
</span><br>
<span class="quotelev1">&gt;     device-&gt;ib_dev_context = ibv_open_device(ib_dev);
</span><br>
<span class="quotelev1">&gt;     device-&gt;ib_pd = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Wed Jul 18 13:29:37 2012	(r26803)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt	2012-07-18 13:29:48 EDT (Wed, 18 Jul 2012)	(r26804)
</span><br>
<span class="quotelev1">&gt; @@ -689,3 +689,22 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Use &quot;ibv_devinfo -v&quot; on the local host to see the GID table of this
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt; +[reg mem limit low]
</span><br>
<span class="quotelev1">&gt; +WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; +allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt; +run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; +physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; +relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; +memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; +physical memory on your machine.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev1">&gt; +parameters:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Local host:              %s
</span><br>
<span class="quotelev1">&gt; +  Registerable memory:     %lu MiB
</span><br>
<span class="quotelev1">&gt; +  Total memory:            %lu MiB
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<li><strong>Previous message:</strong> <a href="11305.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26801 - trunk/ompi/include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="11307.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib"</a>
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
