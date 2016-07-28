<?
$subject_val = "Re: [MTT users] Reporting results from offline runs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 08:44:53 2014" -->
<!-- isoreceived="20141028124453" -->
<!-- sent="Tue, 28 Oct 2014 12:44:52 +0000" -->
<!-- isosent="20141028124452" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Reporting results from offline runs" -->
<!-- id="B37C3BCD-2807-44CB-9DB9-01744CD65297_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1151623876.187339.1414414972731.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [MTT users] Reporting results from offline runs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 08:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0825.php">Adrian Reber: "[MTT users] Another whatami patch"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>In reply to:</strong> <a href="0823.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2014, at 9:02 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I gave these options a try.
</span><br>
<span class="quotelev1">&gt; Unfortunately the MTTDatabase module requires an URL to initialize - but if I provide an URL in the ini file, MTT tries to connect to this URL forever...
</span><br>
<span class="quotelev1">&gt; If I do not provide the URL the MTTDatabase module is skipped. Are there any additional/hidden options or environment variables? 
</span><br>
<p>Nope.  :-(
<br>
<p>You might need to add a patch to make this work.
<br>
<p>Submitting from disconnected scenarios was always envisioned, but I don't think it got used much in practice, so the code may not have ever been complete for this kind of scenario.
<br>
<p>Another possibility is to use the mtt-relay...?
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0825.php">Adrian Reber: "[MTT users] Another whatami patch"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>In reply to:</strong> <a href="0823.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
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
