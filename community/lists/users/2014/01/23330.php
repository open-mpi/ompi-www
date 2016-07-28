<?
$subject_val = "Re: [OMPI users] Regression: Fortran derived types with newer MPI module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 23:23:18 2014" -->
<!-- isoreceived="20140108042318" -->
<!-- sent="Tue, 07 Jan 2014 21:23:12 -0700" -->
<!-- isosent="20140108042312" -->
<!-- name="Jed Brown" -->
<!-- email="jedbrown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression: Fortran derived types with newer MPI module" -->
<!-- id="8761pvje4v.fsf_at_jedbrown.org" -->
<!-- inreplyto="D67B125C-F83F-4ADE-9AB8-6BDF51243286_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regression: Fortran derived types with newer MPI module<br>
<strong>From:</strong> Jed Brown (<em>jedbrown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 23:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>Previous message:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Yes, I can explain what's going on here.  The short version is that a
</span><br>
<span class="quotelev1">&gt; change was made with the intent to provide maximum Fortran code
</span><br>
<span class="quotelev1">&gt; safety, but with a possible backwards compatibility issue.  If this
</span><br>
<span class="quotelev1">&gt; change is causing real problems, we can probably change this, but I'd
</span><br>
<span class="quotelev1">&gt; like a little feedback from the Fortran MPI dev community first.
</span><br>
<p>On page 610, I see text disallowing the explicit interfaces in
<br>
ompi/mpi/fortran/use-mpi-tkr:
<br>
<p>&nbsp;&nbsp;In S2 and S3: Without such extensions, routines with choice buffers should
<br>
&nbsp;&nbsp;be provided with an implicit interface, instead of overloading with a different
<br>
&nbsp;&nbsp;MPI function for each possible buffer type (as mentioned in Section 17.1.11 on
<br>
&nbsp;&nbsp;page 625). Such overloading would also imply restrictions for passing Fortran
<br>
&nbsp;&nbsp;derived types as choice buffer, see also Section 17.1.15 on page 629.
<br>
<p><p>Why did OMPI decide that this (presumably non-normative) text in the
<br>
standard was not worth following?  (Rejecting something in the standard
<br>
indicates stronger convictions than would be independently weighing the
<br>
benefits of each approach.)
<br>
<p><span class="quotelev1">&gt; c) The design of the MPI-2 &quot;mpi&quot; module has multiple flaws that are
</span><br>
<span class="quotelev1">&gt; identified in the MPI-3 text (but were not recognized back in MPI-2.x
</span><br>
<span class="quotelev1">&gt; days).  Here's one: until F2008+addendums, there was no Fortran
</span><br>
<span class="quotelev1">&gt; equivalent of &quot;void *&quot;.  Hence, the mpi module has to overload
</span><br>
<span class="quotelev1">&gt; MPI_Send() and have a prototype *for every possible type and
</span><br>
<span class="quotelev1">&gt; dimension*.
</span><br>
<p>And this is not possible, thus the text saying not to do it.
<br>
<p>I don't call MPI from Fortran, but someone on a Fortran project that I
<br>
watch mentioned that the compiler would complain about such and such a
<br>
use (actually relating to types for MPI_Status in MPI_Recv rather than
<br>
buffer types).  My immediate response was &quot;they can't do that because
<br>
without nonstandard or post-F08 extensions (or exposing the user to
<br>
c_loc), the type system cannot express those functions and thus you
<br>
cannot have explicit interfaces&quot;.  But then I looked at latest OMPI and
<br>
indeed, it was enumerating types, thus my email.
<br>
<p><span class="quotelev1">&gt; Here's another fatal flaw: it's not possible for an MPI implementation
</span><br>
<span class="quotelev1">&gt; to provide MPI_Send() prototypes for user-defined Fortran datatypes.
</span><br>
<span class="quotelev1">&gt; Hence, the example you cite is a pipe dream for the &quot;mpi&quot; module
</span><br>
<span class="quotelev1">&gt; because there's no way to specify a (void*)-like argument for the
</span><br>
<span class="quotelev1">&gt; choice buffer.
</span><br>
<p>F2003 has c_loc, which is a sufficient stop-gap until TS 29113 is widely
<br>
available.  I have long-advocated that the best way to write extensible
<br>
libraries for Fortran2003 callers (even if the library is implemented
<br>
entirely in Fortran) involves some use of c_loc (e.g., for context
<br>
arguments).
<br>
<p>This annoys the Fortran programmers and they usually write perl scripts
<br>
to generate interfaces that enumerate the types they need and give up on
<br>
extensibility.  ;-)
<br>
<p>It's nice to know that after 60 years (when Fortran 201x is released,
<br>
including TS 29113), there will be a Fortran standard with an analogue
<br>
of void*.
<br>
<p><span class="quotelev1">&gt; Craig Rasmussen and I debated long and hard about whether to change
</span><br>
<span class="quotelev1">&gt; the default from &quot;small&quot; to &quot;medium&quot; or not.  We finally ended up
</span><br>
<span class="quotelev1">&gt; doing it with the following rationale:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - very few codes use the &quot;mpi&quot; module
</span><br>
<p>FWIW, I've noticed a few projects transition to it in the last few years.
<br>
<p><span class="quotelev1">&gt; - but those who do should have the maximum amount of compile-time protection
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...but we always knew that someone may come complaining some day.  And that day has now come.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question to you / the Fortran MPI dev community is: what do you want (for gfortran)?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want us to go back to the &quot;small&quot; size by default, or do you
</span><br>
<span class="quotelev1">&gt; want more compile-time protection by default?  (with the obvious
</span><br>
<span class="quotelev1">&gt; caveat that you can't use user-defined Fortran datatypes as choice
</span><br>
<span class="quotelev1">&gt; buffers; you might be able to use something like c_loc, but I haven't
</span><br>
<span class="quotelev1">&gt; thought deeply about this and don't know offhand if that works)
</span><br>
<p>I can't answer this as a Fortran developer, but I know that a lot of
<br>
projects want some modicum of portability and in practice, it takes
<br>
almost 10 years to flush the old compilers out of production
<br>
environments.  Either the upgrade problem will need to be fixed [1] so
<br>
that nearly all existing machines have new compilers or Fortran projects
<br>
will be wrestling with this for a long time yet.
<br>
<p>Most Fortran packages I know use homogeneous arrays, which also means
<br>
that they don't call MPI_Type_create_struct or similar functions.  If
<br>
those functions are going to be provided by the module, I think they
<br>
should be able to use them (e.g., examples in the Standard should work)
<br>
and the Standard's advice about implicit interfaces should be followed.
<br>
<p><p><p>[1] Also, there are still production machines without MPI-2.0 and I get
<br>
email if I make a mistake in providing MPI-1 fallback paths.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23330/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>Previous message:</strong> <a href="23329.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Reply:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
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
