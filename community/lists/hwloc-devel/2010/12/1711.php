<?
$subject_val = "Re: [hwloc-devel] Hwloc perl binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 08:45:49 2010" -->
<!-- isoreceived="20101215134549" -->
<!-- sent="Wed, 15 Dec 2010 14:45:31 +0100" -->
<!-- isosent="20101215134531" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hwloc perl binding" -->
<!-- id="1292420731.2272.54.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D08B55C.1030201_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hwloc perl binding<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 08:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1710.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1710.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-12-15 at 13:32 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 15/12/2010 11:14, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the Perl module Sys::Hwloc is available via CPAN, see
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.04/">http://search.cpan.org/~bka/Sys-Hwloc-0.04/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Comments are welcome.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ciao BK
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not very familiar with Perl packaging, but at least I like the
</span><br>
<span class="quotelev1">&gt; syntax in the perl-lstopo code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this implementation the one that was causing the garbage collector to
</span><br>
<span class="quotelev1">&gt; become very slow on your large machines?
</span><br>
<p>No, it was rewritten completely.
<br>
<p>The first implementation simply casted hwloc_obj pointers to perl
<br>
integers. This was what I posted to the mailing list initially. With
<br>
this it was possible to compare objects by pointer comparison like in C,
<br>
but it was not possible to access hwloc_obj struct members like in C.
<br>
Thatswhy I needed something like hwloc_obj_get_data($obj,$name) to
<br>
access them, which is very ugly.
<br>
<p>The second implementation tried to mimick the whole topology tree as
<br>
tree of hash references. This was completely worse because of the
<br>
garbage collector. This is what you were referring to in your question.
<br>
<p>The CPAN thing is the third implementation, which works with objects and
<br>
accessor methods. It is as fast as the first implementation, and perl
<br>
code looks almost like C code (except that it is not possible now to
<br>
compare the hwloc_obj perl representatives by value). No links between
<br>
the hwloc_obj perl representatives are constructed, so garbage
<br>
collection is not a problem.
<br>
<p>At the end it turns out that this implementation yields something
<br>
similar to a wrapper that is constructed via recent SWIG. One probably
<br>
may use SWIG in the future, when it becomes clear how to handle API
<br>
changes, and how to retain the additional OO-ish things like
<br>
$topology-&gt;load or $obj-&gt;sprintf_cpuset, which I introduced in my
<br>
wrapper for convenience.
<br>
<p>In summary I'm very satisfied with this implementation. There remains
<br>
the question how one should handle structs like hwloc_obj_memory_s and
<br>
the like. In my implementation these are represented by perl hashes.
<br>
SWIG code would map them to perl objects. The difference is:
<br>
my: $obj-&gt;memory-&gt;{total_memory}
<br>
OO: $obj-&gt;memory-&gt;total_memory
<br>
The first variant is uncoupled from the hwloc_obj struct, and allows to
<br>
change values or store additional things in the hash.
<br>
The second variant may allow manipulation of the hwloc_obj struct in the
<br>
memory of the C lib, but does not allow to store additional properties.
<br>
<p>Btw. I noticed that it may be nice to have a hwloc API function to
<br>
retrieve the API version at runtime. Currently there is only the
<br>
constant HWLOC_API_VERSION in hwloc.h, which is relevant at compile
<br>
time, only. Having a function would aid language bindings a lot, when
<br>
they are distributed outside of the hwloc distro. Then one is able to
<br>
check the version of the wrapper against the version of the used
<br>
underlying hwloc lib and croak if they are out of sync.
<br>
<p>In addition I noticed a lot of hwloc API functions that need a topology
<br>
pointer in their parameter list, which is unused in the function. Will
<br>
this become cleaned up in the future?
<br>
<p>Regards BK
<br>
<p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1710.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1710.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
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
