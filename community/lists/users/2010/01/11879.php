<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 16:14:10 2010" -->
<!-- isoreceived="20100125211410" -->
<!-- sent="Mon, 25 Jan 2010 22:15:52 +0100" -->
<!-- isosent="20100125211552" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="87my01rilz.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A01C3973-F6B5-408B-BCD8-674B29C720FB_at_cisco.com" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 16:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11880.php">Gus Correa: "Re: [OMPI users] Searching the FAQ"</a>
<li><strong>Previous message:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 25 Jan 2010 15:10:12 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Indeed.  Our wrapper compilers currently explicitly list all 3
</span><br>
<span class="quotelev1">&gt; libraries (-lmpi -lopen-rte -lopen-pal) because we don't know if those
</span><br>
<span class="quotelev1">&gt; libraries will be static or shared at link time.
</span><br>
<p>I am suggesting that it is unavoidable for the person doing the linking
<br>
to be explicit about whether they want static or dynamic libs when they
<br>
invoke mpicc.  Consider the pkg-config model where you might write
<br>
<p>&nbsp;&nbsp;gcc -static -o my-app main.o `pkg-config --libs --static openmpi fftw3`
<br>
<p>&nbsp;&nbsp;gcc -o my-app main.o `pkg-config --libs openmpi fftw3`
<br>
<p>In MPI world,
<br>
<p>&nbsp;&nbsp;gcc -static -o my-app main.o `mpicc -showme:link-static` `pkg-config --libs --static fftw3`
<br>
<p>&nbsp;&nbsp;gcc -o my-app main.o `mpicc -showme:link` `pkg-config --libs fftw3`
<br>
<p>seems tolerable.  The trick (as you point out) is to get the option
<br>
processed when the wrapper is being invoked as the compiler instead of
<br>
just for the -showme options.  Possible options are defining an
<br>
OMPI_STATIC environment variable or inspecting argv for --link:static
<br>
(or some such).  This is one many the reasons why wrappers are a
<br>
horrible solution, especially when they are expected to be used in
<br>
nontrivial cases.
<br>
<p>Ideally, the adopted plan could be done in some coordination with MPICH2
<br>
(which lacks a -showme:link analogue) so that it is not so hard to write
<br>
portable build systems.
<br>
<p><span class="quotelev2">&gt; &gt; On the cited bug report, I just wanted to note that collapsing
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte and libopen-pal (even only in production builds) has the
</span><br>
<span class="quotelev2">&gt; &gt; undesirable effect that their ABI cannot change without incrementing
</span><br>
<span class="quotelev2">&gt; &gt; the soname of libmpi (i.e. user binaries are coupled just as tightly
</span><br>
<span class="quotelev2">&gt; &gt; to these libraries as when they were separate but linked explicitly,
</span><br>
<span class="quotelev2">&gt; &gt; so this offers no benefit at all).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed -- this is exactly the reason we ended up leaving libopen-* .so
</span><br>
<span class="quotelev1">&gt; versions at 0:0:0.
</span><br>
<p>But not versioning those libs isn't much of a solution either since it
<br>
becomes possible to get an ABI mismatch at runtime (consider someone who
<br>
uses them independently, or if they are packaged separately as in a
<br>
distribution so that it becomes possible to update these out from
<br>
underneath libmpi).
<br>
<p><span class="quotelev1">&gt; There's an additional variable -- we had considered collapsing all 3
</span><br>
<span class="quotelev1">&gt; libraries into libmpi for production builds,
</span><br>
<p>My point was that this is no solution at all since you have to bump the
<br>
soname any time you change libopen-*.  So even users who NEVER call into
<br>
libopen-* have to relink any time something happens there, despite their
<br>
interface not changing.  And that is exactly the situation if the
<br>
wrappers continue to overlink AND libopen-* became versioned, so at
<br>
least by keeping them separate, you give users the option of not
<br>
overlinking (albeit manually) and the option of using libopen-* without
<br>
libmpi.
<br>
<p><span class="quotelev1">&gt; Yuck.
</span><br>
<p>It's 2010 and we still don't have a standard way to represent link
<br>
dependencies (pkg-config might be the closest thing, but it's bad if you
<br>
have multiple versions of the same library, and the granularity is
<br>
wrong, e.g. if you want to link some exotic lib statically and the
<br>
common ones dynamically).
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11880.php">Gus Correa: "Re: [OMPI users] Searching the FAQ"</a>
<li><strong>Previous message:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11889.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
