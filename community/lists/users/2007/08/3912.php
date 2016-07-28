<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 10:18:51 2007" -->
<!-- isoreceived="20070823141851" -->
<!-- sent="Thu, 23 Aug 2007 10:18:45 -0400" -->
<!-- isosent="20070823141845" -->
<!-- name="Josh Aune" -->
<!-- email="luken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't" -->
<!-- id="98a233180708230718l2f4c7e9dg65c9633f02cd25c5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98a233180708211208l2f98e31avfe628ab41fad957c_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Aune (<em>luken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 10:18:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Previous message:</strong> <a href="3911.php">Bernd Schubert: "[OMPI users] MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="3897.php">Josh Aune: "[OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Reply:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have found that the infiniserv MPI that comes with our IB software
<br>
distribution tracks the same behaviour as gcc (releaseing memory on
<br>
realloc).  I have also found that building openmpi with
<br>
--without-memory-manager makes openmpi track the same behaviour as
<br>
glibc.   I'm guessing that there is a bug in the pinned pages caching
<br>
code?
<br>
<p>On 8/21/07, Josh Aune &lt;luken_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The realloc included with openmpi 1.2.3 is not releasing memory to the
</span><br>
<span class="quotelev1">&gt; OS and is causing apps to go into swap.  Attached is a little test
</span><br>
<span class="quotelev1">&gt; program that shows calls to realloc not releasing the memory when
</span><br>
<span class="quotelev1">&gt; compiled using mpicc, but when compiled directly with gcc (or icc)
</span><br>
<span class="quotelev1">&gt; calling realloc() frees any memory no longer needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, how can I force openmpi to free the memory that the allocator
</span><br>
<span class="quotelev1">&gt; is sitting on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sample output.  Note the delta between 'total' and 'malloc held' when
</span><br>
<span class="quotelev1">&gt; compiled with mpicc and how the gcc compiled versions track perfectly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -o realloc_test realloc_test.c
</span><br>
<span class="quotelev1">&gt; $ ./realloc_test
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; malloc/realloc/free test
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   50 MB, malloc held   50 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    1 MB, malloc held   50 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   51 MB, malloc held  100 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    2 MB, malloc held  100 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   52 MB, malloc held  150 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    3 MB, malloc held  150 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   53 MB, malloc held  200 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    4 MB, malloc held  200 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   54 MB, malloc held  250 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    5 MB, malloc held  250 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    4 MB, malloc held  200 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    3 MB, malloc held  150 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    2 MB, malloc held  100 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    1 MB, malloc held   50 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    0 MB, malloc held    0 MB
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc -o realloc_test realloc_test.c
</span><br>
<span class="quotelev1">&gt; $ ./realloc_test
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; malloc/realloc/free test
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   50 MB, malloc held   50 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    1 MB, malloc held    1 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   51 MB, malloc held   51 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    2 MB, malloc held    2 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   52 MB, malloc held   52 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    3 MB, malloc held    3 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   53 MB, malloc held   53 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    4 MB, malloc held    4 MB
</span><br>
<span class="quotelev1">&gt; malloc()    50 MB, total   54 MB, malloc held   54 MB
</span><br>
<span class="quotelev1">&gt; realloc()    1 MB, total    5 MB, malloc held    5 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    4 MB, malloc held    4 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    3 MB, malloc held    3 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    2 MB, malloc held    2 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    1 MB, malloc held    1 MB
</span><br>
<span class="quotelev1">&gt; free()       1 MB, total    0 MB, malloc held    0 MB
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3913.php">Brian Barrett: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>Previous message:</strong> <a href="3911.php">Bernd Schubert: "[OMPI users] MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="3897.php">Josh Aune: "[OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Reply:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
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
