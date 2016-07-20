<?
$subject_val = "Re: [hwloc-users] Bind current thread to a specific cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 05:48:23 2011" -->
<!-- isoreceived="20110818094823" -->
<!-- sent="Thu, 18 Aug 2011 11:48:12 +0200" -->
<!-- isosent="20110818094812" -->
<!-- name="PULVERAIL S&#233;bastien" -->
<!-- email="sebastien.pulverail_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bind current thread to a specific cpu" -->
<!-- id="003b01cc5d8b$f2140f60$d63c2e20$_at_pulverail@sogeti.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E4CCC63.3090408_at_inria.fr" -->
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
<strong>From:</strong> PULVERAIL S&#233;bastien (<em>sebastien.pulverail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 05:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Reply:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use logical ids, so I do this :
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_t cpu = hwloc_get_obj_by_type(topology,
<br>
HWLOC_OBJ_PU, i);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err = hwloc_set_cpubind(topology, cpu-&gt;cpuset,
<br>
HWLOC_CPUBIND_THREAD);
<br>
<p>&nbsp;
<br>
<p>Is it correct ?
<br>
<p><pre>
--
Seb
 
De : hwloc-users-bounces_at_[hidden]
[mailto:hwloc-users-bounces_at_[hidden]] De la part de Brice Goglin
Envoy&#233; : jeudi 18 ao&#251;t 2011 10:25
&#192; : Hardware locality user list
Objet : Re: [hwloc-users] Bind current thread to a specific cpu
 
Are you talking about logical ids (the one given by hwloc) or physical/OS
ids (the one given by the OS and possibly in strange order) ? You should
avoid using physical ids, but...
If logical, you can hwloc_get_obj_by_type() to get the corresponding object,
then use its -&gt;cpuset.
If physical, you just need a cpuset that contains the bit corresponding to
this id. You can use hwloc_bitmap_only(set, &lt;id&gt;) to reset a (previously
allocated) cpuset to nothing but this id.
Brice
Le 18/08/2011 10:10, PULVERAIL S&#233;bastien a &#233;crit : 
Hi,
 
I&#146;m looking for a function that allows to bind the current thread to a
specific cpu given by its id.
 
I found the function hwloc_set_thread_cpubind to bind a thread to a cpuset.
I also found the function hwloc_bitmap_singlify to keep only one index in
the cpuset.
But I didn&#146;t found anything to only keep the cpu I need in my cpuset&#133;
Is it possible ? 
 
--
Seb
 
 
 
_______________________________________________
hwloc-users mailing list
hwloc-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Reply:</strong> <a href="0424.php">Brice Goglin: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
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
