<?
$subject_val = "Re: [hwloc-users] Istopo question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:06:56 2010" -->
<!-- isoreceived="20100128180656" -->
<!-- sent="Thu, 28 Jan 2010 19:06:51 +0100" -->
<!-- isosent="20100128180651" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Istopo question" -->
<!-- id="20100128180651.GW4873_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B61CFE8.3020909_at_cs.umd.edu" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 13:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0016.php">Norman Lo: "[hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0025.php">Norman Lo: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0025.php">Norman Lo: "Re: [hwloc-users] Istopo question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Norman Lo, le Thu 28 Jan 2010 12:56:56 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Towards the beginning:
</span><br>
<span class="quotelev1">&gt; Towards the end:
</span><br>
<p>Do you mean different svn revisions?
<br>
<p><span class="quotelev1">&gt;  Socket#0 cpuset 0x000000ff
</span><br>
<span class="quotelev1">&gt;    L3Cache(8192KB) cpuset 0x000000ff
</span><br>
<span class="quotelev1">&gt;      L2Cache(256KB) cpuset 0x00000011
</span><br>
<span class="quotelev1">&gt;        L1Cache(32KB) cpuset 0x00000011
</span><br>
<span class="quotelev1">&gt;          Core#0 cpuset 0x00000011
</span><br>
<span class="quotelev1">&gt;            P#0 cpuset 0x00000001
</span><br>
<span class="quotelev1">&gt;            P#4 cpuset 0x00000010
</span><br>
<p>This is most probably an output with physical numbers.
<br>
<p><span class="quotelev1">&gt;  L2#0(256KB) + L1#0(32KB) + Core#0
</span><br>
<span class="quotelev1">&gt;    P#0
</span><br>
<span class="quotelev1">&gt;    P#1
</span><br>
<p>And this seems to be an output with logical numbers.
<br>
<p><span class="quotelev1">&gt; It seems to me that they are reporting different things.
</span><br>
<p>Note that the output of lstopo changed recently: to be coherent with
<br>
object specification which is logical number-based, lstopo now outputs
<br>
logical numbers by default. To get physical numbers, use the -p option.
<br>
<p>We precisely have a thread on hwloc-devel about whether we should use
<br>
something different than '#' to clearly distinguish them.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0016.php">Norman Lo: "[hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0025.php">Norman Lo: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0025.php">Norman Lo: "Re: [hwloc-users] Istopo question"</a>
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
