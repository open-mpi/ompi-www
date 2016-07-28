<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 09:28:13 2011" -->
<!-- isoreceived="20110810132813" -->
<!-- sent="Wed, 10 Aug 2011 15:28:08 +0200" -->
<!-- isosent="20110810132808" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="CAJNPZUXA0jmGL0-+NMBchxxpV7JBHRszY+Nbs48R7bXAT4nYNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110810090101.GF23803_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc get cpubind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 09:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0380.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0380.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>please show this little example:
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_MACHINE, 0);
<br>
<p>int return_value = hwloc_get_last_cpu_location(topology, core-&gt;cpuset,
<br>
HWLOC_CPUBIND_THREAD);
<br>
<p>and now in &quot;core-&gt;cpuset&quot; I get the new cpuset bitmap, where process/threads
<br>
runs. Is it right?
<br>
<p>2011/8/10 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Wed 10 Aug 2011 09:35:19 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; these lines, doesn't works:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_get_cpubind(topology, &amp;set, 0);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_get_cpubind() crash, because I have to pass set, not &amp;set i
</span><br>
<span class="quotelev1">&gt; suppose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think hwloc_get_last_cpu_location() is used coupled
</span><br>
<span class="quotelev1">&gt; with hwloc_get_cpubind()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, they don't _have_ to. They provide a different information. It
</span><br>
<span class="quotelev1">&gt; just happens that get_last_cpu_location usually returns an index withing
</span><br>
<span class="quotelev1">&gt; what get_cpubind returns (&quot;always&quot;, if the binding is strict).
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
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0380.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0380.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
