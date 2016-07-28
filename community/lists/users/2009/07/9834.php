<?
$subject_val = "[OMPI users] Parallel I/O Usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 05:40:04 2009" -->
<!-- isoreceived="20090706094004" -->
<!-- sent="Mon, 6 Jul 2009 11:39:59 +0200" -->
<!-- isosent="20090706093959" -->
<!-- name="Manuel Holtgrewe" -->
<!-- email="holtgrewe_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel I/O Usage" -->
<!-- id="beba99aa0907060239t7f2d2cbcmc1620785e11f7ef5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Parallel I/O Usage<br>
<strong>From:</strong> Manuel Holtgrewe (<em>holtgrewe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 05:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9835.php">Catalin David: "[OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9833.php">Number Cruncher: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<li><strong>Reply:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>do I understand the MPI-2 Parallel I/O correctly (C++)?
<br>
<p>After opening a file with MPI::File::Open, I can use Read_at on the
<br>
returned file object. I give offsets in bytes and I can perform random
<br>
access reads from any process at any point of the file without
<br>
violating correctness (although the performance might/should/will be
<br>
better using views):
<br>
<p>MPI::File f = MPI::File::Open(MPI::COMM_WORLD, filename, MPI::MODE_RDONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::INFO_NULL);
<br>
// ...
<br>
MPI::Offset pos_in_file = ...;
<br>
// ...
<br>
f.Read_at(pos_in_file, buffer, local_n + 1, MPI::INTEGER);
<br>
// ...
<br>
f.Close();
<br>
<p>I have some problems with the program reading invalid data and want to
<br>
make sure I am actually using parallel I/O the right way.
<br>
<p>Thanks,
<br>
-- Manuel Holtgrewe
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9835.php">Catalin David: "[OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9833.php">Number Cruncher: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<li><strong>Reply:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
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
