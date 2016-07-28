<?
$subject_val = "[OMPI users] MPI_Send over 2 GB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 19:05:47 2009" -->
<!-- isoreceived="20090219000547" -->
<!-- sent="Thu, 19 Feb 2009 01:05:42 +0100" -->
<!-- isosent="20090219000542" -->
<!-- name="Vittorio" -->
<!-- email="vitto.giova_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Send over 2 GB" -->
<!-- id="4de51c660902181605n4dc3c212te730c6480ddb0308_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Send over 2 GB<br>
<strong>From:</strong> Vittorio (<em>vitto.giova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 19:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Previous message:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Reply:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi! I'm doing a test to measure the transfer rates and latency of ompi over
<br>
infiniband
<br>
<p>starting from 1 kB everything was doing fine until i wanted to transfer 2 GB
<br>
and i received this error
<br>
<p>[tatami:02271] *** An error occurred in MPI_Recv
<br>
[tatami:02271] *** on communicator MPI_COMM_WORLD
<br>
[tatami:02271] *** MPI_ERR_COUNT: invalid count argument
<br>
[tatami:02271] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[randori:12166] *** An error occurred in MPI_Send
<br>
[randori:12166] *** on communicator MPI_COMM_WORLD
<br>
[randori:12166] *** MPI_ERR_COUNT: invalid count argument
<br>
[randori:12166] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p>this error appears if i run the program either on the same node or both
<br>
is 2 GB the intrinsic limit of MPI_Send/MPI_Recv?
<br>
<p>thanks a lot
<br>
Vittorio
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Previous message:</strong> <a href="8097.php">Robert Latham: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Reply:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
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
