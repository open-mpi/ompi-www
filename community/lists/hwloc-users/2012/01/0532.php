<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 10:09:01 2012" -->
<!-- isoreceived="20120130150901" -->
<!-- sent="Mon, 30 Jan 2012 15:08:26 +0000" -->
<!-- isosent="20120130150826" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads" -->
<!-- id="731871AD-2F51-41EF-82C2-817A1F079EA1_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F2680CC.5070107_at_oerc.ox.ac.uk" -->
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
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 10:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>In reply to:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>Reply:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're working with pthreads, the answer is no. The binding was only relevant to the thread you created; when the thread was destroyed, so was the binding. The OS does not keep track of a history of where your now-nonexistent threads were bound.
<br>
<p>I'm surprised it's difficult to prove with a simple program, though... did getting the second thread's CPU-mask return ambiguous results? I'm thinking something like this pseudocode:
<br>
<p>void func(void* arg) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;initial CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cur_thread_setcpumask(foo);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;subsequent CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
<br>
}
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;pthread_t f;
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;mainthread CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
<br>
&nbsp;&nbsp;&nbsp;pthread_create(&amp;f, func);
<br>
&nbsp;&nbsp;&nbsp;pthread_join(f);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;mainthread CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
<br>
&nbsp;&nbsp;&nbsp;pthread_create(&amp;f, func);
<br>
&nbsp;&nbsp;&nbsp;pthread_join(f);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;mainthread CPU mask: %s&quot;, hwloc_cur_thread_getcpumask());
<br>
}
<br>
<p>On Jan 30, 2012, at 4:36 AM, Albert Solernou wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am working on a threaded code, and want to bind threads to cores. However, the process creates and destroys the threads, so here is the question:
</span><br>
<span class="quotelev1">&gt;  What happens if I enter on a threaded part of the code, bind &quot;thread X&quot; to a core, return to a serial part and then thread again? Can I expect to find thread X bound to the core I bound it previously?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guessed that the answer is &quot;no&quot;, but I couldn't prove it using a simple program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Albert
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Kyle B. Wheeler
Dept. 1423: Scalable System Software
Sandia National Laboratories
505-844-0394
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Samuel Thibault: "Re: [hwloc-users] creation and destruction of bound threads"</a>
<li><strong>In reply to:</strong> <a href="0530.php">Albert Solernou: "[hwloc-users] creation and destruction of bound threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
<li><strong>Reply:</strong> <a href="0533.php">Albert Solernou: "Re: [hwloc-users] [EXTERNAL] creation and destruction of bound threads"</a>
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
