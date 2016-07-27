<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 11:57:16 2011" -->
<!-- isoreceived="20110118165716" -->
<!-- sent="Tue, 18 Jan 2011 10:56:30 -0600" -->
<!-- isosent="20110118165630" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="4D35C63E.10402_at_redhat.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="848DB447-B335-48CE-BF79-F41429140D4C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] python bindings<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 11:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Previous message:</strong> <a href="1829.php">Bernd Kallies: "[hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1828.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1857.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/18/2011 06:47 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are the abstractions anything like Bernd's perl bindings, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://search.cpan.org/~bka/">http://search.cpan.org/~bka/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2011, at 3:02 PM, Guy Streeter wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am currently working to get a public git repository set up so that I can share the work. In the meantime, my first pass at python bindings for hwloc are available from
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://people.redhat.com/streeter/">http://people.redhat.com/streeter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are rpm files and a source tarball there. The tarball has implementations of some of the tests and utils in python.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It assumes hwloc-1.1 and python-2.6 or later. Let me know what you think.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Guy
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am not familiar enough with Perl to examine the source and say if the 
<br>
implementations are similar.
<br>
<p>In my python bindings (like all of python) everything is an object. Anything 
<br>
that requires the topology is a method or property of the topology object. 
<br>
Things that just need a hwloc_obj are methods or properties of the hwloc_obj 
<br>
object. Same for bitmaps.
<br>
<p>It tried to make things easy and obvious. There is an iterator for children of 
<br>
an object, and one for set bits in a bitmap, so you can do
<br>
&nbsp;&nbsp;for child in obj.children:
<br>
or
<br>
&nbsp;&nbsp;for idx in bitmap:
<br>
<p>You can compare bitmaps with the equality operator, you can use the bitwise &amp; 
<br>
and | operators on them as well. A bitmap used in string context will get a 
<br>
string representation.
<br>
<p>I made asprintf instead of snprintf methods because allocating a string buffer 
<br>
to write into doesn't make sense in python. Objects are freed when they go out 
<br>
of context, in cases where that is appropriate.
<br>
<p>There are some python-specific test files in the tests directory, which I 
<br>
tried to comment as examples.
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Previous message:</strong> <a href="1829.php">Bernd Kallies: "[hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1828.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1857.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
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
