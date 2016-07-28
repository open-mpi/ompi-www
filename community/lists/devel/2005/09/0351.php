<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 17:00:06 2005" -->
<!-- isoreceived="20050914220006" -->
<!-- sent="Wed, 14 Sep 2005 17:59:58 -0400" -->
<!-- isosent="20050914215958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="7219ad201fcdd6ebf59b062cce1bc506_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="432898B7.6020604_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-14 16:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2005, at 5:40 PM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; Jeff - seems like a configure/build issue to me. Shouldn't we disable
</span><br>
<span class="quotelev1">&gt; numa support and not try to build it if the supporting libraries
</span><br>
<span class="quotelev1">&gt; don't exist?
</span><br>
<p>Not sure what you mean -- the supporting library *does* exist...? (just 
<br>
not in the mode that you want)
<br>
<p>It's LANL's strange fascination with static builds that causes the 
<br>
problem.  ;-)
<br>
<p>Seriously, I can see your point, but I don't see an obvious fix -- we 
<br>
don't check for the mode of the target library.  We just check that 
<br>
&quot;$CC testprogram.c -L/path/to/libnuma -lnuma&quot; works properly (actually, 
<br>
this is how *all* checks are done in OMPI -- libnuma is somewhat of an 
<br>
anomaly because most other packages/linux distros [depending on the 
<br>
packaging] provide either just the .a or both the .a and the .so).
<br>
<p>Brian / Ralf -- any ideas here?
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
<li><strong>Next message:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
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
