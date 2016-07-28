<?
$subject_val = "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 19:46:27 2008" -->
<!-- isoreceived="20080918234627" -->
<!-- sent="Thu, 18 Sep 2008 16:46:23 -0700" -->
<!-- isosent="20080918234623" -->
<!-- name="Alex Wolfe" -->
<!-- email="awolfe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linpack Benchmark and File Descriptor Limits" -->
<!-- id="c336c2830809181646n2a46fdf0nd106b225571bd427_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c336c2830809181644h5facf1c7o10832e6bb4256cff_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linpack Benchmark and File Descriptor Limits<br>
<strong>From:</strong> Alex Wolfe (<em>awolfe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 19:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6608.php">Robert Kubrick: "[OMPI users] MPI_Win_unlock error"</a>
<li><strong>Previous message:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Maybe in reply to:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Reply:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm just running it using mpirun from the command line. Thanks for the
<br>
reply.
<br>
<p><p><span class="quotelev1">&gt; On Thu, Sep 18, 2008 at 4:35 PM, John Hearns &lt;hearnsj_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/9/18 Alex Wolfe &lt;awolfe_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run the HPL benchmarking software on a new 1024 core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster that we have set up. Unfortunately I'm hitting the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_oob_tcp_accept: accept() failed: Too many open files (24)&quot; error known
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in verson 1.2 of openmpi. No matter what I set the file-descriptor limit for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my account to, I am still limited to only 808 or so processes. Does anyone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you running the Linpack via a batch system or just using mpirun from
</span><br>
<span class="quotelev2">&gt;&gt; the command line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If via a batch system, looks for FAQs on how to set the resource limits
</span><br>
<span class="quotelev2">&gt;&gt; for that batch system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6608.php">Robert Kubrick: "[OMPI users] MPI_Win_unlock error"</a>
<li><strong>Previous message:</strong> <a href="6606.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Maybe in reply to:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Reply:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
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
