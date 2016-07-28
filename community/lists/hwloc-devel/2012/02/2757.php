<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 08:02:34 2012" -->
<!-- isoreceived="20120201130234" -->
<!-- sent="Wed, 01 Feb 2012 14:02:29 +0100" -->
<!-- isosent="20120201130229" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224" -->
<!-- id="4F2937E5.9050908_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201201311636.q0VGaNAT007932_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 08:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2761.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>Maybe reply:</strong> <a href="2761.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any idea why this broke FreeBSD?
<br>
<a href="http://hydra.bordeaux.inria.fr/build/22112">http://hydra.bordeaux.inria.fr/build/22112</a> (same problem for tunk and v1.4)
<br>
Brice
<br>
<p><p><p>Le 31/01/2012 17:36, sthibaul_at_[hidden] a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2012-01-31 11:36:23 EST (Tue, 31 Jan 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 4224
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4224">https://svn.open-mpi.org/trac/hwloc/changeset/4224</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix build on x86_64 with -mcmodel=medium, which needs rbx like x86_32 needs ebx for -fPIC
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/private/cpuid.h |    17 ++++++++---------                       
</span><br>
<span class="quotelev1">&gt;    1 files changed, 8 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/private/cpuid.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/private/cpuid.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/private/cpuid.h	2012-01-31 11:36:23 EST (Tue, 31 Jan 2012)
</span><br>
<span class="quotelev1">&gt; @@ -1,5 +1,5 @@
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; - * Copyright &#194;&#169; 2010-2011 Universit&#195;&#169; Bordeaux 1
</span><br>
<span class="quotelev1">&gt; + * Copyright &#194;&#169; 2010-2012 Universit&#195;&#169; Bordeaux 1
</span><br>
<span class="quotelev1">&gt;   * Copyright &#194;&#169; 2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * See COPYING in top-level directory.
</span><br>
<span class="quotelev1">&gt; @@ -52,21 +52,20 @@
</span><br>
<span class="quotelev1">&gt;  static __hwloc_inline void hwloc_cpuid(unsigned *eax, unsigned *ebx, unsigned *ecx, unsigned *edx)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    asm(
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_X86_32_ARCH 
</span><br>
<span class="quotelev1">&gt; +#ifdef HWLOC_X86_32_ARCH
</span><br>
<span class="quotelev1">&gt;    &quot;push %%ebx\n\t&quot;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +  &quot;push %%rbx\n\t&quot;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;    &quot;cpuid\n\t&quot;
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_X86_32_ARCH 
</span><br>
<span class="quotelev1">&gt; +#ifdef HWLOC_X86_32_ARCH
</span><br>
<span class="quotelev1">&gt;    &quot;mov %%ebx,%1\n\t&quot;
</span><br>
<span class="quotelev1">&gt;    &quot;pop %%ebx\n\t&quot;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -  : &quot;+a&quot; (*eax),
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_X86_32_ARCH 
</span><br>
<span class="quotelev1">&gt; -    &quot;=r&quot; (*ebx),
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt; -    &quot;=b&quot; (*ebx),
</span><br>
<span class="quotelev1">&gt; +  &quot;mov %%ebx,%1\n\t&quot;
</span><br>
<span class="quotelev1">&gt; +  &quot;pop %%rbx\n\t&quot;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; -    &quot;+c&quot; (*ecx), &quot;=d&quot; (*edx));
</span><br>
<span class="quotelev1">&gt; +  : &quot;+a&quot; (*eax), &quot;=r&quot; (*ebx), &quot;+c&quot; (*ecx), &quot;=d&quot; (*edx));
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #endif /* HWLOC_PRIVATE_CPUID_H */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2761.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>Maybe reply:</strong> <a href="2761.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
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
