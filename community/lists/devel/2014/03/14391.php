<?
$subject_val = "[OMPI devel] v1.8[.0] guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 13:20:01 2014" -->
<!-- isoreceived="20140325172001" -->
<!-- sent="Tue, 25 Mar 2014 17:20:00 +0000" -->
<!-- isosent="20140325172000" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8[.0] guidance" -->
<!-- id="D3E86238-BA13-431F-BF3E-78C07BBBAA81_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8[.0] guidance<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 13:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14392.php">Jeff Squyres (jsquyres): "[OMPI devel] Update your MTT to use v1.8"</a>
<li><strong>Previous message:</strong> <a href="14390.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.7 SVN branch is CLOSED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm proxying Ralph because he's off teaching an ORTE tutorial this week, and will generally only be available in the evenings.
<br>
<p>The timeline for v1.8.0 is VERY SHORT: next Monday, March 31, 2014.
<br>
<p>Next Monday is our self-imposed deadline to meet the downstream packagers' schedules (e.g., RHEL and SLES) to get the stable series of OMPI in the next major releases.
<br>
<p>We reviewed the current list of bugs on the v1.8 milestone today.  There are three classes of CMRs that will be accepted for v1.8[.0]:
<br>
<p>1. Trivial fixes.  *Most* of the pending CMRs fall in this category already.
<br>
2. MPI one-sided fixes.  Some are in; more are coming.  These will definitely not be trivial, but they're required fixes.
<br>
3. coll ml fixes.  Ralph is being fairly lenient w.r.t. ml because a) there are known bugs, and b) it's not the default, and c) as was just reported, there are still some cases where ml is noisy in debug builds.
<br>
<p>If your CMR is outside of these 3 cases, please mark it as 8.1.
<br>
<p>And yes, Ralph is going to be pretty strict on the definition of &quot;trivial&quot; (e.g., missing help message in a text file, adding noreturn attribute to a function, ...etc.).  &quot;Trivial to you&quot; does not necessarily count.  You've been warned.
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
<li><strong>Next message:</strong> <a href="14392.php">Jeff Squyres (jsquyres): "[OMPI devel] Update your MTT to use v1.8"</a>
<li><strong>Previous message:</strong> <a href="14390.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.7 SVN branch is CLOSED"</a>
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
