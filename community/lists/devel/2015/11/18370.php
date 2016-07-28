<?
$subject_val = "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 14 13:07:24 2015" -->
<!-- isoreceived="20151114180724" -->
<!-- sent="Sat, 14 Nov 2015 11:07:18 -0700" -->
<!-- isosent="20151114180718" -->
<!-- name="Howard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster" -->
<!-- id="2551E330-EBD2-4AD7-9728-FE0D3012D866_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5642AE8E.3060405_at_rist.or.jp" -->
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
<strong>From:</strong> Howard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-14 13:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Previous message:</strong> <a href="18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18356.php">Gilles Gouaillardet: "[OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Reply:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>Could you check whether you also see this problem with v2.x?
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p>Von meinem iPhone gesendet
<br>
<p><span class="quotelev1">&gt; Am 10.11.2015 um 19:57 schrieb Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple MPI_Win_create test hangs on my non uniform cluster (ibm/onesided/c_create)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one node has an IB card but not the other one.
</span><br>
<span class="quotelev1">&gt; the node with the IB card select the rdma osc module, but the other node select the pt2pt module.
</span><br>
<span class="quotelev1">&gt; and then it hangs because both ends do no try to initialize the same module
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i understand correctly, the rdma osc component is selected if at least a rdma capable btl is initialized,
</span><br>
<span class="quotelev1">&gt; imho, the logic should be :
</span><br>
<span class="quotelev1">&gt; the rdma osc component is selected for a given communicator if all the btls involved in this communicator
</span><br>
<span class="quotelev1">&gt; (maybe except the self btl) are rdma capable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you please have a look at this ?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18356.php">http://www.open-mpi.org/community/lists/devel/2015/11/18356.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Previous message:</strong> <a href="18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18356.php">Gilles Gouaillardet: "[OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Reply:</strong> <a href="18371.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
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
