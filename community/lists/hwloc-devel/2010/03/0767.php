<?
$subject_val = "Re: [hwloc-devel] Proposal for cpuset API change";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 15:47:55 2010" -->
<!-- isoreceived="20100317194755" -->
<!-- sent="Wed, 17 Mar 2010 20:47:50 +0100" -->
<!-- isosent="20100317194750" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Proposal for cpuset API change" -->
<!-- id="36ca99e91003171247i4c4e944l8547f79242f0fc5_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="c50fc5b2282b0eb20dc3004fed71889d.squirrel_at_webmail-ral.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Proposal for cpuset API change<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 15:47:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0768.php">Bert Wesarg: "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>Previous message:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>In reply to:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 17, 2010 at 20:26, Brice GOGLIN &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it is necessary to make a small change to the cpuset API. The
</span><br>
<span class="quotelev2">&gt;&gt; current API was made fit to allow dynamically sized cpusets. I.e. an
</span><br>
<span class="quotelev2">&gt;&gt; alloc/modify/free style life cycle. The problem I see is, from where
</span><br>
<span class="quotelev2">&gt;&gt; should hwloc_cpuset_alloc() get the size of the cpuset? The solution I
</span><br>
<span class="quotelev2">&gt;&gt; see is to pass the hwloc_topology_t into hwloc_cpuset_alloc(), so that
</span><br>
<span class="quotelev2">&gt;&gt; the information comes from there [1].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't looked through the whole tree, if a hwloc_topology_t is
</span><br>
<span class="quotelev2">&gt;&gt; always available at places where hwloc_cpuset_alloc() is called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no need to hardwire any cpuset size at all, even if it comes from
</span><br>
<span class="quotelev1">&gt; the OS instead of from hwloc/config.h. Some students are working on
</span><br>
<span class="quotelev1">&gt; allocating a single unsigned long first and then dynamically reallocate
</span><br>
<span class="quotelev1">&gt; more whenever you try to set a bit with a very large index (and possibly
</span><br>
<span class="quotelev1">&gt; use some sparse allocation model too). I expect the code to be ready for
</span><br>
<span class="quotelev1">&gt; 1.1. Until then, statically allocating 1024 should be enough is the vast
</span><br>
<span class="quotelev1">&gt; majority of cases.
</span><br>
<p>Thanks for this information.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0768.php">Bert Wesarg: "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>Previous message:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>In reply to:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
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
