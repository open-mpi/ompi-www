<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 26 22:23:37 2007" -->
<!-- isoreceived="20070527022337" -->
<!-- sent="Sun, 27 May 2007 14:23:28 +1200" -->
<!-- isosent="20070527022328" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="1626092b0705261923p41c804bak4cc19f20aedfa44d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1180205158.465880669c773_at_webmail.ksu.edu" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-26 22:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3324.php">Nayden D Kambouchev: "[OMPI users] Cannot run batch jobs with SLURM"</a>
<li><strong>In reply to:</strong> <a href="3323.php">smairal_at_[hidden]: "[OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>You are already there.  the fact that MPI_Thread_init only provide
<br>
MPI_THREAD_SINGLE shows that MPI_THREAD_MULTIPLE is NOT enabled in the
<br>
library binary that you're using.  Although MPI_THREAD_MULTIPLE is
<br>
implemented in the library source code, it is only lightly tested, so it is
<br>
not enabled by default.
<br>
<p>To enable MPI_THREAD_MULTIPLE, you need to recompile the library by first
<br>
including --enable-mpi-threads as one of the parameters when you rerun
<br>
./configure as the first step of recompiling the library.
<br>
<p><p><p>On 5/27/07, smairal_at_[hidden] &lt;smairal_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;         I want to use threads with OpenMPI such that the threads would
</span><br>
<span class="quotelev1">&gt; be able to call MPI functions. For this purpose, I am using
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this function call
</span><br>
<span class="quotelev1">&gt; returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter indicating that
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE is not configured. Somewhere it is mentioned that
</span><br>
<span class="quotelev1">&gt; OpenMPI needs to be configured with --enable-mpi-threads inorder to use
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE. If true, is it possible to know whether the
</span><br>
<span class="quotelev1">&gt; OpenMPI (1.1.2)which I have already configured, has the option
</span><br>
<span class="quotelev1">&gt; &quot;--enable-mpi-threads&quot; already configured or not? Also, how easy or
</span><br>
<span class="quotelev1">&gt; difficult is it to configure --enable-mpi-threads option?
</span><br>
<span class="quotelev1">&gt;         Please share some information on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Sarang.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3324.php">Nayden D Kambouchev: "[OMPI users] Cannot run batch jobs with SLURM"</a>
<li><strong>In reply to:</strong> <a href="3323.php">smairal_at_[hidden]: "[OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3326.php">Brian W. Barrett: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
