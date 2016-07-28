<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 - trunk/orte/mca/rmaps/mindist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 23:50:09 2013" -->
<!-- isoreceived="20131108045009" -->
<!-- sent="Thu, 7 Nov 2013 20:49:56 -0800" -->
<!-- isosent="20131108044956" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 - trunk/orte/mca/rmaps/mindist" -->
<!-- id="A0C08116-AC29-4EED-A242-3DE7915894CC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131108042854.342A2160EDE_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 - trunk/orte/mca/rmaps/mindist<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 23:49:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="13229.php">Brice Goglin: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<li><strong>Reply:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummm...you can't do that, Josh. You are violating the abstraction break rather badly by searching for specific IB devices down in ORTE.
<br>
<p>Please revert this and let's talk about what you are actually trying to do.
<br>
<p><p>On Nov 7, 2013, at 8:28 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jladd (Joshua Ladd)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-07 23:28:53 EST (Thu, 07 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29644
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29644">https://svn.open-mpi.org/trac/ompi/changeset/29644</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Adds a check in the mindist mapper for whether or not the user asks for a specific device. This patch was submited by Elena Elkina and reviewed by Josh Ladd and should be added to    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=jladd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c |    65 ++++++++++++++++++++++++++++++++++++--- 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 60 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c	Thu Nov  7 23:21:05 2013	(r29643)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/mindist/rmaps_mindist_module.c	2013-11-07 23:28:53 EST (Thu, 07 Nov 2013)	(r29644)
</span><br>
<span class="quotelev1">&gt; @@ -47,6 +47,52 @@
</span><br>
<span class="quotelev1">&gt;     mindist_map
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +static int num_devices_in_list(char *list)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int count = 0;
</span><br>
<span class="quotelev1">&gt; +    list = strtok(list, &quot;,&quot;);
</span><br>
<span class="quotelev1">&gt; +    while (NULL != list) {
</span><br>
<span class="quotelev1">&gt; +        ++count;
</span><br>
<span class="quotelev1">&gt; +        list = strtok(NULL, &quot;,&quot;);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return count;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static char* get_hca_name(orte_app_context_t *app)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int found_ind = -1;
</span><br>
<span class="quotelev1">&gt; +    char** env = app-&gt;env;
</span><br>
<span class="quotelev1">&gt; +    int i;
</span><br>
<span class="quotelev1">&gt; +    for (i = 0; env[i]; i++) {
</span><br>
<span class="quotelev1">&gt; +        if (strstr(env[i], &quot;OMPI_MCA_btl_openib_if_include&quot;) != NULL) {
</span><br>
<span class="quotelev1">&gt; +            found_ind = i;
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (found_ind == -1) {
</span><br>
<span class="quotelev1">&gt; +        for (i = 0; env[i]; i++) {
</span><br>
<span class="quotelev1">&gt; +            if (strstr(env[i], &quot;MXM_RDMA_PORTS&quot;) != NULL) {
</span><br>
<span class="quotelev1">&gt; +                found_ind = i;
</span><br>
<span class="quotelev1">&gt; +                break;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    if (found_ind != -1) {
</span><br>
<span class="quotelev1">&gt; +        char* start = strstr(env[found_ind], &quot;=&quot;);
</span><br>
<span class="quotelev1">&gt; +        if (start != NULL) {
</span><br>
<span class="quotelev1">&gt; +            start = strdup(start+sizeof(char));
</span><br>
<span class="quotelev1">&gt; +            if (num_devices_in_list(start) == 1) {
</span><br>
<span class="quotelev1">&gt; +                return strtok(start, &quot;:&quot;);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            else {
</span><br>
<span class="quotelev1">&gt; +                free(start);
</span><br>
<span class="quotelev1">&gt; +                return NULL;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return NULL;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Create a round-robin mapping for the job.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; @@ -248,10 +294,17 @@
</span><br>
<span class="quotelev1">&gt;             OBJ_CONSTRUCT(&amp;numa_list, opal_list_t);
</span><br>
<span class="quotelev1">&gt;             ret = opal_hwloc_get_sorted_numa_list(node-&gt;topology, orte_rmaps_base.device, &amp;numa_list);
</span><br>
<span class="quotelev1">&gt;             if (ret &gt; 1) {
</span><br>
<span class="quotelev1">&gt; -                orte_show_help(&quot;help-orte-rmaps-md.txt&quot;, &quot;orte-rmaps-mindist:several-hca-devices&quot;,
</span><br>
<span class="quotelev1">&gt; -                        true, ret, node-&gt;name);
</span><br>
<span class="quotelev1">&gt; -                rc = ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; -                goto error;
</span><br>
<span class="quotelev1">&gt; +                /* check if hca device is specified via openib or mxm parameter */
</span><br>
<span class="quotelev1">&gt; +                free(orte_rmaps_base.device);
</span><br>
<span class="quotelev1">&gt; +                orte_rmaps_base.device = get_hca_name(app);
</span><br>
<span class="quotelev1">&gt; +                if (orte_rmaps_base.device != NULL) {
</span><br>
<span class="quotelev1">&gt; +                    ret = opal_hwloc_get_sorted_numa_list(node-&gt;topology, orte_rmaps_base.device, &amp;numa_list);
</span><br>
<span class="quotelev1">&gt; +                } else {
</span><br>
<span class="quotelev1">&gt; +                    orte_show_help(&quot;help-orte-rmaps-md.txt&quot;, &quot;orte-rmaps-mindist:several-hca-devices&quot;,
</span><br>
<span class="quotelev1">&gt; +                            true, ret, node-&gt;name);
</span><br>
<span class="quotelev1">&gt; +                    rc = ORTE_ERR_SILENT;
</span><br>
<span class="quotelev1">&gt; +                    goto error;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt;             } else if (ret &lt; 0) {
</span><br>
<span class="quotelev1">&gt;                 orte_show_help(&quot;help-orte-rmaps-md.txt&quot;, &quot;orte-rmaps-mindist:device-not-found&quot;,
</span><br>
<span class="quotelev1">&gt;                         true, orte_rmaps_base.device, node-&gt;name);
</span><br>
<span class="quotelev1">&gt; @@ -402,7 +455,9 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         OBJ_DESTRUCT(&amp;node_list);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    free(orte_rmaps_base.device);
</span><br>
<span class="quotelev1">&gt; +    if (orte_rmaps_base.device != NULL) {
</span><br>
<span class="quotelev1">&gt; +        free(orte_rmaps_base.device);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error:
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
<li><strong>Next message:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="13229.php">Brice Goglin: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
<li><strong>Reply:</strong> <a href="13231.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 -	trunk/orte/mca/rmaps/mindist"</a>
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
