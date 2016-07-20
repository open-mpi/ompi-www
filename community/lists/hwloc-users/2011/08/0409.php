<?
$subject_val = "Re: [hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 10:07:57 2011" -->
<!-- isoreceived="20110816140757" -->
<!-- sent="Tue, 16 Aug 2011 10:07:52 -0400" -->
<!-- isosent="20110816140752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="6DEEF901-7346-4AC2-B8D5-E85FF9ABD646_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5B393396-A7F0-4411-B0A3-3EB244F0EF00_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Re :  lstopo on multiple machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 10:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0408.php">Brice Goglin: "[hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0408.php">Brice Goglin: "[hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd be against hwloc automatically spreading across multiple machines.  I think there are plenty of tools to do that already.
<br>
<p>That being said, having better support for being able to aggregate data from multiple hwloc instances (e.g., lstopo) on multiple machines into a single, cohesive map, would be great (waving hands here; I have no specific suggestions).
<br>
<p><p>On Aug 16, 2011, at 10:02 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Seb,
</span><br>
<span class="quotelev1">&gt; Hwloc only looks at the local machine, there's no support for multinode topology detection so far. We are considering adding it but we don't know yet what users want to do with it, if it should be in the core or not, automatic or nor. Your feedback is welcome.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Reply message -----
</span><br>
<span class="quotelev1">&gt; De : &quot;PULVERAIL S?bastien&quot; &lt;sebastien.pulverail_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Pour?: &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Objet : [hwloc-users] lstopo on multiple machines
</span><br>
<span class="quotelev1">&gt; Date : mar., ao?t 16, 2011 15:04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two machines I use for running my programs on multiple nodes (with
</span><br>
<span class="quotelev1">&gt; hydra or slurm).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I launch my lstopo command, only one machine characteristics are
</span><br>
<span class="quotelev1">&gt; printed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I tell HWLOC to look for those two machines ?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0408.php">Brice Goglin: "[hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0408.php">Brice Goglin: "[hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0418.php">Christopher Samuel: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
