<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 21:04:16 2009" -->
<!-- isoreceived="20091112020416" -->
<!-- sent="Thu, 12 Nov 2009 03:04:11 +0100" -->
<!-- isosent="20091112020411" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="20091112020411.GN4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AF824A3.6090200_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 21:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Previous message:</strong> <a href="0367.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1335)"</a>
<li><strong>In reply to:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 09 Nov 2009 15:18:11 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I don't think we need SET_CPUBIND since (from what I understand) it
</span><br>
<span class="quotelev1">&gt; would be equivalent to SET_PROC_CPUBIND | SET_THREAD_CPUBIND.
</span><br>
<p>Being able to set oneself's cpuset is not the same as being able to set
<br>
the cpuset of other processes or other threads.
<br>
<p>We should also probably expose whether strict binding is available and
<br>
whether whole processes and single threads can be bound.
<br>
<p>In a word, I believe we should just expose which exact parts of the
<br>
binding API will never return ENOSYS.  That would make it a lot easier
<br>
to comprehend and much more straightforward to use it even though
<br>
the interface is very powerful and can thus lead to a lot of binding
<br>
possibilities.  If an application has requirements A, B and C and would
<br>
be even happier if D and E were available, it can prepare arguments
<br>
for A, B and C, and if D and E are announced as being available, add
<br>
arguments for them, and then call the function.  That saves trying with
<br>
D and E, or only with D, or only with E, and eventually fallback to not
<br>
using either..
<br>
<p><span class="quotelev1">&gt; We'd have to keep in mind that 32bits in this flag bitmask is small
</span><br>
<span class="quotelev1">&gt; (we'll likely need many other flags in the future, for instance
</span><br>
<span class="quotelev1">&gt; IODEVICE_DISCOVERY, SET/GET_MEMBIND, SET/GET_RANGE_MEMBIND).
</span><br>
<p>That's probably a hint that we should find another way :)
<br>
<p>How about a function that returns a structure filled with one long
<br>
per feature (detection, thread bind, memory bind, etc.), part of
<br>
hwloc_topology_t?  That way we can extend it at will.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Previous message:</strong> <a href="0367.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1335)"</a>
<li><strong>In reply to:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0366.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
