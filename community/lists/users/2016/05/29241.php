<?
$subject_val = "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 12:18:24 2016" -->
<!-- isoreceived="20160519161824" -->
<!-- sent="Thu, 19 May 2016 18:18:21 +0200" -->
<!-- isosent="20160519161821" -->
<!-- name="Nicolas Joly" -->
<!-- email="njoly_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() small issue with mutex destruction" -->
<!-- id="20160519161821.GA20810_at_issan.sis.pasteur.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B75F6C77-92AF-43BF-8F85-A3DC91FE3367_at_open-mpi.org" -->
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
<strong>From:</strong> Nicolas Joly (<em>njoly_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 12:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>In reply to:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Reply:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 19, 2016 at 09:13:15AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; No issue at all - I?ll check the latest versions and ensure the
</span><br>
<span class="quotelev1">&gt; problem is present in them. Out of curiosity - what version of OMPI
</span><br>
<span class="quotelev1">&gt; are you describing?
</span><br>
<p>njoly_at_lanfeust [tmp/mpi]&gt; mpirun --version
<br>
mpirun (Open MPI) 1.10.1
<br>
<p>I discovered it with 1.10.1, and was able to reproduce with older
<br>
versions 1.6.5 and 1.8.8 i had handy.
<br>
<p>Thanks.
<br>
<p><span class="quotelev2">&gt; &gt; On May 19, 2016, at 9:06 AM, Nicolas Joly &lt;njoly_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just discovered a small issue with MPI_Finalize(). When sanity
</span><br>
<span class="quotelev2">&gt; &gt; checking a threaded tool on my NetBSD/amd64 workstation i turned on a
</span><br>
<span class="quotelev2">&gt; &gt; PTHREAD_DIAGASSERT environnement variable to report any issue that may
</span><br>
<span class="quotelev2">&gt; &gt; be triggered ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And a simple MPI test program seemed to be affected :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; njoly_at_issan [tmp/mpi]&gt; mpicc --version
</span><br>
<span class="quotelev2">&gt; &gt; gcc (nb1 20160317) 5.3.0
</span><br>
<span class="quotelev2">&gt; &gt; njoly_at_issan [tmp/mpi]&gt; cat sample.c 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;  return 0; }
</span><br>
<span class="quotelev2">&gt; &gt; njoly_at_issan [tmp/mpi]&gt; mpicc sample.c 
</span><br>
<span class="quotelev2">&gt; &gt; njoly_at_issan [tmp/mpi]&gt; PTHREAD_DIAGASSERT=e ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; a.out: Error detected by libpthread: Destroying locked mutex.
</span><br>
<span class="quotelev2">&gt; &gt; Detected by file &quot;/local/src/NetBSD/src/lib/libpthread/pthread_mutex.c&quot;, line 148, function &quot;pthread_mutex_destroy&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Checking the MPI code show that MPI_Finalize() calls
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/rte/orte/rte_orte_component.c:rte_orte_close() which is the
</span><br>
<span class="quotelev2">&gt; &gt; culprit :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; static int rte_orte_close(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    opal_mutex_lock(&amp;mca_rte_orte_component.lock);
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL_LIST_DESTRUCT(&amp;mca_rte_orte_component.modx_reqs);
</span><br>
<span class="quotelev2">&gt; &gt;    OBJ_DESTRUCT(&amp;mca_rte_orte_component.lock);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; According to the pthread_mutex_destroy() specifications[1],
</span><br>
<span class="quotelev2">&gt; &gt; destroying a still locked mutex results in an &quot;undefined behaviour&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt; It shall be safe to destroy an initialized mutex that is
</span><br>
<span class="quotelev2">&gt; &gt; unlocked. Attempting to destroy a locked mutex or a mutex that is
</span><br>
<span class="quotelev2">&gt; &gt; referenced (for example, while being used in a
</span><br>
<span class="quotelev2">&gt; &gt; pthread_cond_timedwait() or pthread_cond_wait()) by another thread
</span><br>
<span class="quotelev2">&gt; &gt; results in undefined behavior.
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any expected issue in adding a opal_mutex_unlock() call before
</span><br>
<span class="quotelev2">&gt; &gt; destroying the opal_mutex_t object ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html">http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Nicolas Joly
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cluster &amp; Computing Group
</span><br>
<span class="quotelev2">&gt; &gt; Biology IT Center
</span><br>
<span class="quotelev2">&gt; &gt; Institut Pasteur, Paris.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29239.php">http://www.open-mpi.org/community/lists/users/2016/05/29239.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29240.php">http://www.open-mpi.org/community/lists/users/2016/05/29240.php</a>
</span><br>
<pre>
-- 
Nicolas Joly
Cluster &amp; Computing Group
Biology IT Center
Institut Pasteur, Paris.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>In reply to:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Reply:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
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
