<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 12:52:09 2008" -->
<!-- isoreceived="20081202175209" -->
<!-- sent="Tue, 2 Dec 2008 12:52:03 -0500" -->
<!-- isosent="20081202175203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="E9F3A78C-9BBB-4A49-8CCD-3CF64C012F55_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="493561FF.3080201_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid program<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-02 12:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7384.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7384.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2008, at 11:27 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; so I ran a couple of tests today and I can not confirm your  
</span><br>
<span class="quotelev1">&gt; statement. I wrote simple a simple test code where a process first  
</span><br>
<span class="quotelev1">&gt; sets an affinity mask and than spawns a number of threads. The  
</span><br>
<span class="quotelev1">&gt; threads modify the affinity mask and every thread ( including the  
</span><br>
<span class="quotelev1">&gt; master thread) print out there affinity mask at the end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With sched_getaffinity() and sched_setaffinity() it was indeed such  
</span><br>
<span class="quotelev1">&gt; that the master thread had the same affinity mask as the thread that  
</span><br>
<span class="quotelev1">&gt; it spawned. This means, that the modification of the affinity mask  
</span><br>
<span class="quotelev1">&gt; by a new thread in fact did affect the master thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executing the same codesquence however using the libnuma calls, the  
</span><br>
<span class="quotelev1">&gt; master thread however was not affected by the new affinity mask of  
</span><br>
<span class="quotelev1">&gt; the children. So clearly, libnuma must be doing something differently.
</span><br>
<p>What distro/version of Linux are you using, and what version of libnuma?
<br>
<p>Libnuma v2.0.x very definitely is just a wrapper around the syscall  
<br>
for sched_setaffinity().  I downloaded it from:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ftp://oss.sgi.com/www/projects/libnuma/download">ftp://oss.sgi.com/www/projects/libnuma/download</a>
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
<li><strong>Next message:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7384.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7384.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
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
