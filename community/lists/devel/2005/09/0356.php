<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 19:55:33 2005" -->
<!-- isoreceived="20050915005533" -->
<!-- sent="Wed, 14 Sep 2005 20:55:26 -0400" -->
<!-- isosent="20050915005526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="950141a39355389cd84d54fc634994f2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a3187f5b8069d1b75caeed7d13eb1732_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-14 19:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I take this back entirely -- ignore everything I said.
<br>
<p>There appear to be two problems:
<br>
<p>- I borked up the libnuma configure.m4 such that mpicc (and friends) 
<br>
don't get the right flags for libnuma when you compile OMPI statically.
<br>
<p>- James' problem seems to be somewhat different -- he's failing to link 
<br>
ompi_info in the OMPI build itself, but also because the appropriate -L 
<br>
and -l are not supplied.  Although I can't get this to happen in any 
<br>
version that I have (they always get the Right -L and -l to find 
<br>
libnuma).
<br>
<p>James: what command did you use to configure OMPI?
<br>
<p><p><p>On Sep 14, 2005, at 7:45 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 14, 2005, at 6:07 PM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seriously, I can see your point, but I don't see an obvious fix -- we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't check for the mode of the target library.  We just check that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;$CC testprogram.c -L/path/to/libnuma -lnuma&quot; works properly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (actually,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is how *all* checks are done in OMPI -- libnuma is somewhat of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anomaly because most other packages/linux distros [depending on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; packaging] provide either just the .a or both the .a and the .so).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian / Ralf -- any ideas here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't the configure tests use the specified mode (e.g. 
</span><br>
<span class="quotelev2">&gt;&gt; static/dynamic)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes and no.  They're not quite the same thing -- we setup libtool to 
</span><br>
<span class="quotelev1">&gt; compile things in the desired mode(s), but libtool isn't really ready 
</span><br>
<span class="quotelev1">&gt; until configure completes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian and Ralf are the experts here...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a short-term workaround to disable numa support for a static 
</span><br>
<span class="quotelev2">&gt;&gt; build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing you had to specify --with-libnuma to find the library in 
</span><br>
<span class="quotelev1">&gt; the first place...?  If so, just don't specify it; if libnuma is not 
</span><br>
<span class="quotelev1">&gt; in a standard location that is already searched by -L, then you'll 
</span><br>
<span class="quotelev1">&gt; have no problem (i.e., the libnuma component's configure will fail and 
</span><br>
<span class="quotelev1">&gt; it will automatically disqualify itself).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If, however, it does still find libnuma, you can specify 
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=maffinity-libnuma.
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
<li><strong>Next message:</strong> <a href="0357.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0365.php">Ralf Wildenhues: "Re:  error message on make"</a>
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
