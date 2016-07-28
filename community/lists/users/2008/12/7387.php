<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 20:57:00 2008" -->
<!-- isoreceived="20081203015700" -->
<!-- sent="Tue, 2 Dec 2008 20:56:54 -0500" -->
<!-- isosent="20081203015654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="5904F87F-5077-444F-A5C5-02DFAA3A9C87_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4935BB05.5000808_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2008-12-02 20:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7388.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fair enough; let me know what you find.  It would be good to  
<br>
understand exactly why you're seeing what you're seeing...
<br>
<p><p>On Dec 2, 2008, at 5:47 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; its on OpenSuSE 11 with kernel 2.6.25.11. I don't know the libnuma  
</span><br>
<span class="quotelev1">&gt; library version, but I suspect that its fairly new.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to investigate that in the next days a little more. I do  
</span><br>
<span class="quotelev1">&gt; think that they use sched_setaffinity() underneath the hood (because  
</span><br>
<span class="quotelev1">&gt; in one of my failed attempts when I passed in the wrong argument, I  
</span><br>
<span class="quotelev1">&gt; got actually the same error message that I got earlier with  
</span><br>
<span class="quotelev1">&gt; sched_setaffinity), but they must do something additionally  
</span><br>
<span class="quotelev1">&gt; underneath.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I just wanted to report the result, and that there is  
</span><br>
<span class="quotelev1">&gt; obviously a difference, even if can't explain it right now in details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 2, 2008, at 11:27 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I ran a couple of tests today and I can not confirm your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; statement. I wrote simple a simple test code where a process first  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sets an affinity mask and than spawns a number of threads. The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads modify the affinity mask and every thread ( including the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master thread) print out there affinity mask at the end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With sched_getaffinity() and sched_setaffinity() it was indeed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such that the master thread had the same affinity mask as the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread that it spawned. This means, that the modification of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affinity mask by a new thread in fact did affect the master thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executing the same codesquence however using the libnuma calls,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the master thread however was not affected by the new affinity  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mask of the children. So clearly, libnuma must be doing something  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differently.
</span><br>
<span class="quotelev2">&gt;&gt; What distro/version of Linux are you using, and what version of  
</span><br>
<span class="quotelev2">&gt;&gt; libnuma?
</span><br>
<span class="quotelev2">&gt;&gt; Libnuma v2.0.x very definitely is just a wrapper around the syscall  
</span><br>
<span class="quotelev2">&gt;&gt; for sched_setaffinity().  I downloaded it from:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="ftp://oss.sgi.com/www/projects/libnuma/download">ftp://oss.sgi.com/www/projects/libnuma/download</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7388.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>In reply to:</strong> <a href="7386.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
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
