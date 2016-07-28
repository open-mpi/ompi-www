<?
$subject_val = "Re: [OMPI users] mpi_type_create_struct not working for large counts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 02:43:36 2015" -->
<!-- isoreceived="20150414064336" -->
<!-- sent="Tue, 14 Apr 2015 06:43:31 +0000" -->
<!-- isosent="20150414064331" -->
<!-- name="MOHR STEPHAN 239883" -->
<!-- email="STEPHAN.MOHR_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_type_create_struct not working for large counts" -->
<!-- id="FC64FEF6471E804DA9CA2F6DBDCFD62B014C65AF_at_EXDAG0-B2.intra.cea.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAF1Cqj7DqVup_nS4__tF8zz8DCSNRL5xkPbzYfGffpj71a=dOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_type_create_struct not working for large counts<br>
<strong>From:</strong> MOHR STEPHAN 239883 (<em>STEPHAN.MOHR_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 02:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26714.php">Chen Sijie: "[OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d"</a>
<li><strong>Previous message:</strong> <a href="26712.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>I tried with 1.8.5rc1, but it doesn't work either.
<br>
<p>The output of ompi_info is attached.
<br>
<p>Thanks,
<br>
Stephan
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Howard Pritchard [hppritcha_at_[hidden]]
<br>
Sent: Monday, April 13, 2015 19:41
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] mpi_type_create_struct not working for large counts
<br>
<p>HI Stephan,
<br>
<p>For starters, would you mind sending the output you get when you run the ompi_info command?
<br>
If you could, it would be great if you could try running the test against the latest 1.8.5rc1&lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc1.tar.gz">http://www.open-mpi.org/software/ompi/v1.8/downloads/openmpi-1.8.5rc1.tar.gz</a>&gt;?
<br>
The test appears to work without problem using mpich, at least with 4 ranks.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>2015-04-13 10:40 GMT-06:00 MOHR STEPHAN 239883 &lt;STEPHAN.MOHR_at_[hidden]&lt;mailto:STEPHAN.MOHR_at_[hidden]&gt;&gt;:
<br>
Hi there,
<br>
<p>I've got an issue when using a derived data type created by mpi_type_create_struct in a one-sided communication.
<br>
<p>The problem can be reproduced using the small standalone program which I attached. It just creates a type which should be equivalent to n contiguous elements. This type is then used in a mpi_get. With a value n=100 it works fine, but with n=1000 it either hangs (version 1.8.1) or crashes (version 1.6.5).
<br>
<p>Any help is appreciated.
<br>
<p>Best regards,
<br>
Stephan
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26695.php">http://www.open-mpi.org/community/lists/users/2015/04/26695.php</a>
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26713/ompi_info.log">ompi_info.log</a>
</ul>
<!-- attachment="ompi_info.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26714.php">Chen Sijie: "[OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d"</a>
<li><strong>Previous message:</strong> <a href="26712.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26696.php">Howard Pritchard: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Reply:</strong> <a href="26719.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
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
