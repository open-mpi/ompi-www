<?
$subject_val = "[OMPI users] error when using mpiexec to launch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 19:22:04 2010" -->
<!-- isoreceived="20100322232204" -->
<!-- sent="Mon, 22 Mar 2010 20:21:59 -0300" -->
<!-- isosent="20100322232159" -->
<!-- name="Bloom Broker" -->
<!-- email="bloombroker_at_[hidden]" -->
<!-- subject="[OMPI users] error when using mpiexec to launch" -->
<!-- id="526247271003221621q6c0fe50ehd3a894ab7b0466ab_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error when using mpiexec to launch<br>
<strong>From:</strong> Bloom Broker (<em>bloombroker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 19:21:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12397.php">C.S. Johnson: "Re: [OMPI users] problems with users@open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="12395.php">fengguang tian: "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12399.php">Shiqing Fan: "Re: [OMPI users] error when using mpiexec to launch"</a>
<li><strong>Reply:</strong> <a href="12399.php">Shiqing Fan: "Re: [OMPI users] error when using mpiexec to launch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I finally managed to build openmpi in static library in visual studio (
<br>
thanks for your help), and then tried to run a program using
<br>
mpiexec -n 4 program.exe.
<br>
The answer to that was :
<br>
Cannot open configuration file
<br>
C:/mpidist/installed/share/openmpi\mpiexec-wrapper-data.txt
<br>
Error parsing data file mpiexec: Not found
<br>
I checked and there are *-wrapper-data.txt for the compiler wrappers ( in
<br>
the folder &quot;share&quot;) but nothing for mpiexec. In addition, I did not
<br>
completely understand openmpi philosophy, mpic++ are supposed to be compiler
<br>
wrapper, but when are they used in the process ? and what about exact
<br>
mpiexec and mpirun roles ? I find it quite difficult to get a proper
<br>
documentation and to understand the whole picture. Could you pls direct me
<br>
to a good source of info or explain quickly how the project is structured ?
<br>
Regards,
<br>
Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12397.php">C.S. Johnson: "Re: [OMPI users] problems with users@open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="12395.php">fengguang tian: "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12399.php">Shiqing Fan: "Re: [OMPI users] error when using mpiexec to launch"</a>
<li><strong>Reply:</strong> <a href="12399.php">Shiqing Fan: "Re: [OMPI users] error when using mpiexec to launch"</a>
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
