<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 20:32:47 2009" -->
<!-- isoreceived="20091204013247" -->
<!-- sent="Thu, 3 Dec 2009 20:32:41 -0500" -->
<!-- isosent="20091204013241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="B7E468A5-3E09-4BE3-8D17-265A9460B768_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1833B6.8020906_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 20:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0461.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2009, at 4:55 PM, Brice Goglin wrote:
<br>
<p>[...snipped all that wasn't relevant to reply to...]
<br>
<p><span class="quotelev2">&gt; &gt; Has anyone contacted Penguin and/or XHPC (and/or any other SSI projects) to see if they care about being supported by hwloc? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friends Joshua from Penguin is supposed to contact me back soon and
</span><br>
<span class="quotelev1">&gt; we're supposed to talk about hwloc (and OMX).
</span><br>
<p>Exxxcellent.
<br>
<p><span class="quotelev1">&gt; I don't think we've had any contact with other SSI projects.
</span><br>
<p>K.
<br>
<p><span class="quotelev2">&gt; &gt; Perhaps hwloc CLI tools should be able to show/accept *both* kinds of indexing...?  E.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   lstopo --physical
</span><br>
<span class="quotelev2">&gt; &gt;   lstopo --logical
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc-bind --physical ...
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc-bind --logical ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe too, yeah.
</span><br>
<p>I'll file a ticket about this.
<br>
<p>I'll file another ticket to make the output of lstopo show values that can be used in the default input of hwloc-bind.
<br>
<p><span class="quotelev2">&gt; &gt; Ah, ok.  To be clear, is it accurate to say that it is one of the following forms:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - a hex number (without leading &quot;0x&quot; -- would &quot;0x&quot; be ignored if it is supplied?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We never used 0x there.
</span><br>
<p>Ok.
<br>
<p>It might be good to safely ignore 0x if it's present, but that's a small feature enhancement that can be done at any time (I filed a future ticket).
<br>
<p><span class="quotelev1">&gt; We might want to drop the Linux &quot;cpuset&quot; word and use &quot;cgroup&quot; instead.
</span><br>
<span class="quotelev1">&gt; Both are supported by Linux, but the latter now contains the former and
</span><br>
<span class="quotelev1">&gt; more, so people are supposed to use cgroup now. hwloc supports both.
</span><br>
<p>Linux is likely to be among the most popular target for hwloc -- so can you explain in good words definitions for the following:
<br>
<p>- hwloc cpuset (or if &quot;cgroup&quot;, if we're renaming it)
<br>
- Linux cpuset
<br>
- Linux cgroup
<br>
<p>(I'm significantly adding to hwloc-bind.1 -- I'll tweak your words a bit and include them as explanation for exactly what we mean by hwloc cpuset/cgroup).
<br>
<p>Additionally -- the word &quot;father&quot; is used in the docs.  Should we use the gender-neutral &quot;parent&quot; instead?
<br>
<p><span class="quotelev2">&gt; &gt; Does it always need to start with system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't care about starting with system or something else. You can
</span><br>
<span class="quotelev1">&gt; ignore the system level as you could ignore the socket level between
</span><br>
<span class="quotelev1">&gt; nodes and cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have 1 system with 2 nodes with 2 sockets each with 2 cores each,
</span><br>
<span class="quotelev1">&gt; you get:
</span><br>
<span class="quotelev1">&gt; node:1 core:2 is equivalent to system:0 node:1 socket:2 core:0 and
</span><br>
<span class="quotelev1">&gt; equivalent to system:0 core:6
</span><br>
<p>Did you mean:
<br>
<p>&nbsp;&nbsp;node:1.core:2 == system:0.node:1.socket:2.core:0 == system:0.core:6
<br>
<p>?
<br>
<p><span class="quotelev1">&gt; But you cannot be that flexible with OS/physical indexes since multiple
</span><br>
<span class="quotelev1">&gt; cores/sockets may have the same index.
</span><br>
<p>What I meant by my question was -- aren't the 3 diagrams above equivalent to &quot;core:6&quot;? If so, what's the value of the foo.bar.baz notation?  If the examples you provided above use hwloc logical numbering, then there's an exact 1-to-1 mapping of all of those -- so why type something longer than &quot;core:6&quot;?
<br>
<p>However, if you use physical/OS numbering, you *have* to use foo.bar.baz notation because some of the numbers are the same (as I showed in my first mail -- where multiple cores had index &quot;0&quot;).  So:
<br>
<p>&nbsp;&nbsp;node:1.core:0 != node:2.core:0
<br>
<p>I think that your point is thatthe foo.bar.baz syntax only have usefulness with physical/OS indexing?  Correct?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0461.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0465.php">Ashley Pittman: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0466.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
