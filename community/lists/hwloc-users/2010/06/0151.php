<?
$subject_val = "Re: [hwloc-users] Getting a graphics view for anon	graphic	system...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 15:41:54 2010" -->
<!-- isoreceived="20100609194154" -->
<!-- sent="Wed, 9 Jun 2010 15:41:49 -0400" -->
<!-- isosent="20100609194149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting a graphics view for anon	graphic	system..." -->
<!-- id="BE552A04-5FD9-4EF0-83E9-B5FD6B2D8307_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1275854640.13649.107.camel_at_iliana.magic" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Getting a graphics view for anon	graphic	system...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 15:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Previous message:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0134.php">Olivier Cessenat: "Re: [hwloc-users] Getting a graphics view for a non	graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Reply:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2010, at 4:03 PM, Olivier Cessenat wrote:
<br>
<p><span class="quotelev1">&gt; What you write is clear to computer scientists, but I failed to figure
</span><br>
<span class="quotelev1">&gt; out what it meant. Sorry, it is clear now !
</span><br>
<p>FWIW, there's a section about &quot;output formats&quot; in the hwloc-ls.1 man page.  It's probably worth adding a sentence in there that the list in the man page applies to the filenames; i.e., that the filename determines the output format.
<br>
<p>Here's a snipit from the man page:
<br>
<p>OUTPUT FORMATS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-      Send a text summary to stdout.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/dev/stdout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send a text summary to stdout.  It is effectively  the  same  as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specifying &quot;-&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the filename ends in &quot;.txt&quot;, lstopo outputs an ASCII art rep-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resentation of the map.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-.txt  If the entire filename is &quot;-.txt&quot;, lstopo outputs the same ASCII
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;art  representation as other &quot;.txt&quot; filenames, but with two exe-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ceptions: 1) the output is sent to stdout, and 2) if colors  are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supported on the terminal, the ASCII art will be colorized.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.fig
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If  the filename ends in &quot;.fig&quot;, lstopo outputs a representation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the map that can be loaded in Xfig.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.pdf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the filename ends in &quot;.pdf&quot; and lstopo was compiled with  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proper  support, lstopo outputs a PDF representation of the map.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.ps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the filename ends in &quot;.ps&quot; and lstopo was compiled  with  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proper  support,  lstopo  outputs a Postscript representation of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the map.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.png
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the filename ends in &quot;.png&quot; and lstopo was compiled with  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proper  support, lstopo outputs a PNG representation of the map.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.svg
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the filename ends in &quot;.svn&quot; and lstopo was compiled with  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proper support, lstopo outputs an SVG representation of the map.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;filename&gt;.xml
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the filename ends in &quot;.xml&quot; and lstopo was compiled with  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proper support, lstopo outputs an XML representation of the map.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It may be reused later, even on  another  machine,  with  lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--xml,   the   HWLOC_XMLFILE   environment   variable,   or  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_set_xml() function.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the output of &quot;lstopo --help&quot; for a specific list of what graphical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output formats are supported in your hwloc installation.
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Previous message:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0134.php">Olivier Cessenat: "Re: [hwloc-users] Getting a graphics view for a non	graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<li><strong>Reply:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
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
