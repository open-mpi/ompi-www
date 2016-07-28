<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:47:05 2009" -->
<!-- isoreceived="20091112164705" -->
<!-- sent="Thu, 12 Nov 2009 17:47:00 +0100" -->
<!-- isosent="20091112164700" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="20091112164700.GG4729_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3487262E-9A0D-4D55-A58A-15D2DE9496FB_at_cisco.com" -->
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
<strong>Date:</strong> 2009-11-12 11:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 12 Nov 2009 08:31:50 -0800, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Nov 11, 2009, at 4:22 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt;- non-linux plpa users are restricted to what really is portable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PLPA = Linux only.  :-)
</span><br>
<p>I know, but there's usually no reason why they shouldn't now target
<br>
non-Linux too.  Again, I really wonder how they'd manage to end up with
<br>
tids in their hands instead of pthread_t-s.
<br>
<p><span class="quotelev2">&gt; &gt;- we don't have to cripple the hwloc interface (i.e. document that we
</span><br>
<span class="quotelev2">&gt; &gt;  accept non-portable input) just for the linuxish interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PLPA interface for specifying specific PIDs wasn't just for  
</span><br>
<span class="quotelev1">&gt; threads -- it really was for getting/setting the affinity of other  
</span><br>
<span class="quotelev1">&gt; processes.  E.g., htop uses PLPA for this purpose (htop.sf.net).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do other OS's not support that?
</span><br>
<p>Some do, some don't.  In any case no OS other than Linux mixes thread
<br>
IDs and process IDs in their API and thus confuse the user like Linux
<br>
does.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0370.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
