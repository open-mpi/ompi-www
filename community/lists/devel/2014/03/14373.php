<?
$subject_val = "Re: [OMPI devel] 1.7.5 and trunk failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 16:59:04 2014" -->
<!-- isoreceived="20140319205904" -->
<!-- sent="Wed, 19 Mar 2014 20:59:00 +0000" -->
<!-- isosent="20140319205900" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 and trunk failures" -->
<!-- id="549D7AB9-D90F-4E88-B09C-61C0A2E6BDD5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B13ACAAE-36BD-46CD-939E-42CCCEEB1E7E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 and trunk failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-19 16:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14374.php">Ralph Castain: "[OMPI devel] v1.7.5rc4 is posted"</a>
<li><strong>Previous message:</strong> <a href="14372.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="14369.php">Ralph Castain: "[OMPI devel] 1.7.5 and trunk failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the list: we figured this out.  These neighbor tests require np&gt;=4 (whew!).  I added minimum np checks to the tests so that they'll skip (exit 77) if np&lt;4.  Nathan and I worked through the other three tests.
<br>
<p><p>On Mar 18, 2014, at 11:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just to be safe, I blew away my existing installations and got completely fresh checkouts. I am doing a vanilla configure, with the only configure options besides prefix being --enable-orterun-prefix-by-default and --enable-mpi-java (so I can test the Java bindings)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For 1.7.5, running the IBM test suite, I get the following failures on my 2-node cluster, running map-by node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: ineighbor_allgatherv, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: neighbor_allgatherv, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: ineighbor_alltoallv, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: ineighbor_alltoall, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: neighbor_alltoallw, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: neighbor_alltoallv, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: neighbor_alltoall, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: ineighbor_alltoallw, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: ineighbor_allgather, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: neighbor_allgather, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: create_group_usempi, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: create_group_mpifh, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: create_group, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: idx_null, np=2, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From the Intel test suite:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Keyval3_c, np=6, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Allgatherv_c, np=6, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Graph_create_undef_c, np=6, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I subsequently removed the map-by node directive so everything basically ran on the head node with mpirun, just in case having the procs on separate nodes was the cause of the problem. However, the exact same failures were observed again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the 1.7.5 branch ran clean (except for idx_null, which we understand) yesterday, so this is caused by something new today. I then tested the trunk and got the identical errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see how we can release with this situation, so we appear to be stuck until someone can figure out what happened and fix it.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14369.php">http://www.open-mpi.org/community/lists/devel/2014/03/14369.php</a>
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
<li><strong>Next message:</strong> <a href="14374.php">Ralph Castain: "[OMPI devel] v1.7.5rc4 is posted"</a>
<li><strong>Previous message:</strong> <a href="14372.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [CRIU]  Open MPI and CRIU stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="14369.php">Ralph Castain: "[OMPI devel] 1.7.5 and trunk failures"</a>
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
