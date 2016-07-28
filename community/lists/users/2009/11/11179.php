<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1403, Issue 4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 14:43:16 2009" -->
<!-- isoreceived="20091112194316" -->
<!-- sent="Thu, 12 Nov 2009 13:43:12 -0600" -->
<!-- isosent="20091112194312" -->
<!-- name="RightCFD" -->
<!-- email="rightcfd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1403, Issue 4" -->
<!-- id="661b788e0911121143i3cc5d2cbnbd26dd31db2e0e03_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1258045205.22853.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1403, Issue 4<br>
<strong>From:</strong> RightCFD (<em>rightcfd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 14:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all your inputs.
<br>
<p>It is good to know this initial latency is an expected behavior and the
<br>
workaround by using one dummy iteration before timing is started.
<br>
<p>I did not notice this because my older parallel CFD code runs a large number
<br>
&nbsp;of time steps and the initial latency was compensated.
<br>
<p>But recently I am teaching MPI stuff using small parallel codes and noticed
<br>
this behavior.
<br>
<p>This relieves my concern about our system performance.
<br>
<p>Thanks again.
<br>
<p><p><p><span class="quotelev1">&gt; Date: Thu, 12 Nov 2009 11:18:24 -0500
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi functions are slow when first called and
</span><br>
<span class="quotelev1">&gt;        become normal afterwards
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4AFC3550.10500_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt; RightCFD wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Date: Thu, 29 Oct 2009 15:45:06 -0400
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     From: Brock Palen &lt;brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Subject: Re: [OMPI users] mpi functions are slow when first called
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            become normal afterwards
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Message-ID: &lt;890CC430-68B0-4307-8260-24A6FADAE319_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     &lt;mailto:890CC430-68B0-4307-8260-24A6FADAE319_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;     &gt; When MPI_Bcast and MPI_Reduce are called for the first time, they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;     &gt; are very slow. But after that, they run at normal and stable
</span><br>
<span class="quotelev1">&gt; speed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;     &gt; Is there anybody out there who have encountered such problem? If
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;     &gt; need any other information, please let me know and I'll provide.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;     &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     This is expected, and I think you can dig though the message archive
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     to find the answer.  OMPI does not wireup all the communication at
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     startup, thus the first time you communicate with a host the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     connection is made, but after that it is fast because it is already
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     open.  This behavior is expected, and is needed for very large
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     where you could run out of sockets for some types of communication
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     with so many hosts.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Brock Palen
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     (734)936-1985
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Thanks for your reply. I am surprised to know this is an expected
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     behavior of OMPI. I searched the archival but did not find many
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     relevant messages. I am wondering why other users of OMPI do not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     complain this. Is there a way to avoid this when timing an MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     program?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; An example of this is the NAS Parallel Benchmarks, which have been
</span><br>
<span class="quotelev2">&gt; &gt; around nearly 20 years.  They:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *) turn timers on after MPI_Init and off before MPI_Finalize
</span><br>
<span class="quotelev2">&gt; &gt; *) execute at least one iteration before starting timers
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Even so, with at least one of the NPB tests and with at least one MPI
</span><br>
<span class="quotelev2">&gt; &gt; implementation, I've seen more than one iteration needed to warm things
</span><br>
<span class="quotelev2">&gt; &gt; up.  That is, if you timed each iteration, you could see that multiple
</span><br>
<span class="quotelev2">&gt; &gt; iterations were needed to warm everything up.  In performance analysis,
</span><br>
<span class="quotelev2">&gt; &gt; it is reasonably common to expect to have to run multiple iterations and
</span><br>
<span class="quotelev2">&gt; &gt; correct data set size to get representative behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I would guess in OpenMPI, maybe in other implementations too,
</span><br>
<span class="quotelev1">&gt; the time you spend warming up, probing the best way to do things,
</span><br>
<span class="quotelev1">&gt; is widely compensated for during steady state execution,
</span><br>
<span class="quotelev1">&gt; if the number of iterations is not very small.
</span><br>
<span class="quotelev1">&gt; This seems to be required to accommodate for the large variety
</span><br>
<span class="quotelev1">&gt; of hardware and software platforms, and be efficient on all of them.
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK, other high quality software (e.g. FFTW)
</span><br>
<span class="quotelev1">&gt; do follow a similar rationale.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 1403, Issue 4
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
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
