<?
$subject_val = "Re: [OMPI users] compiler upgrades require openmpi rebuild?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 13:51:18 2010" -->
<!-- isoreceived="20100903175118" -->
<!-- sent="Fri, 3 Sep 2010 13:51:14 -0400" -->
<!-- isosent="20100903175114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiler upgrades require openmpi rebuild?" -->
<!-- id="2F854F6C-EA82-4225-9442-61B3542065E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C7C3559.6050301_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiler upgrades require openmpi rebuild?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 13:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14173.php">David Zhang: "Re: [OMPI users] Problems with mpirun"</a>
<li><strong>Previous message:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14133.php">David Turner: "[OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Reply:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2010, at 6:48 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; We have recently upgraded our default compiler suite from
</span><br>
<span class="quotelev1">&gt; PGI 10.5 to PGI 10.8.  We use the &quot;module&quot; system to manage
</span><br>
<span class="quotelev1">&gt; third-party software.  The module for PGI sets PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Open MPI 1.4.2, built with PGI 10.5, I have verified
</span><br>
<span class="quotelev1">&gt; that changing PATH is sufficient for the Open MPI compiler
</span><br>
<span class="quotelev1">&gt; wrappers to pick up version 10.8 of the PGI compilers.
</span><br>
<span class="quotelev1">&gt; However, it appears that the 10.5 PGI libraries are &quot;wired&quot;
</span><br>
<span class="quotelev1">&gt; into the wrappers somehow.  So I get an executable that
</span><br>
<span class="quotelev1">&gt; has been compiled with PGI 10.8 but linked against PGI 10.5
</span><br>
<span class="quotelev1">&gt; libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short of rebuilding Open MPI with PGI 10.8, is there any
</span><br>
<span class="quotelev1">&gt; (safe, reliable) way to get the compiler wrappers to link
</span><br>
<span class="quotelev1">&gt; against the PGI 10.8 libraries?  Thanks!
</span><br>
<p>Sorry for the latency in reply.
<br>
<p>I would guess that the Open MPI libraries have been linked against the PGI 10.5 libraries, and it might not be easy to dis-entangle them.  It *might* be a simple as changing your LD_LIBRARY_PATH, but it might not.  
<br>
<p>Since there's some question as to how to do it properly, it's probably safest / easiest / least total time spent to just build another copy of OMPI against 10.8.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14173.php">David Zhang: "Re: [OMPI users] Problems with mpirun"</a>
<li><strong>Previous message:</strong> <a href="14171.php">Patrik Jonsson: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14133.php">David Turner: "[OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Reply:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
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
