<?
$subject_val = "[OMPI users] Passing a rank specific argument to the JVM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 00:33:50 2015" -->
<!-- isoreceived="20150719043350" -->
<!-- sent="Sun, 19 Jul 2015 00:33:48 -0400" -->
<!-- isosent="20150719043348" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Passing a rank specific argument to the JVM" -->
<!-- id="CA+ssbKXC9PMvijQms3RBs8XjcJbBE-XJmqw_6sX8HL5sqzZa+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Passing a rank specific argument to the JVM<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-19 00:33:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27286.php">Juan Liu: "[OMPI users] MPI Process Abortion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to profile one of our applications and would like each rank to
<br>
report to a profiler through a specific port. This is a Java program, so
<br>
the way I would like to do this is to pass the port as a command line
<br>
argument to the JVM. For example,
<br>
<p>mpirun -np 2 java &lt;port&gt; MyProgram
<br>
<p>Note the port is passed as an option to the java command and not to the
<br>
program. Now the port has to be different for the 2 MPI procs and I am not
<br>
sure how this could be done.
<br>
<p>Any thoughts?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27286.php">Juan Liu: "[OMPI users] MPI Process Abortion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Reply:</strong> <a href="27288.php">Nick Papior: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
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
