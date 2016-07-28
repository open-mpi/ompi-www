<?
$subject_val = "Re: [OMPI devel] IPv4 mapped IPv6 addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 10:48:27 2007" -->
<!-- isoreceived="20071214154827" -->
<!-- sent="Fri, 14 Dec 2007 09:48:20 -0600 (CST)" -->
<!-- isosent="20071214154820" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv4 mapped IPv6 addresses" -->
<!-- id="Pine.LNX.4.64.0712140941440.8366_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071214144815.GB11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IPv4 mapped IPv6 addresses<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 10:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2853.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2851.php">Adrian Knoth: "[OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>In reply to:</strong> <a href="2851.php">Adrian Knoth: "[OMPI devel] IPv4 mapped IPv6 addresses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 14 Dec 2007, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; Should we consider moving towards these mapped addresses? The
</span><br>
<span class="quotelev1">&gt; implications:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - less code, only one socket to handle
</span><br>
<span class="quotelev1">&gt;   - better FD consumption
</span><br>
<span class="quotelev1">&gt;   - breaks WinXP support, but not Vista/Longhorn or later
</span><br>
<span class="quotelev1">&gt;   - requires non-default kernel runtime setting on OpenBSD for IPv4
</span><br>
<span class="quotelev1">&gt;     connections
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, FD consumption is the only real issue to consider.
</span><br>
<p>My thought is no.  The resource consumption isn't really an issue to 
<br>
consider.  It would also simplify the code (although work that Adrian and 
<br>
I did later to clean up the TCP OOB component has limited that).  If you 
<br>
look at the FD count issue, you're going to reduce the number of FDs (for 
<br>
the OOB anyway) by 2.  Not (2 * NumNodes), but 2 (one for BTL, one for 
<br>
OOB).  Today we have a listen socket for IPv4 and another for IPv6.  With 
<br>
IPv4 mapped addresses, we'd have one that did both.  In terms of per-peer 
<br>
connections, the OOB tries one connection at a time, so there will be at 
<br>
most 1 OOB connection between any two peers.
<br>
<p>In return for 2 FDs, we'd have to play with code taht we know works and 
<br>
with cleanups over the last year has actually become quite simple.  We'd 
<br>
have to break WinXP support (when it sounds like no one is really moving 
<br>
to Vista), and we'd break out-of-the-box OpenBSD.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2853.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>Previous message:</strong> <a href="2851.php">Adrian Knoth: "[OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>In reply to:</strong> <a href="2851.php">Adrian Knoth: "[OMPI devel] IPv4 mapped IPv6 addresses"</a>
<!-- nextthread="start" -->
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
