<?
$subject_val = "[hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 11:50:15 2009" -->
<!-- isoreceived="20091203165015" -->
<!-- sent="Thu, 3 Dec 2009 11:50:09 -0500" -->
<!-- isosent="20091203165009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-bind syntax" -->
<!-- id="AD635EFF-773F-4D4C-880B-564B1020A187_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-bind syntax<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 11:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0455.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was trying to use hwloc-bind this morning, and I was a bit confused by the syntax.  I see that the help message says:
<br>
<p>-----
<br>
Usage: topobind [options] &lt;location&gt; -- command ...
<br>
&nbsp;&lt;location&gt; may be a space-separated list of cpusets or objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as supported by the hwloc-mask utility.
<br>
-----
<br>
<p>(shouldn't that say hwloc-bind, not topobind?)
<br>
<p>I actually think that hwloc-bind might be used more frequently than hwloc-mask (the help message / man page of which doesn't explain at all what this program does!).  So we should put the &lt;location&gt; explanations in the help message / man page for hwloc-bind.
<br>
<p>So looking in the --help message of hwloc-mask, I see the following:
<br>
<p>-----
<br>
&lt;string&gt; may be &lt;depth:index&gt;
<br>
&nbsp;&nbsp;-  &lt;depth&gt; may be system, machine, node, socket, core, proc or a numeric depth
<br>
&nbsp;&nbsp;-  &lt;index&gt; may be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  X	one object with index X
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  X-Y	all objects with index between X and Y
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  X-	all objects with index at least X
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  X:N	N objects starting with index X, possibly wrapping-around the end of the level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  all	all objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  odd	all objects with odd index
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.  even	all objects with even index
<br>
&nbsp;&nbsp;-  several &lt;depth:index&gt; may be concatenated with `.' to select some specific children
<br>
<p>&lt;string&gt; may also be a cpuset string
<br>
-----
<br>
<p>I assume the &lt;string&gt; here in hwloc-mask is the same as the &lt;location&gt; in hwloc-bind.
<br>
<p>Questions:
<br>
<p>1. Is the index syntax &quot;X,Y[,Z[...]]&quot; supported?  I don't see it on the list, but was curious if it is supported anyway.  E.g., &quot;proc:0,1,4&quot;.  That would seem useful (slightly shorter than &quot;proc:0.proc:1.proc:4&quot;).  I can file a feature request if it's not already supported.
<br>
<p>2. What does it mean to &quot;hwloc-bind core:0 ...&quot;?  (I asked Samuel this in IM as well, but I didn't understand his answer).  *Which* &quot;core 0&quot; does that refer to?  For example, an abbreviated version of my lstopo output is as follows (it's a pre-production EX machine -- I can't share all the details -- I 'x'ed out some of the numerical values):
<br>
<p>-----
<br>
System(xxxGB)
<br>
&nbsp;&nbsp;Node#0(xxxGB) + Socket#0 + L3(xxxMB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(xxxKB) + L1(xxxKB) + Core#0 + P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Node#1(xxxGB) + Socket#2 + L3(xxxMB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2(xxxKB) + L1(xxxKB) + Core#0 + P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
-----
<br>
<p>The processors have unique numbers, but the cores do not.  Is that a bug?
<br>
<p>3. What is the difference between &quot;system&quot; and &quot;machine&quot;?
<br>
<p>4. What exactly does &quot;index&quot; refer to -- is it a virtual index (e.g., hwloc's numbering of 0-N) or is it the OS's index?  I thought we used OS index numbering, but #2 confuses me -- if #2 is just a bug, then perhaps this question is moot.  :-)
<br>
<p>5. What exactly is a &quot;cpuset string&quot;?  Can some examples be provided?
<br>
<p>--&gt; Sidenote: I actually find hwloc's use of the word &quot;cpuset&quot; to be quite confusing because it is *NOT* the same as an OS cpuset.  Is there any possibility that we could choose another word for this hwloc concept for v1.0?  If we don't, it seems like we'll continually be explaining this to people who don't read (or forget) the &quot;glossary&quot; section in the docs.
<br>
<p>6. &quot;several &lt;depth:index&gt; may be concatenated with `.'...&quot;  Does that mean that this is legal:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;core:0.node:2.system:4
<br>
<p>If so, what exactly does it mean when they overlap?  Is it simply the union of those 3 specifications?  Also, I'm curious -- why was a period chosen as the delimiter instead of a comma?  Is this a Europe-vs-US thing?  (i.e., in the US, we typically use commas for lists -- is it different in Europe?)
<br>
<p>Note that a comma list delimiter gets a little iffy if #1 becomes supported -- then a comma would be a delimiter for both multiple indexes and depths.  Hrm.
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
<li><strong>Next message:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0455.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
