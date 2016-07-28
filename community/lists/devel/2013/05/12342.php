<?
$subject_val = "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 00:14:21 2013" -->
<!-- isoreceived="20130502041421" -->
<!-- sent="Wed, 1 May 2013 21:14:14 -0700" -->
<!-- isosent="20130502041414" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Choosing an Open-MPI release for a new cluster" -->
<!-- id="78E951AE-D845-43BE-8656-4E0909F37580_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5181E347.4010203_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Choosing an Open-MPI release for a new cluster<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 00:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12341.php">Christopher Samuel: "[OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>In reply to:</strong> <a href="12341.php">Christopher Samuel: "[OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Reply:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Reply:</strong> <a href="12347.php">Christopher Samuel: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depends on what you think you might want, and how tolerant you and your users are about bugs.
<br>
<p>The 1.6 series is clearly more mature and stable. It has nearly all the MPI-2 stuff now, but no MPI-3.
<br>
<p>If you think there is something in MPI-3 you might want, then the 1.7 series could be the way to go - though you'll have to suffer thru its growing pains. Possible future &quot;features&quot; include more thread safety as well [though that may be delayed until the 1.9 series (depends on availability of people's time)], new mappers, new collectives, etc. Performance at the application level could be improved as a result.
<br>
<p>Personally, even though I'm one of the 1.7 release managers, I'm a little leery of recommending it for a production installation until we get further down the road. You might consider installing 1.6 as your &quot;base&quot; release, and then offering 1.7 to those who want to explore its new features?
<br>
<p><p>On May 1, 2013, at 8:53 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're about to bring up a new cluster (IBM iDataplex with SandyBridge
</span><br>
<span class="quotelev1">&gt; CPUs including 10 nodes with two Intel Xeon Phi cards) and I'm at the
</span><br>
<span class="quotelev1">&gt; stage where we need to pick an OMPI release to put on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that this system is at the start of its life whatever we pick
</span><br>
<span class="quotelev1">&gt; now is likely to be baked in for the next 4 years or so (with OMPI
</span><br>
<span class="quotelev1">&gt; point release updates of course) and so I'm thinking that I should be
</span><br>
<span class="quotelev1">&gt; going with the 1.7.x release rather than the 1.6.x one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For comparison the Nehalem iDP this is going in next to is still at
</span><br>
<span class="quotelev1">&gt; 1.4.x, it wouldn't be worth the effort to take it to a later release
</span><br>
<span class="quotelev1">&gt; given it has probably only another 18 months of life left.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, not having been able to keep up with this list for some time
</span><br>
<span class="quotelev1">&gt; I'd like to throw myself on your tender mercies for advice for whether
</span><br>
<span class="quotelev1">&gt; that's a good plan or not!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts please?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlGB40cACgkQO2KABBYQAh+zHwCfbKMFtmmnc07PPrXdEHghxqf1
</span><br>
<span class="quotelev1">&gt; SCYAn2hgWaLBUXhbBAmzA20BXLBzdLsJ
</span><br>
<span class="quotelev1">&gt; =KGxX
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12341.php">Christopher Samuel: "[OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>In reply to:</strong> <a href="12341.php">Christopher Samuel: "[OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Reply:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Reply:</strong> <a href="12347.php">Christopher Samuel: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
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
