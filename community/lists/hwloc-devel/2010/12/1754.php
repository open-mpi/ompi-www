<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 10:11:54 2010" -->
<!-- isoreceived="20101222151154" -->
<!-- sent="Wed, 22 Dec 2010 16:11:38 +0100" -->
<!-- isosent="20101222151138" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975" -->
<!-- id="1293030698.2272.235.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 10:11:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-12-22 at 16:02 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 22/12/2010 15:59, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On 12/22/2010 02:36 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll backport this in 1.1 later, in case somebody wants to fix the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; English speaking.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For the benefit of the Perl and Python bindings efforts, it would be
</span><br>
<span class="quotelev2">&gt; &gt; good if we could query the runtime library for it's API version.
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
<span class="quotelev1">&gt;   return HWLOC_API_VERSION;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; We can put this in 1.1.1. But how will you handle earlier releases?
</span><br>
<p>Like one has to handle other API changes, that means via checking
<br>
HWLOC_API_VERSION via CPP directives at compile time. The problem is
<br>
nearly the same like having no HWLOC_API_VERSION in hwloc-0.9.
<br>
<p>BK
<br>
<p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>Previous message:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1755.php">Guy Streeter: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2975"</a>
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
