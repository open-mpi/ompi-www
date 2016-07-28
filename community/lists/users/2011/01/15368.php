<?
$subject_val = "[OMPI users] parallel with parallel of wie2k code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 06:35:40 2011" -->
<!-- isoreceived="20110114113540" -->
<!-- sent="Fri, 14 Jan 2011 11:35:34 +0000 (GMT)" -->
<!-- isosent="20110114113534" -->
<!-- name="lagoun brahim" -->
<!-- email="lag17_brahim_at_[hidden]" -->
<!-- subject="[OMPI users] parallel with parallel of wie2k code" -->
<!-- id="763386.25906.qm_at_web25308.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] parallel with parallel of wie2k code<br>
<strong>From:</strong> lagoun brahim (<em>lag17_brahim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 06:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Reply:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear user's 
<br>
i have compiled the wien2k code with openmpi 1.4 (ifort11.1+icc2011+icpc+mkl libraries10.2) in smp machines (quad) with open suse 10.3 64bits
<br>
but when i run the parallel version i have the following error message
<br>
run_lapw -p -cc 0.01
<br>
&#160;LAPW0 END
<br>
Fatal error in MPI_Comm_size: Invalid communicator, error stack:
<br>
MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
<br>
MPI_Comm_size(69).: Invalid communicator
<br>
Fatal error in MPI_Comm_size: Invalid communicator, error stack:
<br>
MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
<br>
MPI_Comm_size(69).: Invalid communicator
<br>
Fatal error in MPI_Comm_size: Invalid communicator, error stack:
<br>
MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
<br>
MPI_Comm_size(69).: Invalid communicator
<br>
Fatal error in MPI_Comm_size: Invalid communicator, error stack:
<br>
MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
<br>
MPI_Comm_size(69).: Invalid communicator
<br>
cat: No match.
<br>
<p><span class="quotelev1">&gt;&#160;&#160; stop error
</span><br>
i don't now where is the probleme
<br>
i need your help please
<br>
and thanks in advance
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15367.php">Tena Sakai: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Reply:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
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
