<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 14:10:46 2007" -->
<!-- isoreceived="20070527181046" -->
<!-- sent="Sun, 27 May 2007 12:10:42 -0600 (MDT)" -->
<!-- isosent="20070527181042" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="51813.128.165.0.81.1180289442.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1626092b0705261923p41c804bak4cc19f20aedfa44d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-05-27 14:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two ways you can find out if an Open MPI build has
<br>
MPI_THREAD_MULTIPLE support:
<br>
<p>* On the command line: You can run &quot;ompi_info | grep Thread&quot;.  If you see
<br>
mpi: no, the build doesn't support MPI_THREAD_MULTIPLE.  If you see mpi:
<br>
yes, the build does support MPI_THREAD_MULTIPLE.
<br>
<p>* At run-time.  As mentioned below, if you request MPI_THREAD_MULTIPLE and
<br>
provided is only MPI_THREAD_SINGLE, then Open MPI does not have
<br>
MPI_THREAD_MULTIPLE support.
<br>
<p><p>Good luck,
<br>
<p>Brian
<br>
<p><span class="quotelev1">&gt; You are already there.  the fact that MPI_Thread_init only provide
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE shows that MPI_THREAD_MULTIPLE is NOT enabled in the
</span><br>
<span class="quotelev1">&gt; library binary that you're using.  Although MPI_THREAD_MULTIPLE is
</span><br>
<span class="quotelev1">&gt; implemented in the library source code, it is only lightly tested, so it
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; not enabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To enable MPI_THREAD_MULTIPLE, you need to recompile the library by first
</span><br>
<span class="quotelev1">&gt; including --enable-mpi-threads as one of the parameters when you rerun
</span><br>
<span class="quotelev1">&gt; ./configure as the first step of recompiling the library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/27/07, smairal_at_[hidden] &lt;smairal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;         I want to use threads with OpenMPI such that the threads would
</span><br>
<span class="quotelev2">&gt;&gt; be able to call MPI functions. For this purpose, I am using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this function call
</span><br>
<span class="quotelev2">&gt;&gt; returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter indicating that
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE is not configured. Somewhere it is mentioned that
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI needs to be configured with --enable-mpi-threads inorder to use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE. If true, is it possible to know whether the
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI (1.1.2)which I have already configured, has the option
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--enable-mpi-threads&quot; already configured or not? Also, how easy or
</span><br>
<span class="quotelev2">&gt;&gt; difficult is it to configure --enable-mpi-threads option?
</span><br>
<span class="quotelev2">&gt;&gt;         Please share some information on this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Thanks and Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sarang.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3327.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
