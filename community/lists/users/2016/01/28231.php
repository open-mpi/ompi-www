<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 18:52:21 2016" -->
<!-- isoreceived="20160106235221" -->
<!-- sent="Thu, 7 Jan 2016 00:52:00 +0100" -->
<!-- isosent="20160106235200" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="CAAbhqc5-d=7zc2Pb7Tg-dLB7p-SeNTfizfzXOWNMU7iwP_aWGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=u+O0+ythwO-7--V4uBqJ2xHCeozuWjBt=Rh3fco3MT7UQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-06 18:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28230.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28230.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the clarification. :)
<br>
<p>2016-01-07 0:48 GMT+01:00 Jeff Hammond &lt;jeff.science_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; KMP_AFFINITY is an Intel OpenMP runtime setting, not an MKL option,
</span><br>
<span class="quotelev1">&gt; although MKL will respect it since MKL uses the Intel OpenMP runtime (by
</span><br>
<span class="quotelev1">&gt; default, at least).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenMP 4.0 equivalent of KMP_AFFINITY are OMP_PROC_BIND and
</span><br>
<span class="quotelev1">&gt; OMP_PLACES.  I do not know how many OpenMP implementations support these
</span><br>
<span class="quotelev1">&gt; two options, but Intel and GCC should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 6, 2016 at 1:04 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, thanks :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-01-06 22:03 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not really - just consistent with the other cmd line options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 6, 2016, at 12:58 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It was just that when I started using map-by I didn't get why:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppr:2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PE=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would at least have expected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppr=2:PE=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppr:2:PE:2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this have a reason?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-01-06 21:54 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;LOL&gt; ah yes, &#226;&#128;&#156;r&#226;&#128;&#157; = &#226;&#128;&#156;resource&#226;&#128;&#157;!! Thanks for the reminder :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The difference in delimiter is just to simplify parsing - we can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#226;&#128;&#156;split&#226;&#128;&#157; the string on colons to separate out the options, and then use &#226;&#128;&#156;=&#226;&#128;&#156;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to set the value. Nothing particularly significant about the choice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2016, at 12:48 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your are correct. &quot;socket&quot; means that the resource is socket, &quot;ppr:2&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; means 2 processes per resource.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PE=&lt;n&gt; is Processing Elements per process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps the dev's can shed some light on why PE uses &quot;=&quot; and ppr has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;:&quot; as delimiter for resource request?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This &quot;old&quot; slide show from Jeff shows the usage (although the input
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have changed since 1.7):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2016-01-06 21:33 GMT+01:00 Matt Thompson &lt;fortran_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A ha! The Gurus know all. The map-by was the magic sauce:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1176) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -map-by ppr:2:socket:pe=7 ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 19
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 21
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 22
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 23
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 24
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 25
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 26
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CPU 27
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, a question: what does &quot;ppr&quot; mean? The man page seems to accept it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as an axiom of Open MPI:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        --map-by &lt;foo&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Map  to  the specified object, defaults to socket.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Supported options include slot, hwthread, core, L1cache, L2cache, L3cache,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; socket, numa,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               board, node, sequential, distance, and ppr. Any object
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can include modifiers by adding a : and any combination of PE=n (bind  n
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               elements  to  each  proc), SPAN (load balance the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes across the allocation), OVERSUBSCRIBE (allow more processes on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node than pro&#226;&#128;&#144;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               cessing elements), and NOOVERSUBSCRIBE.  This includes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PPR, where the pattern would be terminated by another colon to separate it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from  the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               modifiers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it an acronym/initialism? From some experimenting it seems to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ppr:2:socket means 2 processes per socket? And pe=7 means leave 7 processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; between them? Is that about right?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, Jan 6, 2016 at 3:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I believe he wants two procs/socket, so you&#226;&#128;&#153;d need ppr:2:socket:pe=7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 6, 2016, at 12:14 PM, Nick Papior &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I do not think KMP_AFFINITY should affect anything in OpenMPI, it is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; an MKL env setting? Or am I wrong?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note that these are used in an environment where openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; automatically gets the host-file. Hence they are not present.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; With intel mkl and openmpi I got the best performance using these,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rather long flags:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export KMP_AFFINITY=verbose,compact,granularity=core
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export KMP_STACKSIZE=62M
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export KMP_SETTINGS=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; def_flags=&quot;--bind-to core -x OMP_PROC_BIND=true --report-bindings&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; def_flags=&quot;$def_flags -x KMP_AFFINITY=$KMP_AFFINITY&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # in your case 7:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ONP=7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=&quot;$def_flags -x MKL_NUM_THREADS=$ONP -x MKL_DYNAMIC=FALSE&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=&quot;$flags -x OMP_NUM_THREADS=$ONP -x OMP_DYNAMIC=FALSE&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=&quot;$flags -x KMP_STACKSIZE=$KMP_STACKSIZE&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=&quot;$flags --map-by ppr:1:socket:pe=7&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then run your program:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun $flags &lt;app&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A lot of the option flags are duplicated (and strictly not needed),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but I provide them for easy testing changes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Surely this is application dependent, but for my case it was
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performing really well.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2016-01-06 20:48 GMT+01:00 Erik Schnetter &lt;schnetter_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Setting KMP_AFFINITY will probably override anything that OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sets. Can you try without?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -erik
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, Jan 6, 2016 at 2:46 PM, Matt Thompson &lt;fortran_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello Open MPI Gurus,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; As I explore MPI-OpenMP hybrid codes, I'm trying to figure out how
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; things to get the same behavior in various stacks. For example, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; 28-core node (2 14-core Haswells), and I'd like to run 4 MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes and 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; OpenMP threads. Thus, I'd like the processes to be 2 processes per
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; with the OpenMP threads laid out on them. Using a &quot;hybrid Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; World&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; program, I can achieve this with Intel MPI (after a lot of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; testing):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; (1097) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 21
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 22
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 23
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Other than the odd fact that Process #0 seemed to start on Socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1 (this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; might be an artifact of how I'm trying to detect the CPU I'm on),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this looks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; reasonable. 14 threads on each socket and each process is laying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; out its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; threads in a nice orderly fashion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I'm trying to figure out how to do this with Open MPI (version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.10.0) and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; apparently I am just not quite good enough to figure it out. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; closest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I've gotten is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; (1155) $ env OMP_NUM_THREADS=7 KMP_AFFINITY=compact mpirun -np 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -map-by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; ppr:2:socket ./hello-hybrid.x | sort -g -k 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 0 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 1 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 0 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 1 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 2 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 3 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 4 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 5 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 2 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hello from thread 6 out of 7 from process 3 out of 4 on borgo035
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on CPU 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Obviously not right. Any ideas on how to help me learn? The man
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun page
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; is a bit formidable in the pinning part, so maybe I've missed an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; obvious
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; answer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Matt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Matt Thompson
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Man Among Men
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Fulcrum of History
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28217.php">http://www.open-mpi.org/community/lists/users/2016/01/28217.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28218.php">http://www.open-mpi.org/community/lists/users/2016/01/28218.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28219.php">http://www.open-mpi.org/community/lists/users/2016/01/28219.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28221.php">http://www.open-mpi.org/community/lists/users/2016/01/28221.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28223.php">http://www.open-mpi.org/community/lists/users/2016/01/28223.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28224.php">http://www.open-mpi.org/community/lists/users/2016/01/28224.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28226.php">http://www.open-mpi.org/community/lists/users/2016/01/28226.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards Nick
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28227.php">http://www.open-mpi.org/community/lists/users/2016/01/28227.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28228.php">http://www.open-mpi.org/community/lists/users/2016/01/28228.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28229.php">http://www.open-mpi.org/community/lists/users/2016/01/28229.php</a>
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
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28230.php">http://www.open-mpi.org/community/lists/users/2016/01/28230.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28230.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>In reply to:</strong> <a href="28230.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28232.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
