<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 19:10:53 2009" -->
<!-- isoreceived="20090623231053" -->
<!-- sent="Tue, 23 Jun 2009 17:10:39 -0600" -->
<!-- isosent="20090623231039" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504" -->
<!-- id="FAEAC214-1240-48A1-A2A9-915B36E3BAD6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906232210.n5NMAQuM012702_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 19:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6314.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6314.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Maybe reply:</strong> <a href="6314.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Reply:</strong> <a href="6315.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree - hence my comments the other day.
<br>
<p>However, you might look at the regex work that is on-going. My plan  
<br>
was to utilize the regex to tell the child daemons of the tree what to  
<br>
launch, and then use the static ports to complete the wireup along the  
<br>
route. Thus, the HNP would only see messages from its immediate  
<br>
children, and the apps would be launched as each daemon  starts up.
<br>
<p>I fear we may be thrashing a little in here as you may be &quot;unchanging&quot;  
<br>
things I am &quot;changing&quot; to support the regex startup. We should be  
<br>
careful about this as it could waste a lot of time - I'll check these  
<br>
changes out, but I think they may have broken what I spent the day  
<br>
doing and committed a few hours ago.
<br>
<p>Will let you know...
<br>
Ralph
<br>
<p>On Jun 23, 2009, at 4:10 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-23 18:10:25 EDT (Tue, 23 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21504
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21504">https://svn.open-mpi.org/trac/ompi/changeset/21504</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Repair the tree spawn. The problem seems to come from the fact
</span><br>
<span class="quotelev1">&gt; that now the HNP send the messages using the routed component. In  
</span><br>
<span class="quotelev1">&gt; the case
</span><br>
<span class="quotelev1">&gt; of tree spawn, when a intermediary node spawn a child it doesn't  
</span><br>
<span class="quotelev1">&gt; know how
</span><br>
<span class="quotelev1">&gt; to forward a message to it, so when the node-map message is coming  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; the HNP (as there is nothing yet in the contact/routing table) the  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; is sent back the way it came. As a result the node-map message keeps  
</span><br>
<span class="quotelev1">&gt; jumping
</span><br>
<span class="quotelev1">&gt; between the HNP and the first level orteds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The solution is to add a new option to the children orte_parent_uri,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; is only set when the orted is _not_ directly spawned by the HNP.  
</span><br>
<span class="quotelev1">&gt; When this
</span><br>
<span class="quotelev1">&gt; option is present on the argument list, the orted will add the  
</span><br>
<span class="quotelev1">&gt; parent to
</span><br>
<span class="quotelev1">&gt; its routing, and force the parent to update his routes (by sending  
</span><br>
<span class="quotelev1">&gt; the URI).
</span><br>
<span class="quotelev1">&gt; With this approach, the routing tree is build in same time as the  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; are spawned, and all messages from the HNP can be routed to the  
</span><br>
<span class="quotelev1">&gt; leaves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this is far from an optimal solution. Right now, this so  
</span><br>
<span class="quotelev1">&gt; called tree
</span><br>
<span class="quotelev1">&gt; spawn, only spawn the children in a tree without doing anything  
</span><br>
<span class="quotelev1">&gt; about the
</span><br>
<span class="quotelev1">&gt; &quot;connect back to the HNP&quot; step. The HNP is flooded with reports from  
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev1">&gt; orted. The total number of messages is higher than in the non tree  
</span><br>
<span class="quotelev1">&gt; startup
</span><br>
<span class="quotelev1">&gt; scheme, so we do not expect this approach to be scalable in the  
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev1">&gt; incarnation. A complete overhaul of the tree startup is required in  
</span><br>
<span class="quotelev1">&gt; order
</span><br>
<span class="quotelev1">&gt; improve the scalability. Stay tuned!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/ess/base/ess_base_std_orted.c      |    41 +++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++----------------------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/plm/base/plm_base_launch_support.c |     9 +++++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_main.c                     |    38 +++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   3 files changed, 64 insertions(+), 24 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/ess/base/ess_base_std_orted.c
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
<span class="quotelev1">&gt; --- trunk/orte/mca/ess/base/ess_base_std_orted.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/ess/base/ess_base_std_orted.c	2009-06-23 18:10:25  
</span><br>
<span class="quotelev1">&gt; EDT (Tue, 23 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -2,13 +2,15 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and  
</span><br>
<span class="quotelev1">&gt; Indiana
</span><br>
<span class="quotelev1">&gt;  *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt;  *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2004-2005 The University of Tennessee and The  
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2009 The University of Tennessee and The  
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev1">&gt;  *                         of Tennessee Research Foundation.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 High Performance Computing Center  
</span><br>
<span class="quotelev1">&gt; Stuttgart,
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Institut National de Recherche en  
</span><br>
<span class="quotelev1">&gt; Informatique
</span><br>
<span class="quotelev1">&gt; + *                         et Automatique. All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -172,6 +174,12 @@
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* initialize the nidmaps */
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_util_nidmap_init(NULL))) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +        error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt; +        goto error;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     /* if we are using static ports, then we need to setup
</span><br>
<span class="quotelev1">&gt;      * the daemon info so the RML can function properly
</span><br>
<span class="quotelev1">&gt;      * without requiring a wireup stage. This must be done
</span><br>
<span class="quotelev1">&gt; @@ -179,12 +187,6 @@
</span><br>
<span class="quotelev1">&gt;      * own port, which we need in order to construct the nidmap
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     if (orte_static_ports) {
</span><br>
<span class="quotelev1">&gt; -        /* construct the nidmap arrays */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_util_nidmap_init(NULL))) {
</span><br>
<span class="quotelev1">&gt; -            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -            error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt; -            goto error;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt;         if (NULL != orted_launch_cmd) {
</span><br>
<span class="quotelev1">&gt;             /* the launch cmd was given via regexp on the cmd line -  
</span><br>
<span class="quotelev1">&gt; parse
</span><br>
<span class="quotelev1">&gt;              * it to get the contact info
</span><br>
<span class="quotelev1">&gt; @@ -209,23 +211,16 @@
</span><br>
<span class="quotelev1">&gt;                 goto error;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        /* be sure to update the routing tree so the initial &quot;phone  
</span><br>
<span class="quotelev1">&gt; home&quot;
</span><br>
<span class="quotelev1">&gt; -         * to mpirun goes through the tree!
</span><br>
<span class="quotelev1">&gt; -         */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_routed.update_routing_tree())) {
</span><br>
<span class="quotelev1">&gt; -            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -            error = &quot;failed to update routing tree&quot;;
</span><br>
<span class="quotelev1">&gt; -            goto error;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -        /* initialize the nidmaps */
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS != (ret = orte_util_nidmap_init(NULL))) {
</span><br>
<span class="quotelev1">&gt; -            ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; -            error = &quot;orte_util_nidmap_init&quot;;
</span><br>
<span class="quotelev1">&gt; -            goto error;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    /* be sure to update the routing tree so the initial &quot;phone home&quot;
</span><br>
<span class="quotelev1">&gt; +     * to mpirun goes through the tree!
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_routed.update_routing_tree())) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +        error = &quot;failed to update routing tree&quot;;
</span><br>
<span class="quotelev1">&gt; +        goto error;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* Now provide a chance for the PLM
</span><br>
<span class="quotelev1">&gt;      * to perform any module-specific init functions. This
</span><br>
<span class="quotelev1">&gt;      * needs to occur AFTER the communications are setup
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
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
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c	2009-06-23  
</span><br>
<span class="quotelev1">&gt; 18:10:25 EDT (Tue, 23 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Institut National de Recherche en  
</span><br>
<span class="quotelev1">&gt; Informatique
</span><br>
<span class="quotelev1">&gt; + *                         et Automatique. All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -1108,13 +1110,18 @@
</span><br>
<span class="quotelev1">&gt;     if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev1">&gt;         rml_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt; +        asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orte_rml.get_contact_info() );
</span><br>
<span class="quotelev1">&gt; +        opal_argv_append(argc, argv, &quot;--parent-uri&quot;);
</span><br>
<span class="quotelev1">&gt; +        opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt; +        free(param);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         rml_uri = orte_process_info.my_hnp_uri;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, rml_uri);
</span><br>
<span class="quotelev1">&gt;     opal_argv_append(argc, argv, &quot;--hnp-uri&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt;     free(param);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* if given, pass the node list */
</span><br>
<span class="quotelev1">&gt;     if (NULL != nodes) {
</span><br>
<span class="quotelev1">&gt;         opal_argv_append(argc, argv, &quot;-mca&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_main.c
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
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_main.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_main.c	2009-06-23 18:10:25 EDT (Tue, 23  
</span><br>
<span class="quotelev1">&gt; Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +12,8 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2007      Los Alamos National Security, LLC.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Institut National de Recherche en  
</span><br>
<span class="quotelev1">&gt; Informatique
</span><br>
<span class="quotelev1">&gt; + *                         et Automatique. All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -63,6 +65,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/session_dir.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/runtime/orte_locks.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/mca/rml/base/rml_contact.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/grpcomm/grpcomm.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -169,6 +172,10 @@
</span><br>
<span class="quotelev1">&gt;       NULL, OPAL_CMD_LINE_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt;       &quot;URI for the HNP&quot;},
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    { &quot;orte&quot;, &quot;parent&quot;, &quot;uri&quot;, '\0', NULL, &quot;parent-uri&quot;, 1,
</span><br>
<span class="quotelev1">&gt; +      NULL, OPAL_CMD_LINE_TYPE_STRING,
</span><br>
<span class="quotelev1">&gt; +      &quot;URI for the parent if tree launch is enabled.&quot;},
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     { NULL, NULL, NULL, '\0', NULL, &quot;set-sid&quot;, 0,
</span><br>
<span class="quotelev1">&gt;       &amp;orted_globals.set_sid, OPAL_CMD_LINE_TYPE_BOOL,
</span><br>
<span class="quotelev1">&gt;       &quot;Direct the orted to separate from the current session&quot;},
</span><br>
<span class="quotelev1">&gt; @@ -677,6 +684,37 @@
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt;             goto DONE;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        mca_base_param_reg_string_name(&quot;orte&quot;, &quot;parent_uri&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       &quot;URI for the parent if tree  
</span><br>
<span class="quotelev1">&gt; launch is enabled.&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       true, false, NULL,  &amp;rml_uri);
</span><br>
<span class="quotelev1">&gt; +        if (NULL != rml_uri) {
</span><br>
<span class="quotelev1">&gt; +            orte_process_name_t parent;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* set the contact info into the hash table */
</span><br>
<span class="quotelev1">&gt; +            if (ORTE_SUCCESS != (ret =  
</span><br>
<span class="quotelev1">&gt; orte_rml.set_contact_info(rml_uri))) {
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +                free(rml_uri);
</span><br>
<span class="quotelev1">&gt; +                OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; +                goto DONE;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            ret = orte_rml_base_parse_uris(rml_uri, &amp;parent, NULL );
</span><br>
<span class="quotelev1">&gt; +            if( ORTE_SUCCESS != ret ) {
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +                free(rml_uri);
</span><br>
<span class="quotelev1">&gt; +                OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; +                goto DONE;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            free(rml_uri);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if( 0 &gt; (ret = orte_rml.send_buffer(&amp;parent, buffer,
</span><br>
<span class="quotelev1">&gt; +                                                 
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_ORTED_CALLBACK, 0)) ) {
</span><br>
<span class="quotelev1">&gt; +                ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +                OBJ_RELEASE(buffer);
</span><br>
<span class="quotelev1">&gt; +                goto DONE;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(buffer);  /* done with this */
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6314.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6314.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Maybe reply:</strong> <a href="6314.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Reply:</strong> <a href="6315.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
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
