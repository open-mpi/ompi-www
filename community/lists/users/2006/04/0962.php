<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 14:24:58 2006" -->
<!-- isoreceived="20060405182458" -->
<!-- sent="Wed, 5 Apr 2006 13:24:51 -0500" -->
<!-- isosent="20060405182451" -->
<!-- name="Charles Shuller" -->
<!-- email="charles.shuller_at_[hidden]" -->
<!-- subject="[OMPI users] Send problems on AMD64" -->
<!-- id="d69e70340604051124k314b7003i91b5a7f1a8154817_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Charles Shuller (<em>charles.shuller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-05 14:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Previous message:</strong> <a href="0961.php">spil_at_[hidden]: "[OMPI users] problem while building open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Reply:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Reply:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I encountered an error with send/recv pairs on AMD64.  The first send
<br>
completes successfully, but subsequent send/recv pairs hang.  I also
<br>
believe that MPI_Bcast also hangs under simmilar conditions, but have
<br>
not created an explicit testcase for this (it happened in the code I
<br>
was working on).  Both machines are running AMD64 processors.
<br>
<p>The problem only manifests when the tasks are on seperate machines.
<br>
<p>The problem does not occur on x86 (32-bit) machines.
<br>
<p>Thanks!
<br>
<p><p>Charles Shuller
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0962/mpi_send_recv_test.tar.bz2">mpi_send_recv_test.tar.bz2</a>
</ul>
<!-- attachment="mpi_send_recv_test.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Previous message:</strong> <a href="0961.php">spil_at_[hidden]: "[OMPI users] problem while building open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Reply:</strong> <a href="0963.php">Eric Brunner-Williams: "Re: [OMPI users] Send problems on AMD64"</a>
<li><strong>Reply:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
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
