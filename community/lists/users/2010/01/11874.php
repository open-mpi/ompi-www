<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:10:22 2010" -->
<!-- isoreceived="20100125201022" -->
<!-- sent="Mon, 25 Jan 2010 15:10:12 -0500" -->
<!-- isosent="20100125201012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="A01C3973-F6B5-408B-BCD8-674B29C720FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ockiqdaw.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 15:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11875.php">Åke Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2010, at 12:55 PM, Jed Brown wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The short version is that the possibility of static linking really
</span><br>
<span class="quotelev2">&gt; &gt; fouls up the scheme, and we haven't figured out a good way around this
</span><br>
<span class="quotelev2">&gt; &gt; yet.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So pkg-config addresses this with it's Libs.private field and an
</span><br>
<span class="quotelev1">&gt; explicit command-line argument when you want static libs, e.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ pkg-config --libs libavcodec
</span><br>
<span class="quotelev1">&gt;   -lavcodec 
</span><br>
<span class="quotelev1">&gt;   $ pkg-config --libs --static libavcodec
</span><br>
<span class="quotelev1">&gt;   -pthread -lavcodec -lz -lbz2 -lfaac -lfaad -lmp3lame -lopencore-amrnb -lopencore-amrwb -ltheoraenc -ltheoradec -lvorbisenc -lvorbis -logg -lx264 -lm -lxvidcore -ldl -lasound -lavutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no way to simultaneously (a) prevent overlinking shared libs
</span><br>
<span class="quotelev1">&gt; and (b) correctly link static libs without an explicit statement from
</span><br>
<span class="quotelev1">&gt; the user about whether to link *your library* statically or dynamically.
</span><br>
<p>Indeed.  Our wrapper compilers currently explicitly list all 3 libraries (-lmpi -lopen-rte -lopen-pal) because we don't know if those libraries will be static or shared at link time.  If they're shared, then listing -lmpi should be sufficient because its implicit dependencies should be sufficient to pull in the other two (and therefore libopen-rte and libopen-pal can have their own, independent .so version numbers.  yay!).  But if they're static, then libmpi has no implicit dependencies, and you *have* to list all clauses (-lmpi -lopen-rte -lopen-pal).  
<br>
<p>We did not want our wrapper compilers to get in the business of:
<br>
<p>- attempting to divine whether the link will be static or dynamic (e.g., could be as &quot;simple&quot; [read: not really] as parsing argv, but could be as difficult as reading compiler config files).
<br>
<p>- figuring out shared library filenames (e.g., .so, .dylib, .dll, ...etc.).
<br>
<p>Yuck.
<br>
<p><span class="quotelev1">&gt; Unfortunately, pkgconfig doesn't work well with multiple builds of a
</span><br>
<span class="quotelev1">&gt; package, and doesn't know how to link some libs statically and some
</span><br>
<span class="quotelev1">&gt; dynamically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the cited bug report, I just wanted to note that collapsing
</span><br>
<span class="quotelev1">&gt; libopen-rte and libopen-pal (even only in production builds) has the
</span><br>
<span class="quotelev1">&gt; undesirable effect that their ABI cannot change without incrementing the
</span><br>
<span class="quotelev1">&gt; soname of libmpi (i.e. user binaries are coupled just as tightly to
</span><br>
<span class="quotelev1">&gt; these libraries as when they were separate but linked explicitly, so
</span><br>
<span class="quotelev1">&gt; this offers no benefit at all).
</span><br>
<p>Indeed -- this is exactly the reason we ended up leaving libopen-* .so versions at 0:0:0.  
<br>
<p>There's an additional variable -- we had considered collapsing all 3 libraries into libmpi for production builds, but the problem here is that multiple external projects have starting using libopen-rte and libopen-pal independently of libmpi.  Hence, we can't just make those libraries disappear.  :-\  The developers of those external projects don't want a big monolithic library to link against, particularly when they have nothing to do with MPI.
<br>
<p>Yuck.
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
<li><strong>Next message:</strong> <a href="11875.php">Åke Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="11872.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
