<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 13:58:12 2006" -->
<!-- isoreceived="20060501175812" -->
<!-- sent="Mon, 1 May 2006 10:58:32 -0700" -->
<!-- isosent="20060501175832" -->
<!-- name="Brignone, Sergio" -->
<!-- email="sbrignone_at_[hidden]" -->
<!-- subject="[OMPI users] stdout in AIX" -->
<!-- id="04260B711FDCB041A3AFD3476C1D7E14043447_at_sacexm01.nexant.corp" -->
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
<strong>From:</strong> Brignone, Sergio (<em>sbrignone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 13:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1176.php">Brignone, Sergio: "[OMPI users] F77 in AIX"</a>
<li><strong>Previous message:</strong> <a href="1174.php">Douglas Kojetin: "[OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Reply:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1179.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1183.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been using open-mpi in Solaris for a while and now I need to use
<br>
open-mpi in AIX. 
<br>
<p>I compiled the latest stable open-mpi version and run one of the
<br>
simplest possible tests (see hello0.c in attached zip)
<br>
<p>To my surprise, it didn't show anything to the screen when running with
<br>
mpirun:
<br>
<p>mainaix:/xahome/userx&gt; ./hello0
<br>
Process 0 of 1 is on ecc1ap04
<br>
Process 0 says Hello Word!
<br>
mainaix:/xahome/userx &gt; mpirun -n 4 hello0
<br>
mainaix:/xahome/userx &gt;
<br>
<p>I also tried with stderr instead of stdout and I got the same result.
<br>
<p>Now, if I open a file and stream the output to the file (I just used one
<br>
file per process, I didn't use mpi-io), it works!
<br>
<p>Any ideas about the reason of this behavior?
<br>
<p>Thanks
<br>
<p>Sergio
<br>
<p>&nbsp;&lt;&lt;stdout.tar.gz&gt;&gt; 
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1175/stdout.tar.gz">stdout.tar.gz</a>
</ul>
<!-- attachment="stdout.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1176.php">Brignone, Sergio: "[OMPI users] F77 in AIX"</a>
<li><strong>Previous message:</strong> <a href="1174.php">Douglas Kojetin: "[OMPI users] C++ problem with ./configure using Intel version 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Reply:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1179.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1183.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
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
