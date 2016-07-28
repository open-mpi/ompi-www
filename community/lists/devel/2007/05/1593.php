<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 18:58:34 2007" -->
<!-- isoreceived="20070528225834" -->
<!-- sent="Mon, 28 May 2007 18:58:30 -0400" -->
<!-- isosent="20070528225830" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="[OMPI devel] MacOS X v1.1.5 patch" -->
<!-- id="20070528225830.GA3665_at_bromo.msbb.uc.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jack Howarth (<em>howarth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 18:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1594.php">Jack Howarth: "[OMPI devel] MacOS X v1.2.2 patch"</a>
<li><strong>Previous message:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following patch, against openmpi v1.1.5, prevents undefined environ symbols in the openmpi shared libraries
<br>
on MacOS X. This approach avoids the need to modifiy the configure scripts.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
<p><p>diff -uNr openmpi-1.1.5/ompi/communicator/comm_dyn.c openmpi-1.1.5.environ/ompi/communicator/comm_dyn.c
<br>
--- openmpi-1.1.5/ompi/communicator/comm_dyn.c	2007-05-27 20:27:37.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/ompi/communicator/comm_dyn.c	2007-05-27 20:25:55.000000000 -0400
<br>
@@ -51,7 +51,12 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;orte/runtime/runtime.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;int ompi_comm_connect_accept ( ompi_communicator_t *comm, int root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t *port, int send_first,
<br>
diff -uNr openmpi-1.1.5/opal/tools/wrappers/opal_wrapper.c openmpi-1.1.5.environ/opal/tools/wrappers/opal_wrapper.c
<br>
--- openmpi-1.1.5/opal/tools/wrappers/opal_wrapper.c	2006-04-12 12:12:06.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/opal/tools/wrappers/opal_wrapper.c	2007-05-27 20:05:22.000000000 -0400
<br>
@@ -48,7 +48,12 @@
<br>
&nbsp;#include &quot;opal/util/path.h&quot;
<br>
&nbsp;#include &quot;opal/util/few.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *language;
<br>
diff -uNr openmpi-1.1.5/opal/util/opal_environ.c openmpi-1.1.5.environ/opal/util/opal_environ.c
<br>
--- openmpi-1.1.5/opal/util/opal_environ.c	2006-04-12 12:12:07.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/opal/util/opal_environ.c	2007-05-27 20:07:07.000000000 -0400
<br>
@@ -26,7 +26,9 @@
<br>
&nbsp;#include &quot;opal/util/argv.h&quot;
<br>
&nbsp;#include &quot;opal/util/opal_environ.h&quot;
<br>
&nbsp;#include &quot;opal/constants.h&quot;
<br>
-
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Merge two environ-like char arrays, ensuring that there are no
<br>
@@ -93,7 +95,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *newvalue, *compare;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t len;
<br>
+# ifdef __APPLE__
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Make the new value */
<br>
&nbsp;
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/base/pls_base_context.c openmpi-1.1.5.environ/orte/mca/pls/base/pls_base_context.c
<br>
--- openmpi-1.1.5/orte/mca/pls/base/pls_base_context.c	2006-04-12 12:12:33.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/base/pls_base_context.c	2007-05-27 20:09:03.000000000 -0400
<br>
@@ -42,7 +42,12 @@
<br>
&nbsp;#include &quot;orte/mca/pls/base/base.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;int orte_pls_base_check_context_cwd(orte_app_context_t *context,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool want_chdir)
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/bproc/pls_bproc.c openmpi-1.1.5.environ/orte/mca/pls/bproc/pls_bproc.c
<br>
--- openmpi-1.1.5/orte/mca/pls/bproc/pls_bproc.c	2006-09-19 04:51:59.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/bproc/pls_bproc.c	2007-05-27 20:09:50.000000000 -0400
<br>
@@ -73,7 +73,12 @@
<br>
&nbsp;/**
<br>
&nbsp;&nbsp;* Our current evironment
<br>
&nbsp;&nbsp;*/
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;#if OMPI_HAVE_POSIX_THREADS &amp;&amp; OMPI_THREADS_HAVE_DIFFERENT_PIDS
<br>
&nbsp;int orte_pls_bproc_launch_threaded(orte_jobid_t);
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/fork/pls_fork_module.c openmpi-1.1.5.environ/orte/mca/pls/fork/pls_fork_module.c
<br>
--- openmpi-1.1.5/orte/mca/pls/fork/pls_fork_module.c	2006-10-10 09:58:48.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/fork/pls_fork_module.c	2007-05-27 20:10:35.000000000 -0400
<br>
@@ -76,7 +76,12 @@
<br>
&nbsp;#include &quot;orte/mca/soh/base/base.h&quot;
<br>
&nbsp;#include &quot;orte/mca/pls/fork/pls_fork.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;#if OMPI_HAVE_POSIX_THREADS &amp;&amp; OMPI_THREADS_HAVE_DIFFERENT_PIDS &amp;&amp; OMPI_ENABLE_PROGRESS_THREADS
<br>
&nbsp;static int orte_pls_fork_launch_threaded(orte_jobid_t);
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/poe/pls_poe_component.c openmpi-1.1.5.environ/orte/mca/pls/poe/pls_poe_component.c
<br>
--- openmpi-1.1.5/orte/mca/pls/poe/pls_poe_component.c	2006-04-12 12:12:33.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/poe/pls_poe_component.c	2007-05-27 20:12:18.000000000 -0400
<br>
@@ -31,6 +31,9 @@
<br>
&nbsp;#include &quot;opal/util/argv.h&quot;
<br>
&nbsp;#include &quot;opal/mca/base/mca_base_param.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Public string showing the pls ompi_poe component version number
<br>
@@ -156,7 +159,11 @@
<br>
&nbsp;*/
<br>
&nbsp;orte_pls_base_module_t *orte_pls_poe_component_init(int *priority)
<br>
&nbsp;{
<br>
+# ifdef __APPLE__
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pls_poe_component.path = opal_path_findv(mca_pls_poe_component.argv[0], 0, environ, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == mca_pls_poe_component.path) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/poe/pls_poe_module.c openmpi-1.1.5.environ/orte/mca/pls/poe/pls_poe_module.c
<br>
--- openmpi-1.1.5/orte/mca/pls/poe/pls_poe_module.c	2006-09-19 04:51:59.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/poe/pls_poe_module.c	2007-05-27 20:13:12.000000000 -0400
<br>
@@ -48,7 +48,12 @@
<br>
&nbsp;#include &quot;orte/util/session_dir.h&quot;
<br>
&nbsp;#include &quot;orte/runtime/orte_wait.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Local functions
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/rsh/pls_rsh_component.c openmpi-1.1.5.environ/orte/mca/pls/rsh/pls_rsh_component.c
<br>
--- openmpi-1.1.5/orte/mca/pls/rsh/pls_rsh_component.c	2006-04-12 12:12:33.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/rsh/pls_rsh_component.c	2007-05-27 20:26:47.000000000 -0400
<br>
@@ -40,7 +40,12 @@
<br>
&nbsp;#include &quot;opal/mca/base/mca_base_param.h&quot;
<br>
&nbsp;#include &quot;orte/mca/rml/rml.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;/*
<br>
@@ -169,7 +174,6 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *bname;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
-    extern char **environ;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Take the string that was given to us by the pla_rsh_agent MCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;param and search for it */
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/rsh/pls_rsh_module.c openmpi-1.1.5.environ/orte/mca/pls/rsh/pls_rsh_module.c
<br>
--- openmpi-1.1.5/orte/mca/pls/rsh/pls_rsh_module.c	2006-07-14 12:18:58.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/rsh/pls_rsh_module.c	2007-05-27 20:16:00.000000000 -0400
<br>
@@ -84,7 +84,12 @@
<br>
&nbsp;#include &quot;orte/mca/pls/rsh/pls_rsh.h&quot;
<br>
&nbsp;#include &quot;orte/util/sys_info.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;#if OMPI_HAVE_POSIX_THREADS &amp;&amp; OMPI_THREADS_HAVE_DIFFERENT_PIDS &amp;&amp; OMPI_ENABLE_PROGRESS_THREADS
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/slurm/pls_slurm_module.c openmpi-1.1.5.environ/orte/mca/pls/slurm/pls_slurm_module.c
<br>
--- openmpi-1.1.5/orte/mca/pls/slurm/pls_slurm_module.c	2006-07-14 12:18:58.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/slurm/pls_slurm_module.c	2007-05-27 20:16:51.000000000 -0400
<br>
@@ -99,8 +99,12 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* External
<br>
&nbsp;&nbsp;*/
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
-
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;static int pls_slurm_launch(orte_jobid_t jobid)
<br>
&nbsp;{
<br>
diff -uNr openmpi-1.1.5/orte/mca/pls/tm/pls_tm_module.c openmpi-1.1.5.environ/orte/mca/pls/tm/pls_tm_module.c
<br>
--- openmpi-1.1.5/orte/mca/pls/tm/pls_tm_module.c	2006-07-14 22:08:39.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/mca/pls/tm/pls_tm_module.c	2007-05-27 20:17:42.000000000 -0400
<br>
@@ -95,7 +95,12 @@
<br>
&nbsp;};
<br>
&nbsp;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;static int 
<br>
diff -uNr openmpi-1.1.5/orte/runtime/orte_setup_hnp.c openmpi-1.1.5.environ/orte/runtime/orte_setup_hnp.c
<br>
--- openmpi-1.1.5/orte/runtime/orte_setup_hnp.c	2006-04-12 12:12:34.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/runtime/orte_setup_hnp.c	2007-05-27 20:20:07.000000000 -0400
<br>
@@ -66,7 +66,12 @@
<br>
&nbsp;#include &quot;orte/runtime/runtime.h&quot;
<br>
&nbsp;#include &quot;orte/runtime/orte_setup_hnp.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;/* Local condition variables and mutex
<br>
&nbsp;&nbsp;*/
<br>
diff -uNr openmpi-1.1.5/orte/tools/orted/orted.c openmpi-1.1.5.environ/orte/tools/orted/orted.c
<br>
--- openmpi-1.1.5/orte/tools/orted/orted.c	2006-10-10 09:58:48.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/tools/orted/orted.c	2007-05-27 20:21:54.000000000 -0400
<br>
@@ -69,7 +69,12 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;orte/tools/orted/orted.h&quot;
<br>
&nbsp;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;orted_globals_t orted_globals;
<br>
&nbsp;
<br>
@@ -172,7 +177,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL, OPAL_CMD_LINE_TYPE_NULL, NULL }
<br>
&nbsp;};
<br>
&nbsp;
<br>
-extern char **environ;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;int main(int argc, char *argv[])
<br>
diff -uNr openmpi-1.1.5/orte/tools/orterun/orterun.c openmpi-1.1.5.environ/orte/tools/orterun/orterun.c
<br>
--- openmpi-1.1.5/orte/tools/orterun/orterun.c	2006-10-05 22:39:54.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/tools/orterun/orterun.c	2007-05-27 20:23:13.000000000 -0400
<br>
@@ -74,7 +74,12 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* The environment
<br>
&nbsp;&nbsp;*/
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char** environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Globals
<br>
diff -uNr openmpi-1.1.5/orte/tools/orterun/totalview.c openmpi-1.1.5.environ/orte/tools/orterun/totalview.c
<br>
--- openmpi-1.1.5/orte/tools/orterun/totalview.c	2006-07-14 12:21:40.000000000 -0400
<br>
+++ openmpi-1.1.5.environ/orte/tools/orterun/totalview.c	2007-05-27 20:24:03.000000000 -0400
<br>
@@ -52,7 +52,12 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* The environment
<br>
&nbsp;&nbsp;*/
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/util/opal_environ.h&quot;
<br>
&nbsp;#include &quot;opal/util/output.h&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1594.php">Jack Howarth: "[OMPI devel] MacOS X v1.2.2 patch"</a>
<li><strong>Previous message:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
