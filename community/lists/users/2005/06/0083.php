<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 15:58:53 2005" -->
<!-- isoreceived="20050616205853" -->
<!-- sent="Thu, 16 Jun 2005 15:58:44 -0500" -->
<!-- isosent="20050616205844" -->
<!-- name="Matthew Knepley" -->
<!-- email="knepley_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="y8h1x72auij.fsf_at_harley.mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050616185818.GC27775_at_flying-walenda.ca.sandia.gov" -->
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
<strong>From:</strong> Matthew Knepley (<em>knepley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-16 15:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0084.php">Jonathan Day: "[O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ben Allan &lt;baallan_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; I tried that just now and it doesn't look different. Will check your
</span><br>
<span class="quotelev1">&gt; other mail (which apparently i haven't reached yet in the mail reader).
</span><br>
<span class="quotelev1">&gt; I take that back, apparently -parseable isn't recognized but -parsable
</span><br>
<span class="quotelev1">&gt; is. A :-separated output results. tolerable. :)
</span><br>
<span class="quotelev1">&gt; Kudos to you all, actually. I haven't seen anything this useful
</span><br>
<span class="quotelev2">&gt;&gt;From the mpich team yet. {now matt can correct me...}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My users expect to combine c,c++,fortran,python,java(!),and fortran-variant-x
</span><br>
<span class="quotelev1">&gt; all in the same executable on a diversity of platforms.
</span><br>
<span class="quotelev1">&gt; And when it doesn't work, they don't go to you, they
</span><br>
<span class="quotelev1">&gt; tell me &quot;hey, make it work, my mpi isn't broken -- it
</span><br>
<span class="quotelev1">&gt; runs my vanilla C code all the time.&quot; The real issue is,
</span><br>
<span class="quotelev1">&gt; of course, the utter insanity of history that is the linker.
</span><br>
<span class="quotelev1">&gt; The workaround always involves reverse-engineering the
</span><br>
<span class="quotelev1">&gt; compiler wrappers and assembling the link line details
</span><br>
<span class="quotelev1">&gt; explicitly. Far better that this kind of insanity be
</span><br>
<span class="quotelev1">&gt; testable and the work-arounds picked out by my configure
</span><br>
<span class="quotelev1">&gt; scripts than all the users coming back to me for
</span><br>
<span class="quotelev1">&gt; individual attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The autoconf process, if ompi_info is to be believed,
</span><br>
<span class="quotelev1">&gt; checks a lot of machine specific and compiler specific
</span><br>
<span class="quotelev1">&gt; things to do with alignment, size, type existence, etc
</span><br>
<span class="quotelev1">&gt; and records these assumptions. Throwing a random
</span><br>
<span class="quotelev1">&gt; compiler (or worse, the primitive size-changing fortran switches)
</span><br>
<span class="quotelev1">&gt; into a compiler wrapper's path is just asking for trouble.
</span><br>
<span class="quotelev1">&gt; We need good config info to diagnose these kinds of user idiocy
</span><br>
<span class="quotelev1">&gt; efficiently.
</span><br>
<p>&nbsp;&nbsp;Which is why we NEVER believe anything anyone (or any wrapper) tells us.
<br>
I test every include/type/compile/link/run that is necessary. The goal
<br>
should be, if it passes configure, the code will definitely work. We are
<br>
pretty close in PETSc. You are correct that the MPICH output from 'show'
<br>
is not as structured. I don't care as much since we don't use shell/sed/
<br>
anything invented before 1980, but it is still a nice feature and step forward.
<br>
<p>&nbsp;&nbsp;One other thing. I don't use the wrappers sometimes when I need to verify
<br>
the actual include paths/libraries. I do a lot of code parsing/verifying/generation
<br>
and I need this info to do it for C (yuck, I know).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matt
<br>
<pre>
-- 
&quot;Failure has a thousand explanations. Success doesn't need one&quot; -- Sir Alec Guiness
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0084.php">Jonathan Day: "[O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0082.php">Ben Allan: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0081.php">Ben Allan: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0085.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
