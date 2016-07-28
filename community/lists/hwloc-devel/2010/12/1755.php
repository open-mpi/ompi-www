<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 10:16:08 2010" -->
<!-- isoreceived="20101222151608" -->
<!-- sent="Wed, 22 Dec 2010 09:16:00 -0600" -->
<!-- isosent="20101222151600" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975" -->
<!-- id="4D121630.7030507_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D1212EC.8070808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 10:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1756.php">Guy Streeter: "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Previous message:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/22/2010 09:02 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 22/12/2010 15:59, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 12/22/2010 02:36 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll backport this in 1.1 later, in case somebody wants to fix the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; English speaking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the benefit of the Perl and Python bindings efforts, it would be
</span><br>
<span class="quotelev2">&gt;&gt; good if we could query the runtime library for it's API version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, right, we forgot about this. Something like this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unsigned hwloc_get_api_version(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    return HWLOC_API_VERSION;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can put this in 1.1.1. But how will you handle earlier releases?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That would be great. In Python at least, I can determine at runtime that the 
<br>
hwloc_get_api_version symbol is not in the library. And I'm targeting 1.1 for 
<br>
my efforts, so I can just document that as the minimal working version.
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1756.php">Guy Streeter: "[hwloc-devel] Is hwloc_bitmap_from_ith_ulong working?"</a>
<li><strong>Previous message:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
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
