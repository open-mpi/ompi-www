<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 08:15:50 2008" -->
<!-- isoreceived="20080220131550" -->
<!-- sent="Wed, 20 Feb 2008 06:15:27 -0700" -->
<!-- isosent="20080220131527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="094A8A05-48A6-4A41-93E3-884A2D57D49C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080219195256.GA8847_at_dancer.ca.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h macro naming<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 08:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<li><strong>In reply to:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2008, at 12:52 PM, Ben Allan wrote:
<br>
<p><span class="quotelev1">&gt; Is there some subtle reason that ompi's mpi.h
</span><br>
<span class="quotelev1">&gt; leaves the following macros both
</span><br>
<span class="quotelev1">&gt; unguarded with an ifndef and un-prefixed with OMPI_ ?
</span><br>
<p>Mainly because they come from standard autoconf/configure tests (e.g.,  
<br>
AC_CHECK_SIZEOF), meaning that we (OMPI) aren't setting those macros  
<br>
directly -- the built-in AC test is doing it.  Indeed, OMPI's  
<br>
configure script doesn't have [public] access to the value that it  
<br>
sets -- AC_CHECK_SIZEOF's public interface sets a #define in the  
<br>
output header file.
<br>
<p>The #defines that are mpi.h are limited to the ones that we need for  
<br>
that file itself.  More specifically: the majority of the #define's  
<br>
that are generated via OMPI's configure are not in mpi.h.
<br>
<p><span class="quotelev1">&gt; This produces considerable amounts of compiler whinage for other
</span><br>
<span class="quotelev1">&gt; codes that include mpi.h. As always, extraneous whinage makes real
</span><br>
<span class="quotelev1">&gt; errors harder to find. (And yes, those other codes also need
</span><br>
<span class="quotelev1">&gt; *their* definitions of HAVE_LONG_LONG, etc properly protected).
</span><br>
<span class="quotelev1">&gt; And of course who knows how the answer was defined for any given
</span><br>
<span class="quotelev1">&gt; unprotected appearance of these macros?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Define to 1 if the system has the type `long long'. */
</span><br>
<span class="quotelev1">&gt; #undef HAVE_LONG_LONG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* The size of a `bool', as computed by sizeof. */
</span><br>
<span class="quotelev1">&gt; #undef SIZEOF_BOOL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* The size of a `int', as computed by sizeof. */
</span><br>
<span class="quotelev1">&gt; #undef SIZEOF_INT
</span><br>
<p>Our assumption was that if some other package defined these values,  
<br>
they would either likely be coming from the same standard autoconf  
<br>
tests or use the same #define conventions as the autoconf tests.  As  
<br>
such, the values that they are #defined to would be the same (and  
<br>
compilers don't whine about multiple #defines of the same macro to the  
<br>
same value -- they only whine if the values are different).
<br>
<p>I'm assuming that you're seeing cases where the defined values are  
<br>
different.  Isn't that a bit scary?  E.g., why would OMPI be reporting  
<br>
a different value for SIZEOF_BOOL and SIZEOF_INT than what is in your  
<br>
app's header files?
<br>
<p><span class="quotelev1">&gt; If it's simply a matter of developer hours, I can post a patch
</span><br>
<span class="quotelev1">&gt; somewhere to address this. It appears that of these, only
</span><br>
<span class="quotelev1">&gt; sizeof_int affects more than a few source files.
</span><br>
<p><p>There's two places that would need to be changed:
<br>
<p>- the relevant parts of OMPI's configure script to *also* define an  
<br>
OMPI_* equivalent of the macro (which will sometimes mean extracting  
<br>
non-public information from the Autoconf tests -- usually a risky  
<br>
proposition because Autoconf can change their internals at any time).   
<br>
The only safe way I can think of would be to AC_TRY_RUN and write the  
<br>
#define'd value out to a temp file.  This, of course, won't work for  
<br>
cross-compiling environments, though.
<br>
<p>- modify mpi.h.in to use the new OMPI_* macros.
<br>
<p>Keep in mind that mpi.h only has a small subset of the #defines from  
<br>
OMPI's configure script.  opal_config.h (and internal OMPI file that  
<br>
is not installed) has *all* the #defines; that's what's used to  
<br>
compile the OMPI code base.  mpi.h replicates a small number of these  
<br>
defines that are used by OMPI's public interface.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<li><strong>In reply to:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
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
