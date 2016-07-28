<?
$subject_val = "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:57:41 2008" -->
<!-- isoreceived="20081031155741" -->
<!-- sent="Fri, 31 Oct 2008 16:57:34 +0100" -->
<!-- isosent="20081031155734" -->
<!-- name="Rajesh Ramaya" -->
<!-- email="rajesh.ramaya_at_[hidden]" -->
<!-- subject="[OMPI users] MPI + Mixed language coding(Fortran90 + C++)" -->
<!-- id="C748A77FEFA44370B30AA463BC5CAB6E_at_exstream.local" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI + Mixed language coding(Fortran90 + C++)<br>
<strong>From:</strong> Rajesh Ramaya (<em>rajesh.ramaya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 11:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7161.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Reply:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello MPI Users,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I am completely new to MPI. I have a basic question concerning MPI and
<br>
mixed language coding. I hope any of you could help me out. Is it possible
<br>
to access FORTRAN common blocks in C++ in a MPI compiled code. It works
<br>
without MPI but as soon I switch to MPI the access of common block does not
<br>
work anymore. 
<br>
<p>I have a Linux MPI executable which loads a shared library at runtime and
<br>
resolves all undefined symbols etc  The shared library is written in C++ and
<br>
the MPI executable in written in FORTRAN. Some of the input that the shared
<br>
library looking for are in the Fortran common blocks. As I access those
<br>
common blocks during runtime the values are not  initialized.  I would like
<br>
to know if what I am doing is possible ?I hope that my problem is
<br>
clear......
<br>
<p>&nbsp;&nbsp;Your valuable suggestions are welcome !!!
<br>
<p>&nbsp;
<br>
<p>Thank you,
<br>
<p>Rajesh 
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7161.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Reply:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
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
