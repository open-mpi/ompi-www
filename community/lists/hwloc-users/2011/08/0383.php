<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 09:40:35 2011" -->
<!-- isoreceived="20110810134035" -->
<!-- sent="Wed, 10 Aug 2011 15:40:30 +0200" -->
<!-- isosent="20110810134030" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="CAJNPZUXYMCqMkC0a43VNQ4hSzJRXH=VxHJhRaZs4uRFcbHYZyQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110810133435.GS23803_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc get cpubind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 09:40:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes of course:
<br>
<p>char*bitmap_string[256];
<br>
<p>hwloc_cpuset_t set = hwloc_bitmap_alloc();
<br>
<p>int return_value = hwloc_get_last_cpu_location(topology, set,
<br>
&nbsp;HWLOC_CPUBIND_THREAD);
<br>
<p>printf( &quot; bitmap_string: %s \n&quot;, bitmap_string[0]);
<br>
<p>give me:
<br>
<p>0x00000800
<br>
<p>converted in binary:
<br>
<p>100000000000
<br>
<p>So, CPU 0 I suppose, but is not where i bound my thread .. :(
<br>
<p><p><p>2011/8/10 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Wed 10 Aug 2011 15:29:43 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_MACHINE, 0);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int return_value = hwloc_get_last_cpu_location(topology, core-&gt;cpuset,
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and now in &quot;core-&gt;cpuset&quot; I get the new cpuset bitmap, where
</span><br>
<span class="quotelev1">&gt; process/threads
</span><br>
<span class="quotelev2">&gt; &gt; runs. Is it right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Err, yes, but why using core-&gt;cpuset?? Giving it as parameter to
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_cpu_location will only overwrite its content with the
</span><br>
<span class="quotelev1">&gt; content returned by hwloc_get_last_cpu_location (which is forbidden, see
</span><br>
<span class="quotelev1">&gt; the documentation of the cpuset field).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
