<?
$subject_val = "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 12:13:19 2016" -->
<!-- isoreceived="20160519161319" -->
<!-- sent="Thu, 19 May 2016 09:13:15 -0700" -->
<!-- isosent="20160519161315" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() small issue with mutex destruction" -->
<!-- id="B75F6C77-92AF-43BF-8F85-A3DC91FE3367_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20160519160639.GA29600_at_issan.sis.pasteur.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() small issue with mutex destruction<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 12:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29239.php">Nicolas Joly: "[OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>In reply to:</strong> <a href="29239.php">Nicolas Joly: "[OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Reply:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No issue at all - I&#226;&#128;&#153;ll check the latest versions and ensure the problem is present in them. Out of curiosity - what version of OMPI are you describing?
<br>
<p><p><span class="quotelev1">&gt; On May 19, 2016, at 9:06 AM, Nicolas Joly &lt;njoly_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just discovered a small issue with MPI_Finalize(). When sanity
</span><br>
<span class="quotelev1">&gt; checking a threaded tool on my NetBSD/amd64 workstation i turned on a
</span><br>
<span class="quotelev1">&gt; PTHREAD_DIAGASSERT environnement variable to report any issue that may
</span><br>
<span class="quotelev1">&gt; be triggered ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And a simple MPI test program seemed to be affected :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [tmp/mpi]&gt; mpicc --version
</span><br>
<span class="quotelev1">&gt; gcc (nb1 20160317) 5.3.0
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [tmp/mpi]&gt; cat sample.c 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0; }
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [tmp/mpi]&gt; mpicc sample.c 
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [tmp/mpi]&gt; PTHREAD_DIAGASSERT=e ./a.out
</span><br>
<span class="quotelev1">&gt; a.out: Error detected by libpthread: Destroying locked mutex.
</span><br>
<span class="quotelev1">&gt; Detected by file &quot;/local/src/NetBSD/src/lib/libpthread/pthread_mutex.c&quot;, line 148, function &quot;pthread_mutex_destroy&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Checking the MPI code show that MPI_Finalize() calls
</span><br>
<span class="quotelev1">&gt; ompi/mca/rte/orte/rte_orte_component.c:rte_orte_close() which is the
</span><br>
<span class="quotelev1">&gt; culprit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int rte_orte_close(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    opal_mutex_lock(&amp;mca_rte_orte_component.lock);
</span><br>
<span class="quotelev1">&gt;    OPAL_LIST_DESTRUCT(&amp;mca_rte_orte_component.modx_reqs);
</span><br>
<span class="quotelev1">&gt;    OBJ_DESTRUCT(&amp;mca_rte_orte_component.lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to the pthread_mutex_destroy() specifications[1],
</span><br>
<span class="quotelev1">&gt; destroying a still locked mutex results in an &quot;undefined behaviour&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; It shall be safe to destroy an initialized mutex that is
</span><br>
<span class="quotelev1">&gt; unlocked. Attempting to destroy a locked mutex or a mutex that is
</span><br>
<span class="quotelev1">&gt; referenced (for example, while being used in a
</span><br>
<span class="quotelev1">&gt; pthread_cond_timedwait() or pthread_cond_wait()) by another thread
</span><br>
<span class="quotelev1">&gt; results in undefined behavior.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any expected issue in adding a opal_mutex_unlock() call before
</span><br>
<span class="quotelev1">&gt; destroying the opal_mutex_t object ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html">http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nicolas Joly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cluster &amp; Computing Group
</span><br>
<span class="quotelev1">&gt; Biology IT Center
</span><br>
<span class="quotelev1">&gt; Institut Pasteur, Paris.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29239.php">http://www.open-mpi.org/community/lists/users/2016/05/29239.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29239.php">Nicolas Joly: "[OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>In reply to:</strong> <a href="29239.php">Nicolas Joly: "[OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Reply:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
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
