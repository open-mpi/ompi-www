<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 09:18:41 2009" -->
<!-- isoreceived="20091109141841" -->
<!-- sent="Mon, 09 Nov 2009 15:18:11 +0100" -->
<!-- isosent="20091109141811" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4AF824A3.6090200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AF2FBB7.7050009_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 09:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0354.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1329)"</a>
<li><strong>Previous message:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0357.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0357.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0368.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; * Probing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From what I understand, plpa_have_topology_information() tells whether
</span><br>
<span class="quotelev1">&gt; PLPA knows what's in the hardware, while plpa_api_probe() tells whether
</span><br>
<span class="quotelev1">&gt; binding is supported. We could add:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + hwloc_topology_support(hwloc_topology_t topology, unsigned *support)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>/** \brief Flags describing the actual OS support for this topology.
<br>
&nbsp;*
<br>
&nbsp;* Flags are retrieved with hwloc_topology_get_support().
<br>
&nbsp;*/
<br>
enum hwloc_topology_support_flags_e {
<br>
&nbsp;&nbsp;/* \brief Topology discovery is supported. */
<br>
&nbsp;&nbsp;HWLOC_SUPPORT_DISCOVERY = (1&lt;&lt;0),
<br>
&nbsp;&nbsp;/* \brief Binding a process is supported. */
<br>
&nbsp;&nbsp;HWLOC_SUPPORT_SET_PROC_CPUBIND = (1&lt;&lt;1),
<br>
&nbsp;&nbsp;/* \brief Binding a thread is supported. */
<br>
&nbsp;&nbsp;HWLOC_SUPPORT_SET_THREAD_CPUBIND = (1&lt;&lt;2),
<br>
&nbsp;&nbsp;/* \brief Getting the binding of a process is supported. */
<br>
&nbsp;&nbsp;HWLOC_SUPPORT_GET_PROC_CPUBIND = (1&lt;&lt;3),
<br>
&nbsp;&nbsp;/* \brief Getting the binding of a thread is supported. */
<br>
&nbsp;&nbsp;HWLOC_SUPPORT_GET_THREAD_CPUBIND = (1&lt;&lt;4),
<br>
};
<br>
<p>/** \brief Retrieve the OR'ed flags of topology support. */
<br>
extern int hwloc_topology_get_support(hwloc_topology_t __hwloc_restrict topology, unsigned long flags);
<br>
<p><p>I don't think we need SET_CPUBIND since (from what I understand) it
<br>
would be equivalent to SET_PROC_CPUBIND | SET_THREAD_CPUBIND. We'd have
<br>
to keep in mind that 32bits in this flag bitmask is small (we'll likely
<br>
need many other flags in the future, for instance IODEVICE_DISCOVERY,
<br>
SET/GET_MEMBIND, SET/GET_RANGE_MEMBIND).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0354.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1329)"</a>
<li><strong>Previous message:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Brice Goglin: "[hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0357.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0357.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0368.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
