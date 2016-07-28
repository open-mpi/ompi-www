<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 03:01:08 2009" -->
<!-- isoreceived="20090505070108" -->
<!-- sent="Tue, 05 May 2009 10:01:01 +0300" -->
<!-- isosent="20090505070101" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="49FFE42D.4060509_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA11ED62-EB70-4853-80D8-34C27962ECFE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 03:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9209.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jan,
<br>
I guess that you have OFED driver installed on you machines. You may do 
<br>
basic network verification with ibdiagnet utility 
<br>
(<a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>) that is part of OFED installation. 
<br>
<p>Regards,
<br>
Pasha
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 4, 2009, at 9:50 AM, jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Jeff. I have passed the mail to the IB vendor Dell company(the
</span><br>
<span class="quotelev2">&gt;&gt; blade was ordered from Dell Taiwan), but he todl me that he didn't
</span><br>
<span class="quotelev2">&gt;&gt; understand  &quot;layer 0 diagnostics&quot;. Coluld you help us to get more
</span><br>
<span class="quotelev2">&gt;&gt; information of &quot;layer 0 diagnostics&quot;. Thanks again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Layer 0 = your physical network layer.  Specifically: ensure that your 
</span><br>
<span class="quotelev1">&gt; IB network is actually functioning properly at both the physical and 
</span><br>
<span class="quotelev1">&gt; driver layer.  Cisco was an IB vendor for several years; I can tell 
</span><br>
<span class="quotelev1">&gt; you from experience that it is *not* enough to just plug everything in 
</span><br>
<span class="quotelev1">&gt; and run a few trivial tests to ensure that network traffic seems to be 
</span><br>
<span class="quotelev1">&gt; passed properly.  You need to have your vendor run a full set of layer 
</span><br>
<span class="quotelev1">&gt; 0 diagnostics to ensure that all the cables are good, all the HCAs are 
</span><br>
<span class="quotelev1">&gt; good, all the drivers are functioning properly, etc.  This involves 
</span><br>
<span class="quotelev1">&gt; running diagnostic network testing patterns, checking various error 
</span><br>
<span class="quotelev1">&gt; counters on the HCAs and IB switches, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is something that Dell should know how to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I say all this because the problem that you are seeing *seems* to be a 
</span><br>
<span class="quotelev1">&gt; network-related problem, not an OMPI-related problem.  One can never 
</span><br>
<span class="quotelev1">&gt; know for sure, but it is fairly clear that the very first step in your 
</span><br>
<span class="quotelev1">&gt; case is to verify that the network is functioning 100% properly.  
</span><br>
<span class="quotelev1">&gt; FWIW: this was standard operating procedure when Cisco was selling IB 
</span><br>
<span class="quotelev1">&gt; hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9209.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
