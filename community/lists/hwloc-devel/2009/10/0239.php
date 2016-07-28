<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 03:08:13 2009" -->
<!-- isoreceived="20091022070813" -->
<!-- sent="Thu, 22 Oct 2009 09:08:00 +0200" -->
<!-- isosent="20091022070800" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc2 failures" -->
<!-- id="20091022070800.GP4419_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ADFB5E5.4030400_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc2 failures<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 03:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0240.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="0238.php">Chris Samuel: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="0236.php">Pavan Balaji: "[hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Wed 21 Oct 2009 20:31:17 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; With suncc (sunstudio 12):
</span><br>
<span class="quotelev1">&gt; ==================================================================
</span><br>
<span class="quotelev1">&gt; &quot;topology-linux.c&quot;, line 782: syntax error before or at: ...
</span><br>
<p>Ah, you are using suncc on linux, I wouldn't have expected such
<br>
combination.  Well that can easily be fixed.
<br>
<p><span class="quotelev1">&gt; With pgcc (9.0-4):
</span><br>
<span class="quotelev1">&gt; ==================================================================
</span><br>
<span class="quotelev1">&gt; libtool: link: pgcc -g -o .libs/lstopo lstopo-lstopo.o
</span><br>
<span class="quotelev1">&gt; lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o
</span><br>
<span class="quotelev1">&gt; lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o
</span><br>
<span class="quotelev1">&gt; -L/home/balaji/tmp/hwloc/hwloc-0.9.1rc2/src -lm ../src/.libs/libhwloc.so
</span><br>
<span class="quotelev1">&gt; -ltermcap
</span><br>
<span class="quotelev1">&gt; ../src/.libs/libhwloc.so: undefined reference to `__CPU_SET'
</span><br>
<span class="quotelev1">&gt; ../src/.libs/libhwloc.so: undefined reference to `__CPU_ZERO'
</span><br>
<p>Could you also post the warnings?  These are macros and should be
<br>
defined in /usr/include/bits/sched.h.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0240.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="0238.php">Chris Samuel: "Re: [hwloc-devel] [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>In reply to:</strong> <a href="0236.php">Pavan Balaji: "[hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
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
