<?
$subject_val = "[OMPI devel] Issues with nonblocking collectives for zero-sized messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 03:28:15 2015" -->
<!-- isoreceived="20151110082815" -->
<!-- sent="Tue, 10 Nov 2015 11:27:50 +0300" -->
<!-- isosent="20151110082750" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Issues with nonblocking collectives for zero-sized messages" -->
<!-- id="CAEcYPwDgA5dumHt3bMKJgjkT1HfGG2JaJqeCSt68_AdbQE4GcA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Issues with nonblocking collectives for zero-sized messages<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-10 03:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18352.php">Nick Papior: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Previous message:</strong> <a href="18350.php">Joshua Ladd: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18352.php">Nick Papior: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Reply:</strong> <a href="18352.php">Nick Papior: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is with 1.10.1, configured with flags --enable-debug
<br>
--enable-mem-debug. Use the attached test cases to reproduce yourself.
<br>
<p>* Iallgatherv() prints a warning, but otherwise seems to succeed (for
<br>
some reason, running under valgrind hangs, so I cannot test further):
<br>
<p>$ mpicc iallgatherv.c
<br>
$ ./a.out
<br>
MPI Error in MPI_Pack_size() (0:0)
<br>
<p>* Iscatterv() and Igatherv() both prints the pack-size error and fail:
<br>
<p>$ mpicc iscatterv.c
<br>
$ ./a.out
<br>
MPI Error in MPI_Pack_size() (0:0)
<br>
Error in NBC_Copy() (49)
<br>
[kw2060:25204] *** An error occurred in MPI_Iscatterv
<br>
[kw2060:25204] *** reported by process [140736503742465,0]
<br>
[kw2060:25204] *** on communicator MPI_COMM_SELF
<br>
[kw2060:25204] *** MPI_ERR_SIZE: invalid size
<br>
[kw2060:25204] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:25204] ***    and potentially your MPI job)
<br>
<p>$ mpicc igatherv.c
<br>
$ ./a.out
<br>
MPI Error in MPI_Pack_size() (0:0)
<br>
Error in NBC_Copy() (49)
<br>
[kw2060:25212] *** An error occurred in MPI_Igatherv
<br>
[kw2060:25212] *** reported by process [140727914332161,0]
<br>
[kw2060:25212] *** on communicator MPI_COMM_SELF
<br>
[kw2060:25212] *** MPI_ERR_SIZE: invalid size
<br>
[kw2060:25212] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:25212] ***    and potentially your MPI job)
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459



</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18351/iallgatherv.c">iallgatherv.c</a>
</ul>
<!-- attachment="iallgatherv.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18351/igatherv.c">igatherv.c</a>
</ul>
<!-- attachment="igatherv.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18351/iscatterv.c">iscatterv.c</a>
</ul>
<!-- attachment="iscatterv.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18352.php">Nick Papior: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Previous message:</strong> <a href="18350.php">Joshua Ladd: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18352.php">Nick Papior: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
<li><strong>Reply:</strong> <a href="18352.php">Nick Papior: "Re: [OMPI devel] Issues with nonblocking collectives for zero-sized messages"</a>
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
