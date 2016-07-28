<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 28 15:48:36 2014" -->
<!-- isoreceived="20141128204836" -->
<!-- sent="Fri, 28 Nov 2014 15:48:34 -0500" -->
<!-- isosent="20141128204834" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="CAMJJpkXW9Z7y=7y3PXemd6nFo+xHAWJAfJHyLTjKi3NTxdjKPg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E940E23D-3562-4467-8C75-350D5AFA10FA_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-28 15:48:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25890.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-373-gdee243c with Solaris Studio 12.4"</a>
<li><strong>Previous message:</strong> <a href="25888.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>In reply to:</strong> <a href="25877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://github.com/open-mpi/ompi/pull/292">https://github.com/open-mpi/ompi/pull/292</a>
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Nov 27, 2014 at 7:45 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Gilles' concern is correct: we should never return timer values that go
</span><br>
<span class="quotelev1">&gt; backwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps the TSC-based WTIME should only be used in a process that is bound
</span><br>
<span class="quotelev1">&gt; to a single core...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An MCA param can be used to force the switch between gettimeofday() and
</span><br>
<span class="quotelev1">&gt; TSC, if someone really wants to take their chances with TSC when not bound
</span><br>
<span class="quotelev1">&gt; to core (or bound to something wider than a core).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2014, at 5:41 AM, Alex A. Granovsky &lt;gran_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; AFAIK, Linux synchronizes all CPU timers on boot. The skew is normally
</span><br>
<span class="quotelev1">&gt; no more than 50-100 CPU cycles.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reasons why you can observe larger differences are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Main. The CPUs do not have &quot;constant TSC&quot; feature . Without this
</span><br>
<span class="quotelev1">&gt; feature timer frequency changes across different power states of CPU or
</span><br>
<span class="quotelev1">&gt; core.
</span><br>
<span class="quotelev2">&gt; &gt; 2) Secondary. Some motherboard can overclock CPUs depending on load
</span><br>
<span class="quotelev1">&gt; using FSB clock generator. This results in CPU timers ticking faster or
</span><br>
<span class="quotelev1">&gt; slower than expected, even with &quot;constant TSC&quot; feature  (which is no longer
</span><br>
<span class="quotelev1">&gt; constant again).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Alex Granovsky
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message----- From: Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, November 27, 2014 1:13 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] mpi_wtime implementation
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; one drawback of retrieving time with rdtsc is that this value is core
</span><br>
<span class="quotelev2">&gt; &gt; specific :
</span><br>
<span class="quotelev2">&gt; &gt; if a task is not bound to a core, then the value returned by MPI_Wtime()
</span><br>
<span class="quotelev2">&gt; &gt; might go backward.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if i run the following program with
</span><br>
<span class="quotelev2">&gt; &gt; taskset -c 1 ./time
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and then move it accross between cores
</span><br>
<span class="quotelev2">&gt; &gt; (taskset -cp 0 &lt;pid&gt; ; taskset -cp 2 &lt;pid&gt;; ...)
</span><br>
<span class="quotelev2">&gt; &gt; then the program can abort. in my environment, i can measure up to 150ms
</span><br>
<span class="quotelev2">&gt; &gt; difference.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* some mtt tests will abort if this condition is met */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i was unable to observe this behavior with gettimeofday()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* though it could occur when ntpd synchronizes the clock */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is there any plan to make the timer function selectable via a mca param ?
</span><br>
<span class="quotelev2">&gt; &gt; or to automatically fallback to gettimeofday if a task is not bound on a
</span><br>
<span class="quotelev2">&gt; &gt; core ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ cat time.c
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt; &gt;   int i;
</span><br>
<span class="quotelev2">&gt; &gt;   double t = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   for (;;) {
</span><br>
<span class="quotelev2">&gt; &gt;       double _t = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;       if (_t &lt; t) {
</span><br>
<span class="quotelev2">&gt; &gt;           fprintf(stderr, &quot;going back in time %lf &lt; %lf\n&quot;, _t, t);
</span><br>
<span class="quotelev2">&gt; &gt;           MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       t = _t;
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2014/11/25 1:59, Dave Goodell (dgoodell) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 24, 2014, at 12:06 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/285">https://github.com/open-mpi/ompi/pull/285</a> is a potential answer. I
</span><br>
<span class="quotelev1">&gt; would like to hear Dave Goodell comment on this before pushing it upstream.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll take a look at it today.  My notification settings were messed up
</span><br>
<span class="quotelev1">&gt; when you originally CCed me on the PR, so I didn't see this until now.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Dave
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25863.php">http://www.open-mpi.org/community/lists/users/2014/11/25863.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25875.php">http://www.open-mpi.org/community/lists/users/2014/11/25875.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25876.php">http://www.open-mpi.org/community/lists/users/2014/11/25876.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25877.php">http://www.open-mpi.org/community/lists/users/2014/11/25877.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25890.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-373-gdee243c with Solaris Studio 12.4"</a>
<li><strong>Previous message:</strong> <a href="25888.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>In reply to:</strong> <a href="25877.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_wtime implementation"</a>
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
