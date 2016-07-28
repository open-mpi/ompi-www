<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 25 17:03:21 2005" -->
<!-- isoreceived="20050325220321" -->
<!-- sent="Fri, 25 Mar 2005 14:03:06 -0800" -->
<!-- isosent="20050325220306" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="[O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="20050325220306.GD2045_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42446D96.7080904_at_myri.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-25 17:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 25, 2005 at 02:59:18PM -0500, Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; I don't see it that way. First, the implementations of the translation 
</span><br>
<span class="quotelev1">&gt; layers will be done by each MPI implementations.
</span><br>
<p>In which case it's basically the same as doing an ABI. Or did I miss
<br>
something?  Does this somehow save a significant amount of work for
<br>
anyone?
<br>
<p><span class="quotelev2">&gt; &gt;Was there a big fight over the Fortran interface? It nails down the
</span><br>
<span class="quotelev2">&gt; &gt;types because it has to. All the ABI does is make C look like Fortran;
</span><br>
<span class="quotelev2">&gt; &gt;no internals need change in any implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't change internals, you translate them. Let say you use pointers 
</span><br>
<span class="quotelev1">&gt; in your MPI implementation and the common layer specifies integers. In 
</span><br>
<span class="quotelev1">&gt; your translation layer, you translate pointers into integers by putting 
</span><br>
<span class="quotelev1">&gt; them in a table. You have as much work as your internals are far from 
</span><br>
<span class="quotelev1">&gt; the common interface and, hopefully, it will be a midpoint for everybody.
</span><br>
<p>Patrick, if you read what both Jeff and I wrote, I believe it's clear
<br>
we both understand that part, because we've both mentioned that
<br>
particular implementation solution. What I was trying to understand
<br>
was why Jeff thought this was a huge nightmare.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
