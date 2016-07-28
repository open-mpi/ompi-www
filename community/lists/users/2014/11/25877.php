<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 07:45:27 2014" -->
<!-- isoreceived="20141127124527" -->
<!-- sent="Thu, 27 Nov 2014 12:45:26 +0000" -->
<!-- isosent="20141127124526" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="E940E23D-3562-4467-8C75-350D5AFA10FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FA1C2B58EC054D2FAA3CAA5A1549C3E5_at_chem.msu.ru" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-27 07:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25889.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25889.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles' concern is correct: we should never return timer values that go backwards.
<br>
<p>Perhaps the TSC-based WTIME should only be used in a process that is bound to a single core...?
<br>
<p>An MCA param can be used to force the switch between gettimeofday() and TSC, if someone really wants to take their chances with TSC when not bound to core (or bound to something wider than a core).
<br>
<p><p><p>On Nov 27, 2014, at 5:41 AM, Alex A. Granovsky &lt;gran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; AFAIK, Linux synchronizes all CPU timers on boot. The skew is normally no more than 50-100 CPU cycles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reasons why you can observe larger differences are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Main. The CPUs do not have &quot;constant TSC&quot; feature . Without this feature timer frequency changes across different power states of CPU or core.
</span><br>
<span class="quotelev1">&gt; 2) Secondary. Some motherboard can overclock CPUs depending on load using FSB clock generator. This results in CPU timers ticking faster or slower than expected, even with &quot;constant TSC&quot; feature  (which is no longer constant again).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Alex Granovsky
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message----- From: Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 27, 2014 1:13 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi_wtime implementation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one drawback of retrieving time with rdtsc is that this value is core
</span><br>
<span class="quotelev1">&gt; specific :
</span><br>
<span class="quotelev1">&gt; if a task is not bound to a core, then the value returned by MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; might go backward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if i run the following program with
</span><br>
<span class="quotelev1">&gt; taskset -c 1 ./time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then move it accross between cores
</span><br>
<span class="quotelev1">&gt; (taskset -cp 0 &lt;pid&gt; ; taskset -cp 2 &lt;pid&gt;; ...)
</span><br>
<span class="quotelev1">&gt; then the program can abort. in my environment, i can measure up to 150ms
</span><br>
<span class="quotelev1">&gt; difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* some mtt tests will abort if this condition is met */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i was unable to observe this behavior with gettimeofday()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* though it could occur when ntpd synchronizes the clock */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there any plan to make the timer function selectable via a mca param ?
</span><br>
<span class="quotelev1">&gt; or to automatically fallback to gettimeofday if a task is not bound on a
</span><br>
<span class="quotelev1">&gt; core ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat time.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;   int i;
</span><br>
<span class="quotelev1">&gt;   double t = 0;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   for (;;) {
</span><br>
<span class="quotelev1">&gt;       double _t = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;       if (_t &lt; t) {
</span><br>
<span class="quotelev1">&gt;           fprintf(stderr, &quot;going back in time %lf &lt; %lf\n&quot;, _t, t);
</span><br>
<span class="quotelev1">&gt;           MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       t = _t;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/25 1:59, Dave Goodell (dgoodell) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2014, at 12:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/285">https://github.com/open-mpi/ompi/pull/285</a> is a potential answer. I would like to hear Dave Goodell comment on this before pushing it upstream.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; I'll take a look at it today.  My notification settings were messed up when you originally CCed me on the PR, so I didn't see this until now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25863.php">http://www.open-mpi.org/community/lists/users/2014/11/25863.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25875.php">http://www.open-mpi.org/community/lists/users/2014/11/25875.php</a> 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25876.php">http://www.open-mpi.org/community/lists/users/2014/11/25876.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25876.php">Alex A. Granovsky: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25889.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25889.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
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
