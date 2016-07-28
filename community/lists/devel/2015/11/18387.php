<?
$subject_val = "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 10:58:26 2015" -->
<!-- isoreceived="20151124155826" -->
<!-- sent="Tue, 24 Nov 2015 08:58:22 -0700" -->
<!-- isosent="20151124155822" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster" -->
<!-- id="20151124155822.GA95196_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tJ09658EXGnM7By8HsoJb9cWEHQPAORc-POdjkz3FEVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 10:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18388.php">Ralph Castain: "[OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18386.php">Federico Reghenzani: "Re: [OMPI devel] Remote orted verbosity"</a>
<li><strong>In reply to:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This happens because we do not currently have a way to detect
<br>
connectivity without allocating ompi_proc_t's for every rank in the
<br>
window. I added the osc_rdma_btls MCA variable to act as a short-circuit
<br>
that avoids the costly connectivity lookup. By default the value is
<br>
ugni,openib. You can set it to the empty string to force it to check
<br>
connectivity.
<br>
<p>This will be in 2.x once the mlx5 fix is in. I can update the check to
<br>
do an allreduce to ensure all processes in the window select the same
<br>
btl. I do not, however, want to change the default value of
<br>
osc_rdma_btls since it is there to ensure performance and reduce the
<br>
memory footprint on heterogenous clusters.
<br>
<p>-Nathan
<br>
<p>On Sun, Nov 15, 2015 at 10:34:45AM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;    Howard,
</span><br>
<span class="quotelev1">&gt;    there is no rdma osc component in v2.x, so I doubt the issue occurs here.
</span><br>
<span class="quotelev1">&gt;    I will double check this anyway on Monday
</span><br>
<span class="quotelev1">&gt;    Cheers,
</span><br>
<span class="quotelev1">&gt;    Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Sunday, November 15, 2015, Howard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Could you check whether you also see this problem with v2.x?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Von meinem iPhone gesendet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; Am 10.11.2015 um 19:57 schrieb Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;      &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Nathan,
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; a simple MPI_Win_create test hangs on my non uniform cluster
</span><br>
<span class="quotelev1">&gt;      (ibm/onesided/c_create)
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; one node has an IB card but not the other one.
</span><br>
<span class="quotelev2">&gt;      &gt; the node with the IB card select the rdma osc module, but the other
</span><br>
<span class="quotelev1">&gt;      node select the pt2pt module.
</span><br>
<span class="quotelev2">&gt;      &gt; and then it hangs because both ends do no try to initialize the same
</span><br>
<span class="quotelev1">&gt;      module
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; if i understand correctly, the rdma osc component is selected if at
</span><br>
<span class="quotelev1">&gt;      least a rdma capable btl is initialized,
</span><br>
<span class="quotelev2">&gt;      &gt; imho, the logic should be :
</span><br>
<span class="quotelev2">&gt;      &gt; the rdma osc component is selected for a given communicator if all the
</span><br>
<span class="quotelev1">&gt;      btls involved in this communicator
</span><br>
<span class="quotelev2">&gt;      &gt; (maybe except the self btl) are rdma capable.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; can you please have a look at this ?
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Gilles
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18356.php">http://www.open-mpi.org/community/lists/devel/2015/11/18356.php</a>
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18370.php">http://www.open-mpi.org/community/lists/devel/2015/11/18370.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18371.php">http://www.open-mpi.org/community/lists/devel/2015/11/18371.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18387/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18388.php">Ralph Castain: "[OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18386.php">Federico Reghenzani: "Re: [OMPI devel] Remote orted verbosity"</a>
<li><strong>In reply to:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
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
