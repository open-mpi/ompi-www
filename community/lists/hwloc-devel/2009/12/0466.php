<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 05:36:30 2009" -->
<!-- isoreceived="20091204103630" -->
<!-- sent="Fri, 04 Dec 2009 11:36:25 +0100" -->
<!-- isosent="20091204103625" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="4B18E629.7030906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B7E468A5-3E09-4BE3-8D17-265A9460B768_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-bind syntax<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 05:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Ashley Pittman: "[hwloc-devel] Disabling X component"</a>
<li><strong>Previous message:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It might be good to safely ignore 0x if it's present, but that's a small feature enhancement that can be done at any time (I filed a future ticket).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It seems to work actually :)
<br>
<p><span class="quotelev2">&gt;&gt; We might want to drop the Linux &quot;cpuset&quot; word and use &quot;cgroup&quot; instead.
</span><br>
<span class="quotelev2">&gt;&gt; Both are supported by Linux, but the latter now contains the former and
</span><br>
<span class="quotelev2">&gt;&gt; more, so people are supposed to use cgroup now. hwloc supports both.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux is likely to be among the most popular target for hwloc -- so can you explain in good words definitions for the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - hwloc cpuset
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Opaque structure describing a set of logical processors. Each hwloc
<br>
object structure contains a cpuset field that describes which logical
<br>
processors are contained in the corresponding physical object. hwloc
<br>
cpusets are used by hwloc binding routines.
<br>
<p><span class="quotelev1">&gt; - Linux cpuset
</span><br>
<span class="quotelev1">&gt; - Linux cgroup
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>See <a href="http://www.mjmwired.net/kernel/Documentation/cgroups.txt">http://www.mjmwired.net/kernel/Documentation/cgroups.txt</a>, and look
<br>
for cpusets in there:
<br>
<p>Control Groups provide a mechanism for aggregating/partitioning sets of
<br>
tasks, and all their future children, into hierarchical groups with
<br>
specialized behaviour.
<br>
[...]
<br>
On their own, the only use for cgroups is for simple job tracking.
<br>
The intention is that other subsystems hook into the generic
<br>
cgroup support to provide new attributes for cgroups, such as
<br>
accounting/limiting the resources which processes in a cgroup can
<br>
access. For example, cpusets allows you to associate a set of CPUs and
<br>
a set of memory nodes with the	tasks in each cgroup.
<br>
<p><p><span class="quotelev1">&gt; Additionally -- the word &quot;father&quot; is used in the docs.  Should we use the gender-neutral &quot;parent&quot; instead?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I am not sure. The object structure contains a father pointer. We use
<br>
parent in the API, but it might refer to different things, like father,
<br>
grandfather, ...
<br>
<p><span class="quotelev2">&gt;&gt; You don't care about starting with system or something else. You can
</span><br>
<span class="quotelev2">&gt;&gt; ignore the system level as you could ignore the socket level between
</span><br>
<span class="quotelev2">&gt;&gt; nodes and cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have 1 system with 2 nodes with 2 sockets each with 2 cores each,
</span><br>
<span class="quotelev2">&gt;&gt; you get:
</span><br>
<span class="quotelev2">&gt;&gt; node:1 core:2 is equivalent to system:0 node:1 socket:2 core:0 and
</span><br>
<span class="quotelev2">&gt;&gt; equivalent to system:0 core:6
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you mean:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   node:1.core:2 == system:0.node:1.socket:2.core:0 == system:0.core:6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; What I meant by my question was -- aren't the 3 diagrams above equivalent to &quot;core:6&quot;? If so, what's the value of the foo.bar.baz notation?
</span><br>
<p>If you have a 96 core machine like we do, the hierarchical notation
<br>
(foo.bar.baz) is really nice. If I want to bind on
<br>
node:2.socket:3.core:4, it's much easier than looking at the topology
<br>
and finding that it's core:70. Using physical or logical indexes doesn't
<br>
change anything here. I agree that we don't do that often in real
<br>
applications, but I actually use that quite a lot for my own debugging :)
<br>
<p>I actually don't see why people would like to use physical numbers in
<br>
such a hierarchical notation since physical socket/core numbers are
<br>
often strange/illogical and nobody remembers them. However, I agree that
<br>
the physical indexes are useful when *not* using a hierarchical
<br>
notation, ie I want to bind on thread OS index #46.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0467.php">Ashley Pittman: "[hwloc-devel] Disabling X component"</a>
<li><strong>Previous message:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
