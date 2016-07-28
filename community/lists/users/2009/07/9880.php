<?
$subject_val = "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 10:58:31 2009" -->
<!-- isoreceived="20090708145831" -->
<!-- sent="Wed, 8 Jul 2009 10:56:22 -0400" -->
<!-- isosent="20090708145622" -->
<!-- name="Lengyel, Florian" -->
<!-- email="FLengyel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads" -->
<!-- id="6889DDC1CE0D7845912CB738AEE21A0A0245E2B2_at_MAILBE.acad.gc.cuny.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="11337123.39001247032693657.JavaMail.root_at_mta.iut.ac.ir" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads<br>
<strong>From:</strong> Lengyel, Florian (<em>FLengyel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 10:56:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9881.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9879.php">Nobuyuki Yamaguchi: "[OMPI users] Is there any correctness tests for openmpi?"</a>
<li><strong>In reply to:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of rahmani
<br>
Sent: Wed 7/8/2009 1:58 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads
<br>
&nbsp;
<br>
...
<br>
<p>Hi
<br>
in your job file don't user &quot;mpirun --prefix /...&quot; 
<br>
instead use full name of mpirun, include it's path &quot;/.../mpirun&quot;
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>This made no difference:
<br>
<p>[flengyel_at_nept OPENMPI]$ cat sum.e23294 
<br>
Starting server daemon at host &quot;m18.gc.cuny.edu&quot;
<br>
Starting server daemon at host &quot;m19.gc.cuny.edu&quot;
<br>
Server daemon successfully started with task id &quot;1.m18&quot;
<br>
Server daemon successfully started with task id &quot;1.m19&quot;
<br>
Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host m19.gc.cuny.edu ...
<br>
Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host m18.gc.cuny.edu ...
<br>
/usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
<br>
reading exit code from shepherd ... /usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
<br>
reading exit code from shepherd ... 129
<br>
[m19.gc.cuny.edu:31339] ERROR: A daemon on node m19.gc.cuny.edu failed to start as expected.
<br>
[m19.gc.cuny.edu:31339] ERROR: There may be more information available from
<br>
[m19.gc.cuny.edu:31339] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[m19.gc.cuny.edu:31339] ERROR: If the problem persists, please restart the
<br>
[m19.gc.cuny.edu:31339] ERROR: Grid Engine PE job
<br>
[m19.gc.cuny.edu:31339] ERROR: The daemon exited unexpectedly with status 129.
<br>
129
<br>
[m19.gc.cuny.edu:31339] ERROR: A daemon on node m18.gc.cuny.edu failed to start as expected.
<br>
[m19.gc.cuny.edu:31339] ERROR: There may be more information available from
<br>
[m19.gc.cuny.edu:31339] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[m19.gc.cuny.edu:31339] ERROR: If the problem persists, please restart the
<br>
[m19.gc.cuny.edu:31339] ERROR: Grid Engine PE job
<br>
[m19.gc.cuny.edu:31339] ERROR: The daemon exited unexpectedly with status 129.
<br>
[flengyel_at_nept OPENMPI]$ 
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9881.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9879.php">Nobuyuki Yamaguchi: "[OMPI users] Is there any correctness tests for openmpi?"</a>
<li><strong>In reply to:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
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
