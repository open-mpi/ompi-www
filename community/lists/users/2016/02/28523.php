<?
$subject_val = "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 13 16:45:46 2016" -->
<!-- isoreceived="20160213214546" -->
<!-- sent="Sat, 13 Feb 2016 22:45:26 +0100" -->
<!-- isosent="20160213214526" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program" -->
<!-- id="CAAbhqc5fgaMmZ-GTbmnkQMX3kitcUoXPEyWXNFqqxcsSVtBtcg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAE_DJ12PS_W9tQH_ShWKhkCcr8F4Kr5ZN1Rgo_SMD3sdpL7=Pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-13 16:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28524.php">Kim Walisch: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28522.php">Kim Walisch: "[OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>In reply to:</strong> <a href="28522.php">Kim Walisch: "[OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28524.php">Kim Walisch: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28524.php">Kim Walisch: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may be interested in reading:
<br>
<a href="https://www.open-mpi.org/software/ompi/versions/">https://www.open-mpi.org/software/ompi/versions/</a>
<br>
<p>2016-02-13 22:30 GMT+01:00 Kim Walisch &lt;kim.walisch_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to make life of my users easier I have built a fully
</span><br>
<span class="quotelev1">&gt; statically linked version of my primecount program. So the program
</span><br>
<span class="quotelev1">&gt; also statically links against Open MPI. I have built this binary on
</span><br>
<span class="quotelev1">&gt; CentOS-7-x86_64 using gcc. The good news is that the binary runs
</span><br>
<span class="quotelev1">&gt; without any issues on Ubuntu 15.10 x64 (uses mpiexec (OpenRTE) 1.10.2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bad news is that the binary does not work on Ubuntu 14.04 x64
</span><br>
<span class="quotelev1">&gt; which uses mpiexec (OpenRTE) 1.6.5. Here is the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 1 ./primecount 1e10 -t1
</span><br>
<span class="quotelev1">&gt; [ip-XXX:02671] [[8243,0],0] mca_oob_tcp_recv_handler: invalid message
</span><br>
<span class="quotelev1">&gt; type: 15
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ubuntu_at_ip-XXX:~$ mpiexec --version
</span><br>
<span class="quotelev1">&gt; mpiexec (OpenRTE) 1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Is this backwards incompatibility issue an Open MPI bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Can I expect that my binary will work with future mpiexec
</span><br>
<span class="quotelev1">&gt; versions &gt;= 1.10 (which it was built with)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and best regards,
</span><br>
<span class="quotelev1">&gt; Kim
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28522.php">http://www.open-mpi.org/community/lists/users/2016/02/28522.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28524.php">Kim Walisch: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28522.php">Kim Walisch: "[OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>In reply to:</strong> <a href="28522.php">Kim Walisch: "[OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28524.php">Kim Walisch: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Reply:</strong> <a href="28524.php">Kim Walisch: "Re: [OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
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
