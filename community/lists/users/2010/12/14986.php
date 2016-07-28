<?
$subject_val = "Re: [OMPI users] Infiniband problem, kernel mismatch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 05:09:15 2010" -->
<!-- isoreceived="20101203100915" -->
<!-- sent="Fri, 3 Dec 2010 11:09:05 +0100" -->
<!-- isosent="20101203100905" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband problem, kernel mismatch" -->
<!-- id="201012031109.10450.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="AANLkTinCt3WC=50GMYDLh31faGiMv1EVMwAXvV43-x7h_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband problem, kernel mismatch<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 05:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14987.php">Nysal Jan: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14985.php">Daofeng Li: "[OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14834.php">HeeJin Kim: "[OMPI users] Infiniband problem, kernel mismatch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 19 November 2010 01:03:35 HeeJin Kim wrote:
<br>
...
<br>
<span class="quotelev1">&gt; *   mlx4: There is a mismatch between the kernel and the userspace
</span><br>
<span class="quotelev1">&gt; libraries: Kernel does not support XRC. Exiting.*
</span><br>
...
<br>
<span class="quotelev1">&gt; What I'm thinking is that the infiniband card is installed but it doesn't
</span><br>
<span class="quotelev1">&gt; work in correct mode.
</span><br>
<span class="quotelev1">&gt; My linux kernel version is *2.6.18-164.el5*, and installed ofed
</span><br>
<span class="quotelev1">&gt; version is *kernel-ib-pp-1.4.1-ofed20090528r1.4.1sgi605r1.rhel5
</span><br>
<p>Why don't you as a first step try the ib software that is included with EL5.4 
<br>
(that is, don't install OFED). We run several clusters this way.
<br>
<p>Also, consider updating to 5.5 (the version you're on includes several 
<br>
security vulnerabilities).
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14986/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14987.php">Nysal Jan: "Re: [OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Previous message:</strong> <a href="14985.php">Daofeng Li: "[OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14834.php">HeeJin Kim: "[OMPI users] Infiniband problem, kernel mismatch"</a>
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
