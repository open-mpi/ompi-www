<?
$subject_val = "Re: [OMPI users] Open MPI 1.4.5 and CUDA support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 09:28:25 2012" -->
<!-- isoreceived="20120417132825" -->
<!-- sent="Tue, 17 Apr 2012 06:28:18 -0700" -->
<!-- isosent="20120417132818" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4.5 and CUDA support" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E84068DCD_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jgg4sSyKrpwomPgKpsCZxu3QWK7tgRbm8Epq6piPLR-xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.4.5 and CUDA support<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 09:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19030.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="19024.php">Rohan Deshpande: "[OMPI users] Open MPI 1.4.5 and CUDA support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, they are supported in the sense that they can work together.  However, if you want to have the ability to send/receive GPU buffers directly via MPI calls, then I recommend you get CUDA 4.1 and use the Open MPI trunk.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>
<br>
<p>Rolf
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Rohan Deshpande
<br>
Sent: Tuesday, April 17, 2012 2:13 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Open MPI 1.4.5 and CUDA support
<br>
<p>Hi,
<br>
<p>I am using Open MPI 1.4.5 and I have CUDA 3.2 installed.
<br>
<p>Anyone knows whether CUDA 3.2 is supported by OpenMPI?
<br>
<p>Thanks
<br>
<p><p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19030.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="19024.php">Rohan Deshpande: "[OMPI users] Open MPI 1.4.5 and CUDA support"</a>
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
