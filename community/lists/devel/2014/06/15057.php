<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 04:20:20 2014" -->
<!-- isoreceived="20140625082020" -->
<!-- sent="Wed, 25 Jun 2014 03:20:19 -0500" -->
<!-- isosent="20140625082019" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions" -->
<!-- id="CAMD57ods8sAmo1+DAqy30ts6VSD3wDHbP8G2ZXQGiDZcnDnJiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53AA3BE4.4060202_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 04:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>In reply to:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see your point, but I don't know how to make that happen. The problem is
<br>
that spawn really should fail under certain conditions because you asked us
<br>
to do something we couldn't do - i.e., you asked that we launch and bind
<br>
more processes then we could. Increasing the number of available resources
<br>
will always change the situation and make it more likely spawn will succeed.
<br>
<p>You can still trigger the behavior by individually setting the
<br>
oversubscribe property in the --may-by option - instead of giving
<br>
&quot;--oversubscribe&quot;, just use &quot;--map-by :oversubscribe&quot;. This will allow
<br>
oversubscription but not overload, and you'll be back to the original
<br>
scenario.
<br>
<p><p><p><p>On Tue, Jun 24, 2014 at 10:03 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/06/25 2:51, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Had a chance to review this with folks here, and we think that having
</span><br>
<span class="quotelev2">&gt; &gt; oversubscribe automatically set overload makes some sense. However, we do
</span><br>
<span class="quotelev2">&gt; &gt; want to retain the ability to separately specify oversubscribe and
</span><br>
<span class="quotelev1">&gt; overload
</span><br>
<span class="quotelev2">&gt; &gt; as well since these two terms don't mean quite the same thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our proposal, therefore, is to have the --oversubscribe flag set both the
</span><br>
<span class="quotelev2">&gt; &gt; --map-by :oversubscribe and --bind-to :overload-allowed properties. If
</span><br>
<span class="quotelev2">&gt; &gt; someone specifies both the --oversubscribe flag and a conflicting
</span><br>
<span class="quotelev1">&gt; directive
</span><br>
<span class="quotelev2">&gt; &gt; for one or both of the individual properties, then we'll error out with a
</span><br>
<span class="quotelev2">&gt; &gt; &quot;bozo&quot; message.
</span><br>
<span class="quotelev1">&gt; i fully agree.
</span><br>
<span class="quotelev2">&gt; &gt; The use-cases you describe are (minus the crash) correct as the warning
</span><br>
<span class="quotelev2">&gt; &gt; only is emitted when you are overloaded (i.e., trying to bind to more
</span><br>
<span class="quotelev1">&gt; cpus
</span><br>
<span class="quotelev2">&gt; &gt; than you have). So you won't get any warning when running on three nodes
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev2">&gt; &gt; you have enough cpus for all the procs, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll investigate the crash once I get home and have access to a cluster
</span><br>
<span class="quotelev2">&gt; &gt; again. The problem likely has to do with not properly responding to the
</span><br>
<span class="quotelev2">&gt; &gt; failure to spawn.
</span><br>
<span class="quotelev1">&gt; humm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; because you already made the change described above(r32072), the crash
</span><br>
<span class="quotelev1">&gt; does not occur any more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about the crash, i see things the other way around : spawn should have
</span><br>
<span class="quotelev1">&gt; not failed.
</span><br>
<span class="quotelev1">&gt; /* or spawn should have failed when running on a single node, at least
</span><br>
<span class="quotelev1">&gt; for the sake of consistency */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but like i said, it works now, so it might be just pedantic to point a
</span><br>
<span class="quotelev1">&gt; bug that is still here but that cannot be triggered ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15053.php">http://www.open-mpi.org/community/lists/devel/2014/06/15053.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>In reply to:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
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
