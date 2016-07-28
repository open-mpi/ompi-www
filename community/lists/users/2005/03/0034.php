<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 25 17:49:15 2005" -->
<!-- isoreceived="20050325224915" -->
<!-- sent="Fri, 25 Mar 2005 17:49:13 -0500" -->
<!-- isosent="20050325224913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="b4d7d18296574300fd7b71187a80470f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050325220306.GD2045_at_greglaptop.internal.keyresearch.com" -->
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
<strong>Date:</strong> 2005-03-25 17:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0038.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2005, at 5:03 PM, Greg Lindahl wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't see it that way. First, the implementations of the translation
</span><br>
<span class="quotelev2">&gt;&gt; layers will be done by each MPI implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In which case it's basically the same as doing an ABI. Or did I miss
</span><br>
<span class="quotelev1">&gt; something?  Does this somehow save a significant amount of work for
</span><br>
<span class="quotelev1">&gt; anyone?
</span><br>
<p>YES!
<br>
<p>MorphMPI (or, as Patrick suggests, we need a cooler name -- PatrickMPI? 
<br>
;-) ) is the work of 1 grad clever student (or anyone else industrious 
<br>
enough).  Elapsed time: a few months.
<br>
<p>Making even 2 MPI implementations agree on an ABI is an enormous amount 
<br>
of work.  Given that two major MPI implementations take opposite sides 
<br>
on the pointers-vs.integers for MPI handles debate (and I suspect that 
<br>
neither is willing to change), just getting them to agree on one of 
<br>
them will be a major amount of work.  Then changing the internals of 
<br>
one of those MPIs to match the other is another enormous amount of work 
<br>
(death by a million cuts).
<br>
<p>And MPI handles is only one issue.  Consider all the rest of the 
<br>
issues...  Elapsed time: 2 years (that's optimistic).
<br>
<p>Also, as I pointed out in my original alternate proposal, with 
<br>
PatrickMPI, only those who want to use an ABI will use it.  Those who 
<br>
do *not* want an ABI do not have to have it forced upon them.
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
<li><strong>Next message:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0033.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0038.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
