<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 19:02:02 2008" -->
<!-- isoreceived="20080222000202" -->
<!-- sent="Thu, 21 Feb 2008 16:01:48 -0800" -->
<!-- isosent="20080222000148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="EDAC7166-4810-48AF-B7E2-F40340B0ADCF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080220174512.GB26826_at_dancer.ca.sandia.gov" -->
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
<strong>Date:</strong> 2008-02-21 19:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5065.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5067.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5067.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2008, at 9:45 AM, Ben Allan wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Our assumption was that if some other package defined these values,  
</span><br>
<span class="quotelev2">&gt;&gt; they
</span><br>
<span class="quotelev2">&gt;&gt; would either likely be coming from the same standard autoconf tests  
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; use the same #define conventions as the autoconf tests.  As such, the
</span><br>
<span class="quotelev2">&gt;&gt; values that they are #defined to would be the same (and compilers  
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; whine about multiple #defines of the same macro to the same value  
</span><br>
<span class="quotelev2">&gt;&gt; -- they
</span><br>
<span class="quotelev2">&gt;&gt; only whine if the values are different).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The particular offending packages in question are indeed using
</span><br>
<span class="quotelev1">&gt; autoconf/autoheader, however ompi's defines
</span><br>
<span class="quotelev1">&gt; #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; while the others only
</span><br>
<span class="quotelev1">&gt; #define HAVE_LONG_LONG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; more ac version madness?
</span><br>
<p>Gaa!  Yes, this could definitely be the case.  :-(
<br>
<p><span class="quotelev2">&gt;&gt; There's two places that would need to be changed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - the relevant parts of OMPI's configure script to *also* define an
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_* equivalent of the macro (which will sometimes mean extracting
</span><br>
<span class="quotelev2">&gt;&gt; non-public information from the Autoconf tests -- usually a risky
</span><br>
<span class="quotelev2">&gt;&gt; proposition because Autoconf can change their internals at any time).
</span><br>
<span class="quotelev2">&gt;&gt; The only safe way I can think of would be to AC_TRY_RUN and write the
</span><br>
<span class="quotelev2">&gt;&gt; #define'd value out to a temp file.  This, of course, won't work for
</span><br>
<span class="quotelev2">&gt;&gt; cross-compiling environments, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - modify mpi.h.in to use the new OMPI_* macros.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind that mpi.h only has a small subset of the #defines from
</span><br>
<span class="quotelev2">&gt;&gt; OMPI's configure script.  opal_config.h (and internal OMPI file  
</span><br>
<span class="quotelev2">&gt;&gt; that is
</span><br>
<span class="quotelev2">&gt;&gt; not installed) has *all* the #defines; that's what's used to  
</span><br>
<span class="quotelev2">&gt;&gt; compile the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI code base.  mpi.h replicates a small number of these defines  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; are used by OMPI's public interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will think about this guidance and see what kind of patches and
</span><br>
<span class="quotelev1">&gt; alternative patches I can suggest.
</span><br>
<span class="quotelev1">&gt; I did not detect autoheader being used in the process of building
</span><br>
<span class="quotelev1">&gt; mpi.h; is that correct? it would make some simpler workarounds easier.
</span><br>
<p><p>Correct.  We have mpi.h.in in the SVN repository -- it is *not*  
<br>
automatically generated.  We just put the #undef HAVE_LONG_LONG (etc.)  
<br>
lines in there (which is the same format that autoheader generates),  
<br>
and config.status will morph these into #define... as relevant.
<br>
<p>While I agree that having AC actually define them to a value is a Good  
<br>
Thing (better than just defining it to be empty), I do see the pickle  
<br>
that it has put us in.  :-\  I don't see an obvious solution.
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
<li><strong>Next message:</strong> <a href="5065.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>In reply to:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5067.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5067.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
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
