<?
$subject_val = "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 19:01:46 2012" -->
<!-- isoreceived="20121005230146" -->
<!-- sent="Sat, 6 Oct 2012 01:01:41 +0200" -->
<!-- isosent="20121005230141" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="20121005230140.GO9000_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAN=597RZJUeNFJKt5d80BvFD_gMjKm7QSUQnv2hgBpc9+hbS8w_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 19:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="0741.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0743.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="0743.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sebastian Kuzminsky, le Sat 06 Oct 2012 00:55:57 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; binding to CPU0
</span><br>
<span class="quotelev1">&gt; could not bind to CPU0: Resource deadlock avoided
</span><br>
<p>Mmm, from what I read in the freebsd kernel:
<br>
<p>/*
<br>
&nbsp;* Create a set in the space provided in 'set' with the provided parameters.
<br>
&nbsp;* The set is returned with a single ref.  May return EDEADLK if the set
<br>
&nbsp;* will have no valid cpu based on restrictions from the parent.
<br>
&nbsp;*/
<br>
<p>_cpuset_create(struct cpuset *set, struct cpuset *parent, const cpuset_t *mask,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpusetid_t id)
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!CPU_OVERLAP(&amp;parent-&gt;cs_mask, mask))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (EDEADLK);
<br>
<p>Could it be that due to administration rules lstopo is not allowed to
<br>
bind on cpu 0-9 ? In that case the x86 backend can not detect anything
<br>
there.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="0741.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0743.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="0743.php">Sebastian Kuzminsky: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
