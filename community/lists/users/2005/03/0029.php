<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 24 20:35:01 2005" -->
<!-- isoreceived="20050325013501" -->
<!-- sent="Thu, 24 Mar 2005 17:34:48 -0800" -->
<!-- isosent="20050325013448" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="[O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="20050325013448.GB4459_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c3cefb95ef1f538ef67440eea262a41e_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-03-24 20:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0030.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Jeff Squyres: "[O-MPI users] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0028.php">Jeff Squyres: "[O-MPI users] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0030.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0030.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Create a new software project (preferably open source, preferably with 
</span><br>
<span class="quotelev1">&gt; an BSD-like license so that ISV's can incorporate this software into 
</span><br>
<span class="quotelev1">&gt; their products) that provides a compatibility layer for all the 
</span><br>
<span class="quotelev1">&gt; different MPI implementations out there.  Let's call it MorphMPI.
</span><br>
<p>Jeff,
<br>
<p>A similar idea was actually written up by Bill Gropp and was mentioned
<br>
by him 5 weeks ago on the beowulf list. Quoth he:
<br>
<p>| I wrote a paper that appeared in the EuroPVMMPI'02 meeting that discusses 
<br>
| the issues of a common ABI.  The paper is &quot;Building Library Components That 
<br>
| Can Use Any MPI Implementation&quot; and is available as 
<br>
| <a href="http://www-unix.mcs.anl.gov/~gropp/bib/papers/2002/gmpishort.pdf">http://www-unix.mcs.anl.gov/~gropp/bib/papers/2002/gmpishort.pdf</a> .
<br>
<p>I think this overall idea falls short of the benefit of an ABI for a
<br>
couple of reasons. The first is that it's unlikely to get wide
<br>
distribution if it doesn't come with MPI implementations. The second
<br>
is that it's harder to maintain &quot;out of tree&quot;; the minute that an MPI
<br>
implementation changes something, MorphMPI is going to be broken.
<br>
<p>You keep on coming back to this:
<br>
<p><span class="quotelev1">&gt; 2. Cancel the MPI Implementor's Ultimate Prize Fighting Cage Match on 
</span><br>
<span class="quotelev1">&gt; pay-per-view (read: no need for time-consuming, potentially fruitless 
</span><br>
<span class="quotelev1">&gt; attempts to get MPI implementors to agree on anything)
</span><br>
<p>Was there a big fight over the Fortran interface? It nails down the
<br>
types because it has to. All the ABI does is make C look like Fortran;
<br>
no internals need change in any implementation.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0030.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Jeff Squyres: "[O-MPI users] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0028.php">Jeff Squyres: "[O-MPI users] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0030.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0030.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0032.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
