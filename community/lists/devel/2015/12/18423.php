<?
$subject_val = "[OMPI devel] Travis testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 12:51:10 2015" -->
<!-- isoreceived="20151215175110" -->
<!-- sent="Tue, 15 Dec 2015 17:51:05 +0000" -->
<!-- isosent="20151215175105" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Travis testing" -->
<!-- id="36FA11B6-06FB-4856-B6D9-F1E26CD22126_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Travis testing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 12:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18424.php">Ralph Castain: "[OMPI devel] MTT on Mac"</a>
<li><strong>Previous message:</strong> <a href="18422.php">Geoffrey Paulsen: "[OMPI devel] No Meeting 12/22/2015"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about the Travis testing on the call today.  Here's the short version of what Travis is doing:
<br>
<p>- it's a free, cloud-based CI infrastructure
<br>
- they provide Ubuntu VMs and containers for testing
<br>
- they also provide OS X VMs for testing
<br>
- the testing we're doing for OMPI is basically:
<br>
<p>&nbsp;&nbsp;for every OMPI master commit and every OMPI master PR:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;foreach Ubutu and OS X
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach both gcc and clang
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./autogen &amp;&amp; make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if Linux&amp;&amp;gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make check
<br>
<p>Essentially, it's another set of smoke tests for building and &quot;make check&quot; (with a single &quot;make distcheck&quot; in there for good measure).
<br>
<p>We talked about it a bit on the call today.  In short:
<br>
<p>- we'll use it for now
<br>
- if we end up not liking Travis, we'll either change what it does or shut it off
<br>
<p>NOTE: The Travis infrastructure is running a bit behind today to clear a backlog: <a href="https://www.traviscistatus.com/incidents/0qdqnwr2x464">https://www.traviscistatus.com/incidents/0qdqnwr2x464</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18424.php">Ralph Castain: "[OMPI devel] MTT on Mac"</a>
<li><strong>Previous message:</strong> <a href="18422.php">Geoffrey Paulsen: "[OMPI devel] No Meeting 12/22/2015"</a>
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
