<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 20:22:25 2012" -->
<!-- isoreceived="20121121012225" -->
<!-- sent="Tue, 20 Nov 2012 17:22:20 -0800 (PST)" -->
<!-- isosent="20121121012220" -->
<!-- name="Andrew Somorjai" -->
<!-- email="verthex2099_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="1353460940.6144.YahooMailNeo_at_web161804.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Andrew Somorjai (<em>verthex2099_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 20:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Samuel Thibault: "[hwloc-users] AIX test? Re: Hardware locality (hwloc) v1.6rc2 released"</a>
<li><strong>Previous message:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel and Brice,
<br>
<p><p>I made the changes to the code. I tried running it and it crashed around line 53 with this statement
<br>
(I debugged it by stepping through the program).
<br>
<p>hwloc_set_thread_cpubind(topology, handle,
<br>
hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, t)-&gt;cpuset,
<br>
0);&#160;
<br>
<p>I also wanted to know what these two lines mean:
<br>
<p>bitmap = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_only(bitmap, t);
<br>
<p>and do I need those?
<br>
<p><p>#include &lt;pthread.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;hwloc.h&gt;
<br>
/* A task that takes some time to complete. The id identifies distinct
<br>
tasks for printed messages. */
<br>
<p>hwloc_topology_t topology;
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
result = result + sin(i) * tan(i);
<br>
}
<br>
printf(&quot;Task %d completed with result %e\n&quot;, id, result);
<br>
}
<br>
/* Same as 'task', but meant to be called from different threads. */
<br>
void *threaded_task(void *t)
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
/* Run 'task' num_tasks times serially. */
<br>
void *parallel(int num_tasks)
<br>
{
<br>
int num_threads = num_tasks;
<br>
<p>&#160;&#160;
<br>
<p>pthread_t thread[num_threads];
<br>
&#160;&#160;
<br>
<p>int rc;
<br>
long t;
<br>
hwloc_bitmap_t bitmap;
<br>
<p>for (t = 0; t &lt; num_threads; t++)
<br>
{
<br>
printf(&quot;Creating thread %ld\n&quot;, t);
<br>
rc = pthread_create(&amp;thread[t], NULL, threaded_task, (void *)t);
<br>
HANDLE handle = pthread_getw32threadhandle_np(thread[t]);
<br>
bitmap = hwloc_bitmap_alloc();
<br>
hwloc_bitmap_only(bitmap, t);
<br>
hwloc_set_thread_cpubind(topology, handle,
<br>
hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, t)-&gt;cpuset,
<br>
0);
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
}
<br>
<p>hwloc_bitmap_free(bitmap);
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
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Samuel Thibault: "[hwloc-users] AIX test? Re: Hardware locality (hwloc) v1.6rc2 released"</a>
<li><strong>Previous message:</strong> <a href="0781.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
