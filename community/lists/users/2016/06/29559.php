<?
$subject_val = "Re: [OMPI users] OpenMP explicit thread affinity with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 01:20:30 2016" -->
<!-- isoreceived="20160629052030" -->
<!-- sent="Wed, 29 Jun 2016 01:20:27 -0400" -->
<!-- isosent="20160629052027" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP explicit thread affinity with MPI" -->
<!-- id="CA+ssbKUG_uFHe=uspV8vbRd1ceecA_ZCaK2K1wPCaPhuOg_TRQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1dfa3835-efdb-bdd5-99c7-af83a2fc3810_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-06-29 01:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph and Gilles.
<br>
<p>I didn't know about the OMPI_COMM_WORLD_LOCAL_RANK variable. Essentially,
<br>
this means I should be able to wrap my application call in a shell script
<br>
and have mpirun invoke that. Then within the script I can query this
<br>
variable and set correct OMP env variable, correct?
<br>
<p>Gilles, yes, the MPI command correctly bind processes to x number of cores.
<br>
I think it should be OMP_PROC_BIND=CLOSE according to
<br>
<a href="https://gcc.gnu.org/onlinedocs/libgomp/OMP_005fPROC_005fBIND.html">https://gcc.gnu.org/onlinedocs/libgomp/OMP_005fPROC_005fBIND.html</a>.
<br>
<p>I'll check these two options.
<br>
<p>Thanks,
<br>
Saliya
<br>
<p>On Tue, Jun 28, 2016 at 11:59 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Can't you simply
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMP_PROC_BIND=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; assuming mpirun has the correct command line (e.g. correctly bind tasks on
</span><br>
<span class="quotelev1">&gt; x cores so the x OpenMP threads will be individually bound to each core),
</span><br>
<span class="quotelev1">&gt; each is bound to disjoint cpusets, so i guess GOMP will bind OpenMP threads
</span><br>
<span class="quotelev1">&gt; within the given cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* at least this is what the Intel runtime is doing */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/29/2016 12:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why don&#226;&#128;&#153;t you have your application look at the OMPI_COMM_WORLD_LOCAL_RANK
</span><br>
<span class="quotelev1">&gt; envar, and then use that to calculate the offset location for your threads
</span><br>
<span class="quotelev1">&gt; (i.e., local rank 0 is on socket 0, local rank 1 is on socket 1, etc.). You
</span><br>
<span class="quotelev1">&gt; can then putenv the correct value of the GOMP envar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 28, 2016, at 8:40 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to do something like below with OpenMPI and OpenMP (threads).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to use the explicit thread affinity with GOMP_CPU_AFFINITY
</span><br>
<span class="quotelev1">&gt; environment variable as described here (
</span><br>
<span class="quotelev1">&gt; <a href="https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html">https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, both P0 and P1 processes will read the same GOMP_CPU_AFFINITY and
</span><br>
<span class="quotelev1">&gt; will place threads on the same set of cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to overcome this and pass process specific affinity scheme
</span><br>
<span class="quotelev1">&gt; to OpenMP when running with OpenMPI? For example, can I say T0 of P0 should
</span><br>
<span class="quotelev1">&gt; be in Core 0, but T0 of P1 should be Core 4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. I can manually achieve this within the program using
</span><br>
<span class="quotelev1">&gt; *sched_setaffinity()*, but that's not portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29556.php">http://www.open-mpi.org/community/lists/users/2016/06/29556.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29557.php">http://www.open-mpi.org/community/lists/users/2016/06/29557.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29558.php">http://www.open-mpi.org/community/lists/users/2016/06/29558.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>In reply to:</strong> <a href="29558.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29560.php">Saliya Ekanayake: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
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
