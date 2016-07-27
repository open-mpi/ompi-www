<?
$subject_val = "[hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 16:17:33 2013" -->
<!-- isoreceived="20131226211733" -->
<!-- sent="Thu, 26 Dec 2013 21:17:23 +0000" -->
<!-- isosent="20131226211723" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="[hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="52BC9CE3.7060703_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] Creating a topology generation method for Xen<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 16:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3990.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-31-g4c0ce9e)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am looking to add an ability for hwloc to be able to access the system
<br>
topology when operating in the control domain (dom0) of a Xen
<br>
virtualisation environment.
<br>
<p>At the moment, lstopo picks up the VM faked topology.  To avoid OS
<br>
schedulers attempting to be 'clever' with their topology, the faked
<br>
topology is 1 socket per vcpu, to prevent a scheduler attempting to
<br>
perform numa optimisation across cores which are not actually numa-adjacent.
<br>
<p>Being a Xen developer myself, I am more than happy with the aspect of
<br>
getting the topology information from Xen.  However, I have no idea how
<br>
to integrate this into hwloc.
<br>
<p>I believe can make a topology-xen.c without too much trouble.  It likely
<br>
wants to checked before an os-specific hook (Xen dom0's come in at least
<br>
Linux, FreeBSD, NetBSD flavours which have mainstream support)
<br>
<p>Are there any hints/suggestion/information about how to go about
<br>
integrating this?  What is the policy with regards to linking against
<br>
new libraries by default (or perhaps by an --enable-xen configure
<br>
option)?  At the very least, it would need to link against libxenctrl.so
<br>
which is a userspace library to issue hypercalls (abstracted away from
<br>
the OS specific mechanism).
<br>
<p>Thanks,
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3990.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-31-g4c0ce9e)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
