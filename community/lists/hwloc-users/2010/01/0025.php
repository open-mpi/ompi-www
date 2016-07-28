<?
$subject_val = "Re: [hwloc-users] Istopo question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:39:52 2010" -->
<!-- isoreceived="20100128183952" -->
<!-- sent="Thu, 28 Jan 2010 13:39:47 -0500" -->
<!-- isosent="20100128183947" -->
<!-- name="Norman Lo" -->
<!-- email="normanlo_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Istopo question" -->
<!-- id="4B61D9F3.1010300_at_cs.umd.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100128180651.GW4873_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Istopo question<br>
<strong>From:</strong> Norman Lo (<em>normanlo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 13:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Brice Goglin: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0028.php">Brice Goglin: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0031.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Norman Lo, le Thu 28 Jan 2010 12:56:56 -0500, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Towards the beginning:
</span><br>
<span class="quotelev2">&gt;&gt;Towards the end:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Do you mean different svn revisions?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the confusion but lstopo gives a long output. I meant the 
<br>
output near the top, and the ouptut near the bottom of the same revision
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Socket#0 cpuset 0x000000ff
</span><br>
<span class="quotelev2">&gt;&gt;   L3Cache(8192KB) cpuset 0x000000ff
</span><br>
<span class="quotelev2">&gt;&gt;     L2Cache(256KB) cpuset 0x00000011
</span><br>
<span class="quotelev2">&gt;&gt;       L1Cache(32KB) cpuset 0x00000011
</span><br>
<span class="quotelev2">&gt;&gt;         Core#0 cpuset 0x00000011
</span><br>
<span class="quotelev2">&gt;&gt;           P#0 cpuset 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt;           P#4 cpuset 0x00000010
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is most probably an output with physical numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; L2#0(256KB) + L1#0(32KB) + Core#0
</span><br>
<span class="quotelev2">&gt;&gt;   P#0
</span><br>
<span class="quotelev2">&gt;&gt;   P#1
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;And this seems to be an output with logical numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;It seems to me that they are reporting different things.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Note that the output of lstopo changed recently: to be coherent with
</span><br>
<span class="quotelev1">&gt;object specification which is logical number-based, lstopo now outputs
</span><br>
<span class="quotelev1">&gt;logical numbers by default. To get physical numbers, use the -p option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We precisely have a thread on hwloc-devel about whether we should use
</span><br>
<span class="quotelev1">&gt;something different than '#' to clearly distinguish them.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am actually using hwloc library topology tree. Is there a way to 
<br>
display the logical number instead of the physical number from the obj ?
<br>
<p>Thank you very much,
<br>
<p>Norman
<br>
<p><span class="quotelev1">&gt;Samuel
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Brice Goglin: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0028.php">Brice Goglin: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0031.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
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
