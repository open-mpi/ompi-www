<?
$subject_val = "Re: [OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 14:24:10 2011" -->
<!-- isoreceived="20110217192410" -->
<!-- sent="Thu, 17 Feb 2011 14:24:05 -0500" -->
<!-- isosent="20110217192405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are IP addresses determined?" -->
<!-- id="23E0FBBD-77A0-43C5-8C5D-61F794A9B727_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5D5CDB.4080208_at_norbl.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are IP addresses determined?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 14:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15643.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15641.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15642.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2011, at 12:37 PM, Barnet Wagman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The short version is that open MPI does not support NAT. There was some research work a long time ago investigating supporting firewalls and NAT, but I don't think it was ever completed / published. 
</span><br>
<span class="quotelev1">&gt; That makes sense.  Do you know how open MPI gets the ip addresses it
</span><br>
<span class="quotelev1">&gt; uses?  And where in the src this is done? Sounds like I won't be able to
</span><br>
<span class="quotelev1">&gt; run open mpi from a system without a direct connection to the net, but
</span><br>
<span class="quotelev1">&gt; I'd like to look at the relevant code any way.
</span><br>
<p>We just query the local OS for all of its available/up ethernet interfaces.  The relevant code is in opal/util/if.c, but I warn you -- this is pretty gnarly code because the different flavors of OS do these kinds of things just *slightly* different from each other.  Ugh!  It's effectively a portable, API way of getting the same information that you get from ifconfig(1).
<br>
<p>But just to be clear: your OS isn't going to have any idea what the IP address is on the other side of NAT -- that's kind of the point of NAT.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15643.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15641.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15642.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
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
