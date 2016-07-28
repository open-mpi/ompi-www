<?
$subject_val = "[OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 11:29:43 2011" -->
<!-- isoreceived="20110627152943" -->
<!-- sent="Mon, 27 Jun 2011 12:29:39 -0300" -->
<!-- isosent="20110627152939" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG" -->
<!-- id="BANLkTinrc=k-gYt8p7xBFYdrCs4i64_PQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG<br>
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 11:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16770.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there.
<br>
<p>I am developing a server/client application using Open MPI 1.5.3. In a
<br>
point of the server code I open a port to receive connections from a
<br>
client. After that, I call the function MPI_Comm_accept and on the
<br>
client side I call MPI_Comm_connect. Sometimes I get an
<br>
ORTE_ERROR_LOG, as showed bellow.
<br>
<p>before accept in host hydra9 port name =
<br>
4108386304.0;tcp://150.164.3.204:48761;tcp://192.168.63.9:48761+4108386305.0tcp://150.164.3.204:49211;tcp://192.168.63.9:49211:300
<br>
[hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file
<br>
base/grpcomm_base_allgather.c at line 220
<br>
[hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file
<br>
base/grpcomm_base_modex.c at line 116
<br>
[hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file
<br>
grpcomm_bad_module.c at line 608
<br>
[hydra9:11199] [[62689,1],0] ORTE_ERROR_LOG: Not found in file
<br>
dpm_orte.c at line 379
<br>
MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error
<br>
code
<br>
after accept in host hydra9 error code = 17
<br>
MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error code
<br>
<p>The mpi_errno is 17 and I could not find a clear explanation about
<br>
this error. It occurs sporadically. Sometimes the application works,
<br>
sometimes does not.
<br>
<p><p>Any ideas?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16771/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16770.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
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
