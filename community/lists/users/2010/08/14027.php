<?
$subject_val = "Re: [OMPI users] mpirun hangs during runtime on Intel quad-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 15 18:09:49 2010" -->
<!-- isoreceived="20100815220949" -->
<!-- sent="Sun, 15 Aug 2010 16:09:40 -0600" -->
<!-- isosent="20100815220940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs during runtime on Intel quad-core" -->
<!-- id="9DA717E1-2A73-422B-8F89-638AB950AA44_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=2tGUWbJj+ivNN3w8mCrcxV8CO+DPm60grNiNH_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs during runtime on Intel quad-core<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-15 18:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14028.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14026.php">Manik Mayur: "[OMPI users] mpirun hangs during runtime on Intel quad-core"</a>
<li><strong>In reply to:</strong> <a href="14026.php">Manik Mayur: "[OMPI users] mpirun hangs during runtime on Intel quad-core"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cryptic enough :-)
<br>
<p>Best I can tell, your TCP comm isn't working. All your procs are failing because they can't talk to each other.
<br>
<p>I'm also seeing something I don't understand:
<br>
<p>*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
<p><p>You might check your application and see if there is an error. It almost looks like you may have multiple threads calling MPI_Init?? That would be a violation of the standard.
<br>
<p><p>On Aug 15, 2010, at 2:01 PM, Manik Mayur wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting a runtime error with mpirun, the details are attached in
</span><br>
<span class="quotelev1">&gt; error.log.  Please let me know what is the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open-mpi version:1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux bingo 2.6.34-gentoo-r1 #7 SMP Fri Aug 13 10:18:23 IST 2010 i686
</span><br>
<span class="quotelev1">&gt; Intel(R) Core(TM)2 Quad CPU Q8200 @ 2.33GHz GenuineIntel GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manik Mayur
</span><br>
<span class="quotelev1">&gt; &lt;ompi-config.tar.bz2&gt;&lt;error.log&gt;&lt;ompi_info.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="14028.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14026.php">Manik Mayur: "[OMPI users] mpirun hangs during runtime on Intel quad-core"</a>
<li><strong>In reply to:</strong> <a href="14026.php">Manik Mayur: "[OMPI users] mpirun hangs during runtime on Intel quad-core"</a>
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
