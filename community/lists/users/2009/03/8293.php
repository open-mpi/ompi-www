<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:01:10 2009" -->
<!-- isoreceived="20090304200110" -->
<!-- sent="Wed, 4 Mar 2009 15:00:57 -0500" -->
<!-- isosent="20090304200057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="88577367-3C1F-49E0-A3F4-22E1E1A99B98_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AB2750.3040001_at_vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 15:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<li><strong>Previous message:</strong> <a href="8292.php">Joshua Bernstein: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8265.php">Brett Pemberton: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2009, at 7:24 PM, Brett Pemberton wrote:
<br>
<p><span class="quotelev1">&gt; I'd appreciate some advice on if I'm using OFED correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OFED 1.4, however not the kernel modules, just userland.
</span><br>
<span class="quotelev1">&gt; Is this a bad idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I believe so.  I'm not a kernel guy, but I've always used the userland  
<br>
bits matched with the corresponding kernel bits.  If nothing else,  
<br>
getting them to match would eliminate one possible source of errors.
<br>
<p><span class="quotelev1">&gt; Basically, I recompile the ofed src.rpms for:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dapl, libibcm, libibcommon, libibmad, libibumad, libibverbs, libmthca,
</span><br>
<span class="quotelev1">&gt; librdmacm, libsdp, mstflint
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And install onto CentOS, upgrading the in-distro versions.
</span><br>
<span class="quotelev1">&gt; Should I also be compiling ofa_kernel ?
</span><br>
<span class="quotelev1">&gt; Could this be causing problems ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>...could be?  I don't really know.  That would be a better question  
<br>
for the general_at_[hidden] list.
<br>
<p><span class="quotelev1">&gt; As explained off-list, I'm running the most recent firmware for my
</span><br>
<span class="quotelev1">&gt; cards, although the release is quite old:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;          fw_ver:                         1.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I *believe* that's fairly ancient.  You might want to check the  
<br>
support Mellanox web site and see if there's anything more recent for  
<br>
your HCA.
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
<li><strong>Next message:</strong> <a href="8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<li><strong>Previous message:</strong> <a href="8292.php">Joshua Bernstein: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8265.php">Brett Pemberton: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
