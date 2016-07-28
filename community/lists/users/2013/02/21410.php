<?
$subject_val = "Re: [OMPI users] Core ids not coming properly";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 11:46:35 2013" -->
<!-- isoreceived="20130215164635" -->
<!-- sent="Fri, 15 Feb 2013 17:46:25 +0100" -->
<!-- isosent="20130215164625" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Core ids not coming properly" -->
<!-- id="511E6661.40608_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL97QqiVvW+GKBBFPJN_bBovhnUgXKvMg0-NTYpd=1rsVsPt=w_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 11:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Reply:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IntelMPI binds processes by default, while OMPI doesn't. What's your
<br>
mpiexec/mpirun command-line?
<br>
<p>Brice
<br>
<p><p><p>Le 15/02/2013 17:34, Kranthi Kumar a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello Sir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here below is the code which I wrote using hwloc for getting the
</span><br>
<span class="quotelev1">&gt; bindings of the processes.
</span><br>
<span class="quotelev1">&gt; I tested this code on SDSC Gordon Super Computer which has Open MPI
</span><br>
<span class="quotelev1">&gt; 1.4.3 and on TACC Stampede which uses intel's MPI library IMPI.
</span><br>
<span class="quotelev1">&gt; With Open MPI I get all the core ids for all the processes as 0. Using
</span><br>
<span class="quotelev1">&gt; Intel MPI library I get different coreids. I tried even binding the
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; in the command line using taskset. Open MPI gives me core id 0 for all
</span><br>
<span class="quotelev1">&gt; the processes whereas IMPI gives me correct bindings.
</span><br>
<span class="quotelev1">&gt; Please look into this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank, size;
</span><br>
<span class="quotelev1">&gt;     cpu_set_t mask;
</span><br>
<span class="quotelev1">&gt;     long num;
</span><br>
<span class="quotelev1">&gt;     int proc_num(long num);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt;     hwloc_cpuset_t cpuset;
</span><br>
<span class="quotelev1">&gt;     hwloc_obj_t obj;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_init ( &amp;topology);
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_load ( topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_bitmap_t set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;     hwloc_obj_t pu;
</span><br>
<span class="quotelev1">&gt;     int err;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     err = hwloc_get_proc_cpubind(topology, getpid(), set,
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_PROCESS);
</span><br>
<span class="quotelev1">&gt;     if (err) {
</span><br>
<span class="quotelev1">&gt;     printf (&quot;Error Cannot find\n&quot;), exit(1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pu = hwloc_get_pu_obj_by_os_index(topology, hwloc_bitmap_first(set));
</span><br>
<span class="quotelev1">&gt;     printf (&quot;Hello World, I am %d and pid: %d
</span><br>
<span class="quotelev1">&gt; coreid:%d\n&quot;,rank,getpid(),hwloc_bitmap_first(set));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_bitmap_free(set);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     fclose(stdout);
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kranthi
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<li><strong>In reply to:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Reply:</strong> <a href="21411.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Core ids not coming properly"</a>
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
