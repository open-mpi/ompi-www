<?
$subject_val = "Re: [hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 17:31:27 2013" -->
<!-- isoreceived="20131226223127" -->
<!-- sent="Thu, 26 Dec 2013 22:31:19 +0000" -->
<!-- isosent="20131226223119" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="52BCAE37.5000004_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131226214335.GU5398_at_type" -->
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
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 17:31:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26/12/2013 21:43, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew Cooper, le Thu 26 Dec 2013 22:17:38 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I believe can make a topology-xen.c without too much trouble.  It likely
</span><br>
<span class="quotelev2">&gt;&gt; wants to checked before an os-specific hook (Xen dom0's come in at least
</span><br>
<span class="quotelev2">&gt;&gt; Linux, FreeBSD, NetBSD flavours which have mainstream support)
</span><br>
<span class="quotelev2">&gt;&gt; Are there any hints/suggestion/information about how to go about
</span><br>
<span class="quotelev2">&gt;&gt; integrating this?
</span><br>
<span class="quotelev1">&gt; Yes, you can probably play with plugin priorities for that.  See for
</span><br>
<span class="quotelev1">&gt; instance what happens with the pci plugins.
</span><br>
<p>Are there any hints on exactly what I have to tweak to get
<br>
topology-xen.c picked up properly?  I pesuaded ./configure to put it in
<br>
static-components.h but not to actually attempt to build
<br>
topology-xen.c.  (I shall continue hacking in the meantime)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the policy with regards to linking against
</span><br>
<span class="quotelev2">&gt;&gt; new libraries by default (or perhaps by an --enable-xen configure
</span><br>
<span class="quotelev2">&gt;&gt; option)?
</span><br>
<span class="quotelev1">&gt; By default we usually link against anything which is there, so linking
</span><br>
<span class="quotelev1">&gt; against libxenctrl is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC hypercalls through libxenctrl are reserved to root?  We'd like to
</span><br>
<span class="quotelev1">&gt; let normal users be able to get the topology...
</span><br>
<p>Under linux, hypercalls are restricted to users who can open
<br>
/dev/xen/privcmd, and issue ioctl()s.  At the moment, this is certainly
<br>
restricted to root users only.
<br>
<p>This is because toolstacks (who are currently the only non-debug users
<br>
of hypercalls in dom0 I am aware of) really do have to be root to
<br>
function correctly.
<br>
<p>Having said that, there is an argument to be made for a relaxation of
<br>
the requirements for read-only hypercalls.  Either way, that would be a
<br>
change of the privcmd driver.  hwloc would work fine either way, as
<br>
libxenctrl does its checking based on whether it can open
<br>
/dev/xen/privcmd, rather than whether it is root or not.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Previous message:</strong> <a href="3993.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3992.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>Reply:</strong> <a href="3995.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
