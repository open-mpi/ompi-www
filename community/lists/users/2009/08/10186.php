<?
$subject_val = "[OMPI users] Two remote machines - asymmetric behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 08:59:20 2009" -->
<!-- isoreceived="20090803125920" -->
<!-- sent="Mon, 3 Aug 2009 08:59:15 -0400" -->
<!-- isosent="20090803125915" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Two remote machines - asymmetric behavior" -->
<!-- id="c19fcadc0908030559l746b74dct2af626afea8c7608_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Two remote machines - asymmetric behavior<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 08:59:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have three machines: mine (daviddoria) and two identical remote machines
<br>
(cloud3 and cloud6). I can password-less ssh between any pair. The machines
<br>
are all 32bit running Fedora 11. OpenMPI was installed identically on each.
<br>
The .bashrc is identical on each. /etc/hosts is identical on each.
<br>
<p><p>I wrote a test &quot;hello world&quot; program to ensure OpenMPI is behaving
<br>
correctly.
<br>
<p><p>The output is exactly as expected, each node seems to be alive.
<br>
<p><p>[doriad_at_daviddoria MPITest]$ mpirun -H cloud6,daviddoria,cloud3 -np 3
<br>
hello-mpi
<br>
Process 1 on daviddoria out of 3
<br>
Process 2 on cloud3 out of 3
<br>
Process 0 on cloud6 out of 3
<br>
<p><p>I am trying to get a parallel application called Paraview working with these
<br>
three machines. Paraview is installed identically on each. As a test, I
<br>
wanted to get it working with two at a time first.
<br>
<p><p>With cloud3, everything goes smoothly, that is, I tell Paraview to start the
<br>
server with
<br>
<p>ssh cloud3 mpirun -H cloud3 pvserver
<br>
<p>and to connect to the server on cloud3, and I get the following (expected)
<br>
output:
<br>
<p><p>Listen on port: 11111
<br>
<p>&nbsp;Waiting for client...
<br>
<p>&nbsp;Client connected.
<br>
<p><p>When I try the same thing on cloud6, it again goes smoothly
<br>
<p>(I tell Paraview to start the server with
<br>
<p>ssh cloud6 mpirun -H cloud6 pvserver
<br>
<p>and connect to the server on cloud6)
<br>
<p><p>Now for the real test...
<br>
<p>I tell Paraview to start the server with
<br>
<p>ssh cloud6 mpirun -H cloud6,cloud3 -np 2 pvserver
<br>
<p>and connect to the server on cloud6
<br>
<p><p>This again connects successfully. However, if I do the reverse:
<br>
<p><p>ssh cloud3 mpirun -H cloud3,cloud6 -np 2 pvserver
<br>
<p>and connect to the server on cloud3
<br>
<p><p>&nbsp;it tries and tries for 60 seconds but it can't connect. I just see a bunch
<br>
of &quot;Failed to connect to server on cloud3&quot; errors.
<br>
<p><p>Does anyone have any idea what could cause this asymmetric behavior?
<br>
<p><p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10185.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
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
