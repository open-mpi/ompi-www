<?
$subject_val = "Re: [hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 17:52:51 2013" -->
<!-- isoreceived="20131226225251" -->
<!-- sent="Thu, 26 Dec 2013 23:52:47 +0100" -->
<!-- isosent="20131226225247" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="52BCB33F.4020309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52BC9CE3.7060703_at_citrix.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Creating a topology generation method for Xen<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 17:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Andrew Cooper: "[hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3999.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
How would you like the user to switch from the fake/guest topology to
<br>
the real/host topology in practice? Most applications may still want
<br>
fake/guest topos (so that binding works etc) while admins and only some
<br>
(advanced?) users will want the real/host topology.
<br>
We can easily make Xen lower priority by default and use environment
<br>
variables to raise/enable Xen manually. But I am not sure that's a
<br>
convenient solution for the end user.
<br>
If we add --enable-xen, you'd want to have two hwloc installations, a
<br>
normal one and a xen-enabled one?
<br>
Brice
<br>
<p><p><p><p>Le 26/12/2013 22:17, Andrew Cooper a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking to add an ability for hwloc to be able to access the system
</span><br>
<span class="quotelev1">&gt; topology when operating in the control domain (dom0) of a Xen
</span><br>
<span class="quotelev1">&gt; virtualisation environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, lstopo picks up the VM faked topology.  To avoid OS
</span><br>
<span class="quotelev1">&gt; schedulers attempting to be 'clever' with their topology, the faked
</span><br>
<span class="quotelev1">&gt; topology is 1 socket per vcpu, to prevent a scheduler attempting to
</span><br>
<span class="quotelev1">&gt; perform numa optimisation across cores which are not actually numa-adjacent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Being a Xen developer myself, I am more than happy with the aspect of
</span><br>
<span class="quotelev1">&gt; getting the topology information from Xen.  However, I have no idea how
</span><br>
<span class="quotelev1">&gt; to integrate this into hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe can make a topology-xen.c without too much trouble.  It likely
</span><br>
<span class="quotelev1">&gt; wants to checked before an os-specific hook (Xen dom0's come in at least
</span><br>
<span class="quotelev1">&gt; Linux, FreeBSD, NetBSD flavours which have mainstream support)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any hints/suggestion/information about how to go about
</span><br>
<span class="quotelev1">&gt; integrating this?  What is the policy with regards to linking against
</span><br>
<span class="quotelev1">&gt; new libraries by default (or perhaps by an --enable-xen configure
</span><br>
<span class="quotelev1">&gt; option)?  At the very least, it would need to link against libxenctrl.so
</span><br>
<span class="quotelev1">&gt; which is a userspace library to issue hypercalls (abstracted away from
</span><br>
<span class="quotelev1">&gt; the OS specific mechanism).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3996.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Andrew Cooper: "[hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3999.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
