<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 01:05:25 2010" -->
<!-- isoreceived="20100909050525" -->
<!-- sent="Thu, 9 Sep 2010 07:05:19 +0200" -->
<!-- isosent="20100909050519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="518B5944-47D9-4237-8855-2637D102821A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C87A57B.2090004_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 01:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8471.php">Jeff Squyres: "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Previous message:</strong> <a href="8469.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably	broken by switch to OAUTH"</a>
<li><strong>In reply to:</strong> <a href="8468.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2010, at 5:02 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; The way the code is currently written, it does not run the autodetect by default.  What happens is it takes a look at
</span><br>
<span class="quotelev1">&gt; the bandwidth value.  If the bandwidth value is 0, it will run the autodetect code.
</span><br>
<p>This seems like a no-brainer: we should change the default value to 0 so that the auto-detect code runs.  
<br>
<p>&quot;Auto-detect&quot; is actually a generous term -- we don't have to figure out anything.  We do a little algebra with the provided data to translate it into Mbytes/sec, but the information comes directly from the IBV API; it's not like we're conducting speed microbenchmarks or anything like that.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8471.php">Jeff Squyres: "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Previous message:</strong> <a href="8469.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably	broken by switch to OAUTH"</a>
<li><strong>In reply to:</strong> <a href="8468.php">Rolf vandeVaart: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
