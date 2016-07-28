<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 16:55:08 2009" -->
<!-- isoreceived="20091203215508" -->
<!-- sent="Thu, 03 Dec 2009 22:55:02 +0100" -->
<!-- isosent="20091203215502" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="4B1833B6.8020906_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E665DA40-C066-4858-B5DE-0AC007F5EB41_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-03 16:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I haven't looked at the argv parsing -- does it just strcmp each of the argv's and look for a recognized prefix, and if so, assume that it is a specification?  If it doesn't find a recognized prefix, it assumes that it's the first argv of the tokens to exec (and therefore stop examining argv)?  FWIW, this is pretty much what mpirun does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is &quot;--&quot; recognized, too?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, -- is recognized. And a couple days ago I changed the code so that
<br>
the first non-recognized argument is considered as the beginning of the
<br>
exec command line.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 3. What is the difference between &quot;system&quot; and &quot;machine&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Machine is a physical machine. System may be be different in case of
</span><br>
<span class="quotelev2">&gt;&gt; Single System Image like Kerrighed, vSMP, ... (only Kerrighed is
</span><br>
<span class="quotelev2">&gt;&gt; supported so far).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we have good descriptions for each of the scope names that can be put in the docs?
</span><br>
<p>Should be in the hwloc_obj_type enum in hwloc.h
<br>
<p><span class="quotelev1">&gt; hwloc-mask shows the following names:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; system, machine, node, socket, core, proc[essor]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone contacted Penguin and/or XHPC (and/or any other SSI projects) to see if they care about being supported by hwloc?  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Your friends Joshua from Penguin is supposed to contact me back soon and
<br>
we're supposed to talk about hwloc (and OMX).
<br>
<p>I don't think we've had any contact with other SSI projects.
<br>
<p><span class="quotelev2">&gt;&gt; We use virtual/logical/OS index everywhere, except in the lstopo output
</span><br>
<span class="quotelev2">&gt;&gt; and in the functions that contain os_index in their prototype.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm - I can't parse that.  You seem to be equating logical == virtual == OS indexing in that statement, but you distinctly called OS and logical indexing different in text higher up in this reply...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Ah sorry, &quot;OS&quot; wasn't supposed to appear in the above. logical ==
<br>
virtual != OS.
<br>
<p><span class="quotelev1">&gt; Regardless, I find this confusing -- I'm quite sure that newbies will also find it confusing.  All of hwloc should default to one form of indexing (regardless of whether it's physical/OS or some form of logical/hwloc-imposed indexing) -- and/or be explicit about which kind of indexing is used in every case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear: it's strange to me that you can't use the numbers in the output from lstopo as arguments to hwloc-bind.  I think that this will be quite a common / useful usage pattern: look up your machine's topology with lstopo and then hwloc-bind a command to something that you see in the lstopo output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At a minimum, I would think that all the CLI commands should default to the same kind of indexing to prevent confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps hwloc CLI tools should be able to show/accept *both* kinds of indexing...?  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   lstopo --physical
</span><br>
<span class="quotelev1">&gt;   lstopo --logical
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt;   hwloc-bind --physical ...
</span><br>
<span class="quotelev1">&gt;   hwloc-bind --logical ...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Maybe too, yeah.
<br>
<p><span class="quotelev1">&gt; Ah, ok.  To be clear, is it accurate to say that it is one of the following forms:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - a hex number (without leading &quot;0x&quot; -- would &quot;0x&quot; be ignored if it is supplied?)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We never used 0x there.
<br>
<p><span class="quotelev1">&gt; - a comma-delimited set of 32bit bitmasks where MSB 0's do not have to be listed
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>MSB for the whole cpuset, and MSB inside 32bit bitmasks are not needed.
<br>
And if a bitmask is empty, it's not needed either, except if it's the
<br>
last one.
<br>
<p><span class="quotelev1">&gt; I guess what I find confusing is that Linux's concept of a &quot;cpuset&quot; is a binding term (e.g., it's the set of cpu's assigned to a process and you can't break out of that set). The hwloc docs glossary says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; CPU set The set of logical processors logically included in an object (if any). This term does *not* have any relation to an operating system &#147;CPU set.&#148;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we're specifically stating in the docs that they're different.  And it seems like they *are* different -- yes, they're both &quot;sets of CPUs&quot;, but at least the Linux definition of &quot;cpuset&quot; has additional connotations / meaning (I don't know if other OS's define the term &quot;cpuset&quot;).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We might want to drop the Linux &quot;cpuset&quot; word and use &quot;cgroup&quot; instead.
<br>
Both are supported by Linux, but the latter now contains the former and
<br>
more, so people are supposed to use cgroup now. hwloc supports both.
<br>
<p><span class="quotelev1">&gt; Ahh... now I see.  So it's meant to be a logical delve into the topology -- the leftmost item is meant to be the highest item in the topology, and each &quot;.&quot; item must be a child of the item to its left.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, and child or grand-child or grand-grand-...
<br>
<p><span class="quotelev1">&gt; Does it always need to start with system?
</span><br>
<p>You don't care about starting with system or something else. You can
<br>
ignore the system level as you could ignore the socket level between
<br>
nodes and cores.
<br>
<p>If you have 1 system with 2 nodes with 2 sockets each with 2 cores each,
<br>
you get:
<br>
node:1 core:2 is equivalent to system:0 node:1 socket:2 core:0 and
<br>
equivalent to system:0 core:6
<br>
<p>But you cannot be that flexible with OS/physical indexes since multiple
<br>
cores/sockets may have the same index.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0460.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
