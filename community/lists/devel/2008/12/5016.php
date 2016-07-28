<?
$subject_val = "[OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 14:00:52 2008" -->
<!-- isoreceived="20081205190052" -->
<!-- sent="Fri, 05 Dec 2008 14:00:42 -0500" -->
<!-- isosent="20081205190042" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="49397A5A.1030306_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Forwarding SIGTSTP and SIGCONT<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 14:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5017.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5015.php">Greg Watson: "[OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5018.php">Ralf Wildenhues: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5018.php">Ralf Wildenhues: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have had requests to be able to suspend/resume MPI jobs within an SGE 
<br>
environment.  SGE sends a signal (which is configurable) to mpirun to 
<br>
stop the job and another signal to resume it.  To support this, I 
<br>
propose that we add support in the ORTE to catch SIGTSTP/SIGCONT and 
<br>
forward these to the a.outs.  Actually, SIGTSTP will be caught, 
<br>
forwarded, then converted to SIGSTOP before being delivered to the 
<br>
a.outs.  The one disadvantage is that we have overridden the SIGTSTP 
<br>
default behavior which is typically to stop mpirun.
<br>
<p>Does anyone else have a requirement like this or does anyone have issues 
<br>
with these changes?  FWIW, I know there is at least one other MPI that 
<br>
supports this type of behavior.
<br>
<p>One problem is that with SIGTSTP no longer delivering a stop signal to 
<br>
mpirun, one cannot CTRL-Z at their terminal to stop mpirun.  I am trying 
<br>
to figure out how big a problem that is.
<br>
<p>Rolf
<br>
<p>PS: Here are the possible code changes.  Not too major.
<br>
<p>&nbsp;&nbsp;burl-ct-v440-2 62 =&gt;svn diff
<br>
Index: orte/tools/orterun/orterun.c
<br>
===================================================================
<br>
--- orte/tools/orterun/orterun.c        (revision 20072)
<br>
+++ orte/tools/orterun/orterun.c        (working copy)
<br>
@@ -99,6 +99,8 @@
<br>
&nbsp;&nbsp;#ifndef __WINDOWS__
<br>
&nbsp;&nbsp;static struct opal_event sigusr1_handler;
<br>
&nbsp;&nbsp;static struct opal_event sigusr2_handler;
<br>
+static struct opal_event sigtstp_handler;
<br>
+static struct opal_event sigcont_handler;
<br>
&nbsp;&nbsp;#endif  /* __WINDOWS__ */
<br>
&nbsp;&nbsp;static orte_job_t *jdata;
<br>
&nbsp;&nbsp;static char *orterun_basename = NULL;
<br>
@@ -511,6 +513,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_signal_set(&amp;sigusr2_handler, SIGUSR2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal_forward_callback, &amp;sigusr2_handler);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_signal_add(&amp;sigusr2_handler, NULL);
<br>
+    opal_signal_set(&amp;sigtstp_handler, SIGTSTP,
<br>
+                    signal_forward_callback, &amp;sigtstp_handler);
<br>
+    opal_signal_add(&amp;sigtstp_handler, NULL);
<br>
+    opal_signal_set(&amp;sigcont_handler, SIGCONT,
<br>
+                    signal_forward_callback, &amp;sigcont_handler);
<br>
+    opal_signal_add(&amp;sigcont_handler, NULL);
<br>
&nbsp;&nbsp;#endif  /* __WINDOWS__ */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* we are an hnp, so update the contact info field for later use */
<br>
@@ -763,6 +771,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Remove the USR signal handlers */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_signal_del(&amp;sigusr1_handler);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_signal_del(&amp;sigusr2_handler);
<br>
+    opal_signal_del(&amp;sigtstp_handler);
<br>
+    opal_signal_del(&amp;sigcont_handler);
<br>
&nbsp;&nbsp;#endif  /* __WINDOWS__ */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get the daemon job object */
<br>
Index: orte/orted/orted_comm.c
<br>
===================================================================
<br>
--- orte/orted/orted_comm.c     (revision 20072)
<br>
+++ orte/orted/orted_comm.c     (working copy)
<br>
@@ -457,10 +457,6 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/****    SIGNAL_LOCAL_PROCS   ****/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ORTE_DAEMON_SIGNAL_LOCAL_PROCS:
<br>
-            if (orte_debug_daemons_flag) {
<br>
-                opal_output(0, &quot;%s orted_cmd: received signal_local_procs&quot;,
<br>
-                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
<br>
-            }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* unpack the jobid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer, &amp;job, 
<br>
&amp;n, ORTE_JOBID))) {
<br>
@@ -474,7 +470,22 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-
<br>
+
<br>
+            /* Convert SIGTSTP to SIGSTOP so we can suspend a.out */
<br>
+            if (SIGTSTP == signal) {
<br>
+                if (orte_debug_daemons_flag) {
<br>
+                    opal_output(0, &quot;%s orted_cmd: converted SIGTSTP to 
<br>
SIGSTOP before delivering&quot;,
<br>
+                                ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
<br>
+                }
<br>
+                signal = SIGSTOP;
<br>
+            }
<br>
+
<br>
+            if (orte_debug_daemons_flag) {
<br>
+                opal_output(0, &quot;%s orted_cmd: received 
<br>
signal_local_procs, delivering signal %d&quot;,
<br>
+                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
+                            signal);
<br>
+            }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* signal them */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = 
<br>
orte_odls.signal_local_procs(NULL, signal))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;burl-ct-v440-2 63 =&gt;
<br>
<p><p><p><p><p><p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5017.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5015.php">Greg Watson: "[OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5018.php">Ralf Wildenhues: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5018.php">Ralf Wildenhues: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
