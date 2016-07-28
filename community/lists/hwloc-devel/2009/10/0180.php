<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 17:34:12 2009" -->
<!-- isoreceived="20091020213412" -->
<!-- sent="Tue, 20 Oct 2009 23:32:38 +0200" -->
<!-- isosent="20091020213238" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="4ADE2C76.4060600_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="82A550F5-053B-4A5E-B8B0-92C451FF3F48_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 17:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0181.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>Previous message:</strong> <a href="0179.php">Jeff Squyres: "[hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0179.php">Jeff Squyres: "[hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0187.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0187.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Pavan and I chatted on the phone this morning about
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/ticket/4">https://svn.open-mpi.org/trac/hwloc/ticket/4</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The *easiest* solution for MPICH2 would be if they could
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_SUBDIRS our configure script.  However, this has the
</span><br>
<span class="quotelev1">&gt; condition that hwloc's configure could never fail -- e.g., it can't
</span><br>
<span class="quotelev1">&gt; call AC_MSG_ERROR.  For unsupported platforms, it will need to still
</span><br>
<span class="quotelev1">&gt; succeed and build/install a token libhwloc.la.  This libhwloc.a can
</span><br>
<span class="quotelev1">&gt; just return a graceful failure from hwloc_init() at run-time
</span><br>
<span class="quotelev1">&gt; indicating that it can't do anything on this platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By default, I'm not comfortable with this.  But I would be comfortable
</span><br>
<span class="quotelev1">&gt; with such a scheme if a non-default flag is passed to configure (e.g.,
</span><br>
<span class="quotelev1">&gt; &quot;--enable-always-build&quot;, or perhaps a better name).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would this be hard to do from the building side?  I.e., I have not
</span><br>
<span class="quotelev1">&gt; looked in the C code much yet -- do we have much code that won't build
</span><br>
<span class="quotelev1">&gt; on unsupported platforms, or do we need a &quot;generic / always fail&quot; .c
</span><br>
<span class="quotelev1">&gt; file that is trivial/portable C, but always returns failures for all
</span><br>
<span class="quotelev1">&gt; hwloc API functions...?
</span><br>
<p><span class="quotelev1">&gt;From my quick tests, if you try to build on a non-supported platform,
</span><br>
you'll probably get a System object with 1 or N processors depending on
<br>
whether sysconf is available. So building the topology looks ok. And you
<br>
get -1 and ENOSYS if you try to bind.
<br>
<p>I am not sure how hard it'd be to avoid errors during configure. Are we
<br>
sure PKG_* macros or other external things will never use AC_MSG_ERROR ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0181.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1198"</a>
<li><strong>Previous message:</strong> <a href="0179.php">Jeff Squyres: "[hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0179.php">Jeff Squyres: "[hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0187.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0187.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
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
