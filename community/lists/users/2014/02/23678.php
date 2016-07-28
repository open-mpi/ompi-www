<?
$subject_val = "Re: [OMPI users] Binding to Core Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 19:29:55 2014" -->
<!-- isoreceived="20140227002955" -->
<!-- sent="Wed, 26 Feb 2014 19:29:54 -0500" -->
<!-- isosent="20140227002954" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Binding to Core Warning" -->
<!-- id="CA+ssbKUXzLs3J7hrV=5vMryH8s7aGpL47nqECNpn_TbOZU_29g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4AFF012-0BC1-4778-95BE-29D8CCFF8606_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Binding to Core Warning<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 19:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23679.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Previous message:</strong> <a href="23677.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23673.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23679.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Reply:</strong> <a href="23679.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see, so if I understand correctly, the best scenario for threads would be
<br>
to bind 2 procs to sockets as --map-by socket:pe=4 and use 4 threads in
<br>
each proc.
<br>
<p>Also, as you've mentioned binding threads to get memory locality, I guess
<br>
this has to be done at application level and not an option in OMPI
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Wed, Feb 26, 2014 at 4:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, had to run some errands.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2014, at 1:03 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to bind to cores of multiple sockets? Say I have a machine
</span><br>
<span class="quotelev1">&gt; with 2 sockets each with 4 cores and if I run 8 threads with 1 proc can I
</span><br>
<span class="quotelev1">&gt; utilize all 8 cores for 8 threads?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In that scenario, you won't get any benefit from binding as we only bind
</span><br>
<span class="quotelev1">&gt; at the proc level (and binding to the entire node does nothing). You might
</span><br>
<span class="quotelev1">&gt; want to bind your threads, however, as otherwise the threads will not
</span><br>
<span class="quotelev1">&gt; necessarily execute local to any memory they malloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for speedy replies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 26, 2014 at 3:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 26, 2014, at 12:17 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a followup question on this. In our application we have parallel
</span><br>
<span class="quotelev2">&gt;&gt; for loops similar to OMP parallel for. I noticed that in order to gain
</span><br>
<span class="quotelev2">&gt;&gt; speedup with threads I've to set --bind-to none, otherwise multiple threads
</span><br>
<span class="quotelev2">&gt;&gt; will bind to same core giving no increase in performance. For example, I
</span><br>
<span class="quotelev2">&gt;&gt; get following (attached) performance for a simple 3point stencil
</span><br>
<span class="quotelev2">&gt;&gt; computation run with T threads on 1 MPI process on 1 node (Tx1x1).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is even when there are multiple procs per node we should
</span><br>
<span class="quotelev2">&gt;&gt; use --bind-to none in order to get performance with threads. Is this
</span><br>
<span class="quotelev2">&gt;&gt; correct? Also, what's the disadvantage of not using --bind-to core?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your best performance with threads comes when you bind each process to
</span><br>
<span class="quotelev2">&gt;&gt; multiple cores. Binding helps performance by ensuring your memory is always
</span><br>
<span class="quotelev2">&gt;&gt; local, and provides some optimized scheduling benefits. You can bind to
</span><br>
<span class="quotelev2">&gt;&gt; multiple cores by adding the qualifier &quot;pe=N&quot; to your mapping definition,
</span><br>
<span class="quotelev2">&gt;&gt; like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --map-by socket:pe=4 ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above example will map processes by socket, and bind each process to
</span><br>
<span class="quotelev2">&gt;&gt; 4 cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 26, 2014 at 11:01 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you Ralph, I'll check this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 26, 2014 at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It means that OMPI didn't get built against libnuma, and so we can't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure that memory is being bound local to the proc binding. Check to see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if numactl and numactl-devel are installed, or you can turn off the warning
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using &quot;-mca hwloc_base_mem_bind_failure_action silent&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 25, 2014, at 10:32 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to run an MPI Java program with --bind-to core. I receive the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following warning and wonder how to fix this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Node:  192.168.0.19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be degraded.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;3pointstencil.png&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23679.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Previous message:</strong> <a href="23677.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23673.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23679.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Reply:</strong> <a href="23679.php">Ralph Castain: "Re: [OMPI users] Binding to Core Warning"</a>
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
