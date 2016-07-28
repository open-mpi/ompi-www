<?
$subject_val = "Re: [OMPI users] Core ids not coming properly";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 12:07:53 2013" -->
<!-- isoreceived="20130215170753" -->
<!-- sent="Fri, 15 Feb 2013 17:07:48 +0000" -->
<!-- isosent="20130215170748" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Core ids not coming properly" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F413C0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="511E6661.40608_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Core ids not coming properly<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 12:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Previous message:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21413.php">Kranthi Kumar: "Re: [OMPI users] Core ids not coming properly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>In addition, you might want to upgrade to Open MPI 1.6.x -- 1.4.x is fairly ancient. 1.6.x's mpirun also has a --report-bindings option which tells you where procs are bound.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --bind-to-core --report-bindings ...etc.
<br>
<p><p>On Feb 15, 2013, at 11:46 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; IntelMPI binds processes by default, while OMPI doesn't. What's your mpiexec/mpirun command-line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 15/02/2013 17:34, Kranthi Kumar a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello Sir 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here below is the code which I wrote using hwloc for getting the bindings of the processes. 
</span><br>
<span class="quotelev2">&gt;&gt; I tested this code on SDSC Gordon Super Computer which has Open MPI 1.4.3 and on TACC Stampede which uses intel's MPI library IMPI. 
</span><br>
<span class="quotelev2">&gt;&gt; With Open MPI I get all the core ids for all the processes as 0. Using Intel MPI library I get different coreids. I tried even binding the processes 
</span><br>
<span class="quotelev2">&gt;&gt; in the command line using taskset. Open MPI gives me core id 0 for all the processes whereas IMPI gives me correct bindings. 
</span><br>
<span class="quotelev2">&gt;&gt; Please look into this
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sched.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;     cpu_set_t mask;
</span><br>
<span class="quotelev2">&gt;&gt;     long num;
</span><br>
<span class="quotelev2">&gt;&gt;     int proc_num(long num);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_topology_t topology;
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_cpuset_t cpuset;
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_obj_t obj;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_topology_init ( &amp;topology);
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_topology_load ( topology);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_bitmap_t set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_obj_t pu;
</span><br>
<span class="quotelev2">&gt;&gt;     int err;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     err = hwloc_get_proc_cpubind(topology, getpid(), set, HWLOC_CPUBIND_PROCESS);
</span><br>
<span class="quotelev2">&gt;&gt;     if (err) {
</span><br>
<span class="quotelev2">&gt;&gt;     printf (&quot;Error Cannot find\n&quot;), exit(1);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     pu = hwloc_get_pu_obj_by_os_index(topology, hwloc_bitmap_first(set));
</span><br>
<span class="quotelev2">&gt;&gt;     printf (&quot;Hello World, I am %d and pid: %d coreid:%d\n&quot;,rank,getpid(),hwloc_bitmap_first(set));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_bitmap_free(set);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     fclose(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kranthi 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Previous message:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21410.php">Brice Goglin: "Re: [OMPI users] Core ids not coming properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21413.php">Kranthi Kumar: "Re: [OMPI users] Core ids not coming properly"</a>
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
