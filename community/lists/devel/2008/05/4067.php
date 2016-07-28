<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 09:54:39 2008" -->
<!-- isoreceived="20080529135439" -->
<!-- sent="Thu, 29 May 2008 09:54:29 -0400" -->
<!-- isosent="20080529135429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="A35B1034-AD83-4DB0-8684-57BBB4E6CDEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="483E5AC9.40400_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 09:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Previous message:</strong> <a href="4066.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>In reply to:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4070.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2008, at 3:27 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I got some more feedback from Roland off-list explaining that if / 
</span><br>
<span class="quotelev2">&gt;&gt; sys/
</span><br>
<span class="quotelev2">&gt;&gt; class/infiniband does exist and is non-empty and /sys/class/
</span><br>
<span class="quotelev2">&gt;&gt; infiniband_verbs/abi_version does not exist, then this is  
</span><br>
<span class="quotelev2">&gt;&gt; definitely a
</span><br>
<span class="quotelev2">&gt;&gt; case where we want to warn because it implies that config is screwed
</span><br>
<span class="quotelev2">&gt;&gt; up -- RDMA devices are present but not usable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible that /sys/class/infiniband directory exist and it is
</span><br>
<span class="quotelev1">&gt; empty ? In which cases ?
</span><br>
<p>Roland consistently said &quot;...and not empty&quot; in e-mails to me, so  
<br>
that's what I assumed.
<br>
<p>However, Pasha just did a test: on a machine with a ConnectX HCA, he  
<br>
manually removed the mlx4 drive and started the openibd service.  /sys/ 
<br>
class/infiniband was created, but it was empty.
<br>
<p>I guess this is a situation that we want to warn about -- we can  
<br>
simplify the whole deal by making the overriding assumption: if the  
<br>
drivers are loaded at all (such that /sys/class/infiniband/ exists at  
<br>
all), OMPI should expect to be able to find some RDMA devices.  If it  
<br>
doesn't find any, it should issue a warning.
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
<li><strong>Next message:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Previous message:</strong> <a href="4066.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>In reply to:</strong> <a href="4064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4070.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
