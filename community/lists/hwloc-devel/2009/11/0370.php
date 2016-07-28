<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:28:39 2009" -->
<!-- isoreceived="20091112162839" -->
<!-- sent="Thu, 12 Nov 2009 08:28:32 -0800" -->
<!-- isosent="20091112162832" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="FABC7EA1-F103-45F0-BE1D-4560F1B8DDAA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091112000314.GF4729_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2009-11-12 11:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0369.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing to not forget is that some (many?) applications don't care a  
<br>
whit about portability to other OS's.  You view feature X as a  
<br>
portability horror; they view it as a feature.
<br>
<p>Hence, they may actually *want* to take advantage of the ability to  
<br>
pin a specific thread (that is not the current thread).
<br>
<p><p>On Nov 11, 2009, at 4:03 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Thu 12 Nov 2009 00:31:48 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that our hwloc/Linux does not implement
</span><br>
<span class="quotelev2">&gt; &gt; set_proc_cpubind() so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it can implement one that assumes that the target process is
</span><br>
<span class="quotelev1">&gt; singlethreaded, i.e. in hwloc_set_proc_cpubind distinguish between
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_PROCESS being set or not, or by just passing the policy
</span><br>
<span class="quotelev1">&gt; flag as such to OS hooks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * document in hwloc.h that it may bind a single thread if the
</span><br>
<span class="quotelev2">&gt; &gt; application (wrongly) passes a tid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd really rather avoid even mentioning tids in the hwloc  
</span><br>
<span class="quotelev1">&gt; documentation
</span><br>
<span class="quotelev1">&gt; except saying &quot;don't use that, it's not portable, don't even ask,  
</span><br>
<span class="quotelev1">&gt; you'd
</span><br>
<span class="quotelev1">&gt; be horrified&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * document that hwloc_plpa_sched_setaffinity now works on processes
</span><br>
<span class="quotelev2">&gt; &gt; instead of pids and that application should use thread_t and
</span><br>
<span class="quotelev2">&gt; &gt; set_thread_cpubind for local threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or pass 0 to express &quot;the current thread&quot;, which was already valid for
</span><br>
<span class="quotelev1">&gt; plpa_sched_setaffinity, and _is_ portable (and should already have  
</span><br>
<span class="quotelev1">&gt; been
</span><br>
<span class="quotelev1">&gt; the only thing that truly portable applications use).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; * maybe return -ENOSYS on Linux if STRICT is given?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess you mean return 0 if STRICT is not given, and mean &quot;it's not
</span><br>
<span class="quotelev1">&gt; strict because we haven't actually done it for all the threads, or  
</span><br>
<span class="quotelev1">&gt; even
</span><br>
<span class="quotelev1">&gt; not at all&quot;?  I'd really rather not lie like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0369.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
