<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 06:50:23 2010" -->
<!-- isoreceived="20100210115023" -->
<!-- sent="Wed, 10 Feb 2010 06:50:17 -0500" -->
<!-- isosent="20100210115017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="18FF7395-DAF5-4639-9B0E-DFDA8D017326_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B7279FA.1040400_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 06:50:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 4:18 AM, Igor Ivanov wrote:
<br>
<p><span class="quotelev1">&gt; I believe that it is just a warning and you can use mtt w/o analyzer that allow get additional info from output.
</span><br>
<p>True, it's just a warning.  But it's (very) big and ugly.  :-)  Makes it quite difficult to read --verbose output and see if anything actually went wrong.
<br>
<p>Is this patch correct?  It checks to see if there is no analyze_module, and if so, just returns the form.
<br>
<p><p>Index: lib/MTT/Reporter/MTTGDS.pm
<br>
===================================================================
<br>
--- lib/MTT/Reporter/MTTGDS.pm  (revision 1346)
<br>
+++ lib/MTT/Reporter/MTTGDS.pm  (working copy)
<br>
@@ -576,6 +576,11 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $ini    = $MTT::Globals::Internals-&gt;{ini};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $module = $ini-&gt;val( &quot;Test run: &quot; . $section, &quot;analyze_module&quot; );
<br>
+
<br>
+    # If there's no analyze module, then just return
<br>
+    return $form
<br>
+        if (!$module);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$module = &quot;MTT::Test::Analyze::Performance::$module&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $method = &quot;PreReport&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my @args   = ( $phase, $section, $report );
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0472.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
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
