<?
$subject_val = "Re: [hwloc-devel] [Xen-devel] Hwloc with Xen host topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 17:03:11 2014" -->
<!-- isoreceived="20140102220311" -->
<!-- sent="Thu, 2 Jan 2014 22:01:30 +0000" -->
<!-- isosent="20140102220130" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [Xen-devel] Hwloc with Xen host topology" -->
<!-- id="52C5E1BA.6070501_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140102215554.GX29132_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [Xen-devel] Hwloc with Xen host topology<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 17:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4009.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/01/14 21:55, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Andrew Cooper, le Thu 02 Jan 2014 21:50:06 +0000, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 02/01/14 21:24, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew Cooper, le Thu 02 Jan 2014 20:26:49 +0000, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cores are numbered per-socket in Xen, while sockets,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; numa nodes and cpus are numbered on an absolute scale.  There is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently a gross hack in my hwloc code which adds (socket_id *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores_per_socket * threads_per_core) onto each core id to make them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similarly numbered on an absolute scale.  This is fine for a homogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system, but not for a hetrogeneous system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, hwloc does not need these physical ids to be unique, it can cope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with duplication and whatnot.  That said, having a coherent interface at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the Xen layer would be a good thing, indeed :)
</span><br>
<span class="quotelev2">&gt;&gt; If I take out the described hack, I am presented with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; * hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * object (Core P#0 cpuset 0x30000003) intersection without inclusion!
</span><br>
<span class="quotelev2">&gt;&gt; * Error occurred in topology.c line 853
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev2">&gt;&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev2">&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which I took to mean &quot;I have done something stupid&quot;.  I looked and saw
</span><br>
<span class="quotelev2">&gt;&gt; that I was attempting to insert a second Core P#0 object with a
</span><br>
<span class="quotelev2">&gt;&gt; different cpuset and decided to renumber the cores so they didn't
</span><br>
<span class="quotelev2">&gt;&gt; overlap in physical ids.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you believe that this should indeed work, then I guess I need to
</span><br>
<span class="quotelev2">&gt;&gt; raise a bug...
</span><br>
<span class="quotelev1">&gt; Well, logical processor physical ids, i.e. what is used for indexing
</span><br>
<span class="quotelev1">&gt; physical cpusets, have to be unique. The core/socket/node IDs don't have
</span><br>
<span class="quotelev1">&gt; to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>Then a bug needs raising.  My hack only changes the Core physical ID as
<br>
far as hwloc is concerned.  The PU physical IDs are unchanged by the
<br>
hack, and already unique as presented by Xen.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4009.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
