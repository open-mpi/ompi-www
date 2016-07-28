<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 15:52:57 2009" -->
<!-- isoreceived="20090504195257" -->
<!-- sent="Mon, 4 May 2009 15:52:48 -0400" -->
<!-- isosent="20090504195248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="BA11ED62-EB70-4853-80D8-34C27962ECFE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090504135017.M35621_at_wavelink.com.tw" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 15:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9201.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9208.php">Pavel Shamis (Pasha): "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9208.php">Pavel Shamis (Pasha): "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4, 2009, at 9:50 AM, jan wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Jeff. I have passed the mail to the IB vendor Dell  
</span><br>
<span class="quotelev1">&gt; company(the
</span><br>
<span class="quotelev1">&gt; blade was ordered from Dell Taiwan), but he todl me that he didn't
</span><br>
<span class="quotelev1">&gt; understand  &quot;layer 0 diagnostics&quot;. Coluld you help us to get more
</span><br>
<span class="quotelev1">&gt; information of &quot;layer 0 diagnostics&quot;. Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Layer 0 = your physical network layer.  Specifically: ensure that your  
<br>
IB network is actually functioning properly at both the physical and  
<br>
driver layer.  Cisco was an IB vendor for several years; I can tell  
<br>
you from experience that it is *not* enough to just plug everything in  
<br>
and run a few trivial tests to ensure that network traffic seems to be  
<br>
passed properly.  You need to have your vendor run a full set of layer  
<br>
0 diagnostics to ensure that all the cables are good, all the HCAs are  
<br>
good, all the drivers are functioning properly, etc.  This involves  
<br>
running diagnostic network testing patterns, checking various error  
<br>
counters on the HCAs and IB switches, etc.
<br>
<p>This is something that Dell should know how to do.
<br>
<p>I say all this because the problem that you are seeing *seems* to be a  
<br>
network-related problem, not an OMPI-related problem.  One can never  
<br>
know for sure, but it is fairly clear that the very first step in your  
<br>
case is to verify that the network is functioning 100% properly.   
<br>
FWIW: this was standard operating procedure when Cisco was selling IB  
<br>
hardware.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9201.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9208.php">Pavel Shamis (Pasha): "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9208.php">Pavel Shamis (Pasha): "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
