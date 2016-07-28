<?
$subject_val = "Re: [OMPI users] reg. heterogeneous cluster confguration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 07:38:06 2007" -->
<!-- isoreceived="20071121123806" -->
<!-- sent="Wed, 21 Nov 2007 07:38:00 -0500" -->
<!-- isosent="20071121123800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] reg. heterogeneous cluster confguration" -->
<!-- id="6B4144E9-6803-48AF-90DC-2F141CE0EFCA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="009c01c82bf6$b41b0d00$1c512700$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] reg. heterogeneous cluster confguration<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 07:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4497.php">Chadalavada Kalyana Krishna: "Re: [OMPI users] reg. heterogeneous cluster confguration"</a>
<li><strong>In reply to:</strong> <a href="4496.php">Chadalavada Kalyana Krishna: "[OMPI users] reg. heterogeneous cluster confguration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2007, at 11:26 PM, Chadalavada Kalyana Krishna wrote:
<br>
<p><span class="quotelev1">&gt; 1) Endian conversion - Open MPI does automatic endian conversion as  
</span><br>
<span class="quotelev1">&gt; long as
</span><br>
<span class="quotelev1">&gt; the size of the data types on the communicating nodes is equal. This  
</span><br>
<span class="quotelev1">&gt; support
</span><br>
<span class="quotelev1">&gt; is fully qualified from v1.1. Is this a correct statement?
</span><br>
<p>It should work, but it's not something we test very often.  At one  
<br>
point, it did work.  :-)
<br>
<p><span class="quotelev1">&gt; 2) Windows and *nix clusters - Is it possible to have a single MPI
</span><br>
<span class="quotelev1">&gt; application spawned and executed across a cluster of mixed operating  
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; like Windows &amp; other flavours of UNIX (Solaris, Linux, AIX) etc? My
</span><br>
<span class="quotelev1">&gt; understanding is from MPICH2, using SMPD process manager, it is.
</span><br>
<p><p>Aside from Windows, yes.  As you noted in your second post, our  
<br>
Windows support is incomplete.
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
<li><strong>Next message:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4497.php">Chadalavada Kalyana Krishna: "Re: [OMPI users] reg. heterogeneous cluster confguration"</a>
<li><strong>In reply to:</strong> <a href="4496.php">Chadalavada Kalyana Krishna: "[OMPI users] reg. heterogeneous cluster confguration"</a>
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
