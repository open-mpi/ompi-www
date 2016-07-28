<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 25 14:59:23 2005" -->
<!-- isoreceived="20050325195923" -->
<!-- sent="Fri, 25 Mar 2005 14:59:18 -0500" -->
<!-- isosent="20050325195918" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="[O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="42446D96.7080904_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-25 14:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg,
<br>
<p>Greg Lindahl wrote:
<br>
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
<p>I don't see it that way. First, the implementations of the translation 
<br>
layers will be done by each MPI implementations. MorphMPI (no offense 
<br>
Jeff but we got to choose a somewhat cooler name) just define the common 
<br>
interface, nothing more. If the common layer does not change, the 
<br>
translation does not have to change unless something in the  side of the 
<br>
MPI implementation changes, and its maintainer should then keep its 
<br>
local translation layer up to date.
<br>
<p><span class="quotelev1">&gt; Was there a big fight over the Fortran interface? It nails down the
</span><br>
<span class="quotelev1">&gt; types because it has to. All the ABI does is make C look like Fortran;
</span><br>
<span class="quotelev1">&gt; no internals need change in any implementation.
</span><br>
<p>You don't change internals, you translate them. Let say you use pointers 
<br>
in your MPI implementation and the common layer specifies integers. In 
<br>
your translation layer, you translate pointers into integers by putting 
<br>
them in a table. You have as much work as your internals are far from 
<br>
the common interface and, hopefully, it will be a midpoint for everybody.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
