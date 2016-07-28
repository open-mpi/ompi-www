<?
$subject_val = "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 20 11:23:09 2013" -->
<!-- isoreceived="20130520152309" -->
<!-- sent="Mon, 20 May 2013 08:23:02 -0700" -->
<!-- isosent="20130520152302" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E9834179F_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="519A3BA2.8060508_at_letai.org.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-20 11:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21936.php">Alan Sayre: "[OMPI users] minor change request"</a>
<li><strong>Previous message:</strong> <a href="21934.php">dani: "[OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>In reply to:</strong> <a href="21934.php">dani: "[OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can speak to part of your issue.  There are no CUDA-aware features in the 1.6 series of Open MPI.  Therefore, the various configure flags you tried would not affect Open MPI itself.  Those configure flags are relevant with the 1.7 series and later, but as the FAQ says, the CUDA-aware feature is only included when explicitly requested.
<br>
<p>The issue is with the CUDA support that is being configured into the Vampirtrace support.  If you do not need the Vampirtrace support, then just configure with the -disable-vt as you discovered.
<br>
<p>I am not sure what configure flags to give to VampirTrace to tell it to not build in CUDA support.
<br>
<p>Rolf
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of dani
<br>
Sent: Monday, May 20, 2013 11:05 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Compiling openmpi 1.6.4 without CUDA
<br>
<p>Hi List,
<br>
<p>I've encountered an issue today - building an openmpi 1.6.4 from source rpm, on a machine which has cuda-5 (latest) installed, resulted in openmpi always using the cuda headers and libs.
<br>
I should mention that I have added the cuda libs dir to ldconfig, and the bin dir to the path (nvcc is in path).
<br>
When building openmpi 1.6.4 (rpmbuild --rebuild openmpi.src.rpm) the package is automatically build with cuda.
<br>
I have tried to define --without-cuda , --disable-cuda, --disable-cudawrapers but the rpm is always built with cuda, and fails to install as the required libs are not in rpmdb.
<br>
If installing with --disable-vt, cuda is not looked for or installed.
<br>
So i guess my question is two-fold:
<br>
1. Is this by design? from the FAQ (<a href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>) I was sure cuda is not built by default.
<br>
2. Is there a way to keep vampirtrace without cuda?
<br>
<p>The reason I don't want cuda in mpi is due to the target cluster characteristics: Except for 1 node, it will have no gpus, so I saw no reason to deploy cuda to it. unfortunately, I had to use the single node with cuda as the compilation node, as it was the only node with complete development packages.
<br>
<p>I can always mv the cuda dirs during build phase, but I'm wandering if this is how openmpi build is supposed to behave.
<br>
<p>-----------------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21936.php">Alan Sayre: "[OMPI users] minor change request"</a>
<li><strong>Previous message:</strong> <a href="21934.php">dani: "[OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>In reply to:</strong> <a href="21934.php">dani: "[OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
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
