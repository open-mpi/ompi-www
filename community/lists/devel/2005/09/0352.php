<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 17:07:19 2005" -->
<!-- isoreceived="20050914220719" -->
<!-- sent="Wed, 14 Sep 2005 16:07:14 -0600" -->
<!-- isosent="20050914220714" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="43289F12.7090608_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7219ad201fcdd6ebf59b062cce1bc506_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 17:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0353.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 14, 2005, at 5:40 PM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Jeff - seems like a configure/build issue to me. Shouldn't we disable
</span><br>
<span class="quotelev2">&gt;&gt;numa support and not try to build it if the supporting libraries
</span><br>
<span class="quotelev2">&gt;&gt;don't exist?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what you mean -- the supporting library *does* exist...? (just 
</span><br>
<span class="quotelev1">&gt; not in the mode that you want)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's LANL's strange fascination with static builds that causes the 
</span><br>
<span class="quotelev1">&gt; problem.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>well - makes life much simpler on bproc systems...
<br>
<p><span class="quotelev1">&gt; Seriously, I can see your point, but I don't see an obvious fix -- we 
</span><br>
<span class="quotelev1">&gt; don't check for the mode of the target library.  We just check that 
</span><br>
<span class="quotelev1">&gt; &quot;$CC testprogram.c -L/path/to/libnuma -lnuma&quot; works properly (actually, 
</span><br>
<span class="quotelev1">&gt; this is how *all* checks are done in OMPI -- libnuma is somewhat of an 
</span><br>
<span class="quotelev1">&gt; anomaly because most other packages/linux distros [depending on the 
</span><br>
<span class="quotelev1">&gt; packaging] provide either just the .a or both the .a and the .so).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian / Ralf -- any ideas here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Shouldn't the configure tests use the specified mode (e.g. static/dynamic)?
<br>
<p>Is there a short-term workaround to disable numa support for a static build?
<br>
<p><p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0353.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0355.php">Jeff Squyres: "Re:  error message on make"</a>
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
