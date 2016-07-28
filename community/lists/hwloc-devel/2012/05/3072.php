<?
$subject_val = "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:52:29 2012" -->
<!-- isoreceived="20120509135229" -->
<!-- sent="Wed, 9 May 2012 09:52:24 -0400" -->
<!-- isosent="20120509135224" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released" -->
<!-- id="59AF9813-DACA-454C-AD28-5BDE981F4FB4_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FAA756E.90707_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 09:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3071.php">Brice Goglin: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>In reply to:</strong> <a href="3071.php">Brice Goglin: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On May 9, 2012, at 9:47 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I'll likely release the final 1.4.2 tomorrow without any change unless
</span><br>
<span class="quotelev1">&gt; something bad happens in the meantime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 03/05/2012 14:51, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev2">&gt;&gt; release candidate for v1.4.2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; v1.4.2rc1 is the first milestone of a bug fix release. It brings
</span><br>
<span class="quotelev2">&gt;&gt; several important fixes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The following is a summary of the changes since v1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Fix build on Solaris 9 and earlier when fabsf() is not a compiler
</span><br>
<span class="quotelev2">&gt;&gt;  built-in. Thanks to Igor Gali&#196;&#135; for reporting the problem.
</span><br>
<span class="quotelev2">&gt;&gt; * Fix support for more than 32 processors on Windows. Thanks to Hartmut
</span><br>
<span class="quotelev2">&gt;&gt;  Kaiser for reporting the problem.
</span><br>
<span class="quotelev2">&gt;&gt; * Fix process-wide binding and cpulocation routines on Linux when some
</span><br>
<span class="quotelev2">&gt;&gt;  threads disappear in the meantime. Thanks to Vlad Roubtsov for reporting
</span><br>
<span class="quotelev2">&gt;&gt;  the issue.
</span><br>
<span class="quotelev2">&gt;&gt; * Make installed scripts executable. Thanks to Jirka Hladky for reporting
</span><br>
<span class="quotelev2">&gt;&gt;  the problem.
</span><br>
<span class="quotelev2">&gt;&gt; * Fix libtool revision management when building for Windows. This fix was
</span><br>
<span class="quotelev2">&gt;&gt;  also released as hwloc v1.4.1.1 Windows builds. Thanks to Hartmut Kaiser
</span><br>
<span class="quotelev2">&gt;&gt;  for reporting the problem.
</span><br>
<span class="quotelev2">&gt;&gt; * Add Port info attribute to network OS devices inside OpenFabrics PCI
</span><br>
<span class="quotelev2">&gt;&gt;  devices so as to identify which interface corresponds to which port.
</span><br>
<span class="quotelev2">&gt;&gt; * Document requirements for interoperability helpers: I/O devices discovery
</span><br>
<span class="quotelev2">&gt;&gt;  is required for some of them; the topology must match the current host
</span><br>
<span class="quotelev2">&gt;&gt;  for most of them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that I haven't been able to post Windows builds yet but it will
</span><br>
<span class="quotelev2">&gt;&gt; happen in the near future.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3073.php">Jeff Squyres: "[hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3071.php">Brice Goglin: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>In reply to:</strong> <a href="3071.php">Brice Goglin: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
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
