<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 21:21:24 2014" -->
<!-- isoreceived="20141016012124" -->
<!-- sent="Thu, 16 Oct 2014 10:21:29 +0900" -->
<!-- isosent="20141016012129" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40" -->
<!-- id="543F1D99.4060409_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="55C200C2-19ED-4514-B1C4-11C38B1BA6FA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 21:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16046.php">Ralph Castain: "[OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="16045.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>i am sorry i should have asked before pushing this to the master.
<br>
<p>the master was broken in heterogeneous mode and i took the fastest path
<br>
to move it to a working state.
<br>
(please note that this commit fixes ompi/proc/proc.c and this is
<br>
independent of how opal_process_name_t vs orte_process_name_t
<br>
are handled)
<br>
<p>the latest email i read about this was my post in the devel ML
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15532.php">http://www.open-mpi.org/community/lists/devel/2014/08/15532.php</a>
<br>
if i remember correctly, this topic was also discussed in the weekly
<br>
call (and i could not attend it)
<br>
<p>if it is finally decided to take the second option, i am afraid it could
<br>
be a bit trickier than what i anticipated :
<br>
heterogeneous.v2.patch + extra steps to introduce OPAL_PROCESS_NAME dss type
<br>
(opal_process_name_t cannot be packed/unpacked as
<br>
opal_identifier_t/OPAL_UINT64 any more)
<br>
<p>i can make a proof of concept in a branch of my repository if this helps
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/15 23:08, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm surprised this came into the trunk - last I saw, we hadn't fully decided which approach we wanted to pursue. Did I miss some discussion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due to some other issues, we had been leaning more towards the other alternative - i.e., adding structure to the opal identifier struct. Is there some reason why you chose this alternative?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: gitdub_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40
</span><br>
<span class="quotelev2">&gt;&gt; Date: October 15, 2014 at 3:50:43 AM PDT
</span><br>
<span class="quotelev2">&gt;&gt; To: ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;       via  c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;      from  5c81658d58e260170c995030ac17e42a4032e2dd (commit)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774">https://github.com/open-mpi/ompi/commit/c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commit c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774
</span><br>
<span class="quotelev2">&gt;&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Wed Oct 15 17:19:13 2014 +0900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Fix heterogeneous support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    * redefine orte_process_name_t so it can be converted
</span><br>
<span class="quotelev2">&gt;&gt;      between host and network format as an opal_identifier_t
</span><br>
<span class="quotelev2">&gt;&gt;      aka uint64_t by the OPAL layer.
</span><br>
<span class="quotelev2">&gt;&gt;    * correctly send OPAL_DSTORE_ARCH key
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/proc/proc.c b/ompi/proc/proc.c
</span><br>
<span class="quotelev2">&gt;&gt; index d30182f..12b781e 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/proc/proc.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/proc/proc.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -107,6 +107,7 @@ int ompi_proc_init(void)
</span><br>
<span class="quotelev2">&gt;&gt;         OMPI_CAST_RTE_NAME(&amp;proc-&gt;super.proc_name)-&gt;vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if (i == OMPI_PROC_MY_NAME-&gt;vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_value_t kv;
</span><br>
<span class="quotelev2">&gt;&gt;             ompi_proc_local_proc = proc;
</span><br>
<span class="quotelev2">&gt;&gt;             proc-&gt;super.proc_flags = OPAL_PROC_ALL_LOCAL;
</span><br>
<span class="quotelev2">&gt;&gt;             proc-&gt;super.proc_hostname = strdup(ompi_process_info.nodename);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -115,8 +116,13 @@ int ompi_proc_init(void)
</span><br>
<span class="quotelev2">&gt;&gt;             opal_proc_local_set(&amp;proc-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;             /* add our arch to the modex */
</span><br>
<span class="quotelev2">&gt;&gt; -            OPAL_MODEX_SEND_STRING(ret, PMIX_SYNC_REQD, PMIX_REMOTE, OPAL_DSTORE_ARCH,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   &amp;proc-&gt;super.proc_arch, OPAL_UINT32);
</span><br>
<span class="quotelev2">&gt;&gt; +            OBJ_CONSTRUCT(&amp;kv, opal_value_t);
</span><br>
<span class="quotelev2">&gt;&gt; +            kv.key = strdup(OPAL_DSTORE_ARCH);
</span><br>
<span class="quotelev2">&gt;&gt; +            kv.type = OPAL_UINT32;
</span><br>
<span class="quotelev2">&gt;&gt; +            kv.data.uint32 = opal_local_arch;
</span><br>
<span class="quotelev2">&gt;&gt; +            ret = opal_pmix.put(PMIX_REMOTE, &amp;kv);
</span><br>
<span class="quotelev2">&gt;&gt; +            OBJ_DESTRUCT(&amp;kv);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;             if (OPAL_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt;&gt;                 return ret;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/util/proc.h b/opal/util/proc.h
</span><br>
<span class="quotelev2">&gt;&gt; index 8a52a08..db5cfbc 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/util/proc.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/util/proc.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt; -#include &lt;arpa/inet.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/types.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt; @@ -37,22 +37,11 @@
</span><br>
<span class="quotelev2">&gt;&gt; typedef opal_identifier_t opal_process_name_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
</span><br>
<span class="quotelev2">&gt;&gt; -#define OPAL_PROCESS_NAME_NTOH(guid) opal_process_name_ntoh_intr(&amp;(guid))
</span><br>
<span class="quotelev2">&gt;&gt; -static inline __opal_attribute_always_inline__ void
</span><br>
<span class="quotelev2">&gt;&gt; -opal_process_name_ntoh_intr(opal_process_name_t *name)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    uint32_t * w = (uint32_t *)name;
</span><br>
<span class="quotelev2">&gt;&gt; -    w[0] = ntohl(w[0]);
</span><br>
<span class="quotelev2">&gt;&gt; -    w[1] = ntohl(w[1]);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -#define OPAL_PROCESS_NAME_HTON(guid) opal_process_name_hton_intr(&amp;(guid))
</span><br>
<span class="quotelev2">&gt;&gt; -static inline __opal_attribute_always_inline__ void
</span><br>
<span class="quotelev2">&gt;&gt; -opal_process_name_hton_intr(opal_process_name_t *name)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    uint32_t * w = (uint32_t *)name;
</span><br>
<span class="quotelev2">&gt;&gt; -    w[0] = htonl(w[0]);
</span><br>
<span class="quotelev2">&gt;&gt; -    w[1] = htonl(w[1]);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_PROCESS_NAME_NTOH(guid) \
</span><br>
<span class="quotelev2">&gt;&gt; +    guid = ntoh64(guid)
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_PROCESS_NAME_HTON(guid) \
</span><br>
<span class="quotelev2">&gt;&gt; +    guid = hton64(guid)
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_PROCESS_NAME_NTOH(guid)
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_PROCESS_NAME_HTON(guid)
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/include/orte/types.h b/orte/include/orte/types.h
</span><br>
<span class="quotelev2">&gt;&gt; index c9ae320..f14b527 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/include/orte/types.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/include/orte/types.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2014      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  *
</span><br>
<span class="quotelev2">&gt;&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -83,17 +85,17 @@ typedef uint32_t orte_vpid_t;
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_VPID_MAX       UINT32_MAX-2
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_VPID_MIN       0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#define ORTE_PROCESS_NAME_HTON(n)       \
</span><br>
<span class="quotelev2">&gt;&gt; -do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt; -    n.jobid = htonl(n.jobid);           \
</span><br>
<span class="quotelev2">&gt;&gt; -    n.vpid = htonl(n.vpid);             \
</span><br>
<span class="quotelev2">&gt;&gt; -} while (0)
</span><br>
<span class="quotelev2">&gt;&gt; +#if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_PROCESS_NAME_HTON(n)                      \
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_PROCESS_NAME_HTON(*(opal_process_name_t *)&amp;(n))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#define ORTE_PROCESS_NAME_NTOH(n)       \
</span><br>
<span class="quotelev2">&gt;&gt; -do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt; -    n.jobid = ntohl(n.jobid);           \
</span><br>
<span class="quotelev2">&gt;&gt; -    n.vpid = ntohl(n.vpid);             \
</span><br>
<span class="quotelev2">&gt;&gt; -} while (0)
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_PROCESS_NAME_NTOH(n)                      \
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_PROCESS_NAME_NTOH(*(opal_process_name_t *)&amp;(n))
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_PROCESS_NAME_HTON(n)
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_PROCESS_NAME_NTOH(n)
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_NAME_ARGS(n) \
</span><br>
<span class="quotelev2">&gt;&gt;     (unsigned long) ((NULL == n) ? (unsigned long)ORTE_JOBID_INVALID : (unsigned long)(n)-&gt;jobid), \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -115,11 +117,23 @@ do {                                    \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;  * define the process name structure
</span><br>
<span class="quotelev2">&gt;&gt; + * the OPAL layer sees an orte_process_name_t as an opal_process_name_t aka uint64_t
</span><br>
<span class="quotelev2">&gt;&gt; + * if heterogeneous is supported, when converting this uint64_t to
</span><br>
<span class="quotelev2">&gt;&gt; + * an endian neutral format, vpid and jobid will be swapped.
</span><br>
<span class="quotelev2">&gt;&gt; + * consequently, the orte_process_name_t struct must have different definitions
</span><br>
<span class="quotelev2">&gt;&gt; + * (swap jobid and vpid) on little and big endian arch.
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; +#if OPAL_ENABLE_HETEROGENEOUS_SUPPORT &amp;&amp; !defined(WORDS_BIGENDIAN)
</span><br>
<span class="quotelev2">&gt;&gt; +struct orte_process_name_t {
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev2">&gt;&gt; +};
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev2">&gt;&gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev2">&gt;&gt;     orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct orte_process_name_t orte_process_name_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt; ompi/proc/proc.c          | 10 ++++++++--
</span><br>
<span class="quotelev2">&gt;&gt; opal/util/proc.h          | 23 ++++++-----------------
</span><br>
<span class="quotelev2">&gt;&gt; orte/include/orte/types.h | 34 ++++++++++++++++++++++++----------
</span><br>
<span class="quotelev2">&gt;&gt; 3 files changed, 38 insertions(+), 29 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16045.php">http://www.open-mpi.org/community/lists/devel/2014/10/16045.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16046.php">Ralph Castain: "[OMPI devel] Slurm direct-launch is broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="16045.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Reply:</strong> <a href="16048.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
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
