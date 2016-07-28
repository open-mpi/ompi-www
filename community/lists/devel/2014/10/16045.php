<?
$subject_val = "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 10:08:43 2014" -->
<!-- isoreceived="20141015140843" -->
<!-- sent="Wed, 15 Oct 2014 07:08:38 -0700" -->
<!-- isosent="20141015140838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40" -->
<!-- id="55C200C2-19ED-4514-B1C4-11C38B1BA6FA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141015105043.3F563267001_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 10:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16046.php">Ralph Castain: "[OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="16044.php">Christoph Niethammer: "[OMPI devel] Missing f08 binding for Win_allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16047.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16047.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>I'm surprised this came into the trunk - last I saw, we hadn't fully decided which approach we wanted to pursue. Did I miss some discussion?
<br>
<p>Due to some other issues, we had been leaning more towards the other alternative - i.e., adding structure to the opal identifier struct. Is there some reason why you chose this alternative?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: gitdub_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40
</span><br>
<span class="quotelev1">&gt; Date: October 15, 2014 at 3:50:43 AM PDT
</span><br>
<span class="quotelev1">&gt; To: ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774 (commit)
</span><br>
<span class="quotelev1">&gt;      from  5c81658d58e260170c995030ac17e42a4032e2dd (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774">https://github.com/open-mpi/ompi/commit/c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Oct 15 17:19:13 2014 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Fix heterogeneous support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * redefine orte_process_name_t so it can be converted
</span><br>
<span class="quotelev1">&gt;      between host and network format as an opal_identifier_t
</span><br>
<span class="quotelev1">&gt;      aka uint64_t by the OPAL layer.
</span><br>
<span class="quotelev1">&gt;    * correctly send OPAL_DSTORE_ARCH key
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/proc/proc.c b/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; index d30182f..12b781e 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; @@ -107,6 +107,7 @@ int ompi_proc_init(void)
</span><br>
<span class="quotelev1">&gt;         OMPI_CAST_RTE_NAME(&amp;proc-&gt;super.proc_name)-&gt;vpid = i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (i == OMPI_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev1">&gt; +            opal_value_t kv;
</span><br>
<span class="quotelev1">&gt;             ompi_proc_local_proc = proc;
</span><br>
<span class="quotelev1">&gt;             proc-&gt;super.proc_flags = OPAL_PROC_ALL_LOCAL;
</span><br>
<span class="quotelev1">&gt;             proc-&gt;super.proc_hostname = strdup(ompi_process_info.nodename);
</span><br>
<span class="quotelev1">&gt; @@ -115,8 +116,13 @@ int ompi_proc_init(void)
</span><br>
<span class="quotelev1">&gt;             opal_proc_local_set(&amp;proc-&gt;super);
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt;             /* add our arch to the modex */
</span><br>
<span class="quotelev1">&gt; -            OPAL_MODEX_SEND_STRING(ret, PMIX_SYNC_REQD, PMIX_REMOTE, OPAL_DSTORE_ARCH,
</span><br>
<span class="quotelev1">&gt; -                                   &amp;proc-&gt;super.proc_arch, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt; +            OBJ_CONSTRUCT(&amp;kv, opal_value_t);
</span><br>
<span class="quotelev1">&gt; +            kv.key = strdup(OPAL_DSTORE_ARCH);
</span><br>
<span class="quotelev1">&gt; +            kv.type = OPAL_UINT32;
</span><br>
<span class="quotelev1">&gt; +            kv.data.uint32 = opal_local_arch;
</span><br>
<span class="quotelev1">&gt; +            ret = opal_pmix.put(PMIX_REMOTE, &amp;kv);
</span><br>
<span class="quotelev1">&gt; +            OBJ_DESTRUCT(&amp;kv);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;             if (OPAL_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;                 return ret;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/util/proc.h b/opal/util/proc.h
</span><br>
<span class="quotelev1">&gt; index 8a52a08..db5cfbc 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/util/proc.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/util/proc.h
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev1">&gt; -#include &lt;arpa/inet.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/types.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt; @@ -37,22 +37,11 @@
</span><br>
<span class="quotelev1">&gt; typedef opal_identifier_t opal_process_name_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
</span><br>
<span class="quotelev1">&gt; -#define OPAL_PROCESS_NAME_NTOH(guid) opal_process_name_ntoh_intr(&amp;(guid))
</span><br>
<span class="quotelev1">&gt; -static inline __opal_attribute_always_inline__ void
</span><br>
<span class="quotelev1">&gt; -opal_process_name_ntoh_intr(opal_process_name_t *name)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    uint32_t * w = (uint32_t *)name;
</span><br>
<span class="quotelev1">&gt; -    w[0] = ntohl(w[0]);
</span><br>
<span class="quotelev1">&gt; -    w[1] = ntohl(w[1]);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -#define OPAL_PROCESS_NAME_HTON(guid) opal_process_name_hton_intr(&amp;(guid))
</span><br>
<span class="quotelev1">&gt; -static inline __opal_attribute_always_inline__ void
</span><br>
<span class="quotelev1">&gt; -opal_process_name_hton_intr(opal_process_name_t *name)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    uint32_t * w = (uint32_t *)name;
</span><br>
<span class="quotelev1">&gt; -    w[0] = htonl(w[0]);
</span><br>
<span class="quotelev1">&gt; -    w[1] = htonl(w[1]);
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; +#define OPAL_PROCESS_NAME_NTOH(guid) \
</span><br>
<span class="quotelev1">&gt; +    guid = ntoh64(guid)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define OPAL_PROCESS_NAME_HTON(guid) \
</span><br>
<span class="quotelev1">&gt; +    guid = hton64(guid)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define OPAL_PROCESS_NAME_NTOH(guid)
</span><br>
<span class="quotelev1">&gt; #define OPAL_PROCESS_NAME_HTON(guid)
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/include/orte/types.h b/orte/include/orte/types.h
</span><br>
<span class="quotelev1">&gt; index c9ae320..f14b527 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/include/orte/types.h
</span><br>
<span class="quotelev1">&gt; +++ b/orte/include/orte/types.h
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2014      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -83,17 +85,17 @@ typedef uint32_t orte_vpid_t;
</span><br>
<span class="quotelev1">&gt; #define ORTE_VPID_MAX       UINT32_MAX-2
</span><br>
<span class="quotelev1">&gt; #define ORTE_VPID_MIN       0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#define ORTE_PROCESS_NAME_HTON(n)       \
</span><br>
<span class="quotelev1">&gt; -do {                                    \
</span><br>
<span class="quotelev1">&gt; -    n.jobid = htonl(n.jobid);           \
</span><br>
<span class="quotelev1">&gt; -    n.vpid = htonl(n.vpid);             \
</span><br>
<span class="quotelev1">&gt; -} while (0)
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROCESS_NAME_HTON(n)                      \
</span><br>
<span class="quotelev1">&gt; +    OPAL_PROCESS_NAME_HTON(*(opal_process_name_t *)&amp;(n))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#define ORTE_PROCESS_NAME_NTOH(n)       \
</span><br>
<span class="quotelev1">&gt; -do {                                    \
</span><br>
<span class="quotelev1">&gt; -    n.jobid = ntohl(n.jobid);           \
</span><br>
<span class="quotelev1">&gt; -    n.vpid = ntohl(n.vpid);             \
</span><br>
<span class="quotelev1">&gt; -} while (0)
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROCESS_NAME_NTOH(n)                      \
</span><br>
<span class="quotelev1">&gt; +    OPAL_PROCESS_NAME_NTOH(*(opal_process_name_t *)&amp;(n))
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROCESS_NAME_HTON(n)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define ORTE_PROCESS_NAME_NTOH(n)
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ORTE_NAME_ARGS(n) \
</span><br>
<span class="quotelev1">&gt;     (unsigned long) ((NULL == n) ? (unsigned long)ORTE_JOBID_INVALID : (unsigned long)(n)-&gt;jobid), \
</span><br>
<span class="quotelev1">&gt; @@ -115,11 +117,23 @@ do {                                    \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * define the process name structure
</span><br>
<span class="quotelev1">&gt; + * the OPAL layer sees an orte_process_name_t as an opal_process_name_t aka uint64_t
</span><br>
<span class="quotelev1">&gt; + * if heterogeneous is supported, when converting this uint64_t to
</span><br>
<span class="quotelev1">&gt; + * an endian neutral format, vpid and jobid will be swapped.
</span><br>
<span class="quotelev1">&gt; + * consequently, the orte_process_name_t struct must have different definitions
</span><br>
<span class="quotelev1">&gt; + * (swap jobid and vpid) on little and big endian arch.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; +#if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
</span><br>
<span class="quotelev1">&gt; +struct orte_process_name_t {
</span><br>
<span class="quotelev1">&gt; +    orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
</span><br>
<span class="quotelev1">&gt; +    orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev1">&gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; typedef struct orte_process_name_t orte_process_name_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; ompi/proc/proc.c          | 10 ++++++++--
</span><br>
<span class="quotelev1">&gt; opal/util/proc.h          | 23 ++++++-----------------
</span><br>
<span class="quotelev1">&gt; orte/include/orte/types.h | 34 ++++++++++++++++++++++++----------
</span><br>
<span class="quotelev1">&gt; 3 files changed, 38 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16046.php">Ralph Castain: "[OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="16044.php">Christoph Niethammer: "[OMPI devel] Missing f08 binding for Win_allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16047.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16047.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
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
