<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 08:47:20 2010" -->
<!-- isoreceived="20100421124720" -->
<!-- sent="Wed, 21 Apr 2010 14:47:05 +0200" -->
<!-- isosent="20100421124705" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986" -->
<!-- id="x2m36ca99e91004210547tc7fb9d6dv62ce01b61609f5a6_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201004211227.o3LCRXft005397_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 08:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<li><strong>Previous message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-devel] Please review r1986"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<li><strong>Reply:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 21, 2010 at 14:27,  &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-21 08:27:33 EDT (Wed, 21 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1986
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1986">https://svn.open-mpi.org/trac/hwloc/changeset/1986</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Refs #18. &#194;&#160;Fix some compiler warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;* Note the change of typeof to !__typeof__ -- I got that from
</span><br>
<span class="quotelev1">&gt; &#194;&#160; <a href="http://gcc.gnu.org/onlinedocs/gcc/Typeof.html">http://gcc.gnu.org/onlinedocs/gcc/Typeof.html</a>.
</span><br>
<p><span class="quotelev1">&gt;From that page:
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If you are writing a header file that must work when included in
<br>
ISO C programs, write __typeof__ instead of typeof. See Alternate
<br>
Keywords.
<br>
<p><span class="quotelev1">&gt; Modified: trunk/src/topology.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology.c &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology.c &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;2010-04-21 08:27:33 EDT (Wed, 21 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -649,7 +649,7 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160;*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;#define merge_index(new, old, field) \
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;if ((old)-&gt;field == (typeof((old)-&gt;field)) -1) \
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;if ((old)-&gt;field == (__typeof__((old)-&gt;field)) -1) \
</span><br>
<p>That does not look like a header for me.
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<li><strong>Previous message:</strong> <a href="0924.php">Brice Goglin: "Re: [hwloc-devel] Please review r1986"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
<li><strong>Reply:</strong> <a href="0926.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1986"</a>
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
