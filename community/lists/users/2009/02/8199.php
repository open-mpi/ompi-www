<?
$subject_val = "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 12:25:35 2009" -->
<!-- isoreceived="20090225172535" -->
<!-- sent="Wed, 25 Feb 2009 10:25:27 -0700" -->
<!-- isosent="20090225172527" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)" -->
<!-- id="90E47DE5-A000-4BFE-9B67-D0A5E7956241_at_noao.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)<br>
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 12:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8200.php">Ricardo Fernández-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8198.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="8204.php">George Bosilca: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="8205.php">Ken Mighell: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI gurus,
<br>
<p>We have F90 code which compiles with MPICH on a dual-core PC laptop  
<br>
using the Intel compiler.
<br>
<p>We are trying to compile the code with Open MPI on a Mac Pro with 2  
<br>
quad-core Xeons using gfortran.
<br>
<p>The code seem to be running ... for the most part.  Unfortunately we  
<br>
keep getting a segfault
<br>
which spits out a variant of the following message:
<br>
<p>[oblix:21522] *** Process received signal ***
<br>
[oblix:21522] Signal: Segmentation fault (11)
<br>
[oblix:21522] Signal code: Address not mapped (1)
<br>
[oblix:21522] Failing at address: 0xc0000710
<br>
[oblix:21522] [ 0] 2   libSystem.B.dylib                  0x92a892bb  
<br>
_sigtramp + 43
<br>
[oblix:21522] [ 1] 3   ???                                0xffffffff  
<br>
0x0 + 4294967295
<br>
[oblix:21522] [ 2] 4   exe.out                            0x0001281b  
<br>
MAIN__ + 4875
<br>
[oblix:21522] [ 3] 5   exe.out                            0x00013c38  
<br>
main + 40
<br>
[oblix:21522] [ 4] 6   exe.out                            0x00001936  
<br>
start + 54
<br>
[oblix:21522] *** End of error message ***
<br>
<p>After some researching of the error message, and digging around in   
<br>
the Open MPI user's mailing list,
<br>
it appears that the bug may be in Open MPI.
<br>
<p>Someone has offered what might be a  workaround:
<br>
<p>recompile with the following flag:
<br>
<p>--with-memory-manager=none
<br>
<p>Sadly, that segfaults still occur.
<br>
<p>What should we try next?
<br>
<p>Best regards,
<br>
<p>-Ken Mighell
<br>
<p>P.S. mpi_info result follows:
<br>
<p><p>

<br><p>
<p><p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8199/ompi_info.result">ompi_info.result</a>
</ul>
<!-- attachment="ompi_info.result" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8200.php">Ricardo Fernández-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8198.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="8204.php">George Bosilca: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="8205.php">Ken Mighell: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
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
