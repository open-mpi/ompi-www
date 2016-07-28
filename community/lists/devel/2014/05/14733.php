<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 21:15:09 2014" -->
<!-- isoreceived="20140508011509" -->
<!-- sent="Thu, 08 May 2014 11:15:06 +1000" -->
<!-- isosent="20140508011506" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="536ADA9A.2080305_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3398BBF5-301F-4BBC-926C-C83021F74428_at_open-mpi.org" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 21:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14734.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14732.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14708.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14735.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14735.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi all,
<br>
<p>Apologies for having dropped out of the thread, night intervened here. ;-)
<br>
<p>On 08/05/14 00:45, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Okay, then we'll just have to develop a workaround for all those 
</span><br>
<span class="quotelev1">&gt; Slurm releases where PMI-2 is borked :-(
</span><br>
<p>Do you know what these releases are?  Are we talking 2.6.x or 14.03?
<br>
The 14.03 series has had a fair few rapid point releases and doesn't
<br>
appear to be anywhere as near as stable as 2.6 was when it came out. :-(
<br>
<p><span class="quotelev1">&gt; FWIW: I think people misunderstood my statement. I specifically
</span><br>
<span class="quotelev1">&gt; did *not* propose to *lose* PMI-2 support. I suggested that we
</span><br>
<span class="quotelev1">&gt; change it to &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot;
</span><br>
<span class="quotelev1">&gt; so we wouldn't keep getting asked about PMI-2 bugs in Slurm. Once
</span><br>
<span class="quotelev1">&gt; the Slurm implementation stabilized, then we could reverse that
</span><br>
<span class="quotelev1">&gt; policy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, given that both you and Chris appear to prefer to keep it 
</span><br>
<span class="quotelev1">&gt; &quot;on-by-default&quot;, we'll see if we can find a way to detect that
</span><br>
<span class="quotelev1">&gt; PMI-2 is broken and then fall back to PMI-1.
</span><br>
<p>My intention was to provide the data that led us to want PMI2, but if
<br>
configure had an option to enable PMI2 by default so that only those
<br>
who requested it got it then I'd be more than happy - we'd just add it
<br>
to our script to build it.
<br>
<p>All the best!
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlNq2poACgkQO2KABBYQAh+7DwCfeahirvoQ9Wom4VNhJIIdufeP
<br>
7uIAnAruTnXZBn6HXhuMAlzzSsoKkXlt
<br>
=OvH4
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14734.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14732.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14708.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14735.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14735.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
