<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 25 10:00:20 2005" -->
<!-- isoreceived="20050325150020" -->
<!-- sent="Fri, 25 Mar 2005 10:00:17 -0500" -->
<!-- isosent="20050325150017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="c9e541fe3719adab1fb914a4e23875b1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050325013448.GB4459_at_greglaptop.internal.keyresearch.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-25 10:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0031.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2005, at 8:34 PM, Greg Lindahl wrote:
<br>
<p><span class="quotelev1">&gt; A similar idea was actually written up by Bill Gropp and was mentioned
</span><br>
<span class="quotelev1">&gt; by him 5 weeks ago on the beowulf list. Quoth he:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | I wrote a paper that appeared in the EuroPVMMPI'02 meeting that 
</span><br>
<span class="quotelev1">&gt; discusses
</span><br>
<span class="quotelev1">&gt; | the issues of a common ABI.  The paper is &quot;Building Library 
</span><br>
<span class="quotelev1">&gt; Components That
</span><br>
<span class="quotelev1">&gt; | Can Use Any MPI Implementation&quot; and is available as
</span><br>
<span class="quotelev1">&gt; | <a href="http://www-unix.mcs.anl.gov/~gropp/bib/papers/2002/gmpishort.pdf">http://www-unix.mcs.anl.gov/~gropp/bib/papers/2002/gmpishort.pdf</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this overall idea falls short of the benefit of an ABI for a
</span><br>
<span class="quotelev1">&gt; couple of reasons. The first is that it's unlikely to get wide
</span><br>
<span class="quotelev1">&gt; distribution if it doesn't come with MPI implementations. The second
</span><br>
<span class="quotelev1">&gt; is that it's harder to maintain &quot;out of tree&quot;; the minute that an MPI
</span><br>
<span class="quotelev1">&gt; implementation changes something, MorphMPI is going to be broken.
</span><br>
<p>Yes, I read this paper.  I freely admit that my post was inspired by 
<br>
this paper (and several other factors).  Mea culpa for not citing it 
<br>
(sorry Bill! :-( ).   I'm just widening the scope of the ideas a 
<br>
little, and suggesting that a bright MS student can actually go 
<br>
implement it with *FAR* less work than trying to do an MPI ABI and in a 
<br>
*MUCH* shorter timescale.
<br>
<p>Software dependencies are a fact of life.  But also consider that MPI's 
<br>
don't change their innards frequently (or at all).  If an 
<br>
implementation chooses integers for MPI handles, for example, they'll 
<br>
stay with integers -- they won't suddenly change to pointers between 
<br>
version a.b.c and a.b.(c+1).
<br>
<p>So the perturbation rate is actually quite low; a MorphMPI that relies 
<br>
on MPI handles being integers for a specific MPI implementation (for 
<br>
example) would be relatively stable.
<br>
<p><span class="quotelev2">&gt;&gt; 2. Cancel the MPI Implementor's Ultimate Prize Fighting Cage Match on
</span><br>
<span class="quotelev2">&gt;&gt; pay-per-view (read: no need for time-consuming, potentially fruitless
</span><br>
<span class="quotelev2">&gt;&gt; attempts to get MPI implementors to agree on anything)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was there a big fight over the Fortran interface? It nails down the
</span><br>
<span class="quotelev1">&gt; types because it has to.
</span><br>
<p>I was not involved in MPI-1, so I cannot say.
<br>
<p><span class="quotelev1">&gt; All the ABI does is make C look like Fortran;
</span><br>
<span class="quotelev1">&gt; no internals need change in any implementation.
</span><br>
<p>That is an extremely inaccurate statement.  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0031.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
