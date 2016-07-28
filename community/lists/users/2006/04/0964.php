<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 16:35:31 2006" -->
<!-- isoreceived="20060405203531" -->
<!-- sent="Wed, 5 Apr 2006 16:35:28 -0400" -->
<!-- isosent="20060405203528" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Send problems on AMD64" -->
<!-- id="97E1677C-FCC0-4C66-9EFF-CC6921926DEE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d69e70340604051124k314b7003i91b5a7f1a8154817_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-05 16:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0965.php">Jeffrey B. Layton: "[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Charles Shuller: "[OMPI users] Send problems on AMD64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm usually working on 64 bits nodes and I never had this issue. I  
<br>
just run your test program on 64 bits AMD (compiled with gcc with and  
<br>
without debug), using MX, mvapi, openib and tcp and the code just run  
<br>
without any problems. There is one thing I see it can make your code  
<br>
failing. If you have a multi-devices cluster (namely 2 ethernet  
<br>
cards), it might happen that Open MPI does not discover them  
<br>
correctly. Or at least does not configure/use them correctly. There  
<br>
is an entry in the FAQ about how to do that. If it's the case then  
<br>
forcing the usage of one specific interface will solve the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 5, 2006, at 2:24 PM, Charles Shuller wrote:
<br>
<p><span class="quotelev1">&gt; I encountered an error with send/recv pairs on AMD64.  The first send
</span><br>
<span class="quotelev1">&gt; completes successfully, but subsequent send/recv pairs hang.  I also
</span><br>
<span class="quotelev1">&gt; believe that MPI_Bcast also hangs under simmilar conditions, but have
</span><br>
<span class="quotelev1">&gt; not created an explicit testcase for this (it happened in the code I
</span><br>
<span class="quotelev1">&gt; was working on).  Both machines are running AMD64 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem only manifests when the tasks are on seperate machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem does not occur on x86 (32-bit) machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles Shuller
</span><br>
<span class="quotelev1">&gt; &lt;mpi_send_recv_test.tar.bz2&gt;
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
<li><strong>Next message:</strong> <a href="0965.php">Jeffrey B. Layton: "[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Charles Shuller: "[OMPI users] Send problems on AMD64"</a>
<!-- nextthread="start" -->
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
