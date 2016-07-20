<?
$subject_val = "Re: [hwloc-users] Is OSX a supported platform ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 15:01:10 2010" -->
<!-- isoreceived="20100607190110" -->
<!-- sent="Mon, 7 Jun 2010 13:00:48 -0600" -->
<!-- isosent="20100607190048" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Is OSX a supported platform ?" -->
<!-- id="554F5780-4F61-401E-9F6F-7080DD68C200_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100607181532.GA5248_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Is OSX a supported platform ?<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 15:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0148.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0148.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Reply:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2010, at 12:15 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Wheeler, Kyle Bruce, le Mon 07 Jun 2010 10:10:04 -0600, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; As I'm sure you know, while Apple doesn't provide strict &quot;bind to CPU X&quot; functions, they do at least (on Leopard and later) provide the ability to associate tasks/threads together (or explicitly disassociate them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it's an interesting interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would it be a good idea to support these as some sort of make-do? Or would it simply prompt too many complaints along the lines of &quot;hey, I said bind to cpu 0 and my program ran on cpu 3! what gives?!?&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But how would that work?  There is no relation with cpus in that
</span><br>
<span class="quotelev1">&gt; interface.
</span><br>
<p>True; but you can make each &quot;cpu&quot; a thread set ID. This is easier to explain in code:
<br>
<p>void set_affinity(int cpu) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mach_msg_type_number_t count = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thread_affinity_policy_data_t mask[THREAD_AFFINITY_POLICY_COUNT];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(mask, 0, sizeof(mask));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mask[0].affinity_tag = cpu+1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thread_policy_set(mach_thread_self(), THREAD_AFFINITY_POLICY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(thread_policy_t) &amp;mask, count);
<br>
}
<br>
<p><pre>
-- 
Kyle B. Wheeler, PhD
Dept. 1423: Scalable System Software
Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0148.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0148.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Reply:</strong> <a href="0150.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
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
