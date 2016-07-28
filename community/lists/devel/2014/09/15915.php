<?
$subject_val = "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 13:50:38 2014" -->
<!-- isoreceived="20140925175038" -->
<!-- sent="Thu, 25 Sep 2014 11:50:37 -0600" -->
<!-- isosent="20140925175037" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one" -->
<!-- id="20140925175037.GB84131_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwC82emtzf-WwkvdD6TmSOHRfkb6OgR--Ch1KYM3S2jNuw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-25 13:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Previous message:</strong> <a href="15914.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4919: Fix the application abort routine so we actually abort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15929.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 26, 2014 at 07:03:24PM +0300, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; I finally managed to track down some issues in mpi4py's test suite
</span><br>
<span class="quotelev1">&gt; using Open MPI 1.8+. The code below should be enough to reproduce the
</span><br>
<span class="quotelev1">&gt; problem. Run it under valgrind to make sense of my following
</span><br>
<span class="quotelev1">&gt; diagnostics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this code I'm creating a 2D, periodic Cartesian topology out of
</span><br>
<span class="quotelev1">&gt; COMM_SELF. In this case, the process in COMM_SELF has 4 logical in/out
</span><br>
<span class="quotelev1">&gt; links to itself. So we have size=1 but indegree=outdegree=4. However,
</span><br>
<span class="quotelev1">&gt; in ompi/mca/coll/basic/coll_basic_module.c, &quot;size * 2&quot; request are
</span><br>
<span class="quotelev1">&gt; being allocated to manage communication:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (OMPI_COMM_IS_INTER(comm)) {
</span><br>
<span class="quotelev1">&gt;         size = ompi_comm_remote_size(comm);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev1">&gt;     basic_module-&gt;mccb_reqs = (ompi_request_t**)
</span><br>
<span class="quotelev1">&gt;         malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess you have to also special-case for topologies and allocate
</span><br>
<span class="quotelev1">&gt; indegree+outdegree requests (not sure about this number, just
</span><br>
<span class="quotelev1">&gt; guessing).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I wish this was possible but the topology information is not available
<br>
at that point. We may be able to change that but I don't see the work
<br>
completing anytime soon. I committed an alternative fix as r32796 and
<br>
CMR'd it to 1.8.3. I can confirm that the attached reproducer no longer
<br>
produces a SEGV. Let me know if you run into any more issues.
<br>
<p><p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15915/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Previous message:</strong> <a href="15914.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4919: Fix the application abort routine so we actually abort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15929.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
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
