<?
$subject_val = "Re: [hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:29:41 2011" -->
<!-- isoreceived="20110214132941" -->
<!-- sent="Mon, 14 Feb 2011 14:29:32 +0100" -->
<!-- isosent="20110214132932" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What does this C99 notation mean?" -->
<!-- id="20110214132932.GL8120_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2008196554.53089.1297689676569.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] What does this C99 notation mean?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 08:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Reply:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 14 Feb 2011 14:21:16 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Let me re-phrase that, because the way I phrased it, I could guess that that detail might be implementation-dependent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I meant was: _distances is clearly a 1D array.  Does the above C99 notation say &quot;treat this 1D array like a 2D array of size [x][y]&quot;?  And then how it actually happens underneath is implementation dependent (e.g., whether it makes a silent/temporary array or pointers, or converts indexing)?
</span><br>
<p>I don't think it can even be implementation dependent: here we just
<br>
define a pointer, and assign to it a casted value.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Reply:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
