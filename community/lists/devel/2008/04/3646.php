<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 11:01:56 2008" -->
<!-- isoreceived="20080403150156" -->
<!-- sent="Thu, 3 Apr 2008 11:01:28 -0400" -->
<!-- isosent="20080403150128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="A363BD1E-C107-4EB8-9CEA-BA1CFFD9C641_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080403131828.GK3614_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 11:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3647.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2008, at 9:18 AM, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; I am talking about openib part of the modex. The &quot;garbage&quot; I am
</span><br>
<span class="quotelev1">&gt; referring to is this:
</span><br>
<p>FWIW, on the openib-cpc2 branch, the base data that is sent in the  
<br>
modex is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint64_t subnet_id;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** LID of this port */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint16_t lid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** APM LID for this port */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint16_t apm_lid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** The MTU used by this port */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t mtu;
<br>
<p>lid is used by both the xoob and ibcm cpc's.  We can skip packing the  
<br>
apm_lid if apm support is not used if you really want to.  The MTU has  
<br>
been changed to the 8 bit enum value.
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
<li><strong>Next message:</strong> <a href="3647.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
