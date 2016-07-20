<?
$subject_val = "Re: [hwloc-users] Bind current thread to a specific cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 06:02:35 2011" -->
<!-- isoreceived="20110818100235" -->
<!-- sent="Thu, 18 Aug 2011 12:02:28 +0200" -->
<!-- isosent="20110818100228" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bind current thread to a specific cpu" -->
<!-- id="4E4CE334.5040609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="003b01cc5d8b$f2140f60$d63c2e20$_at_pulverail@sogeti.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Bind current thread to a specific cpu<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 06:02:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Samuel Thibault: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0423.php">PULVERAIL S&#233;bastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>In reply to:</strong> <a href="0423.php">PULVERAIL S&#233;bastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Samuel Thibault: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/08/2011 11:48, PULVERAIL S&#233;bastien a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use logical ids, so I do this :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 hwloc_obj_t cpu = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev1">&gt; HWLOC_OBJ_PU, i);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 int err = hwloc_set_cpubind(topology, cpu-&gt;cpuset,
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it correct ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, it looks OK. This case is easy because cpu-&gt;cpuset contains a
<br>
single bit (because it's a HWLOC_OBJ_PU), so there's no need to singlify
<br>
it (which would have required to allocate a temporary copy with dup()
<br>
before modifying with singlify).
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *De :*hwloc-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:hwloc-users-bounces_at_[hidden]] *De la part de* Brice Goglin
</span><br>
<span class="quotelev1">&gt; *Envoy&#233; :* jeudi 18 ao&#251;t 2011 10:25
</span><br>
<span class="quotelev1">&gt; *&#192; :* Hardware locality user list
</span><br>
<span class="quotelev1">&gt; *Objet :* Re: [hwloc-users] Bind current thread to a specific cpu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you talking about logical ids (the one given by hwloc) or
</span><br>
<span class="quotelev1">&gt; physical/OS ids (the one given by the OS and possibly in strange
</span><br>
<span class="quotelev1">&gt; order) ? You should avoid using physical ids, but...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If logical, you can hwloc_get_obj_by_type() to get the corresponding
</span><br>
<span class="quotelev1">&gt; object, then use its -&gt;cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If physical, you just need a cpuset that contains the bit
</span><br>
<span class="quotelev1">&gt; corresponding to this id. You can use hwloc_bitmap_only(set, &lt;id&gt;) to
</span><br>
<span class="quotelev1">&gt; reset a (previously allocated) cpuset to nothing but this id.
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
<span class="quotelev1">&gt; Le 18/08/2011 10:10, PULVERAIL S&#233;bastien a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm looking for a function that allows to bind the current thread to a
</span><br>
<span class="quotelev1">&gt; specific cpu given by its id.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found the function hwloc_set_thread_cpubind to bind a thread to a
</span><br>
<span class="quotelev1">&gt; cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also found the function hwloc_bitmap_singlify to keep only one index
</span><br>
<span class="quotelev1">&gt; in the cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I didn't found anything to only keep the cpu I need in my cpuset...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt; hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Samuel Thibault: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0423.php">PULVERAIL S&#233;bastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>In reply to:</strong> <a href="0423.php">PULVERAIL S&#233;bastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Samuel Thibault: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
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
