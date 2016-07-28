<?
$subject_val = "Re: [OMPI devel] HOSTNAME environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:07:40 2010" -->
<!-- isoreceived="20100122150740" -->
<!-- sent="Fri, 22 Jan 2010 08:07:29 -0700" -->
<!-- isosent="20100122150729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HOSTNAME environment variable" -->
<!-- id="53526D9B-8B9F-47BE-8978-A6F5E237CB06_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1264170351.12383.170.camel_at_frecb000730" -->
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
<strong>Subject:</strong> Re: [OMPI devel] HOSTNAME environment variable<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 10:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7338.php">Nadia Derbey: "[OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nadia
<br>
<p>That sounds like a bug in your SLURM config file - SLURM certainly doesn't propagate &quot;hostname&quot; by default as that would definitely mess things up for more than OMPI.
<br>
<p>Are you sure that SLURM is propagating the environment (something I have never seen before)? Or is OMPI mistakenly picking it up and propagating it?
<br>
<p>On Jan 22, 2010, at 7:25 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm wondering whether the HOSTNAME environment variable shouldn't be
</span><br>
<span class="quotelev1">&gt; handled as a &quot;special case&quot; when the orted daemons launch the remote
</span><br>
<span class="quotelev1">&gt; jobs. This particularly applies to batch schedulers where the caller's
</span><br>
<span class="quotelev1">&gt; environment is copied to the remote job: we are inheriting a $HOSTNAME
</span><br>
<span class="quotelev1">&gt; which is the name of the host mpirun was called from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to run the following small test (see getenv.c in attachment - it
</span><br>
<span class="quotelev1">&gt; substantially gets the hostname once through $HOSTNAME, and once through
</span><br>
<span class="quotelev1">&gt; gethostname(2)):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; [derbeyn_at_pichu0 ~]$ hostname
</span><br>
<span class="quotelev1">&gt; pichu0
</span><br>
<span class="quotelev1">&gt; [derbeyn_at_pichu0 ~]$ salloc -N 2 -p pichu mpirun ./getenv
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 358789
</span><br>
<span class="quotelev1">&gt; Processor 0 of 2 on $HOSTNAME pichu0: Hello World
</span><br>
<span class="quotelev1">&gt; Processor 0 of 2 on host pichu93: Hello World
</span><br>
<span class="quotelev1">&gt; Processor 1 of 2 on $HOSTNAME pichu0: Hello World
</span><br>
<span class="quotelev1">&gt; Processor 1 of 2 on host pichu94: Hello World
</span><br>
<span class="quotelev1">&gt; salloc: Relinquishing job allocation 358789
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't we be getting the same value when using getenv(&quot;HOSTNAME&quot;) and gethsotname()?
</span><br>
<span class="quotelev1">&gt; Applying the following small patch, we actually do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do not propagate the HOSTNAME environment variable on remote hosts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -r 4ab256be2a17 orte/orted/orted_main.c
</span><br>
<span class="quotelev1">&gt; --- a/orte/orted/orted_main.c   Wed Jan 20 16:45:07 2010 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/orted/orted_main.c   Fri Jan 22 14:54:02 2010 +0100
</span><br>
<span class="quotelev1">&gt; @@ -299,12 +299,17 @@ int orte_daemon(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     orte_launch_environ = opal_argv_copy(environ);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * Set HOSTNAME to the actual hostname in order to avoid propagating
</span><br>
<span class="quotelev1">&gt; +     * the caller's HOSTNAME.
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    gethostname(hostname, 100);
</span><br>
<span class="quotelev1">&gt; +    opal_setenv(&quot;HOSTNAME&quot;, hostname, true, &amp;orte_launch_environ);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* if orte_daemon_debug is set, let someone know we are alive right
</span><br>
<span class="quotelev1">&gt;      * away just in case we have a problem along the way
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     if (orted_globals.debug) {
</span><br>
<span class="quotelev1">&gt; -        gethostname(hostname, 100);
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;Daemon was launched on %s - beginning to initialize\n&quot;, hostname);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;getenv.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7339.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7338.php">Nadia Derbey: "[OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
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
