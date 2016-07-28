<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 08:50:04 2014" -->
<!-- isoreceived="20140110135004" -->
<!-- sent="Fri, 10 Jan 2014 13:50:02 +0000" -->
<!-- isosent="20140110135002" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="4550B0C1-A2E1-4D66-AD86-EB95581656D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3EC16CEB_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hcoll destruction via MPI attribute<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 08:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13686.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13684.php">Jeff Squyres (jsquyres): "[OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)"</a>
<li><strong>In reply to:</strong> <a href="13632.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13687.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13687.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2014, at 12:05 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; [Josh] We have a recursive doubling algorithm in progress implemented with PML send/recvs, more accurately , with &quot;RTE_isend/RTE_irecv&quot; functions, which, in the case of OMPI are PML calls.
</span><br>
<p>Does that mean that you'll be blocking (effectively) in the communicator destruction function?
<br>
<p>I *think* that's ok, but I'm not 100% sure... Brian / George / Nathan: can you confirm?
<br>
<p>I ask because the standard does not specify what is allowed in attribute callback functions -- which, by omission, means that *everything* is allowed, but I don't know how well tested code paths are that invoke arbitrary MPI (PML) functionality inside communicator teardown.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13686.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13684.php">Jeff Squyres (jsquyres): "[OMPI devel] README / OS X versions (was: 1.7.4rc2r30168 - configure failure on Mac OSX 10.5)"</a>
<li><strong>In reply to:</strong> <a href="13632.php">Joshua Ladd: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13687.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Reply:</strong> <a href="13687.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
