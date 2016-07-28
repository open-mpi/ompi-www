<?
$subject_val = "Re: [hwloc-users] Bind current thread to a specific cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 04:25:16 2011" -->
<!-- isoreceived="20110818082516" -->
<!-- sent="Thu, 18 Aug 2011 10:25:07 +0200" -->
<!-- isosent="20110818082507" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bind current thread to a specific cpu" -->
<!-- id="4E4CCC63.3090408_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="002301cc5d7e$3c3e9aa0$b4bbcfe0$_at_pulverail@sogeti.com" -->
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
<strong>Date:</strong> 2011-08-18 04:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">PULVERAIL Sébastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0421.php">PULVERAIL S&#233;bastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>In reply to:</strong> <a href="0421.php">PULVERAIL S&#233;bastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">PULVERAIL Sébastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Reply:</strong> <a href="0423.php">PULVERAIL Sébastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you talking about logical ids (the one given by hwloc) or
<br>
physical/OS ids (the one given by the OS and possibly in strange order)
<br>
? You should avoid using physical ids, but...
<br>
<p>If logical, you can hwloc_get_obj_by_type() to get the corresponding
<br>
object, then use its -&gt;cpuset.
<br>
<p>If physical, you just need a cpuset that contains the bit corresponding
<br>
to this id. You can use hwloc_bitmap_only(set, &lt;id&gt;) to reset a
<br>
(previously allocated) cpuset to nothing but this id.
<br>
<p>Brice
<br>
<p><p><p>Le 18/08/2011 10:10, PULVERAIL S&#233;bastien a &#233;crit :
<br>
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
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *S&#233;bastien Pulv&#233;rail*| Sogeti High Tech
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone +33 (0) 5 34 46 92 98 | Mobile +33 (0) 6 84 44 73 26
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sebastien.pulverail_at_[hidden] &lt;mailto:sebastien.pulverail_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3 Chemin de Laporte | B&#226;t. AEROPARK | 31300 Toulouse | France
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.sogeti.com / www.sogeti-hightech.fr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; logo_signature_email_Sogeti High Tech
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P/Please consider the environment before printing !/
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-users/att-0422/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">PULVERAIL Sébastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Previous message:</strong> <a href="0421.php">PULVERAIL S&#233;bastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>In reply to:</strong> <a href="0421.php">PULVERAIL S&#233;bastien: "[hwloc-users] Bind current thread to a specific cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">PULVERAIL Sébastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
<li><strong>Reply:</strong> <a href="0423.php">PULVERAIL Sébastien: "Re: [hwloc-users] Bind current thread to a specific cpu"</a>
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
