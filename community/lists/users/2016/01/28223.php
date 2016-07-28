<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 15:34:08 2016" -->
<!-- isoreceived="20160106203408" -->
<!-- sent="Wed, 6 Jan 2016 15:33:37 -0500" -->
<!-- isosent="20160106203337" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAFb48S_BxBwYRQhjU-yhRWJWAbRmxKyeMD+UuD_7qBrTW5awjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7B082E4B-8BC0-47F0-8242-990AC7E74DAC_at_open-mpi.org" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 15:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28224.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28222.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28224.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28224.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28225.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A ha! The Gurus know all. The map-by was the magic sauce:
<br>
<p>(1176) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
<br>
ppr:2:socket:pe=7 ./hello-hybrid.x | sort -g -k 18
<br>
Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU 0
<br>
Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU 1
<br>
Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU 2
<br>
Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU 3
<br>
Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU 4
<br>
Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU 5
<br>
Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU 6
<br>
Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU 7
<br>
Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU 8
<br>
Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU 9
<br>
Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU 10
<br>
Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU 11
<br>
Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU 12
<br>
Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU 13
<br>
Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU 14
<br>
Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU 15
<br>
Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU 16
<br>
Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU 17
<br>
Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU 18
<br>
Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU 19
<br>
Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU 20
<br>
Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU 21
<br>
Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU 22
<br>
Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU 23
<br>
Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU 24
<br>
Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU 25
<br>
Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU 26
<br>
Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU 27
<br>
<p>So, a question: what does &quot;ppr&quot; mean? The man page seems to accept it as an
<br>
axiom of Open MPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--map-by &lt;foo&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Map  to  the specified object, defaults to socket. Supported
<br>
options include slot, hwthread, core, L1cache, L2cache, L3cache, socket,
<br>
numa,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board, node, sequential, distance, and ppr. Any object can
<br>
include modifiers by adding a : and any combination of PE=n (bind  n
<br>
&nbsp;processing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elements  to  each  proc), SPAN (load balance the processes
<br>
across the allocation), OVERSUBSCRIBE (allow more processes on a node than
<br>
pro&#226;&#128;&#144;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cessing elements), and NOOVERSUBSCRIBE.  This includes PPR,
<br>
where the pattern would be terminated by another colon to separate it from
<br>
&nbsp;the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modifiers.
<br>
<p>Is it an acronym/initialism? From some experimenting it seems to be
<br>
ppr:2:socket means 2 processes per socket? And pe=7 means leave 7 processes
<br>
between them? Is that about right?
<br>
<p>Matt
<br>
<p>On Wed, Jan 6, 2016 at 3:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe he wants two procs/socket, so you&#226;&#128;&#153;d need ppr:2:socket:pe=7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2016, at 12:14 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not think KMP_AFFINITY should affect anything in OpenMPI, it is an
</span><br>
<span class="quotelev1">&gt; MKL env setting? Or am I wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that these are used in an environment where openmpi automatically
</span><br>
<span class="quotelev1">&gt; gets the host-file. Hence they are not present.
</span><br>
<span class="quotelev1">&gt; With intel mkl and openmpi I got the best performance using these, rather
</span><br>
<span class="quotelev1">&gt; long flags:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export KMP_AFFINITY=verbose,compact,granularity=core
</span><br>
<span class="quotelev1">&gt; export KMP_STACKSIZE=62M
</span><br>
<span class="quotelev1">&gt; export KMP_SETTINGS=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; def_flags=&quot;--bind-to core -x OMP_PROC_BIND=true --report-bindings&quot;
</span><br>
<span class="quotelev1">&gt; def_flags=&quot;$def_flags -x KMP_AFFINITY=$KMP_AFFINITY&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # in your case 7:
</span><br>
<span class="quotelev1">&gt; ONP=7
</span><br>
<span class="quotelev1">&gt; flags=&quot;$def_flags -x MKL_NUM_THREADS=$ONP -x MKL_DYNAMIC=FALSE&quot;
</span><br>
<span class="quotelev1">&gt; flags=&quot;$flags -x OMP_NUM_THREADS=$ONP -x OMP_DYNAMIC=FALSE&quot;
</span><br>
<span class="quotelev1">&gt; flags=&quot;$flags -x KMP_STACKSIZE=$KMP_STACKSIZE&quot;
</span><br>
<span class="quotelev1">&gt; flags=&quot;$flags --map-by ppr:1:socket:pe=7&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then run your program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun $flags &lt;app&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A lot of the option flags are duplicated (and strictly not needed), but I
</span><br>
<span class="quotelev1">&gt; provide them for easy testing changes.
</span><br>
<span class="quotelev1">&gt; Surely this is application dependent, but for my case it was performing
</span><br>
<span class="quotelev1">&gt; really well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-06 20:48 GMT+01:00 Erik Schnetter &lt;schnetter_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setting KMP_AFFINITY will probably override anything that OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; sets. Can you try without?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jan 6, 2016 at 2:46 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello Open MPI Gurus,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how to do
</span><br>
<span class="quotelev3">&gt;&gt; &gt; things to get the same behavior in various stacks. For example, I have a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 28-core node (2 14-core Haswells), and I'd like to run 4 MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; and 7
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OpenMP threads. Thus, I'd like the processes to be 2 processes per
</span><br>
<span class="quotelev2">&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with the OpenMP threads laid out on them. Using a &quot;hybrid Hello World&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; program, I can achieve this with Intel MPI (after a lot of testing):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev3">&gt;&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 7
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 9
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 10
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 11
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 12
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 13
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 14
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 15
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 16
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 17
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 18
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 19
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 20
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 21
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 22
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 23
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 24
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 25
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 26
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 27
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Other than the odd fact that Process #0 seemed to start on Socket #1
</span><br>
<span class="quotelev2">&gt;&gt; (this
</span><br>
<span class="quotelev3">&gt;&gt; &gt; might be an artifact of how I'm trying to detect the CPU I'm on), this
</span><br>
<span class="quotelev2">&gt;&gt; looks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reasonable. 14 threads on each socket and each process is laying out its
</span><br>
<span class="quotelev3">&gt;&gt; &gt; threads in a nice orderly fashion.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm trying to figure out how to do this with Open MPI (version 1.10.0)
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; apparently I am just not quite good enough to figure it out. The closest
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've gotten is:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4 -map-by
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ppr:2:socket ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 14
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 14
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 15
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 15
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 16
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 16
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 17
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 17
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 18
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 18
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 19
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 19
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 20
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on CPU
</span><br>
<span class="quotelev2">&gt;&gt; 20
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Obviously not right. Any ideas on how to help me learn? The man mpirun
</span><br>
<span class="quotelev2">&gt;&gt; page
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is a bit formidable in the pinning part, so maybe I've missed an obvious
</span><br>
<span class="quotelev3">&gt;&gt; &gt; answer.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Matt Thompson
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Man Among Men
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fulcrum of History
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28217.php">http://www.open-mpi.org/community/lists/users/2016/01/28217.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28218.php">http://www.open-mpi.org/community/lists/users/2016/01/28218.php</a>
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
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28219.php">http://www.open-mpi.org/community/lists/users/2016/01/28219.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28221.php">http://www.open-mpi.org/community/lists/users/2016/01/28221.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28224.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28222.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28221.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28224.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28224.php">Nick Papior: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28225.php">Ralph Castain: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
