<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 24 16:28:51 2007" -->
<!-- isoreceived="20070224212851" -->
<!-- sent="Sat, 24 Feb 2007 16:28:40 -0500" -->
<!-- isosent="20070224212840" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure tests broken for pthreads in some situations" -->
<!-- id="2CF7B5D4-61D9-4B43-B7BE-81860B7DD1BC_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1163081188.20883.234.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Date:</strong> 2007-02-24 16:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2734.php">Jeff Squyres: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2732.php">Edgar Gabriel: "Re: [OMPI users] MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2163.php">&#197;ke Sandgren: "[OMPI users] configure tests broken for pthreads in some situations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2006, at 9:06 AM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; I sent this in October and got very little feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a problem in ompi_config_pthreads.m4 and
</span><br>
<span class="quotelev1">&gt; ompi_check_pthread_pids.m4 at least on Ubuntu Dapper
</span><br>
<span class="quotelev1">&gt; with both gcc and pgi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch against v1.1.2 fixes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happens is that in OMPI_INTL_POSIX_THREADS_LIBS_CXX it was
</span><br>
<span class="quotelev1">&gt; incorrectly setting PTHREAD_LIBS to $pl which at the time isn't set  
</span><br>
<span class="quotelev1">&gt; yet
</span><br>
<span class="quotelev1">&gt; and forgetting to reset LIBS on failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OMPI_INTL_POSIX_THREADS_LIBS_FC it was resetting LIBS too quickly
</span><br>
<span class="quotelev1">&gt; resulting in -lpthread missing when checking for
</span><br>
<span class="quotelev1">&gt; PTHREAD_MUTEX_ERRORCHECK_NP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OMPI_THREADS_HAVE_DIFFERENT_PIDS it didn't add THREAD_CFLAGS to
</span><br>
<span class="quotelev1">&gt; CFLAGS resulting in the code failing to link.
</span><br>
<span class="quotelev1">&gt; The testcode in itself was also broken so that some compilers failed
</span><br>
<span class="quotelev1">&gt; even to compile it.
</span><br>
<p>Thanks for the report and sorry for the slow reply.  I've committed  
<br>
the patch to the trunk and it should be committed to the v1.2 release  
<br>
at some point, although possibly not until after the initial 1.2  
<br>
release.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2734.php">Jeff Squyres: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2732.php">Edgar Gabriel: "Re: [OMPI users] MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2163.php">&#197;ke Sandgren: "[OMPI users] configure tests broken for pthreads in some situations"</a>
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
