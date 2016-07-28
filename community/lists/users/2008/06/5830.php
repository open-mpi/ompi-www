<?
$subject_val = "Re: [OMPI users] libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 10:11:57 2008" -->
<!-- isoreceived="20080605141157" -->
<!-- sent="Thu, 5 Jun 2008 10:10:51 -0400" -->
<!-- isosent="20080605141051" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libibverbs" -->
<!-- id="B07AA5B9-F4E8-4E16-B577-CE4105A9126D_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CBB61B2F-55CE-4344-B3AE-E60F1F44C878_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 10:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5831.php">Bill Johnstone: "[OMPI users] Documentation on running under slurm"</a>
<li><strong>Previous message:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<li><strong>In reply to:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2008, at 9:21 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 4, 2008, at 4:28 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have two installs of openmpi-1.2.3
</span><br>
<span class="quotelev2">&gt;&gt; One with the pgi compilers the other with gcc/Nagf90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One the pgi compilers does not link against libibverbs, but ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; shows the openib btl and we see traffic on the fabric.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other built with Nagware links against libibverbs.  It also shoes
</span><br>
<span class="quotelev2">&gt;&gt; in ompi_info the openib btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What would cause this?  It just pointed out that our login nodes
</span><br>
<span class="quotelev2">&gt;&gt; (most of our cluster does not have IB) don't have libibverbs making
</span><br>
<span class="quotelev2">&gt;&gt; code not link.  Any insight from an OFED master would be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you build the gcc/Nagf90 version with --enable-static or -- 
</span><br>
<span class="quotelev1">&gt; disable-
</span><br>
<span class="quotelev1">&gt; dlopen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the thread starting here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2008/06/5821.php">http://www.open-mpi.org/community/lists/users/2008/06/5821.php</a>
</span><br>
<p><p>Yes,
<br>
Looks like Nag requires a library that was not compiled with -fPIC,   
<br>
and the linker complains.
<br>
Looks more like a bug in our load, our login nodes were missing  
<br>
libibverbs.a  while the computes nodes do have it.
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5831.php">Bill Johnstone: "[OMPI users] Documentation on running under slurm"</a>
<li><strong>Previous message:</strong> <a href="5829.php">Gabriele Fatigati: "[OMPI users] Question about RDMA"</a>
<li><strong>In reply to:</strong> <a href="5828.php">Jeff Squyres: "Re: [OMPI users] libibverbs"</a>
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
