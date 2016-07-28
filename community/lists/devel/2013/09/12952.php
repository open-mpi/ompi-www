<?
$subject_val = "Re: [OMPI devel] RFC: Neighborhood collective support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 16:18:30 2013" -->
<!-- isoreceived="20130920201830" -->
<!-- sent="Fri, 20 Sep 2013 20:18:28 +0000" -->
<!-- isosent="20130920201828" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Neighborhood collective support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BD8FF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8E25A938F00ED34D90F8C49322FDF192A114E4_at_xmb-rcd-x09.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 16:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Previous message:</strong> <a href="12951.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12949.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Reply:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan: can you add these tests (or morphed versions of these tests) into the ompi-tests/ibm tree?  That way, we'll all be running them against MTT.
<br>
<p><p>On Sep 20, 2013, at 12:40 PM, &quot;David Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 19, 2013, at 3:07 PM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have implemented simple tests for cartesian, graph, and dist graph topologies for the Open MPI/IBM test suite and all tests pass. I will push those tests to MTT tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider also grabbing the dist graph and neighborhood collective tests from MPICH and running them against your proposed patch.  I recall catching a lot of subtle cases with these tests when I implemented this functionality in MPICH.  Specifically, I'm thinking of these tests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/dgraph_unwgt.c">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/dgraph_unwgt.c</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/neighb_coll.c">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/neighb_coll.c</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/distgraph1.c">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/topo/distgraph1.c</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_unwgtf.f">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_unwgtf.f</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_wgtf.f">http://git.mpich.org/mpich.git/blob/HEAD:/test/mpi/f77/topo/dgraph_wgtf.f</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of them might be annoying to run, since they depend on the &quot;MTest&quot; utility code.  But they wouldn't be too hard to tweak to use plain MPI instead.  Let me know if you run into trouble, I'm happy to point you in the right direction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Previous message:</strong> <a href="12951.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12949.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
<li><strong>Reply:</strong> <a href="12953.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Neighborhood collective support"</a>
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
