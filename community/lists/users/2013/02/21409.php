<?
$subject_val = "[OMPI users] Core ids not coming properly";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 11:34:15 2013" -->
<!-- isoreceived="20130215163415" -->
<!-- sent="Fri, 15 Feb 2013 22:04:11 +0530" -->
<!-- isosent="20130215163411" -->
<!-- name="Kranthi Kumar" -->
<!-- email="kranthipls_at_[hidden]" -->
<!-- subject="[OMPI users] Core ids not coming properly" -->
<!-- id="CAL97QqiVvW+GKBBFPJN_bBovhnUgXKvMg0-NTYpd=1rsVsPt=w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Core ids not coming properly<br>
<strong>From:</strong> Kranthi Kumar (<em>kranthipls_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 11:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21408.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1	error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Reply:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Maybe reply:</strong> <a href="21413.php">Kranthi Kumar: "Re: [OMPI users] Core ids not coming properly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sir
<br>
<p>Here below is the code which I wrote using hwloc for getting the bindings
<br>
of the processes.
<br>
I tested this code on SDSC Gordon Super Computer which has Open MPI 1.4.3
<br>
and on TACC Stampede which uses intel's MPI library IMPI.
<br>
With Open MPI I get all the core ids for all the processes as 0. Using
<br>
Intel MPI library I get different coreids. I tried even binding the
<br>
processes
<br>
in the command line using taskset. Open MPI gives me core id 0 for all the
<br>
processes whereas IMPI gives me correct bindings.
<br>
Please look into this
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;sched.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;hwloc.h&gt;
<br>
int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu_set_t mask;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int proc_num(long num);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_t cpuset;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_t obj;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_init ( &amp;topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_load ( topology);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_t set = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_t pu;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int err;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = hwloc_get_proc_cpubind(topology, getpid(), set,
<br>
HWLOC_CPUBIND_PROCESS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (err) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Error Cannot find\n&quot;), exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pu = hwloc_get_pu_obj_by_os_index(topology, hwloc_bitmap_first(set));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Hello World, I am %d and pid: %d
<br>
coreid:%d\n&quot;,rank,getpid(),hwloc_bitmap_first(set));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_free(set);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fclose(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
Thank You
<br>
<pre>
-- 
Kranthi
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21408.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1	error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Reply:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Maybe reply:</strong> <a href="21413.php">Kranthi Kumar: "Re: [OMPI users] Core ids not coming properly"</a>
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
