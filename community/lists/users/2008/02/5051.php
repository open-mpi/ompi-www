<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 12:45:33 2008" -->
<!-- isoreceived="20080220174533" -->
<!-- sent="Wed, 20 Feb 2008 09:45:12 -0800" -->
<!-- isosent="20080220174512" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="20080220174512.GB26826_at_dancer.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="094A8A05-48A6-4A41-93E3-884A2D57D49C_at_cisco.com" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 12:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5050.php">Adams, Samuel D AFRL/RHDR: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 20, 2008 at 06:15:27AM -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The #defines that are mpi.h are limited to the ones that we need for  
</span><br>
<span class="quotelev1">&gt; that file itself.  More specifically: the majority of the #define's that 
</span><br>
<span class="quotelev1">&gt; are generated via OMPI's configure are not in mpi.h.
</span><br>
<p>And that's much appreciated.
<br>
<p><span class="quotelev1">&gt; Our assumption was that if some other package defined these values, they 
</span><br>
<span class="quotelev1">&gt; would either likely be coming from the same standard autoconf tests or 
</span><br>
<span class="quotelev1">&gt; use the same #define conventions as the autoconf tests.  As such, the 
</span><br>
<span class="quotelev1">&gt; values that they are #defined to would be the same (and compilers don't 
</span><br>
<span class="quotelev1">&gt; whine about multiple #defines of the same macro to the same value -- they 
</span><br>
<span class="quotelev1">&gt; only whine if the values are different).
</span><br>
<p>The particular offending packages in question are indeed using
<br>
autoconf/autoheader, however ompi's defines
<br>
#define HAVE_LONG_LONG 1
<br>
while the others only
<br>
#define HAVE_LONG_LONG
<br>
<p>more ac version madness?
<br>
<p><span class="quotelev1">&gt; There's two places that would need to be changed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the relevant parts of OMPI's configure script to *also* define an  
</span><br>
<span class="quotelev1">&gt; OMPI_* equivalent of the macro (which will sometimes mean extracting  
</span><br>
<span class="quotelev1">&gt; non-public information from the Autoconf tests -- usually a risky  
</span><br>
<span class="quotelev1">&gt; proposition because Autoconf can change their internals at any time).   
</span><br>
<span class="quotelev1">&gt; The only safe way I can think of would be to AC_TRY_RUN and write the  
</span><br>
<span class="quotelev1">&gt; #define'd value out to a temp file.  This, of course, won't work for  
</span><br>
<span class="quotelev1">&gt; cross-compiling environments, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - modify mpi.h.in to use the new OMPI_* macros.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that mpi.h only has a small subset of the #defines from  
</span><br>
<span class="quotelev1">&gt; OMPI's configure script.  opal_config.h (and internal OMPI file that is 
</span><br>
<span class="quotelev1">&gt; not installed) has *all* the #defines; that's what's used to compile the 
</span><br>
<span class="quotelev1">&gt; OMPI code base.  mpi.h replicates a small number of these defines that 
</span><br>
<span class="quotelev1">&gt; are used by OMPI's public interface.
</span><br>
<p>I will think about this guidance and see what kind of patches and
<br>
alternative patches I can suggest.
<br>
I did not detect autoheader being used in the process of building
<br>
mpi.h; is that correct? it would make some simpler workarounds easier.
<br>
<p>Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5050.php">Adams, Samuel D AFRL/RHDR: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
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
