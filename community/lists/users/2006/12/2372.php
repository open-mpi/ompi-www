<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 15 16:59:13 2006" -->
<!-- isoreceived="20061215215913" -->
<!-- sent="Fri, 15 Dec 2006 16:58:59 -0500" -->
<!-- isosent="20061215215859" -->
<!-- name="Nader Ahmadi" -->
<!-- email="a_nader_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI output problem, for IBM AIX 5.3" -->
<!-- id="BAY102-DAV805FBD53726C58CE757908DD40_at_phx.gbl" -->
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
<strong>From:</strong> Nader Ahmadi (<em>a_nader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 16:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<li><strong>Previous message:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>OpenMPI output issues when using IBM AIX 5.3
<br>
<p>We have recently installed OpenMPI 1.1.2 (see attacched, ompi_inf -a output for detail). 
<br>
<p>on an IBM AIX 5.3. We had no problem during installation and configration. &quot;ompi_info -a&quot; runs with no problem.
<br>
<p>Running our application we got no error or output from &quot;printf&quot;, or &quot;cout&quot;.
<br>
<p>So, we wrote a simple 10 line program, which basicly setup mpi and does a 
<br>
<p>&quot;printf&quot; and &quot;cout&quot;. 
<br>
<p>We still didn't get any output from this program, when using MPI in a none debug mode.
<br>
<p>I find out that we get the output from this simple program if we add
<br>
<p>&quot;--debug-daemons&quot; to the mpirun commands.
<br>
<p>But, still for a more complex program we don't get any output even with  the &quot;--debug-daemons&quot; flag.
<br>
<p>My question are 
<br>
<p>1 - why do we need a debug flag to get any output?
<br>
<p>2 - does anyone has any recommendation on how to build an mpi
<br>
<p>application for IBM AIX 5.3 to get the output, without any debug flag.
<br>
<p>Thanks for any comments
<br>
<p>Nader,
<br>
<p><p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2372/testMPI.log">testMPI.log</a>
</ul>
<!-- attachment="testMPI.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<li><strong>Previous message:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
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
