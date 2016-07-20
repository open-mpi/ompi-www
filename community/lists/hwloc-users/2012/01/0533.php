<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 10:52:38 2012" -->
<!-- isoreceived="20120130155238" -->
<!-- sent="Mon, 30 Jan 2012 15:52:32 +0000" -->
<!-- isosent="20120130155232" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads" -->
<!-- id="4F26BCC0.6090709_at_oerc.ox.ac.uk" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="731871AD-2F51-41EF-82C2-817A1F079EA1_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads<br>
<strong>From:</strong> Albert Solernou (<em>albert.solernou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 10:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0534.php">Devendar Bureddy: "[hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>In reply to:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am not using pthreads but OpenMP. After Samuel's answer I have 
<br>
realised that most (if not all) the OpenMP implementations reuse the 
<br>
created threads. This reduces the overhead that would come from 
<br>
effectively creating and a group of threads each time a process spawns. 
<br>
Because of that, my testing on the re-usability of the binding was not 
<br>
conclusive as I was getting only positive answers.
<br>
<p>Best,
<br>
Albert
<br>
<p>On Mon 30 Jan 2012 15:08:26 GMT, Wheeler, Kyle Bruce wrote:
<br>
<span class="quotelev1">&gt; If you're working with pthreads, the answer is no. The binding was only relevant to the thread you created; when the thread was destroyed, so was the binding. The OS does not keep track of a history of where your now-nonexistent threads were bound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm surprised it's difficult to prove with a simple program, though... did getting the second thread's CPU-mask return ambiguous results? I'm thinking something like this pseudocode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void func(void* arg) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;initial CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
</span><br>
<span class="quotelev1">&gt;      hwloc_cur_thread_setcpumask(foo);
</span><br>
<span class="quotelev1">&gt;      printf(&quot;subsequent CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     pthread_t f;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;mainthread CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
</span><br>
<span class="quotelev1">&gt;     pthread_create(&amp;f, func);
</span><br>
<span class="quotelev1">&gt;     pthread_join(f);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;mainthread CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
</span><br>
<span class="quotelev1">&gt;     pthread_create(&amp;f, func);
</span><br>
<span class="quotelev1">&gt;     pthread_join(f);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;mainthread CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2012, at 4:36 AM, Albert Solernou wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am working on a threaded code, and want to bind threads to cores. However, the process creates and destroys the threads, so here is the question:
</span><br>
<span class="quotelev2">&gt;&gt;   What happens if I enter on a threaded part of the code, bind &quot;thread X&quot; to a core, return to a serial part and then thread again? Can I expect to find thread X bound to the core I bound it previously?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guessed that the answer is &quot;no&quot;, but I couldn't prove it using a simple program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Albert
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0534.php">Devendar Bureddy: "[hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>In reply to:</strong> <a href="0532.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
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
