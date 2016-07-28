<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 18:45:56 2005" -->
<!-- isoreceived="20050914234556" -->
<!-- sent="Wed, 14 Sep 2005 19:45:49 -0400" -->
<!-- isosent="20050914234549" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="a3187f5b8069d1b75caeed7d13eb1732_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43289F12.7090608_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-14 18:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2005, at 6:07 PM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Seriously, I can see your point, but I don't see an obvious fix -- we
</span><br>
<span class="quotelev2">&gt;&gt; don't check for the mode of the target library.  We just check that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$CC testprogram.c -L/path/to/libnuma -lnuma&quot; works properly 
</span><br>
<span class="quotelev2">&gt;&gt; (actually,
</span><br>
<span class="quotelev2">&gt;&gt; this is how *all* checks are done in OMPI -- libnuma is somewhat of an
</span><br>
<span class="quotelev2">&gt;&gt; anomaly because most other packages/linux distros [depending on the
</span><br>
<span class="quotelev2">&gt;&gt; packaging] provide either just the .a or both the .a and the .so).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian / Ralf -- any ideas here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't the configure tests use the specified mode (e.g. 
</span><br>
<span class="quotelev1">&gt; static/dynamic)?
</span><br>
<p>Yes and no.  They're not quite the same thing -- we setup libtool to 
<br>
compile things in the desired mode(s), but libtool isn't really ready 
<br>
until configure completes.
<br>
<p>Brian and Ralf are the experts here...
<br>
<p><span class="quotelev1">&gt; Is there a short-term workaround to disable numa support for a static 
</span><br>
<span class="quotelev1">&gt; build?
</span><br>
<p>I'm guessing you had to specify --with-libnuma to find the library in 
<br>
the first place...?  If so, just don't specify it; if libnuma is not in 
<br>
a standard location that is already searched by -L, then you'll have no 
<br>
problem (i.e., the libnuma component's configure will fail and it will 
<br>
automatically disqualify itself).
<br>
<p>If, however, it does still find libnuma, you can specify 
<br>
--enable-mca-no-build=maffinity-libnuma.
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
<li><strong>Next message:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
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
