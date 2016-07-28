<?
$subject_val = "Re: [OMPI users] Core ids not coming properly";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 14:34:31 2013" -->
<!-- isoreceived="20130215193431" -->
<!-- sent="Sat, 16 Feb 2013 01:04:26 +0530" -->
<!-- isosent="20130215193426" -->
<!-- name="Kranthi Kumar" -->
<!-- email="kranthipls_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Core ids not coming properly" -->
<!-- id="CAL97Qqi=Li907bYTWrtGoA8rxaeYz6Mqxn9ZVpLOh-kxgGBh-Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Core ids not coming properly" -->
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
<strong>From:</strong> Kranthi Kumar (<em>kranthipls_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 14:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Reply:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Open MPI this is the command I used:
<br>
<p>mpirun -n 6 taskset -c 0,2,4,6,8,10 ./a.out
<br>
<p>With intel library I set environment variable  I_MPI_PIN_MAPPING=6:0 0,1
<br>
2,2 4,3 6,4 8,5 10
<br>
and ran by saying
<br>
<p>mpirun -n 6 ./a.out
<br>
On Fri, Feb 15, 2013 at 10:30 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Core ids not coming properly (Kranthi Kumar)
</span><br>
<span class="quotelev1">&gt;    2. Re: Core ids not coming properly (Brice Goglin)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 15 Feb 2013 22:04:11 +0530
</span><br>
<span class="quotelev1">&gt; From: Kranthi Kumar &lt;kranthipls_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Core ids not coming properly
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAL97QqiVvW+GKBBFPJN_bBovhnUgXKvMg0-NTYpd=1rsVsPt=
</span><br>
<span class="quotelev1">&gt; w_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Sir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here below is the code which I wrote using hwloc for getting the bindings
</span><br>
<span class="quotelev1">&gt; of the processes.
</span><br>
<span class="quotelev1">&gt; I tested this code on SDSC Gordon Super Computer which has Open MPI 1.4.3
</span><br>
<span class="quotelev1">&gt; and on TACC Stampede which uses intel's MPI library IMPI.
</span><br>
<span class="quotelev1">&gt; With Open MPI I get all the core ids for all the processes as 0. Using
</span><br>
<span class="quotelev1">&gt; Intel MPI library I get different coreids. I tried even binding the
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; in the command line using taskset. Open MPI gives me core id 0 for all the
</span><br>
<span class="quotelev1">&gt; processes whereas IMPI gives me correct bindings.
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Fri, 15 Feb 2013 17:46:25 +0100
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Core ids not coming properly
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;511E6661.40608_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IntelMPI binds processes by default, while OMPI doesn't. What's your
</span><br>
<span class="quotelev1">&gt; mpiexec/mpirun command-line?
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
<span class="quotelev1">&gt; Le 15/02/2013 17:34, Kranthi Kumar a ?crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hello Sir
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here below is the code which I wrote using hwloc for getting the
</span><br>
<span class="quotelev2">&gt; &gt; bindings of the processes.
</span><br>
<span class="quotelev2">&gt; &gt; I tested this code on SDSC Gordon Super Computer which has Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; 1.4.3 and on TACC Stampede which uses intel's MPI library IMPI.
</span><br>
<span class="quotelev2">&gt; &gt; With Open MPI I get all the core ids for all the processes as 0. Using
</span><br>
<span class="quotelev2">&gt; &gt; Intel MPI library I get different coreids. I tried even binding the
</span><br>
<span class="quotelev2">&gt; &gt; processes
</span><br>
<span class="quotelev2">&gt; &gt; in the command line using taskset. Open MPI gives me core id 0 for all
</span><br>
<span class="quotelev2">&gt; &gt; the processes whereas IMPI gives me correct bindings.
</span><br>
<span class="quotelev2">&gt; &gt; Please look into this
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sched.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int rank, size;
</span><br>
<span class="quotelev2">&gt; &gt;     cpu_set_t mask;
</span><br>
<span class="quotelev2">&gt; &gt;     long num;
</span><br>
<span class="quotelev2">&gt; &gt;     int proc_num(long num);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_topology_t topology;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_cpuset_t cpuset;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_obj_t obj;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_topology_init ( &amp;topology);
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_topology_load ( topology);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_bitmap_t set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_obj_t pu;
</span><br>
<span class="quotelev2">&gt; &gt;     int err;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     err = hwloc_get_proc_cpubind(topology, getpid(), set,
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC_CPUBIND_PROCESS);
</span><br>
<span class="quotelev2">&gt; &gt;     if (err) {
</span><br>
<span class="quotelev2">&gt; &gt;     printf (&quot;Error Cannot find\n&quot;), exit(1);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     pu = hwloc_get_pu_obj_by_os_index(topology, hwloc_bitmap_first(set));
</span><br>
<span class="quotelev2">&gt; &gt;     printf (&quot;Hello World, I am %d and pid: %d
</span><br>
<span class="quotelev2">&gt; &gt; coreid:%d\n&quot;,rank,getpid(),hwloc_bitmap_first(set));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_bitmap_free(set);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;     fclose(stdout);
</span><br>
<span class="quotelev2">&gt; &gt;     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Kranthi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2494, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kranthi
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21412.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
<li><strong>Reply:</strong> <a href="21414.php">Ralph Castain: "Re: [OMPI users] Core ids not coming properly"</a>
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
