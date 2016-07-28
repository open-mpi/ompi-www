<?
$subject_val = "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 23:02:13 2015" -->
<!-- isoreceived="20151028030213" -->
<!-- sent="Tue, 27 Oct 2015 23:02:09 -0400" -->
<!-- isosent="20151028030209" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307" -->
<!-- id="CAMJJpkX9MGjNZ-U3crLFYGido+raUKsBTEpd4_TsibNV40PFeQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20151028023913.DB8E625FABF_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 23:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Reply:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We get a nice compiler complaint:
<br>
<p>../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:
<br>
In function 'pmix_server_get':
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131:
<br>
error: 'PMIX_ERR_SILENT' undeclared (first use in this function)
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131:
<br>
error: (Each undeclared identifier is reported only once
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131:
<br>
error: for each function it appears in.)
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:117:
<br>
warning: unused variable 'cd'
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:
<br>
In function '_process_dmdx_reply':
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:478:
<br>
error: 'PMIX_ERR_SILENT' undeclared (first use in this function)
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460:
<br>
warning: unused variable 'xptr'
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460:
<br>
warning: unused variable 'pbkt'
<br>
../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460:
<br>
warning: unused variable 'xfer'
<br>
<p>And he is right:
<br>
<p>$find . -name &quot;*.h&quot; -exec grep -Hn PMIX_ERR_SILENT {} +
<br>
./opal/mca/pmix/pmix1xx/pmix/src/util/error.h:33:        if
<br>
(PMIX_ERR_SILENT != (r)) {                                   \
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>---------- Forwarded message ----------
<br>
From: &lt;gitdub_at_[hidden]&gt;
<br>
Date: Tue, Oct 27, 2015 at 10:39 PM
<br>
Subject: [OMPI commits] Git: open-mpi/ompi branch master updated.
<br>
dev-2921-gb603307
<br>
To: ompi-commits_at_[hidden]
<br>
<p><p>This is an automated email from the git hooks/post-receive script. It was
<br>
generated because a ref change was pushed to the repository containing
<br>
the project &quot;open-mpi/ompi&quot;.
<br>
<p>The branch, master has been updated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  b603307f7d33663ef6fe5941bb0d94bd2be017cb (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  267ca8fcd3a59b780491d80d29e870061d8dac56 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from  3035e140511b082c51ad66e116dd381a083a191d (commit)
<br>
<p>Those revisions listed above that are new to this repository have
<br>
not appeared on any other notification email; so we list those
<br>
revisions in full, below.
<br>
<p>- Log -----------------------------------------------------------------
<br>
<a href="https://github.com/open-mpi/ompi/commit/b603307f7d33663ef6fe5941bb0d94bd2be017cb">https://github.com/open-mpi/ompi/commit/b603307f7d33663ef6fe5941bb0d94bd2be017cb</a>
<br>
<p>commit b603307f7d33663ef6fe5941bb0d94bd2be017cb
<br>
Merge: 3035e14 267ca8f
<br>
Author: rhc54 &lt;rhc_at_[hidden]&gt;
<br>
Date:   Tue Oct 27 19:39:10 2015 -0700
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Merge pull request #1073 from rhc54/topic/pmix
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Cleanup the PMIx direct modex support.
<br>
<p><p><p><a href="https://github.com/open-mpi/ompi/commit/267ca8fcd3a59b780491d80d29e870061d8dac56">https://github.com/open-mpi/ompi/commit/267ca8fcd3a59b780491d80d29e870061d8dac56</a>
<br>
<p>commit 267ca8fcd3a59b780491d80d29e870061d8dac56
<br>
Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date:   Tue Oct 27 11:01:49 2015 -0700
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Cleanup the PMIx direct modex support. Add an MCA parameter
<br>
pmix_base_async_modex that will cause the async modex to be used when set
<br>
to 1. Default it to 0 for now
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to continue current default behavior.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Also add an MCA param pmix_base_collect_data to direct that the
<br>
blocking fence shall return all data to each process. Obviously, this param
<br>
has no effect if async_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;modex is used.
<br>
<p>diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
<br>
index 4c0391d..d0eebb2 100644
<br>
--- a/ompi/runtime/ompi_mpi_init.c
<br>
+++ b/ompi/runtime/ompi_mpi_init.c
<br>
@@ -639,10 +639,9 @@ int ompi_mpi_init(int argc, char **argv, int
<br>
requested, int *provided)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* exchange connection info - this function may also act as a barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* if data exchange is required. The modex occurs solely across procs
<br>
-     * in our job, so no proc array is passed. If a barrier is required,
<br>
-     * the &quot;modex&quot; function will perform it internally
<br>
-     */
<br>
-    OPAL_MODEX(NULL, 1);
<br>
+     * in our job. If a barrier is required, the &quot;modex&quot; function will
<br>
+     * perform it internally */
<br>
+    OPAL_MODEX();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_MNEXT((&amp;tm,&quot;time from modex to first barrier&quot;));
<br>
<p>diff --git a/opal/mca/pmix/base/pmix_base_frame.c
<br>
b/opal/mca/pmix/base/pmix_base_frame.c
<br>
index e1ab766..6e8a347 100644
<br>
--- a/opal/mca/pmix/base/pmix_base_frame.c
<br>
+++ b/opal/mca/pmix/base/pmix_base_frame.c
<br>
@@ -31,12 +31,21 @@
<br>
&nbsp;/* Note that this initializer is important -- do not remove it!  See
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/375">https://github.com/open-mpi/ompi/issues/375</a> for details. */
<br>
&nbsp;opal_pmix_base_module_t opal_pmix = { 0 };
<br>
-bool opal_pmix_collect_all_data = false;
<br>
+bool opal_pmix_collect_all_data = true;
<br>
&nbsp;bool opal_pmix_base_allow_delayed_server = false;
<br>
&nbsp;int opal_pmix_verbose_output = -1;
<br>
+bool opal_pmix_base_async_modex = false;
<br>
<p>&nbsp;static int opal_pmix_base_frame_register(mca_base_register_flag_t flags)
<br>
&nbsp;{
<br>
+    opal_pmix_base_async_modex = false;
<br>
+    (void) mca_base_var_register(&quot;opal&quot;, &quot;pmix&quot;, &quot;base&quot;, &quot;async_modex&quot;,
<br>
&quot;Use asynchronous modex mode&quot;,
<br>
+                                 MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,
<br>
OPAL_INFO_LVL_9,
<br>
+                                 MCA_BASE_VAR_SCOPE_READONLY,
<br>
&amp;opal_pmix_base_async_modex);
<br>
+    opal_pmix_collect_all_data = true;
<br>
+    (void) mca_base_var_register(&quot;opal&quot;, &quot;pmix&quot;, &quot;base&quot;, &quot;collect_data&quot;,
<br>
&quot;Collect all data during modex&quot;,
<br>
+                                 MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0,
<br>
OPAL_INFO_LVL_9,
<br>
+                                 MCA_BASE_VAR_SCOPE_READONLY,
<br>
&amp;opal_pmix_collect_all_data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_SUCCESS;
<br>
&nbsp;}
<br>
<p>diff --git a/opal/mca/pmix/pmix.h b/opal/mca/pmix/pmix.h
<br>
index f265e01..7223529 100644
<br>
--- a/opal/mca/pmix/pmix.h
<br>
+++ b/opal/mca/pmix/pmix.h
<br>
@@ -36,6 +36,8 @@ BEGIN_C_DECLS
<br>
&nbsp;/* provide access to the framework verbose output without
<br>
&nbsp;&nbsp;* exposing the entire base */
<br>
&nbsp;extern int opal_pmix_verbose_output;
<br>
+extern bool opal_pmix_collect_all_data;
<br>
+extern bool opal_pmix_base_async_modex;
<br>
&nbsp;extern int opal_pmix_base_exchange(opal_value_t *info,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_pmix_pdata_t *pdat,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int timeout);
<br>
@@ -254,10 +256,13 @@ extern int opal_pmix_base_exchange(opal_value_t *info,
<br>
&nbsp;&nbsp;* that takes into account directives and availability of
<br>
&nbsp;&nbsp;* non-blocking operations
<br>
&nbsp;&nbsp;*/
<br>
-#define OPAL_MODEX(p, s)              \
<br>
-    do {                              \
<br>
-        opal_pmix.commit();           \
<br>
-        opal_pmix.fence((p), (s));    \
<br>
+#define OPAL_MODEX()                                    \
<br>
+    do {                                                \
<br>
+        opal_pmix.commit();                             \
<br>
+        if (!opal_pmix_base_async_modex) {              \
<br>
+            opal_pmix.fence(NULL,                       \
<br>
+                opal_pmix_collect_all_data);            \
<br>
+        }                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while(0);
<br>
<p>&nbsp;/**
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
<br>
b/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
<br>
index 0216e34..5a111a1 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
<br>
@@ -183,7 +183,7 @@ BEGIN_C_DECLS
<br>
<p>&nbsp;/****    PMIX ERROR CONSTANTS    ****/
<br>
&nbsp;/* PMIx errors are always negative, with 0 reserved for success */
<br>
-#define PMIX_ERROR_MIN  -41  // set equal to number of non-zero entries in
<br>
enum
<br>
+#define PMIX_ERROR_MIN  -42  // set equal to number of non-zero entries in
<br>
enum
<br>
<p>&nbsp;typedef enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_ERR_UNPACK_READ_PAST_END_OF_BUFFER = PMIX_ERROR_MIN,
<br>
@@ -230,6 +230,7 @@ typedef enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_ERR_INVALID_CRED,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_EXISTS,
<br>
<p>+    PMIX_ERR_SILENT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_ERROR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_SUCCESS
<br>
&nbsp;} pmix_status_t;
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
<br>
index d41be9c..b93ca6d 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
<br>
@@ -458,6 +458,7 @@ static void getnb_cbfunc(struct pmix_peer_t *pr,
<br>
pmix_usock_hdr_t *hdr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_RELEASE(bptr);  // free's the data region
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (PMIX_ERR_UNPACK_READ_PAST_END_OF_BUFFER != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_ERROR_LOG(rc);
<br>
+            rc = PMIX_ERR_SILENT; // avoid error-logging twice
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
<br>
index 5422b78..88b0468 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
<br>
@@ -16,4 +16,5 @@ sources += \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src/server/pmix_server.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src/server/pmix_server_ops.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src/server/pmix_server_regex.c \
<br>
-        src/server/pmix_server_listener.c
<br>
+        src/server/pmix_server_listener.c \
<br>
+        src/server/pmix_server_get.c
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
<br>
index d16ae16..85f9e17 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
<br>
@@ -141,8 +141,7 @@ static void _queue_message(int fd, short args, void
<br>
*cbdata)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_usock_queue_t *queue = (pmix_usock_queue_t*)cbdata;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_usock_send_t *snd;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_output_verbose(2, pmix_globals.debug_output,
<br>
-                        &quot;[%s:%d] queue callback called: reply to %s:%d on
<br>
tag %d,&quot;
<br>
-                        &quot;event_is_active=%d&quot;,
<br>
+                        &quot;[%s:%d] queue callback called: reply to %s:%d on
<br>
tag %d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__FILE__, __LINE__,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(queue-&gt;peer)-&gt;info-&gt;nptr-&gt;nspace,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag),
<br>
@@ -179,12 +178,10 @@ static void _queue_message(int fd, short args, void
<br>
*cbdata)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;queue-&gt;buf  = (b);                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;queue-&gt;tag  = (t);                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_output_verbose(2, pmix_globals.debug_output,               \
<br>
-                        &quot;[%s:%d] queue reply to %s:%d on tag %d,&quot;       \
<br>
-                        &quot;event_is_active=%d&quot;,                           \
<br>
+                        &quot;[%s:%d] queue reply to %s:%d on tag %d&quot;,       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__FILE__, __LINE__,                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(queue-&gt;peer)-&gt;info-&gt;nptr-&gt;nspace,              \
<br>
-                        (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag),        \
<br>
-                        (queue-&gt;peer)-&gt;send_ev_active);                 \
<br>
+                        (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag));       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_assign(&amp;queue-&gt;ev, pmix_globals.evbase, -1,               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EV_WRITE, _queue_message, queue);                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_priority_set(&amp;queue-&gt;ev, 0);                              \
<br>
@@ -723,7 +720,7 @@ static void _register_client(int sd, short args, void
<br>
*cbdata)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* someone has been waiting for a request on a remote proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* in one of our nspaces, but we didn't know all the local procs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* and so couldn't determine the proc was remote */
<br>
-        pmix_pending_nspace_fix(nptr);
<br>
+        pmix_pending_nspace_requests(nptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* let the caller know we are done */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != cd-&gt;opcbfunc) {
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
<br>
new file mode 100644
<br>
index 0000000..2cb75cf
<br>
--- /dev/null
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
<br>
@@ -0,0 +1,552 @@
<br>
+/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
<br>
+/*
<br>
+ * Copyright (c) 2014-2015 Intel, Inc.  All rights reserved.
<br>
+ * Copyright (c) 2014-2015 Research Organization for Information Science
<br>
+ *                         and Technology (RIST). All rights reserved.
<br>
+ * Copyright (c) 2014-2015 Artem Y. Polyakov &lt;artpol84_at_[hidden]&gt;.
<br>
+ *                         All rights reserved.
<br>
+ * Copyright (c) 2015      Mellanox Technologies, Inc.
<br>
+ *                         All rights reserved.
<br>
+ * $COPYRIGHT$
<br>
+ *
<br>
+ * Additional copyrights may follow
<br>
+ *
<br>
+ * $HEADER$
<br>
+ */
<br>
+
<br>
+#include &lt;private/autogen/config.h&gt;
<br>
+#include &lt;pmix/rename.h&gt;
<br>
+#include &lt;private/types.h&gt;
<br>
+#include &lt;private/pmix_stdint.h&gt;
<br>
+#include &lt;private/pmix_socket_errno.h&gt;
<br>
+
<br>
+#include &lt;pmix_server.h&gt;
<br>
+#include &quot;src/include/pmix_globals.h&quot;
<br>
+
<br>
+#ifdef HAVE_STRING_H
<br>
+#include &lt;string.h&gt;
<br>
+#endif
<br>
+#include &lt;fcntl.h&gt;
<br>
+#ifdef HAVE_UNISTD_H
<br>
+#include &lt;unistd.h&gt;
<br>
+#endif
<br>
+#ifdef HAVE_SYS_SOCKET_H
<br>
+#include &lt;sys/socket.h&gt;
<br>
+#endif
<br>
+#ifdef HAVE_SYS_UN_H
<br>
+#include &lt;sys/un.h&gt;
<br>
+#endif
<br>
+#ifdef HAVE_SYS_UIO_H
<br>
+#include &lt;sys/uio.h&gt;
<br>
+#endif
<br>
+#ifdef HAVE_SYS_TYPES_H
<br>
+#include &lt;sys/types.h&gt;
<br>
+#endif
<br>
+#include PMIX_EVENT_HEADER
<br>
+
<br>
+#include &quot;src/class/pmix_list.h&quot;
<br>
+#include &quot;src/buffer_ops/buffer_ops.h&quot;
<br>
+#include &quot;src/util/argv.h&quot;
<br>
+#include &quot;src/util/error.h&quot;
<br>
+#include &quot;src/util/output.h&quot;
<br>
+#include &quot;src/util/pmix_environ.h&quot;
<br>
+#include &quot;src/util/progress_threads.h&quot;
<br>
+#include &quot;src/usock/usock.h&quot;
<br>
+#include &quot;src/sec/pmix_sec.h&quot;
<br>
+
<br>
+#include &quot;pmix_server_ops.h&quot;
<br>
+
<br>
+extern pmix_server_module_t pmix_host_server;
<br>
+
<br>
+typedef struct {
<br>
+    pmix_object_t super;
<br>
+    pmix_event_t ev;
<br>
+    pmix_status_t status;
<br>
+    const char *data;
<br>
+    size_t ndata;
<br>
+    pmix_dmdx_local_t *lcd;
<br>
+    pmix_release_cbfunc_t relcbfunc;
<br>
+    void *cbdata;
<br>
+} pmix_dmdx_reply_caddy_t;
<br>
+static void dcd_con(pmix_dmdx_reply_caddy_t *p)
<br>
+{
<br>
+    p-&gt;status = PMIX_ERROR;
<br>
+    p-&gt;ndata = 0;
<br>
+    p-&gt;lcd = NULL;
<br>
+    p-&gt;relcbfunc = NULL;
<br>
+    p-&gt;cbdata = NULL;
<br>
+}
<br>
+PMIX_CLASS_INSTANCE(pmix_dmdx_reply_caddy_t,
<br>
+                   pmix_object_t, dcd_con, NULL);
<br>
+
<br>
+
<br>
+static void dmdx_cbfunc(pmix_status_t status, const char *data,
<br>
+                        size_t ndata, void *cbdata,
<br>
+                        pmix_release_cbfunc_t relfn, void *relcbdata);
<br>
+static pmix_status_t _satisfy_request(pmix_hash_table_t *ht, int rank,
<br>
+                                      pmix_modex_cbfunc_t cbfunc, void
<br>
*cbdata);
<br>
+static pmix_status_t create_local_tracker(char nspace[], int rank,
<br>
+                                          pmix_info_t info[], size_t ninfo,
<br>
+                                          pmix_modex_cbfunc_t cbfunc,
<br>
+                                          void *cbdata,
<br>
+                                          pmix_dmdx_local_t **lcd);
<br>
+
<br>
+
<br>
+/* declare a function whose sole purpose is to
<br>
+ * free data that we provided to our host server
<br>
+ * when servicing dmodex requests */
<br>
+static void relfn(void *cbdata)
<br>
+{
<br>
+    char *data = (char*)cbdata;
<br>
+    free(data);
<br>
+}
<br>
+
<br>
+
<br>
+pmix_status_t pmix_server_get(pmix_buffer_t *buf,
<br>
+                              pmix_modex_cbfunc_t cbfunc,
<br>
+                              void *cbdata)
<br>
+{
<br>
+    int32_t cnt;
<br>
+    pmix_status_t rc;
<br>
+    int rank;
<br>
+    char *cptr;
<br>
+    char nspace[PMIX_MAX_NSLEN+1];
<br>
+    pmix_nspace_t *ns, *nptr;
<br>
+    pmix_info_t *info=NULL;
<br>
+    size_t ninfo=0;
<br>
+    pmix_dmdx_local_t *lcd, *cd;
<br>
+    pmix_rank_info_t *iptr;
<br>
+    pmix_hash_table_t *ht;
<br>
+    bool local;
<br>
+
<br>
+    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
+                        &quot;recvd GET&quot;);
<br>
+
<br>
+    /* setup */
<br>
+    memset(nspace, 0, sizeof(nspace));
<br>
+
<br>
+    /* retrieve the nspace and rank of the requested proc */
<br>
+    cnt = 1;
<br>
+    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;cptr, &amp;cnt,
<br>
PMIX_STRING))) {
<br>
+        PMIX_ERROR_LOG(rc);
<br>
+        return rc;
<br>
+    }
<br>
+    (void)strncpy(nspace, cptr, PMIX_MAX_NSLEN);
<br>
+    free(cptr);
<br>
+    cnt = 1;
<br>
+    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;rank, &amp;cnt,
<br>
PMIX_INT))) {
<br>
+        PMIX_ERROR_LOG(rc);
<br>
+        return rc;
<br>
+    }
<br>
+    /* retrieve any provided info structs */
<br>
+    cnt = 1;
<br>
+    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;ninfo, &amp;cnt,
<br>
PMIX_SIZE))) {
<br>
+        PMIX_ERROR_LOG(rc);
<br>
+        return rc;
<br>
+    }
<br>
+    if (0 &lt; ninfo) {
<br>
+        PMIX_INFO_CREATE(info, ninfo);
<br>
+        cnt = ninfo;
<br>
+        if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, info, &amp;cnt,
<br>
PMIX_INFO))) {
<br>
+            PMIX_ERROR_LOG(rc);
<br>
+            PMIX_INFO_FREE(info, ninfo);
<br>
+            return rc;
<br>
+        }
<br>
+    }
<br>
+
<br>
+    /* find the nspace object for this client */
<br>
+    nptr = NULL;
<br>
+    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
<br>
+        if (0 == strcmp(nspace, ns-&gt;nspace)) {
<br>
+            nptr = ns;
<br>
+            break;
<br>
+        }
<br>
+    }
<br>
+
<br>
+    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
+                        &quot;%s:%d EXECUTE GET FOR %s:%d&quot;,
<br>
+                        pmix_globals.myid.nspace,
<br>
+                        pmix_globals.myid.rank, nspace, rank);
<br>
+
<br>
+    if (NULL == nptr || NULL == nptr-&gt;server) {
<br>
+        /* this is for an nspace we don't know about yet, so
<br>
+         * record the request for data from this process and
<br>
+         * give the host server a chance to tell us about it */
<br>
+        rc = create_local_tracker(nspace, rank, info, ninfo,
<br>
+                                  cbfunc, cbdata, &amp;lcd);
<br>
+        return rc;
<br>
+    }
<br>
+
<br>
+    /* We have to wait for all local clients to be registered before
<br>
+     * we can know whether this request is for data from a local or a
<br>
+     * remote client because one client might ask for data about another
<br>
+     * client that the host RM hasn't told us about yet. Fortunately,
<br>
+     * we do know how many clients to expect, so first check to see if
<br>
+     * all clients have been registered with us */
<br>
+     if (!nptr-&gt;server-&gt;all_registered) {
<br>
+        /* we cannot do anything further, so just track this request
<br>
+         * for now */
<br>
+        rc = create_local_tracker(nspace, rank, info, ninfo,
<br>
+                                  cbfunc, cbdata, &amp;lcd);
<br>
+        return rc;
<br>
+    }
<br>
+
<br>
+    /* Since we know about all the local clients in this nspace,
<br>
+     * let's first try to satisfy the request with any available data.
<br>
+     * By default, we assume we are looking for data from a remote
<br>
+     * client, and then check to see if this is one of my local
<br>
+     * clients - if so, then we look in that hash table */
<br>
+    ht = &amp;nptr-&gt;server-&gt;remote;
<br>
+    local = false;
<br>
+    PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks, pmix_rank_info_t) {
<br>
+        if (iptr-&gt;rank == rank) {
<br>
+            /* it is known local client - check the local table */
<br>
+            ht = &amp;nptr-&gt;server-&gt;mylocal;
<br>
+            local = true;
<br>
+            break;
<br>
+        }
<br>
+    }
<br>
+
<br>
+    /* see if we already have this data */
<br>
+    rc = _satisfy_request(ht, rank, cbfunc, cbdata);
<br>
+    if( PMIX_SUCCESS == rc ){
<br>
+        /* request was successfully satisfied */
<br>
+        PMIX_INFO_FREE(info, ninfo);
<br>
+        return rc;
<br>
+    }
<br>
+
<br>
+    /* If we get here, then we don't have the data at this time. Check
<br>
+     * to see if we already have a pending request for the data - if
<br>
+     * we do, then we can just wait for it to arrive */
<br>
+    rc = create_local_tracker(nspace, rank, info, ninfo,
<br>
+                              cbfunc, cbdata, &amp;lcd);
<br>
+    if (PMIX_SUCCESS == rc) {
<br>
+       /* we are already waiting for the data - nothing more
<br>
+        * for us to do as the function added the new request
<br>
+        * to the tracker for us */
<br>
+       return PMIX_SUCCESS;
<br>
+    }
<br>
+    if (PMIX_ERR_NOT_FOUND != rc || NULL == lcd) {
<br>
+       /* we have a problem - e.g., out of memory */
<br>
+       return rc;
<br>
+    }
<br>
+
<br>
+    /* Getting here means that we didn't already have a request for
<br>
+     * for data pending, and so we created a new tracker for this
<br>
+     * request. We know the identity of all our local clients, so
<br>
+     * if this is one, then we have nothing further to do - we will
<br>
+     * fulfill the request once the process commits its data */
<br>
+    if (local) {
<br>
+        return PMIX_SUCCESS;
<br>
+    }
<br>
+
<br>
+    /* this isn't a local client of ours, so we need to ask the host
<br>
+     * resource manager server to please get the info for us from
<br>
+     * whomever is hosting the target process */
<br>
+    if (NULL != pmix_host_server.direct_modex) {
<br>
+        rc = pmix_host_server.direct_modex(&amp;lcd-&gt;proc, info, ninfo,
<br>
dmdx_cbfunc, lcd);
<br>
+    } else {
<br>
+        /* if we don't have direct modex feature, just respond with &quot;not
<br>
found&quot; */
<br>
+        cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, cbdata, NULL, NULL);
<br>
+        PMIX_INFO_FREE(info, ninfo);
<br>
+        pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
<br>
&amp;lcd-&gt;super);
<br>
+        PMIX_LIST_DESTRUCT(&amp;lcd-&gt;loc_reqs);
<br>
+        PMIX_RELEASE(lcd);
<br>
+        rc = PMIX_ERR_NOT_FOUND;
<br>
+    }
<br>
+
<br>
+    return rc;
<br>
+}
<br>
+
<br>
+static pmix_status_t create_local_tracker(char nspace[], int rank,
<br>
+                                          pmix_info_t info[], size_t ninfo,
<br>
+                                          pmix_modex_cbfunc_t cbfunc,
<br>
+                                          void *cbdata,
<br>
+                                          pmix_dmdx_local_t **ld)
<br>
+{
<br>
+    pmix_dmdx_local_t *lcd, *cd;
<br>
+    pmix_dmdx_request_t *req;
<br>
+    pmix_status_t rc;
<br>
+
<br>
+    /* define default */
<br>
+    *ld = NULL;
<br>
+
<br>
+    /* see if we already have an existing request for data
<br>
+     * from this namespace/rank */
<br>
+    lcd = NULL;
<br>
+    PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs,
<br>
pmix_dmdx_local_t) {
<br>
+        if (0 != strncmp(nspace, cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ||
<br>
+                rank != cd-&gt;proc.rank ) {
<br>
+            continue;
<br>
+        }
<br>
+        lcd = cd;
<br>
+        break;
<br>
+    }
<br>
+    if (NULL != lcd) {
<br>
+        /* we already have a request, so just track that someone
<br>
+         * else wants data from the same target */
<br>
+        rc = PMIX_SUCCESS; // indicates we found an existing request
<br>
+        goto complete;
<br>
+    }
<br>
+    /* we do not have an existing request, so let's create
<br>
+     * one and add it to our list */
<br>
+    lcd = PMIX_NEW(pmix_dmdx_local_t);
<br>
+    if (NULL == lcd){
<br>
+        PMIX_INFO_FREE(info, ninfo);
<br>
+        return PMIX_ERR_NOMEM;
<br>
+    }
<br>
+    strncpy(lcd-&gt;proc.nspace, nspace, PMIX_MAX_NSLEN);
<br>
+    lcd-&gt;proc.rank = rank;
<br>
+    lcd-&gt;info = info;
<br>
+    lcd-&gt;ninfo = ninfo;
<br>
+    pmix_list_append(&amp;pmix_server_globals.local_reqs, &amp;lcd-&gt;super);
<br>
+    rc = PMIX_ERR_NOT_FOUND;  // indicates that we created a new request
<br>
tracker
<br>
+
<br>
+  complete:
<br>
+    /* track this specific requestor so we return the
<br>
+     * data to them */
<br>
+    req = PMIX_NEW(pmix_dmdx_request_t);
<br>
+    req-&gt;cbfunc = cbfunc;
<br>
+    req-&gt;cbdata = cbdata;
<br>
+    pmix_list_append(&amp;lcd-&gt;loc_reqs, &amp;req-&gt;super);
<br>
+    *ld = lcd;
<br>
+    return rc;
<br>
+}
<br>
+
<br>
+void pmix_pending_nspace_requests(pmix_nspace_t *nptr)
<br>
+{
<br>
+    pmix_dmdx_local_t *cd, *cd_next;
<br>
+
<br>
+    /* Now that we know all local ranks, go along request list and ask for
<br>
remote data
<br>
+     * for the non-local ranks, and resolve all pending requests for local
<br>
procs
<br>
+     * that were waiting for registration to complete
<br>
+     */
<br>
+    PMIX_LIST_FOREACH_SAFE(cd, cd_next, &amp;pmix_server_globals.local_reqs,
<br>
pmix_dmdx_local_t) {
<br>
+        pmix_rank_info_t *info;
<br>
+        bool found = false;
<br>
+
<br>
+        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ) {
<br>
+            continue;
<br>
+        }
<br>
+
<br>
+        PMIX_LIST_FOREACH(info, &amp;nptr-&gt;server-&gt;ranks, pmix_rank_info_t) {
<br>
+            if (info-&gt;rank == cd-&gt;proc.rank) {
<br>
+                found = true;  // we will satisy this request upon commit
<br>
from new proc
<br>
+                break;
<br>
+            }
<br>
+        }
<br>
+
<br>
+        /* if not found - this is remote process and we need to send
<br>
+         * corresponding direct modex request */
<br>
+        if( !found ){
<br>
+            if( NULL != pmix_host_server.direct_modex ){
<br>
+                pmix_host_server.direct_modex(&amp;cd-&gt;proc, cd-&gt;info,
<br>
cd-&gt;ninfo, dmdx_cbfunc, cd);
<br>
+            } else {
<br>
+                pmix_dmdx_request_t *req, *req_next;
<br>
+                PMIX_LIST_FOREACH_SAFE(req, req_next, &amp;cd-&gt;loc_reqs,
<br>
pmix_dmdx_request_t) {
<br>
+                    req-&gt;cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, req-&gt;cbdata,
<br>
NULL, NULL);
<br>
+                    pmix_list_remove_item(&amp;cd-&gt;loc_reqs, &amp;req-&gt;super);
<br>
+                    PMIX_RELEASE(req);
<br>
+                }
<br>
+                pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
<br>
&amp;cd-&gt;super);
<br>
+                PMIX_RELEASE(cd);
<br>
+            }
<br>
+        }
<br>
+    }
<br>
+}
<br>
+
<br>
+static pmix_status_t _satisfy_request(pmix_hash_table_t *ht, int rank,
<br>
+                                      pmix_modex_cbfunc_t cbfunc, void
<br>
*cbdata)
<br>
+{
<br>
+    pmix_status_t rc;
<br>
+    pmix_value_t *val;
<br>
+    char *data;
<br>
+    size_t sz;
<br>
+    pmix_buffer_t xfer, pbkt, *xptr;
<br>
+
<br>
+    /* check to see if this data already has been
<br>
+     * obtained as a result of a prior direct modex request from
<br>
+     * a remote peer, or due to data from a local client
<br>
+     * having been committed */
<br>
+    rc = pmix_hash_fetch(ht, rank, &quot;modex&quot;, &amp;val);
<br>
+    if (PMIX_SUCCESS == rc &amp;&amp; NULL != val) {
<br>
+        /* the client is expecting this to arrive as a byte object
<br>
+         * containing a buffer, so package it accordingly */
<br>
+        PMIX_CONSTRUCT(&amp;pbkt, pmix_buffer_t);
<br>
+        PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
<br>
+        xptr = &amp;xfer;
<br>
+        PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes, val-&gt;data.bo.size);
<br>
+        pmix_bfrop.pack(&amp;pbkt, &amp;xptr, 1, PMIX_BUFFER);
<br>
+        xfer.base_ptr = NULL; // protect the passed data
<br>
+        xfer.bytes_used = 0;
<br>
+        PMIX_DESTRUCT(&amp;xfer);
<br>
+        PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
<br>
+        PMIX_DESTRUCT(&amp;pbkt);
<br>
+        PMIX_VALUE_RELEASE(val);
<br>
+        /* pass it back */
<br>
+        cbfunc(rc, data, sz, cbdata, relfn, data);
<br>
+        return rc;
<br>
+    }
<br>
+    return PMIX_ERR_NOT_FOUND;
<br>
+}
<br>
+
<br>
+/* Resolve pending requests to this namespace/rank */
<br>
+pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr, int rank,
<br>
+                                   pmix_status_t status, pmix_dmdx_local_t
<br>
*lcd)
<br>
+{
<br>
+    pmix_dmdx_local_t *cd;
<br>
+
<br>
+    /* find corresponding request (if exists) */
<br>
+    if (NULL == lcd &amp;&amp; NULL != nptr) {
<br>
+        PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs,
<br>
pmix_dmdx_local_t) {
<br>
+            if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace,
<br>
PMIX_MAX_NSLEN) ||
<br>
+                    rank != cd-&gt;proc.rank) {
<br>
+                continue;
<br>
+            }
<br>
+            lcd = cd;
<br>
+            break;
<br>
+        }
<br>
+    }
<br>
+
<br>
+    /* If somebody was interested in this rank */
<br>
+    if (NULL != lcd) {
<br>
+        pmix_dmdx_request_t *req;
<br>
+
<br>
+        if (PMIX_SUCCESS != status){
<br>
+            /* if we've got an error for this request - just forward it*/
<br>
+            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
<br>
+                /* if we can't satisfy this request - respond with error */
<br>
+                req-&gt;cbfunc(status, NULL, 0, req-&gt;cbdata, NULL, NULL);
<br>
+            }
<br>
+        } else if (NULL != nptr) {
<br>
+            /* if we've got the blob - try to satisfy requests */
<br>
+            pmix_hash_table_t *ht;
<br>
+            pmix_rank_info_t *iptr;
<br>
+
<br>
+            /* by default we are looking for the remote data */
<br>
+            ht = &amp;nptr-&gt;server-&gt;remote;
<br>
+            /* check if this rank is local */
<br>
+            PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks,
<br>
pmix_rank_info_t) {
<br>
+                if (iptr-&gt;rank == rank) {
<br>
+                    ht = &amp;nptr-&gt;server-&gt;mylocal;
<br>
+                    break;
<br>
+                }
<br>
+            }
<br>
+
<br>
+            /* run through all the requests to this rank */
<br>
+            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
<br>
+                pmix_status_t rc;
<br>
+                rc = _satisfy_request(ht, rank, req-&gt;cbfunc, req-&gt;cbdata);
<br>
+                if( PMIX_SUCCESS != rc ){
<br>
+                    /* if we can't satisfy this particular request
<br>
(missing key?) */
<br>
+                    req-&gt;cbfunc(rc, NULL, 0, req-&gt;cbdata, NULL, NULL);
<br>
+                }
<br>
+            }
<br>
+        }
<br>
+        /* remove all requests to this rank and cleanup the corresponding
<br>
structure */
<br>
+        pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
<br>
(pmix_list_item_t*)lcd);
<br>
+        PMIX_RELEASE(lcd);
<br>
+    }
<br>
+    return PMIX_SUCCESS;
<br>
+}
<br>
+
<br>
+/* process the returned data from the host RM server */
<br>
+static void _process_dmdx_reply(int fd, short args, void *cbdata)
<br>
+{
<br>
+    pmix_dmdx_reply_caddy_t *caddy = (pmix_dmdx_reply_caddy_t *)cbdata;
<br>
+    pmix_kval_t *kp;
<br>
+    pmix_nspace_t *ns, *nptr;
<br>
+    pmix_status_t rc;
<br>
+    pmix_buffer_t xfer, pbkt, *xptr;
<br>
+
<br>
+    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
+                    &quot;[%s:%d] process dmdx reply from %s:%d&quot;,
<br>
+                    __FILE__, __LINE__,
<br>
+                    caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
<br>
+
<br>
+    /* find the nspace object for this client */
<br>
+    nptr = NULL;
<br>
+    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
<br>
+        if (0 == strcmp(caddy-&gt;lcd-&gt;proc.nspace, ns-&gt;nspace)) {
<br>
+            nptr = ns;
<br>
+            break;
<br>
+        }
<br>
+    }
<br>
+
<br>
+    if (NULL == nptr) {
<br>
+        /* should be impossible */
<br>
+        PMIX_ERROR_LOG(PMIX_ERR_NOT_FOUND);
<br>
+        caddy-&gt;status = PMIX_ERR_NOT_FOUND;
<br>
+        goto cleanup;
<br>
+    }
<br>
+
<br>
+    /* if the request was successfully satisfied, then store the data
<br>
+     * in our hash table for remote procs. Although we could immediately
<br>
+     * resolve any outstanding requests on our tracking list, we instead
<br>
+     * store the data first so we can immediately satisfy any future
<br>
+     * requests. Then, rather than duplicate the resolve code here, we
<br>
+     * will let the pmix_pending_resolve function go ahead and retrieve
<br>
+     * it from the hash table */
<br>
+    if (PMIX_SUCCESS == caddy-&gt;status) {
<br>
+        kp = PMIX_NEW(pmix_kval_t);
<br>
+        kp-&gt;key = strdup(&quot;modex&quot;);
<br>
+        PMIX_VALUE_CREATE(kp-&gt;value, 1);
<br>
+        kp-&gt;value-&gt;type = PMIX_BYTE_OBJECT;
<br>
+        /* we don't know if the host is going to save this data
<br>
+         * or not, so we have to copy it - the client is expecting
<br>
+         * this to arrive as a byte object containing a buffer, so
<br>
+         * package it accordingly */
<br>
+        kp-&gt;value-&gt;data.bo.bytes = malloc(caddy-&gt;ndata);
<br>
+        memcpy(kp-&gt;value-&gt;data.bo.bytes, caddy-&gt;data, caddy-&gt;ndata);
<br>
+        kp-&gt;value-&gt;data.bo.size = caddy-&gt;ndata;
<br>
+        /* store it in the appropriate hash */
<br>
+        if (PMIX_SUCCESS != (rc = pmix_hash_store(&amp;nptr-&gt;server-&gt;remote,
<br>
caddy-&gt;lcd-&gt;proc.rank, kp))) {
<br>
+            PMIX_ERROR_LOG(rc);
<br>
+        }
<br>
+        PMIX_RELEASE(kp);  // maintain acctg
<br>
+    }
<br>
+
<br>
+    /* always execute the callback to avoid having the client hang */
<br>
+    pmix_pending_resolve(nptr, caddy-&gt;lcd-&gt;proc.rank, caddy-&gt;status,
<br>
caddy-&gt;lcd);
<br>
+
<br>
+cleanup:
<br>
+    /* now call the release function so the host server
<br>
+     * knows it can release the data */
<br>
+    if (NULL != caddy-&gt;relcbfunc) {
<br>
+        caddy-&gt;relcbfunc(caddy-&gt;cbdata);
<br>
+    }
<br>
+    PMIX_RELEASE(caddy);
<br>
+}
<br>
+
<br>
+/* this is the callback function that the host RM server will call
<br>
+ * when it gets requested info back from a remote server */
<br>
+static void dmdx_cbfunc(pmix_status_t status,
<br>
+                        const char *data, size_t ndata, void *cbdata,
<br>
+                        pmix_release_cbfunc_t release_fn, void
<br>
*release_cbdata)
<br>
+{
<br>
+    pmix_dmdx_reply_caddy_t *caddy;
<br>
+
<br>
+    /* because the host RM is calling us from their own thread, we
<br>
+     * need to thread-shift into our local progress thread before
<br>
+     * accessing any global info */
<br>
+    caddy = PMIX_NEW(pmix_dmdx_reply_caddy_t);
<br>
+    caddy-&gt;status = status;
<br>
+    /* point to the callers cbfunc */
<br>
+    caddy-&gt;relcbfunc = release_fn;
<br>
+    caddy-&gt;cbdata = release_cbdata;
<br>
+
<br>
+    /* point to the returned data and our own internal
<br>
+     * tracker */
<br>
+    caddy-&gt;data   = data;
<br>
+    caddy-&gt;ndata  = ndata;
<br>
+    caddy-&gt;lcd    = (pmix_dmdx_local_t *)cbdata;
<br>
+    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
+                        &quot;[%s:%d] queue dmdx reply for %s:%d&quot;,
<br>
+                        __FILE__, __LINE__,
<br>
+                        caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
<br>
+    event_assign(&amp;caddy-&gt;ev, pmix_globals.evbase, -1, EV_WRITE,
<br>
+                 _process_dmdx_reply, caddy);
<br>
+    event_priority_set(&amp;caddy-&gt;ev, 0);
<br>
+    event_active(&amp;caddy-&gt;ev, EV_WRITE, 1);
<br>
+}
<br>
+
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
<br>
index 4a4abd1..43d35b5 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
<br>
@@ -58,246 +58,6 @@
<br>
<p>&nbsp;pmix_server_module_t pmix_host_server = {0};
<br>
<p>-static void dmdx_cbfunc(pmix_status_t status, const char *data,
<br>
-                        size_t ndata, void *cbdata,
<br>
-                        pmix_release_cbfunc_t relfn, void *relcbdata);
<br>
-
<br>
-typedef struct {
<br>
-    pmix_object_t super;
<br>
-    pmix_event_t ev;
<br>
-    pmix_status_t status;
<br>
-    const char *data;
<br>
-    size_t ndata;
<br>
-    pmix_dmdx_local_t *lcd;
<br>
-    pmix_release_cbfunc_t relcbfunc;
<br>
-    void *cbdata;
<br>
-} pmix_dmdx_reply_caddy_t;
<br>
-PMIX_CLASS_INSTANCE(pmix_dmdx_reply_caddy_t,
<br>
-                   pmix_object_t, NULL, NULL);
<br>
-
<br>
-
<br>
-static void relfn(void *cbdata)
<br>
-{
<br>
-    char *data = (char*)cbdata;
<br>
-    free(data);
<br>
-}
<br>
-
<br>
-static pmix_status_t _satisfy_request(pmix_nspace_t *nptr, int rank,
<br>
-                                         pmix_hash_table_t *ht,
<br>
-                                         pmix_modex_cbfunc_t cbfunc, void
<br>
*cbdata)
<br>
-{
<br>
-    pmix_status_t rc;
<br>
-    pmix_buffer_t pbkt, xfer;
<br>
-    pmix_value_t *val;
<br>
-    char *data;
<br>
-    size_t sz;
<br>
-
<br>
-    /* check to see if this data already has been
<br>
-     * obtained as a result of a prior direct modex request from
<br>
-     * another local peer */
<br>
-    rc = pmix_hash_fetch(ht, rank, &quot;modex&quot;, &amp;val);
<br>
-    if (PMIX_SUCCESS == rc &amp;&amp; NULL != val) {
<br>
-        PMIX_CONSTRUCT(&amp;pbkt, pmix_buffer_t);
<br>
-        PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
<br>
-        pmix_buffer_t *pxfer = &amp;xfer;
<br>
-        PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes, val-&gt;data.bo.size);
<br>
-        pmix_bfrop.pack(&amp;pbkt, &amp;pxfer, 1, PMIX_BUFFER);
<br>
-        xfer.base_ptr = NULL;
<br>
-        xfer.bytes_used = 0;
<br>
-        PMIX_DESTRUCT(&amp;xfer);
<br>
-        PMIX_VALUE_RELEASE(val);
<br>
-        PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
<br>
-        PMIX_DESTRUCT(&amp;pbkt);
<br>
-        /* pass it back */
<br>
-        cbfunc(rc, data, sz, cbdata, relfn, data);
<br>
-        return rc;
<br>
-    }
<br>
-    return PMIX_ERR_NOT_FOUND;
<br>
-}
<br>
-
<br>
-pmix_status_t pmix_pending_request(pmix_nspace_t *nptr, int rank,
<br>
-                                   pmix_info_t *info, size_t ninfo,
<br>
-                                   pmix_modex_cbfunc_t cbfunc, void
<br>
*cbdata)
<br>
-{
<br>
-    pmix_dmdx_local_t *lcd = NULL, *cd;
<br>
-    pmix_rank_info_t *iptr;
<br>
-    pmix_hash_table_t *ht;
<br>
-    pmix_status_t rc;
<br>
-
<br>
-    /* 1. Try to satisfy the request right now */
<br>
-
<br>
-    /* by default we are looking for the remote data */
<br>
-    ht = &amp;nptr-&gt;server-&gt;remote;
<br>
-    PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks, pmix_rank_info_t) {
<br>
-        if (iptr-&gt;rank == rank) {
<br>
-            /* in case it is known local rank - check local table */
<br>
-            ht = &amp;nptr-&gt;server-&gt;mylocal;
<br>
-            break;
<br>
-        }
<br>
-    }
<br>
-
<br>
-    rc = _satisfy_request(nptr, rank, ht, cbfunc, cbdata);
<br>
-    if( PMIX_SUCCESS == rc ){
<br>
-        /* request was successfully satisfied */
<br>
-        PMIX_INFO_FREE(info, ninfo);
<br>
-        return rc;
<br>
-    }
<br>
-
<br>
-    /* 2. We were unable to satisfy request right now.
<br>
-     * Look for existing requests to this namespace/rank */
<br>
-    PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs,
<br>
pmix_dmdx_local_t) {
<br>
-        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ||
<br>
-                rank != cd-&gt;proc.rank ) {
<br>
-            continue;
<br>
-        }
<br>
-        lcd = cd;
<br>
-        break;
<br>
-    }
<br>
-
<br>
-    /* 3. If no requests exists then:
<br>
-     * - if all local clients are registered then we were called because
<br>
-     * the remote data was requested. Create request and call direct modex
<br>
-     * to retrieve the data
<br>
-     * - if not all local ranks were registered, we need to wait untill
<br>
-     * pmix_pending_localy_fin would be called to resolve this. Just add
<br>
the
<br>
-     * request for now.
<br>
-     */
<br>
-    if (NULL == lcd) {
<br>
-        lcd = PMIX_NEW(pmix_dmdx_local_t);
<br>
-        if (NULL == lcd){
<br>
-            PMIX_INFO_FREE(info, ninfo);
<br>
-            return PMIX_ERR_NOMEM;
<br>
-        }
<br>
-        strncpy(lcd-&gt;proc.nspace, nptr-&gt;nspace, PMIX_MAX_NSLEN);
<br>
-        lcd-&gt;proc.rank = rank;
<br>
-        lcd-&gt;info = info;
<br>
-        lcd-&gt;ninfo = ninfo;
<br>
-        pmix_list_append(&amp;pmix_server_globals.local_reqs, &amp;lcd-&gt;super);
<br>
-
<br>
-        /* check &amp; send request if need/possible */
<br>
-        if (nptr-&gt;server-&gt;all_registered &amp;&amp; NULL == info) {
<br>
-            if (NULL != pmix_host_server.direct_modex) {
<br>
-                pmix_host_server.direct_modex(&amp;lcd-&gt;proc, info, ninfo,
<br>
dmdx_cbfunc, lcd);
<br>
-            } else {
<br>
-                /* if we don't have direct modex feature, just respond
<br>
with &quot;not found&quot; */
<br>
-                cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, cbdata, NULL, NULL);
<br>
-                PMIX_INFO_FREE(info, ninfo);
<br>
-                pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
<br>
&amp;lcd-&gt;super);
<br>
-                PMIX_LIST_DESTRUCT(&amp;lcd-&gt;loc_reqs);
<br>
-                PMIX_RELEASE(lcd);
<br>
-                return PMIX_SUCCESS;
<br>
-            }
<br>
-        }
<br>
-    }
<br>
-    pmix_dmdx_request_t *req = PMIX_NEW(pmix_dmdx_request_t);
<br>
-    req-&gt;cbfunc = cbfunc;
<br>
-    req-&gt;cbdata = cbdata;
<br>
-    pmix_list_append(&amp;lcd-&gt;loc_reqs, &amp;req-&gt;super);
<br>
-    return PMIX_SUCCESS;
<br>
-}
<br>
-
<br>
-void pmix_pending_nspace_fix(pmix_nspace_t *nptr)
<br>
-{
<br>
-    pmix_dmdx_local_t *cd, *cd_next;
<br>
-
<br>
-    /* Now when we know all local ranks, go along request list and ask for
<br>
remote data
<br>
-     * for the non-local ranks, and resolve all pending requests for local
<br>
procs
<br>
-     * that were waiting for registration to complete
<br>
-     */
<br>
-    PMIX_LIST_FOREACH_SAFE(cd, cd_next, &amp;pmix_server_globals.local_reqs,
<br>
pmix_dmdx_local_t) {
<br>
-        pmix_rank_info_t *info;
<br>
-        bool found = false;
<br>
-
<br>
-        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ) {
<br>
-            continue;
<br>
-        }
<br>
-
<br>
-        PMIX_LIST_FOREACH(info, &amp;nptr-&gt;server-&gt;ranks, pmix_rank_info_t) {
<br>
-            if (info-&gt;rank == cd-&gt;proc.rank) {
<br>
-                found = true;
<br>
-                break;
<br>
-            }
<br>
-        }
<br>
-
<br>
-        /* if not found - this is remote process and we need to send
<br>
-         * corresponding direct modex request */
<br>
-        if( !found ){
<br>
-            if( NULL != pmix_host_server.direct_modex ){
<br>
-                pmix_host_server.direct_modex(&amp;cd-&gt;proc, cd-&gt;info,
<br>
cd-&gt;ninfo, dmdx_cbfunc, cd);
<br>
-            } else {
<br>
-                pmix_dmdx_request_t *req, *req_next;
<br>
-                PMIX_LIST_FOREACH_SAFE(req, req_next, &amp;cd-&gt;loc_reqs,
<br>
pmix_dmdx_request_t) {
<br>
-                    req-&gt;cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, req-&gt;cbdata,
<br>
NULL, NULL);
<br>
-                    pmix_list_remove_item(&amp;cd-&gt;loc_reqs, &amp;req-&gt;super);
<br>
-                    PMIX_RELEASE(req);
<br>
-                }
<br>
-                pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
<br>
&amp;cd-&gt;super);
<br>
-                PMIX_RELEASE(cd);
<br>
-            }
<br>
-        }
<br>
-    }
<br>
-}
<br>
-
<br>
-/* Resolve pending requests to this namespace/rank */
<br>
-pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr, int rank,
<br>
-                                   pmix_status_t status, pmix_dmdx_local_t
<br>
*lcd)
<br>
-{
<br>
-    pmix_dmdx_local_t *cd;
<br>
-
<br>
-    /* find corresponding request (if exists) */
<br>
-    if( NULL == lcd ){
<br>
-        PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs,
<br>
pmix_dmdx_local_t) {
<br>
-            if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace,
<br>
PMIX_MAX_NSLEN) ||
<br>
-                    rank != cd-&gt;proc.rank) {
<br>
-                continue;
<br>
-            }
<br>
-            lcd = cd;
<br>
-            break;
<br>
-        }
<br>
-    }
<br>
-
<br>
-    /* If somebody was interested in this rank */
<br>
-    if( NULL != lcd ){
<br>
-        pmix_dmdx_request_t *req;
<br>
-
<br>
-        if (PMIX_SUCCESS != status){
<br>
-            /* if we've got an error for this request - just forward it*/
<br>
-            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
<br>
-                /* if we can't satisfy this request - respond with error */
<br>
-                req-&gt;cbfunc(status, NULL, 0, req-&gt;cbdata, NULL, NULL);
<br>
-            }
<br>
-        } else {
<br>
-            /* if we've got the blob - try to satisfy requests */
<br>
-            pmix_hash_table_t *ht;
<br>
-            pmix_rank_info_t *iptr;
<br>
-
<br>
-            /* by default we are looking for the remote data */
<br>
-            ht = &amp;nptr-&gt;server-&gt;remote;
<br>
-            /* check if this rank is local */
<br>
-            PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks,
<br>
pmix_rank_info_t) {
<br>
-                if (iptr-&gt;rank == rank) {
<br>
-                    ht = &amp;nptr-&gt;server-&gt;mylocal;
<br>
-                    break;
<br>
-                }
<br>
-            }
<br>
-
<br>
-            /* run through all the requests to this rank */
<br>
-            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, pmix_dmdx_request_t) {
<br>
-                pmix_status_t rc;
<br>
-                rc = _satisfy_request(nptr, rank, ht, req-&gt;cbfunc,
<br>
req-&gt;cbdata);
<br>
-                if( PMIX_SUCCESS != rc ){
<br>
-                    /* if we can't satisfy this particular request
<br>
(missing key?) */
<br>
-                    req-&gt;cbfunc(rc, NULL, 0, req-&gt;cbdata, NULL, NULL);
<br>
-                }
<br>
-            }
<br>
-        }
<br>
-        /* remove all requests to this rank and cleanup the corresponding
<br>
structure */
<br>
-        pmix_list_remove_item(&amp;pmix_server_globals.local_reqs,
<br>
(pmix_list_item_t*)lcd);
<br>
-        PMIX_RELEASE(lcd);
<br>
-    }
<br>
-    return PMIX_SUCCESS;
<br>
-}
<br>
-
<br>
&nbsp;pmix_status_t pmix_server_abort(pmix_peer_t *peer, pmix_buffer_t *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_op_cbfunc_t cbfunc, void *cbdata)
<br>
&nbsp;{
<br>
@@ -436,13 +196,7 @@ pmix_status_t pmix_server_commit(pmix_peer_t *peer,
<br>
pmix_buffer_t *buf)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* may not be a contribution */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (PMIX_SUCCESS == pmix_hash_fetch(&amp;nptr-&gt;server-&gt;myremote,
<br>
info-&gt;rank, &quot;modex&quot;, &amp;val) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL != val) {
<br>
-                PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
<br>
-                PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes,
<br>
val-&gt;data.bo.size);
<br>
-                pmix_buffer_t *pxfer = &amp;xfer;
<br>
-                pmix_bfrop.pack(&amp;pbkt, &amp;pxfer, 1, PMIX_BUFFER);
<br>
-                xfer.base_ptr = NULL;
<br>
-                xfer.bytes_used = 0;
<br>
-                PMIX_DESTRUCT(&amp;xfer);
<br>
+                PMIX_LOAD_BUFFER(&amp;pbkt, val-&gt;data.bo.bytes,
<br>
val-&gt;data.bo.size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_VALUE_RELEASE(val);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
<br>
@@ -457,7 +211,7 @@ pmix_status_t pmix_server_commit(pmix_peer_t *peer,
<br>
pmix_buffer_t *buf)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMIX_RELEASE(dcd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    /* see if anyone local is waiting on this data- could be more than one
<br>
*/
<br>
+    /* see if anyone local is waiting on this data - could be more than
<br>
one */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return pmix_pending_resolve(nptr, info-&gt;rank, PMIX_SUCCESS, NULL);
<br>
&nbsp;}
<br>
<p>@@ -826,163 +580,6 @@ pmix_status_t pmix_server_fence(pmix_server_caddy_t
<br>
*cd,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
<p>-static void _process_dmdx_reply(int fd, short args, void *cbdata)
<br>
-{
<br>
-    pmix_dmdx_reply_caddy_t *caddy = (pmix_dmdx_reply_caddy_t *)cbdata;
<br>
-    pmix_kval_t *kp;
<br>
-    pmix_nspace_t *ns, *nptr;
<br>
-    pmix_status_t rc;
<br>
-
<br>
-    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
-                    &quot;[%s:%d] queue dmdx reply from %s:%d&quot;,
<br>
-                    __FILE__, __LINE__,
<br>
-                    caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
<br>
-
<br>
-    /* find the nspace object for this client */
<br>
-    nptr = NULL;
<br>
-    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
<br>
-        if (0 == strcmp(caddy-&gt;lcd-&gt;proc.nspace, ns-&gt;nspace)) {
<br>
-            nptr = ns;
<br>
-            break;
<br>
-        }
<br>
-    }
<br>
-
<br>
-    if (NULL == nptr) {
<br>
-        /* should be impossible */
<br>
-        PMIX_ERROR_LOG(PMIX_ERR_NOT_FOUND);
<br>
-        caddy-&gt;status = PMIX_ERR_NOT_FOUND;
<br>
-        goto cleanup;
<br>
-    }
<br>
-
<br>
-    if (PMIX_SUCCESS == caddy-&gt;status) {
<br>
-        kp = PMIX_NEW(pmix_kval_t);
<br>
-        kp-&gt;key = strdup(&quot;modex&quot;);
<br>
-        PMIX_VALUE_CREATE(kp-&gt;value, 1);
<br>
-        kp-&gt;value-&gt;type = PMIX_BYTE_OBJECT;
<br>
-        /* we don't know if the host is going to save this data
<br>
-         * or not, so we have to copy it */
<br>
-        kp-&gt;value-&gt;data.bo.bytes = (char*)malloc(caddy-&gt;ndata);
<br>
-        memcpy(kp-&gt;value-&gt;data.bo.bytes, caddy-&gt;data, caddy-&gt;ndata);
<br>
-        kp-&gt;value-&gt;data.bo.size = caddy-&gt;ndata;
<br>
-        /* store it in the appropriate hash */
<br>
-        if (PMIX_SUCCESS != (rc = pmix_hash_store(&amp;nptr-&gt;server-&gt;remote,
<br>
caddy-&gt;lcd-&gt;proc.rank, kp))) {
<br>
-            PMIX_ERROR_LOG(rc);
<br>
-        }
<br>
-        PMIX_RELEASE(kp);  // maintain acctg
<br>
-    }
<br>
-
<br>
-cleanup:
<br>
-    /* always execute the callback to avoid having the client hang */
<br>
-    pmix_pending_resolve(nptr, caddy-&gt;lcd-&gt;proc.rank, caddy-&gt;status,
<br>
caddy-&gt;lcd);
<br>
-
<br>
-    /* now call the release function so the host server
<br>
-     * knows it can release the data */
<br>
-    if (NULL != caddy-&gt;relcbfunc) {
<br>
-        caddy-&gt;relcbfunc(caddy-&gt;cbdata);
<br>
-    }
<br>
-    PMIX_RELEASE(caddy);
<br>
-}
<br>
-
<br>
-static void dmdx_cbfunc(pmix_status_t status,
<br>
-                        const char *data, size_t ndata, void *cbdata,
<br>
-                        pmix_release_cbfunc_t release_fn, void
<br>
*release_cbdata)
<br>
-{
<br>
-    pmix_dmdx_reply_caddy_t *caddy;
<br>
-    caddy = PMIX_NEW(pmix_dmdx_reply_caddy_t);
<br>
-    caddy-&gt;status = status;
<br>
-    /* point to the callers cbfunc */
<br>
-    caddy-&gt;relcbfunc = release_fn;
<br>
-    caddy-&gt;cbdata = release_cbdata;
<br>
-
<br>
-    caddy-&gt;data   = data;
<br>
-    caddy-&gt;ndata  = ndata;
<br>
-    caddy-&gt;lcd    = (pmix_dmdx_local_t *)cbdata;
<br>
-    pmix_output_verbose(2, pmix_globals.debug_output, &quot;[%s:%d] queue dmdx
<br>
reply %s:%d&quot;,
<br>
-                        __FILE__, __LINE__,
<br>
-                        caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
<br>
-    event_assign(&amp;caddy-&gt;ev, pmix_globals.evbase, -1, EV_WRITE,
<br>
-                 _process_dmdx_reply, caddy);
<br>
-    event_priority_set(&amp;caddy-&gt;ev, 0);
<br>
-    event_active(&amp;caddy-&gt;ev, EV_WRITE, 1);
<br>
-}
<br>
-
<br>
-pmix_status_t pmix_server_get(pmix_buffer_t *buf,
<br>
-                              pmix_modex_cbfunc_t cbfunc,
<br>
-                              void *cbdata)
<br>
-{
<br>
-    int32_t cnt;
<br>
-    pmix_status_t rc;
<br>
-    int rank;
<br>
-    char *cptr;
<br>
-    char nspace[PMIX_MAX_NSLEN+1];
<br>
-    pmix_nspace_t *ns, *nptr;
<br>
-    pmix_info_t *info=NULL;
<br>
-    size_t ninfo=0;
<br>
-
<br>
-    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
-                        &quot;recvd GET&quot;);
<br>
-
<br>
-    /* setup */
<br>
-    memset(nspace, 0, sizeof(nspace));
<br>
-
<br>
-    /* retrieve the nspace and rank of the requested proc */
<br>
-    cnt = 1;
<br>
-    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;cptr, &amp;cnt,
<br>
PMIX_STRING))) {
<br>
-        PMIX_ERROR_LOG(rc);
<br>
-        return rc;
<br>
-    }
<br>
-    (void)strncpy(nspace, cptr, PMIX_MAX_NSLEN);
<br>
-    free(cptr);
<br>
-    cnt = 1;
<br>
-    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;rank, &amp;cnt,
<br>
PMIX_INT))) {
<br>
-        PMIX_ERROR_LOG(rc);
<br>
-        return rc;
<br>
-    }
<br>
-    /* find the nspace object for this client */
<br>
-    nptr = NULL;
<br>
-    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
<br>
-        if (0 == strcmp(nspace, ns-&gt;nspace)) {
<br>
-            nptr = ns;
<br>
-            break;
<br>
-        }
<br>
-    }
<br>
-
<br>
-    pmix_output_verbose(2, pmix_globals.debug_output,
<br>
-                        &quot;%s:%d EXECUTE GET FOR %s:%d&quot;,
<br>
-                        pmix_globals.myid.nspace,
<br>
-                        pmix_globals.myid.rank, nspace, rank);
<br>
-
<br>
-    /* retrieve any provided info structs */
<br>
-    cnt = 1;
<br>
-    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;ninfo, &amp;cnt,
<br>
PMIX_SIZE))) {
<br>
-        PMIX_ERROR_LOG(rc);
<br>
-        return rc;
<br>
-    }
<br>
-    if (0 &lt; ninfo) {
<br>
-        PMIX_INFO_CREATE(info, ninfo);
<br>
-        cnt = ninfo;
<br>
-        if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, info, &amp;cnt,
<br>
PMIX_INFO))) {
<br>
-            PMIX_ERROR_LOG(rc);
<br>
-            PMIX_INFO_FREE(info, ninfo);
<br>
-            return rc;
<br>
-        }
<br>
-    }
<br>
-
<br>
-    if (NULL == nptr) {
<br>
-        /* this is for an nspace we don't know about yet, so
<br>
-         * give the host server a chance to tell us about it */
<br>
-        nptr = PMIX_NEW(pmix_nspace_t);
<br>
-        (void)strncpy(nptr-&gt;nspace, nspace, PMIX_MAX_NSLEN);
<br>
-        pmix_list_append(&amp;pmix_globals.nspaces, &amp;nptr-&gt;super);
<br>
-    }
<br>
-    /* if we don't have any ranks for this job, protect ourselves here */
<br>
-    if (NULL == nptr-&gt;server) {
<br>
-        nptr-&gt;server = PMIX_NEW(pmix_server_nspace_t);
<br>
-    }
<br>
-
<br>
-    return pmix_pending_request(nptr, rank, info, ninfo, cbfunc, cbdata);
<br>
-}
<br>
-
<br>
&nbsp;pmix_status_t pmix_server_publish(pmix_peer_t *peer,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_buffer_t *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_op_cbfunc_t cbfunc, void *cbdata)
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
<br>
index c6279d5..9129b6b 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
<br>
@@ -183,10 +183,7 @@ void pmix_stop_listening(void);
<br>
<p>&nbsp;bool pmix_server_trk_update(pmix_server_trkr_t *trk);
<br>
<p>-pmix_status_t pmix_pending_request(pmix_nspace_t *nptr, int rank,
<br>
-                                   pmix_info_t *info, size_t ninfo,
<br>
-                                   pmix_modex_cbfunc_t cbfunc, void
<br>
*cbdata);
<br>
-void pmix_pending_nspace_fix(pmix_nspace_t *nptr);
<br>
+void pmix_pending_nspace_requests(pmix_nspace_t *nptr);
<br>
&nbsp;pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr, int rank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_status_t status, pmix_dmdx_local_t
<br>
*lcd);
<br>
<p>diff --git a/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
<br>
index 8cc4bcd..90c42ed 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
<br>
@@ -123,6 +123,8 @@ const char* PMIx_Error_string(pmix_status_t errnum)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case PMIX_EXISTS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &quot;EXISTS&quot;;
<br>
<p>+    case PMIX_ERR_SILENT:
<br>
+        return &quot;SILENT&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case PMIX_ERROR:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &quot;ERROR&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case PMIX_SUCCESS:
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
<br>
b/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
<br>
index f72227a..e43ac47 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
<br>
@@ -28,9 +28,13 @@
<br>
<p>&nbsp;BEGIN_C_DECLS
<br>
<p>-#define PMIX_ERROR_LOG(r)                                       \
<br>
-    pmix_output(0, &quot;PMIX ERROR: %s in file %s at line %d&quot;,      \
<br>
-                PMIx_Error_string((r)), __FILE__, __LINE__);
<br>
+#define PMIX_ERROR_LOG(r)                                               \
<br>
+    do {                                                                \
<br>
+        if (PMIX_ERR_SILENT != (r)) {                                   \
<br>
+            pmix_output(0, &quot;PMIX ERROR: %s in file %s at line %d&quot;,      \
<br>
+                        PMIx_Error_string((r)), __FILE__, __LINE__);    \
<br>
+        }                                                               \
<br>
+    }while(0);
<br>
<p>&nbsp;#define PMIX_REPORT_ERROR(e)                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {                                                \
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix1_client.c
<br>
b/opal/mca/pmix/pmix1xx/pmix1_client.c
<br>
index f1ba0d5..e9c50b7 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix1_client.c
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix1_client.c
<br>
@@ -217,6 +217,7 @@ int pmix1_store_local(const opal_process_name_t *proc,
<br>
opal_value_t *val)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == job) {
<br>
+            OPAL_ERROR_LOG(OPAL_ERR_NOT_FOUND);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERR_NOT_FOUND;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)strncpy(p.nspace, job-&gt;nspace, PMIX_MAX_NSLEN);
<br>
diff --git a/opal/mca/pmix/pmix1xx/pmix1_server_south.c
<br>
b/opal/mca/pmix/pmix1xx/pmix1_server_south.c
<br>
index ae42de0..f0d0f11 100644
<br>
--- a/opal/mca/pmix/pmix1xx/pmix1_server_south.c
<br>
+++ b/opal/mca/pmix/pmix1xx/pmix1_server_south.c
<br>
@@ -156,10 +156,10 @@ static void opcbfunc(pmix_status_t status, void
<br>
*cbdata)
<br>
&nbsp;}
<br>
<p>&nbsp;int pmix1_server_register_nspace(opal_jobid_t jobid,
<br>
-                                   int nlocalprocs,
<br>
-                                   opal_list_t *info,
<br>
-                                   opal_pmix_op_cbfunc_t cbfunc,
<br>
-                                   void *cbdata)
<br>
+                                 int nlocalprocs,
<br>
+                                 opal_list_t *info,
<br>
+                                 opal_pmix_op_cbfunc_t cbfunc,
<br>
+                                 void *cbdata)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_value_t *kv, *k2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_info_t *pinfo, *pmap;
<br>
@@ -168,10 +168,17 @@ int pmix1_server_register_nspace(opal_jobid_t jobid,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_status_t rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix1_opcaddy_t *op;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t *pmapinfo;
<br>
+    opal_pmix1_jobid_trkr_t *job;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* convert the jobid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)snprintf(nspace, PMIX_MAX_NSLEN,
<br>
opal_convert_jobid_to_string(jobid));
<br>
<p>+    /* store this job in our list of known nspaces */
<br>
+    job = OBJ_NEW(opal_pmix1_jobid_trkr_t);
<br>
+    (void)strncpy(job-&gt;nspace, nspace, PMIX_MAX_NSLEN);
<br>
+    job-&gt;jobid = jobid;
<br>
+    opal_list_append(&amp;mca_pmix_pmix1xx_component.jobids, &amp;job-&gt;super);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* convert the list to an array of pmix_info_t */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != info) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sz = opal_list_get_size(info);
<br>
@@ -220,10 +227,10 @@ int pmix1_server_register_nspace(opal_jobid_t jobid,
<br>
<p><p>&nbsp;int pmix1_server_register_client(const opal_process_name_t *proc,
<br>
-                                   uid_t uid, gid_t gid,
<br>
-                                   void *server_object,
<br>
-                                   opal_pmix_op_cbfunc_t cbfunc,
<br>
-                                   void *cbdata)
<br>
+                                 uid_t uid, gid_t gid,
<br>
+                                 void *server_object,
<br>
+                                 opal_pmix_op_cbfunc_t cbfunc,
<br>
+                                 void *cbdata)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_status_t rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix1_opcaddy_t *op;
<br>
@@ -275,7 +282,7 @@ static void dmdx_response(pmix_status_t status, char
<br>
*data, size_t sz, void *cbd
<br>
&nbsp;}
<br>
<p>&nbsp;int pmix1_server_dmodex(const opal_process_name_t *proc,
<br>
-                          opal_pmix_modex_cbfunc_t cbfunc, void *cbdata)
<br>
+                        opal_pmix_modex_cbfunc_t cbfunc, void *cbdata)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix1_opcaddy_t *op;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_status_t rc;
<br>
diff --git a/orte/orted/pmix/pmix_server.c b/orte/orted/pmix/pmix_server.c
<br>
index 953145d..ee5582c 100644
<br>
--- a/orte/orted/pmix/pmix_server.c
<br>
+++ b/orte/orted/pmix/pmix_server.c
<br>
@@ -505,7 +505,6 @@ static void pmix_server_dmdx_resp(int status,
<br>
orte_process_name_t* sender,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc, ret, room_num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t cnt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_process_name_t target;
<br>
-    opal_value_t kv;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmix_server_req_t *req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t *data = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t ndata = 0;
<br>
@@ -542,29 +541,14 @@ static void pmix_server_dmdx_resp(int status,
<br>
orte_process_name_t* sender,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    /* if we got something, store the blobs locally so we can
<br>
-     * meet any further requests without doing a remote fetch.
<br>
-     * This must be done as a single blob for later retrieval */
<br>
-    if (ORTE_SUCCESS == ret &amp;&amp; NULL != data) {
<br>
-        OBJ_CONSTRUCT(&amp;kv, opal_value_t);
<br>
-        kv.key = strdup(&quot;modex&quot;);
<br>
-        kv.type = OPAL_BYTE_OBJECT;
<br>
-        kv.data.bo.bytes = data;
<br>
-        kv.data.bo.size = ndata;
<br>
-        if (OPAL_SUCCESS != (rc = opal_pmix.store_local(&amp;target, &amp;kv))) {
<br>
-            ORTE_ERROR_LOG(rc);
<br>
-        }
<br>
-        kv.data.bo.bytes = NULL;  // protect the data
<br>
-        kv.data.bo.size = 0;
<br>
-        OBJ_DESTRUCT(&amp;kv);
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check the request out of the tracking hotel */
<br>
<p>&nbsp;opal_hotel_checkout_and_return_occupant(&amp;orte_pmix_server_globals.reqs,
<br>
room_num, (void**)&amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* return the returned data to the requestor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != req) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != req-&gt;mdxcbfunc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req-&gt;mdxcbfunc(ret, (char*)data, ndata, req-&gt;cbdata,
<br>
relcbfunc, data);
<br>
+        } else {
<br>
+            free(data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff --git a/orte/orted/pmix/pmix_server_fence.c
<br>
b/orte/orted/pmix/pmix_server_fence.c
<br>
index b3b0e33..765c1c2 100644
<br>
--- a/orte/orted/pmix/pmix_server_fence.c
<br>
+++ b/orte/orted/pmix/pmix_server_fence.c
<br>
@@ -197,6 +197,12 @@ static void dmodex_req(int sd, short args, void
<br>
*cbdata)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto callback;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+    /* if we are the host daemon, then this is a local request, so
<br>
+     * just wait for the data to come in */
<br>
+    if (ORTE_PROC_MY_NAME-&gt;vpid == dmn-&gt;name.vpid) {
<br>
+        return;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* construct a request message */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf = OBJ_NEW(opal_buffer_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_SUCCESS != (rc = opal_dss.pack(buf, &amp;req-&gt;target, 1,
<br>
OPAL_NAME))) {
<br>
<p><p>-----------------------------------------------------------------------
<br>
<p>Summary of changes:
<br>
&nbsp;ompi/runtime/ompi_mpi_init.c                       |   7 +-
<br>
&nbsp;opal/mca/pmix/base/pmix_base_frame.c               |  11 +-
<br>
&nbsp;opal/mca/pmix/pmix.h                               |  13 +-
<br>
&nbsp;.../pmix1xx/pmix/include/pmix/pmix_common.h.in     |   3 +-
<br>
&nbsp;.../pmix/pmix1xx/pmix/src/client/pmix_client_get.c |   1 +
<br>
&nbsp;opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am  |   3 +-
<br>
&nbsp;.../mca/pmix/pmix1xx/pmix/src/server/pmix_server.c |  11 +-
<br>
&nbsp;.../pmix/pmix1xx/pmix/src/server/pmix_server_get.c | 552
<br>
+++++++++++++++++++++
<br>
&nbsp;.../pmix/pmix1xx/pmix/src/server/pmix_server_ops.c | 407 +--------------
<br>
&nbsp;.../pmix/pmix1xx/pmix/src/server/pmix_server_ops.h |   5 +-
<br>
&nbsp;opal/mca/pmix/pmix1xx/pmix/src/util/error.c        |   2 +
<br>
&nbsp;opal/mca/pmix/pmix1xx/pmix/src/util/error.h        |  10 +-
<br>
&nbsp;opal/mca/pmix/pmix1xx/pmix1_client.c               |   1 +
<br>
&nbsp;opal/mca/pmix/pmix1xx/pmix1_server_south.c         |  25 +-
<br>
&nbsp;orte/orted/pmix/pmix_server.c                      |  20 +-
<br>
&nbsp;orte/orted/pmix/pmix_server_fence.c                |   6 +
<br>
&nbsp;16 files changed, 620 insertions(+), 457 deletions(-)
<br>
&nbsp;create mode 100644 opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
<br>
<p><p>hooks/post-receive
<br>
<pre>
--
open-mpi/ompi
_______________________________________________
ompi-commits mailing list
ompi-commits_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18297/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Reply:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
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
