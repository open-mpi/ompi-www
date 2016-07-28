<?
$subject_val = "Re: [hwloc-devel] python bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 14:12:45 2011" -->
<!-- isoreceived="20110120191245" -->
<!-- sent="Thu, 20 Jan 2011 20:12:29 +0100" -->
<!-- isosent="20110120191229" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] python bindings" -->
<!-- id="1295550749.2218.304.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="893580F6-4791-4EF3-8055-0C456046DDB4_at_cisco.com" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 14:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1864.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1862.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1862.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2011-01-20 at 13:08 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 20, 2011, at 12:32 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Apart from these nasty details, I like the interface style, thanks for
</span><br>
<span class="quotelev2">&gt; &gt; the nice contribution ! :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was more curious on whether the hwloc bindings interfaces for perl and python would be similar.  It looks like they will be a bit different.  This is obviously not a problem -- I was merely curious.
</span><br>
<p><span class="quotelev1">&gt;From my (very personal) point of view we speak about wrappers around the
</span><br>
C API. A wrapper should mimick the C API as much as possible in function
<br>
and style, and may optionally provide additional things that are
<br>
specific for the used language.
<br>
<p>For the Perl binding I decided to implement the C API mostly as-is, that
<br>
means I provide functions with the same name and arguments like found in
<br>
the C API. This should aid people that know the C API, and aids me in
<br>
providing the documentation of the wrapper. I simply documented what is
<br>
implemented, and point to the hwloc API docs for details. And, to be
<br>
honest, I always have to take a look into the API docs when I'm coding
<br>
with hwloc in C or in Perl, because I cannot remember these long names.
<br>
It would take twice the time for me if I would need to read two docs to
<br>
achieve similar things in different languages.
<br>
<p>In addition I thought it would be a good idea to provide an
<br>
object-oriented interface, because this is easy to do in Perl XS, and
<br>
because coding is easier and nicer with OO in Perl. Perl objects are
<br>
simple hashes, that are blessed into some namespace. Methods in a
<br>
namespace are simple functions. The connection between an instance of a
<br>
Perl object and the method that operates on its data bases on the same
<br>
namespace of the object instance and the method, and the convention that
<br>
the first argument of the method has to be a pointer to the object
<br>
instance. So I coded the wrapper for the C function in the XS, and if
<br>
the function has a topology pointer as first argument, I simply define
<br>
an alias of the function in the namespace used for topology objects.
<br>
This gives both non-OO and OO variants without additional coding, and
<br>
one is free to invent OO method names by retaining the function name of
<br>
the non-OO API. In other words, hwloc_topoloy_get_depth($t),
<br>
$t-&gt;get_depth and $t-&gt;depth use the same wrapper code.
<br>
<p>The only thing I was wondering about are these OO method names, which I
<br>
had to invent them myself. If there is some need to synchronize these
<br>
with the python binding, we may agree about them. Backwards
<br>
compatibility of the Perl binding is not a real problem, since there may
<br>
be many aliases for a function in the base XS code.
<br>
<p>Regards BK
<br>
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
<li><strong>Next message:</strong> <a href="1864.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1862.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1861.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1862.php">Samuel Thibault: "Re: [hwloc-devel] python bindings"</a>
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
