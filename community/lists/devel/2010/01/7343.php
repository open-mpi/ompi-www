<?
$subject_val = "Re: [OMPI devel] HOSTNAME environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:28:04 2010" -->
<!-- isoreceived="20100122152804" -->
<!-- sent="Fri, 22 Jan 2010 16:18:20 +0100" -->
<!-- isosent="20100122151820" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HOSTNAME environment variable" -->
<!-- id="1264173500.12383.175.camel_at_frecb000730" -->
<!-- inreplyto="B7DC7078-76BA-4735-873F-731FDE33FC7F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-01-22 10:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7344.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7344.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-01-22 at 08:12 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; For SLURM, there is a config file where you can specify what gets propagated. It is clearly an error to include hostname as it messes many things up, not just OMPI. Frankly, I've never seen someone do that on SLURM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I'm going to check that.
<br>
<p>Thanks,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; I believe in this case OMPI is likely incorrectly picking up the environment and propagating it. We know this is incorrectly happening on Torque, and it appears to also be happening on SLURM. This is a bug that I will be fixing on Torque - and as soon as Nadia confirms, on SLURM as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that on Torque it was an innocent mistake where a line got added to the launch code that shouldn't have...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2010, at 8:07 AM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 22 2010, Nadia Derbey wrote:
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is slightly orthogonal, but relevant.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is an ancient mess with propagating environment variables, and predates
</span><br>
<span class="quotelev2">&gt; &gt; MPI by many years.  The most traditional form was the demented connexion
</span><br>
<span class="quotelev2">&gt; &gt; protocols that propagated TERM - truly wonderful when logging in from SunOS
</span><br>
<span class="quotelev2">&gt; &gt; to HP-UX!  Whether it is worth kludging up one variable and leaving the rest
</span><br>
<span class="quotelev2">&gt; &gt; is unclear.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Even if systems are fairly homogeneous, it is common for the head node to
</span><br>
<span class="quotelev2">&gt; &gt; have a different set of standard values from the others.  TMPDIR is one
</span><br>
<span class="quotelev2">&gt; &gt; very common one, but any of the dozen of so path variables is likely to
</span><br>
<span class="quotelev2">&gt; &gt; vary, at least sometimes, as are many of the others.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I used to have to write the most DISGUSTING hacks to stop unwanted export
</span><br>
<span class="quotelev2">&gt; &gt; when I managed our supercomputer.  Yet there are other systems that will
</span><br>
<span class="quotelev2">&gt; &gt; work only if you DO export environment variables.  And there are systems
</span><br>
<span class="quotelev2">&gt; &gt; where the secondary nodes aren't real systems, and using the parent hostname
</span><br>
<span class="quotelev2">&gt; &gt; would be better, though I haven't managed any.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Realistically, there should really be some kind of hook to control which
</span><br>
<span class="quotelev2">&gt; &gt; are transferred and which are not.  I haven't found one - if there is, it's
</span><br>
<span class="quotelev2">&gt; &gt; a better way to tackle this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nick Maclaren.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7344.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7342.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7344.php">N.M. Maclaren: "Re: [OMPI devel] HOSTNAME environment variable"</a>
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
