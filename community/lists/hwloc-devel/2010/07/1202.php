<?
$subject_val = "Re: [hwloc-devel] 1.0.2rc2 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 05:27:47 2010" -->
<!-- isoreceived="20100721092747" -->
<!-- sent="Wed, 21 Jul 2010 11:27:41 +0200" -->
<!-- isosent="20100721092741" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.2rc2 posted" -->
<!-- id="20100721092741.GA5409_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C467C0A.6040908_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.2rc2 posted<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 05:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1203.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1201.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher Samuel, le Wed 21 Jul 2010 14:48:10 +1000, a &#233;crit :
<br>
<span class="quotelev1">&gt;   CC     libhwloc_ports_la-topology-freebsd.lo
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c: In function ?hwloc_freebsd_set_thread_cpubind?:
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:123: warning: passing argument 3 of
</span><br>
<span class="quotelev1">&gt; ?pthread_setaffinity_np? from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:448: note: expected ?const struct cpu_set_t *?
</span><br>
<span class="quotelev1">&gt; but argument is of type ?cpuset_t *?
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c: In function ?hwloc_freebsd_get_thread_cpubind?:
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:147: warning: passing argument 3 of
</span><br>
<span class="quotelev1">&gt; ?pthread_getaffinity_np? from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; /usr/include/pthread.h:453: note: expected ?struct cpu_set_t *? but
</span><br>
<span class="quotelev1">&gt; argument is of type ?cpuset_t *?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if that's important.
</span><br>
<p>That is expected: it's a conflict between linux and freebsd
<br>
declarations.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1203.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1201.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
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
