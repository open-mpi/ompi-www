<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 05:13:02 2014" -->
<!-- isoreceived="20141127101302" -->
<!-- sent="Thu, 27 Nov 2014 19:13:02 +0900" -->
<!-- isosent="20141127101302" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="5476F92E.4020608_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58826A4D-B766-49ED-AE0A-913AB1469C41_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_wtime implementation<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-27 05:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25874.php">Nick Papior Andersen: "[OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>one drawback of retrieving time with rdtsc is that this value is core
<br>
specific :
<br>
if a task is not bound to a core, then the value returned by MPI_Wtime()
<br>
might go backward.
<br>
<p>if i run the following program with
<br>
taskset -c 1 ./time
<br>
<p>and then move it accross between cores
<br>
(taskset -cp 0 &lt;pid&gt; ; taskset -cp 2 &lt;pid&gt;; ...)
<br>
then the program can abort. in my environment, i can measure up to 150ms
<br>
difference.
<br>
<p>/* some mtt tests will abort if this condition is met */
<br>
<p><p>i was unable to observe this behavior with gettimeofday()
<br>
<p>/* though it could occur when ntpd synchronizes the clock */
<br>
<p>is there any plan to make the timer function selectable via a mca param ?
<br>
or to automatically fallback to gettimeofday if a task is not bound on a
<br>
core ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>$ cat time.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double t = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (;;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double _t = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (_t &lt; t) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;going back in time %lf &lt; %lf\n&quot;, _t, t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t = _t;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>On 2014/11/25 1:59, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On Nov 24, 2014, at 12:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/285">https://github.com/open-mpi/ompi/pull/285</a> is a potential answer. I would like to hear Dave Goodell comment on this before pushing it upstream.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev1">&gt; I'll take a look at it today.  My notification settings were messed up when you originally CCed me on the PR, so I didn't see this until now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25863.php">http://www.open-mpi.org/community/lists/users/2014/11/25863.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25874.php">Nick Papior Andersen: "[OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25863.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
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
