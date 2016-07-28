<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29489 - trunk/orte/mca/plm/base";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 18:37:34 2013" -->
<!-- isoreceived="20131023223734" -->
<!-- sent="Wed, 23 Oct 2013 15:37:32 -0700" -->
<!-- isosent="20131023223732" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29489 - trunk/orte/mca/plm/base" -->
<!-- id="CAMD57oc=p8NZTHz2pHFsoWB_dXoq+_a9_M6jPrGhiVDx4wS1kA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131023155623.CB4F8161071_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29489 - trunk/orte/mca/plm/base<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 18:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13124.php">Larry Baker: "Re: [OMPI devel] http://newscenter.lbl.gov/wp-content/uploads/2008/07/yelick-berkeleyview-july081.pdf"</a>
<li><strong>Previous message:</strong> <a href="13122.php">Dave Goodell (dgoodell): "[OMPI devel] .mailmap added for github mirror"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reverted this changeset from the trunk as it incorrectly re-added the
<br>
local coprocessor data to the HNP's hash table. This is already being done
<br>
in the ess/hnp module, and there is no value in duplicating it again every
<br>
time a daemon calls back.
<br>
<p>As noted in the revert comment, if we want host daemons to retain their
<br>
coprocessor info in a hash table, then we need to do that somewhere else,
<br>
not where this was done. At this time, I don't see the daemons using that
<br>
info anywhere.
<br>
<p><p><p>On Wed, Oct 23, 2013 at 8:56 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2013-10-23 11:56:23 EDT (Wed, 23 Oct 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29489
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29489">https://svn.open-mpi.org/trac/ompi/changeset/29489</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix coprocessor detection by always adding the local daemon's co-processors
</span><br>
<span class="quotelev1">&gt; to the hash table.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tested and working on a system with 2 Xeon Phi co-processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:ticket=3847:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/plm/base/plm_base_launch_support.c |    40
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++---
</span><br>
<span class="quotelev1">&gt;    1 files changed, 37 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/plm/base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/plm/base/plm_base_launch_support.c   Wed Oct 23
</span><br>
<span class="quotelev1">&gt; 11:52:05 2013        (r29488)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/plm/base/plm_base_launch_support.c   2013-10-23
</span><br>
<span class="quotelev1">&gt; 11:56:23 EDT (Wed, 23 Oct 2013)      (r29489)
</span><br>
<span class="quotelev1">&gt; @@ -1,3 +1,4 @@
</span><br>
<span class="quotelev1">&gt; +/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2010 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt;   *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; @@ -12,7 +13,8 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007-2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2009      Institut National de Recherche en Informatique
</span><br>
<span class="quotelev1">&gt;   *                         et Automatique. All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2011-2013 Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2013      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -677,6 +679,38 @@
</span><br>
<span class="quotelev1">&gt;          jdatorted = orte_get_job_data_object(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; +    {
</span><br>
<span class="quotelev1">&gt; +        char *coprocessors, **sns;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* detect and add any of my coprocessors to the hash table */
</span><br>
<span class="quotelev1">&gt; +        coprocessors =
</span><br>
<span class="quotelev1">&gt; opal_hwloc_base_find_coprocessors(opal_hwloc_topology);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if (NULL != coprocessors) {
</span><br>
<span class="quotelev1">&gt; +            /* init the hash table, if necessary */
</span><br>
<span class="quotelev1">&gt; +            if (NULL == orte_coprocessors) {
</span><br>
<span class="quotelev1">&gt; +                orte_coprocessors = OBJ_NEW(opal_hash_table_t);
</span><br>
<span class="quotelev1">&gt; +                opal_hash_table_init(orte_coprocessors,
</span><br>
<span class="quotelev1">&gt; orte_process_info.num_procs);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            /* separate the serial numbers of the coprocessors
</span><br>
<span class="quotelev1">&gt; +             * on this host
</span><br>
<span class="quotelev1">&gt; +             */
</span><br>
<span class="quotelev1">&gt; +            sns = opal_argv_split(coprocessors, ',');
</span><br>
<span class="quotelev1">&gt; +            for (int idx = 0 ; NULL != sns[idx] ; ++idx) {
</span><br>
<span class="quotelev1">&gt; +                uint32_t h;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                /* compute the hash */
</span><br>
<span class="quotelev1">&gt; +                OPAL_HASH_STR(sns[idx], h);
</span><br>
<span class="quotelev1">&gt; +                /* mark that this coprocessor is hosted by this daemon */
</span><br>
<span class="quotelev1">&gt; +                opal_hash_table_set_value_uint32(orte_coprocessors, h,
</span><br>
<span class="quotelev1">&gt; (void*)&amp;ORTE_PROC_MY_NAME-&gt;vpid);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            opal_argv_free(sns);
</span><br>
<span class="quotelev1">&gt; +            free(coprocessors);
</span><br>
<span class="quotelev1">&gt; +            orte_coprocessors_detected = true;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* multiple daemons could be in this buffer, so unpack until we
</span><br>
<span class="quotelev1">&gt; exhaust the data */
</span><br>
<span class="quotelev1">&gt;      idx = 1;
</span><br>
<span class="quotelev1">&gt;      while (OPAL_SUCCESS == (rc = opal_dss.unpack(buffer, &amp;dname, &amp;idx,
</span><br>
<span class="quotelev1">&gt; ORTE_NAME))) {
</span><br>
<span class="quotelev1">&gt; @@ -1271,7 +1305,7 @@
</span><br>
<span class="quotelev1">&gt;              /* check for duplicate */
</span><br>
<span class="quotelev1">&gt;              ignore = false;
</span><br>
<span class="quotelev1">&gt;              for (j=0; j &lt; *argc; j++) {
</span><br>
<span class="quotelev1">&gt; -             if (0 == strcmp((*argv)[j], orted_cmd_line[i+1])) {
</span><br>
<span class="quotelev1">&gt; +              if (0 == strcmp((*argv)[j], orted_cmd_line[i+1])) {
</span><br>
<span class="quotelev1">&gt;                      ignore = true;
</span><br>
<span class="quotelev1">&gt;                      break;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; @@ -1589,7 +1623,7 @@
</span><br>
<span class="quotelev1">&gt;          OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt;          /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev1">&gt;          daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev1">&gt; -       daemons-&gt;updated = false;
</span><br>
<span class="quotelev1">&gt; +        daemons-&gt;updated = false;
</span><br>
<span class="quotelev1">&gt;          return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13124.php">Larry Baker: "Re: [OMPI devel] http://newscenter.lbl.gov/wp-content/uploads/2008/07/yelick-berkeleyview-july081.pdf"</a>
<li><strong>Previous message:</strong> <a href="13122.php">Dave Goodell (dgoodell): "[OMPI devel] .mailmap added for github mirror"</a>
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
