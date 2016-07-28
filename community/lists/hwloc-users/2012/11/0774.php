<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 03:45:13 2012" -->
<!-- isoreceived="20121120084513" -->
<!-- sent="Tue, 20 Nov 2012 00:45:09 -0800 (PST)" -->
<!-- isosent="20121120084509" -->
<!-- name="Andrew Somorjai" -->
<!-- email="verthex2099_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="1353401109.44997.YahooMailNeo_at_web161805.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20121120011022.GQ8916_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>From:</strong> Andrew Somorjai (<em>verthex2099_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 03:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0775.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0775.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0775.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel,
<br>
<p>This is what I have so far. I'm not sure how to get the handle for an array and I'm also getting an&#160;
<br>
<p>error from this line:
<br>
<p>hwloc_bitmap_set_only(bitmap, t); 
<br>
<p>|50|undefined reference to `hwloc_bitmap_set_only'|
<br>
<p>I'm also confused about these two lines and whether its necessary for the second one to exist?
<br>
<p>HANDLE thread[num_threads];
<br>
HANDLE pthread_getw32threadhandle_np(thread); 
<br>
<p>Does the second api call fill the thread array or just the first element?
<br>
<p><p>Also when do I use:
<br>
<p>hwloc_bitmap_free(bitmap); 
<br>
<p>Is it correct in my program or do I need it inside the for loop?
<br>
<p>#include &lt;pthread.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;hwloc.h&gt;
<br>
<p><p>hwloc_topology_t topology;
<br>
<p>void *task(int id)
<br>
{
<br>
printf(&quot;Task %d started\n&quot;, id);
<br>
int i;
<br>
double result = 0.0;
<br>
for (i = 0; i &lt; 1000000000; i++)
<br>
{
<br>
result =+ i;
<br>
}
<br>
printf(&quot;Task %d completed with result %e\n&quot;, id, result);
<br>
}
<br>
<p>void *threaded_task(void *t)
<br>
{
<br>
long id = (long) t;
<br>
printf(&quot;Thread %ld started\n&quot;, id);
<br>
task(id);
<br>
printf(&quot;Thread %ld done\n&quot;, id);
<br>
pthread_exit(0);
<br>
}
<br>
<p>void *parallel(int num_tasks)
<br>
{
<br>
int num_threads = num_tasks;
<br>
<p>//pthread_t thread[num_threads];
<br>
<p>HANDLE thread[num_threads];
<br>
HANDLE pthread_getw32threadhandle_np(thread);
<br>
<p>int rc;
<br>
long t;
<br>
<p>for (t = 0; t &lt; num_threads; t++)
<br>
{
<br>
printf(&quot;Creating thread %ld\n&quot;, t);
<br>
rc = pthread_create(&amp;thread[t], NULL, threaded_task, (void *)t);
<br>
<p>hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_set_only(bitmap, t);
<br>
hwloc_set_thread_cpubind(topology, thread[t], bitmap, 0);
<br>
<p>if (rc)
<br>
{
<br>
printf(&quot;ERROR: return code from pthread_create() is %d\n&quot;, rc);
<br>
exit(-1);
<br>
}
<br>
<p>hwloc_bitmap_free(bitmap);
<br>
}
<br>
}
<br>
<p>int main()
<br>
{
<br>
hwloc_topology_init(&amp;topology);
<br>
parallel(2);
<br>
<p>pthread_exit(NULL);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0775.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0773.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0775.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0775.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Reply:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
