<?
$subject_val = "Re: [hwloc-devel] Creating a topology generation method for Xen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 18:26:07 2013" -->
<!-- isoreceived="20131226232607" -->
<!-- sent="Thu, 26 Dec 2013 23:25:54 +0000" -->
<!-- isosent="20131226232554" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Creating a topology generation method for Xen" -->
<!-- id="52BCBB02.4000609_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52BCB33F.4020309_at_inria.fr" -->
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
<strong>Date:</strong> 2013-12-26 18:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4000.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26/12/2013 22:52, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; How would you like the user to switch from the fake/guest topology to
</span><br>
<span class="quotelev1">&gt; the real/host topology in practice? Most applications may still want
</span><br>
<span class="quotelev1">&gt; fake/guest topos (so that binding works etc) while admins and only some
</span><br>
<span class="quotelev1">&gt; (advanced?) users will want the real/host topology.
</span><br>
<span class="quotelev1">&gt; We can easily make Xen lower priority by default and use environment
</span><br>
<span class="quotelev1">&gt; variables to raise/enable Xen manually. But I am not sure that's a
</span><br>
<span class="quotelev1">&gt; convenient solution for the end user.
</span><br>
<span class="quotelev1">&gt; If we add --enable-xen, you'd want to have two hwloc installations, a
</span><br>
<span class="quotelev1">&gt; normal one and a xen-enabled one?
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I was hoping to put off that question.
<br>
<p>There is an interesting development in progress at the moment to give a
<br>
VM some real topology information, based on where its vcpus are actually
<br>
pinned.  At the moment by default, a vcpu is eligible to be scheduled on
<br>
any pcpu, and the memory is deliberately striped across all numa nodes
<br>
so the performance is equally wherever the vcpu is scheduled.
<br>
<p>This was fine 10 years ago, but is a large performance penalty these
<br>
days, which is why there is a lot of work going on to rectify the
<br>
situation.  As a result, I can foresee a proper usecase for the hwloc
<br>
binding using the VM-presented topology.
<br>
<p>In hindsight, an --enable-xen option is probably silly, as I
<br>
(personally) would specifically not want two builds of hwloc in dom0.
<br>
<p>Having said that, having a low priority and some environmental tweak is
<br>
somewhat inconvenient.
<br>
<p>At the end of the day, the system level topology is almost certainly
<br>
going to be a read-only source of information.  Therefore, it make most
<br>
sense for a host administrator to go out of their way when looking at
<br>
the system topology, rather than attempting to tune things inside the
<br>
dom0 fake topology.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4000.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="3998.php">Samuel Thibault: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Brice Goglin: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
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
