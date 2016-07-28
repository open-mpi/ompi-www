<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 22:55:19 2014" -->
<!-- isoreceived="20140508025519" -->
<!-- sent="Wed, 7 May 2014 19:54:25 -0700" -->
<!-- isosent="20140508025425" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="901B2B2E-A99D-4FB4-A29C-F64E5B5DE2A2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="536ADA9A.2080305_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 22:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14739.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14737.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14733.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14741.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2014, at 6:15 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apologies for having dropped out of the thread, night intervened here. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/05/14 00:45, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, then we'll just have to develop a workaround for all those 
</span><br>
<span class="quotelev2">&gt;&gt; Slurm releases where PMI-2 is borked :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know what these releases are?  Are we talking 2.6.x or 14.03?
</span><br>
<span class="quotelev1">&gt; The 14.03 series has had a fair few rapid point releases and doesn't
</span><br>
<span class="quotelev1">&gt; appear to be anywhere as near as stable as 2.6 was when it came out. :-(
</span><br>
<p>Yeah :-(
<br>
<p>I think there was one 2.6.x that was borked, and definitely problems in the 14.03.x line. Can't pinpoint it for you, though.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I think people misunderstood my statement. I specifically
</span><br>
<span class="quotelev2">&gt;&gt; did *not* propose to *lose* PMI-2 support. I suggested that we
</span><br>
<span class="quotelev2">&gt;&gt; change it to &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot;
</span><br>
<span class="quotelev2">&gt;&gt; so we wouldn't keep getting asked about PMI-2 bugs in Slurm. Once
</span><br>
<span class="quotelev2">&gt;&gt; the Slurm implementation stabilized, then we could reverse that
</span><br>
<span class="quotelev2">&gt;&gt; policy.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, given that both you and Chris appear to prefer to keep it 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;on-by-default&quot;, we'll see if we can find a way to detect that
</span><br>
<span class="quotelev2">&gt;&gt; PMI-2 is broken and then fall back to PMI-1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My intention was to provide the data that led us to want PMI2, but if
</span><br>
<span class="quotelev1">&gt; configure had an option to enable PMI2 by default so that only those
</span><br>
<span class="quotelev1">&gt; who requested it got it then I'd be more than happy - we'd just add it
</span><br>
<span class="quotelev1">&gt; to our script to build it.
</span><br>
<p>Sounds good. I'm going to have to dig deeper into those numbers, though, as they don't entirely add up to me. Once the job gets launched, the launch method itself should have no bearing on computational speed - IF all things are equal. In other words, if the process layout is the same, and the binding pattern is the same, then computational speed should be roughly equivalent regardless of how the procs were started.
<br>
<p>My guess is that your data might indicate a difference in the layout and/or binding pattern as opposed to PMI2 vs mpirun. At the scale you mention later in the thread (only 70 nodes x 16 ppn), the difference in launch timing would be zilch. So I'm betting you would find (upon further exploration) that (a) you might not have been binding processes when launching by mpirun, since we didn't bind by default until the 1.8 series, but were binding under direct srun launch, and (b) your process mapping would quite likely be different as we default to byslot mapping, and I believe srun defaults to bynode?
<br>
<p>Might be worth another comparison run when someone has time.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best!
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlNq2poACgkQO2KABBYQAh+7DwCfeahirvoQ9Wom4VNhJIIdufeP
</span><br>
<span class="quotelev1">&gt; 7uIAnAruTnXZBn6HXhuMAlzzSsoKkXlt
</span><br>
<span class="quotelev1">&gt; =OvH4
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14733.php">http://www.open-mpi.org/community/lists/devel/2014/05/14733.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14739.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14737.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14733.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14741.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
