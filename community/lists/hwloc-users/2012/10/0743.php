<?
$subject_val = "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 19:03:58 2012" -->
<!-- isoreceived="20121005230358" -->
<!-- sent="Fri, 5 Oct 2012 17:03:54 -0600" -->
<!-- isosent="20121005230354" -->
<!-- name="Sebastian Kuzminsky" -->
<!-- email="seb_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="CAN=597RwEgabpWuSc+SXCeL-DoWNyLLc6TnaUzX2ytF=S7QYQg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121005230140.GO9000_at_type" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware<br>
<strong>From:</strong> Sebastian Kuzminsky (<em>seb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 19:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0744.php">Robin Scher: "[hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0742.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 5, 2012 at 5:01 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Sebastian Kuzminsky, le Sat 06 Oct 2012 00:55:57 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; binding to CPU0
</span><br>
<span class="quotelev2">&gt; &gt; could not bind to CPU0: Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, from what I read in the freebsd kernel:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Create a set in the space provided in 'set' with the provided
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt;  * The set is returned with a single ref.  May return EDEADLK if the set
</span><br>
<span class="quotelev1">&gt;  * will have no valid cpu based on restrictions from the parent.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _cpuset_create(struct cpuset *set, struct cpuset *parent, const cpuset_t
</span><br>
<span class="quotelev1">&gt; *mask,
</span><br>
<span class="quotelev1">&gt;     cpusetid_t id)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (!CPU_OVERLAP(&amp;parent-&gt;cs_mask, mask))
</span><br>
<span class="quotelev1">&gt;                 return (EDEADLK);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could it be that due to administration rules lstopo is not allowed to
</span><br>
<span class="quotelev1">&gt; bind on cpu 0-9 ? In that case the x86 backend can not detect anything
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Hm.  It may be that we're doing something funny and reserving those CPUs.
<br>
&nbsp;I'll run some tests on Monday and get back to you.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0744.php">Robin Scher: "[hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0742.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
