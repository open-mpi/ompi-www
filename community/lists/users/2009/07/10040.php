<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 11:20:51 2009" -->
<!-- isoreceived="20090722152051" -->
<!-- sent="Wed, 22 Jul 2009 11:20:46 -0400" -->
<!-- isosent="20090722152046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released" -->
<!-- id="EE40A7E0-E5FD-4943-9178-BB273B2D9323_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87bpnfv74d.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 11:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10041.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10039.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10011.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2009, at 9:03 AM, Dave Love wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Hmmm...there should be messages on both the user and devel lists
</span><br>
<span class="quotelev2">&gt; &gt; regarding binary compatibility at the MPI level being promised for
</span><br>
<span class="quotelev2">&gt; &gt; 1.3.2 and beyond.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is confusing.  As I read the quotes below, recompilation is
</span><br>
<span class="quotelev1">&gt; necessary, and the announcement has items which suggest at least  
</span><br>
<span class="quotelev1">&gt; some of
</span><br>
<span class="quotelev1">&gt; the ABI has changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The MPI ABI has not changed since 1.3.2.  We started making MPI ABI  
<br>
promises with v1.3.2 -- so any version prior to that (including 1.3.0  
<br>
and 1.3.1) are not guaranteed to be ABI compatible.  To be clear: you  
<br>
should be able to mpicc/mpif77/etc. an MPI application with Open MPI  
<br>
v1.3.2 and then be able to run it against an Open MPI v1.3.3  
<br>
installation (e.g., change your LD_LIBRARY_PATH to point to an OMPI  
<br>
v1.3.3 installation).
<br>
<p>Note that our internal API's are *not* guaranteed to be ABI compatible  
<br>
between releases (we try hard to keep them stable between releases in  
<br>
a single series, but it doesn't always work).  We're only providing an  
<br>
ABI guarantee for the official MPI API.
<br>
<p><span class="quotelev1">&gt; Could the promise also specify that future ABI changes will result in
</span><br>
<span class="quotelev1">&gt; ELF version changes to avoid any more of the mess with the 1.2 and 1.3
</span><br>
<span class="quotelev1">&gt; libraries wrongly appearing as compatible to the dynamic linker?  It
</span><br>
<span class="quotelev1">&gt; should just be a question of managing changes and doing the right  
</span><br>
<span class="quotelev1">&gt; thing
</span><br>
<span class="quotelev1">&gt; with libtool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, we should.  This issue has come up before, but it's gotten  
<br>
muddied by some other (uninteresting) technical issues.  I'll bring it  
<br>
up again with the rest of the developers.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10041.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10039.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10011.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="10049.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
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
