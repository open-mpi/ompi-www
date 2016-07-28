<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 10:00:07 2010" -->
<!-- isoreceived="20101222150007" -->
<!-- sent="Wed, 22 Dec 2010 08:59:58 -0600" -->
<!-- isosent="20101222145958" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975" -->
<!-- id="4D12126E.9070503_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D11B875.3090108_at_inria.fr" -->
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
<strong>Date:</strong> 2010-12-22 09:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1751.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1751.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/22/2010 02:36 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I'll backport this in 1.1 later, in case somebody wants to fix the
</span><br>
<span class="quotelev1">&gt; English speaking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For the benefit of the Perl and Python bindings efforts, it would be good if 
<br>
we could query the runtime library for it's API version.
<br>
--Guy
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 22/12/2010 09:28, bgoglin_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-12-22 03:28:55 EST (Wed, 22 Dec 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 2975
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2975">https://svn.open-mpi.org/trac/hwloc/changeset/2975</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add a FAQ entry about HWLOC_API_VERSION
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;     trunk/doc/hwloc.doxy |    36 ++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;     1 files changed, 36 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/doc/hwloc.doxy	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/doc/hwloc.doxy	2010-12-22 03:28:55 EST (Wed, 22 Dec 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1294,5 +1294,41 @@
</span><br>
<span class="quotelev2">&gt;&gt;   (that may for instance be transmitted between applications through a socket).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +\section faq_upgrade How do I handle API upgrades?
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +The hwloc interface is extended with every new major release.
</span><br>
<span class="quotelev2">&gt;&gt; +Any application using the hwloc API should be prepared to check at
</span><br>
<span class="quotelev2">&gt;&gt; +compile-time whether some features are available in the currently
</span><br>
<span class="quotelev2">&gt;&gt; +installed hwloc distribution.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +To check whether hwloc is at least 1.1, you should use:
</span><br>
<span class="quotelev2">&gt;&gt; +\verbatim
</span><br>
<span class="quotelev2">&gt;&gt; +#include&lt;hwloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#if HWLOC_API_VERSION&gt;= 0x00010100
</span><br>
<span class="quotelev2">&gt;&gt; +...
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +\endverbatim
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1751.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1751.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Reply:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
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
