<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 14:57:52 2011" -->
<!-- isoreceived="20110925185752" -->
<!-- sent="Sun, 25 Sep 2011 20:57:48 +0200" -->
<!-- isosent="20110925185748" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="CAJNPZUV5buejQwgG3W+53VXb4fA1dMM-gkeWB0Rffbqhv5rS3Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7F7470.7090808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc set membind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 14:57:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0465.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My goal is to set memory binding policy for future allocations for each
<br>
thread.
<br>
<p>So, according to definition of set_membind function:
<br>
<p>&quot;Set the default memory binding policy of the current process or thread to
<br>
prefer the
<br>
NUMA node(s) near the specified cpuset.&quot;
<br>
<p>and according to definition of HWLOC_MEMBIND_BIND flag:
<br>
<p>&quot;Allocate memory on the specified nodes.&quot;
<br>
<p>Merging togheter, I expect to set memory policy  of thread/process equal to
<br>
allocate memory on local node. But in my example,
<br>
<p>after done this, memory is allocated not in a local node of thread that does
<br>
set_membind and malloc, but in node of  thread that touches it. And I don't
<br>
understand this behaviour :(
<br>
<p><p>2011/9/25 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Le 25/09/2011 20:27, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(tid==0){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   set_membind(HWLOCMEMBIND_BIND, node 0)
</span><br>
<span class="quotelev1">&gt;  malloc(array)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (tid==1){
</span><br>
<span class="quotelev1">&gt;  set_membind(HWLOCMEMBIND_BIND, node 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for(i...)
</span><br>
<span class="quotelev1">&gt;   array(i)
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  end parallel region
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  array is allocated on node 1, not node 0 as I expected So it seems
</span><br>
<span class="quotelev1">&gt; set_membind() of second thread influence in some manner array allocation
</span><br>
<span class="quotelev1">&gt; using first touch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do you call set_membind() here? It's whole point is to change the
</span><br>
<span class="quotelev1">&gt; allocation policy of the current thread. If this thread then first-touches
</span><br>
<span class="quotelev1">&gt; some data, this data will obviously get allocated acocording to
</span><br>
<span class="quotelev1">&gt; set_membind().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't want set_membind() to modify the allocation policy of the
</span><br>
<span class="quotelev1">&gt; current thread, why do you call it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0465.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
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
