<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 13:27:19 2011" -->
<!-- isoreceived="20110609172719" -->
<!-- sent="Thu, 9 Jun 2011 13:27:15 -0400" -->
<!-- isosent="20110609172715" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="BANLkTi=ju5My=3J9azMhZVJ2N2ud4-kDug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110609151816.GE5539_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 13:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. Thanks for the tip about the SSE instruction.
<br>
<p>In fact one machine has flags of:
<br>
------------------
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt
<br>
rdtscp lm 3dnowext 3dnow constant_tsc nonstop_tsc pni cx16 popcnt
<br>
lahf_lm cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a
<br>
misalignsse 3dnowprefetch osvw
<br>
------------------
<br>
While the other only has:
<br>
------------------
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt lm
<br>
3dnowext 3dnow pni cmp_legacy
<br>
------------------
<br>
<p>So passing CFLAGS=&quot;-mno-sse4a -mno-popcnt&quot; seems to do the trick, and
<br>
now I can use the same hwloc on the front and back end nodes.
<br>
<p>Thanks for your help. I guess you can disregard the patch then.
<br>
<p>Thanks again,
<br>
Josh
<br>
<p><p>On Thu, Jun 9, 2011 at 11:18 AM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey, le Thu 09 Jun 2011 17:03:29 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Program terminated with signal 4, Illegal instruction.
</span><br>
<span class="quotelev2">&gt;&gt; #0 &#160;0x000000000041d8d9 in hwloc_weight_long ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0x000000000041d8d9 &lt;hwloc_weight_long+8&gt;: &#160; &#160; popcnt 0xfffffffffffffff8(%rbp),%rax
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is SSE4 indeed. &#160;You could check in grep sse4 /proc/cpuinfo that the frontend
</span><br>
<span class="quotelev1">&gt; has it while the computation nodes don't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gcc does not emit such instruction unless being instructed to (and
</span><br>
<span class="quotelev1">&gt; hwloc does not). Since it does on your machine, there must be something
</span><br>
<span class="quotelev1">&gt; on your frontend toolchain which forces -march=native or -march=sse4,
</span><br>
<span class="quotelev1">&gt; and you will have other appearances of such bugs, where gcc adds
</span><br>
<span class="quotelev1">&gt; SSE4-specific instructions with will SIGILL on the computation nodes,
</span><br>
<span class="quotelev1">&gt; and it's probably only by luck that you have not encountered it yet.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
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
