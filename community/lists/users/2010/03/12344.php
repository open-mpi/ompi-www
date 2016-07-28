<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 13 10:51:51 2010" -->
<!-- isoreceived="20100313155151" -->
<!-- sent="Sat, 13 Mar 2010 16:54:38 +0100" -->
<!-- isosent="20100313155438" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="87wrxg1akh.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B9A9EC9.8070503_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-13 10:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="12343.php">amjad ali: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12333.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 12 Mar 2010 15:06:33 -0500, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Cole, Jed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have much direct experience with PETSc.
</span><br>
<p>Disclaimer: I've been using PETSc for several years and also work on the
<br>
library itself.
<br>
<p><span class="quotelev1">&gt; I mostly troubleshooted other people's PETSc programs,
</span><br>
<span class="quotelev1">&gt; and observed their performance.
</span><br>
<span class="quotelev1">&gt; What I noticed is:
</span><br>
<span class="quotelev1">&gt; 1) PETSc's learning curve is as steep if not steeper than MPI, and
</span><br>
<p>I think this depends strongly on what you want to do.  Since the library
<br>
is built on top of MPI, it's sort of trivially true since it's
<br>
beneficial for the user to be familiar with collective semantics, and
<br>
perhaps other MPI functionality depending on the level of control that
<br>
they seek.  That said, many PETSc users never call MPI directly.
<br>
<p><span class="quotelev1">&gt; 2) PETSc codes seem to be slower (or have more overhead)
</span><br>
<span class="quotelev1">&gt; than codes written directly in MPI.
</span><br>
<span class="quotelev1">&gt; Jed seems to have a different perception of PETSc, though,
</span><br>
<span class="quotelev1">&gt; and is more enthusiastic about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Admittedly, I don't have any direct comparison
</span><br>
<span class="quotelev1">&gt; (i.e. the same exact code implemented via PETSc and via MPI),
</span><br>
<span class="quotelev1">&gt; to support what I said above.
</span><br>
<p>If you do find such a comparison, we'd like to see it.  We expose a
<br>
limited amount of interfaces that are known to perform/scale poorly,
<br>
because users who are not concerned about scalability ask for them so
<br>
often.  These should be clearly marked, we'll fix the docs if this is
<br>
not the case.
<br>
<p>Note that PETSc's neighbor updates use persistant nonblocking calls by
<br>
default, but you can select alltoallw, one-sided, ready-send,
<br>
synchronous sends, and a couple other options, with and without packing
<br>
(choice at runtime).  If you know of a faster way, we'd like to see it.
<br>
<p>Note that a default build is in debugging mode which activates lots of
<br>
integrity checks, checks for memory corruption, etc., and is usually 2
<br>
or 3 times slower than a production build (--with-debugging=0).
<br>
<p><span class="quotelev1">&gt; OTOH, if you have a clean and good serial code already developed,
</span><br>
<span class="quotelev1">&gt; I think it won't be a big deal to parallelize it directly
</span><br>
<span class="quotelev1">&gt; with MPI, assuming that the core algorithm (your Gauss-Seidel solver)
</span><br>
<span class="quotelev1">&gt; fits the remaining code in a well structured way.
</span><br>
<p>This depends a lot on the structure of the serial code.  Bill Gropp had
<br>
a great quote in the last rce-cast (starts at 38:30, in response to
<br>
Brock Palen's question about what to think about when designing a
<br>
parallel program):
<br>
<p>&nbsp;&nbsp;I think the first thing they should keep in mind is to see whether
<br>
&nbsp;&nbsp;they can succeed without using MPI.  After all, one of the things that
<br>
&nbsp;&nbsp;we try to do with MPI is to encourage the development of libraries.
<br>
&nbsp;&nbsp;All too often we see people who are reinverting &quot;PETSc-light&quot; instead
<br>
&nbsp;&nbsp;of just pulling up the library and using it.  MPI enabled an entire
<br>
&nbsp;&nbsp;parallel ecosystem for scientific software and the first thing you
<br>
&nbsp;&nbsp;should do is see if you've already had someone else do the job for
<br>
&nbsp;&nbsp;you.  I think after that, if you actually have to write the code, then
<br>
&nbsp;&nbsp;you have to confront the top-down versus bottom-up.  And the next
<br>
&nbsp;&nbsp;mistake that people make is they write the individual node code and
<br>
&nbsp;&nbsp;then try to figure out how to glue it together to all of the other
<br>
&nbsp;&nbsp;nodes.  And we really feel that for many applications, what you want
<br>
&nbsp;&nbsp;to do is to start by viewing your application as a global application,
<br>
&nbsp;&nbsp;have global data structures, figure out how you decompose it, and then
<br>
&nbsp;&nbsp;the code to coordinate the communication between them will be pretty
<br>
&nbsp;&nbsp;obvious.  And you can tell the difference between how an application
<br>
&nbsp;&nbsp;was built, from whether it was top-down or bottom-up.
<br>
<p>[...]
<br>
<p>&nbsp;&nbsp;You want to think about how you decompose your data structures, how
<br>
&nbsp;&nbsp;you think about them globally.  Rather than saying, I need to think
<br>
&nbsp;&nbsp;about everything in parallel, so I'll have all these little patches,
<br>
&nbsp;&nbsp;and I'll compute on them, and then figure out how to stitch them
<br>
&nbsp;&nbsp;together.  If you were building a house, you'd start with a set of
<br>
&nbsp;&nbsp;blueprints that give you a picture of what the whole house looks like.
<br>
&nbsp;&nbsp;You wouldn't start with a bunch of tiles and say. &quot;Well I'll put this
<br>
&nbsp;&nbsp;tile down on the ground, and then I'll find a tile to go next to it.&quot;
<br>
&nbsp;&nbsp;But all too many people try to build their parallel programs by
<br>
&nbsp;&nbsp;creating the smallest possible tiles and then trying to have the
<br>
&nbsp;&nbsp;structure of their code emerge from the chaos of all these little
<br>
&nbsp;&nbsp;pieces.  You have to have an organizing principle if you're going to
<br>
&nbsp;&nbsp;survive making your code parallel.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="12343.php">amjad ali: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>In reply to:</strong> <a href="12333.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
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
