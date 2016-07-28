<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 15:15:07 2016" -->
<!-- isoreceived="20160106201507" -->
<!-- sent="Wed, 6 Jan 2016 21:14:46 +0100" -->
<!-- isosent="20160106201446" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAAbhqc4eP=nd_tFSLURyZgHXthUkVR-VrrpQ5pwygT2D03fMjw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADKQjjcBiAcYG9ndgEzJ1viWG2ks3MB4UOHecEkV-P83f5JnxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 15:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28220.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not think KMP_AFFINITY should affect anything in OpenMPI, it is an MKL
<br>
env setting? Or am I wrong?
<br>
<p>Note that these are used in an environment where openmpi automatically gets
<br>
the host-file. Hence they are not present.
<br>
With intel mkl and openmpi I got the best performance using these, rather
<br>
long flags:
<br>
<p>export KMP_AFFINITY=verbose,compact,granularity=core
<br>
export KMP_STACKSIZE=62M
<br>
export KMP_SETTINGS=1
<br>
<p>def_flags=&quot;--bind-to core -x OMP_PROC_BIND=true --report-bindings&quot;
<br>
def_flags=&quot;$def_flags -x KMP_AFFINITY=$KMP_AFFINITY&quot;
<br>
<p># in your case 7:
<br>
ONP=7
<br>
flags=&quot;$def_flags -x MKL_NUM_THREADS=$ONP -x MKL_DYNAMIC=FALSE&quot;
<br>
flags=&quot;$flags -x OMP_NUM_THREADS=$ONP -x OMP_DYNAMIC=FALSE&quot;
<br>
flags=&quot;$flags -x KMP_STACKSIZE=$KMP_STACKSIZE&quot;
<br>
flags=&quot;$flags --map-by ppr:1:socket:pe=7&quot;
<br>
<p>then run your program:
<br>
<p>mpirun $flags &lt;app&gt;
<br>
<p>A lot of the option flags are duplicated (and strictly not needed), but I
<br>
provide them for easy testing changes.
<br>
Surely this is application dependent, but for my case it was performing
<br>
really well.
<br>
<p><p>2016-01-06 20:48 GMT+01:00 Erik Schnetter &lt;schnetter_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Setting KMP_AFFINITY will probably override anything that OpenMPI
</span><br>
<span class="quotelev1">&gt; sets. Can you try without?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 6, 2016 at 2:46 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Open MPI Gurus,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how to do
</span><br>
<span class="quotelev2">&gt; &gt; things to get the same behavior in various stacks. For example, I have a
</span><br>
<span class="quotelev2">&gt; &gt; 28-core node (2 14-core Haswells), and I'd like to run 4 MPI processes
</span><br>
<span class="quotelev1">&gt; and 7
</span><br>
<span class="quotelev2">&gt; &gt; OpenMP threads. Thus, I'd like the processes to be 2 processes per socket
</span><br>
<span class="quotelev2">&gt; &gt; with the OpenMP threads laid out on them. Using a &quot;hybrid Hello World&quot;
</span><br>
<span class="quotelev2">&gt; &gt; program, I can achieve this with Intel MPI (after a lot of testing):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev2">&gt; &gt; ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev2">&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 7
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 9
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 11
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 12
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 13
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 14
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 15
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 19
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 21
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 22
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 23
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 24
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 25
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 26
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 27
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other than the odd fact that Process #0 seemed to start on Socket #1
</span><br>
<span class="quotelev1">&gt; (this
</span><br>
<span class="quotelev2">&gt; &gt; might be an artifact of how I'm trying to detect the CPU I'm on), this
</span><br>
<span class="quotelev1">&gt; looks
</span><br>
<span class="quotelev2">&gt; &gt; reasonable. 14 threads on each socket and each process is laying out its
</span><br>
<span class="quotelev2">&gt; &gt; threads in a nice orderly fashion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to figure out how to do this with Open MPI (version 1.10.0)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; apparently I am just not quite good enough to figure it out. The closest
</span><br>
<span class="quotelev2">&gt; &gt; I've gotten is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
</span><br>
<span class="quotelev2">&gt; &gt; ppr:2:socket ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 14
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 14
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 15
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 15
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 17
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 18
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 19
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 19
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev2">&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Obviously not right. Any ideas on how to help me learn? The man mpirun
</span><br>
<span class="quotelev1">&gt; page
</span><br>
<span class="quotelev2">&gt; &gt; is a bit formidable in the pinning part, so maybe I've missed an obvious
</span><br>
<span class="quotelev2">&gt; &gt; answer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matt
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Man Among Men
</span><br>
<span class="quotelev2">&gt; &gt; Fulcrum of History
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28217.php">http://www.open-mpi.org/community/lists/users/2016/01/28217.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28218.php">http://www.open-mpi.org/community/lists/users/2016/01/28218.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28220.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28218.php">Erik Schnetter: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
