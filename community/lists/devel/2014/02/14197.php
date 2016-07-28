<?
$subject_val = "Re: [OMPI devel] oshmem test suite errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 11:48:18 2014" -->
<!-- isoreceived="20140220164818" -->
<!-- sent="Thu, 20 Feb 2014 08:48:14 -0800" -->
<!-- isosent="20140220164814" -->
<!-- name="Brian Barrett" -->
<!-- email="brian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem test suite errors" -->
<!-- id="EDC0B0C0-3D95-4303-873A-58E522AF50DC_at_bbarrett.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="811AABED-D008-402A-903E-26046D757B66_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem test suite errors<br>
<strong>From:</strong> Brian Barrett (<em>brian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 11:48:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14196.php">Suraj Prabhakaran: "[OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14191.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2014, at 7:10 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For all of these, I'm using the openshmem test suite that is now committed to the ompi-svn SVN repo.  I don't know if the errors are with the tests or with oshmem itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I'm running the oshmem test suite at 32 processes across 2 16-core servers.  I'm seeing a segv in &quot;examples/shmem_2dheat.x 10 10&quot;.  It seems to run fine at lower np values such as 2, 4, and 8; I didn't try to determine where the crossover to badness occurs.
</span><br>
<p>My memory is bad and my notes are on a machine I no longer have access to, but I did this to the test suite run for Portals SHMEM:
<br>
<p>Index: shmem_2dheat.c
<br>
===================================================================
<br>
--- shmem_2dheat.c	(revision 270)
<br>
+++ shmem_2dheat.c	(revision 271)
<br>
@@ -129,6 +129,11 @@
<br>
&nbsp;&nbsp;&nbsp;p = _num_pes ();
<br>
&nbsp;&nbsp;&nbsp;my_rank = _my_pe ();
<br>
&nbsp;
<br>
+  if (p &gt; 8) {
<br>
+      fprintf(stderr, &quot;Ignoring test when run with more than 8 pes\n&quot;);
<br>
+      return 77;
<br>
+  }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;/* argument processing done by everyone */
<br>
&nbsp;&nbsp;&nbsp;int c, errflg;
<br>
&nbsp;&nbsp;&nbsp;extern char *optarg;
<br>
<p>The commit comment was that there was a scaling issue in the code itself, I just wish I could remember exactly what it was.
<br>
<p><span class="quotelev1">&gt; 2. &quot;examples/adjacent_32bit_amo.x 10 10&quot; seems to hang with both tcp and usnic BTLs, even when running at np=2 (I let it run for several minutes before killing it).
</span><br>
<p>If atomics aren't fast, this test can run for a very long time (also, it takes no arguments, so the 10 10 is being ignored).  It's essentially looking for a race by blasting 32-bit atomic ops at both parts of a 64 bit word.
<br>
<p><span class="quotelev1">&gt; 3. Ditto for &quot;example/ptp.x 10 10&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. &quot;examples/shmem_matrix.x 10 10&quot; seems to run fine at np=32 on usnic, but hangs with TCP (i.e., I let it run for 8+ minutes before killing it -- perhaps it would have finished eventually?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...there's more results (more timeouts and more failures), but they're not yet complete, and I've got to keep working on my own features for v1.7.5, so I need to move to other things right now.
</span><br>
<p>These start to sound like issues in the code; those last two are pretty decent tests.
<br>
<p><span class="quotelev1">&gt; I think I have oshmem running well enough to add these to Cisco's nightly MTT runs now, so the results will start showing up there without needing my manual attention.
</span><br>
<p>Woot.
<br>
<p>Brian
<br>
<p><pre>
-- 
 Brian Barrett
 There is an art . . . to flying. The knack lies in learning how to
 throw yourself at the ground and miss.
     Douglas Adams, 'The Hitchhikers Guide to the Galaxy'
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14196.php">Suraj Prabhakaran: "[OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14191.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite errors"</a>
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
