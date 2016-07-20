<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 06:19:22 2011" -->
<!-- isoreceived="20110925101922" -->
<!-- sent="Sun, 25 Sep 2011 12:19:17 +0200" -->
<!-- isosent="20110925101917" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="CAJNPZUWHQE5M2=8yiDEtTXxZ0R_iC8u8akL4ZY8udF2tZ884SA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7EF9D8.9050805_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-25 06:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0456.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev1">&gt;The flag says &quot;when the first touch occurs and the physical memory is
</span><br>
allocated for real, don't allocate on the local node (default), but &gt;rather
<br>
allocate where specified by set_membind&quot;.
<br>
<p>If is it already allocated for real, how set_membind() can allocate on other
<br>
node?
<br>
<p>So, what's the difference between HWLOC_MEMBIND_BIND and
<br>
HWLOC_MEMBIND_FIRSTTOUCH?
<br>
<p><p><span class="quotelev1">&gt;set_membind_nodeset() with BIND and the nodeset containing the nodes where
</span><br>
physical memory should be allocated.
<br>
<p>Mm In my tests, I have a process that allocates a memory, thread 0 is bound
<br>
on node 0 and thread 1 on node1:
<br>
<p>malloc(array)...
<br>
<p>omp parallel region
<br>
<p><p>if(tid==0)
<br>
&nbsp;set_area_membind_nodeset( first half of array)
<br>
<p>if (tid==1)
<br>
&nbsp;&nbsp;set_area_membind_nodeset( second half of array)
<br>
<p><p>end parallel region
<br>
<p><p>for(i...)
<br>
&nbsp;&nbsp;array(i)
<br>
<p><p>Checking the free memory on two nodes, supposing array is 1 Gb, I see 500 mb
<br>
less on first node and 500 mb less on second node and it is ok, because
<br>
first touch is done by the process, but on memory already bound on specific
<br>
nodes.
<br>
<p>Doing the follow test:
<br>
<p>omp parallel region
<br>
<p><p>if(tid==0){
<br>
&nbsp;malloc(array)...
<br>
&nbsp;set_area_membind(HWLOCMEMBIND_BIND, node 0)
<br>
<p>}
<br>
<p>if (tid==1){
<br>
&nbsp;set_area_membind(HWLOCMEMBIND_BIND, node 1)
<br>
<p>for(i...)
<br>
&nbsp;&nbsp;array(i)
<br>
}
<br>
<p>end parallel region
<br>
<p>Now, checking the free memory on two nodes, I see 1 GB less on second node,
<br>
because thread 1 is doing first touch. set_membind() for first thread has no
<br>
effect, I suppose, or I dont' understand how it works, because in the second
<br>
example only first touch appears to have some effects, indipendently which
<br>
hwloc function I'm using.
<br>
<p>Sorry, but it is quite difficult to understand .. :(
<br>
<p><p><p><p>2011/9/25 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Le 25/09/2011 11:14, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I report my  questions in a different way (in the first question i did a
</span><br>
<span class="quotelev1">&gt; mistake):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1) I don't understand the means of set_membind() function. Why I should
</span><br>
<span class="quotelev1">&gt; to allocate in a node &quot;near&quot; my cpuset and not in my local node (where
</span><br>
<span class="quotelev1">&gt; thread or process runs?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's exactly the same. Your local node is near the cpuset that contains the
</span><br>
<span class="quotelev1">&gt; CPUs that are close to this node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2) Which is the behaviour of HWLOC_MEMBIND_BIND  flag?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From the manual:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &quot;Allocate memory on the specified nodes.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It means that I can allocate without binding the memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's about physical memory allocation (first touch causing a fault causing
</span><br>
<span class="quotelev1">&gt; a page to be allocated), not about virtual memory (malloc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What happens if one thread allocate and another thread in another node
</span><br>
<span class="quotelev1">&gt;  read/write for the first time this memory? In a little example I see the
</span><br>
<span class="quotelev1">&gt; memory is allocated on the second thread, not where first thread does
</span><br>
<span class="quotelev1">&gt; malloc().  So, when I have to use HWLOC_MEMBIND_BIND flag? Or it has nothing
</span><br>
<span class="quotelev1">&gt; to do with binding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If the effective allocation is done when first thread touch the memory,
</span><br>
<span class="quotelev1">&gt; which is the means of this flag?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The flag says &quot;when the first touch occurs and the physical memory is
</span><br>
<span class="quotelev1">&gt; allocated for real, don't allocate on the local node (default), but rather
</span><br>
<span class="quotelev1">&gt; allocate where specified by set_membind&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2) My goal is to replicate the behaviour of set_area_membind_nodeset() in
</span><br>
<span class="quotelev1">&gt; some manner for all futures allocation without call this function each time
</span><br>
<span class="quotelev1">&gt; I allocate some memory. Is it possible to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set_membind_nodeset() with BIND and the nodeset containing the nodes where
</span><br>
<span class="quotelev1">&gt; physical memory should be allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Previous message:</strong> <a href="0456.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>Reply:</strong> <a href="0458.php">Brice Goglin: "Re: [hwloc-users] hwloc set membind function"</a>
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
