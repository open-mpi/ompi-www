<?
$subject_val = "Re: [OMPI devel] RFC: Remove autogen.sh sym link";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 09:27:12 2014" -->
<!-- isoreceived="20140508132712" -->
<!-- sent="Thu, 8 May 2014 13:27:08 +0000" -->
<!-- isosent="20140508132708" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove autogen.sh sym link" -->
<!-- id="54D0016F-D9E7-4589-B39C-28B318AB1BA6_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="8E1425A8-7550-45D7-ACD6-BFCDC12BFFE8_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove autogen.sh sym link<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 09:27:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14757.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14757.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14757.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2014, at 8:59 AM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This will break my build but it&#146;s an easy fix so don&#146;t let that stop you.
</span><br>
<p>Something like this should do ya:
<br>
<p>--- bogus	2014-05-08 06:26:19.759259593 -0700
<br>
+++ bogus-new	2014-05-08 06:26:22.567481480 -0700
<br>
@@ -14,7 +14,11 @@
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
-./autogen.sh
<br>
+if test -x autogen.sh; then
<br>
+   ./autogen.sh
<br>
+else
<br>
+   ./autogen.pl
<br>
+fi
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14757.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14757.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14757.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
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
