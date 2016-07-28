<?
$subject_val = "Re: [OMPI users] OpenMP explicit thread affinity with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 01:52:03 2016" -->
<!-- isoreceived="20160629055203" -->
<!-- sent="Wed, 29 Jun 2016 01:51:51 -0400" -->
<!-- isosent="20160629055151" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP explicit thread affinity with MPI" -->
<!-- id="CA+ssbKV7EpX=jbGQr7hOZcu_mhURsj0+NgtJJyS78U_-2AM9xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKUG_uFHe=uspV8vbRd1ceecA_ZCaK2K1wPCaPhuOg_TRQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-29 01:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29561.php">Jason Maldonis: "[OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>Previous message:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The OMP_PROC_BIND=CLOSE approach works, except it will bind threads to 1
<br>
hardware thread only (when HT is present). For example, doing the following
<br>
to run 2 procs per node each with 4 threads, the thread affinity info
<br>
(queried through sched_getaffinity()) comes out as below.
<br>
<p>mpirun -np 2 --map-by ppr:2:node:PE=4 ./a.out
<br>
<p>Rank 0 Thread 0, tid 12173, affinity 0
<br>
Rank 0 Thread 1, tid 12184, affinity 1
<br>
Rank 0 Thread 2, tid 12185, affinity 2
<br>
Rank 0 Thread 3, tid 12186, affinity 3
<br>
<p>Rank 1 Thread 0, tid 12174, affinity 4
<br>
Rank 1 Thread 1, tid 12181, affinity 5
<br>
Rank 1 Thread 2, tid 12182, affinity 6
<br>
Rank 1 Thread 3, tid 12183, affinity 7
<br>
<p>If threads got bound to the full core these should have looked like &quot;Rank 0
<br>
Thread 0, tid 12173, affinity *0,24*&quot;
<br>
<p>Reading through OpenMP, it seems there's no way to bind 1 thread to
<br>
multiple places using the environment setting provided. Intel's version
<br>
seem to support that, though.
<br>
<p><p><p>On Wed, Jun 29, 2016 at 1:20 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Ralph and Gilles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't know about the OMPI_COMM_WORLD_LOCAL_RANK variable. Essentially,
</span><br>
<span class="quotelev1">&gt; this means I should be able to wrap my application call in a shell script
</span><br>
<span class="quotelev1">&gt; and have mpirun invoke that. Then within the script I can query this
</span><br>
<span class="quotelev1">&gt; variable and set correct OMP env variable, correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles, yes, the MPI command correctly bind processes to x number of
</span><br>
<span class="quotelev1">&gt; cores. I think it should be OMP_PROC_BIND=CLOSE according to
</span><br>
<span class="quotelev1">&gt; <a href="https://gcc.gnu.org/onlinedocs/libgomp/OMP_005fPROC_005fBIND.html">https://gcc.gnu.org/onlinedocs/libgomp/OMP_005fPROC_005fBIND.html</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll check these two options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 28, 2016 at 11:59 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can't you simply
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_PROC_BIND=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; assuming mpirun has the correct command line (e.g. correctly bind tasks
</span><br>
<span class="quotelev2">&gt;&gt; on x cores so the x OpenMP threads will be individually bound to each
</span><br>
<span class="quotelev2">&gt;&gt; core), each is bound to disjoint cpusets, so i guess GOMP will bind OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; threads within the given cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* at least this is what the Intel runtime is doing */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/29/2016 12:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why don&#226;&#128;&#153;t you have your application look at
</span><br>
<span class="quotelev2">&gt;&gt; the OMPI_COMM_WORLD_LOCAL_RANK envar, and then use that to calculate the
</span><br>
<span class="quotelev2">&gt;&gt; offset location for your threads (i.e., local rank 0 is on socket 0, local
</span><br>
<span class="quotelev2">&gt;&gt; rank 1 is on socket 1, etc.). You can then putenv the correct value of the
</span><br>
<span class="quotelev2">&gt;&gt; GOMP envar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 28, 2016, at 8:40 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt;&gt; I was trying to use the explicit thread affinity with GOMP_CPU_AFFINITY
</span><br>
<span class="quotelev2">&gt;&gt; environment variable as described here (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html">https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, both P0 and P1 processes will read the same GOMP_CPU_AFFINITY
</span><br>
<span class="quotelev2">&gt;&gt; and will place threads on the same set of cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to overcome this and pass process specific affinity scheme
</span><br>
<span class="quotelev2">&gt;&gt; to OpenMP when running with OpenMPI? For example, can I say T0 of P0 should
</span><br>
<span class="quotelev2">&gt;&gt; be in Core 0, but T0 of P1 should be Core 4?
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
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29556.php">http://www.open-mpi.org/community/lists/users/2016/06/29556.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29557.php">http://www.open-mpi.org/community/lists/users/2016/06/29557.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29558.php">http://www.open-mpi.org/community/lists/users/2016/06/29558.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29561.php">Jason Maldonis: "[OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>Previous message:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29559.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
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
