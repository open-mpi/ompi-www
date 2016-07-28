<?
$subject_val = "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 03:35:51 2015" -->
<!-- isoreceived="20151110083551" -->
<!-- sent="Tue, 10 Nov 2015 09:35:28 +0100" -->
<!-- isosent="20151110083528" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages" -->
<!-- id="CAAbhqc4pkP95O5GUwFUcBwFWyBvqh2fD6b1-duWVq79F7ahjEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwDgA5dumHt3bMKJgjkT1HfGG2JaJqeCSt68_AdbQE4GcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-10 03:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18353.php">Lisandro Dalcin: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Previous message:</strong> <a href="18351.php">Lisandro Dalcin: "[OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>In reply to:</strong> <a href="18351.php">Lisandro Dalcin: "[OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18353.php">Lisandro Dalcin: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Reply:</strong> <a href="18353.php">Lisandro Dalcin: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please try the patch from this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/11/28030.php">http://www.open-mpi.org/community/lists/users/2015/11/28030.php</a>
<br>
<p>2015-11-10 9:27 GMT+01:00 Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; This is with 1.10.1, configured with flags --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug. Use the attached test cases to reproduce yourself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Iallgatherv() prints a warning, but otherwise seems to succeed (for
</span><br>
<span class="quotelev1">&gt; some reason, running under valgrind hangs, so I cannot test further):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc iallgatherv.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; MPI Error in MPI_Pack_size() (0:0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Iscatterv() and Igatherv() both prints the pack-size error and fail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc iscatterv.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; MPI Error in MPI_Pack_size() (0:0)
</span><br>
<span class="quotelev1">&gt; Error in NBC_Copy() (49)
</span><br>
<span class="quotelev1">&gt; [kw2060:25204] *** An error occurred in MPI_Iscatterv
</span><br>
<span class="quotelev1">&gt; [kw2060:25204] *** reported by process [140736503742465,0]
</span><br>
<span class="quotelev1">&gt; [kw2060:25204] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [kw2060:25204] *** MPI_ERR_SIZE: invalid size
</span><br>
<span class="quotelev1">&gt; [kw2060:25204] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:25204] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc igatherv.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; MPI Error in MPI_Pack_size() (0:0)
</span><br>
<span class="quotelev1">&gt; Error in NBC_Copy() (49)
</span><br>
<span class="quotelev1">&gt; [kw2060:25212] *** An error occurred in MPI_Igatherv
</span><br>
<span class="quotelev1">&gt; [kw2060:25212] *** reported by process [140727914332161,0]
</span><br>
<span class="quotelev1">&gt; [kw2060:25212] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [kw2060:25212] *** MPI_ERR_SIZE: invalid size
</span><br>
<span class="quotelev1">&gt; [kw2060:25212] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:25212] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18351.php">http://www.open-mpi.org/community/lists/devel/2015/11/18351.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18353.php">Lisandro Dalcin: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Previous message:</strong> <a href="18351.php">Lisandro Dalcin: "[OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>In reply to:</strong> <a href="18351.php">Lisandro Dalcin: "[OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18353.php">Lisandro Dalcin: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Reply:</strong> <a href="18353.php">Lisandro Dalcin: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
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
