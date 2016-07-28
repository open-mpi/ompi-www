<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:45:24 2008" -->
<!-- isoreceived="20081205154524" -->
<!-- sent="Fri, 05 Dec 2008 09:45:23 -0600" -->
<!-- isosent="20081205154523" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="49394C93.7060706_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5904F87F-5077-444F-A5C5-02DFAA3A9C87_at_cisco.com" -->
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
<strong>Date:</strong> 2008-12-05 10:45:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7408.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>In reply to:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, so I digged a little deeper, and have some good news. Let me start 
<br>
with a set of routines, that we didn't even discuss yet, but which works 
<br>
for setting thread affinity, and discuss then libnuma and 
<br>
sched_setaffinity() again.
<br>
<p>-----------
<br>
On linux systems, the pthread library has a set of routines to modify 
<br>
and determine thread-affinity related information:
<br>
<p>#define __USE_GNU
<br>
<p>int pthread_setaffinity_np (pthread_t __th, size_t __cpusetsize,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const cpu_set_t *__cpuset);
<br>
int pthread_getaffinity_np (pthread_t __th, size_t __cpusetsize,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu_set_t *__cpuset)
<br>
<p>These two routines can be used to modify the affinity of an existing 
<br>
thread. If you would like to modify the affinity of a thread *before* 
<br>
creating it, you can use a similar routines.
<br>
<p>int pthread_attr_setaffinity_np (pthread_attr_t *__attr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t __cpusetsize,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const cpu_set_t *__cpuset)
<br>
<p>I tested the first two routines, and they did work for me.
<br>
-----------
<br>
<p>Now to libnuma vs. sched_setaffinity: after digging a little deeper in 
<br>
the libnuma sources, I realized that one of the differences on what they 
<br>
do vs. what I did in my testcases was, that libnuma uses the 
<br>
sched_setaffinity() calls with a pid of 0, instead of determining the 
<br>
pid using the getpid() function. According to the sched_setaffinity() 
<br>
manpages, pid of zero means 'apply the new rules to the current 
<br>
process', but it does in fact mean 'to the current task/thread'. I wrote 
<br>
a set of tests, where I used sched_setaffinity() with the pid zero, and 
<br>
I was in fact able to modify the affinity of an individual thread using 
<br>
sched_setaffinity(). If you pass in the pid of the process, it will 
<br>
affect the affinity of all threads of that process.
<br>
<p>Bottom line is, you can modify the affinity of a thread using both 
<br>
libnuma on a per socket basis and the sched_setaffinity() calls on a per 
<br>
core basis. Alternatively, you can use the pthread_setaffinity_np() 
<br>
function to modify the affinity of a thread using a cpu_set_t similar to 
<br>
sched_setaffinity.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Fair enough; let me know what you find.  It would be good to understand 
</span><br>
<span class="quotelev1">&gt; exactly why you're seeing what you're seeing...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2008, at 5:47 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; its on OpenSuSE 11 with kernel 2.6.25.11. I don't know the libnuma 
</span><br>
<span class="quotelev2">&gt;&gt; library version, but I suspect that its fairly new.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will try to investigate that in the next days a little more. I do 
</span><br>
<span class="quotelev2">&gt;&gt; think that they use sched_setaffinity() underneath the hood (because 
</span><br>
<span class="quotelev2">&gt;&gt; in one of my failed attempts when I passed in the wrong argument, I 
</span><br>
<span class="quotelev2">&gt;&gt; got actually the same error message that I got earlier with 
</span><br>
<span class="quotelev2">&gt;&gt; sched_setaffinity), but they must do something additionally underneath.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, I just wanted to report the result, and that there is 
</span><br>
<span class="quotelev2">&gt;&gt; obviously a difference, even if can't explain it right now in details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 2, 2008, at 11:27 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so I ran a couple of tests today and I can not confirm your 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; statement. I wrote simple a simple test code where a process first 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sets an affinity mask and than spawns a number of threads. The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads modify the affinity mask and every thread ( including the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master thread) print out there affinity mask at the end.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With sched_getaffinity() and sched_setaffinity() it was indeed such 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that the master thread had the same affinity mask as the thread that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it spawned. This means, that the modification of the affinity mask 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by a new thread in fact did affect the master thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Executing the same codesquence however using the libnuma calls, the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master thread however was not affected by the new affinity mask of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the children. So clearly, libnuma must be doing something differently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What distro/version of Linux are you using, and what version of libnuma?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Libnuma v2.0.x very definitely is just a wrapper around the syscall 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for sched_setaffinity().  I downloaded it from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="ftp://oss.sgi.com/www/projects/libnuma/download">ftp://oss.sgi.com/www/projects/libnuma/download</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7408.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>In reply to:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
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
