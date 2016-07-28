<?
$subject_val = "[OMPI users] Weird behavior of the MPI-IO routines";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 07:40:53 2010" -->
<!-- isoreceived="20100416114053" -->
<!-- sent="Fri, 16 Apr 2010 13:37:14 +0200" -->
<!-- isosent="20100416113714" -->
<!-- name="E.T.A.vanderWeide_at_[hidden]" -->
<!-- email="E.T.A.vanderWeide_at_[hidden]" -->
<!-- subject="[OMPI users] Weird behavior of the MPI-IO routines" -->
<!-- id="850A61E88A87D54E832F7C171A0BB8894FBDDA_at_ctwex4.ctw.utwente.nl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Weird behavior of the MPI-IO routines<br>
<strong>From:</strong> <a href="mailto:E.T.A.vanderWeide_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Weird%20behavior%20of%20the%20MPI-IO%20routines"><em>E.T.A.vanderWeide_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-16 07:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12653.php">Mario Ogrizek: "[OMPI users] Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using the MPI-IO routines for collective reading of data from binary files. For some cases
<br>
I encountered problems using Open MPI, while other MPI implementations showed the correct behavior.
<br>
The attached test program mimics the simplest case for which this problem occurs. It should be
<br>
run on 2 processors on a little endian operating system, e.g. Linux, because the binary file is
<br>
in little endian format and, for simplicity, I didn't add the option for byte swapping.
<br>
Compilation is simply done by mpicxx -o ParallelIOTest ParallelIOTest.cpp.
<br>
<p>As far as I know, I'm using the collective IO routines of MPI correctly, but I might be mistaken.
<br>
However, if I do use these routines correctly, might this be a bug in Open MPI?
<br>
<p>Thanks,
<br>
<p>Edwin
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12652/ParallelIOTest.tgz">ParallelIOTest.tgz</a>
</ul>
<!-- attachment="ParallelIOTest.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12653.php">Mario Ogrizek: "[OMPI users] Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
