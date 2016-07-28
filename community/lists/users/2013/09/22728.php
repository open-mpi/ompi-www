<?
$subject_val = "[OMPI users] mpi_barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 19:19:52 2013" -->
<!-- isoreceived="20130928231952" -->
<!-- sent="Sun, 29 Sep 2013 00:19:08 +0100" -->
<!-- isosent="20130928231908" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_barrier" -->
<!-- id="CAOQ90zEr7vnn1UUGHFGN13Js8=hssEC0mBO6P0rGH5M4o5_tXA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_barrier<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 19:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Previous message:</strong> <a href="22727.php">Siegmar Gross: "[OMPI users] openmpi-1.7.3rc2r29276 doesn't honour --with-wrapper-libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Reply:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>In my code I implement mpi_send/mpi_receive for an three dimensional real
<br>
array, and process is as follows:
<br>
<p>all other processors send the array to rank 0 and then rank 0 receives the
<br>
array and put these arrays into a complete array. Then mpi_bcast is called
<br>
to send the complete array from rank 0 to all others.
<br>
<p>This is very basic usage of mpi_send and mpi_receive. In my fortran code I
<br>
found that if I added call mpi_barrier(...) before the mpi_send and
<br>
mpi_reive statements the wall time (60s) for this sending and receiving
<br>
will be much lower than that if mpi_barrier is not called (2s). I used
<br>
mpi_wtime to count the time.
<br>
<p>I think mpi_send and mpi_recv are blocking subroutines and thus no
<br>
additional mpi_barrier is needed. Can anybody tell me what is the reason
<br>
for this phenomena? Thank you very much.
<br>
<p>best regards,
<br>
Huangwei
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Previous message:</strong> <a href="22727.php">Siegmar Gross: "[OMPI users] openmpi-1.7.3rc2r29276 doesn't honour --with-wrapper-libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
<li><strong>Reply:</strong> <a href="22729.php">George Bosilca: "Re: [OMPI users] mpi_barrier"</a>
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
