<?
$subject_val = "[hwloc-devel] [RFC] I/O objects in level";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 05:18:05 2011" -->
<!-- isoreceived="20110822091805" -->
<!-- sent="Mon, 22 Aug 2011 11:17:58 +0200" -->
<!-- isosent="20110822091758" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] [RFC] I/O objects in level" -->
<!-- id="4E521EC6.4070808_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] [RFC] I/O objects in level<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-22 05:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2299.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] I/O objects in level"</a>
<li><strong>Previous message:</strong> <a href="2297.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.2a1r3636)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2299.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] I/O objects in level"</a>
<li><strong>Maybe reply:</strong> <a href="2299.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] I/O objects in level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Before branching v1.3 and doing RC1, I'd like to discuss how I/O devices
<br>
are stored in the topology. We currently have dedicated pci device and
<br>
OS device lists together with custom helpers (get_next_pcidev/osdev).
<br>
Having helpers to traverse hostbridges or bridges may help in some
<br>
cases, but I don't think we want to add that many custom things.
<br>
<p>So instead I wroted the attached patch which puts I/O devices in levels
<br>
so that they are almost regular objects. The only caveat is that those
<br>
objects are still special so they can't have a real depth, that's why I
<br>
am adding some special depth for them:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_DEPTH_BRIDGE = -3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_DEPTH_PCI_DEVICE = -4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_DEPTH_OS_DEVICE = -5
<br>
There might a way to use normal depth for I/O devices too, but it would
<br>
make the code much more ugly and I am not sure we really need this. And
<br>
we can still change this after RC1 anyway.
<br>
<p>Pros:
<br>
* Uniform interface
<br>
&nbsp;&nbsp;+ no need for custom get_next_&lt;type&gt; helpers anymore (I kept them in
<br>
hwloc/helpers.h but they could go away)
<br>
&nbsp;&nbsp;+ helpers such as get_obj_by_type/depth work fine
<br>
&nbsp;&nbsp;+ documentation is more simple, we just need to say that they have
<br>
special depth
<br>
* Easy to extend to other special types without adding new helpers (just
<br>
need to add new special depth for new types
<br>
* Changes in the core are actually small
<br>
<p>Cons:
<br>
* Several internal functions need special care for this new special depths
<br>
* The bridge levels contains objects that may be parent/child of each other
<br>
<p>Opinions ?
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2298/iolevels.patch">iolevels.patch</a>
</ul>
<!-- attachment="iolevels.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2299.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] I/O objects in level"</a>
<li><strong>Previous message:</strong> <a href="2297.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.2a1r3636)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2299.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] I/O objects in level"</a>
<li><strong>Maybe reply:</strong> <a href="2299.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] I/O objects in level"</a>
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
