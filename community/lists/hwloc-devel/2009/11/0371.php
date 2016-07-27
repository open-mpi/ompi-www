<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:31:56 2009" -->
<!-- isoreceived="20091112163156" -->
<!-- sent="Thu, 12 Nov 2009 08:31:50 -0800" -->
<!-- isosent="20091112163150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="3487262E-9A0D-4D55-A58A-15D2DE9496FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091112002258.GH4729_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2009-11-12 11:31:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0374.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0374.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2009, at 4:22 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Another way to go is in hwloc_plpa_sched_setaffinity put in
</span><br>
<span class="quotelev1">&gt; #ifdef HWLOC_LINUX_SYS some code that calls the internal
</span><br>
<span class="quotelev1">&gt; hwloc_linux_set_tid_cpubind (with a strong comment that nobody else
</span><br>
<span class="quotelev1">&gt; should call it), so that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - existing linux plpa users can have the same behavior, but we can
</span><br>
<span class="quotelev1">&gt;   document here that calling hwloc_plpa_sched_setaffinity with a pid
</span><br>
<span class="quotelev1">&gt;   different than zero portably means something only for single- 
</span><br>
<span class="quotelev1">&gt; threaded
</span><br>
<span class="quotelev1">&gt;   processes.
</span><br>
<span class="quotelev1">&gt; - non-linux plpa users are restricted to what really is portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>PLPA = Linux only.  :-)
<br>
<p>Per my prior mail, remember that some (many?) apps don't care about  
<br>
portability.
<br>
<p><span class="quotelev1">&gt; - we don't have to cripple the hwloc interface (i.e. document that we
</span><br>
<span class="quotelev1">&gt;   accept non-portable input) just for the linuxish interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The PLPA interface for specifying specific PIDs wasn't just for  
<br>
threads -- it really was for getting/setting the affinity of other  
<br>
processes.  E.g., htop uses PLPA for this purpose (htop.sf.net).
<br>
<p>Do other OS's not support that?
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
<li><strong>Next message:</strong> <a href="0372.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0374.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0374.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
