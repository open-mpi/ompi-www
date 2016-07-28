<?
$subject_val = "Re: [OMPI users] OpenMP explicit thread affinity with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 23:59:12 2016" -->
<!-- isoreceived="20160629035912" -->
<!-- sent="Wed, 29 Jun 2016 12:59:12 +0900" -->
<!-- isosent="20160629035912" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP explicit thread affinity with MPI" -->
<!-- id="1dfa3835-efdb-bdd5-99c7-af83a2fc3810_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C1F0652E-E3DB-4A04-B360-0C37ABC93ED3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP explicit thread affinity with MPI<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-28 23:59:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't you simply
<br>
<p>export OMP_PROC_BIND=1
<br>
<p><p>assuming mpirun has the correct command line (e.g. correctly bind tasks 
<br>
on x cores so the x OpenMP threads will be individually bound to each 
<br>
core), each is bound to disjoint cpusets, so i guess GOMP will bind 
<br>
OpenMP threads within the given cpuset.
<br>
<p>/* at least this is what the Intel runtime is doing */
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/29/2016 12:47 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Why don&#146;t you have your application look at 
</span><br>
<span class="quotelev1">&gt; the OMPI_COMM_WORLD_LOCAL_RANK envar, and then use that to calculate 
</span><br>
<span class="quotelev1">&gt; the offset location for your threads (i.e., local rank 0 is on socket 
</span><br>
<span class="quotelev1">&gt; 0, local rank 1 is on socket 1, etc.). You can then putenv the correct 
</span><br>
<span class="quotelev1">&gt; value of the GOMP envar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 28, 2016, at 8:40 PM, Saliya Ekanayake &lt;esaliya_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:esaliya_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to do something like below with OpenMPI and OpenMP (threads).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to use the explicit thread affinity with 
</span><br>
<span class="quotelev2">&gt;&gt; GOMP_CPU_AFFINITY environment variable as described here 
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html">https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, both P0 and P1 processes will read the same 
</span><br>
<span class="quotelev2">&gt;&gt; GOMP_CPU_AFFINITY and will place threads on the same set of cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to overcome this and pass process specific affinity 
</span><br>
<span class="quotelev2">&gt;&gt; scheme to OpenMP when running with OpenMPI? For example, can I say T0 
</span><br>
<span class="quotelev2">&gt;&gt; of P0 should be in Core 0, but T0 of P1 should be Core 4?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. I can manually achieve this within the program using 
</span><br>
<span class="quotelev2">&gt;&gt; *sched_setaffinity()*, but that's not portable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29556.php">http://www.open-mpi.org/community/lists/users/2016/06/29556.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29557.php">http://www.open-mpi.org/community/lists/users/2016/06/29557.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
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
