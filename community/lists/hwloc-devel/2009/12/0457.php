<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 12:26:46 2009" -->
<!-- isoreceived="20091203172646" -->
<!-- sent="Thu, 03 Dec 2009 18:26:39 +0100" -->
<!-- isosent="20091203172639" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="4B17F4CF.9070802_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD635EFF-773F-4D4C-880B-564B1020A187_at_cisco.com" -->
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
<strong>Date:</strong> 2009-12-03 12:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0456.php">Jeff Squyres: "[hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Jeff Squyres: "[hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I was trying to use hwloc-bind this morning, and I was a bit confused by the syntax.  I see that the help message says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Usage: topobind [options] &lt;location&gt; -- command ...
</span><br>
<span class="quotelev1">&gt;  &lt;location&gt; may be a space-separated list of cpusets or objects
</span><br>
<span class="quotelev1">&gt;             as supported by the hwloc-mask utility.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (shouldn't that say hwloc-bind, not topobind?)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Right :)
<br>
<p><span class="quotelev1">&gt; I assume the &lt;string&gt; here in hwloc-mask is the same as the &lt;location&gt; in hwloc-bind.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; 1. Is the index syntax &quot;X,Y[,Z[...]]&quot; supported?  I don't see it on the list, but was curious if it is supported anyway.  E.g., &quot;proc:0,1,4&quot;.
</span><br>
<p>No I don't think it's supported right now.
<br>
<p><span class="quotelev1">&gt;   That would seem useful (slightly shorter than &quot;proc:0.proc:1.proc:4&quot;).  I can file a feature request if it's not already supported.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Actually, it would proc:0 proc:1 proc:4 (space separated).
<br>
hwloc-bind/mask do a logical/cpuset OR of all objects/masks given on the
<br>
command-line.
<br>
<p><span class="quotelev1">&gt; 2. What does it mean to &quot;hwloc-bind core:0 ...&quot;?  (I asked Samuel this in IM as well, but I didn't understand his answer).  *Which* &quot;core 0&quot; does that refer to?  For example, an abbreviated version of my lstopo output is as follows (it's a pre-production EX machine -- I can't share all the details -- I 'x'ed out some of the numerical values):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; System(xxxGB)
</span><br>
<span class="quotelev1">&gt;   Node#0(xxxGB) + Socket#0 + L3(xxxMB)
</span><br>
<span class="quotelev1">&gt;     L2(xxxKB) + L1(xxxKB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;   Node#1(xxxGB) + Socket#2 + L3(xxxMB)
</span><br>
<span class="quotelev1">&gt;     L2(xxxKB) + L1(xxxKB) + Core#0 + P#1
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The processors have unique numbers, but the cores do not.  Is that a bug?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>These are physical/OS indexes, not logical indexes.
<br>
<p>hwloc-bind/mask takes logical indexes, no it has nothing to do with the
<br>
above #N. core:1 means &quot;the second Core object&quot; when you the above
<br>
output from top to bottom.
<br>
<p><span class="quotelev1">&gt; 3. What is the difference between &quot;system&quot; and &quot;machine&quot;?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Machine is a physical machine. System may be be different in case of
<br>
Single System Image like Kerrighed, vSMP, ... (only Kerrighed is
<br>
supported so far).
<br>
<p><span class="quotelev1">&gt; 4. What exactly does &quot;index&quot; refer to -- is it a virtual index (e.g., hwloc's numbering of 0-N) or is it the OS's index?  I thought we used OS index numbering, but #2 confuses me -- if #2 is just a bug, then perhaps this question is moot.  :-)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We use virtual/logical/OS index everywhere, except in the lstopo output
<br>
and in the functions that contain os_index in their prototype.
<br>
<p><span class="quotelev1">&gt; 5. What exactly is a &quot;cpuset string&quot;?  Can some examples be provided?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It's 0 for nothing, ffffffff for 32procs, 1,,,,,,,,1 for the the first
<br>
and the 257th processors. It's a comma separated list of 32bits bitmak.
<br>
<p><span class="quotelev1">&gt; --&gt; Sidenote: I actually find hwloc's use of the word &quot;cpuset&quot; to be quite confusing because it is *NOT* the same as an OS cpuset.
</span><br>
<p>The structure might be a bit different, but it is conceptually the same
<br>
than the OS cpuset. When bit N is set in a hwloc cpuset, it means we are
<br>
talking about the processor whose *OS-index* is N.
<br>
<p><span class="quotelev1">&gt; 6. &quot;several &lt;depth:index&gt; may be concatenated with `.'...&quot;  Does that mean that this is legal:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     core:0.node:2.system:4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, what exactly does it mean when they overlap?  Is it simply the union of those 3 specifications?
</span><br>
<p>It means 5th logical system below 3rd logical node below first core. So
<br>
it means nothing when there are no node objects below cores or no
<br>
systems below nodes.
<br>
<p><span class="quotelev1">&gt; Also, I'm curious -- why was a period chosen as the delimiter instead of a comma?  Is this a Europe-vs-US thing?  (i.e., in the US, we typically use commas for lists -- is it different in Europe?)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We use commas for lists in Europe too. But The above is not a list, it's
<br>
a inclusion. See it as core[0].node[2].system[4] in C language.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0456.php">Jeff Squyres: "[hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Jeff Squyres: "[hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0458.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
