<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 13:40:34 2007" -->
<!-- isoreceived="20070823174034" -->
<!-- sent="Thu, 23 Aug 2007 13:40:25 -0400" -->
<!-- isosent="20070823174025" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't" -->
<!-- id="200708231340.25978.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="98a233180708230718l2f4c7e9dg65c9633f02cd25c5_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 13:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3916.php">Jeff Pummill: "[OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>I am not an expert in this area of the code, but I'll give it a shot. 
<br>
<p>(I assume you are using linux due to your email address) When using the memory 
<br>
manager (which is the default on linux), we wrap malloc/realloc/etc with 
<br>
ptmalloc2 (which is the same allocator used in glibc 2.3.x).
<br>
<p>What I believe is happening is that ptmalloc2 is requesting more memory than 
<br>
necessary from the OS, and then lazily releasing it back. Try looking in the 
<br>
ompi source at opal/mca/memory/ptmalloc2/README ( 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/browser/tags/v1.2-series/v1.2.3/opal/mca/memory/ptmalloc2/README#L121">https://svn.open-mpi.org/trac/ompi/browser/tags/v1.2-series/v1.2.3/opal/mca/memory/ptmalloc2/README#L121</a> ).
<br>
<p>This mentions some environment variables that can be set to alter ptmalloc2's 
<br>
behavior, although I have no idea if they work.
<br>
<p>Alternatively, if you are not using a high performance network, there is 
<br>
little reason to use the memory manager, so you could just disable it.
<br>
<p>Tim
<br>
<p>On Thursday 23 August 2007 10:18:45 am Josh Aune wrote:
<br>
<span class="quotelev1">&gt; I have found that the infiniserv MPI that comes with our IB software
</span><br>
<span class="quotelev1">&gt; distribution tracks the same behaviour as gcc (releaseing memory on
</span><br>
<span class="quotelev1">&gt; realloc).  I have also found that building openmpi with
</span><br>
<span class="quotelev1">&gt; --without-memory-manager makes openmpi track the same behaviour as
</span><br>
<span class="quotelev1">&gt; glibc.   I'm guessing that there is a bug in the pinned pages caching
</span><br>
<span class="quotelev1">&gt; code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/21/07, Josh Aune &lt;luken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The realloc included with openmpi 1.2.3 is not releasing memory to the
</span><br>
<span class="quotelev2">&gt; &gt; OS and is causing apps to go into swap.  Attached is a little test
</span><br>
<span class="quotelev2">&gt; &gt; program that shows calls to realloc not releasing the memory when
</span><br>
<span class="quotelev2">&gt; &gt; compiled using mpicc, but when compiled directly with gcc (or icc)
</span><br>
<span class="quotelev2">&gt; &gt; calling realloc() frees any memory no longer needed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this a bug?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If not, how can I force openmpi to free the memory that the allocator
</span><br>
<span class="quotelev2">&gt; &gt; is sitting on?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sample output.  Note the delta between 'total' and 'malloc held' when
</span><br>
<span class="quotelev2">&gt; &gt; compiled with mpicc and how the gcc compiled versions track perfectly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpicc -o realloc_test realloc_test.c
</span><br>
<span class="quotelev2">&gt; &gt; $ ./realloc_test
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; malloc/realloc/free test
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   50 MB, malloc held   50 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    1 MB, malloc held   50 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   51 MB, malloc held  100 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    2 MB, malloc held  100 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   52 MB, malloc held  150 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    3 MB, malloc held  150 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   53 MB, malloc held  200 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    4 MB, malloc held  200 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   54 MB, malloc held  250 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    5 MB, malloc held  250 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    4 MB, malloc held  200 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    3 MB, malloc held  150 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    2 MB, malloc held  100 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    1 MB, malloc held   50 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    0 MB, malloc held    0 MB
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ gcc -o realloc_test realloc_test.c
</span><br>
<span class="quotelev2">&gt; &gt; $ ./realloc_test
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; malloc/realloc/free test
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   50 MB, malloc held   50 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    1 MB, malloc held    1 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   51 MB, malloc held   51 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    2 MB, malloc held    2 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   52 MB, malloc held   52 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    3 MB, malloc held    3 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   53 MB, malloc held   53 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    4 MB, malloc held    4 MB
</span><br>
<span class="quotelev2">&gt; &gt; malloc()    50 MB, total   54 MB, malloc held   54 MB
</span><br>
<span class="quotelev2">&gt; &gt; realloc()    1 MB, total    5 MB, malloc held    5 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    4 MB, malloc held    4 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    3 MB, malloc held    3 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    2 MB, malloc held    2 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    1 MB, malloc held    1 MB
</span><br>
<span class="quotelev2">&gt; &gt; free()       1 MB, total    0 MB, malloc held    0 MB
</span><br>
<span class="quotelev2">&gt; &gt; ...
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3916.php">Jeff Pummill: "[OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3914.php">Bernd Schubert: "Re: [OMPI users] MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
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
