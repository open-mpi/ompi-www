<?
$subject_val = "[OMPI devel] Problem running openmpi on nodes connected via eth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 22:09:06 2015" -->
<!-- isoreceived="20151021020906" -->
<!-- sent="Tue, 20 Oct 2015 22:09:00 -0400" -->
<!-- isosent="20151021020900" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem running openmpi on nodes connected via eth" -->
<!-- id="20151020220900.0ca32830_at_antares" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Problem running openmpi on nodes connected via eth<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 22:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Previous message:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Reply:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>We have a small cluster of 6 identical 48-core nodes for astrophysical
<br>
research. We are struggling on getting openmpi to run efficiently on
<br>
the nodes. The head node is running ubuntu and openmpi-1.6.5 on a local
<br>
disk. All worker nodes are booting from NFS exported root that resides
<br>
on a NAS, also with ubuntu and openmpi 1.6.5. All nodes have Gbit
<br>
ethernets and the NAS is connected to the switch with 4 NICs. The
<br>
motherboard is Supermicro H8QG6, processors are 2.6GHz AMD Opterons
<br>
6344.
<br>
<p>When we run openmpi on the head node, everything works as expected. But
<br>
when we run in on any of the worker nodes, the execution is ~20+ times
<br>
longer, and htop shows that all processes spend the vast majority of
<br>
their time on kernel cycles (red symbols).
<br>
<p>I have been trying to learn about the profilers and MCA optimization
<br>
and such, but it seems to me that a 20-fold hit in performance
<br>
indicates a much more serious problem. For example, it might have to do
<br>
with a buggy BIOS that doesn't report L3 cache correctly, and that
<br>
throws hwloc warnings that I reported in the past. I flashed the BIOS
<br>
to the latest version, we are running the latest kernel, and I tried
<br>
newer, manually compiled hwloc/openmpi to no avail. I am at my wits'
<br>
end on what to try next, and I would thoroughly appreciate any help and
<br>
guidance. Our cluster is idling till I resolve this, and quite a few
<br>
people are tapping on my shoulder impatiently. And yes, I'm an
<br>
astronomer, not a sys admin, so please excuse my ignorance.
<br>
<p>Thanks a bunch,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Previous message:</strong> <a href="18221.php">Gilles Gouaillardet: "Re: [OMPI devel] Issue with OpenMPI 1.8.4 + Xcode 7.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
<li><strong>Reply:</strong> <a href="18223.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running openmpi on nodes connected via eth"</a>
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
