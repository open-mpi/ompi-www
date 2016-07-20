<?
$subject_val = "Re: [hwloc-users] howloc with scalemp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 16:15:17 2010" -->
<!-- isoreceived="20100407201517" -->
<!-- sent="Wed, 07 Apr 2010 22:15:11 +0200" -->
<!-- isosent="20100407201511" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] howloc with scalemp" -->
<!-- id="4BBCE7CF.7030604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E4B65E85-8751-4239-A51F-3FB974CBB64F_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] howloc with scalemp<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 16:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0046.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Brock Palen: "[hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; has anyone done work with hwloc on scalemp systems?  They provide
</span><br>
<span class="quotelev1">&gt; their own tool numabind, but we are looking for a more generic
</span><br>
<span class="quotelev1">&gt; solution to process placement and control that works well inside our
</span><br>
<span class="quotelev1">&gt; MPI library (openMPI in most cases).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any input on this would be great!
</span><br>
<p>Hello Brock,
<br>
<p><span class="quotelev1">&gt;From what I remember, ScaleMP uses an hypervisor on each node that
</span><br>
virtually merges all of them into a fake big shared-memory machine. Then
<br>
a vanilla Linux kernel runs on top of it. So hwloc should just see
<br>
regular cores and NUMA node information, assuming the virtual &quot;merged&quot;
<br>
hardware reports all necessary information to the OS.
<br>
<p>There's a bit of ScaleMP code in the Linux kernel, but it does pretty
<br>
much nothing, it does not seem to add anything to /proc or /sys for
<br>
instance. So I am not sure hwloc could get some specialized knowledge of
<br>
ScaleMP machines. Maybe their custom numabind tool knows that ScaleMP
<br>
machines only works on machines with some well-defined
<br>
types/counts/numbering of processors and NUMA nodes, and thus uses this
<br>
information to group sockets/NUMA-nodes depending on their physical
<br>
distance.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0046.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Brock Palen: "[hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
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
