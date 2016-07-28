<?
$subject_val = "Re: [hwloc-devel] perl bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 11:09:18 2011" -->
<!-- isoreceived="20110121160918" -->
<!-- sent="Fri, 21 Jan 2011 17:09:12 +0100" -->
<!-- isosent="20110121160912" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] perl bindings" -->
<!-- id="20110121160912.GM5549_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1111686048.276974.1295552104766.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] perl bindings<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 11:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1874.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1872.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.1rc4r3121)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1876.php">Bernd Kallies: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Reply:</strong> <a href="1876.php">Bernd Kallies: "Re: [hwloc-devel] perl bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernd Kallies, le Thu 20 Jan 2011 20:35:04 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Thu, 2011-01-20 at 20:22 +0100, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Bernd Kallies, le Thu 20 Jan 2011 20:13:03 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The only thing I was wondering about are these OO method names, which I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; had to invent them myself. If there is some need to synchronize these
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with the python binding, we may agree about them. Backwards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compatibility of the Perl binding is not a real problem, since there may
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be many aliases for a function in the base XS code.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you perhaps list those you have defined already, if any?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Topology.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Topology.pod</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Obj.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Obj.pod</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Cpuset.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Cpuset.pod</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Bitmap.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Bitmap.pod</a>
</span><br>
<p>Well, I meant the ones for which you had to invent a name. These are
<br>
mostly the same as the C interface, hwloc_ prefix stripped. Are there
<br>
names that don't exactly map to a C function? I see there is a &quot;not in
<br>
hwloc&quot; section, I guess it is supposed to contain them all?
<br>
<p><span class="quotelev1">&gt; HWLOC_XSAPI_VERSION         always returns a version number (may be 0)
</span><br>
<p>Ok
<br>
<p><span class="quotelev1">&gt; HWLOC_HAS_XML               flag if hwloc was built with XML support
</span><br>
<p>Why do you need it? At worse the xml functions would fail.
<br>
<p><span class="quotelev1">&gt; hwloc_compare_objects       compares two Sys::Hwloc::Obj by C pointer value
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; hwloc_bitmap_ids            returns bitmap bits as list of decimal numbers
</span><br>
<p>That seems perl-specific indeed.
<br>
<p><span class="quotelev1">&gt; hwloc_bitmap_list_sscanf    parses  a list format cpuset ASCII string
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_list_sprintf   outputs a list format cpuset ASCII string
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_includes       reverse of hwloc_bitmap_isincluded
</span><br>
<p>I guess these could be added to the C API?
<br>
<p><span class="quotelev1">&gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc.pm">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc.pm</a>
</span><br>
<p>Ok, that perl I can read :)
<br>
<p>I'd say you shouldn't care about providing all the hwloc_cpuset_*
<br>
functions, since these names are deprecated in the C API.
<br>
<p><span class="quotelev1">&gt;        $mapa = hwloc_bitmap_dup($map)
</span><br>
<p>Same issue as in Python: when a const bitmap is returned by a hwloc
<br>
function, the user shouldn't be able to modify it.
<br>
<p><span class="quotelev1">&gt;       hwloc_bitmap_from_ulong($set,$mask)
</span><br>
<span class="quotelev1">&gt;       hwloc_bitmap_from_ith_ulong($set,$i,$mask)
</span><br>
<span class="quotelev1">&gt;       hwloc_bitmap_set_ith_ulong($set,$i,$mask)
</span><br>
<span class="quotelev1">&gt;       $val  = hwloc_bitmap_to_ulong($set)
</span><br>
<span class="quotelev1">&gt;       $val  = hwloc_bitmap_to_ith_ulong($set,$i)
</span><br>
<p>Same issue as in Python (but with different answer): AIUI, perl doesn't
<br>
have unbound integers, so has a limitation, but is possibly not exactly
<br>
like C longs. I guess these should just use the regular perl integer
<br>
name and size?
<br>
<p>About area membind, same remark as for python: if someone uses perl to
<br>
drive C-library computations, it may be useful, but else it probably
<br>
doesn't make sense in pure perl.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1874.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1872.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.1rc4r3121)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1876.php">Bernd Kallies: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Reply:</strong> <a href="1876.php">Bernd Kallies: "Re: [hwloc-devel] perl bindings"</a>
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
