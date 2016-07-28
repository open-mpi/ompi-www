<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18252";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 11:18:38 2008" -->
<!-- isoreceived="20080425151838" -->
<!-- sent="Fri, 25 Apr 2008 11:18:31 -0400" -->
<!-- isosent="20080425151831" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18252" -->
<!-- id="4811F647.4000408_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200804231452.m3NEq94H021095_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18252<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 11:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3759.php">Sérgio Durigan Júnior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit causes mpirun to segfault when running the IBM spawn tests 
<br>
on our slurm platforms (it may affect others as well). The failures only 
<br>
happen when mpirun is run in a batch script.
<br>
<p>The backtrace I get is:
<br>
Program terminated with signal 11, Segmentation fault.
<br>
#0  0x0000002a969b9dbe in daemon_leader (jobid=2643591169, 
<br>
num_local_contributors=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=1 '\001', data=0x588c40, flag=1 '\001', participants=0x566e80)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at grpcomm_basic_module.c:1196
<br>
1196                OBJ_RELEASE(collection);
<br>
(gdb) bt
<br>
#0  0x0000002a969b9dbe in daemon_leader (jobid=2643591169, 
<br>
num_local_contributors=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=1 '\001', data=0x588c40, flag=1 '\001', participants=0x566e80)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at grpcomm_basic_module.c:1196
<br>
#1  0x0000002a969ba316 in daemon_collective (jobid=2643591169, 
<br>
num_local_contributors=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=1 '\001', data=0x588c40, flag=1 '\001', participants=0x566e80)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at grpcomm_basic_module.c:1279
<br>
#2  0x0000002a956a94a9 in orte_odls_base_default_collect_data 
<br>
(proc=0x588eb8, buf=0x588ef0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at base/odls_base_default_fns.c:2183
<br>
#3  0x0000002a95692990 in process_commands (sender=0x588eb8, 
<br>
buffer=0x588ef0, tag=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at orted/orted_comm.c:485
<br>
#4  0x0000002a956920a0 in orte_daemon_cmd_processor (fd=-1, 
<br>
opal_event=1, data=0x588e90)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at orted/orted_comm.c:271
<br>
#5  0x0000002a957fe4ca in event_process_active (base=0x50d940) at 
<br>
event.c:647
<br>
#6  0x0000002a957fea8b in opal_event_base_loop (base=0x50d940, flags=0) 
<br>
at event.c:819
<br>
#7  0x0000002a957fe6c5 in opal_event_loop (flags=0) at event.c:726
<br>
#8  0x0000002a957fe57e in opal_event_dispatch () at event.c:662
<br>
#9  0x000000000040335d in orterun (argc=5, argv=0x7fbffff008) at 
<br>
orterun.c:551
<br>
#10 0x0000000000402bb3 in main (argc=5, argv=0x7fbffff008) at main.c:13
<br>
(gdb)
<br>
<p><p>I ran with
<br>
srun -N 3 -b mpirun -mca mpi_yield_when_idle 1 
<br>
~/ompi-tests/ibm/dynamic/spawn_
<br>
multiple
<br>
<p>Thanks,
<br>
<p>Tim
<br>
rhc_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18252
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18252">https://svn.open-mpi.org/trac/ompi/changeset/18252</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add a loadbalancing feature to the round-robin mapper - more to be sent to devel list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fix a potential problem with RM-provided nodenames not matching returns from gethostname - ensure that the HNP's nodename gets DNS-resolved when comparing against RM-provided hostnames. Note that this may be an issue for RM-based clusters that don't have local DNS resolution, but hopefully that is more indicative of a poorly configured system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/ras/base/ras_base_node.c            |     6 +++                                     
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rmaps/base/base.h                   |     4 ++                                      
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rmaps/base/rmaps_base_open.c        |    10 +++++++                                 
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c |    55 +++++++++++++++++++-------------------- 
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rmaps/round_robin/rmaps_rr.c        |    50 ++++++++++++++++++++++++++++++++----    
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orterun/orterun.c                 |     3 ++                                      
</span><br>
<span class="quotelev1">&gt;    6 files changed, 92 insertions(+), 36 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ras/base/ras_base_node.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/ras/base/ras_base_node.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ras/base/ras_base_node.c	2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -23,6 +23,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/util/if.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -111,7 +112,7 @@
</span><br>
<span class="quotelev1">&gt;           * first position since it is the first one entered. We need to check to see
</span><br>
<span class="quotelev1">&gt;           * if this node is the same as the HNP's node so we don't double-enter it
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (0 == strcmp(node-&gt;name, hnp_node-&gt;name)) {
</span><br>
<span class="quotelev1">&gt; +        if (0 == strcmp(node-&gt;name, hnp_node-&gt;name) || opal_ifislocal(node-&gt;name)) {
</span><br>
<span class="quotelev1">&gt;              OPAL_OUTPUT_VERBOSE((5, orte_ras_base.ras_output,
</span><br>
<span class="quotelev1">&gt;                                   &quot;%s ras:base:node_insert updating HNP info to %ld slots&quot;,
</span><br>
<span class="quotelev1">&gt;                                   ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; @@ -124,6 +125,9 @@
</span><br>
<span class="quotelev1">&gt;              hnp_node-&gt;slots_alloc = node-&gt;slots_alloc;
</span><br>
<span class="quotelev1">&gt;              hnp_node-&gt;slots_max = node-&gt;slots_max;
</span><br>
<span class="quotelev1">&gt;              hnp_node-&gt;launch_id = node-&gt;launch_id;
</span><br>
<span class="quotelev1">&gt; +            /* use the RM's name for the node */
</span><br>
<span class="quotelev1">&gt; +            free(hnp_node-&gt;name);
</span><br>
<span class="quotelev1">&gt; +            hnp_node-&gt;name = strdup(node-&gt;name);
</span><br>
<span class="quotelev1">&gt;              /* set the node to available for use */
</span><br>
<span class="quotelev1">&gt;              hnp_node-&gt;allocate = true;
</span><br>
<span class="quotelev1">&gt;              /* update the total slots in the job */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/base/base.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/base/base.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/base/base.h	2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -57,10 +57,12 @@
</span><br>
<span class="quotelev1">&gt;      bool pernode;
</span><br>
<span class="quotelev1">&gt;      /** number of ppn for n_per_node mode */
</span><br>
<span class="quotelev1">&gt;      int npernode;
</span><br>
<span class="quotelev1">&gt; -    /* do we not allow use of the localhost */
</span><br>
<span class="quotelev1">&gt; +    /* do not allow use of the localhost */
</span><br>
<span class="quotelev1">&gt;      bool no_use_local;
</span><br>
<span class="quotelev1">&gt;      /* display the map after it is computed */
</span><br>
<span class="quotelev1">&gt;      bool display_map;
</span><br>
<span class="quotelev1">&gt; +    /* balance load across nodes */
</span><br>
<span class="quotelev1">&gt; +    bool loadbalance;
</span><br>
<span class="quotelev1">&gt;  } orte_rmaps_base_t;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_open.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_open.c	2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -125,6 +125,16 @@
</span><br>
<span class="quotelev1">&gt;          orte_rmaps_base.oversubscribe = true;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; +    /* Do we want to loadbalance the job */
</span><br>
<span class="quotelev1">&gt; +    param = mca_base_param_reg_int_name(&quot;rmaps&quot;, &quot;base_loadbalance&quot;,
</span><br>
<span class="quotelev1">&gt; +                                        &quot;Balance total number of procs across all allocated nodes&quot;,
</span><br>
<span class="quotelev1">&gt; +                                        false, false, (int)false, &amp;value);
</span><br>
<span class="quotelev1">&gt; +    orte_rmaps_base.loadbalance = OPAL_INT_TO_BOOL(value);
</span><br>
<span class="quotelev1">&gt; +    /* if we are doing npernode or pernode, then we cannot loadbalance */
</span><br>
<span class="quotelev1">&gt; +    if (orte_rmaps_base.pernode) {
</span><br>
<span class="quotelev1">&gt; +        orte_rmaps_base.loadbalance = false;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    
</span><br>
<span class="quotelev1">&gt;      /* should we display the map after determining it? */
</span><br>
<span class="quotelev1">&gt;      mca_base_param_reg_int_name(&quot;rmaps&quot;, &quot;base_display_map&quot;,
</span><br>
<span class="quotelev1">&gt;                                  &quot;Whether to display the process map after it is computed&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -88,18 +88,17 @@
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    /** check that anything is here */
</span><br>
<span class="quotelev1">&gt; -    if (0 == opal_list_get_size(allocated_nodes)) {
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; -                       &quot;orte-rmaps-base:no-available-resources&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true);
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +        /** check that anything is here */
</span><br>
<span class="quotelev1">&gt; +        if (0 == opal_list_get_size(allocated_nodes)) {
</span><br>
<span class="quotelev1">&gt; +            opal_show_help(&quot;help-orte-rmaps-base.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                           &quot;orte-rmaps-base:no-available-resources&quot;,
</span><br>
<span class="quotelev1">&gt; +                           true);
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      /* did the app_context contain a hostfile? */
</span><br>
<span class="quotelev1">&gt; -    if (NULL != app-&gt;hostfile) {
</span><br>
<span class="quotelev1">&gt; +    if (NULL != app &amp;&amp; NULL != app-&gt;hostfile) {
</span><br>
<span class="quotelev1">&gt;          /* yes - filter the node list through the file, removing
</span><br>
<span class="quotelev1">&gt;           * any nodes not found in the file
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; @@ -108,27 +107,27 @@
</span><br>
<span class="quotelev1">&gt;              ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;              return rc;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; +        /** check that anything is here */
</span><br>
<span class="quotelev1">&gt; +        if (0 == opal_list_get_size(allocated_nodes)) {
</span><br>
<span class="quotelev1">&gt; +            opal_show_help(&quot;help-orte-rmaps-base.txt&quot;, &quot;orte-rmaps-base:no-mapped-node&quot;,
</span><br>
<span class="quotelev1">&gt; +                           true, app-&gt;app, app-&gt;hostfile);
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt; -    /** check that anything is here */
</span><br>
<span class="quotelev1">&gt; -    if (0 == opal_list_get_size(allocated_nodes)) {
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-orte-rmaps-base.txt&quot;, &quot;orte-rmaps-base:no-mapped-node&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, app-&gt;app, app-&gt;hostfile);
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    /* now filter the list through any -host specification */
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (rc = orte_util_filter_dash_host_nodes(allocated_nodes,
</span><br>
<span class="quotelev1">&gt; -                                                               app-&gt;dash_host))) {
</span><br>
<span class="quotelev1">&gt; -        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    /** check that anything is left! */
</span><br>
<span class="quotelev1">&gt; -    if (0 == opal_list_get_size(allocated_nodes)) {
</span><br>
<span class="quotelev1">&gt; -        opal_show_help(&quot;help-orte-rmaps-base.txt&quot;, &quot;orte-rmaps-base:no-mapped-node&quot;,
</span><br>
<span class="quotelev1">&gt; -                       true, app-&gt;app, &quot;&quot;);
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +   /* now filter the list through any -host specification */
</span><br>
<span class="quotelev1">&gt; +    if (NULL != app) {
</span><br>
<span class="quotelev1">&gt; +        if (ORTE_SUCCESS != (rc = orte_util_filter_dash_host_nodes(allocated_nodes,
</span><br>
<span class="quotelev1">&gt; +                                                                   app-&gt;dash_host))) {
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        /** check that anything is left! */
</span><br>
<span class="quotelev1">&gt; +        if (0 == opal_list_get_size(allocated_nodes)) {
</span><br>
<span class="quotelev1">&gt; +            opal_show_help(&quot;help-orte-rmaps-base.txt&quot;, &quot;orte-rmaps-base:no-mapped-node&quot;,
</span><br>
<span class="quotelev1">&gt; +                           true, app-&gt;app, &quot;&quot;);
</span><br>
<span class="quotelev1">&gt; +            return ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      /* If the &quot;no local&quot; option was set, then remove the local node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/round_robin/rmaps_rr.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/round_robin/rmaps_rr.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/round_robin/rmaps_rr.c	2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -46,6 +46,7 @@
</span><br>
<span class="quotelev1">&gt;   * Local variable
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static opal_list_item_t *cur_node_item = NULL;
</span><br>
<span class="quotelev1">&gt; +static int ppn = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Create a default mapping for the application, scheduling round
</span><br>
<span class="quotelev1">&gt; @@ -228,10 +229,12 @@
</span><br>
<span class="quotelev1">&gt;              /* Update the number of procs allocated */
</span><br>
<span class="quotelev1">&gt;              ++num_alloc;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -            /** if all the procs have been mapped OR we have fully used up this node, then
</span><br>
<span class="quotelev1">&gt; -             * break from the loop
</span><br>
<span class="quotelev1">&gt; +            /** if all the procs have been mapped OR we have fully used up this node
</span><br>
<span class="quotelev1">&gt; +             * OR we are at our ppn and loadbalancing, then break from the loop 
</span><br>
<span class="quotelev1">&gt;               */
</span><br>
<span class="quotelev1">&gt; -            if(num_alloc == app-&gt;num_procs || ORTE_ERR_NODE_FULLY_USED == rc) {
</span><br>
<span class="quotelev1">&gt; +            if (num_alloc == app-&gt;num_procs ||
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERR_NODE_FULLY_USED == rc ||
</span><br>
<span class="quotelev1">&gt; +                (orte_rmaps_base.loadbalance &amp;&amp; i == ppn)) {
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; @@ -241,7 +244,9 @@
</span><br>
<span class="quotelev1">&gt;           * node is NOT max'd out
</span><br>
<span class="quotelev1">&gt;           *
</span><br>
<span class="quotelev1">&gt;           */
</span><br>
<span class="quotelev1">&gt; -        if (i &lt; (num_slots_to_take-1) &amp;&amp; ORTE_ERR_NODE_FULLY_USED != rc) {
</span><br>
<span class="quotelev1">&gt; +        if (i &lt; (num_slots_to_take-1) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +            ORTE_ERR_NODE_FULLY_USED != rc &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +            i != ppn) {
</span><br>
<span class="quotelev1">&gt;              continue;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          cur_node_item = next;
</span><br>
<span class="quotelev1">&gt; @@ -261,7 +266,7 @@
</span><br>
<span class="quotelev1">&gt;      orte_std_cntr_t i;
</span><br>
<span class="quotelev1">&gt;      opal_list_t node_list;
</span><br>
<span class="quotelev1">&gt;      opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt; -    orte_node_t *node;
</span><br>
<span class="quotelev1">&gt; +    orte_node_t *node, **nodes;
</span><br>
<span class="quotelev1">&gt;      orte_vpid_t vpid_start;
</span><br>
<span class="quotelev1">&gt;      orte_std_cntr_t num_nodes, num_slots;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt; @@ -276,6 +281,39 @@
</span><br>
<span class="quotelev1">&gt;      /* start at the beginning... */
</span><br>
<span class="quotelev1">&gt;      vpid_start = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    /* if loadbalancing is requested, then we need to compute
</span><br>
<span class="quotelev1">&gt; +     * the #procs/node - note that this cannot be done
</span><br>
<span class="quotelev1">&gt; +     * if we are doing pernode or if #procs was not given
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (orte_rmaps_base.loadbalance &amp;&amp; !map-&gt;pernode) {
</span><br>
<span class="quotelev1">&gt; +        /* compute total #procs */
</span><br>
<span class="quotelev1">&gt; +        for(i=0; i &lt; jdata-&gt;num_apps; i++) {
</span><br>
<span class="quotelev1">&gt; +            app = apps[i];
</span><br>
<span class="quotelev1">&gt; +            if (0 == app-&gt;num_procs) {
</span><br>
<span class="quotelev1">&gt; +                /* can't do it - just move on */
</span><br>
<span class="quotelev1">&gt; +                opal_show_help(&quot;help-orte-rmaps-rr.txt&quot;,
</span><br>
<span class="quotelev1">&gt; +                               &quot;orte-rmaps-rr:loadbalance-and-zero-np&quot;,
</span><br>
<span class="quotelev1">&gt; +                               true);
</span><br>
<span class="quotelev1">&gt; +                rc = ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +                goto error;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            ppn += app-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        /* get the total avail nodes */
</span><br>
<span class="quotelev1">&gt; +        nodes = (orte_node_t**)orte_node_pool-&gt;addr;
</span><br>
<span class="quotelev1">&gt; +        num_nodes=0;
</span><br>
<span class="quotelev1">&gt; +        for (i=0; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt; +            if (NULL == nodes[i]) {
</span><br>
<span class="quotelev1">&gt; +                break;  /* nodes are left aligned, so stop when we hit a null */
</span><br>
<span class="quotelev1">&gt; +            } 
</span><br>
<span class="quotelev1">&gt; +            if (nodes[i]-&gt;allocate) {
</span><br>
<span class="quotelev1">&gt; +                num_nodes++;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        /* compute the balance */
</span><br>
<span class="quotelev1">&gt; +        ppn = ppn / num_nodes;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* cycle through the app_contexts, mapping them sequentially */
</span><br>
<span class="quotelev1">&gt;      for(i=0; i &lt; jdata-&gt;num_apps; i++) {
</span><br>
<span class="quotelev1">&gt;          app = apps[i];
</span><br>
<span class="quotelev1">&gt; @@ -387,7 +425,7 @@
</span><br>
<span class="quotelev1">&gt;                  goto error;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +        
</span><br>
<span class="quotelev1">&gt;          /** track the total number of processes we mapped */
</span><br>
<span class="quotelev1">&gt;          jdata-&gt;num_procs += app-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/orterun.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/orterun.c	2008-04-23 10:52:09 EDT (Wed, 23 Apr 2008)
</span><br>
<span class="quotelev1">&gt; @@ -215,6 +215,9 @@
</span><br>
<span class="quotelev1">&gt;      { &quot;rmaps&quot;, &quot;base&quot;, &quot;no_oversubscribe&quot;, '\0', &quot;nooversubscribe&quot;, &quot;nooversubscribe&quot;, 0,
</span><br>
<span class="quotelev1">&gt;        NULL, OPAL_CMD_LINE_TYPE_BOOL,
</span><br>
<span class="quotelev1">&gt;        &quot;Nodes are not to be oversubscribed, even if the system supports such operation&quot;},
</span><br>
<span class="quotelev1">&gt; +    { &quot;rmaps&quot;, &quot;base&quot;, &quot;loadbalance&quot;, '\0', &quot;loadbalance&quot;, &quot;loadbalance&quot;, 0,
</span><br>
<span class="quotelev1">&gt; +      NULL, OPAL_CMD_LINE_TYPE_BOOL,
</span><br>
<span class="quotelev1">&gt; +      &quot;Balance total number of procs across all allocated nodes&quot;},
</span><br>
<span class="quotelev1">&gt;      { &quot;rmaps&quot;, &quot;base&quot;, &quot;display_map&quot;, '\0', &quot;display-map&quot;, &quot;display-map&quot;, 0,
</span><br>
<span class="quotelev1">&gt;        NULL, OPAL_CMD_LINE_TYPE_BOOL,
</span><br>
<span class="quotelev1">&gt;        &quot;Display the process map just before launch&quot;},
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
<li><strong>Next message:</strong> <a href="3759.php">Sérgio Durigan Júnior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
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
