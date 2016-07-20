<?
$subject_val = "Re: [hwloc-users] Trying to get last cpu location";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 16:02:10 2013" -->
<!-- isoreceived="20130305210210" -->
<!-- sent="Tue, 05 Mar 2013 22:02:01 +0100" -->
<!-- isosent="20130305210201" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Trying to get last cpu location" -->
<!-- id="51365D49.4010503_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51365C68.10003_at_di.unito.it" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 16:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Reply:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see any obvious problem in the code.
<br>
Are you sure you're not using an old hwloc by mistake?
<br>
Can you add this after #include &lt;hwloc.h&gt; and compile again ?
<br>
#if HWLOC_API_VERSION &lt; 0x00010200
<br>
#error Too old
<br>
#endif
<br>
<p>Brice
<br>
<p><p><p>Le 05/03/2013 21:58, Fabio Tordini a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm using release 1.6.1 and, as I said, it is the only weird behaviour
</span><br>
<span class="quotelev1">&gt; I'm experiencing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the test program is actually very straight and easy: I load and
</span><br>
<span class="quotelev1">&gt; initialise the topology, perform some checks on current bindings and
</span><br>
<span class="quotelev1">&gt; the try to get the current thread's location, so that I can bind it to
</span><br>
<span class="quotelev1">&gt; the nodeset it belongs to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_init(&amp;topo);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_load(topo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_bitmap_t cpuset  = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;  hwloc_bitmap_t nodeset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;  char *str;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if( hwloc_get_last_cpu_location(topology, cpuset,
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_THREAD) &lt; 0 )
</span><br>
<span class="quotelev1">&gt;      abort();
</span><br>
<span class="quotelev1">&gt;  hwloc_bitmap_asprintf(&amp;str, cpuset);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;current thread running on cpuset %s\n&quot;, str);
</span><br>
<span class="quotelev1">&gt;  free(str);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_cpuset_from_nodeset(topology, cpuset, nodeset);
</span><br>
<span class="quotelev1">&gt;  if( hwloc_set_membind_nodeset(topology, nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_THREAD) &lt; 0 )
</span><br>
<span class="quotelev1">&gt;      abort();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if( hwloc_get_last_cpu_location(topology, cpuset,
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_THREAD) &lt; 0 )
</span><br>
<span class="quotelev1">&gt;      abort();
</span><br>
<span class="quotelev1">&gt;  hwloc_bitmap_asprintf(&amp;str, cpuset);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;current thread running on cpuset %s\n&quot;, str);
</span><br>
<span class="quotelev1">&gt;  free(str);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_cpuset_from_nodeset(topology, cpuset, nodeset);
</span><br>
<span class="quotelev1">&gt;  if( hwloc_set_membind_nodeset(topology, nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_THREAD) &lt; 0 )
</span><br>
<span class="quotelev1">&gt;      abort();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I omitted some out-of-the-scope parts, but this is mostly it: is there
</span><br>
<span class="quotelev1">&gt; something wrong?
</span><br>
<span class="quotelev1">&gt; Fabio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/03/13 18:25, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Fabio,
</span><br>
<span class="quotelev2">&gt;&gt; Which hwloc release are you using ? get_last_cpu_location() was only
</span><br>
<span class="quotelev2">&gt;&gt; added in hwloc v1.2. It has always been available since then, even on
</span><br>
<span class="quotelev2">&gt;&gt; when not supported (it will return -1 with errno=ENOSYS in this case).
</span><br>
<span class="quotelev2">&gt;&gt; If this doesn't help, can you send your test program?
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/03/2013 18:01, Fabio Tordini a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm experiencing a problem using the function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'hwloc_get_last_cpu_location(...)': when compiling i first get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning about an implicit declaration of the function, and then it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gives an &quot;undefined reference&quot; error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything else works just fine and I was thinking whether I have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link some other libraries or perform some other actions in order to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to use the function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tests I'm executing are run on a x86_64 GNU/Linux machine, and as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; far as I know that function should be totally supported on Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Brice Goglin: "Re: [hwloc-users] Many queries creating slow performance"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>In reply to:</strong> <a href="0887.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
<li><strong>Reply:</strong> <a href="0890.php">Fabio Tordini: "Re: [hwloc-users] Trying to get last cpu location"</a>
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
