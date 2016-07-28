<?
$subject_val = "[hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 30 19:31:29 2013" -->
<!-- isoreceived="20131231003129" -->
<!-- sent="Tue, 31 Dec 2013 00:31:20 +0000" -->
<!-- isosent="20131231003120" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52C21058.3060000_at_citrix.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc with Xen system support - some initial code<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-30 19:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="3999.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>After much hacking I have some code, which I present here for
<br>
comment/query/criticism, with some ramblings and queries of my own.
<br>
<p>Code can be found here:
<br>
<a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=commitdiff;h=6c37406dae887386205124ab9151b9be5812b56a">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=commitdiff;h=6c37406dae887386205124ab9151b9be5812b56a</a>
<br>
<p>For anyone wishing to try it out for themselves, there is an extra patch
<br>
required for libxc, available here:
<br>
<a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=commitdiff;h=3585994405b6a73c137309dd4be91f48c71e4903">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=commitdiff;h=3585994405b6a73c137309dd4be91f48c71e4903</a>
<br>
(Basically, the existing xc_{topology,numa}info() library calls were
<br>
practically useless, and required the library user to perform the
<br>
hypercall bounce buffering themselves, without access to half the bounce
<br>
infrastructure.  I have rewritten them in such a way that libxc does all
<br>
the appropriate bounce buffering.)
<br>
<p>First of all, I have hacked at the m4, by copying surrounding code, and
<br>
it now appears to work sanely for me, including --{en,dis}able-xen
<br>
configure options.  I have no idea whether what I have done is appropriate.
<br>
<p>Xen support itself is only usable if explicitly requested, via the
<br>
presence of the HWLOC_XEN environment variable.  The Xen backend has a
<br>
higher priority than native, and excludes all other CPU topology
<br>
gathering modules, as the native OS will see the fake topology, and the
<br>
x86 module has no idea which pcpus its vcpus are currently executing on,
<br>
so can't map cpuid results back to reality.
<br>
<p><p>As for developing the backend, the documentation was a little lacking. 
<br>
It would have vastly helped had there been a sentence describing how one
<br>
is expected to build the topology.  What I realised, after far too long
<br>
staring at the spaghetti code in other backends, was that
<br>
hwloc_insert_object_by_cpuset() appears to be my friend, and
<br>
subsequently made the process very simple.
<br>
<p>At the moment, topology-xen appears capable of constructing the PUs,
<br>
cores, sockets and numa nodes.  I have a stack of queries and bugfixes
<br>
against Xen which I shall bring up on xen-devel in due course.  Chief
<br>
among them is that there the way Xen currently signals an offline PU's
<br>
is to trash its location information in the system topology.  This means
<br>
that I can identify a specific PU as being offline, but can only infer
<br>
its position in the topology as I happen to know Xen writes the records
<br>
sequentially.  Another is that Xen enumerates the cores per-socket,
<br>
rather than on an absolute numbering scheme.  There is a gross hack to
<br>
&quot;fix&quot; this in hwloc_get_xen_info() but is only valid for homogeneous
<br>
systems.
<br>
<p>Somewhat expectedly, Xen has interface for gathering the cache
<br>
information.  dom0 using the cpuid instruction can gather cache
<br>
information that way, but cant map a particular cpuid call to a specific
<br>
PU.  It would certainly be useful to get, so I have half a mind to add a
<br>
new Xen sysctl hypercall of &quot;please execute cpuid with these parameters
<br>
on that specific cpu and hand me the results&quot;.  That would at least
<br>
provide an ability to get the information.
<br>
<p>Completely expectedly (as this is still an open problem upstream), Xen
<br>
has no ability to work out the NUMA affinity of IO devices.
<br>
<p>Dom0 in Xen is a bit of a strange system.  It has almost
<br>
completely-unrestricted access to all the PCI devices in the system, and
<br>
access to the real ACPI tables and special BIOS areas in low RAM.  Xen
<br>
controls all interrupts, the virtualisation hardware and the serial
<br>
UART; dom0 has the rest.  Dom0 has an explicitly faked up cpu topology
<br>
via cpuid, and a non-contiguous address space for its RAM, yet real
<br>
cache information via cpuid, and a mostly non-faked feature set.
<br>
<p>Most importantly, Xen does not have an AML VM; it can read the static
<br>
ACPI tables, but relies on dom0 to provide any information required by
<br>
executing AML, which includes any _PXM attributes for IO devices.  Xen
<br>
itself has little/no use for the _PXM information as it has no device
<br>
drivers, yet dom0 doesn't have an accurate view of the CPU/RAM topology
<br>
with which to associate the _PXM information.  (It is all quite a mess)
<br>
<p><p>Attached are two (non-io) xml outputs from the most interesting AMD and
<br>
Intel servers I could easily put my hands on from our testing pool.  As
<br>
far as I am aware, the drawn diagrams matches my understanding of how
<br>
the server topology is organised.
<br>
<p>You might notice that the xml is a little thin on details.  One problem
<br>
I have is how to integrate things like the DMI information?  I know for
<br>
certain that the linux component will get the correct DMI information
<br>
(as dom0 gets the real SMBios tables), but it is not in an easy form to
<br>
consume from outside the linux module.  Then comes the question of how
<br>
to use the *BSD DMI information on BSD systems which can use the xen
<br>
component as-is?  One idea would be to have a &quot;native dmi information&quot;
<br>
function pointer which can be optionally implemented, but that would be
<br>
somewhat of an architecture overhaul.  Also I suspect it would require
<br>
access to the native components private data which doesn't appears to
<br>
exist for the duration of Xen's topology gathering.
<br>
<p>One thing I noticed was about allowed_{cpu,node}set.  From what I can
<br>
gather, this is to do with process binding, which is meaningless in the
<br>
context of the Xen system topology.  What is the approved way of setting
<br>
these all to 0?
<br>
<p>A problem I encountered was the difference between cpuset, online_cpuset
<br>
and complete_cpuset.  I can see that online_cpuset is likely to be
<br>
subset of the others, but I cant find a definitive difference between
<br>
the cpuset and complete_cpuset.  Can anyone enlighten me?
<br>
<p>What is the canonical way of stating that a certain PU is offline?  Xen
<br>
doesn't really do offline cpus of its own accord at the moment but does
<br>
have a hypercalls to explicitly online and offline cpus.  In the case
<br>
that one is offline, I suspect my current code will cause the PU to fall
<br>
out of the rest of the topology, rather than stay within it and marked
<br>
differently.
<br>
<p><p>Anyway - I think I should stop rambling.  I would appreciate code
<br>
review/comments on the code itself, particularly with whether I am using
<br>
the API correctly (its all backwards WRT how the docs are written).
<br>
<p>Thanks,
<br>
<p>~Andrew
<br>
<p>

<br><hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4000/Intel-Haswell-SDP.xml">Intel-Haswell-SDP.xml</a>
</ul>
<!-- attachment="Intel-Haswell-SDP.xml" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4000/AMD-Opteron-63xx.xml">AMD-Opteron-63xx.xml</a>
</ul>
<!-- attachment="AMD-Opteron-63xx.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="3999.php">Andrew Cooper: "Re: [hwloc-devel] Creating a topology generation method for Xen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
