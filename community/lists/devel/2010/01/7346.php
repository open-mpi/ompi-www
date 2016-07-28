<?
$subject_val = "Re: [OMPI devel] HOSTNAME environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:46:25 2010" -->
<!-- isoreceived="20100122154625" -->
<!-- sent="Fri, 22 Jan 2010 16:36:40 +0100" -->
<!-- isosent="20100122153640" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HOSTNAME environment variable" -->
<!-- id="1264174601.12383.177.camel_at_frecb000730" -->
<!-- inreplyto="38BD8A90-9ED4-4725-9506-84DF4312D2AB_at_open-mpi.org" -->
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
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 10:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7347.php">Shiqing Fan: "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7345.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-01-22 at 08:22 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; A quick and easy way to answer my question of slurm vs ompi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just do &quot;srun script-that-echos-hostname-and-gethostname&quot;. If you get the right hostnames, then OMPI is to blame, not slurm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>No, I'm not...
<br>
Will check the configuration.
<br>
<p>Thanks a lot,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; On Jan 22, 2010, at 8:07 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Nadia
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That sounds like a bug in your SLURM config file - SLURM certainly doesn't propagate &quot;hostname&quot; by default as that would definitely mess things up for more than OMPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure that SLURM is propagating the environment (something I have never seen before)? Or is OMPI mistakenly picking it up and propagating it?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 22, 2010, at 7:25 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm wondering whether the HOSTNAME environment variable shouldn't be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; handled as a &quot;special case&quot; when the orted daemons launch the remote
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jobs. This particularly applies to batch schedulers where the caller's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment is copied to the remote job: we are inheriting a $HOSTNAME
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which is the name of the host mpirun was called from:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried to run the following small test (see getenv.c in attachment - it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; substantially gets the hostname once through $HOSTNAME, and once through
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gethostname(2)):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [derbeyn_at_pichu0 ~]$ hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pichu0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [derbeyn_at_pichu0 ~]$ salloc -N 2 -p pichu mpirun ./getenv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; salloc: Granted job allocation 358789
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Processor 0 of 2 on $HOSTNAME pichu0: Hello World
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Processor 0 of 2 on host pichu93: Hello World
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Processor 1 of 2 on $HOSTNAME pichu0: Hello World
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Processor 1 of 2 on host pichu94: Hello World
</span><br>
<span class="quotelev3">&gt; &gt;&gt; salloc: Relinquishing job allocation 358789
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shouldn't we be getting the same value when using getenv(&quot;HOSTNAME&quot;) and gethsotname()?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Applying the following small patch, we actually do.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do not propagate the HOSTNAME environment variable on remote hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; diff -r 4ab256be2a17 orte/orted/orted_main.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- a/orte/orted/orted_main.c   Wed Jan 20 16:45:07 2010 +0100
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ b/orte/orted/orted_main.c   Fri Jan 22 14:54:02 2010 +0100
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -299,12 +299,17 @@ int orte_daemon(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    orte_launch_environ = opal_argv_copy(environ);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    /*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +     * Set HOSTNAME to the actual hostname in order to avoid propagating
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +     * the caller's HOSTNAME.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +     */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    gethostname(hostname, 100);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    opal_setenv(&quot;HOSTNAME&quot;, hostname, true, &amp;orte_launch_environ);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    /* if orte_daemon_debug is set, let someone know we are alive right
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     * away just in case we have a problem along the way
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if (orted_globals.debug) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        gethostname(hostname, 100);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        fprintf(stderr, &quot;Daemon was launched on %s - beginning to initialize\n&quot;, hostname);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;getenv.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7347.php">Shiqing Fan: "[OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>Previous message:</strong> <a href="7345.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
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
