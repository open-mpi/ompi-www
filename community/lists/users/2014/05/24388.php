<?
$subject_val = "[OMPI users] openMPI in 64 bit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 15:13:08 2014" -->
<!-- isoreceived="20140515191308" -->
<!-- sent="Thu, 15 May 2014 14:13:07 -0500" -->
<!-- isosent="20140515191307" -->
<!-- name="Ajay Nair" -->
<!-- email="prodigyaj_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI in 64 bit" -->
<!-- id="CAHVi7zJLCF+Ty42KePx3SvhHaj3ZkU9oimBfuP-RmTD+wsabJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openMPI in 64 bit<br>
<strong>From:</strong> Ajay Nair (<em>prodigyaj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 15:13:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24389.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24387.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>Reply:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>Reply:</strong> <a href="24396.php">Ralph Castain: "Re: [OMPI users] openMPI in 64 bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have been using openMPI for my application with intel visual fortran. The
<br>
version that I am currently using is openMPI-1.6.2. It works fine iwth
<br>
fortran code compiled in 32bit and run it with openMPI 32 bit files.
<br>
However recently I moved to a 64 bit machine and even though I could
<br>
compile the code successfully with intel fortran 64 bit and also pointing
<br>
the openMPI to the corresponding 64 bit files, the exe would not start and
<br>
threw the error:
<br>
*the application was unable to start correctly (0x00007b)*
<br>
<p>This is because the msvcr100d.dll file (this is required by openMPI even
<br>
when I run in 32bit mode) is a 32 bit dll file and it probably requires 64
<br>
bit equivalent. I could not find any 64 bit equivalent for this dll.
<br>
My question is why is openMPI looking for this dll file (even in case of
<br>
32bit compilation). Can i do away with this dependency or is there any way
<br>
I can run it in 64 bit?
<br>
<p>Thanks
<br>
AJ
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24388/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24389.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24387.php">Jeff Squyres (jsquyres): "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>Reply:</strong> <a href="24393.php">Tim Prince: "Re: [OMPI users] openMPI in 64 bit"</a>
<li><strong>Reply:</strong> <a href="24396.php">Ralph Castain: "Re: [OMPI users] openMPI in 64 bit"</a>
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
