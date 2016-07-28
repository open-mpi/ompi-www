<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 15:55:10 2007" -->
<!-- isoreceived="20070527195510" -->
<!-- sent="Sun, 27 May 2007 14:55:05 -0500" -->
<!-- isosent="20070527195505" -->
<!-- name="smairal_at_[hidden]" -->
<!-- email="smairal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="1180295705.4659e219b95f2_at_webmail.ksu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51813.128.165.0.81.1180289442.squirrel_at_webmail.lanl.gov" -->
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
<strong>Date:</strong> 2007-05-27 15:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot guys for your help. I am also trying a design where I have
<br>
one thread doing MPI and others doing some computation (non-MPI). If I
<br>
have only MPI_THREAD_SINGLE enabled for OpenMPI, can I still implement
<br>
this kind of a design or there would be issues with threads in OpenMPI.
<br>
<p>-Thanks and Regards,
<br>
Sarang.
<br>
<p>Quoting &quot;Brian W. Barrett&quot; &lt;bbarrett_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; There are two ways you can find out if an Open MPI build has
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * On the command line: You can run &quot;ompi_info | grep Thread&quot;.  If you
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev1">&gt; mpi: no, the build doesn't support MPI_THREAD_MULTIPLE.  If you see
</span><br>
<span class="quotelev1">&gt; mpi:
</span><br>
<span class="quotelev1">&gt; yes, the build does support MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * At run-time.  As mentioned below, if you request
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE and
</span><br>
<span class="quotelev1">&gt; provided is only MPI_THREAD_SINGLE, then Open MPI does not have
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE support.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt; &gt; You are already there.  the fact that MPI_Thread_init only provide
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_SINGLE shows that MPI_THREAD_MULTIPLE is NOT enabled in
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; library binary that you're using.  Although MPI_THREAD_MULTIPLE is
</span><br>
<span class="quotelev2">&gt; &gt; implemented in the library source code, it is only lightly tested,
</span><br>
<span class="quotelev1">&gt; so it
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev2">&gt; &gt; not enabled by default.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To enable MPI_THREAD_MULTIPLE, you need to recompile the library by
</span><br>
<span class="quotelev1">&gt; first
</span><br>
<span class="quotelev2">&gt; &gt; including --enable-mpi-threads as one of the parameters when you
</span><br>
<span class="quotelev1">&gt; rerun
</span><br>
<span class="quotelev2">&gt; &gt; ./configure as the first step of recompiling the library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 5/27/07, smairal_at_[hidden] &lt;smairal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         I want to use threads with OpenMPI such that the threads
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be able to call MPI functions. For this purpose, I am using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this function
</span><br>
<span class="quotelev1">&gt; call
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter indicating
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_THREAD_MULTIPLE is not configured. Somewhere it is mentioned
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI needs to be configured with --enable-mpi-threads inorder
</span><br>
<span class="quotelev1">&gt; to use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_THREAD_MULTIPLE. If true, is it possible to know whether the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI (1.1.2)which I have already configured, has the option
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;--enable-mpi-threads&quot; already configured or not? Also, how easy
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; difficult is it to configure --enable-mpi-threads option?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Please share some information on this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Thanks and Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sarang.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3328.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
