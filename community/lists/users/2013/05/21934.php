<?
$subject_val = "[OMPI users] Compiling openmpi 1.6.4 without CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 20 11:05:17 2013" -->
<!-- isoreceived="20130520150517" -->
<!-- sent="Mon, 20 May 2013 18:05:06 +0300" -->
<!-- isosent="20130520150506" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling openmpi 1.6.4 without CUDA" -->
<!-- id="519A3BA2.8060508_at_letai.org.il" -->
<!-- charset="ISO-8859-8-I" -->
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
<strong>Subject:</strong> [OMPI users] Compiling openmpi 1.6.4 without CUDA<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-20 11:05:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>Previous message:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>Reply:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<html style="direction: ltr;">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-8-I">
    <style type="text/css">body p { margin-bottom: 0cm; margin-top: 0pt; } </style>
  </head>
  <body style="direction: ltr;"
    bidimailui-detected-decoding-type="preferred-charset" text="#000000"
    bgcolor="#FFFFFF">
    Hi List,<br>
    <br>
    I've encountered an issue today - building an openmpi 1.6.4 from
    source rpm, on a machine which has cuda-5 (latest) installed,
    resulted in openmpi always using the cuda headers and libs.<br>
    I should mention that I have added the cuda libs dir to ldconfig,
    and the bin dir to the path (nvcc is in path).<br>
    When building openmpi 1.6.4 (rpmbuild --rebuild openmpi.src.rpm) the
    package is automatically build with cuda.<br>
    I have tried to define --without-cuda , --disable-cuda,
    --disable-cudawrapers but the rpm is always built with cuda, and
    fails to install as the required libs are not in rpmdb.<br>
    If installing with --disable-vt, cuda is not looked for or
    installed.<br>
    So i guess my question is two-fold:<br>
    1. Is this by design? from the FAQ
    (<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>) I was
    sure cuda is not built by default.<br>
    2. Is there a way to keep vampirtrace without cuda?<br>
    <br>
    The reason I don't want cuda in mpi is due to the target cluster
    characteristics: Except for 1 node, it will have no gpus, so I saw
    no reason to deploy cuda to it. unfortunately, I had to use the
    single node with cuda as the compilation node, as it was the only
    node with complete development packages.<br>
    <br>
    I can always mv the cuda dirs during build phase, but I'm wandering
    if this is how openmpi build is supposed to behave.<br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>Previous message:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>Reply:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
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
