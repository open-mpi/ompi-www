<?
$subject_val = "[OMPI users] MPI_Finalize() small issue with mutex destruction";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 12:06:48 2016" -->
<!-- isoreceived="20160519160648" -->
<!-- sent="Thu, 19 May 2016 18:06:39 +0200" -->
<!-- isosent="20160519160639" -->
<!-- name="Nicolas Joly" -->
<!-- email="njoly_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Finalize() small issue with mutex destruction" -->
<!-- id="20160519160639.GA29600_at_issan.sis.pasteur.fr" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Finalize() small issue with mutex destruction<br>
<strong>From:</strong> Nicolas Joly (<em>njoly_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 12:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Reply:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just discovered a small issue with MPI_Finalize(). When sanity
<br>
checking a threaded tool on my NetBSD/amd64 workstation i turned on a
<br>
PTHREAD_DIAGASSERT environnement variable to report any issue that may
<br>
be triggered ...
<br>
<p>And a simple MPI test program seemed to be affected :
<br>
<p>njoly_at_issan [tmp/mpi]&gt; mpicc --version
<br>
gcc (nb1 20160317) 5.3.0
<br>
njoly_at_issan [tmp/mpi]&gt; cat sample.c 
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0; }
<br>
njoly_at_issan [tmp/mpi]&gt; mpicc sample.c 
<br>
njoly_at_issan [tmp/mpi]&gt; PTHREAD_DIAGASSERT=e ./a.out
<br>
a.out: Error detected by libpthread: Destroying locked mutex.
<br>
Detected by file &quot;/local/src/NetBSD/src/lib/libpthread/pthread_mutex.c&quot;, line 148, function &quot;pthread_mutex_destroy&quot;.
<br>
<p>Checking the MPI code show that MPI_Finalize() calls
<br>
ompi/mca/rte/orte/rte_orte_component.c:rte_orte_close() which is the
<br>
culprit :
<br>
<p>static int rte_orte_close(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_mutex_lock(&amp;mca_rte_orte_component.lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_LIST_DESTRUCT(&amp;mca_rte_orte_component.modx_reqs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;mca_rte_orte_component.lock);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
}
<br>
<p>According to the pthread_mutex_destroy() specifications[1],
<br>
destroying a still locked mutex results in an &quot;undefined behaviour&quot;.
<br>
<p>[...]
<br>
It shall be safe to destroy an initialized mutex that is
<br>
unlocked. Attempting to destroy a locked mutex or a mutex that is
<br>
referenced (for example, while being used in a
<br>
pthread_cond_timedwait() or pthread_cond_wait()) by another thread
<br>
results in undefined behavior.
<br>
[...]
<br>
<p>Any expected issue in adding a opal_mutex_unlock() call before
<br>
destroying the opal_mutex_t object ?
<br>
<p>Thanks.
<br>
<p>[1] <a href="http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html">http://pubs.opengroup.org/onlinepubs/9699919799/functions/pthread_mutex_destroy.html</a>
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Previous message:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<li><strong>Reply:</strong> <a href="29240.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
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
