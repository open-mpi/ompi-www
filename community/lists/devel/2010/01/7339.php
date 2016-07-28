<?
$subject_val = "Re: [OMPI devel] HOSTNAME environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:07:04 2010" -->
<!-- isoreceived="20100122150704" -->
<!-- sent="22 Jan 2010 15:07:00 +0000" -->
<!-- isosent="20100122150700" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HOSTNAME environment variable" -->
<!-- id="Prayer.1.3.2.1001221507001.3855_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 10:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7340.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7338.php">Nadia Derbey: "[OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7338.php">Nadia Derbey: "[OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22 2010, Nadia Derbey wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm wondering whether the HOSTNAME environment variable shouldn't be
</span><br>
<span class="quotelev1">&gt;handled as a &quot;special case&quot; when the orted daemons launch the remote
</span><br>
<span class="quotelev1">&gt;jobs. This particularly applies to batch schedulers where the caller's
</span><br>
<span class="quotelev1">&gt;environment is copied to the remote job: we are inheriting a $HOSTNAME
</span><br>
<span class="quotelev1">&gt;which is the name of the host mpirun was called from:
</span><br>
<p>This is slightly orthogonal, but relevant.
<br>
<p>This is an ancient mess with propagating environment variables, and predates
<br>
MPI by many years.  The most traditional form was the demented connexion
<br>
protocols that propagated TERM - truly wonderful when logging in from SunOS
<br>
to HP-UX!  Whether it is worth kludging up one variable and leaving the rest
<br>
is unclear.
<br>
<p>Even if systems are fairly homogeneous, it is common for the head node to
<br>
have a different set of standard values from the others.  TMPDIR is one
<br>
very common one, but any of the dozen of so path variables is likely to
<br>
vary, at least sometimes, as are many of the others.
<br>
<p>I used to have to write the most DISGUSTING hacks to stop unwanted export
<br>
when I managed our supercomputer.  Yet there are other systems that will
<br>
work only if you DO export environment variables.  And there are systems
<br>
where the secondary nodes aren't real systems, and using the parent hostname
<br>
would be better, though I haven't managed any.
<br>
<p>Realistically, there should really be some kind of hook to control which
<br>
are transferred and which are not.  I haven't found one - if there is, it's
<br>
a better way to tackle this.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7340.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Previous message:</strong> <a href="7338.php">Nadia Derbey: "[OMPI devel] HOSTNAME environment variable"</a>
<li><strong>In reply to:</strong> <a href="7338.php">Nadia Derbey: "[OMPI devel] HOSTNAME environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
<li><strong>Reply:</strong> <a href="7341.php">Ralph Castain: "Re: [OMPI devel] HOSTNAME environment variable"</a>
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
