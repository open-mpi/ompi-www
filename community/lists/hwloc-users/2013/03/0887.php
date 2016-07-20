<?
$subject_val = "Re: [hwloc-users] Trying to get last cpu location";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 15:58:31 2013" -->
<!-- isoreceived="20130305205831" -->
<!-- sent="Tue, 05 Mar 2013 21:58:16 +0100" -->
<!-- isosent="20130305205816" -->
<!-- name="Fabio Tordini" -->
<!-- email="tordini_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Trying to get last cpu location" -->
<!-- id="51365C68.10003_at_di.unito.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51362A9B.5020506_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Trying to get last cpu location<br>
<strong>From:</strong> Fabio Tordini (<em>tordini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 15:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0886.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>In reply to:</strong> <a href="0883.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Reply:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using release 1.6.1 and, as I said, it is the only weird behaviour 
<br>
I'm experiencing.
<br>
<p>the test program is actually very straight and easy: I load and 
<br>
initialise the topology, perform some checks on current bindings and the 
<br>
try to get the current thread's location, so that I can bind it to the 
<br>
nodeset it belongs to:
<br>
<p>&nbsp;&nbsp;hwloc_topology_init(&amp;topo);
<br>
&nbsp;&nbsp;hwloc_topology_load(topo);
<br>
<p>&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;hwloc_bitmap_t cpuset  = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;hwloc_bitmap_t nodeset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;char *str;
<br>
<p>&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;if( hwloc_get_last_cpu_location(topology, cpuset, HWLOC_CPUBIND_THREAD) &lt; 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abort();
<br>
&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;str, cpuset);
<br>
&nbsp;&nbsp;printf(&quot;current thread running on cpuset %s\n&quot;, str);
<br>
&nbsp;&nbsp;free(str);
<br>
<p>&nbsp;&nbsp;hwloc_cpuset_from_nodeset(topology, cpuset, nodeset);
<br>
&nbsp;&nbsp;if( hwloc_set_membind_nodeset(topology, nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD) &lt; 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abort();
<br>
<p>&nbsp;&nbsp;...
<br>
<p><p>&nbsp;&nbsp;if( hwloc_get_last_cpu_location(topology, cpuset, HWLOC_CPUBIND_THREAD) &lt; 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abort();
<br>
&nbsp;&nbsp;hwloc_bitmap_asprintf(&amp;str, cpuset);
<br>
&nbsp;&nbsp;printf(&quot;current thread running on cpuset %s\n&quot;, str);
<br>
&nbsp;&nbsp;free(str);
<br>
<p>&nbsp;&nbsp;hwloc_cpuset_from_nodeset(topology, cpuset, nodeset);
<br>
&nbsp;&nbsp;if( hwloc_set_membind_nodeset(topology, nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD) &lt; 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abort();
<br>
<p>&nbsp;&nbsp;...
<br>
<p>I omitted some out-of-the-scope parts, but this is mostly it: is there 
<br>
something wrong?
<br>
Fabio
<br>
<p><p>On 05/03/13 18:25, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello Fabio,
</span><br>
<span class="quotelev1">&gt; Which hwloc release are you using ? get_last_cpu_location() was only
</span><br>
<span class="quotelev1">&gt; added in hwloc v1.2. It has always been available since then, even on
</span><br>
<span class="quotelev1">&gt; when not supported (it will return -1 with errno=ENOSYS in this case).
</span><br>
<span class="quotelev1">&gt; If this doesn't help, can you send your test program?
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 05/03/2013 18:01, Fabio Tordini a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm experiencing a problem using the function
</span><br>
<span class="quotelev2">&gt;&gt; 'hwloc_get_last_cpu_location(...)': when compiling i first get a
</span><br>
<span class="quotelev2">&gt;&gt; warning about an implicit declaration of the function, and then it
</span><br>
<span class="quotelev2">&gt;&gt; gives an &quot;undefined reference&quot; error.
</span><br>
<span class="quotelev2">&gt;&gt; Everything else works just fine and I was thinking whether I have to
</span><br>
<span class="quotelev2">&gt;&gt; link some other libraries or perform some other actions in order to be
</span><br>
<span class="quotelev2">&gt;&gt; able to use the function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The tests I'm executing are run on a x86_64 GNU/Linux machine, and as
</span><br>
<span class="quotelev2">&gt;&gt; far as I know that function should be totally supported on Linux systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Fabio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><pre>
-- 
Fabio Tordini
PhD Candidate
Computer Science Department
University of Torino
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0886.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>In reply to:</strong> <a href="0883.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Reply:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-users] Trying to get last cpu location"</a>
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
