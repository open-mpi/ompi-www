<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 12:38:00 2012" -->
<!-- isoreceived="20121120173800" -->
<!-- sent="Tue, 20 Nov 2012 18:35:50 +0100" -->
<!-- isosent="20121120173550" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="7ebf41f5-f620-4eca-9444-1c12944414f2_at_email.android.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20121120165800.GJ6241_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Windows api threading functions equivalent to hwloc?<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 12:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0782.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Depending whether you want to execute one
</span><br>
<span class="quotelev1">&gt;thread per core, or per hyperthread, use the first or second of these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;rc = pthread_create(&amp;thread[t], NULL, threaded_task, (void *)t);
</span><br>
<span class="quotelev1">&gt;HANDLE handle = pthread_getw32threadhandle_np(thread[t]);
</span><br>
<span class="quotelev1">&gt;hwloc_set_thread_cpubind(topology, handle,
</span><br>
<span class="quotelev1">&gt;        hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, t),
</span><br>
<span class="quotelev1">&gt;        0);
</span><br>
<p><p>with -&gt;cpuset after get_obj_by_type()
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0780.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0782.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
