<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:23:47 2009" -->
<!-- isoreceived="20091112172347" -->
<!-- sent="Thu, 12 Nov 2009 18:23:43 +0100" -->
<!-- isosent="20091112172343" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="20091112172343.GJ4729_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3858B686-EBE4-4AC4-8593-DDD3B27A233C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 12:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0379.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 12 Nov 2009 09:08:45 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; Fair enough.  I think we actually agree -- these emails are quite  
</span><br>
<span class="quotelev1">&gt; confusing. :-)
</span><br>
<p>Ok :)
<br>
<p><span class="quotelev1">&gt; 1. Let's not mix thread and PIDs into a single argument like Linux does
</span><br>
<p>Ok, I've just done it :)
<br>
but in the linux.h header only, for people who really insist on using
<br>
the non-portable linux tids.
<br>
<p><span class="quotelev1">&gt; 3. Identifying threads by pthread_self() is Good (is that available on  
</span><br>
<span class="quotelev1">&gt; all OS's that we care about?)
</span><br>
<p>Some OSes don't have an interface to bind another thread, but when they
<br>
do, they provide a way to express that through a pthread_t. AIX's
<br>
functions uses kernel tids, but it also provides a conversion function.
<br>
<p><span class="quotelev1">&gt; More specifically: IMHO, it would be very nice/useful to be able to get 
</span><br>
<span class="quotelev1">&gt; +set the affinity of threads other than the current thread (as  
</span><br>
<span class="quotelev1">&gt; identified by pthread_self()), even if that only works on some OS's.
</span><br>
<p>That's already the case since libtopology :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0379.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
