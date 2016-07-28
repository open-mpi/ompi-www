<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 17:07:15 2007" -->
<!-- isoreceived="20070527210715" -->
<!-- sent="Sun, 27 May 2007 15:07:08 -0600 (MDT)" -->
<!-- isosent="20070527210708" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="57117.128.165.0.81.1180300028.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1180295705.4659e219b95f2_at_webmail.ksu.edu" -->
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
<strong>Date:</strong> 2007-05-27 17:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If only one thread ever makes calls into MPI,  you don't actually need
<br>
MPI_THREAD_MULTIPLE but only MPI_THREAD_FUNNELED.  Open MPI will generally
<br>
support MPI_THREAD_FUNNELED out of the box (but on certain configurations,
<br>
mainly platforms without threads, will not), so if you request
<br>
MPI_THREAD_FUNNELED, it should be returned in provided.
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<p><span class="quotelev1">&gt; Thanks a lot guys for your help. I am also trying a design where I have
</span><br>
<span class="quotelev1">&gt; one thread doing MPI and others doing some computation (non-MPI). If I
</span><br>
<span class="quotelev1">&gt; have only MPI_THREAD_SINGLE enabled for OpenMPI, can I still implement
</span><br>
<span class="quotelev1">&gt; this kind of a design or there would be issues with threads in OpenMPI.
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
<span class="quotelev2">&gt;&gt; There are two ways you can find out if an Open MPI build has
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE support:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * On the command line: You can run &quot;ompi_info | grep Thread&quot;.  If you
</span><br>
<span class="quotelev2">&gt;&gt; see
</span><br>
<span class="quotelev2">&gt;&gt; mpi: no, the build doesn't support MPI_THREAD_MULTIPLE.  If you see
</span><br>
<span class="quotelev2">&gt;&gt; mpi:
</span><br>
<span class="quotelev2">&gt;&gt; yes, the build does support MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * At run-time.  As mentioned below, if you request
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE and
</span><br>
<span class="quotelev2">&gt;&gt; provided is only MPI_THREAD_SINGLE, then Open MPI does not have
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE support.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev3">&gt;&gt; &gt; You are already there.  the fact that MPI_Thread_init only provide
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_THREAD_SINGLE shows that MPI_THREAD_MULTIPLE is NOT enabled in
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; library binary that you're using.  Although MPI_THREAD_MULTIPLE is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; implemented in the library source code, it is only lightly tested,
</span><br>
<span class="quotelev2">&gt;&gt; so it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not enabled by default.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To enable MPI_THREAD_MULTIPLE, you need to recompile the library by
</span><br>
<span class="quotelev2">&gt;&gt; first
</span><br>
<span class="quotelev3">&gt;&gt; &gt; including --enable-mpi-threads as one of the parameters when you
</span><br>
<span class="quotelev2">&gt;&gt; rerun
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure as the first step of recompiling the library.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 5/27/07, smairal_at_[hidden] &lt;smairal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         I want to use threads with OpenMPI such that the threads
</span><br>
<span class="quotelev2">&gt;&gt; would
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; be able to call MPI functions. For this purpose, I am using
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this function
</span><br>
<span class="quotelev2">&gt;&gt; call
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter indicating
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE is not configured. Somewhere it is mentioned
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; OpenMPI needs to be configured with --enable-mpi-threads inorder
</span><br>
<span class="quotelev2">&gt;&gt; to use
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_THREAD_MULTIPLE. If true, is it possible to know whether the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; OpenMPI (1.1.2)which I have already configured, has the option
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &quot;--enable-mpi-threads&quot; already configured or not? Also, how easy
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; difficult is it to configure --enable-mpi-threads option?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;         Please share some information on this.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -Thanks and Regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sarang.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
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
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3329.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
