<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 23:02:53 2014" -->
<!-- isoreceived="20140625030253" -->
<!-- sent="Wed, 25 Jun 2014 12:03:00 +0900" -->
<!-- isosent="20140625030300" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions" -->
<!-- id="53AA3BE4.4060202_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57ofw9C2SwOX5mwQ_aWYOG4+t2A7_73gvTrsB_3ZK1eALrQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 23:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15054.php">Mike Dubman: "[OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15052.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>In reply to:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Reply:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>On 2014/06/25 2:51, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Had a chance to review this with folks here, and we think that having
</span><br>
<span class="quotelev1">&gt; oversubscribe automatically set overload makes some sense. However, we do
</span><br>
<span class="quotelev1">&gt; want to retain the ability to separately specify oversubscribe and overload
</span><br>
<span class="quotelev1">&gt; as well since these two terms don't mean quite the same thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our proposal, therefore, is to have the --oversubscribe flag set both the
</span><br>
<span class="quotelev1">&gt; --map-by :oversubscribe and --bind-to :overload-allowed properties. If
</span><br>
<span class="quotelev1">&gt; someone specifies both the --oversubscribe flag and a conflicting directive
</span><br>
<span class="quotelev1">&gt; for one or both of the individual properties, then we'll error out with a
</span><br>
<span class="quotelev1">&gt; &quot;bozo&quot; message.
</span><br>
i fully agree.
<br>
<span class="quotelev1">&gt; The use-cases you describe are (minus the crash) correct as the warning
</span><br>
<span class="quotelev1">&gt; only is emitted when you are overloaded (i.e., trying to bind to more cpus
</span><br>
<span class="quotelev1">&gt; than you have). So you won't get any warning when running on three nodes as
</span><br>
<span class="quotelev1">&gt; you have enough cpus for all the procs, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll investigate the crash once I get home and have access to a cluster
</span><br>
<span class="quotelev1">&gt; again. The problem likely has to do with not properly responding to the
</span><br>
<span class="quotelev1">&gt; failure to spawn.
</span><br>
humm
<br>
<p>because you already made the change described above(r32072), the crash
<br>
does not occur any more.
<br>
<p>about the crash, i see things the other way around : spawn should have
<br>
not failed.
<br>
/* or spawn should have failed when running on a single node, at least
<br>
for the sake of consistency */
<br>
<p>but like i said, it works now, so it might be just pedantic to point a
<br>
bug that is still here but that cannot be triggered ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15054.php">Mike Dubman: "[OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15052.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>In reply to:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Reply:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
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
