<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 11:27:53 2008" -->
<!-- isoreceived="20081202162753" -->
<!-- sent="Tue, 02 Dec 2008 10:27:43 -0600" -->
<!-- isosent="20081202162743" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="493561FF.3080201_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C6AC14C-1A2B-4B8A-AB4F-7B420C7081FB_at_cisco.com" -->
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
<strong>Date:</strong> 2008-12-02 11:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7381.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>so I ran a couple of tests today and I can not confirm your statement. I 
<br>
wrote simple a simple test code where a process first sets an affinity 
<br>
mask and than spawns a number of threads. The threads modify the 
<br>
affinity mask and every thread ( including the master thread) print out 
<br>
there affinity mask at the end.
<br>
<p>With sched_getaffinity() and sched_setaffinity() it was indeed such that 
<br>
the master thread had the same affinity mask as the thread that it 
<br>
spawned. This means, that the modification of the affinity mask by a new 
<br>
thread in fact did affect the master thread.
<br>
<p>Executing the same codesquence however using the libnuma calls, the 
<br>
master thread however was not affected by the new affinity mask of the 
<br>
children. So clearly, libnuma must be doing something differently.
<br>
<p>The catch however is, that while I coded the example using libnuma, I 
<br>
realized the libnuma allows you only to assign a thread to a socket, not 
<br>
to a cpu/core. i.e. you do not have control on which cpu on the socket 
<br>
your threads are running, only on which socket.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 20, 2008, at 9:43 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Interesting - learn something new every day! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry; I was out for the holiday last week, but a clarification: 
</span><br>
<span class="quotelev1">&gt; libnuma's man page says that numa_run_on_node*() binds a &quot;thread&quot;, but 
</span><br>
<span class="quotelev1">&gt; it really should say &quot;process&quot;.  I looked at the code, and they're 
</span><br>
<span class="quotelev1">&gt; simply implementing a wrapper around sched_setaffinity(), which is a 
</span><br>
<span class="quotelev1">&gt; per-process binding.  Not a per-thread binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 20, 2008, at 7:34 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you look at recent versions of libnuma, there are two functions 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; called numa_run_on_node() and numa_run_on_node_mask(), which allow 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread-based assignments to CPUs....
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
<li><strong>Next message:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="7381.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7385.php">Jeff Squyres: "Re: [OMPI users] Hybrid program"</a>
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
