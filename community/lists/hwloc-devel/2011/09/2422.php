<?
$subject_val = "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 08:57:16 2011" -->
<!-- isoreceived="20110920125716" -->
<!-- sent="Tue, 20 Sep 2011 14:57:11 +0200" -->
<!-- isosent="20110920125711" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity" -->
<!-- id="4E788DA7.4050609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7B0FE94-149E-45A3-BE2E-40340F83A706_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 08:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2423.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3821)"</a>
<li><strong>Previous message:</strong> <a href="2421.php">Jeff Squyres: "[hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>In reply to:</strong> <a href="2421.php">Jeff Squyres: "[hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Reply:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/09/2011 14:44, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; 1. Is it permissible to use _PROCESS or _THREAD with get_proc_last_cpu_location() and get_proc_cpubind()?  I'm thinking that it doesn't make sense to use _THREAD here, and using _PROCESS would be redundant.
</span><br>
<p>That's almost true. Except that Linux has this notion of &quot;tid&quot; to
<br>
identify single threads. So if you pass THREAD with a thread id, you end
<br>
up doing get_cpubind/get_last_location on the corresponding single
<br>
thread (without having to use a pthread_t).
<br>
<p>This is Linux-specific corner case, sometimes useful, but maybe not
<br>
required in the doc?
<br>
<p><p><span class="quotelev1">&gt; 2. Is it permissible to use _PROCESS or _THREAD with get_last_cpu_location() and get_cpubind()?
</span><br>
<p>It's OK.
<br>
<p><span class="quotelev1">&gt; 3. Is it permissible to use _NOMEMBIND with any of these 4 functions?  I'm guessing that it's meaningless.  Should we document that this flag will be ignored, or that it is erroneous to use?
</span><br>
<p>This flag is meaningless and ignored there.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2423.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3821)"</a>
<li><strong>Previous message:</strong> <a href="2421.php">Jeff Squyres: "[hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>In reply to:</strong> <a href="2421.php">Jeff Squyres: "[hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Reply:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
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
