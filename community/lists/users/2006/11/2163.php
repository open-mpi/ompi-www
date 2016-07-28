<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 09:06:36 2006" -->
<!-- isoreceived="20061109140636" -->
<!-- sent="Thu, 09 Nov 2006 15:06:28 +0100" -->
<!-- isosent="20061109140628" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] configure tests broken for pthreads in some situations" -->
<!-- id="1163081188.20883.234.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 09:06:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2164.php">Kenneth Chiu: "[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2162.php">Chevchenkovic Chevchenkovic: "[OMPI users] MPI_Alloc_Mem Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
I sent this in October and got very little feedback.
<br>
<p>There is a problem in ompi_config_pthreads.m4 and
<br>
ompi_check_pthread_pids.m4 at least on Ubuntu Dapper
<br>
with both gcc and pgi.
<br>
<p>The attached patch against v1.1.2 fixes the problem.
<br>
<p>What happens is that in OMPI_INTL_POSIX_THREADS_LIBS_CXX it was
<br>
incorrectly setting PTHREAD_LIBS to $pl which at the time isn't set yet
<br>
and forgetting to reset LIBS on failure.
<br>
<p>In OMPI_INTL_POSIX_THREADS_LIBS_FC it was resetting LIBS too quickly
<br>
resulting in -lpthread missing when checking for
<br>
PTHREAD_MUTEX_ERRORCHECK_NP
<br>
<p>In OMPI_THREADS_HAVE_DIFFERENT_PIDS it didn't add THREAD_CFLAGS to
<br>
CFLAGS resulting in the code failing to link.
<br>
The testcode in itself was also broken so that some compilers failed
<br>
even to compile it.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2163/config_pthreads.patch__charset_us-ascii">config_pthreads.patch__charset_us-ascii</a>
</ul>
<!-- attachment="config_pthreads.patch__charset_us-ascii" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2164.php">Kenneth Chiu: "[OMPI users] Where does the output for -mca coll_tuned_base_verbose go?"</a>
<li><strong>Previous message:</strong> <a href="2162.php">Chevchenkovic Chevchenkovic: "[OMPI users] MPI_Alloc_Mem Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
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
