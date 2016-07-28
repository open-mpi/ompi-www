<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 12:16:46 2008" -->
<!-- isoreceived="20080728161646" -->
<!-- sent="Mon, 28 Jul 2008 12:16:35 -0400" -->
<!-- isosent="20080728161635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="530AC27C-DCEC-4D73-BA67-7195A7B9DD0B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F56C384D-782E-40B7-8E86-456308794651_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs since r19010<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 12:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4468.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4468.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2008, at 12:03 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Interesting. The self is only used for local communications. I don't  
</span><br>
<span class="quotelev1">&gt; expect that any benchmark execute such communications, but  
</span><br>
<span class="quotelev1">&gt; apparently I was wrong. Please let me know the failing test, I will  
</span><br>
<span class="quotelev1">&gt; take a look this evening.
</span><br>
<p>FWIW, my manual tests of a simplistic &quot;ring&quot; program work for all  
<br>
combinations (openib, openib+self, openib+self+sm).  Shrug.
<br>
<p>But for OSU latency, I found that openib, openib+sm work, but openib+sm 
<br>
+self hangs (same results whether the 2 procs are on the same node or  
<br>
different nodes).  There is no self communication in osu_latency, so  
<br>
something else must be going on.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4468.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4468.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
