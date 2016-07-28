<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 21:39:33 2007" -->
<!-- isoreceived="20070529013933" -->
<!-- sent="Mon, 28 May 2007 21:39:29 -0400" -->
<!-- isosent="20070529013929" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="[OMPI devel] MacOS X v1.2.2 patch (corrected)" -->
<!-- id="20070529013929.GA4724_at_bromo.msbb.uc.edu" -->
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
<strong>Date:</strong> 2007-05-28 21:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1595.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the previous patch for 1.2.2 again with a minor typo fixed.
<br>
One of the ifdef's was missing an underscore.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
<p><p>diff -uNr openmpi-1.2.2/ompi/communicator/comm_dyn.c openmpi-1.2.2.environ/ompi/communicator/comm_dyn.c
<br>
--- openmpi-1.2.2/ompi/communicator/comm_dyn.c	2007-01-24 13:16:09.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/ompi/communicator/comm_dyn.c	2007-05-28 16:08:20.000000000 -0400
<br>
@@ -59,7 +59,12 @@
<br>
&nbsp;#include &quot;orte/runtime/runtime.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;static int ompi_comm_get_rport (orte_process_name_t *port,
<br>
diff -uNr openmpi-1.2.2/opal/mca/memory/ptmalloc2/arena.c openmpi-1.2.2.environ/opal/mca/memory/ptmalloc2/arena.c
<br>
--- openmpi-1.2.2/opal/mca/memory/ptmalloc2/arena.c	2006-11-09 13:53:28.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/opal/mca/memory/ptmalloc2/arena.c	2007-05-28 17:50:12.000000000 -0400
<br>
@@ -293,7 +293,12 @@
<br>
&nbsp;/* Initialization routine. */
<br>
&nbsp;#ifdef _LIBC
<br>
&nbsp;#include &lt;string.h&gt;
<br>
+# ifdef __APPLE__
<br>
+#  include &lt;crt_externs.h&gt;
<br>
+#  define environ (*_NSGetEnviron())
<br>
+# else
<br>
&nbsp;extern char **_environ;
<br>
+# endif
<br>
&nbsp;
<br>
&nbsp;static char *
<br>
&nbsp;internal_function
<br>
diff -uNr openmpi-1.2.2/opal/tools/wrappers/opal_wrapper.c openmpi-1.2.2.environ/opal/tools/wrappers/opal_wrapper.c
<br>
--- openmpi-1.2.2/opal/tools/wrappers/opal_wrapper.c	2007-04-19 12:30:53.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/opal/tools/wrappers/opal_wrapper.c	2007-05-28 16:09:20.000000000 -0400
<br>
@@ -52,7 +52,12 @@
<br>
&nbsp;#include &quot;opal/util/os_path.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#define OPAL_INCLUDE_FLAG  &quot;-I&quot;
<br>
&nbsp;#define OPAL_LIBDIR_FLAG   &quot;-L&quot;
<br>
&nbsp;#else
<br>
diff -uNr openmpi-1.2.2/opal/util/opal_environ.c openmpi-1.2.2.environ/opal/util/opal_environ.c
<br>
--- openmpi-1.2.2/opal/util/opal_environ.c	2007-04-19 12:30:53.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/opal/util/opal_environ.c	2007-05-28 17:43:50.000000000 -0400
<br>
@@ -28,7 +28,12 @@
<br>
&nbsp;#include &quot;opal/constants.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;/*
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/bproc/pls_bproc.c openmpi-1.2.2.environ/orte/mca/pls/bproc/pls_bproc.c
<br>
--- openmpi-1.2.2/orte/mca/pls/bproc/pls_bproc.c	2007-04-19 12:30:57.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/bproc/pls_bproc.c	2007-05-28 16:10:37.000000000 -0400
<br>
@@ -81,7 +81,12 @@
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
&nbsp;static bool daemons_launched;
<br>
&nbsp;static bool bynode;
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/gridengine/pls_gridengine_module.c openmpi-1.2.2.environ/orte/mca/pls/gridengine/pls_gridengine_module.c
<br>
--- openmpi-1.2.2/orte/mca/pls/gridengine/pls_gridengine_module.c	2007-04-19 12:30:57.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/gridengine/pls_gridengine_module.c	2007-05-28 16:11:25.000000000 -0400
<br>
@@ -90,7 +90,12 @@
<br>
&nbsp;#include &quot;orte/mca/pls/gridengine/pls_gridengine.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;orte_pls_base_module_t orte_pls_gridengine_module = {
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/poe/pls_poe_component.c openmpi-1.2.2.environ/orte/mca/pls/poe/pls_poe_component.c
<br>
--- openmpi-1.2.2/orte/mca/pls/poe/pls_poe_component.c	2006-11-09 13:54:09.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/poe/pls_poe_component.c	2007-05-28 16:12:09.000000000 -0400
<br>
@@ -153,7 +153,12 @@
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;/**
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/poe/pls_poe_module.c openmpi-1.2.2.environ/orte/mca/pls/poe/pls_poe_module.c
<br>
--- openmpi-1.2.2/orte/mca/pls/poe/pls_poe_module.c	2007-02-16 13:20:49.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/poe/pls_poe_module.c	2007-05-28 16:12:53.000000000 -0400
<br>
@@ -56,7 +56,12 @@
<br>
&nbsp;#include &quot;orte/mca/pls/poe/pls_poe.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;/*
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_component.c openmpi-1.2.2.environ/orte/mca/pls/rsh/pls_rsh_component.c
<br>
--- openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_component.c	2007-01-13 21:39:47.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/rsh/pls_rsh_component.c	2007-05-28 16:14:15.000000000 -0400
<br>
@@ -45,7 +45,12 @@
<br>
&nbsp;#include &quot;orte/mca/pls/rsh/pls_rsh.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;/*
<br>
@@ -189,11 +194,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
-
<br>
-#if !defined(__WINDOWS__)
<br>
-extern char **environ;
<br>
-#endif  /* !defined(__WINDOWS__) */
<br>
-
<br>
&nbsp;orte_pls_base_module_t *orte_pls_rsh_component_init(int *priority)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *bname;
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_module.c openmpi-1.2.2.environ/orte/mca/pls/rsh/pls_rsh_module.c
<br>
--- openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_module.c	2007-05-08 13:55:56.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/rsh/pls_rsh_module.c	2007-05-28 16:15:01.000000000 -0400
<br>
@@ -89,7 +89,12 @@
<br>
&nbsp;#include &quot;orte/mca/pls/base/pls_private.h&quot;
<br>
&nbsp;#include &quot;orte/mca/pls/rsh/pls_rsh.h&quot;
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
&nbsp;static int orte_pls_rsh_launch_threaded(orte_jobid_t jobid);
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/slurm/pls_slurm_module.c openmpi-1.2.2.environ/orte/mca/pls/slurm/pls_slurm_module.c
<br>
--- openmpi-1.2.2/orte/mca/pls/slurm/pls_slurm_module.c	2007-04-19 12:30:57.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/slurm/pls_slurm_module.c	2007-05-28 16:15:54.000000000 -0400
<br>
@@ -110,7 +110,12 @@
<br>
&nbsp;&nbsp;* External
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;static int pls_slurm_launch_job(orte_jobid_t jobid)
<br>
diff -uNr openmpi-1.2.2/orte/mca/pls/tm/pls_tm_module.c openmpi-1.2.2.environ/orte/mca/pls/tm/pls_tm_module.c
<br>
--- openmpi-1.2.2/orte/mca/pls/tm/pls_tm_module.c	2007-04-19 12:30:57.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/mca/pls/tm/pls_tm_module.c	2007-05-28 16:16:38.000000000 -0400
<br>
@@ -111,7 +111,12 @@
<br>
&nbsp;};
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;static int pls_tm_launch_job(orte_jobid_t jobid)
<br>
diff -uNr openmpi-1.2.2/orte/mca/rmgr/base/rmgr_base_check_context.c openmpi-1.2.2.environ/orte/mca/rmgr/base/rmgr_base_check_context.c
<br>
--- openmpi-1.2.2/orte/mca/rmgr/base/rmgr_base_check_context.c	2006-11-09 13:54:04.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/orte/mca/rmgr/base/rmgr_base_check_context.c	2007-05-28 16:19:18.000000000 -0400
<br>
@@ -47,7 +47,12 @@
<br>
&nbsp;#include &quot;orte/mca/rmgr/base/rmgr_private.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;int orte_rmgr_base_check_context_cwd(orte_app_context_t *context,
<br>
diff -uNr openmpi-1.2.2/orte/runtime/orte_setup_hnp.c openmpi-1.2.2.environ/orte/runtime/orte_setup_hnp.c
<br>
--- openmpi-1.2.2/orte/runtime/orte_setup_hnp.c	2007-01-13 21:39:47.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/orte/runtime/orte_setup_hnp.c	2007-05-28 16:20:05.000000000 -0400
<br>
@@ -67,7 +67,12 @@
<br>
&nbsp;#include &quot;orte/runtime/orte_setup_hnp.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;/* Local condition variables and mutex
<br>
diff -uNr openmpi-1.2.2/orte/tools/orted/orted.c openmpi-1.2.2.environ/orte/tools/orted/orted.c
<br>
--- openmpi-1.2.2/orte/tools/orted/orted.c	2007-04-19 12:30:57.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/tools/orted/orted.c	2007-05-28 17:41:50.000000000 -0400
<br>
@@ -76,7 +76,12 @@
<br>
&nbsp;#include &quot;orte/tools/orted/orted.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif   /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;/*
<br>
diff -uNr openmpi-1.2.2/orte/tools/orterun/orterun.c openmpi-1.2.2.environ/orte/tools/orterun/orterun.c
<br>
--- openmpi-1.2.2/orte/tools/orterun/orterun.c	2007-04-19 12:30:57.000000000 -0400
<br>
+++ openmpi-1.2.2.environ/orte/tools/orterun/orterun.c	2007-05-28 17:42:54.000000000 -0400
<br>
@@ -291,7 +291,12 @@
<br>
&nbsp;};
<br>
&nbsp;
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif   /* !defined(__WINDOWS__) */
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Local functions
<br>
diff -uNr openmpi-1.2.2/orte/tools/orterun/totalview.c openmpi-1.2.2.environ/orte/tools/orterun/totalview.c
<br>
--- openmpi-1.2.2/orte/tools/orterun/totalview.c	2006-11-09 13:54:10.000000000 -0500
<br>
+++ openmpi-1.2.2.environ/orte/tools/orterun/totalview.c	2007-05-28 16:20:46.000000000 -0400
<br>
@@ -53,7 +53,12 @@
<br>
&nbsp;&nbsp;* The environment
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;#if !defined(__WINDOWS__)
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
&nbsp;#endif  /* !defined(__WINDOWS__) */
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/util/opal_environ.h&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1597.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1595.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
