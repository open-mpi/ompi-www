<?
$subject_val = "Re: [OMPI users] libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 09:21:38 2008" -->
<!-- isoreceived="20080605132138" -->
<!-- sent="Thu, 5 Jun 2008 09:21:29 -0400" -->
<!-- isosent="20080605132129" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libibverbs" -->
<!-- id="CBB61B2F-55CE-4344-B3AE-E60F1F44C878_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3E3BE568-35A6-45E9-A37E-5CA520CC5A2A_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 09:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5815.php">Brock Palen: "[OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<li><strong>Reply:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2008, at 4:28 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have two installs of openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt; One with the pgi compilers the other with gcc/Nagf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One the pgi compilers does not link against libibverbs, but ompi_info
</span><br>
<span class="quotelev1">&gt; shows the openib btl and we see traffic on the fabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other built with Nagware links against libibverbs.  It also shoes
</span><br>
<span class="quotelev1">&gt; in ompi_info the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would cause this?  It just pointed out that our login nodes
</span><br>
<span class="quotelev1">&gt; (most of our cluster does not have IB) don't have libibverbs making
</span><br>
<span class="quotelev1">&gt; code not link.  Any insight from an OFED master would be great.
</span><br>
<p><p>Did you build the gcc/Nagf90 version with --enable-static or --disable- 
<br>
dlopen?
<br>
<p>See the thread starting here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/06/5821.php">http://www.open-mpi.org/community/lists/users/2008/06/5821.php</a>
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
<li><strong>Next message:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5815.php">Brock Palen: "[OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<li><strong>Reply:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
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
