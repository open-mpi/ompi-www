<?
$subject_val = "Re: [hwloc-devel] hwloc-bind syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 16:03:06 2009" -->
<!-- isoreceived="20091203210306" -->
<!-- sent="Thu, 3 Dec 2009 16:03:00 -0500" -->
<!-- isosent="20091203210300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-bind syntax" -->
<!-- id="E665DA40-C066-4858-B5DE-0AC007F5EB41_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B17F4CF.9070802_at_inria.fr" -->
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
<strong>Date:</strong> 2009-12-03 16:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2009, at 12:26 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; (shouldn't that say hwloc-bind, not topobind?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right :)
</span><br>
<p>Easily fixed -- just done.  :-)
<br>
<p><span class="quotelev2">&gt; &gt;   That would seem useful (slightly shorter than &quot;proc:0.proc:1.proc:4&quot;).  I can file a feature request if it's not already supported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, it would proc:0 proc:1 proc:4 (space separated).
</span><br>
<span class="quotelev1">&gt; hwloc-bind/mask do a logical/cpuset OR of all objects/masks given on the
</span><br>
<span class="quotelev1">&gt; command-line.
</span><br>
<p>Ah -- I see from your explanation below that foo.bar.baz is different than foo bar baz.
<br>
<p>I haven't looked at the argv parsing -- does it just strcmp each of the argv's and look for a recognized prefix, and if so, assume that it is a specification?  If it doesn't find a recognized prefix, it assumes that it's the first argv of the tokens to exec (and therefore stop examining argv)?  FWIW, this is pretty much what mpirun does.
<br>
<p>Is &quot;--&quot; recognized, too?
<br>
<p>(I'm now asking for more detail because I intend to document this stuff properly ;-) )
<br>
<p><span class="quotelev2">&gt; &gt; 2. What does it mean to &quot;hwloc-bind core:0 ...&quot;?  (I asked Samuel this in IM as well, but I didn't understand his answer).  *Which* &quot;core 0&quot; does that refer to?  For example, an abbreviated version of my lstopo output is as follows (it's a pre-production EX machine -- I can't share all the details -- I 'x'ed out some of the numerical values):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; System(xxxGB)
</span><br>
<span class="quotelev2">&gt; &gt;   Node#0(xxxGB) + Socket#0 + L3(xxxMB)
</span><br>
<span class="quotelev2">&gt; &gt;     L2(xxxKB) + L1(xxxKB) + Core#0 + P#0
</span><br>
<span class="quotelev2">&gt; &gt;     ...
</span><br>
<span class="quotelev2">&gt; &gt;   Node#1(xxxGB) + Socket#2 + L3(xxxMB)
</span><br>
<span class="quotelev2">&gt; &gt;     L2(xxxKB) + L1(xxxKB) + Core#0 + P#1
</span><br>
<span class="quotelev2">&gt; &gt;     ...
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The processors have unique numbers, but the cores do not.  Is that a bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are physical/OS indexes, not logical indexes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc-bind/mask takes logical indexes, no it has nothing to do with the
</span><br>
<span class="quotelev1">&gt; above #N. core:1 means &quot;the second Core object&quot; when you the above
</span><br>
<span class="quotelev1">&gt; output from top to bottom.
</span><br>
<p>Hmm.  That's very confusing.
<br>
<p>FWIW: we went round and round (and round and round and round and ...) in deciding whether to use physical/OS indexing or logical indexing in Open MPI.  We finally decided that users only care about logical indexing -- we hid all physical/OS indexing values under the covers.
<br>
<p>Hwloc, obviously, is a bit different.  More below.
<br>
<p><span class="quotelev2">&gt; &gt; 3. What is the difference between &quot;system&quot; and &quot;machine&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Machine is a physical machine. System may be be different in case of
</span><br>
<span class="quotelev1">&gt; Single System Image like Kerrighed, vSMP, ... (only Kerrighed is
</span><br>
<span class="quotelev1">&gt; supported so far).
</span><br>
<p>Do we have good descriptions for each of the scope names that can be put in the docs?  hwloc-mask shows the following names:
<br>
<p>system, machine, node, socket, core, proc[essor]
<br>
<p>Has anyone contacted Penguin and/or XHPC (and/or any other SSI projects) to see if they care about being supported by hwloc?  
<br>
<p>--&gt; This is a good point to support my dynamic SSO plugin idea.  ;-)
<br>
<p><span class="quotelev2">&gt; &gt; 4. What exactly does &quot;index&quot; refer to -- is it a virtual index (e.g., hwloc's numbering of 0-N) or is it the OS's index?  I thought we used OS index numbering, but #2 confuses me -- if #2 is just a bug, then perhaps this question is moot.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use virtual/logical/OS index everywhere, except in the lstopo output
</span><br>
<span class="quotelev1">&gt; and in the functions that contain os_index in their prototype.
</span><br>
<p>Hmm - I can't parse that.  You seem to be equating logical == virtual == OS indexing in that statement, but you distinctly called OS and logical indexing different in text higher up in this reply...
<br>
<p>Regardless, I find this confusing -- I'm quite sure that newbies will also find it confusing.  All of hwloc should default to one form of indexing (regardless of whether it's physical/OS or some form of logical/hwloc-imposed indexing) -- and/or be explicit about which kind of indexing is used in every case.
<br>
<p>To be clear: it's strange to me that you can't use the numbers in the output from lstopo as arguments to hwloc-bind.  I think that this will be quite a common / useful usage pattern: look up your machine's topology with lstopo and then hwloc-bind a command to something that you see in the lstopo output.
<br>
<p>At a minimum, I would think that all the CLI commands should default to the same kind of indexing to prevent confusion.
<br>
<p>Perhaps hwloc CLI tools should be able to show/accept *both* kinds of indexing...?  E.g.:
<br>
<p>&nbsp;&nbsp;lstopo --physical
<br>
&nbsp;&nbsp;lstopo --logical
<br>
<p>&nbsp;&nbsp;hwloc-bind --physical ...
<br>
&nbsp;&nbsp;hwloc-bind --logical ...
<br>
<p><span class="quotelev2">&gt; &gt; 5. What exactly is a &quot;cpuset string&quot;?  Can some examples be provided?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's 0 for nothing, ffffffff for 32procs, 1,,,,,,,,1 for the the first
</span><br>
<span class="quotelev1">&gt; and the 257th processors. It's a comma separated list of 32bits bitmak.
</span><br>
<p>Ah, ok.  To be clear, is it accurate to say that it is one of the following forms:
<br>
<p>- a hex number (without leading &quot;0x&quot; -- would &quot;0x&quot; be ignored if it is supplied?)
<br>
- a comma-delimited set of 32bit bitmasks where MSB 0's do not have to be listed
<br>
<p><span class="quotelev2">&gt; &gt; --&gt; Sidenote: I actually find hwloc's use of the word &quot;cpuset&quot; to be quite confusing because it is *NOT* the same as an OS cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The structure might be a bit different, but it is conceptually the same
</span><br>
<span class="quotelev1">&gt; than the OS cpuset. When bit N is set in a hwloc cpuset, it means we are
</span><br>
<span class="quotelev1">&gt; talking about the processor whose *OS-index* is N.
</span><br>
<p>I guess what I find confusing is that Linux's concept of a &quot;cpuset&quot; is a binding term (e.g., it's the set of cpu's assigned to a process and you can't break out of that set). The hwloc docs glossary says:
<br>
<p><pre>
----
CPU set The set of logical processors logically included in an object (if any). This term does *not* have any relation to an operating system &#147;CPU set.&#148;
-----
So we're specifically stating in the docs that they're different.  And it seems like they *are* different -- yes, they're both &quot;sets of CPUs&quot;, but at least the Linux definition of &quot;cpuset&quot; has additional connotations / meaning (I don't know if other OS's define the term &quot;cpuset&quot;).
&gt; &gt; 6. &quot;several &lt;depth:index&gt; may be concatenated with `.'...&quot;  Does that mean that this is legal:
&gt; &gt;
&gt; &gt;     core:0.node:2.system:4
&gt; &gt;
&gt; &gt; If so, what exactly does it mean when they overlap?  Is it simply the union of those 3 specifications?
&gt; 
&gt; It means 5th logical system below 3rd logical node below first core. So
&gt; it means nothing when there are no node objects below cores or no
&gt; systems below nodes.
Ahh... now I see.  So it's meant to be a logical delve into the topology -- the leftmost item is meant to be the highest item in the topology, and each &quot;.&quot; item must be a child of the item to its left.
Is that correct?
Does it always need to start with system?  If not, can you provide an example that you have to represent with the . notation and could not be represented with non-. notation?
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>In reply to:</strong> <a href="0457.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Reply:</strong> <a href="0459.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
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
