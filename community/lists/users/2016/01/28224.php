<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 15:49:20 2016" -->
<!-- isoreceived="20160106204920" -->
<!-- sent="Wed, 6 Jan 2016 21:48:58 +0100" -->
<!-- isosent="20160106204858" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAAbhqc47rBLj3TXjr_Sb-9QV_ti3foZNSqjYvej7hZBUhD57uQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFb48S_BxBwYRQhjU-yhRWJWAbRmxKyeMD+UuD_7qBrTW5awjg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-06 15:48:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28225.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28223.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28223.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28226.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28226.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your are correct. &quot;socket&quot; means that the resource is socket, &quot;ppr:2&quot; means
<br>
2 processes per resource.
<br>
PE=&lt;n&gt; is Processing Elements per process.
<br>
<p>Perhaps the dev's can shed some light on why PE uses &quot;=&quot; and ppr has &quot;:&quot; as
<br>
delimiter for resource request?
<br>
<p>This &quot;old&quot; slide show from Jeff shows the usage (although the input have
<br>
changed since 1.7):
<br>
<a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
<br>
<p><p>2016-01-06 21:33 GMT+01:00 Matt Thompson &lt;fortran_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; A ha! The Gurus know all. The map-by was the magic sauce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1176) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
</span><br>
<span class="quotelev1">&gt; ppr:2:socket:pe=7 ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 3
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 4
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 5
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 6
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 7
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 8
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 9
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 10
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 11
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 12
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 13
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 14
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 15
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 16
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 17
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 18
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 19
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 20
</span><br>
<span class="quotelev1">&gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 21
</span><br>
<span class="quotelev1">&gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 22
</span><br>
<span class="quotelev1">&gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 23
</span><br>
<span class="quotelev1">&gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 24
</span><br>
<span class="quotelev1">&gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 25
</span><br>
<span class="quotelev1">&gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 26
</span><br>
<span class="quotelev1">&gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, a question: what does &quot;ppr&quot; mean? The man page seems to accept it as
</span><br>
<span class="quotelev1">&gt; an axiom of Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        --map-by &lt;foo&gt;
</span><br>
<span class="quotelev1">&gt;               Map  to  the specified object, defaults to socket. Supported
</span><br>
<span class="quotelev1">&gt; options include slot, hwthread, core, L1cache, L2cache, L3cache, socket,
</span><br>
<span class="quotelev1">&gt; numa,
</span><br>
<span class="quotelev1">&gt;               board, node, sequential, distance, and ppr. Any object can
</span><br>
<span class="quotelev1">&gt; include modifiers by adding a : and any combination of PE=n (bind  n
</span><br>
<span class="quotelev1">&gt;  processing
</span><br>
<span class="quotelev1">&gt;               elements  to  each  proc), SPAN (load balance the processes
</span><br>
<span class="quotelev1">&gt; across the allocation), OVERSUBSCRIBE (allow more processes on a node than
</span><br>
<span class="quotelev1">&gt; pro&#226;&#128;&#144;
</span><br>
<span class="quotelev1">&gt;               cessing elements), and NOOVERSUBSCRIBE.  This includes PPR,
</span><br>
<span class="quotelev1">&gt; where the pattern would be terminated by another colon to separate it from
</span><br>
<span class="quotelev1">&gt;  the
</span><br>
<span class="quotelev1">&gt;               modifiers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it an acronym/initialism? From some experimenting it seems to be
</span><br>
<span class="quotelev1">&gt; ppr:2:socket means 2 processes per socket? And pe=7 means leave 7 processes
</span><br>
<span class="quotelev1">&gt; between them? Is that about right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 6, 2016 at 3:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe he wants two procs/socket, so you&#226;&#128;&#153;d need ppr:2:socket:pe=7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2016, at 12:14 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not think KMP_AFFINITY should affect anything in OpenMPI, it is an
</span><br>
<span class="quotelev2">&gt;&gt; MKL env setting? Or am I wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that these are used in an environment where openmpi automatically
</span><br>
<span class="quotelev2">&gt;&gt; gets the host-file. Hence they are not present.
</span><br>
<span class="quotelev2">&gt;&gt; With intel mkl and openmpi I got the best performance using these, rather
</span><br>
<span class="quotelev2">&gt;&gt; long flags:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export KMP_AFFINITY=verbose,compact,granularity=core
</span><br>
<span class="quotelev2">&gt;&gt; export KMP_STACKSIZE=62M
</span><br>
<span class="quotelev2">&gt;&gt; export KMP_SETTINGS=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; def_flags=&quot;--bind-to core -x OMP_PROC_BIND=true --report-bindings&quot;
</span><br>
<span class="quotelev2">&gt;&gt; def_flags=&quot;$def_flags -x KMP_AFFINITY=$KMP_AFFINITY&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # in your case 7:
</span><br>
<span class="quotelev2">&gt;&gt; ONP=7
</span><br>
<span class="quotelev2">&gt;&gt; flags=&quot;$def_flags -x MKL_NUM_THREADS=$ONP -x MKL_DYNAMIC=FALSE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; flags=&quot;$flags -x OMP_NUM_THREADS=$ONP -x OMP_DYNAMIC=FALSE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; flags=&quot;$flags -x KMP_STACKSIZE=$KMP_STACKSIZE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; flags=&quot;$flags --map-by ppr:1:socket:pe=7&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then run your program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun $flags &lt;app&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A lot of the option flags are duplicated (and strictly not needed), but I
</span><br>
<span class="quotelev2">&gt;&gt; provide them for easy testing changes.
</span><br>
<span class="quotelev2">&gt;&gt; Surely this is application dependent, but for my case it was performing
</span><br>
<span class="quotelev2">&gt;&gt; really well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-01-06 20:48 GMT+01:00 Erik Schnetter &lt;schnetter_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting KMP_AFFINITY will probably override anything that OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sets. Can you try without?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -erik
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 6, 2016 at 2:46 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello Open MPI Gurus,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; things to get the same behavior in various stacks. For example, I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 28-core node (2 14-core Haswells), and I'd like to run 4 MPI processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; OpenMP threads. Thus, I'd like the processes to be 2 processes per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; with the OpenMP threads laid out on them. Using a &quot;hybrid Hello World&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; program, I can achieve this with Intel MPI (after a lot of testing):
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 21
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 22
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 23
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 24
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 25
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 26
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 27
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Other than the odd fact that Process #0 seemed to start on Socket #1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (this
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; might be an artifact of how I'm trying to detect the CPU I'm on), this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looks
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; reasonable. 14 threads on each socket and each process is laying out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; threads in a nice orderly fashion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm trying to figure out how to do this with Open MPI (version 1.10.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; apparently I am just not quite good enough to figure it out. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; closest
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I've gotten is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -map-by
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ppr:2:socket ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Obviously not right. Any ideas on how to help me learn? The man mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; page
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; is a bit formidable in the pinning part, so maybe I've missed an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obvious
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; answer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Matt
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Matt Thompson
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Man Among Men
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Fulcrum of History
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28217.php">http://www.open-mpi.org/community/lists/users/2016/01/28217.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28218.php">http://www.open-mpi.org/community/lists/users/2016/01/28218.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28219.php">http://www.open-mpi.org/community/lists/users/2016/01/28219.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28221.php">http://www.open-mpi.org/community/lists/users/2016/01/28221.php</a>
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
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28223.php">http://www.open-mpi.org/community/lists/users/2016/01/28223.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28225.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28223.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28223.php">Matt Thompson: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28226.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28226.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
