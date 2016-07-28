<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 05:04:43 2014" -->
<!-- isoreceived="20140327090443" -->
<!-- sent="Thu, 27 Mar 2014 10:05:38 +0100" -->
<!-- isosent="20140327090538" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="20140327090538.GA22802_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="533360DF.9060606_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 05:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23982.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23986.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23986.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heya,
<br>
<p>On 19:21 Wed 26 Mar     , Gus Correa wrote:
<br>
<span class="quotelev1">&gt; On 03/26/2014 05:26 PM, Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; [Main part is at the bottom]
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2014-03-26 at 19:28 +0100, Andreas Sch&#228;fer wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 09:08 Wed 26 Mar     , Ross Boylan wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Second, we do not operate in a batch queuing environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why not fix that?
</span><br>
<span class="quotelev2">&gt; &gt; I'm not the sysadmin, though I'm involved in the group that sets policy.
</span><br>
<span class="quotelev2">&gt; &gt; At one point we were using Sun's grid engine, but I don't think it's
</span><br>
<span class="quotelev2">&gt; &gt; installed now.  I'm not sure why.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have discussed putting in a batch queuing system and nobody was
</span><br>
<span class="quotelev2">&gt; &gt; really pushing for it.  My impression was (and probably still is) that
</span><br>
<span class="quotelev2">&gt; &gt; it was more pain than gain.  There is hassle not only for the sysadmin
</span><br>
<span class="quotelev2">&gt; &gt; to set it up (and, I suppose, monitor it), but for users.  Personally I
</span><br>
<span class="quotelev2">&gt; &gt; run a lot of interactive parallel jobs (the interaction is on rank 0
</span><br>
<span class="quotelev2">&gt; &gt; only).  I have the impression that won't work under a batch system,
</span><br>
<span class="quotelev2">&gt; &gt; though I could be wrong.  I also had the impression we'd need to have an
</span><br>
<span class="quotelev2">&gt; &gt; estimate of how long the job would run when we submit, and we don't
</span><br>
<span class="quotelev2">&gt; &gt; always know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I've never really used such a system, and may not appreciate what it
</span><br>
<span class="quotelev1">&gt; would get us.  The other reason we haven't bothered is that the load on
</span><br>
<span class="quotelev1">&gt; the cluster was relatively light and contention was low.  That is less
</span><br>
<span class="quotelev1">&gt; and less true, which probably starts tipping the balance toward a
</span><br>
<span class="quotelev1">&gt; queuing system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is wandering off topic, but if you or anyone else could say more
</span><br>
<span class="quotelev1">&gt; about why you regard the absence of a queuing system as a problem that
</span><br>
<span class="quotelev1">&gt; should be fixed, I'd love to hear it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ross
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some pros:
</span><br>
<span class="quotelev1">&gt; (I don't know of any cons.)
</span><br>
<p>I second Gus' statement that there are no real downsides for a
<br>
queueing system. These systems actually relieves both, users and
<br>
admins from a lot of tedious fiddling and debugging. If you're doing a
<br>
fresh install, then I'd suggest you to use Slurm[1]. It's a breeze to
<br>
install and easy to maintain. It also integrates well with all major
<br>
MPI implementations. Yes, the admin and users need to invest to time
<br>
to learn the ropes, but they payoff is almost instant. Source: I'm the
<br>
sysadmin for our research clusters.
<br>
<p><span class="quotelev1">&gt; Queue systems won't allow resources to be oversubscribed.
</span><br>
<p>I'm fairly confident that you can configure Slurm to oversubscribe
<br>
nodes: just specify more cores for a node than are actually present.
<br>
<p><span class="quotelev1">&gt; Queue systems do support interactive jobs (even with X-windows GUIs, if 
</span><br>
<span class="quotelev1">&gt; needed).
</span><br>
<p>Right, actually we've just moved a couple of systems, which are
<br>
primarily running interactive jobs, to Slurm to ease arbitration of
<br>
resources. Previously users were frequently stepping on each others
<br>
toes (Who's pinning jobs to which core? Who's using which GPU? How
<br>
much RAM do you consume?) These problems are gone now.
<br>
<p>Cheers
<br>
-Andreas
<br>
<p>[1] <a href="https://computing.llnl.gov/linux/slurm/">https://computing.llnl.gov/linux/slurm/</a>
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23981/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23982.php">tmishima_at_[hidden]: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23980.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23986.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23986.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
