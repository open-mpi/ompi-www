<?
$subject_val = "[OMPI users] OpenMPI checkpoint/restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 02:50:32 2010" -->
<!-- isoreceived="20100114075032" -->
<!-- sent="Thu, 14 Jan 2010 15:50:26 +0800" -->
<!-- isosent="20100114075026" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI checkpoint/restart" -->
<!-- id="68119efe1001132350y6f03b847ya9d2b5cd6ca742f3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI checkpoint/restart<br>
<strong>From:</strong> Andreea Costea (<em>andre.costea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 02:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11764.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Previous message:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11768.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>Reply:</strong> <a href="11768.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hei there
<br>
<p>I have some questions regarding checkpoint/restart:
<br>
<p>1. Until recently I thought that ompi-restart and ompi-restart are used to
<br>
checkpoint a process inside an MPI application. Now I reread
<br>
this&lt;<a href="http://www.osl.iu.edu/research/ft/ompi-cr/tools.php">http://www.osl.iu.edu/research/ft/ompi-cr/tools.php</a>&gt;and I
<br>
realized that actually what it does is to checkpoint the mpirun
<br>
process. Does this mean that if I run my application with multiple processes
<br>
and on multiple nodes in my network the checkpoint file will contain the
<br>
states of all the processes of my MPI application?
<br>
<p>2. Can I restart the application on a different node?
<br>
<p>Thanks a lot,
<br>
Andreea
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11764.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Previous message:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11768.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>Reply:</strong> <a href="11768.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart"</a>
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
