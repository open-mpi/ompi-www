<?
$subject_val = "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 14:57:40 2016" -->
<!-- isoreceived="20160519185740" -->
<!-- sent="Thu, 19 May 2016 11:57:36 -0700" -->
<!-- isosent="20160519185736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() small issue with mutex destruction" -->
<!-- id="4DF6BD62-5C56-44B8-A289-D0F28F26041A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20160519161821.GA20810_at_issan.sis.pasteur.fr" -->
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
<strong>Date:</strong> 2016-05-19 14:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29243.php">Saliya Ekanayake: "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>In reply to:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here&#226;&#128;&#153;s the 1.10 version of the PR:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/1172">https://github.com/open-mpi/ompi-release/pull/1172</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/1172">https://github.com/open-mpi/ompi-release/pull/1172</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On May 19, 2016, at 9:18 AM, Nicolas Joly &lt;njoly_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 19, 2016 at 09:13:15AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No issue at all - I?ll check the latest versions and ensure the
</span><br>
<span class="quotelev2">&gt;&gt; problem is present in them. Out of curiosity - what version of OMPI
</span><br>
<span class="quotelev2">&gt;&gt; are you describing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; njoly_at_lanfeust [tmp/mpi]&gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I discovered it with 1.10.1, and was able to reproduce with older
</span><br>
<span class="quotelev1">&gt; versions 1.6.5 and 1.8.8 i had handy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 19, 2016, at 9:06 AM, Nicolas Joly &lt;njoly_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just discovered a small issue with MPI_Finalize(). When sanity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking a threaded tool on my NetBSD/amd64 workstation i turned on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PTHREAD_DIAGASSERT environnement variable to report any issue that may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be triggered ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And a simple MPI test program seemed to be affected :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; njoly_at_issan [tmp/mpi]&gt; mpicc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (nb1 20160317) 5.3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; njoly_at_issan [tmp/mpi]&gt; cat sample.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; njoly_at_issan [tmp/mpi]&gt; mpicc sample.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; njoly_at_issan [tmp/mpi]&gt; PTHREAD_DIAGASSERT=e ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out: Error detected by libpthread: Destroying locked mutex.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Detected by file &quot;/local/src/NetBSD/src/lib/libpthread/pthread_mutex.c&quot;, line 148, function &quot;pthread_mutex_destroy&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checking the MPI code show that MPI_Finalize() calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/rte/orte/rte_orte_component.c:rte_orte_close() which is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; culprit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static int rte_orte_close(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_mutex_lock(&amp;mca_rte_orte_component.lock);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OPAL_LIST_DESTRUCT(&amp;mca_rte_orte_component.modx_reqs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   OBJ_DESTRUCT(&amp;mca_rte_orte_component.lock);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to the pthread_mutex_destroy() specifications[1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destroying a still locked mutex results in an &quot;undefined behaviour&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It shall be safe to destroy an initialized mutex that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlocked. Attempting to destroy a locked mutex or a mutex that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; referenced (for example, while being used in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread_cond_timedwait() or pthread_cond_wait()) by another thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results in undefined behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any expected issue in adding a opal_mutex_unlock() call before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destroying the opal_mutex_t object ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1] <a href="http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html">http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nicolas Joly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cluster &amp; Computing Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Biology IT Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Institut Pasteur, Paris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29239.php">http://www.open-mpi.org/community/lists/users/2016/05/29239.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29240.php">http://www.open-mpi.org/community/lists/users/2016/05/29240.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29240.php">http://www.open-mpi.org/community/lists/users/2016/05/29240.php</a>&gt;
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29241.php">http://www.open-mpi.org/community/lists/users/2016/05/29241.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29241.php">http://www.open-mpi.org/community/lists/users/2016/05/29241.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29243.php">Saliya Ekanayake: "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>In reply to:</strong> <a href="29241.php">Nicolas Joly: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
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
