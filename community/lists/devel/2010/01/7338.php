<?
$subject_val = "[OMPI devel] HOSTNAME environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 09:35:37 2010" -->
<!-- isoreceived="20100122143537" -->
<!-- sent="Fri, 22 Jan 2010 15:25:51 +0100" -->
<!-- isosent="20100122142551" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] HOSTNAME environment variable" -->
<!-- id="1264170351.12383.170.camel_at_frecb000730" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] HOSTNAME environment variable<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 09:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7337.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7340.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm wondering whether the HOSTNAME environment variable shouldn't be
<br>
handled as a &quot;special case&quot; when the orted daemons launch the remote
<br>
jobs. This particularly applies to batch schedulers where the caller's
<br>
environment is copied to the remote job: we are inheriting a $HOSTNAME
<br>
which is the name of the host mpirun was called from:
<br>
<p>I tried to run the following small test (see getenv.c in attachment - it
<br>
substantially gets the hostname once through $HOSTNAME, and once through
<br>
gethostname(2)):
<br>
<p>------------
<br>
[derbeyn_at_pichu0 ~]$ hostname
<br>
pichu0
<br>
[derbeyn_at_pichu0 ~]$ salloc -N 2 -p pichu mpirun ./getenv
<br>
salloc: Granted job allocation 358789
<br>
Processor 0 of 2 on $HOSTNAME pichu0: Hello World
<br>
Processor 0 of 2 on host pichu93: Hello World
<br>
Processor 1 of 2 on $HOSTNAME pichu0: Hello World
<br>
Processor 1 of 2 on host pichu94: Hello World
<br>
salloc: Relinquishing job allocation 358789
<br>
------------
<br>
<p>Shouldn't we be getting the same value when using getenv(&quot;HOSTNAME&quot;) and gethsotname()?
<br>
Applying the following small patch, we actually do.
<br>
<p>Regards,
<br>
Nadia
<br>
<p>--------------
<br>
<p>Do not propagate the HOSTNAME environment variable on remote hosts
<br>
<p>diff -r 4ab256be2a17 orte/orted/orted_main.c
<br>
--- a/orte/orted/orted_main.c   Wed Jan 20 16:45:07 2010 +0100
<br>
+++ b/orte/orted/orted_main.c   Fri Jan 22 14:54:02 2010 +0100
<br>
@@ -299,12 +299,17 @@ int orte_daemon(int argc, char *argv[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_launch_environ = opal_argv_copy(environ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
+    /*
<br>
+     * Set HOSTNAME to the actual hostname in order to avoid propagating
<br>
+     * the caller's HOSTNAME.
<br>
+     */
<br>
+    gethostname(hostname, 100);
<br>
+    opal_setenv(&quot;HOSTNAME&quot;, hostname, true, &amp;orte_launch_environ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if orte_daemon_debug is set, let someone know we are alive right
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* away just in case we have a problem along the way
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (orted_globals.debug) {
<br>
-        gethostname(hostname, 100);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Daemon was launched on %s - beginning to initialize\n&quot;, hostname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7338/getenv.c__charset_UTF-8">getenv.c__charset_UTF-8</a>
</ul>
<!-- attachment="getenv.c__charset_UTF-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7337.php">Shiqing Fan: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7340.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
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
