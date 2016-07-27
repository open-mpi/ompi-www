<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:08:51 2009" -->
<!-- isoreceived="20091112170851" -->
<!-- sent="Thu, 12 Nov 2009 09:08:45 -0800" -->
<!-- isosent="20091112170845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="3858B686-EBE4-4AC4-8593-DDD3B27A233C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091112164407.GF4729_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 12:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0380.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2009, at 8:44 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; I'm not saying pinning a specific thread is a horror. I'm saying
</span><br>
<span class="quotelev1">&gt; expressing which thread should be bound through tids instead of
</span><br>
<span class="quotelev1">&gt; pthread_t is.  The only sane way I could see an application use tids
</span><br>
<span class="quotelev1">&gt; is a monitoring application that looks into /proc/*/task/* . In that
</span><br>
<span class="quotelev1">&gt; case, ok we can expose the hwloc_linux_set_tid_cpubind function in a
</span><br>
<span class="quotelev1">&gt; hwloc/linux.h header, and we need it for complete PLPA support anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm against is even mentioning such thing in the main hwloc.h;  
</span><br>
<span class="quotelev1">&gt; tid
</span><br>
<span class="quotelev1">&gt; vs pid vs pthread_t has been confused enough by Linus before the 2.6  
</span><br>
<span class="quotelev1">&gt; fix
</span><br>
<span class="quotelev1">&gt; (to the point that I still see parallel programming courses explaining
</span><br>
<span class="quotelev1">&gt; the 2.4 semantic...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Fair enough.  I think we actually agree -- these emails are quite  
<br>
confusing. :-)
<br>
<p>1. Let's not mix thread and PIDs into a single argument like Linux does
<br>
2. Binding individual threads is a Good/useful thing
<br>
3. Identifying threads by pthread_self() is Good (is that available on  
<br>
all OS's that we care about?)
<br>
<p>More specifically: IMHO, it would be very nice/useful to be able to get 
<br>
+set the affinity of threads other than the current thread (as  
<br>
identified by pthread_self()), even if that only works on some OS's.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0380.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
