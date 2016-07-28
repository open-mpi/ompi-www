<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 17:47:43 2008" -->
<!-- isoreceived="20081202224743" -->
<!-- sent="Tue, 02 Dec 2008 16:47:33 -0600" -->
<!-- isosent="20081202224733" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="4935BB05.5000808_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9F3A78C-9BBB-4A49-8CCD-3CF64C012F55_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-02 17:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
its on OpenSuSE 11 with kernel 2.6.25.11. I don't know the libnuma 
<br>
library version, but I suspect that its fairly new.
<br>
<p>I will try to investigate that in the next days a little more. I do 
<br>
think that they use sched_setaffinity() underneath the hood (because in 
<br>
one of my failed attempts when I passed in the wrong argument, I got 
<br>
actually the same error message that I got earlier with 
<br>
sched_setaffinity), but they must do something additionally underneath.
<br>
<p>Anyway, I just wanted to report the result, and that there is obviously 
<br>
a difference, even if can't explain it right now in details.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 2, 2008, at 11:27 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so I ran a couple of tests today and I can not confirm your statement. 
</span><br>
<span class="quotelev2">&gt;&gt; I wrote simple a simple test code where a process first sets an 
</span><br>
<span class="quotelev2">&gt;&gt; affinity mask and than spawns a number of threads. The threads modify 
</span><br>
<span class="quotelev2">&gt;&gt; the affinity mask and every thread ( including the master thread) 
</span><br>
<span class="quotelev2">&gt;&gt; print out there affinity mask at the end.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With sched_getaffinity() and sched_setaffinity() it was indeed such 
</span><br>
<span class="quotelev2">&gt;&gt; that the master thread had the same affinity mask as the thread that 
</span><br>
<span class="quotelev2">&gt;&gt; it spawned. This means, that the modification of the affinity mask by 
</span><br>
<span class="quotelev2">&gt;&gt; a new thread in fact did affect the master thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Executing the same codesquence however using the libnuma calls, the 
</span><br>
<span class="quotelev2">&gt;&gt; master thread however was not affected by the new affinity mask of the 
</span><br>
<span class="quotelev2">&gt;&gt; children. So clearly, libnuma must be doing something differently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What distro/version of Linux are you using, and what version of libnuma?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Libnuma v2.0.x very definitely is just a wrapper around the syscall for 
</span><br>
<span class="quotelev1">&gt; sched_setaffinity().  I downloaded it from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="ftp://oss.sgi.com/www/projects/libnuma/download">ftp://oss.sgi.com/www/projects/libnuma/download</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
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
