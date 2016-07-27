<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 03:25:58 2014" -->
<!-- isoreceived="20140101082558" -->
<!-- sent="Wed, 01 Jan 2014 09:25:53 +0100" -->
<!-- isosent="20140101082553" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52C3D111.3010803_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C21058.3060000_at_citrix.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 03:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/12/4000.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/12/4000.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/12/2013 01:31, Andrew Cooper a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After much hacking I have some code, which I present here for
</span><br>
<span class="quotelev1">&gt; comment/query/criticism, with some ramblings and queries of my own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Code can be found here:
</span><br>
<span class="quotelev1">&gt; <a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=commitdiff;h=6c37406dae887386205124ab9151b9be5812b56a">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=commitdiff;h=6c37406dae887386205124ab9151b9be5812b56a</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For anyone wishing to try it out for themselves, there is an extra patch
</span><br>
<span class="quotelev1">&gt; required for libxc, available here:
</span><br>
<span class="quotelev1">&gt; <a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=commitdiff;h=3585994405b6a73c137309dd4be91f48c71e4903">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/xen.git;a=commitdiff;h=3585994405b6a73c137309dd4be91f48c71e4903</a>
</span><br>
<span class="quotelev1">&gt; (Basically, the existing xc_{topology,numa}info() library calls were
</span><br>
<span class="quotelev1">&gt; practically useless, and required the library user to perform the
</span><br>
<span class="quotelev1">&gt; hypercall bounce buffering themselves, without access to half the bounce
</span><br>
<span class="quotelev1">&gt; infrastructure.  I have rewritten them in such a way that libxc does all
</span><br>
<span class="quotelev1">&gt; the appropriate bounce buffering.)
</span><br>
<p>Hello,
<br>
<p>Overall, the code looks good to me.
<br>
Maybe the core/socket/node discovery code could be factorized to reduce
<br>
duplication.
<br>
There's a little fix attached to improve error management in instantiate().
<br>
<p><span class="quotelev1">&gt; First of all, I have hacked at the m4, by copying surrounding code, and
</span><br>
<span class="quotelev1">&gt; it now appears to work sanely for me, including --{en,dis}able-xen
</span><br>
<span class="quotelev1">&gt; configure options.  I have no idea whether what I have done is appropriate.
</span><br>
<p>The attach patch should extend your code to also support building the
<br>
xen component as a plugin so we don't enforce the libxen hard dependency
<br>
inside the main hwloc library.
<br>
<p>However, we need to export 2 additional functions (setup_pu_level and
<br>
alloc_obj_cpusets) to plugins first (Xen will be the first plugin-able
<br>
component to do the &quot;core&quot; discovery, that's why these functions were
<br>
not exported earlier). I'll work at this and then we'll remove the
<br>
&quot;HACK&quot; #include from my patch.
<br>
<p><span class="quotelev1">&gt; Xen support itself is only usable if explicitly requested, via the
</span><br>
<span class="quotelev1">&gt; presence of the HWLOC_XEN environment variable.  The Xen backend has a
</span><br>
<span class="quotelev1">&gt; higher priority than native, and excludes all other CPU topology
</span><br>
<span class="quotelev1">&gt; gathering modules, as the native OS will see the fake topology, and the
</span><br>
<span class="quotelev1">&gt; x86 module has no idea which pcpus its vcpus are currently executing on,
</span><br>
<span class="quotelev1">&gt; so can't map cpuid results back to reality.
</span><br>
<p>If that environment variable is the way you want to enable Xen discovery
<br>
in the end, then priority 52 is a good solution. Maybe use 55 instead in
<br>
case we ever have to put something between native and Xen.
<br>
<p>Regarding component flags, the usual way to exclude ALL other components
<br>
if to put ~0 instead of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_DISC_COMPONENT_TYPE_CPU | HWLOC_DISC_COMPONENT_TYPE_GLOBAL
<br>
<p><span class="quotelev1">&gt; As for developing the backend, the documentation was a little lacking. 
</span><br>
<span class="quotelev1">&gt; It would have vastly helped had there been a sentence describing how one
</span><br>
<span class="quotelev1">&gt; is expected to build the topology.  What I realised, after far too long
</span><br>
<span class="quotelev1">&gt; staring at the spaghetti code in other backends, was that
</span><br>
<span class="quotelev1">&gt; hwloc_insert_object_by_cpuset() appears to be my friend, and
</span><br>
<span class="quotelev1">&gt; subsequently made the process very simple.
</span><br>
<p>Yes sorry, there are very very few people that develop new backends so
<br>
the documentation doesn't really cover these internal details. The only
<br>
doc about these is basically comments in hwloc/plugins.h
<br>
<p>We should also point to a trivial backend as an example that is easy to
<br>
read (certainly not Linux which is horrible because it can use info from
<br>
sysfs, /proc/cpuinfo, device-tree, etc.).
<br>
<p><span class="quotelev1">&gt; At the moment, topology-xen appears capable of constructing the PUs,
</span><br>
<span class="quotelev1">&gt; cores, sockets and numa nodes.  I have a stack of queries and bugfixes
</span><br>
<span class="quotelev1">&gt; against Xen which I shall bring up on xen-devel in due course.
</span><br>
<p>Crazy question: what if you put hwloc in the hypervisor and just pass
<br>
the XML output from the hypervisor to the guest instead of passing all
<br>
these socket/node/core information? T
<br>
<p><p><span class="quotelev1">&gt; Chief
</span><br>
<span class="quotelev1">&gt; among them is that there the way Xen currently signals an offline PU's
</span><br>
<span class="quotelev1">&gt; is to trash its location information in the system topology.  This means
</span><br>
<span class="quotelev1">&gt; that I can identify a specific PU as being offline, but can only infer
</span><br>
<span class="quotelev1">&gt; its position in the topology as I happen to know Xen writes the records
</span><br>
<span class="quotelev1">&gt; sequentially.
</span><br>
<p>I think this goes in the &quot;complete_cpuset&quot;. See below.
<br>
<p><span class="quotelev1">&gt; You might notice that the xml is a little thin on details.  One problem
</span><br>
<span class="quotelev1">&gt; I have is how to integrate things like the DMI information?  I know for
</span><br>
<span class="quotelev1">&gt; certain that the linux component will get the correct DMI information
</span><br>
<span class="quotelev1">&gt; (as dom0 gets the real SMBios tables), but it is not in an easy form to
</span><br>
<span class="quotelev1">&gt; consume from outside the linux module.  Then comes the question of how
</span><br>
<span class="quotelev1">&gt; to use the *BSD DMI information on BSD systems which can use the xen
</span><br>
<span class="quotelev1">&gt; component as-is?  One idea would be to have a &quot;native dmi information&quot;
</span><br>
<span class="quotelev1">&gt; function pointer which can be optionally implemented, but that would be
</span><br>
<span class="quotelev1">&gt; somewhat of an architecture overhaul.
</span><br>
<p>DMI info isn't widely used anyway. Some people may use them to define
<br>
some quirks for some machines but I don't think it's critical to have it
<br>
in Xen too.
<br>
<p><span class="quotelev1">&gt;   Also I suspect it would require
</span><br>
<span class="quotelev1">&gt; access to the native components private data which doesn't appears to
</span><br>
<span class="quotelev1">&gt; exist for the duration of Xen's topology gathering.
</span><br>
<p>It exists. All backends are instantiated at once, then all the discovery
<br>
callbacks are called, then all backends info is destroyed. You're not
<br>
really supposed to access other backend private data, but we already had
<br>
to do it in the linuxpci component anyway. So we had to define a proper
<br>
solution if we go there.
<br>
<p><span class="quotelev1">&gt; One thing I noticed was about allowed_{cpu,node}set.  From what I can
</span><br>
<span class="quotelev1">&gt; gather, this is to do with process binding, which is meaningless in the
</span><br>
<span class="quotelev1">&gt; context of the Xen system topology.  What is the approved way of setting
</span><br>
<span class="quotelev1">&gt; these all to 0?
</span><br>
<p>This is related to PUs/nodes that are restricted by Linux control groups.
<br>
If you just ignore these allowed fields, they should be set to equal to
<br>
the main cpuset/nodeset.
<br>
<p><span class="quotelev1">&gt; A problem I encountered was the difference between cpuset, online_cpuset
</span><br>
<span class="quotelev1">&gt; and complete_cpuset.  I can see that online_cpuset is likely to be
</span><br>
<span class="quotelev1">&gt; subset of the others, but I cant find a definitive difference between
</span><br>
<span class="quotelev1">&gt; the cpuset and complete_cpuset.  Can anyone enlighten me?
</span><br>
<p>These fields are also explained in hwloc.h.
<br>
<p>cpuset =&gt; contains PU that exist, we know where they are, they are
<br>
online, they are allowed (allowed with respect of cgroups on Linux)
<br>
online =&gt; exist, we know where they are, they are online, they may be
<br>
DISALLOWED
<br>
allowed =&gt; exist, we know where they are, may be OFFLINE
<br>
complete =&gt; exist, may be DISALLOWED/OFFLINE, we don't know where all of
<br>
them are
<br>
<p><span class="quotelev1">&gt; What is the canonical way of stating that a certain PU is offline?  Xen
</span><br>
<span class="quotelev1">&gt; doesn't really do offline cpus of its own accord at the moment but does
</span><br>
<span class="quotelev1">&gt; have a hypercalls to explicitly online and offline cpus.  In the case
</span><br>
<span class="quotelev1">&gt; that one is offline, I suspect my current code will cause the PU to fall
</span><br>
<span class="quotelev1">&gt; out of the rest of the topology, rather than stay within it and marked
</span><br>
<span class="quotelev1">&gt; differently.
</span><br>
<p>What we do in topology-linux.c is we clear the corresponding bit from
<br>
the top-level online_cpuset hwloc_get_root_obj(topology)-&gt;cpuset
<br>
Then the core will propagate that everywhere at the end of the discovery.
<br>
<p>Thanks for all your work and happy new year !
<br>
<p>Brice
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4001/xen-plugin-draft.diff">xen-plugin-draft.diff</a>
</ul>
<!-- attachment="xen-plugin-draft.diff" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4001/xen-instantiate-failure.diff">xen-instantiate-failure.diff</a>
</ul>
<!-- attachment="xen-instantiate-failure.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/12/4000.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/12/4000.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
