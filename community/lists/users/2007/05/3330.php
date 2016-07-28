<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 17:38:23 2007" -->
<!-- isoreceived="20070527213823" -->
<!-- sent="Sun, 27 May 2007 15:38:16 -0600 (MDT)" -->
<!-- isosent="20070527213816" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="57882.128.165.0.81.1180301896.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1180300907.4659f66bd7962_at_webmail.ksu.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 17:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, in v1.2 it will return MPI_THREAD_SINGLE (although it really
<br>
shouldn't).  Some MPI implementations may do something different if you
<br>
request MPI_THREAD_FUNNELED instead of MPI_THREAD_SINGLE, so you should
<br>
continue to do that.  A future version of Open MPI will return the
<br>
provided as MPI_THREAD_FUNNELED in that case instead of MPI_THREAD_SINGLE.
<br>
&nbsp;But you can safely use two threads as you describe even with the provided
<br>
of MPI_THREAD_SINGLE.
<br>
<p>Brian
<br>
<p><span class="quotelev1">&gt; I tried with MPI_THREAD_FUNNELED but it still returns MPI_THREAD_SINGLE
</span><br>
<span class="quotelev1">&gt; in &quot;provided&quot;. I tried a sample program that has thread_0 doing MPI and
</span><br>
<span class="quotelev1">&gt; thread_1 doing some computation and thread_0 and thread_1 doing some
</span><br>
<span class="quotelev1">&gt; thread synchronization (using pthread condition variables). The program
</span><br>
<span class="quotelev1">&gt; seems to be doing fine and so also the thread synchronization. I think,
</span><br>
<span class="quotelev1">&gt; even if MPI_THREAD_SINGLE is returned in provided, such a design works.
</span><br>
<span class="quotelev1">&gt; Now, since the thread synchronization seems to be fine, I think multiple
</span><br>
<span class="quotelev1">&gt; threads (with only one thread executing MPI calls) works even if
</span><br>
<span class="quotelev1">&gt; &quot;provided&quot; returns MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Sarang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting &quot;Brian W. Barrett&quot; &lt;bbarrett_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If only one thread ever makes calls into MPI,  you don't actually
</span><br>
<span class="quotelev2">&gt;&gt; need
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE but only MPI_THREAD_FUNNELED.  Open MPI will
</span><br>
<span class="quotelev2">&gt;&gt; generally
</span><br>
<span class="quotelev2">&gt;&gt; support MPI_THREAD_FUNNELED out of the box (but on certain
</span><br>
<span class="quotelev2">&gt;&gt; configurations,
</span><br>
<span class="quotelev2">&gt;&gt; mainly platforms without threads, will not), so if you request
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_FUNNELED, it should be returned in provided.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks a lot guys for your help. I am also trying a design where I
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one thread doing MPI and others doing some computation (non-MPI).
</span><br>
<span class="quotelev2">&gt;&gt; If I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have only MPI_THREAD_SINGLE enabled for OpenMPI, can I still
</span><br>
<span class="quotelev2">&gt;&gt; implement
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this kind of a design or there would be issues with threads in
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Thanks and Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sarang.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Quoting &quot;Brian W. Barrett&quot; &lt;bbarrett_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; There are two ways you can find out if an Open MPI build has
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE support:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; * On the command line: You can run &quot;ompi_info | grep Thread&quot;.  If
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; see
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpi: no, the build doesn't support MPI_THREAD_MULTIPLE.  If you
</span><br>
<span class="quotelev2">&gt;&gt; see
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpi:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; yes, the build does support MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; * At run-time.  As mentioned below, if you request
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; provided is only MPI_THREAD_SINGLE, then Open MPI does not have
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE support.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Good luck,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; You are already there.  the fact that MPI_Thread_init only
</span><br>
<span class="quotelev2">&gt;&gt; provide
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; MPI_THREAD_SINGLE shows that MPI_THREAD_MULTIPLE is NOT enabled
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; library binary that you're using.  Although MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; implemented in the library source code, it is only lightly
</span><br>
<span class="quotelev2">&gt;&gt; tested,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; so it
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; is
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; not enabled by default.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; To enable MPI_THREAD_MULTIPLE, you need to recompile the library
</span><br>
<span class="quotelev2">&gt;&gt; by
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; first
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; including --enable-mpi-threads as one of the parameters when you
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; rerun
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; ./configure as the first step of recompiling the library.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On 5/27/07, smairal_at_[hidden] &lt;smairal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;         I want to use threads with OpenMPI such that the
</span><br>
<span class="quotelev2">&gt;&gt; threads
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; would
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; be able to call MPI functions. For this purpose, I am using
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; call
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter
</span><br>
<span class="quotelev2">&gt;&gt; indicating
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE is not configured. Somewhere it is
</span><br>
<span class="quotelev2">&gt;&gt; mentioned
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; OpenMPI needs to be configured with --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; inorder
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; to use
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE. If true, is it possible to know whether
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; OpenMPI (1.1.2)which I have already configured, has the option
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; &quot;--enable-mpi-threads&quot; already configured or not? Also, how
</span><br>
<span class="quotelev2">&gt;&gt; easy
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; difficult is it to configure --enable-mpi-threads option?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;         Please share some information on this.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; -Thanks and Regards,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; Sarang.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
