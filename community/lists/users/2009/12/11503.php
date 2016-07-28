<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 16:15:09 2009" -->
<!-- isoreceived="20091210211509" -->
<!-- sent="Thu, 10 Dec 2009 16:15:03 -0500" -->
<!-- isosent="20091210211503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="20A9114B-FD4C-4B14-AEFC-187E3F6B4A28_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B2161ED.2040705_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI with PGI compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 16:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11520.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11520.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 4:02 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev2">&gt; &gt; On Dec 9, 2009, at 4:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Given that we haven't moved this patch to the v1.4 branch yet (i.e., it's not
</span><br>
<span class="quotelev2">&gt; &gt; yet in a nightly v1.4 tarball), probably the easiest thing to do is to apply
</span><br>
<span class="quotelev2">&gt; &gt; the attached patch to a v1.4 tarball.  I tried it with my PGI 10.0 install
</span><br>
<span class="quotelev2">&gt; &gt; and it seems to work.  So -- forget everything about autogen.sh and just
</span><br>
<span class="quotelev2">&gt; &gt; apply the attached patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason why it hasn't moved into 1.4 yet or wasn't included with the
</span><br>
<span class="quotelev1">&gt; 1.4 release?
</span><br>
<p>1.4 was *ONLY* about upgrading to Libtool 2.2.6b.
<br>
<p>The only reason it hasn't moved to the 1.4 branch yet is because Brian hadn't reviewed my patch yet.  :-)  He reviewed it this afternoon, so it's just awaiting release manager approval.
<br>
<p><span class="quotelev1">&gt; Can I toss my two cents in here and request it be made available in a mainline
</span><br>
<span class="quotelev1">&gt; release, or at least in a snapshot sooner rather then later? I'd like to get it
</span><br>
<span class="quotelev1">&gt; included in our build in time for our next release.
</span><br>
<p>I'll see if I can nudge everyone to get it into the branch today and therefore into tonight's snapshot.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11520.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11520.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
