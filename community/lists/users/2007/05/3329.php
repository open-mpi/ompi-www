<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 17:21:52 2007" -->
<!-- isoreceived="20070527212152" -->
<!-- sent="Sun, 27 May 2007 16:21:47 -0500" -->
<!-- isosent="20070527212147" -->
<!-- name="smairal_at_[hidden]" -->
<!-- email="smairal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="1180300907.4659f66bd7962_at_webmail.ksu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57117.128.165.0.81.1180300028.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> <a href="mailto:smairal_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Regarding%20MPI_THREAD_MULTIPLE"><em>smairal_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-05-27 17:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3330.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3330.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3330.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried with MPI_THREAD_FUNNELED but it still returns MPI_THREAD_SINGLE
<br>
in &quot;provided&quot;. I tried a sample program that has thread_0 doing MPI and
<br>
thread_1 doing some computation and thread_0 and thread_1 doing some
<br>
thread synchronization (using pthread condition variables). The program
<br>
seems to be doing fine and so also the thread synchronization. I think,
<br>
even if MPI_THREAD_SINGLE is returned in provided, such a design works.
<br>
Now, since the thread synchronization seems to be fine, I think multiple
<br>
threads (with only one thread executing MPI calls) works even if
<br>
&quot;provided&quot; returns MPI_THREAD_SINGLE.
<br>
<p>-Thanks and Regards,
<br>
Sarang.
<br>
<p>Quoting &quot;Brian W. Barrett&quot; &lt;bbarrett_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; If only one thread ever makes calls into MPI,  you don't actually
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE but only MPI_THREAD_FUNNELED.  Open MPI will
</span><br>
<span class="quotelev1">&gt; generally
</span><br>
<span class="quotelev1">&gt; support MPI_THREAD_FUNNELED out of the box (but on certain
</span><br>
<span class="quotelev1">&gt; configurations,
</span><br>
<span class="quotelev1">&gt; mainly platforms without threads, will not), so if you request
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_FUNNELED, it should be returned in provided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot guys for your help. I am also trying a design where I
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt; &gt; one thread doing MPI and others doing some computation (non-MPI).
</span><br>
<span class="quotelev1">&gt; If I
</span><br>
<span class="quotelev2">&gt; &gt; have only MPI_THREAD_SINGLE enabled for OpenMPI, can I still
</span><br>
<span class="quotelev1">&gt; implement
</span><br>
<span class="quotelev2">&gt; &gt; this kind of a design or there would be issues with threads in
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Thanks and Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Sarang.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoting &quot;Brian W. Barrett&quot; &lt;bbarrett_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are two ways you can find out if an Open MPI build has
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_THREAD_MULTIPLE support:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * On the command line: You can run &quot;ompi_info | grep Thread&quot;.  If
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi: no, the build doesn't support MPI_THREAD_MULTIPLE.  If you
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; yes, the build does support MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * At run-time.  As mentioned below, if you request
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_THREAD_MULTIPLE and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; provided is only MPI_THREAD_SINGLE, then Open MPI does not have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_THREAD_MULTIPLE support.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Good luck,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; You are already there.  the fact that MPI_Thread_init only
</span><br>
<span class="quotelev1">&gt; provide
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; MPI_THREAD_SINGLE shows that MPI_THREAD_MULTIPLE is NOT enabled
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; library binary that you're using.  Although MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; implemented in the library source code, it is only lightly
</span><br>
<span class="quotelev1">&gt; tested,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so it
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; not enabled by default.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; To enable MPI_THREAD_MULTIPLE, you need to recompile the library
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; first
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; including --enable-mpi-threads as one of the parameters when you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rerun
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ./configure as the first step of recompiling the library.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On 5/27/07, smairal_at_[hidden] &lt;smairal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;         I want to use threads with OpenMPI such that the
</span><br>
<span class="quotelev1">&gt; threads
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; be able to call MPI functions. For this purpose, I am using
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; call
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter
</span><br>
<span class="quotelev1">&gt; indicating
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE is not configured. Somewhere it is
</span><br>
<span class="quotelev1">&gt; mentioned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; OpenMPI needs to be configured with --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; inorder
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to use
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE. If true, is it possible to know whether
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; OpenMPI (1.1.2)which I have already configured, has the option
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &quot;--enable-mpi-threads&quot; already configured or not? Also, how
</span><br>
<span class="quotelev1">&gt; easy
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; difficult is it to configure --enable-mpi-threads option?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;         Please share some information on this.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; -Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Sarang.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3330.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3330.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3330.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
