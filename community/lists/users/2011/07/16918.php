<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 14:10:52 2011" -->
<!-- isoreceived="20110714181052" -->
<!-- sent="Thu, 14 Jul 2011 11:10:47 -0700" -->
<!-- isosent="20110714181047" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110714181047.GA60582_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="73CC05A9-371C-4E62-8A87-52B5107120CB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 14:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16919.php">dave fournier: "[OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 13, 2011 at 08:27:13AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 12, 2011, at 1:37 PM, Steve Kargl wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (many lines removed)
</span><br>
<span class="quotelev2">&gt; &gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev2">&gt; &gt; checking if .size is needed... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if .align directive takes logarithmic value... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: No atomic primitives available for amd64-unknown-freebsd9.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm; this is quite odd.  This worked in v1.4, but didn't work in trunk?
</span><br>
<p>yes. 
<br>
<p><span class="quotelev1">&gt; There are a bunch of changes to our configure assembly tests between v1.4, but I don't see any that should affect AMD vs. Intel.  Weird. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if this has to do with versions of config.* scripts.  What does config/config.guess report from the trunk tarball, and what does it report from the v1.4 tarball?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>After I run configure in openmpi-1.4.4rc2 and trunk, I see
<br>
<p>diff -u openmpi-1.4.4rc2/config/config.sub ompi/config/config.sub | more
<br>
<p>@@ -354,73 +292,56 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| a29k-* \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| alpha-* | alphaev[4-8]-* | alphaev56-* | alphaev6[78]-* \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| alpha64-* | alpha64ev[4-8]-* | alpha64ev56-* | alpha64ev6[78]-* \
<br>
-       | alphapca5[67]-* | alpha64pca5[67]-* | arc-* \
<br>
+       | alphapca5[67]-* | alpha64pca5[67]-* | amd64-* | arc-* \
<br>
<p>@@ -458,9 +376,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amd64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;basic_machine=x86_64-pc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
-       amd64-*)
<br>
-               basic_machine=x86_64-`echo $basic_machine | sed 's/^[^-]*-//'`
<br>
-               ;;
<br>
<p>So, it appears that the amd64-* rule has changed, but where to undo
<br>
the &quot;fix&quot; I do not know.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16919.php">dave fournier: "[OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
