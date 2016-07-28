<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 13:55:44 2014" -->
<!-- isoreceived="20140101185544" -->
<!-- sent="Wed, 1 Jan 2014 18:55:43 +0000" -->
<!-- isosent="20140101185543" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52C464AF.9020204_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C3D111.3010803_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - some initial code<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 13:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/01/2014 08:25, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Overall, the code looks good to me.
</span><br>
<span class="quotelev1">&gt; Maybe the core/socket/node discovery code could be factorized to reduce
</span><br>
<span class="quotelev1">&gt; duplication.
</span><br>
<p>I will see what I can do. at the time of writing I was more concerned
<br>
with getting it functional.
<br>
<p><span class="quotelev1">&gt; There's a little fix attached to improve error management in instantiate().
</span><br>
<p>I considered that, but hwloc_debug() disappears in a non-debug build
<br>
from what I can tell, so a regular user would just see that they have
<br>
explicitly asked for Xen and it has been skipped over.
<br>
<p>What would be useful would be hwloc_warning()/error() which is
<br>
independent of --{en,dis}able-debug.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First of all, I have hacked at the m4, by copying surrounding code, and
</span><br>
<span class="quotelev2">&gt;&gt; it now appears to work sanely for me, including --{en,dis}able-xen
</span><br>
<span class="quotelev2">&gt;&gt; configure options.  I have no idea whether what I have done is appropriate.
</span><br>
<span class="quotelev1">&gt; The attach patch should extend your code to also support building the
</span><br>
<span class="quotelev1">&gt; xen component as a plugin so we don't enforce the libxen hard dependency
</span><br>
<span class="quotelev1">&gt; inside the main hwloc library.
</span><br>
<p>I was under the impression that the m4 so far would silently drop
<br>
support for Xen if the library was no available and the user didn't
<br>
explicitly --enable-xen, or have I misunderstood something?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we need to export 2 additional functions (setup_pu_level and
</span><br>
<span class="quotelev1">&gt; alloc_obj_cpusets) to plugins first (Xen will be the first plugin-able
</span><br>
<span class="quotelev1">&gt; component to do the &quot;core&quot; discovery, that's why these functions were
</span><br>
<span class="quotelev1">&gt; not exported earlier). I'll work at this and then we'll remove the
</span><br>
<span class="quotelev1">&gt; &quot;HACK&quot; #include from my patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Xen support itself is only usable if explicitly requested, via the
</span><br>
<span class="quotelev2">&gt;&gt; presence of the HWLOC_XEN environment variable.  The Xen backend has a
</span><br>
<span class="quotelev2">&gt;&gt; higher priority than native, and excludes all other CPU topology
</span><br>
<span class="quotelev2">&gt;&gt; gathering modules, as the native OS will see the fake topology, and the
</span><br>
<span class="quotelev2">&gt;&gt; x86 module has no idea which pcpus its vcpus are currently executing on,
</span><br>
<span class="quotelev2">&gt;&gt; so can't map cpuid results back to reality.
</span><br>
<span class="quotelev1">&gt; If that environment variable is the way you want to enable Xen discovery
</span><br>
<span class="quotelev1">&gt; in the end, then priority 52 is a good solution. Maybe use 55 instead in
</span><br>
<span class="quotelev1">&gt; case we ever have to put something between native and Xen.
</span><br>
<p>It was the easiest way I could find to select between the full system
<br>
topology and the dom0 fake topology.  I am open to any better suggestions.
<br>
<p>I shall bump to 55.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding component flags, the usual way to exclude ALL other components
</span><br>
<span class="quotelev1">&gt; if to put ~0 instead of
</span><br>
<span class="quotelev1">&gt;     HWLOC_DISC_COMPONENT_TYPE_CPU | HWLOC_DISC_COMPONENT_TYPE_GLOBAL
</span><br>
<p>I didn't want to exclude PCI devices, as dom0 does have an accurate view
<br>
of them.  (Only at the moment, cant associate them with numa nodes).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for developing the backend, the documentation was a little lacking. 
</span><br>
<span class="quotelev2">&gt;&gt; It would have vastly helped had there been a sentence describing how one
</span><br>
<span class="quotelev2">&gt;&gt; is expected to build the topology.  What I realised, after far too long
</span><br>
<span class="quotelev2">&gt;&gt; staring at the spaghetti code in other backends, was that
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_insert_object_by_cpuset() appears to be my friend, and
</span><br>
<span class="quotelev2">&gt;&gt; subsequently made the process very simple.
</span><br>
<span class="quotelev1">&gt; Yes sorry, there are very very few people that develop new backends so
</span><br>
<span class="quotelev1">&gt; the documentation doesn't really cover these internal details. The only
</span><br>
<span class="quotelev1">&gt; doc about these is basically comments in hwloc/plugins.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should also point to a trivial backend as an example that is easy to
</span><br>
<span class="quotelev1">&gt; read (certainly not Linux which is horrible because it can use info from
</span><br>
<span class="quotelev1">&gt; sysfs, /proc/cpuinfo, device-tree, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, topology-xen appears capable of constructing the PUs,
</span><br>
<span class="quotelev2">&gt;&gt; cores, sockets and numa nodes.  I have a stack of queries and bugfixes
</span><br>
<span class="quotelev2">&gt;&gt; against Xen which I shall bring up on xen-devel in due course.
</span><br>
<span class="quotelev1">&gt; Crazy question: what if you put hwloc in the hypervisor and just pass
</span><br>
<span class="quotelev1">&gt; the XML output from the hypervisor to the guest instead of passing all
</span><br>
<span class="quotelev1">&gt; these socket/node/core information? T
</span><br>
<p>Xen, by design, is tiny (170 KLoc in total, including x86_64 and
<br>
arm32/arm64) leaving as much work as possible to dom0.  Xen has no
<br>
device drivers, no AML vm and certainly no xml library.  Most of its API
<br>
(of which this socket/node/core information is a typical example) are
<br>
designed for consumption by guest kernels as much as guest userspace.
<br>
<p>So sadly, the idea is quite crazy, and would certainly be a no-go as far
<br>
as suggesting it on xen-devel goes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Chief
</span><br>
<span class="quotelev2">&gt;&gt; among them is that there the way Xen currently signals an offline PU's
</span><br>
<span class="quotelev2">&gt;&gt; is to trash its location information in the system topology.  This means
</span><br>
<span class="quotelev2">&gt;&gt; that I can identify a specific PU as being offline, but can only infer
</span><br>
<span class="quotelev2">&gt;&gt; its position in the topology as I happen to know Xen writes the records
</span><br>
<span class="quotelev2">&gt;&gt; sequentially.
</span><br>
<span class="quotelev1">&gt; I think this goes in the &quot;complete_cpuset&quot;. See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might notice that the xml is a little thin on details.  One problem
</span><br>
<span class="quotelev2">&gt;&gt; I have is how to integrate things like the DMI information?  I know for
</span><br>
<span class="quotelev2">&gt;&gt; certain that the linux component will get the correct DMI information
</span><br>
<span class="quotelev2">&gt;&gt; (as dom0 gets the real SMBios tables), but it is not in an easy form to
</span><br>
<span class="quotelev2">&gt;&gt; consume from outside the linux module.  Then comes the question of how
</span><br>
<span class="quotelev2">&gt;&gt; to use the *BSD DMI information on BSD systems which can use the xen
</span><br>
<span class="quotelev2">&gt;&gt; component as-is?  One idea would be to have a &quot;native dmi information&quot;
</span><br>
<span class="quotelev2">&gt;&gt; function pointer which can be optionally implemented, but that would be
</span><br>
<span class="quotelev2">&gt;&gt; somewhat of an architecture overhaul.
</span><br>
<span class="quotelev1">&gt; DMI info isn't widely used anyway. Some people may use them to define
</span><br>
<span class="quotelev1">&gt; some quirks for some machines but I don't think it's critical to have it
</span><br>
<span class="quotelev1">&gt; in Xen too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Also I suspect it would require
</span><br>
<span class="quotelev2">&gt;&gt; access to the native components private data which doesn't appears to
</span><br>
<span class="quotelev2">&gt;&gt; exist for the duration of Xen's topology gathering.
</span><br>
<span class="quotelev1">&gt; It exists. All backends are instantiated at once, then all the discovery
</span><br>
<span class="quotelev1">&gt; callbacks are called, then all backends info is destroyed. You're not
</span><br>
<span class="quotelev1">&gt; really supposed to access other backend private data, but we already had
</span><br>
<span class="quotelev1">&gt; to do it in the linuxpci component anyway. So we had to define a proper
</span><br>
<span class="quotelev1">&gt; solution if we go there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One thing I noticed was about allowed_{cpu,node}set.  From what I can
</span><br>
<span class="quotelev2">&gt;&gt; gather, this is to do with process binding, which is meaningless in the
</span><br>
<span class="quotelev2">&gt;&gt; context of the Xen system topology.  What is the approved way of setting
</span><br>
<span class="quotelev2">&gt;&gt; these all to 0?
</span><br>
<span class="quotelev1">&gt; This is related to PUs/nodes that are restricted by Linux control groups.
</span><br>
<span class="quotelev1">&gt; If you just ignore these allowed fields, they should be set to equal to
</span><br>
<span class="quotelev1">&gt; the main cpuset/nodeset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A problem I encountered was the difference between cpuset, online_cpuset
</span><br>
<span class="quotelev2">&gt;&gt; and complete_cpuset.  I can see that online_cpuset is likely to be
</span><br>
<span class="quotelev2">&gt;&gt; subset of the others, but I cant find a definitive difference between
</span><br>
<span class="quotelev2">&gt;&gt; the cpuset and complete_cpuset.  Can anyone enlighten me?
</span><br>
<span class="quotelev1">&gt; These fields are also explained in hwloc.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpuset =&gt; contains PU that exist, we know where they are, they are
</span><br>
<span class="quotelev1">&gt; online, they are allowed (allowed with respect of cgroups on Linux)
</span><br>
<span class="quotelev1">&gt; online =&gt; exist, we know where they are, they are online, they may be
</span><br>
<span class="quotelev1">&gt; DISALLOWED
</span><br>
<span class="quotelev1">&gt; allowed =&gt; exist, we know where they are, may be OFFLINE
</span><br>
<span class="quotelev1">&gt; complete =&gt; exist, may be DISALLOWED/OFFLINE, we don't know where all of
</span><br>
<span class="quotelev1">&gt; them are
</span><br>
<p>So they are - I clearly missed them when reading the doxygen docs.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the canonical way of stating that a certain PU is offline?  Xen
</span><br>
<span class="quotelev2">&gt;&gt; doesn't really do offline cpus of its own accord at the moment but does
</span><br>
<span class="quotelev2">&gt;&gt; have a hypercalls to explicitly online and offline cpus.  In the case
</span><br>
<span class="quotelev2">&gt;&gt; that one is offline, I suspect my current code will cause the PU to fall
</span><br>
<span class="quotelev2">&gt;&gt; out of the rest of the topology, rather than stay within it and marked
</span><br>
<span class="quotelev2">&gt;&gt; differently.
</span><br>
<span class="quotelev1">&gt; What we do in topology-linux.c is we clear the corresponding bit from
</span><br>
<span class="quotelev1">&gt; the top-level online_cpuset hwloc_get_root_obj(topology)-&gt;cpuset
</span><br>
<span class="quotelev1">&gt; Then the core will propagate that everywhere at the end of the discovery.
</span><br>
<p>Does that mean that hwloc_insert_object_by_cpuset() will work correctly
<br>
inserting an object with a bit set in cpuset which is clear in the root
<br>
online_cpuset, or will I have to explicitly construct each
<br>
sock/node/core object with correct cpuset and online_cpuset information?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all your work and happy new year !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Thanks for all the help, and a happy new year to you too.  I shall try
<br>
some more playing around, especially when trying to get offline cpus
<br>
working correctly.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4001.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
