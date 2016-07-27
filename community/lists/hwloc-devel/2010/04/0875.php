<?
$subject_val = "[hwloc-devel] Embedding: is it worth it?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 12:32:41 2010" -->
<!-- isoreceived="20100402163241" -->
<!-- sent="Fri, 2 Apr 2010 12:32:35 -0400" -->
<!-- isosent="20100402163235" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Embedding: is it worth it?" -->
<!-- id="344436BE-86C8-4230-9CAB-A5E6B6954F11_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Embedding: is it worth it?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 12:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0874.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The total amount of time I've spent getting hwloc &quot;embeddable&quot; has been fairly large.  Most recently, I've spent almost the full past 2 days making hwloc embeddable in Open MPI.  I'm wondering -- is it worth it?
<br>
<p>What's fueling this is that over the past 2-3 months, I've gotten emails from various BSD maintainers and from RedHat saying that they *don't* want to use the PLPA/libltdl/whatever embedded in Open MPI -- they want to link against their system-installed version.  Which makes perfect sense from their point of view and quite reasonable of them to ask me to support.  The obvious thing for Open MPI to do is to provide a configure switch that allows selecting to use the embedded version or an external one (the same exact situation will occur with hwloc; this is why I bring it up).
<br>
<p>But to use an external PLPA/libltdl/whatever, OMPI's configure would just call their configure -- no m4-isms would be involved, nor would any symbol shifting occur.  So this would make 2 different code paths through the configure/build system -- one that uses m4 and one that invokes another configure script.
<br>
<p>So I find myself in the uncomfortable position of asking: is all this m4 embedding stuff worth it?
<br>
<p>Bear with me while I think out loud...
<br>
<p>+ = PRO: a good thing
<br>
- = CON: a bad thing
<br>
<p>Embedding gives us two main things:
<br>
<p>1. &quot;Seamless&quot; configure magic
<br>
&nbsp;&nbsp;&nbsp;+ The outer configure can slurp in the relevant m4 from hwloc and call it directly (vs. hwloc's configure repeating a bunch of tests [e.g., look for $CC])
<br>
&nbsp;&nbsp;&nbsp;- It's not entirely seamless; the outer configure MUST to call AC_USE_EXTENSIONS (etc.) very early on, etc.
<br>
&nbsp;&nbsp;&nbsp;- It is a ton of development work (for hwloc) to make this work
<br>
&nbsp;&nbsp;&nbsp;+ 95% of this ton of work is already done
<br>
&nbsp;&nbsp;&nbsp;- ...but it may be a non-trivial amount of work to maintain (this is an unknown quantity)
<br>
<p>2. Symbol shifting (hwloc_foo -&gt; my_prefix_hwloc_foo)
<br>
&nbsp;&nbsp;&nbsp;+ Prevents clashes when a package needs a specific hwloc version (E.g., OMPI needs hwloc vX.Y, system has vA.B)
<br>
&nbsp;&nbsp;&nbsp;+ Allows multiple layers in the same app to link against different hwloc versions
<br>
&nbsp;&nbsp;&nbsp;- Requires upkeep of include/hwloc/rename.h
<br>
<p>I think the symbol shifting is genuinely useful, despite the annoyance of maintaining rename.h.
<br>
<p>I'm questioning how useful the m4 embedding is, particularly if OMPI -- and any other distro-supplied software -- is going to have to support compiling and linking against external hwloc instances.  I'm wondering if I could accomplish everything I need for OMPI by simply invoking $path_to_hwloc/configure with the existing hwloc configure switches:
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-embedding-mode: only build libhwloc_embedded.la (no utils, etc.) and don't install *anything*
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc-symbol-prefix=&lt;foo&gt;: symbol shift all hwloc types and functions
<br>
<p>I almost wrote &quot;public&quot; types and functions -- but if compiler visibility functionality isn't available, then we need to shift all private-but-not-static symbols, too (I added a chunk to rename.h this afternoon for that).
<br>
<p>There probably isn't much I would remove from the configure stuff at this point if we gave up the m4-embedding capability.  But there probably are a few things that I might simplify (i.e., they were done the way they were done specifically to enable embedding the m4 stuff).  So the net &quot;win&quot; of not supporting m4 embedding might be a little simplification and a zero maintenance effort over time -- vs. keeping what is done and maintaining it over time.
<br>
<p>Thoughts?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0874.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
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
