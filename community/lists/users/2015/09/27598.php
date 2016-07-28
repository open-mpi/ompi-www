<?
$subject_val = "[OMPI users] XHPL question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 17:49:15 2015" -->
<!-- isoreceived="20150916214915" -->
<!-- sent="Wed, 16 Sep 2015 14:49:14 -0700" -->
<!-- isosent="20150916214914" -->
<!-- name="Mark Moorcroft" -->
<!-- email="plaktau_at_[hidden]" -->
<!-- subject="[OMPI users] XHPL question" -->
<!-- id="CAFXuo3bwOy2e2kT51vFkhBFJHdenSf=9DvXpFKhPPt2+p=kOsQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] XHPL question<br>
<strong>From:</strong> Mark Moorcroft (<em>plaktau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 17:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27599.php">Mark Moorcroft: "[OMPI users] Contact?"</a>
<li><strong>Previous message:</strong> <a href="27597.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27601.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Reply:</strong> <a href="27601.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Maybe reply:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the thread below from May. I&#226;&#128;&#153;m setting up a new cluster and using
<br>
openmpi 1.10. I have a gnu build and an Intel. Neither has libmpi.so.1. I
<br>
created a symlink and it&#226;&#128;&#153;s working. My question is if I should try to
<br>
rebuild LAPACK, and is it wise to be adding that link? For me it&#226;&#128;&#153;s just
<br>
burn-in and testing. I don&#226;&#128;&#153;t want to create issues for the scientists
<br>
later. Was this link purposely removed some number of versions back?
<br>
<p><p>Thanks
<br>
<p><p><p><p>Ralph,
<br>
<p>I copied the LAPACK benchmark binaries (xhpl being the binary) over to a
<br>
development system (which
<br>
<p>is running the same version of CentOS) but I'm getting some errors trying
<br>
to run the OpenMPI LAPACK benchmark
<br>
<p>on OpenMPI 1.8.5:
<br>
<p>xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared
<br>
object file: No such file or directory
<br>
<p>xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared
<br>
object file: No such file or directory
<br>
<p>xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared
<br>
object file: No such file or directory
<br>
<p>xhpl: error while loading shared libraries: libmpi.so.1: cannot open shared
<br>
object file: No such file or directory
<br>
<p>When I look at the 1.8.5 install directory I find the following shared
<br>
object library but no libmpi.so.1
<br>
<p>/apps/mpi/openmpi/1.8.5-dev/lib/libmpi.so
<br>
<p>/apps/mpi/openmpi/1.8.5-dev/lib/libmpi.so.0
<br>
<p>Is it necessary to re-compile the OpenMPI LAPACK benchmark to run OpenMPI
<br>
1.8.5
<br>
<p>as opposed to 1.8.2?
<br>
<p>-Bill L.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27599.php">Mark Moorcroft: "[OMPI users] Contact?"</a>
<li><strong>Previous message:</strong> <a href="27597.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27601.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Reply:</strong> <a href="27601.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Maybe reply:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
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
