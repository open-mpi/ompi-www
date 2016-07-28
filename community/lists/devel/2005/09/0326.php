<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  8 10:42:01 2005" -->
<!-- isoreceived="20050908154201" -->
<!-- sent="Thu, 8 Sep 2005 10:41:58 -0500" -->
<!-- isosent="20050908154158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  rcache" -->
<!-- id="cb160811f4e5c4df04cf1720fd776d3a_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050908112310.GC12611_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-09-08 10:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0327.php">Ferris McCormick: "ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>In reply to:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2005, at 6:23 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I checked, and here's the quick and correct solution then:
</span><br>
<span class="quotelev1">&gt;   ./config.status ompi/mca/rcache/base/Makefile depfiles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The automatic rebuilding rules emitted by Automake should cause exactly
</span><br>
<span class="quotelev1">&gt; this to be issued, though (Automake &gt;= 1.6).  So, if you have a test
</span><br>
<span class="quotelev1">&gt; case where this doesn't work, feel free to show it so we can fix
</span><br>
<span class="quotelev1">&gt; Automake.
</span><br>
<p>Yes, this has actually been a problem for years -- in some cases when 
<br>
you add new files to a Makefile.am, although I haven't quantified it 
<br>
exactly.  I'm in a meeting all day today, but I'll see if I can make a 
<br>
repeatable small test case over the weekend or something.
<br>
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
<li><strong>Next message:</strong> <a href="0327.php">Ferris McCormick: "ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>In reply to:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
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
