<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 10:02:09 2010" -->
<!-- isoreceived="20101222150209" -->
<!-- sent="Wed, 22 Dec 2010 16:02:04 +0100" -->
<!-- isosent="20101222150204" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975" -->
<!-- id="4D1212EC.8070808_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D12126E.9070503_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 10:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/12/2010 15:59, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 12/22/2010 02:36 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll backport this in 1.1 later, in case somebody wants to fix the
</span><br>
<span class="quotelev2">&gt;&gt; English speaking.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the benefit of the Perl and Python bindings efforts, it would be
</span><br>
<span class="quotelev1">&gt; good if we could query the runtime library for it's API version.
</span><br>
<p>Ah, right, we forgot about this. Something like this?
<br>
<p>unsigned hwloc_get_api_version(void)
<br>
{
<br>
&nbsp;&nbsp;return HWLOC_API_VERSION;
<br>
}
<br>
<p>We can put this in 1.1.1. But how will you handle earlier releases?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1752.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1754.php">Bernd Kallies: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
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
