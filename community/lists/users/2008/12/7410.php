<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:52:27 2008" -->
<!-- isoreceived="20081205155227" -->
<!-- sent="Fri, 5 Dec 2008 10:52:20 -0500" -->
<!-- isosent="20081205155220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="70027C8A-A28C-46DC-80EA-6227F055B54C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49394C93.7060706_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2008-12-05 10:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7411.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nifty -- good to know.  Thanks for looking into this!
<br>
<p>Do any kernel-hacker types on this list know roundabout what version  
<br>
thread-affinity was brought into the Linux kernel?
<br>
<p>FWIW: all the same concepts here (using pid==0) should also work for  
<br>
PLPA, so you can set via socket/core, etc.
<br>
<p><p>On Dec 5, 2008, at 10:45 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; ok, so I digged a little deeper, and have some good news. Let me  
</span><br>
<span class="quotelev1">&gt; start with a set of routines, that we didn't even discuss yet, but  
</span><br>
<span class="quotelev1">&gt; which works for setting thread affinity, and discuss then libnuma  
</span><br>
<span class="quotelev1">&gt; and sched_setaffinity() again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; On linux systems, the pthread library has a set of routines to  
</span><br>
<span class="quotelev1">&gt; modify and determine thread-affinity related information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define __USE_GNU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int pthread_setaffinity_np (pthread_t __th, size_t __cpusetsize,
</span><br>
<span class="quotelev1">&gt;                            const cpu_set_t *__cpuset);
</span><br>
<span class="quotelev1">&gt; int pthread_getaffinity_np (pthread_t __th, size_t __cpusetsize,
</span><br>
<span class="quotelev1">&gt;                            cpu_set_t *__cpuset)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These two routines can be used to modify the affinity of an existing  
</span><br>
<span class="quotelev1">&gt; thread. If you would like to modify the affinity of a thread  
</span><br>
<span class="quotelev1">&gt; *before* creating it, you can use a similar routines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int pthread_attr_setaffinity_np (pthread_attr_t *__attr,
</span><br>
<span class="quotelev1">&gt;                                 size_t __cpusetsize,
</span><br>
<span class="quotelev1">&gt;                                 const cpu_set_t *__cpuset)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested the first two routines, and they did work for me.
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now to libnuma vs. sched_setaffinity: after digging a little deeper  
</span><br>
<span class="quotelev1">&gt; in the libnuma sources, I realized that one of the differences on  
</span><br>
<span class="quotelev1">&gt; what they do vs. what I did in my testcases was, that libnuma uses  
</span><br>
<span class="quotelev1">&gt; the sched_setaffinity() calls with a pid of 0, instead of  
</span><br>
<span class="quotelev1">&gt; determining the pid using the getpid() function. According to the  
</span><br>
<span class="quotelev1">&gt; sched_setaffinity() manpages, pid of zero means 'apply the new rules  
</span><br>
<span class="quotelev1">&gt; to the current process', but it does in fact mean 'to the current  
</span><br>
<span class="quotelev1">&gt; task/thread'. I wrote a set of tests, where I used  
</span><br>
<span class="quotelev1">&gt; sched_setaffinity() with the pid zero, and I was in fact able to  
</span><br>
<span class="quotelev1">&gt; modify the affinity of an individual thread using  
</span><br>
<span class="quotelev1">&gt; sched_setaffinity(). If you pass in the pid of the process, it will  
</span><br>
<span class="quotelev1">&gt; affect the affinity of all threads of that process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bottom line is, you can modify the affinity of a thread using both  
</span><br>
<span class="quotelev1">&gt; libnuma on a per socket basis and the sched_setaffinity() calls on a  
</span><br>
<span class="quotelev1">&gt; per core basis. Alternatively, you can use the  
</span><br>
<span class="quotelev1">&gt; pthread_setaffinity_np() function to modify the affinity of a thread  
</span><br>
<span class="quotelev1">&gt; using a cpu_set_t similar to sched_setaffinity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fair enough; let me know what you find.  It would be good to  
</span><br>
<span class="quotelev2">&gt;&gt; understand exactly why you're seeing what you're seeing...
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 2, 2008, at 5:47 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its on OpenSuSE 11 with kernel 2.6.25.11. I don't know the libnuma  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library version, but I suspect that its fairly new.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will try to investigate that in the next days a little more. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do think that they use sched_setaffinity() underneath the hood  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (because in one of my failed attempts when I passed in the wrong  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument, I got actually the same error message that I got earlier  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with sched_setaffinity), but they must do something additionally  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; underneath.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I just wanted to report the result, and that there is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obviously a difference, even if can't explain it right now in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 2, 2008, at 11:27 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; so I ran a couple of tests today and I can not confirm your  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; statement. I wrote simple a simple test code where a process  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; first sets an affinity mask and than spawns a number of threads.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The threads modify the affinity mask and every thread  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( including the master thread) print out there affinity mask at  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the end.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With sched_getaffinity() and sched_setaffinity() it was indeed  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; such that the master thread had the same affinity mask as the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thread that it spawned. This means, that the modification of the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; affinity mask by a new thread in fact did affect the master  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Executing the same codesquence however using the libnuma calls,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the master thread however was not affected by the new affinity  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mask of the children. So clearly, libnuma must be doing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something differently.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What distro/version of Linux are you using, and what version of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libnuma?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Libnuma v2.0.x very definitely is just a wrapper around the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; syscall for sched_setaffinity().  I downloaded it from:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="ftp://oss.sgi.com/www/projects/libnuma/download">ftp://oss.sgi.com/www/projects/libnuma/download</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7411.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7409.php">George Bosilca: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
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
