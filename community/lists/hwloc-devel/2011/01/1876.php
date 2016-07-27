<?
$subject_val = "Re: [hwloc-devel] perl bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 12:31:33 2011" -->
<!-- isoreceived="20110121173133" -->
<!-- sent="Fri, 21 Jan 2011 18:31:16 +0100" -->
<!-- isosent="20110121173116" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] perl bindings" -->
<!-- id="1295631076.2218.435.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="20110121160912.GM5549_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 12:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1877.php">Brice Goglin: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Previous message:</strong> <a href="1875.php">Guy Streeter: "[hwloc-devel] git repo for python bindings"</a>
<li><strong>In reply to:</strong> <a href="1873.php">Samuel Thibault: "Re: [hwloc-devel] perl bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1877.php">Brice Goglin: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Reply:</strong> <a href="1877.php">Brice Goglin: "Re: [hwloc-devel] perl bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2011-01-21 at 17:09 +0100, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Bernd Kallies, le Thu 20 Jan 2011 20:35:04 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2011-01-20 at 20:22 +0100, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Bernd Kallies, le Thu 20 Jan 2011 20:13:03 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The only thing I was wondering about are these OO method names, which I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; had to invent them myself. If there is some need to synchronize these
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; with the python binding, we may agree about them. Backwards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; compatibility of the Perl binding is not a real problem, since there may
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; be many aliases for a function in the base XS code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you perhaps list those you have defined already, if any?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; See
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Topology.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Topology.pod</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Obj.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Obj.pod</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Cpuset.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Cpuset.pod</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Bitmap.pod">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc/Bitmap.pod</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I meant the ones for which you had to invent a name. These are
</span><br>
<span class="quotelev1">&gt; mostly the same as the C interface, hwloc_ prefix stripped. Are there
</span><br>
<span class="quotelev1">&gt; names that don't exactly map to a C function? I see there is a &quot;not in
</span><br>
<span class="quotelev1">&gt; hwloc&quot; section, I guess it is supposed to contain them all?
</span><br>
<p>Yes, most of the OO methods are named like the C function with hwloc_ or
<br>
hwloc_topology_ prefixes stripped. Sometimes _get_ was stripped, when it
<br>
sounds better, e.g.
<br>
<p>$-&gt;depth instead of $t-&gt;get_depth
<br>
<p>Sometimes words are reversed, like
<br>
<p>hwloc_obj_type_sprintf($o) but $o-&gt;sprintf_type
<br>
hwloc_obj_sprintf($t,$o)   but $t-&gt;sprintf_obj($o)
<br>
<p>There also exist functions that operate with hwloc_obj_t and have a
<br>
hwloc_topology_t as first argument, but it is unused. So I decided to
<br>
put these functions in the Sys::Hwloc::Topology and in the
<br>
Sys::Hwloc::Obj namespaces, e.g.
<br>
<p>hwloc_obj_is_in_subtree($t,$o1,$o2)
<br>
$t-&gt;obj_is_in_subtree($o1,$o2)
<br>
$o1-&gt;is_in_subtree($o2)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC_XSAPI_VERSION         always returns a version number (may be 0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC_HAS_XML               flag if hwloc was built with XML support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why do you need it? At worse the xml functions would fail.
</span><br>
<p>This is to be able to decide if coded calls of xml functions in a perl
<br>
script should be executed or not. If the C lib was generated without
<br>
xml, then the wrapper does not contain the wrapper functions. So the
<br>
symbol table of a perl script is different. If one has a perl script
<br>
that calls these functions, then it will not byte-compile. The
<br>
HWLOC_HAS_XML constant can be used much like an #ifdef in C to provide
<br>
alternatives for a perl script without having different scripts for
<br>
every variant. It may be nice for C programmers to provide the value of
<br>
the HWLOC_HAVE_XML cpp constant in hwloc.h for the same reason.
<br>
<p><span class="quotelev2">&gt; &gt; hwloc_compare_objects       compares two Sys::Hwloc::Obj by C pointer value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_ids            returns bitmap bits as list of decimal numbers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems perl-specific indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_list_sscanf    parses  a list format cpuset ASCII string
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_list_sprintf   outputs a list format cpuset ASCII string
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_includes       reverse of hwloc_bitmap_isincluded
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess these could be added to the C API?
</span><br>
<p>Brice said that he tries to add the _list_ things in hwloc 1.2.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc.pm">http://search.cpan.org/~bka/Sys-Hwloc-0.10/lib/Sys/Hwloc.pm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, that perl I can read :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd say you shouldn't care about providing all the hwloc_cpuset_*
</span><br>
<span class="quotelev1">&gt; functions, since these names are deprecated in the C API.
</span><br>
<p>Currently the wrapper compiles with hwloc 0.9 .. at least 1.1, and
<br>
generates different version dependent codes from the same source. The
<br>
cpuset API functions are only provided when one compiles the wrapper
<br>
against hwloc 1.0. With 1.1 they are not provided.
<br>
<p><span class="quotelev2">&gt; &gt;        $mapa = hwloc_bitmap_dup($map)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same issue as in Python: when a const bitmap is returned by a hwloc
</span><br>
<span class="quotelev1">&gt; function, the user shouldn't be able to modify it.
</span><br>
<p>Hard to implement. In C this is achieved with prototypes via the C
<br>
compiler. There exists no such pendant in Perl. One would have to work
<br>
with proxy objects that have a readonly attribute, and maintain this.
<br>
<p><span class="quotelev2">&gt; &gt;       hwloc_bitmap_from_ulong($set,$mask)
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_bitmap_from_ith_ulong($set,$i,$mask)
</span><br>
<span class="quotelev2">&gt; &gt;       hwloc_bitmap_set_ith_ulong($set,$i,$mask)
</span><br>
<span class="quotelev2">&gt; &gt;       $val  = hwloc_bitmap_to_ulong($set)
</span><br>
<span class="quotelev2">&gt; &gt;       $val  = hwloc_bitmap_to_ith_ulong($set,$i)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same issue as in Python (but with different answer): AIUI, perl doesn't
</span><br>
<span class="quotelev1">&gt; have unbound integers, so has a limitation, but is possibly not exactly
</span><br>
<span class="quotelev1">&gt; like C longs. I guess these should just use the regular perl integer
</span><br>
<span class="quotelev1">&gt; name and size?
</span><br>
<p>Internally perl handles integers as long or ulong. The problem with
<br>
wrappers is the correct cast between the content of a perl scalar (may
<br>
be a long or ulong or string or double or ...) and the needed C type.
<br>
I'll check what happens when one reaches UINT_MAX and the like.
<br>
<p><span class="quotelev1">&gt; About area membind, same remark as for python: if someone uses perl to
</span><br>
<span class="quotelev1">&gt; drive C-library computations, it may be useful, but else it probably
</span><br>
<span class="quotelev1">&gt; doesn't make sense in pure perl.
</span><br>
<p>Agreed, thatswhy these functions are currently not in the perl wrapper.
<br>
<p><span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1877.php">Brice Goglin: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Previous message:</strong> <a href="1875.php">Guy Streeter: "[hwloc-devel] git repo for python bindings"</a>
<li><strong>In reply to:</strong> <a href="1873.php">Samuel Thibault: "Re: [hwloc-devel] perl bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1877.php">Brice Goglin: "Re: [hwloc-devel] perl bindings"</a>
<li><strong>Reply:</strong> <a href="1877.php">Brice Goglin: "Re: [hwloc-devel] perl bindings"</a>
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
