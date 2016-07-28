<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 22:16:28 2014" -->
<!-- isoreceived="20140508021628" -->
<!-- sent="Thu, 8 May 2014 09:16:28 +0700" -->
<!-- isosent="20140508021628" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="CAJ2Qj5p1QM0FuUtiFyoM3dei0Mgyfqj=e=5Zp1_Mt=oB=8McMA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 22:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14736.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14734.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14733.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris.
<br>
<p>Current disign is to provide the runtime parameter for PMI version
<br>
selection. It would be even more flexible that configuration-time selection
<br>
and (with my current understanding) not very hard to acheive.
<br>
<p><p>2014-05-08 8:15 GMT+07:00 Christopher Samuel &lt;samuel_at_[hidden]&gt;:
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
<span class="quotelev2">&gt; &gt; Okay, then we'll just have to develop a workaround for all those
</span><br>
<span class="quotelev2">&gt; &gt; Slurm releases where PMI-2 is borked :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what these releases are?  Are we talking 2.6.x or 14.03?
</span><br>
<span class="quotelev1">&gt; The 14.03 series has had a fair few rapid point releases and doesn't
</span><br>
<span class="quotelev1">&gt; appear to be anywhere as near as stable as 2.6 was when it came out. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: I think people misunderstood my statement. I specifically
</span><br>
<span class="quotelev2">&gt; &gt; did *not* propose to *lose* PMI-2 support. I suggested that we
</span><br>
<span class="quotelev2">&gt; &gt; change it to &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot;
</span><br>
<span class="quotelev2">&gt; &gt; so we wouldn't keep getting asked about PMI-2 bugs in Slurm. Once
</span><br>
<span class="quotelev2">&gt; &gt; the Slurm implementation stabilized, then we could reverse that
</span><br>
<span class="quotelev2">&gt; &gt; policy.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, given that both you and Chris appear to prefer to keep it
</span><br>
<span class="quotelev2">&gt; &gt; &quot;on-by-default&quot;, we'll see if we can find a way to detect that
</span><br>
<span class="quotelev2">&gt; &gt; PMI-2 is broken and then fall back to PMI-1.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14733.php">http://www.open-mpi.org/community/lists/devel/2014/05/14733.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14735/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14736.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14734.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14733.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
