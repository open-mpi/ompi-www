<?
$subject_val = "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 15:50:53 2010" -->
<!-- isoreceived="20100226205053" -->
<!-- sent="Fri, 26 Feb 2010 15:50:47 -0500" -->
<!-- isosent="20100226205047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741" -->
<!-- id="13124B40-515D-498C-BAAA-6D822BB691E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B88336B.5060805_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 15:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<li><strong>In reply to:</strong> <a href="0694.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<li><strong>Reply:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2010, at 3:47 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt; +/** \brief Indicate at build time which hwloc API version is being used. */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +#define HWLOC_API_VERSION 0x00010000
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was wondering whether it couldn't be automatically generated from the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconf information?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sure.  What exactly do you want here?  A date/timestamp?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should configure generate #define HWLOC_API_VERSION (X&lt;&lt;16)|(Y&lt;&lt;8)|Z
</span><br>
<span class="quotelev1">&gt; when AC_INIT contains X.Y.Z ?
</span><br>
<p>Ya, I parsed the original question wrong -- a date/timestamp would be dumb.
<br>
<p>The API version may or may not be related to the hwloc library version, no?  For that reason, I'm thinking that this should be separated and manually specified.
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
<li><strong>Next message:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<li><strong>In reply to:</strong> <a href="0694.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
<li><strong>Reply:</strong> <a href="0696.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_API_VERSION [hwloc-svn] svn:hwloc r1741"</a>
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
