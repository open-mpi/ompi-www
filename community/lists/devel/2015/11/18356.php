<?
$subject_val = "[OMPI devel] ompi_win_create hangs on a non uniform cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 21:57:22 2015" -->
<!-- isoreceived="20151111025722" -->
<!-- sent="Wed, 11 Nov 2015 11:57:18 +0900" -->
<!-- isosent="20151111025718" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi_win_create hangs on a non uniform cluster" -->
<!-- id="5642AE8E.3060405_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] ompi_win_create hangs on a non uniform cluster<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-10 21:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18357.php">Ralph Castain: "[OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Previous message:</strong> <a href="18355.php">Ralph Castain: "[OMPI devel] Modex-less operations: setting options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Reply:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>a simple MPI_Win_create test hangs on my non uniform cluster 
<br>
(ibm/onesided/c_create)
<br>
<p>one node has an IB card but not the other one.
<br>
the node with the IB card select the rdma osc module, but the other node 
<br>
select the pt2pt module.
<br>
and then it hangs because both ends do no try to initialize the same module
<br>
<p>if i understand correctly, the rdma osc component is selected if at 
<br>
least a rdma capable btl is initialized,
<br>
imho, the logic should be :
<br>
the rdma osc component is selected for a given communicator if all the 
<br>
btls involved in this communicator
<br>
(maybe except the self btl) are rdma capable.
<br>
<p>can you please have a look at this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18357.php">Ralph Castain: "[OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Previous message:</strong> <a href="18355.php">Ralph Castain: "[OMPI devel] Modex-less operations: setting options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Reply:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
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
