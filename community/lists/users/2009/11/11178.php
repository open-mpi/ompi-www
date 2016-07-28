<?
$subject_val = "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:18:34 2009" -->
<!-- isoreceived="20091112161834" -->
<!-- sent="Thu, 12 Nov 2009 11:18:24 -0500" -->
<!-- isosent="20091112161824" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards" -->
<!-- id="4AFC3550.10500_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AFC23D2.5090704_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 11:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11179.php">RightCFD: "Re: [OMPI users] users Digest, Vol 1403, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="11173.php">Eugene Loh: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; RightCFD wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Date: Thu, 29 Oct 2009 15:45:06 -0400
</span><br>
<span class="quotelev2">&gt;&gt;     From: Brock Palen &lt;brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subject: Re: [OMPI users] mpi functions are slow when first called and
</span><br>
<span class="quotelev2">&gt;&gt;            become normal afterwards
</span><br>
<span class="quotelev2">&gt;&gt;     To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Message-ID: &lt;890CC430-68B0-4307-8260-24A6FADAE319_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:890CC430-68B0-4307-8260-24A6FADAE319_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; When MPI_Bcast and MPI_Reduce are called for the first time, they
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; are very slow. But after that, they run at normal and stable speed.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Is there anybody out there who have encountered such problem? If you
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; need any other information, please let me know and I'll provide.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This is expected, and I think you can dig though the message archive
</span><br>
<span class="quotelev2">&gt;&gt;     to find the answer.  OMPI does not wireup all the communication at
</span><br>
<span class="quotelev2">&gt;&gt;     startup, thus the first time you communicate with a host the
</span><br>
<span class="quotelev2">&gt;&gt;     connection is made, but after that it is fast because it is already
</span><br>
<span class="quotelev2">&gt;&gt;     open.  This behavior is expected, and is needed for very large systems
</span><br>
<span class="quotelev2">&gt;&gt;     where you could run out of sockets for some types of communication
</span><br>
<span class="quotelev2">&gt;&gt;     with so many hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt;     www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt;     brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks for your reply. I am surprised to know this is an expected
</span><br>
<span class="quotelev2">&gt;&gt;     behavior of OMPI. I searched the archival but did not find many
</span><br>
<span class="quotelev2">&gt;&gt;     relevant messages. I am wondering why other users of OMPI do not
</span><br>
<span class="quotelev2">&gt;&gt;     complain this. Is there a way to avoid this when timing an MPI
</span><br>
<span class="quotelev2">&gt;&gt;     program?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; An example of this is the NAS Parallel Benchmarks, which have been 
</span><br>
<span class="quotelev1">&gt; around nearly 20 years.  They:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) turn timers on after MPI_Init and off before MPI_Finalize
</span><br>
<span class="quotelev1">&gt; *) execute at least one iteration before starting timers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even so, with at least one of the NPB tests and with at least one MPI 
</span><br>
<span class="quotelev1">&gt; implementation, I've seen more than one iteration needed to warm things 
</span><br>
<span class="quotelev1">&gt; up.  That is, if you timed each iteration, you could see that multiple 
</span><br>
<span class="quotelev1">&gt; iterations were needed to warm everything up.  In performance analysis, 
</span><br>
<span class="quotelev1">&gt; it is reasonably common to expect to have to run multiple iterations and 
</span><br>
<span class="quotelev1">&gt; correct data set size to get representative behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>And I would guess in OpenMPI, maybe in other implementations too,
<br>
the time you spend warming up, probing the best way to do things,
<br>
is widely compensated for during steady state execution,
<br>
if the number of iterations is not very small.
<br>
This seems to be required to accommodate for the large variety
<br>
of hardware and software platforms, and be efficient on all of them.
<br>
Right?
<br>
<p>AFAIK, other high quality software (e.g. FFTW)
<br>
do follow a similar rationale.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11179.php">RightCFD: "Re: [OMPI users] users Digest, Vol 1403, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="11173.php">Eugene Loh: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
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
