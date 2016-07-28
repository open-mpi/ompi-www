<?
$subject_val = "Re: [OMPI devel] RFC: Neighborhood collective support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 12:40:07 2013" -->
<!-- isoreceived="20130920164007" -->
<!-- sent="Fri, 20 Sep 2013 16:40:05 +0000" -->
<!-- isosent="20130920164005" -->
<!-- name="David Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Neighborhood collective support" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF192A114E4_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A590D1E_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Neighborhood collective support<br>
<strong>From:</strong> David Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 12:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12950.php">Sylvestre Ledru: "[OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12948.php">Jeff Squyres (jsquyres): "[OMPI devel] more oshmem issues"</a>
<li><strong>In reply to:</strong> <a href="12940.php">Hjelm, Nathan T: "[OMPI devel] RFC: Neighborhood collective support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Reply:</strong> <a href="12952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 19, 2013, at 3:07 PM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have implemented simple tests for cartesian, graph, and dist graph topologies for the Open MPI/IBM test suite and all tests pass. I will push those tests to MTT tomorrow.
</span><br>
<p>Consider also grabbing the dist graph and neighborhood collective tests from MPICH and running them against your proposed patch.  I recall catching a lot of subtle cases with these tests when I implemented this functionality in MPICH.  Specifically, I'm thinking of these tests:
<br>
<p><a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/dgraph_unwgt.c">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/dgraph_unwgt.c</a>
<br>
<a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/neighb_coll.c">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/neighb_coll.c</a>
<br>
<a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/distgraph1.c">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/distgraph1.c</a>
<br>
<a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_unwgtf.f">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_unwgtf.f</a>
<br>
<a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_wgtf.f">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_wgtf.f</a>
<br>
<p>Some of them might be annoying to run, since they depend on the &quot;MTest&quot; utility code.  But they wouldn't be too hard to tweak to use plain MPI instead.  Let me know if you run into trouble, I'm happy to point you in the right direction.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12950.php">Sylvestre Ledru: "[OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12948.php">Jeff Squyres (jsquyres): "[OMPI devel] more oshmem issues"</a>
<li><strong>In reply to:</strong> <a href="12940.php">Hjelm, Nathan T: "[OMPI devel] RFC: Neighborhood collective support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Reply:</strong> <a href="12952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
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
