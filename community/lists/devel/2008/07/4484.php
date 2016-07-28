<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 10:14:06 2008" -->
<!-- isoreceived="20080729141406" -->
<!-- sent="Tue, 29 Jul 2008 10:13:56 -0400" -->
<!-- isosent="20080729141356" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="24799235-6901-4FE1-9108-0DC82BE5EA14_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E72A295-812F-456E-8DAD-7F9250F6BCBA_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-29 10:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4485.php">Terry Dontje: "[OMPI devel] ticket #972"</a>
<li><strong>Previous message:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2008, at 9:47 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok.  FWIW, Pasha and I think that openib has supported &quot;send-to- 
</span><br>
<span class="quotelev1">&gt; self&quot; for a while (we don't know exactly when; but Pasha thinks it  
</span><br>
<span class="quotelev1">&gt; is very old code that we don't check for self in add_procs).  But it  
</span><br>
<span class="quotelev1">&gt; only broke recently.
</span><br>
<p><p>More in the FWIW category -- we just checked, and OMPI v1.2 supported  
<br>
&quot;--mca btl openib&quot; (note the lack of &quot;,self&quot;).  So the openib BTL has,  
<br>
indeed, supported send-to-self for quite a while.
<br>
<p>This should help narrow where to start looking for the problem:  
<br>
changes within the last few weeks.
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
<li><strong>Next message:</strong> <a href="4485.php">Terry Dontje: "[OMPI devel] ticket #972"</a>
<li><strong>Previous message:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
