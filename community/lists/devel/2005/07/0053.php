<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 27 07:03:40 2005" -->
<!-- isoreceived="20050727120340" -->
<!-- sent="Wed, 27 Jul 2005 06:03:38 -0600" -->
<!-- isosent="20050727120338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  openib trees" -->
<!-- id="04af585015cec1d6fa86424b8837431e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5a3b0de6d0a4555c9098aa62b76e1d00_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-27 07:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<li><strong>Previous message:</strong> <a href="0052.php">Jeff Squyres: "openib trees"</a>
<li><strong>In reply to:</strong> <a href="0052.php">Jeff Squyres: "openib trees"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Followup on this --
<br>
<p>If you do &quot;svn up&quot; and get an error message like this:
<br>
<p>svn: Failed to add directory 'ompi/mca/btl/openib': object of the same 
<br>
name already exists
<br>
<p>Then just do this:
<br>
<p>rm -rf ompi/mca/btl/openib ompi/mca/mpool/openib
<br>
svn up
<br>
<p>This is a left over version of the openib directory from a prior 
<br>
checkout (before the directories were closed).  So just removing them 
<br>
and running &quot;svn up&quot; is a safe action (no need to wipe out your entire 
<br>
checkout and get a new one!).
<br>
<p><p><p>On Jul 26, 2005, at 2:57 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib trees are now open for business (ompi/mca/[mpool|btl]).  IB 
</span><br>
<span class="quotelev1">&gt; vendors: please do not redistribute this code or publish results 
</span><br>
<span class="quotelev1">&gt; without asking us.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new BTL framework and ob1 PML component are currently 
</span><br>
<span class="quotelev1">&gt; .ompi_ignore'd for most users -- we'll be removing those in the near 
</span><br>
<span class="quotelev1">&gt; future (such that another autogen.sh / configure will build that 
</span><br>
<span class="quotelev1">&gt; stuff).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<li><strong>Previous message:</strong> <a href="0052.php">Jeff Squyres: "openib trees"</a>
<li><strong>In reply to:</strong> <a href="0052.php">Jeff Squyres: "openib trees"</a>
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
